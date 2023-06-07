<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>=====================CETAK BINTANG================================</h3>
<form action = "" method="post">
<label>Masukan :</label>
<input type="number" name="nilai">
<input type="submit" name="cetak" value="kirim">
</form>

<?php
if(isset($_POST['cetak'])) {
    $nilai = $_POST['nilai'];
    for($i=1; $i<=$nilai; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>
</body>
</html>