<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ท่องเที่ยว</title>


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
        <!-- image slider -->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">


            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100 banner-slider" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://roijang.com/wp-content/uploads/2022/05/shutterstock_659886724.jpg" class="d-block w-100 banner-slider" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://paikondieow.com/wp-content/uploads/2020/09/0-2-8.jpg" class="d-block w-100 banner-slider" alt="...">
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
        </div>
        <!--end image slider -->

        {{-- <img class="banner-placeHit" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5yCh11ByQ6JOCN7q5YK2tqdwCGDp418UmCC3dnYRye3AbaaqHoz.jpg" alt=""> --}}
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
                        <p style="color: #535151;" class="text-head-content-placeHit">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>

                        <!-- Nav tabs -->

                        <ul class="nav nav-pills  px-1 py-2" id="pills-tab" role="tablist">
                            <h3>หมวดหมู่ : </h3>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info active " id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-selected="true">ทั้งหมด</button>
                            </li>
                            @foreach ($category as $cate)
                                <li class="nav-item px-1" role="presentation">
                                    <button type="button" class="btn btn-outline-info "id="category-tab" data-bs-toggle="pill" data-bs-target="#category" type="button" role="tab" aria-selected="false" data-category-id="{{ $cate->id }}">{{ $cate->name_th }}</button>
                                </li>
                            @endforeach
                            {{-- @foreach ($category as $cate)
                                <li class="nav-item px-1" role="presentation">
                                    <button type="button" class="btn btn-outline-info category-button" data-bs-toggle="pill" data-bs-target="#category" role="tab" aria-selected="false" data-category-id="{{ $cate->id }}">{{ $cate->name_th }}</button>
                                </li>
                            @endforeach --}}
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                <div class="wrapper">
                                    <div class="row list-wrapper">
                                        @foreach ($touristAttractions as $attraction)
                                            <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                                <div class="card  text-white" style="border: none;">
                                                    <img src="{{ asset('/storage/' . $attraction->cover_image) }}" class="img-card-placeHit" alt="...">
                                                    <div class="card-body text-black">
                                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>{{ $attraction->province }},ประเทศไทย</p>
                                                        <h4>{{ $attraction->name_th }}</h4>
                                                        <p class="text-card-content-placeHit">{{ $attraction->detail_th }}</p>
                                                    </div>
                                                </div>
                                                <div class="padding-card-placeHit">
                                                    <a href="{{ url('/touristattractions/' . $attraction->name_th) }}" type="button" class="btn btn-info text-white btn-map">ดูข้อมูล{{-- แผนที่เดินทาง --}}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <div class="row justify-content-center">
                                        <div id="pagination"class="padding-pagination1"></div>
                                    </div> --}}
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            {{-- <li class="page-item {{ $touristAttractions->currentPage() == 1 ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $touristAttractions->previousPageUrl() }}" tabindex="-1">Previous</a>
                                            </li> --}}
                                            @for ($i = 1; $i <= $totalPages; $i++)
                                                <li class="page-item {{ $touristAttractions->currentPage() == $i ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $touristAttractions->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                            {{-- <li class="page-item {{ $touristAttractions->currentPage() == $touristAttractions->lastPage() ? 'disabled' : '' }}">
                                                <a class="page-link" href="{{ $touristAttractions->nextPageUrl() }}">Next</a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="category" role="tabpanel">
                                <div class="row list-wrapper">
                                    <div class="row" id="category-place">

                                    </div>
                                </div>
                            </div>

                            {{-- <div class="tab-pane fade" id="category" role="tabpanel">
                                <div class="row list-wrapper">
                                    <div class="row" id="category-place">

                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button id="load-more" type="button" class="btn btn-info">Load More</button>
                                    </div>
                                </div>
                            </div> --}}
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

    <script>
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
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnuNFCpxLkWORNZymL1Tvr7cBa-d1TjD0&callback=initMap&v=weekly"></script>
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

    <script>
        $(document).ready(function() {
            $('#category-tab ').click(function() {
                var categoryId = $(this).data('category-id');
                $.ajax({
                    url: '/touristattractions/select-by-category',
                    type: 'GET',
                    data: {
                        category_id: categoryId
                    },
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        // $.each(data, function(index, value) {
                        for (var i = 0; i < data.length; i++) {
                            html += '<div class="list-item col-lg-3 col-md-6 mb-lg-3">';
                            html += '<div class="card text-white" style="border: none;">';
                            html += '<img src="/storage/' + data[i].cover_image + '" class="img-card-placeHit" alt="...">';
                            html += '<div class="card-body text-black">';
                            html += '<p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>' + data[i].province + ',ประเทศไทย</p>';
                            html += '<h4>' + data[i].name_th + '</h4>';
                            html += '<p class="text-card-content-placeHit">' + (data[i].detail_th ?? '') + '</p>';
                            html += '</div>';
                            html += '</div>';
                            html += '<div class="padding-card-placeHit">';
                            html += '<a href="/touristattractions/' + data[i].name_th + '" type="button" class="btn btn-info text-white btn-map">ดูข้อมูล</a>';
                            html += '</div>';
                            html += '</div>';
                        }
                        console.log(data);
                        // });
                        $('#category-place').html(html);
                    },
                    error: function(data) {
                        console.log(data);
                        console.log('Error: ' + error);
                    }
                });
            });
        });
    </script>

    {{-- <script>
        $(document).ready(function() {
            var currentPage = 1; // initial page number
            var perPage = 12; // items per page

            // function to render the HTML for a list item
            function renderItem(item) {
                var html = '';
                html += '<div class="list-item col-lg-3 col-md-6 mb-lg-3">';
                html += '<div class="card text-white" style="border: none;">';
                html += '<img src="/storage/' + item.cover_image + '" class="img-card-placeHit" alt="...">';
                html += '<div class="card-body text-black">';
                html += '<p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>' + item.province + ',ประเทศไทย</p>';
                html += '<h4>' + item.name_th + '</h4>';
                html += '<p class="text-card-content-placeHit">' + (item.detail_th ?? '') + '</p>';
                html += '</div>';
                html += '</div>';
                html += '<div class="padding-card-placeHit">';
                html += '<a href="/touristattractions/' + item.name_th + '" type="button" class="btn btn-info text-white btn-map">ดูข้อมูล</a>';
                html += '</div>';
                html += '</div>';
                return html;
            }

            // function to render the list of items
            function renderList(items) {
                var html = '';
                $.each(items, function(index, item) {
                    html += renderItem(item);
                });
                $('#category-place ').html(html);
            }

            // function to load the next page of items
            function loadMore() {
                $.ajax({
                    url: '/touristattractions/select-by-category',
                    type: 'GET',
                    data: {
                        category_id: $('#category-tab ').data('category-id'),
                        page: currentPage,
                        per_page: perPage
                    },
                    dataType: 'json',
                    success: function(data) {
                        var totalItems = data.total;
                        var totalPages = Math.ceil(totalItems / perPage);
                        var items = data.data;
                        renderList(items);
                        if (currentPage < totalPages) {
                            $('#load-more').show();
                        } else {
                            $('#load-more').hide();
                        }
                    },
                    error: function(data) {
                        console.log(data);
                        console.log('Error: ' + error);
                    }
                });
            }

            // load the initial page of items
            loadMore();

            // handle click event on "Load More" button
            $('#load-more ').click(function() {
                currentPage++;
                loadMore();
            });

            // handle click event on category tab
            $('#category-tab ').click(function() {
                currentPage = 1; // reset page number to 1
                loadMore();
            });
        });
    </script> --}}




</body>

</html>
