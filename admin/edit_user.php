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
              <div class="card-header">Хэрэглэгчийн мэдээллийг засварлах</div>
              <?php if(isset($_SESSION['success']))
                    {
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                    }
              ?>

              <div class="card-body">
                <form action="update_user.php" class="form-horizontal" method="POST" onsubmit="return formvalidation();">
                  <?php
                     $user_id = $_GET['id'];
                     $query = "SELECT * FROM users where user_id='$user_id'";
                     $res = mysqli_query($conn, $query);
                     $data = mysqli_fetch_array($res);
                  ?>
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <div class="form-group">
                    <label for="exampleInputname">Нэр</label>
                    <input class="form-control" id="inputName" name="inputName" type="text" aria-describedby="emailHelp" value="<?php echo $data['name']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Цахим хаяг</label>
                    <input class="form-control" id="inputEmail" name="email" type="email" aria-describedby="emailHelp" value="<?php echo $data['email']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Нууц үг</label>
                    <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Нууц үг">
                  </div>
                  <label for="radioButton">Хэлтэс сонгох</label>
                  <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="depart" id="depart" value="HR"
                        <?php
                        if($data['department'] == 'HR')
                        {
                          echo "checked";
                        }
                          ?>>
                        <label class="form-check-label" for="exampleRadios1">
                          Хүний нөөцийн алба
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="depart" id="depart" value="SEO"<?php
                        if($data['department'] == 'SEO')
                        {
                          echo "checked";
                        }
                          ?>>
                        <label class="form-check-label" for="exampleRadios2">
                          Маркетинг алба
                        </label>
                      </div>
              </div>
              <label for="radioButton">Хэрэглэгчийн нэвтрэх эрхийг сонгоно уу</label>
                      <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role" value="admin" <?php
                            if($data['role'] == 'admin')
                            {
                              echo "checked";
                            }
                              ?>>
                            <label class="form-check-label" for="exampleRadios1">
                              Админ
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role" value="employee" <?php
                            if($data['role'] == 'employee')
                            {
                              echo "checked";
                            }
                              ?>>
                            <label class="form-check-label" for="exampleRadios2">
                              Ажилтан
                            </label>
                          </div>
                      </div>

                  <button type="reset" class="btn btn-default" >Цуцлах</a>
                    <button type="submit" class="btn btn-primary">Засварлах</a>
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
