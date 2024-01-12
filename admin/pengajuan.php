
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alutsista</title>
  <link rel="stylesheet" href="../lib/DataTables/datatables.min.css">
  
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/js/fontawesome.min.js"></a>
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
  <link href="../icons/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/regular.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/styles.min.css" />

  <script src="../lib/jquery/dist/jquery.min.js"></script>
  <script src="../lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/sidebarmenu.js"></script>
  <script src="../js/app.min.js"></script>
  <script src="../lib/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../lib/simplebar/dist/simplebar.js"></script>
  <script src="../js/dashboard.js"></script>
  
  
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
          <div class="card">
            <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">Data Pengajuan Senjata</h5>
                  <?php
                      include '../config/koneksi.php';
                      $db = new database();
                  ?>
                  <table class="table" id="x" style="text-align : center; font-size : 14px;">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Senjata</th>
                        <th scope="col">Asal Pengajuan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Verifikasi</th>
                      </tr>
                  
                    </thead>
                    <tbody>
                    <?php
                    foreach($db->tampil_pengajuan() as $d){
                    ?>
                      <tr>
                        <th scope="row"><?php echo $d ['kode']; ?></th>
                        <td><?php echo $d ['senjata']; ?></td>
                        <td><?php echo $d ['asal_pengajuan']; ?></td>
                        <td><?php echo $d ['jumlah']; ?></td>
                        <td><?php echo $d ['verifikasi']; ?></td>
                      </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../lib/DataTables/datatables.min.js"></script>
    
	<script>
    $(document).ready(function(){
        $('#x').DataTable({
                // scrollY : '350px',
				dom : 'Bfrtip',
				
			});
    });
		
	</script>

</html>

