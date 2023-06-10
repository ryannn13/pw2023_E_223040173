<?php

session_start();
if (!isset($_SESSION["signin"])) {
  header("Location: login.php");
}

require 'funcions.php';

//ambil data di URL
$id = $_GET["id"];

//query data berdasarkan id
$dtl = query("SELECT * FROM content WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

  //cek apakah data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '/pw2023_223040173/tubes/page/account/admin.php';
        </script> ";
  } else {
    echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = '/pw2023_223040173/tubes/page/account/admin.php';
        </script> ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Content</title>
  <link rel="website icon" href="/pw2023_223040173/tubes/image/logo/Sobat Sehat.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
  <div class="container my-5" id="Tambah">
    <div class="row">
      <div class="col-md-6">
        <h1>Ubah Data</h1>
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $dtl["id"]; ?>">
          <input type="hidden" name="gambarlama" value="<?= $dtl["gambar"]; ?>">
          <div class="mb-3">
            <label for="gambar" class="form-label">Masukan Gambar : </label>
            <img src="/pw2023_223040173/tubes/image/isi/<?= $dtl["gambar"]; ?>" width="100">
            <input class="form-control" type="file" id="gambar" name="gambar">
          </div>
          <div class="mb-3">
            <label for="judul" class="form-label">Judul Content : </label>
            <input type="text" class="form-control" id="judul" name="judul" required value="<?= $dtl["judul"]; ?>">
          </div>
          <div class="mb-3">
            <label for="detail" class="form-label">Detail Content : </label>
            <input class="form-control" id="detail" name="detail" required value="<?= $dtl["detail"]; ?>">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/pw2023_223040173/tubes/page/account/admin.php">Kembali</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>