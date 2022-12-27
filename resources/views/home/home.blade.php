<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


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



<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">


</head>
<body>

    <div style="font-family: 'Kanit', sans-serif;">
@include('layouts.navbar')
    <!-- image slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.wallpapersafari.com/73/66/uZ0eoc.jpg" class="img-fluid"  alt="...">

          </div>
          <div class="carousel-item">
            <img src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
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


        <!-- ดีลสุดพิเศษ -->


       <br>
       <h2 style="text-align:center;">ดีลสุดพิเศษ</h2>
       <p class="line-header"></p>
        <p style="color: #535151;" class="text-content-top-dessination">We provide various specialfeatures for all of you</p>

        <div id="specialDeal" class="img-special-deal">
          <div>
            <img class="specialDeal" src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100" alt="...">
          </div>
          <div>
            <img class="specialDeal" src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

        <!-- ดีลสุดพิเศษ -->

        <br>


        <!-- หมวดหมู่สถานที่ยอดฮิต -->
        <div class=" background-cate-place-hit">
          <div class="row">
            <h2 style="padding-bottom: 15px;">หมวดหมู่สถานที่ยอดฮิต</h2>
            <div class="col-4 col-lg-2 ">
              <a href="" class="text-cate-place-hit"> <img class="img-cate-place-hit" src="https://charatoon.com/photo/1646.png" alt="" >
                <p style="padding-top: 10px;">กาแฟ / คาเฟ่</p>
              </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://www.shutterstock.com/shutterstock/photos/575235529/display_1500/stock-vector-restaurant-or-cafe-exterior-building-vector-cartoon-illustration-575235529.jpg" alt="" >
                <p style="padding-top: 10px;">ร้านอาหาร</p>
              </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://media.istockphoto.com/id/1340642632/photo/sunflowers.jpg?b=1&s=170667a&w=0&k=20&c=9Ug32UnodYNOr9DGuLwVRk1WExt3D10xZjMe4ujgwp8=" alt="" >
              <p style="padding-top: 10px;"> จุดชมวิว </p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://thumbs.dreamstime.com/b/waterfall-cartoon-style-vector-isolated-illustration-waterfall-rocks-cascade-shimmers-downward-water-flowing-vector-246613367.jpg" alt="" >
              <p style="padding-top: 10px;">น้ำตก</p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://i.pinimg.com/736x/dc/84/3d/dc843dc1f50ed2a0874236e2116702ca.jpg" alt="" >
              <p style="padding-top: 10px;">วัด </p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://png.pngtree.com/element_our/20190601/ourlarge/pngtree-vector-free-buckle-cartoon-park-landscape-image_1324381.jpg" alt="">
              <p style="padding-top: 10px;">อุทยานแห่งชาติ </p>
            </a>

            </div>
          </div>
        </div>
        <!-- end หมวดหมู่สถานที่ยอดฮิต -->

        <br>

<!-- สถานที่ยอดฮิต -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-11">
              <div class="container place-top-destination">
          <h2>สถานที่ยอดฮิต Top Destination </h2>
          <p class="line-header"></p>
           <p style="color: #535151;" class="text-content-top-dessination">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up  your everyday objects, you elevate your daily rituals.</p>


           <div class="container">
            <div class="row row-cols-3">
              <div class="col">
                <a href=""><figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img class="img-top-destination" src="https://www.seub.or.th/seubweb/wp-content/uploads/2018/12/%E0%B8%81%E0%B8%B4%E0%B8%99%E0%B8%9B%E0%B8%A5%E0%B8%B2-%E0%B8%A2%E0%B8%B1%E0%B9%88%E0%B8%87%E0%B8%A2%E0%B8%B7%E0%B8%99-%E0%B9%80%E0%B8%A3%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%A5%E0%B9%88%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%A3%E0%B8%B4%E0%B9%88%E0%B8%A1%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <!-- <h2 class="text-header-place-hit">กว๊านพะเยา</h2>
            -->
                      <p class="text-header-place-hit">กว๊านพะเยา</p>
                      <p ><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </a>

            </div>
              <div class="col">  <figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img src="http://travel.mthai.com/app/uploads/2014/01/1452433_474903079293849_933924344_n.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <p class="text-header-place-hit">ภูลังกา</h1>
                      <p><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure></div>
              <div class="col">  <figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img src="https://www.emagtravel.com/wp-content/uploads/2013/09/phusang-800-2.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <p class="text-header-place-hit">น้ำตกภูซาง</p>
                      <p><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure></div>
              <div class="col">  <figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img class="img-top-destination" src="http://www.ท่องทั่วไทย.com/wp-content/uploads/2015/03/phunang-02.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <p class="text-header-place-hit">อุทยานแห่งชาติดอยภูนาง  </p>
                      <p><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure></div>
              <div class="col">  <figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img  src="https://www.trekkingthai.com/wp-content/uploads/2018/10/15439956_10209975146207255_6269812643284831473_n.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <p class="text-header-place-hit">ดอยหนอกดอยหลวง</p>
                      <p><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure></div>
              <div class="col">
                <figure class="card-with-hover">
                <!-- Photo by Iga Palacz on Unsplash -->
                <img class="img-top-destination"src="https://www.paiduaykan.com/travel/wp-content/uploads/2022/02/SON08569.jpg" alt="img24" width="100%" height="70%">
                <figcaption class="card-caption">
                  <div class="card-caption-content">
                    <br>
                    <br>
                    <br>
                    <div>
                      <p class="text-header-place-hit">วัดในเมืองพะเยา</p>
                      <p class="todsob"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                    </div>
                  </div>
                </figcaption>
              </figure></div>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>
  <!--end สถานที่ยอดฮิต -->





        <!-- กิจกรรมยอดฮิต Trending Activities -->
        <!-- end กิจกรรมยอดฮิต Trending Activities -->
