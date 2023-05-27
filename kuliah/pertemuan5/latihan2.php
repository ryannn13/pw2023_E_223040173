<?php 
$logo = ['🗿','🤞','🚭']; 
$makanan = ["🍔","🍍","🍱","🍨"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Daftar Logo</h2>
    <ul>
        <?php foreach ($logo as $l) { ?>
        <li><?= $l; ?></li>
        <?php }?>
    </ul>
    <hr>
    <h2>Daftar Makanan</h2>
    <ul>
        <?php foreach ($makanan as $m) { ?>
        <li><?= $m; ?></li>
        <?php }?>
    </ul>
</body>
</html>