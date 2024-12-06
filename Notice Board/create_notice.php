<?php
session_start();

$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "project";
$connection = mysqli_connect($server_name,$user_name,$password,$database_name);

if(!$connection){
  die("falied".mysqli_connect_error());
}
if(isset($_POST['submit'])){
$dob=date('Y-m-d', strtotime($_POST['date']));
$subject=$_POST['subject'];
$to_whom=$_POST['to_whom'];
$message=$_POST['message'];

$sql="INSERT INTO notice(date,subject,to_whom,message) values('$dob','$subject','$to_whom','$message')";
$result = mysqli_query($connection,$sql);
	if($result){
		$_SESSION['status'] = "Created Successfully";
		header("Location: notice_board.php");
	}else{
		$_SESSION['status'] = "Unable to create.";
		header("Location: notice_board.php");
	}

}
mysqli_close($connection);
?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MSP/Notice</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />

  <link href="../css/create.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>MySocietyPal</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Services\services.php">Services</a>
              </li>
              <li class="nav-item">
                      <a class="nav-link" href="create_notice.php"><option>Create Notice</option></a>
											
              </li>
              <li class="nav-item">
              <a class="nav-link" href="view_notice.php"><option>View Notice</option></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Amenities\price.php">Amenities</a>
              </li>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
        <div class="form-container">
            <h3>Send Notice </h3>
            <form method="post">
                <div class="form-group">
                    <label>To Whom:</label>
                    <select class="form-control" name="to_whom">
                        <option value="To All">To All</option>
                        <option value="Owners">Owners</option>
                        <option value="Tenants">Tenants</option>
                        <option value="Secretary Office">Secretary Office</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Post Date:</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label>Subject:</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Send Notice</button>
            </form>
        </div>
    </div>
  </section>
  <!-- end contact section -->
</body>

</html>