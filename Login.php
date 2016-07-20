<?php
	session_start();
	include_once 'DatabaseConnect.php';
	
	if(isset($_SESSION['userSession'])!=""){
		header("Location: Reservation_Form.php");
		exit;
	}
		
	if(isset($_POST['login']))
	{
		$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
		$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
			
		$query = $MySQLi_CON->query("SELECT Registration_ID, Registration_Email, Registration_Password FROM registration WHERE Registration_Email='$email'");
		$row = $query->fetch_array();
			
		if(password_verify($upass, $row['Registration_Password'])){
			
			$problem = False;
			
			if(empty($_POST['email'])){
				$problem = True;
			}
					
			if(empty($_POST['password'])){
				$problem = True;
			}	
			
			$_SESSION['userSession'] = $row['Registration_ID'];
			header("Location: Reservation_Form.php");
		}
		else
		{
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; email or password does not exists !
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

<script src="js/modernizr-2.6.2.min.js"></script>
	
</head>
<body>

<div id="fh5co-container">
	<div id="fh5co-contact" data-section="reservation">
		<div class="container">
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="heading to-animate">Log In</h2>
				</div>
			</div>
			
			<?php
				if(isset($msg)){
					echo $msg;
				}
			?>
		
			<div class="row">
				<div class="col-md-6 to-animate-2">
					<h3>Log In Form</h3>
					<form method="POST" action="">
						<div class="form-group ">
							<input id="email" class="form-control" placeholder="Email" name="email" type="email" value="<?php if(isset($_POST['email'])){print htmlspecialchars($_POST['email']);}?>" required>
						</div>
						
						<div class="form-group ">
							<input class="form-control" placeholder="Password" name="password" type="password" value="<?php if(isset($_POST['password'])){print htmlspecialchars($_POST['password']);}?>" required>
						</div>
						<br>
						
						<a href="Register.php" class="forgot_password">Does not have a Account? Create one here</a>
						<br><br>
						
						
						<input class="btn btn-primary" name="login" value="Login" type="submit" style="width: 100px;">
					</form>
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