<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "sobatsehat");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $detail = htmlspecialchars($data["detail"]);
    $kategori = htmlspecialchars($data["id_category"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO content
				VALUES
			  (NULL, '$gambar', '$judul', '$detail', '$kategori');
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukrnFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $eksnGambarValid = ['jpg', 'jpeg', 'png'];
    $eksnGambar = explode('.', $namaFile);
    $eksnGambar = strtolower(end($eksnGambar));
    if (!in_array($eksnGambar, $eksnGambarValid)) {
        echo "<script>
        alert('file yang anda upload bukan gambar');
        </script>";
        return false;
    }

    //cek ukuran gambar
    if ($ukrnFile > 2000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    //upload gambar ke direktori
    //generate nama gambar baru
    $nmFileBr = uniqid() . '.' . $eksnGambar;
    $tujuan = '../../../image/isi/' . $nmFileBr;
    move_uploaded_file($tmpName, $tujuan);

    return $nmFileBr;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM content WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $detail = htmlspecialchars($data["detail"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE content SET 
            gambar = '$gambar',
            judul = '$judul',
            detail = '$detail'
            WHERE id = $id
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM content
    WHERE
    judul LIKE '%$keyword%' OR
    detail LIKE '%$keyword%'
    ";
    return query($query);
}

function konsultasi($konsul)
{
    global $conn;

    $nama = htmlspecialchars($konsul["nama"]);
    $eml = htmlspecialchars($konsul["email"]);
    $hp = htmlspecialchars($konsul["tel"]);
    $pesan = htmlspecialchars($konsul["pesan"]);

    $querykonsul = "INSERT INTO konsultasi
				VALUES
			  (NULL, '$nama', '$eml', '$hp','$pesan');
			";
    mysqli_query($conn, $querykonsul);

    return mysqli_affected_rows($conn);
}

function hpskonsul($ksl)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM konsultasi WHERE id = $ksl");
    return mysqli_affected_rows($conn);
}

function regis($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $uname = strtolower(stripslashes($data["uname"]));
    $email = htmlspecialchars($data["email"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $type = $data["type"];

    $admin = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$uname'");
    $user = mysqli_query($conn, "SELECT username FROM user WHERE username = '$uname'");

    if (mysqli_fetch_assoc($admin)) {
        echo "<script>
                alert('Username telah terdaftar');
            </script>";
        return false;
    }

    if (mysqli_fetch_assoc($user)) {
        echo "<script>
                alert('Username telah terdaftar');
            </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    if ($type === 'Admin') {
        mysqli_query($conn, "INSERT INTO admin VALUES (NULL, '$nama', '$uname', '$email', '$kontak', '$password')");
    } else if ($type === 'User') {
        mysqli_query($conn, "INSERT INTO user  VALUES (NULL, '$nama', '$uname', '$email', '$kontak', '$password')");
    } else {
        echo "Tipe yang dipilih tidak valid.";
        exit;
    }
    return mysqli_affected_rows($conn);
}

function setadmin($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["uname"]);
    $email = htmlspecialchars($data["email"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $pswdbr = mysqli_real_escape_string($conn, $data["password-baru"]);
    $pswdkonf = mysqli_real_escape_string($conn, $data["password-konfirm"]);

    if ($pswdbr !== $pswdkonf) {
        echo "Password baru dan Konfirmasi password salah";
        return false;
    }

    $pswdbaru = password_hash($pswdbr, PASSWORD_DEFAULT);

    $query = "UPDATE admin SET 
            nama = '$nama',
            username = '$username',
            email = '$email',
            kontak = '$kontak',
            password = '$pswdbaru'
            WHERE id = $id
			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
