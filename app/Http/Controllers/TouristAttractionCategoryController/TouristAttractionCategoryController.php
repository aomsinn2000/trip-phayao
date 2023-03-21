<?php

namespace App\Http\Controllers\TouristAttractionCategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristAttractionCategoryController extends Controller
{
    //
    public function viewTouristAttractionCategory(){
        return view('TouristAttractionCategory.view-TouristAttractionCategory');
    }

    public function addTouristAttractionCategory(){
        return view('TouristAttractionCategory.add-TouristAttractionCategory');
    }
    public function editTouristAttractionCategory(){
        return view('TouristAttractionCategory.edit-TouristAttractionCategory');
    }
}
