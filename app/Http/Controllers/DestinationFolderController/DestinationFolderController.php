<?php

namespace App\Http\Controllers\DestinationFolderController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationFolderController extends Controller
{
    //
    public function showDestinationFolder(){
        return view('destination-folder.show-destination-folder');
    }
    public function showDestinationFolderDescription(){
        return view('destination-folder.show-destination-folder-description');
    }
    public function viewDestinationFolder(){
        return view('destination-folder.view-destination-folder');
    }
    public function addDestinationFolder(){
        return view('destination-folder.add-destination-folder');
    }
    public function editDestinationFolder(){
        return view('destination-folder.edit-destination-folder');
    }
}
