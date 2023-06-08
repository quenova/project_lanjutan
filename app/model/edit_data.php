<?php
    include "koneksi.php";
    $id = $_GET['npm'];
    $ambilData = mysqli_query($koneksi, "SELECT * FROM tblmhs WHERE npm='$id'");
    $data=mysqli_fetch_array($ambilData);
?>

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
    <input type="number" name="npm" value="<?php echo $data['npm']?>"class="form-control col-md-9" placeholder="Masukkan NPM">
    </div>

    <div class="form-group">
    <label for="NAMA"> NAMA MAHASISWA </label>
    <input type="text" name="nama"value="<?php echo $data['nama']?>" class="form-control col-md-9" placeholder="Masukkan NAMA">
    </div>

    <div class="form-group">
    <label for="tempat_lahir"> TEMPAT LAHIR </label>
    <input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>" class="form-control col-md-9" placeholder="Masukkan TEMPAT LAHIR">
    </div>

    <div class="form-group">
    <label for="tanggal_lahir"> TANGGAL_LAHIR </label>
    <input type="date" name="tanggal_lahir"value="<?php echo $data['tanggal_lahir']?>" class="form-control col-md-9" placeholder="Masukkan TANGGAL LAHIR">
    </div>

    <div class="form-group">
    <label for="JENIS_KELAMIN"> JENIS KELAMIN </label>
    <br>
    <label><input type="radio" name="jenis_kelamin" value="L"<?php if ($data['jenis_kelamin'] == 'L')echo 'checked'?>> LAKI - LAKI</label>
    <label><input type="radio" name="jenis_kelamin" value="P"<?php if ($data['jenis_kelamin'] == 'P')echo 'checked'?>> PEREMPUAN</label>
    </div>

    <div class="form-group">
    <label for="alamat"> ALAMAT </label>
    <input type="text" name="alamat" value="<?php echo $data['alamat']?>" class="form-control col-md-9" placeholder="Masukkan ALAMAT">
    </div>

    <div class="form-group">
    <label for="kodepos"> KODE POS </label>
    <input type="text" name="kodepos" value="<?php echo $data['kodepos']?>" class="form-control col-md-9" placeholder="Masukkan KODE POS">
    <br>
    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
    <button type="reset" class="btn btn-danger">BATAL</button>
    </form>
</body>
</html>

<?php
    include "koneksi.php";
    if(isset($_POST['simpan']))
    {
        $NPM            = $_POST['npm'];
        $NAMA           = $_POST['nama'];
        $TEMPAT_LAHIR   = $_POST['tempat_lahir'];
        $TANGGAL_LAHIR  = $_POST['tanggal_lahir'];
        $JENIS_KELAMIN  = $_POST['jenis_kelamin'];
        $ALAMAT         = $_POST['alamat'];
        $KODE_POS       = $_POST['kodepos'];
        
        mysqli_query($koneksi, "UPDATE tblmhs 
            SET npm='$NPM,', nama='$NAMA', tempat_lahir='$TEMPAT_LAHIR', tanggal_lahir='$TANGGAL_LAHIR', jenis_kelamin='$JENIS_KELAMIN', alamat='$ALAMAT', kodepos='$KODE_POS'
            WHERE npm='$id'") or die(mysqli_error($koneksi));
            
        echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang DiUpdate....</h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=http://localhost/web/data_mahasiswa.php'>";
    }

?>