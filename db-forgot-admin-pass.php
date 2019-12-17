<?
	require('dbconnect.php');
	$np = $_POST['np'];
	$cnp = $_POST['cnp'];
	$bd = $_POST['bd'];
	$Scode = $_POST['sc'];
	if($np == $cnp) 
	{
		$sql = "SELECT * FROM register WHERE Society_Code = '$Scode' AND Admin_Bdate = '$bd'";
		$result = mysqli_query($conn,$sql);
		if($r = mysqli_fetch_assoc($result))
		{
			$sql = "UPDATE register SET Password = '$np' WHERE Society_Code = '$Scode'";
			$result = mysqli_query($conn,$sql);
			if($result)
			{
				$rr = "Done !!";
				echo $rr;
			}
			else
			{
				echo "cesf";
			}
		}
		else
		{
			$error = "Invalid society code or birthdate";
			echo $error;
		}
	}
	else
	{
		$error = "Password And Confirm Password both are different";
			echo $error;
	}
?>