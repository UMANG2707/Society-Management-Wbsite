<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];	
	$sql = " SELECT * FROM events WHERE Society_Code='$Scode' ORDER BY Event_Year DESC , Event_Date DESC ";
	$result = mysqli_query($conn , $sql);
 ?>
 
<!DOCTYPE html>

<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:43:21 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Home - Cottage Village</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/main-turquoice.css" />
	<link href="vendors/video-js/video-js.css" rel="stylesheet" type="text/css">
</head>

<body>

	<!-- include header -->

	<?php 
		require('header.php');
	?>

	<!-- banner -->

	<div class="home-banner style-3">
		<div class="container">
			<div class="banner-content">
				<div class="banner-message style-2">
					<div class="banner-entry">
						<span class="entry-title">Only Best Objects</span>
						<span class="entry-message">by UP Real Estate</span>
					</div>
				</div>
				<div class="main-filter hidden-xs">
					<div class="filter-label-block">
						<span class="filter-label">Add Events</span>
					</div>
					<div class="container">
						<div class="col-sm-11 col-lg-11">		
							<form method="post" action="db-add-events.php" autocomplete="autocomplete" enctype="multipart/form-data">
								<div class="col-sm-6">
									<br><input type="number" class="form-control" placeholder="Event Year *" name="year" required="required" min="2019" max="2025">
								</div>
								<div class="col-sm-6">
									<br> <input type="text" class="form-control" placeholder="Event Name *"  name="names" required="required">
								</div>
								<div class="col-sm-12">
									<br> <textarea type="text" class="form-control" placeholder="Description *" name="det" required="required"></textarea><br>
								</div>
								<div class="col-sm-3">
									 <input type="date" class="form-control" name="date" placeholder="Date *"><br>
								</div>
								<div class="col-sm-3">
									 <input type="file" class="form-control" name="ttl">Title Image<br>
								</div>
								<div class="col-sm-3">
									 <input type="file" class="form-control" name="img[]" multiple="multiple"><br>
								</div>
								<br>
								<div class="col-sm-3">
									<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Add"><br>
								</div>
							</form>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="content" class="container-fluid">
		<div class="container">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<span class="clickable"><a href="index.html">Basic Details</a></span>
						<span class="delimiter">/</span>
						<span class="active-page">Events</span>
					</div>
				</div>
			</div>
			<div class="main-isotope-gallerry-container column-2">
				<div class="navigation-gallery">
					<div class="navigation">
						<a href="#" class="filter is-checked" data-filter=".all">Events</a>
					</div>
				</div>
				<div class="row">
					<div class="our-objects-gallery js-masonry" data-settings='{"resizable": false}'>
						<?php 
							$c = 0;
							while($row = mysqli_fetch_assoc($result))
							{
	
								$c = $c +1;
								?>
								<div class="col-sm-6 gallery-element all best-price cottage">
									<div class="preview">
										<img alt="img"  height="300" width="500" src=<?php echo "Events/".$row['Ttl_Img']; ?> >
										<div class="overlay">
											<div class="overlay-entry">
												<span class="title"><?php echo $row['Event_Name']; ?></span>
												<span class="date"><?php echo $row['Event_Date']; ?></span>
												<?php 
												 	$_SESSION['Event'] = $row['Event_Id']; 
												 ?>
											</div>
											<a href="events.php" class="incr">
												<i class="fa fa-search-plus"></i>
											</a>
										</div>
									</div>	
								</div>
								<?php 
							}
						?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-container">
		<div class="container">
			<a href="#" class="scroll-top-btn"><i class="fa fa-angle-double-up"></i></a>
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