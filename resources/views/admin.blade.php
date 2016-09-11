<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>ADMIN SPA</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="assets/plugins/slider/slider.min.css" rel="stylesheet">
		<link href="assets/plugins/salvattore/salvattore.css" rel="stylesheet">
		<link href="assets/plugins/toastr/toastr.css" rel="stylesheet">
		<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">

	</head>
 
	<body class="tooltips">
		
		
	
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index-2.html"><img src="" alt="Your logo"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-bars"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						
						
						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right">
							<li class="dropdown">
							  <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
								Hi, <strong>SPAZAA ADMIN</strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								<li><a href="#fakelink">Account setting</a></li>
								<li><a href="#fakelink">Payment setting</a></li>
								<li><a href="#fakelink">Change password</a></li>
								<li><a href="#fakelink">My public profile</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.html">Lock screen</a></li>
								<li><a href="login.html">Log out</a></li>
							  </ul>
							</li>
						</ul>
						
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu">
					<li>
						<a href="index-2.html">
							<i class="fa fa-dashboard icon-sidebar"></i>
							Add
						</a>
					</li>
					<li>
						<a href="front-end.html">
							<i class="fa fa-bomb icon-sidebar"></i>
							Explore
						</a>
					</li>
					
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			
			
			
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					<!-- Begin page heading -->
					<h1 class="page-heading">Form validation <small>SPAZAA</small></h1>
					<!-- End page heading -->
				
					
					
					
					<div class="the-box">
						<form id="ExampleBootstrapValidationForm" method="post" action="{{url('/admin')}}" class="form-horizontal">
							{{csrf_field()}}
							<fieldset>
								

								
								<div class="form-group">
									<label class="col-lg-3 control-label">City</label>
									<div class="col-lg-5">
										<select class="form-control" name="city">
											<option value="">-- Select a City --</option>
											<option value="fr">Chennai</option>
											<option value="de">Bangalore</option>
											<option value="it">Mumbai</option>
											<option value="jp">Coimbatore</option>
											<option value="ru">Madurai</option>
											<option value="gb">Goa</option>
											<option value="us">Kashmir</option>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Type</label>
									<div class="col-lg-5">
										<select class="form-control" name="type">
											<option value="">-- Select a Category --</option>
											<option value="fr">Spa</option>
											<option value="de">Haircut for Men</option>
											<option value="it">Haircut for women</option>
											<option value="jp">Waxing</option>
											<option value="ru">Shaving</option>
											<option value="gb">Body Massage</option>
											<option value="us">Facial</option>
											<option value="us">Manicure</option>
											<option value="us">Pedicure</option>
											<option value="us">Threading</option>
											<option value="us">Bleaching</option>
											<option value="us">Make-up</option>
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Area</label>
									<div class="col-lg-5">
										<select class="form-control" name="area">
											<option value="">hello</option>
											<option value="anr">Anna Nagar</option>
											<option value="vlk">Perambur</option>
											
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Gender</label>
									<div class="col-lg-5">
										<select class="form-control" name="area">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="unisex">unisex</option>
											
											
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Address</label>
									<div class="col-lg-5">
										<textarea class="form-control" name = "address" cols="49" rows="4" placeholder="Address"></textarea>	
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Position</label>
									<div class="col-lg-5">
										<input type="text" class="form-control" name="latitude" placeholder="latitude" />&nbsp
										<input type="text" class="form-control" name="longitude" placeholder="longitude" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Overview</label>
									<div class="col-lg-5">
										<textarea class="form-control" name = "overview" cols="49" rows="6" placeholder="Overview"></textarea>	
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Description</label>
									<div class="col-lg-5">
										<textarea class="form-control" name = "description" cols="49" rows="6" placeholder="description"></textarea>	
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-lg-3 control-label">Aminities</label>
										<div class="col-lg-5">
										<div class="checkbox">
											<input type="checkbox" name="sauna" >Sauna</input><br>
											<input type="hidden" name="sauna"></input>


											<input type="checkbox" name="sauna"  value="A">Sauna</input><br>
											<input type="hidden" name="sauna" value = "NA"></input>
											
											<input type="checkbox" name="physiotherapist"  value="A">Physiotherapist</input><br>
											<input type="hidden" name="physiotherapist" value = "NA"></input>
											
											<input type="checkbox" name="shower" value="A" >Shower</input><br>
											<input type="hidden" name="shower" value = "NA"></input>
											
											<input type="checkbox" name="steam"  value="A">Steam</input><br>
											<input type="hidden" name="steam"  value = "NA"></input>
											
											<input type="checkbox" name="washroom" value="A" >Washroom</input><br>
											<input type="hidden" name="washroom"  value = "NA"></input>
																						
											<input type="checkbox" name="ac"  value="A">Air Conditioner</input><br>
											<input type="hidden" name="ac"  value = "NA"></input>
											
											<input type="checkbox" name="wifi"  value="A">Wifi</input><br>
											<input type="hidden" name="wifi"  value = "NA"></input>
											
											<input type="checkbox" name="lc"  value="A">Loyalty card</input><br>
											<input type="hidden" name="lc" value = "NA" ></input>
											
											<input type="checkbox" name="parking"  value="A">Parking</input><br>
											<input type="hidden" name="parking"  value = "NA"></input>
											
											<input type="checkbox" name="hs" value="A" >Home Service</input><br>
											<input type="hidden" name="hs"  value = "NA"></input>
											

										</div>
										</div>

							<div class="form-group">
								<div class="col-lg-9 col-lg-offset-3">
									<button type="submit" class="btn btn-changed">Submit</button>
								</div>
							</div>
								</div>
								
								

								
							</fieldset>
						</form>
					</div><!-- /.the-box -->
					
				
					
					
					
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2016 <a href="#">An S22 Craft</a><br />
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		<!-- BEGIN BACK TO TOP BUTTON -->
		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		<!-- END BACK TO TOP -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
 
		<!-- PLUGINS -->
		<script src="assets/plugins/skycons/skycons.js"></script>
		<script src="assets/plugins/prettify/prettify.js"></script>
		<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
		<script src="assets/plugins/icheck/icheck.min.js"></script>
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="assets/plugins/validator/bootstrapValidator.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script src="assets/plugins/markdown/markdown.js"></script>
		<script src="assets/plugins/markdown/to-markdown.js"></script>
		<script src="assets/plugins/markdown/bootstrap-markdown.js"></script>
		<script src="assets/plugins/slider/bootstrap-slider.js"></script>
		
		<script src="assets/plugins/toastr/toastr.js"></script>
		
		<!-- FULL CALENDAR JS -->
		<script src="assets/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/js/full-calendar.js"></script>
		
		<!-- EASY PIE CHART JS -->
		<script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
		<script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
		
		<!-- KNOB JS -->
		<!--[if IE]>
		<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/jquery-knob/knob.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>

		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- C3 JS -->
		<script src="assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		
		<!-- VALIDATOR EXAMPLE -->
		<script src="assets/plugins/validator/example.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script><script src="assets/js/demo-panel.js"></script>
		
	</body>


</html>