<?php 
	require('dbconnect.php');
 ?>

 <?php

 		session_destroy();
 		header('location: index.php');
 	
 ?>