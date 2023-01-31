<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>บทความ</title>
    @include('layouts.head-LinkScript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:wght@100&family=Sarabun:ital,wght@0,100;0,300;0,400;1,200&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/contactUs/contactUs.css') }}" rel="stylesheet">


</head>

<body>



    <div style="font-family: 'Kanit', sans-serif;">
        @include('layouts.navbar')
        <div class="banner-contactUs">
            <img class="img-banner" src="{{asset ('assets/image/contactUs.jpg')}}" alt="">
            <div class="centered text-center">
                <b class="text-head-banner" >ติดต่อเรา</b><br><br>
            </div>
        </div>


        <div class="container" style="font-family: 'Inter', sans-serif;">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="container ">
                        <br><br><br><br>


                        <div class="row">
                            <div class="col-lg-8 mb-md-5 mb-3">
                                <h4><b>Contact Us</b></h4>
                                <p>Please provide some information to get started.</p>
                                <form>
                                    <div class="mb-3"><br>
                                      <input type="text" class="form-control text-input mb-4" id="" aria-describedby="name" placeholder="ชื่อ-นามสกุล">
                                      <input type="email" class="form-control text-input mb-5" id="" aria-describedby="email" placeholder="อีเมล">
                                    </div>
                                    <p class="order-number"><b>How to find your order number</b></p>
                                    <select class="form-select form-select-lg  mb-5" aria-label="Default select example">
                                        <option selected>Modify my order</option>
                                        <option value="1">Return Or Replace</option>
                                        <option value="2">Order status question</option>
                                    </select>
                                    <textarea class="form-control input-message mb-5" id="exampleFormControlTextarea1" rows="3" placeholder="ข้อความ"></textarea>
                                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                                  </form>
                            </div>








                            <div class="col-lg-4 padding-phone" >
                                <p class="mb-5" style="font-size: 13px;"><b>Here at simmoji.com, we're passionate about serving our customers every step of the way. If you wish to track, modify, or return your order, start by filling out the form on the left.</b></p>

                                <div class="mb-5">
                                    <h6><b>Phone : </b></h6>
                                    <label style="color: #00AEEF;"><b>+1 (877) 747-9986</b></label><br>
                                    <label style="color: #00AEEF;"><b>+1 (877) 747-9986</b></label><br>
                                    <label style="color: #00AEEF;"><b>+1 (877) 747-9986</b></label>
                                </div>


                                <h6><b>Hours : </b></h6>
                                <label>Monday - Sunday : </label>
                                <label class="px-lg-4"><b>7am - 11pm EST</b></label>
                            </div>
                        </div>









                    </div>
                </div>
            </div>
        </div>

        <br><br>


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
                        $(this).append(' <a href = "{{ url('descriptionArticle') }}"> read more... </a>');
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
</body>

</html>
