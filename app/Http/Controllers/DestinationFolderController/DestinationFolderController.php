<?php

namespace App\Http\Controllers\DestinationFolderController;

use App\Http\Controllers\Controller;
use App\Models\DestinationFolder\DestinationFolder;
use App\Models\Tag\Tag;
use App\Models\TouristAttraction\TouristAttraction;
use App\Models\TouristAttractionCategory\TouristAttractionCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DestinationFolderController extends Controller
{
    public function showDestinationFolder($name)
    {
        $destinations = DestinationFolder::where('is_status', 1)->where('name_th', $name)->with(['touristAttractions.touristAttractionCategory'])->first();
        $category = $destinations->touristAttractions->groupBy('tourist_attraction_category_id')->map(function ($group, $categoryId) {
            $category = TouristAttractionCategory::find($categoryId);
            return [
                'id' => $categoryId,
                'name_th' => $category ? $category->name_th : 'Unknown',
            ];
        });
        // dd($category);
        // dd($destinations->toArray());
        return view('destination-folder.show-destination-folder', compact('destinations', 'category'));
    }

    public function showDestinationFolderByCategory($folderId, Request $request)
    {
        $categoryID = $request->get('category_id');
        $ta = TouristAttraction::where('is_status', 1)
            ->where('tourist_attraction_category_id', $categoryID)
            ->whereHas('destinationFolders', function ($query) use ($folderId) {
                $query->where('destination_folder_id', $folderId );
            })
            ->get();
        // dd($ta);
        return response()->json($ta);
    }

    public function showDestinationFolderDescription($name, $name_ta)
    {
        // dd($name,$name_ta);
        $destination = $name;
        $attraction = TouristAttraction::where('name_th', $name_ta)->with('touristAttractionCategory')->first();
        return view('destination-folder.show-destination-folder-description', compact('attraction', 'destination'));
    }

    public function showDestinationFolderDescriptionTag($name, $name_ta, $name_tag)
    {
        // dd($name_ta,$name);
        $destination = $name;
        $attraction = $name_ta;
        $tag = Tag::where('name_th', $name_tag)->with('touristAttractions')->first();
        $total = count($tag->touristAttractions);
        return view('destination-folder.show-destination-folder-description-tags', compact('destination', 'attraction', 'tag', 'total'));
    }

    public function viewDestinationFolder()
    {
        return view('destination-folder.view-destination-folder');
    }

    public function countDestinationFolder()
    {
        $total = DestinationFolder::count();
        $on = DestinationFolder::where('is_status', 1)->count();
        $off = DestinationFolder::where('is_status', 0)->count();
        $trash = DestinationFolder::onlyTrashed()->count();
        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off,
            "trash" => $trash
        );
        return json_encode($count);
    }

    public function switchDestinationFolder(Request $request)
    {
        $destinationFolder = DestinationFolder::find($request->id);
        $status = !$destinationFolder->is_status;
        $destinationFolder->update([
            "is_status" => $status,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function destinationFolderAllDataTable()
    {
        $df = DestinationFolder::get();
        $destinationFolder = $df->map(function ($item) {
            [
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });
        // dd($destinationFolder);

        $output = array(
            "data" => $destinationFolder
        );
        return json_encode($output);
    }

    public function deleteDestinationFolder(Request $request)
    {
        $delete = DestinationFolder::find($request->id);
        $delete->update([
            'editor' => Auth::user()->account_name
        ]);
        Storage::delete($delete->banner_image, $delete->cover_image);
        $delete->delete();
        return redirect()->back();
    }

    public function destinationFolderOnDataTable()
    {
        $df = DestinationFolder::where('is_status', 1)->get();
        $destinationFolder = $df->map(function ($item) {
            [
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });
        // dd($destinationFolder);

        $output = array(
            "data" => $destinationFolder
        );
        return json_encode($output);
    }

    public function destinationFolderOffDataTable()
    {
        $df = DestinationFolder::where('is_status', 0)->get();
        $destinationFolder = $df->map(function ($item) {
            [
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
            ];
            return $item;
        });
        // dd($destinationFolder);

        $output = array(
            "data" => $destinationFolder
        );
        return json_encode($output);
    }

    public function destinationFolderTrashDataTable()
    {
        $df = DestinationFolder::onlyTrashed()->get();
        $destinationFolder = $df->map(function ($item) {
            [
                $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                $item->deleted_at = $item->deleted_at ? Carbon::parse($item->deleted_at)->addYear(543) : '',
            ];
            return $item;
        });
        // dd($destinationFolder);

        $output = array(
            "data" => $destinationFolder
        );
        return json_encode($output);
    }

    public function addDestinationFolder()
    {
        $month = Carbon::now('Asia/Bangkok')->isoFormat('MM');
        $year = Carbon::now('Asia/Bangkok')->isoFormat('YY');
        $des = DestinationFolder::withTrashed()->orderBy('folder_no', 'DESC')->get();
        $number = $des->map(function ($item) {
            return $item->folder_no;
        })->first();
        if (substr($number, 1, 2) == $year) {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $folder_no = 'F' . $year . $month . $number;
        } else {
            $folder_no = 'F' . $year . $month . '001';
        }
        // dd($folder_no);
        return view('destination-folder.add-destination-folder', compact('folder_no'));
    }

    public function createDestinationFolder(Request $request)
    {
        $request->validate([
            'name_th' => 'required|unique:destination_folders',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:40960',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ], [
            'name_th.required' => 'โปรดตั้งชื่อโฟลเดอร์.',
            'name_th.unique' => 'มีชื่อโฟลเดอร์  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'sub_district.required' => 'ระบุตำบล',
            'district.required' => 'ระบุอำเภอ',
            'province.required' => 'ระบุจังหวัด',
            'banner_image.required' => 'โปรด Upload ภาพแบนเนอร์ด้วย',
            'banner_image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'banner_image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'banner_image.max' => 'รูปภาพต้องขนาดไม่เกิน 40 mb.',
            'cover_image.required' => 'โปรด Upload ภาพปกด้วย',
            'cover_image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'cover_image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'cover_image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.',
        ]);
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->banner_image->storeAs('images/DestinationFolders', strtolower($request->folder_no) . '-' . 'banner-' .  uniqid() . '.' . $request->banner_image->extension());
        } else {
            $banner_image = null;
        }

        if ($request->hasFile('cover_image')) {
            $cover_image = $request->cover_image->storeAs('images/DestinationFolders',  strtolower($request->folder_no) . '-' . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } else {
            $cover_image = null;
        }
        // dd($request->toArray(), $banner_image, $cover_image);
        DestinationFolder::create([
            'folder_no' => $request->folder_no,
            'is_status' => $request->is_status ? 1 : 0,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'slogan_th' => $request->slogan_th,
            'slogan_en' => $request->slogan_en,
            'sub_district' => $request->sub_district,
            'district' => $request->district,
            'province' => $request->province,
            'postcode' => $request->postcode,
            'detail_th' => $request->detail_th,
            'detail_en' => $request->detail_en,
            'banner_image' => $banner_image,
            'cover_image' => $cover_image,
            'link' => $request->link,
            'creator' => Auth::user()->account_name
        ]);

        return redirect('/destination-folders/');
    }

    public function editDestinationFolder($id)
    {
        $destinationFolder = DestinationFolder::with('touristAttractions')->find($id);
        return view('destination-folder.edit-destination-folder', compact('destinationFolder'));
    }

    public function deleteDestinationFolderById($id)
    {
        $delete = DestinationFolder::find($id);
        $delete->update([
            'editor' => Auth::user()->account_name
        ]);
        Storage::delete($delete->banner_image, $delete->cover_image);
        $delete->delete();
        return redirect('/destination-folders/');
    }

    public function saveUpdateDestinationFolder(Request $request, $id)
    {
        // dd($request->toArray());
        $updateDF = DestinationFolder::find($id);
        if ($request->hasFile('banner_image')) {
            Storage::delete($updateDF->banner_image);
            $banner_image = $request->banner_image->storeAs('images/DestinationFolders', strtolower($updateDF->folder_no) . '-' . 'banner-' . uniqid() . '.' . $request->banner_image->extension());
        } elseif ($request->banner_delete == 1) {
            Storage::delete($updateDF->banner_image);
            $banner_image = null;
        } else {
            $banner_image = $updateDF->banner_image;
        }

        if ($request->hasFile('cover_image')) {
            Storage::delete($updateDF->cover_image);
            $cover_image = $request->cover_image->storeAs('images/DestinationFolders', strtolower($updateDF->folder_no) . '-' . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } elseif ($request->cover_delete == 1) {
            Storage::delete($updateDF->cover_image);
            $cover_image = null;
        } else {
            $cover_image = $updateDF->cover_image;
        }


        $updateDF->update([
            'is_status' => $request->is_status ? 1 : 0,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'slogan_th' => $request->slogan_th,
            'slogan_en' => $request->slogan_en,
            'sub_district' => $request->sub_district,
            'district' => $request->district,
            'province' => $request->province,
            'postcode' => $request->postcode,
            'detail_th' => $request->detail_th,
            'detail_en' => $request->detail_en,
            'banner_image' => $banner_image,
            'cover_image' => $cover_image,
            'link' => $request->link,
            'editor' => Auth::user()->account_name,
        ]);

        return redirect('/destination-folders/');
    }
}
