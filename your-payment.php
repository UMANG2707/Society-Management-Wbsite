<?php 
  require('dbconnect.php');
  session_start();
  $Scode = $_SESSION['Scode'];
  $user = $_SESSION['UserId'];
  $month =date('Y-m');
  $s = "SELECT * FROM add_payment_type WHERE Society_Code = '$Scode' ";
  $r = mysqli_query($conn,$s);
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
      <br><br>

  <!-- Container -->
 
  <br>

  	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="contact-form-shortcode contact-form">
					<div class="contact-form-entry">
						<h2 class="block-title inversed">Your Payments</h2>
						<center>
							<?php 
								while($row = mysqli_fetch_assoc($r))
								{
									$pid = $row['Pay_Id'];
									$sql = "SELECT * FROM payment WHERE Pay_Id='$pid' AND User_Id = '$user'";
									$result = mysqli_query($conn,$sql);
									$rr = mysqli_fetch_assoc($result);
									?>
										<br><br><br>
										<span style="color: black; font-size: 20px"><?php echo $pid;?></span><br>
										<span style=" font-size: 20px"> Rupees  :  <?php echo $rr['Rupees'];?></span><br>
										
										<?php 
											if ($rr['Payment_Status'] == 1) {
												$x = "Paied";
												?>
													<span style=" font-size: 20px"><?php echo $x;?></span>
												<?php
											} 
											else
											{
												$x = "Pendding";
												?>
													<span style=" color: red; font-size: 20px"><?php echo $x;?></span>
												<?php
											}
										?>
									<?php
								}
							?>
							<?php
								$total = "SELECT SUM(Rupees) AS X
										FROM add_payment_type
										WHERE Society_Code='$Scode'";
								$totalr = mysqli_query($conn,$total);
								$totalrr = mysqli_fetch_assoc($totalr);

								$paied = "SELECT SUM(Rupees) AS XX
										FROM payment
										WHERE Society_Code='$Scode' AND User_Id ='$user' AND Payment_Status =1";
								$paiedr = mysqli_query($conn,$paied);
								$paiedrr = mysqli_fetch_assoc($paiedr);

								$pendding = $totalrr['X'] - $paiedrr['XX'];

							?>
							<br><br><br>
							<span style=" font-size: 20px"> Total  :  <?php echo $totalrr['X'];?></span><br>
							<span style=" font-size: 20px"> Paied  :  <?php echo $paiedrr['XX'];?></span><br>
							<span style=" font-size: 20px"> Pendding  :  <?php echo $pendding;?></span><br>
						</center>
					</div>
				</div>
			</div>
		</div>
		<div class="empty-space"></div>
	</div>
      
  
  <!-- Shows some of users-->

  <?php 
    require('some-users.php');
  ?>
  
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>