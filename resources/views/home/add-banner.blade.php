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
                            <a href="{{ url('/home-banners/') }}">
                                <h5 class="content-title mb-0 my-auto px-2">
                                    <svg style="color: black;margin-bottom:5px;" width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.17 13.4775H4.83C1.845 13.4775 0.9375 12.57 0.9375 9.585V4.83C0.9375 1.845 1.845 0.9375 4.83 0.9375H13.1625C16.1475 0.9375 17.055 1.845 17.055 4.83V9.5775C17.0625 12.57 16.155 13.4775 13.17 13.4775ZM4.83 2.0625C2.475 2.0625 2.0625 2.475 2.0625 4.83V9.5775C2.0625 11.9325 2.475 12.345 4.83 12.345H13.1625C15.5175 12.345 15.93 11.9325 15.93 9.5775V4.83C15.93 2.475 15.5175 2.0625 13.1625 2.0625H4.83Z" fill="#292D32"/>
                                        <path d="M9 17.0616C8.6925 17.0616 8.4375 16.8066 8.4375 16.4991V12.9141C8.4375 12.6066 8.6925 12.3516 9 12.3516C9.3075 12.3516 9.5625 12.6066 9.5625 12.9141V16.4991C9.5625 16.8066 9.3075 17.0616 9 17.0616Z" fill="#292D32"/>
                                        <path d="M16.5 10.3125H1.5C1.1925 10.3125 0.9375 10.0575 0.9375 9.75C0.9375 9.4425 1.1925 9.1875 1.5 9.1875H16.5C16.8075 9.1875 17.0625 9.4425 17.0625 9.75C17.0625 10.0575 16.8075 10.3125 16.5 10.3125Z" fill="#292D32"/>
                                        <path d="M12.375 17.0625H5.625C5.3175 17.0625 5.0625 16.8075 5.0625 16.5C5.0625 16.1925 5.3175 15.9375 5.625 15.9375H12.375C12.6825 15.9375 12.9375 16.1925 12.9375 16.5C12.9375 16.8075 12.6825 17.0625 12.375 17.0625Z" fill="#292D32"/>
                                        </svg>
                                    จัดการแบนเนอร์
                                </h5>
                            </a>
                            <h5 class="content-title mb-0 my-auto " style="padding-bottom: 5px;"> > เพิ่มแบนเนอร์</h5>
                        </div>
                    </div>
                </div>
                {{-- end header บอกว่าอยู่หน้าไหน --}}




                <form action="{{ url('/home-banners/create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-7">
                        <div class="card card-body">
                            <div class="form-group row py-2">
                                <label for="idBanner" class="col-sm-3 col-form-label">รหัสแบนเนอร์</label>
                                <span>
                                    <input type="text" readonly class="form-control" id="idBanner" value="{{ $home_no }}" name="home_no">
                                </span>
                            </div>
                            <div class="row d-flex justify-content-between py-2">
                                <div class="col-4">
                                    <div class="row">
                                        <svg style="margin-top: 3px; margin-left:10px; color:#00AEEF;"class="bi bi-exclamation-circle-fill " xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                        <h5 class="px-2"><b>เพิ่มข้อมูล</b></h5>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label for="">รูปactive (ขึ้นเป็นรูปแรก)</label>
                                    <input type="checkbox" data-on="เปิด" data-off="ปิด" data-toggle="toggle" data-size="sm" name="is_active">
                                </div>
                                <div class="row-6 ">
                                    <label for="">สถานะ</label>
                                    <input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" data-toggle="toggle" data-size="xs" value="1" checked name="is_status">
                                </div>
                            </div>

                            <div class="">
                                <label for="nameBanner">ชื่อแบนเนอร์</label>
                                <span id="showBanner" style="float: right;">0/100</span>
                                <input type="text" class="form-control nameDealTh mb-2" onkeyup="inputBanner(this)" placeholder="กรุณากรอกชื่อแบนเนอร์" value="{{ old('name') }}" name="name">
                            </div>
                            <div class="row my-2">
                                <div class="col-4 py-2">
                                    <label for="start_date">วันที่เริ่มต้น</label><br>
                                    <input type="date" id="start_date" style="display:inline; height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;" name="start_date">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="end_date">วันที่สิ้นสุด</label><br>
                                    <input type="date" id="end_date" style="display:inline; height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;" value="{{ old('end_date') }}" name="end_date">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="indefinitelyDay">ไม่มีกำหนด</label><br>
                                    <input class="form-check-input position-static " type="checkbox" id="nullBox" aria-label="...">
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div>
                                <svg style="color:#00AEEF;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                                    <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z" />
                                </svg>
                                ภาพปก
                                <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 40 MB</span>
                            </div>

                            <div class="mb-4" style="width: 415px;">
                                @error('image')
                                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                                @enderror
                                <input type="file" class="input-upload-image" data-height="198" data-max-file-size="10M" data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" name="image" />
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <h4 style=" padding-top:5px;" class="px-2">Link <span style="color: red;">*</span></h4>
                                <span>
                                    <input type="text" class="form-control" style="width: 500px;" name="link">
                                </span>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row justify-content-end">
                                <a href="{{ url('/home-banners/') }}" type="button" class="btn btn-secondary" style="width:150px; ">ยกเลิก</a>
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


    {{-- script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน --}}
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.autotab.min.js') }}"></script>
    {{-- end script เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน -->


    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 100ตัว ชื่ออังกฤษ ชื่อไทย --}}
    <script>
        function inputBanner(val) {
            var len = val.value.length;
            if (len >= 100) {
                val.value = val.value.substring(0, 100);
            } else {
                $('#showBanner').text(100 - len + ' / 100');
            }
        };
    </script>
    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 100ตัว ชื่ออังกฤษ ชื่อไทย --}}


    {{-- script อัพโหลดรูปภาพ banner ใหญ่ --}}
    <script type="text/javascript">
        $('.input-upload-image').dropify({
            tpl: {
                wrap: '<div class="dropify-wrapper dropify-wrapper-st-2"></div>',
                loader: '<div class="dropify-loader"></div>',
                message: '<div class="dropify-message"><span class="" /><div class="text-center"><button class="btn  btn-link">เพิ่มรูปภาพ</button></div> <p class=""><div class="text-color-1 font-weight-light fs-14">หรือวางไฟล์เพื่ออัพโหลด</div></p></div>',
                preview: '<label class="dropify-preview " for="drop-1"><span class="dropify-render"><div class="fildrop"></div></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"></p></div></div></label>',
                filename: '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton: '<button type="button" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="20"></button>',
                errorLine: '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });
    </script>
    {{-- end script อัพโหลดรูปภาพ banner ใหญ่ --}}

    {{-- scriptปฎิทิน defaultวันที่เริ่ม และไม่กำหนดเพื่อปิดวันที่สิ้นสุด --}}
    <script>
        $(document).ready(function() {
            var today = new Date();
            $("#start_date").val(today.toISOString().substr(0, 10));
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
</body>

</html>
