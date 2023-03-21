<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /*  protected $redirectTo = RouteServiceProvider::HOME;  อย่าลืมเปิดตอนทำloginเสร็จ*/
    protected $redirectTo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*  public function __construct()
    {
        $this->middleware('guest')->except('logout'); อย่าลืมเปิดตอนทำloginเสร็จ
    } */

    public function showLogin()
    {
        return view('auth.login');
    }

    public function handle(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        /* dd($request->toArray()); */
        $remember = $request->has('remember')  ? true : false;
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            /* if (Auth::viaRemember()) {
                dd("remem success");
            } else {
                dd("remem fail");
            } */
            return redirect("/home-banners/");
        } else {
            return redirect()->back()->with('error','ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

}
