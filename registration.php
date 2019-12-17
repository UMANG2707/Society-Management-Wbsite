<!DOCTYPE html>
<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/contacts-contact_us_big_map.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:46 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Contacts - contact us_big map</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	<br>
	<br>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="contact-form-shortcode contact-form">
						<div class="contact-form-entry">
							<h2 class="block-title inversed">Register Your Society</h2><br>
							<form method="post" action="dbregistration.php" autocomplete="autocomplete" class="form style-2">
								<div class="row">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="Sname" required="required" placeholder="Society Name *">
										<input type="text" class="form-control" name="Address1" required="required" placeholder="Address Line 1 * ">
										<input type="text" class="form-control" name="Address2" required="required" placeholder="Address Line 2  ">
										<input type="text" class="form-control" name="City" required="required" placeholder="City *">
										<input type="text" class="form-control" name="NoBuildings" required="required" placeholder="No of Buildings *" min="1" max="20" onchange="Buildings(this.value)">
										
										<!-- Buildings -->
										<div class="col-sm-12" id="building"></div>

										<input type="text" class="form-control" name="Aname" required="required" placeholder="Name of Admin *">
										<input type="tel" class="phone-number form-control" pattern="[0-9]{10}" name="contact" required="required" placeholder="Phone Number">
										<input type="Date" class="phone-number form-control" name="bdate" required="required" placeholder="Birth Date"><br>
										<input type="password" class="form-control" name="Pass" required="required" minlength="6" placeholder="Password *"><br>
										<input type="password" class="form-control" name="CPass" required="required" placeholder="Confirm Password *">

									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<button class="send-btn" name="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="empty-space"></div>
		</div>
	</div>
	<script type="text/javascript">
		function Buildings(NoBuildings){

			for(var i=1 ; i<= NoBuildings ; i++)
			{
				var b = document.getElementById('building');

				var head = document.createElement('h5');
				var bk = document.createElement('br');
				var hl = document.createElement('hr');
				var text = document.createTextNode("Building " + i);
				var head = head.appendChild(text);
				var heading = b.appendChild(head);
				var heading = b.appendChild(bk);
				var heading = b.appendChild(bk);
				var heading = b.appendChild(hl);
				
				var floorno = document.createTextNode('No of Floors in Building * ');
				var floorno = b.appendChild(floorno);
				var floor = b.appendChild(bk);
				var x = document.createElement('input');
				x.setAttribute('type' , 'number');
				x.setAttribute('class' , 'form-control');
				x.setAttribute('name' , 'NoFloors' + i);
				x.setAttribute('required' , 'required');
				
				var floor  = b.appendChild(x);
				var floor  = b.appendChild(bk);

				var blockno = document.createTextNode('No of Blocks per Floor * ');
				var blockno = b.appendChild(blockno);
				var block = b.appendChild(bk);
				var y = document.createElement('input');
				y.setAttribute('type' , 'number');
				y.setAttribute('class' , 'form-control');
				y.setAttribute('required' , 'required');
				y.setAttribute('name' , "NoBlocks" + i);
				var blocks = b.appendChild(y);
				var blocks = b.appendChild(bk);				
			}						
		}
	</script>
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
	<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
<!-- Mirrored from static.pixum.co/up-real-estate-html/contacts-contact_us_big_map.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 06:26:46 GMT -->
</html>