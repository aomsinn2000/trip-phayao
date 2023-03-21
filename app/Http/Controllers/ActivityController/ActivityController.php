<?php

namespace App\Http\Controllers\ActivityController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //
    public function showActivity(){
        return view('activity.show-activity');
    }
}
