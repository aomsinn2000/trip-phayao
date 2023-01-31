<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
                        <input type="email" id="form2Example1" class="form-control input-email" placeholder="กรุณากรอกอีเมล" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-5">
                        <input type="password" id="form2Example2" class="form-control input-password" placeholder="กรุณากรอกรหัสผ่านอีกครั้ง" />
                    </div>

                    <a href="" type="button" class="btn btn-info btn-signIn mb-4">ตกลง</a>

                </form>



            </div>







        </div>

    </div>






    {{-- <script>

        $('#alertReset').click(function() {
            alert('คุณแน่ใจแล้วใช่ไหมว่าจะใช้รหัสผ่านนี้');
        });
    </script> --}}
</body>

</html>
