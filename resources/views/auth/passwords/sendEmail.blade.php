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
                <p class="text-login">เราได้ส่งอีเมลเพื่อยืนยันการตั้งค่ารหัสผ่านใหม่</p><br>
                <form>
                    <p style="text-align: center">ไปยัง
                        <span style="color: #FCB533;">toie*******@gmail.com</span>
                    </p>
                    <p class="text-center"><i class="bi bi-envelope-check-fill icon-sentEmail" ></i></p>


                    <a href="{{url ('/')}}" type="button" class="btn btn-info btn-signIn mb-4">กลับหน้าหลัก</a>
                    {{-- <button href="{{url ('/')}}" type="button" class="btn btn-info btn-signIn mb-4">กลับหน้าหลัก</button> --}}
                </form>


                <br>
                <p class="text-sentEmail-again">หากคุณไม่ได้รับอีเมล กรุณากด <span><a href="" class="text-sentEmail-again2">ส่งอีกครั้ง</a></span> </p>
            </div>








        </div>

    </div>

</body>
</html>
