<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">

    @yield('title')
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-1 py-2">
      <div class="container">
        <a class="navbar-brand font-roboto font-30" href="/">Tax</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link font-roboto text-light" href="index.html">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-roboto text-light" href="{{route('tax-form')}}" id="about">Tax Form</a>
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
                         <a id="navbarDropdown" class="nav-link dropdown-toggle font-20 text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

          					<a class="dropdown-item" href="{{route('user-profile')}}">
          					    profile
          					</a>

          					<a class="dropdown-item" href="{{route('tax-profile')}}">
          					    Tax Profile
          					</a>
          					<a class="dropdown-item" href="{{route('details-income')}}">
          					    Income Details
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


 @if($errors->any() || session()->has('success'))
	<section class="mt-3">
		<div class="container">
			<div class="row" >
			  <div class="col-12">
			     
			       @if($errors->any())    
			        @foreach ($errors->all() as $error)
			            <div class="alert alert-danger alert-dismissible fade show rounded-0 " role="alert">
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
	</section>
   @endif

		@yield('content')








    <footer class="mt-3 bg-1 ">
      <div class="container">
        
        <div class="row py-5">
          <div class="col-lg-4">
            <h3 class="font-roboto font-28 text-light border-bottom">LOGO</h3>
            <ul class="mt-2">
              <li class="font-roboto text-light">Address: This is address</li>
              <li class="font-roboto text-light">Email: admin@gmail.com</li>
              <li class="font-roboto text-light">Phone: +880 1637017926</li>
            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="font-roboto font-28 text-light border-bottom">Quick Links</h3>
            <ul class="mt-2">
              <li><a href="" class="font-roboto text-light">Home</a></li>
              <li><a href="" class="font-roboto text-light">About</a></li>
              <li><a href="contact.html" class="font-roboto text-light">Contact</a></li>
              <li><a href="registration.html" class="font-roboto text-light">Registration</a></li>
            </ul>
          </div>


          <div class="col-lg-4">
            <h3 class="font-roboto font-28 text-light border-bottom">Follow Us</h3>
            <ul class="social-link mt-2">
              <li><a href="" class="font-roboto text-light btn btn-dark rounded-0 "><i class="fa fa-facebook"></i></a></li>
              <li><a href="" class="font-roboto text-light btn btn-dark rounded-0 "><i class="fa fa-instagram"></i></a></li>
              <li><a href="" class="font-roboto text-light btn btn-dark rounded-0 "><i class="fa fa-twitter"></i></a></li>
              <li><a href="" class="font-roboto text-light btn btn-dark rounded-0 "><i class="fa fa-linkedin"></i></a></li>
              
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center pb-3">
            <p class="m-0 text-light">copyright &copy; Shuci</p>
          </div>
        </div>
      </div>
    </footer>



  <!-- modal  -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <label for="email">Email*</label>
            <input type="email" id="email" class="form-control rounded-0" placeholder="Email">
            <br>
            <label for="email">Password*</label>
            <input type="password" id="password" class="form-control rounded-0" placeholder="Password">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="bg-danger btn-1  font-roboto " data-dismiss="modal">Close</button>
          <button type="button" class="bg-1 btn-1 font-roboto">Login</button>
        </div>
      </div>
    </div>
  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    @yield('custom-js')
  </body>
</html>