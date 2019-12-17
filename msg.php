<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
  	$sql = " SELECT * FROM notice WHERE Society_Code = '$Scode' ";
    $result = mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($result);                         
 ?>
<!DOCTYPE html>
<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/agent-single_agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:19:29 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Agent Pages - single_agent</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link href="vendors/video-js/video-js.css" rel="stylesheet" type="text/css">
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
          <div class="banner-entry">
            <span class="entry-title">Features</span>
            <span class="entry-message">Some text will be here</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Container -->

	<div id="content" class="container-fluid">
		<div class="container">
		</div>
		<div class="container">
			<div class="agency-container listing with-sidebar">
				<div class="row">
					<div class="col-md-9 col-sm-10 col-sm-offset-2">
						<div class="row">
							<div class="col-sm-12">
								<div class="agent-single-item">
									<div class="question-container">
										<h6>Messages</h6>
										<div class="contacts-block">
											<div class="message-form">
												<form action="db-msg.php" method="post">
													<select class="form-control" name="Type" required="required">
  														<option disabled="disabled" selected="selected" >To :</option>
  														<option value="all" >All</option>
														<?php 
															$sql = "SELECT * FROM users WHERE Society_Code='$Scode'";
															$r = mysqli_query($conn,$sql);
															while ( $row  = mysqli_fetch_assoc($r)) 
															{
																?>
																	<option value=<?php echo $row['User_Id'];?>><?php echo $row['User_Id']; ?></option>
																<?php
															}

														?>
														</select>
													<br>
													<textarea name="name1" class="message" placeholder="Message *" required="required"></textarea>
													<button class="send-btn">Send Message</button>
												</form>
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

		<!-- Shows some of users-->

  		<?php 
    		require('some-users.php');
  		?>
		
		<!-- include footer -->

		<?php
			require('footer.php');
		?>

	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="vendors/isotope/isotope.pkgd.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="vendors/video-js/video.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from static.pixum.co/up-real-estate-html/agent-single_agent.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:19:29 GMT -->
</html>

