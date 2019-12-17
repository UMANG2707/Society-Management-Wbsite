<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$sql = "SELECT * FROM rules WHERE Society_Code='$Scode' ";
	$result = mysqli_query($conn,$sql);

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

    <!-- Container -->
 
	<br><br>

	<div id="content" class="container-fluid">
		<div class="container">
			<div class="empty-space"></div>
			<div class="row">
				<div class="col-sm-8">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<div class="accordion-control style1">
									<?php 
										while($row = mysqli_fetch_assoc($result))
										{
											?>
												<h3><?php echo $row['Rule_Type'];?></h3>
												<div>
													<p><?php echo $row['Society_Rule'];?></p>
												</div>
											<?php
										}
									?>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="request-contact-form">
									<div class="heading">
										<span class="small">ADD</span>
										<span class="big">RUles</span>
									</div>
									<div class="contact-form">
										<form method="post" action="db-add-rule.php" autocomplete="autocomplete">
											<textarea type="text" class="form-control" placeholder="Type *" name="type" required="required"></textarea>
											<textarea type="text" class="form-control" placeholder="Rule *"  name="rule"></textarea>
											<button class="send-btn">Add Rule</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="empty-space"></div>
							</div>
						</div>
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