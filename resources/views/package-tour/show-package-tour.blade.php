<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แพ็คเกจทัวร์</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/package-tour/package-tour.css') }}" rel="stylesheet">
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
                        <h3 style="text-align: center; color:#00AEEF;"><b>แพ็คเกจทัวร์</b> </h3>
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
                                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">หมวดหมู่
                                            <select class="select-style" aria-label="Default select example" >
                                                <option selected>ทั้งหมด</option>
                                                <option value="1">วัด</option>
                                                <option value="2">โรงแรม</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control search-tags"  placeholder="ค้นหา...">
                                </div>

                            </div>


                            <div class="row list-wrapper">

                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item col-lg-4 col-md-6 mb-lg-3">
                                    <a href="{{url('/packagetours/description')}}" style=" text-decoration: none;">
                                        <div class="card  text-white">
                                            <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                            <div class="card-img-overlay">
                                                <p class="best-seller">Best Seller</p>
                                            </div>
                                            <div class="card-body text-black">
                                                <div class="d-flex bd-highlight ">
                                                    <div class=" bd-highlight">
                                                        <h4>กว๊านพะเยา</h4>
                                                    </div>
                                                    <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                                                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                    </div>
                                                </div>
                                                <div class="container ">
                                                    <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    <div class="container">
                                                        <div class="text-activity-card-pakageTour">
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                            <p>ปั่นจักรยาน</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3">
                                                        <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                            <p class="br-card-pakageTour"><br></p>
                                                            <span class="text-price-card-pakageTour">
                                                                1,000฿/วัน
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
