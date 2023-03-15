<?php

namespace App\Http\Controllers\destinationFoldersController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class destinationFoldersController extends Controller
{
    //
    public function viewDestinationFolder(){
        return view('destinationFolder.view-destinationFolder');
    }
    public function addDestinationFolder(){
        return view('destinationFolder.add-destinationFolder');
    }
    public function editDestinationFolder(){
        return view('destinationFolder.edit-destinationFolder');
    }
}
