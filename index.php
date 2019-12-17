<?php 
	require('dbconnect.php');
	if (isset($_POST['Alogin'])) {
		require('db-admin-login.php');
	}
	elseif (isset($_POST['Mlogin'])) {
		require('db-member-login.php');
	}
	else{

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
								<a href="index.php">Home</a>
								<div class="overlay"></div>
							</li>
							<li class="navigation-item">
								<a href="#login">Sign In</a>
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

	<div id="content" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-9">
					<h2 class="block-title ">How to use ... ??</h2><br><br>
					<div class="reviews-of-people">
						<ul class="reviews-listing">
							<li>
								<div class="descr">
									<span class="title">Register Your Society</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
							<li>
								<div class="descr">
									<span class="title">Login with given society code</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
							<li>
								<div class="descr">
									<span class="title">Share society code with all society members</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
							<li>
								<div class="descr">
									<span class="title">Set committee members</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
							<li>
								<div class="descr">
									<span class="title">Set workers</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
							<li>
								<div class="descr">
									<span class="title">Maintain Society</span>
									<p>Nullam ac vestibulum nisl, in rutrum felis. Pellentesque quis facilisis nisl. Aliquam ut tincidunt sem. Sed at condimentum tellus, vitae elementum odio. Sed hendrerit varius lectus, venenatis blandit ligula pulvinar in. </p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-4" id="login">
					<aside class="sidebar main-sidebar">
						<div class="widget login">
							<br>
							<div class="heading">
								<span class="widget-title">Login As Member</span>
							</div>
							<div class="widget-entry gray-bg">
								<div class="login-form">
									<form method="post" action="index.php" autocomplete="autocomplete">
										<input type="text" class="form-control" name="UserId" required="required" placeholder="User Id *">
										<input type="number" class="form-control" name="Scode" required="required" placeholder="Society Code *"><br>
										<select class="form-control" name="Type">
  											<option selected>--- select --- </option>
  											<option value="1">Committee Member</option>
  											<option value="3">Staff Member</option>
  											<option value="3">Society Member</option>
										</select><br>
										<input type="password" class="form-control" name="password" required="required" placeholder="Password *"><br>
										<?php 
											if (isset($errorm)) 
											{ 
												?>
													<span style="color: red;"><?php echo $errorm; ?></span><br><br>
												<?php 
											} 
										?>
										<button class="send-btn" type="Login" name="Mlogin">Login</button>
										<a href="forgot-member-pass.php" class="btn-left link">Forgot Password?</a>
									</form>
								</div>
							</div><br>
							<div class="heading">
								<span class="widget-title">Login As Admin</span>
							</div>
							<div class="widget-entry gray-bg">
								<div class="login-form">
									<form method="post" action="index.php" autocomplete="autocomplete">
										<input type="number" class="form-control" name="Scode" required="required" placeholder="Society Code *"><br>
										<input type="password" class="form-control" name="password" required="required" placeholder="Password *"><br>
										<?php 
											if (isset($error)) 
											{ 
												?>
													<span style="color: red;"><?php echo $error; ?></span><br><br>
												<?php 
											} 
										?>
										<button class="send-btn" name="Alogin">Login</button>
										<a href="forgot-admin-pass.php" class="btn-left link">Forgot Password?</a>
										<a href="registration.php" class="btn-right link">Register Now!</a>
									</form>
								</div>
							</div>
						</div>
					</aside>	
				</div>
			</div>
		</div>
	</div>
	<br><br><br><br>
	
	
		<div class="row">
			<div class="our-features-banner style-3">
				<div class="container">
					<h2 class="block-title inversed">Our Features</h2>
					<span class="sub-title inversed">The best decision for your Society</span>
					<div class="row">
						<div class="col-sm-3">
							<div class="single-feature">
								<div class="single-feature">
									<div class="icon-container">
										<div class="icon-border">
											<span class="icon lg-icon cash"></span>
										</div>
									</div>
									<span class="main-title">Payment</span>
									<span class="featured-sub-title colored">Management</span>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
								<div class="single-feature">
									<div class="icon-container">
										<div class="icon-border">
											<span class="icon lg-icon like"></span>
										</div>
									</div>
									<span class="main-title">Organizing</span>
									<span class="featured-sub-title colored">Events</span>
								</div>
							</div>
						
							<div class="col-sm-3">
								<div class="single-feature">
									<div class="icon-container">
										<div class="icon-border">
											<span class="icon lg-icon deal"></span>
										</div>
									</div>
									<span class="main-title">knew your</span>
									<span class="featured-sub-title colored">Neighbours</span>
								</div>
							</div>
						<div class="col-sm-3">
								<div class="single-feature">
									<div class="icon-container">
										<div class="icon-border">
											<span class="icon lg-icon human"></span>
										</div>
									</div>
									<span class="main-title">SEt Your</span>
									<span class="featured-sub-title colored">Profile</span>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
	</div>
	<div class="scroll-container">
		<div class="container">
			<a href="#" class="scroll-top-btn"><i class="fa fa-angle-double-up"></i></a>
		</div>
	</div>
	<div class="agency-container listing with-sidebar">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<div class="question-container">
						<h4 class="column-title">Comments</h4>
							<div class="contacts-block">
								<div class="message-form">
									<form action="db-add-comments.php" method="post">
										<input type="text" name="name" placeholder="Name *" required="required">
										<textarea name="comm" class="message" placeholder="Comment *" required="required"></textarea>
										<button class="send-btn">Comments</button>
									</form>
								</div>
							</div>
						</div>

						<?php 
							$sql = " SELECT * FROM comment ORDER BY Comment_Date DESC , Comment_Time DESC ";
							$result = mysqli_query($conn,$sql);

							if (mysqli_num_rows($result) > 0) 
                        	{
                          		while($row = mysqli_fetch_assoc($result)) 
                          		{
                           		
                           			?>
                           				<div class="question-container">
											<div class="contacts-block">
												<div class="message-form">
													<div class="top">
														<h5><?php echo $row['Name'];?></h5>
													</div>
													<hr>
													<div class="descr">
														<p class="descr-text"><?php echo $row['Comment'];?></p>
													</div><hr>
													<div class="right">
														<?php echo $row['Comment_Date'];?>
														<?php echo $row['Comment_Time'];?>
													</div>
												</div>
											</div>
										</div>
                           			<?php
                        		}           
                        	}
						?>
					</div>
				</div>
			</div>		
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