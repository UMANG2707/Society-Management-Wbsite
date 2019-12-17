<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];
	 
	// File upload configuration
	$targetDir = "Bills/";
    $allowTypes = array('jpg','png','jpeg','pdf');

	if(isset($_POST['submit'])){

		$year = $_POST['my'];
		$type = $_POST['type'];

		
 		// Count total files
 		
 		$bill = $_FILES['bills']['name'];
        $path = $targetDir . $bill;
        move_uploaded_file($bill, $path);
        $sql = "INSERT INTO bills (Society_Code,Bill_Type,Bill,Month_Year)
                VALUES ('$Scode' , '$type' ,'$bill' ,'$year') ";
        $result = mysqli_query($conn,$sql);
    }
    
    else
    {
    	// Display status message

    	echo $statusMsg;
    }
    
 		
 ?>