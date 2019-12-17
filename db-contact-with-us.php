<?php 
	
	require('dbconnect.php');
	session_start();
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$phone = $_POST['phone-number'];
	$msg = $_POST['message'];
	$sql = "INSERT INTO contact_with_us (Name , Contact_Number , E_mail , Message ) VALUES ('$name' , '$phone' ,'$email' , '$msg') ";
	$result = mysqli_query($conn,$sql);

?>
