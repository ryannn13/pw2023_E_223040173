<?php

session_start();
if (!isset($_SESSION["signin"])) {
    header("Location: login.php");
}

require 'function/funcions.php';
$user = query("SELECT * FROM user");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href="../../image/logo/Sobat Sehat.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>User</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky mt-5">
                    <div class="item text-center my-4 fs-2">Sobat Sehat</div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tampiluser.php">
                                <i class="fa fa-users"></i>
                                Users
                            </a>
                        <li class="nav-item">
                            <a class="nav-link" href="konsultasi.php">
                                <i class="fa fa-comments"></i>
                                Konsultasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fa fa-sign-out-alt"></i>
                                Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2 mb-4" id="dasboard">Dashboard Admin</h1>
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
                                <h5 class="card-title">User Aktif</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="input-group my-3">
                                    <input type="search" name="keyword" id="keyword" class="form-control" placeholder="Cari User..." autofocus autocomplete="off">
                                    <button class="btn btn-primary" type="submit" name="cari" id="tombol-cari">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="tabel-user">
                        <table class="table">
                            <thead>
                                <tr class="content text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nomer HP/whatsapp</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($user as $row) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row["nama"]; ?></td>
                                        <td><?= $row["username"]; ?></td>
                                        <td><?= $row["email"]; ?></td>
                                        <td><?= $row["kontak"]; ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        <!-- Footer -->
        <footer class="footer mt-auto py-3 text-center">
            <div class="container">
                <span class="text-muted">© 2023 Ryan Hidayat</span>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="../../js/cariuser.js"></script>
</body>

</html>