<?php
require "function/funcions.php";

if (isset($_POST["register"])) {

  if (regis($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil');
    </script>";
  } else {
    echo mysqli_error($conn);
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
  <link rel="stylesheet" href="/pw2023_223040173/tubes/css/register.css">
</head>

<body>
  <!-- Form Daftar -->
  <div class="container">
    <form action="" method="post">
      <h2>Registration</h2>
      <div class="content">
        <div class="input-box">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" placeholder="Masukan Nama Lengkap" autocomplete="off" required>
        </div>
        <div class="input-box">
          <label for="uname">Username</label>
          <input type="text" name="uname" id="uname" placeholder="Masukan Username" autocomplete="off" required>
        </div>
        <div class="input-box">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Masukan Email Aktif" autocomplete="off" required>
        </div>
        <div class="input-box">
          <label for="kontak">Nomor Telepon / Whatsapp</label>
          <input type="tel" name="kontak" id="kontak" placeholder="Masukan Nomor Telepon/Whatsapp" autocomplete="off" required>
        </div>
        <div class="input-box">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Masukan Password" required>
        </div>
        <div class="input-box">
          <label for="password2">Konfirmasi Password</label>
          <input type="password" name="password2" id="password2" placeholder="Masukan Password" required>
        </div>
        <span class="type-title" for="type">Type Registrasi</span>
        <div class="type-category">
          <select id="inputState" class="form-select" name="type">
            <option selected>Pilih Type Registrasi</option>
            <option name="Admin">Admin</option>
            <option name="User">User</option>
          </select>
        </div>
        <div class="button-container">
          <button type="submit" name="register">Registrasi</button>
        </div>
        <p>
          <a href="login.php">Sudah Punya Akun</a>
        </p>
      </div>
    </form>
  </div>
  <!-- End Form Daftar -->
</body>

</html>