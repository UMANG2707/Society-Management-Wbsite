<?php 
	require('dbconnect.php');
 
	$Scode = $_POST['Scode'];
	$BuildingNo = $_POST['BuildingNo'];
	$FloorNo = $_POST['FloorNo'];
	$BlockNo = $_POST['BlockNo'];
	$contact = $_POST['contact'];
	$Pass = $_POST['Password'];
	$Pass = mysqli_real_escape_string($conn,$Pass);
	$CPass = $_POST['CPassword'];
	$CPass = mysqli_real_escape_string($conn,$CPass);
	$UserId = $BuildingNo . "-" . $BlockNo;
	$UserId = mysqli_real_escape_string($conn,$UserId);
	
	if (isset($_POST['submit'])) {
		if ($Pass === $CPass) {
			$array = array();
			$sql = " SELECT Society_Code FROM register ";
			$result = mysqli_query($conn,$sql);	
			if (mysqli_num_rows($result) > 0) {	
				while($row = mysqli_fetch_array($result)) {
        			$array[] = $row['Society_Code'];       			
    			}
    			if (in_array($Scode, $array)) {
    				$sql = "SELECT User_Id FROM users";
    				$result = mysqli_query($conn,$sql);
    				if (mysqli_num_rows($result) > 0) {	
						while($row = mysqli_fetch_array($result)) {
        					$arrayuser[] = $row['User_Id'];       			
    					}
    					if (! in_array($UserId, $arrayuser)) {
    						$sql = "INSERT INTO users (User_Id , Society_Code , Block_No , Building_No , Floor_No , Password )
    			 				VALUES ( '$UserId' , '$Scode' , '$BlockNo' , '$BuildingNo' , '$FloorNo' , '$Pass')";
    			 			$result = mysqli_query($conn , $sql);
    			 			echo "run";
    			 		}
    			 		else {
    			 			echo "already User Exist";
    			 		}
    			 	}
    			 	else
    			 	{
    			 		$sql = "INSERT INTO users (User_Id , Society_Code , Block_No , Building_No , Floor_No , Password )
    			 			VALUES ( '$UserId' , '$Scode' , '$BlockNo' , '$BuildingNo' , '$FloorNo' , '$Pass')";
    			 		$result = mysqli_query($conn , $sql);
    					echo "run";
    		 		} 	
    			} 
    			else
    			{

    			}
    			echo "ok";
			}
			else
			{

			}
		}
		else
		{
			
		}
	}
	else
	{
	
	} 
?>