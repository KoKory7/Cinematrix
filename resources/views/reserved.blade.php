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
    <!-- breadcrump begin -->
    <div class="breadcrump">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="breadcrump-content">
                        <span class="page-name">Inicio</span>
                        <span class="icon"><i class="fas fa-chevron-right"></i></span>
                        <span class="page-name">Iniciar Sesión</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrump end -->

    <!-- contact begin -->
    <div class="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="add-space section-title text-center">
                        <h2>{{$name}} Gracias por Reservar</h2>
                        <h2>Silla: {{$seat}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
</body>
</html>