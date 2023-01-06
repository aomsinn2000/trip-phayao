<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สถานที่ยอดฮิต</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/place-hit/place-hit.css') }}" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
/* Set the size of the div element that contains the map */
#map {
  height: 400px; /* The height is 400 pixels */
  width: 100%; /* The width is the width of the web page */
}
    </style>

    <script>
      // Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: -25.344, lng: 131.031 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}

window.initMap = initMap;
    </script>

</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <img class="banner-placeHit" src="https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5yCh11ByQ6JOCN7q5YK2tqdwCGDp418UmCC3dnYRye3AbaaqHoz.jpg" alt="">

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-10">
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


        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="container ">
                        <br><br>
                        <h2 style="text-align: center">สถานที่ยอดฮิต Top Destination </h2>
                        <p class="line-header"></p>
                        <p style="color: #535151;" class="text-content-top-dessination">We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>

                        <div class="wrapper">
                            <div class="my-slider">
                                <div>
                                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-6 g-4">
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                        <div class="col col-lg-3 col-md-6">
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
                                                <button type="button" class="btn btn-info" style="color: #fff;">ดูแผนที่เดินทาง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- เอาการ์ดมาใส่ --}}
                                <div></div>
                                <div></div>
                                 {{--end เอาการ์ดมาใส่ --}}
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




    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
    defer
  ></script>

        <!-- script slider -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- end script slider -->

        <script>
            $(document).ready(function() {
                $('.my-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                    speed: 300,
                    infinite: true,
                    autoplaySpeed: 5000,
                    autoplay: true,
                    responsive: [{
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 1,
                            }
                        },
                        {
                            breakpoint: 400,
                            settings: {
                                slidesToShow: 1,
                            }
                        }, {
                            breakpoint: 390,
                            settings: {
                                slidesToShow: 1,
                            }
                        }
                    ]
                });
            });
        </script>




</body>

</html>
