<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$sub = $_POST['sub'];
	$date = date("Y-m-d");
	$time = date("g:i a");
	$notice = $_POST['notice'];
	$extra = $_POST['extra'];

    $sql = "INSERT INTO notice (Society_Code , Notice_Type , Extra_Info , Details , Notice_Time , Notice_Date)
			VALUES ('$Scode' , '$subject' , '$extra' , '$notice' , '$time' , '$date')";		
	$result = mysqli_query($conn,$sql); 				
	header('location:add-notice.php'); 
?>