<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswa");

    if(!$koneksi)
    {
        echo "Koneksi ke MySQL Gagal... ";
    }
?>