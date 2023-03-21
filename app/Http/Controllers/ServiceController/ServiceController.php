<?php

namespace App\Http\Controllers\ServiceController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function showService(){
        return view('service.show-service');
    }
}
