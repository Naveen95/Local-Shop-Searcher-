<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Spazaa</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" href="img/favicon.ico" />
<!-- CSS FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/datepicker.css">
<link rel="stylesheet" href="css/selectordie.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/2035.responsive.css">
<link rel="stylesheet" href="css/spa-1.css">

<script src="js/vendor/modernizr-2.8.3-respond-1.1.0.min.js"></script>

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
							<a href="{{url('/index')}}"><img alt="SPAZAA"  class="img-responsive" /></a>
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
								@if(Auth::guest())
								<a href="/login"><i class="fa fa-calendar"></i>LOGIN</a>
								@endif
								@if(Auth::user())
								<a href="#"><i class="fa fa-calendar"></i>{{Auth::user()->name}}</a>
								@endif
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
	<div class="slider slider-home"><!-- Slider Section -->
		<div class="flexslider slider-loading falsenav">
			<ul class="slides">
				<li>
					<div class="slider-textbox clearfix">
						<div class="container">
							<div class="row">
                    			<div class="slider-bar pull-left">WELCOME TO Spazaa </div>
                    			<div class="slider-triangle pull-left"></div>
							</div>
						</div>
						<div class="container">
							<div class="row">
                    			<div class="slider-bar-under pull-left">5 STAR SUPPORT</div>
                    			<div class="slider-triangle-under pull-left"></div>
							</div>
						</div>
					</div>
					<img alt="Slider 1" class="img-responsive" src="img/slide/1.jpg" />
				</li>
				<li>
					<div class="slider-textbox clearfix">
						<div class="container">
							<div class="row">
                    			<div class="slider-bar pull-left">WELCOME SPAZAA</div>
                    			<div class="slider-triangle pull-left"></div>
							</div>
						</div>
						<div class="container">
							<div class="row">
                    			<div class="slider-bar-under pull-left">5 STAR SUPPORT</div>
                    			<div class="slider-triangle-under pull-left"></div>
							</div>
						</div>
					</div>
					<img alt="Slider 1" class="img-responsive" src="img/slide/2.jpg" />
				</li>
			</ul>
		</div>
		<div class="book-slider">
		
		
			<div class="search-bar-container" style="
    /* width: 800px; */
    /* margin: auto; */
    margin-left: 350px;
">
						<noscript>
							&amp;amp;amp;lt;input type="hidden" value="true" name="values_in_form"/&amp;amp;amp;gt;
						</noscript>
						<div class="search-container" style="
 
">
							<div class="city-container" style="
    float: left;
">
	                <a href="../icon/map-marker" style="
    float: left;
    margin-top: 8px;
    margin-left: 8px;
"><i class="fa fa-map-marker" aria-hidden="true" style="
    float: left;
"></i> <span class="sr-only"></span></a>
	                <div id="cityPicker" data-consult-city="Chennai" class="consult-mobile-city city-picker location-placeholder city-dropdown-activator listing-city-dropdown-activator location-placeholder-grey" style="
    float: left;
    width: 80%;
">
	                    		<input type="text" name="chennai" value="chennai">Chennai</input>
	                    								
																		


								
	                </div>
	                <div class="border-right-box"></div>
	            </div>
							<div id="cerebroLocationContainer" class="location-container cerebro-loc-containers">
	              <span class="location-placeholder " id="locationPlaceholder" style="display: block;">
	                  	                  		                  	         <input type="text" name ="bm" value = "bm"></input>     </span>
	              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">Anna Nagar</span><input name="locality" class="location-input  location-hide  cerebro-location-input ui-autocomplete-input" id="locationInput" type="text" placeholder="Locality" value="" autocomplete="off" style="display: none;">
	          	</div>
	          </div>
	          <div class="keywords-container" id="cerebroKeywordsContainer" style="
    height: 34px;
    width: 283px;
">
	              <div class="search_grey">
									<a href="../icon/search"><i class="fa fa-search" aria-hidden="true"></i> </a>
	              </div>
	              	                  	              	              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">SPAZAA Profile</span><input name="q" type="text" id="keywordsInput" class="keywords-input cerebro-keywords-input ui-autocomplete-input" placeholder=" Spas and Salonsters etc" value="" autocomplete="off" style="
    height: 34px;
	width: 283px;
