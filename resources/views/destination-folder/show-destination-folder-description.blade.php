<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attraction->name_th }} - TripPhayao</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttractionDescription.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="nav-background-placeHit">
            <p>
                <a href="{{ url('/') }}" class="text-nav-placeHit"> หน้าหลัก /</a>
                <span><a href="{{ url('/destinations/' . $destination) }}" class="text-nav-placeHit"> {{ $destination }} /</a></span>
                <span><a href="" class="text-nav-placeHit" style="color: #27AAE1"> <b>{{ $attraction->name_th }}</b></a></span>
            </p>
        </div>

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="font-family: 'Kanit', sans-serif;"><b>{{ $attraction->name_th }}</b></h2>
                            </div>
                            {{-- <div class="col-sm-6">
                                <p class=" share-news">แชร์ข่าว
                                    <a href=""> <span class="px-1"><i class="bi bi-facebook"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-twitter"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-line"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-link-45deg"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-printer"></i></span></a>
                                </p>
                            </div> --}}
                        </div>

                        <p class="text-category">หมวดหมู่
                            <span style="color:#00AEEF;"><b>: {{ $attraction->touristAttractionCategory->name_th }}</b></span>
                        </p>

                        <div id="page">
                            <div class="row">
                                <div class="column small-11 small-centered">
                                    <div class="slider slider-single">
                                        @foreach ($attraction->touristAttractionImages as $images)
                                            <div>
                                                <img class="image-large-touristAttraction" src="{{ $images->image ? asset('/storage/' . $images->image) : '' }}" alt="">
                                            </div>
                                        @endforeach

                                    </div>
                                    <br>
                                    <div class="slider slider-nav">
                                        @foreach ($attraction->touristAttractionImages as $images)
                                            <div class="px-1">
                                                <span>
                                                    <img class="image-small-touristAttraction" src="{{ $images->image ? asset('/storage/' . $images->image) : '' }}" alt="">
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://img.kapook.com/u/2018/sutasinee/01/d1.jpg" class="image-banner" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="http://travel.mthai.com/app/uploads/2014/01/1452433_474903079293849_933924344_n.jpg" class="image-banner" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://cms.dmpcdn.com/travel/2022/05/19/a7ff3520-d73d-11ec-b003-ad49049c5364_webp_original.jpg" class="image-banner" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> --}}

                        <br><br>


                        {{-- เนื้อหา --}}
                        <div>
                            <p class="text-deal">
                            <h3 style="font-family: 'Kanit', sans-serif;"><b>รายละเอียดเพิ่มเติม</b></h3>
                            </p>
                            <?php echo $attraction->description_th; ?>
                            {{-- <?php echo html_entity_decode($attraction->description_th); ?> --}}
                        </div>
                        {{-- end เนื้อหา --}}


                        {{-- ที่ตั้ง --}}
                        <div class="text-address">
                            <hr>
                            <p>ที่ตั้ง <b>ตำบล{{ $attraction->sub_district }} อำเภอ{{ $attraction->district }} จังหวัด{{ $attraction->province }}</b></p>
                            <p>การเดินทาง : {{ $attraction->travel_th }}</p>
                            <p>ช่วงเวลาท่องเที่ยว : <b>{{ $attraction->season_recommend_th }}</b></p>
                        </div>

                        {{-- end ที่ตั้ง --}}
                        <br><br>

                        {{-- tags --}}
                        <p>
                        <h3 style="font-family: 'Kanit', sans-serif;">
                            <b>Tags :<span>
                                    @foreach ($attraction->tags as $tags)
                                        <a href="{{ url('/destinations/' . $destination . '/' . $attraction->name_th . '/' . $tags->name_th) }}" type="button" class="btn btn-outline-info">{{ $tags->name_th }}</a>
                                    @endforeach
                                </span>
                            </b>
                        </h3>
                        </p>

                        {{-- end tags --}}
                    </div>
                </div>
            </div>
        </div>

        <br><br>



    </div>




    <div class="padding-footer"></div>
    @include('layouts.footer')


    <script>
        $(document).ready(function() {
            $(".vote_buttoon").click(function() {
                $(".vote_buttoon").removeClass('active_vote');
                $(this).toggleClass('active_vote');
            });
        });
    </script>


    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->


    <script>
        $('#responsive').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            arrows: false,
            slidesToScroll: 2,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>




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
