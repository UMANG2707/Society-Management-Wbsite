<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];	
	$sql = "SELECT * FROM Bills WHERE Society_Code = '$Scode' ";
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
							<form method="post" action="db-add-bills.php" autocomplete="autocomplete" enctype="multipart/form-data">
								<div class="col-sm-6">
									<input type="text" class="form-control" name="type" placeholder="Type * " required="required" min="2019" max="2025">
								</div>
								<div class="col-sm-6">
									<input type="month" class="form-control" name="my" required="required" >
								</div>
								<div class="col-sm-6">
									 <br><input type="file" class="form-control" name="bills"><br>
								</div>
								
								<br>
								<div class="col-sm-3">
									 <br><input type="submit" name="submit" class="btn btn-primary btn-sm" value="Add"><br>
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
		</div><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<span class="clickable"><a href="index.html">Basic Details</a></span>
						<span class="delimiter">/</span>
						<span class="active-page">Bills</span>
					</div>
				</div>
			</div>
			<div class="main-isotope-gallerry-container column-2"> 
				<div class="container">
					<div class="row">
						
						<div class="col-md-12 col-sm-12">
							<div class="blog-content column-3">
								<div class="row">
									<div class="col-sm-12">
										<table class="simple-table style-2">
											<thead>
												<tr>
													
													<th>Month-Year</th>
													<th>Type</th>
													<th>Open</th>
													<th>Download</th>
												</tr>
											</thead>
											<tbody>
												<?php 
										while($row = mysqli_fetch_assoc($result))
										{
											?>
												<tr>
													<td><?php echo $row['Month_Year'];?></td>
													<td><?php echo $row['Bill_Type'];?></td>
													<td>
														<a class="glyphicon glyphicon-open"  href=<?php echo "Bills/".$row['Bill'];?>>
															Open
														</a>
													</td>
													<td>
														<a class="glyphicon glyphicon-save" download href=<?php echo "Bills/".$row['Bill'];?>> Download
														</a>
													</td>
												</tr>
											<?php
										}
									?>
										
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
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