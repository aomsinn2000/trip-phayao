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
    public function showActivityDescription(){
        return view('activity.show-activity-description');
    }
    public function addActivity(){
        return view('activity.add-activity');
    }
    public function editActivity(){
        return view('activity.edit-activity');
    }
    public function viewActivity(){
        return view('activity.view-activity');
    }

}
