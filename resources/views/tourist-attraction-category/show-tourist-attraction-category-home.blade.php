<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ดีลสุดพิเศษ</title>
    @include('layouts.head-LinkScript')

    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">

</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="naval-background-deal ">
            <p>
                <a href="{{url('/')}}" class="text-nav-deal"> หน้าหลัก /</a>
                <span><a href="" class="text-nav-deal" style="color: #27AAE1"> <b>วัด</b></a></span>

            </p>
        </div>
        <br>
        <div class="container py-2 ">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="container ">

                        <div class="row py-5">
                            <div class="col-lg-8"><h3><b>หมวดหมู่ </b> |
                                <span><b style="color: #27AAE1">วัด</b></span></h3>

                            </div>
                            <div class="col-lg-4"><input type="text" class="form-control"  placeholder="ค้นหา..."></div>
                        </div>

                        <div class="row">

                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://thailandtourismdirectory.go.th/assets/upload/2021/11/1//be10d8aa-10d6-4906-a139-0309df29406e.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดติโลกอาราม</h4>
                                        <p class="text-card-content-placeHit">พระธาตุกลางน้ำพระพุทธรูปหินทรายสกุลช่าง พะเยาอายุราว 500 ปี</p>


                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://pyo.onab.go.th/th/file/get/file/2022082427d73a953e10be34f0077b4bae6e0c42100202.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดศรีโคมคำ </h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>


                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://static01.nyt.com/images/2022/10/06/business/06france-energy-1/06france-energy-1-videoSixteenByNine3000.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดศรีอุโมงค์คำ</h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>

                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://thailandtourismdirectory.go.th/assets/upload/2021/11/1//be10d8aa-10d6-4906-a139-0309df29406e.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดติโลกอาราม</h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>


                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดอนาลโย ทิพยาราม</h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>


                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://cms.dmpcdn.com/travel/2021/03/16/1d9b2fa0-864f-11eb-a403-33d334b99f04_original.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4>วัดพระธาตุจอมทอง</h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>


                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                </div>
                            </div>
                            <div class=" col-lg-3 col-md-6 mb-lg-3">
                                <div class="card  text-white" style="border: none;">
                                    <img src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" class="img-card-placeHit" alt="...">
                                    <div class="card-body text-black">
                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                        <h4> วัดอนาลโยทิพยาราม (หลวงปู่ไพบูลย์)</h4>
                                        <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>

                                    </div>
                                </div>
                                <div class="padding-card-placeHit">
                                    <a href="{{ url('/touristattractions/description') }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
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


    <script>
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.slider-nav')
            .on('init', function(event, slick) {
                $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                arrows: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        arrows: true,
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        centerPadding: '2px',
                    }
                }, {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        centerPadding: '250px',
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }]
            });

        $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.slider-single').slick('slickGoTo', goToSingleSlide);
        });
    </script>

</body>

</html>
