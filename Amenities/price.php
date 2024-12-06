<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
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

  <title>MySocietyPal</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
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
                <a class="nav-link" href="../about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Services\services.php">Services</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
      <h5>Welcome <?php echo $_SESSION['username']?> <?php echo $_SESSION['flat_no'] ?></h5>
        <h2>
           Our Amenities 
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box-1">
            <h3><span>GYM</span></h3>
            <a href="gym.php">
              Book
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            </a>
          </div>
          
        </div>
        <div class="box">
          
          <div class="detail-box-2">
            <h3><span>Swimming Pool</span></h3>
          
          <a href="swimmig.php">
            Book
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

          </a></div>
        </div>
        <div class="box">
          
          <div class="detail-box-3">
            <h3><span>Games Room</span></h3>
          
          <a href="games.php">
            Book
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

          </a></div>
        </div>
        <div class="box">
          
          <div class="detail-box-4">
            <h3><span>Kids Area</span></h3>
          
          <a href="kids.php">
            Book
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

          </a></div>
        </div>
        <div class="box">
          
          <div class="detail-box-5">
            <h3><span>Yoga Room</span></h3>
          
          <a href="yoga.php">
            Book
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

          </a></div>
        </div>
        <div class="box">
          
          <div class="detail-box-6">
            <h3><span>AV Room</span></h3>
            <a href="av.php">
              Book
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            </a>
          </div>
        </div>
      </div>
    </div>
 
  </section>
  <!-- price section -->
<br><br><br><br><br><br><br>
  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a href="index.php">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="about.html">
                <img src="images/nav-bullet.png" alt="">
                About
              </a>
              <a class="" href="Services\services.php">
                <img src="images/nav-bullet.png" alt="">
                Services
              </a>
              <a class="active" href="price.php">
                <img src="images/nav-bullet.png" alt="">
                Amenities
              </a>
              <a class="" href="contact.html">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-3 mb-0">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

</body>

</html>