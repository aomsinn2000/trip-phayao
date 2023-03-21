<?php

namespace App\Http\Controllers\TouristAttractionController;

use App\Http\Controllers\Controller;
use App\Models\DestinationFolder\DestinationFolder;
use App\Models\Pivot\FolderTouristAttraction;
use App\Models\Tag\Tag;
use App\Models\TouristAttraction\TouristAttraction;
use App\Models\TouristAttractionCategory\TouristAttractionCategory;
use App\Models\TouristAttractionImage\TouristAttractionImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Laravel\Ui\Presets\React;

class TouristAttractionController extends Controller
{
    public function showTouristAttraction()
    {
        return view('tourist-attraction.show-tourist-attraction');
    }

    public function showTouristAttractionTags()
    {
        return view('tourist-attraction.show-tourist-attraction-tags');
    }

    public function showTouristAttractionDescription()
    {
        return view('tourist-attraction.show-tourist-attraction-description');
    }

    public function showTouristAttractionByName($name)
    {
        $find = TouristAttractionCategory::where('name_th', $name);
        dd($name, $find);

        return view('tourist-attraction.show-tourist-attraction',);
    }

    public function touristAttractionDescription()
    {
        return view('tourist-attraction.show-tourist-attraction-description');
    }

    public function viewTouristAttraction()
    {
        return view('tourist-attraction.view-tourist-attraction');
    }

    public function touristAttractionAllDataTable(Request $request)
    {
        $touristAttraction = TouristAttraction::with('touristAttractionCategory')->get();
        $output = array(
            "data" => $touristAttraction,
        );
        // dd($output);
        return json_encode($output);
    }

    public function touristAttractionOnDataTable(Request $request)
    {
        $touristAttraction = TouristAttraction::with('touristAttractionCategory')->where('is_status', 1)->get();
        $output = array(
            "data" => $touristAttraction,
        );
        return json_encode($output);
    }

    public function touristAttractionOffDataTable(Request $request)
    {
        $touristAttraction = TouristAttraction::with('touristAttractionCategory')->where('is_status', 0)->get();
        $output = array(
            "data" => $touristAttraction,
        );
        return json_encode($output);
    }

