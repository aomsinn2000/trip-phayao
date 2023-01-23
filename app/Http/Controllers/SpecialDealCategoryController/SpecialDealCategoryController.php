<?php

namespace App\Http\Controllers\SpecialDealCategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialDealCategoryController extends Controller
{
    //
    public function viewSpecialDealCategory(){
        return view('specialDealCategory.view-specialDealCategory');
    }

    public function addSpecialDealCategory(){
        return view('specialDealCategory.add-specialDealCategory');
    }

    public function editSpecialDealCategory(){
        return view('specialDealCategory.edit-specialDealCategory');
    }
}
