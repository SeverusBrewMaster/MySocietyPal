<?php
session_start();

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "project";
$flat = $_SESSION['flat_no'];
$name = $_SESSION['username'];

$connection = mysqli_connect($server_name,$user_name,$password,$database_name);

if(!$connection){
    die("Page Falied".mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$time=$_POST['time'];
	$members=$_POST['members'];
	$dob=date('Y-m-d', strtotime($_POST['date']));
	$flat=$_SESSION['flat_no'];
	$sql="INSERT INTO `yoga`(Time_Slot,members,date_book,flat_no) values ('$time','$members','$dob','$flat')";

	$result = mysqli_query($connection,$sql);
	if($result){
		$_SESSION['status'] = "Booked Successfully";
		header("Location: price.php");
	}else{
		$_SESSION['status'] = "Service Unable";
		header("Location: price.php");
	}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>MSP/Amenities</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cardo:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/yoga.css" />
    <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Yoga Room</h1>
						</div>
						<form method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" required name="date">
									</div>
									
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Time Slot</span>
										<select class="form-control" name="time">
											<option value="10:00 to 11:00">10:00 to 11:00</option>
											<option value="11:00 to 12:00">11:00 to 12:00</option>
											<option value="12:00 to 13:00">12:00 to 13:00</option>
											<option value="13:00 to 14:00">13:00 to 14:00</option>
											<option value="14:00 to 15:00">14:00 to 15:00</option>
											<option value="15:00 to 16:00">15:00 to 16:00</option>
											<option value="16:00 to 17:00">16:00 to 17:00</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">No. of People:</span>
										<select class="form-control" name="members">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit" value="submit">Book Slot</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>