<br>
<br><br>




          <!-- package tour -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-11">

          <div class="container">
            <h3 style="text-align: center;"><b> PACKAGE TOUR</b></h3>
            <p class="line-header"></p>
            <p class="text-content-packageTour" >We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
          <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
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
                        <div  class="text-activity-card-pakageTour">
                          <p>ปั่นจักรยาน</p>
                          <p >ปั่นจักรยาน</p>
                          <p>ปั่นจักรยาน</p>
                        </div>
                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" >
                          <div class="mt-auto p-2 bd-highlight">ราคาแพ็กเกจ
                            <p class="br-card-pakageTour"><br></p>
                            <span class="text-price-card-pakageTour">
                              1,000฿/วัน
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card  text-white">
                  <img src="https://mychiangmaitour.com/wp-content/uploads/2019/05/Kwan-Phayao14.jpg" class=" img-card-packageTour" alt="...">
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
                        <div  class="text-activity-card-pakageTour">
                          <p>ปั่นจักรยาน</p>
                          <p >ปั่นจักรยาน</p>
                          <p>ปั่นจักรยาน</p>
                        </div>
                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" >
                          <div class="mt-auto p-2 bd-highlight">ราคาแพ็กเกจ
                            <p class="br-card-pakageTour"><br></p>
                            <span class="text-price-card-pakageTour">
                              1,000฿/วัน
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card  text-white">
                  <img src="https://img.kapook.com/u/2018/sutasinee/01/d8.jpg" class=" img-card-packageTour" alt="...">
                  <div class="card-img-overlay">
                      <p class="best-seller">Best Seller</p>
                  </div>
                  <div class="card-body text-black">
                    <div class="d-flex bd-highlight mb-3">
                      <div class="p-2 bd-highlight">
                        <h4>ภูลังกา</h4>
                      </div>
                      <div class="ms-auto p-2 bd-highlight text-card-pakageTour">
                        <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                      </div>
                    </div>
                    <div class="container ">
                      <p class="text-address-card-pakageTour">ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                      <div class="container">
                        <div  class="text-activity-card-pakageTour">
                          <p>ปั่นจักรยาน</p>
                          <p >ปั่นจักรยาน</p>
                          <p>ปั่นจักรยาน</p>
                        </div>
                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" >
                          <div class="mt-auto p-2 bd-highlight">ราคาแพ็กเกจ
                            <p class="br-card-pakageTour"><br></p>
                            <span class="text-price-card-pakageTour">
                              1,000฿/วัน
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
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
               <p class="text-content-story">We’ve designed and curated pieces that are a cut above your average home goods.</p>
               <div class="row row-cols-1 row-cols-md-3 ">
                <div class="col">
                  <div class="card">
                    <img src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" class="img-card-story" alt="...">
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
                      </div></div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" class="img-card-story" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">ภูลังกา</h4>
                      <span id="textCardStory2" style="color: #868383;">   ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
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
                      </div></div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://img.kapook.com/u/2018/sutasinee/01/d8.jpg" class="img-card-story" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">ภูลังกา</h4>
                      <span id="textCardStory3" style="color: #868383;">   ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
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
                      </div></div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://img.kapook.com/u/2018/sutasinee/01/d8.jpg" class="img-card-story" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">ภูลังกา</h4>
                      <span id="textCardStory4" style="color: #868383;">   ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
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
                      </div></div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://img.kapook.com/u/2018/sutasinee/01/d8.jpg" class="img-card-story" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">ภูลังกา</h4>
                      <span id="textCardStory5" style="color: #868383;">   ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
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
                      </div></div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://img.kapook.com/u/2018/sutasinee/01/d8.jpg" class="img-card-story" alt="...">
                    <div class="card-body">
                      <h4 class="card-title">ภูลังกา</h4>
                      <span id="textCardStory6" style="color: #868383;">   ทะเหมอก หน้าฝน ของสถานที่ที่เรากำลังจะพาไปกันในวันนี้ บอกเลยว่ายืนหนึ่งสุดๆ คือถ้าพูดถึงทุกคนต้องร้องว้าวแน่นอน เพราะที่นี่เป็นพิกัด ที่เที่ยวหน้าฝน แบบอันดับต้นๆ เราไม่อยากให้ทุกคนพลาดความ
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
              </div>
              <div class="d-flex bd-highlight mb-3">
                <div class="ms-auto p-2 bd-highlight" style="padding-right:60px;" ><a href="#" style="color: black;"><u>บทความเพิ่มเติม</u></a>></div>
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
            <div class="row justify-content-center">
              <div class="col-10">
                <h3 style="text-align: center;"><b>ประสบการณ์นักท่องเที่ยว</b></h3>
                <p class="line-header"></p>
                <div class="container">
                  <div class="row row-cols-1 row-cols-md-3 ">
                    <div class="col">
                      <div class="card mb-1" >
                        <div class="card-body ">
                          <h5 class="card-title" style="text-align: center;" ><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
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
                    <div class="col">
                      <div class="card mb-1" >
                        <div class="card-body ">
                          <h5 class="card-title" style="text-align: center;" ><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
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
                    </div> <div class="col">
                      <div class="card mb-1" >
                        <div class="card-body ">
                          <h5 class="card-title" style="text-align: center;" ><span style="color: #FCB930;"><i class="bi bi-quote"></i></span> very good<span style="color: #FCB930;"><i class="bi bi-quote"></i></span></h5>
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


              </div>
            </div>
          </div>
           <!-- end ประสบการณ์นักท่องเที่ยว -->

