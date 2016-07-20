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
<!-- Bootstrap  -->
<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/searchbar.css">

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>


<!-- LightBox -->	
<script src="js/jquery-1.7.2 (LightBox).min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

	
</head>
<body>

<div id="fh5co-container">
	
	<div id="fh5co-menus" data-section="menu">
		<div class="container">		
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="heading to-animate">Customer Reservation List</h2>
				</div>
			</div>
			
			
			<div class="row row-padded">
				<div class="col-md-12">
					<div class="fh5co-food-menu to-animate-2">
						<h2>Reservation List</h2>
						<ul>
							<?php
								//Declaring MySQL authentication credentials
								$mysql_host = "127.0.0.1";
								$mysql_user = "root";
								$mysql_pass = "";
								$mysql_db = "chillex";
							
								//Create MySQL connection
								$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
							
								// Check MySQL connection
								if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
								}

								//Define SQL Query Statement
								$query = "SELECT * FROM customer";

								//Execute SQL Query Statement
								$result = $conn->query($query);	
							
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo '
											<li>
												<div class="fh5co-food-desc">
						
													<div>
														<h3 style="color:Green"><span class="glyphicon glyphicon-user" style="color:Orange"></span>&nbsp; ' .$row["Customer_Name"] . ' </h3>
														<h3 style="color:Green"><span class="glyphicon glyphicon-envelope" style="color:Orange"></span>&nbsp; ' .$row["Customer_Email"] . '</h3>
														<h3 style="color:Green"><span class="glyphicon glyphicon-glass" style="color:Orange"></span>&nbsp; ' . $row["Customer_Occation"] . '</h3>
														<h4 style="color:Green"><span class="glyphicon glyphicon-tag" style="color:Orange"></span>&nbsp; ' .$row["Customer_Message"] . '</h4>
													</div>
												</div>
												
												<div class="fh5co-food-pricing">
													' .$row["Customer_Date"]. '
												</div>
											</li>
											<br><br>
										';	
										
									}
								}else {
									echo '<b>Reservation not found !</b>';
								}
							?>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
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
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>