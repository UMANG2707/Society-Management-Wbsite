<?php 
	require('dbconnect.php');
 ?>
 	<?php 
		$Sname = $_POST['Sname'];
		$Address1 = $_POST['Address1'];
		$Address2 = $_POST['Address2'];
		$City = $_POST['City'];
		$NoBuilding = $_POST['NoBuildings'];
		$Contact = $_POST['contact'];
		$Adname = $_POST['Aname'];
		$bdate = $_POST['bdate'];
		$Pass = $_POST['Pass'];
		$Pass = mysqli_real_escape_string($conn,$Pass);
		$CPass = $_POST['CPass'];
		$CPass = mysqli_real_escape_string($conn,$CPass);
		$Floors = array();
		$Blocks = array();


		for( $i=1; $i<=$NoBuilding; $i++)
		{
			array_push($Floors, $_POST['NoFloors'.$i]);
			array_push($Blocks, $_POST['NoBlocks'.$i]);
		}

		if (isset($_POST['submit'])) {
			if ($Pass === $CPass) {
				$array = array();
				$sql = " SELECT Society_Code FROM register ";
				$result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result) > 0) 
				{
					while($row = mysqli_fetch_array($result)) 
					{
    	    			$array[] = $row['Society_Code'];       			
    				}    			
    				
    				do
    				{
    					$Scode = rand(100,999);
    				}while (in_array($Scode, $array));
				
				} 
				else 
				{
 					$Scode = rand(100,999);
				}

				//$Pass = md5($Pass);

				$sql = "INSERT INTO register (Society_Name,Address_1,Address_2,City,No_Buildings,Contact,Admin_Name,Password,Society_Code,Admin_Bdate)
						VALUES ('$Sname' , '$Address1','$Address2','$City','$NoBuilding','$Contact','$Adname','$Pass','$Scode' , '$bdate')";		
				$result = mysqli_query($conn,$sql);	
				
				for ($i=0; $i<$NoBuilding; $i++) { 
			    	$sql = "INSERT INTO buildings (Society_Code , Building_No , No_Floors , No_Blocks)
							VALUES ('$Scode' , '$i+1' , '$Floors[$i]' , '$Blocks[$i]')";
					$result = mysqli_query($conn,$sql);	     	
			    }


			    for($i=0; $i<$NoBuilding; $i++)
				{
					for($j=0; $j<$Floors[$i]; $j++)
					{
						for($k=0; $k<$Blocks[$i]; $k++)
						{
							$bulno = $i + 1;
							$floorno = $j + 1;
							$blockno = ((($j+1)*100)+($k+1));
							$userid = $i+1 .'-'. $blockno;
							$userid = mysqli_real_escape_string($conn,$userid);
							$sql = "INSERT INTO users (User_Id, Society_Code,Block_No,Building_No,Floor_No)
									VALUES ('$userid','$Scode','$blockno','$bulno','$floorno') ";
							$result = mysqli_query($conn , $sql);
						}
					}
				}
			}
		}	


 ?>
 
<!DOCTYPE html>
<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/auxiliary-our_services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Auxiliary - Services</title>
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
		<div class="row">
			<div class="testimonials style-6 inversed">
				<h2 class="block-title inversed">Welcome Welcome .. !!</h2>
				<div class="testimonials-holder"><br>
					<div class="testimonials-carousel carousel">
						<h2 class="block-title inversed">Your Societ has been Registered Successfully !!</h2>
					</div><br>
					<div class="testimonials-carousel carousel">
						<h2 class="block-title inversed">Your Societ is code <?php echo $Scode?> </h2>
					</div><br><br>
					<div >
						<form action="login.php">
							<center>
								<button class="btn-default btn-secondary btn-lg btn-no-block">Continue</button>
							</center>
						</form>
					</div>
					
					<p class="jcarousel-pagination"></p>
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
<!-- Mirrored from static.pixum.co/up-real-estate-html/auxiliary-our_services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:59 GMT -->
</html>