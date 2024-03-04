<?php
/*Ketikkan ke dalam file variabel_konstanta.php (langkah 2)*/
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";

/*Tambahkan isi dari file variabel_konstanta.php (langkah 4)*/
$benar = true;
$salah = false;
echo "Variabel benar : $benar<br> Variabel salah : $salah<br>";

/*Tambahkan isi dari file variabel_konstanta.php (langkah 6) */
// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>
