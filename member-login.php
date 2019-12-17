<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$Uid = $_SESSION['UserId'];
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
	<!-- include header -->

	<?php 
		require('header-user.php');
	?>

	<!-- banner -->

	<div class="home-banner style-4">
    <div class="container">
      <div class="banner-content">
        <div class="banner-message">
         
        </div>
      </div>
    </div>
</div>

    <!-- Container -->

	
    	<div id="content" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="block-title"><?php echo $_SESSION['Sname']; ?></h2><br>
						<div class="our-team-container">
							<div class="row">			
								<div class="col-sm-12">
									<div class="our-team-item">
										<div class="preview">
											<img src="media/images/our-team/3.png" alt="">
										</div>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<div class="parameters-block">
																<ul class="parameters-listing">
																	<li>
																		<h5><span class="left">Society Name</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['Sname']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Society Code</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['Scode']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Admin name</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['Adname']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Contact No.</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['Contact']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Total No. of Blocks</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['Sname']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Number of Buildings</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['NoBuilding']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">City</span></h5>
																		<h5><span class="right"><?php echo $_SESSION['City']; ?></span></h5>
																	</li>
																</ul><br>
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
					</div>
				</div>
			</div>
		</div>
		
		<!-- Committee Members -->

		<div class="row">
			<div class="our-agents gray-bg">
				<div class="container">
					<h2 class="block-title">Committee Members</h2>
					<div class="best-agents style-1">
						<div class="jcarousel-arrows">
							<a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
							<span class="text">All Rieltors</span>
							<a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
						</div>
						<div class="ag-carousel carousel">
							<ul>
								<?php 
									$sql = "SELECT * FROM users WHERE Society_Code = '$Scode' AND Membership = 'Committee Member'";
									$result = mysqli_query($conn,$sql);
									while($r = mysqli_fetch_assoc($result))
									{
										?>
										<li>
											<div class="item">
												<div class="heading">
													<div class="preview">
														<img src="media/images/agency/1.png" alt="">
														<!-- <img alt="" src=<?php echo "Profile/".$r['Profile_Pic'];?>> -->
													</div>
													<span class="name"><?php echo $r['First_Name'];?></span>
													<span class="name"><?php echo $r['Last_Name'];?></span><br>
													<span class="properties"><?php echo $r['User_Id'];?></span>
													<span class="properties"><?php echo $r['Status'];?></span>
													<span class="properties"><i class="fa fa-phone"><?php echo " ".$r['Contact_No'];?></i></span>
													
												</div>
											</div>
										</li>
										<?php
									} 
								?>
							</ul>
						</div>
						<p class="jcarousel-pagination"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
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