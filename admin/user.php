
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
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
                  <h5 class="card-title fw-semibold mb-4">Data User</h5>
                  <?php
                      include '../config/koneksi.php';
                      $db = new database();
                  ?>
                  <table class="table" id="x" style="text-align : center; font-size : 14px;">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                      </tr>
                  
                    </thead>
                    <tbody>
                    <?php
                    foreach($db->tampil_user() as $d){
                    ?>
                      <tr>
                        <th scope="row"><?php echo $d ['id']; ?></th>
                        <td><?php echo $d ['email']; ?></td>
                        <td><?php echo $d ['nama']; ?></td>
                        <td><?php echo $d ['jabatan']; ?></td>
                        <td><?php echo $d ['username']; ?></td>
                        <td><?php echo $d ['password']; ?></td>
                        <td><?php echo $d ['level']; ?></td>
                        <td>
                          <a class="edittoko" href="edit-user.php?id=<?php echo $d['id'];?> &aksi=edituser"><i class="fas fa-edit" style="color: green; width : 15px" ></i></a>
                          <a class="hapus" href="../config/proses.php?id=<?php echo $d['id'];?> &aksi=hapus" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash" style="color : red; width : 15px"></i></a>
                        </td>
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

