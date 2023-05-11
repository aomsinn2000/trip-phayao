<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- token for POST method --}}

    <title>{{ $category->name_th }} - TripPhayao</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/touristAttraction/touristAttraction.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style>
        #map {
            height: 400px;
            width: 100%;
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
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container ">
                        <br><br>
                        <h3 style="text-align: center; color:#00AEEF;"><b>{{ $category->name_th }}</b> </h3>
                        <p style="margin: auto;background-color: #00AEEF; width: 120px;padding-top: 2px;"></p>
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-lg-8 py-md-2">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6">จำนวนผลลัพธ์ทั้งหมด <span style="color:#00AEEF;">{{ $total }}</span> <span class="text-black px-2">รายการ</span></div>
                                        <div class="col-lg-6 col-md-6">เรียงตาม
                                            <select class="select-style" aria-label="Default select example" id="sortBy">
                                                <option selected value="">ทั้งหมด</option>
                                                <option value="1">ล่าสุด</option>
                                                <option value="2">เดือนที่ผ่านมา</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <input type="text" id="search" class="form-control search-tags" placeholder="ค้นหา ชื่อสถานที่">
                                </div>
                            </div>
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
    <div class="padding-footer"></div>
    @include('layouts.footer')
    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            var category = "{{ $category->id }}";
            var categoryName = "{{ $category->name_th }}";
            var keyword = '';
            var sort = '';
            var currentLimit = 8;
            loadData(sort, keyword, currentLimit);

            $('#sortBy').on('change', function() {
                var sort = $(this).val();
                currentLimit = 8;
                console.log(sort);
                loadData(sort, keyword, currentLimit);
            })

            $('#search').on('keyup', function() {
                var keyword = $(this).val();
                currentLimit = 8;
                console.log(keyword);
                loadData(sort, keyword, currentLimit);
            });

            $('#load-more-btn').on('click', function() {
                currentLimit += 8;
                loadData($('#sortBy').val(), $('#search').val(), currentLimit);
            });

            function loadData(sort, keyword, limit) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //token สำหรับpost method ใช้คู่กับ<meta>ข้างบน
                    },
                    url: '/touristattractioncategories/tourist-attraction-in-category',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        category: category,
                        sort: sort,
                        keyword: keyword,
                        limit: limit
                    },
                    success: function(response) {
                        var html = '';
                        var counter = 0;
                        console.log(sort);
                        $.each(response.data, function(index, value) {
                            if (counter % 4 === 0) {
                                html += '<div class="row">';
                            }
                            html += '<div class="list-item col-lg-3 col-md-6 mb-lg-3">';
                            html += '<div class="card text-white" style="border: none;">';
                            html += '<div class="my-data-item">' + value.name_th + '</div>';
                            html += '<a href="/touristattractioncategories/' + categoryName + '/' + value.name_th + '">';
                            html += '<img src="' + (value.cover_image ? '/storage/' + value.cover_image : '/assets/image/unfound-image-b.jpg') + '" class="img-card-placeHit" alt="...">';
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
                            html += '<a href="/touristcategories/' + categoryName + '/' + value.name_th + '" type="button" class="btn btn-info text-white btn-map">ดูรายละเอียด</a>';
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
                        if (response.total > currentLimit) {
                            $('#load-more').show();
                        } else {
                            $('#load-more').hide();
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
