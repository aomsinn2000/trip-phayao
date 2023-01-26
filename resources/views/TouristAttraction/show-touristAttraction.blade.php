<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ยอดฮิต</title>


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
        <img class="banner-placeHit" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5yCh11ByQ6JOCN7q5YK2tqdwCGDp418UmCC3dnYRye3AbaaqHoz.jpg" alt="">

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <br><br><br>


                        <div class="row">
                            <div class="col-lg-8 col-xs-12">
                                <p class="text-head1-placeHit"><b>เกี่ยวกับ</b></p>
                                <p class="text-head2-placeHit">The Best travel Agency for Hikers</p>
                                <p class="text-content-placeHit">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione soluta, veniam maiores possimus eligendi velit. Numquam sint facilis blanditiis voluptatem ex aspernatur repudiandae, accusamus, culpa sapiente dolor quidem at impedit.
                                    <br><br><br>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque autem, in distinctio ab harum ad et modi ipsum, itaque porro fuga accusantium aut quos, reiciendis eligendi eius libero corporis vitae.
                                </p>
                                <br><br><br>
                                <button type="button" class="btn btn-warning" style="color: #fff;">Read More <i class="bi bi-arrow-right"></i></button>
                            </div>
                            <div class="col-lg-4 col-xs-12">
                                <br>
                                <video class="video-placeHit" controls>
                                    <source src="{{ asset('assets/image/video/video1.mp4') }}" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
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
                        <p style="color: #535151;" class="text-head-content-placeHit">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>

                        <div class="wrapper">
                            <div class="row row-cols-lg-8">
                                <h4>หมวดหมู่ :
                                    <button type="button" class="btn btn-outline-info btn-category">ร้านอาหาร</button>
                                    <button type="button" class="btn btn-outline-info btn-category">โรงแรม</button>
                                    <button type="button" class="btn btn-outline-info btn-category">คาเฟ่ / กาแฟ</button>
                                </h4>
                            </div>


                            <div class="row list-wrapper">

                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>
                                <div class="list-item col-lg-3 col-md-6 mb-lg-3">
                                    <div class="card  text-white" style="border: none;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-placeHit" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="featured-placeHit">featured</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <p class="text-card-add-placeHit"> <i class="bi bi-geo-alt"></i>พะเยา,ประเทศไทย</p>
                                            <h4>กว๊านพะเยา</h4>
                                            <p class="text-card-content-placeHit">ไฮไลท์หลักของกว๊านพะเยายังอยู่ที่การเวียนเทียนทางน้ำ ในวันสำคัญทางพุทธศาสนาต่างๆ</p>
                                            <p>
                                                <i class="bi bi-star-fill"></i>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span> <i class="bi bi-star-fill"></i></span>
                                                <span class="text-review-placeHit">10+ รีวิว</span>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="padding-card-placeHit">
                                        <a href="{{ url('showTouristAttractionDescription') }}" type="button" class="btn btn-info text-white btn-map">ดูแผนที่เดินทาง</a>
                                    </div>
                                </div>



                            </div>

                        <div class="row justify-content-center">
                            <div id="pagination"class="padding-pagination1"></div>
                        </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>



    </div>

    <h2 style="text-align: center">Maps Location </h2>
    <p class="line-header"></p>
    <br>

    <div id="map"></div>






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



</body>

</html>
