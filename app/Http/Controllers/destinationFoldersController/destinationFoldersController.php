<?php

namespace App\Http\Controllers\destinationFoldersController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class destinationFoldersController extends Controller
{
    //
    public function viewDestinationFolders(){
        return view('destinationFolders.view-destinationFolders');
    }
    public function addDestinationFolders(){
        return view('destinationFolders.add-destinationFolders');
    }
    public function editDestinationFolders(){
        return view('destinationFolders.edit-destinationFolders');
    }
}