">
	          </div>
						<div class="button-style-1 widgetSearchIcon">
								<a href="{{url('/category-list')}}"><i class="fa fa-calendar"></i>Search</a>
							</div>
					</div>
		</div>
		<div class="bottom-book-slider">
			<div class="container">
				<div class="row pos-center">
					<ul>
						<li><i class="fa fa-shopping-cart"></i> EASY BOOKING</li>
						<li><i class="fa fa-globe"></i> 24 HOURS SERVICES</li>
						<li><i class="fa fa-coffee"></i> DOOR STEP SERVICES</li>
						<li><i class="fa fa-windows"></i> BEST DEALS</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class = "form">
	<form action = "{{url('/search')}}" method="POST" name="searchform" onsubmit="return validateForm()">
	{{csrf_field()}}

									<div class="form-group">
									<label class="col-lg-3 control-label">City</label>
									<div class="col-lg-5">
									
										<select class="form-control" name="city">
											<option value="">-- Select a City --</option>
											<option value="chennai">Chennai</option>
											<option value="bangalore">Bangalore</option>
											<option value="mumbai">Mumbai</option>
											<option value="coimbatore">Coimbatore</option>
											<option value="madurai">Madurai</option>
											<option value="goa">Goa</option>
											<option value="kashmir">Kashmir</option>
										</select>

										
									</div>
								</div>

									<div class="form-group">
									<label class="col-lg-3 control-label">Area</label>
									<div class="col-lg-5">
										<input type = "hidden" value = "" name="area">
										<select class="form-control" name="area">
											<option value="">-- Select an Area --</option>
											<option value="ANR">Anna Nagar</option>
											<option value="krm">koramangala</option>
											
											
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-lg-3 control-label">Type</label>
									<div class="col-lg-5">
										<input type = "hidden" value = "" name="type">
										<select class="form-control" name="type">
											<option value="">-- Select a Category --</option>
											<option value="spa">Spa</option>
											<option value="hm">Haircut for Men</option>
											<option value="hw">Haircut for women</option>
											<option value="waxing">Waxing</option>
											<option value="shaving">Shaving</option>
											<option value="bm">Body Massage</option>
											<option value="facial">Facial</option>
											<option value="manicure">Manicure</option>
											<option value="pedicure">Pedicure</option>
											<option value="threading">Threading</option>
											<option value="bleaching">Bleaching</option>
											<option value="makeup">Make-up</option>
											
										</select>
									</div>
								</div>
	<input type="submit" name="submit"></input>
	</form>
	</div>
	<div class="content"><!-- Content Section -->
		<div class="about clearfix"><!-- About Section -->
			<div class="container">
				<div class="row">
					<div class="about-title pos-center">
						<h2>WELCOME TO SPAZAA</h2>
						<div class="title-shape"><img alt="Shape" src="img/shape.png"></div>
						<p>Spazaa<span class="active-color"></span> welcomes you</p>
					</div>
					<div class="otel-info margint60">
						<div class="col-lg-4 col-sm-12">
							<div class="title-style-1 marginb40">
								<h5>GALLERY</h5>
								<hr>
							</div>
							<div class="flexslider">
								<ul class="slides">
									<li><img alt="Slider 1" class="img-responsive" src="img/slide/1.jpg" /></li>
									<li><img alt="Slider 1" class="img-responsive" src="img/slide/2.jpg" /></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>ABOUT US</h5>
								<hr>
							</div>
							<p>Spazaa Welcomes you</p>
							<p>Spazaa Welcomes you</p>
							<p>Spazaa Welcomes you</p>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="title-style-1 marginb40">
								<h5>OUR BLOG</h5>
								<hr>
							</div>
							<div class="home-news">
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">20<hr /></div>MAY</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">News from us from now</a></h6>
										<p class="margint10">Hello  <a class="active-color" href="#">[...]</a></p>
									</div>
								</div>
								<div class="news-box clearfix">
									<div class="news-time pull-left">
										<div class="news-date pos-center"><div class="date-day">20<hr /></div>MAY</div>
									</div>
									<div class="news-content pull-left">
										<h6><a href="#">Blah</a></h6>
										<p class="margint10">Blah Blah Blah<a class="active-color" href="#">[...]</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-rooms margint30 clearfix"><!-- Explore Rooms Section -->
			<div class="container">
				<div class="row">	
					<div class="title-style-2 marginb40 pos-center">
						<h3>SERVICES</h3>
						<hr>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="img/small/1.jpg">
								<div class="home-room-details">
									<h5><a href="#">SPA</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>Nothing much[...]</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>Rs.3000<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<img alt="Room Images" class="img-responsive" src="img/small/2.jpg">
								<div class="home-room-details">
									<h5><a href="#">UNISEX SALOON</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>this is spazaa</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>Rs.1500<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="home-room-box">
							<div class="room-image">
								<div class="room-features">FEATURED</div>
								<img alt="Room Images" class="img-responsive" src="img/small/3.jpg">
								<div class="home-room-details">
									<h5><a href="#">BODY MASSAGE</a></h5>
									<div class="pull-left">
										<ul>
											<li><i class="fa fa-calendar"></i></li>
											<li><i class="fa fa-flask"></i></li>
											<li><i class="fa fa-umbrella"></i></li>
											<li><i class="fa fa-laptop"></i></li>
										</ul>
									</div>
									<div class="pull-right room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="room-details">
								<p>know something about spazaa</p>
							</div>
							<div class="room-bottom">
								<div class="pull-left"><h4>Rs.4000<span class="room-bottom-time">/ Day</span></h4></div>
								<div class="pull-right">
									<div class="button-style-1">
										<a href="#">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="parallax123" class="parallax parallax-one clearfix margint60"><!-- Parallax Section -->
			<div class="support-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>CALL US</h4>
										<p class="margint20">know something about spazaa</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-phone"></i></div>
										<h4>PHONE NUMBER</h4>
										<p class="margint20"><br />+91 9524 02 0009</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>SEND US E-MAIL</h4>
										<p class="margint20">know something about spazaa</p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-envelope"></i></div>
										<h4>E-MAIL ADDRESS</h4>
										<p class="margint20"> <br />info@spazaa.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-4">
							<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
								<div class="flipper">
									<div class="support-box pos-center front">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>VISIT US</h4>
										<p class="margint20"></p>
									</div>
									<div class="support-box pos-center back">
										<div class="support-box-title"><i class="fa fa-home"></i></div>
										<h4>COMPANY ADDRESS</h4>
										<p class="margint20">Chennai.<br />Tamil Nadu. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter-section"><!-- Newsletter Section -->
			<div class="container">
				<div class="row">
					<div class="newsletter-top pos-center margint30">
						<img alt="Shape Image" src="img/shape.png" >
					</div>
					<div class="newsletter-form margint40 pos-center">
						<div class="newsletter-wrapper">
							<div class="pull-left">
								<h2>Sign up newsletter</h2>
							</div>
							<div class="pull-left">
								<form action="#" method="post" id="ajax-contact-form">
									<input type="text" placeholder="Enter a e-mail address">
									<input type="submit" value="SUBSCRIBE" >
								</form>
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
							<img alt="SPAZAA"  class="img-responsive" >
						</div>
						<div class="col-lg-10 col-sm-10">
							<div class="col-lg-3 col-sm-3">
								<h6>TOUCH WITH US</h6>
								<ul class="footer-links">
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">Google +</a></li>
									<li><a href="#">Hotels.com</a></li>
									<li><a href="#">Tripadvisor</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>SERVICES</h6>
								<ul class="footer-links">
									<li><a href="#">SPA</a></li>
									<li><a href="#">UNISEX SALOON</a></li>
									<li><a href="#">AYURVEDA</a></li>
									<li><a href="#">WELLNESS</a></li>
									<li><a href="#">REFLEXOLOGY</a></li>
									<li><a href="#">WOMENS ONLY</a></li>
									<li><a href="#">MENS ONLY</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>QUICK LINKS</h6>
								<ul class="footer-links">
									<li><a href="#">HOME</a></li>
									<li><a href="#">ABOUT</a></li>
									<li><a href="#">GALLERY</a></li>
									<li><a href="#">SERVICES</a></li>
									<li><a href="#">BLOG</a></li>
									<li><a href="#">CONTACT</a></li>
									
								</ul>
							</div>
							<div class="col-lg-3 col-sm-3">
								<h6>CONTACT</h6>
								<ul class="footer-links">
									<li><p><i class="fa fa-map-marker"></i> Chennai, Tamil Nadu</p></li>
									<li><p><i class="fa fa-phone"></i> +91 9524 02 0009 </p></li>
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
						<div class="pull-left"><p>© SPAZAA 2016 | An <a href="http://s22.in" target=_blank>S22 </a> Craft</p></div>
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
</div>
<!-- JS FILES -->
<script src="js/vendor/jquery-1.11.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/superfish.pack.1.4.1.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/selectordie.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/main.js"></script>

<script>
    
	
	$('#idsearch').on("click", function()
	{
	alert($('#searchdata').val());
	}
	)
</script>

<script>

	function validateForm(){

		 var x = document.forms["searchform"]["city"].value;
         if (x == null || x == "") {
        alert("Please Select the city to search");
        return false;
    }


	}
</script>


</body>
</html>