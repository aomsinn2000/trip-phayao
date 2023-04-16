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
                                <svg style="color: black;margin-bottom:5px;" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 11.8125C7.4475 11.8125 6.1875 10.5525 6.1875 9C6.1875 7.4475 7.4475 6.1875 9 6.1875C10.5525 6.1875 11.8125 7.4475 11.8125 9C11.8125 10.5525 10.5525 11.8125 9 11.8125ZM9 7.3125C8.07 7.3125 7.3125 8.07 7.3125 9C7.3125 9.93 8.07 10.6875 9 10.6875C9.93 10.6875 10.6875 9.93 10.6875 9C10.6875 8.07 9.93 7.3125 9 7.3125Z" fill="#292D32"/>
                                    <path d="M11.4075 16.6427C11.25 16.6427 11.0925 16.6202 10.935 16.5827C10.47 16.4552 10.08 16.1627 9.8325 15.7502L9.7425 15.6002C9.3 14.8352 8.6925 14.8352 8.25 15.6002L8.1675 15.7427C7.92 16.1627 7.53 16.4627 7.065 16.5827C6.5925 16.7102 6.105 16.6427 5.6925 16.3952L4.4025 15.6527C3.945 15.3902 3.615 14.9627 3.4725 14.4452C3.3375 13.9277 3.405 13.3952 3.6675 12.9377C3.885 12.5552 3.945 12.2102 3.8175 11.9927C3.69 11.7752 3.3675 11.6477 2.925 11.6477C1.83 11.6477 0.9375 10.7552 0.9375 9.66021V8.34021C0.9375 7.24521 1.83 6.35272 2.925 6.35272C3.3675 6.35272 3.69 6.22521 3.8175 6.00772C3.945 5.79022 3.8925 5.44521 3.6675 5.06272C3.405 4.60521 3.3375 4.06521 3.4725 3.55521C3.6075 3.03771 3.9375 2.61021 4.4025 2.34771L5.7 1.60521C6.5475 1.10271 7.665 1.39521 8.175 2.25771L8.265 2.40771C8.7075 3.17271 9.315 3.17271 9.7575 2.40771L9.84 2.26521C10.35 1.39521 11.4675 1.10271 12.3225 1.61271L13.6125 2.35521C14.07 2.61771 14.4 3.04521 14.5425 3.56271C14.6775 4.08021 14.61 4.61272 14.3475 5.07022C14.13 5.45271 14.07 5.79772 14.1975 6.01522C14.325 6.23272 14.6475 6.36021 15.09 6.36021C16.185 6.36021 17.0775 7.25271 17.0775 8.34771V9.66772C17.0775 10.7627 16.185 11.6552 15.09 11.6552C14.6475 11.6552 14.325 11.7827 14.1975 12.0002C14.07 12.2177 14.1225 12.5627 14.3475 12.9452C14.61 13.4027 14.685 13.9427 14.5425 14.4527C14.4075 14.9702 14.0775 15.3977 13.6125 15.6602L12.315 16.4027C12.03 16.5602 11.7225 16.6427 11.4075 16.6427ZM9 13.8677C9.6675 13.8677 10.29 14.2877 10.7175 15.0302L10.8 15.1727C10.89 15.3302 11.04 15.4427 11.22 15.4877C11.4 15.5327 11.58 15.5102 11.73 15.4202L13.0275 14.6702C13.2225 14.5577 13.3725 14.3702 13.4325 14.1452C13.4925 13.9202 13.4625 13.6877 13.35 13.4927C12.9225 12.7577 12.87 12.0002 13.2 11.4227C13.53 10.8452 14.2125 10.5152 15.0675 10.5152C15.5475 10.5152 15.93 10.1327 15.93 9.65271V8.33271C15.93 7.86021 15.5475 7.47021 15.0675 7.47021C14.2125 7.47021 13.53 7.14021 13.2 6.56272C12.87 5.98522 12.9225 5.22771 13.35 4.49271C13.4625 4.29771 13.4925 4.06521 13.4325 3.84021C13.3725 3.61521 13.23 3.43521 13.035 3.31521L11.7375 2.57271C11.415 2.37771 10.9875 2.49021 10.7925 2.82021L10.71 2.96271C10.2825 3.70521 9.66 4.12521 8.9925 4.12521C8.325 4.12521 7.7025 3.70521 7.275 2.96271L7.1925 2.81271C7.005 2.49771 6.585 2.38521 6.2625 2.57271L4.965 3.32271C4.77 3.43521 4.62 3.62271 4.56 3.84771C4.5 4.07271 4.53 4.30521 4.6425 4.50022C5.07 5.23521 5.1225 5.99271 4.7925 6.57022C4.4625 7.14772 3.78 7.47771 2.925 7.47771C2.445 7.47771 2.0625 7.86021 2.0625 8.34021V9.66021C2.0625 10.1327 2.445 10.5227 2.925 10.5227C3.78 10.5227 4.4625 10.8527 4.7925 11.4302C5.1225 12.0077 5.07 12.7652 4.6425 13.5002C4.53 13.6952 4.5 13.9277 4.56 14.1527C4.62 14.3777 4.7625 14.5577 4.9575 14.6777L6.255 15.4202C6.4125 15.5177 6.6 15.5402 6.7725 15.4952C6.9525 15.4502 7.1025 15.3302 7.2 15.1727L7.2825 15.0302C7.71 14.2952 8.3325 13.8677 9 13.8677Z" fill="#292D32"/>
                                </svg>
                                จัดการหมวดหมู่ >
                            </h5>
                            <h5 class="content-title mb-0 my-auto px-2" style="padding-bottom: 5px;">จัดการหมวดหมู่ดีลพิเศษ</h5>
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
                                        <a style="float: right; margin-right:35px;" href="{{ url('/special-deal-categories/add') }}" type="button" class="btn btn-info">เพิ่มหมวดหมู่ดีลพิเศษ</a>
                                    </div>
                                </div>
                                <div style="padding-top:60px;"></div>
                                <nav>
                                    <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#all-specialDealCategory" role="tab" aria-selected="true"><b id="total">ทั้งหมด ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#on-specialDealCategory" role="tab" aria-selected="false"><b id="on">เปิดใช้งาน ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#off-specialDealCategory" role="tab" aria-selected="false"><b id="off">ปิดใช้งาน ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#trash-specialDealCategory" role="tab" aria-selected="false"><b id="trash">ถังขยะ ()</b></a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">


                                    {{-- ทั้งหมด --}}
                                    <div class="tab-pane fade show active" id="all-specialDealCategory" role="tabpanel" aria-labelledby="all-specialDealCategory-tab">
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
                                        <table class="table table table-striped position-relative my-3"style="text-align: left;" id="allSpecialDealCategory-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th style="text-align: left;">รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
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
                                    <div class="tab-pane fade" id="on-specialDealCategory" role="tabpanel" aria-labelledby="">
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
                                        <table class="table table table-striped position-relative my-3" id="onSpecialDealCategory-table">
                                            <thead class="thead-dark">
                                                <tr style=" height:60px !important; text-align: center;">
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
                                                    <th>สถานะ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">

                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- end เปิดการใช้งาน --}}


                                    {{-- ปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="off-specialDealCategory" role="tabpanel" aria-labelledby="">
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

                                        <table class="table table-striped position-relative my-3 " id="offSpecialDealCategory-table">
                                            <thead class="thead-dark">
                                                <tr style=" height:60px !important; text-align: center;">
                                                    <th>รหัสหมวดหมู่</th>
                                                    <th>ภาพหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>จำนวน</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>แก้ไข</th>
                                                    <th style="text-align: center;">สถานะ</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">
                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- end ปิดการใช้งาน --}}

                                    {{-- ถังขยะ --}}
                                    <div class="tab-pane fade" id="trash-specialDealCategory" role="tabpanel" aria-labelledby="">
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

                                        <table class="table table-striped position-relative my-3 " id="trashSpecialDealCategory-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center">
                                                    <th style="text-align: left">รหัสหมวดหมู่</th>
                                                    <th>ชื่อหมวดหมู่(TH)</th>
                                                    <th>ชื่อหมวดหมู่(EN)</th>
                                                    <th>ผู้สร้าง</th>
                                                    <th>ผู้ลบ</th>
                                                    <th>สถานะก่อนโดนลบ
                                                        <select class="form-control selectStyle" id="selectStatus">
                                                            <option>ทั้งหมด</option>
                                                            <option>เปิดใช้งาน</option>
                                                            <option>ปิดใช้งาน</option>
                                                        </select>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center">
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- end ถังขยะ --}}

                                </div>

                                <!-- Modal ถังขยะ -->
                                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form action="{{ url('/special-deal-categories/delete') }}" method="POST">
                                        @csrf
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                    <br>
                                                    <h3 style="color: red;"> คุณแน่ใจใช่ไหมว่าต้องการลบข้อมูลนี้!</h3>
                                                    <svg style="color: rgb(206 16 16)" xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>
                                                    <div style="color: rgb(206 16 16)">คำเตือน : เมื่อลบแล้วข้อมูลจะถูกย้ายไปถังขยะ ไม่สามารถกู้คืนได้</div>
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
                                <!--end Modal ถังขยะ -->
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
            $('#allSpecialDealCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#onSpecialDealCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#offSpecialDealCategory-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#trashSpecialDealCategory-table').DataTable().columns.adjust();
        });
    </script>
    {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}


    {{-- ตัวนับจำนวน --}}
    <script>
        function countData() {
            $.ajax({
                url: "/special-deal-categories/count",
                type: "GET",
                dataType: "json",
                success: function(count) {
                    // console.log(count.total);
                    // console.log(count.on);
                    // console.log(count.off);
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
        $('#allSpecialDealCategory-table').DataTable({
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
                url: "/special-deal-categories/specialdeal-category-all-datatable",
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
                    return `<td style="text-align: left;"><a href="/special-deal-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "100px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "150px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "150px",
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
                    return `<td><label class="switch"><input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs"
                    class="switchstatus" id="${row.id}" ${ row.is_status == 1 ? 'checked' : '' }><span class="slider round"></span></label></td>`
                }

            }, {
                data: 'ถังขยะ',
                width: "70px",
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
                $(row).addClass('switchstatus');
                $(row).find('.switchstatus').bootstrapToggle();
                $(row).on('change', function() {
                    var id = $(this).attr('id', data.id);
                    $.ajax({
                        url: '/special-deal-categories/switch-status',
                        type: "POST",
                        datatype: 'json',
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id: data.id,

                        },
                    }).done(function(response) {
                        // console.log(response);
                        $('#allSpecialDealCategory-table').DataTable().ajax.reload();
                        $('#onSpecialDealCategory-table').DataTable().ajax.reload();
                        $('#offSpecialDealCategory-table').DataTable().ajax.reload();
                        $('#trashSpecialDealCategory-table').DataTable().ajax.reload();
                        countData();
                    });
                    // console.log(id);
                });
            },

        });
    </script>



    <script>
        $('#onSpecialDealCategory-table').DataTable({
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
                url: "/special-deal-categories/specialdeal-category-on-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                    // data.class = $('.switchstatus').attr('class');
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/special-deal-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "100px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "150px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "150px",
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
                className: "switchstatus",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }

            }, {
                data: 'ถังขยะ',
                width: "70px",
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
        $('#offSpecialDealCategory-table').DataTable({
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
                url: "/special-deal-categories/specialdeal-category-off-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";
                    // data.keyword = $('#cod-prepared-tab #search').val();
                    // data.account = $('#cod-prepared-tab #account-filter').val();
                    // data.date_filter = $('#cod-prepared-tab input[name="datefilter"]').val();
                    // data.class = $('.switchstatus').attr('class');
                }
            },
            columns: [{
                data: 'รหัสหมวดหมู่',
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/special-deal-categories/edit/${row.id}" class="text-idSpecailDeal">${row.category_no}</a></td>`
                }
            }, {
                data: 'ภาพหมวดหมู่',
                width: "100px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><img class="img-category" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่TH',
                width: "150px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td>${row.name_th }</td>`
                }
            }, {
                data: 'ชื่อหมวดหมู่EN',
                width: "150px",
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
                className: "switchstatus",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }

            }, {
                data: 'ถังขยะ',
                width: "70px",
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
        $('#trashSpecialDealCategory-table').DataTable({
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
                url: "/special-deal-categories/specialdeal-category-trash-datatable",
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
                width: "100px",
                className: "text-left",
                render: function(data, type, row) {
                    return `<td><a style="pointer-events: none;color:#fc2525;">${ row.category_no }</a></td>`
                }
            }, {
                width: "150px",
                render: function(data, type, row) {
                    return `<td>${ row.name_th }</td>`
                }
            }, {
                width: "150px",
                render: function(data, type, row) {
                    return `<td>${row.name_en}</td>`
                }
            }, {
                width: "250px",
                render: function(data, type, row) {
                    return `<td>${ row.creator ?? 'ผู้สร้างไม่มีชื่อทำให้ระบบไม่ได้บันทึก' }<br>
                        <label style="color:#696565;">${ row.created_at ? moment(row.created_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                        </td>`
                }
            }, {
                width: "250px",
                render: function(data, type, row) {
                    return `<td>${ row.editor ?? 'ยังไม่เคยมีการแก้ไข' }<br>
                        <label style="color:#696565;">${ row.editor ? moment(row.deleted_at).format('DD/MM/YYYY HH:mm') : '' }</label>
                        </td>`
                }
            }, {
                width: "80px",
                render: function(data, type, row) {
                    return `<div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
                }
            }],

        });
    </script>

</body>

</html>
