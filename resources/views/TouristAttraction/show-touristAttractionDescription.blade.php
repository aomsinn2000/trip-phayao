<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ยอดฮิต</title>
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
                <span><a href="{{ url('showTouristAttraction') }}" class="text-nav-placeHit"> สถานที่ยอดฮิต /</a></span>
                <span><a href="" class="text-nav-placeHit" style="color: #27AAE1"> <b>วนอุทยานแห่งชาติภูลังกา</b></a></span>
            </p>
        </div>

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="font-family: 'Kanit', sans-serif;"><b>วนอุทยานภูลังกา</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <p class=" share-news">แชร์ข่าว
                                    <a href=""> <span class="px-1"><i class="bi bi-facebook"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-twitter"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-line"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-link-45deg"></i></span></a>
                                    <a href=""> <span class="px-1"><i class="bi bi-printer"></i></span></a>
                                </p>
                            </div>
                        </div>

                        <p class="text-category">หมวดหมู่
                            <span style="color:#00AEEF;"><b>: ที่พัก </b></span>
                        </p>
                        <p style="color: #868383">เรทติ้ง : 4.5
                            <span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star-half-o"></span>

                            </span>
                        </p>






                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

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
                        </div>

                        <br><br>


                        {{-- เนื้อหา --}}
                        <p class="text-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta fugiat enim quis, officiis harum tenetur reiciendis consequatur magnam! Porro ad nam qui dignissimos mollitia! Dolorum magnam exercitationem incidunt sint ipsam.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, reprehenderit saepe nostrum perferendis iusto dolorem ullam maxime aut, error incidunt harum alias asperiores labore nisi, possimus optio nam similique amet?
                        </p>
                        <img class="image-content py-3" src="https://cms.dmpcdn.com/travel/2022/05/19/a7ff3520-d73d-11ec-b003-ad49049c5364_webp_original.jpg" alt="">

                        <img class="image-content" src="https://inzpy.com/wp-content/uploads/2022/10/1200x800-Cover-Phu-Langka-Phayao-a-beautiful-viewpoint-of-the-sea-of-%E2%80%8B%E2%80%8Bmist-scaled.jpg" alt="">
                        <br><br>
                        <p class="text-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta fugiat enim quis, officiis harum tenetur reiciendis consequatur magnam! Porro ad nam qui dignissimos mollitia! Dolorum magnam exercitationem incidunt sint ipsam.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, reprehenderit saepe nostrum perferendis iusto dolorem ullam maxime aut, error incidunt harum alias asperiores labore nisi, possimus optio nam similique amet?
                        </p>
                        {{-- end เนื้อหา --}}



                        {{-- ที่ตั้ง --}}
                        <div class="text-address">
                            <hr>
                            <p>ที่ตั้ง <b>ตำบลผาช้างน้อย อำเภอเชียงคำ จังหวัดพะเยา</b></p>
                            <p>การเดินทาง : จากตัวเมืองพะเยาใช้ทางหลวงหมายเลข 1092 ถนนสายพะเยา-ปง ระยะทาง 104 กม. เมื่อ ถึงอำเภอเชียงคำเดินทางต่อไปอีกระยะทางประมาณ 3 กิโลเมตร ตามทางหลวงหมายเลข 1148 แล้วเลี้ยวซ้ายไปทางทิศเหนืออีก 12 กิโลเมตร จะถึงวนอุทยานฯ</p>
                            <p>ช่วงเวลาท่องเที่ยว : <b>ฤดูหนาว</b></p>
                        </div>

                        {{-- end ที่ตั้ง --}}
                        <br><br>

                        {{-- tags --}}
                        <p>
                        <h3><b>Tage : </b></h3>
                        <span>
                            <button type="button" class="btn btn-outline-secondary">ธรรมชาติ</button>
                            <button type="button" class="btn btn-outline-secondary">ภูเขา</button>
                            <button type="button" class="btn btn-info">ดอย</button>
                            <button type="button" class="btn btn-outline-secondary">กางเต้นท์</button>
                            <button type="button" class="btn btn-outline-secondary">ชมวิว</button>
                            <button type="button" class="btn btn-outline-secondary">พะเยา</button>
                            <button type="button" class="btn btn-outline-secondary">ทะเลหมอก</button>
                            <button type="button" class="btn btn-outline-secondary">กิจกรรมกลางแจ้ง</button>
                            <button type="button" class="btn btn-outline-secondary">เดินป่า</button>
                        </span>
                        </p>

                        {{-- end tags --}}
                    </div>
                </div>
            </div>
        </div>

        <br><br>















        {{-- reviews --}}
        <div class="review-background">
            <br>
            <h3 style="text-align: center"><b>Reviews</b></h3>
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="container ">
                            <div class="row align-items-center">
                                <div class="col-lg-3 text-center">
                                    <p>
                                        <span class="text-point">4.5</span>
                                        <span class="text-total-point">/5</span><br>
                                        ดีเยี่ยมที่สุด
                                    </p>

                                    <p class="base-on">base on <span class="base-on-view">20 view</span></p>
                                </div>
                                <div class="col-lg-9 text-head-point py-4 ">
                                    <div class="container py-1">
                                        <div class="col-lg-2 col-xs-8">ดีเยี่ยมที่สุด</div>
                                        <div class="col-lg-10 col-xs-4 progress" style="height: 10px; ">
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="container py-1">
                                        <div class="col-lg-2 col-xs-8">ดีมาก</div>
                                        <div class="col-lg-10 col-xs-4 progress" style="height: 10px; ">
                                            <div class=" progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="container py-1">
                                        <div class="col-lg-2 col-xs-8">พอใช้</div>
                                        <div class="col-lg-10 col-xs-4 progress" style="height: 10px; ">
                                            <div class=" progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="container py-1">
                                        <div class="col-lg-2 col-xs-8">ค่อนข้างแย่</div>
                                        <div class="col-lg-10 col-xs-4 progress" style="height: 10px; ">
                                            <div class=" progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="container py-1">
                                        <div class="col-lg-2 col-xs-8">ควรปรับปรุง</div>
                                        <div class="col-lg-10 col-xs-4 progress" style="height: 10px; ">
                                            <div class=" progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>


                        <div class="row" id="responsive">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <img class="img-user" src="https://cdn2.psychologytoday.com/assets/styles/manual_crop_1_91_1_1528x800/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=7lrLYx-B" alt="">
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                David Lopster <br>
                                                <span style="display: block; font-size: 12px;">11 / 5 / 2565 </span>
                                                <p style="font-size: 12px;">
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star-half-full star-checked "></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>
                                            <div class="ms-auto p-2 bd-highlight text-like">
                                                3 like this
                                                <a class="up vote_buttoon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>

                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, suscipit unde! Assumenda necessitatibus deserunt illum odit fuga recusandae nulla optio, voluptatem maxime, hic deleniti ratione impedit eum dolore dolorum nam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <img class="img-user" src="https://cdn2.psychologytoday.com/assets/styles/manual_crop_1_91_1_1528x800/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=7lrLYx-B" alt="">
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                David Lopster <br>
                                                <span style="display: block; font-size: 12px;">11 / 5 / 2565 </span>
                                            </div>
                                            <div class="ms-auto p-2 bd-highlight text-like">
                                                3 like this
                                                <a class="up vote_buttoon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <p style="font-size: 12px;">
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star-half-full star-checked "></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, suscipit unde! Assumenda necessitatibus deserunt illum odit fuga recusandae nulla optio, voluptatem maxime, hic deleniti ratione impedit eum dolore dolorum nam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <img class="img-user" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH-q3WWsLEVdDsXEddGHxpoE00Y2knvcEJ5pAmjsoUM2DFPFxfZO7_Y2GjBunSUmlbJds&usqp=CAU" alt="">
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                David Lopster <br>
                                                <span style="display: block; font-size: 12px;">11 / 5 / 2565 </span>
                                            </div>
                                            <div class="ms-auto p-2 bd-highlight text-like">
                                                3 like this
                                                <a class="up vote_buttoon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <p style="font-size: 12px;">
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star-half-full star-checked "></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, suscipit unde! Assumenda necessitatibus deserunt illum odit fuga recusandae nulla optio, voluptatem maxime, hic deleniti ratione impedit eum dolore dolorum nam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <img class="img-user" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8&w=1000&q=80" alt="">
                                            </div>
                                            <div class="p-2 bd-highlight">
                                                David Lopster <br>
                                                <span style="display: block; font-size: 12px;">11 / 5 / 2565 </span>
                                            </div>
                                            <div class="ms-auto p-2 bd-highlight text-like">
                                                3 like this
                                                <a class="up vote_buttoon"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                <p style="font-size: 12px;">
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star star-checked"></span>
                                                    <span class="fa fa-star-half-full star-checked "></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, suscipit unde! Assumenda necessitatibus deserunt illum odit fuga recusandae nulla optio, voluptatem maxime, hic deleniti ratione impedit eum dolore dolorum nam.</p>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
        {{-- end reviews --}}



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
  arrows:false,
  slidesToScroll: 2,
  responsive: [
    {
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


</body>

</html>
