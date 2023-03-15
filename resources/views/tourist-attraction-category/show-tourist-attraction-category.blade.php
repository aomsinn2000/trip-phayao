<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ยอดฮิต</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">
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
                        <h3 style="text-align: center; color:#00AEEF;"><b>วัดในพะเยา</b> </h3>
                        <p style="margin: auto;background-color: #00AEEF; width: 120px;padding-top: 2px;"></p>
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-lg-8 py-md-2" >
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6">จำนวนผลลัพธ์ทั้งหมด <span style="color:#00AEEF;">36,555</span>  <span class="text-black px-2">รายการ</span></div>
                                        <div class="col-lg-6 col-md-6">เรียงตาม
                                            <select class="select-style" aria-label="Default select example" >
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">ล่าสุด</option>
                                                <option value="2">เดือนที่ผ่านมา</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4  ">
                                    <input type="text" class="form-control search-tags"  placeholder="ค้นหา...">
                                </div>

                            </div>


                            <div class="row list-wrapper">

                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://thailandtourismdirectory.go.th/assets/upload/2021/11/1//be10d8aa-10d6-4906-a139-0309df29406e.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดติโลกอาราม</h4>
                                            <p class="text-card-content-placeHit">พระธาตุกลางน้ำพระพุทธรูปหินทรายสกุลช่าง พะเยาอายุราว 500 ปี</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://pyo.onab.go.th/th/file/get/file/2022082427d73a953e10be34f0077b4bae6e0c42100202.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดศรีโคมคำ </h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://www.museumthailand.com/upload/evidence/1500976585_57492.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดศรีอุโมงค์คำ</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://thailandtourismdirectory.go.th/assets/upload/2021/11/1//be10d8aa-10d6-4906-a139-0309df29406e.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดติโลกอาราม</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดอนาลโย ทิพยาราม</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cms.dmpcdn.com/travel/2021/03/16/1d9b2fa0-864f-11eb-a403-33d334b99f04_original.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>วัดพระธาตุจอมทอง</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4> วัดอนาลโยทิพยาราม (หลวงปู่ไพบูลย์)</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div id="pagination"class="padding-pagination1"></div>
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
