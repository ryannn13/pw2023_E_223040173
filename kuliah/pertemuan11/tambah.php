<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data ketika tombol tambah diklik
if (isset($_POST['tambah'])) {
    //cek jika data berhasil ditambahkan
    if (tambah($_POST)) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}

require('views/tambah.view.php');
