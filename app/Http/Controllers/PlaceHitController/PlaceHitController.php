<?php

namespace App\Http\Controllers\PlaceHitController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaceHitController extends Controller
{
    //
    public function placeHit(){
        return view('place-hit.place-hit');
    }

    public function descriptionShow(){
        return view('place-hit.description-place-hit');
        
    }
}
