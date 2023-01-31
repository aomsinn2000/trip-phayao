<?php

namespace App\Http\Controllers\LoginController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showLogin(){
       return view('login.login');
    }
    public function showForgotPassword(){
        return view('login.forgotPassword');
     }
    public function showSentEmail(){
        return view('login.sentEmail');
    }
    public function showResetPassword(){
        return view('login.resetPassword');
    }

}
