<?php 
// $_GET
$mahasiswa = [
    [
        "nama" => "Ryan Hidayat",
        "nrp" => "223040173",
        "email" => "ryan.223040173@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Hilmi Anugrah Bela Negara",
        "nrp" => "223040175",
        "email" => "hilmi.2230401665@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
    ],
            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
   </ul>
</body>
</html>