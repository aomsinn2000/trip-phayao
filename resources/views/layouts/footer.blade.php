<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">


</head>
<body>

<style>
body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
  font-family: "Helvetica Neue", Arial, sans-serif;
}

.demo {
  margin: 0 auto;
  padding-top: 64px;
  max-width: 640px;
  width: 94%;
}

footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;

}
</style>

{{-- <div class="footer">This footer will always be positioned at the bottom of the page, but <strong>not fixed</strong>.</div> --}}

        <!-- FOOTER -->
        <div>
        <footer class="w-100 py-1 flex-shrink-0" style="font-family: 'Roboto', sans-serif;">
            <div class="row py-1">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-2 col-md-2" >
                      <img class="logo" src="{{asset('assets/image/logo-phayao.png')}}" alt=""><br><br>
                      <span>
                       <i class="bi bi-facebook px-2"> </i>
                       <i class="bi bi-instagram px-2"></i>
                       <i class="bi bi-twitter px-2"></i>
                       <i class="bi bi-linkedin px-2"></i>
                   </span>
                    </div>
                    <div class="col-lg-2 col-md-3 ">
                        <h5 class="text-white mb-2 text-header-footer"><b>column one</b></h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#" class="text-content-footer"><b>Link one</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link two</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link three</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link four</b></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="text-white mb-2 text-header-footer"><b>column one</b></h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#" class="text-content-footer"><b>Link one</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link two</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link three</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link four</b></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="text-white mb-2 text-header-footer"><b>column one</b></h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#" class="text-content-footer"><b>Link one</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link two</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link three</b></a></li>
                            <li><a href="#" class="text-content-footer"><b>Link four</b></a></li>
                        </ul>
                  </div>
                    <div class="col-lg-4 col-md-6 input-box">

                        <p class="small  text-header-footer"><b>Subscribe</b> </p>

                            <div >
                              <input type="text" id="" class="form-control" placeholder="Enter your email" style="width: 200px; ">
                              <button type="button" class="btn btn-outline-primary" style="border-color: aliceblue; color: aliceblue;">Subscribe</button>

                              <p style="color: aliceblue; font-size: 12px;"><b> By subscribing you agree to with our Privacy Policy</b></p>

                            </div>

                    </div>
                </div>
            </div>
            <hr>
        <div class="d-flex bd-highlight mb-3  text-last-footer" >
          <div class="justify-content-start" style="padding-left:20px;">  ©2022, All right reserved.</div>

          <div class="ms-auto p-2 bd-highlight ">
            <span><a href="" class="text-last-right-footer"><b>Privacy Policy</b> </a></span>
            <span><a href="" class="text-last-right-footer"><b>Terms of Service</b> </a></span>
            <span><a href="" class="text-last-right-footer"><b>Cookies Settings</b> </a></span>
          </div>
          </div>
        </footer>

</div>




</body>
</html>
