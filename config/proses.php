<?php
include './koneksi.php';
$k= new database();

$aksi = $_GET['aksi'];

    
    if($aksi == "update"){
        $k->update($_POST['id'],$_POST['email'],$_POST['nama'],$_POST['jabatan'],$_POST['username'],$_POST['password'],$_POST['level']);
        
        header("location:../admin/user.php");

    }
    else if($aksi == "updatepengajuan"){
        $k->updatepengajuan($_POST['kode'],$_POST['senjata'],$_POST['asal_pengajuan'],$_POST['jumlah'],$_POST['verifikasi']);
        
        header("location:../admin/pengajuan.php");

    }
    else if ($aksi == "updatesenjata") {
        if (isset($_FILES['gambar'])) {
            $id_senjata = $_POST['id'];
    
            // Inisialisasi gambar_lama
            $gambar_lama = $_POST['gambar_lama'];
    
            // Cek apakah gambar baru diupload
            if ($_FILES['gambar']['error'] != UPLOAD_ERR_NO_FILE) {
                $gambar = $_FILES['gambar']['name'];
                $gambar_tmp = $_FILES['gambar']['tmp_name'];
    
                // Validasi tipe file
                $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
                $file_extension = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    
                if (!in_array($file_extension, $allowed_types)) {
                    echo "Tipe file tidak valid. Hanya file gambar yang diperbolehkan.";
                    exit();
                }
    
                // Validasi ukuran file
                $max_size = 4 * 1024 * 1024; // 4 MB
                if ($_FILES['gambar']['size'] > $max_size) {
                    echo "Ukuran file terlalu besar. Maksimal 4 MB.";
                    exit();
                }
    
                // Path lengkap dari root direktori web
                $gambar_path = "../uploadsenjata/" . $gambar;
                move_uploaded_file($gambar_tmp, __DIR__ . '/../uploadsenjata/' . $gambar);
    
                // Hapus gambar lama
                if (!empty($gambar_lama) && file_exists($gambar_lama)) {
                    unlink($gambar_lama);
                }
            } else {
                // Jika tidak ada gambar baru diupload, gunakan gambar yang sudah ada
                $gambar_path = $gambar_lama;
            }
    
            // Update data senjata
            $k->updatesenjata($id_senjata, $_POST['jenis_senjata'], $_POST['nama_senjata'], $_POST['jumlah'], $_POST['kondisi'], $gambar_path);
            header("Location:../admin/senjata.php");
        } else {
            echo "Gambar tidak diupload.";
            exit();
        }
    }
    
    
    
    else if($aksi == "tambahuser"){
        $k->inputuser($_POST['id'],$_POST['email'],$_POST['nama'],$_POST['jabatan'],$_POST['username'],$_POST['password'],$_POST['level']);
        header("Location:../admin/user.php");
    }
    else if($aksi == "tambahpengajuan"){
        $k->inputpengajuan($_POST['kode'],$_POST['senjata'],$_POST['asal_pengajuan'],$_POST['jumlah']);
        header("Location:../admin/pengajuan.php");
    }
    else if ($aksi == "tambahsenjata") {
        if(isset($_FILES['gambar'])){
            $gambar = $_FILES['gambar']['name'];
            $gambar_tmp = $_FILES['gambar']['tmp_name'];
    
            // Validasi tipe file
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    
            if (!in_array($file_extension, $allowed_types)) {
                echo "Tipe file tidak valid. Hanya file gambar yang diperbolehkan.";
                exit();
            }
    
            // Validasi ukuran file
            $max_size = 4 * 1024 * 1024; // 5 MB
            if ($_FILES['gambar']['size'] > $max_size) {
                echo "Ukuran file terlalu besar. Maksimal 4 MB.";
                exit();
            }
    
            // Path lengkap dari root direktori web
            $gambar_path = "../uploadsenjata/" . $gambar;
            move_uploaded_file($gambar_tmp, __DIR__ . '/../uploadsenjata/' . $gambar);

    
            $k->inputsenjata($_POST['id'], $_POST['jenis_senjata'], $_POST['nama_senjata'], $_POST['jumlah'], $_POST['kondisi'], $gambar_path);
            header("Location:../admin/senjata.php");
        } else {
            echo "Gambar tidak diupload.";
            exit();
        }
    }
    
    elseif($aksi == "hapussenjata"){
        $k->hapussenjata($_GET['id']);
        header("location:../admin/senjata.php");
       
    }
    elseif($aksi == "hapus"){
        $k->hapus($_GET['id']);
        header("location:../admin/user.php");
       
    }
?>
