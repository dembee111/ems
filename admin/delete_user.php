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
$user_id = $_GET['id'];

$query = "DELETE FROM `users` where `user_id`='$user_id'";

  $res = mysqli_query($conn, $query);
  if($res){
    $_SESSION['success'] =  "Амжиллтай Устгагдлаа";
    header('Location:userList.php');
  }
  else {
    echo "Устгаж чадсангүй, Та дахин оролдоно уу";
  }





?>
