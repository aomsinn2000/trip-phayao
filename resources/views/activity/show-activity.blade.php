<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>กิจกรรม</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/activity/activity.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    {{-- pagination --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/simplePagination.css" integrity="sha512-emkhkASXU1wKqnSDVZiYpSKjYEPP8RRG2lgIxDFVI4f/twjijBnDItdaRh7j+VRKFs4YzrAcV17JeFqX+3NVig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end  pagination --}}
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container ">
                        <br><br>
                        <h3 style="text-align: center; color:#00AEEF;"><b>กิจกรรม</b> </h3>
                        <p style="margin: auto;background-color: #00AEEF; width: 120px;padding-top: 2px;"></p>
                        <br><br>
                        <div class="wrapper py-lg-2">
                            <div class="row">
                                <div class="col-lg-8 py-md-2" >
                                    <div class="row">
                                        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">จำนวนผลลัพธ์ทั้งหมด <span style="color:#00AEEF;">36,555</span>  <span class="text-black px-2">รายการ</span></div>
                                        <div class="col-lg-4 col-md-6">เรียงตาม
                                            <select class="select-style" aria-label="Default select example" >
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">ล่าสุด</option>
                                                <option value="2">เดือนที่ผ่านมา</option>
                                            </select>
                                        </div>
                                        {{-- <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">หมวดหมู่
                                            <select class="select-style" aria-label="Default select example" >
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">วัด</option>
                                                <option value="2">โรงแรม</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control search-tags"  placeholder="ค้นหา...">
                                </div>

                            </div>


                        <ul class="nav nav-pills  px-1 py-2" id="pills-tab" role="tablist">
                            <h3>หมวดหมู่ : </h3>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info active " id="pills-activity-all-tab" data-bs-toggle="pill" data-bs-target="#pills-activity-all" type="button" role="tab" aria-selected="true">ทั้งหมด</button>
                            </li>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info " id="pills-activity-tab" data-bs-toggle="pill" data-bs-target="#pills-activity" type="button" role="tab" aria-selected="false">กิจกรรม</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-activity-all" role="tabpanel">

                                <div class="row">
                                    <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                        <div class="card  text-white" style="border: none;">
                                            <img src="https://f.ptcdn.info/173/047/000/ogig9p6ojQMaXjdmCGv-o.jpg" class="img-card-placeHit" alt="...">
                                            <div class="card-body text-black">
                                                <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                                <h5><b>ปั่นจักรยานที่กว๊านพะเยา</b></h3>
                                            </div>
                                        </div>
                                        <div class="padding-card-placeHit">
                                            <a href="{{ url('/activities/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                        </div>
                                    </div>
                                    <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                        <div class="card  text-white" style="border: none;">
                                            <img src="https://f.ptcdn.info/173/047/000/ogig9p6ojQMaXjdmCGv-o.jpg" class="img-card-placeHit" alt="...">
                                            <div class="card-body text-black">
                                                <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                                <h5><b>ปั่นจักรยานที่กว๊านพะเยา</b></h3>
                                            </div>
                                        </div>
                                        <div class="padding-card-placeHit">
                                            <a href="{{ url('/activities/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                        </div>
                                    </div>
                                    <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                        <div class="card  text-white" style="border: none;">
                                            <img src="https://www.museumthailand.com/upload/evidence/1500956911_31781.jpg" class="img-card-placeHit" alt="...">
                                            <div class="card-body text-black">
                                                <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                                <h5><b>ปั่นจักรยานที่กว๊านพะเยา</b></h3>
                                            </div>
                                        </div>
                                        <div class="padding-card-placeHit">
                                            <a href="{{ url('/activities/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                        </div>
                                    </div>
                                    <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                        <div class="card  text-white" style="border: none;">
                                            <img src="https://www.museumthailand.com/upload/evidence/1500956943_66381.jpg" class="img-card-placeHit" alt="...">
                                            <div class="card-body text-black">
                                                <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                                <h5><b>ปั่นจักรยานที่กว๊านพะเยา</b></h3>
                                            </div>
                                        </div>
                                        <div class="padding-card-placeHit">
                                            <a href="{{ url('/activities/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-activity" role="tabpanel">
                                <div class="row">
                                    <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                        <div class="card  text-white" style="border: none;">
                                            <img src="https://thailandtourismdirectory.go.th/assets/upload/2021/11/1//be10d8aa-10d6-4906-a139-0309df29406e.jpg" class="img-card-placeHit" alt="...">
                                            <div class="card-body text-black">
                                                <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                                <h5><b>วัดติโลกอาราม</b></h5>
                                            </div>
                                        </div>
                                        <div class="padding-card-placeHit">
                                            <a href="{{ url('/activities/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>




                        </div>




                    </div>
                </div>
            </div>
        </div>



    </div>


    <div class="padding-footer"></div>
    @include('layouts.footer')





    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var items = $(".list-wrapper .list-item");
        var numItems = items.length;
        var perPage = 12;

        items.slice(perPage).hide();

        $('#pagination').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function(pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    </script>



</body>

</html>
