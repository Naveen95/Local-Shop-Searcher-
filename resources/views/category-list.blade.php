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
	</div>
	
	
	<div class="main-container" style="
    width: 100%;
">
<div class="search-bar-container" style="
    /* width: 800px; */
    /* margin: auto; */
    margin-left: 350px;
">
						<noscript>
							&amp;amp;lt;input type="hidden" value="true" name="values_in_form"/&amp;amp;gt;
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
	                    <span>Chennai</span>
	                </div>
	                <div class="border-right-box"></div>
	            </div>
							<div id="cerebroLocationContainer" class="location-container cerebro-loc-containers">
	              <span class="location-placeholder " id="locationPlaceholder" style="display: block;">
	                  	                  	Entire City	                  	              </span>
	              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">Anna Nagar</span><input name="locality" class="location-input  location-hide  cerebro-location-input ui-autocomplete-input" id="locationInput" type="text" placeholder="Locality" value="" autocomplete="off" style="display: none;">
	          	</div>
	          </div>
	          <div class="keywords-container" id="cerebroKeywordsContainer" style="
    height: 34px;
">
	              <div class="search_grey">
									<a href="../icon/search"><i class="fa fa-search" aria-hidden="true"></i> </a>
	              </div>
	              	                  	              	              <span role="status" aria-live="polite" class="ui-helper-hidden-accessible">Thyroid Profile</span><input name="q" type="text" id="keywordsInput" class="keywords-input cerebro-keywords-input ui-autocomplete-input" placeholder=" Spas and Salonsters etc" value="" autocomplete="off" style="
   height: 29px;
   padding: 1px 25px; 
">
	          </div>
						<div class="button-style-1 widgetSearchIcon">
								<a href="reservation-form-dark.html"><i class="fa fa-calendar"></i>Search</a>
							</div>
					</div> </div>
	
	
	<div class="content"><!-- Content Section -->
		<div class="container margint60">
			<div class="row">
				<div class="col-lg-12 marginb20"><!-- Room Sort -->
					<div class="sortby clearfix">
						
						<div class="pull-right sort-icon">
							
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
											<option value="waxing">Wmaxing</option>
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

				<div class="col-lg-9"><!-- Explore Rooms -->
					<table>
						<tr class="products-title">
							<td class="table-products-image pos-center"><h6 style=" margin-top: 12px;">IMAGE</h6></td>
							<td class="table-products-name pos-center"><h6>ROOM NAME</h6></td>
							
							<td class="table-products-total pos-center"><h6>TIMING</h6></td>
						</tr>
						@foreach ($result as $result)
						<tr class="table-products-list pos-center">
							<td class="products-image-table"><img alt="Products Image 1" src="temp/room-image-1.jpg" class="img-responsive"></td>
							<td class="title-table">
								<div class="room-details-list clearfix">
									<div class="pull-left">
									
										<h5><a href="{{url('/place',['place_name'=>$result->sname , 'place_id'=>$result->id])}}" target="_blank">{{$result->name}}</a></h5>
									</div>
									<div class="pull-left room-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star inactive"></i></li>
										</ul>
									</div>
								</div>
								<div class="list-room-icons clearfix">
									<ul>
										<li><i class="fa fa-calendar"></i></li>
										<li><i class="fa fa-flask"></i></li>
										<li><i class="fa fa-umbrella"></i></li>
										<li><i class="fa fa-laptop"></i></li>
									</ul>
								</div>
								<p>{{$result->area}}</p>
								<p>{{$result->type}}</p>
								
							</td>
							
							<td><div class="button-style-1"><a href="{{url('/place',['place_name'=>$result->sname , 'place_id'=>$result->id])}}" target="_blank"><i class="fa fa-calendar"></i><span class="mobile-visibility">VIEW</span></a></div></td>
						</tr>

						@endforeach
						

						
					</table>
				</div>
<div class="col-lg-3"> <!-- Sidebar -->
					<!-- About Accordion -->
							<div id="accordion">
									<div class="panel panel-luxen active-panel">
									<div class="panel-style active">
										<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">GENDER</a></h4>
									</div>
									<div id="collapse1" class="collapse collapse-luxen in">
										<div class="padt20">    	
											 <input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; align:center; " name ="male" value = "male">&nbsp Male only</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="female" value = "female">&nbsp Female only</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="unisex" value = "unisex">&nbsp Unisex </input>
											
										</div>
									</div>
								</div>
								
									<div class="panel panel-luxen">
									<div class="panel-style">
									<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">AMENITIES</a></h4>
									</div>
									<div id="collapse2" class="collapse collapse-luxen">
										<div class="padt20">    

										    <input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="ac" value = "male">&nbsp Ac</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="shower" value = "female">&nbsp Shower</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="sauna" value = "unisex">&nbsp Sauna</input>	
										
												
										</div>
									</div>
								</div>
		
								<div class="panel panel-luxen">
									<div class="panel-style">
									<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">LOCATION</a></h4>
									</div>
									<div id="collapse3" class="collapse collapse-luxen">
										<div class="padt20">    

										    <input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="male" value = "male">&nbsp VijayaNagar</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="female" value = "female">&nbsp RajajiNagar</input><br>
											<input type = "checkbox" style = "display:inline-block; height:12px; width:12px ; font-size:14px; " name ="unisex" value = "unisex">&nbsp IndiraNagar</input>	
										
												
										</div>
									</div>
								</div>
								<div class="panel panel-luxen">
									<div class="panel-style">
									<h4><span class="plus-box"><i class="fa fa-angle-down"></i></span> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">AVAILABILITY</a></h4>
									</div>
									<div id="collapse4" class="collapse collapse-luxen">
										<div class="padt20">    	
											<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
												  <div class="btn-group btn-group-sm" role="group" aria-label="First group">
												    <button type="button" class="btn btn-secondary">ANY   </button>
												    <button type="button" class="btn btn-secondary">M</button>
												    <button type="button" class="btn btn-secondary">T</button>
												    <button type="button" class="btn btn-secondary">W</button>
												  
												  
												    <button type="button" class="btn btn-secondary">T</button>
												    <button type="button" class="btn btn-secondary">F</button>
												    <button type="button" class="btn btn-secondary">S</button>
												  
												  
												    <button type="button" class="btn btn-secondary">S</button>
												  </div>
												</div>

											
										</div>
									</div>
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
						<img alt="Logo" src="img/logo.png" class="img-responsive" >
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
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/selectordie.min.js"></script>
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