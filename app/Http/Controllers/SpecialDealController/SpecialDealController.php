<?php

namespace App\Http\Controllers\SpecialDealController;

use App\Http\Controllers\Controller;
use App\Models\SpecialDeal\SpecialDeal;
use App\Models\SpecialDealCategory\SpecialDealCategory;
use App\Models\SpecialDealImage\SpecialDealImage;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SpecialDealController extends Controller
{
    //
    public function showSpecialDeal()
    {
        $specialDeal = SpecialDeal::with('specialDealCategory')->get();
        return view('special-deal.show-special-deal', compact('specialDeal'));
    }

    public function showSpecialDealDescription($name)
    {
        $deal = SpecialDeal::where('name_th', $name)->with(['specialDealCategory', 'specialDealImages'])->first();
        $start_date = $deal->start_date ? Carbon::parse($deal->start_date)->addYear(543)->locale('th')->isoFormat('D MMMM Y') : '';
        $end_date = $deal->end_date ? Carbon::parse($deal->end_date)->addYear(543)->locale('th')->isoFormat('D MMMM Y') : '';
        return view('special-deal.show-special-deal-description', compact('deal', 'start_date', 'end_date'));
    }

    public function searchSpecialDeal(Request $request)
    {
        $keyword = $request->get('word');
        $deals = SpecialDeal::with('specialDealCategory')
            ->where('name_th', 'like', "%$keyword%")
            ->get()->toArray();
        return response()->json($deals);
    }

    public function viewSpecialDeal()
    {
        $specialDealCategory = SpecialDealCategory::get();
        return view('special-deal.view-special-deal', compact('specialDealCategory'));
    }

    public function specialDealAllDataTable(Request $request)
    {
        $createDate = $request->create_date;
        $keyword = $request->keyword;
        $category = $request->category;
        $total = SpecialDeal::with('specialDealCategory')->count();
        $specialDeal = SpecialDeal::with('specialDealCategory')
            ->when($createDate != null, function ($query) use ($createDate) {
                $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
            })
            ->when($category != 'ทั้งหมด', function ($query) use ($category) {
                $query->whereHas('specialDealCategory', function ($query) use ($category) {
                    $query->where('name_th', 'like', "%$category%");
                });
            })
            ->when($keyword != null, function ($query) use ($keyword, $createDate) {
                $query->where('deal_no', 'like', "%$keyword%")->orWhere('name_th', 'like', "%$keyword%");
                if ($createDate != null) {
                    $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
                }
            });

        $output = array(
            "draw" => $request->draw,
            "recordsTotal" => $total,
            "recordsFiltered" => $specialDeal->get()->count(),
            "data" => $specialDeal->get()->map(function ($item) {
                [
                    $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                    $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                    $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                    $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
                ];
                return $item;
            }),
        );
        return json_encode($output);
    }

    public function specialDealOnDataTable(Request $request)
    {
        $createDate = $request->create_date;
        $keyword = $request->keyword;
        $category = $request->category;
        $total = SpecialDeal::with('specialDealCategory')->where('is_status', 1)->count();
        $specialDeal = SpecialDeal::with('specialDealCategory')->where('is_status', 1)
            ->when($createDate != null, function ($query) use ($createDate) {
                $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
            })
            ->when($category != 'ทั้งหมด', function ($query) use ($category) {
                $query->whereHas('specialDealCategory', function ($query) use ($category) {
                    $query->where('name_th', 'like', "%$category%");
                });
            })
            ->when($keyword != null, function ($query) use ($keyword, $createDate) {
                $query->where('deal_no', 'like', "%$keyword%")->orWhere('name_th', 'like', "%$keyword%");
                if ($createDate != null) {
                    $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
                }
            });

        $output = array(
            "draw" => $request->draw,
            "recordsTotal" => $total,
            "recordsFiltered" => $specialDeal->get()->count(),
            "data" => $specialDeal->get()->map(function ($item) {
                [
                    $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                    $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                    $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                    $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
                ];
                return $item;
            }),
        );
        return json_encode($output);
    }

    public function specialDealOffDataTable(Request $request)
    {
        $createDate = $request->create_date;
        $keyword = $request->keyword;
        $category = $request->category;
        $total = SpecialDeal::with('specialDealCategory')->where('is_status', 0)->count();
        $specialDeal = SpecialDeal::with('specialDealCategory')->where('is_status', 0)
            ->when($createDate != null, function ($query) use ($createDate) {
                $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
            })
            ->when($category != 'ทั้งหมด', function ($query) use ($category) {
                $query->whereHas('specialDealCategory', function ($query) use ($category) {
                    $query->where('name_th', 'like', "%$category%");
                });
            })
            ->when($keyword != null, function ($query) use ($keyword, $createDate) {
                $query->where('deal_no', 'like', "%$keyword%")->orWhere('name_th', 'like', "%$keyword%");
                if ($createDate != null) {
                    $query->whereDate('created_at', Carbon::createFromFormat('Y-m-d', $createDate));
                }
            });

        $output = array(
            "draw" => $request->draw,
            "recordsTotal" => $total,
            "recordsFiltered" => $specialDeal->get()->count(),
            "data" => $specialDeal->get()->map(function ($item) {
                [
                    $item->start_date = $item->start_date ? Carbon::parse($item->start_date)->addYear(543)->format('d/m/Y ') : '',
                    $item->end_date = $item->end_date ? Carbon::parse($item->end_date)->addYear(543)->format('d/m/Y') : '',
                    $item->created_at = $item->created_at ? Carbon::parse($item->created_at)->addYear(543) : '',
                    $item->updated_at = $item->updated_at ? Carbon::parse($item->updated_at)->addYear(543) : '',
                ];
                return $item;
            }),
        );
        return json_encode($output);
    }

    public function countSpecialDeal()
    {
        $total = SpecialDeal::count();
        $on = SpecialDeal::where('is_status', 1)->count();
        $off = SpecialDeal::where('is_status', 0)->count();
        $count = array(
            "total" => $total,
            "on" => $on,
            "off" => $off
        );
        return json_encode($count);
    }

    public function switchPopularSpecialDeal(Request $request)
    {
        $specialDeal = SpecialDeal::find($request->id);
        $popular = !$specialDeal->is_popular;
        $specialDeal->update([
            "is_popular" => $popular,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function switchStatusSpecialDeal(Request $request)
    {
        $specialDeal = SpecialDeal::find($request->id);
        $status = !$specialDeal->is_status;
        $specialDeal->update([
            "is_status" => $status,
            "editor" => Auth::user()->account_name
        ]);
    }

    public function addSpecialDeal()
    {
        $specialDealCategory = SpecialDealCategory::where('is_status', 1)->get();
        $month = Carbon::now('Asia/Bangkok')->isoFormat('MM');
        $year = Carbon::now('Asia/Bangkok')->isoFormat('YY');
        $sd = SpecialDeal::orderBy('deal_no', 'DESC')->get();
        $number = $sd->map(function ($item) {
            return $item->deal_no;
        })->first();
        if (substr($number, 1, 2) == $year) {
            $number = substr($number, -3);
            $number = sprintf('%03d', $number + 1);
            $deal_no = 'D' . $year . $month . $number;
        } else {
            $deal_no = 'D' . $year . $month . '001';
        }
        // dd($deal_no);
        return view('special-deal.add-special-deal', compact('specialDealCategory', 'deal_no'));
    }

    public function calculateByAjax(Request $request)
    {
        $price = $request->price;
        $discount = $request->discount;

        if ($request->discount_type == '%') {
            $discountprice = $price - ($price * $discount / 100);
        } else {
            $discountprice = ($request->price - $request->discount);
        }
        return response()->json($discountprice);
    }

    public function createSpecialDeal(Request $request)
    {
        // dd($request->toArray());
        $request->validate([
            'name_th' => 'required|unique:special_deals',
            // 'name_en' => 'required|unique:tourist_attraction_categories',
            'special_deal_category_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            // 'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'images[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240|max:10'
        ], [
            'name_th.required' => 'โปรดตั้งชื่อดีลพิเศษ.',
            'name_th.unique' => 'มีชื่อดีล  ' . $request->name_th . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            // 'name_en.required' => 'โปรดตั้งชื่อหมวดหมู่ภาษาอังกฤษ.',
            // 'name_en.unique' => 'มีชื่อหมวดหมู่  ' . $request->name_en . '  อยู่แล้วกรุณาตั้งชื่อใหม่',
            'special_deal_category_id.required' => 'โปรดเลือกหมวดหมู่',
            'price.required' => 'โปรดใส่ราคาของดีล',
            'discount.required' => 'โปรดใส่ส่วนลด',
            // 'cover_image.required' => 'โปรด Upload ภาพปกด้วย',
            'cover_image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'cover_image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'cover_image.max' => 'รูปภาพต้องขนาดไม่เกิน 5 mb.',
            'image.image' => 'โปรดเลือกไฟล์รูปภาพ.',
            'image.mimes' => 'ไฟล์ภาพต้องนามสกุล jpeg, png, jpg, gif, svg เท่านั้น',
            'image.max' => 'รูปภาพต้องขนาดไม่เกิน 10 mb.'
        ]);
        // dd($request->toArray());
        $total_image = empty($request->images) ? 0 : count($request->images);
        // dd($request->toArray(), ($request->images) > 10, count($request->images), count($request->images) > 10);
        if ($total_image > 10) {
            return redirect()->back()->with('error', 'รูปเกิน10แล้ว โปรดเพิ่มรูปใหม่อย่าให้เกิน10');
        }

        if ($request->hasFile('cover_image')) {
            // $image_path = $request->cover_image->storeAs('images/SpecialDeals/'.$request->deal_no, $request->cover_image->getClientOriginalName());
            $cover_image = $request->cover_image->storeAs('images/SpecialDeals/' . $request->deal_no,  strtolower($request->deal_no) . '-' . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } else {
            $cover_image = null;
        }
        // dd($request->toArray(), $request->cover_image, $image_path);
        // dd($request->toArray(), $request->images, count($request->images));
        $creator = Auth::user()->account_name;
        $specialDeal = SpecialDeal::create([
            'special_deal_category_id' => $request->special_deal_category_id,
            'is_popular' => $request->is_popular ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'deal_no' => $request->deal_no,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'discount_price' => $request->discount_price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description_th' => $request->description_th,
            'description_en' => $request->description_en,
            'condition_th' => $request->condition_th,
            'condition_en' => $request->condition_en,
            'cover_image' => $cover_image,
            'creator' => $creator,
        ]);
        // dd($specialDeal->toArray(), $specialDeal->cover_image);
        // dd($request->images);
        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $image) {
                $image_path = $image->storeAs('images/SpecialDeals/' . $request->deal_no, strtolower($request->deal_no) . '-' . uniqid() . '.' . $image->extension());
                SpecialDealImage::create([
                    'special_deal_id' => $specialDeal->id,
                    'image' => $image_path
                ]);
            }
        }
        return redirect('/special-deals/');
    }

    public function deleteSpecialDeal(Request $request)
    {

        $delete = SpecialDeal::find($request->id);
        $path = $delete->cover_image;
        $parts = explode('/', $path);
        $folder = implode('/', array_slice($parts, 0, 3));

        Storage::deleteDirectory($folder); // ลบfolderที่เก็บรูปของ idนั้นๆไปเลย
        $delete->delete();
        return redirect()->back();
    }

    public function deleteSpecialDealById($id)
    {
        $delete = SpecialDeal::find($id);
        $path = $delete->cover_image;
        $parts = explode('/', $path);
        $folder = implode('/', array_slice($parts, 0, 3));

        Storage::deleteDirectory($folder); // ลบfolderที่เก็บรูปของ idนั้นๆไปเลย
        $delete->delete();
        return redirect('/special-deals/');
    }

    public function editSpecialDeal($id)
    {
        $specialDeal = SpecialDeal::with('specialDealImages')->find($id);
        $specialDealCategory = SpecialDealCategory::get();
        return view('special-deal.edit-special-deal', compact('specialDeal', 'specialDealCategory'));
    }

    public function deleteSpecialDealImage(Request $request)
    {
        $delete = SpecialDealImage::find($request->id);
        Storage::delete($delete->image);
        $delete->delete();
    }

    public function updateSpecialDeal(Request $request, $id)
    {
        // dd($request->toArray(), $request->images, $request->cover_image);

        $updateSD = SpecialDeal::with('specialDealImages')->find($id);
        $old_images = empty($updateSD->specialDealImages) ? 0 : count($updateSD->specialDealImages);
        $new_images = empty($request->images) ? 0 : count($request->images);
        $max_images = $old_images + $new_images;
        // dd($old_images, $new_images, $max_images);
        if ($max_images > 10) {
            return redirect()->back()->with('error', 'รูปเกิน10แล้ว โปรดเพิ่มรูปใหม่อย่าให้เกิน10');
        }
        // dd($updateSD->cover_image);
        if ($request->hasFile('cover_image')) {
            Storage::delete($updateSD->cover_image);
            $cover_image = $request->cover_image->storeAs('images/SpecialDeals/' . $updateSD->deal_no,  strtolower($updateSD->deal_no) . 'cover-' . uniqid() . '.' . $request->cover_image->extension());
        } elseif ($request->image_delete == 1) {
            Storage::delete($updateSD->cover_image);
            $cover_image = null;
        } else {
            $cover_image = $updateSD->cover_image;
        }
        // dd($cover_image);
        $editor = Auth::user()->account_name;
        $updateSD->update([
            'special_deal_category_id' =>  $request->special_deal_category_id,
            'is_popular' => $request->is_popular ? 1 : 0,
            'is_status' => $request->is_status ? 1 : 0,
            'name_th' => $request->name_th,
            'name_en' => $request->name_en,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'discount' => $request->discount,
            'discount_type' => $request->discount_type,
            'discount_price' => $request->discount_price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description_th' => $request->description_th,
            'description_en' => $request->description_en,
            'condition_th' => $request->condition_th,
            'condition_en' => $request->condition_en,
            'cover_image' => $cover_image,
            'editor' => $editor,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->images as $key => $image) {
                $image_path = $image->storeAs('images/SpecialDeals/' . $updateSD->deal_no, strtolower($updateSD->deal_no) . '-' . uniqid() . '.' . $image->extension());
                // dd($image_path);
                SpecialDealImage::create([
                    'special_deal_id' => $updateSD->id,
                    'image' => $image_path
                ]);
            }
        }
        return redirect('/special-deals/');
    }

    // public function endDateTest()
    // {
    //     $date = SpecialDeal::get();
    //     $today = Carbon::now()->format('d/m/Y');
    //     /* $date = $date->map(function ($item) {
    //         return $item->end_time ? Carbon::parse($item->end_time)->format('d/m/Y ') : '';
    //     }); */


    //     foreach($date as $day){
    //         // $day = $day->end_time ? Carbon::parse($day->end_time)->format('d/m/Y ') : '';
    //         dd($day->end_time);
    //     }
    //     // if ($today == $date) {
    //     // } else {
    //     // }
    //     dd($date->end_time);
    //     /* dd($update); */
    //     dd($date->toArray(), $today);
    // }
}
