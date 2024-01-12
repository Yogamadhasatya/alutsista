<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alutsista</title>
  <link rel="stylesheet" href="../css/styles.min.css" />
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/fontawesome.min.js"></a>
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/regular.css" rel="stylesheet">
</head>
<?php
      	session_start();
 
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
          header("location:login.php?pesan=gagal");
        }
  ?> 
<?php
    require '../template/left-sidebar.php';  
?>
<?php
    require '../template/header.php';  
?>
 <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
            <?php
                include '../config/koneksi.php';
                $db = new database();
            ?>
              <div class="row">
              <h5 class="card-title fw-semibold mb-4">Daftar Senjata</h5>
              <?php
                foreach($db->tampil_senjata() as $d){
                ?>
                <div class="col-md-4">
                  <div class="card">
                    <img src='<?php echo $d["gambar"]; ?>' class="card-img-top" alt="..."  style="max-height: 200px;min-height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $d ['nama_senjata']; ?></h5>
                      <p class="card-text">jumlah : <?php echo $d ['jumlah']; ?></p>
                      
                      <a href="#" class="btn btn-primary"><?php echo $d ['kondisi']; ?></a>
                    </div>
                  </div>
                </div>
                <?php
                    }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
    require '../template/end-admin.php';  
?>