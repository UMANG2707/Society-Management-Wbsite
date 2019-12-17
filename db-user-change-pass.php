<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$Uid = $_SESSION['UserId'];

	$opass = $_POST['opass'];
	$npass = $_POST['npass'];
	$cnpass = $_POST['cnpass'];
	$sql = "SELECT Password FROM users WHERE User_Id = '$Uid' AND Society_Code='$Scode'";
	$result = mysqli_query($conn,$sql);
	$r = mysqli_fetch_assoc($result);

	if ($opass == $r['Password']) {
		if ($npass == $cnpass) {
			$sql = "UPDATE users SET Password = '$npass' WHERE User_Id = '$Uid' AND Society_Code = '$Scode' ";
			$result = mysqli_query($conn,$sql);
		}
		else
		{

		}
	}
	else
	{
		
	}
?>