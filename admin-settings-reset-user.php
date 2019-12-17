<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	if (isset($_POST['reset'])) {
		require('db-admin-reset-user.php');
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
					<div class="col-md-8 col-md-offset-2 col-sm-12">
						<div class="office-contact-form">
							<span class="heading">Reset User</span>
							<div class="contact-form">
								<form method="post" action="admin-settings-reset-user.php" autocomplete="autocomplete">
									<input type="text" class="form-control" placeholder="User_Id *"  name="ud" required="required"><br>
									<input type="Password" class="form-control" placeholder="Admin Password *"  name="pd" required="required"><br>
									<br>
									<button class="send-btn" name="reset">Reset</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="empty-space"></div	>
			</div>
		</div>
	<br>
	<br>
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