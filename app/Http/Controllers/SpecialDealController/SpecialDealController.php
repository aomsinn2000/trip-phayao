<?php

namespace App\Http\Controllers\SpecialDealController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialDealController extends Controller
{
    //
    public function showDeal(){
        return view('specialDeal.deal');
    }
    public function viewDeal(){
        return view('specialDeal.view-deal');
    }
    public function addDeal(){
        return view('specialDeal.add-deal');
    }
    public function editDeal(){
        return view('specialDeal.edit-deal');
    }
}
