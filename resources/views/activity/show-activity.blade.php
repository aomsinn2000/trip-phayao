<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รวมกิจกรรม</title>
    @include('layouts.head-LinkScript')
    <link href="{{ asset('assets/css/activity/activity.css') }}" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


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
        <div class="background-head-activity">
            <div class=" row justify-content-center  ">
                <div class="col-lg-9 col-md-9 col-11">
                    <div class="row py-4">
                        <div class="col-8">
                            <label class="name-activity">ปั่นจักรยานริมกว๊านยามเย็น</label><br>
                            <label class="address-activity"><i class="bi bi-geo-alt-fill"></i>พะเยา , ประเทศไทย</label>
                        </div>
                        <div class="col-4">
                            <label class="price-head-pagkage">ราคาแพ็คเกจ</label><br><br class="price-br">
                            <p class="price-pagkage"><b>1,000฿ / วัน</b></p>
                        </div>
                    </div>
                    <div class="row  justify-content-center font-size-activity">
                        <div class="col-lg-2 col-md-3 col-3 margin-head-activity">
                            <label style="padding-left:18px;">ระยะเวลา</label><br>
                            <label class="total-activity-head"> <i class="bi bi-clock-fill icon-head-activity"></i><b> 5 hours</b></label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-3 margin-head-activity">
                            <label style="padding-left:18px;">รวมสถานที่</label><br>
                            <label class="total-activity-head"> <i class="bi bi-bank icon-head-activity" icon-head-activity></i><b> 5 สถานที่</b></label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-3 margin-head-activity">
                            <label style="padding-left:18px;">รวมกิจกรรม</label><br>
                            <label class="total-activity-head"> <i class="bi bi-bicycle icon-head-activity"></i></i><b> 5 กิจกรรม</b></label>
                        </div>
                        <div class="col-lg-2 col-md-3 col-3 margin-head-activity">
                            <label style="padding-left:18px;">มื้ออาหาร</label><br>
                            <label class="total-activity-head"> <i class="bi bi-cup-hot-fill icon-head-activity"></i></i><b> 5 มื้อ</b></label>
                        </div>
                    </div>


                </div>
            </div>
        </div>



        {{-- ภาพ banner --}}
        <div class="container py-3 ">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container ">
                        <div id="page">
                            <div class="row">
                                <div class="column small-11 small-centered">
                                    <div class="slider slider-single">
                                        <div>
                                            <img class="image-large-deal" src="https://www.museumthailand.com/upload/evidence/1500956664_99367.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-deal" src="https://www.museumthailand.com/upload/evidence/1500956722_58417.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-deal" src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-deal" src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" alt="">
                                        </div>
                                        <div>
                                            <img class="image-large-deal" src="https://palanla.com/ckeditor/upload/files/id37/domestic_location/Phayao%20Lake/005.jpg" alt="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="slider slider-nav">


                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-deal" src="https://www.museumthailand.com/upload/evidence/1500956664_99367.jpg" alt="">
                                            </span>

                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-deal" src="https://www.museumthailand.com/upload/evidence/1500956722_58417.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-deal" src="https://cdn1.citylife.group/tat2/wp-content/uploads/2022/05/%E0%B8%81%E0%B8%A7%E0%B9%8A%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%B0%E0%B9%80%E0%B8%A2%E0%B8%B2-Gwan-Phayao-1.jpg" alt="">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-deal" src="https://woodychannel.com/wp-content/uploads/2014/09/gwanphayao-750x476.jpg" alt="Nature">
                                            </span>
                                        </div>
                                        <div class="px-1">
                                            <span>
                                                <img class="image-small-deal" src="https://palanla.com/ckeditor/upload/files/id37/domestic_location/Phayao%20Lake/005.jpg" alt="Nature">
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
        {{-- end ภาพ banner --}}

        {{-- overview --}}
        <div class="background-overview">
            <div class="container py-3 ">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-mb-10 col-12">
                        <div class="container ">

                            <h4><b>Overview</b></h4>
                            <p class="detail-overview">กว๊านพะเยา มีลักษณะเป็นบึงน้ำขนาดใหญ่รูปพระจันทร์เสี้ยว
                                เป็นบึงน้ำกว้างใหญ่สุดสายตา โอบล้อมด้วยทิวเขาสลับซับซ้อนอย่างสวยงาม
                                เมื่อหลายร้อยปี พื้นที่ในบริเวณกว๊านพะเยาเป็นชุมชนมีวัดวาอารามอยู่มากมาย
                                ต่อมาเมื่อกรมประมงสร้างประตูกั้นน้ำในกว๊านพะเยาเพื่อกักเก็บน้ำ จึงทำให้บริเวณกว๊าน
                                พะเยาที่แต่เดิมเป็นชุมชนโบราณ และวัดหลายแห่งต้องจมอยู่ในกว๊านพะเยา
                            </p>
                            <h4><b>Highlight</b></h4>
                            <p class="detail-highlight">
                            <ul>
                                <li>เป็นสถานที่ทำกิจกรรมของชาวบ้านเมืองกว๊าน </li>
                                <li>พักผ่อน</li>
                                <li>ออกกำลังกาย</li>
                                <li>ภายเรือ</li>
                                <li>ฯลฯ</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-3 ">
                <div class="row">
                    <div class="col-lg-11 col-mb-11 col-12">
                        <div class="container ">

                            <h4><b>ตารางทำกิจกรรม</b></h4>

                            <ul class="nav nav-tabs justify-content-end" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">One Day Trip</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Long Week</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent" style="background-color: rgba(0, 174, 239, 0.08);">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="container">
                                        <div class="row mb-4">
                                            <div class="col-md-12 ">
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="container background-timeline">
                                                            <div class="py-3">
                                                                <h5><b>09:30 - 20:00</b></h5>
                                                                <label><b>ปั่นจักรยาน</b></label><br>
                                                                <label>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellent</label>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="container background-timeline">
                                                            <div class="py-3">
                                                                <h5><b>09:30 - 20:00</b></h5>
                                                                <label><b>ปั่นจักรยาน</b></label><br>
                                                                <label>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellent</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="container background-timeline">
                                                            <div class="py-3">
                                                                <h5><b>09:30 - 20:00</b></h5>
                                                                <label><b>ปั่นจักรยาน</b></label><br>
                                                                <label>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellent</label>
                                                            </div>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="container background-timeline">
                                                            <div class="py-3">
                                                                <h5><b>09:30 - 20:00</b></h5>
                                                                <label><b>ปั่นจักรยาน</b></label><br>
                                                                <label>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellent</label>
                                                            </div>
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">..dsafasfdasf.</div>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end overview --}}


        {{-- รายละเอียดแพ็คเกจ --}}
        <div class="container py-5 ">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-mb-10 col-11">
                    <div class="container ">
                        <h4 class="text-center"><b>รายละเอียดแพ็คเกจ</b></h4>
                        <div class="row py-2">
                            <div class="col-lg-6">
                                <p><i class="bi bi-check2-all"></i> มัคคุเทศก์สองภาษาเฉพาะทาง</p>
                                <p><i class="bi bi-check2-all"></i> ขนส่งเอกชน </p>
                                <p><i class="bi bi-check2-all"></i> ค่าธรรมเนียมเรียกเข้า (เคเบิลและรถยนต์และ Moon Valley)</p>
                                <p><i class="bi bi-check2-all"></i> น้ำข้าวกล่อง แอปเปิ้ล กล้วย และช็อคโกแลต</p>
                            </div>
                            <div class="col-lg-6">
                                <p><i class="bi bi-x-lg"></i> บริการเพิ่มเติม(มีเก็บค่าใช้จ่ายเพิ่ม)</p>
                                <p><i class="bi bi-x-lg"></i> ประกันภัย</p>
                                <p><i class="bi bi-x-lg"></i> ดื่ม</p>
                                <p><i class="bi bi-x-lg"></i> ตั๋ว(เข้าชมสถานที่ต่างๆ) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end รายละเอียดแพ็คเกจ --}}







        {{-- Activity's Location แผนที่ --}}
        <div class="img-story text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-12 col-12">
                        <div class="container">
                            <div class="row py-3">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h4>Activity's Location</h4>
                                    <div class="px-lg-5 px-md-2">
                                        <h6 style="color:#FFDE17">Kontak Kami</h6>
                                        <p class="text-activity-location">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="px-lg-5 px-md-2">
                                        <h6 style="color:#FFDE17">Jam Kerja </h6>
                                        <p class="text-activity-location">Senin-Jumat 8.00-16:00
                                            Hari Libur TUTUP</p>
                                    </div>
                                    <div class="px-lg-5 px-md-2">
                                        <h6 style="color:#FFDE17">Kontak Kami</h6>
                                        <p class="text-activity-location">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="px-lg-5 px-md-2">
                                        <h6 style="color:#FFDE17">Kontak Kami</h6>
                                        <p class="text-activity-location">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                    <div class="px-lg-5 px-md-2">
                                        <h6 style="color:#FFDE17">Kontak Kami</h6>
                                        <p class="text-activity-location">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <label class="address-activity" style="float: right"><i class="bi bi-geo-alt-fill"></i>พะเยา , ประเทศไทย</label>
                                    <div id="map"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Activity's Location แผนที่ --}}


        <div class="background-activityAttraction py-5">
            <h4 class="text-center "><b>กิจกรรมยอดฮิต Trending Activities</b></h4>
            <div id="trendingActive" class="img-special-deal py-2">
                <div>
                    <a href="">
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
                    <a href="">
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
                <div>
                    <a href="">
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
                    <a href="">
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
                <div>
                    <a href="">
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
        </div>





    </div>



    <div class="padding-footer"></div>
    @include('layouts.footer')


    <script>
        let map;

        function initMap() {
            const mapOptions = {
                zoom: 14,
                center: {
                    lat: 19.1723143,
                    lng: 99.8755463
                },
            };
            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            const marker = new google.maps.Marker({
                // The below line is equivalent to writing:
                // position: new google.maps.LatLng(-34.397, 150.644)
                position: {
                    lat: 19.1723143,
                    lng: 99.8755463
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


    <script>
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            adaptiveHeight: true,
            infinite: true,
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
                responsive: [ {
                    breakpoint: 1024,
                    settings: {
                        arrows: true,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        centerPadding: '2px',
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        arrows: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerPadding: '2px',
                    }
                },{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        centerPadding: '250px',
                    }
                },{
                    breakpoint: 430,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerPadding: '250px',
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
    {{-- script slick กิจกรรมยอดฮิต --}}
    <script>
        $('#trendingActive').slick({
            centerMode: false,
            centerPadding: '350px',
            dots: true,
            arrows: true,
            slidesToShow: 6,
             slidesToScroll: 4,

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
                        centerMode: false,
                        slidesToShow: 6,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        centerMode: false,
                        slidesToShow: 6,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 1450,
                    settings: {
                        centerMode: false,
                        slidesToShow: 5,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 1360,
                    settings: {
                        centerMode: false,
                        slidesToShow: 5,
                        slidesToScroll: 3

                    }
                }, {
                    breakpoint: 1190,
                    settings: {
                        centerMode: false,
                        slidesToShow: 4,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 940,
                    settings: {
                        centerMode: false,
                        slidesToShow: 3,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '70px',
                        slidesToShow: 1
                    }
                },{
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

</body>

</html>
