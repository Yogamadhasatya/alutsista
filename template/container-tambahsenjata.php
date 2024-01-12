
      <?php
      include '../config/koneksi.php';
      $db = new database();
      ?>
      <div class="container-fluid">
      
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms Tambah Data Senjata</h5>
              
              <div class="card">
                <div class="card-body">
                  <form action="../config/proses.php?aksi=tambahsenjata" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                      <label class="form-label">Id</label>
                      <input type="text" class="form-control" name="id" id="id" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jenis Senjata</label>
                      <input type="text" class="form-control" name="jenis_senjata" id="jenis_senjata" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama Senjata</label>
                      <input type="text" class="form-control" name="nama_senjata" id="nama_senjata" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jumlah</label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" >
                    </div>
                    <div class="mb-3">
                      <div class="inputfield">
                      <label for="input">Kondisi</label>
                      <div class="custom_select">
                          <select id="kondisi"list="kondisi" name="kondisi" class="form-select" aria-label="Default select example">
                          <datalist id="kondisi">
                          <option class="kondisi"></option>
                          <option value="aktif">aktif</option>
                          <option value="tidak aktif">tidak aktif</option>
                          </datalist>
                          </select>
                      </div>
                    </div>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Gambar</label>
                      <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="./senjata.php" role="button">Back</a>
                  </form>
                
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>