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
  $name = $_POST['inputName'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $depart = $_POST['depart'];
  $role = $_POST['role'];

$query = "INSERT INTO users(`user_id`, `name`, `email`, `password`, `department`,`role`) VALUES ('','$name', '$email','$password','$depart', '$role')";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
$res = mysqli_query($conn, $query);
if($res){
  $_SESSION['success'] =  "Амжиллтай хадгаллаа";
  header('Location:register.php');
}
else {
  echo "Хадгалж чадсангүй";
}

}
else {
  echo "Data not found";
}




?>
