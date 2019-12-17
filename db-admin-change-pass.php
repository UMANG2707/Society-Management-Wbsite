<?php 
	require('dbconnect.php');
	$Sc = $_POST['sc'];
	$op = $_POST['op'];
	$np = $_POST['np'];
	$cnp = $_POST['cnp'];
	if (isset($_POST['Change']) AND $Scode == $Sc)
	{
		if ($np == $cnp) {
			$sql = "UPDATE register SET Password = '$np' WHERE Society_Code = '$Scode'";
			$result = mysqli_query($conn,$sql);
		}
		else
		{
			$error = "New Password and Confirm Password are different";
		}
	}
	else
	{
		$error = "Invalid Society Code";
	}
?>