<?php 
	require('dbconnect.php');
 ?>

 <?php

 	$UserId = $_POST['UserId'];
 	$UserId = mysqli_real_escape_string($conn,$UserId);
 	$Type = $_POST['Type'];
 	$Scode = $_POST['Scode'];
 	$password = $_POST['password'];
 	$password = mysqli_real_escape_string($conn,$password);
 	$sql = "SELECT * FROM users WHERE User_Id = '$UserId' AND Password = '$password' AND Society_Code = '$Scode'";
 	$r = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($r);
 	if ($row = 1) {
 		session_start();
 		$result = mysqli_fetch_assoc($r);
 		$_SESSION['UserId'] = $result['User_Id'];
 		$user = $_SESSION['UserId'];
		$_SESSION['Scode'] = $result['Society_Code'];
		$Scode = $_SESSION['Scode'] ;
 		$_SESSION['BlockNo'] = $result['Block_No'];
		$_SESSION['BuildingNo'] = $result['Building_No'];
		$_SESSION['FloorNo'] = $result['Floor_No'];
 		$sql = " SELECT * FROM register WHERE Society_Code = '$Scode' ";
 		$r = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($r);
 		$_SESSION['Sname'] = $result['Society_Name'];
		$_SESSION['Address1'] = $result['Address_1'];
		$_SESSION['Address2'] = $result['Address_2'];
		$_SESSION['City'] = $result['City'];
		$_SESSION['NoBuilding'] = $result['No_Buildings'];
		$_SESSION['Contact'] = $result['Contact'];
		$_SESSION['Adname'] = $result['Admin_Name'];
		header('location:member-login.php');
	}
 	else
 	{
 		$errorm = "Invalid User Id or Password ";
 	}
 ?>