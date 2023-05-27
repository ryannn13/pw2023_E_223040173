<?php 
$nama = 'Rayen';
$npm = '223040173';
$matkul = 'Pemrograman Web';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendahuluan PHP</title>
</head>
<body>
    <h1>
        <?php echo "Hello $nama"; ?>
    </h1>
    <p> <?= "NPM " .$npm ; ?></p>
    <p> <?php echo "Selamat datang di ".$matkul ; ?></p>
</body>
</html>