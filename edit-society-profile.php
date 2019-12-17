<?php 
	require('dbconnect.php');
	session_start();
	
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

	<div class="map-banner style-2" id="contact-map"></div>

    <!-- Container -->

    	<div id="content" class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="block-title"><?php echo $_SESSION['Sname']; ?></h2><br>
            <div class="our-team-container">
              <div class="row">     
                <div class="col-sm-12">
                  <div class="our-team-item">
                    <div class="preview">
                      <img src="media/images/our-team/6.png" alt="">
                      <div class="overlay">
                        <a href="edit-pro-img.php" class="incr">
                          <i class="fa fa-search-plus"></i>
                        </a>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <div class="parameters-block">
                                <form autocomplete="autocomplete" action="db-admin-login.php" method="post">
                                <ul class="parameters-listing">
                                  <li>
                                    <h5><span class="left">Society Name</span></h5>
                                    <h5><span class="right"><input type="text" name="sname" value=<?php echo $_SESSION['Sname']; ?> ></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">Society Code</span></h5>
									<h5><span class="right"><input type="text" name="Scode" disabled value=<?php echo $_SESSION['Scode']; ?>></span></h5></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">Admin Name</span></h5>
                                    <h5><span class="right"><input type="text" name="an" value=<?php echo $_SESSION['Adname']; ?>></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">Contact No.</span></h5>
                                    <h5><span class="right"><input type="number" name="cnt" value= <?php echo $_SESSION['Contact']; ?>></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">No. of Buildings</span></h5>
                                    <h5><span class="right"><input type="number" name="nb" value=<?php echo $_SESSION['NoBuilding']; ?>></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">City</span></h5>
                                    <h5><span class="right"><input type="text" name="ct" value=<?php echo $_SESSION['City']; ?>></span></h5>
                                  </li>
                                  <br>
                                  <li>
                                    <h5><span class="left">Address Line 1</span></h5>
                                    <h5><span class="right"><input type="text" name="Address1" value=<?php echo $_SESSION['Address1']; ?>></span></h5>
                                  </li>
                                  <br>
                                   <li>
                                    <h5><span class="left">Address Line 2</span></h5>
                                    <h5><span class="right"><input type="text" name="Address2" value=<?php echo $_SESSION['Address2']; ?>></span></h5>
                                  </li>
                                  <br>
                                </ul>
                                <br><br><br>
                                <center>
                                  <button class="btn" name="save" >Save</button>
                                </center>
                              </div>
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
