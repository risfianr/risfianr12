<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
     
    <div class="container col-md-10 ">
        <div class="card">
            <div class="card header bg-primary text-white">
                TABEL DATA MAHASISWA
            </div>
            <div class="card-body">
                <a href="index.php" table style="float:right" class="btn btn-primary">Tambah Data</a>
                <a href="cari_data" class="btn btn-primary">Cari Data</a>
                <input type="text" placeholder="Masukkan Data" class="form-control col-md-5" >
                <br>
               <table class="table table-bordered">
                    <tr>
                        <th>ID mahasiswa</th>
                        <th>Npm</th>
                        <th>Nama</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>Kodepos</th>
                        <th>Aksi</th>
                        
                        
                      
                    </tr>
                    <?php
                    
                            include "koneksi.php";
                            $no = 1;
                            $tampil = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");
                            while($data=mysqli_fetch_array($tampil))
                           {

                            
                    ?>
                    <tr>
                        <td> <?php echo $no++ ?></td>
                        <td> <?php echo $data['npm']; ?></td>
                        <td> <?php echo $data['nama']; ?></td>
                        <td> <?php echo $data['tempat_lahir']; ?></td>
                        <td> <?php echo $data['tanggal_lahir']; ?></td>
                        <td> <?php echo $data['jenis_kelamin']; ?></td>
                        <td> <?php echo $data['alamat']; ?></td>
                        <td> <?php echo $data['kode_pos']; ?></td>
                        
                        <td>
                        <a href="edit_mahasiswa.php?npm=<?php echo $data['npm']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete.php?npm=<?php echo $data['npm']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                     
                    
                     <?php }?>
                     </tr>
               </table>

            </div>
        </div>
    </div>



</body>
</html>