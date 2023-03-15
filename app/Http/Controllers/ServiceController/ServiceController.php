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
    public function showServiceCategory(){
        return view('service.show-service-category');
    }
    public function showServiceDescription(){
        return view('service.show-service-description');
    }
    public function viewService(){
        return view('service.view-service');
    }
    public function addService(){
        return view('service.add-service');
    }
    public function editService(){
        return view('service.edit-service');
    }
}
