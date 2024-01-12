<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleloginregister.css" />
    <title>Sign in & Sign up Form</title>
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
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form" form name="form_login" method="post" action="../config/periksa.php" onsubmit="return validasi(this)">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input class="input" name="user" type="text" id="user" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" class="input"  name="pass" type="password" id="pass"/>
            </div>
            <input type="submit" value="Login" class="btn solid"  class="btn" value="Login" />
            <?php
                if(isset($_REQUEST['act']) == 'no')
                echo "<label style='color:red'> Username dan Password Salah !!! </label>";
            ?>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Alat Utama Sistem Perthanan Negara</h3>
            <p>
            Silahkan Login Menggunakan Akun Anda 
            </p>
            </button>
          </div>
          <img src="../img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
