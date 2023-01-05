<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ยอดฮิต</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/place-hit/description-place-hit.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="nav-background-placeHit">
            <p>
                <a href="" class="text-nav-placeHit"> หน้าหลัก /</a>
                <span><a href="" class="text-nav-placeHit"> ดีลสุดพิเศษ /</a></span>
                <span><a href="" class="text-nav-placeHit"  style="color: #27AAE1"> <b> ดีลสุดพิเศษทุกสายการบิน ทุกโรงแรม</b></a></span>
            </p>
        </div>

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="container ">
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><b>วนอุทยานภูลังกา</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <p class="float-end share-news">แชร์ข่าว
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
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
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
                            {{--end เนื้อหา --}}



                            {{-- ที่ตั้ง --}}
                            <div class="text-address">
                                <hr>
                                <p>ที่ตั้ง <b>ตำบลผาช้างน้อย อำเภอเชียงคำ จังหวัดพะเยา</b></p>
                                <p>การเดินทาง : จากตัวเมืองพะเยาใช้ทางหลวงหมายเลข 1092 ถนนสายพะเยา-ปง ระยะทาง 104 กม. เมื่อ ถึงอำเภอเชียงคำเดินทางต่อไปอีกระยะทางประมาณ 3 กิโลเมตร ตามทางหลวงหมายเลข 1148 แล้วเลี้ยวซ้ายไปทางทิศเหนืออีก 12 กิโลเมตร จะถึงวนอุทยานฯ</p>
                                <p>ช่วงเวลาท่องเที่ยว : <b>ฤดูหนาว</b></p>
                            </div>

                             {{--end ที่ตั้ง --}}
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

                                 {{--end tags --}}
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
                    <div class="col-10">
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
                                <div class="col-lg-1 text-head-point">
                                    <p>ดีเยี่ยมที่สุด</p>
                                    <p>ดีมาก</p>
                                    <p>พอใช้</p>
                                    <p>ควรปรับปรุง</p>
                                    <p>พอใช้</p>
                                </div>
                                <div class="col-lg-7 py-1">
                                    <br>
                                    <div class="progress" style="height: 10px; ">
                                        <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><br>
                                    <div class="progress" style="height: 10px; ">
                                        <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><br>
                                    <div class="progress" style="height: 10px; ">
                                        <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><br>
                                    <div class="progress" style="height: 10px; ">
                                        <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><br>
                                    <div class="progress" style="height: 10px; ">
                                        <div class="progress-bar" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div><br>








                                </div>

                              </div>







                        </div>
                    </div>
                </div>
            </div>
         </div>
      {{--end reviews --}}



    </div>




    {{-- <div class="padding-footer"></div>
    @include('layouts.footer') --}}





        <!-- script slider -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- end script slider -->





</body>

</html>
