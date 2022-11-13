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
                        <span class="page-name">Reserva</span>
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
                        <h2>Reserva</h2>
                        @if (\Session::has('warning'))
                            <div class="badge badge-warning">
                                <ul>
                                    <li>{!! \Session::get('warning') !!}</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="theatre">
  
                        <div class="cinema-seats left">
                          <div class="cinema-row row-1">
                            <div onclick="location.href='{{ route('book_seat', 1)}}'" class="seat @if (array_search('1', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 2)}}'" class="seat @if (array_search('2', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 3)}}'" class="seat @if (array_search('3', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 4)}}'" class="seat @if (array_search('4', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 5)}}'" class="seat @if (array_search('5', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-2">
                            <div onclick="location.href='{{ route('book_seat', 6)}}'" class="seat @if (array_search('6', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 7)}}'" class="seat @if (array_search('7', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 8)}}'" class="seat @if (array_search('8', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 9)}}'" class="seat @if (array_search('9', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 10)}}'" class="seat @if (array_search('10', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-3">
                            <div onclick="location.href='{{ route('book_seat', 11)}}'" class="seat @if (array_search('11', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 12)}}'" class="seat @if (array_search('12', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 13)}}'" class="seat @if (array_search('13', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 14)}}'" class="seat @if (array_search('14', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 15)}}'" class="seat @if (array_search('15', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-4">
                            <div onclick="location.href='{{ route('book_seat', 16)}}'" class="seat @if (array_search('16', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 17)}}'" class="seat @if (array_search('17', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 18)}}'" class="seat @if (array_search('18', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 19)}}'" class="seat @if (array_search('19', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 20)}}'" class="seat @if (array_search('20', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                        </div>
                      
                      
                        <div class="cinema-seats right">
                          <div class="cinema-row row-1">
                            <div onclick="location.href='{{ route('book_seat', 21)}}'" class="seat @if (array_search('21', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 22)}}'" class="seat @if (array_search('22', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 23)}}'" class="seat @if (array_search('23', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 24)}}'" class="seat @if (array_search('24', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 25)}}'" class="seat @if (array_search('25', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-2">
                            <div onclick="location.href='{{ route('book_seat', 26)}}'" class="seat @if (array_search('26', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 27)}}'" class="seat @if (array_search('27', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 28)}}'" class="seat @if (array_search('28', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 29)}}'" class="seat @if (array_search('29', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 30)}}'" class="seat @if (array_search('30', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-3">
                            <div onclick="location.href='{{ route('book_seat', 31)}}'" class="seat @if (array_search('31', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 32)}}'" class="seat @if (array_search('32', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 33)}}'" class="seat @if (array_search('33', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 34)}}'" class="seat @if (array_search('34', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 35)}}'" class="seat @if (array_search('35', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      
                          <div class="cinema-row row-4">
                            <div onclick="location.href='{{ route('book_seat', 36)}}'" class="seat @if (array_search('36', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 37)}}'" class="seat @if (array_search('37', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 38)}}'" class="seat @if (array_search('38', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 39)}}'" class="seat @if (array_search('39', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                            <div onclick="location.href='{{ route('book_seat', 40)}}'" class="seat @if (array_search('40', array_column($bookings, 'cinema_seat_id'))) active @endif"></div>
                          </div>
                      </div>
                </div>
                <h6>Click en una silla para reservar</h6>
            </div>
        </div>
    </div>
    <!-- contact end -->
</body>
</html>
<style>
body {
	 background: #111;
}
 .theatre {
	 display: flex;
	 position: absolute;
	 top: 50px;
	 left: 50%;
	 transform: translate(-50%, -50%);
}
 .cinema-seats {
	 display: flex;
}
 .cinema-seats .seat {
	 cursor: pointer;
}
 .cinema-seats .seat:hover:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background: rgba(0, 0, 0, 0.5);
	 border-radius: 7px;
}
 .cinema-seats .seat.active:before {
	 content: '';
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background: rgba(255, 255, 255, 0.6);
	 border-radius: 7px;
}
 .left .cinema-row {
	 transform: skew(-15deg);
	 margin: 0 6px;
}
 .left .seat {
	 width: 35px;
	 height: 50px;
	 border-radius: 7px;
	 background: linear-gradient(to top, #761818, #761818, #761818, #761818, #761818, #b54041, #f3686a);
	 margin-bottom: 10px;
	 transform: skew(20deg);
	 margin-top: -32px;
	 box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
 .left .row-2 {
	 transform: skew(-13deg);
}
 .left .row-2 .seat {
	 transform: skew(18deg);
}
 .left .row-3 {
	 transform: skew(-12deg);
}
 .left .row-3 .seat {
	 transform: skew(16deg);
}
 .left .row-4 {
	 transform: skew(-11deg);
}
 .left .row-4 .seat {
	 transform: skew(15deg);
}
 .left .row-5 {
	 transform: skew(-10deg);
}
 .left .row-5 .seat {
	 transform: skew(12deg);
}
 .left .row-6 {
	 transform: skew(-9deg);
}
 .left .row-6 .seat {
	 transform: skew(10deg);
}
 .left .row-7 {
	 transform: skew(-7deg);
}
 .left .row-7 .seat {
	 transform: skew(8deg);
}
 .right {
	 margin-left: 70px;
}
 .right .cinema-row {
	 transform: skew(7deg);
	 margin: 0 6px;
}
 .right .seat {
	 width: 35px;
	 height: 50px;
	 border-radius: 7px;
	 background: linear-gradient(to top, #761818, #761818, #761818, #761818, #761818, #b54041, #f3686a);
	 margin-bottom: 10px;
	 transform: skew(-8deg);
	 margin-top: -32px;
	 box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
}
 .right .row-2 {
	 transform: skew(9deg);
}
 .right .row-2 .seat {
	 transform: skew(-10deg);
}
 .right .row-3 {
	 transform: skew(10deg);
}
 .right .row-3 .seat {
	 transform: skew(-12deg);
}
 .right .row-4 {
	 transform: skew(11deg);
}
 .right .row-4 .seat {
	 transform: skew(-15deg);
}
 .right .row-5 {
	 transform: skew(12deg);
}
 .right .row-5 .seat {
	 transform: skew(-16deg);
}
 .right .row-6 {
	 transform: skew(13deg);
}
 .right .row-6 .seat {
	 transform: skew(-18deg);
}
 .right .row-7 {
	 transform: skew(15deg);
}
 .right .row-7 .seat {
	 transform: skew(-20deg);
}
 
</style>