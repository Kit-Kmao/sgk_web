<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">

	<!-- Page Title -->
	<title>SiemReap GoldenKids School</title>
    <link rel="icon" href="{{ url('../frontend/assets/images/sgkLogo.png') }}">
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="{{url('../frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="{{url('../frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" media="screen">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

	<link href="{{url('../frontend/assets/css/flaticon.css')}}" rel="stylesheet" media="screen">
	<!-- Swiper's CSS -->
	<link rel="stylesheet" href="{{url('../frontend/assets/css/swiper.min.css')}}">
	<!-- Animated css -->
	<link href="{{url('../frontend/assets/css/animate.css')}}" rel="stylesheet">
	<!-- Magnific Popup CSS -->
	<link href="{{url('../frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="{{url('../frontend/assets/css/slicknav.css')}}">
	<!-- Main custom css -->
	<link href="{{url('../frontend/assets/css/custom.css')}}" rel="stylesheet" media="screen">

    <!-- Favicon -->
    <link href="{{url('../frontend/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

</head>
<body data-spy="scroll" data-target="#main-navbar" data-offset="71">

    <!-- Content Section Status -->

    @yield('content')

    <!-- Content Section Ends -->

</body>

    <!-- Jquery Library File -->
    <script src="{{ url('frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ url('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ url('frontend/assets/js/wow.js') }}"></script>
    <!-- Swiper Carousel js file -->
    <script src="{{ url('frontend/assets/js/swiper.min.js') }}"></script>
    <script src="{{ url('frontend/assets/js/SwiperAnimation.min.js') }}"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{ url('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Slick Nav js file -->
    <script src="{{ url('frontend/assets/js/jquery.slicknav.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ url('frontend/assets/js/SmoothScroll.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ url('frontend/assets/js/function.js') }}"></script>

</html>
