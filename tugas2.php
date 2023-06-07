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
<?php
if(isset($_POST['cetak'])) {
    $nilai_1 = $_POST['nilai_1'];
    $nilai_2 = $_POST['nilai_2'];
    echo "masukan : " .$nilai;
    echo "<br>";
    for($i=1; $i<=nilai; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo "$";
        }
        echo "<br>";
    }
}
?>
</body>
</html>