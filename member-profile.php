<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$user = $_SESSION['UserId'];

	if (isset($_POST['save'])) 
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$fm = $_POST['fm'];
		$cnt = $_POST['cnt'];
		$sts = $_POST['bst'];
		

		$sql = "UPDATE users SET First_Name='$fname' , Last_Name='$lname' , Family_Members='$fm' , Status='$sts',Contact_No = '$cnt' WHERE Society_Code='$Scode' AND User_Id='$user' " ;
		$result = mysqli_query($conn,$sql);
	}

	$sql = " SELECT * FROM users WHERE Society_Code='$Scode' AND User_Id='$user' ";
	$result = mysqli_query($conn,$sql);
	$r = mysqli_fetch_assoc($result);
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

    <br><br>

    	<div id="content" class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="block-title"><?php echo $r['User_Id']; ?>m</h2><br>
						<div class="our-team-container">
							<div class="row">			
								<div class="col-sm-12">
									<div class="our-team-item">
										<div class="preview">
											<img src="media/images/our-team/6.png" alt="">
										</div>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-6 col-sm-offset-3">
															<div class="parameters-block">
																<ul class="parameters-listing">
																	<li>
																		<h5><span class="left">First Name</span></h5>
																		<h5><span class="right"><?php echo $r['First_Name']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Last Name</span></h5>
																		<h5><span class="right"><?php echo $r['Last_Name']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Block No.</span></h5>
																		<h5><span class="right"><?php echo $r['Block_No']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Building No.</span></h5>
																		<h5><span class="right"><?php echo $r['Building_No']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Block Statuse</span></h5>
																		<h5><span class="right"><?php echo $r['Status']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Contact No.</span></h5>
																		<h5><span class="right"><?php echo $r['Contact_No']; ?></span></h5>
																	</li>
																	<br>
																	<li>
																		<h5><span class="left">Family Members</span></h5>
																		<h5><span class="right"><?php echo $r['Family_Members']; ?></span></h5>
																	</li>
																</ul>
																<br><br><br>
																<center>
																	<a href="edit-user-profile.php"><button onclick="" class="btn">Edit</button></a></center>
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

		<!-- family Members -->

		<div class="row">
			<div class="our-agents gray-bg">
				<div class="container">
					<h2 class="block-title">Family Members</h2>
					<div class="best-agents style-1">
						<div class="jcarousel-arrows">
							<a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
							<span class="text">All Rieltors</span>
							<a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
						</div>
						<div class="ag-carousel carousel">
							<ul>
								<?php 
									$sql = "SELECT * FROM families WHERE Society_Code = '$Scode' AND User_Id = '$user'";
									$result = mysqli_query($conn,$sql);
									while($r = mysqli_fetch_assoc($result))
									{
										?>
										<li>
											<div class="item">
												<div class="heading">
													<div class="preview">
														<img src="media/images/agency/1.png" alt="">
													</div>	
													<span class="name"><?php echo $r['Name'];?></span>
													<span class="properties"><?php echo $r['User_Id'];?></span>
													<span class="properties"><?php echo $r['Relation'];?></span>
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