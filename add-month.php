<?php 
  require('dbconnect.php'); 
  session_start();
  $Scode = $_SESSION['Scode'];
  $MonthYear = $_POST['monthyear'];
  $rupee = $_POST['rupee'];
  $det = $_POST['det'];
  $type = $_POST['type'];
  $p = $MonthYear."-".$type;

  $sql = "INSERT INTO add_payment_type (Society_Code,Pay_Id,Pay_For,Month_Year,Details,Rupees) 
          VALUES ('$Scode','$p','$type','$MonthYear','$det','$rupee')";
  $result = mysqli_query($conn,$sql);

    $sql = " SELECT * FROM users WHERE Society_Code = '$Scode'";
    $result = mysqli_query($conn,$sql);
    $r = mysqli_num_rows($result);

    while ($row = mysqli_fetch_assoc($result)) 
    {

      $user = $row['User_Id'];
      $Lname = $row['Last_Name'];
      $s = "INSERT INTO payment (Society_Code,Pay_Id,User_Id,Name,Rupees,Month_Year)
            VALUES ('$Scode','$p','$user','$Lname','$rupee','$MonthYear')";    
      $r = mysqli_query($conn,$s);
    } 
   header('location:add-payment.php');
 ?>