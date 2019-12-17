<?php 
  require('dbconnect.php');
  session_start();
  $Scode = $_SESSION['Scode'];
  $user = $_SESSION['UserId'];
 ?>
  <?php 
    
    $month =date('Y-m');
    $s = "SELECT * FROM add_payment_type WHERE Society_Code = '$Scode' AND Month_Year = '$month'";
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
    require('header-user.php');
  ?>

  <!-- banner -->

  <div class="home-banner style-4">
    <div class="container">
      <div class="banner-content">
        <div class="banner-message">
          
        </div>
      </div>
    </div>
  </div>

    <!-- Container -->

        <br>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="breadcrumbs">
                <span class="clickable"><a href="index.html">Basic Details</a></span>
                <span class="delimiter">/</span>
                <span class="active-page">Payments</span>
              </div>
            </div>
          </div><br>
          <form action="your-payment.php" method="post">
            <button class="btn btn-primary pull-right" name="up">Your Payments</button><br><br>
          </form>
        </div>
      

  <!-- Container -->


  
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1"> 
      <?php
        while($rows = mysqli_fetch_assoc($r))
        {
          $p = $rows['Pay_Id'];
          $rupee = $rows['Rupees'];
          ?>
            <center>
              <h3><?php echo $rows['Pay_Id'];?></h3>
              <h5 style="color: grey;"><?php echo $rows['Details'];?></h5><hr>
            </center>
              <div class="row">
                <div class="col-sm-12">
                  <table class="simple-table with-spacing" >
                    <thead>
                      <tr>
                        <th>Block No.</th>
                        <th>Name</th>
                        <th>Month-Year</th>
                        <th>Rupees</th>
                        <th>Payment</th>
                      </tr>
                    </thead>
                    <tbody>            
                    <?php 
                      $sql = " SELECT * FROM payment WHERE Society_Code = '$Scode' AND Month_Year = '$month' AND Pay_Id = '$p' ";
                      $result = mysqli_query($conn,$sql);
                      if (mysqli_num_rows($result) > 0) 
                      {
                        while($row = mysqli_fetch_assoc($result)) 
                        {
                          ?>
                            <tr>
                              <td><?php echo $row['User_Id']; ?></td>
                              <td><?php echo $row['Name'];?></td>
                              <td><?php echo $row['Month_Year']; ?></td>
                              <td><?php echo $rows['Rupees']; ?></td>
                              <?php 
                                if($row['Payment_Status'] == 1)
                                {
                                  $f = "checked";
                                }
                                else
                                {
                                  $f = "cs";
                                }                           
                              ?>
                              <td><input type="checkbox" class="custom-control-input" <?php echo $f; ?> disabled></td>
                            </tr>
                          <?php
                        }           
                      }                         
                    ?>
                    </tbody>
                  </table>
                  <hr>
                  <div>
                    <?php
                      $tm = "SELECT COUNT(Pay_Id) AS tm
                                FROM payment
                                WHERE Society_Code = '$Scode' AND Pay_Id = '$p' ";
                      $tmr = mysqli_query($conn,$tm);
                      $tmrr = mysqli_fetch_assoc($tmr);
                      $tmember = $tmrr['tm'];
                      $total = $tmember*$rupee;


                      $count = "SELECT COUNT(Pay_Id) AS Total
                                FROM payment
                                WHERE Society_Code = '$Scode' AND Pay_Id = '$p' AND Payment_Status=1";
                      $c = mysqli_query($conn,$count);
                      $cc = mysqli_fetch_assoc($c);
                      $x = $cc['Total'];
                      $collected = $x*$rupee;

                      $pendding = $total - $collected;
                    ?>
                    <span style="color: yellow; font-size: 16px;">Total : <?php echo $total; ?></span><br>
                    <span style="color: green; font-size: 16px;"> Collected : <?php echo $collected; ?></span><br>
                    <span style="color: red; font-size: 16px;"> Pendding : <?php echo $pendding; ?></span><br>
                  </div>
                </div>
              </div><hr>
            <?php
        }
      ?>  
    </div>
  </div>
<br>
<br>

  <!-- Shows some of users-->

  <?php 
    require('some-users.php');
  ?>
  
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>