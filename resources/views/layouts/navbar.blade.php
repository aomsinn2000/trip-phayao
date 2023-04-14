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
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/image/logo-phayao.png') }}" alt="" class="logo-phayao"></a>

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
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    ชลธิชา รักษา
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                      </svg> จัดการข้อมูล</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                          </svg> ออกจากระบบ</a></li>
                                </ul>
                            </div>
                            {{-- <a href="{{ url('login') }}" type="button" class="btn btn-warning signInli">Login</a> --}}

                        </div>

                    </li>


                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>












</body>

</html>
