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
        }

        .statusOn {
            background-color: #00BB56;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
        }

        .activeOff {
            background-color: #ff0000;
            width: 90px;
            height: 30px;
            color: #ffff;
            border-radius: 20px;
            padding: 3px;
            text-align: center;
            margin: auto;
        }

        .activeOn {
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

        .img-banner {
            width: 200px;
            height: 60px;
            object-fit: cover;
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
                                <h5 class="content-title mb-0 my-auto px-2">
                                    <svg style="color: black;margin-bottom:5px;" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.17 13.4775H4.83C1.845 13.4775 0.9375 12.57 0.9375 9.585V4.83C0.9375 1.845 1.845 0.9375 4.83 0.9375H13.1625C16.1475 0.9375 17.055 1.845 17.055 4.83V9.5775C17.0625 12.57 16.155 13.4775 13.17 13.4775ZM4.83 2.0625C2.475 2.0625 2.0625 2.475 2.0625 4.83V9.5775C2.0625 11.9325 2.475 12.345 4.83 12.345H13.1625C15.5175 12.345 15.93 11.9325 15.93 9.5775V4.83C15.93 2.475 15.5175 2.0625 13.1625 2.0625H4.83Z" fill="#292D32"/>
                                        <path d="M9 17.0616C8.6925 17.0616 8.4375 16.8066 8.4375 16.4991V12.9141C8.4375 12.6066 8.6925 12.3516 9 12.3516C9.3075 12.3516 9.5625 12.6066 9.5625 12.9141V16.4991C9.5625 16.8066 9.3075 17.0616 9 17.0616Z" fill="#292D32"/>
                                        <path d="M16.5 10.3125H1.5C1.1925 10.3125 0.9375 10.0575 0.9375 9.75C0.9375 9.4425 1.1925 9.1875 1.5 9.1875H16.5C16.8075 9.1875 17.0625 9.4425 17.0625 9.75C17.0625 10.0575 16.8075 10.3125 16.5 10.3125Z" fill="#292D32"/>
                                        <path d="M12.375 17.0625H5.625C5.3175 17.0625 5.0625 16.8075 5.0625 16.5C5.0625 16.1925 5.3175 15.9375 5.625 15.9375H12.375C12.6825 15.9375 12.9375 16.1925 12.9375 16.5C12.9375 16.8075 12.6825 17.0625 12.375 17.0625Z" fill="#292D32"/>
                                        </svg>
                                    จัดการแบนเนอร์
                                </h5>
                        </div>
                    </div>
                </div>



                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header" style="background-color: white;">

                                <div class="row">
                                    <div class="col-6">
                                        <h5><b>จัดการแบนเนอร์</b></h5>
                                    </div>
                                    <div class="col-6">
                                        <a style="float: right; margin-right:35px;" href="{{ url('/home-banners/add') }}" type="button" class="btn btn-info">เพิ่มแบนเนอร์</a>
                                    </div>
                                </div>
                                <div style="padding-top:60px;"></div>
                                <nav>
                                    <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#all-banner" role="tab" aria-selected="true"><b id="total">ทั้งหมด ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#on-banner" role="tab" aria-selected="false"><b id="on">เปิดการใช้งาน ()</b></a>
                                        <a class="nav-item nav-link" data-toggle="tab" href="#off-banner" role="tab" aria-selected="false"><b id="off">ปิดการใช้งาน ()</b></a>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">


                                    {{-- ทั้งหมด --}}
                                    <div class="tab-pane fade show active" id="all-banner" role="tabpanel" aria-labelledby="all-specialDeal-tab">
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
                                            <div class="col-4 py-3">
                                                <div class="row">
                                                    <label for="" class="px-2 py-2"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                    <span> <input class="form-control" type="text" value="" id="datefilter" name="datefilter" style="height: 40px; width:100%;"></span>
                                                </div>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>
                                        <table class="table table table-striped position-relative my-3" id="allBanner-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th style="text-align: left;">รหัส</th>
                                                    <th>ภาพแบนเนอร์</th>
                                                    <th>active(ขึ้นเป็นรูปแรก เปิดได้อันเดียว)</th>
                                                    <th>ชื่อแบนเนอร์</th>
                                                    <th>วันที่เผยแพร่</th>
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
                                    <div class="tab-pane fade" id="on-banner" role="tabpanel" aria-labelledby="">
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
                                            <div class="col-4 py-3">
                                                <div class="row">
                                                    <label for="" class="px-2 py-2"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                    <span> <input class="form-control" type="text" value="" id="datefilter" name="datefilter" style="height: 40px; width:100%;"></span>
                                                </div>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>
                                        <table class="table table table-striped position-relative my-3" id="onBanner-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th style="text-align: left;">รหัส</th>
                                                    <th>ภาพแบนเนอร์</th>
                                                    <th>active(ขึ้นเป็นรูปแรก)</th>
                                                    <th>ชื่อแบนเนอร์</th>
                                                    <th>วันที่เผยแพร่</th>
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
                                    {{-- end เปิดการใช้งาน --}}


                                    {{-- ปิดการใช้งาน --}}
                                    <div class="tab-pane fade" id="off-banner" role="tabpanel" aria-labelledby="">
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
                                            <div class="col-4 py-3">
                                                <div class="row">
                                                    <label for="" class="px-2 py-2"><b>ระยะเวลาที่เผยแพร่</b></label>
                                                    <span> <input class="form-control" type="text" value="" id="datefilter" name="datefilter" style="height: 40px; width:100%;"></span>
                                                </div>
                                            </div>
                                            <div class="col-3 py-3">
                                                <input type="text" class="form-control" placeholder="พิมพ์คำค้นหา">
                                            </div>
                                        </div>
                                        <table class="table table-striped position-relative my-3 " id="offBanner-table">
                                            <thead class="thead-dark">
                                                <tr style="text-align: center;">
                                                    <th style="text-align: left;">รหัส</th>
                                                    <th>ภาพแบนเนอร์</th>
                                                    <th>active(ขึ้นเป็นรูปแรก)</th>
                                                    <th>ชื่อแบนเนอร์</th>
                                                    <th>วันที่เผยแพร่</th>
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
                                    {{-- end ปิดการใช้งาน --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal ถึงขยะ -->
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ url('/home-banners/delete') }}" method="POST">
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
                                <div style="color: rgb(206 16 16)">คำเตือน : เมื่อลบแล้วข้อมูลจะถูกย้ายไปถังขยะ ไม่สามารถกู้คืนได้</div>
                            </div>
                            <input type="hidden" id="deleteId" name="id">
                            <div class="modal-footer ">
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



    {{-- Script ปฏิทิน --}}
    <link type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    {{-- End Script ปฏิทิน --}}



    <script>
        $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
        });

        $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });

        var start = moment().subtract(1, 'month');
        var end = moment();

        function cb(start, end) {
            start = moment(start);
            end = moment(end);
            $('.daterange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('.daterange').daterangepicker({
            startDate: start,
            endDate: end,
            autoUpdateInput: true,
            alwaysShowCalendars: true,
            locale: {
                format: 'DD/MM/YYYY',
            },
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    </script>

    {{-- script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}
    <script>
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#allBanner-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#onBanner-table').DataTable().columns.adjust();
        });
        $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
            $('#offBanner-table').DataTable().columns.adjust();
        });
    </script>
    {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}

    {{-- script ส่งid record จากปุ่มลบไปยังmodal --}}
    <script>
        $(document).on("click", "#sendIdDelete", function() {
            var homeBannerId = $(this).data('id');
            $("#deleteId").val(homeBannerId);
            console.log(homeBannerId);
        });
    </script>
    {{-- end script --}}

    {{-- ตัวนับจำนวน --}}
    <script>
        function countData() {
            $.ajax({
                url: "/home-banners/count",
                type: "GET",
                dataType: "json",
                success: function(count) {
                    $('#total').text('ทั้งหมด (' + count.total + ')');
                    $('#on').text('เปิดการใช้งาน (' + count.on + ')');
                    $('#off').text('ปิดการใช้งาน (' + count.off + ')');
                },
                error: function() {
                    alert('dfsdf');
                }
            })
        }
        countData();
    </script>
    {{-- end ตัวนับจำนวน --}}



    <script>
        $('#allBanner-table').DataTable({
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
                url: "/home-banners/home-banner-all-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";

                }
            },
            columns: [{
                data: 'รหัส',
                width: "80px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/home-banners/edit/${row.id}" class="text-idSpecailDeal">${row.home_no}</a></td>`
                }
            }, {
                data: 'ภาพแบนเนอร์',
                width: "250px",
                render: function(data, type, row) {
                    console.log(row)
                    if (row.image == null) {
                        return `<td>ไม่ได้ใส่รูปปก</td>`
                    } else {
                        return `<td><img class="img-banner" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td>`
                    }
                }
            }, {
                data: 'active',
                width: "250px",
                render: function(data, type, row) {
                    return `<td>
                        <input type="checkbox" data-on="เปิด" data-off="ปิด" data-toggle="toggle" data-size="sm"
                        class="switchactive" id="${row.id}" ${ row.is_active === 1 ? 'checked' : '' }></td>`
                }
            }, {
                data: 'ชื่อแบนเนอร์',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name ?? 'ไม่ได้ตั้งชื่อ'}</td>`
                }
            }, {
                data: 'วันที่เผยแพร่',
                width: "180px",
                render: function(data, type, row) {
                    if (row.end_date == "") {
                        var date = `ตั้งแต่ ${row.start_date}`;
                    } else {
                        var date = `${row.start_date} - ${row.end_date}`;
                    }
                    return `${date}`
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
                $(row).addClass('switchstatus switchactive');
                $(row).find('.switchstatus').bootstrapToggle();
                $(row).find('.switchactive').bootstrapToggle();
                $(row).on('change', '.switchstatus', function() {
                    var id = $(this).attr('id', data.id);
                    $.ajax({
                        url: '/home-banners/switch-status',
                        type: "POST",
                        datatype: 'json',
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id: data.id,
                        },
                    }).done(function(response) {
                        // console.log(response);
                        $('#allBanner-table').DataTable().ajax.reload();
                        $('#onBanner-table').DataTable().ajax.reload();
                        $('#offBanner-table').DataTable().ajax.reload();
                        countData();
                    });
                    // console.log(id);
                });
                $(row).on('change', '.switchactive', function() {
                    var id = $(this).attr('id', data.id);
                    $.ajax({
                        url: '/home-banners/switch-active',
                        type: "POST",
                        datatype: 'json',
                        data: {
                            _token: '{!! csrf_token() !!}',
                            id: data.id,
                        },
                    }).done(function(response) {
                        $('#allBanner-table').DataTable().ajax.reload();
                        $('#onBanner-table').DataTable().ajax.reload();
                        $('#offBanner-table').DataTable().ajax.reload();
                    });
                    // console.log(id);
                });
            },
        });
    </script>



    <script>
        $('#onBanner-table').DataTable({
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
                url: "/home-banners/home-banner-on-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";

                }
            },
            columns: [{
                data: 'รหัส',
                width: "80px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/home-banners/edit/${row.id}" class="text-idSpecailDeal">${row.home_no}</a></td>`
                }
            }, {
                data: 'ภาพแบนเนอร์',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><td><img class="img-banner" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td></td>`
                }
            }, {
                data: 'active',
                width: "180px",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_active === 1 ? 'activeOn' : 'activeOff' }">${row.is_active === 1 ? 'เปิด' : 'ปิด' }</div>`
                }
            }, {
                data: 'ชื่อแบนเนอร์',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name ?? 'ไม่ได้ตั้งชื่อ'}</td>`
                }
            }, {
                data: 'วันที่เผยแพร่',
                width: "180px",
                render: function(data, type, row) {
                    if (row.end_date == "") {
                        var date = "ไม่มีกำหนด";
                    } else {
                        var date = `${row.start_date} - ${row.end_date}`;
                    }
                    return `${date}`
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
                    return `<div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
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
        $('#offBanner-table').DataTable({
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
                url: "/home-banners/home-banner-off-datatable",
                type: "POST",
                datatype: "json",
                data: function(data) {
                    data._token = "{{ csrf_token() }}";

                }
            },
            columns: [{
                data: 'รหัส',
                width: "80px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;"><a href="/home-banners/edit/${row.id}" class="text-idSpecailDeal">${row.home_no}</a></td>`
                }
            }, {
                data: 'ภาพแบนเนอร์',
                width: "250px",
                render: function(data, type, row) {
                    // console.log(row)
                    return `<td><td><img class="img-banner" src="${row.image ? /storage/+ row.image : '/assets/images/ud.png'}" /></td></td>`
                }
            }, {
                data: 'active',
                width: "180px",
                render: function(data, type, row) {
                    return ` <div class="${ row.is_active === 1 ? 'activeOn' : 'activeOff' }">${row.is_active === 1 ? 'เปิด' : 'ปิด' }</div>`
                }
            }, {
                data: 'ชื่อแบนเนอร์',
                width: "120px",
                render: function(data, type, row) {
                    return `<td style="text-align: left;">${row.name ?? 'ไม่ได้ตั้งชื่อ'}</td>`
                }
            }, {
                data: 'วันที่เผยแพร่',
                width: "180px",
                render: function(data, type, row) {
                    if (row.end_date == "") {
                        var date = "ไม่มีกำหนด";
                    } else {
                        var date = `${row.start_date} - ${row.end_date}`;
                    }
                    return `${date}`
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
                    return `<div class="${ row.is_status === 1 ? 'statusOn' : 'statusOff' }">${row.is_status === 1 ? 'เปิดใช้งาน' : 'ปิดใช้งาน' }</div>`
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






</body>

</html>
