<?php
// spl_autoload_register berfungsi menerima parameter closure/fungsi yang memiliki sebuah parameter $class yang berisi nama class yang akan dipanggil. Di dalam closure ini, kita melakukan include ke class yang diinginkan
spl_autoload_register(function ($class) {
  include $class . '.php';
});

$printer = new Printer();
$buku = $printer->cetakBuku("Nama Buku");

$kurir = new Kurir();
$kurir->kirim($buku, "Tujuan");
?>
