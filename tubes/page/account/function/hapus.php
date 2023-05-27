<?php 
require 'funcions.php';

$id = $_GET["id"];

if ( hapus($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = '../admin.php';
        </script> ";
} else {
    echo "
        <script>
            alert('Data gagal ditambahkan dihapuskan');
            document.location.href = '../admin.php';
        </script> ";
}
?>