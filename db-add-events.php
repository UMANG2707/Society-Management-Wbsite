<?php 
	require('dbconnect.php');
	session_start();	
	$Scode = $_SESSION['Scode'];
	 
	// File upload configuration
	$targetDir = "Events/";
    $allowTypes = array('jpg','png','jpeg','gif');

	if(isset($_POST['submit'])){

		$year = $_POST['year'];
		$name = $_POST['names'];
		$date = $_POST['date'];
		$dis = $_POST['det'];
        $ttl = $_FILES['ttl']['name'];
        $pic = $_FILES['ttl']['tmp_name'];
        $ttlpath = $targetDir . $ttl;

        move_uploaded_file($pic, $ttlpath);

		$id = $year."-".$name;

		$sql = "INSERT INTO events (Event_Id,Society_Code,Event_Name,Event_Year,Event_Date,Ttl_Img)
				VALUES ('$id' , '$Scode' , '$name' , '$year' , '$date' ,'$ttl' ) ";
		$result = mysqli_query($conn,$sql);

 		// Count total files
 		
 		$files = $_FILES['img']['name'];
		$count = count($files);

		if(!empty(array_filter($_FILES['img']['name']))){
        	foreach($_FILES['img']['name'] as $key=>$val){   
            	
            	// File upload path

            	$fileName = basename($_FILES['img']['name'][$key]);
            	$targetFilePath = $targetDir . $fileName;
            	
            	// Check whether file type is valid
     
            	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            	if(in_array($fileType, $allowTypes)){
       
    	            // Upload file to server

            		$pic = $_FILES['img']['tmp_name'][$key];
	                if(move_uploaded_file($pic, $targetFilePath)){

                        echo $fileName."<br>";
                    	$sql = "INSERT INTO images (Event_Id,Society_Code,Event_Images) 
                    			VALUES ('$id' , '$Scode' , '$fileName')";
                    	$result = mysqli_query($conn,$sql);


            		}
            		else
            		{
                		$statusMsg = "Sorry, there was an error uploading your file.";
            		}
                    
                }
                else
                {
                    $errorUpload .= $_FILES['img']['name'][$key].', ';
                }
            }
        }
        else
        {
            $errorUploadType .= $_FILES['img']['name'][$key].', ';
        }
    }
    
    else
    {
    	// Display status message
    	echo $statusMsg;
    }
    
 		
 ?>