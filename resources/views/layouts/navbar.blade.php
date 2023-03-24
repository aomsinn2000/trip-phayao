<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- font style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!--end font style -->


    <link href="{{ asset('assets/css/layouts/navbar.css') }}" rel="stylesheet">


</head>

<body>

    <ul class="nav-social sticky-top">
        <div class="px-5">
            <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-facebook"></i></a></li>
            <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-instagram"></i></a></li>
            <li><a class="svg-social nav-li nav-a" href=""><i class="bi bi-twitter"></i></a></li>
            <li><a class="nav-li nav-a" href="">in</a></li>
            <li><a class="nav-li nav-a" href="">|Trippayao@gmail.com</a></li>
        </div>
        <div class="d-flex">
            <li class="nav-li nav-a" style="margin-left: auto;">
                <img src="{{ asset('assets/image/thai.png') }}" style="width: 10%;" alt="">
                <span>
                    <a href="" class="select-language">TH</a> /
                    <a href="" class="select-language">EN</a>
                </span>
            </li>
        </div>
    </ul>





    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-phayao.png') }}" alt="" class="logo-phayao"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/specialdeals/') }}">ดีลสุดพิเศษ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/touristattractions/') }}">สถานที่ท่องเที่ยว</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/activities/') }}">กิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/packagetours/') }}">แพ็คเกจทัวร์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/articles/') }}">บทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services/') }}">บริการต่างๆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contactus/') }}">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>

            <form class="d-flex px-1">
                <input class="form-control me-2 search" list="GFGOptions" id="GFGDataList" type="search" placeholder="ค้นหา สถานที่ท่องเที่ยว/ดีลพิเศษ/กิจกรรม" aria-label="Search">
                <datalist id="GFGOptions">
                    <option value="HTML">
                    <option value="CSS">
                    <option value="JavaScript">
                    <option value="Bootstrap">
                    <option value="Chrome"></option>
                    <option value="Firefox"></option>
                    <option value="Opera"></option>
                    <option value="Safari"></option>
                    <option value="Microsoft Edge"></option>
                    <option value="กว๊านพะเยา">
                    <option value="วัด">
                    <option value="วัดศรีโคมคำ">
                    <option value="ภูลังกา">
                </datalist>
                <button class="btn btn-outline-warning" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex">
                    <li class="nav-item">
                        <div class="text-left py-1">

                            <a href="{{ url('login') }}" type="button" class="btn btn-warning signInli">Login</a>

                        </div>

                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>









</body>

</html>
