<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	
	$type = $_POST['type'];
	$rule = $_POST['rule'];

	$sql = "INSERT INTO rules (Society_Code , Rule_Type , Society_Rule)
			VALUES ('$Scode' , '$type' , '$rule') ";
	$result = mysqli_query($conn,$sql);

	header('location:add-rules.php');
?> 
