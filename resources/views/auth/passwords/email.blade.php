{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Link Reset Password</title>
    @include('layouts.head-LinkScript')
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sarabun:ital,wght@0,100;0,300;0,400;1,200&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/login/login.css') }}" rel="stylesheet">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body  style="font-family: 'Sarabun', sans-serif;" marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <!--100% body table-->
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:60px;">&nbsp;</td>
                    </tr>
                    {{-- <tr>
                        <td style="text-align:center;">
                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
                            <img width="60" src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png" title="logo" alt="logo">
                          </a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td >&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" class="rounded-5" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr style="border-radius: 20px;">
                                    <td style="height:5px; background-color:#00AEEF; border-top-left-radius: 20px; border-top-right-radius: 20px;color:#fff;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 5px;">
                                        <img  width="150" src="{{asset('assets/image/logo-phayao.png')}}" title="logo" alt="logo">
                                        <p><i class="bi bi-arrow-clockwise" style="color:#FCB533; font-size:80px;"></i></p>
                                        <label style="color: #FF0000; "><strong>รีเซตรหัสผ่านใหม่ของคุณ</strong></label>
                                        <p style="color:#505050; margin-top:5px;">มีการขอรีเซ็ตรหัสผ่านของคุณ</p>
                                        <p style="color:#FCB533;"><b>toie1546321@gmail.com</b></p>

                                        <a href="{{url('resetPassword')}}" class="btn btn-info text-white" style="border-radius:10px;">เปลี่ยนรหัสผ่าน</a>
                                        <br>
                                        <p style="margin-top:20px;color:#505050;  font-size: 14px;"><strong>(ลิ้งค์ของคุณจะหมดอายุภายใน 30 นาที หลังจากที่ได้รับอีเมลฉบับนี้)</strong></p>

                                    </td>
                                </tr>
                                <tr style="border-radius: 20px;">
                                    <td style="height:40px; background-color:#00AEEF; font-size: 14px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;color:#fff;">&nbsp;หากคุณไม่ได้มีการขอรีเซ็ตรหัสผ่าน คุณสามารถละทิ้งอีเมลนี้ และลงชื่อเข้าใช้ด้วยรหัสผ่านเดิมได้</td>
                                </tr>
                            </table >
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>www.phayaotrip.com</strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:90px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--/100% body table-->
</body>

</html>
