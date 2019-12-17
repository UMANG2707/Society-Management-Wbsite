<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$event = $_SESSION['Event'];
	$sql = "SELECT * FROM images WHERE Society_Code = '$Scode' AND Event_Id = '$event'";
	$result = mysqli_query($conn,$sql);
 ?>
 
<!DOCTYPE html>
<html>

<!-- Mirrored from static.pixum.co/up-real-estate-html/gallery-alternative.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:22 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>alternative</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link href="vendors/video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<style>
	img {
  		border: 1px solid #ddd;
  		width: 150px;
	}


</style>
</head>
<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	
	
	<div id="content" class="container-full-width">
		<div class="container">
		</div>
		<div class="container">
			<div class="main-isotope-gallerry-container massonry-gallery">
				<div class="navigation-gallery">
					<div class="navigation">
						<a href="#" class="filter is-checked" data-filter=".all">Events</a>
					</div>
				</div>
				<div class="row">
					<div class="our-objects-gallery js-masonry" data-settings='{"resizable": false}'>
						<?php 
							while($row = mysqli_fetch_assoc($result))
							{
								?>
									<div class="col-sm-4 gallery-element all popular cottage">
										<div class="preview">
  												<img alt="img" style="width:300; height: 300px" src=<?php echo "Events/".$row['Event_Images']; ?> >
											<div class="overlay">
												<a class="incr" href=<?php echo "Events/".$row['Event_Images']; ?> >
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
	
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="vendors/isotope/isotope.pkgd.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="vendors/video-js/video.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from static.pixum.co/up-real-estate-html/gallery-alternative.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:45 GMT -->
</html>