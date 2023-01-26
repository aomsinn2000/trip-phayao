<?php

namespace App\Http\Controllers\TouristAttractionController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristAttractionController extends Controller
{
    public function showTouristAttraction(){
        return view('touristAttraction.show-touristAttraction');
    }

    public function touristAttractionDescription(){
        return view('touristAttraction.show-touristAttractionDescription');
    }

    public function viewTouristAttraction(){
        return view('TouristAttraction.view-touristAttraction');
    }

    public function addTouristAttraction(){
        return view('TouristAttraction.add-touristAttraction');
    }

    public function editTouristAttraction(){
        return view('TouristAttraction.edit-touristAttraction');
    }
}
