<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		<meta name="Author" content="">
		<meta name="Keywords" content=""/>

		<!-- Title -->
		<title>จัดการดีลสุดพิเศษ</title>

		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
		<!-- Favicon -->
		<link rel="icon" href="{{asset('assets/images/shopping.png')}}" type="image/x-icon"/>

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
		<link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>

		<!--  Right-sidemenu css -->
		<link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>

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


	</head>

	<body class="main-body app sidebar-mini">


		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
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
                                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                      </svg>
                                    Dashborad > </h5>
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
                                            <a style="float: right; margin-right:35px;" href="{{url ('addDeal')}}" type="button" class="btn btn-info">เพิ่มหมวดหมู่</a>
                                        </div>
                                    </div>




                                    <nav>
                                        <div class="nav main-nav-line" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="invoices-table-tab" data-toggle="tab" href="#nav-invoices" role="tab" aria-controls="nav-invoices" aria-selected="true">ใบแจ้งหนี้</a>
                                            <a class="nav-item nav-link" id="invoices-manage-table-tab" data-toggle="tab" href="#nav-invoices-manage" role="tab" aria-controls="nav-invoices-manage" aria-selected="false">จัดการใบแจ้งหนี้</a>

                                        </div>
                                    </nav>


                                    <div class="tab-content" id="nav-tabContent">
                                        {{-- ใบแจ้งหนี้ --}}
                                        <div class="tab-pane fade show active" id="nav-invoices" role="tabpanel" aria-labelledby="nav-invoices-tab">
                                            <div class="jumps-prevent" style="padding-top: 25px;"></div>
                                            <div class="row px-2 my-3">
                                                <div class="col-3">
                                                    <div class="mb-1 ">วันที่ออกเอกสาร</div>
                                                    <div>
                                                        <input class="form-control" type="text" value="" id="datefilter" name="datefilter">
                                                    </div>
                                                </div>
                                                <div class="col-4" style="align-items: right;">

                                                </div>
                                                <div class="col-2 ms-auto">
                                                    <div class="mb-1 "><a class="text-muted px-4"></a></div>
                                                    <div><a href="#"><label class="btn px-4" style="background-color:#009DB5; color:white;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                </svg> <u>ดาวน์โหลด (Excel)</u></label>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-3 ms-auto ">
                                                    <div class="mb-1">ค้นหา<a class="text-muted px-2">เลขเอกสารใบแจ้งหนี้ , ชื่อบริษัท</a></div>
                                                    <div class="">
                                                        <div><input class="form-control" id="search" type="text" value="" style="width:280px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-striped position-relative my-3" id="invoices-table">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th class=""><input id='invoices-mainbox' type="checkbox"></th>
                                                        <th style="text-align: left;">รหัสดีล</th>
                                                        <th>ชื่อดีล</th>
                                                        <th>หมวดหมู่</th>
                                                        <th>ระยะเวลา</th>
                                                        <th>ผู้สร้าง</th>
                                                        <th>แก้ไข</th>
                                                        <th>สถานะ</th>
                                                        <th>ถังขยะ(เดี๋ยวมาลบ)</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: center">
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>

                                                      <tr>
                                                        <td class=""><input id='invoices-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>


                                        </div>
                                        {{-- end ใบแจ้งหนี้ --}}


                                        {{-- จัดการใบแจ้งหนี้ --}}
                                        {{-- <div class="tab-pane fade" id="nav-invoices-manage" role="tabpanel" aria-labelledby="nav-invoices-manage-tab">
                                            <div class="jumps-prevent" style="padding-top: 25px;"></div>
                                            <div class="row px-2 my-3">
                                                <div class="col-3">
                                                    <div class="mb-1 ">วันที่ออกเอกสาร</div>
                                                    <div>
                                                        <input class="form-control" type="text" value="" id="datefilter" name="datefilter">
                                                    </div>
                                                </div>
                                                <div class="col-4" style="align-items: right;"></div>
                                                <div class="col-2 ms-auto">
                                                    <div class="mb-1 "><a class="text-muted px-4"></a></div>
                                                    <div><a href="#"><label class="btn px-4" style="background-color:#009DB5; color:white;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                                </svg> <u>ดาวน์โหลด (Excel)</u></label>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-3 ms-auto ">
                                                    <div class="mb-1">ค้นหา<a class="text-muted px-2">เลขเอกสารใบแจ้งหนี้ , ชื่อบริษัท</a></div>
                                                    <div class="">
                                                        <div><input class="form-control" id="search" type="text" value="" style="width:280px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table table-striped position-relative my-3" id="invoices-manage-table">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th class=""><input id='invoices-mangage-mainbox' type="checkbox"></th>
                                                        <th style="text-align: left;">เลขเอกสารใบแจ้งหนี้</th>
                                                        <th>วันที่ออกเอกสาร</th>
                                                        <th>วันครบกำหนดชำระ</th>
                                                        <th>รอบเอกสาร</th>
                                                        <th>ชื่อบริษัท</th>
                                                        <th>จำนวนรายการขนส่ง</th>
                                                        <th>ยอดเงินสุทธิ</th>
                                                        <th>สถานะการชำระ</th>
                                                        <th>  </th>
                                                    </tr>
                                                </thead>
                                                <tbody style="text-align: center;">
                                                    <tr>
                                                        <td class=""><input id='invoices-mangage-mainbox' type="checkbox"></th>
                                                        <td style="text-align: left;"></td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid; border-width:2px; padding: 5px 10px 5px 10px;border-radius:7px;color: #FFA800; text-align: center; ">รอตรวจสอบ</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#uploadFile">
                                                            <u><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill"
                                                                                                                            viewBox="0 0 16 16">
                                                                                                                            <path
                                                                                                                                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z" />
                                                                                                                </svg>อัพโหลดไฟล์</u>
                                                          </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mangage-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;"></td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>12</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid;border-width:2px;padding-top: 5px; padding-right: 22px; padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #FF008A; text-align: center; ">ค้างชำระ</span>
                                                        </td>
                                                        <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#uploadFile">
                                                            <u><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up-fill"
                                                                                                                            viewBox="0 0 16 16">
                                                                                                                            <path
                                                                                                                                d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2z" />
                                                                                                                </svg>อัพโหลดไฟล์</u>
                                                          </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mangage-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>วันจันทร์</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid; border-width:2px; padding-top: 5px;padding-right: 22px;padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #2FB500; text-align: center; ">ชำระแล้ว</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">
                                                                <u>INV65110002</u><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                    </svg>
                                                              </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=""><input id='invoices-mangage-mainbox' type="checkbox"></td>
                                                        <td style="text-align: left;">INV65110002</td>
                                                        <td>08/11/2565</td>
                                                        <td style="color: red;">20/11/2565</td>
                                                        <td>วันอังคาร</td>
                                                        <td>บริษัท โรงแรมเกทเวย์ จำกัด (บัญชี)</td>
                                                        <td>12</td>
                                                        <td>1,328</td>
                                                        <td>
                                                            <span class="rounded-10" style="border-style: solid; border-width:2px; padding-top: 5px;padding-right: 22px;padding-bottom: 5px; padding-left: 22px;border-radius:7px;color: #2FB500; text-align: center; ">ชำระแล้ว</span>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">
                                                                <u>INV65110002</u><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                                    </svg>
                                                              </button>

                                                            </td>
                                                    </tr>
                                                </tbody>
                                            </table>






                                        </div> --}}
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
                $('#invoices-table').DataTable().columns.adjust();
            });
            $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
                $('#invoices-manage-table').DataTable().columns.adjust();
            });
        </script>
        {{-- End script เอาไว้จัดระเบียบเทเบิลไม่ให้บีบตัว --}}





        <script>
            $('#invoices-table').DataTable({
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
                    "width": "120px"
                }, {
                    "width": "100px",
                }, {
                    "width": "100px"
                }, {
                    "width": "80px"
                }, {
                    "width": "200px"
                }, {
                    "width": "120px"
                }, {
                    "width": "80px"
                }, {
                    "width": "150px"
                }
            ],
                drawCallback: function(settings) {
                    $('th').removeClass('td_detail shadow');
                }
            });
        </script>



        <script>
            $('#invoices-manage-table').DataTable({

                scrollY: false,
                scrollX: true,
                scrollCollapse: true,
                fixedHeader: {
                    header: true,
                    footer: true
                },

                // paging: true,
                dom: 'rtip',
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
                    "width": "120px"
                }, {
                    "width": "100px",
                }, {
                    "width": "100px"
                }, {
                    "width": "80px"
                }, {
                    "width": "200px"
                }, {
                    "width": "120px"
                }, {
                    "width": "80px"
                }, {
                    "width": "150px"
                }
            ],
                drawCallback: function(settings) {
                    $('th').removeClass('td_detail shadow');
                }
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
