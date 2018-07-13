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
        <a href="dashboard.php">Эхлэл</a>
      </li>
      <li class="breadcrumb-item active">Ажлын төлөвлөгөө</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-tasks"></i>  Хийгдэх ажлын төлөвлөгөө</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Д/д</th>
                <th>Даалгавар</th>
                <th>Огноо</th>
                <th>Үйлдэл</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Д/д</th>
                <th>Даалгавар</th>
                <th>Огноо</th>
                <th>Үйлдэл</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              $i= 1;
              $query = "SELECT * FROM task WHERE `user_id` = '".$_SESSION['user_id']."'";

              $res = mysqli_query($conn, $query);
              $count =  mysqli_num_rows($res);
              if($count > 0 )
              {
                // $row = mysqli_fetch_array($res);

                while($row = mysqli_fetch_array($res))
                {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><a href="view-message.php?id=<?php echo $row['t_id'];?>"><?php echo mb_substr($row['task'],0,50); ?></a></td>
                <td><?php echo $row['date_time']; ?></td>
                <td><a href="view-message.php?id=<?php echo $row['t_id'];?>">Үзэх</a></td>

              </tr>
            <?php $i++;  } } else{
                 echo "үүсгэсэн хэрэглэгч байхгүй байна";
            } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
