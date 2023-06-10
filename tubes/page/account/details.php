<?php
require 'function/funcions.php';

$id = $_GET['id'];
$dtl = query("SELECT * FROM content WHERE id = $id ")[0];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="website icon" href="../../image/logo/Sobat Sehat.png">
</head>

<body>
    <!-- Content -->
    <div class="text-center">
        <h2><?= $dtl['judul']; ?></h2>
        <hr>
        <img src="../../image/isi/<?= $dtl['gambar']; ?>" alt="" width="30%">
        <hr>
        <p> <?= $dtl['detail']; ?></p>
    </div>

    <!-- Foter -->
    <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span class="text-muted">© 2023 Ryan Hidayat</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>