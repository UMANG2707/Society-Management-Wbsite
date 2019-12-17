<?php 
	require('dbconnect.php');
	if (isset($_SESSION['UserId'])) {
		session_start();
	}	
?>
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
								<a href="profile.php">Profile</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="peoples.php">Peoples</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="events.php">Events</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="notice.php">Notice</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="notifications.php">Notifications</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="payments.php">Payments</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="imp-contacts.php">Important Contacts</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="imp-contacts.php">About Society</a>
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
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3">
					<div class="widget">
						<span class="widget-title">About UP Real Estate</span>
						<div class="logo">
							<a href="index.html">
								<img src="images/logo/logo-green-scheme-white.png" alt="">
							</a>
						</div>
						<p class="text">Aenean ut nunc vel augue hendrerit consequat id eget arcu. Nam quis lectus urna. Nulla blandit odio sit amet neque tempus interdum ex. Integer mattis egestas turpis id porttitor.</p>
						<div class="social-block">
							<ul class="sociable-listing">
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
								</li>
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
								</li>
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-vimeo"></i></a>
								</li>
								<li class="sociable-item">
									<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="widget contact">
						<span class="widget-title">Contact Info</span>
						<ul class="contacts-listing">
							<li>
								<div class="icon">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="descr">
									<span>Beverly Hills, CA 90210</span>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
								<div class="descr">
									<span>435-234-9867</span>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="descr">
									<a href="#">info@uprealestate.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<i class="fa fa-clock-o"></i>
								</div>
								<div class="descr">
									<span>Monday - Friday: from 9:00 to 18:00</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="hidden-sm col-md-3">
					<div class="widget latest-tweets">
						<span class="widget-title">Latest Tweets</span>
						<ul class="tweets-listing">
							<li>
								<a class="author" href="#">@Theme_UPRealEstate</a>
								<p class="message">
									Sed, orci vel facilisis luctus, neque magna feugiat nulla, ac commodo dui erat. <a href="#">themeuprealestate.net/building-a-web…</a>
								</p>
							</li>
							<li>
								<a class="author" href="#">@Theme_UPRealEstate</a>
								<p class="message">
									Sed, orci vel facilisis luctus, neque magna feugiat nulla, ac commodo dui erat. <a href="#">themeuprealestate.net/building-a-web…</a>
								</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-3">
					<div class="widget">
						<span class="widget-title">Newsletter</span>
						<p>Sed ultricies, orci vel facilisis luctus, neque magna feugiat nulla, ac commodo dui erat a nibh.</p>
						<div class="newsletter">
							<form action="#" class="subscribe">
								<input type="email" placeholder="Enter Your Email Address">
								<button class="sign-up">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="bottom-footer">
						<span class="copy">© 2015 UP Real Estate – All Rights Reserved </span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>