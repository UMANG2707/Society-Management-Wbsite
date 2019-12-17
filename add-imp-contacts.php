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
          
        </div>
      </div>
    </div>

    <!-- Container -->
 
	<br><br>

	<div id="content" class="container-fluid">
		<div class="container">
			<div class="empty-space"></div>
			<div class="row">
				<div class="col-sm-4">
					<div class="request-contact-form">
						<div class="heading">
							<span class="small">ADD</span>
							<span class="big">More Contacts</span>
						</div>
						<div class="contact-form">
							<form method="post" action="db-add-imp-contacts.php" autocomplete="autocomplete">
								<input type="text" class="form-control" placeholder="Type *" name="types" required="required">
								<input type="text" class="form-control" placeholder="Name *"  name="names" required="required">
								<input type="number" class="form-control" placeholder="Contact No. *"  name="contacts" required="required" minlength="10" maxlength="10"><br>
								<textarea type="text" class="form-control" placeholder="Address *"  name="Address"></textarea>
								<button class="send-btn">Add Contact</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="contact-form-shortcode contact-form">
						<div>
							<h2 class="block-title inversed">Important Contacts</h2><br>
							<table class="simple-table style-4">
          						<thead>
            						<tr>
              							<th>Type</th>
             	 						<th>Name</th>
              							<th>Contact No.</th>
              							<th></th>
            						</tr>
          						</thead>
            					<tbody>
								<?php 
									$Scode = $_SESSION['Scode'];
									$sql = " SELECT * FROM impcontacts WHERE Society_Code = '$Scode' ";
									$result = mysqli_query($conn,$sql);
									if (mysqli_num_rows($result) > 0) 
									{
										while($row = mysqli_fetch_assoc($result)) 
										{
											?>
											<tr>
                	    						<td style="color: black;"><?php echo $row['Type'];?></td>
          		           						<td style="color: black;"><?php echo $row['Name'];?></td>
                     							<td style="color: black;"><?php echo $row['Contact_No'];?></td>
                     							<td style="color: black;">
                     							<a href="dlt-contact.php?id=<?php echo $row['id']->id; ?>" > <button class="simple-btn sm-button filled green"> Delete </button> </a>
                     							</td>
                							</tr>
											<?php
										}	      			
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