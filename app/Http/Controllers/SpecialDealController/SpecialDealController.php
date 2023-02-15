<?php

namespace App\Http\Controllers\SpecialDealController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialDealController extends Controller
{
    //
    public function showSpecialDeal(){
        return view('special-deal.show-special-deal');
    }
    public function showSpecialDealDescription(){
        return view('special-deal.show-special-deal-description');
    }
    public function viewSpecialDeal(){
        return view('special-deal.view-special-deal');
    }
    public function addSpecialDeal(){
        return view('special-deal.add-special-deal');
    }
    public function editSpecialDeal(){
        return view('special-deal.edit-special-deal');
    }




}
