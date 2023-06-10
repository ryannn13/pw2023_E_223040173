<?php

session_start();
if (!isset($_SESSION["signin"])) {
    header("Location: login.php");
}

require 'funcions.php';

$ksl = $_GET["id"];

if (hpskonsul($ksl) > 0) {
    echo "
        <script>
            alert('Konsultasi Telah ditangani');
            document.location.href = '../konsultasi.php';
        </script> ";
} else {
    echo "
        <script>
            alert('Konsultasi belum ditangani');
            document.location.href = '../konsultasi.php';
        </script> ";
}
