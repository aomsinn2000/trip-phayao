<?php

namespace App\Http\Controllers\SpecialDealController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialDealController extends Controller
{
    //
    public function showSpecialDeal(){
        return view('specialDeal.show-SpecialDeal');
    }
    public function viewSpecialDeal(){
        return view('specialDeal.view-specialDeal');
    }
    public function addSpecialDeal(){
        return view('specialDeal.add-specialDeal');
    }
    public function editSpecialDeal(){
        return view('specialDeal.edit-specialDeal');
    }




}
