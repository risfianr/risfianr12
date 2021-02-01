<?php 
    $koneksi = mysqli_connect("localhost","root", "", "input_data_mahasiswa");

    if (mysqli_connect_errno($koneksi))
    {
        echo "koneksi Gagal". mysqli_connect_error();
    }
?>