<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }
    public function viewBanner(){
        return view('home.view-banner');
    }
    public function addBanner(){
        return view('home.add-banner');
    }
    public function editBanner(){
        return view('home.edit-banner');
    }
}
