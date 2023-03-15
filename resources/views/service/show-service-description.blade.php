<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายละเอียดบริการเสริม</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/article/articleDescription.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/service/service.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <link href="{{ asset('assets/css/article/article.css') }}" rel="stylesheet"> --}}

</head>

<body>


    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="nav-background-article">
            <p>
                <a href="{{ url('/') }}" class="text-nav-article"> หน้าหลัก /</a>
                <span><a href="{{ url('/services/') }}" class="text-nav-article">  บริการเสริม /</a></span>
                <span><a href="{{ url('/services/category') }}" class="text-nav-article">  บริการรับ-ส่งสนามบิน /</a></span>
                <span><a href="" class="text-nav-article" style="color: #27AAE1"> <b>วัดอนาลโยทิพยาราม (หลวงปู่ไพบูลย์)</b></a></span>
            </p>
        </div>

        <div class="container ">
            <div class="row justify-content-center">
                <div class=" col-lg-10 col-md-12">
                    <div class="container ">
                        <br><br>
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="font-family: 'Kanit', sans-serif;"><b>วัดอนาลโยทิพยาราม (หลวงปู่ไพบูลย์)</b></h2>
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

                        <label class="text-category">หมวดหมู่
                            <span style="color:#00AEEF;"><b>: จุดชมวิว </b></span>
                        </label><br>
                        <label class="text-views">views
                            <span style="color:blue;">256k</span>
                            <span>24 พฤษภาคม 2565</span>
                        </label>



                        <br><br><br>

                        <div id="page" class="py-4">
                            <div class="row">
                                <div class="column small-11 small-centered">
                                    <div class="slider slider-single">
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6ddc7360-cc40-11ec-865a-01accc7b7682_webp_original.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6debdcb0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6ec832f0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://www.lavieenroad.com/wp-content/uploads/2017/12/got6339.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://youimg1.tripcdn.com/target/ww0d1f000001gmc84F7DF_C_900_600.png_.webp?proc=source%2ftrip" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://youimg1.tripcdn.com/target/ww0h1f000001gpe575EB2_C_900_600.png_.webp?proc=source%2ftrip" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-touristAttraction" src="https://youimg1.tripcdn.com/target/ww081f000001go0id8860_C_760_506.png" alt="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="slider slider-nav">


                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/69cfebd0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="">
                                            </span>

                                        </div>
                                        <div class="px-1">
                                            <span>
                                                 <img class="image-small-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6ddc7360-cc40-11ec-865a-01accc7b7682_webp_original.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6debdcb0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                    <img class="image-small-touristAttraction" src="https://cms.dmpcdn.com/travel/2022/05/05/6ec832f0-cc40-11ec-96f4-69b6cdc032b9_webp_original.jpg" alt="Nature" >
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-touristAttraction" src="https://www.lavieenroad.com/wp-content/uploads/2017/12/got6339.jpg" alt="">
                                            </span>

                                        </div>
                                        <div class="px-1">
                                            <span>
                                                 <img class="image-small-touristAttraction" src="https://youimg1.tripcdn.com/target/ww0d1f000001gmc84F7DF_C_900_600.png_.webp?proc=source%2ftrip" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-touristAttraction" src="https://youimg1.tripcdn.com/target/ww0h1f000001gpe575EB2_C_900_600.png_.webp?proc=source%2ftrip" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-touristAttraction" src="https://youimg1.tripcdn.com/target/ww081f000001go0id8860_C_760_506.png" alt="Nature" >
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row py-4">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="text-description">กว๊านพะเยาเป็นแหล่งน้ำที่สำคัญ เพราะเป็นแหล่งน้ำที่หล่อเลี้ยงชีวิตชาวพะเยา การนำน้ำมาใช้ทั้งการอุปโภค การประมง และมีความสำคัญต่อชีวิตสัตว์น้ำที่อยู่ในกว๊านพะเยาอย่างมาก</p>
                                <img class="img-description" width="100%" src="https://www.expique.com/wp-content/uploads/2021/02/kwab-phayao-1024x683.jpg" alt="">
                                <p class="text-description">
                                    คำว่า กว๊าน เป็นภาษาพื้นเมืองซึ่งหมายถึง หนองน้ำ หรือบึงน้ำขนาดใหญ่ คำนี้มีใช้ในท้องถิ่นล้านนาเฉพาะที่จังหวัดพะเยาแห่งเดียวเท่านั้น กว๊านพะเยาเป็นบึงน้ำขนาดใหญ่ที่รวบรวมลำห้วยต่างๆ ไว้มากถึง ๑๘ สาย เป็นทะเลสาบน้ำจืดใหญ่เป็นอันดับ ๑ ในภาคเหนือ
                                    เป็นแหล่งประมงน้ำจืดที่สำคัญที่สุดของภาคเหนือตอนบน มีพันธุ์ปลาน้ำจืดกว่า ๔๘ ชนิด เป็นแหล่งเพาะพันธุ์ปลาชนิดต่างๆ เช่น ปลากราย ปลาสวาย ปลาเทโพ ปลาจีน ปลาไน และปลานิล
                                </p>
                                <img class="img-description" src="https://www.expique.com/wp-content/uploads/2021/02/kwab-phayao-1024x683.jpg" alt="">
                                <img class="img-description" src="https://www.expique.com/wp-content/uploads/2021/02/kwab-phayao-1024x683.jpg" alt="">
                                <p class="text-description">
                                    บริเวณรอบๆกว๊านมีความร่มรื่น ผู้คนจากทั้งในจังหวัดและต่างจังหวัดต่างพากันมาพักผ่อนหย่อนใจ เดินเล่นกินลมชมวิว ปั่นจักรยาน วิ่งออกกำลังกาย ชมบรรยากาศยามพระอาทิตย์อัสดงในยามเย็น สีสันของท้องฟ้าที่สวยงาม
                                    ทิวเขาเรียงรายสลับซับซ้อนและผืนน้ำอันเงียบสงบที่สะท้อนเงาของทิวเขาและพระอาทิตย์ตกดินช่างงดงามดังภาพวาด เป็นภาพบรรยากาศอันแสนประทับใจ
                                </p>





                                {{-- ที่ตั้ง --}}
                                <div class="text-address">
                                    <br><br>
                                    <label><b>ที่ตั้ง : </b> ตำบลผาช้างน้อย อำเภอเชียงคำ จังหวัดพะเยา</label><br>
                                    <p><b>ช่วงเวลาท่องเที่ยว : </b> ฤดูหนาว</p>
                                    <p><b>แหล่งที่มา : </b> จังหวัดพะเยา</p>
                                </div>
                                {{-- end ที่ตั้ง --}}






                                <br><br><br>
                                <hr>
                                <div class="mb-2">
                                    <span class="text-tags"><b>Tags : </b></span>
                                    <span>
                                        <a href="" type="button" class="btn btn-outline-info">ธรรมชาติ</a>
                                        <a type="button" class="btn btn-outline-info">ภูเขา</a>
                                        <a type="button" class="btn btn-outline-info">ดอย</a>
                                        <a type="button" class="btn btn-outline-info">กางเต้นท์</a>
                                        <a type="button" class="btn btn-outline-info active">ชมวิว</a>
                                        <a type="button" class="btn btn-outline-info">พะเยา</a>
                                        <a type="button" class="btn btn-outline-info">ทะเลหมอก</a>
                                        <a type="button" class="btn btn-outline-info">กิจกรรมกลางแจ้ง</a>
                                        <a type="button" class="btn btn-outline-info">เดินป่า</a>
                                    </span>
                                </div>


                            </div>
                        </div>






                        <div class="row" >

                        </div>




                    </div>
                </div>
            </div>
        </div>

        <br><br>






            <div class="row justify-content-center background-pakageTour">
                <div class="col-xl-11 col-lg-12 col-md-12">
                    <div class="container ">
                        <div class="row" >
                            <h3 style="font-family: 'Kanit', sans-serif;" class="py-4"><b>แพ็คเกจทัวร์ที่เกี่ยวข้อง</b></h3>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-12 mb-4" >
                                <a href="" style=" text-decoration: none;">
                                    <div class="card  text-white" style="font-size: 10px;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="best-seller">Best Seller</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <h5 style="font-family: 'Kanit', sans-serif;">กว๊านพะเยา</h5>
                                                </div>
                                                <div class="ms-auto  bd-highlight text-card-pakageTour">
                                                    <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="text-address-card-pakageTour"><b>ที่ตั้ง : </b> ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                <div class="container">
                                                    <div class="text-activity-card-pakageTour">
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex mb-3 align-items-end flex-column bd-highlight">
                                                    <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                        <p class="br-card-pakageTour"><br></p>
                                                        <span class="text-price-card-pakageTour">
                                                            1,000฿/วัน
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-12 mb-4" >
                                <a href="" style=" text-decoration: none;">
                                    <div class="card  text-white" style="font-size: 10px;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="best-seller">Best Seller</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <h5 style="font-family: 'Kanit', sans-serif;">กว๊านพะเยา</h5>
                                                </div>
                                                <div class="ms-auto  bd-highlight text-card-pakageTour">
                                                    <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="text-address-card-pakageTour"><b>ที่ตั้ง : </b> ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                <div class="container">
                                                    <div class="text-activity-card-pakageTour">
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex mb-3 align-items-end flex-column bd-highlight">
                                                    <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                        <p class="br-card-pakageTour"><br></p>
                                                        <span class="text-price-card-pakageTour">
                                                            1,000฿/วัน
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-12 mb-4" >
                                <a href="" style=" text-decoration: none;">
                                    <div class="card  text-white" style="font-size: 10px;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="best-seller">Best Seller</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <h5 style="font-family: 'Kanit', sans-serif;">กว๊านพะเยา</h5>
                                                </div>
                                                <div class="ms-auto  bd-highlight text-card-pakageTour">
                                                    <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="text-address-card-pakageTour"><b>ที่ตั้ง : </b> ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                <div class="container">
                                                    <div class="text-activity-card-pakageTour">
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex mb-3 align-items-end flex-column bd-highlight">
                                                    <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                        <p class="br-card-pakageTour"><br></p>
                                                        <span class="text-price-card-pakageTour">
                                                            1,000฿/วัน
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-12 mb-4 responsive-ipad" >
                                <a href="" style=" text-decoration: none;">
                                    <div class="card  text-white" style="font-size: 10px;">
                                        <img src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" class="img-card-packageTour" alt="...">
                                        <div class="card-img-overlay">
                                            <p class="best-seller">Best Seller</p>
                                        </div>
                                        <div class="card-body text-black">
                                            <div class="d-flex bd-highlight">
                                                <div class=" bd-highlight">
                                                    <h5 style="font-family: 'Kanit', sans-serif;">กว๊านพะเยา</h5>
                                                </div>
                                                <div class="ms-auto  bd-highlight text-card-pakageTour">
                                                    <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="text-address-card-pakageTour"><b>ที่ตั้ง : </b> ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
                                                <div class="container">
                                                    <div class="text-activity-card-pakageTour">
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                        <p>ปั่นจักรยาน</p>
                                                    </div>

                                                </div>
                                                <div class="d-flex mb-3 align-items-end flex-column bd-highlight">
                                                    <div class="mt-auto  bd-highlight text-price-pakageTour">ราคาแพ็กเกจ
                                                        <p class="br-card-pakageTour"><br></p>
                                                        <span class="text-price-card-pakageTour">
                                                            1,000฿/วัน
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>






    </div>




    <div class="padding-footer"></div>
    @include('layouts.footer')

    <script>
        $(document).ready(function() {
            var maxLength = 70;
            $(".readMore").each(function() {
                var str = $(this).text();
                if ($.trim(str).length > maxLength) {
                    var nstr = str.substring(0, maxLength);
                    var rmstr = str.substring(maxLength, $.trim(str).length);
                    $(this).empty().html(nstr);
                    $(this).append(' <a href = "{{ url('/articles/description') }}"> read more... </a>');
                }
            });
        });
    </script>



    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->


    <script>
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            adaptiveHeight: true,
            infinite: false,
            useTransform: true,
            speed: 400,
            cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
        });

        $('.slider-nav')
            .on('init', function(event, slick) {
                $('.slider-nav .slick-slide.slick-current').addClass('is-active');
            })
            .slick({
                arrows: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                dots: false,
                focusOnSelect: false,
                infinite: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        arrows: true,
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        centerPadding: '2px',
                    }
                }, {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        centerPadding: '250px',
                    }
                }, {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }]
            });

        $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .slick-slide.is-active').removeClass('is-active');
            $(currrentNavSlideElem).addClass('is-active');
        });

        $('.slider-nav').on('click', '.slick-slide', function(event) {
            event.preventDefault();
            var goToSingleSlide = $(this).data('slick-index');

            $('.slider-single').slick('slickGoTo', goToSingleSlide);
        });
    </script>


</body>

</html>
