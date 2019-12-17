<?php 
	require('dbconnect.php');
	session_start();
	$scode = $_SESSION['Scode'];	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
  <title>Home page</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  <script type="text/javascript" src="js/libs/jquery.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
  <script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<title></title>
	<style type="text/css">#my-file { visibility: hidden; }</style>
</head>
<body>
<input type="button" id="my-button" value="Select Files">
<input type="file" name="my_file" id="my-file">
<script type="text/javascript">
	$('#my-button').click(function(){
    $('#my-file').click();
});</script>
</body>
</html>