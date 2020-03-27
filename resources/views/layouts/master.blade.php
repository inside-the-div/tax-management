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
			<nav class="navbar navbar-expand-lg navbar-dark bg-1">
			  <div class="container">
			    <a class="navbar-brand font-roboto" href="index.html">LOGO</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>

			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			      <ul class="navbar-nav mr-auto">
			        <li class="nav-item ">
			          <a class="nav-link font-roboto text-light" href="index.html">Home </a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link font-roboto text-light" href="contact.html" id="about">About</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link font-roboto text-light" href="contact.html">Contact</a>
			        </li>
			      </ul>

				   <!-- Right Side Of Navbar -->
				   <ul class="navbar-nav ml-auto">
				       <!-- Authentication Links -->
				       @guest
				           <li class="nav-item">
				               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				           </li>
				           @if (Route::has('register'))
				               <li class="nav-item">
				                   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
				               </li>
				           @endif
				       @else
				           <li class="nav-item dropdown">
				               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				                   {{ Auth::user()->name }} <span class="caret"></span>
				               </a>

				               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

									<a class="dropdown-item" href="{{route('user-profile')}}">
									    profile
									</a>

									<a class="dropdown-item" href="{{route('tax-profile')}}">
									    Tax Profile
									</a>


				                   <a class="dropdown-item" href="{{ route('logout') }}"
				                      onclick="event.preventDefault();
				                                    document.getElementById('logout-form').submit();">
				                       {{ __('Logout') }}
				                   </a>

				                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                       @csrf
				                   </form>
				               </div>
				           </li>
				       @endguest
				   </ul>

			    </div>
			  </div>
			</nav>
	   </header>

	
	<section>
		<div class="container">
			<div class="row" >
			  <div class="col-12">
			    <div class="page-title-area">
			      @yield('page-top')
			      
			      @if ($errors->any())
			          
			        @foreach ($errors->all() as $error)
			            <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
			              {{$error}}
			              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                <span aria-hidden="true">&times;</span>
			              </button>
			            </div>
			        @endforeach
			          
			      @endif
			      <div id="success-message">
			      @if(session()->has('success'))
			          <div class="alert alert-success alert-dismissible fade show rounded-0" role="alert">
			            {{ session()->get('success') }}
			            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			      @endif

			      </div>
			     

			    </div>
			  </div>
			</div>
		</div>
	</section>



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