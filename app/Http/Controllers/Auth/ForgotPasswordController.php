<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showForgotPassword()
    {
        return view('auth.passwords.forgotPassword');
    }

    public function handle(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc'
        ]);

        $user = User::where('email', $request->email)->exists();

        if ($user) {
            $token = Str::uuid();
            $email = $request->email;
            DB::table("password_resets")->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);

            try {
                Mail::send('auth.passwords.email', ['token' => $token, 'email' => $email], function ($message) use ($request) {
                    $message->to($request->email);
                    $message->subject('Reset PassWord');
                });
            } catch (Exception $e) {
                Log::error($e->getMessage());
                return redirect()->back()->with('error', 'ข้อผิดพลาดบางอย่าง');
            }
        }
        return redirect()->back()->with('error', 'ไม่พบอีเมลล์นี้ โปรดลองใหม่อีกครั้ง');
        // อย่าลืมมาลองfunctionนี้ด้วย
    }

    public function showSentEmail()
    {
        return view('auth.passwords.sendEmail');
    }

    public function linkReset()
    {
        return view('auth.passwords.email');
    }
}
