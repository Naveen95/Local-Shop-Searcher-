<?php

use App\Http\Requests;
use Illuminate\Http\Request;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>SPAZAA</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="/img/favicon.ico" />
<!-- CSS FILES -->
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/flexslider.css">
<link rel="stylesheet" href="/css/prettyPhoto.css">
<link rel="stylesheet" href="/css/datepicker.css">
<link rel="stylesheet" href="/css/selectordie.css">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/2035.responsive.css">

<script src="/js/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>

</head>
<body>

<div id="wrapper">
	<div class="header"><!-- Header Section -->

		<div class="pre-header"><!-- Pre-header -->
			<div class="container">
				<div class="row">
					
					<div class="pull-right">
						<div class="pull-left">
							<ul class="pre-link-box">
								@if(Auth::guest())
								<b><li><a href="{{url('/about')}}">ABOUT</a></li>
								<li><a href="{{url('/contact')}}">CONTACT</a></li>
								<li><a href="/signup">SIGN UP</a></li>
								<li><a href="#">LOG IN</a></li></b>
								@endif

								@if(Auth::user())

								<b><li><a href="{{url('/about')}}">ABOUT</a></li>
								<li><a href="{{url('/contact')}}">CONTACT</a></li>
								<li><a href="#">{{Auth::user()->name}}</a></li>
								<li><a href="/logout">Logout</a></li></b>


								@endif

							</ul>
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
							<a href="index.html"><img alt="Logo" src="/img/logo.png" class="img-responsive" /></a>
						</div>
					</div>
					<div class="pull-right">
						<div class="pull-left">
							<nav class="nav">
								<div class="button-style-1 margint45">
								<a href="#"><i class="fa fa-envelope"></i>Business With Us</a>
							</div>
							
							</nav>
						</div>
						<div class="pull-right">
							<div class="button-style-1 margint45">
								<a href="#"><i class="fa fa-calendar"></i>BOOK NOW</a>
							</div>
						</div>
						<div class="pull-right">
							<div class="button-style-1 margint45">
								<a href="#"><i class="fa fa-phone"></i>96000 71008</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumb breadcrumb-1 pos-center">
		<h1>
			
			@foreach($place_details as $place_details)

				{{$place_details->name}}

			

			</h1>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="container">
			<div class="row">
				<br>
				<div class="col-lg-12 clearfix"><!-- Room Information -->
					<div class="col-lg-8 clearfix col-sm-8">
						<h4>ROOM DESCRIPTION</h4>
						<p class="margint30"> {{$place_details->description}} </p>

						
					</div>
					<div class="col-lg-4 clearfix col-sm-4">
						<div class="room-services"><!-- Room Services -->
							<h4>SERVICES</h4>
							<ul class="room-services">

							@if($place_details->sauna == "A")
								<li><i class="fa fa-calendar"></i> Sauna </li>	
							@elseif($place_details->sauna == "NA")
							@endif


							@if($place_details->physiotherapist == "A")
								<li><i class="fa fa-laptop"></i> Physiotherapist </li>
							@elseif($place_details->physiotherapist == "NA")
							@endif


							@if($place_details->shower == "A")
								<li><i class="fa fa-umbrella"></i> Shower</li>
							@elseif($place_details->shower == "NA")
							@endif


							@if($place_details->steam == "A")
								<li><i class="fa fa-phone"></i> Steam </li>
							@elseif($place_details->steam == "NA")
							@endif


							@if($place_details->washroom == "A")
								<li><i class="fa fa-clock-o"></i> Washroom </li>
							@elseif($place_details->washroom == "NA")
							@endif


							@if($place_details->ac == "A")
								<li><i class="fa fa-calendar"></i> Air Conditioned </li>
							@elseif($place_details->ac == "NA")
							@endif


							@if($place_details->wifi == "A")
								<li><i class="fa fa-laptop"></i> Wifi </li>
							@elseif($place_details->wifi == "NA")
							@endif


							@if($place_details->lc == "A")
								<li><i class="fa fa-umbrella"></i> Loyalty Card </li>
							@elseif($place_details->lc == "NA")
							@endif


							@if($place_details->parking == "A")
								<li><i class="fa fa-phone"></i> Parking </li>
							@elseif($place_details->parking == "NA")
							@endif


							@if($place_details->hs == "A")
								<li><i class="fa fa-clock-o"></i> Home Service Available </li>
							@elseif($place_details->hs == "NA")
							@endif	
							@endforeach						
							</ul>
							
							
						</div>
						
						
					</div>
					<div class="col-lg-8 clearfix margint40 room-single-tab"><!-- Room Tab -->
						<div class="tab-style-2 ">
							<ul class="tabbed-area tab-style-nav clearfix">
								<li class="active"><h6><a href="#tab1s">Overview</a></h6></li>
								<li class=""><h6><a href="#tab2s">Services</a></h6></li>
								<li class=""><h6><a href="#tab3s">Map</a></h6></li>
							</ul>
							<div class="tab-content tab-style-content">
								<div class="tab-pane fade active in" id="tab1s">
									
									<div class="col-lg-12 margint30">
										<p>{{$place_details->overview}}
										</p>
									</div>
								</div>
								<div class="tab-pane fade" id="tab2s">
									
									<div class="col-lg-12 margint30">
										<ul> Services</ul>
										<li>Body Massage</Li>
										<li>Body Massage</Li>
										<li>Body Massage</Li>
										<li>Body Massage</Li>
										
									</div>
								</div>
								<div class="tab-pane fade" id="tab3s">
									
									<div class="col-lg-12 margint30">
										<iframe width="700" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='+{{$place_details->latitude}}+','+{{$place_details->longitude}}+'&hl=es;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?q='+data.lat+','+data.lon+'&hl=es;z=14&amp;output=embed" style="color:#0000FF;text-align:left" target="_blank">See map bigger</a></small>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 clearfix"><!-- Sidebar -->
					
					<br><br>
					<div class="luxen-widget news-widget">
						<div class="title">
							<h5>CONTACT</h5>
						</div>
						<ul class="footer-links">
							<li><p><i class="fa fa-map-marker"></i> {{$place_details->address}}</p></li>
							<li><p><i class="fa fa-phone"></i>{{$place_details->phone}}</p></li>
							<li><p><i class="fa fa-envelope"></i>{{$place_details->email}}</p></li>
						</ul>
					</div>
				</div>
				</div>
				
				
				<div class="col-lg-12"><!-- Room Gallery Slider -->
					<div class="room-gallery">
						<div class="margint40 marginb20"><h4>PHOTO GALLERY</h4></div>
						<div class="flexslider-thumb falsenav">
							<ul class="slides">
								<li data-thumb="/pics/1.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/1.jpg"/></li>
								<li data-thumb="/pics/2.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/2.jpg"/></li>
								<li data-thumb="/pics/3.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/3.jpg"/></li>
								<li data-thumb="/pics/4.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/4.jpg"/></li>
								<li data-thumb="/pics/5.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/5.jpg"/></li>
								<li data-thumb="/pics/6.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/6.jpg"/></li>
								<li data-thumb="/pics/7.jpg"><img alt="Slider 1" class="img-responsive" src="/pics/7.jpg"/></li>


							</ul>
						</div>
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
						<img alt="Logo" src="/img/logo.png" class="img-responsive" >
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
							<h6>ABOUT SPAZAA</h6>
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
								<li><p><i class="fa fa-map-marker"></i> Pallikaranai , Chennai	</p></li>
								<li><p><i class="fa fa-phone"></i> +91 9600071008 </p></li>
								<li><p><i class="fa fa-envelope"></i> <a href="mailto:s22creativestudio@gmail.com">s22creativestudio@gmail.com</a></p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pre-footer">
			<div class="container">
				<div class="row">
					<div class="pull-left"><p>© SPAZAA 2016	</p></div>
					<div class="pull-right">
						<ul>
							<li><p>CONNECT WITH US</p></li>
							<li><a><img alt="Facebook" src="/temp/orkut.png" ></a></li>
							<li><a><img alt="Tripadvisor" src="/temp/tripadvisor.png" ></a></li>
							<li><a><img alt="Yelp" src="/temp/hyves.png" ></a></li>
							<li><a><img alt="Twitter" src="/temp/skype.png" ></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- JS FILES -->
<script src="/js/vendor/jquery-1.11.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/retina-1.1.0.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/superfish.pack.1.4.1.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/selectordie.min.js"></script>
<script src="/js/jquery.slicknav.min.js"></script>
<script src="/js/jquery.parallax-1.1.3.js"></script>
<script src="/js/jquery.simpleWeather.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>