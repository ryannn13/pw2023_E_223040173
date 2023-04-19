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

<header>
    <!-- Navigasi utama -->
  <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand">Sobat Sehat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="/pw2023_223040173/tubes/index.php">Home</a>
          <a class="nav-link" aria-current="page" href="#">Profile</a>
          <a class="nav-link" aria-current="page" href="login.php">Log Out</a>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky mt-5">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fa fa-home"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-users"></i>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-chart-bar"></i>
              Analytics
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-cog"></i>
              Settings
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="h2">Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Users
            </div>
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text">500</p>
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
              <p class="card-text">50,000</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<footer class="footer mt-auto py-3 text-center">
  <div class="container">
    <span class="text-muted">© 2023 Ryan Hidayat</span>
  </div>
</footer>

  <!-- Script Bootstrap dan JavaScript plugin lainnya -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
