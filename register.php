<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
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
      <div class="card-header">Бүртгүүлэх</div>
      <?php if(isset($_SESSION['success']))
            {
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            }
      ?>
      <div class="card-body">
        <form action="insert_user.php" class="form-horizontal" method="POST" onsubmit="return formvalidation();">
          <div class="form-group">
            <label for="exampleInputname">Нэр</label>
            <input class="form-control" id="inputName" name="inputName" type="text" aria-describedby="emailHelp" placeholder="Нэр">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Цахим хаяг</label>
            <input class="form-control" id="inputEmail" name="email" type="email" aria-describedby="emailHelp" placeholder="имейл хаяг">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Нууц үг</label>
            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Нууц үг">
          </div>
          <label for="radioButton">Хэлтэс сонгох</label>
          <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="depart" id="depart" value="HR" checked="">
                <label class="form-check-label" for="exampleRadios1">
                  Хүний нөөцийн алба
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="depart" id="depart" value="SEO">
                <label class="form-check-label" for="exampleRadios2">
                  Маркетинг алба
                </label>
              </div>
      </div>
      <label for="radioButton">Хэрэглэгчийн нэвтрэх эрхийг сонгоно уу</label>
              <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="role" value="admin" checked="">
                    <label class="form-check-label" for="exampleRadios1">
                      Админ
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="role" id="role" value="employee">
                    <label class="form-check-label" for="exampleRadios2">
                      Ажилтан
                    </label>
                  </div>
              </div>

          <button type="reset" class="btn btn-default" >Цуцлах</a>
            <button type="submit" class="btn btn-primary">Бүртгүүлэх</a>
        </form>

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
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();
    var passlength = $('#inputPassword').val().length;
    if(name == '')
    {
      alert("Нэрээ оруулна уу");
      return false;
    }
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
