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
    <meta name="author" content="Ignite" />



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
    <link rel="stylesheet" href="public/assets/css/superfish.css">
    <!-- Owl Slider -->
     <link rel="stylesheet" href="public/assets/css/owl.carousel.css">
     <link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="public/assets/css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="public/assets/css/cs-select.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-border.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="public/assets/css/flaticon.css">
    <!-- Icomoon -->
    <link rel="stylesheet" href="public/assets/css/icomoon.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="public/assets/css/flexslider.css">

    <!-- Style -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Modernizr JS -->
    <script src="public/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="public/assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@php
    $hotels = \App\Models\Hotel::all();
@endphp
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{url('/')}}">Ignite</a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li><a class="active" href="{{url('/')}}">Home</a></li>
                                <li>
                                    <a href="#" class="fh5co-sub-ddown">Hotel</a>
                                    <ul class="fh5co-sub-menu">
                                        @foreach($hotels as $hotel)
                                            <li><a href="{{url('hotel',$hotel->id)}}">{{$hotel->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{url('services')}}">Services</a></li>
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
        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(public/assets/images/bg01.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <p><span>Bora Hotel</span></p>
                                        <h2>Reserve Room for Family Vacation</h2>
                                        <p>
                                            <a href="{{url('booking')}}" class="btn btn-primary btn-lg">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(public/assets/images/bg02.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <p><span>Deluxe Hotel</span></p>
                                        <h2>Make Your Vacation Comfortable</h2>
                                        <p>
                                            <a href="#" class="btn btn-primary btn-lg">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(public/assets/images/bg03.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-12 col-md-offset-0 text-center slider-text">
                                <div class="slider-text-inner js-fullheight">
                                    <div class="desc">
                                        <p><span>Luxe Hotel</span></p>
                                        <h2>A Best Place To Enjoy Your Life</h2>
                                        <p>
                                            <a href="#" class="btn btn-primary btn-lg">Book Now</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </aside>
        <div class="wrap">
            <div class="container">
                <div class="row">
                    <div id="availability">



                        <form action="{{url('checkAvailability')}}" method="GET" >
                            @csrf

                            <div class="a-col">
                                <section>
                                    <select class="cs-select cs-skin-border" name="hotel_id" required>

                                        <option value="" disabled selected>Select Hotel</option>
                                        @foreach($hotels as $hotel)
                                        <option value="{{$hotel->id}}">{{$hotel->name}}</option>

                                            @endforeach
                                    </select>
                                </section>
                            </div>
                            <div class="a-col alternate">
                                <div class="input-field">
                                    <label for="date-start">Check In</label>
                                    <input type="text" name="check_in" class="form-control" id="date-start" />
                                </div>
                            </div>
                            <div class="a-col alternate">
                                <div class="input-field">
                                    <label for="date-end">Check Out</label>
                                    <input type="text" name="check_out" class="form-control" id="date-end" />
                                </div>
                            </div>
                            <section  style="margin-top: 14px;margin-right: 5px;width: 20%;">
                                <select class="cs-select cs-skin-border" name="type">
                                    <option value="" disabled selected>Room Type</option>
                                    <option value="single">S - 1 single bed for 1 person</option>
                                    <option value="medium">M- 2 Bed for 2 Adult</option>
                                    <option value="large">L - Large Room for 2 Adults and 2 Kid</option>
                                    <option value="romantic">R - 1 bed for Couple</option>
                                    <option value="slarge">SL - 2 bed for 2 Adults and 1/2 Kids</option>
                                </select>
                            </section>
                            <div class="a-col action">
                               <button class="btn btn-primary btn-block" type="submit">Check</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-counter-section" class="fh5co-counters">
            <!-- Session Status -->
            @if (\Session::has('success'))
                <div class="alert alert-danger">
                    <ul>
                        <li style="color: #1bac00;text-align: center;">{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{\App\Models\User::all()->count()}}" data-speed="50" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">User Access</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{\App\Models\Hotel::all()->count()}}" data-speed="50" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Hotels</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{\App\Models\Room::all()->count()}}" data-speed="500" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Rooms</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{\App\Models\Booking::all()->count()}}" data-speed="50" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Rating &amp; Review</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="featured-hotel" class="fh5co-bg-color">
            <div class="container" >

                <div class="row" >
                    <div class="col-md-12" >
                        <div class="section-title text-center" >
                            <h2>Featured Hotels</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="feature-full-1col">
                        <div class="image" style="background-image: url(public/assets/images/h1.jpg);">
                            <div class="descrip text-center">
                                <p><small>For as low as</small><span>$100/night</span></p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3>Fairfield</h3>
                            <p>Featuring a outdoor lap pool with Jacuzzi within the premises the hotel is located within a close proximity to beaches,
                                Fairfield by Marriott is a beautiful leisure hotel. The hotel offers world class
                                facilities, about 1248 sq. ft of event space and amazing service. The rooms are classy,
                                some of the room offer lovely pool view and complimentary Port Wine(Pint. The hotel is 3
                                km away from  Beach.</p>
                            <p><a href="{{url('booking')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                        </div>
                    </div>

                    <div class="feature-full-2col">
                        <div class="f-hotel">
                            <div class="image" style="background-image: url(public/assets/images/h2.jpg);">
                                <div class="descrip text-center">
                                    <p><small>For as low as</small><span>$99/night</span></p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3>Nitya Resort</h3>
                                <p>Located on the Calangute Candolim Road, Nitya Resort is only 2km from the popular Calangute Beach,
                                    where you can soak in the sun and enjoy water sports. This boutique resort has one of the
                                    biggest open-air restaurants in Calangute, with a beautiful view .
                                    </p>
                                <p><a href="{{url('booking')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                            </div>
                        </div>
                        <div class="f-hotel">
                            <div class="image" style="background-image: url(public/assets/images/h3.jpg);">
                                <div class="descrip text-center">
                                    <p><small>For as low as</small><span>$99/night</span></p>
                                </div>
                            </div>
                            <div class="desc">
                                <h3>O Hotel</h3>
                                <p>The O Hotel Beach Resort and Spa is a 5-star establishment located on the Candolim Beach.
                                    The luxury resort features an infinity pool and offers free Wi-Fi to its guests. It is just 1.5 km from Sinquerium Beach and 6 km from Calangute Beach.</p>
                                <p><a href="{{url('booking')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="hotel-facilities">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Hotel Facilities</h2>
                        </div>
                    </div>
                </div>

                <div id="tabs">
                    <nav class="tabs-nav">
                        <a href="#" class="active" data-tab="tab1">
                            <i class="flaticon-restaurant icon"></i>
                            <span>Restaurant</span>
                        </a>
                        <a href="#" data-tab="tab2">
                            <i class="flaticon-cup icon"></i>
                            <span>Bar</span>
                        </a>
                        <a href="#" data-tab="tab3">

                            <i class="flaticon-car icon"></i>
                            <span>Pick-up</span>
                        </a>
                        <a href="#" data-tab="tab4">

                            <i class="flaticon-swimming icon"></i>
                            <span>Swimming Pool</span>
                        </a>
                        <a href="#" data-tab="tab5">

                            <i class="flaticon-massage icon"></i>
                            <span>Spa</span>
                        </a>
                        <a href="#" data-tab="tab6">

                            <i class="flaticon-bicycle icon"></i>
                            <span>Gym</span>
                        </a>
                    </nav>
                    <div class="tab-content-container">
                        <div class="tab-content active show" data-tab-content="tab1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_1.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Restaurant</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_2.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Bars</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_3.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Pick Up</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_4.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Swimming Pool</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_5.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Spa</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" data-tab-content="tab6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="public/assets/images/tab_img_6.jpg" class="img-responsive" alt="Image">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="super-heading-sm">World Class</span>
                                        <h3 class="heading">Gym</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
                                        <p class="service-hour">
                                            <span>Service Hours</span>
                                            <strong>7:30 AM - 8:00 PM</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>Happy Customer Says...</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimony">
                            <blockquote>
                                &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                            </blockquote>
                            <p class="author"><cite>John Doe</cite></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimony">
                            <blockquote>
                                &ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
                            </blockquote>
                            <p class="author"><cite>Rob Smith</cite></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimony">
                            <blockquote>
                                &ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
                            </blockquote>
                            <p class="author"><cite>Jane Doe</cite></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <footer id="footer" class="fh5co-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="public/assets/hotel/logo.png" width="200" height="200">
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
                                    <li><a href="#">Contact Us</a></li>
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

    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->

<!-- Javascripts -->
<script src="public/assets/js/jquery-2.1.4.min.js"></script>
<!-- Dropdown Menu -->
<script src="public/assets/js/hoverIntent.js"></script>
<script src="public/assets/js/superfish.js"></script>
<!-- Bootstrap -->
<script src="public/assets/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="public/assets/js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="public/assets/js/jquery.countTo.js"></script>
<!-- Stellar Parallax -->
<script src="public/assets/js/jquery.stellar.min.js"></script>
<!-- Owl Slider -->
<!-- // <script src="public/assets/js/owl.carousel.min.js"></script> -->
<!-- Date Picker -->
<script src="public/assets/js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="public/assets/js/classie.js"></script>
<script src="public/assets/js/selectFx.js"></script>
<!-- Flexslider -->
<script src="public/assets/js/jquery.flexslider-min.js"></script>

<script src="public/assets/js/custom.js"></script>

</body>
</html>
