<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <h5 class="card-title fw-semibold mb-4">Data User</h5>
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Senjata</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Spesifikasi</th>
                        <th scope="col">Tgl Maintenance</th>
                        <th scope="col">Cara Penggunaan</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                      </tr>
                  
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>2191828291</td>
                        <td>Yogamadhasatya@gmail.com</td>
                        <td>Satriya Yoga Madhasatya</td>
                        <td>Jenderal TNI AU</td>
                        <td>madha</td>
                        <td>sjueuensn</td>
                        <td>Admin</td>
                        <td>
                          <a class="edittoko" href="./edittoko.php?id_toko=<?php echo $d['id_toko'];?> &aksi=edittoko"><i class="fas fa-edit" style="color: green; width : 15px" ></i></a>
                          <a class="hapus" href="../config/proses.php?id=<?php echo $d['id'];?> &aksi=hapus" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash" style="color : red; width : 15px"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
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