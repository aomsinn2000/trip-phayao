<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripPhayao</title>
    <link rel="icon" href="{{ asset('/assets/images/logo-phayao.png') }}" type="image/x-icon" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- slider img -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--end slider img -->
    <!-- font style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <!--end font style -->

    <!-- cdn jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--end cdn jquery -->



    <link href="{{ asset('assets/css/home/home.css') }}" rel="stylesheet">
    <style>
        /* .sticky-top1{
        position: -webkit-sticky;
  position: sticky;
  top: 0;
    } */
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



        <!-- ดีลสุดพิเศษ -->
        <br>
        <h2 style="text-align:center;">ดีลสุดพิเศษ</h2>
        <p class="line-header"></p>
        <p style="color: #535151;" class="text-content-top-dessination">รวบรวมข้อมูล ดีลสุดฮิต สุดร้อนแรง ใน จ.พะเยามาให้คุณ</p>

        <div id="specialDeal" class="img-special-deal">
            @foreach ($specialDeals as $key => $deal)
                @if ($deal->is_status == 1)
                    <div class="px-3">
                        <a href="{{ url('/specialdeals/' . $deal->name_th) }}">
                            <img class="specialDeal" src="{{ $deal->cover_image ? asset('/storage/' . $deal->cover_image) : asset('assets/image/unfound-image-b.jpg') }}" class="d-block w-100" alt="...">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

        <!--end ดีลสุดพิเศษ -->


        <br>
        <div class=" background-cate-place-hit">
            <div class="row">
                <h2 style="padding-bottom: 40px;">หมวดหมู่สถานที่ยอดฮิต</h2>
                <div id="catePlace" class="img-special-deal">
                    @foreach ($touristAttractionCategories as $category)
                        @if ($category->is_popular === 1)
                            <div class="col-4 col-lg-2 col-xs-4">
                                <a href="{{ url('/touristattractioncategories/' . $category->name_th) }}" class="text-cate-place-hit" style="text-align: center">
                                    <img class="img-cate-place-hit" src="{{ $category->image ? asset('/storage/' . $category->image) : asset('assets/image/unfound-image-b.jpg') }}" alt="">
                                    <p style="padding-top: 20px;">{{ $category->name_th }}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>


            </div>
        </div>
        <!-- end หมวดหมู่สถานที่ยอดฮิต -->

        <br>

        <!-- สถานที่ยอดฮิต -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="container place-top-destination">
                        <h2>สถานที่ยอดฮิต Top Destination </h2>
                        <p class="line-header"></p>
                        <p style="color: #535151;" class="text-content-top-dessination">สถานที่ท่องเที่ยวยอดฮิต ที่คัดสรรข้อมูลแต่ละบริเวณสถานที่มาเพื่ออำนวยความสะดวกแก่นักท่องเที่ยวให้ได้เสพบรรยากาศทุกแหล่งท่องเที่ยวได้อย่างเต็มที่</p>

                        <div class="container">
                            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-xs-2 g-4">
                                @foreach ($destinationFolders as $destination)
                                    <div class="col">
                                        <a href="{{ '/destinations/' . $destination->name_th }}">
                                            <figure class="card-with-hover">
                                                <img class="img-top-destination"
                                                    src="{{ asset('/storage/' . $destination->cover_image) }}"
                                                    alt="img24" width="100%" height="70%">
                                                <figcaption class="card-caption">
                                                    <div class="card-caption-content py-lg-5 py-md-5 py-5">
                                                        <div>
                                                            <p class="text-header-place-hit">{{ $destination->name_th }}</p>
                                                            <p class="address-place-hit"><b style="color: #FCB930">
                                                                    {{-- กิจกรรม 16 |  --}}สถานที่ {{ count($destination->touristAttractions) }}
                                                                    {{-- {{ count($destination->touristAttractions) == 0 ? '' : count($destination->touristAttractions) }} --}} </b>
                                                                <br>
                                                                ที่ตั้ง : ตำบล{{ $destination->sub_district ?? '' }} อำเภอ{{ $destination->district ?? '' }} จังหวัด{{ $destination->province ?? '' }} {{ $destination->postcode ?? '' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </div>
                                @endforeach

                                {{-- <div class="col">
                                    <a href="{{ url('showTouristAttraction') }}">
                                        <figure class="card-with-hover">
                                            <!-- Photo by Iga Palacz on Unsplash -->
                                            <img class="img-top-destination" src="http://www.ท่องทั่วไทย.com/wp-content/uploads/2015/03/phunang-02.jpg" alt="img24" width="100%" height="70%">
                                            <figcaption class="card-caption">
                                                <div class="card-caption-content py-lg-5 py-md-5 py-5">
                                                    <div>
                                                        <p class="text-header-place-hit">อุทยานแห่งชาติดอยภูนาง </p>
                                                        <p class="address-place-hit"><b style="color: #FCB930"> กิจกรรม 16 | สถานที่ 25 </b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ url('showTouristAttraction') }}">
                                        <figure class="card-with-hover">
                                            <!-- Photo by Iga Palacz on Unsplash -->
                                            <img src="https://www.trekkingthai.com/wp-content/uploads/2018/10/15439956_10209975146207255_6269812643284831473_n.jpg" alt="img24" width="100%" height="70%">
                                            <figcaption class="card-caption ">
                                                <div class="card-caption-content py-lg-5 py-md-5 py-5">
                                                    <div>
                                                        <p class="text-header-place-hit">ดอยหนอกดอยหลวง</p>
                                                        <p class="address-place-hit"><b style="color: #FCB930"> กิจกรรม 16 | สถานที่ 25 </b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ url('showTouristAttraction') }}">
                                        <figure class="card-with-hover">
                                            <!-- Photo by Iga Palacz on Unsplash -->
                                            <img class="img-top-destination"src="https://www.paiduaykan.com/travel/wp-content/uploads/2022/02/SON08569.jpg" alt="img24" width="100%" height="70%">
                                            <figcaption class="card-caption">
                                                <div class="card-caption-content py-lg-5 py-md-5 py-5">
                                                    <div>
                                                        <p class="text-header-place-hit">วัดในเมืองพะเยา</p>
                                                        <p class="address-place-hit"><b style="color: #FCB930"> กิจกรรม 16 | สถานที่ 25 </b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end สถานที่ยอดฮิต -->


        <!-- กิจกรรมยอดฮิต Trending Activities -->
        <br>
        <h2 style="text-align:center;">กิจกรรมยอดฮิต Trending Activities</h2>
        <p class="line-header"></p>
        <p style="color: #535151;" class="text-content-top-dessination">รวบรวมกิจกรรม หลากหลายรูปแบบ เพื่อการดื่มดำกับการท่องเที่ยว ใน จ.พะเยาให้ครบทุกมิติ</p>

        <div id="trendingActive" class="img-special-deal">
            <div>
                <a href="{{ url('/activities/description') }}">
                    <div class="img-trending">
                        <img src="http://topicstock.pantip.com/isolate/topicstock/2011/11/M11286445/M11286445-1.jpg" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>ตักบาตรข้าวเหนียวริมกว๊าน</h6>
                            <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ url('/activities/description') }}">
                    <div class="img-trending">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQ8Y3c0lX3t1PGHQcxp37FxgcGlpqfELwTQ&usqp=CAU" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>พายเรือชมทัศนียภาพยามเย็นในกว๊านพะเยา</h6>
                            <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ url('/activities/description') }}">
                    <div class="img-trending">
                        <img src="https://mpics.mgronline.com/pics/Images/558000002399319.JPEG" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>ปั่นจักรยานริมกว๊านยามเย็น</h6>
                            <p class="text-content-trending">กับมุมถ่ายรูปคู่ป้ายกว๊าน มุมนั่งเล่น มุมชมวิว ชมพระอาทิตย์ตก และมุมที่ไม่น่าเชื่อว่านี่คือ “กว๊านพะเยา” </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ url('/activities/description') }}">
                    <div class="img-trending">
                        <img src="http://topicstock.pantip.com/isolate/topicstock/2011/11/M11286445/M11286445-1.jpg" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>ตักบาตรข้าวเหนียวริมกว๊าน</h6>
                            <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ url('/activities/description') }}">
                    <div class="img-trending">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQ8Y3c0lX3t1PGHQcxp37FxgcGlpqfELwTQ&usqp=CAU" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>พายเรือชมทัศนียภาพยามเย็นในกว๊านพะเยา</h6>
                            <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="">
                    <div class="img-trending">
                        <img src="https://mpics.mgronline.com/pics/Images/558000002399319.JPEG" alt="" class="card-trending">
                        <div class="content container">
                            <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                            <h6>ปั่นจักรยานริมกว๊านยามเย็น</h6>
                            <p class="text-content-trending">กับมุมถ่ายรูปคู่ป้ายกว๊าน มุมนั่งเล่น มุมชมวิว ชมพระอาทิตย์ตก และมุมที่ไม่น่าเชื่อว่านี่คือ “กว๊านพะเยา” </p>
                        </div>
                    </div>
                </a>
            </div>



        </div>

        <!-- end กิจกรรมยอดฮิต Trending Activities -->
        <br>
        <br>


        <!-- บริการจองโรงแรม -->

        <div class="box-hotel">
            <a href="{{ url('/specialdeals/') }}">
                <img class="img-hotel" src="{{ asset('assets/images/banner-book.png') }}" alt="">
            </a>

            {{-- <img class="img-hotel" src="https://png.pngtree.com/thumb_back/fw800/background/20190903/pngtree-pink-sparkling-background-image_313710.jpg" alt="Snow"> --}}

            {{-- <div class="text-right-hotel">
                <button type="button" class="button-hotel text-white text-hotel ">คลิก!</button>
            </div>
            <div class="text-left-hotel">
                <span><b>จองโรงแรมในราคาสุดพิเศษได้ HOT DEAL</b> </span>
            </div> --}}

        </div>
        <!-- end บริการจองโรงแรม -->
        <br>
        <br>

        <!-- package tour -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="container">
                        <h3 style="text-align: center;"><b> PACKAGE TOUR</b></h3>
                        <p class="line-header"></p>
                        <p class="text-content-packageTour">รวบรวมแพ็คเกจ การท่องเที่ยวแบบต่างๆ มาบริการให้กับนักท่องเที่ยว มีทั้งแบบ One Day Trip และ Long Day Trip</p>
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-6 g-4">
                            <div class="col col-lg-4 col-md-6">
                                <a href="" style=" text-decoration: none;">
                                    <div class="card  text-white">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="best-seller">Best Seller</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">
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
                                </a>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-6">
                            <a href="" style=" text-decoration: none;">
                                <div class="card  text-white">
                                    <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                    <div class="card-img-overlay">
                                        <p class="best-seller">Best Seller</p>
                                    </div>
                                    <div class="card-body text-black">
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
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
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-6">
                        <a href="" style=" text-decoration: none;">
                            <div class="card  text-white">
                                <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                <div class="card-img-overlay">
                                    <p class="best-seller">Best Seller</p>
                                </div>
                                <div class="card-body text-black">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
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
                        </a>
                    </div>
                </div>
            </div>
            <br>
            <h5 style="text-align: center;">

                <a href="" type="button" class=" text-more-pakageTour" style="">ดู Pakage Tour เพิ่มเติม </a>
            </h5>
        </div>
    </div>
    </div>
    </div>
    <!-- end package tour -->

    <br>






    <!-- Story Tips Guide (Blog) -->
    <div class="img-story">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="container">
                        <br>
                        <h2 style="text-align: center;">Story Tips Guide (Blog)</h2>
                        <p class="text-content-story">อัพเดทเรื่องราวการท่องเที่ยว รีวิวสถานที่กิน ที่พัก ที่เที่ยว หรือกิจกรรมต่างๆ</p>
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 ">
                            <div class="col">
                                <div class="card">
                                    <a href="">
                                        <img src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">กว๊านพะเยา</h4>
                                        <span id="textCardStory1" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br>
                                        <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="">
                                        <img src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">ภูลังกา</h4>
                                        <span id="textCardStory2" style="color: #868383;"> ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br> <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card ">
                                    <a href="">
                                        <img src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">กว๊านพะเยา</h4>
                                        <span id="textCardStory3" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br>
                                        <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="">
                                        <img src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">ภูลังกา</h4>
                                        <span id="textCardStory4" style="color: #868383;"> ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br> <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="">
                                        <img src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">กว๊านพะเยา</h4>
                                        <span id="textCardStory5" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br>
                                        <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <a href="">
                                        <img src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" class="img-card-story" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">ภูลังกา</h4>
                                        <span id="textCardStory6" style="color: #868383;"> ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
                                        </span>
                                        <span><a href="">...read more</a></span>
                                        <br> <br>
                                        <div class="text-place-card-story"><a href=""><b><u>สถานที่ท่องเที่ยว</u> </b></a>
                                            <span>By <span style="color: black;">Adam Smith</span></span>
                                            <div class="d-flex bd-highlight mb-3">
                                                <div class="p-2 bd-highlight">10 Nov, 2020</div>
                                                <div class="p-2 bd-highlight" style="color: #FCB930;">50 comment</div>
                                                <div class="ms-auto p-2 bd-highlight" style="color: black;">Views <span style="color: #0b36c4;"> 258k</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex bd-highlight mb-3">
                            <div class="ms-auto p-2 bd-highlight" style="padding-right:60px;"><a href="{{ url('/articles/') }}" type="button" class="btn btn-info" style=" color: #ffff; border-radius:10px; background-color:#00AEEF;">บทความเพิ่มเติม ></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!--end Story Tips Guide (Blog) -->


    <br>
    <br>


    <!-- ประสบการณ์นักท่องเที่ยว -->
    <div class="container">
        <h3 style="text-align: center;"><b>ประสบการณ์นักท่องเที่ยว</b></h3>
        <p class="line-header"></p>
        <div id="experience">
            <div class="px-2">
                <div class="card mb-1">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center;"><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
                        <p class="text-content-experience">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto p-1 bd-highlight">
                                <img src="https://media.istockphoto.com/id/1311634222/photo/portrait-of-successful-black-male-modern-day-student-holding-smartphone.jpg?s=612x612&w=0&k=20&c=vl2FeMtO91rpRUcq0reIfqAQPrQsf30JF-JAxU5baro=" class="img-experience" alt="">
                            </div>
                            <div class="p-2 flex-shrink-1 bd-highlight" style="font-size: 12px;">John P
                                <p class="star-experience">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <div class="card mb-1">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center;"><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
                        <p class="text-content-experience">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto p-1 bd-highlight">
                                <img src="https://media.istockphoto.com/id/1311634222/photo/portrait-of-successful-black-male-modern-day-student-holding-smartphone.jpg?s=612x612&w=0&k=20&c=vl2FeMtO91rpRUcq0reIfqAQPrQsf30JF-JAxU5baro=" class="img-experience" alt="">
                            </div>
                            <div class="p-2 flex-shrink-1 bd-highlight" style="font-size: 12px;">John P
                                <p class="star-experience">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <div class="card mb-1">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center;"><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
                        <p class="text-content-experience">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto p-1 bd-highlight">
                                <img src="https://media.istockphoto.com/id/1311634222/photo/portrait-of-successful-black-male-modern-day-student-holding-smartphone.jpg?s=612x612&w=0&k=20&c=vl2FeMtO91rpRUcq0reIfqAQPrQsf30JF-JAxU5baro=" class="img-experience" alt="">
                            </div>
                            <div class="p-2 flex-shrink-1 bd-highlight" style="font-size: 12px;">John P
                                <p class="star-experience">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <div class="card mb-1">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center;"><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
                        <p class="text-content-experience">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto p-1 bd-highlight">
                                <img src="https://media.istockphoto.com/id/1311634222/photo/portrait-of-successful-black-male-modern-day-student-holding-smartphone.jpg?s=612x612&w=0&k=20&c=vl2FeMtO91rpRUcq0reIfqAQPrQsf30JF-JAxU5baro=" class="img-experience" alt="">
                            </div>
                            <div class="p-2 flex-shrink-1 bd-highlight" style="font-size: 12px;">John P
                                <p class="star-experience">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-2">
                <div class="card mb-1">
                    <div class="card-body ">
                        <h5 class="card-title" style="text-align: center;"><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
                        <p class="text-content-experience">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    </div>
                    <div class="card-footer bg-transparent ">
                        <div class="d-flex bd-highlight">
                            <div class="me-auto p-1 bd-highlight">
                                <img src="https://media.istockphoto.com/id/1311634222/photo/portrait-of-successful-black-male-modern-day-student-holding-smartphone.jpg?s=612x612&w=0&k=20&c=vl2FeMtO91rpRUcq0reIfqAQPrQsf30JF-JAxU5baro=" class="img-experience" alt="">
                            </div>
                            <div class="p-2 flex-shrink-1 bd-highlight" style="font-size: 12px;">John P
                                <p class="star-experience">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <br><br>

    <!-- บริการเสริม -->
    <div class="other-service-background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h3 style="text-align: center;"><b>บริการเสริม</b></h3>
                    <p class="line-header"></p>
                    <p class="text-content-packageTour">รวบรวมบริการเสริมรูปแบบต่างๆ เช่น บริการเช่ารถ บริการรถรับ-ส่งสนามบิน บริการไกด์นำเที่ยว หรืออื่นๆอีกมากมาย</p>
                    <br>
                    <div class="row">

                        <div class="col-lg-3 col-sm-6 col-md-6  py-1">
                            <div class="card-other-service">
                                <div class="card-body">
                                    <a href="" class="card-text">
                                        <div class="card-image">
                                            <img class="img-other-service" src="https://cdn.pixabay.com/photo/2022/06/02/18/17/car-7238650_1280.png">
                                        </div>
                                        <p>บริการรถรับ-ส่ง สนามบิน</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 py-1">
                            <div class="card-other-service">
                                <div class="card-body">
                                    <a href="" class="card-text">
                                        <div class="card-image">
                                            <img class="img-other-service" src="https://cdn.pixabay.com/photo/2022/06/02/18/17/car-7238650_1280.png">
                                        </div>
                                        <p>บริการเช่ารถ รายวัน/ชั่วโมง</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 py-1">
                            <div class="card-other-service">
                                <div class="card-body">
                                    <a href="" class="card-text">
                                        <div class="card-image">
                                            <img class="img-other-service" src="https://www.pngitem.com/pimgs/m/4-41456_clipart-freeuse-bike-transparent-animated-riding-bicycle-gif.png">
                                        </div>
                                        <p>บริการเช่าอื่นๆ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 py-1">
                            <div class="card-other-service">
                                <div class="card-body">
                                    <a href="" class="card-text">
                                        <div class="card-image">
                                            <img class="img-other-service" src="https://www.pngall.com/wp-content/uploads/11/Guide-PNG-Image-HD.png">
                                        </div>
                                        <p>บริการไกด์นำเที่ยว</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end บริการเสริม -->




    <div class="padding-under"></div>


    @include('layouts.footer')
    </div>




    <!--script Story Tips Guide (Blog) -->
    <script>
        $(document).ready(function() {
            $('#textCardStory1').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
            $('#textCardStory2').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
            $('#textCardStory3').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
            $('#textCardStory4').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
            $('#textCardStory5').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
            $('#textCardStory6').each(function(f) {
                var newstr = $(this).text().substring(0, 60);
                $(this).text(newstr);
            });
        })
    </script>
    <!--script Story Tips Guide (Blog) -->







    <br>
    <br>



    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->




    <script>
        $('#catePlace').slick({
            centerPadding: '270px',
            dots: true,
            arrows: true,
            slidesToShow: 7,
            slidesToScroll: 2,


            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 7,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                        centerPadding: '100px',
                        arrows: true
                    }
                },
                {
                    breakpoint: 840,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '0.5px',
                        slidesToShow: 5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '60px',
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 390,
                    settings: {
                        arrows: true,
                        centerMode: false,
                        centerPadding: '60px',
                        slidesToShow: 3,
                        slidesToScroll: 2,
                    }
                },
            ]
        });
    </script>

    {{-- script slick ดีลสุดพิเศษ --}}
    <script>
        $('#specialDeal').slick({

            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            centerMode: true,
            slidesToScroll: 2,
            arrows: true,

            responsive: [{
                    breakpoint: 2200,
                    settings: {
                        centerMode: false,
                        slidesToShow: 4,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1900,
                    settings: {
                        centerMode: true,
                        slidesToShow: 3,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        centerMode: true,
                        slidesToShow: 3,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1400,
                    settings: {
                        centerMode: true,
                        slidesToShow: 3,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1300,
                    settings: {
                        centerMode: true,
                        slidesToShow: 2,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        centerPadding: '30px',
                        dots: true
                    }
                },
                {
                    breakpoint: 821,
                    settings: {
                        centerMode: true,
                        slidesToShow: 2,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }, {
                    breakpoint: 376,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,

                        arrows: false
                    }
                }
            ]
        });
    </script>
    {{-- end script slick ดีลสุดพิเศษ --}}



    {{-- script slick กิจกรรมยอดฮิต --}}
    <script>
        $('#trendingActive').slick({
            centerMode: true,
            centerPadding: '270px',
            dots: true,
            arrows: true,
            slidesToShow: 3,

            responsive: [{
                    breakpoint: 2200,
                    settings: {
                        centerMode: false,
                        slidesToShow: 6,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 1800,
                    settings: {
                        centerMode: true,
                        slidesToShow: 3,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        centerMode: true,
                        slidesToShow: 3,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1450,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        centerPadding: '350px',
                        dots: true
                    }
                },
                {
                    breakpoint: 1360,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        centerPadding: '300px',
                        dots: true
                    }
                }, {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                        centerPadding: '100px',
                        arrows: false
                    }
                },
                {
                    breakpoint: 840,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0.5px',
                        slidesToShow: 3

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 390,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '60px',
                        slidesToShow: 1
                    }
                },

            ]
        });
    </script>
    {{-- end script slick กิจกรรมยอดฮิต --}}



    {{-- script slick ประสบการณ์นักท่องเที่ยว --}}
    <script>
        $('#experience').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                        arrows: false

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false

                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    {{-- end script slick ประสบการณ์นักท่องเที่ยว --}}


</body>

</html>
