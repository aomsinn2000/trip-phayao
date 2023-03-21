<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use App\Models\DestinationFolder\DestinationFolder;
use App\Models\HomeBanner\HomeBanner;
use Illuminate\Http\Request;
use App\Models\SpecialDeal\SpecialDeal;
use App\Models\TouristAttractionCategory\TouristAttractionCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $touristAttractionCategories = TouristAttractionCategory::where('is_status', 1)->where('is_popular', 1)->get();
        $homeBanners = HomeBanner::where('is_status', 1)->get();
        $specialDeals = SpecialDeal::where('is_status', 1)->where('is_popular', 1)->get();
        $destinationFolders = DestinationFolder::where('is_status', 1)->get();
        return view('home.home', compact('touristAttractionCategories', 'homeBanners', 'specialDeals', 'destinationFolders'));
    }

    public function viewBanner()
    {
        return view('home.view-banner');
    }

    public function countHomeBanner()
    {
        $total = HomeBanner::count();
        $on = HomeBanner::where('is_status', 1)->count();
        $off = HomeBanner::where('is_status', 0)->count();
        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off
        );
        return json_encode($count);
    }

    public function switchActiveHomeBanner(Request $request)
    {
        $homeBanner = HomeBanner::find($request->id);
        $active = !$homeBanner->is_active;
        HomeBanner::where('id', '!=', $homeBanner->id)
            ->where('is_active', true)
            ->update([
                'is_active' => false,
                'editor' => Auth::user()->account_name,
            ]);
        $homeBanner->update([
            'is_active' => $active,
            'editor' => Auth::user()->account_name,
        ]);
    }

    public function switchStatusHomeBanner(Request $request)
    {
        $homeBanner = HomeBanner::find($request->id);
        $status = !$homeBanner->is_status;
        $homeBanner->update([
            "is_status" => $status,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function deleteHomeBanner(Request $request)
    {
        $delete = HomeBanner::find($request->id);
        // dd($delete);
        Storage::delete($delete->image);
        $delete->delete();
        return redirect()->back();
    }

    public function homeBannerAllDataTable()
    {
        $hb = HomeBanner::get();
        // dd($homeBanner);
        $homeBanner = $hb->map(function ($item) {
            [
                $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });

        $output = array(
            "data" => $homeBanner
        );
        return json_encode($output);
    }

    public function homeBannerOnDataTable()
    {
        $hb = HomeBanner::where('is_status', 1)->get();
        $homeBanner = $hb->map(function ($item) {
            [
                $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });

        $output = array(
            "data" => $homeBanner
        );
        return json_encode($output);
    }

    public function homeBannerOffDataTable()
    {
        $hb = HomeBanner::where('is_status', 0)->get();
        $homeBanner = $hb->map(function ($item) {
            [
                $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });

        $output = array(
            "data" => $homeBanner
        );
        return json_encode($output);
    }

    public function addBanner()
    {
        $month = Carbon::now('Asia/Bangkok')->isoFormat('MM');
        $year = Carbon::now('Asia/Bangkok')->isoFormat('YY');
        // dd($year,$month);
        $hb = HomeBanner::orderBy('home_no', 'DESC')->get();
        $number = $hb->map(function ($item) {
            return $item->home_no;
        })->first();
        // dd($number);
        if (substr($number, 2, 2) == $year) {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $home_no = 'BN' . $year . $month . $number;
        } else {
            $home_no = 'BN' . $year . $month . '001';
        }
        // dd($number, $home_no);
        return view('home.add-banner', compact('home_no'));
    }

    public function createHomeBanner(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:40960'
        ], [
            'image.required' => 'โปรดอัพโหลดรูปปกด้วย',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพเท่านั้น',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 40 mb',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image->storeAs('images/HomeBanners', strtolower($request->home_no) . '-' . uniqid() . '.' . $request->image->extension());
        } else {
            $image = null;
        }
        HomeBanner::create([
            'home_no' => $request->home_no,
            'is_active' => $request->is_active ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image' => $image,
            'link' => $request->link,
            'creator' => Auth::user()->account_name
        ]);
        return redirect('/home-banners/');
    }

    public function editBanner($id)
    {
        $homeBanner = HomeBanner::find($id);
        // dd($homeBanner);
        return view('home.edit-banner', compact('homeBanner'));
    }

    public function deleteHomeBannerById($id)
    {
        $delete = HomeBanner::find($id);
        Storage::delete($delete->image);
        $delete->delete();
        return redirect('/home-banners/');
    }

    public function saveUpdateHomeBanner(Request $request, $id)
    {
        // dd($request->toArray());
        $updateHB = HomeBanner::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($updateHB->image);
            $image = $request->image->storeAs('images/HomeBanners', strtolower($updateHB->home_no) . '-' . uniqid() . '.' . $request->image->extension());
        } elseif ($request->image_delete == '1') {
            Storage::delete($updateHB->image);
            $image = null;
        } else {
            $image = $updateHB->image;
        }
        // dd($image);
        $updateHB->update([
            'is_active' => $request->is_active ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'name' => $request->name,
            'image' => $image,
            'link' => $request->link,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'editor' => Auth::user()->account_name,

        ]);
        return redirect('/home-banners/');
    }
}
