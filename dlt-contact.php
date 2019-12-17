<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$Id  = $_GET['id'];
	$sql = "DELETE FROM impcontact WHERE Id = '$Id'";
	$result = mysqli_query($conn,$sql);
	header('location:add-imp-contacts.php')

?>