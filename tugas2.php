<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> PROGRAM KAKULATOR </h2>
<form action="" method="post">
    <label>Bilangan satu  : </label>
    <input type="number" name="nilai_1"><br>
    <label>Bilangan dua : </label>
    <input type="number" name="nilai_2">
    <input type="submit" name="cetak" value="hitung">
</form>
<hr>
<?php
if(isset($_POST['cetak'])) {
    $nilai_1 = $_POST['nilai_1'];
    $nilai_2 = $_POST['nilai_2'];
    echo "Bilangan 1 : " .$nilai_1;
    echo "<br>";
    echo "Bilangan 2 : " .$nilai_2;
    echo "<hr>";
    function tambah($nilai_1, $nilai_2) {
        $tambah = $nilai_1 + $nilai_2;
        echo "Hasil Penjumlahan adalah = " .$tambah;
        echo "<br>";
    }
    function kurang($nilai_1, $nilai_2) {
        $kurang = $nilai_1 - $nilai_2;
        echo "Hasil dari pengurangan diatas adalah = ".$kurang;
        echo "<br>";
    }
    function kali($nilai_1, $nilai_2) {
        $kali = $nilai_1 * $nilai_2;
        echo "Hasil dari perkalian diatas adalah = ".$kali;
        echo "<br>";
    } 
    function bagi($nilai_1, $nilai_2) {
        $bagi = $nilai_1 / $nilai_2;
        echo "Hasil dari pembagian diatas adalah = ".$bagi;
        echo "<br>";
    }
    tambah($nilai_1, $nilai_2);
    kurang($nilai_1, $nilai_2);
    kali($nilai_1, $nilai_2);
    bagi($nilai_1, $nilai_2);
    }
?>
<br>
<h5> Nova Dwi Anggaraini</h5>
</body>
</html>