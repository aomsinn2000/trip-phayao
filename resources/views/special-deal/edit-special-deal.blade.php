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
    <link href="/assets/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">

    {{-- script datatogle เปิด/ปิด --}}
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    {{-- script datatogle เปิด/ปิด --}}
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
            height: 150px;
            width: 150px;
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
            height: 150px;
            width: 150px;
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
            height: 150px;
            width: 150px;
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

        .toggle.btn-sm {
            min-width: 2.19rem;
            min-height: 1.375rem;
            border-radius: 50px;
        }

        .toggle-on.btn-sm {
            padding-right: 1rem;
            background-color: #ffbe00;
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
        {{-- <img src="assets/images/loader.svg" class="loader-img" alt="Loader"> --}}
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
                            <a href="{{ url('/special-deals/') }}">
                                <h5 class="content-title mb-0 my-auto">
                                    <svg style="color: black;margin-bottom:5px;" width="20" height="20"viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.55556 12.0556H4.56444M4.55556 2.27778H2.77778C2.30628 2.27778 1.8541 2.46508 1.5207 2.79848C1.1873 3.13187 1 3.58406 1 4.05556V14.7222C1 15.1937 1.1873 15.6459 1.5207 15.9793C1.8541 16.3127 2.30628 16.5 2.77778 16.5H11.6667C12.1382 16.5 12.5903 16.3127 12.9237 15.9793C13.2571 15.6459 13.4444 15.1937 13.4444 14.7222V4.05556C13.4444 3.58406 13.2571 3.13187 12.9237 2.79848C12.5903 2.46508 12.1382 2.27778 11.6667 2.27778H9.88889H4.55556ZM4.55556 2.27778C4.55556 2.74927 4.74286 3.20146 5.07626 3.53486C5.40965 3.86825 5.86184 4.05556 6.33333 4.05556H8.11111C8.58261 4.05556 9.03479 3.86825 9.36819 3.53486C9.70159 3.20146 9.88889 2.74927 9.88889 2.27778H4.55556ZM4.55556 2.27778C4.55556 1.80628 4.74286 1.3541 5.07626 1.0207C5.40965 0.687301 5.86184 0.5 6.33333 0.5H8.11111C8.58261 0.5 9.03479 0.687301 9.36819 1.0207C9.70159 1.3541 9.88889 1.80628 9.88889 2.27778H4.55556ZM7.22222 8.5H9.88889H7.22222ZM7.22222 12.0556H9.88889H7.22222ZM4.55556 8.5H4.56444H4.55556Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    จัดการดีลพิเศษ >
                                </h5>
                            </a>
                            </h5>
                            <h5 class="content-title mb-0 my-auto px-2" style="padding-bottom: 5px;"> แก้ไขดีลพิเศษ</h5>
                        </div>
                    </div>
                </div>
                {{-- end header บอกว่าอยู่หน้าไหน --}}




                <form action="{{ url('/special-deals/save-update/' . $specialDeal->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-7">
                        <div class="card card-body">

                            <div class="form-group row py-2">
                                <label for="idUser" class="col-sm-2 col-form-label">รหัสผู้ใช้งาน</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control" id="idUser" value="{{ $specialDeal->deal_no }}">
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between py-2">
                                <div class="col-6">
                                    <h5><b>แก้ไขข้อมูล</b></h5>
                                </div>
                                <div class="col-3">
                                    <label for="">ยอดนิยม</label>
                                    <input type="checkbox" data-on="เปิด" data-off="ปิด" data-toggle="toggle" data-size="sm" {{ $specialDeal->is_popular === 1 ? 'checked' : '' }} name="is_popular">
                                </div>
                                <div class="row-6 ">
                                    <label for="">สถานะ</label>
                                    <input type="checkbox" style="border-radius:50px;" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs" {{ $specialDeal->is_status === 1 ? 'checked' : '' }} name="is_status">
                                </div>
                            </div>
                            <div class="">
                                <label for="nameDealTh">ชื่อดีล(TH)</label>
                                <span id="showNumTh" style="float: right;">0/100</span>
                                <input type="text" class="form-control nameDealTh mb-2" id="" onkeyup="inputNameTh(this)" placeholder="กรุณากรอกชื่อดีลภาษาไทย" value="{{ $specialDeal->name_th }}" name="name_th">
                                <label for="nameDealEn">ชื่อดีล(EN)</label>
                                <span id="showNumEn" style="float: right;">0/100</span>
                                <input type="text" class="form-control test" id="" onkeyup="inputNameEn(this)" maxlength="100" placeholder="กรุณากรอกชื่อดีลภาษาอังกฤษ" value="{{ $specialDeal->name_en }}" name="name_en">
                            </div>

                            <div class="row my-2">
                                <div class="form-group col-6">
                                    <label for="category">หมวดหมู่</label>
                                    <select class="form-control" id="category" aria-placeholder="" name="special_deal_category_id">
                                        <option selected disabled {{ $specialDeal->special_deal_category_id != null ? 'hidden' : '' }}>กรุณาเลือกหมวดหมู่</option>
                                        @foreach ($specialDealCategory as $item)
                                            <option value="{{ $item->id }}" {{ $item->id === $specialDeal->special_deal_category_id ? 'selected' : '' }}>{{ $item->name_th }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="rights">จำนวนสิทธิ์</label><br>
                                    <input type="text" class="form-control" id="rights" placeholder="กรุณาระบุจำนวนสิทธิ์" value="{{ $specialDeal->quantity }}" name="quantity">
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <p>ราคาและระยะเวลาโปรโมชั่น</p>
                            <div class="row" id="calculate" method="POST">
                                @csrf
                                <div class="col-4 py-2">
                                    <label for="price">ราคาปกติ</label><br>
                                    <input type="number" class="form-control" placeholder="0" value="{{ $specialDeal->price }}" id="price" name="price">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="price">ส่วนลด</label><br>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="0" aria-label="" aria-describedby="basic-addon2" value="{{ $specialDeal->discount }}" id="discount" name="discount">
                                        <div class="input-group-append ">
                                            <span class="" id="basic-addon2">
                                                <select class="form-control" style="background-color: #e8e8e9;" id="discount_type" name="discount_type">
                                                    <option {{ $specialDeal->discount_type === '%' ? 'selected' : '' }}<b>%</b></option>
                                                    <option {{ $specialDeal->discount_type === 'บาท' ? 'selected' : '' }}><b>บาท</b></option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="priceSpecial">ราคาปกติพิเศษ</label><br>
                                    <input type="text" class="form-control" placeholder="0" value="{{ $specialDeal->discount_price }}" id="discountprice" name="discount_price" readonly>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="firstDay">วันที่เริ่มต้น</label><br>
                                    <input type="date" id="start_date" style="height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;" name="start_date" {{ $specialDeal->start_date ? 'value' . '=' . $specialDeal->start_date : '' }}>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="endDay">วันที่สิ้นสุด</label><br>
                                    <input type="date" id="end_date" style="height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;" name="end_date" {{ $specialDeal->end_date ? 'value' . '=' . $specialDeal->end_date : '' }}>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="indefinitelyDay">ไม่มีกำหนด</label><br>
                                    <input class="form-check-input position-static " type="checkbox" aria-label="..." id="nullBox">
                                </div>
                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="row mb-3">
                                <div class="col-6">รายละเอียด</div>
                                <div class="col-6">
                                    <span id="maxContentPost"style="float: right;">0/800</span>
                                </div>
                            </div>
                            <textarea class="summernote"name="description_th">{{ $specialDeal->description_th }}</textarea>
                        </div>



                        <div class="card card-body">
                            <div class="row mb-3">
                                <div class="col-6">เงื่อนไขการใช้งาน</div>
                                <div class="col-6">
                                    <span id="maxContentPost2"style="float: right;">0/800</span>
                                </div>
                            </div>
                            <textarea class="summernote"name="condition_th">{{ $specialDeal->condition_th }}</textarea>
                        </div>


                        <div class="card card-body">
                            <div>ภาพปก <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span></div>
                            <div class="mb-4" style="width: 415px;">
                                <input type="file" class="input-upload-image" data-default-file="{{ $specialDeal->cover_image ? asset('/storage/' . $specialDeal->cover_image) : '' }}" name="cover_image" data-height="198" data-max-file-size="10M"
                                    data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" />
                                <input type="hidden" value="0" name="image_delete">
                            </div>
                            <br><br>


                            <div>แกลลอรี <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB ไม่เกิน 10 รูปภาพ</span></div>
                            <div class="card-body">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}<br />
                                    </div>
                                @endif
                                <div class="">
                                    <div class="d-flex flex-wrap gallery">

                                        @foreach ($specialDeal->specialDealImages as $img)
                                            <div class="box-gallery-image">
                                                <img src="{{ asset('/storage/' . $img->image) ?? '' }}" alt="">
                                                <button class="btn btn-link btn-delete p-0" data-id="{{ $img->id }}"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}"></button>
                                            </div>
                                        @endforeach

                                        <div class="box-add-image text-center d-flex justify-content-center">
                                            <div class="align-self-center">
                                                <button type="button" class="btn btn-upload mb-3">
                                                    click to upload
                                                </button>
                                                <div class="text-center tx-5">Drag & drop files to upload <br>
                                                    {{-- <label style="color: #5f6062; font-size:10px;">ขนาดภาพที่แนะนำ  853 x 526</label> --}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" id="gallery" class="hideinput" name="images[]" multiple>
                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="form-group row">
                                <label for="user" class="col-sm-2 col-form-label">ผู้สร้าง</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="user" value="{{ $specialDeal->creator }}" disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2" style="float: left;">
                                    <button type="button" data-toggle="modal" data-target="#delete" style="border-radius:50%; height:40px;border-color:#ffff;" class="dropify-clear"><img
                                            src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}"
                                            width="25"></button>
                                </div>
                                <div class="col-9">
                                    <a href="{{ url('/special-deals/') }}" type="button" class="btn btn-secondary" style="width:150px; ">ยกเลิก</a>
                                    <span class="px-2">
                                        <button href="" type="submit" class="btn btn-info" style="width:150px;">บันทึก</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- Modal ถังขยะ -->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{ url('/special-deals/delete/' . $specialDeal->id) }}" method="POST" enctype="multipart/form-data">
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
                                    <div style="color: rgb(206 16 16)">คำเตือน : เมื่อลบแล้วข้อมูลจะหายไปตลอดกาล ไม่สามารถกู้คืนได้</div>
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
    <script src="/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/assets/js/jquery.autotab.min.js"></script>
    {{-- end script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน --}}




    {{-- script อัพโหลดรูปภาพ banner ใหญ่ --}}
    <script type="text/javascript">
        $('.input-upload-image').dropify({
            tpl: {
                wrap: '<div class="dropify-wrapper dropify-wrapper-st-2 "></div>',
                loader: '<div class="dropify-loader"></div>',
                message: '<div class="dropify-message"><span class="" /><div class="text-center"><button class="btn  btn-link">เพิ่มรูปภาพ</button></div> <p class=""><div class="text-color-1 font-weight-light fs-14">หรือวางไฟล์เพื่ออัพโหลด</div></p></div>',
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

    {{-- script คำนวนราคาพิเศษจากราคาปกติและส่วนลดที่กรอกมาโดยอัตโนมัติ --}}
    <script>
        $(document).ready(function() {
            $('#calculate').on("change", function() {
                var price = $('#price').val();
                var discount = $('#discount').val();
                var discount_type = $('#discount_type').val();
                $.ajax({
                    url: "/special-deals/calculate",
                    type: "POST",
                    datatype: 'json',
                    data: {
                        _token: '{!! csrf_token() !!}',
                        'price': price,
                        'discount': discount,
                        'discount_type': discount_type,

                    },
                    success: function(discountprice) {
                        /* console.log(discountprice); */
                        $('#discountprice').val(discountprice);
                    },
                    error: function() {
                        alert("อะไรสักอย่างผิดพลาด");
                        /* console.log(error) */
                    }

                })
            })
        })
    </script>
    {{-- end script คำนวนราคาพิเศษจากราคาปกติและส่วนลดที่กรอกมาโดยอัตโนมัติ --}}

    {{-- scriptปฎิทิน defaultวันที่เริ่ม และไม่กำหนดเพื่อปิดวันที่สิ้นสุด --}}
    <script>
        $(document).ready(function() {
            // var today = new Date();
            // $("#start_date").val(today.toISOString().substr(0, 10));
            // console.log(today);
            // end วันที่เริ่มdefualt
            $('#nullBox').change(function() {
                if (this.checked == true) {
                    $("#end_date").prop("disabled", true).val();
                } else if (this.checked == false) {
                    $("#end_date").prop("disabled", false).val();
                }
            })
        })
    </script>
    {{-- end scriptปฎิทิน defaultวันที่เริ่ม และไม่กำหนดเพื่อปิดวันที่สิ้นสุด --}}

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


        {{--เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea --}}
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
        console.log(names)
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
            html += '<img src="' + image + '" class="w-100">';
            html += '<button class="btn btn-link btn-delete p-0"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}"></button>';
            html += '</div>';
            $('.box-add-image').before(html);
        }
        $(document).on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            console.log(id)
            $.ajax({
                url: "/delete-image",
                type: "POST",
                dataType: "json",
                data: {
                    _token: '{!! csrf_token() !!}',
                    'id': id
                },
                // success: function() {
                //     alert('ลบรุปละนะ')
                // },
                // error: function() {
                //     alert('ลบรูปไม่สำเร็จ');
                // }
            })
            $(this).closest('.box-gallery-image').remove();
        })
    </script>
    {{-- end script อัพโหลดรูปภาพแกลลอรี รูปเล็ก --}}


</body>

</html>
