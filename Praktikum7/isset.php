<?php
// Mendefinisikan variabel umur
$umur;

//Apa yang anda pahami dari penggunaan isset pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 1.1)
// Fungsi isset adalah untuk memeriksa apakah variabel $umur telah diinisialisasi dan nilainya lebih besar atau sama dengan 18
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa. <br>";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan. <br>";
}


//Tambahkan isi dari file isset.php tersebut dengan kode di bawah ini. (soal no 1.2)
// Mendefinisikan array $data
$data = array("nama" => "Jane", "usia" => 25);
// Memeriksa apakah indeks "nama" telah di-set dalam array $data
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"]. "<br>"; // Jika indeks "nama" telah di-set, cetak nilai yang terkandung dalam indeks "nama"
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array. <br>"; // Jika indeks "nama" tidak di-set, cetak pesan bahwa variabel "nama" tidak ditemukan dalam array
}
?>
