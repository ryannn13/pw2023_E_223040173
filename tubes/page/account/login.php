<?php
session_start();

require "function/funcions.php";

if (isset($_POST["signin"])) {

  $uname = $_POST["uname"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$uname'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      //set session
      $_SESSION["signin"] = true;

      header("Location: admin.php");
      exit;
    }
  } else {
    echo "
        <script>
            alert('Username / password salah');
        </script> ";
  }
}

if (isset($_POST["signin"])) {

  $uname = $_POST["uname"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$uname'");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      //set session
      $_SESSION["signin"] = true;

      header("Location: user.php");
      exit;
    }
  } else {
    echo "
        <script>
            alert('Username / password salah');
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
  <link rel="stylesheet" href="/pw2023_223040173/tubes/css/login.css">
</head>

<body>
  <!-- Form login -->
  <div class="wrapper login">
    <div class="container">
      <div class="col-left">
        <div class="login-text">
          <h2>Selamat Datang</h2>
          <p>Buat Akun Baru</p>
          <a href="register.php" class="btn">Sign Up</a>
        </div>
      </div>
      <div class="col-right">
        <div class="login-form">
          <h2>Login</h2>
          <form action="" method="post">
            <p>
              <label for="uname">Username<span>*</span></label>
              <input type="text" name="uname" placeholder="Username" autocomplete="off" required>
            </p>
            <p>
              <label for="password">Password<span>*</span></label>
              <input type="password" name="password" placeholder="Password" autocomplete="off" required>
            </p>
            <button type="submit" name="signin" value="Sign In">Login</button>
            <p>
              <a href="/pw2023_223040173/tubes/index.php">
                < Kembali Ke Beranda</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Form login -->
</body>

</html>