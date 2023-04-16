<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ดีลสุดพิเศษ  - TripPhayao</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/special-deal/special-deal.css') }}" rel="stylesheet">

</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="naval-background-deal">
            <p>
                <a href="{{ url('/') }}" class="text-nav-deal"> หน้าหลัก /</a>
                <span><a href="" class="text-nav-deal" style="color: #27AAE1"> <b>ดีลสุดพิเศษ</b> </a></span>
            </p>
        </div>
        <br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="container ">

                        <div class="row py-2">
                            <div class="col-lg-8">
                                <h3 style="color: #27AAE1"><b>ดีลสุดพิเศษ</b></h3>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" id="search-input" class="form-control" placeholder="ค้นหาดีลพิเศษด้วย ชื่อดีล">
                            </div>
                        </div>

                        <div id="search-results-container" class="row py-5">
                            @foreach ($specialDeal as $deal)
                                <div id="" class="col-lg-4 col-md-6">
                                    <a href="{{ url('/specialdeals/' . $deal->name_th) }}" style="text-decoration: none;">
                                        <div class="card">
                                            <img src="{{ $deal->cover_image != null ? asset('/storage/' . $deal->cover_image) : asset('assets/image/unfound-image-b.jpg') }}" class="card-img-top img-category" alt="...">
                                            <div class="card-body">
                                                <b class="text-head-category">{{ $deal->name_th }}</b>
                                                <div class="row text-detail-category">
                                                    <div class="text-left text-black">หมวดหมู่ : <span><b style="color: #27AAE1">{{ $deal->specialDealCategory->name_th ?? '' }}</b></span></div>
                                                    {{-- <div class="col-6" style="text-align: right;color:#C4C4C4;"><i class="bi bi-eye"></i><span> 1,265 </span></div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        {{-- <div id="search-results-container"></div> --}}

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
        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var query = $(this).val();
                $.ajax({
                    url: "specialdeals/search",
                    type: 'GET',
                    data: {
                        word: query
                    },
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<div class="col-lg-4 col-md-6">';
                            html += '<a href="/specialdeals/' + data[i].name_th + '" style="text-decoration: none;">';
                            html += '<div class="card">';
                            html += '<img src="' + (data[i].cover_image ? '/storage/' + data[i].cover_image : '{{ asset('assets/image/unfound-image-b.jpg') }}') + '"class="card-img-top img-category" alt="...">';
                            html += '<div class="card-body">';
                            html += '<b class="text-head-category">' + data[i].name_th + '</b>';
                            html += '<div class="row text-detail-category">';
                            // html += '<div class="col-6 text-left text-black">หมวดหมู่ : <span><b style="color: #27AAE1">' + (data[i].specialDealCategory ? data[i].specialDealCategory.name_th : '') + '</b></span></div>';
                            html += '<div class="col-9 text-left text-black">หมวดหมู่ : <span><b style="color: #27AAE1">' + (data[i].special_deal_category ? data[i].special_deal_category.name_th : '') + '</b></span></div>';
                            html += '<div class="col-3" style="text-align: right;color:#C4C4C4;"><i class="bi bi-eye"></i><span> 1,265 </span></div>';
                            html += '</div></div></div></a></div>';
                        }
                        $('#search-results-container').html(html);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error: ' + error);
                    }
                });
            });
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
