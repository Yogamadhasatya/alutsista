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
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>

<?php
      	session_start();
 
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['level']==""){
          header("location:login.php?pesan=gagal");
        }
        if($_SESSION['level']=="user"){
          header("location:error.php?pesan=gagal");
        }
  ?> 
<?php
    require '../template/left-sidebar.php';  
?>
<?php
    require '../template/header.php';  
?>
<?php
    require '../template/container-tambahsenjata.php';  
?>
<?php
    require '../template/end-admin.php';  
?>