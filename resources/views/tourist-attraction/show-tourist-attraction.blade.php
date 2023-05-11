<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- token for POST method --}}
    <title>สถานที่ท่องเที่ยว - TripPhayao</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

        .p1 {
            display: inline;
        }

        #load-more {
            display: none;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <!-- image slider -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">

                @foreach ($homeBanners as $active)
                    @if ($active->is_active == 1)
                        <div class="carousel-item active">
                            <a {{ $active->link ? 'href=' . $active->link : '' }} target="_blank"><img src="{{ asset('/storage/' . $active->image) }}" class="d-block w-100 banner-slider" alt="..."></a>
                        </div>
                    @endif
                @endforeach

                @foreach ($homeBanners as $banner)
                    @if ($banner->is_active == 0)
                        <div class="carousel-item">
                            <a {{ $banner->link ? 'href=' . "$banner->link" : '' }} target="_blank">
                                <img src="{{ $banner->image ? asset('/storage/' . $banner->image) : '' }}" class="d-block w-100 banner-slider" alt="...">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--end image slider -->

        <br><br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container ">
                        <br><br>
                        <h3 style="text-align: center"><b>สถานที่ท่องเที่ยว</b> </h3>
                        <p class="line-header"></p>
                        <p style="color: #535151;" class="text-head-content-placeHit">สถานที่ท่องเที่ยวยอดฮิต ที่คัดสรรข้อมูลแต่ละบริเวณสถานที่มาเพื่ออำนวยความสะดวกแก่นักท่องเที่ยวให้ได้เสพบรรยากาศทุกแหล่งท่องเที่ยวได้อย่างเต็มที่</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills  px-1 py-2" id="category" role="tablist">
                            <h3>หมวดหมู่ : </h3>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info active " id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-selected="true" data-category="all">ทั้งหมด</button>
                            </li>
                            @foreach ($category as $cate)
                                <li class="nav-item px-1" role="presentation">
                                    <button type="button" class="btn btn-outline-info" id="category-tab" data-bs-toggle="pill"
                                        type="button" role="tab" aria-selected="false" data-category="{{ $cate->id }}">{{ $cate->name_th }}</button>
                                </li>
                            @endforeach
                        </ul>
                        <!--end Nav tabs -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                <div class="wrapper">
                                    <div class="row list-wrapper">
                                        <div id="tourist-attraction"></div>
                                    </div>
                                    <div id="load-more">
                                        <button id="load-more-btn" type="button" class="btn btn-primary">ดูเพิ่มเติม</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <h2 style="text-align: center">Maps Location </h2>
    <p class="line-header"></p>
    <br>

    <div id="map"></div> --}}
    <div class="padding-footer"></div>
    @include('layouts.footer')

    {{-- <script>
        let map;

        function initMap() {
            const mapOptions = {
                zoom: 9,
                center: {
                    lat: 19.1492373,
                    lng: 100.2868165
                },
            };

            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            const marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)

                position: {
                    lat: 19.18,
                    lng: 100.19
                },
                map: map,
            });
            const infowindow = new google.maps.InfoWindow({
                content: "<p>Marker Location:" + marker.getPosition() + "</p>",
                content: "<p>Marker Location:" + marker.getPosition() + "</p>",
            });
            google.maps.event.addListener(marker, "click", () => {
                infowindow.open(map, marker);
            });
        }
        window.initMap = initMap;
    </script> --}}

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnuNFCpxLkWORNZymL1Tvr7cBa-d1TjD0&callback=initMap&v=weekly"></script> --}}
    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>{{-- lazy load test --}}

    <script>
        $(document).ready(function() {
            var currentCategory = 'all';
            var currentLimit = 8;
            var loading = false;
            loadData(currentCategory, currentLimit);

            $('#category button').on('click', function() {
                var category = $(this).data('category');
                currentCategory = category;
                currentLimit = 8;
                loadData(currentCategory, currentLimit);
            });

            $('#load-more-btn').on('click', function() {
                if (!loading) {
                    loading = true;
                    $('#load-more-btn').html('กำลังโหลด...');
                    currentLimit += 8;
                    loadData(currentCategory, currentLimit);
                }
            });

            function loadData(category, limit) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //token สำหรับpost method ใช้คู่กับ<meta>ข้างบน
                    },
                    url: '/touristattractions/select-by-category',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        category: category,
                        limit: limit
                    },
                    success: function(response) {
                        var html = '';
                        var counter = 0;
                        $.each(response.data, function(index, value) {
                            if (counter % 4 === 0) {
                                html += '<div class="row">';
                            }
                            html += '<div class="list-item col-lg-3 col-md-6 mb-lg-3">';
                            html += '<div class="card text-white" style="border: none;">';
                            html += '<div class="my-data-item">' + value.name_th + '</div>';
                            html += '<a href="/touristattractions/' + value.name_th + '">';
                            html += '<img src="' + (value.cover_image ? '/storage/' + value.cover_image : '/assets/image/unfound-image-b.jpg') + '" class="img-card-placeHit" alt="..." loading="lazy">';
                            html += '</a>'
                            html += '<div class="card-body text-black">';
                            html += '<p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>' + value.province + ',ประเทศไทย</p>';
                            html += '<h4>' + value.name_th + '</h4>';
                            html += '<div class="text-card-content-placeHit">';
                            html += '<span class="p1" >' + (value.detail_th ?? '') + '</span>';
                            html += '<span class="More" style="cursor:pointer;color:blue;">เพิ่มเติม</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<div class="padding-card-placeHit">';
                            html += '<a href="/touristattractions/' + value.name_th + '" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>';
                            html += '</div>';
                            html += '</div>';
                            if (counter % 4 === 3) {
                                html += '</div>';
                            }
                            counter++;
                        });
                        if (counter % 4 !== 0) {
                            html += '</div>';
                        }
                        // if (response.total <= limit) {
                        //     $('#load-more').hide();
                        // } else {
                        //     $('#load-more').show();
                        // }
                        if (response.total > currentLimit) {
                            $('#load-more').show();
                        } else {
                            $('#load-more').hide();
                        }
                        if (currentLimit <= response.total) {
                            loading = false;
                            $('#load-more-btn').html('ดูเพิ่มเติม');
                        }
                        $('#tourist-attraction').html(html);

                        $('#tourist-attraction span.More').click(function() {
                            let span = $(this).prev();
                            span.data('tmp', span.text());
                            span.text(span.data('content'));
                            span.data('content', span.data('tmp'));

                            if ($(this).data('state') == 1) {
                                $(this).text('แสดงเพิ่มเติม...');
                                $(this).data('state', 0);
                            } else {
                                $(this).text('แสดงน้อยลง...');
                                $(this).data('state', 1);
                            }
                        });
                        $('#tourist-attraction span.p1').each(function() {
                            $(this).data('content', $(this).text());
                            if ($(this).text().length > 70) {
                                $(this).text($(this).text().substr(0, 70) + '...');
                                $(this).next().show();
                            } else {
                                $(this).next().hide();
                            }
                        });
                        //endปุ่มเพิ่มเติมในscriptประเภท
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            }
        });
    </script>

</body>

</html>
