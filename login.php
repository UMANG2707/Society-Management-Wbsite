<!DOCTYPE html>
<html>

<!-- Mirrored from static.pixum.co/up-real-estate-html/contacts-contact_us_big_map.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:46 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Contacts - contact us_big map</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">	
				<h3 class="column-title">Login As An Admin</h3>
				<hr>
				<br>
				<form method="post" action="db-admin-login.php" autocomplete="autocomplete">
					<div class="col-sm-12">
						Society Code <br> <br> <input type="number" class="form-control" name="Scode" required="required"><br>
					</div>			
					<div class="col-sm-12">
						Password <br> <br> <input type="password" class="form-control" name="password" required="required"><br>
					</div>
					<div class="col-sm-12">
						<button type="Login" class="btn btn-login btn-lg"> Login </button> <br>
					</div>
				</form>
			</div>

			<div class="col-sm-6">	
				<h3 class="column-title">Login As Society A Member</h3>
				<hr>
				<br>
				<form method="post" action="db-member-login.php" autocomplete="autocomplete">
					<div class="col-sm-12">
						User Id <br> <br> <input type="text" class="form-control" name="UserId" required="required"><br>
					</div>
					<div class="col-sm-12">
						Society Code <br> <br> <input type="number" class="form-control" name="Scode" required="required"><br>
					</div>
					<div class="col-sm-12">
						Type <br> <br> <select class="form-control" name="Type">
  											<option selected>--- select --- </option>
  											<option value="1">Committee Member</option>
  											<option value="3">Staff Member</option>
  											<option value="3">Society Member</option>
										</select><br>
					</div>
					<div class="col-sm-12">
						Password <br> <br> <input type="password" class="form-control" name="password" required="required"><br>
					</div>
					<div class="col-sm-12">
						<button type="Login" class="btn btn-login btn-lg"> Login </button> <br>
					</div>
				</form>
			</div>
			
		</div>				
	</div>

	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>

<!-- Mirrored from static.pixum.co/up-real-estate-html/contacts-contact_us_big_map.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:46 GMT -->

</html>