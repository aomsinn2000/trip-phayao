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

    <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet">

    {{-- script datatogle เปิด/ปิด --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    {{-- script datatogle เปิด/ปิด --}}

    {{-- query ตำบล อำเภอจังหวัด --}}
    <link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    {{-- end query ตำบล อำเภอจังหวัด --}}







    <style>
        input[type=checkbox] {
            transform: scale(2.5);
            margin: 15px;
        }

        .btn-light {
            color: #242f48;
            background-color: #ffffff;
        }
    </style>
    <style>
        .box-gallery-image {
            box-sizing: border-box;
            border-radius: 13px;
            height: 140px;
            width: 200px;
            position: relative;
            margin-right: 10px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .box-add-image .btn-upload {
            background: #00AEEF;
            border-radius: 5px;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            line-height: 20px;
            text-align: center;
            color: #FFFFFF;
        }

        .tx-5 {
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 19px;
            color: #00AEEF;
        }

        .box-gallery-image img {
            object-fit: cover;
            height: 140px;
            width: 200px;
        }

        .box-gallery-image .btn-delete {
            position: absolute;
            width: 30px;
            height: 30px;
            bottom: 15px;
            right: 15px;
            border: 2px solid #ffff;
            border-radius: 100px;
            background: #FFEFEF;
        }

        .box-gallery-image .btn-delete img {
            object-fit: unset;
            width: 20px;
            height: 20px;
        }

        .box-add-image {
            border: 1px dashed #053ec2;
            box-sizing: border-box;
            border-radius: 13px;
            height: 140px;
            width: 200px;
            cursor: pointer;
            background-color: #F2FBFE;
        }

        .hideinput {
            width: 0;
            position: absolute;
            z-index: -1;
        }

        .toggle-off.btn-xs {
            padding-right: 1rem;
            padding-top: 8px;
            font-size: 12px;
            background-color: red;
            color: #ffff;
        }

        .toggle-on.btn-xs {
            padding-right: 1rem;
            padding-top: 8px;
            font-size: 12px;
            background-color: green;
        }

        .toggle.btn-xs {
            min-width: 2.19rem;
            min-height: 1.375rem;
            border-radius: 50px;
        }

        .dropify-wrapper {
            height: 170px !important;
        }

        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #3fa5ff;
            background-color: #fff;
            font-size: 15px;
            border-radius: 50px;
            border-color: #3fa5ff;
            border-style: solid;
            border-width: 2px;
        }

        .bootstrap-tagsinput {
            width: 80%;
        }

        .dropify-wrapper {
            display: block;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
            height: 140px !important;
            padding: 5px 10px;
            font-size: 14px;
            line-height: 22px;
            color: #334151;
            background-color: #FFF;
            background-image: none;
            text-align: center;
            border: 1px solid #e1e6f1;
            -webkit-transition: border-color 0.15s linear;
            transition: border-color 0.15s linear;
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


        <div class="main-content app-content px-5">
            <div class="container-fluid">

                {{-- header บอกว่าอยู่หน้าไหน --}}
                <div class="breadcrumb-header justify-content-between">
                    <div class="my-auto">
                        <div class="d-flex">
                            <h5 class="content-title mb-0 my-auto">
                                <h5 class="content-title mb-0 my-auto">
                                    <svg style="color: black; margin-bottom:5px;" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 11.8125C7.4475 11.8125 6.1875 10.5525 6.1875 9C6.1875 7.4475 7.4475 6.1875 9 6.1875C10.5525 6.1875 11.8125 7.4475 11.8125 9C11.8125 10.5525 10.5525 11.8125 9 11.8125ZM9 7.3125C8.07 7.3125 7.3125 8.07 7.3125 9C7.3125 9.93 8.07 10.6875 9 10.6875C9.93 10.6875 10.6875 9.93 10.6875 9C10.6875 8.07 9.93 7.3125 9 7.3125Z"
                                            fill="#292D32" />
                                        <path
                                            d="M11.4075 16.6427C11.25 16.6427 11.0925 16.6202 10.935 16.5827C10.47 16.4552 10.08 16.1627 9.8325 15.7502L9.7425 15.6002C9.3 14.8352 8.6925 14.8352 8.25 15.6002L8.1675 15.7427C7.92 16.1627 7.53 16.4627 7.065 16.5827C6.5925 16.7102 6.105 16.6427 5.6925 16.3952L4.4025 15.6527C3.945 15.3902 3.615 14.9627 3.4725 14.4452C3.3375 13.9277 3.405 13.3952 3.6675 12.9377C3.885 12.5552 3.945 12.2102 3.8175 11.9927C3.69 11.7752 3.3675 11.6477 2.925 11.6477C1.83 11.6477 0.9375 10.7552 0.9375 9.66021V8.34021C0.9375 7.24521 1.83 6.35272 2.925 6.35272C3.3675 6.35272 3.69 6.22521 3.8175 6.00772C3.945 5.79022 3.8925 5.44521 3.6675 5.06272C3.405 4.60521 3.3375 4.06521 3.4725 3.55521C3.6075 3.03771 3.9375 2.61021 4.4025 2.34771L5.7 1.60521C6.5475 1.10271 7.665 1.39521 8.175 2.25771L8.265 2.40771C8.7075 3.17271 9.315 3.17271 9.7575 2.40771L9.84 2.26521C10.35 1.39521 11.4675 1.10271 12.3225 1.61271L13.6125 2.35521C14.07 2.61771 14.4 3.04521 14.5425 3.56271C14.6775 4.08021 14.61 4.61272 14.3475 5.07022C14.13 5.45271 14.07 5.79772 14.1975 6.01522C14.325 6.23272 14.6475 6.36021 15.09 6.36021C16.185 6.36021 17.0775 7.25271 17.0775 8.34771V9.66772C17.0775 10.7627 16.185 11.6552 15.09 11.6552C14.6475 11.6552 14.325 11.7827 14.1975 12.0002C14.07 12.2177 14.1225 12.5627 14.3475 12.9452C14.61 13.4027 14.685 13.9427 14.5425 14.4527C14.4075 14.9702 14.0775 15.3977 13.6125 15.6602L12.315 16.4027C12.03 16.5602 11.7225 16.6427 11.4075 16.6427ZM9 13.8677C9.6675 13.8677 10.29 14.2877 10.7175 15.0302L10.8 15.1727C10.89 15.3302 11.04 15.4427 11.22 15.4877C11.4 15.5327 11.58 15.5102 11.73 15.4202L13.0275 14.6702C13.2225 14.5577 13.3725 14.3702 13.4325 14.1452C13.4925 13.9202 13.4625 13.6877 13.35 13.4927C12.9225 12.7577 12.87 12.0002 13.2 11.4227C13.53 10.8452 14.2125 10.5152 15.0675 10.5152C15.5475 10.5152 15.93 10.1327 15.93 9.65271V8.33271C15.93 7.86021 15.5475 7.47021 15.0675 7.47021C14.2125 7.47021 13.53 7.14021 13.2 6.56272C12.87 5.98522 12.9225 5.22771 13.35 4.49271C13.4625 4.29771 13.4925 4.06521 13.4325 3.84021C13.3725 3.61521 13.23 3.43521 13.035 3.31521L11.7375 2.57271C11.415 2.37771 10.9875 2.49021 10.7925 2.82021L10.71 2.96271C10.2825 3.70521 9.66 4.12521 8.9925 4.12521C8.325 4.12521 7.7025 3.70521 7.275 2.96271L7.1925 2.81271C7.005 2.49771 6.585 2.38521 6.2625 2.57271L4.965 3.32271C4.77 3.43521 4.62 3.62271 4.56 3.84771C4.5 4.07271 4.53 4.30521 4.6425 4.50022C5.07 5.23521 5.1225 5.99271 4.7925 6.57022C4.4625 7.14772 3.78 7.47771 2.925 7.47771C2.445 7.47771 2.0625 7.86021 2.0625 8.34021V9.66021C2.0625 10.1327 2.445 10.5227 2.925 10.5227C3.78 10.5227 4.4625 10.8527 4.7925 11.4302C5.1225 12.0077 5.07 12.7652 4.6425 13.5002C4.53 13.6952 4.5 13.9277 4.56 14.1527C4.62 14.3777 4.7625 14.5577 4.9575 14.6777L6.255 15.4202C6.4125 15.5177 6.6 15.5402 6.7725 15.4952C6.9525 15.4502 7.1025 15.3302 7.2 15.1727L7.2825 15.0302C7.71 14.2952 8.3325 13.8677 9 13.8677Z"
                                            fill="#292D32" />
                                    </svg>
                                    จัดการหมวดหมู่ >
                                </h5>
                            </h5>
                            <a href="{{ url('/destination-folders/') }}">
                                <h5 class="content-title mb-0 my-auto px-2" style="padding-top: 1px;">ตั้งค่าโฟลเดอร์สถานที่ยอดฮิต </h5>
                            </a>
                            <h5 class="content-title mb-0 my-auto " style="padding-bottom: 5px;"> > เพิ่มโฟลเดอร์สถานที่ยอดฮิต</h5>
                        </div>
                    </div>
                </div>
                {{-- end header บอกว่าอยู่หน้าไหน --}}




                <form action="{{ url('/destination-folders/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-7">
                        <div class="card card-body">
                            <div class="form-group row py-2">
                                <label for="" class="col-sm-3 col-form-label">รหัสโฟลเดอร์</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control"value="{{ $folder_no }}" name="folder_no">
                                </div>

                            </div>
                            <div class="row d-flex justify-content-between py-2">
                                <div class="col-6">
                                    <div class="row">
                                        <svg style="margin-top: 3px; margin-left:10px; color:#00AEEF;"class="bi bi-exclamation-circle-fill " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        <h5 class="px-2"><b>เพิ่มข้อมูล</b></h5>
                                    </div>
                                </div>
                                <div class="row-6 ">
                                    <label for="">สถานะ</label>
                                    <input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs"value="1" name="is_status" checked>
                                </div>
                            </div>


                            <div class="">
                                <label>ชื่อโฟลเดอร์สถานที่ (TH)</label>
                                <span id="showNumTh" style="float: right;">0/100</span>
                                @error('name_th')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control nameDealTh mb-2" onkeyup="inputNameTh(this)" placeholder="กรุณากรอกชื่อสถานที่ภาษาไทย" value="{{ old('name_th') }}" name="name_th">
                                <label>ชื่อโฟลเดอร์สถานที่ (EN)</label>
                                <span id="showNumEn" style="float: right;">0/100</span>

                                <input type="text" class="form-control mb-2" onkeyup="inputNameEn(this)" maxlength="100" placeholder="กรุณากรอกชื่อสถานที่ภาษาอังกฤษ" value="{{ old('name_eb') }}" name="name_en">
                                <label>คำโปรย (TH)</label>
                                <textarea id="textFit" type="text" class="form-control mb-2" placeholder="กรุณากรอกคำโปรยภาษาไทย" name="slogan_th">{{ old('slogan_th') }}</textarea>
                                <label>คำโปรย (EN)</label>
                                <textarea id="textFit" type="text" class="form-control mb-2" placeholder="กรุณากรอกคำโปรยภาษาอังกฤษ" name="slogan_en">{{ old('slogan_en') }}</textarea>
                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="row py-3">
                                <svg style="margin-top: 3px; margin-left:10px; color:#00AEEF;"class="bi bi-exclamation-circle-fill " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <h5 class="px-2"><b>สถานที่ตั้ง</b></h5>
                            </div>
                            <div class="row my-2">
                                <div class="form-group col-6">
                                    <label>ตำบล</label>
                                    @error('sub_district')
                                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" id="sub_district" class="form-control" placeholder="กรุณากรอกตำบล" value="{{ old('sub_district') }}" name="sub_district">
                                </div>
                                <div class="form-group col-6">
                                    <label>อำเภอ</label>
                                    @error('district')
                                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" id="district" class="form-control" placeholder="กรุณากรอกอำเภอ" value="{{ old('district') }}" name="district">
                                </div>
                                <div class="form-group col-6">
                                    <label>จังหวัด</label>
                                    @error('province')
                                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" id="province" class="form-control" placeholder="กรุณากรอกจังหวัด" value="{{ old('province') }}" name="province">
                                </div>
                                <div class="form-group col-6">
                                    <label>รหัสไปรษณีย์</label>
                                    <input type="text" id="postcode" class="form-control" placeholder="กรุณากรอกรหัสไปรษณีย์" value="{{ old('postcode') }}" name="postcode">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-6"><b>รายละเอียดแบบย่อ</b></div>
                            </div>
                            <textarea id="textFit" class="summernote" name="detail_th">{{ old('detail_th') }}</textarea>
                        </div>

                        <div class="card card-body" style="height:auto !important;">
                            <div>
                                <svg style="color:#00AEEF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>
                                ภาพแบนเนอร์
                                <span id=""style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span>
                            </div><br>
                            <div class="mb-4" style="width: 415px;">
                                @error('banner_image')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="file" class="input-upload-imageBanner" data-height="198" data-max-file-size="10M" data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" name="banner_image" />
                            </div>
                            <br><br>

                            <div>
                                <svg style="color:#00AEEF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>
                                ภาพโฟลเดอร์
                                <span id=""style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span>
                            </div>
                            <div class="py-2" style="width: 210px;">
                                @error('cover_image')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="file" class="input-upload-image" data-height="198" data-max-file-size="10M" data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" name="cover_image" />
                            </div><br><br>



                            <div class="">
                                <svg style="color:#00AEEF;"xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16">
                                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" />
                                </svg>
                                วิดีโอ
                                <span id=""style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span>
                            </div>
                            <div class="py-0">
                                <div class="form-group row py-2">
                                    <label for="link-video" style="text-align:center"class="col-sm-2 col-form-label"><b>
                                            <h5>Link*</h5>
                                        </b></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="{{ old('link') }}" name="link">
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row justify-content-end">
                                <a href="{{ url('/destination-folders/') }}" type="button" class="btn btn-secondary" style="width:150px; ">ยกเลิก</a>
                                <span class="px-2">
                                    <button type="submit" class="btn btn-info" style="width:150px;">บันทึก</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    <!-- Internal Select2.min js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>


    {{-- script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea ฟังก์ชันเสริม --}}
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.autotab.min.js') }}"></script>
    {{-- end script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea ฟังก์ชันเสริม --}}

    {{-- query ตำบล อำเภอจังหวัด --}}
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    {{-- end query ตำบล อำเภอจังหวัด --}}





    {{--  query ตำบล อำเภอจังหวัด --}}
    <script>
        $.Thailand({
            $district: $("#sub_district"), // input ของตำบล
            $amphoe: $("#district"), // input ของอำเภอ
            $province: $("#province"), // input ของจังหวัด
            $zipcode: $("#postcode") // input ของรหัสไปรษณีย์
        });
    </script>
    {{-- end query ตำบล อำเภอจังหวัด --}}

    {{-- ทำให้textarea ขยายตามข้อมูล --}}
    <script>
        $(function() {
            $('#textFit').on('input', function() {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });
        });
    </script>
    {{-- endทำให้textarea ขยายตามข้อมูล --}}

    {{-- script อัพโหลดรูปภาพ banner ใหญ่ --}}
    <script type="text/javascript">
        $('.input-upload-imageBanner').dropify({
            tpl: {
                wrap: '<div class="dropify-wrapper dropify-wrapper"></div>',
                loader: '<div class="dropify-loader"></div>',
                message: '<div class="dropify-message"><span class="" /><div class="text-center"><button class="btn  btn-link">เพิ่มรูปภาพ</button></div> <p class=""><div class="text-color-1 font-weight-light fs-14" style="color:#00AEEF"><b>หรือวางไฟล์เพื่ออัพโหลด</b><p style="color:#C4C4C4;font-size:12px;">ขนาดที่แนะนำ 1200*628</p></div></p></div>',
                preview: '<label class="dropify-preview " for="drop-1"><span class="dropify-render"><div class="fildrop"></div></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></label>',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton: '<button type="button" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="20" ></button>',
                errorLine: '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });
    </script>
    {{-- end script อัพโหลดรูปภาพ banner ใหญ่ --}}

    {{-- end script อัพโหลดรูปภาพปกโฟลเดอร์ --}}
    <script type="text/javascript">
        $('.input-upload-image').dropify({
            tpl: {
                wrap: '<div class="dropify-wrapper dropify-wrapper"></div>',
                loader: '<div class="dropify-loader"></div>',
                message: '<div class="dropify-message"><span class="" /><div class="text-center"><button class="btn  btn-link">เพิ่มรูปภาพ</button></div> <p class=""><div class="text-color-1 font-weight-light fs-14" style="color:#00AEEF"><b>หรือวางไฟล์เพื่ออัพโหลด</b><p style="color:#C4C4C4;font-size:12px;"></p></div></p></div>',
                preview: '<label class="dropify-preview " for="drop-1"><span class="dropify-render"><div class="fildrop"></div></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></label>',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton: '<button type="button" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="20"></button>',
                errorLine: '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });
    </script>
    {{-- end script อัพโหลดรูปภาพปกโฟลเดอร์}



    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 100ตัว ชื่ออังกฤษ ชื่อไทย --}}
    <script>
        function inputNameTh(val) {
            var len = val.value.length;
            if (len >= 100) {
                val.value = val.value.substring(0, 100);
            } else {
                $('#showNumTh').text(100 - len + ' / 100');
            }
        };

        function inputNameEn(val) {
            var len = val.value.length;
            if (len >= 100) {
                val.value = val.value.substring(0, 100);
            } else {
                $('#showNumEn').text(100 - len + ' / 100');
            }
        };
    </script>
    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 100ตัว ชื่ออังกฤษ ชื่อไทย --}}

    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 300ตัว การเดินทาง ฤดูกาลท่องเที่ยว --}}
    <script>
        function inputNameTravel(val) {
            var len = val.value.length;
            if (len >= 300) {
                val.value = val.value.substring(0, 300);
            } else {
                $('#showNumTravel').text(300 - len + ' / 300');
            }
        };

        function inputNameSeason(val) {
            var len = val.value.length;
            if (len >= 300) {
                val.value = val.value.substring(0, 300);
            } else {
                $('#showNumSeason').text(300 - len + ' / 300');
            }
        };
    </script>
    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 300ตัว การเดินทาง ฤดูกาลท่องเที่ยว --}}








    {{-- ลิมิตพิมพ์ได้กี่ตัว  เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea --}}
    <script type="text/javascript">
        $(document).ready(function() {

            $('.summernote').summernote({
                height: 300,
            });
        });
    </script>
    {{-- end เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea --}}








</body>

</html>
