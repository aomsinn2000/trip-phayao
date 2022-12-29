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
<style>
        /* .sticky-top1{
        position: -webkit-sticky;
  position: sticky;
  top: 0;
    } */
</style>

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
        {{-- <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://cdn.wallpapersafari.com/73/66/uZ0eoc.jpg" class="img-fluid"  alt="...">

          </div>
          <div class="carousel-item">
            <img src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://cancerfocusni.org/wp-content/uploads/2019/08/SYD-1600-x-500-desktop-copy.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQUExYUExQXFxYYGRkaGRkZGRsbGxoYGxsZHhsZGBkcHyoiGxsnHBgYJDMkJystMDAwGCE2OzYuOiovMC0BCwsLDw4PHBERHC0nIigxNDIxLS8xMS8vLy8vLy8vLy8vLy8vMTEvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL//AABEIAKMBNgMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAEHAgj/xABGEAACAQIEAwYDBQYDBwMFAQABAhEAAwQSITEFQVEGEyJhcYEykaEUUrHR8AcjQmLB4RVykjNTgqKywvEWQ9IkNGOT4hf/xAAaAQACAwEBAAAAAAAAAAAAAAACAwABBAUG/8QAMxEAAgECBAMGBQQCAwAAAAAAAQIAAxEEEiExQVGRBRMUIlJhMkJxobEVgeHxBvAjM8H/2gAMAwEAAhEDEQA/AKCOFoNftFj/AFP/APCKjbDwSJB8xsfShE1GvuP18qaWrEADoB+Fc9jaeopJAcLZQkywXXnPXymocTaCkgEeUbEcjRGHuLauo7iVnWdY5zHlNNO0y2s4W2FzCJIGkHWPPcUfvMl7m1pWblvU6fr9Ctd1EUb3XjHv8qJs4Qvso0Gug9h71eeKfQxZdt6/rrWltkelOr3DWAzQNN9AdOu1AYq1oIHOqDS0PEQdR1jXrynnRVq2sbjpv6fr2rx3cjXofpVlxBw4wudFGq5YjXP0PnufrUjHNrESsug3GteESdNKJs4fwfrrXhE8S+pHzFS8Ir5JP2ew+XFYcyNL9o/EP94tfQHf186cNuZL9px/BcRp5aMD/Sum/wDrQjofLL/ereg9XVZhq1EQ2M6AL9elxFc9Hbh9P3SfM/nW8X21uMMttRbndtz55Z0H1NKGCq34RZxNO0uuM7Q2bLZHY5omACfSeh/OhsJ2zssYYMg5EiZ8iFmDXOTisxLFiWO5Jkn3rXfCd62LgEy+a95lbFMTpOr8M7R2rxhGhuSsIJ9ORpqMZXIcPeiCDB01B/CrXgu0p0F1Z/mXQ/6dvqKzV8Ey6prG0q6to0uy4v1qQYiq9a4tZOzz7H8qmHFbf3xWTuqvpMce75iPRfrRvnlSccUt/wC8X5/0ryOM2vv/AEb8qru6vpPSV/x8xG2YzSXt3cLYG+o3IX/rWsHH7fRvkPzoTjHEkvWLlsSCQND/AJgeXpTsOlZKqsym1x+YuoUdSAROTd2f4kPqDW1sHzIq2NwkkVGeCnka9h4tOc5/hmErb2PKgMTZjl8qt9zhjjfWhX4b5UaYgc4qrQuJUxao/DcEuuJUSKsGH4Us66e1PuH4dLezSfSlV8ZkHlkw+DDfHKcOC3E+NW9q9fZo2Vqul3vGOkx86OwmAQjxLr6Vgq9o2W7/AGm9MGoNlnPkwDk6A0ZY4TcP8JNdEtcPtjYT7UQtkclj5CuTW/yJE0Ajl7PW92Mo1ns453gUba7PIurSat3c+Q+f9q0bY6D61y6v+Q1H+FTNCYSkOF5VH4faGyE1urUF8h8q1SP1fEen7xvcJynBeLcJa2wjVTMNzno3X1pubESPWrHdw8xpSxsMSD5/ocv19a6lQ6gTfhX8jExL9jDoVy6qGYtpqIUADnMz9OlCXLB0G50+gpkwuyVzuoB0AYgb9J+lbxOHYa85P6+tQsb2lJbKxitcMxuREGYHPmNfrT65aWzbjmZ35tG/0o7heEti9byOXm2xOYgkE5dD5xNScYw7AyNgDI1PMchv/aqZ7CZGF2ifhNwRlJB35zI5/jS7i/D8jALsYy+UnafYU8sYB1dUkhVOgIifQSRMTtTDjmGXukmB+8SJ5eIT9KFHuLiUFsZRQpIBykaHnPXnRXBsA15xaXdyAATAzbDXlvRd/CqrZUYsCs7jTwzpHkKFCMuskDyPPTlNOBsdY0m6aSz3eF2XsMbIINq2TcLEa3Bvl122qotZOZI++vy1pvwi85tuGmGMeumsHyqXhFkd6ZAPhaNBvodKl/MYQ/6prB9n0t23uN4nysR0XQnwjr5n6Up74VbsQ3/07n/8Z/6TVHDzrW2gdJxcX8Qhvfj0qUXKWKTNSi4a0XmOHF+lTWzFLrbk1ILhGlXmkje1dphh8TVet3SaOw96al7ySyYXGAGizjVJGu9V+yTUdzEQd4IqgLSE3ljOIrBiJpfYxyBZuAg6QRsfaprGKRycpWeUyPxGtFeDCvtFebuPVAWcwo3O/wCFF4W2umdWI6qRBOvlPyNBdp8Iow9wrtpodTuKhZdoYBGs9Lx2zpF1OvxAfjUq8XtRPe2/9S/nXPe4qNrHlQ5Vju/aXq32pwzNlzkawCVIHzjQeZinKup6VyjuTNG4e3dUDKWAnYFtPYVCBwMoVTxE6gmU8hUyJb+79aoWG4PffUu46E/nm0rXErV6ws3LxjkudiW66bR57Cs7pm+aPSrb5Z0a2tv7g+dFJf6RXHbPGnHNx/xsPx9/1MaxHH7kaMxMxq7bfTy+YrFUwIfdvzNC4q3yzsxxYX4mAHmQPxoPE9pMPb+K6pPRZb/pBiuM/wCMmdVX5mva8V/lH+uP+2kDsmj8x6CU2KY7LOx2O0uHYAi6onk3hI9Qa0e0eHkjvk089Pnsa5AvFgdMi/8A7P8A+akXiSn/ANv5PP8AShPYtC98xlDEv6ROsjtHhz/7yfOPxFbrlH+JJztt8xWVf6NQ9Rk8U/pEvOKtx+NZ2Ws5sRbkfxT/AKdY+k1rFPuDvDadABzqHhfEe4uC7GbLOm0ypAM69Z9qc5GcXnRpg9y1oX2r4ajNcuA5CGYyNARMkEf1/wDFK8KVTMxQMQZGbaArkg+unypxxi+WUagZz1MzvEc9AeftUdnDL9nusRrKgHpKXJoRq1x7wUOWmQfYQThGEYo1y1ZzHOSAo2UyBLRMaUp4pjruYoyAEHUa6VZeA3GUWwrFfFBgkSNTB6ivHCMTmuOHVTmLAaSfibL7yKzVamv5ksbmVa/xNzcDBRO0fP8AM04sW7t1QbliU+9EgesjTp703uIotCQuYuw1HICN9+dSOj27TWyx8N4TykOoMEDQidqVTq2OXhLYcZVODOiLla0pOdwzHeBbcgDpBGvWfKtcC4TbuSzicuw5e/5fjTbs3hVe4QwkFnPv3d2tdn1guP8AL/3VucnLeCpF2EPw3CLRsX/AAUXMkaR8RP4CqngFi6p8j+B/rV1fiKWlvK0+NCogfxFSBPzqnWhFwevn+tKIkaSqd7NeFcRX91cH8jfga5+giukC2HOU6htCPI71I/ZWwIi0D/mYx+FbaLWE5eJBJEoPCOGXsReWzaTPcaYEwIAJJJOgAHP+pij+0HZvE4NlF9Mof4XU5kaOjDY+Rg10LB4C3gsPi8WqKjra7u2wkw1whQdejZKkThIXhmEw91O8JJvZWYjJIbIo6eFyI8jWn5c3vaJFPy3POcmFuvag7V0q1wawN7CAes0zwHC8MzKq27clgBpzJil94IGSUbB9ica1gX1syjKGChh3hT74TciNY3I5VDhOGXW1VGI5aHX6V0bh7G5xm9cBy2sHaWzoYB00U8via5/oFNraDXLl8wOU6+1FUbJYcxeMNG1teE58vDry2x4FDa/GRtpERr13pJf4ZdB8USTzMan1610TtVxNrGHuXEC51AiRIBLATHvPtXGMViC5LOxZiZJJkk86BahaLZAJ0DhXZ+40B4ygdTIPkIiKcHse3ISOu9U3sv2zu2CFvfvUJE5iSyjQeEmZAA2+orpvCO1Ni8krdUEaEE5SP9Q1pb1HENUUwLBcDe1Et4eh2HprpUPaLCj7PcBAjTr94VYn4rbOgdSegcVSe1vatfHhxZdWIBDMdGEg5k3zDTrpSzUbeOSjnbKuplTvqqsgy6E6+m396MttYzKpQDMoMsdRO2nn+udIHBLMxO5n00AgfL61PhcCWnMl3VQQUtl5kwJ1GhgifKhbEkCdROyhlBc29paGwtgAlQCQJ0ynT3WKS8TXvsuRpyTtG+n3QOm9Lc7qChkA6kERt15xWkcgyDBqDEyx2TcHza8P5jrDcQuoURy5LTHMmBoPPWtcQ4XcM3HcEkTqGB/ygCQIj69aXXMc5KkwSsxp1gGamw+P+IudeUT7nSrNYHaZn7PrIpNr/SCCy3SPWI26dJ+gjnUPEbICaMS2YaZY011zTvOadNzvpTHvVcRoT5gyPcCgsyg5W2JJMCeXLyEnb+lTvDMbKytlYWiZrQnYT5T+jU1y2Ihp6jUbx5ipOL3FVQbYEyZ3IInzOm9TvhV8JY5DE+IEg6TIgfqKZ3gtrLCm8XrZB0JKmOYXn6H0qRsKTs0b6RG7Zt/1tXq5dUNJKMBsQw+gOv0qS5i41O3X1+lQMJLTMJhokTP5QB/SsrPtI/X5isq5NJ0XGWF725cElmVVjcQpMR65jNLOIEhNREkRpvW+N3b+GYvdXKDIAkE5uWgOg0J9qQYzjBdEWSWDe5Bj67j5VhqIxedrDqTSJG0umIxKFkUzmQyOhzCI86HxOIyqQSYhjGusRrHWC3zNVzDYq8i/vWfMGDd2wkzyzbGIg5fI7UPj+JOjBWuC7AImILAydVMxG3sKFqbDaKFUZSLS2WMS621uKQBqQZE9Nj70PwXiIVgX/pqfcxuaqD4q4bVsAgqHypbG42MxvlJB51YcJhIsIVYh5GYEoQra6kFZiMxGvMUHhc18x/qL7430EsVy8Li5NUgyQRLpMSGHIj32rV7vLl0kEkTL6hV00Biekb1Xb2MxAtnu2LK8aqEGaGgDL8R58vpRXZPhGMvOTnazaUAvdYbDaEzDxPpy259CLYVVBYm0Dv7WuJPw2+Dm1IhhBHMjMDqPKaM4G0ZwRqcup5QTt8698e7IpYsC9hrtx1t5Q63MuaDoHlQOokEbHfSK1wPs7dvTcN7u7OY+OPi8kXdtvL31FEGQpmDDLzlisMpvvIOP3AYgz4gdOkf3HzpVdYrLAaiTz/XlVyx/Y5XQ9xeZrqiVW4AFb+UEAFZ855VU8PbuXbotW7ZdiCCoGvmSTEAHqYo6LLUF0N5a1LqRGy8Ts4XB4bE3MP313EZiAWK27YSAQTBltdiOR2jVrw7tPhrrraxOGbBO/wADMCEPTRlWB5xHnXlMC6W1weNwj3LDktbCaslwKzfu3UwCYOhI3O4Jo8/s9t3Lao9/Gd1utq4UbKSCBEA5Yn+ldmn3OTKwsecxXQizb85449ct3cQnCChyXUS491D4g6sX1UiMpFsf6/KnDMt7ElSjBFUwRzCch6marn7PeAYhL+Ku3wxu2wLKM0jNAADqToVyKkHzPOrVZwF62Q6rqPMGfrrQ17AhV1A3+sCoALBTt+ZR8N+0BLksvDWayvxOjMzKp2LkJAMawW96sNvjGFXC3MfYIuKi+FG0K3SQFVumpHz0mvZ7GWblw37JxGEuNJc2XCox56EdeQgb1Ve1nYi7ZyDDPddMRcW3fzLtcz5kuMqrASTvGhA3zU9RQqEW0/3WMApMQBpLNwWwjYR7wVlONuG86k/DrqoYRKyJHk1RW8IFBhDvGrET56E9ak7TYfEqUTD237qyiICF0OUb+Y2GnSh8Jg7lxFbvLFs3SRaW45m4Rvl+u0nyrBVzM5IH9RJIJJibtrg0+zkCcxZQBm03nY77VzJsMTrHP9AV0bHcGx158tuwS1pyDsEmIPiYhToeR2NQ8e4Xcwo8VlwWMKcoKlj/ADLpJ6TJoqYsusSxuZz+3aIO0GnPCAbbK4ElSDHXqPQ17xvD7quDftPazfDnRkDf6v0KccN4aXhU8TMcoA1M7wKMyCX/AAdq0yrcRFggEED9RSHt7wa9eQXFuW+7tiRbdSDmJgt3gnkYjL708wHBrtm2M7TkOoVlOUGfCw5ancTUnFMGz2XRJZnyjKDM+IVlbQ2MfTcoQy7zi91WU5XRkOsTqD5giR84p1Z4+QEUrKJ3WVZgDugfLUs0EnoIqw8T7GOhDXLAcsQoK+PXksDUH2oe/wBkxbjPhsuYgCU0JOwnr5Up8OG3E6a9p3Wzrc9Is/x62HzhH8RQOCwM20RkCqY0JzAnzFatcVsERk7okICyIrwwEFgHB8AVVEbnO5pvxfsFbRLlxbiF7QBvWrTyyyAQCkHWCIgAmRE0ownYnHFO8ay6LqfFBYDf4JzGPQbUtsHbnH0sZRceYFbe8lF/DNBAtKe8J8SEAWnuNI8I8TKgQ67Z2jbSu4lwWYqMqlmIXoCTA9hTm9wmyVEXLisOYykH2IIpcOEOzZUuI3+aUI9WE/gKJcOV2N5adoUASLmS4e24tnMIUCfUaCdPagsRcWIjadj8+fQUyxWCa2g1UaRAaYPmZJ60nuIRP8R12Ousj1FMIE41Zg1QsYsu5WUkTmECCZ39h0pgyrl+MDyIaNRG4BEzQ2K2AyZSx1+fL203qN8APjUgZpHjzCWgHQ7SJH02ozlNoIawuINieHOTmXKwiNGG4GnxEE+1bs4e6A4uBws+EMCBodcs+UbUThi6o9vl8J3IjWfEphTtr7engZSdCdTJ1mOegoztILCT8PJ1ASQAAAQreZIkGNTWVEmLKDwtGuUiGJkc9BMevSspZQmTvLQjiWJcgBgAJMCZPv8AOgkYFhJ0kVNded6i7ug31M9RTTIuVdo6Ftf4bxA8oG/SDoajfBoTJaTAE89Np11paoNSZzVG8Mqp1tDThlqKxgJukwDmCqvmZiPoPnQxumtriiviE5hqOWo1GvLWooMVWRSL8tZab3ZJ7YZ2ZCQJyidI3g7E+ke9dWw1xLyLctuv2dUBAGhthV1UoP4hHPafnzXj/G7Vy0BbuEyUiQ0kAc5G+k1ZOwH/ANpdaQS95UMcgqhoPrt71n7Qpg0yTewnHa7JmO9/zLDirIfDLauGO+uW7Z+YLAeoVh70bhcNncgrkS34VSCAFGgy+oEyOUVXO2OZ8Rh8KpgQstyDXGiT5gKT707u3oTug7lFJVmuGWcgkEE/d025+kzzKtNaWGUOfe3OKK3sRuZPZuW873RCW0WSQIGVQxzH1k+wFUbs7xG33uIFxzaGJS4gurobRckgzyGu/UD1Fvx+FTE2DYt3SjHxHYhyOTRrlmNug3rm2AQNdtof4nVfmwH9a6HZQGUsDqT09parcEQteKcQ4e13h6vnuXCgtsGLZc50NvNsWGkHY60zxGFxXC72EuHFPeF5yl5WLFZlZAzEz8R10Mr5wDcPa73tBfdwYs284kchbRQfmzEeleeM4R8Ri+GYcgkqhxN4xoO8cOxJ/wAyMP8AjFepLi4FhqLnpBLC4FhqLnpGfb/FXLWDx03Cys9q3bBjwh8rXACNTKsw1nYVV+M8FxWFwuGx1q+w7q1aDoWMpmfw5RsyEuFKmNufJ3+0B/tC4OyNRiMU7SNsqHuhr5o0x5HpXv8AaJjScDi41QYi1aEbKtsW2M9BnDfMUuk1go5n7bQKTWCjmftFvD8JjOLm5iGvvh7KkraRCYzAdARMc23kkCANLF+zXj9zEYFnuZnuWSy+dwBAyg9TqBPkKl4bcGE4asCDawbXiP53BaT/AMWalfYu02C4dbzBhcv3C8cwpACmD/KqmP5qqo6lW00BAEp2BB5A6RT2D45fxWNW7fxoQyw+zywDaGEVPhgE7yW8OvWju1xW5xPBYcaLhw166eSAkXCD6LbH+sVB2+vKrYDH92PBdcXmRQpZkZcqlvPJcievnRXY7hneJiMbjZV8aHtqOa2WEErzAjKB5IvWjJWwq7C1gPfb+YZIt3m2lre+0EfEYjiQfE3sQ+EwKsVtqk57h22HxNPqJ0A0Jo/gty/gcfawjX3v2MQma33oOdGEkSDqIy+W+wIqwdlsAtm0mGuXbV/I02iqZSAJbxyxBaZ6VSuxD38Vj7uNxJYrh+8AnZWYsFtL/lDNpv8ADO9CrBs22UD+v3ghg2bawH9fvIW7UYrCNew3EkGJaA9sOFKs+bwsIH+zOpiJGWIG1Et2yuWFujFYO3YxYtZrJRMs5/CsiTtqd/4GGho3i+EGI4/ZRoIs2UZ/VM7j/mdKE/alhmxNvCXrasxL3bZyqTAZhkmP8pj1NGDSLKCBci5hDuyygjcawvgVq/guFrfs2DiL991uXAQznK+YqxUeJ/4fdyTtT7s9xXF9xfv4zDpYREL2lAhoVWLZgSSNAN456V77VcVxOEWyuEwhvgrkLAM2TKFygqgmCCdTA0pX2m4hiRwe9cxdtbd5wEKryR7iqJ1MeEnSenOlEZ9SBqd+MX8Wthqf3lV4LxPE4PhD4i2WLX8TlznXu1ynNc10zM6lZOksKtv7OwbmHfvcYMSTcRyCzHugpza54YSV2gDT1ob/ABB8EmBwqlQvdobwKgqRcYZpnp4/nVX43dfDY3HYXD2ir4kW7dpUGUBGALFFEbywkaAljyowy1SyAWN9/aHpUzKOd7+0Y9n7mKvnieNwa5rlxxbs7A5S8kjMQMy28h159dju/wAKv8NvYK79ouXLl+4EvKxJBkrI1JLRmIkzqAdNqzj1wYOxZwNt4a0O8uspIm6w2BGugJ9ivSjMdgWu8Q4bhoJXD2VvXG1jMxzMSfNrY1/moVrBqjKNh+ANJQe7EDb/AMAiXtqi28XetpoAwMbAZlVo+bGqy94qZBortNxUX8Reuhjla4xWOagwv/KFpQ9/Xyrls2ukz2g+MxBJmf161AcRJ1Hof7japMSR0+tDXLfnp5aexoCQYLLeeExJNxSZ0/XOj0xxiOXMeWx5R70CcukTP62qfCvOhj12n161GtvJYg2vPV/Do7FlIGsgpmEDQRGsCRPXlUeKsgNLFgdQTqSTpBncaVLcdUOYKsjdo+EegoHE4gsZ00M6dOp96tWLGErEaGLcVcOckeY0nqd6ymGJ4YZlSCDMax+t6ymiovOLlj+wW/uCtHBJ90U3xVlAfCZ/OhSleoFCkflHSec8biBpnPUwH7In3RWjhE+6KNKVorUNCn6R0ELx2I9Z6mBHCJ90VgwifdFF5K1lqdxT9I6CEMdX9Z6meLeGT7oqwdnuMthswVEdHjMjiVJGzDoR+thSMV7DUqphaTrlZRb6Qlxlb1HqY44lxN7143ngPpBXTLl+HL6U5PbS9E91Y7zncyeJo66xP60qod5Wd5SnwFBgAUGm0MYyoPmMtOJ7YYpwVN3KDocqqunrEj2NRcJ7OXb6d5bVQswCxiY5jTaaD7McHbE3Y1FtYLt5clH8x+mprq1m2FUKoAUAAAbADYCuXja9LC+Skovx02m7C95U8zMbfWIO44iyi1cuqUMBtRmK8wWCydPOTTNcJiO77rMMkZYnXLtlzRMR50wTcUkXtO7XLYTDM1u73nd3TcRVYW1uEsy6sqnIuU6yHBMbHnjHVW2UdJp7geo9Ybw/CXrKBEFvKDKg65T1Xpufma84DAXbTM1sgFzmfWczHmQefnQeA7WJesm8LTgZ8PbC5hJfECwVE8sovpPoaF4Hx4pZvG4zPktX8TnZpy2RdupYWI1m3ZLTO89dC8VW18o6Qu5HM9Y8t4S6LhuyO8YBSZ3UbCNo/M9a938Fcc5ngn1qv3OOXrttbQFwXlW4zm1km53Nuz3oQOQEBu3gokz+7O40M2C7VwiFUN2yGsW3vm4ZLX1turIhXxKFuqWzFSBOmlUcRWtsOksUl5nrHmBwTWgwQKAxkg6gnrB56D5V4xfDWuNmuAMYganQdANhSC52udf3xRjZcXDaVShZyiZgjDL4cwiGVnEmDG1E9oOKC5eXDo7oy3sOrPbuMol1u3biHIRqtmyTDSP3i6VPEVr6gdJfdjmesZWuElSGUAEaggnSicZhrl1cr5Su8bAnqY3qpHtvaud1fyX0U2VZf3mW3cL3bKZCCMrZHuKGuGCviAzeKGOI7YMisGsAOjujk3G7hciWrhJvi0SJW6IzIuquCRE1RxFf0jp/MndLzPWP2t3SCCEkrlLfxFembeqWvHMQl67h+HYcXO5/2pLgLm+6gJAzaEeZU9KsWD7SZ0D90VzX7dhBnViSyoWaVlYUm4PCWB7qQddKNx84rB8TuLg9TiwrqpUMC2ubfYq2dp2AfWq8TVNwQBNWGoqzEHU20udP3ls7H8U+1Wmu281ts5W6pdpDwCTy5EcgeXKmy4G4mcoFLOAGzksGA+9O+5+dQdjuAfZLORmz3HY3Lrci7RMeQgeup507faltj3GgA6RNWkmY5SbfWVvivAjfcvcRCxAEzsByA6V5biN6z+7a4nhAUE+JlHTMecetH8X4mtoDUZjsOg5tXP8AG3nzE6kMSd9dYnfnUwru7XYzn13CGyk3+si4patC42zZjJbUkk6kknfWeZrfGO1N8W/s4uzaKZSRGYrERmjNEfPagC7s2UjYGNt4J1n0pPxi2qFSLgeZB300HP35eVdSmFmbvHPEya3ZtZgpA10PkahvYZOSCQenxDmJ6/lQFi8yuLgOoO+hGvlrpvRvEi2gzrIYmFIgx/EI/rRMgvtGIznYmTYBrC6XLCN880evL5bnyo/EcMwzO5VVFvWCD4AQBEtMnUx/4pAzMTmfZiDEmCOhjXn+NP8AiGIZcIs6C5MLA0Qa7fLqaX3QOtoyzDQkxN9iQlmCqFUbTmmDrlfTTTfz50E7B5yoOW2wBA5T51Pg8QwULAI8QYHoNdecflRnBuHljNvU79Iy7a9dqB8qgkiEtxuYfwTgK/FfQAakK2k7AR5CfnG9EXsBhLdnx2lLGQCV/i128tPqKP4NZC52MHRRJ3IOo/CSKU8YxSFwGUTGg2Gv5DnWXPc2AkKsW3MCu8I7w+G0sDYKY9NzWVL9oDoEUwF1JkAliIb20A9vWspgyjhLKNzhDJXju6Ythj0ry1g9K9fmE8nmI4RcUrwUo82q8G1V3lh4CUryVo02a8mzVQxUEDKVrLRbWTXk2T0qoYeCxRXDeHvfuLatiWY+wHNj0ArybVYoYbEj0oWBIOXeMWoL6zr/AAfhaYe0tq2NBqTzZjux/XQUbFcVzP8Aeb5mszP95vma4T9iu7Fme5PtOmvaaKLBdPrO1oNRQ1ns5h1+FGAi6AO8uEKt7L3gRS0IDlGixGsRJnk3DC3fWvEfjXmeorpqpWep2S1L59/aaqOOFQGy/eT2uyuGVxcW2VYMH0uXACygBC6hsr5QBlzAxGkVg7J4XKi902VLa2gve3crWlJK27i54uICzQHzDU9a0qGpAlKOAf1zSK/tNXOyuGLZijzN0kC9eAbvnz3Ayh4ZWbUqQR5UUOC2Nu7Ed730SY7zLlBImCAumXYQNNBUKpUipQnAP64Qre0G/wDSWFyFO7bLAUA3bxyIGVglsl5tJmRPCmUeECIFSJ2ZwwMraynObnhZ18bWjaLaNubZI9WJ3JNEqlSKlUcE/rMIVfaDrwCwDaItgd0qLbALAKtsyoABgwddeg6Co8R2Zw7tmZGzEuSVu3ULd4QXVyjjMhKjwGV0GlHi3Xru6rwT+uF3ntAMP2ew6Xe9S2QwYsBnuG2rsILpZLd2jkEjMqg6nqa2eH3TiheNxO6W2UVO7GcFiCx7zcA5RoNNBRvd1rJVHBMd3+0sVSNhCIoTiuJFq0znWBttJ5CeWtbalHaG7Fh9J20PPUVQ7OtqW+0VUrWUm0qGP4hcuOzADUbiJA6Dmd9vOkGJPiE5pBBg7EDafnpPSm74iwqRATnA0IPkaQ8RvORK6QpOoJMaQdpGsUdGmF0E5ILO14NiOKFc2R9JI8MCdNdhvM/Kl/FHIUdYjzif71C5ZviIbUg+E+QMRB/AUdYwnesoPIc+ug6+QregtNWQaXiSTliee3Sp+7219qZYrhRB0HpUeIsQAdjP4RH1FWxM0U1AGsks2Wd7afzAH0EE6+5+VM+113w21A/hY+QED+gFHdmsKpZ3n4Vgeu0/SvHbC0B3X+Q+/hFXfy2kt5iTKlh3hwD6dNCDTSxisiALDRJYbRufqYpba8dxYE5vqQBH1rfErzW4yMM7gry3zrWaoL6SADjHOCxZygSPELjb8woYDyieWmhqvY7GG46lV1ylWPqpE9BvTDDQqgN/Bm0HLOoABMxuOtbwdpAraCWPIbA6n8vU0oBRCzrpaNOCwzXRsc2okciQTv1msrMI3d3HfbPJiNpdid+p/CsqZRDFpb+FYpH+K0pJgCS0DroCD058qZXMJa/3X+lyPxDUn4FbgLPkad3RpoSCZ57dPrp70l8VVDXzHrNIwWHy2KCBXMBZ6XB6ZW/+NDvwy2diw/zJH/STTJVIMgt89OU6R1nWor0kkBmkeXkPLSrXtHEDZotuzMK26xU/Cl5Mv/MP+oCoW4QeRX2ZT+BppGsEma8q8HT8qeva9cb2MQ/YeGba4il+FvG3vFQHh79KP4tfItCNCXtiRodbiz57T86e2MOGUExNdDDdptV0YWnOxPYq0hdWJlR+wHmPrXk4H9fo1b2wIqNuHCtgxYmL9PIlS+w+dYOHjqatDcNFeDwvyovFDnJ4JhwiTh2AXvbZnZ1/EV0NbdVzCcNh0P8AMPxq2i0azVqua2s24WiUB0kIWpFqUWakGGPSs5cTaEMiQVKqVKMPEaHzqRQfu0stGBZGtupUt1LaTnt67V4GIQGCR+vOhLQwokyWa2bNRHGrtvykQaHxHE+QFDeFCzY9qDv3V2Ugn1FBXuJNECR50qu8QuCfGaYgJgOQI1us3NT8qU9o7ROHfMDEA/8AMKgOKuHmRSftPjguHuhjqV+Wo1Hp/SjdTlImWpbKZRuKXDICgaEk7kDzMbzQCYs3EKB8pmSZiZMxPSetLzim5MTPv1/OvKYXQ65Z31/HrSkpqosJlVLDWF2bJzgEzG8HSZ69ac4RiMhHUE/OhOD4AkatlkEDeI011gx+dNfsJEae8bnl7aU9RC7y7WnlmJdeWon0ipLmAR0M68/q1E8M4ZcZhpty9NqsnDOzBIUOYE8qPyjQzQoZtRFPZoIAZ0DHWaV9vrqvcRUM5VA+gn8K6Pf4RZtwiLMDUnX6RvVXx2GtM4BtasSJAPt6HakvVpg21hkMi3YjWc+S1EabKTPSetCYq73pWRJWQQOevh0+VdG4pwG3lhUMgbD6g7QfnVXxXAygNxVJAEH+Xy6k6HWs1R1JuN5ZVgM0VYds2ioBmKyY03JEgzpmj0mmVlVEmYEQCIMjmdPWJPnUdrCFklUI1OVNuviJgRqAdN4rMFdm5lgBpywPFsdTA2HvrG9I0JI5TOr63tPAukHeYGWImIM7HU/ENfzrde8XggrESI6/xSdwVJBAFaoswmgMDxl6wDZcnlH4U1EHLLquZsq6EyZA5CAJMa+fSklq5kK66RrO22lS3cWSVZQDlZWAjmCCBIO2YT7+lYKu87AvbSGWcRm2kaEjSRouaC2YQeWx3HWvYYmddAJ5/eyxM++3L3pfhb1yCApAggSvIgK0HzAA9qldXIg7Hlp59Nev6ikkxgBM1fMht9SQ3kQB5kfxfTnW+4gxliCATEddR8j9ai7t9ZbckzmO58q2uHHMzPQfXlNQGXtvA+NMAg2MXUHL76wdOe9Q8R4pluFBEgAxOuwqXjluLQgQM9vkRPjXzpNxnD2/tDPqHyrrOnwgag7/AErdhqmTzTLiVzi0IPHGAmNPImvQ7QtG31/tSkYYAECDpoVJn/iB5cqXX8aUUd5AI23jQecV0aeLVtxOe+HI1Bln/wDUL+XzNe14855D5mqpYuZogiTvzj67UXdzrJmem36/80016fCLFN5auEcXunEWl0guoMdCwmurKnnXAuA49hiLGbldtgnyzia7oeKJQVGva0ZTAF8xhyN6VKrdPxpNe4zaXUkD3FLsX2wwycyfT/xQC54Qy6ruZbVbz+dD/wCIJE6xLDYn4SVOw6g1zPtH2xbEW8lklEEm4VJzMsfCDGnOevpQ+A7Y3ltpatMoVFyhmCnT5amoiM7FQNt4upiKaKDvfa3tOk3OJ6ZlViJ5beUzS3A21vPdUsSVZc3KJVTvruc2vqOVVezxfEvEXCoO8KFzesACKXdke0ItYm6z7XgcxY6ZgzMD9SPel1iabKvM8IyiwqKzWNhznTbXCremVYA5ya1ew1ty4G6EBgTt4VIjyhh9aTt2ttz/ALS2BGniH11qs8b40jXhibNyGQfvCrtBVSIQp90jN5b1KmYC9oSspNriXVsPOwpfjbKiZ3G5jl61ULn7Qr8nuLSFRMyHf01BEVr/AP0yQc+GUkjWLka/6SR86YuHrDb8iLOLone/QyyggenlSjtUbgtMUt51ge5kR7A0E37SkIA+yCI1/e/h+7qPG9vMPcsNZ7i4C3PMrAGQeWpGnSiNKsupH3inrUWQhTr9JQuIYK47FzY7sanRYHvQuCsrMTvGvXX9bVZwXdClw/uyIHIdSY6j5aUy4fwmxbukcpBVisrE6AyPTaaStewPtMlJ7qSeHKRcJ4YVdGPjURCkMhmY118PXX5VbLNgEKMoMA6aGIJEzJ+dB4dBmmD8R5HKzHUNrqFgxqPPan2AbNEAagBdZnz5aTpQJVYi7GLwtN6tTzbQjhmCzH1I5R70xxJhgFMBd+pPr6CjcNaFtMx3ikfEcWUGaCwL6gb84A5chRu1hO7TTWw2nljqT5wecVU+N4wo6EFAimXncQDDDqdBIFPMJeu3bblkFvxGB5DYesmTVaxQIa4XYAA+c7fXUjSsjVCBrMnaNJiAeEJwGPF1m1VogDaTIBlZ5a7T01o7/De8U6fFmBnw5gf4fMgfhSHAWcssAxP3m0AEgDKBuIG/SKfcaxhyQggmFlfOJJG8xPzpRqHLoOMXSqFaRC625xI+GdCUgKoGo1knzn4TptVcxWFP2kXM6KR8Qzfy84Gp5ae1H4vGkg52dmXnoFGonQ67kTzqaxj0ZAsQ33iPLQweUUxKRDZttJiV9xzibj67d1aUloJYBiNjpmG+4+VZTfE40KZN2DtoN9B1FaogWH+mQKw+WOMOc1yJjQ6/r9aUZ9pVZXP01HUiQNuunty5LMJbbOYBOnTTcc+Q8zXjEcYsW2hriSP4VOcj2SfqRWSpq1hPTgjLqY0uOYgEg+WXX66fL3qTK2STzHX6E61TOK/tAtrpZtNcbYFiFEzHwrmM7nRuVIb3ajH3tA4srG1sZWg/z63Jg9aJcO51On1gmqq+86hevqiZ7pRAdSWZVUf8TQKSHtTYJK237w/Ce6ViB55jAjzBNU9MMgdXvEO0au8sfJhmMk7c509qnu4uWAEKsTIAAiDJ0Pmfw5Gi7hRxvBNduAtHnEeJ94FVVgCGMmT4SCAI5SNaCx+NzeLnABAIIkaUnt4yVCRzid4POY+cb16tDUNmBYEHXQTqdPzo1TLFly28YC6JEOPIkb+XUfWpWxMnSZ6NEz8x+velDYsw2YCNpAA1666xBHXnrU2GXMpAkAnwnYySYXkSIHLzoyIN5t8JakvBtsx1+6Cd9IET6RrW7WFvBtw42+Xl7UDbLyJMrJ+LYEcp5gzETyFFLe+ICV11Bkka6mobiVCsFiVNxZWHDDcfxAzseU1dxetYlv3ly3YRcojwDM5HKdDsdfTzqi2bgFxUZvCzKBOoIY9eR10q18I4XZQ3A1lHBbw51BgRsJH0ptNWcX4QHZFNjvGOH4lZw1zLntX7JE6ZJU8uenKRtBkCRFQYkYd8LduNetnEM2dVDxkTMBkyAxGXMdROvUaeW4DZdnY20XwQoVQqg66wIk15HDkbCW7QtWxdJVWuZFzQG1OaJmBUKtY3GktSvCbx2NXEXrH2Y/vsqq6EqEJWTmETEHNJO4A0ro74a3zRduQj8K5nxbCLax2GWwgSCCcvMj6ExP6iukPfFDSzAmMcDSKO0uLtWbDMyqs+HNlGk85jTyrnfDsSi3EdLqkqQQNy38pG5nbbnXROPYVb2HuKwkRPOZGukaz6VyLgeHN64F1yyJPIZtBJmAPP8SRQ1QCRca/vLW42M7xwp7F5VdERlOxyx5bEdaQ/tEHdJauWxbQKTJIAg6EEjKQw0O/XzpzwzDJbVURQoA2AA6anzpX+0a2XwxAMQVbyOv6NGzEobygoDCVnD8SwjOq51KKgBLEAlgIzNlO8xr1NA4nGYY+APby5z4oWSpI011JmTzGvlRFjDW81lwBtBEdeump1/CheJYG2WdgBup5aRSluT/MNlAEgxBwqjNbuISCJVgmqk66ZQaF4vbRsNca2bYOkwFkeIbZdRRWPw6MjDIASOgqHDYVMsZFn0FaFzcJmcJKvwpHLglpjqDXScHgFRVN19xMEjT+WOtLMJh0U7CnWHxO2m1HY32iESmrXveFcTQWimTQTLANGmxEa8v1rTTgd5MxeOgGm2utLnxEkGKLwGMOwkDy0/CotNcwMcjAAhbayw43Fg2yf5wPpS+wysA2YBeXmZr1irs24JnXrSrMoEZdKKohLXjqb2FowYJHhddf61We0vDshFxVzBtGykDz58tT7xRtvCWgCBbUCZ0Ea+3lUPE0VlC5AQPfesrUr7w6jK6FSNJV7fEwcq5QNBALE66RJiTt6UdiuJpdBQTIBnQiCMusnSSGHzrf+CoWzG2snfTfrUt3gVsgAoIGw6bbfKqWio0vOdSp5VZRsZSOJOzoTIUCYAMkneDB1lp6fDzoPBWzdyqH0AJyz01223mrhc7M2oPg5zAJjnrE7671FZ7OWgwOQj0ZqaABxkpUcvWVw8LYsfEo9Oft5f1rVWo9n7X3T7Mfz86yqv7zSBEfbLFMgXKY25A8h1qpXbhzeuXkOn9qysqqe0dU3i5mhtNJkaaaEERVnwNsKyhRAGbT2/sPlWVlFV2gLIeL2gMTbHIlZEkzy51Jxh/3LHmoUAwJAaZAPnW6yl8oXExVwu4es+KNddCdRrTxm59C1ZWVT/FKWD2eh1kNvr5aTt7UWG5fzAfUGsrKtpIGzkMddwx9xzqXAa5vQ/hWVlCdpJvhS/vU/zqfk1XnDXDmbXr+FarK34b4TMGK+MRtacld9wfw/vW8Kuo9T/wB1ZWUbwki3i4zYtSd1VoOxHi5EetXbkPSsrKzLxmrlB8TrbadZFc+4PbH+JHTaSPIwgn61qsoHjEnVsNsPUfhWu0yg2TIB/dg6gHUEa61lZUPwmXxEotrVROuv9qgufAT1Yj2kfXz3rKyqThI+0XXeflFeMJuKysrWu0yVIelF2PyrKygMWuxhR/honB3CG3rKyqTeFSj0tK+4/A0txixFZWUT/FHpB7dadRWqystSMbaekoy0oP686yspR2gpxni9YXXSlwrKyliMTaeXrKysq4yf/9k=" class="d-block w-100" alt="...">
          </div>
        </div> --}}


        <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="https://www.museumofknowledge.com/wp-content/uploads/2017/02/Museum-of-Knowledge-About-Us-3-1600-x-500.jpg" class="d-block w-100 banner-slider" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://roijang.com/wp-content/uploads/2022/05/shutterstock_659886724.jpg" class="d-block w-100 banner-slider" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://paikondieow.com/wp-content/uploads/2020/09/0-2-8.jpg" class="d-block w-100 banner-slider" alt="...">
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
          <div class="px-3">
            <img class="specialDeal" src="https://positioningmag.com/wp-content/uploads/2016/05/pruksaNew.png"  alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_kJ_dS0EXSRTAsGsZSjY-mIyEd8qNg0eRUkUexvZPfZXZOPhfLhqtw0cIrLfqz2V0HVw&usqp=CAU" class="" alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://www.ktc.co.th/pub/media/ktcworld/Travel/Online-Travel-Agency/traveloka-ecoupon/traveloka-ecoupon-promo-m.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://ik.imagekit.io/tvlk/image/imageResource/2022/12/08/1670499241316-2edbc571bfe17f447bc1dfbbf201a8ef.jpeg?tr=q-75,w-307,h-154" class="d-block w-100" alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://positioningmag.com/wp-content/uploads/2016/05/pruksaNew.png"  alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_kJ_dS0EXSRTAsGsZSjY-mIyEd8qNg0eRUkUexvZPfZXZOPhfLhqtw0cIrLfqz2V0HVw&usqp=CAU" class="" alt="...">
          </div>
          <div class="px-3">
            <img class="specialDeal" src="https://www.ktc.co.th/pub/media/ktcworld/Travel/Online-Travel-Agency/traveloka-ecoupon/traveloka-ecoupon-promo-m.jpg" class="d-block w-100" alt="...">
          </div>
        </div>

        <!-- ดีลสุดพิเศษ -->

        <br>


        <!-- หมวดหมู่สถานที่ยอดฮิต -->
        <div class=" background-cate-place-hit">
          <div class="row">
            <h2 style="padding-bottom: 40px;">หมวดหมู่สถานที่ยอดฮิต</h2>
            <div class="col-4 col-lg-2 ">
              <a href="" class="text-cate-place-hit"> <img class="img-cate-place-hit" src="https://charatoon.com/photo/1646.png" alt="" >
                <p style="padding-top: 20px;">กาแฟ / คาเฟ่</p>
              </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://www.shutterstock.com/shutterstock/photos/575235529/display_1500/stock-vector-restaurant-or-cafe-exterior-building-vector-cartoon-illustration-575235529.jpg" alt="" >
                <p style="padding-top: 20px;">ร้านอาหาร</p>
              </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://media.istockphoto.com/id/1340642632/photo/sunflowers.jpg?b=1&s=170667a&w=0&k=20&c=9Ug32UnodYNOr9DGuLwVRk1WExt3D10xZjMe4ujgwp8=" alt="" >
              <p style="padding-top: 20px;"> จุดชมวิว </p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://thumbs.dreamstime.com/b/waterfall-cartoon-style-vector-isolated-illustration-waterfall-rocks-cascade-shimmers-downward-water-flowing-vector-246613367.jpg" alt="" >
              <p style="padding-top: 20px;">น้ำตก</p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://i.pinimg.com/736x/dc/84/3d/dc843dc1f50ed2a0874236e2116702ca.jpg" alt="" >
              <p style="padding-top: 20px;">วัด </p>
            </a>
            </div>
            <div class="col-4 col-lg-2">
              <a href=""  class="text-cate-place-hit">
                <img class="img-cate-place-hit" src="https://png.pngtree.com/element_our/20190601/ourlarge/pngtree-vector-free-buckle-cartoon-park-landscape-image_1324381.jpg" alt="">
              <p style="padding-top: 20px;">อุทยานแห่งชาติ </p>
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
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-xs-2 g-4">
              <div class="col">
                <a href="">
                    <figure class="card-with-hover">
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
                      <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
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
                        <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
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
                      <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
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
                      <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
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
                      <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p>
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
                      <p class="address-place-hit"><b> โรงแรม 50 กิจกรรม 16 สถานที่ท่องเที่ยว 25</b> <br>ที่ตั้ง : ตำบลเวียง อำเภอเมืองพะเยา จังหวัดพะเยา</p></div>
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
        <br>
        <h2 style="text-align:center;">กิจกรรมยอดฮิต Trending Activities</h2>
        <p class="line-header"></p>
         <p style="color: #535151;" class="text-content-top-dessination">We provide various specialfeatures for all of you</p>

         <div id="trendingActive" class="img-special-deal">
           <div>
            <div class="img-trending">
                <img src="http://topicstock.pantip.com/isolate/topicstock/2011/11/M11286445/M11286445-1.jpg" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>ตักบาตรข้าวเหนียวริมกว๊าน</h6>
                 <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                </div>
              </div>
           </div>
           <div>
            <div class="img-trending">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQ8Y3c0lX3t1PGHQcxp37FxgcGlpqfELwTQ&usqp=CAU" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>พายเรือชมทัศนียภาพยามเย็นในกว๊านพะเยา</h6>
                 <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                </div>
              </div>
           </div>
           <div>
            <div class="img-trending">
                <img src="https://mpics.mgronline.com/pics/Images/558000002399319.JPEG" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>ปั่นจักรยานริมกว๊านยามเย็น</h6>
                 <p class="text-content-trending">กับมุมถ่ายรูปคู่ป้ายกว๊าน มุมนั่งเล่น มุมชมวิว ชมพระอาทิตย์ตก และมุมที่ไม่น่าเชื่อว่านี่คือ “กว๊านพะเยา” </p>
                </div>
              </div>
           </div>
           <div>
            <div class="img-trending">
                <img src="http://topicstock.pantip.com/isolate/topicstock/2011/11/M11286445/M11286445-1.jpg" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>ตักบาตรข้าวเหนียวริมกว๊าน</h6>
                 <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                </div>
              </div>
           </div>
           <div>
            <div class="img-trending">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdQ8Y3c0lX3t1PGHQcxp37FxgcGlpqfELwTQ&usqp=CAU" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>พายเรือชมทัศนียภาพยามเย็นในกว๊านพะเยา</h6>
                 <p class="text-content-trending">กิจกรรม"ตักบาตรข้าวเหนียว"ในช่วงเวลาประมาณ 7 โมงเช้า โดยมีร้านค้าแถวนั้นจัดเตรียมข้าวเหนียวและข้าวของใส่บาตรไว้บริการ </p>
                </div>
              </div>
           </div>
           <div>
            <div class="img-trending">
                <img src="https://mpics.mgronline.com/pics/Images/558000002399319.JPEG" alt="" class="card-trending" >
                <div class="content container">
                  <p class="text-map-trending"> <i class="bi bi-geo-alt"></i><span>พะเยา,ประเทศไทย</span></p>
                 <h6>ปั่นจักรยานริมกว๊านยามเย็น</h6>
                 <p class="text-content-trending">กับมุมถ่ายรูปคู่ป้ายกว๊าน มุมนั่งเล่น มุมชมวิว ชมพระอาทิตย์ตก และมุมที่ไม่น่าเชื่อว่านี่คือ “กว๊านพะเยา” </p>
                </div>
              </div>
           </div>



         </div>

        <!-- end กิจกรรมยอดฮิต Trending Activities -->
