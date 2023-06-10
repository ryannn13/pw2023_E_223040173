<?php

require '../page/account/function/funcions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM user
    WHERE
    nama LIKE '%$keyword%' OR
    username LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    kontak LIKE '%$keyword%' 
    ";
$user = query($query);

?>
<?php if ($user) : ?>
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
<?php else : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                User Tidak Ditemukan
            </div>
        </div>
    </div>
<?php endif; ?>