<?php
    session_start();
    include("./koneksi.php");
    $username = $_POST['user'];
    $password = md5($_POST['pass']);
 
    $login = mysqli_query($k,"select * from user where username='$username' and password='$password'");

    $cek = mysqli_num_rows($login);
    
    if($cek > 0){
    
        $data = mysqli_fetch_assoc($login);
 

        if($data['level']=="admin"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard
            header("location:../admin/index.php?");
            

        }else if($data['level']=="user"){
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "user";
            // alihkan ke halaman dashboard
            header("location:../admin/index.php");
    
        
        }

    }else{
    echo "<script> //alert('Username atau Password Anda salah');
    document.location='../admin/login.php?act=no';
    </script>";
    //header("location:login.php?act=no");
    // header("location:../admin/login.php?pesan=gagal");
    }

?>
