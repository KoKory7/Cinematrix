<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineMatrix</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{ asset("css/fontawesome.min.css") }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset("fonts/flaticon.css") }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
</head>
<body>
    @include('components.header')
    <!-- banner begin -->
    <div class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="banner-content">
                        <h1>CineMatrix</h1>
                        <h4>Próxima función: {{$movie->movie_name}}</h4>
                        <h4>Fecha y Hora Inicio: {{$movie->start_time}}</h4>
                        <h4>Fecha y Hora Fin {{$movie->end_time}}</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="banner-bottom">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 d-xl-block d-lg-block d-md-none">
                                <div class="part-img">
                                    <img src="assets/img/banner-bottom-img.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 d-xl-flex d-lg-flex d-md-block align-items-center">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 d-xl-flex d-lg-flex d-md-flex align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->
</body>
</html>