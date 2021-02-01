<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE npm='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/input_data_mahasiswa/data_mahasiswa.php'>";
?>