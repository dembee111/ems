<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Нэвтрэх</div>

      <div class="card-body">
        <?php if(isset($_SESSION['error']))
              {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
              }
              if(isset($_SESSION['success']))
                    {
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                    }
        ?>
        <form action="login_account.php" class="form-horizontal" method="POST" onsubmit="return formvalidation();">

          <div class="form-group">
            <label for="exampleInputEmail1">Цахим хаяг</label>
            <input class="form-control" id="inputEmail" name="email" type="email" aria-describedby="emailHelp" placeholder="имейл хаяг">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Нууц үг</label>
            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Нууц үг">
          </div>
             <button type="submit" class="btn btn-primary">Нэвтрэх</button>

        </form>
      </br>
        <a href="register.php">Шинэ хэрэглэгч үүсгэх</a>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>
  function formvalidation(){

    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();
    var passlength = $('#inputPassword').val().length;

    if(email == '')
    {
      alert("Цахим хаягаа оруулна уу");
      return false;
    }
    if(password == '')
    {
      alert("Нууц үгээ оруулна уу");
      return false;
    }
    if(passlength <= 4)
    {
      alert("Нууц багадаа 5 тэмдэгтээс дээш байх ёстой!");
      return false;
    }
  }
  </script>
</body>

</html>