<br>
<br>


          <!-- บริการจองโรงแรม -->

          <div class="box-hotel">
            <img class="img-hotel" src="https://png.pngtree.com/thumb_back/fw800/background/20190903/pngtree-pink-sparkling-background-image_313710.jpg" alt="Snow">

            <div class="text-right-hotel">
                <button type="button" class="button-hotel text-hotel" ><p style="color: #ffff">คลิก!</p></button>
            </div>
<div class="text-left-hotel">
        <span><b>จองโรงแรมในราคาสุดพิเศษได้ Hot DeAL</b> </span>
</div>

          </div>
          <!-- end บริการจองโรงแรม -->
   <br>
           <br>

          <!-- package tour -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-11">
                <div class="container">
                    <h3 style="text-align: center;"><b> PACKAGE TOUR</b></h3>
                    <p class="line-header"></p>
                    <p class="text-content-packageTour" >We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-6 g-4">
                        <div class="col col-md-6">
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
                        <div class="col col-md-6">
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
                        <div class="col col-md-6">
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
               <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4 ">
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
                      <br> <br>
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
            <div id="experience">
                <div class="px-2" >
                        <div class="card mb-1">
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
                <div class="px-2">
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
                  <div class="px-2">
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
                <div class="px-2">
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
                <div class="px-2">
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



