<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];
	$name =  $_POST['name'];
	$cnt = $_POST['cnt'];
	$type =  $_POST['work'];
	$add = $_POST['address'];
	$pass = $_POST['pass'];

	$sql = "SELECT Password FROM register WHERE Society_Code = '$Scode' ";
	$result = mysqli_query($conn,$sql);
	$r = mysqli_fetch_assoc($result);
	if ($pass = $r['Password']) {
		$sql = "SELECT User_Id FROM staff_members WHERE Society_Code = '$Scode' ";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result)) 
		{
	       	$array[] = $row['User_Id'];       			
	    }  
	   	$n = substr($type,0,3);
		$uid = $Scode."-".$n ;
	   	if(!in_array($uid, $array))
		{
			
			$sql = "INSERT INTO staff_members (Society_Code,User_Id,Name,Work,Contact_No,Address) VALUES ('$Scode' , '$uid' ,'$name' , '$type' , '$cnt' , '$add' ) ";
			$result = mysqli_query($conn,$sql);
		}
		else
		{
			echo "already exist";
		}			
	}
	else
	{

	}

?>