<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function showHome(){
        return view('home.home');
    }


    public function testnav(){
        return view('layouts.navbar');
    }


}
