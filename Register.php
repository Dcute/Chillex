<?php
	session_start();
	if(isset($_SESSION['userSession'])!="")
	{
		header("Location: Reservation_Form.php");
	}
	include_once 'DatabaseConnect.php';

	if(isset($_POST['submit']))
	{
		$uname = $MySQLi_CON->real_escape_string(trim($_POST['username']));
		$email = $MySQLi_CON->real_escape_string(trim($_POST['useremail']));
		$upass = $MySQLi_CON->real_escape_string(trim($_POST['userpassword']));
		$conpass = $MySQLi_CON->real_escape_string(trim($_POST['userconfirmpassword']));
		
		$new_password = password_hash($upass, PASSWORD_DEFAULT);
		
		$check_email = $MySQLi_CON->query("SELECT Registration_Email FROM registration WHERE Registration_Email='$email'");
		$count=$check_email->num_rows;
		
		if($upass == $conpass){
			if($count==0){
				
				$problem = False;
				
					if(empty($_POST['username'])){
						$problem = True;
					}
					
					if(empty($_POST['useremail'])){
						$problem = True;
					}
					
					if(empty($_POST['userpassword'])){
						$problem = True;
					}
					
					if(empty($_POST['userconfirmpassword'])){
						$problem = True;
					}
				
				$query = "INSERT INTO registration(Registration_Name, Registration_Email, Registration_Password) VALUES ('$uname', '$email', '$new_password')";
						
				if($MySQLi_CON->query($query))
				{
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
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
						</div>";
			}
			
		}else{
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Password does not match !
					</div>";
		}
		
		$MySQLi_CON->close();
	}
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

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>
	
</head>
<body>

<div id="fh5co-container">
	<div id="fh5co-contact" data-section="reservation">
		<div class="container">
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="heading to-animate">Register</h2>
				</div>
			</div>
			
			
			<?php
				if(isset($msg)){
					echo $msg;
				}else{
			?>
						
				<div class='alert alert-info'>
					<span class='glyphicon glyphicon-asterisk'></span> &nbsp; Please fill in the form!
				</div>
					
			<?php
			}
			?>
						
			<div class="row">
				<div class="col-md-6 to-animate-2">
					<h3>Registration Form</h3>
					<form method="POST" action="">
						
						<div class="form-group ">
							<label for="name" class="sr-only">Name</label>
							<input class="form-control" placeholder="Name" name="username" type="text" value="<?php if(isset($_POST['username'])){print htmlspecialchars($_POST['username']);}?>" required>
						</div>
						
						<div class="form-group ">
							<label for="email" class="sr-only">Email</label>
							<input class="form-control" placeholder="Email" name="useremail" type="email" value="<?php if(isset($_POST['useremail'])){print htmlspecialchars($_POST['useremail']);}?>" required>
						</div>
						
						<div class="form-group ">
							<label for="password" class="sr-only">Password</label>
							<input class="form-control" placeholder="Password" name="userpassword" type="password" value="<?php if(isset($_POST['userpassword'])){print htmlspecialchars($_POST['userpassword']);}?>" required>
						</div>
						
						<div class="form-group ">
							<label for="confirm_password" class="sr-only">Confirm Password</label>
							<input class="form-control" placeholder="Confirm Password" name="userconfirmpassword" type="password" value="<?php if(isset($_POST['userconfirmpassword'])){print htmlspecialchars($_POST['userconfirmpassword']);}?>" required>
						</div>
						<br>			
						
						<a href="Login.php" class="forgot_password">Already have a Account? Login here</a>
						<br><br>
					
						
						<div class="form-group ">
							<input class="btn btn-primary" value="Register" name="submit" type="submit" style="width: 120px;">
						</div>
					</form>
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