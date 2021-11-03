<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ignite Hotels</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />



    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Stylesheets -->
    <!-- Dropdown Menu -->
    <link rel="stylesheet" href="../public/assets/css/superfish.css">
    <!-- Owl Slider -->
    <!-- <link rel="stylesheet" href="../public/assets/css/owl.carousel.css"> -->
    <!-- <link rel="stylesheet" href="../public/assets/css/owl.theme.default.min.css"> -->
    <!-- Date Picker -->
    <link rel="stylesheet" href="../public/assets/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="../public/assets/css/cs-select.css">
    <link rel="stylesheet" href="../public/assets/css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="../public/assets/css/themify-icons.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="../public/assets/css/flaticon.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="../public/assets/css/icomoon.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="../public/assets/css/flexslider.css">

    <!-- Style -->
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src="../public/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../public/assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
@php
    $hotels = \App\Models\Hotel::all();
@endphp

<div id="fh5co-header">
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <h1 id="fh5co-logo"><a href="{{url('/')}}">Ignite</a></h1>
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>
                            <a href="" class="fh5co-sub-ddown">Hotel</a>
                            <ul class="fh5co-sub-menu">
                                @foreach($hotels as $hotel)
                                    <li><a href="{{url('hotel',$hotel->id)}}">{{$hotel->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="active" href="{{url('services')}}">Services</a></li>
                        @if(Auth::user())
                            <li>

                                <a href="{{url('profile')}}">
                                    <i class="fa fa-user"></i>
                                    {{Auth::user()->name}}</a></li>
                            <li><a href="{{url('logout')}}">Logout</a></li>

                        @else
                            <li><a href="{{url('login')}}">Login</a></li>
                        @endif
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

</div>
<!-- end:fh5co-header -->
@yield('body_parts')
<footer id="footer" class="fh5co-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="../public/assets/hotel/logo.png" width="200" height="200">
                <div class="copyright">


                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Company</h3>
                        <ul class="link">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Customer Care</a></li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Our Facilities</h3>
                        <ul class="link">
                            <li><a href="#">Resturant</a></li>
                            <li><a href="#">Bars</a></li>
                            <li><a href="#">Pick-up</a></li>
                            <li><a href="#">Swimming Pool</a></li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3>IGNITE</h3>
                        <p><small>&copy; 2021 IGNITE HOTELS <br> All Rights Reserved. <br>
                                Designed by <a href="#" target="_blank">ZAWAD ZAMIL</a></small></p>
                        <form action="#" id="form-subscribe">

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="social-icons">
                    <li>
                        <a href="#"><i class="icon-twitter-with-circle"></i></a>
                        <a href="#"><i class="icon-facebook-with-circle"></i></a>
                        <a href="#"><i class="icon-instagram-with-circle"></i></a>
                        <a href="#"><i class="icon-linkedin-with-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<!-- Javascripts -->
<script src="../public/assets/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="../public/assets/js/hoverIntent.js"></script>
<script src="../public/assets/js/superfish.js"></script>
<!-- Bootstrap -->
<script src="../public/assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../public/assets/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="../public/assets/js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="../public/assets/js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="../public/assets/js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="../public/assets/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="../public/assets/js/classie.js"></script>
<script src="../public/assets/js/selectFx.js"></script>
<!-- Flexslider -->
<script src="../public/assets/js/jquery.flexslider-min.js"></script>

<script src="../public/assets/js/custom.js"></script>

</body>
</html>
