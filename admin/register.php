<?php include "../auth/auth.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'link.php'; ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!--header.php------------>
<?php include 'header.php'; ?>

<div class="content-wrapper">
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
                <form action="insert_user.php" class="form-horizontal"  method="POST" onsubmit="return formvalidation();">
                  <div class="form-group">
                    <label for="exampleInputname">Нэр</label>
                    <input class="form-control" autocomplete="nope" id="inputName" name="inputName" type="text" aria-describedby="emailHelp" placeholder="Нэр">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Цахим хаяг</label>
                    <input class="form-control" autocomplete="nope"  id="inputEmail" name="email" type="email" aria-describedby="emailHelp" placeholder="имейл хаяг">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Нууц үг</label>
                    <input class="form-control" autocomplete="nope" id="inputPassword" name="password" type="password" placeholder="Нууц үг">
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
  <?php include 'footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
     <?php include 'logOutModal.php'; ?>
    <!-- Bootstrap core JavaScript-->
    <?php include 'js.php'; ?>
  </div>
</body>

</html>
