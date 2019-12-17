<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
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

	<div class="home-banner style-4">
	    <div class="container">
	      <div class="banner-content">
	        <div class="banner-message">
	        
	        </div>
	      </div>
	    </div>
	</div>

    <!-- Container -->
    
    	<div class="container">
			<div class="office-block">
				<div class="empty-space"></div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12">
						<div class="office-contact-form">
							<span class="heading">Set Staff Members</span>
							<div class="contact-form">
								<form method="post" action="db-set-staff-members.php">
									<input type="text" class="form-control" placeholder="Name *"  name="name" required="required">
									<input type="text" class="form-control" placeholder="Work Type *"  name="work" required="required">
									<input type="number" class="form-control" placeholder="Conatact No. *"  name="cnt" required="required"><br>
									<textarea type="text" class="form-control" placeholder="Address *"  name="address" required="required"></textarea>
									<input type="Password" class="form-control" placeholder="Admin Password *"  name="pass">
									<br>
									<button class="send-btn">Set</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="empty-space"></div>
			</div>
		</div>

		<!-- Staff Members -->

		
		<div class="row">
			<div class="our-agents gray-bg">
				<div class="container">
					<h2 class="block-title">Staff Members</h2>
					<div class="best-agents style-5">
						<div class="jcarousel-arrows">
							<a href="#" class="prev-slide"><i class="fa fa-angle-left"></i></a>
							<span class="text">All Rieltors</span>
							<a href="#" class="next-slide"><i class="fa fa-angle-right"></i></a>
						</div>
						<div class="ag-carousel carousel">
							<ul>
								<?php 
									$sql = "SELECT * FROM staff_members WHERE Society_Code = '$Scode' ";
									$result = mysqli_query($conn,$sql);
								    if (mysqli_num_rows($result) > 0) 
								    {
								        while($row = mysqli_fetch_assoc($result)) 
								        {
											?>
											<li>
												<div class="item">
													<div class="heading">
														<div class="preview">
															<img src="media/images/agency/1.png" alt="">
															<!-- <img alt="" src=<?php echo "Profile/".$r['Profile_Pic'];?>> -->
														</div>
														<span class="name"><?php echo $row['Name'];?></span><br>
														<span class="properties"><?php echo $row['User_Id'];?></span>
														<span class="properties"><?php echo $row['Work'];?></span>
														<span class="properties"><i class="fa fa-phone"><?php echo " ".$row['Contact_No'];?></i></span>
														
													</div>
												</div>
											</li>
											<?php
										}
									} 
								?>
							</ul>
						</div>
						<p class="jcarousel-pagination"></p>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>

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