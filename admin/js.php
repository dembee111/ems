<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin.min.js"></script>
<script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>


<!-- Custom scripts for this page-->
<script src="../assets/js/sb-admin-datatables.min.js"></script>
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
