<?php

namespace App\Http\Controllers\PackageTourController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageTourController extends Controller
{
    //
    public function showPackageTour(){
        return view('package-tour.show-package-tour');
    }
    public function showPackageTourDescription(){
        return view('package-tour.show-package-tour-description');
    }
    public function viewPackageTour(){
        return view('package-tour.view-package-tour');
    }
    public function addPackageTour(){
        return view('package-tour.add-package-tour');
    }
    public function editPackageTour(){
        return view('package-tour.edit-package-tour');
    }
}
