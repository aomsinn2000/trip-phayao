<?php

namespace App\Http\Controllers\DealController;

namespace App\Http\Controllers\DealController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealController extends Controller
{
    //

    public function showDeal(){
        return view('deal.deal');
    }
    public function viewDeal(){
        return view('deal.view-deal');
    }
    public function testdeal(){
        return view('deal.testeal');
    }
}
