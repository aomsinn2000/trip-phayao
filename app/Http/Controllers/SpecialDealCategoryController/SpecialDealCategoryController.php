<?php

namespace App\Http\Controllers\SpecialDealCategoryController;

use App\Http\Controllers\Controller;
use App\Models\SpecialDeal\SpecialDeal;
use App\Models\SpecialDealCategory\SpecialDealCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class SpecialDealCategoryController extends Controller
{
    //
    public function viewSpecialDealCategory()
    {
        return view('special-deal-category.view-special-deal-category');
    }

    public function countSpecialDealCategory()
    {
        $total = SpecialDealCategory::count();
        $on = SpecialDealCategory::where('is_status', 1)->count();
        $off = SpecialDealCategory::where('is_status', 0)->count();
        $trash = SpecialDealCategory::onlyTrashed()->count();
        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off,
            "trash" => $trash
        );
        return json_encode($count);
    }

    public function switchSpecialDealCategory(Request $request)
    {
        $specialDealCategory = SpecialDealCategory::find($request->id);
        $status = !$specialDealCategory->is_status;
        $specialDealCategory->update([
            'is_status' => $status,
            'editor' => Auth::user()->account_name
        ]);
    }

    public function specialDealCategoryAllDataTable(Request $request)
    {
        $sdc = SpecialDealCategory::with('specialDeals')->get();
        $specialDealCategory = $sdc->map(function ($item) {
            $item->total = $item->specialDeals->count();
            return $item;
        });
        $output = array(
            "data" => $specialDealCategory
        );
        return json_encode($output);
    }

    public function specialDealCategoryOnDataTable(Request $request)
    {
        $sdc = SpecialDealCategory::with('specialDeals')->where('is_status', 1)->get();
        $specialDealCategory = $sdc->map(function ($item) {
            $item->total = $item->specialDeals->count();
            return $item;
        });
        $output = array(
            "data" => $specialDealCategory
        );
        return json_encode($output);
    }

    public function specialDealCategoryOffDataTable(Request $request)
    {
        $sdc = SpecialDealCategory::with('specialDeals')->where('is_status', 0)->get();
        $specialDealCategory = $sdc->map(function ($item) {
            $item->total = $item->specialDeals->count();
            return $item;
        });
        $output = array(
            "data" => $specialDealCategory
        );
        return json_encode($output);
    }

    public function specialDealCategoryTrashDataTable()
    {
        $specialDealCategory = SpecialDealCategory::onlyTrashed()->get();
        $output = array(
            "data" => $specialDealCategory
        );
        return json_encode($output);
    }

    public function addSpecialDealCategory()
    {
        $sdc = SpecialDealCategory::withTrashed()->orderBy('category_no', 'DESC')->get();
        $number = $sdc->map(function ($item) {
            return $item->category_no;
        })->first();
        if ($number == null) {
            $category_no = 'CD' . '001';
        } else {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $category_no = 'CD' . $number;
        }
        // dd($category_no);
        return view('special-deal-category.add-special-deal-category', compact('category_no'));
    }

    public function createSpecialDealCategory(Request $request)
    {
        // dd($request->toArray(), $request->is_status ? 1 : 0);
        $request->validate([
            'name_th' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->image->storeAs('images/SpecialDealCategories', strtolower($request->category_no) . '-' . uniqid() . '.' . $request->image->extension());
        } else {
            $image = null;
        }
        /* dd($image_path); */
        $creator = Auth::user()->account_name;
        SpecialDealCategory::create([
            'category_no' => $request->category_no,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'is_status' => $request->is_status ? 1 : 0,
            'image' => $image,
            'creator' => $creator
        ]);
        return redirect('/special-deal-categories/');
    }

    public function deleteSpecialDealCategory(Request $request)
    {
        $id = $request->id;
        $deleter = Auth::user()->account_name;
        $delete = SpecialDealCategory::find($id);
        $delete->update([
            'editor' => $deleter
        ]);
        Storage::delete($delete->image);
        $delete->delete();
        return redirect()->back();
    }

    public function deleteSpecialDealCategoryById($id)
    {
        $delete = SpecialDealCategory::find($id);
        $delete->update([
            'editor' => Auth::user()->account_name
        ]);
        Storage::delete($delete->image);
        $delete->delete();
        return redirect('/special-deal-categories/');
    }

    public function editSpecialDealCategory($id)
    {
        $specialDealCategory = SpecialDealCategory::find($id);
        // dd($d->toArray());
        return view('special-deal-category.edit-special-deal-category', compact('specialDealCategory'));
    }

    public function updateSpecialDealCategory(Request $request, $id)
    {
        // dd($request->toArray());
        $updateSDC = SpecialDealCategory::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($updateSDC->image);
            $image = $request->image->storeAs('images/SpecialDealCategories', strtolower($updateSDC->category_no) . '-' . uniqid() . '.' . $request->image->extension());
        } elseif ($request->image_delete == '1') {
            Storage::delete($updateSDC->image);
            $image = null;
        } else {
            $image = $updateSDC->image;
        }
        $editor = Auth::user()->account_name ?? Auth::user()->id;
        $updateSDC->update([
            'is_status' => $request->is_status ? 1 : 0,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'editor' => $editor,
            'image' => $image
        ]);
        // dd($updateSDC->toArray());
        return redirect('/special-deal-categories/');
    }
}
