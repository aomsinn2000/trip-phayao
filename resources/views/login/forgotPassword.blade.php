<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ลืมรหัสผ่าน</title>

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
                <p class="text-login">ลืมรหัสผ่านของคุณใช่หรือไม่ ?</p><br>
                <form>

                    <div class="form-outline mb-5">
                        <label for="" class="text-email-forgot mb-2">กรุณากรอกอีเมลที่คุณใช้ในการเข้าสู่ระบบ</label>
                        <input type="email" id="form2Example1" class="form-control input-email" placeholder="กรุณากรอกอีเมล"  />
                    </div>

                    <!-- Submit button -->
                    <a href="" type="button" class="btn btn-info btn-signIn mb-4">ยืนยัน</a>
                </form>


                <br>
                <p class="text-phone">หากพบปัญหาการเข้าสู่ระบบกรุณาติดต่อ โทร. 000-000-0000</p>
            </div>








        </div>

    </div>

</body>
</html>
