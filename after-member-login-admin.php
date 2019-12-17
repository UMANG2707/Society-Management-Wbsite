<?php 
	require('dbconnect.php');
 ?>

 <?php
		$UserId = $_SESSION['UserId'];
 		session_start();
 		$sql = "SELECT * FROM users WHERE User_Id = '$UserId' ";
 		$r = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($r);
		$_SESSION['Scode'] = $result['Society_Code'];
 		$_SESSION['BlockNo'] = $result['Block_No'];
		$_SESSION['BuildingNo'] = $result['Building_No'];
		$_SESSION['FloorNo'] = $result['Floor_No'];


 		$sql = " SELECT * FROM register WHERE Society_Code = '$Scode' ";
 		$r = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($r);
 		$_SESSION['Sname'] = $result['Society_Name'];
		$_SESSION['Address1'] = $result['Address_1'];
		$_SESSION['Address2'] = $result['Address_2'];
		$_SESSION['City'] = $result['City'];
		$_SESSION['NoBuilding'] = $result['No_Buildings'];
		$_SESSION['Contact'] = $result['Contact'];
		$_SESSION['Adname'] = $result['Admin_Name'];
 			
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
								<a href="db-admin-login.php">Home</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="pepeoples.php">Peoples</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="all-events.php">Events</a>
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
								<a href="db-signout-admin.php">Sign out</a>
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

	<div id="content" class="container-fluid">
		<div class="container">
		</div>
		<div class="container">	
			<div class="house-delimiter">
				<div class="house-icon"></div>
			</div>
			<div class="main-isotope-gallerry-container column-3">
				<div class="" align="center">
					<h1><?php echo $_SESSION['Sname']; ?> </h1>
				</div>
				<div class="row">
					<div class="house-delimiter">
						<div class="house-icon"></div>
					</div>
					<br>
					<div class="our-objects-gallery js-masonry" data-settings='{"resizable": false}'>
						<div class="col-sm-4 col-sm-offset-4 gallery-element all best-price cottage">
							<div class="preview">
								<img alt="#" src="media/images/gallery/3.1.jpg">
								<div class="overlay">
									<div class="overlay-entry">
										<span class="title"></span>
										<span class="date"></span>
									</div>
									<a href="#" class="incr">
										<i class="fa fa-search-plus"></i>
									</a>
								</div>
							</div>	
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="scroll-container">
		<div class="container">
			<a href="#" class="scroll-top-btn"><i class="fa fa-angle-double-up"></i></a>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="house-delimiter">
						<div class="house-icon"></div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="parameters-block">
								<div class="heading">
									<center>
										<h2 class="block-title">Society Details</h2>
									</center>
									<br>
								</div>
								<ul class="parameters-listing">
									<li>
										<span class="left">Society Code</span>
										<span class="right"><?php echo $_SESSION['Sname']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">Society Name</span>
										<span class="right"><?php echo $_SESSION['Scode']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">Secretary Name</span>
										<span class="right"><?php echo $_SESSION['Adname']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">Secretary Contact</span>
										<span class="right"><?php echo $_SESSION['Contact']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">Number of Buildings</span>
										<span class="right"><?php echo $_SESSION['NoBuilding']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">Total No. of Blocks</span>
										<span class="right"><?php echo $_SESSION['Sname']; ?></span>
									</li>
									<br>
									<li>
										<span class="left">City</span>
										<span class="right"><?php echo $_SESSION['City']; ?></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="house-delimiter">
						<div class="house-icon"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="our-agents">
				<div class="container">
					<h2 class="block-title">XYZ....!!</h2><br><br>
					<div class="best-agents style-2">
						<div class="ag-carousel carousel">
							<ul>
								<li>
									<div class="item">
										<div class="heading">
											<div class="preview">
												<img src="media/images/agency/1.png" alt="">
												<div class="overlay">
													<a href="agent-single_agent.html"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<span class="name">Djohn Kollings</span>
											<span class="properties">5 properties</span>
										</div>
										<ul class="contact-listing">
											<li>
												<span class="icon"><i class="fa fa-phone"></i></span>
												<span class="phone">+234-754-596</span>
											</li>
											<li>
												<span class="icon"><i class="fa fa-envelope"></i></span>
												<a href="#" class="mail">info@example.com</a>
											</li>
											<li>
												<span class="icon"><i class="fa fa-globe"></i></span>
												<a href="#" class="site">infoexample.com</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<div class="item">
										<div class="heading">
											<div class="preview">
												<img src="media/images/agency/2.png" alt="">
												<div class="overlay">
													<a href="agent-single_agent.html"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<span class="name">Eline Dorther</span>
											<span class="properties">3 properties</span>
										</div>
										<ul class="contact-listing">
											<li>
												<span class="icon"><i class="fa fa-phone"></i></span>
												<span class="phone">+234-754-596</span>
											</li>
											<li>
												<span class="icon"><i class="fa fa-envelope"></i></span>
												<a href="#" class="mail">info@example.com</a>
											</li>
											<li>
												<span class="icon"><i class="fa fa-globe"></i></span>
												<a href="#" class="site">infoexample.com</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<div class="item">
										<div class="heading">
											<div class="preview">
												<img src="media/images/agency/3.png" alt="">
												<div class="overlay">
													<a href="agent-single_agent.html"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<span class="name">Erik Braun</span>
											<span class="properties">8 properties</span>
										</div>
										<ul class="contact-listing">
											<li>
												<span class="icon"><i class="fa fa-phone"></i></span>
												<span class="phone">+234-754-596</span>
											</li>
											<li>
												<span class="icon"><i class="fa fa-envelope"></i></span>
												<a href="#" class="mail">info@example.com</a>
											</li>
											<li>
												<span class="icon"><i class="fa fa-globe"></i></span>
												<a href="#" class="site">infoexample.com</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<div class="item">
										<div class="heading">
											<div class="preview">
												<img src="media/images/agency/4.png" alt="">
												<div class="overlay">
													<a href="agent-single_agent.html"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<span class="name">Djoanna Holl</span>
											<span class="properties">5 properties</span>
										</div>
										<ul class="contact-listing">
											<li>
												<span class="icon"><i class="fa fa-phone"></i></span>
												<span class="phone">+234-754-596</span>
											</li>
											<li>
												<span class="icon"><i class="fa fa-envelope"></i></span>
												<a href="#" class="mail">info@example.com</a>
											</li>
											<li>
												<span class="icon"><i class="fa fa-globe"></i></span>
												<a href="#" class="site">infoexample.com</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<p class="jcarousel-pagination"></p>
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
