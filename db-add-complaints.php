<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$user = $_SESSION['UserId'];
	$sub = $_POST['sub'];
	$comp = $_POST['comp'];
  	$sql = " SELECT * FROM users WHERE User_Id = '$user' AND Society_Code='$Scode'";
    $result = mysqli_query($conn,$sql);
    $r = mysqli_num_rows($result);
 	$row = mysqli_fetch_assoc($result); 
 	$date = date("Y-m-d");
 	$time = date("g:i a");

 	echo $date;
 	echo "<br>";
 	echo $time; 

 	if ($r == 1) {
 		
 		$blockNo =$row['Block_No'];
 		$sql = "INSERT INTO complaints (Society_Code , User_Id ,Comp_Sub ,Complainer_Block_No ,Complaint , Comp_date , Comp_Time) VALUES ('$Scode' , '$user' , '$sub' , '$blockNo' , '$comp' , '$date' , '$time' ) ";
 		$result = mysqli_query($conn,$sql);
 	}
 	else
 	{
 		echo "AXA";
 	}

 	//header('location: add-complaints.php');
?>

