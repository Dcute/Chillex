<?php
	session_start();
	include_once 'DatabaseConnect.php';

	if(!isset($_SESSION['userSession']))
	{
		header("Location: Login.php");
	}

	$query = $MySQLi_CON->query("SELECT * FROM registration WHERE Registration_ID=".$_SESSION['userSession']);
	$userRow = $query->fetch_array();

	
	if(isset($_POST['submitted']))
	{
		$name = $userRow['Registration_Name'];
		$email = $userRow['Registration_Email'];
		$occation = $MySQLi_CON->real_escape_string(trim($_POST['occation']));
		$time = $MySQLi_CON->real_escape_string(trim($_POST['date']));
		$message = $MySQLi_CON->real_escape_string(trim($_POST['message']));
		
		$query = "INSERT INTO customer(Customer_Name, Customer_Email, Customer_Occation, Customer_Date, Customer_Message) VALUES ('$name', '$email',  '$occation', '$time', '$message')";
		
		if($MySQLi_CON->query($query)){
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Your message has been sent. <br>
						We will arrange according to the date you have picked. <br>
						Hope to see you again.
					</div>";
		}else{
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while sending !
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
<!-- Datetimepicker -->
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
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
					<h2 class="heading to-animate">Reservation</h2>
					<p class="sub-heading to-animate">Please fill in the form below for us in order to let us arrange a place for you.</p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
					<p><a href="index.php" class="btn btn-primary btn-outline">Back to Home Page</a></p>
				</div>
			</div>
			<br><br>
			
			<?php
				if(isset($msg)){
					echo $msg;
				}else{}
			?>
			
			<div class="col-md-6 to-animate-2">
				<span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['Registration_Name']; ?>
				&nbsp; &nbsp; &nbsp;
				<span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo $userRow['Registration_Email']; ?>
				<br><br>
				
				<form method="POST" action="">
					
					<div class="form-group">
						<label for="occation" class="sr-only">Occation</label>
						<select name="occation" class="form-control" id="occation" required>
							<option>Select an Occation</option>
							<option>Wedding Ceremony</option>
							<option>Birthday</option>
							<option>Others</option>
						</select>
					</div>
					
					<div class="form-group ">
						<label for="date" class="sr-only">Date</label>
						<input id="date" class="form-control" placeholder="Date &amp; Time" name="date" type="text" required>
					</div>
					
					<div class="form-group ">
						<label for="message" class="sr-only">Message</label>
						<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message" required></textarea>
					</div>
					
					<div class="form-group ">
						<input class="btn btn-primary" value="Send Message" name="submitted" type="submit">
						
						<a href="LogOut.php?logout" class="btn btn-primary" style="margin-left:250px">Log Out</a>
					</div>
				</form>
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