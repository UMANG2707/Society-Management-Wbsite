<?php 
	require('dbconnect.php');
	session_start();
	$Scode = $_SESSION['Scode'];
	$date = date("Y-m-d");
 	$time = date("g:i a");
	if(isset($_POST['save']))
	{
		//to run PHP script on submit
		if(!empty($_POST['check_list']))
		{
			// Loop to store and display values of individual checked checkbox.
			foreach($_POST['check_list'] as $selected){
				echo $selected."</br>";
				$sql = "UPDATE payment SET Payment_Time = '$time' , Payment_Date = '$date' , Payment_Status = 1 
						WHERE User_Id = '$selected' ";
				$result = mysqli_query($conn , $sql);
				header('location:add-payment.php');
			}
		}
		else
		{
			echo "wrong";
		}
	}
	else
	{
		echo "wrong";
	}

 ?>