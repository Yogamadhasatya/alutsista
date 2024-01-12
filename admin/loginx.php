<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alutsista</title>
  <link rel="shortcut icon" type="../image/png" href="img/login.png" />
  <link rel="stylesheet" href="../css/styles.min.css" />
  <script language="javascript">
      function validasi(form){
          if (form.user.value == ""){
              alert("Silahkan Masukkan Username Anda ");
              form.user.focus();
              return(false);
          }

          if (form.pass.value == ""){
              alert("Silahkan Masukkan Password Anda");
              form.pass.focus();
              return(false);
          }
          return(true);
      }
  </script>
</head>

<body onload="document.form_login.user.focus();">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="img/login.png" width="50" alt="">
                </a>
                <h3 class="text-center" style="color: gray;">Alutsista</h3>
                <form class="sign-in-form" form name="form_login" method="post" action="../config/periksa.php" onsubmit="return validasi(this)">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="user" name="user">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass">
                  </div>
                  <a type="submit" value="Login" class="btn solid"  class="btn" value="Login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a>
                  <?php
                      if(isset($_REQUEST['act']) == 'no')
                      echo "<label style='color:red'> Username dan Password Salah !!! </label>";
                  ?>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <a></a>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../lib/jquery/dist/jquery.min.js"></script>
  <script src="../lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>