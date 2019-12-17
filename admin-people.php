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
         
        </div>
      </div>
    </div>



    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="breadcrumbs">
            <span class="clickable"><a href="index.html">Basic Details</a></span>
            <span class="delimiter">/</span>
            <span class="active-page">Society Members</span>
          </div>
        </div>
      </div>
    </div>


    <!-- Container -->


  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
            <center>
        <h3>Society Members</h3><hr>
      </center>
      <div class="row">
        <div class="col-sm-12">
          <table class="simple-table with-spacing" >
            <thead>
              <tr>
                <th>Block No.</th>
                <th>Name</th>
                <th>Contact No.</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sql = " SELECT * FROM users WHERE Society_Code = '$Scode'";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) > 0) 
                {
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                    ?>
                      <tr>
                        <td><?php echo $row['Block_No']; ?></td>
                        <td><?php echo $row['First_Name']."  " .$row['Last_Name'];?></td>
                        <td><?php echo $row['Contact_No']; ?></td>
                        <td><?php echo $row['Status']; ?></td>
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
  </div><br><br>

    <!-- Shows some of users-->

    <?php 
      require('some-users.php');
    ?>
    
    <!-- include footer -->

    <?php
      require('footer.php');
    ?>
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>