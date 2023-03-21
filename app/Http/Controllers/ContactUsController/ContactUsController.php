<?php

namespace App\Http\Controllers\ContactUsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function showContactUs(){
        return view('contact-us.show-contact-us');
    }
}
