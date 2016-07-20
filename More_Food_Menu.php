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
					<h2 class="heading to-animate">Food Menu List</h2>
					<p class="sub-heading to-animate">Check It Out our Menu.<br> 
					Our menu contains Drinks, Dessert, Western Food and More!<br>
					We will make sure that every dishes will satitisfied your taste.</p>
				</div>
				
				<form method="get" action="Search_Function.php">
					<div id="custom-search-input">
						<div class="input-group col-md-12">
							<input style="padding-left:20px;" type="text" name="user_search" class="search-query form-control" placeholder="Type here to search Food..." />
							
							<span class="input-group-btn">
								<button class="btn btn-danger" type="button">
									<span class=" glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</div>
				</form>
				
			</div>
			
			<div class="row row-padded">
				<div class="col-md-12">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-drinks">Drinks</h2>
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
								$query = "SELECT * FROM dishes WHERE Dishes_Category = 'Drinks'";

								//Execute SQL Query Statement
								$result = $conn->query($query);	
							
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo '
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
														<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive"></a>
													</figure>
						
													<div>
														<h3>' .$row["Dishes_Name"] . '</h3>
														<p>' . $row["Dishes_Description"] .  '</p>
													</div>
												</div>
												
												<div class="fh5co-food-pricing">
													'.$row["Dishes_Prices"]. '
												</div>
											</li>
											<br><br>
										';	
										
									}
								}else {
									echo '<b>Dishes not found !</b>';
								}
							?>
						</ul>
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-dessert">Dessert</h2>
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
								$query = "SELECT * FROM dishes WHERE Dishes_Category = 'Dessert'";

								//Execute SQL Query Statement
								$result = $conn->query($query);	
							
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo '
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
														<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive"></a>
													</figure>
						
													<div>
														<h3>' .$row["Dishes_Name"] . '</h3>
														<p>' . $row["Dishes_Description"] .  '</p>
													</div>
												</div>
												
												<div class="fh5co-food-pricing">
													'.$row["Dishes_Prices"]. '
												</div>
											</li>
											<br><br>
										';	
									}
								}else {
									echo '<b>Dishes not found !</b>';
								}
							?>
						</ul>
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-meat">Western</h2>
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
								$query = "SELECT * FROM dishes WHERE Dishes_Category = 'Meat'";

								//Execute SQL Query Statement
								$result = $conn->query($query);	
							
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo '
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
														<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive"></a>
													</figure>
						
													<div>
														<h3>' .$row["Dishes_Name"] . '</h3>
														<p>' . $row["Dishes_Description"] .  '</p>
													</div>
												</div>
												
												<div class="fh5co-food-pricing">
													'.$row["Dishes_Prices"]. '
												</div>
											</li>
										';	
									}
								}else {
									echo '<b>Dishes not found !</b>';
								}
							?>		
						</ul>
					</div>
				</div>
				
				
				<div class="col-md-12">
					<div class="fh5co-food-menu to-animate-2">
						<h2 class="fh5co-vegetable">Vegetarian</h2>
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
								$query = "SELECT * FROM dishes WHERE Dishes_Category = 'Vegetable'";

								//Execute SQL Query Statement
								$result = $conn->query($query);	
							
								if($result->num_rows > 0){
									while($row = $result->fetch_assoc()){
										echo '
											<li>
												<div class="fh5co-food-desc">
													<figure>
														<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
														<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive"></a>
													</figure>
						
													<div>
														<h3>' .$row["Dishes_Name"] . '</h3>
														<p>' . $row["Dishes_Description"] .  '</p>
													</div>
												</div>
												
												<div class="fh5co-food-pricing">
													'.$row["Dishes_Prices"]. '
												</div>
											</li>
										';	
									}
								}else {
									echo '<b>Dishes not found !</b>';
								}
							?>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
				<p><a href="index.php" class="btn btn-primary btn-outline">Back to Home Page</a></p>
			</div>
		</div>
		<br><br>
		
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