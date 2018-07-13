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
if(isset($_REQUEST['email']))
{
  $user_id = $_POST['user_id'];
  $name = $_POST['inputName'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $depart = $_POST['depart'];
  $role = $_POST['role'];

  if($password == ''){
    $query = "UPDATE users SET `name`='$name', `email` = '$email', `department` ='$depart',`role`='$role' where `user_id` ='$user_id'";
  }
 else{
   $query = "UPDATE users SET `name`='$name', `email` = '$email', `password` = '$password', `department` ='$depart',`role`='$role' where `user_id` ='$user_id'";
 }

$res = mysqli_query($conn, $query);
if($res){
  $_SESSION['success'] =  "Амжиллтай засагдлаа";
  header('Location:userList.php');
}
else {
  echo "Засварлаж чадсангүй, Та дахин оролдоно уу";
}

}
else {
  echo "Data not found";
}




?>
