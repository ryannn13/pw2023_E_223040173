<?php 

$mahasiswa = [
    [//1.
        "nama" => "Ryan Hidayat",
        "nrp" => "223040173",
        "email" => "ryan.223040173@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-0b14d7850a56cdcaef9b48464ae849b76d40d6f54db7c103ff0d8197ca5205a4-dsc-0142.jpg"
    ],
    
    [//2.
        "nama" => "Narapati Keysa Anandi",
        "nrp" => "223040155",
        "email" => "narapati.223040155@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-cafe954742d93b3d882339023ca399240da58b4497ca672a8fadfe0baff67a5b-dsc-8633.png"
    ],

    [//3.
        "nama" => "Ilman Hanifa",
        "nrp" => "223040165",
        "email" => "ilman.223040165@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-9cfb9e635796e8196fda46d3e8a0a0bae4165e4de1f083550ae6b2f2b4fff2a2-4x6%5B1%5D.jpg"
    ],

    [//4.
        "nama" => "Muhamad Rizki Maulana",
        "nrp" => "223040167",
        "email" => "rizki.223040167@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-7bb72645137298bfadf1bf691dc8e14bc0a6309011045a02f1fb82d27fedc606-img-20220927-141635-1527231034083600655.jpg"
    ],

    [//5.
        "nama" => "Muhammad Kholish Kamil",
        "nrp" => "223040141",
        "email" => "kholish.223040141@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-cdc053a1c287cfc5dcb9427e1135a66bd729de86c92bc124da60185e3d6f2c0d-img-20221020-174139-6229253173595982916.jpg"
    ],

    [//6.
        "nama" => "Naufal Sayyid Akbar",
        "nrp" => "223040152",
        "email" => "naufal.223040152@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-fc1657a792b811cd70b3691d5b02471e1b10dea3227a1fa73ab101d14fb571a1-img-20220929-191014-3349495824430964855.jpg"
    ],

    [//7.
        "nama" => "Muhamad Rinaldi Agus Pratama",
        "nrp" => "223040166",
        "email" => "rinaldi.223040166@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-557316eef49a1c68d6ef5324df64ecc123e0df47e935f43189bae1ca29119d15-img-20220922-093854-3286185462867630594.jpg"
    ],

    [//8.
        "nama" => "Aditya Fauzan Salmannaufal",
        "nrp" => "223040159",
        "email" => "aditya.223040159@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-25d5d10c29563179af2a2a6451f1ee82ad5a67e2df745b8b9000b861469b5ab8-347478.jpg"
    ],

    [//9.
        "nama" => "Tegar Samudra",
        "nrp" => "223040180",
        "email" => "tegar.223040180@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-5c1f95bd7f1f1f4699d450501ba133a01f3481c549a3ef16c2e80c760f3afa20-img-20221206-092022-6305603904430470439.jpg"
    ],

    [//10.
        "nama" => "Hilmi Anugrah Bela Negara",
        "nrp" => "223040175",
        "email" => "hilmi.2230401665@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "https://storage.googleapis.com/assets-edlink/p/thumb-e9bf345400cd5ff59e1eb396db669788267eb15abf085e3178f978e7ea1af406-img-20220927-144233-5128513620500898.jpg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5a</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="<?= $mhs["gambar"];?>" alt="">
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
   <?php endforeach; ?>
</body>
</html>