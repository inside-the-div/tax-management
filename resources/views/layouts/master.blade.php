<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="John Doe">
	<meta name="developer" content="http://nasirkhan.me">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- fev-icon -->
	<link rel="shortcut icon" href="" />

	<!-- =================css file start=================== -->
	<!-- font awesome -->
	<link rel="stylesheet" href="{{URL::asset('css/all.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<!-- owl carasel slider css -->
	<link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

	<!-- animate css -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">

    <!-- main css -->
    <link rel="stylesheet" href="{{URL::asset('css/default.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
	<!-- =================css file end=================== -->

	<!-- =================css file cdn start=================== -->

	<!-- font awesome cdn -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

	<!-- =================css file cdn end=================== -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- ========================website title =======================-->
	@yield('title')
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
	
	   <header>
	<!-- log and nav area -->
	    <div id="logo-and-nav" class="main-menu-logo bg-none">
	        <nav class="navbar navbar-expand-lg navbar-light">
	            <div class="container">
	              <a class="navbar-brand" href="/">কবিতা</a>
	              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="navbar-toggler-icon"></span>
	              </button>
	              <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav ml-auto">
	                  <li class="nav-item ">
	                    <a class="nav-link @if(Request::is('poems')) active @endif" href="">কবিতা</span></a>
	                  </li>

	                  <li class="nav-item ">
	                    <a class="nav-link @if(Request::is('storys')) active @endif" href="">গল্প</span></a>
	                  </li>             

	                  <li class="nav-item ">
	                    <a class="nav-link @if(Request::is('novels')) active @endif" href="">উপন্যাস</span></a>
	                  </li>

	                  <li class="nav-item ">
	                    <a class="nav-link @if(Request::is('about')) active @endif" href="">আমার সম্পর্কে</span></a>
	                  </li>
	                  <li class="nav-item ">
	                    <a class="nav-link @if(Request::is('contact')) active @endif" href="">যোগাযোগ</span></a>
	                  </li>
	                </ul>
	              </div>
	          </nav>
	      </div>
	   </header>



	<section id="content" class="section-margin-y-30">
		<div class="container">
			@yield('content')
		</div>
	</section>



	<footer>
		<div class="container">





		</div>
	</footer>
	<div class="text-center copy-right">
		<p class="text-white font-16 font-josefin">CopyRight &copy; Nasir Khan || 2019</p>
	</div>

	<!--  jQuery js  -->
	 <script src="{{URL::asset('javascript/jquery.js')}}"></script>
	 <!-- Popper Js  -->
	 <script src="{{URL::asset('javascript/pooper.js')}}"></script>
	 <!-- Bootstrap 4 Js  -->
	 <script src="{{URL::asset('javascript/bootstrap.min.js')}}"></script>
	 <!-- particles 4 Js  -->
	 <!-- <script src="assets/js/particles.min.js"></script> -->
	 <!-- Tyoed 4 Js  -->
	 <!-- <script src="assets/js/typed.js"></script> -->
	 <!-- OWL Carousel JS  -->
	 <!-- <script src="assets/js/owl.carousel.min.js"></script> -->

	 <script src="{{URL::asset('javascript/custom.js')}}"></script>

	 @yield('custom-js')
</body>
</html>