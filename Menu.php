<script src="js/jquery-1.7.2 (LightBox).min.js"></script>
<script src="js/lightbox.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

<div id="fh5co-menus" data-section="menu">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Food Menu</h2>
				<p class="sub-heading to-animate">"First we eat, then we do everything else". Check our Menu to view more Foods and Beverages. </p>
			</div>
		</div>
		
		
		<div class="row row-padded">
			<div class="col-md-6">
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
							$query_1 = "SELECT * FROM dishes LIMIT 8, 1";
							$query_2 = "SELECT * FROM dishes LIMIT 9, 1";
							$query_3 = "SELECT * FROM dishes LIMIT 10, 1";
							$query_4 = "SELECT * FROM dishes LIMIT 11, 1";

							//Execute SQL Query Statement
							$result_1 = $conn->query($query_1);	
							$result_2 = $conn->query($query_2);	
							$result_3 = $conn->query($query_3);	
							$result_4 = $conn->query($query_4);	
						
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 74);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
							
							if($result_2->num_rows > 0){
								while($row = $result_2->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 62);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
							
							if($result_3->num_rows > 0){
								while($row = $result_3->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 73);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
							
							if($result_4->num_rows > 0){
								while($row = $result_4->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 76);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
			
			
			<div class="col-md-6">
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
							$query_1 = "SELECT * FROM dishes LIMIT 12, 1";
							$query_2 = "SELECT * FROM dishes LIMIT 13, 1";
							$query_3 = "SELECT * FROM dishes LIMIT 14, 1";
							$query_4 = "SELECT * FROM dishes LIMIT 15, 1";

							//Execute SQL Query Statement
							$result_1 = $conn->query($query_1);	
							$result_2 = $conn->query($query_2);	
							$result_3 = $conn->query($query_3);	
							$result_4 = $conn->query($query_4);	
							
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 68);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_2->num_rows > 0){
								while($row = $result_2->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 66);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_3->num_rows > 0){
								while($row = $result_3->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 77);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_4->num_rows > 0){
								while($row = $result_4->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 106);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
			
			
			<div class="col-md-6">
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
							$query_1 = "SELECT * FROM dishes LIMIT 16, 1";
							$query_2 = "SELECT * FROM dishes LIMIT 17, 1";
							$query_3 = "SELECT * FROM dishes LIMIT 18, 1";
							$query_4 = "SELECT * FROM dishes LIMIT 19, 1";

							//Execute SQL Query Statement
							$result_1 = $conn->query($query_1);	
							$result_2 = $conn->query($query_2);	
							$result_3 = $conn->query($query_3);	
							$result_4 = $conn->query($query_4);	
							
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 65);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_2->num_rows > 0){
								while($row = $result_2->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 63);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_3->num_rows > 0){
								while($row = $result_3->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 77);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_4->num_rows > 0){
								while($row = $result_4->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 106);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
			
			
			<div class="col-md-6">
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
							$query_1 = "SELECT * FROM dishes LIMIT 20, 1";
							$query_2 = "SELECT * FROM dishes LIMIT 21, 1";
							$query_3 = "SELECT * FROM dishes LIMIT 22, 1";
							$query_4 = "SELECT * FROM dishes LIMIT 23, 1";

							//Execute SQL Query Statement
							$result_1 = $conn->query($query_1);	
							$result_2 = $conn->query($query_2);	
							$result_3 = $conn->query($query_3);	
							$result_4 = $conn->query($query_4);	
							
							if($result_1->num_rows > 0){
								while($row = $result_1->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 68);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_2->num_rows > 0){
								while($row = $result_2->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 56);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_3->num_rows > 0){
								while($row = $result_3->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 56);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
								
							if($result_4->num_rows > 0){
								while($row = $result_4->fetch_assoc()){
									$row["Dishes_Description"] = substr_replace($row["Dishes_Description"], '', 64);
									echo '
										<li>
											<div class="fh5co-food-desc">
												<figure>
													<a href="images/Dishes/Dishes_Name/' . $row["Dishes_Name"] . '.jpg" rel="lightbox">
													<img src="images/Dishes/Dishes_ID/' . $row["Dishes_ID"] . '.jpg" class="img-responsive" alt="Chocolate Mug Milkshake"></a>
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
		
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
				<p><a href="More_Food_Menu.php" class="btn btn-primary btn-outline">More Food Menu</a></p>
			</div>
		</div>
	</div>
</div>

