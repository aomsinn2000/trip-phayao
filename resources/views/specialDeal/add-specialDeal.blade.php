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
    <link href="assets/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">

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
            bottom: 15px;
            right: 15px;
        }

        .box-gallery-image .btn-delete img {
            object-fit: unset;
            width: 100%;
            height: 30px;
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
                                <svg xmlns="http://www.w3.org/2000/svg" style="color: black; margin-bottom:5px;" width="20" height="20" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                                ดีลพิเศษ >
                            </h5>
                            <a href="{{ url('viewSpecialDeal') }}">
                                <h5 class="content-title mb-0 my-auto px-2">จัดการดีลพิเศษ ></h5>
                            </a>
                            <h5 class="content-title mb-0 my-auto " style="padding-bottom: 5px;">เพิ่มดีลพิเศษ</h5>
                        </div>
                    </div>
                </div>
                {{-- end header บอกว่าอยู่หน้าไหน --}}




                <form action="">
                    <div class="col-xl-7">
                        <div class="card card-body">
                            <div class="form-group row py-2">
                                <label for="idUser" class="col-sm-2 col-form-label">รหัสผู้ใช้งาน</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control" id="idUser" value="AE21120001">
                                </div>

                            </div>
                            <div class="row d-flex justify-content-between py-2">
                                <div class="col-6">
                                    <h5><b>เพิ่มข้อมูล</b></h5>
                                </div>
                                <div class="row-6 ">
                                    <label for="">สถานะ</label>
                                    <input type="checkbox" data-on="เปิดใช้งาน" data-off="ปิดใช้งาน" checked data-toggle="toggle" data-size="xs">
                                </div>
                            </div>


                            <div class="">
                                <label for="nameDealTh">ชื่อดีล(TH)</label>
                                <span id="showNumTh" style="float: right;">0/100</span>
                                <input type="text" class="form-control nameDealTh mb-2" id="" onkeyup="inputNameTh(this)" placeholder="กรุณากรอกชื่อดีลภาษาไทย">
                                <label for="nameDealEn">ชื่อดีล(EN)</label>
                                <span id="showNumEn" style="float: right;">0/100</span>
                                <input type="text" class="form-control test" id="" onkeyup="inputNameEn(this)" maxlength="100" placeholder="กรุณากรอกชื่อดีลภาษาอังกฤษ">
                            </div>
                            <div class="row my-2">
                                <div class="form-group col-6">
                                    <label for="category">หมวดหมู่</label>
                                    <select class="form-control" id="category" aria-placeholder="">
                                        <option selected disabled>กรุณาเลือกหมวดหมู่</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="rights">จำนวนสิทธิ์</label><br>
                                    <input type="number" class="form-control" id="rights" placeholder="กรุณาระบุจำนวนสิทธิ์">
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <p>ราคาและระยะเวลาโปรโมชั่น</p>
                            <div class="row">
                                <div class="col-4 py-2">
                                    <label for="price">ราคาปกติ</label><br>
                                    <input type="number" class="form-control" id="price" placeholder="0">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="price">ราคาปกติ</label><br>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="0" aria-label="" aria-describedby="basic-addon2">
                                        <div class="input-group-append ">
                                            <span class="" id="basic-addon2">
                                                <select class="form-control" style="background-color: #e8e8e9;">
                                                    <option selected><b>%</b></option>
                                                    <option><b>บาท</b></option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="priceSpecial">ราคาปกติพิเศษ</label><br>
                                    <input type="text" class="form-control" id="priceSpecial" placeholder="0" readonly>
                                </div>
                                <div class="col-4 py-2">
                                    <label for="firstDay">วันที่เริ่มต้น</label><br>
                                    <input type="date" id="firstDay" name="" style="display:inline; height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="endDay">วันที่สิ้นสุด</label><br>
                                    <input type="date" id="endDay" name=""  style="display:inline; height: 40px; width:100%;    border-color: #e9e9e9; border-radius:5px;">
                                </div>
                                <div class="col-4 py-2">
                                    <label for="indefinitelyDay">ไม่มีกำหนด</label><br>
                                    <input class="form-check-input position-static " id="myCheck"  type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
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
                            <textarea class="summernote1"></textarea>
                        </div>



                        <div class="card card-body">
                            <div class="row mb-3">
                                <div class="col-6">เงื่อนไขการใช้งาน</div>
                                <div class="col-6">
                                    <span id="maxContentPost2"style="float: right;">0/800</span>
                                </div>
                            </div>
                            <textarea class="summernote2"></textarea>
                        </div>


                        <div class="card card-body">
                            <div>ภาพปก <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span></div>
                            <div class="mb-4" style="width: 415px;">
                                <input type="file" class="input-upload-image" data-height="198" data-max-file-size="10M" data-allowed-file-extensions="JPG JPEG PNG jpg png jpeg" />
                            </div>
                            <br><br>
                            <div>แกลลอรี <span id="maxContentPost2"style="color: #8F8989; font-size:12px;">รองรับนามสกุล JPG, BMP, GIF, PNG, WEBP ขนาดไม่เกิน 5 MB</span></div>
                            <div class="card-body">
                                <div class="">
                                    <div class="d-flex flex-wrap gallery">
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
                                <input type="file" name="files" id="gallery" multiple="" class="hideinput">
                            </div>
                        </div>


                        <div class="card card-body">
                            <div class="row justify-content-end">
                                <a href="{{ url('viewSpecialDeal') }}" type="button" class="btn btn-secondary" style="width:150px; ">ยกเลิก</a>
                                <span class="px-2">
                                    <a href="" type="button" class="btn btn-info" style="width:150px;">บันทึก</a>
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
    <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="assets/js/jquery.autotab.min.js"></script>
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
                clearButton: '<button type="button" class="dropify-clear"><img src="{{ asset('/assets/images/icon/ion_trash-bin.png') }}" width="35"></button>',
                errorLine: '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
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
    </script>
    {{-- script นับจำนวนตัวอักษรที่พิมพ์ไม่เกิน 100ตัว ชื่ออังกฤษ ชื่อไทย --}}


    {{-- ลิมิตพิมพ์ได้กี่ตัว  เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea --}}
    <script type="text/javascript">
        function registerSummernote(element, placeholder, max, callbackMax) {
            $(element).summernote({
                height: 300,
                placeholder,
                callbacks: {
                    onKeydown: function(e) {
                        var t = e.currentTarget.innerText;
                        if (t.length >= max) {
                            //delete key
                            if (e.keyCode != 8)
                                e.preventDefault();
                            // add other keys ...
                        }
                    },
                    onKeyup: function(e) {
                        var t = e.currentTarget.innerText;
                        if (typeof callbackMax == 'function') {
                            callbackMax(max - t.length);
                        }
                    },
                    onPaste: function(e) {
                        var t = e.currentTarget.innerText;
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        var all = t + bufferText;
                        document.execCommand('insertText', false, all.trim().substring(0, 800));
                        if (typeof callbackMax == 'function') {
                            callbackMax(max - t.length);
                        }
                    }
                }
            });
        }
        $(function() {
            registerSummernote('.summernote1', 'Leave a comment', 800, function(max) {
                $('#maxContentPost').text(max + '/800')
            });
        });
        $(function() {
            registerSummernote('.summernote2', 'Leave a comment', 800, function(max) {
                $('#maxContentPost2').text(max + '/800')
            });
        });
    </script>
    {{-- end เกี่ยวกับข้อความรายละเอียดกับเงื่อนไขการใช้งาน textarea --}}





    {{-- script อัพโหลดรูปภาพแกลลอรี รูปเล็ก --}}
    <script type="text/javascript">
        $('.box-add-image').on('click', function() {
            $('#gallery').click()
        })
        $('#gallery').on('change', function() {
            var names = [];
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                preview($(this).get(0).files[i])
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
            html += '<button class="btn btn-link btn-delete p-0"><img src="/assets/images/icon/btn-delete.png" class="w-100"></button>';
            html += '</div>';
            $('.box-add-image').before(html);
        }
        $(document).on('click', '.btn-delete', function() {
            $(this).closest('.box-gallery-image').remove();
        })
    </script>
    {{-- end script อัพโหลดรูปภาพแกลลอรี รูปเล็ก --}}



    {{-- script checkbox disabled --}}
    <script>
        document.getElementById('myCheck').onchange = function() {
            document.getElementById('firstDay').disabled = this.checked;
            document.getElementById('endDay').disabled = this.checked;
        };
    </script>
 {{--end script checkbox disabled --}}

</body>

</html>
