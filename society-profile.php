<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
 ?>

 <?php

 	 if(isset($_POST['save'])){
		$sname = $_POST['sname'];
		$nb = $_POST['nb'];
		$cnt = $_POST['cnt'];
		$aname = $_POST['an'];
		$ct = $_POST['ct'];
		$sql = "UPDATE register SET Society_Name='$sname',No_Buildings='$nb ', Contact='$cnt' , Admin_Name='$cnt',City='$ct' 
				WHERE Society_Code = '$Scode'";
		$result = mysqli_query($conn , $sql);
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
	}
	else
	{
		
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
	<!-- include header -->

	<?php 
		require('header.php');
	?>

	<!-- banner -->

	<div class="map-banner style-2" id="contact-map"></div>

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
																</ul>
																<br><br><br>
																<center>
																	<a href="edit-society-profile.php"><button onclick="" class="btn">Edit</button></a></center>
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
		<div class="row">
			<div class="sm-constr-banner-video">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="banner-entry">
								<h2 class="block-title inversed">Our Features</h2>
								<div class="video-container">
									<div class="video-block">
										<video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" height="442" poster="media/images/video-preview/All-set.jpg" data-setup="{}">
											<source src="media/videos/All-set.mp4" type='video/mp4' />
											<source src="media/videos/All-set.webm" type='video/webm' />
										</video>
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
