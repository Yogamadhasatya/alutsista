<?php
include '../config/koneksi.php';
$db = new database();
?>
<div class="container-fluid">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Forms Edit & Verifikasi Pengajuan Alutsista</h5>
        <div class="card">
          <div class="card-body">
            <form action="../config/proses.php?aksi=updatepengajuan" method="post" enctype="multipart/form-data">
              <?php
              foreach($db->editpengajuan($_GET['id']) as $d){
              ?>
              <div class="mb-3">
                <label class="form-label">Kode</label>
                <input type="text" class="form-control" name="kode" id="kode" value="<?php echo $d['kode'] ?>">
              </div>
              <div class="mb-3">
                <div class="inputfield">
                  <label for="senjata">Senjata Yang Diajukan</label>
                  <div class="custom_select">
                    <select id="senjata" name="senjata" class="form-select" aria-label="Senjata Yang Diajukan">
                      <option class="senjata" value="<?php echo $d['senjata'] ?>" selected><?php echo $d['senjata'] ?></option>
                      <?php foreach($db->tampil_senjata() as $senjataOption): ?>
                        <option value="<?= $senjataOption['nama_senjata'] ?>"><?php echo $senjataOption['nama_senjata'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Asal Pengajuan</label>
                <input type="text" class="form-control" name="asal_pengajuan" id="asal_pengajuan" value="<?php echo $d['asal_pengajuan'] ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo $d['jumlah'] ?>">
              </div>
              <div class="mb-3">
                <div class="inputfield">
                  <label for="input">Verifikasi</label>
                  <div class="custom_select">
                    <select id="verifikasi" name="verifikasi" class="form-select" aria-label="Default select example">
                      <option class="verifikasi" value="<?php echo $d['verifikasi'] ?>" selected><?php echo $d['verifikasi'] ?></option>
                      <option value="disetujui">disetujui</option>
                      <option value="tidak disetujui">tidak disetujui</option>
                    </select>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="./pengajuan.php" role="button">Back</a>
              <?php
              }
              ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
