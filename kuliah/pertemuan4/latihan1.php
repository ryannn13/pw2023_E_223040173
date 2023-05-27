<?php 
$angka = 100;


function cek_bilangan ($angka) //parameter
{
    if ($angka % 2 == 1) {
            return "$angka adalah bilangan GANJIL";
        } else {
            return "$angka adalah bilangan GENAP";
        }
}
echo cek_bilangan($angka); //argument
echo "<br>";
echo cek_bilangan(75);
echo "<br>";
echo cek_bilangan(50);
echo "<br>";
echo cek_bilangan(25);
?>