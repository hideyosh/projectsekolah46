<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tata Usaha|SMKN-46 Jakarta</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('template/front/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template/front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="{{asset('template/front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('template/front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/front/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/front/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/front/lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('template/front/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>SMKN</span>46Jakarta</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<a href="#body"><img src="{{asset('template/front/img/logo.png')}}" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>

          <li class="menu-has-children"><a href="">Account</a>
            <ul>
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Register</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>TATA USAHA SMKN 46</h1>
      <h2>Mendata barang yang ada dan barang keluar..</h2>
      <img src="{{asset('template/front/img/hero-img.png')}}" alt="Hero Imgs">
      <!--<a href="#get-started" class="btn-get-started scrollto">Get Started</a>-->
      <!--<div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div>-->
    </div>
  </section><!-- #hero -->



  <!-- JavaScript Libraries -->
  <script src="{{asset('template/front/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/front/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('template/front/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/front/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('template/front/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('template/front/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('template/front/lib/modal-video/js/modal-video.js')}}"></script>
  <script src="{{asset('template/front/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template/front/lib/wow/wow.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('template/front/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('template/front/js/main.js')}}"></script>

</body>
</html>
