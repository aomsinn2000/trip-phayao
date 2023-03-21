<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บริการ</title>


    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/service/service.css') }}" rel="stylesheet">

</head>

<body >


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <img class="banner-service" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5yCh11ByQ6JOCN7q5YK2tqdwCGDp418UmCC3dnYRye3AbaaqHoz.jpg" alt="">


        <div class="background-service">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="container py-5">
                            <h3 style="text-align: center;"><b>บริการเสริม</b></h3>
                            <p class="line-header"></p>
                            <p class="text-content-packageTour">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
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
        </div>






    </div>
    <div class="row" style="font-family: 'Kanit', sans-serif;">
        <div class="col-lg-5">
            <img class="img-col-service" src="https://www.museumthailand.com/upload/evidence/1500956664_99367.jpg" alt="">
        </div>
        <div class="col-lg-7">
            <div class="container py-5" >
                <h3 style="color: #00AEEF;">ติดตามข่าวสารเกี่ยวกับ Trip Phayao</h3><br>
                <p class="text-detail">ไม่พลาดข่าวสารเกี่ยวกับการท่องเที่ยว และกิจกรรมดีๆ ติดตามเราได้เลย</p>
                <div class="row text-center  padding-social  justify-content-lg-left  margin-left-service ">
                    <div style="background-color: #5583FE" class="box-service text-center text-white py-3">
                        <i class="bi bi-telephone icon-service"></i>
                        <div class="test">
                            <hr class="dashed-2"/>
                        </div>

                        <p>Tel</p>
                        <p>02-569-862</p>
                    </div>
                    <div style="background-color: #00AEEF" class="box-service text-center text-white py-3">
                        <i class="bi bi-chat-square-dots icon-service"></i>
                        <div class="test">
                            <hr class="dashed-2"/>
                        </div>

                        <p>Social Media</p>
                        <div>
                            <i class="bi bi-facebook icon-service2 px-2"></i>
                            <i class="bi bi-line icon-service2"></i>
                        </div>
                    </div>
                    <div style="background-color: #262262" class="box-service text-center text-white py-3">
                        <i class="bi bi-envelope icon-service"></i>
                        <div class="test">
                            <hr class="dashed-2"/>
                        </div>

                        <p>Email</p>
                        <p>TripPayao@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
    </div>






    <div class="padding-footer"></div>
    @include('layouts.footer')











</body>

</html>
