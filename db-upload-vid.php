<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	// File upload configuration
	$targetDir = "Intro/";
    //$allowTypes = array('mp4');
	if(isset($_POST['submit'])){
        $ttl1 = $_FILES['vid']['name'];  
        $ttlpath = $targetDir . $ttl1;
        $ttl = $_FILES['vid']['tmp_name'];
        move_uploaded_file($ttl, $ttlpath);
		$sql = "INSERT INTO intro (Society_Code,Intro_Vid)
				VALUES ($Scode' ,'$ttl') ";
		$result = mysqli_query($conn,$sql);
		echo $result;
		echo $ttlpath ;
    }
    else
    {
    	$statusMsg = "Not Possible";
    }
 ?>
