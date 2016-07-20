<?php
	session_start();
	if(isset($_SESSION['userSession'])!="")
	{
		header("Location: Admin_Panel.php");
	}
	include_once 'DatabaseConnect.php';
	
	if(isset($_POST['submit']))
	{	
		$dishID = $MySQLi_CON->real_escape_string(trim($_POST['dishesID']));
		$dishNAME = $MySQLi_CON->real_escape_string(trim($_POST['dishesName']));
		$dishCATEGORY = $MySQLi_CON->real_escape_string(trim($_POST['dishesCategory']));
		$dishPRICES = $MySQLi_CON->real_escape_string(trim($_POST['dishesPrices']));
		$dishDESCRIPTION = $MySQLi_CON->real_escape_string(trim($_POST['dishesDescription']));
		
		$check_dishID = $MySQLi_CON->query("SELECT Dishes_ID FROM dishes WHERE Dishes_ID='$dishID'");
		$count=$check_dishID->num_rows;
		
		if($count==0){
			
			$problem = False;
				
				if(empty($_POST['dishesID'])){
					$problem = True;
				}
					
				if(empty($_POST['dishesName'])){
					$problem = True;
				}
				
				if(empty($_POST['dishesCategory'])){
					$problem = True;
				}
					
				if(empty($_POST['dishesPrices'])){
					$problem = True;
				}
					
				if(empty($_POST['dishesDescription'])){
					$problem = True;
				}
				
				$query = "INSERT INTO dishes(Dishes_ID, Dishes_Name, Dishes_Category, Dishes_Prices, Dishes_Description) VALUES ('$dishID', '$dishNAME', '$dishCATEGORY', '$dishPRICES', '$dishDESCRIPTION')";
				
				if($MySQLi_CON->query($query)){
					$msg = "<div class='alert alert-success'>
								<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
							</div>";
				}else{
					$msg = "<div class='alert alert-danger'>
								<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
							</div>";
				}
			
		}else{
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry Dishes ID already taken !
					</div>";
		}
	}
	
	$MySQLi_CON->close();
?>

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

<script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body>

<div id="fh5co-container">
	<div id="fh5co-contact" data-section="reservation">
		<div class="container">
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="heading to-animate">Admin Panel</h2>
				</div>
			</div>
			
			<div class='alert alert-info'>
				<span class='glyphicon glyphicon-asterisk'></span> &nbsp; This is the admin panel that admin can directly insert information into database.
			</div>
						
			<div class="row">
				<div class="col-md-6 to-animate-2">			
					
					<h3>Upload Dishes Information</h3>
					
					<?php	
						if(isset($msg)){
							echo $msg;
						}
					?>
					
					<form method="POST" action="">
					
						<div class="form-group ">
							<label for="dishesID" class="sr-only">Dishes ID</label>
							<input class="form-control" placeholder="Dishes ID" name="dishesID" type="number" value="<?php if(isset($_POST['dishesID'])){print htmlspecialchars($_POST['dishesID']);}?>" required>
						</div>
						
						<div class="form-group ">
							<label for="dishesName" class="sr-only">Dishes Name</label>
							<input class="form-control" placeholder="Dishes Name" name="dishesName" type="text" value="<?php if(isset($_POST['dishesName'])){print htmlspecialchars($_POST['dishesName']);}?>" required>
						</div>
						
						<div class="form-group">
							<label for="dishesCategory" class="sr-only">Occation</label>
							<select name="dishesCategory" class="form-control" id="occation" value="<?php if(isset($_POST['dishesCategory'])){print htmlspecialchars($_POST['dishesCategory']);}?>" required>
								<option>Select Dishes Category</option>
								<option>Drinks</option>
								<option>Dessert</option>
								<option>Meat</option>
								<option>Vegetable</option>
							</select>
						</div>
						
						<div class="form-group ">
							<label for="dishesPrices" class="sr-only">Dishes Prices</label>
							<input class="form-control" placeholder="Dishes Prices" name="dishesPrices" type="text" value="<?php if(isset($_POST['dishesPrices'])){print htmlspecialchars($_POST['dishesPrices']);}?>" required>
						</div>
						
						<div class="form-group ">
							<label for="dishesDescription" class="sr-only">Dishes Description</label>
							<textarea name="dishesDescription" cols="30" rows="5" class="form-control" placeholder="Dishes Description" value="<?php if(isset($_POST['dishesDescription'])){print htmlspecialchars($_POST['dishesDescription']);}?>" required></textarea>
						</div>
						<br>			
					
						<div class="form-group ">
							<input class="btn btn-primary" value="Insert" name="submit" type="submit" style="width: 120px;">
						</div>
					</form>
					
				</div>
			
				<h3>Upload Dishes Image (ID)</h3>
				
				<?php
					if(isset($_POST['submit_A']))
					{
						$errors = array(); //declaration of an array which we will use to display error
						$image = $_FILES['imageA']['name']; //taking the file name and storing in variable $file_name
						$file_tmp = $_FILES['imageA']['tmp_name'];
							
						if(empty($image)){
							$errors[] = "<div class='col-md-6 to-animate-2'>
											<div class='alert alert-danger'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Upload an Image !
											</div>
										</div>";
						}		
								
						if(empty($errors)){ //if the error array is empty, and no errors which means all things is functionable
							move_uploaded_file($file_tmp, 'images/Dishes/Dishes_ID/' .$image); //Upload a copy of the image to the folder 
							$errors[]= "<div class='col-md-6 to-animate-2'>
											<div class='alert alert-success'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Upload Image Successfully !
											</div>
										</div>";
						}else{
							foreach($errors as $err){
								echo "<font color='red'><b>$err</b></font>";
							}
						}
								
						foreach($errors as $err){
							echo "$err";
						}
							
					}
				?>
					
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group" method="POST" enctype="multipart/form-data">
						Insert an Image (Rename Your image = Dishes ID):
						<input type="file" name="imageA" required>
									
						<br>
						<input class="btn btn-primary" type="submit" name="submit_A" value="Upload">
					</div>
				</form>
				<br>
						
				<h3>Upload Dishes Name (Name)</h3>
				
				<?php
					if(isset($_POST['submit_B']))
					{
						$errors = array();
						$image = $_FILES['imageB']['name'];
						$file_tmp = $_FILES['imageB']['tmp_name'];
						
						if(empty($image)){
							$errors[]="<div class='col-md-6 to-animate-2'>
											<div class='alert alert-danger'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Upload an Image !
											</div>
										</div>";
						}		
						
						if(empty($errors)){
							move_uploaded_file($file_tmp, 'images/Dishes/Dishes_Name/' .$image);
							$errors[]= "<div class='col-md-6 to-animate-2'>
											<div class='alert alert-success'>
												<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Upload Image Successfully !
											</div>
										</div>";
						}else{
							foreach($errors as $err){
								echo "<font color='red'><b>$err</b></font>";
							}
						}
									
						foreach($errors as $err){
							echo "$err";
						}
								
					}
				?>
						
				<form method="POST" enctype="multipart/form-data">
					<div class="form-group" method="POST" enctype="multipart/form-data">
						Insert an Image (Rename Your image = Dishes Name):
						<input type="file" name="imageB" required>
							
						<br>
						<input class="btn btn-primary" type="submit" name="submit_B" value="Upload">
					</div>
				</form>
				<br>
				
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="index.php" class="btn btn-primary btn-outline">Back to Home Page</a></p>
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