    public function countTouristAttraction()
    {
        $total = TouristAttraction::count();
        $on = TouristAttraction::where('is_status', 1)->count();
        $off = TouristAttraction::where('is_status', 0)->count();
        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off
        );
        return json_encode($count);
    }

    public function switchTouristAttraction(Request $request)
    {
        $touristAttraction = TouristAttraction::find($request->id);
        $status = !$touristAttraction->is_status;
        $touristAttraction->update([
            "is_status" => $status,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function addTouristAttraction()
    {
        $touristAttractionCategory = TouristAttractionCategory::where('is_status', 1)->get();
        $destinationFolders = DestinationFolder::where('is_status', 1)->get();
        $destinationFolders = $destinationFolders->map(function ($item) {
            return $item->name_th;
        })->toArray();
        // $destinationFoldersJson = json_encode($destinationFolders, JSON_UNESCAPED_UNICODE);
        /* $destinationFolders = [
            'ภูเขา',
            'ธรรมชาติ',
            'วัด',
            'เดินป่า',
            'กางเต้นท์',
            'วัดศรีโคมคำ',
            'กว๊านพะเยา',
        ]; */
        // dd($destinationFolders);



        $month = Carbon::now('Asia/Bangkok')->isoFormat('MM');
        $year = Carbon::now('Asia/Bangkok')->isoFormat('YY');
        $number = TouristAttraction::orderBy('attraction_no', 'DESC')->get()->map(function ($item) {
            return $item->attraction_no;
        })->first();
        if (substr($number, 1, 2) == $year) {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $attraction_no = 'P' . $year . $month . $number;
        } else {
            $attraction_no = 'P' . $year . $month . '001';
        }

        $tag = Tag::get()->map(function ($item) {
            return $item->name_th;
        });
        // dd($tag);
        // dd($attraction_no);
        return view('tourist-attraction.add-tourist-attraction', compact('touristAttractionCategory', 'attraction_no', 'destinationFolders', 'tag'));
    }


    // public function selectFolder()
    // {
    //     $folder = DestinationFolder::get();
    //     // $folder->name_th;
    //     // dd($folder->toArray());
    //     return view('tourist-attraction.add-tourist-attraction', compact('folder'));
    // }

    public function selectFolder()
    {
        $folder = DestinationFolder::get();
        return response()->json($folder);
    }

    public function createTouristAttraction(Request $request)
    {
        // $selectFolders = json_decode($request->select_folders, true);

        // foreach ($selectFolders as $folder) {
        //     $id = $folder['id'];
        //     $name_th = $folder['value'];
        // }
        // dd($request->toArray(), /* $selectFolders,$folder,$id,$name_th */);
        $request->validate([
            'name_th' => 'required|unique:tourist_attractions',
            // 'name_en' => 'required|unique:tourist_attraction_categories',
            'tourist_attraction_category_id' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'images[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240|max:10'
        ], [
            'name_th.required' => 'โปรดตั้งชื่อสถานที่ท่องเที่ยว.',
            'name_th.unique' => 'มีชื่อสถานที่  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            // 'name_en.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาอังกฤษ.',
            // 'name_en.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_en . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'tourist_attraction_category_id.required' => 'โปรดเลือกหมวดหมู่',
            'cover_image.required' => 'โปรด Upload ภาพปกด้วย',
            'cover_image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'cover_image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'cover_image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 10 mb.'
        ]);

        $total_image =  empty($request->images) ? 0 : count($request->images);
        if ($total_image > 10) {
            return redirect()->back()->with('error', 'รูปเกิน10แล้ว โปรดเพิ่มรูปใหม่อย่าให้เกิน10');
        }
        /*  $request->validate([
            // 'name_th' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|max:10'
        ]); */

        if ($request->hasFile('cover_image')) {
            $cover_image = $request->cover_image->storeAs('images/TouristAttractions/' . $request->attraction_no,  strtolower($request->attraction_no) . '-' . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } else {
            $cover_image = null;
        }
        $creator = Auth::user()->account_name;
        $ta = TouristAttraction::create([
            // 'destination_id' => ,
            'attraction_no' => $request->attraction_no,
            'tourist_attraction_category_id' => $request->tourist_attraction_category_id,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'detail_th' => $request->detail_th,
            'detail_en' => $request->detail_en,
            'travel' => $request->travel,
            'season_recommend' => $request->season_recommend,
            'sub_district' => $request->sub_district,
            'district' => $request->district,
            'province' => $request->province,
            'postcode' => $request->postcode,
            'map_link' => $request->map_link,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'travel_th' => $request->travel_th,
            'trevel_en' => $request->travel_en,
            'season_recommend_th' => $request->season_recommend_th,
            'season_recommend_en' => $request->season_recommend_en,
            'description_th' => $request->description_th,
            'desctiption_en' => $request->description_en,
            'cover_image' => $cover_image,
            'is_status' => $request->is_status ? 1 : 0,
            'creator' => $creator,
        ]);
        // dd($touristAttraction->toArray());
        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $image) {
                $image_path = $image->storeAs('images/TouristAttractions/' . $request->attraction_no, strtolower($request->attraction_no) . '-' . uniqid() . '.' . $image->extension());
                TouristAttractionImage::create([
                    'tourist_attraction_id' => $ta->id,
                    'image' => $image_path
                ]);
            }
        }

        if ($request->tags) {
            $tags = json_decode($request->tags);
            foreach ($tags as $t) {
                $tag = Tag::where('name_th', $t)->first();
                if (!$tag) {
                    $tag = Tag::create([
                        'name_th' => $t,
                        'creator' => Auth::user()->account_name
                    ]);
                }
                // dd($tag);
                $ta->touristAttractionTags()->attach($tag);
            }
        }

        // dd($tags, $t, $tag);

        if ($request->select_folders) {
            $selectFolders = json_decode($request->select_folders, true);

            foreach ($selectFolders as $folder) {
                $id = $folder['id'];
                // $name_th = $folder['value'];
                $ta->destinationFolders()->attach($id);
            }
        }

        return redirect('/tourist-attractions/');
    }

    public function deleteTouristAttraction(Request $request)
    {
        $delete = TouristAttraction::find($request->id);
        $path = $delete->cover_image;
        $parts = explode('/', $path);
        $folder = implode('/', array_slice($parts, 0, 3));

        /* $what = array_slice($parts, 0, 4);
        $f = implode('-', array_slice($parts, 0, 4)); */
        // dd($parts, $folder,/*  $what, $f */);
        Storage::deleteDirectory($folder); // ลบfolderที่เก็บรูปของ idนั้นๆไปเลย
        $delete->delete();
        return redirect()->back();
    }

    public function deleteTouristAttractionById($id)
    {
        $delete = TouristAttraction::find($id);
        $path = $delete->cover_image;
        $parts = explode('/', $path);
        $folder = implode('/', array_slice($parts, 0, 3));

        Storage::deleteDirectory($folder); // ลบfolderที่เก็บรูปของ idนั้นๆไปเลย
        $delete->delete();
        return redirect('/tourist-attractions/');
    }

    public function editFolder()
    {
        $folder = DestinationFolder::get();
        $taFolder = TouristAttraction::with('destinationFolders')->find(15);
        $taFolder = $taFolder->destinationFolders;
        // dd($folder->toArray(), $taFolder->toArray());
        return response()->json($folder);
        /* $output = array(
            "folder" => $folder,
            "taFolder" => $taFolder
        );
        return json_encode($output); */
    }

    public function editTouristAttraction($id)
    {
        $touristAttraction =  TouristAttraction::with(['touristAttractionImages', 'destinationFolders', 'touristAttractionTags'])->find($id);
        $touristAttractionCategory = TouristAttractionCategory::where('is_status', 1)->get();

        $touristAttractionTag = $touristAttraction->touristAttractionTags->map(function ($item) {
            return $item->name_th;
        });

        // $touristAttractionTag = $touristAttraction->touristAttractionTags->pluck('name_th')->toArray();

        $tag = Tag::get()->map(function ($item) {
            return $item->name_th;
        });

        // dd($touristAttractionTag,$tag);

        $destinationFolder = $touristAttraction->destinationFolders->map(function ($item) {
            return $item = [
                'id' => $item->id,
                'name_th' => $item->name_th,
            ];
        });

        $selectFolder = DestinationFolder::get()->map(function ($item) {
            return $item = [
                'id' => $item->id,
                'name_th' => $item->name_th,
            ];
        });
        // dd($destinationFolder->toArray());
        return view('tourist-attraction.edit-tourist-attraction', compact('touristAttraction', 'touristAttractionCategory','touristAttractionTag','tag', 'destinationFolder', 'selectFolder'));
    }

    public function deleteTouristAttractionImage(Request $request)
    {
        $delete = TouristAttractionImage::find($request->id);
        Storage::delete($delete->image);
        $delete->delete();
    }

    public function saveUpdateTouristAttraction(Request $request, $id)
    {

        dd($request->toArray());
        $updateTA = TouristAttraction::with('touristAttractionImages')->find($id);
        $validationRules = [
            'cover_image' => [
                'image',
                'mimes:jpeg,png,jpg,gif,svg',
                'max:5120'
            ],
            // other validation rules...
        ];
        if (is_null($updateTA->cover_image)) {
            $validationRules['cover_image'][] = 'required';
        }
        $request->validate(array_merge([
            'name_th' => ['required', Rule::unique('tourist_attractions')->ignore($id)],
            // 'name_en' => 'required|unique:tourist_attraction_categories',
            'tourist_attraction_category_id' => 'required',

            // 'cover_image' => 'required|tourist_attractions' . $id . 'cover_image,null|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'images[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240|max:10'
        ], $validationRules), [
            'name_th.required' => 'โปรดตั้งชื่อสถานที่ท่องเที่ยว.',
            'name_th.unique' => 'มีชื่อสถานที่  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            // 'name_en.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาอังกฤษ.',
            // 'name_en.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_en . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'tourist_attraction_category_id.required' => 'โปรดเลือกหมวดหมู่',
            'cover_image.required' => 'โปรด Upload ภาพปกด้วย',
            'cover_image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'cover_image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'cover_image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 10 mb.'
        ]);


        $old_images = empty($updateTA->touristAttractionImages) ? 0 : count($updateTA->touristAttractionImages);
        $new_images = empty($request->images) ? 0 : count($request->images);
        $max_images = $old_images + $new_images;
        if ($max_images > 10) {
            return redirect()->back()->with('error', 'รูปเกิน10แล้ว โปรดเพิ่มรูปใหม่อย่าให้เกิน10');
        }
        // dd($updateSD->cover_image);
        if ($request->hasFile('cover_image')) {
            Storage::delete($updateTA->cover_image);
            $cover_image = $request->cover_image->storeAs('images/TouristAttractions/' . $updateTA->attraction_no,  strtolower($updateTA->attraction_no) . '-' . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } elseif ($request->image_delete == '1') {
            Storage::delete($updateTA->cover_image);
            $cover_image = null;
        } else {
            $cover_image = $updateTA->cover_image;
        }

        $editor = Auth::user()->account_name;
        $updateTA->update([
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'detail_th' => $request->detail_th,
            'detail_en' => $request->detail_en,
            'tourist_attraction_category_id' => $request->tourist_attraction_category_id,
            'sub_district' => $request->sub_district,
            'district' => $request->district,
            'province' => $request->province,
            'postcode' => $request->postcode,
            'travel_th' => $request->travel_th,
            'travel_en' => $request->travel_en,
            'season_recommend_th' => $request->season_recommend_th,
            'season_recommend_en' => $request->season_recommend_en,
            'description_th' => $request->description_th,
            'description_en' => $request->description_en,
            'cover_image' => $cover_image,
            'is_status' => $request->is_status ? 1 : 0,
            'editor' => $editor,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $image) {
                $image_path = $image->storeAs('images/TouristAttractions/' . $updateTA->attraction_no, strtolower($updateTA->attraction_no) . '-' . uniqid() . '.' . $image->extension());
                // dd($image_path);
                TouristAttractionImage::create([
                    'tourist_attraction_id' => $updateTA->id,
                    'image' => $image_path
                ]);
            }
        }

        // if ($request->select_folders) {
        //     $selectFolders = json_decode($request->select_folders, true);

        //     foreach ($selectFolders as $folder) {
        //         $id = $folder['id'];
        //         // $name_th = $folder['value'];
        //         $updateTA->destinationFolders()->attach($id);
        //     }
        // }

        // $folderIds = [];

        if ($request->select_folders) {
            $selectFolders = json_decode($request->select_folders, true);

            foreach ($selectFolders as $folder) {
                $folderIds[] = $folder['id'];
            }
        }

        $updateTA->destinationFolders()->sync($folderIds);


        return redirect('/tourist-attractions/');
    }
}
