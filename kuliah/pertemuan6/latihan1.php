<?php 
$logo = ['🐉','🗿','🐅','🐊']; 
$makanan = ["🍔","🍍","🍱","🍨"];
$mahasiswa = ["Ryan","Hidayat","Rayn","Rayen"]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php for ($i=0; $i < 4 ; $i++) { ?>
    <ul>
        <li>Nama : <?= $mahasiswa[$i] ?></li>
        <li>Makanan Favorit : <?= $makanan[$i] ?></li>
        <li>Peliharaan : <?= $logo[$i] ?></li>
    </ul>
    <?php } ?>
</body>
</html>