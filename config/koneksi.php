<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_alutsista";

$k = new mysqli($server, $username, $password, $database);

if ($k->connect_error) {
    die("Connection failed: " . $k->connect_error);
}

class database{
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $database = "db_alutsista";
    public $koneksi;

    function __construct(){
        $this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->database);

        if ($this->koneksi->connect_error){
            die("Connection failed: " . $this->koneksi->connect_error);
        }
    }

    function tampil_user(){
        $data = $this->koneksi->query("select * from user");
        $hasil = array();

        while ($k = $data->fetch_assoc()) {
            $hasil[] = $k;
        }

        return $hasil;
    }
    function tampil_senjata(){
        $data = $this->koneksi->query("SELECT * FROM senjata");
        $hasil = array();
    
        while ($k = $data->fetch_assoc()) {
            $hasil[] = $k;
        }
    
        return $hasil;
    }
    function tampil_pengajuan(){
        $data = $this->koneksi->query("SELECT * FROM pengajuan");
        $hasil = array();
    
        while ($k = $data->fetch_assoc()) {
            $hasil[] = $k;
        }
    
        return $hasil;
    }

    function inputuser($id, $email, $nama, $jabatan, $username, $password, $level){
        mysqli_query($this->koneksi,"insert into user values('$id', '$email', '$nama', '$jabatan', '$username',  md5('$password'), '$level')");
    }

    public function inputsenjata($id, $jenis_senjata, $nama_senjata, $jumlah, $kondisi, $gambar_path)
    {
        $query = "INSERT INTO senjata (id, jenis_senjata, nama_senjata, jumlah, kondisi, gambar) 
                VALUES ('$id', '$jenis_senjata', '$nama_senjata', '$jumlah', '$kondisi', '$gambar_path')";

        return $this->koneksi->query($query);
    }
    function inputpengajuan($kode, $senjata, $asal_pengajuan, $jumlah) {
        $query = "INSERT INTO pengajuan (kode, senjata, asal_pengajuan, jumlah) VALUES (?, ?, ?, ?)";
        $stmt = $this->koneksi->prepare($query);

        // Periksa apakah prepare berhasil
        if ($stmt === false) {
            die("Prepare failed: " . $this->koneksi->error);
        }

        // Bind parameter
        $stmt->bind_param("sssi", $kode, $senjata, $asal_pengajuan, $jumlah);

        // Execute
        $stmt->execute();

        // Periksa apakah execute berhasil
        if ($stmt === false) {
            die("Execute failed: " . $stmt->error);
        }

        // Tutup statement
        $stmt->close();
    }

    function hapus($id){
        $this->koneksi->query("delete from user where id='$id'");
    }
    function hapuspengajuan($kode){
        $this->koneksi->query("delete from pengajuan where kode='$kode'");
    }

    public function hapussenjata($id) {
        // Dapatkan path file gambar terkait dari database
        $stmt_select = $this->koneksi->prepare("SELECT gambar FROM senjata WHERE id = ?");
        $stmt_select->bind_param("i", $id);
        $stmt_select->execute();
        $stmt_select->bind_result($gambar_path);
        $stmt_select->fetch();
        $stmt_select->close();
    
        // Hapus data dari tabel senjata
        $stmt_delete = $this->koneksi->prepare("DELETE FROM senjata WHERE id = ?");
        $stmt_delete->bind_param("i", $id);
        $stmt_delete->execute();
        $stmt_delete->close();
    
        // Hapus file gambar dari direktori jika path file tersedia
        if ($gambar_path && file_exists($gambar_path)) {
            unlink($gambar_path);
        }
    }

    function edit($id){
        $data = mysqli_query($this->koneksi,"select * from user where id='$id'");
        while($k = mysqli_fetch_array($data)){
            $hasil[] = $k;
        }
        return $hasil;
    }
    
    function editpengajuan($kode){
        $data = mysqli_query($this->koneksi,"select * from pengajuan where kode='$kode'");
        
    
        while($k = mysqli_fetch_array($data)){
            $hasil[] = $k;
        }
    
        return $hasil;
    }

    function editsenjata($id){
        $data = mysqli_query($this->koneksi,"select * from senjata where id='$id'");
        
    
        while($k = mysqli_fetch_array($data)){
            $hasil[] = $k;
        }
    
        return $hasil;
    }

    function update($id, $email, $nama, $jabatan, $username, $password, $level){
        mysqli_query($this->koneksi,"update user set email='$email', nama='$nama', jabatan='$jabatan', username='$username', password=md5('$password'), level='$level' where id='$id'");
    }

    function updatepengajuan($kode, $senjata, $asal_pengajuan, $jumlah, $verifikasi){
        mysqli_query($this->koneksi,"update pengajuan set senjata='$senjata', asal_pengajuan='$asal_pengajuan', jumlah='$jumlah', verifikasi='$verifikasi' where kode='$kode'");
    }

    public function updatesenjata($id, $jenis_senjata, $nama_senjata, $jumlah, $kondisi, $gambar)
    {
        $query = "UPDATE senjata SET jenis_senjata='$jenis_senjata', nama_senjata='$nama_senjata', jumlah='$jumlah', kondisi='$kondisi', gambar='$gambar' WHERE id='$id'";
        return $this->koneksi->query($query);
    }

    
}
?>
