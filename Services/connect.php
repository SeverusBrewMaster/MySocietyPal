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

  $sql= "INSERT INTO electrical (problem, level, urgent) VALUES ('$problem', '$drone', '$urgent')";
  $result = mysqli_query($connection, $sql);

  if($result){
    $SESSION['status'] = "Inserterd Successfully";
    header("Location: complaint.php");
  }
  else{
    $SESSION['status'] = " Failed";
    header("Location: complaint.php");
  }
}  

?>