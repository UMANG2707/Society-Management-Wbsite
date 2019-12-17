<?php 
	require('dbconnect.php');                        
	$name = $_POST['name'];
	$comment = $_POST['comm'];
	$time = date("g:i a");
	$date = date("Y-m-d");

	$sql = "INSERT INTO comment (Name , Comment , Comment_Time , Comment_Date) VALUES ('$name','$comment','$time','$date') ";
	$result = mysqli_query($conn,$sql);

	header('location:index.php');


?>