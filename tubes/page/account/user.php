<?php
require "function/funcions.php";
$dtl = query("SELECT * FROM content");
$user = query("SELECT * FROM user");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $dtl = cari($_POST["keyword"]);
}

if (isset($_POST["kirim"])) {

  if (konsultasi($_POST) > 0) {
    echo "
        <script>
            alert('konsultasi berhasil');
            document.location.href = '/pw2023_223040173/tubes/page/account/user.php';
        </script> ";
  } else {
    echo "
        <sript>
            alert('Gagal Konsultasi');
            document.location.href = '/pw2023_223040173/tubes/page/account/user.php';
        </script> ";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobat Sehat</title>
  <link rel="website icon" href="/pw2023_223040173/tubes/image/logo/Sobat Sehat.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand">Sobat Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="/pw2023_223040173/tubes/index.php">Home</a>
          <a class="nav-link active" aria-current="page" href="#konsultasi">Konsultasi</a>
          <a class="nav-link active" aria-current="page" href="#profile">Profile</a>
          <a class="nav-link active" aria-current="page" href="#setting">Setting</a>
          <a class="nav-link active" aria-current="page" href="Login.php">Log Out</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Content User -->
  <img src="/pw2023_223040173/tubes/image/BG/backgound (1).png" class="img-fluid" alt="Gambar">
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
        <div class="col-lg-4">
          <div class="card" style="width: 20rem; float:left; margin:1.2rem; margin-top: -0.3vh;">
            <img src="/pw2023_223040173/tubes/image/isi/<?= $row["gambar"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]; ?></h5>
              <p class="card-text"><?= $row["detail"]; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <hr>
  <br>

  <!-- Konsultasi -->
  <div class="container my-5" id="konsultasi">
    <div class="row">
      <div class="col-md-6">
        <h1>Konsultasi</h1>
        <p>Isi pesan Anda di bawah ini:</p>
        <form action="" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="tel" class="form-label">Nomer HP / Whatsapp</label>
            <input class="form-control" id="tel" name="tel">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
          </div>
          <button type="submit" name="kirim" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
    </div>
    <hr>

    <!-- Profile -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h2 id="profile">User Profile</h2>
        <div class="row">
          <div class="col-md-9">
            <h3>Name: </h3>
            <p>Username: </p>
            <p>Email: </p>
            <p>Nomer Hp / Whatsapp: </p>
            <button class="btn btn-primary" id="setting">Edit Profile</button>
          </div>
        </div>
        <hr>

        <!-- Setting -->
        <div class="row" id="setting-section">
          <h2>User Settings</h2>
          <div class="col-md-6">
            <h3>General</h3>
            <form action="" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="email-address">Email address</label>
                <input type="email" class="form-control" id="email-address" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
              </div>
              <h3>Password</h3>
              <div class="form-group">
                <label for="current-password">Current Password</label>
                <input type="password" class="form-control" id="current-password" placeholder="Enter current password">
              </div>
              <div class="form-group">
                <label for="new-password">New Password</label>
                <input type="password" class="form-control" id="new-password" placeholder="Enter new password">
              </div>
              <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm new password">
              </div>
              <button type="submit" name="change" class="btn btn-primary">Change Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>

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
          <img src="/pw2023_223040173/tubes/image/logo/Sobat Sehat.png" alt="Placeholder Image" class="img-fluid">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="/pw2023_223040173/tubes/js/user.js"></script>
</body>

</html>