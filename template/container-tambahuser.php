
      <?php
      include '../config/koneksi.php';
      $db = new database();
      ?>
      <div class="container-fluid">
      
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms Tambah Data User</h5>
              
              <div class="card">
                <div class="card-body">
                  <form action="../config/proses.php?aksi=tambahuser" method="post">
                    
                    <div class="mb-3">
                      <label class="form-label">Id</label>
                      <input type="text" class="form-control" name="id" id="id" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" name="nama" id="nama" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" id="jabatan" >
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" id="username" >
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password" >
                    </div>
                    <div class="mb-3">
                      <div class="inputfield">
                      <label for="input">Level</label>
                      <div class="custom_select">
                          <select id="level"list="level" name="level" class="form-select" aria-label="Default select example">
                          <datalist id="level">
                          <option class="level"></option>
                          <option value="user">user</option>
                          <option value="admin">admin</option>
                          </datalist>
                          </select>
                      </div>
                    </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="./index.php" role="button">Back</a>
                  </form>
                
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>