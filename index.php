<?php
include 'Printer.php';
$printer = new Printer();
$buku = $printer->cetakBuku("Nama Buku");

include 'Kurir.php';
$kurir = new Kurir();
$kurir->kirim($buku, "Tujuan");
?>
