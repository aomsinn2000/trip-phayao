<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บทความ</title>
    @include('layouts.head-LinkScript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/article/article.css') }}" rel="stylesheet">

    {{-- pagination --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/simplePagination.css" integrity="sha512-emkhkASXU1wKqnSDVZiYpSKjYEPP8RRG2lgIxDFVI4f/twjijBnDItdaRh7j+VRKFs4YzrAcV17JeFqX+3NVig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--end  pagination --}}
    {{-- เกี่ยวกับฟิคค่าตัวหนังสือ read more --}}
    {{-- <style>
        .readMore .moretext {
            display: none;
        }
    </style> --}}
    {{-- end เกี่ยวกับฟิคค่าตัวหนังสือ read more --}}
</head>

<body>



    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="banner-article">
            <img class="img-banner" src="https://s.isanook.com/tr/0/ui/282/1412521/dscf9836_1539759191.jpg" alt="">
            <div class="centered text-center">
                <b class="text-head-banner">Where will you go next?</b><br><br>
                <p class="text-center-banner">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi vero, in nemo obcaecati tempore iste corporis dolorem illo eaque quisquam facilis architecto culpa nam eius quae consequuntur harum, quis labore!</p>
                <p class="text-bottom-banner"> Let's Go......</p>
            </div>
        </div>


        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class=" ">
                        <br><br>
                        <h2 style="text-align: center;">บทความ</h2>
                        <div class=" ">
                            <div class="list-wrapper list-wrapper3 row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                                <div class="list-item">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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

                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/dc3e97a0-7dcd-11ec-b364-bbe4a59e546c_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/eba33ca0-7de1-11ec-b7fd-27235976b4bb_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/ec550070-7de1-11ec-b7fd-27235976b4bb_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/26/ce0ff3a0-7e53-11ec-809f-1f424036454f_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/26/62f80710-7e53-11ec-809f-1f424036454f_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/eaced5a0-7de1-11ec-b7fd-27235976b4bb_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/26/6220e0f0-7e53-11ec-a887-811810290a51_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/26/62265f30-7e53-11ec-809f-1f424036454f_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">กว๊านพะเยา อยู่ในเขตอำเภอเมืองพะเยา จังหวัดพะเยา เป็นทะเลสาบน้ำจืดใหญ่ที่สุดในภาคเหนือ คำว่า "กว๊าน" ตามภาษาพื้นเมืองหมายถึง "บึง" เกิด
                                                </span>

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
                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/e981bc30-7de1-11ec-bb7c-f9243d66c0d7_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">  อนุสาวรีย์พ่อขุนงำเมือง เป็นสถานที่ศักดิ์สิทธิ์ที่นักท่องเที่ยว และชาวพะเยานิยมมากราบไหว้เป็นอย่างมาก พระองค์เป็นกษัตริย์ลำดับที่ 9 แห่งเมืองภูกามยาว (พะเยาในปัจจุบัน) ซึ่งในสมัยที่พระองค์ทรงครองราชอยู่นั้น อาณาจักรพะเยามีความเจริญรุ่งเรืองเป็นอย่างมาก และยังคงเป็นที่เคารพนับถือมาจนถึงปัจจุบันค่ะ
                                                </span>
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

                                <div class="list-item ">
                                    <div class="col">
                                        <div class="card card-shadow">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img src="https://cms.dmpcdn.com/travel/2022/01/25/ec0ab100-7de1-11ec-b7fd-27235976b4bb_webp_original.jpg" class="img-card-story" alt="...">
                                            </a>
                                            <div class="card-body">
                                                <h4 class="card-title">กว๊านพะเยา</h4>
                                                <span class="readMore" style="color: #868383;">  อนุสาวรีย์พ่อขุนงำเมือง เป็นสถานที่ศักดิ์สิทธิ์ที่นักท่องเที่ยว และชาวพะเยานิยมมากราบไหว้เป็นอย่างมาก พระองค์เป็นกษัตริย์ลำดับที่ 9 แห่งเมืองภูกามยาว (พะเยาในปัจจุบัน) ซึ่งในสมัยที่พระองค์ทรงครองราชอยู่นั้น อาณาจักรพะเยามีความเจริญรุ่งเรืองเป็นอย่างมาก และยังคงเป็นที่เคารพนับถือมาจนถึงปัจจุบันค่ะ
                                                </span>

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

                            </div>

                        </div>


                        <br>



                        <div   class="padding-pagination pagination3 pagination "></div>












                    </div>
                </div>
            </div>
        </div>

        <br><br>




        <div class="background-blog">
            <h3 style="text-align: center; padding-top:30px;"><b>My latest blog</b> </h3>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-8 list-wrapper1">
                                <div class="list-item1">
                                    <div class="card mb-3 card-padding" style="background-color:#F5F5F5; max-width: 100%; border:none;">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <a href="{{ url('showArticleDescription') }}">
                                                    <img class=" img-blog" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-7 px-3 padding-blog">
                                                <h6>
                                                    <a href="{{ url('showArticleDescription') }}" class="text-title-blog "><b>13 things i’d Tell Any New Travler </b></a>
                                                </h6>
                                                <p class="text-postBy-blog">
                                                    <span style="color: #00AEEF;text-decoration:none;">Post</span>
                                                    <span>By</span>
                                                    <a href="{{ url('showArticleDescription') }}" style="text-decoration: none; color:black;">Adam Smith</a>
                                                </p>
                                                <p class="text-date-post">10 Nov, 2020
                                                    <span>------</span>
                                                    <span><a href="{{ url('showArticleDescription') }}" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                                </p>
                                                <p class="text-content-blog readMoreBlog">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="{{ url('showArticleDescription') }}" class="text-readMore-blog">Read More...</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item1">
                                    <div class="card mb-3 card-padding" style="background-color:#F5F5F5; max-width: 100%; border:none;">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <a href="{{ url('showArticleDescription') }}">
                                                    <img class=" img-blog" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-7 px-3 padding-blog">
                                                <h6>
                                                    <a href="{{ url('showArticleDescription') }}" class="text-title-blog "><b>13 things i’d Tell Any New Travler </b></a>
                                                </h6>
                                                <p class="text-postBy-blog">
                                                    <span style="color: #00AEEF;text-decoration:none;">Post</span>
                                                    <span>By</span>
                                                    <a href="{{ url('showArticleDescription') }}" style="text-decoration: none; color:black;">Adam Smith</a>
                                                </p>
                                                <p class="text-date-post">10 Nov, 2020
                                                    <span>------</span>
                                                    <span><a href="{{ url('showArticleDescription') }}" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                                </p>
                                                <p class="text-content-blog readMoreBlog">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="{{ url('showArticleDescription') }}" class="text-readMore-blog">Read More...</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item1">
                                    <div class="card mb-3 card-padding" style="background-color:#F5F5F5; max-width: 100%; border:none;">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <a href="{{ url('showArticleDescription') }}">
                                                    <img class=" img-blog" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-7 px-3 padding-blog">
                                                <h6>
                                                    <a href="{{ url('showArticleDescription') }}" class="text-title-blog "><b>13 things i’d Tell Any New Travler </b></a>
                                                </h6>
                                                <p class="text-postBy-blog">
                                                    <span style="color: #00AEEF;text-decoration:none;">Post</span>
                                                    <span>By</span>
                                                    <a href="{{ url('showArticleDescription') }}" style="text-decoration: none; color:black;">Adam Smith</a>
                                                </p>
                                                <p class="text-date-post">10 Nov, 2020
                                                    <span>------</span>
                                                    <span><a href="{{ url('showArticleDescription') }}" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                                </p>
                                                <p class="text-content-blog readMoreBlog">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="{{ url('showArticleDescription') }}" class="text-readMore-blog">Read More...</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item1">
                                    <div class="card mb-3 card-padding" style="background-color:#F5F5F5; max-width: 100%; border:none;">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <a href="{{ url('showArticleDescription') }}">
                                                    <img class=" img-blog" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-7 px-3 padding-blog">
                                                <h6>
                                                    <a href="{{ url('showArticleDescription') }}" class="text-title-blog "><b>13 things i’d Tell Any New Travler </b></a>
                                                </h6>
                                                <p class="text-postBy-blog">
                                                    <span style="color: #00AEEF;text-decoration:none;">Post</span>
                                                    <span>By</span>
                                                    <a href="{{ url('showArticleDescription') }}" style="text-decoration: none; color:black;">Adam Smith</a>
                                                </p>
                                                <p class="text-date-post">10 Nov, 2020
                                                    <span>------</span>
                                                    <span><a href="{{ url('showArticleDescription') }}" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                                </p>
                                                <p class="text-content-blog readMoreBlog">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="{{ url('showArticleDescription') }}" class="text-readMore-blog">Read More...</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item1">
                                    <div class="card mb-3 card-padding" style="background-color:#F5F5F5; max-width: 100%; border:none;">
                                        <div class="row g-0">
                                            <div class="col-md-5">
                                                <a href="{{ url('showArticleDescription') }}">
                                                    <img class=" img-blog" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                                </a>
                                            </div>
                                            <div class="col-md-7 px-3 padding-blog">
                                                <h6>
                                                    <a href="{{ url('showArticleDescription') }}" class="text-title-blog "><b>13 things i’d Tell Any New Travler </b></a>
                                                </h6>
                                                <p class="text-postBy-blog">
                                                    <span style="color: #00AEEF;text-decoration:none;">Post</span>
                                                    <span>By</span>
                                                    <a href="{{ url('showArticleDescription') }}" style="text-decoration: none; color:black;">Adam Smith</a>
                                                </p>
                                                <p class="text-date-post">10 Nov, 2020
                                                    <span>------</span>
                                                    <span><a href="{{ url('showArticleDescription') }}" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                                </p>
                                                <p class="text-content-blog readMoreBlog">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <a href="{{ url('showArticleDescription') }}" class="text-readMore-blog">Read More...</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div id="pagination1"class="padding-pagination1" ></div>
                                </div>








                            </div>

                            <div class="col-lg-4">
                                <div class="background-popular-post px-3">
                                    <br>
                                    <h3><b>Post Popular</b></h3><br>
                                    <div class="row">
                                        <div class="col-4 col-lg-4 col-md-3">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img class="img-popular-post" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-9">
                                            <h6><a href="{{ url('showArticleDescription') }}" class="text-title-popular"><b>กว๊านพะเยา ทะเลสาบน้ำจืดอันดับ 1 ของประเทศไทย</b></a></h6>
                                            <div class="text-postBy-popular-post">
                                                <span style="color: #00AEEF;text-decoration:none;">Post</span> <a href=""></a>
                                                <span>By</span>
                                                <a href="" style="text-decoration: none; color:black;">Adam Smith</a><br>
                                                10 Nov, 2020
                                                <span>------</span>
                                                <span><a href="#" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4 col-lg-4 col-md-3">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img class="img-popular-post" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-9">
                                            <h6><a href="{{ url('showArticleDescription') }}" class="text-title-popular"><b>กว๊านพะเยา ทะเลสาบน้ำจืดอันดับ 1 ของประเทศไทย</b></a></h6>
                                            <div class="text-postBy-popular-post">
                                                <span style="color: #00AEEF;text-decoration:none;">Post</span> <a href=""></a>
                                                <span>By</span>
                                                <a href="" style="text-decoration: none; color:black;">Adam Smith</a><br>
                                                10 Nov, 2020
                                                <span>------</span>
                                                <span><a href="#" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4 col-lg-4 col-md-3">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img class="img-popular-post" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-9">
                                            <h6><a href="{{ url('showArticleDescription') }}" class="text-title-popular"><b>กว๊านพะเยา ทะเลสาบน้ำจืดอันดับ 1 ของประเทศไทย</b></a></h6>
                                            <div class="text-postBy-popular-post">
                                                <span style="color: #00AEEF;text-decoration:none;">Post</span> <a href=""></a>
                                                <span>By</span>
                                                <a href="" style="text-decoration: none; color:black;">Adam Smith</a><br>
                                                10 Nov, 2020
                                                <span>------</span>
                                                <span><a href="#" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4 col-lg-4 col-md-3">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img class="img-popular-post" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-9">
                                            <h6><a href="{{ url('showArticleDescription') }}" class="text-title-popular"><b>กว๊านพะเยา ทะเลสาบน้ำจืดอันดับ 1 ของประเทศไทย</b></a></h6>
                                            <div class="text-postBy-popular-post">
                                                <span style="color: #00AEEF;text-decoration:none;">Post</span> <a href=""></a>
                                                <span>By</span>
                                                <a href="" style="text-decoration: none; color:black;">Adam Smith</a><br>
                                                10 Nov, 2020
                                                <span>------</span>
                                                <span><a href="#" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-4 col-lg-4 col-md-3">
                                            <a href="{{ url('showArticleDescription') }}">
                                                <img class="img-popular-post" src="https://pix10.agoda.net/geo/city/127871/1_127871_02.jpg?ca=6&ce=1&s=1920x822" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-8 col-lg-8 col-md-9">
                                            <h6><a href="{{ url('showArticleDescription') }}" class="text-title-popular"><b>กว๊านพะเยา ทะเลสาบน้ำจืดอันดับ 1 ของประเทศไทย</b></a></h6>
                                            <div class="text-postBy-popular-post">
                                                <span style="color: #00AEEF;text-decoration:none;">Post</span> <a href=""></a>
                                                <span>By</span>
                                                <a href="" style="text-decoration: none; color:black;">Adam Smith</a><br>
                                                10 Nov, 2020
                                                <span>------</span>
                                                <span><a href="#" style="color: #00AEEF;text-decoration:none;">50 Comments</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <br>

                                <div class="background-followMe px-3"><br>
                                    <h3 class="px-1 "><b>Follow Me</b></h3>
                                    <div class="row">
                                        <div class="col-3"> <a href="">
                                                <div class="followMe-circle"><i class="bi bi-facebook icon-followMe"></i></div>
                                            </a> </div>
                                        <div class="col-3"> <a href="">
                                                <div class="followMe-circle"><i class="bi bi-twitter icon-followMe"></i></div>
                                            </a></div>
                                        <div class="col-3"> <a href="">
                                                <div class="followMe-circle"><i class="bi bi-instagram icon-followMe"></i></div>
                                            </a></div>
                                        <div class="col-3"> <a href="">
                                                <div class="followMe-circle"><i class="bi bi-youtube icon-followMe"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>







                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>













    <div class="padding-footer"></div>
    @include('layouts.footer')









    {{-- script กำหนดค่าตัวหนังสือให้โชว์ไม่เกินกี่ตัว ****หมายเหตุ ใช้ Class แทนเพราะใช้ id ไม่ได้ --}}
    <script>
        $(document).ready(function() {
            var maxLength = 70;
            $(".readMore").each(function() {
                var str = $(this).text();
                if ($.trim(str).length > maxLength) {
                    var nstr = str.substring(0, maxLength);
                    var rmstr = str.substring(maxLength, $.trim(str).length);
                    $(this).empty().html(nstr);
                    $(this).append(' <a href = "{{ url('showArticleDescription') }}"> read more... </a>');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var maxLength = 130;
            $(".readMoreBlog").each(function() {
                var str = $(this).text();
                if ($.trim(str).length > maxLength) {
                    var nstr = str.substring(0, maxLength);
                    var rmstr = str.substring(maxLength, $.trim(str).length);
                    $(this).empty().html(nstr);
                    $(this).append('<span>....</span>');
                }
            });
        });
    </script>
    {{-- end script กำหนดค่าตัวหนังสือให้โชว์ไม่เกินกี่ตัว ****หมายเหตุ ใช้ Class แทนเพราะใช้ id ไม่ได้  --}}









    <!-- script slider -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end script slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.4/jquery.simplePagination.min.js" integrity="sha512-J4OD+6Nca5l8HwpKlxiZZ5iF79e9sgRGSf0GxLsL1W55HHdg48AEiKCXqvQCNtA1NOMOVrw15DXnVuPpBm2mPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
     var items = $(".list-wrapper .list-item");
     var numItems = items.length;
     var perPage = 9;

     items.slice(perPage).hide();

     $('.pagination').pagination({
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

     var items1 = $(".list-wrapper1 .list-item1");
     var numItems1 = items1.length;
     var perPage1 = 4;
     items1.slice(perPage1).hide();
     $('#pagination1').pagination({
         items: numItems1,
         itemsOnPage: perPage1,
         prevText: "&laquo;",
         nextText: "&raquo;",
         onPageClick: function(pageNumber) {
             var showFrom1 = perPage1 * (pageNumber - 1);
             var showTo1 = showFrom1 + perPage1;
             items1.hide().slice(showFrom1, showTo1).show();
         }
     });


 </script>
</body>

</html>
