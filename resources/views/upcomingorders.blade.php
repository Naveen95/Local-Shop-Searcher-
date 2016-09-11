<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Personal Info| Luxen Premium Hotel Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="img/favicon.ico" />
<!-- CSS FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/2035.responsive.css">

<script src="js/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>
<!-- Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper">
	<div class="header"><!-- Header Section -->
		<div class="pre-header"><!-- Pre-header -->
			<div class="container">
				<div class="row">
					<div class="pull-left pre-address-b"></div>
					<div class="pull-right">
						<div class="pull-left">
							<ul class="pre-link-box">
								@if(Auth::guest())
								<li><a href="{{url('/about')}}">ABOUT</a></li>
								<li><a href="{{url('/contact')}}">CONTACT</a></li>
								<li><a href="/signup">SIGN UP</a></li>
								<li><a href="login">LOG IN</a></li>
								@endif

								@if(Auth::user())

								<li><a href="{{url('/about')}}">ABOUT</a></li>
								<li><a href="{{url('/contact')}}">CONTACT</a></li>


								@endif
							</ul>
						</div>
						<div class="pull-right">
							<div class="language-box">
								<ul>
									<li><a href="#"><img alt="language" src="temp/english.png"><span class="language-text">{{Auth::user()->name}}</span></a></li>
									<li><a href="/logout"><span class="language-text">Logout</span></a></li>
									<li><a href="/personalinfo"><span class="language-text">Personal Settings</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-header"><!-- Main-header -->
			<div class="container">
				<div class="row">
					<div class="pull-left">
						<div class="logo">
							<a href="{{url('/index')}}"><img alt="Logo" src="img/logo.png" class="img-responsive" /></a>
						</div>
					</div>
					<div class="pull-right">
						<div class="pull-left">
							<nav class="nav">
								<ul id="navigate" class="sf-menu navigate">
									<li class="parent-menu"><a href="{{url('/index')}}">HOMEPAGE</a>
										<ul>
											<li><a href="index.html">Slider Homepage</a></li>
											<li><a href="index-full-screen.html">Full Screen Homepage</a></li>
										</ul>
									</li>
									<li class="parent-menu"><a href="#">FEATURES</a>
										<ul>
											<li><a href="#">2 Homepages</a></li>
											<li><a href="#">Ajax/PHP Booking Form</a></li>
											<li><a href="#">Ultra Responsive</a></li>
											<li><a href="under-construction.html">Countdown Page</a></li>
											<li><a href="#">2 Category Pages</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									<li class="parent-menu"><a href="#">PAGES</a>
										<ul>
											<li><a href="about.html">About</a></li>
											<li><a href="team.html">Team</a></li>
											<li><a href="category-grid.html">Category Grid</a></li>
											<li><a href="category-list.html">Category List</a></li>
											<li><a href="room-single.html">Room Details</a></li>
											<li><a href="reservation-form-dark.html">Dark Reservation Form</a></li>
											<li><a href="reservation-form-light.html">Light Reservation Form</a></li>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-details.html">Blog Single</a></li>
											<li><a href="left-sidebar-page.html">Left Sidebar Page</a></li>
											<li><a href="right-sidebar-page.html">Right Sidebar Page</a></li>
											<li><a href="under-construction.html">Under Construction</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
									</li>
									<li><a href={{url('/news')}}>NEWS</a></li>
									<li class="active"><a href="{{url('/contact')}}">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb breadcrumb-1 pos-center">
		<h1>Personal Info</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">


			
					<div class="contact-form margint60"><!-- Contact Form -->

						<h1><center>Upcoming orders</center></h1>
						@foreach($order_details as $order_detail)
						{{$order_detail->order_name}}
						{{$order_detail->order_value}}
						{{$order_detail->order_date}}
						@endforeach


						<center><h2>


						</h2></center></br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer margint40"><!-- Footer Section -->
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-sm-2 footer-logo">
						<img alt="Logo" src="img/logo.png" class="img-responsive" >
					</div>
					<div class="col-lg-10 col-sm-10">
						<div class="col-lg-3 col-sm-3">
							<h6>TOUCH WITH US</h6>
							<ul class="footer-links">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Google +</a></li>
								<li><a href="#">otels.com</a></li>
								<li><a href="#">Tripadvisor</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-3">
							<h6>ABOUT LUXEN</h6>
							<ul class="footer-links">
								<li><a href="404.html">Error Page</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-details.html">Blog Single</a></li>
								<li><a href="category-grid.html">Category Grid</a></li>
								<li><a href="category-list.html">Category List</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-3">
							<h6>PAGES SITE</h6>
							<ul class="footer-links">
								<li><a href="contact.html">Contact</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="index-full-screen.html">Home Full Screen</a></li>
								<li><a href="left-sidebar-page.html">Left Sidebar Page</a></li>
								<li><a href="right-sidebar-page.html">Right Sidebar Page</a></li>
								<li><a href="room-single.html">Room Single</a></li>
								<li><a href="under-construction.html">Under Construction</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-3">
							<h6>CONTACT</h6>
							<ul class="footer-links">
								<li><p><i class="fa fa-map-marker"></i> Lorem ipsum dolor sit amet lorem Victoria 8011 Australia </p></li>
								<li><p><i class="fa fa-phone"></i> +61 3 8376 6284 </p></li>
								<li><p><i class="fa fa-envelope"></i> <a href="mailto:info@2035themes.com">info@2035themes.com</a></p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pre-footer">
			<div class="container">
				<div class="row">
					<div class="pull-left"><p>© LUXEN OTELS 2014</p></div>
					<div class="pull-right">
						<ul>
							<li><p>CONNECT WITH US</p></li>
							<li><a><img alt="Facebook" src="temp/orkut.png" ></a></li>
							<li><a><img alt="Tripadvisor" src="temp/tripadvisor.png" ></a></li>
							<li><a><img alt="Yelp" src="temp/hyves.png" ></a></li>
							<li><a><img alt="Twitter" src="temp/skype.png" ></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- JS FILES -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.pack.1.4.1.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="js/gmaps.js"></script>
<script src="js/main.js"></script>
<!--
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
-->
</body>
</html>