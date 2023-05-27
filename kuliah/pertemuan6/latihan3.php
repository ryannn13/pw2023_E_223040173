<?php 
// Array ASSOCIATIVE
// Array yang index adalah string yang kita buat sendiri

$mahasiswa = [["nama"=>"Ryan", "binatang"=>["🐉","🦐"], "makanan" =>"🍔"], 
              ["nama"=>"Udin", "binatang"=>["🗿"], "makanan" =>"🍍"],
              ["nama"=>"Jimmy", "binatang"=>["🦖"], "makanan" =>"🍱"],
              ["nama"=>"Acong", "binatang"=>["🐊","🦕"], "makanan" =>"🍨"], 
              ["nama"=>"Kiwil", "binatang"=>["👽","👻"], "makanan" =>"🍆"]
            ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Peliharaan : 
                <?php foreach ($mhs ["binatang"] as $m) {
                    echo $m;
                }?>
            </li>
            <li>Makanan : <?= $mhs["makanan"] ?></li>
        </ul>
    <?php } ?>
</body>
</html>