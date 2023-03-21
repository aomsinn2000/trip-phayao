<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ดีลสุดพิเศษ</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/special-deal/special-deal.css') }}" rel="stylesheet">

</head>

<body>

    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="naval-background-deal">
            <p>
                <a href="{{ url('/') }}" class="text-nav-deal"> หน้าหลัก /</a>

                <span><a href="{{ url('/specialdeals/') }}" class="text-nav-deal"> ดีลสุดพิเศษ /</a></span>
                <span><a href="" class="text-nav-deal" style="color: #27AAE1"> <b>{{ $deal->name_th }}</b></a></span>
            </p>
        </div>
        <br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <h2><b> ดีลสุดพิเศษ | <span style="color:#00AEEF;"> {{ $deal->name_th }}</span></b></h2>
                        <div class="row" style="font-size: 24px;">
                            <div class="col-sm-6">
                                <p class="float-start">หมวดหมู่
                                    <span style="color:#00AEEF;"><b>: {{ $deal->specialDealCategory->name_th ?? 'ไม่ได้ระบุ' }} </b></span>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="total-deal">จำนวนสิทธิคงเหลือ <b> : {{ $deal->quantity ?? 'ไม่จำกัด' }}</b></p>
                            </div>
                        </div>

                        {{-- <p style="color: #868383; " class="text-content-top-dessination">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p> --}}

                        <div id="page">
                            <div class="row">
                                <div class="column small-11 small-centered">
                                    <div class="slider slider-single">
                                        @foreach ($deal->specialDealImages as $images)
                                            <div>
                                                <img class="image-large-deal" src="{{ $images->image ? asset('/storage/' . $images->image) : '' }}" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                    <br>
                                    <div class="slider slider-nav">
                                        @foreach ($deal->specialDealImages as $images)
                                            <div class="px-1">
                                                <span>
                                                    <img class="image-small-deal" src="{{ $images->image ? asset('/storage/' . $images->image) : '' }}" alt="">
                                                </span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p>
                            <span class="price-special">
                                <b> ราคาพิเศษ ฿{{ number_format($deal->discount_price) }} </b>
                            </span>
                            <span style="color:rgb(118, 118, 120); font-size:20px;">
                                <strike>ราคา ฿{{ number_format($deal->price) }}</strike>
                            </span>
                            <span class="discout-deal">{{ $deal->discount }} {{ $deal->discount_type }} </span>
                        </p>


                        <hr>
                        <br>

                        <p>
                            <span class="text-deal">
                                <b>ระยะเวลาใช้สิทธิ์</b>
                            </span><br><br>
                            {{-- <span class="text-time-detail-deal"> 8 พฤศจิกายน ถึง 31 ธันวาคม 2565 </span> --}}
                            <span class="text-time-detail-deal">{{ $end_date ? '' : 'ตั้งแต่ ' }} {{ $start_date }} {{ $end_date ? 'ถึง  ' . $end_date : 'จนกว่าจะหมดโปรโมชั่น' }} </span>
                        </p>
                        <br>
                        <hr>

                        <div>
                            <p class="text-deal"><b>รายละเอียดเพิ่มเติม</b></p>
                            <?php echo $deal->description_th; ?>
                            {{-- <?php echo html_entity_decode($deal->description_th); ?> --}}
                        </div>

                        <div>
                            <p class="text-deal"><b>เงื่อนไขการใช้งาน</b></p>
                            <ul>
                                <?php echo $deal->condition_th; ?>
                            </ul>
                        </div>
                        <br><br>

                        <div class="add-line-deal">
                            <a href="" class="text-add-line-deal">คลิก! แอดไลน์</a>
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
