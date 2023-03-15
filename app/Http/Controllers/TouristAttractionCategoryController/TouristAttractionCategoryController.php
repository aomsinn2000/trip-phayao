<?php

namespace App\Http\Controllers\TouristAttractionCategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristAttractionCategoryController extends Controller
{
    //

    public function showTouristAttractionCategoryHome(){
        return view('tourist-attraction-category.show-tourist-attraction-category-home');
    }

    public function viewTouristAttractionCategory(){
        return view('tourist-attraction-category.view-tourist-attraction-category');
    }

    public function addTouristAttractionCategory(){
        return view('tourist-attraction-category.add-tourist-attraction-category');
    }
    public function editTouristAttractionCategory(){
        return view('tourist-attraction-category.edit-tourist-attraction-category');
    }

}
