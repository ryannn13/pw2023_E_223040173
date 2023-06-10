<?php

require '../page/account/function/funcions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM content
    WHERE
    judul LIKE '%$keyword%' OR
    detail LIKE '%$keyword%'
    ";
$dtl = query($query);
?>

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