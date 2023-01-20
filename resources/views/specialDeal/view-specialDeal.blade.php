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
    <link rel="icon" href="{{ asset('assets/images/logo-phayao.png') }}" type="image/x-icon" />

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
        .statusOff{
            border-color: red;
            border-style: solid;
            border-width: 3px;
            width: 90px;
            height: 30px;
            color:red;
            border-radius: 20px;
            padding: 3px;
        }
        .statusOn{
            background-color: #00BB56;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
        }
      .selectStyle{
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 5.5;
    color: #ffffff;
    /* background-color: #fff; */
    width: 110px;
    border: none;
    background: transparent;
}

    </style>

</head>



<body class="main-body app sidebar-mini">


    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
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
                                <svg style="margin-bottom: 4px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                </svg>
                                Dashborad >
                            </h5>
                            <h5 class="content-title mb-0 my-auto px-2">จัดการดีลสุดพิเศษ</h5>
                        </div>
                    </div>
                </div>



                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header" style="background-color: white;">

                                <div class="row">
                                    <div class="col-6">
                                        <h5><b>จัดการดีลพิเศษ</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <a style="float: right; margin-right:35px;" href="{{ url('addSpecialDeal') }}" type="button" class="btn btn-info">เพิ่มหมวดหมู่</a>
                                    </div>
                                </div>
                                <div style="padding-top:60px;"></div>
                                <nav>
                                    <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#all-specialDeal" role="tab" aria-selected="true"><b>ทั้งหมด (100)</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#on-specialDeal" role="tab" aria-selected="false"><b>เปิดการใช้งาน (50)</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#off-specialDeal" role="tab" aria-selected="false"><b>ปิดการใช้งาน (50)</b></a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">


                                    {{-- ทั้งหมด --}}
                                    <div class="tab-pane fade show active" id="all-specialDeal" role="tabpanel" aria-labelledby="all-specialDeal-tab">
                                        <div class="row justify-content-center px-2 " style="background-color: #ECF0FA; height:70px;">

                                            <div class="col-2 py-3">
                                                <button type="button" class="btn btn-info text-dark btn-color"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                    </svg> นำข้อมูลออก</button>
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="firstDay"><b>เลือกจากวันที่สร้าง</b></label>
                                                <input type="date" id="firstDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="endtDay"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                <input type="date" id="endDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>

                                        <br><br><br>
                                        <table class="table table table-striped position-relative my-3" id="allSpecialDeal-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th class=""><input id='invoices-mainbox' type="checkbox"></th>
                                                    <th style="text-align: left;">รหัสดีล</th>
                                                    <th>ชื่อดีล</th>
                                                    <th>หมวดหมู่
                                                        <select class="form-control selectStyle" id="selectCategory">
                                                            <option selected >ทั้งหมด</option>
                                                            <option style="padding-top: 10px;">ที่พัก</option>
                                                            <option>ท่องเที่ยว</option>
                                                        </select>
                                                    </th>
                                                    <th>ระยะเวลา</th>
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
                                                <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>ไม่กำหนด</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOff">ปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>01/01/2565 - 01/01/2565 </td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOn">เปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
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
                                    <div class="tab-pane fade" id="on-specialDeal" role="tabpanel" aria-labelledby="">
                                        <div class="row justify-content-center px-2 " style="background-color: #ECF0FA; height:70px;">

                                            <div class="col-2 py-3">
                                                <button type="button" class="btn btn-info text-dark btn-color"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                    </svg> นำข้อมูลออก</button>
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="firstDay"><b>เลือกจากวันที่สร้าง</b></label>
                                                <input type="date" id="firstDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="endtDay"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                <input type="date" id="endDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <table class="table table table-striped position-relative my-3" id="onSpecialDeal-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th class=""><input id='invoices-mainbox' type="checkbox"></th>
                                                    <th style="text-align: left;">รหัสดีล</th>
                                                    <th>ชื่อดีล</th>
                                                    <th>หมวดหมู่
                                                        <select class="form-control selectStyle" id="selectCategory">
                                                            <option selected >ทั้งหมด</option>
                                                            <option style="padding-top: 10px;">ที่พัก</option>
                                                            <option>ท่องเที่ยว</option>
                                                        </select>
                                                    </th>
                                                    <th>ระยะเวลา</th>
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
                                                <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>ไม่กำหนด</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOff">ปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>01/01/2565 - 01/01/2565 </td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOn">เปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                     {{--end เปิดการใช้งาน --}}


                                        {{-- ปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="off-specialDeal" role="tabpanel" aria-labelledby="">
                                        <div class="row justify-content-center px-2 " style="background-color: #ECF0FA; height:70px;">

                                            <div class="col-2 py-3">
                                                <button type="button" class="btn btn-info text-dark btn-color"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                                    </svg> นำข้อมูลออก</button>
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="firstDay"><b>เลือกจากวันที่สร้าง</b></label>
                                                <input type="date" id="firstDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <label for="endtDay"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                <input type="date" id="endDay" name="" style="height: 40px; width:50%;    border-color: #e9e9e9; border-radius:5px;">
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>
                                        <br><br><br>
                                        <table class="table table-striped position-relative my-3 " id="offSpecialDeal-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                  <th class=""><input id='invoices-mainbox' type="checkbox"></th>
                                                    <th style="text-align: left;">รหัสดีล</th>
                                                    <th>ชื่อดีล</th>
                                                    <th>หมวดหมู่
                                                        <select class="form-control selectStyle" id="selectCategory">
                                                            <option selected >ทั้งหมด</option>
                                                            <option style="padding-top: 10px;">ที่พัก</option>
                                                            <option>ท่องเที่ยว</option>
                                                        </select>
                                                    </th>
                                                    <th>ระยะเวลา</th>
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
                                                <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>ไม่กำหนด</td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOff">ปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
                                                            <svg style="color: red;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                            </svg>
                                                    </td>
                                                </tr>

                                                 <tr>
                                                    <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                    <td style="text-align: left;"><a href="{{ url('editSpecialDeal') }}" class="text-idSpecailDeal">DEAL64001</a></td>
                                                    <td>ดีลสุดพิเศษ ทุกสายการบิน ทุกโรงแรม</td>
                                                    <td>ที่พัก</td>
                                                    <td>01/01/2565 - 01/01/2565 </td>
                                                    <td>นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td>
                                                        นางสาวเบญจวรรณ บัวพิทักษ์<br>
                                                       <label for=""> 01/01/2566 12:12</label>
                                                    </td>
                                                    <td><div class="statusOn">เปิดใช้งาน</div></td>
                                                    <td><button class="btn-trash">
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
            $('#onSpecialDeal-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#offSpecialDeal-table').DataTable().columns.adjust();
        });
    </script>
    {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}





    <script>
        $('#allSpecialDeal-table').DataTable({
            aLengthMenu: [
			        [10,25, 50, 100, 200, -1],
			        [10,25, 50, 100, 200, "All"]
			    ],
			    iDisplayLength:-1,
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
                width: "2%",
                render: function(data, type, row) {
                    return `<td><input class='subbox' type="checkbox" value=""></td>`;
                }
            }, {
                "width": "40px"
            }, {
                "width": "250px",
            }, {
                "width": "80px"
            }, {
                "width": "180px"
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
        $('#onSpecialDeal-table').DataTable({
            aLengthMenu: [
			        [10,25, 50, 100, 200, -1],
			        [10,25, 50, 100, 200, "All"]
			    ],
			    iDisplayLength:-1,
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
                width: "2%",
                render: function(data, type, row) {
                    return `<td><input class='subbox' type="checkbox" value=""></td>`;
                }
            }, {
                "width": "40px"
            }, {
                "width": "250px",
            }, {
                "width": "80px"
            }, {
                "width": "180px"
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
        $('#offSpecialDeal-table').DataTable({
            aLengthMenu: [
			        [10,25, 50, 100, 200, -1],
			        [10,25, 50, 100, 200, "All"]
			    ],
			    iDisplayLength:-1,
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
                width: "2%",
                render: function(data, type, row) {
                    return `<td><input class='subbox' type="checkbox" value=""></td>`;
                }
            }, {
                "width": "40px"
            }, {
                "width": "250px",
            }, {
                "width": "80px"
            }, {
                "width": "180px"
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


    {{-- check box --}}
    <script>
        $('#invoices-mainbox').on('change', function(e) {
            if (this.checked == true) {
                $('.subbox').prop('checked', true)
            } else {
                $('.subbox').prop('checked', false)
            }
            $('.subbox')
        });
        $('#invoices-mangage-mainbox').on('change', function(e) {
            if (this.checked == true) {
                $('.subbox').prop('checked', true)
            } else {
                $('.subbox').prop('checked', false)
            }
            $('.subbox')
        });
    </script>


</body>

</html>
