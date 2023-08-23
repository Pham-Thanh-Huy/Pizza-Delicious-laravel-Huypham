<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pizza - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{asset('assets-admin\images\logo-pizza.png')}}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{asset('css/form.css')}}">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      @if(isset($user_name))
        @if($user_permission == 'admin')
      <p style="font-size:12px; margin-top:15px"><b style="color:white">Xin chào {{$user_name}}-Admin</b> <a href="{{url('logout')}}">Đăng xuất</a></p>
        @else
      <p style="font-size:12px; margin-top:15px"><b style="color:white">Xin chào {{$user_name}}</b> <a href="{{url('logout')}}">Đăng xuất</a></p>
        @endif
      @else
      <p style="font-size:12px; margin-top:15px"> <a href="{{url('login')}}">Đăng nhập</a></p>
      @endif

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{route('menu')}}" class="nav-link">Menu</a></li>
          <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
          @if(isset($user_permission) && $user_permission == 'admin')
          <li class="nav-item"><a href="{{route('admin.dashboard')}}" class="nav-link">Admin</a></li>
          @endif
        </ul>
      </div>

    </div>


  </nav>

  <div id="content">@yield('content')</div>





  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>