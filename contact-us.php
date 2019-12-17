<!DOCTYPE html>
<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:43:21 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	<div class="extra-header">
		<div class="container">
	</div>
	<div class="nav-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<nav class="main-navigation">
						<ul class="navigation-listing hidden-xs">
							<li class="navigation-item">
								<a href="index.php">Home</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="index.php">Sign In</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="contact-us.php">Contact Us</a>
								<div class="overlay"></div>
							</li>
						</ul>
						<button class="mobile_menu_btn toggle-nav visible-xs">
							<span class="sandwich">
								<span class="sw-topper"></span>
								<span class="sw-bottom"></span>
								<span class="sw-footer"></span>
							</span>
						</button>
					</nav>
					<a href="registration.php" class="submit-nav hidden-xs">Register Now</a>
				</div>
			</div>
		</div>
	</div>

	<!-- for mobile responsiveness -->
	
	<div class="mobile-block">
		
	</div>

	<div class="home-banner">
		<div class="container">
			<div class="banner-content">
				<div class="banner-message">
					<div class="banner-entry">
						<span class="entry-title">Easy Way to Maintain Your Society</span>
						<span class="entry-message">A New Wave of Living</span>
					</div>
				</div>
			</div>
		</div>
	</div>

		<br>
		<br>
		<div class="row">
			<div class="contacts-block">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-2 col-sm-8">
							<h2 class="block-title ">Our Contacts</h2>
							<span class="sub-title">Duis a massa vitae diam maximus dictum sit amet nec purus. Morbi a nunc et sapien iaculis tincidunt nec hendrerit sapien. Cras convallis rhoncus mi eget rhoncus. In fringilla ligula mauris, sed volutpat tellus convallis vel.</span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-7 col-md-8 col-lg-9">
							<div class="map-holder">
								<div class="map-canvas" id="contact-map"></div>
							</div>
						</div>
						<div class="col-sm-5 col-md-4 col-lg-3">
							<ul class="contacts-listing">
								<li>
									<div class="icon-contaier">
										<i class="fa fa-map-marker"></i>
									</div>
									<div class="descr">
										<p>Beverly Hills, CA 90210</p>
									</div>
								</li>
								<li>
									<div class="icon-contaier">
										<i class="fa fa-clock-o"></i>
									</div>
									<div class="descr">
										<p><span>Monday - Friday</span>from 9:00 to 18:00</p>
									</div>
								</li>
								<li>
									<div class="icon-contaier">
										<i class="fa fa-phone"></i>
									</div>
									<div class="descr">
										<p>435-234-9867</p>
									</div>
								</li>
								<li>
									<div class="icon-contaier">
										<i class="fa fa-envelope"></i>
									</div>
									<div class="descr">
										<a href="#">info@uprealestate.com</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="contact-form-shortcode contact-form">
						<div class="contact-form-entry"><br><br>
							<form action="db-contact-with-us.php" method="post" class="form style-2">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="name" placeholder="Name *" name="name" required="require">
										<input type="email" class="email" placeholder="Email" name="email" required="require">
										<input type="tel" class="phone-number" pattern="[0-9]{10}" placeholder="Contact Number *" name="phone-number" required="require">
									</div>
									<div class="col-sm-6">
										<textarea name="text" class="message" placeholder="Message *" name="message" required="require"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<button class="send-btn">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="empty-space"></div>
		</div>
	</div>
	<div class="scroll-container">
		<div class="container">
			<a href="#" class="scroll-top-btn"><i class="fa fa-angle-double-up"></i></a>
		</div>
	</div>

		<!-- Shows some of users-->

  		<?php 
    		require('some-users.php');
  		?>
  		
		<!-- include footer -->
		
		<?php
			require('footer.php');
		?>
		
		<script type="text/javascript" src="js/libs/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
		<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

	</body>
	<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>