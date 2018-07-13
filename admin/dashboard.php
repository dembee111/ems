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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Тавтай морил</h1>
          <p>Админы хэсэгт</p>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'footer.php'; ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>hoho
    </a>
    <!-- Logout Modal-->
     <?php include 'logOutModal.php'; ?>
    <!-- Bootstrap core JavaScript-->
    <?php include 'js.php'; ?>
  </div>
</body>

</html>
