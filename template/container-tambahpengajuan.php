
    <?php
    include '../config/koneksi.php';
    $db = new database();
    ?>
    <div class="container-fluid">
    
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms Tambah Data Pengajuan Alutsista</h5>
            
            <div class="card">
              <div class="card-body">
                <form action="../config/proses.php?aksi=tambahpengajuan" method="post" enctype="multipart/form-data">
                  
                  <div class="mb-3">
                    <label class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode" id="kode" >
                  </div>
                  <div class="mb-3">
                    <div class="inputfield">
                        <label for="senjata">Senjata Yang Diajukan</label>
                        <div class="custom_select">
                            <select id="senjata" name="senjata" class="form-select" aria-label="Senjata Yang Diajukan">
                                <?php foreach($db->tampil_senjata() as $d): ?>
                                    <option value="<?= $d['nama_senjata'] ?>"><?= $d['nama_senjata'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                  <div class="mb-3">
                    <label class="form-label">Asal Pengajuan Dari:</label>
                    <input type="text" class="form-control" name="asal_pengajuan" id="asal_pengajuan" >
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah" id="jumlah" >
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-primary" href="./pengajuan.php" role="button">Back</a>
                </form>
              
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>