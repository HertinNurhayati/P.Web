<?php
/*SOAL CERITA */
$jumlahTotalKursi = 45;
$jumlahKursiTerisi = 28;
$jumlahKursiKosong = $jumlahTotalKursi - $jumlahKursiTerisi;
$persentaseKursiKosong = ($jumlahKursiKosong / $jumlahTotalKursi) * 100;
echo "Jumlah kursi kosong: $jumlahKursiKosong<br>";
echo "Persentase kursi kosong: " . number_format($persentaseKursiKosong, 2) . "%\n";
?>
