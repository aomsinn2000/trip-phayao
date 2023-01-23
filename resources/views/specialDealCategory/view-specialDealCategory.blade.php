<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <meta name="Author" content="">
    <meta name="Keywords" content="" />

    <!-- Title -->
    <title>Phayao Trip</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/assets/images/logo-phayao.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Internal Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">

    <!---Internal Fileupload css-->
    <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

    <!--  Right-sidemenu css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!--  Custom Scroll bar-->
    <link href="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--  Left-Sidebar css -->
    <link rel="stylesheet" href="{{ asset('assets/css/sidemenu.css') }}">

    <!--- Style css --->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!--- Dark-mode css --->
    <link href="{{ asset('assets/css/style-dark.css') }}" rel="stylesheet">

    <!---Skinmodes css-->
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    <!--- Animations css-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <!--Internal  Quill css -->
    <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <style>
        .btn-color {
            background-color: #ffff;
        }

        .main-nav-line .nav-link {
            padding: 0;
            color: #4d5875;
            position: relative;
            padding: 7px 10px 5px 10px;
            color: #37326d;
            position: relative;
            background-color: #ffffff;
        }

        .main-nav-line .nav-link.active {
            color: #242f48;
            background-color: #ECF0FA;
            border-radius: 5px;
            border-left: 2px solid #d9d9d9;
            border-right: 2px solid #d9d9d9;
            border-top: 2px solid #d9d9d9;
        }

        .main-nav-line .nav-link.active::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: -20px;
            width: 2px;
        }

        .btn-trash {
            background-color: #f1bcbc;
            border-radius: 50px;
            border: none;
            height: 35px;
            width: 35px;
        }

        .text-idSpecailDeal:hover {
            text-align: left;
            color: rgb(177, 4, 53);
        }

        .statusOff {
            border-color: red;
            border-style: solid;
            border-width: 3px;
            width: 90px;
            height: 30px;
            color: red;
            border-radius: 20px;
            padding: 3px;
            text-align: center;
        }

        .statusOn {
            background-color: #00BB56;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
            text-align: center;
        }

        .selectStyle {
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 5.5;
            color: #ffffff;
            /* background-color: #fff; */
            width: 110px;
            border: none;
            background: transparent;
        }

        .img-category {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50px;
        }
    </style>

</head>



