<?php

require '../page/account/function/funcions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM content NATURAL JOIN category_content
    WHERE
    judul LIKE '%$keyword%' OR
    detail LIKE '%$keyword%' OR
    nama_category LIKE '%$keyword%'
    ";
$dtl = query($query);

?>

<table class="table">
    <thead>
        <tr class="content text-center">
            <th scope="col">No.</th>
            <th scope="col">Aksi</th>
            <th scope="col">Category</th>
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
                    <a href="function/ubah.php?id=<?= $row['id']; ?>" class="badge text-bg-warning">⚙️</a> |
                    <a href="function/hapus.php?id=<?= $row['id']; ?>" class="badge text-bg-danger" onclick="return confirm('yakin?');">🗑</a>
                </td>
                <td><?= $row["nama_category"]; ?></td>
                <td><?= $row["judul"]; ?></td>
                <td><img src="../../image/isi/<?= $row["gambar"]; ?>" width="100"></td>
                <td><?= substr_replace($row["detail"], "<a></a>", 100); ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>
</table>