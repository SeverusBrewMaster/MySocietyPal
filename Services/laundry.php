<?php 
  session_start(); 
  $server_name = "localhost";
  $user_name = "root";
  $password = "";
  $database_name = "project";
  $connection = mysqli_connect($server_name,$user_name,$password,$database_name);
  
  if(!$connection){
      die("Page Falied".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
    $problem = $_POST['problem'];
    $drone = $_POST['drone'];
    $urgent = $_POST['urgent'];
  
    $sql= "INSERT INTO laundry (problem, level, urgent) VALUES ('$problem', '$drone', '$urgent')";
    $result = mysqli_query($connection, $sql);
  
    if($result){
      $SESSION['status'] = "Inserterd Successfully";
      header("Location: services.php");
    }
    else{
      $SESSION['status'] = " Failed";
      header("Location: services.php");
    }
  }  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complaint</title>
        <link rel="stylesheet" href="ishaan.css">
        
    </head>
    <body>
    <div class="main">
      <legend>Laundry</legend><br><br>
      <form method="POST">
        <label>Request Type:</label>
        <br><br>
            <div class="division">
              <input type="radio" id="unit" name="drone" value="Unit Level" checked />
              <label for="huey">Unit Level</label>
            </div>
          
            <div class="division">
              <input type="radio" id="community" name="drone" value="Community Level" />
              <label for="dewey">Community Level</label>
            </div>
            <br>
              <input type="checkbox" id="urgent" name="urgent" value="YES"/>
              <label for="urgent">Is it Urgent?</label>
            
            <br><br>
            
              <label for="name">Description of the problem:</label>
              <input type="text" id="name" name="problem" required minlength="0" maxlength="200" size="10" />
            
            <br><br>
            <input type="submit" name= "submit" value="Submit" class="submit"/>
          </form>
    </div>  
  </body>
</html>
