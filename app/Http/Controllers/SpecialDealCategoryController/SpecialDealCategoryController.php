<?php

namespace App\Http\Controllers\SpecialDealCategoryController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialDealCategoryController extends Controller
{
    //
    public function viewSpecialDealCategory(){
        return view('special-deal-category.view-special-deal-category');
    }

    public function addSpecialDealCategory(){
        return view('special-deal-category.add-special-deal-category');
    }

    public function editSpecialDealCategory(){
        return view('special-deal-category.edit-special-deal-category');
    }
}
