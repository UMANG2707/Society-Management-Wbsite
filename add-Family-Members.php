<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$user = $_SESSION['UserId'];
	if (isset($_POST['set'])) {
		require('db-add-familymembers.php');
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
	<style type="text/css">
		img
		{
			border: 1px solid #ddd;
			border-radius: 4px;
			padding: 5px;
		    width: 150px;
		}
	</style>
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
    
    	<div class="container">
			<div class="office-block">
				<div class="empty-space"></div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-sm-12">
						<div class="office-contact-form">
							<span class="heading">Add Family Members</span>
							<div class="contact-form">
								<form method="post" action="add-Family-Members.php" enctype="multipart/form-data">
									<input type="text" class="form-control" placeholder="Name *"  name="name" required="required">
									<input type="Date" class="form-control" placeholder="Birth Date *"  name="Bdate" required="required"><br>
									<input type="text" class="form-control" placeholder="Relation *"  name="rel" required="required"><br>
									<input type="number" class="form-control" placeholder="Contact No. *"  name="cnt" required="required"><br>
									<input type="file" class="form-control" name="ttl" ><br>
									
									<button class="send-btn" name="set">Set</button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				<div class="empty-space"></div>
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
														
														<img alt="" height="150" width="200" src=<?php echo "Profiles/".$r['Profile_Pic'];?>> 
													</div>
													<span class="name"><?php echo $r['Name'];?></span>
													<span class="name"><?php echo $r['Relation'];?></span><br>
													<span class="properties"><?php echo $r['Birth_Date'];?></span>
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