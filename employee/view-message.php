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
            <div class="col-lg-12">



               <div class="card mb-6 mt-5">
               <div class="card-header">
                 <i class="fa fa-envelope-open-o"></i>&nbsp; Даалгавар харах</div>

                 <div class="card-body">
                     <?php
                     $m_id = $_GET['id'];

                     $i= 1;
                     $query = "SELECT * FROM task WHERE `t_id` = '".$m_id."'";

                     $res = mysqli_query($conn, $query);
                     $count =  mysqli_num_rows($res);
                     $row = mysqli_fetch_array($res);
                     ?>
                     <div class="col-sm-8" style="background:#f9f9f9;padding:15px;">
                       <div class="card-body">
                          <?php echo $row['task'];?>


                      </div>
                      <a role="button" class="btn btn-info mt-5" href="task.php">Хаах</a>
                    </div>
               </div>
               <div class="card-header">
                 <i class="fa fa-edit"></i>&nbsp; Хариу бичих</div>
                 <div class="card-body">
                  <div class="col-sm-8" style="background:#f9f9f9;padding:15px;">
                    <div class="card-body">
                      <?php if (isset($_REQUEST['m_reply'])) {
                        // code...
                        $mid = $_POST['m_id'];
                        $user_id = $_POST['user_id'];
                        $reply = mysqli_real_escape_string($conn, $_POST['m_reply']);
                        // mysqli_set_charset($conn,"utf8");
                        $query = "INSERT INTO `task_reply` (`r_id`, `reply`, `m_id`, `reply_by`) values('', '$reply', '$mid', '$user_id')";
                        $res = mysqli_query($conn, $query);
                        if($res){
                          echo "Хариу амжилттай илгээгдлээ";
                        }else{
                          echo "Алдаа гарлаа, дахин оролдоно уу";
                        }
                      }?>
                      <form action="" method="POST">
                        <input type="hidden" name="m_id" value="<?php echo $m_id; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                      <div class="form-group">
                        <label for="exampleInputname"></label>
                        <textarea class="form-control" name="m_reply" rows="4" type="text" placeholder="Энд бичнэ үү"></textarea>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-info mt-5">Хариу илгээх</button>
                </form>
                </div>
                </div>

                <div class="card-header">
                  <i class="fa fa-edit"></i>&nbsp; Миний хариулт</div>

                  <div class="card-body">
                    <?php
                    $m_id = $_GET['id'];
                    $query1 = "SELECT * FROM task_reply WHERE `m_id` = '".$m_id."' AND `reply_by`= '".$_SESSION['user_id']."'";

                    $res1 = mysqli_query($conn, $query1);
                    $count1 =  mysqli_num_rows($res1);
                    while($row1 = mysqli_fetch_array($res1)){
                      ?>
                    <?php }
                    ?>
                   <div class="col-sm-8" style="background:#f9f9f9;padding:15px;">
                     <div class="card-body">

                       <?php echo $row1['reply'];?>
                    </div>
                   </div>
                   <button type="submit" class="btn btn-info mt-5">Хариу илгээх</button>
                 </div>

              </div>
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
