<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @include('layouts.head-LinkScript')
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Sarabun:ital,wght@0,100;0,300;0,400;1,200&display=swap" rel="stylesheet">
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
                <img class="img-logo" src="{{asset('assets/image/logo-phayao.png')}}" alt="">
                <br><br>
                <h2 style="text-align: center; color:#262262;"><b>ยินดีต้อนรับ</b></h2><br>
                <p class="text-login">เข้าสู่ระบบ</p><br>
                <form>

                    <div class="form-outline mb-3">
                      <input type="email" id="form2Example1" class="form-control input-email" placeholder="กรุณากรอกอีเมล"  />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                      <input type="password" id="form2Example2" class="form-control input-password" placeholder="กรุณากรอกรหัสผ่าน" />
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col-7 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input " type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label text-remember" for="form2Example31"> จดจำข้อมูลการใช้งานระบบ </label>
                        </div>
                      </div>

                      <div class="col-5">
                        <!-- Simple link -->
                        <a href="{{url ('forgotPassword')}}" class="text-forgotPass">ลืมรหัสผ่าน?</a>
                      </div>
                    </div>

                    <!-- Submit button -->
                    <button type="button" class="btn btn-info btn-signIn mb-4">เข้าสู่ระบบ</button>
                </form>


                <br>
                <p class="text-phone">หากพบปัญหาการเข้าสู่ระบบกรุณาติดต่อ โทร. 000-000-0000</p>
            </div>

{{--
            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form2Example1" class="form-control input-email"  />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example2" class="form-control input-password" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                      <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                  </div>

                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>


            </form> --}}







        </div>

    </div>

</body>
</html>
