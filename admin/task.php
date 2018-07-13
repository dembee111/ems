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
             <div class="row">

               <div class="col-sm-4" style="background-color:#d9d9d9;">
               <div class="card mb-6 mt-5" style="background-color:#bfbfbf;">
               <div class="card-header">
                 <i class="fa fa-dot-circle-o"></i>  Ажилтаны жагсаалт</div>
                 <form action="insert_task.php" method="post">
                 <div class="card-body">
                     <div class="form-group">


                         <?php

                           $query = "SELECT * FROM users WHERE `role`='employee' order by user_id ASC";

                           $res = mysqli_query($conn, $query);
                           $count =  mysqli_num_rows($res);
                           while($row = mysqli_fetch_array($res))
                             {
                           ?>

                         <input type="hidden" name="assigned_by" value="<?php echo $_SESSION['user_id']; ?>">
                         <div class="checkbox">
                           <input class="form-check-input" type="checkbox" name="emp[]" value="<?php echo $row['user_id'];?>">
                           <label class="form-check-label" for="exampleRadios1">
                             <?php echo $row['name']; ?>
                           </label>
                         </div>
                       <?php }?>
                    </div>
                   </div>

               </div>
               </div>
               <div class="col-sm-6" style="background-color:#d9d9d9;">
               <div class="card mb-6 mt-5" style="background-color:#bfbfbf;">
               <div class="card-header">
                 <i class="fa fa-envelope-o"></i>  Мессеж</div>
                 <?php if(isset($_SESSION['success']))
                       {
                         echo $_SESSION['success'];
                         unset($_SESSION['success']);
                       }
                 ?>
                 <div class="card-body">
                   <div class="form-group">
                     <label for="exampleInputname"></label>
                     <textarea class="form-control" name="message" rows="7" type="text" placeholder="Энд бичнэ үү"></textarea>
                   </div>
                   </div>
               </div>

               </div>

            </div>
            <button type="reset" class="btn btn-default" >Цуцлах</button>
               <button type="submit" class="btn btn-primary">Бүртгүүлэх</button>
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
