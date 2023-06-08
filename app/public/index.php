<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div class="container col-md-6">
    <div class="card-header bg-primary text-white">
        Input Data Mahasiswa
    </div>   

<div class="card-body">
    <form action="" method="POST" class="form-item">
    <form>
    <div class="form-group">
    <label for="NPM"> NPM MAHASISWA </label>
    <input type="number" name="NPM" class="form-control col-md-9" placeholder="Masukkan NPM">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA MAHASISWA </label>
    <input type="text" name="NAMA" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="TEMPAT_LAHIR"> TEMPAT LAHIR </label>
    <input type="text" name="TEMPAT_LAHIR" class="form-control col-md-9" placeholder="Masukkan TEMPAT LAHIR">
    </div>

    <div class="form-group">
    <label for="TANGGAL_LAHIR"> TANGGAL LAHIR </label>
    <input type="date" name="TANGGAL_LAHIR" class="form-control col-md-9" placeholder="Masukkan TANGGAL LAHIR">
    </div>

    <div class="form-group">
    <label for="JENIS_KELAMIN"> JENIS KELAMIN </label>
    <br>
    <label><input type="radio" name="JENIS_KELAMIN" value="L"> LAKI - LAKI</label>
    <label><input type="radio" name="JENIS_KELAMIN" value="P"> PEREMPUAN</label>    
    </div>

    <div class="form-group">
    <label for="ALAMAT"> ALAMAT </label>
    <input type="text" name="ALAMAT" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="KODEPOS"> KODE POS </label>
    <input type="text" name="KODE_POS" class="form-control col-md-9" placeholder="Masukkan KODE POS">
    <br>
    <div class="container col-md-6">
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </div>  
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NPM            = $_POST['NPM'];
        $NAMA           = $_POST['NAMA'];
        $TEMPAT_LAHIR   = $_POST['TEMPAT_LAHIR'];
        $TANGGAL_LAHIR  = $_POST['TANGGAL_LAHIR'];
        $JENIS_KELAMIN  = $_POST['JENIS_KELAMIN'];
        $ALAMAT         = $_POST['ALAMAT'];
        $KODE_POS       = $_POST['KODE_POS'];
        
        mysqli_query($koneksi, "INSERT INTO tblmhs VALUES(
        '$NPM','$NAMA','$TEMPAT_LAHIR','$TANGGAL_LAHIR','$JENIS_KELAMIN','$ALAMAT','$KODE_POS'
        )") or die(mysqli_error($koneksi));

        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Disimpan....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/data_mahasiswa.php'>";
    }

?>