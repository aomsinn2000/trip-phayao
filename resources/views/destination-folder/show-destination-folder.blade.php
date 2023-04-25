<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $destinations->name_th }} - TripPhayao</title>


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
        <img class="banner-placeHit" src="{{ $destinations->banner_image ? asset('/storage/' . $destinations->banner_image) : 'https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5yCh11ByQ6JOCN7q5YK2tqdwCGDp418UmCC3dnYRye3AbaaqHoz.jpg' }}" alt="">

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <br><br><br>


                        <div class="row">
                            <div class="col-lg-8 col-xs-12">
                                <p class="text-head1-placeHit"><b>{{ $destinations->name_th }}</b></p>
                                {{-- <p class="text-head2-placeHit">สายน้ำแห่งชีวิต</p> --}}
                                <div class="row">
                                    <div>
                                        <p class="text-content-placeHit">
                                            {{ $destinations->slogan_th }}
                                        </p>
                                    </div>
                                </div>

                                <br><br><br>
                            </div>
                            <div class="col-lg-4 col-xs-12 " id="embed-code">
                                {{-- <br> --}}
                                {{-- <video class="video-placeHit" controls>
                                    <source src="{{$destinations->link}}" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video> --}}

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container ">
                        <br><br>
                        <h3 style="text-align: center"><b>สถานที่ยอดฮิต Top Destination </b> </h3>
                        <p class="line-header"></p>
                        <p style="color: #535151;" class="text-head-content-placeHit">สถานที่ท่องเที่ยวยอดฮิต ที่คัดสรรข้อมูลแต่ละบริเวณสถานที่มาเพื่ออำนวยความสะดวกแก่นักท่องเที่ยวให้ได้เสพบรรยากาศทุกแหล่งท่องเที่ยวได้อย่างเต็มที่</p>

                        <!-- Nav tabs -->
                        {{-- <ul class="nav nav-pills  px-1 py-2" id="pills-tab" role="tablist">
                            <h3>หมวดหมู่ : </h3>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info active " id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-selected="true">ทั้งหมด</button>
                            </li>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info "id="pills-restaurant-tab" data-bs-toggle="pill" data-bs-target="#pills-restaurant" type="button" role="tab" aria-selected="false">วัด</button>
                            </li>
                        </ul> --}}
                        <ul class="nav nav-pills  px-1 py-2" id="pills-tab" role="tablist">
                            <h3>หมวดหมู่ : </h3>
                            <li class="nav-item px-1" role="presentation">
                                <button type="button" class="btn btn-outline-info active " id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-selected="true">ทั้งหมด</button>
                            </li>
                            @foreach ($category as $cate)
                                <li class="nav-item px-1" role="presentation">
                                    <button type="button" class="btn btn-outline-info "id="category-tab" data-bs-toggle="pill" data-bs-target="#category" type="button" role="tab" aria-selected="false"
                                        data-folder-id="{{ $destinations->id }}" data-category-id="{{ $cate['id'] }}">{{ $cate['name_th'] }}</button>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                <div class="wrapper">
                                    <div class="row list-wrapper">
                                        @foreach ($destinations->touristAttractions as $attractions)
                                            <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                                <div class="card  text-white" style="border: none;">
                                                    <a href="{{ url('/destinations/' . $destinations->name_th . '/' . $attractions->name_th) }}">
                                                        <img src="{{ $attractions->cover_image ? '/storage/' . $attractions->cover_image : asset('assets/image/unfound-image-b.jpg') }}" class="img-card-placeHit" alt="...">
                                                    </a>
                                                    <div class="card-body text-black">
                                                        <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>{{ $attractions->province }},ประเทศไทย</p>
                                                        <h4>{{ $attractions->name_th }}</h4>
                                                        <div class="text-card-content-placeHit">
                                                            <span class="p1">{{ $attractions->detail_th }}</span>
                                                            {{-- <span class="More" style="cursor:pointer;color:blue;">เพิ่มเติม</span> --}}
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="padding-card-placeHit">
                                                    <a href="{{ url('/destinations/' . $destinations->name_th . '/' . $attractions->name_th) }}" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    {{-- <div class="row justify-content-center">
                                        <div id="pagination"class="padding-pagination1"></div>
                                    </div> --}}
                                </div>

                            </div>
                            <div class="tab-pane fade" id="category" role="tabpanel">
                                <div class="row list-wrapper">
                                    <div class="row" id="category-place">

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
    <br> --}}

    {{-- <div id="map"></div> --}}






    <div class="padding-footer"></div>
    @include('layouts.footer')

    <script>
        $(document).ready(function() {
            var url = "{{ $destinations->link }}";
            console.log('URL:', url); // Log the URL to the console
            if (url.indexOf("youtube.com") > -1) {
                var splitLink = url.split('watch?v=');
                var embedLink = splitLink.join('embed/');
                $('#embed-code').html('<iframe width="100%" height="315" src="' + embedLink + '" frameborder="0" allowfullscreen></iframe>');
            } else {
                $('#embed-code').html('');
            }
            // console.log(url);
            // console.log(splitLink);
            // console.log(embedLink);
        });
    </script>

    {{-- map --}}
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

    <script>
        $(document).ready(function() {
            $('#category-tab ').click(function() {
                var folderId = $(this).data('folder-id');
                var categoryId = $(this).data('category-id');
                $.ajax({
                    url: '/destinations/select-by-category/' + folderId,
                    type: 'GET',
                    data: {
                        category_id: categoryId
                    },
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        for (var i = 0; i < data.length; i++) {
                            html += '<div class="list-item col-lg-3 col-md-6 mb-lg-3">';
                            html += '<div class="card text-white" style="border: none;">';
                            html += '<a href="{{ url('/touristattractions/' . $attractions->name_th) }}">';
                            html += '<img src="' + (data[i].cover_image ? '/storage/' + data[i].cover_image : '{{ asset('assets/image/unfound-image-b.jpg') }}') + '" class="img-card-placeHit" alt="...">';
                            html += '</a>'
                            html += '<div class="card-body text-black">';
                            html += '<p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>' + data[i].province + ',ประเทศไทย</p>';
                            html += '<h4>' + data[i].name_th + '</h4>';
                            html += '<div class="text-card-content-placeHit">';
                            html += '<span class="p1" >' + (data[i].detail_th ?? '') + '</span>';
                            // html += '<span class="More" style="cursor:pointer;color:blue;">เพิ่มเติม</span>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '<div class="padding-card-placeHit">';
                            html += '<a href="/touristattractions/' + data[i].name_th + '" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>';
                            html += '</div>';
                            html += '</div>';
                        }
                        console.log(data);
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
            var songsUrl = ["https://www.youtube.com/b?v=7UAtDPvraos&list=RD_P1xND6DjFE&index=6"];
            $.each(songsUrl, function(index, value) {

                var splitLink = value.split('watch?v=')
                var embedLink1 = splitLink.join("embed/")
                $("#result").append(index + ": " + embedLink1 + '<br>');
            });
        });
    </script>


</body>

</html>
