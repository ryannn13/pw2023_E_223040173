<?php
require "function/funcions.php";
$dtl = query("SELECT * FROM content");
$konsultasi = query("SELECT * FROM konsultasi");

//tombol cari ditekan
if (isset($_POST["cari"])) {
  $dtl = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <!-- Stylesheet Bootstrap -->
  <link rel="website icon" href="/pw2023_223040173/tubes/image/logo/Sobat Sehat.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <!-- Sidebar -->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky mt-5">
          <div class="item text-center my-4 fs-2">Sobat Sehat</div>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="fa fa-home"></i>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-profil"></i>
                Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-cog"></i>
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                Log Out
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Content -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
          <h1 class="h2 mb-4">Dashboard Admin</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Users
              </div>
              <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Analytics
              </div>
              <div class="card-body">
                <h5 class="card-title">Page Views</h5>
                <p class="card-text"></p>
              </div>
            </div>
            <br>
          </div>
          <a href="function/add.php">+Tambahkan Data</a>
          <br><br>
          <form action="" method="post">
            <input type="text" name="keyword" id="keyword" size="50" placeholder="Masukan Keyword pencarian..." autofocus autocomplete="off">
            <button type="submit" name="cari">Cari</button>
          </form>
          <br><br>
          <table class="table">
            <thead>
              <tr class="content text-center">
                <th scope="col">No.</th>
                <th scope="col">Aksi</th>
                <th scope="col">Judul</th>
                <th scope="col">Gambar</th>
                <th scope="col">Detail</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($dtl as $row) : ?>
                <tr>
                  <td><?= $i; ?></td>
                  <td>
                    <a href="function/ubah.php?id=<?= $row['id']; ?>" class="badge text-bg-warning">Edit</a> |
                    <a href="function/hapus.php?id=<?= $row['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">Delete</a>
                  </td>
                  <td><?= $row["judul"]; ?></td>
                  <td><img src="/pw2023_223040173/tubes/image/isi/<?= $row["gambar"]; ?>" width="100"></td>
                  <td><?= $row["detail"]; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <br>
        <table class="table">
          <thead>
            <tr class="content text-center">
              <th scope="col">No.</th>
              <th scope="col">Sudah Ditangani</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Nomer HP/whatsapp</th>
              <th scope="col">Pesan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($konsultasi as $row) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td>
                  <a href="function/hpskonsul.php?id=<?= $row['id']; ?>" class="badge bg-complete" onclick="return confirm('yakin?');">✔</a>
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["tel"]; ?></td>
                <td><?= $row["pesan"]; ?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
    </main>
  </div>
  </div>

  <!-- Footer -->
  <footer class="footer mt-auto py-3 text-center">
    <div class="container">
      <span class="text-muted">© 2023 Ryan Hidayat</span>
    </div>
  </footer>

  <!-- Script Bootstrap dan JavaScript plugin lainnya -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>