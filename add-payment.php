<?php 
  require('dbconnect.php');
  session_start();
  $Scode = $_SESSION['Scode'];
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
        </div>
      </div>

  <!-- Container -->
 
  <?php
    $date = date("Y-m");
  ?>
  <br>

  <div id="content" class="container-fluid">
    <div class="container">
      <div class="empty-space"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="request-contact-form">
            <div class="heading">
              <span class="small">ADD</span>
              <span class="big">Payment Details</span>
            </div>
            <div class="contact-form">
              <form action="add-month.php" method="post" autocomplete="autocomplete">
                     <Select type="text" class="form-control" name="type" required="required">
                            <option>Maintenance</option>
                            <option>Events</option>
                            <option>Renovation</option>
                            <option>Extra Need</option>
                          </Select>
                <br> <input type="number" class="form-control" name="rupee" required="required" placeholder="Rupees">
                <br> <textarea type="number" class="form-control" name="det" required="required" placeholder="Details"></textarea>
                <input type="month" class="form-control" name="monthyear" required="required"><br><br>
                <button class="send-btn" name="add">Add </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
        <form method="post" action="db-payment.php">
           <center>
            <button class="btn btn-primary btn-bg" name="save">Save</button><br>
           </center>
          <div class="row">
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
                                $sql = " SELECT * FROM payment WHERE Society_Code = '$Scode' AND Month_Year = '$date' AND Pay_Id = '$p' ";
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
                                            $f = " ";
                                          }
                                    
                                        ?>
                                        <td><input type="checkbox" class="custom-control-input" name = "check_list[]" value=<?php echo $row['User_Id']; ?> <?php echo $f; ?> ></td>
                                      </tr>
                                    <?php
                                  }           
                                }                         
                              ?>
                             
                          </tbody>
                        </table><hr>
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
              </div>
            </div><hr>
          <?php
        }
      ?>    
      </div>
    </div>
   </form>
  </div>
  <br><br>
  
  <!-- Shows some of users-->

  <?php 
    require('some-users.php');
  ?>
  
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>