<?php 
	require('dbconnect.php');
	$Scode = $_SESSION['Scode'];
	$ud = $_POST['ud'];
	$pd = $_POST['pd'];
	if (isset($_POST['reset']))
	{
		$sql = "SELECT Password FROM register WHERE Society_Code= '$Scode'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if($pd = $row['Password']) 
		{
			$sql = "DELETE Family_Members,Statuse,Contact_No ,Profile_Pic,Membership FROM users WHERE Society_Code = '$Scode' AND User_Id = '$ud'";
			$result = mysqli_query($conn,$sql);
			if ($result) 
			{
				header('location:admin-settings-reset-user.php');
			}
			else
			{
				$error = "inavalid User Id";
			}
		}
		else
		{
			$error = "Wrong Password";	
		}			
	}
	else
	{
		
	}
?>