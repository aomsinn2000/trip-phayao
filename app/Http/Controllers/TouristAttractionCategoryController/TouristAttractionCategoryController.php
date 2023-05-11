<?php

namespace App\Http\Controllers\TouristAttractionCategoryController;

use App\Http\Controllers\Controller;
use App\Models\Tag\Tag;
use App\Models\TouristAttraction\TouristAttraction;
use App\Models\TouristAttractionCategory\TouristAttractionCategory;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class TouristAttractionCategoryController extends Controller
{

    public function showTouristAttractionByCategory($name)
    {
        $category = TouristAttractionCategory::with('touristAttractions')->where('name_th', $name)->where('is_status', 1)->first();
        $total = count($category->touristAttractions);
        $touristAttractions = TouristAttraction::where('tourist_attraction_category_id', $category->id)
            ->where('is_status', 1)
            ->get();
            
        return view('tourist-attraction-category.show-tourist-attraction', compact('category', 'total', 'touristAttractions'));
    }

    public function showTouristAttractionInCategory(Request $request)
    {
        $category = $request->category;
        $sort = $request->sort;
        $keyword = $request->keyword;
        $limit = $request->limit ?? 8;
        $touristAttraction = TouristAttraction::where('is_status', 1)
            ->whereHas('touristAttractionCategory', function ($query) use ($category) {
                $query->where('id', $category);
            })
            ->when($sort != null, function ($query) use ($sort) {
                if ($sort == 1) {
                    $query->orderBy('created_at', 'desc');
                } elseif ($sort == 2) {
                    $query->whereMonth('created_at', Carbon::now()->month)->orderBy('created_at', 'desc'); //ในเดือนปัจจุบันเท่านั้น
                    // $query->whereBetween('created_at', [Carbon::now()->subMonth(), Carbon::now()])
                    //     ->orderBy('created_at', 'desc');  // นับย้อนหลังตั้งแต่วันที่ปัจจุบันไปยัง30วันที่แล้ว
                }
            }, function ($query) {
                $query->orderBy('created_at', 'asc');
            })
            ->when($keyword != null, function ($query) use ($keyword, $sort) {
                $query->where('name_th', 'like', "%$keyword%");
            });
        $total = $touristAttraction->count();
        $data = $touristAttraction->limit($limit)->get();
        $output = array(
            "data" => $data,
            "total" => $total
        );
        return json_encode($output);
    }

    public function showTouristAttractionDescriptionByCategory($name, $name_ta)
    {
        $attraction = TouristAttraction::with(['touristAttractionCategory', 'touristAttractionImages', 'destinationFolders'])
            ->where('name_th', $name_ta)->first();
        return view('tourist-attraction-category.show-tourist-attraction-description', compact('attraction'));
    }

    public function showTouristAttractionTagsByCategory($name, $name_ta, $name_tag)
    {
        $category = $name;
        $ta = $name_ta;
        $tag = Tag::where('name_th', $name_tag)->with('touristAttractions')->first();
        $total = count($tag->touristAttractions);
        return view('tourist-attraction-category.show-tourist-attraction-tags', compact('category', 'ta', 'tag', 'total'));
    }

    public function viewTouristAttractionCategory()
    {
        return view('tourist-attraction-category.view-tourist-attraction-category');
    }

    public function countTouristAttractionCategory()
    {
        $total = TouristAttractionCategory::count();
        $on = TouristAttractionCategory::where('is_status', 1)->count();
        $off = TouristAttractionCategory::where('is_status', 0)->count();
        $trash = TouristAttractionCategory::onlyTrashed()->count();

        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off,
            "trash" => $trash
        );
        return json_encode($count);
    }

    public function switchTouristAttractionCategory(Request $request)
    {
        $touristAttractionCategory = TouristAttractionCategory::find($request->id);
        $status = !$touristAttractionCategory->is_status;
        $touristAttractionCategory->update([
            "is_status" => $status,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function switchPopularTouristAttractionCategory(Request $request)
    {
        $touristAttractionCategory = TouristAttractionCategory::find($request->id);
        $popular = !$touristAttractionCategory->is_popular;
        $touristAttractionCategory->update([
            "is_popular" => $popular,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function touristAttractionCategoryAllDataTable(Request $request)
    {
        $tac = TouristAttractionCategory::with('touristAttractions')->get();
        $touristAttractionCategory = $tac->map(function ($item) {
            $item->total = $item->touristAttractions->count();
            return $item;
        });
        $output = array(
            "data" => $touristAttractionCategory
        );
        return json_encode($output);
    }

    public function touristAttractionCategoryOnDataTable(Request $request)
    {
        $tac = TouristAttractionCategory::with('touristAttractions')->where('is_status', 1)->get();
        $touristAttractionCategory = $tac->map(function ($item) {
            $item->total = $item->touristAttractions->count();
            return $item;
        });
        $output = array(
            "data" => $touristAttractionCategory
        );
        return json_encode($output);
    }

    public function touristAttractionCategoryOffDataTable(Request $request)
    {
        $tac = TouristAttractionCategory::with('touristAttractions')->where('is_status', 0)->get();
        $touristAttractionCategory = $tac->map(function ($item) {
            $item->total = $item->touristAttractions->count();
            return $item;
        });
        $output = array(
            "data" => $touristAttractionCategory
        );
        return json_encode($output);
    }

    public function touristAttractionCategoryTrashDataTable()
    {
        $touristAttractionCategory = TouristAttractionCategory::onlyTrashed()->get();
        $output = array(
            "data" => $touristAttractionCategory
        );
        return json_encode($output);
    }

    public function addTouristAttractionCategory()
    {
        $tac = TouristAttractionCategory::withTrashed()->orderBy('category_no', 'DESC')->get();
        $number = $tac->map(function ($item) {
            return $item->category_no;
        })->first();
        if ($number == null) {
            $category_no = 'CP' . '001';
        } else {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $category_no = 'CP' . $number;
        }
        // dd($category_no);
        return view('tourist-attraction-category.add-tourist-attraction-category', compact('category_no'));
    }

    public function createTouristAttractionCategory(Request $request)
    {
        $request->validate([
            // 'name_th' => 'required|unique:tourist_attraction_categories',
            'name_th' => [
                'required',
                Rule::unique('tourist_attraction_categories')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            // 'name_en' => 'required|unique:tourist_attraction_categories',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ], [
            'name_th.required' => 'โปรดตั้งชื่อหมวดหมู่.',
            'name_th.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            // 'name_en.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาอังกฤษ.',
            // 'name_en.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_en . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->image->storeAs('images/TouristAttractionCategories', strtolower($request->category_no) . '-' . uniqid() . '.' . $request->image->extension());
        } else {
            $image = null;
        }
        Log::info($request);
        $creator = Auth::user()->account_name;
        TouristAttractionCategory::create([
            'category_no' => $request->category_no,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'is_popular' => $request->is_popular ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'image' => $image,
            'creator' => $creator
        ]);

        return redirect('/tourist-attraction-categories/');
    }

    public function deleteTouristAttractionCategory(Request $request)
    {
        $delete = TouristAttractionCategory::find($request->id);
        if ($delete->touristAttractions->isEmpty()) {
            $delete->update([
                'editor' => Auth::user()->account_name
            ]);
            Storage::delete($delete->image);
            $delete->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->with('error', 'ลบประเภทท่องเที่ยวนี้ไม่ได้เนื่องจากยังมีสถานที่ท่องเที่ยวใช้อยู่');
        }
    }

    public function deleteTouristAttractionCategoryById($id)
    {
        $delete = TouristAttractionCategory::with('touristAttractions')->find($id);
        if ($delete->touristAttractions->isEmpty()) {
            $delete->update([
                'editor' => Auth::user()->account_name
            ]);
            Storage::delete($delete->image);
            $delete->delete();
            return redirect('/tourist-attraction-categories/');
        } else {
            return redirect()->back()->with('error', 'ลบประเภทท่องเที่ยวนี้ไม่ได้เนื่องจากยังมีสถานที่ท่องเที่ยวใช้อยู่');
        }
    }

    public function editTouristAttractionCategory($id)
    {
        $touristAttractionCategory = TouristAttractionCategory::find($id);
        return view('tourist-attraction-category.edit-tourist-attraction-category', compact('touristAttractionCategory'));
    }

    public function saveUpdateTouristAttractionCategory(Request $request, $id)
    {
        $request->validate([
            'name_th' => ['required', Rule::unique('tourist_attraction_categories')->ignore($id)],
            // 'name_en' => ['required', Rule::unique('tourist_attraction_categories')->ignore($id)],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ], [
            'name_th.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาไทย.',
            'name_th.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            // 'name_en.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาอังกฤษ.',
            // 'name_en.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_en . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.'
        ]);
        $updateTac = TouristAttractionCategory::find($id);
        if ($request->hasFile('image')) {
            Storage::delete($updateTac->image);
            $image = $request->image->storeAs('images/TouristAttractionCategories', strtolower($updateTac->category_no) . '-' . uniqid() . '.' . $request->image->extension());
        } elseif ($request->image_delete == '1') {
            Storage::delete($updateTac->image);
            $image = null;
        } else {
            $image = $updateTac->image;
        }
        $editor = Auth::user()->account_name ?? Auth::user()->id;
        $updateTac->update([
            'is_popular' => $request->is_popular ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'image' => $image,
            'editor' => $editor
        ]);
        return redirect('/tourist-attraction-categories/');
    }
}
