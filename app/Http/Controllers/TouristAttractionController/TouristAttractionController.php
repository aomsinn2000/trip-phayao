<?php

namespace App\Http\Controllers\TouristAttractionController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    public function showTouristAttraction(){
        return view('tourist-attraction.show-tourist-attraction');
    }
    public function showTouristAttractionTags(){
        return view('tourist-attraction.show-tourist-attraction-tags');
    }

    public function showTouristAttractionDescription(){
        return view('tourist-attraction.show-tourist-attraction-description');
    }

    public function viewTouristAttraction(){
        return view('tourist-attraction.view-tourist-attraction');
    }

    public function addTouristAttraction(){
        return view('tourist-attraction.add-tourist-attraction');
    }

    public function editTouristAttraction(){
        return view('tourist-attraction.edit-tourist-attraction');
    }
}
