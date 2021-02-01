<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambildata = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE npm='$id'");
    $data = mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA MAHASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card header bg-primary text-white">
                EDIT DATA MAHASISWA
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="npm">Npm</label>
                        <input type="number" name="npm" value="<?php echo $data['npm']?>" class="form-control col-md-9" placeholder="Masukkan Npm">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>
                    
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="enum" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']?>" class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin">
                    </div>
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan Alamat">
                    </div>
                    
                    <div class="form-group">
                        <label for="kode_pos">Kodepos</label>
                        <input type="number" name="kode_pos" value="<?php echo $data['kode_pos']?>" class="form-control col-md-9" placeholder="Masukkan Kodepos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger" name="reset">BATAL</button>
                </form>
        
            </div>
        </div>
    </div>



</body>
</html>

<?php

    if(isset($_POST['simpan']))
    {
        $npm              = $_POST['npm'];
        $nama             = $_POST['nama'];
        $tempat_lahir     = $_POST['tempat_lahir'];
        $tanggal_lahir    = $_POST['tanggal_lahir'];
        $jenis_kelamin    = $_POST['jenis_kelamin'];
        $alamat           = $_POST['alamat'];
        $kode_pos         = $_POST['kode_pos'];

        mysqli_query($koneksi, "UPDATE data_mahasiswa SET  npm='$npm', nama='$nama', tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kode_pos='$kode_pos'
        WHERE npm ='$id'") or die(mysqli_error($koneksi));
      

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Diupadate..... </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/input_data_mahasiswa/data_mahasiswa.php'>";
    }

?>