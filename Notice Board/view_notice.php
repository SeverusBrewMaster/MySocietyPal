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
  <link href="../css/gawali.css" rel="stylesheet" />
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
                <a class="nav-link" href="../about.html"> About</a>
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
                <a class="nav-link" href="../Amenities\price.php">Pricing</a>
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
          <br>
          <h3>All Notices</h3><br>
          <?php
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"project");
          $query = 'select * from notice';
          $query_run = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($query_run)){
          ?>
          <div class="row">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject'];?></h5>
                <p class="card-text"><?php echo $row['date'];?></p>
                <p class="card-text"><?php echo $row['message'];?></p>
              </div>
            </div>
          
            <?php
          }
          ?>
          </div>
        </div>
    </div>
  </section>
  <!-- end contact section -->
</body>

</html>