<br><br>

           <!-- บริการเสริม -->
           <div class="other-service-background">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-10">
                  <h3 style="text-align: center;"><b>บริการเสริม</b></h3>
                  <p class="line-header"></p>
                  <p class="text-content-packageTour" >We’ve designed and curated pieces that are a cut above your average home goods, because when you level up your everyday objects, you elevate your daily rituals.</p>
                  <br>

                  <div class="row">

                  <div class = "col-lg-3 col-sm-3 col-md-3 col-xl-3 col-xs-12 py-1">
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
                  <div class = "col-lg-3 col-sm-3 col-md-3 col-xl-3 col-xs-12 py-1">
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
                  <div class = "col-lg-3 col-sm-3 col-md-3 col-xl-3 col-xs-12 py-1">
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
                  <div class = "col-lg-3 col-sm-3 col-md-3 col-xl-3 col-xs-12 py-1">

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

       <!-- end บริการเสริม -->

       <div class="padding-under"></div>


 @include('layouts.footer')
    </div>




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


{{--script slick ดีลสุดพิเศษ --}}
      <script>
        $('#specialDeal').slick({

            dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  centerMode: true,
arrows:true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false
          }
        }
      ]
    });
    </script>
{{--end script slick ดีลสุดพิเศษ --}}



{{--script slick กิจกรรมยอดฮิต --}}
<script>
    $('#trendingActive').slick({
        centerMode: true,
        centerPadding: '270px',
        dots:true,
        arrows: true,
        slidesToShow: 3,

            responsive: [
        {
            breakpoint: 840,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0.5px',
            slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1
            }
        },
        {
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
{{--end script slick กิจกรรมยอดฮิต --}}



{{--script slick ประสบการณ์นักท่องเที่ยว --}}
<script>
$('#experience').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows:true,
  dots:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
        arrows:false

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows:false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false

      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

      </script>
    {{--end script slick ประสบการณ์นักท่องเที่ยว --}}


</body>
</html>
