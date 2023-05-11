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
    <title>แก้ไขสถานที่ท่องเที่ยว - {{ $touristAttraction->name_th }}</title>

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

    {{-- hashtags --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    {{-- end hashtags --}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/input-tag.css') }}">

    {{-- ให้เลือกแท็ก โฟลเดอร์ --}}
    <link rel="stylesheet" href="{{ asset('assets/css/tagify.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/dragsort/dist/dragsort.css" media="print" onload="this.media='all'">
    {{-- end ให้เลือกแท็ก โฟลเดอร์ --}}

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

        .select-tags {
            width: 100%;
            /* display: none; */
        }

        .toggle.btn-sm {
            min-width: 2.19rem;
            min-height: 1.375rem;
            border-radius: 50px;
        }

        .toggle-on.btn-sm {
            padding-right: 1rem;
            background-color: #37b049;
        }

        .toggle-off.btn-sm {
            padding-right: 1rem;
            background-color: #ff0000;
            color: #fff;
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
                            <a href="{{ url('/tourist-attractions/') }}">
                                <h5 class="content-title mb-0 my-auto">
                                    <svg style="color: black;margin-bottom:5px;" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.5 17.0625H1.5C1.1925 17.0625 0.9375 16.8075 0.9375 16.5C0.9375 16.1925 1.1925 15.9375 1.5 15.9375H16.5C16.8075 15.9375 17.0625 16.1925 17.0625 16.5C17.0625 16.8075 16.8075 17.0625 16.5 17.0625Z" fill="#292D32" />
                                        <path
                                            d="M10.875 4.67306C10.17 4.67306 9.465 4.53808 8.79 4.26808C8.58 4.18558 8.4375 3.97557 8.4375 3.74307V1.49307C8.4375 1.30557 8.5275 1.13307 8.685 1.02807C8.8425 0.92307 9.0375 0.900557 9.21 0.968057C10.2825 1.39556 11.4675 1.39556 12.54 0.968057C12.7125 0.900557 12.9075 0.92307 13.065 1.02807C13.2225 1.13307 13.3125 1.30557 13.3125 1.49307V3.74307C13.3125 3.97557 13.17 4.17808 12.96 4.26808C12.285 4.53808 11.58 4.67306 10.875 4.67306ZM9.5625 3.35305C10.4175 3.61555 11.3325 3.61555 12.1875 3.35305V2.26559C11.325 2.47559 10.425 2.47559 9.5625 2.26559V3.35305Z"
                                            fill="#292D32" />
                                        <path d="M9 6.5625C8.6925 6.5625 8.4375 6.3075 8.4375 6V3.75C8.4375 3.4425 8.6925 3.1875 9 3.1875C9.3075 3.1875 9.5625 3.4425 9.5625 3.75V6C9.5625 6.3075 9.3075 6.5625 9 6.5625Z" fill="#292D32" />
                                        <path
                                            d="M15 17.0625H3C2.6925 17.0625 2.4375 16.8075 2.4375 16.5V8.25C2.4375 6.435 3.435 5.4375 5.25 5.4375H12.75C14.565 5.4375 15.5625 6.435 15.5625 8.25V16.5C15.5625 16.8075 15.3075 17.0625 15 17.0625ZM3.5625 15.9375H14.4375V8.25C14.4375 7.065 13.935 6.5625 12.75 6.5625H5.25C4.065 6.5625 3.5625 7.065 3.5625 8.25V15.9375Z"
                                            fill="#292D32" />
                                        <path d="M14.5655 9.5625H3.43555C3.12805 9.5625 2.87305 9.3075 2.87305 9C2.87305 8.6925 3.12805 8.4375 3.43555 8.4375H14.5655C14.873 8.4375 15.128 8.6925 15.128 9C15.128 9.3075 14.873 9.5625 14.5655 9.5625Z" fill="#292D32" />
                                        <path d="M6.55469 9H5.42969V16.5H6.55469V9Z" fill="#292D32" />
                                        <path d="M9.55469 9H8.42969V16.5H9.55469V9Z" fill="#292D32" />
                                        <path d="M12.5547 9H11.4297V16.5H12.5547V9Z" fill="#292D32" />
                                    </svg>
                                    จัดการสถานที่ท่องเที่ยว >
                                </h5>
                            </a>
                            <h5 class="content-title mb-0 my-auto px-2" style="padding-bottom: 5px;"> แก้ไขสถานที่ท่องเที่ยว - {{ $touristAttraction->name_th }}</h5>

                        </div>
                    </div>
                </div>
                {{-- end header บอกว่าอยู่หน้าไหน --}}




                <form action="{{ url('/tourist-attractions/save-update/' . $touristAttraction->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-7">
                        <div class="card card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}<br />
                                </div>
                            @endif
                            <div class="form-group row py-2">

                                <label for="idUser" class="col-sm-3 col-form-label">รหัสสถานที่ท่องเที่ยว</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control" id="idUser" value="{{ $touristAttraction->attraction_no }}">
                                </div>

                            </div>
                            <div class="row d-flex justify-content-between py-2">
                                <div class="col-6">
                                    <div class="row">
                                        <svg style="margin-top: 3px; margin-left:10px; color:#00AEEF;"class="bi bi-exclamation-circle-fill " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        <h5 class="px-2"><b>แก้ไขข้อมูล</b></h5>
                                    </div>
                                </div>
                                <div class="row-6 ">
                                    <label for="">สถานะ</label>
                                    <input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs" {{ $touristAttraction->is_status == 1 ? 'checked' : '' }} name="is_status">
                                </div>
                            </div>


                            <div class="">
                                <label>ชื่อสถานที่ท่องเที่ยว (TH)</label>
                                <span id="showNumTh" style="float: right;">0/100</span>
                                @error('name_th')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control nameDealTh mb-2" id="" onkeyup="inputNameTh(this)" placeholder="กรุณากรอกชื่อสถานที่ภาษาไทย" value="{{ $touristAttraction->name_th }}" name="name_th">
                                <label>ชื่อสถานที่ท่องเที่ยว (EN)</label>
                                @error('name_en')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <span id="showNumEn" style="float: right;">0/100</span>
                                <input type="text" class="form-control test" id="" onkeyup="inputNameEn(this)" maxlength="100" placeholder="กรุณากรอกชื่อสถานที่ภาษาอังกฤษ" value="{{ $touristAttraction->name_en }}" name="name_en">
                                <label>รายละเอียด</label>
                                <span id="showDescription" style="float: right;">0/150</span>
                                <textarea type="text" class="form-control" id="" onkeyup="inputDescription(this)" maxlength="150" placeholder="กรุณากรอกรายละเอียด" name="detail_th">{{ $touristAttraction->detail_th }}</textarea>
                            </div>
                            <div class="row my-2">
                                <div class="form-group col-6">
                                    <label for="category">หมวดหมู่</label>
                                    @error('tourist_attraction_category_id')
                                        <div class="alert alert-danger text-danger">{{ $message }}</div>
                                    @enderror
                                    <select class="form-control" id="category" aria-placeholder="" name="tourist_attraction_category_id">
                                        @foreach ($touristAttractionCategory as $item)
                                            <option value="{{ $item->id }}" {{ $item->id === $touristAttraction->tourist_attraction_category_id ? 'selected' : '' }}>{{ $item->name_th }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                    <input type="text" id="sub_district" class="form-control" placeholder="กรุณากรอกตำบล" value="{{ $touristAttraction->sub_district }}" name="sub_district">
                                </div>
                                <div class="form-group col-6">
                                    <label>อำเภอ</label>
                                    <input type="text" id="district" class="form-control" placeholder="กรุณากรอกอำเภอ" value="{{ $touristAttraction->district }}" name="district">
                                </div>
                                <div class="form-group col-6">
                                    <label>จังหวัด</label>
                                    <input type="text" id="province" class="form-control" placeholder="กรุณากรอกจังหวัด" value="{{ $touristAttraction->province }}" name="province">
                                </div>
                                <div class="form-group col-6">
                                    <label>รหัสไปรษณีย์</label>
                                    <input type="text" id="postcode" class="form-control" placeholder="กรุณากรอกรหัสไปรษณีย์" value="{{ $touristAttraction->postcode }}" name="postcode">
                                </div>
                                <div class="form-group col-12">
                                    <label>พิกัด (Google Maps)</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอกลิงก์ google maps" value="{{ $touristAttraction->map_link }}" name="map_link">
                                </div>
                                <div class="form-group col-6">
                                    <label>ละติจูด (Latitude)</label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอกละติจูด(Lat)" value="{{ $touristAttraction->latitude }}" name="latitude">
                                </div>
                                <div class="form-group col-6">
                                    <label>ลองติจูด (Longitude) </label>
                                    <input type="text" class="form-control" placeholder="กรุณากรอกลองติจูด(Long)" value="{{ $touristAttraction->longitude }}" name="longitude">
                                </div>
                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="row py-3">
                                <svg style="margin-top: 3px; margin-left:10px; color:#00AEEF;"class="bi bi-exclamation-circle-fill " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                                <h5 class="px-2"><b>การเดินทางและช่วงฤดูท่องเที่ยว</b></h5>
                            </div>
                            <div class="row my-2">
                                <div class="form-group col-12">
                                    <label>การเดินทาง</label>
                                    <span id="showNumTravel" style="float: right;">0/300</span>
                                    <textarea cols="30" rows="10" class="form-control  mb-2" id="" onkeyup="inputNameTravel(this)" placeholder="ใส่ข้อความที่นี" style="height: 60px;" name="travel_th">{{ $touristAttraction->travel_th }}</textarea>

                                </div>
                                <div class="form-group col-12">
                                    <label>ช่วงฤดูท่องเที่ยว</label>
                                    <span id="showNumSeason" style="float: right;">0/300</span>
                                    <textarea cols="30" rows="10"class="form-control  mb-2" id="" onkeyup="inputNameSeason(this)" placeholder="ใส่ข้อความที่นี" style="height: 60px;" name="season_recommend_th">{{ $touristAttraction->season_recommend_th }}</textarea>
                                </div>

                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="row mb-3">
                                <div class="col-6">รายละเอียด</div>
                            </div>
                            <textarea class="summernote" name="description_th">{{ $touristAttraction->description_th }}</textarea>
                        </div>

                        <div class="card card-body">
                            <div>
                                <svg style="color:#00AEEF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>
                                ภาพปก
                                <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span>
                            </div><br>
                            <div class="mb-4" style="width: 315px;">
                                @error('cover_image')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="file" data-default-file="{{ $touristAttraction->cover_image ? asset('/storage/' . $touristAttraction->cover_image) : '' }}" class="input-upload-image" data-height="198" data-max-file-size="10M"
                                    data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" name="cover_image" />
                                <input type="hidden" value="0" name="image_delete">
                            </div>
                            <br><br>

                            <div>
                                <svg style="color:#00AEEF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>
                                ภาพสถานที่ท่องเที่ยว
                                <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span>
                            </div>
                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}<br />
                                    </div>
                                @endif
                                <div class="">
                                    <div class="d-flex flex-wrap gallery">
                                        @foreach ($touristAttraction->touristAttractionImages as $img)
                                            <div class="box-gallery-image">
                                                <img src="{{ asset('/storage/' . $img->image) }}" alt="">
                                                <button class="btn btn-link btn-delete p-0" data-id="{{ $img->id }}"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}"></button>
                                            </div>
                                        @endforeach


                                        <div class="box-add-image text-center d-flex justify-content-center">
                                            <div class="align-self-center">
                                                <button type="button" class="btn btn-upload mb-3">
                                                    click to upload
                                                </button>
                                                <div class="text-center tx-5">Drag & drop files to upload <br>
                                                    <label style="color:#C4C4C4; font-size:10px;">ขนาดภาพที่แนะนำ 853 x 526</label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" id="gallery" name="images[]" class="hideinput" multiple>
                            </div>
                            <div class=" py-2">
                                <div style="border: none;">
                                    <label class="px-2"><b>Tags :</b></label><label style="color: red; font-size:12px;">*กรุณากด Enter ต่อหนึ่งคำเพื่อเพิ่ม Tags</label>
                                    <section id='outside-of-the-box'>
                                        <aside>
                                            <input value="" name='tags' class='tagify--outside' placeholder='เพิ่มแท็ก'>
                                        </aside>
                                    </section>
                                </div>
                            </div>
                            <div class="row px-2 py-2">
                                <label class="px-2"><b>จัดกลุ่มสถานที่ยอดฮิต* :</b></label>
                                {{-- <input type="checkbox" checked data-on="เปิด" data-off="ปิด" data-toggle="toggle" data-size="sm"> --}}
                                <section id='section-manual-suggestions' style="width:100%;">
                                    <aside class='rightSide'>
                                        <input value="{{-- {{$destinationFolder}} --}}" name='select_folders' placeholder='เลือกแท็ก'>
                                    </aside>
                                </section>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="form-group row">
                                <label for="user" class="col-sm-2 col-form-label">ผู้สร้าง</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control" id="user" value="{{ $touristAttraction->creator }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2" style="float: left;">
                                    <button type="button" data-toggle="modal" data-target="#trashAll" style="border-radius:50%; height:40px;border-color:#ffff;" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="25"></button>
                                </div>
                                <div class="col-9">
                                    <a href="{{ url('/tourist-attractions/') }}" type="button" class="btn btn-secondary" style="width:150px; ">ยกเลิก</a>
                                    <span class="px-2">
                                        <button type="submit" class="btn btn-info" style="width:150px;">บันทึก</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- Modal ถังขยะ -->
                <div class="modal fade" id="trashAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ url('/tourist-attractions/delete/' . $touristAttraction->id) }}" method="POST">
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
                                </div>
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


    {{-- script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน --}}
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.autotab.min.js') }}"></script>
    {{-- end script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน --}}


    {{-- query ตำบล อำเภอจังหวัด --}}
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
    {{-- end query ตำบล อำเภอจังหวัด --}}


    {{-- select เอาไว้เลือกแท็ก --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.17.7/tagify.min.js" integrity="sha512-BO4lu2XUJSxHo+BD3WLBQ9QoYgmtSv/X/4XFsseeCAxK+eILeyEXtGLHFs2UMfzNN9lhtoGy8v8EMFPIl8y+0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>{{-- เลือกแท็กโฟลเดอร์  --}}
    <script src="{{ asset('assets/js/jQuery.tagify.min.js') }}"></script> {{-- เลือกแท็กโฟลเดอร์  --}}
    <script src="{{ asset('assets/js/input-tag.js') }}"></script> {{-- เลือกแท็กได้และสร้างแท็กได้  --}}
    {{-- select เอาไว้เลือกแท็ก --}}


    {{-- select เอาไว้เลือกแท็ก --}}
    <script>
        pureScriptSelect('#multiSelect');
    </script>
    {{-- end select เอาไว้เลือกแท็ก --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputField = document.querySelector('#searchText');
            const tagArray = inputField.value.split(',');
            pureScriptSelect('#multiSelect', tagArray);
            console.log(inputField);
            console.log(pureScriptSelect);
            console.log(multiSelect);
        });
    </script>


    {{-- query ตำบล อำเภอจังหวัด --}}
    <script>
        $.Thailand({
            $district: $("#sub_district"), // input ของตำบล
            $amphoe: $("#district"), // input ของอำเภอ
            $province: $("#province"), // input ของจังหวัด
            $zipcode: $("#postcode") // input ของรหัสไปรษณีย์
        });
    </script>
    {{-- end query ตำบล อำเภอจังหวัด --}}


    {{-- script อัพโหลดรูปภาพ banner ใหญ่ --}}
    <script type="text/javascript">
        $('.input-upload-image').dropify({
            tpl: {
                wrap: '<div class="dropify-wrapper dropify-wrapper"></div>',
                loader: '<div class="dropify-loader"></div>',
                message: '<div class="dropify-message"><span class="" /><div class="text-center"><button class="btn  btn-link">เพิ่มรูปภาพ</button></div> <p class=""><div class="text-color-1 font-weight-light fs-14" style="color:#00AEEF"><b>หรือวางไฟล์เพื่ออัพโหลด</b><p style="color:#C4C4C4;font-size:12px;">ขนาดที่แนะนำ 1200*628</p></div></p></div>',
                preview: '<label class="dropify-preview " for="drop-1"><span class="dropify-render"><div class="fildrop"></div></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></label>',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton: '<button type="button" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="20"></button>',
                errorLine: '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        }).on('dropify.afterClear', function(event, element) {
            $('input[name="image_delete"]').val('1');
        });
    </script>
    {{-- end script อัพโหลดรูปภาพ banner ใหญ่ --}}



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

        function inputDescription(val) {
            var len = val.value.length;
            if (len >= 150) {
                val.value = val.value.substring(0, 150);
            } else {
                $('#showDescription').text(150 - len + ' / 150');
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





    {{-- script อัพโหลดรูปภาพแกลลอรีหลายรูป รูปเล็ก --}}
    <script type="text/javascript">
        $('.box-add-image').on('click', function() {
            var input = $('<input type="file" id="gallery" name="images[]" multiple class="hideinput" />');
            console.log(input)
            input.on('change', function() {
                var files = $(this).prop('files');
                for (var i = 0; i < files.length; ++i) {
                    names.push(files[i]);
                    preview(files[i]);
                }
                console.log(names);
            });
            $(this).after(input);
            input.click();
        });
        var names = [];
        // console.log(names)
        $('#gallery').on('change', function() {
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                names.push($(this).get(0).files[i]);
                preview($(this).get(0).files[i]);
            }
        })

        function preview(file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.addEventListener("load", function(e) {
                showpreview(e.target.result)
            });
        }

        function showpreview(image) {
            var html = '';
            html += '<div class="box-gallery-image">';
            html += '<img src="' + image + '" class="">';
            html += '<button class="btn btn-link btn-delete p-0"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}"></button>';
            html += '</div>';
            $('.box-add-image').before(html);
        }
        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            // console.log(id)
            $.ajax({
                url: "/tourist-attractions/delete-image",
                type: "POST",
                dataType: "json",
                data: {
                    _token: '{!! csrf_token() !!}',
                    'id': id
                },
            })
            $(this).closest('.box-gallery-image').remove();
        })
    </script>
    {{-- end script อัพโหลดรูปภาพแกลลอรี รูปเล็ก --}}




    <script data-name="outside-of-the-box">
        (function() {
            var input = document.querySelector('input[name=tags]')
            var tagify = new Tagify(input, {
                enforceWhitelist: false,
                whitelist: [],
                originalInputValue: input.value,
                dropdown: {
                    position: "input",
                    enabled: 0 // always opens dropdown when input gets focus
                }
            });
            $.ajax({
                url: '/tourist-attractions/selectTag',
                type: 'GET',
                success: function(output) {
                    // var tags = data.map(function(item) {
                    //     return item.name_th;
                    // });
                    var tags = output;
                    tagify.settings.whitelist = tags.map(function(item) {
                        return item.name_th;
                    });
                    tagify.whitelist = tagify.settings.whitelist;

                    var touristAttractionTag = @json($touristAttractionTag);
                    if (touristAttractionTag.length > 0) {
                        var values = touristAttractionTag.map(function(item) {
                            return item;
                        });
                        tagify.addTags(values);

                    }
                    console.log(touristAttractionTag);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    console.log(touristAttractionTag);
                }
            });

        })()
    </script>
    {{--  script เลือกแท็กโฟลเดอร์ --}}
    <script>
        (function() {
            var input = document.querySelector('input[name="select_folders"]');
            var tagify = new Tagify(input, {
                enforceWhitelist: false,
                whitelist: [],
                originalInputValue: input.value,
                dropdown: {
                    position: "input",
                    enabled: 0 // always opens dropdown when input gets focus
                }
            });

            $.ajax({
                url: '/tourist-attractions/selectFolder',
                type: 'GET',
                success: function(output) {
                    var folders = output;
                    tagify.settings.whitelist = folders.map(function(item) {
                        return {
                            id: item.id,
                            value: item.name_th
                        };
                    });
                    tagify.whitelist = tagify.settings.whitelist;

                    var folderTouristAttraction = @json($folderTouristAttraction);
                    if (folderTouristAttraction.length > 0) {
                        var values = folderTouristAttraction.map(function(item) {
                            return {
                                id: item.id,
                                value: item.name_th
                            };
                        });
                        tagify.addTags(values);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });

            tagify.on("dropdown:show", onSuggestionsListUpdate)
                .on("dropdown:hide", onSuggestionsListHide)
                .on('dropdown:scroll', onDropdownScroll)
                .on('add', function(e) {
                    if (e.detail.data && e.detail.data.__created) {
                        tagify.dropdown.hide();
                    } else if (tagify.dropdown.isVisible && tagify.dropdown.content.childElementCount == 0 && tagify.DOM.input.value.length > 0) {
                        tagify.dropdown.hide();
                    }
                })
                .on('remove', function(e) {
                    tagify.dropdown.show();
                });


            function onSuggestionsListUpdate({
                detail: suggestionsElm
            }) {
                console.log(suggestionsElm)
            }

            function onSuggestionsListHide() {
                console.log("hide dropdown")
            }

            function onDropdownScroll(e) {
                console.log(e.detail)
            }
        })();
    </script>



</body>

</html>
