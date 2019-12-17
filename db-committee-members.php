<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];
	$uid = $_POST['id'];
	$pass = $_POST['pass'];
	$sql = "SELECT Password FROM register WHERE Society_Code = '$Scode'";
	$result = mysqli_query($conn ,$sql);
	$row = mysqli_fetch_assoc($result);
	if ($pass = $row['Password']) 
	{
		$sql = "UPDATE users SET Membership = 'Committee Member' WHERE User_Id = '$uid' AND Society_Code = '$Scode' ";
		$result = mysqli_query($conn ,$sql);
	}
	else
	{}
	header('location:admin-settings-set-committee.php');
?>