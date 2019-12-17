<?php 
	require('dbconnect.php');
?>
 <?php 
	session_start();
	$Scode = $_SESSION['Scode'];
	$Type = $_POST['types'];
	$Name = $_POST['names'];
	$Contact = $_POST['contacts'];
	$Address = $_POST['Address'];

		$sql = " SELECT Contact_No FROM impcontacts ";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_array($result)) 
			{
    	    	$array[] = $row['Contact_No'];       			
    		}
    		if (! in_array($Contact, $array)) {
    		   	$sql = "INSERT INTO impcontacts (Society_Code,Type,Name,Contact_No,Address)
					VALUES ('$Scode' , '$Type' , '$Name' , '$Contact' , '$Address')";		
				$result = mysqli_query($conn,$sql); 
				echo "done";				
    		}
    		else
    		{
    			echo "already exist";
    		}    			
		}
		else
		{
				$sql = "INSERT INTO impcontacts (Society_Code,Type,Name,Contact_No,Address)
						VALUES ('$Scode' , '$Type' , '$Name' , '$Contact' , '$Address')";		
				$result = mysqli_query($conn,$sql); 
				echo "done";
		} 	
		header('location:add-imp-contacts.php');
 ?>