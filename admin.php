
<?php 
	require('dbconnect.php');
	if (isset($_SESSION['Scode'])) {
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
								<a href="#">Home</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="pepeoples.php">Peoples</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="add-events.php">Events</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="add-notice.php">Notice</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="add-payments.php">Payments</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="add-imp-contacts.php">Important Contacts</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="db-sign-out.php">Sign out</a>
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

	
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>