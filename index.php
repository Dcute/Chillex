<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Chillex &mdash; A Place for You To Enjoy Food</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
<!-- Animate.css -->
<link rel="stylesheet" href="css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="css/icomoon.css">
<!-- Simple Line Icons -->
<link rel="stylesheet" href="css/simple-line-icons.css">
<!-- Datetimepicker -->
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<!-- Flexslider -->
<link rel="stylesheet" href="css/flexslider.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/style.css">

<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>

<div id="fh5co-container">
	<div id="fh5co-home" class="js-fullheight" data-section="home">
		<div class="flexslider">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-text">
				<div class="container">
					<div class="row">
						<h1 class="to-animate">Chillex</h1>
						<h2 class="to-animate">A Place <span>for</span> you To Enjoy Food</h2>
					</div>
				</div>
			</div>
				
		  	<ul class="slides">
				<li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
				<li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
				<li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
		  	</ul>
		</div>
	</div>
		
		
	<?php 
		include("Header.php");
			
		include("About_Us.php"); 
			
		include("Quotes.php");
		
		include("Features.php");
			
		include("Menu_Quotes.php");
			
		include("Menu.php");
			
		include("Events.php");
			
		include("Reservation.php");
	?>
		
</div>
	
	<?php
		include("Footer.php");
	?>
	

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Bootstrap DateTimePicker -->
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<script>
	$(function () {
       $('#date').datetimepicker();
   });
</script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>