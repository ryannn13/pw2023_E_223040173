//ambil elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var tabelContainer = document.getElementById("container-tabel");

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  //buat objek ajax
  var xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      tabelContainer.innerHTML = xhr.responseText;
    }
  }

  //eksekusi ajax
  xhr.open(
    "GET",
    "/pw2023_223040173/tubes/ajax/usersearch.php?keyword=" + keyword.value,
    true
  );
  xhr.send();
});
