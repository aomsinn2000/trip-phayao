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
            border-color: #dddddd;
            border-style: solid;
            border-width: 1px;
        }

        .main-nav-line .nav-link.active {
            color: #242f48;
            background-color: #ECF0FA;
            border-radius: 5px;
            border-left: 2px solid #ecf0fa;
            border-right: 2px solid #ecf0fa;
            border-top: 2px solid #ecf0fa;
            border-bottom: 2px solid #ecf0fa;
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

        .popularOff {
            background-color: #ff0000;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
            text-align: center;
            margin: auto;
        }

        .popularOn {
            background-color: #ffbe00;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
            text-align: center;
            margin: auto;
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
            /* border-color:#042e60;
            border-color: #042e60;
            border-width: 2px;
            border-style: solid; */
        }

        .toggle-off.btn-xs {
            padding-right: 1rem;
            padding-top: 10px;
            font-size: 12px;
            background-color: red;
            color: #ffff;
        }

        .toggle-on.btn-xs {
            padding-right: 1rem;
            padding-top: 10px;
            font-size: 12px;
            background-color: #00a32a;
        }

        .toggle.btn-xs {
            min-width: 90px !important;
            min-height: 30px !important;
            border-radius: 50px;
        }

        .toggle.btn-sm {
            min-width: 75px !important;
            min-height: 28px !important;
            border-radius: 50px;
        }

        .toggle-on.btn-sm {
            padding-right: 1rem;
            background-color: #ffbe00;
            padding-top: 4px;
            font-size: 12px;
        }

        .toggle-off.btn-sm {
            padding-right: 1rem;
            background-color: #ff0000;
            color: #fff;
            padding-top: 4px;
            font-size: 12px;
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
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: black; margin-bottom:5px;" width="20" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
                                </svg>
                                จัดการข้อมูลหมวดหมู่ >
                            </h5>
                            <h5 class="content-title mb-0 my-auto px-2" style="padding-bottom: 5px;">จัดการหมวดหมู่สถานที่ยอดฮิต</h5>
                        </div>
                    </div>
                </div>



                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header" style="background-color: white;">

                                <div class="row">
                                    <div class="col-6">
                                        <h5><b>จัดการหมวดหมู่สถานที่ยอดฮิต</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <a style="float: right; margin-right:35px;" href="{{ url('/tourist-attraction-categories/add') }}" type="button" class="btn btn-info">เพิ่มหมวดหมู่สถานที่ยอดฮิต</a>
                                    </div>
                                </div>
                                <div style="padding-top:60px;"></div>
                                <nav>
                                    <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#all-touristAttractionCategory" role="tab" aria-selected="true"><b id="total">ทั้งหมด ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#on-touristAttractionCategory" role="tab" aria-selected="false"><b id="on">เปิดใช้งาน ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#off-touristAttractionCategory" role="tab" aria-selected="false"><b id="off">ปิดใช้งาน ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#trash-touristAttractionCategory" role="tab" aria-selected="false"><b id="trash">ถังขยะ ()</b></a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">


                                    {{-- ทั้งหมด --}}
                                    <div class="tab-pane fade show active" id="all-touristAttractionCategory" role="tabpanel" aria-labelledby="all-specialDeal-tab">
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
                                        <table class="table table table-striped position-relative my-3"style="text-align: left;" id="allTouristAttractionCategory-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center; height:60px !important;">
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ยอดนิยม</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>ผู้แก้ไขล่าสุด</th>
                                                    <th>สถานะ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end ทั้งหมด --}}


                                    {{-- เปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="on-touristAttractionCategory" role="tabpanel" aria-labelledby="">
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
                                        <table class="table table table-striped position-relative my-3" id="onTouristAttractionCategory-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center; height:60px !important;">
                                                    {{-- <tr style="text-align: center;"> --}}
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ยอดนิยม</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>ผู้แก้ไขล่าสุด</th>
                                                    <th>สถานะ</th>
                                                    <th></th>
                                                </tr>
                                                {{-- </tr> --}}
                                            </thead>
                                            <tbody style="text-align: center">
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end เปิดการใช้งาน --}}


                                    {{-- ปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="off-touristAttractionCategory" role="tabpanel" aria-labelledby="">
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
                                        <table class="table table-striped position-relative my-3 " id="offTouristAttractionCategory-table">
                                            <thead class="thead-dark">
                                                <tr style=" height:60px !important; text-align: center;">
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ยอดนิยม</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>ผู้แก้ไขล่าสุด</th>
                                                    <th>สถานะ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end ปิดการใช้งาน --}}

                                    {{-- ถังขยะการใช้งาน --}}
                                    <div class="tab-pane fade" id="trash-touristAttractionCategory" role="tabpanel" aria-labelledby="">
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
                                        <table class="table table-striped position-relative my-3 " id="trashTouristAttractionCategory-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>ผู้ลบ</th>
                                                    <th>สถานะก่อนลบ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center;">
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end ถังขยะการใช้งาน --}}


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal ถึงขยะ -->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ url('/tourist-attraction-categories/delete') }}" method="POST">
                        @csrf
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <br>
                                    <h3 style="color: red;"> คุณแน่ใจใช่ไหมว่าต้องการลบข้อมูลนี้!</h3>
                                    <svg style="color: rgb(206 16 16)" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                    </svg><br><br>
                                    <div style="color: rgb(206 16 16)">คำเตือน : เมื่อลบแล้วข้อมูลจะถูกย้ายไปถังขยะ กู้คืนไม่ได้</div>
                                </div>
                                <input type="hidden" id="deleteId" name="id">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="submit" class="btn btn-primary" style="background-color: rgb(206 16 16)">ฉันแน่ใจ</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end Modal ถึงขยะ -->
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


    {{-- script datatogle เปิด/ปิด --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    {{-- script datatogle เปิด/ปิด --}}

    {{-- script ส่งid record จากปุ่มลบไปยังmodal --}}
    <script>
        $(document).on("click", "#sendIdDelete", function() {
            var specialDealId = $(this).data('id');
            $("#deleteId").val(specialDealId);
        });
    </script>
    {{-- end script --}}


    {{-- script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}
    <script>
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#allTouristAttractionCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#onTouristAttractionCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#offTouristAttractionCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#trashTouristAttractionCategory-table').DataTable().columns.adjust();
        });
    </script>
    {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}

    <script>
        function countData() {
            $.ajax({
                url: "/tourist-attraction-categories/count",
                type: "GET",
                dataType: "json",
                success: function(count) {
                    $('#total').text('ทั้งหมด (' + count.total + ')');
                    $('#on').text('เปิดการใช้งาน (' + count.on + ')');
                    $('#off').text('ปิดการใช้งาน (' + count.off + ')');
                    $('#trash').text('ถังขยะ (' + count.trash + ')');
                },
                error: function() {
                    alert('ผิดพลาดทางเทคนิค');
                }
            })
        }
        countData();
    </script>
    {{-- end ตัวนับจำนวน --}}



    <script>
        $('#allTouristAttractionCategory-table').DataTable({
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
            ajax: {
                url: "/tourist-attraction-categories/touristattraction-category-all-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/tourist-attraction-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ยอดนิยม',
                width: "120px",
                render: function(data, type, row) {
                    return `<td>
                        <input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="sm"
                        class="switchpopular" id="${row.id}" ${ row.is_popular === 1 ? 'checked' : '' }></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name_en ??'ไม่ได้กำหนดหมวดหมู่'}</td>`
                }
            }, {
                data: 'จำนวน',
                width: "80px",
                render: function(data, type, row) {
                    return `<td>${row.total}</td>`
                }
            }, {
                data: 'ผู้สร้าง',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.creator ?? 'ผู้สร้างไม่มีชื่อทำให้ระบบไม่ได้บันทึก' }<br>
                            <label style="color:#696565;">${ row.created_at ? moment(row.created_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'ผู้แก้ไขล่าสุด',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.editor ?? 'ยังไม่เคยมีการแก้ไข' }<br>
                            <label style="color:#696565;">${ row.editor ? moment(row.updated_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'สถานะ',
                width: "80px",
                // className: "switchstatus",
                render: function(data, type, row) {
                    return `<td><input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs"
                    class="switchstatus" id="${row.id}" ${ row.is_status == 1 ? 'checked' : '' }></td>`
                }

            }, {
                data: 'ถังขยะ',
                width: "150px",
                render: function(data, type, row) {
                    return `<td><button class="btn-trash" data-toggle="modal" data-target="#delete" id="sendIdDelete" data-id="${row.id}">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                            </button>
                            </td>`
                }
            }],
            "createdRow": function(row, data, dataIndex) {
                $(row).addClass('switchstatus switchpopular');
                $(row).find('.switchstatus').bootstrapToggle();
                $(row).find('.switchpopular').bootstrapToggle();
                $(row).on('change', '.switchstatus', function() {
                    var id = $(this).attr('id', data.id);
                    $.ajax({
                        url: '/tourist-attraction-categories/switch-status',
                        type: "POST",
                        datatype: 'json',
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id: data.id,
                        },
                    }).done(function(response) {
                        // console.log(response);
                        $('#allTouristAttractionCategory-table').DataTable().ajax.reload();
                        $('#onTouristAttractionCategory-table').DataTable().ajax.reload();
                        $('#offTouristAttractionCategory-table').DataTable().ajax.reload();
                        $('#trashTouristAttractionCategory-table').DataTable().ajax.reload();
                        countData();
                    });
                    // console.log(id);
                });
                $(row).on('change', '.switchpopular', function() {
                    var id = $(this).attr('id', data.id);
                    $.ajax({
                        url: '/tourist-attraction-categories/switch-popular',
                        type: "POST",
                        datatype: 'json',
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id: data.id,
                        },
                    }).done(function(response) {
                        $('#allTouristAttractionCategory-table').DataTable().ajax.reload();
                        $('#onTouristAttractionCategory-table').DataTable().ajax.reload();
                        $('#offTouristAttractionCategory-table').DataTable().ajax.reload();
                        console.log(response);
                    });
                    // console.log(id);
                });
            },

        });
    </script>



    <script>
        $('#onTouristAttractionCategory-table').DataTable({
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
            ajax: {
                url: "/tourist-attraction-categories/touristattraction-category-on-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/tourist-attraction-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ยอดนิยม',
                width: "120px",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_popular === 1 ? 'popularOn' : 'popularOff' }">${row.is_popular === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name_en ??'ไม่ได้กำหนดหมวดหมู่'}</td>`
                }
            }, {
                data: 'จำนวน',
                width: "80px",
                render: function(data, type, row) {
                    return `<td>${row.total}</td>`
                }
            }, {
                data: 'ผู้สร้าง',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.creator ?? 'ผู้สร้างไม่มีชื่อทำให้ระบบไม่ได้บันทึก' }<br>
                            <label style="color:#696565;">${ row.created_at ? moment(row.created_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'ผู้แก้ไขล่าสุด',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.editor ?? 'ยังไม่เคยมีการแก้ไข' }<br>
                            <label style="color:#696565;">${ row.editor ? moment(row.updated_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'สถานะ',
                width: "80px",
                // className: "switchstatus",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }

            }, {
                data: 'ถังขยะ',
                width: "150px",
                render: function(data, type, row) {
                    return `<td><button class="btn-trash" data-toggle="modal" data-target="#delete" id="sendIdDelete" data-id="${row.id}">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                            </button>
                            </td>`
                }
            }],
        });
    </script>


    <script>
        $('#offTouristAttractionCategory-table').DataTable({
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
            ajax: {
                url: "/tourist-attraction-categories/touristattraction-category-off-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/tourist-attraction-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ยอดนิยม',
                width: "120px",
                className: "center",
                render: function(data, type, row) {
                    return `<td><div class="${ row.is_popular === 1 ? 'popularOn' : 'popularOff' }">${row.is_popular === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name_en ??'ไม่ได้กำหนดหมวดหมู่'}</td>`
                }
            }, {
                data: 'จำนวน',
                width: "80px",
                render: function(data, type, row) {
                    return `<td>${row.total}</td>`
                }
            }, {
                data: 'ผู้สร้าง',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.creator ?? 'ผู้สร้างไม่มีชื่อทำให้ระบบไม่ได้บันทึก' }<br>
                            <label style="color:#696565;">${ row.created_at ? moment(row.created_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'ผู้แก้ไขล่าสุด',
                width: "200px",
                render: function(data, type, row) {
                    return `<td>${ row.editor ?? 'ยังไม่เคยมีการแก้ไข' }<br>
                            <label style="color:#696565;">${ row.editor ? moment(row.updated_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'สถานะ',
                width: "80px",
                // className: "switchstatus",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }

            }, {
                data: 'ถังขยะ',
                width: "150px",
                render: function(data, type, row) {
                    return `<td><button class="btn-trash" data-toggle="modal" data-target="#delete" id="sendIdDelete" data-id="${row.id}">
                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path
                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                            </button>
                            </td>`
                }
            }],
        });
    </script>
    <script>
        $('#trashTouristAttractionCategory-table').DataTable({
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
            ajax: {
                url: "/tourist-attraction-categories/touristattraction-category-trash-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td><a style="pointer-events: none;color:#fc2525;">${ row.category_no }</a></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th}</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "120px",
                render: function(data, type, row) {
                    return `<td>${row.name_en}</td>`
                }
            }, {
                data: 'ผู้สร้าง',
                width: "250px",
                render: function(data, type, row) {
                    return `<td>${ row.creator ?? 'ผู้สร้างไม่มีชื่อทำให้ระบบไม่ได้บันทึก' }<br>
                            <label style="color:#696565;">${ row.created_at ? moment(row.created_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'ผู้ลบ',
                width: "120px",
                render: function(data, type, row) {
                    return `<td>${ row.editor ?? '' }<br>
                            <label style="color:#696565;">${ row.editor ? moment(row.deleted_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                            </td>`
                }
            }, {
                data: 'สถานะก่อนโดนลบ',
                width: "80px",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_status=== 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }
            }],

        });
    </script>






</body>

</html>
