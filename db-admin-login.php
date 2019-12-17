<?php 
	require('dbconnect.php');

 	if(isset($_POST['Alogin']))
 	{
 		$password = $_POST['password'];
 		$password = mysqli_real_escape_string($conn,$password);
 		$Scode = $_POST['Scode'];
	 	$sql =  " SELECT Society_Code FROM register WHERE Society_Code = '$Scode' AND Password = '$password' ";
 		$result  = mysqli_query($conn,$sql); 	
 		$row = mysqli_num_rows($result);
	 	if($row == 1)
	 	{
	 		$sql = " SELECT * FROM register WHERE Society_Code = '$Scode' ";
	 		$r = mysqli_query($conn,$sql);
			$result = mysqli_fetch_assoc($r);
	 		session_start();
	 		$_SESSION['Scode'] = $Scode;
	 		$_SESSION['Sname'] = $result['Society_Name'];
			$_SESSION['Address1'] = $result['Address_1'];
			$_SESSION['Address2'] = $result['Address_2'];
			$_SESSION['City'] = $result['City'];
			$_SESSION['NoBuilding'] = $result['No_Buildings'];
			$_SESSION['Contact'] = $result['Contact'];
			$_SESSION['Adname'] = $result['Admin_Name'];

			header('location:admin-login.php');
		}
		else
		{
			$error = "invalid User Id or Password";
		}
	}
	else if(isset($_POST['save'])){
		session_start();
		$Scode = $_SESSION['Scode'];
		$sname = $_POST['sname'];
		$nb = $_POST['nb'];
		$cnt = $_POST['cnt'];
		$aname = $_POST['an'];
		$ct = $_POST['ct'];
		$add1 = $_POST['Address1'];
		$add2 =$_POST['Address2'];
		$sql = "UPDATE register SET Society_Name='$sname',No_Buildings='$nb ', Contact='$cnt' , Admin_Name='$cnt',City='$ct' ,Address_1='$add1' , Address_2 = '$add2'
				WHERE Society_Code = '$Scode'";
		$result = mysqli_query($conn , $sql);
		$sql = " SELECT * FROM register WHERE Society_Code = '$Scode' ";
	 		$r = mysqli_query($conn,$sql);
			$result = mysqli_fetch_assoc($r);
	 		//session_start();
	 		$_SESSION['Scode'] = $Scode;
	 		$_SESSION['Sname'] = $result['Society_Name'];
			$_SESSION['Address1'] = $result['Address_1'];
			$_SESSION['Address2'] = $result['Address_2'];
			$_SESSION['City'] = $result['City'];
			$_SESSION['NoBuilding'] = $result['No_Buildings'];
			$_SESSION['Contact'] = $result['Contact'];
			$_SESSION['Adname'] = $result['Admin_Name'];
			header('location:admin-login.php');
	}
	else
	{
		
	}
	
 ?>

