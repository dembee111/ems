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

// login account processing

if(isset($_POST['email']))
{
  $email = $_POST['email'];
  $pass = md5($_POST['password']);

  $query = "SELECT * FROM users WHERE email = '$email' AND password='$pass'";

  $res = mysqli_query($conn, $query);
  $count =  mysqli_num_rows($res);
  $row = mysqli_fetch_array($res);
  if($count == 1)
  {
    $session_id = session_id();
    $_SESSION['auth'] = $session_id;
    $_SESSION['user_id'] = $row['user_id'];
    $role = $row['role'];
    if($role =='admin')
    {
      header('Location:admin/dashboard.php');


    }
    elseif($role == 'employee')
    {
      header('Location:employee/dashboard.php');
    }
    else
    {
      $_SESSION['error'] = "Имейл эсвэл нууц үг таарахгүй байна";
      header('Location:login.php');
    }


  }else {
    $_SESSION['error'] = "Имейл эсвэл нууц үг таарахгүй байна";
    header('Location:login.php');
  }
}

?>
