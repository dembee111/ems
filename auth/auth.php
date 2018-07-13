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

//----session shalgah heseg-------------


if(!isset($_SESSION['auth']))
{
  header('Location:../login.php');
}

?>
