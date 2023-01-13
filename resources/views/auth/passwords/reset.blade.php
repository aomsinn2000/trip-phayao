<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>กำหนดรหัสผ่านใหม่</title>

    @include('layouts.head-LinkScript')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sarabun:ital,wght@0,100;0,300;0,400;1,200&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/login/login.css') }}" rel="stylesheet">
</head>

<body>


    <div class="row" style="font-family: 'Sarabun', sans-serif;">
        <div class="col-xl-6">
            <img class="img-login text-center" src="https://bo.al-hamidiyah.sch.id/assets/file/article/1588224123.jpg" alt="">
            <br>
        </div>

        <div class="col-xl-6 justify-content-center">
            {{-- <div style="padding-top: 8px"></div> --}}
            <div class="form-login">
                <img class="img-logo" src="{{ asset('assets/image/logo-phayao.png') }}" alt="">
                <br><br>
                <h2 style="text-align: center; color:#262262;"><b>ยินดีต้อนรับ</b></h2><br>
                <p class="text-login">กำหนดรหัสผ่านใหม่อย่างน้อย 6 ตัวอักษร</p><br>
                <form>
                    <div class="form-outline mb-3">
                        <input type="password" id="form2Example1" class="form-control input-email" placeholder="กรอกรหัสผ่าน" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-5">
                        <input type="password" id="form2Example2" class="form-control input-password" placeholder="กรอกรหัสผ่านอีกครั้ง" />
                    </div>
                    <a href="{{url('/')}}" type="button" class="btn btn-info btn-signIn mb-4">ตกลง</a>

                </form>
            </div>
        </div>
    </div>






   {{-- โค้ดต้นฉบับ laravel --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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






</body>

</html>
