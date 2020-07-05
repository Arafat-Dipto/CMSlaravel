<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content Management System</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free/css/all.css') }}">

    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @stack('css')
</head>
<body>
@include('partials.header')



@yield('content')

@include('partials.footer')

<!--scripts-->
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>



@stack('js')
</body>
</html>