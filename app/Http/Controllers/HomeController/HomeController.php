<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }
}
