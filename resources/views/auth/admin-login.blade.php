<!DOCTYPE html>
<html lang="en" style="overflow:hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - TripPhayao</title>

    @include('layouts.head-LinkScript')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sarabun:ital,wght@0,100;0,300;0,400;1,200&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/login/login.css') }}" rel="stylesheet">
</head>

<body>


    <div class="row" style="font-family: 'Sarabun', sans-serif;">
        <div class="col-xl-6">
            <img class="img-login text-center" src="{{ asset('assets/images/login.png') }}" alt="">
            <br>

        </div>
        <div class="col-xl-6 justify-content-center">
            <div class="form-login">
                <img class="img-logo" src="{{ asset('assets/image/logo-phayao.png') }}" alt="">
                <br><br>
                <h2 style="text-align: center; color:#262262;"><b>ยินดีต้อนรับ</b></h2><br>
                <p class="text-login">เข้าสู่ระบบ</p><br>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}<br />
                    </div>
                @endif
                <form method="POST" action="{{ url('/handle') }}">
                    @csrf
                    <div class="form-outline mb-3">
                        <input type="email" id="form2Example1" class="form-control input-email" placeholder="กรุณากรอกอีเมล" name="email" required />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <input type="password" id="form2Example2" class="form-control input-password" placeholder="กรุณากรอกรหัสผ่าน" name="password" required />
                    </div>
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col-7 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" name="remember" {{ old('remember') ? 'checked' : '' }} />
                                <label class="form-check-label text-remember" for="form2Example31"> จดจำข้อมูลการใช้งานระบบ </label>
                            </div>
                        </div>
                        <div class="col-5">
                            <!-- Simple link -->
                            <a href="{{ url('/forgotPassword') }}" class="text-forgotPass">ลืมรหัสผ่าน?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-info btn-signIn ">เข้าสู่ระบบ</button>
                    <a href="{{ url('/') }}" style="font-size: 12px;">กลับไปหน้าหลัก</a>
                </form>
                <br>
                <p class="text-phone">หากพบปัญหาการเข้าสู่ระบบกรุณาติดต่อ โทร. 000-000-0000</p>
            </div>



            {{-- โค้ดต้นฉบับ laravel --}}
            {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
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

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- end โค้ดต้นฉบับ laravel --}}


        </div>

    </div>

</body>

</html>
