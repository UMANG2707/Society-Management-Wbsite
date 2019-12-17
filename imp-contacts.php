<?php
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$user = $_SESSION['UserId'];
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
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
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
    </div><br>

    <!-- Container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="breadcrumbs">
						<span class="clickable"><a href="index.html">Basic Details</a></span>
						<span class="delimiter">/</span>
						<span class="active-page">Important Contacts</span>
					</div>
				</div>
			</div>
			<center>
				<h3>Important Contacts</h3><hr>
			</center>
			<div id="content" class="container-fluid">
				<div class="row">
    				<div class="col-sm-10 col-sm-offset-1">
				      	<div class="row">
				       		<div class="col-sm-12">
								<table class="simple-table with-spacing" >
		        					<thead>
							           	<tr>
							              	<th>Work Type</th>
							              	<th>Name</th>
							              	<th>Contact No.</th>
							            </tr>
		            				</thead>
		                      		<tbody>
		                      			<?php
											$sql = " SELECT * FROM impcontacts WHERE Society_Code = '$Scode' ";
											$result = mysqli_query($conn,$sql);
											if (mysqli_num_rows($result) > 0) 
											{
												while($row = mysqli_fetch_assoc($result)) 
												{	
													?>
													<tr>
							                     		<td><?php echo $row['Type'];?></td>
							                     		<td><?php echo $row['Name'];?></td>
							                    		<td><?php echo $row['Contact_No'];?></td>
							               			</tr>
													<?php
												}      			
							   				}    			  							
										?>
									</tbody>
								</table><hr>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<br><br><br><br>
		<!-- Shows some of users-->

  		<?php 
    		require('some-users.php');
  		?>

	
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>