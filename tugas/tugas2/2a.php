<?php 
$nama_depan = "Ryan";
$nama_belakang = "Hidayat";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2a</title>
</head>
<body>
    <?php for($angka=1; $angka<=100; $angka++) : ?>
        <?php  if($angka % 3 == 0 &&  $angka % 5 == 0) :?>
        <?= $nama_depan .' '. $nama_belakang; ?><br>
        <?php elseif($angka % 3 == 0) : ?>
            <?= $nama_depan; ?><br>
            <?php elseif($angka % 5 == 0) : ?>
                <?= $nama_belakang; ?><br>
                <?php else : ?>
                    <?= $angka ; ?><br>
        <?php endif ?>
    <?php endfor?>
    
</body>
</html>