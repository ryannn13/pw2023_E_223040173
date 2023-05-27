<?php 
//ARRAY
//Membuat Array

$bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli"];
$my = ["Ryan", 28 , true];
$logo = ['🗿','🤞','🚭'];

//Mencetak Array
echo $logo[0];
echo "<hr>";

//Mencetak isi array
//var_dump atau print_r
var_dump($logo);
echo "<br>";
print_r ($my);
echo "<hr>";

//memenaipulasi array
//menggunakan index
$my [2] = "Rayen";
echo "<hr>";

//menambahkan elemen di akhir dengan mengosongkan indexnya
$bulan[] = "Agustus";
$logo[] = "🚭";
print_r($my);
echo "<hr>";

//menambahkan elemen di akhir menggunakan array_push
array_push($my, "Hidayat");
print_r($my);
echo "<br>";
print_r($bulan);
?>