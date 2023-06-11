<?php

// session_start();
// if (!isset($_SESSION["signin"])) {
//   header("Location: login.php");
// }

require "page/account/function/funcions.php";
$dtl = query("SELECT * FROM content");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $dtl = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobat Sehat</title>
  <link rel="website icon" href="image/logo/Sobat Sehat.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarNav">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand">Sobat Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
          <a class="nav-link" aria-current="page" href="#about">Tentang Kami</a>
          <a class="nav-link" aria-current="page" href="page/account/Login.php">Masuk</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner mt-5">
      <div class="carousel-item active">
        <img src="image/BG/backgound (1).png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/BG/backgound (2).png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/BG/backgound (3).png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  <!-- Content -->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4">Sobat Sehat</h1>
      <p class="lead">Melayani Semua Keluhan dan Tips Kesehatan</p>
      <form action="" method="post">
        <input type="text" name="keyword" id="keyword" size="100" placeholder="Masukan Keyword pencarian..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
      </form>
    </div>
  </div>
  <hr>
  <h2 Style="margin-left: 1vh; text-align:center;">Tips Kesehatan</h2>
  <div class="container">
    <div class="row">
      <?php foreach ($dtl as $row) : ?>
        <div class="card" style="width: 20rem; float:left; margin:1.2rem; margin-top: -0.3vh;">
          <img src="image/isi/<?= $row["gambar"]; ?>" class="card-img-top" alt="<?php $row['gambar']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $row["judul"]; ?></h5>
            <p class="card-text"><?= substr_replace($row["detail"], "<a href='#'>....Baca Selengkapnya</a>", 100); ?></p>
            <a href="page/account/details.php?id=<?= $row["id"]; ?>" class="btn btn-secondary">Detail</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <hr>
  <br>

  <!-- About Us -->
  <div class="container my-5" id="about">
    <div class="row">
      <div class="col-md-6">
        <h1>Tentang Kami</h1>
        <p>Sobat Sehat adalah website yang menyajikan infomasi tentang kesehatan. Tidak hanya itu, kami juga memberikan layanan konsultasi.</p>
        <p>Sosial media:</p>
        <ul class="list-inline m-1">
          <li class="list-inline-item"><a href="https://www.facebook.com"><i class="bi bi-facebook">Facebook</i></a></li>
          <li class="list-inline-item"><a href="https://twitter.com"><i class="bi bi-twitter">Twitter</i></a></li>
          <li class="list-inline-item"><a href="https://instagram.com"><i class="bi bi-instagram">Instagram</i></a></li>
          <a href="https://api.whatsapp.com"><i class="bi bi-whatsapp">Whatsapp</i></a>
        </ul>
      </div>
      <div class="col-md-6">
        <img src="image/logo/Sobat Sehat.png" alt="Sobat Sehat" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 text-center">
    <div class="container">
      <span class="text-muted">© 2023 Ryan Hidayat</span>
    </div>
  </footer>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>