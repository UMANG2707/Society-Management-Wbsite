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
          <div class="banner-entry">
            <span class="entry-title">Features</span>
            <span class="entry-message">Some text will be here</span>
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- Container -->
    
    	<div class="container">
			<div class="office-block">
				<div class="empty-space"></div>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-lg-4">
						<div class="office-contact-form">
							<span class="heading">Set Committee</span>
							<div class="contact-form">
								<form method="post" action="db-committee-members.php" autocomplete="autocomplete">
									<input type="text" class="form-control" placeholder="User Id *"  name="id" required="required"><br>
									<input type="Password" class="form-control" placeholder="Admin Password *"  name="pass">
									<br><br>
									<textarea type="text" class="form-control" placeholder="Aditional Information *" name="extra"></textarea><br>
									<button class="send-btn">Set</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-8 col-sm-12 col-lg-8">
						<div class="office-banner">
							<div class="banner-entry">
								<span class="banner-title inversed">You  can't find offece?</span>
								<span class="banner-sub-text inversed">Fill a form and our experts will help you!</span>
							</div>
						</div>
					</div>
				</div>
				<div class="empty-space"></div>
			</div>
		</div>
	<br>
	<br>
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