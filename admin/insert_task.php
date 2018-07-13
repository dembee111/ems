<?php

session_start();

$host = "localhost";
$username = "root";
$pass="";
$db="ems";

$conn = mysqli_connect($host, $username, $pass, $db);
if(!$conn){
  die("Database connection error");
}
mysqli_set_charset($conn,"utf8");
//insert query for register page
if(isset($_REQUEST['message']))
{
   $message = mysqli_real_escape_string($conn, $_POST['message']);
   $assigned_by = $_POST['assigned_by'];
   $emplist= $_POST['emp'];
  foreach($emplist as $emp){

  $query = "INSERT INTO `task`(`t_id`, `task`, `user_id`, `assigned_by`) VALUES ('','$message', '$emp','$assigned_by')";
  $res = mysqli_query($conn, $query);

  }
  if($res){
    $_SESSION['success'] =  "Даалгаварыг амжиллтай илгээлээ";
    header('Location:task.php');
  }
  else {
    echo "Хадгалж чадсангүй";
  }

  }
  else {
    echo "Data not found";
  }




?>
