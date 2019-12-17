<?php 
	require('dbconnect.php');
	// File upload configuration
	$targetDir = "Profiles/";
    $allowTypes = array('jpg','png','jpeg','gif');

	$name = $_POST['name'];
	$cnt = $_POST['cnt'];
	$Bdate = $_POST['Bdate'];
	$relation = $_POST['rel'];
	$ttl = $_FILES['ttl']['name'];
	$pic = $_FILES['ttl']['tmp_name'];
    $ttlpath = $targetDir . $ttl;
    move_uploaded_file($pic, $ttlpath);

		$sql = "INSERT INTO families (Society_Code,User_Id,Name,Birth_Date,Relation,Contact_No,Profile_Pic)
				VALUES ('$Scode' , '$user' , '$name' , '$Bdate' , '$relation' , '$cnt' , '$ttl') ";
		$result = mysqli_query($conn,$sql);


        	
    

?>