<body class="main-body app sidebar-mini">


    <!-- Loader -->
    <div id="global-loader">
        <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <!-- main-sidebar -->
        @include('layouts.sidebar')
        @include('layouts.topbar')
        <!-- main-sidebar -->

        <!-- main-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h5 class="content-title mb-0 my-auto">
                                <svg xmlns="http://www.w3.org/2000/svg"  style="color: black; margin-bottom:5px;" width="20" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                                    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
                                  </svg>
                                จัดการข้อมูลหมวดหมู่ >
                            </h5>
                            <h5 class="content-title mb-0 my-auto px-2"  style="padding-bottom: 5px;">จัดการหมวดหมู่ดีลพิเศษ</h5>
                        </div>
                    </div>
                </div>



                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header" style="background-color: white;">

                                <div class="row">
                                    <div class="col-6">
                                        <h5><b>จัดการหมวดหมู่ดีลพิเศษ</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <a style="float: right; margin-right:35px;" href="{{ url('addSpecialDealCategory') }}" type="button" class="btn btn-info">เพิ่มหมวดหมู่ดีลพิเศษ</a>
                                    </div>
                                </div>
                                <div style="padding-top:60px;"></div>
                                <nav>
                                    <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#all-specialDeal" role="tab" aria-selected="true"><b>ทั้งหมด (50)</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#accommodation" role="tab" aria-selected="false"><b>ที่พัก / โรงแรม (5)</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#restaurant" role="tab" aria-selected="false"><b>ร้านอาหาร (5)</b></a>


                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">


                                    {{-- ทั้งหมด --}}
                                    <div class="tab-pane fade show active" id="all-specialDeal" role="tabpanel" aria-labelledby="all-specialDeal-tab">
                                        <div class="row justify-content-between px-2 " style="background-color: #ECF0FA; height:70px;">
                                            <div class="col-6 py-3 px-5">
                                                <button type="button" class="btn btn-info text-dark btn-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z" />
                                                    </svg>
                                                    <span class="px-2">นำข้อมูลเข้า</span>
                                                </button>
                                                <span class="px-3">
                                                    <button type="button" class="btn btn-info text-dark btn-color">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span class="px-2">นำข้อมูลออก</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" style="border-radius: 5px;" placeholder="รหัสหมวดหมู่ / ชื่อหมวดหมู่">
                                            </div>
                                        </div>
                                        <table class="table table table-striped position-relative my-3"style="text-align: left;" id="allSpecialDeal-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th style="text-align: center;">ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
                                                    <th style="text-align: center;">สถานะ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: left">
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal1.jpg') }}" alt=""></td>
                                                    <td>ร้านอาหาร</td>
                                                    <td>restaurant</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOn">เปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal1.jpg') }}" alt=""></td>
                                                    <td>ร้านอาหาร</td>
                                                    <td>restaurant</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOn">เปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>




                                    </div>
                                    {{-- end ทั้งหมด --}}


                                    {{-- เปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="accommodation" role="tabpanel" aria-labelledby="">
                                        <div class="row justify-content-between px-2 " style="background-color: #ECF0FA; height:70px;">
                                            <div class="col-6 py-3 px-5">
                                                <button type="button" class="btn btn-info text-dark btn-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z" />
                                                    </svg>
                                                    <span class="px-2">นำข้อมูลเข้า</span>
                                                </button>
                                                <span class="px-3">
                                                    <button type="button" class="btn btn-info text-dark btn-color">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span class="px-2">นำข้อมูลออก</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" style="border-radius: 5px;" placeholder="รหัสหมวดหมู่ / ชื่อหมวดหมู่">
                                            </div>
                                        </div>
                                        <table class="table table table-striped position-relative my-3" id="accommodation-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th style="text-align: center;">ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
                                                    <th style="text-align: center;">สถานะ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: left">
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal.png') }}" alt=""></td>
                                                    <td>ที่พัก / โรงแรม</td>
                                                    <td>Accommodation/Hotel</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOn">เปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- end เปิดการใช้งาน --}}


                                    {{-- ปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="restaurant" role="tabpanel" aria-labelledby="">
                                        <div class="row justify-content-between px-2 " style="background-color: #ECF0FA; height:70px;">
                                            <div class="col-6 py-3 px-5">
                                                <button type="button" class="btn btn-info text-dark btn-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z" />
                                                    </svg>
                                                    <span class="px-2">นำข้อมูลเข้า</span>
                                                </button>
                                                <span class="px-3">
                                                    <button type="button" class="btn btn-info text-dark btn-color">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span class="px-2">นำข้อมูลออก</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" style="border-radius: 5px;" placeholder="รหัสหมวดหมู่ / ชื่อหมวดหมู่">
                                            </div>
                                        </div>

                                        <table class="table table-striped position-relative my-3 " id="restaurant-table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th style="text-align: center;">ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
                                                    <th style="text-align: center;">สถานะ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: left">
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal1.jpg') }}" alt=""></td>
                                                    <td>ร้านอาหาร</td>
                                                    <td>restaurant</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOff">ปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{ url('editSpecialDealCategory') }}" class="text-idSpecailDeal">CBC001</a></td>
                                                    <td style="text-align: center;"><img class="img-category" src="{{ asset('/assets/images/deal1.jpg') }}" alt=""></td>
                                                    <td>ร้านอาหาร</td>
                                                    <td>restaurant</td>
                                                    <td>10</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                        <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        <div class="statusOn">เปิดใช้งาน</div>
                                                    </td>
                                                    <td style="text-align: center;"><button class="btn-trash" data-toggle="modal" data-target="#trashAll">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- end ปิดการใช้งาน --}}

                                </div>

                                 <!-- Modal ถังขยะ -->
                                 <div class="modal fade" id="trashAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <br>
                                                <h3 style="color: red;"> คุณแน่ใจใช่ไหมว่าต้องการลบข้อมูลนี้!</h3>
                                                <svg style="color: rgb(206 16 16)" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                </svg>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                <button type="button" class="btn btn-primary" style="background-color: rgb(206 16 16)">ฉันแน่ใจ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end Modal ถังขยะ -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    </div>
    <!-- End Page -->




    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <!-- Internal Data tables -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <!--         <script src="assets/plugins/fileuploads/js/file-upload.js"></script> -->
    <!--Internal  Datatable js -->
    <!-- 		<script src="assets/js/table-data.js"></script> -->
    <!-- Rating js-->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
    <script src="{{ asset('assets/plugins/rating/jquery.barrating.js') }}"></script>
    <!-- Custom Scroll bar Js-->
    <script src="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- Sidebar js -->
    <script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>
    <!-- Right-sidebar js -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/plugins/sidebar/sidebar-custom.js') }}"></script>
    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>
    <!-- eva-icons js -->
    <script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!--Internal quill js -->
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/image-drop.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/image-resize.min.js') }}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.autotab.min.js') }}"></script>




    {{-- script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}
    <script>
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#allSpecialDeal-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#accommodation-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#restaurant-table').DataTable().columns.adjust();
        });
    </script>
    {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}





    <script>
        $('#allSpecialDeal-table').DataTable({
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            "ordering": false,
            "dom": '<<t>ilp>',
            rowReorder: {
                selector: '.move-selector'
            },
            scrollX: true,
            paging: true,
            searching: false,
            ordering: false,
            info: true,
            language: {
                emptyTable: "ไม่พบข้อมูล"
            },
            columns: [{
                "width": "100px"
            }, {
                "width": "120px",
            }, {
                "width": "150px"
            }, {
                "width": "150px"
            }, {
                "width": "100px"
            }, {
                "width": "250px"
            }, {
                "width": "250px"
            }, {
                "width": "80px"
            }, {
                "width": "150px"
            }],

        });
    </script>



    <script>
        $('#accommodation-table').DataTable({
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            "ordering": false,
            "dom": '<<t>ilp>',
            rowReorder: {
                selector: '.move-selector'
            },
            scrollX: true,
            paging: true,
            searching: false,
            ordering: false,
            info: true,
            language: {
                emptyTable: "ไม่พบข้อมูล"
            },
            columns: [{
                "width": "100px"
            }, {
                "width": "120px",
            }, {
                "width": "150px"
            }, {
                "width": "150px"
            }, {
                "width": "100px"
            }, {
                "width": "250px"
            }, {
                "width": "250px"
            }, {
                "width": "80px"
            }, {
                "width": "150px"
            }],

        });
    </script>




    <script>
        $('#restaurant-table').DataTable({
            aLengthMenu: [
                [10, 25, 50, 100, 200, -1],
                [10, 25, 50, 100, 200, "All"]
            ],
            iDisplayLength: -1,
            "ordering": false,
            "dom": '<<t>ilp>',
            rowReorder: {
                selector: '.move-selector'
            },
            scrollX: true,
            paging: true,
            searching: false,
            ordering: false,
            info: true,
            language: {
                emptyTable: "ไม่พบข้อมูล"
            },
            columns: [{
                "width": "100px"
            }, {
                "width": "120px",
            }, {
                "width": "150px"
            }, {
                "width": "150px"
            }, {
                "width": "100px"
            }, {
                "width": "250px"
            }, {
                "width": "250px"
            }, {
                "width": "80px"
            }, {
                "width": "150px"
            }],

        });
    </script>




</body>

</html>