<br><br>

           <!-- บริการเสริม -->
           <div class="other-service-background">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-10">
                  <h3 style="text-align: center;"><b> PACKAGE TOUR</b></h3>
                  <p class="line-header"></p>
                  <p class="text-content-packageTour" >We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-body size-other-service" >
                          <a href=""> <img src="https://www.pngall.com/wp-content/uploads/13/Taxi-Yellow-PNG-Photo.png" alt="" class="img-other-service">
                          <br><br>
                          <p class="text-other-service">บริการรถรับ-ส่ง สนามบิน</p><br>
                        </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-body size-other-service" >
                          <a href=""> <img src="https://www.pngall.com/wp-content/uploads/13/Taxi-Yellow-PNG-Photo.png" alt="" class="img-other-service">
                            <br><br>
                            <p class="text-other-service">บริการเช่ารถ รายวัน/ชั่วโมง</p><br>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="card size-other-service">
                        <div class="card-body">
                          <a href=""> <img src="https://freepngimg.com/save/12940-bicycle-png-8/2400x1410" alt="" class="img-other-service text-other-service">
                            <br><br>
                            <p class="text-other-service">บริการเช่าอื่นๆ</p><br>
                          </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 " >
                    <div class="card size-other-service">
                      <div class="card-body">
                        <a href=""> <img src="https://www.pngall.com/wp-content/uploads/11/Guide-PNG-Photos.png" alt="" class="img-other-service text-other-service">
                          <br><br>
                          <p class="text-other-service">บริการไกด์นำเที่ยว</p><br>
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



    </div>

       @include('layouts.footer')


           <!--script Story Tips Guide (Blog) -->
           <script>
            $(document).ready(function(){
                 $('#textCardStory1').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
                     $(this).text(newstr);
                   });
                   $('#textCardStory2').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
                     $(this).text(newstr);
                   });
                   $('#textCardStory3').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
                     $(this).text(newstr);
                   });
                   $('#textCardStory4').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
                     $(this).text(newstr);
                   });
                   $('#textCardStory5').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
                     $(this).text(newstr);
                   });
                   $('#textCardStory6').each(function (f) {
                     var newstr = $(this).text().substring(0,80);
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
        $('#specialDeal').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
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
      ]
    });
    </script>




</body>
</html>
