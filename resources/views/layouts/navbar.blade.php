<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

<!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- font style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
<!--end font style -->

<!-- cdn jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--end cdn jquery -->

    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
  </head>
<body>




    <ul class="nav-social" >
      <div class="container">
                <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-facebook"></i></a></li>
               <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-instagram"></i></a></li>
               <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-twitter"></i></a></li>
               <li ><a class="nav-li nav-a" href="">in</a></li>
               <li ><a class="nav-li nav-a" href="">|Trippayao@gmail.com</a></li>
      </div>
      <div class="d-flex">
        <li  class="nav-li nav-a" style="margin-left: auto;">
            <a href="" style="color: #ffff;  text-decoration: none;">
                <img src="{{asset('assets/image/thai.png')}}" style="width: 10%;" alt="">
                <span>TH / EN</span>
            </a>
        </li>
      </div>
    </ul>

 <style>
    .sticky-top1{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1;
    }
    /* .navbar-toggler-icon {
    display: inline-in;
    width: 1px;
    height: 1.5em;
    vertical-align: middle;
    background-image: var(--bs-navbar-toggler-icon-bg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
} */
</style>


            <!-- navbar menu -->
            <nav class="navbar sticky-top1 navbar-expand-lg navbar-light bg-light " >
               <div class=" padding-navbar"></div>
                <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" onclick=""></span></button>
                <a class="navbar-brand" href="#"><img src="{{asset('assets/image/logo-phayao.png')}}" alt="" class="logo-phayao"></a>
                <div class="collapse navbar-collapse px-3" id="navbarNav" >
                  <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ดีลสุดพิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สถานที่ยอดฮิต</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >แพ็คเกตทัวร์</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" >บทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >บริการต่างๆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <div  id="" class="text-center signUpSignIn">
                            <button type="button" class="btn btn-warning signli">sign up</button><span class="px-1"></span>
                            <button type="button" class="btn btn-outline-warning signInli">sign in</button><span class="px-1"></span>
                        </div>
                    </li>
                  </ul>
                </div>


                <form class="d-flex">
                  <input class="form-control textSearch " type="search" placeholder="Search" aria-label="Search"  id="" ><span class="px-1"></span>
                  <button class="btn btn-outline-warning iconSearch" type="submit"><i class="bi bi-search"></i></button><span class="px-1"></span>
                  <button type="button" class="btn btn-warning signUp" >sign up</button><span class="px-1"></span>
                  <button type="button" class="btn btn-outline-warning signIn">sign in</button><span class="px-1"></span>
                </form>
            </nav>





            <script>
            function clickSearch() {
              var x = document.getElementById("search1");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }


            function signUpSignIn(){
              $('#signUpSignIn').prop('hidden',false);
            }
            </script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>
