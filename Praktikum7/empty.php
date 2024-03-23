<!--Praktikum 2. Function empty-->

<!--Buat satu file baru bernama empty.php di dalam folder dasarWeb. Ketikkan kode pada langkah 2 di dalam empty.php-->
<!--Apa yang anda pahami dari penggunaan empty pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 2.1)-->
<?php
// Mendefinisikan array kosong
$myArray = array();

// Penggunaan empty pada file tersebut
// Fungsi empty digunakan untuk memeriksa apakah suatu variabel telah didefinisikan dan memiliki nilai kosong (NULL, 0, "", array kosong, variabel yang didefinisikan tetapi belum diinisialisasi).
// Pada contoh di atas, empty digunakan untuk memeriksa apakah array $myArray tidak terdefinisi atau kosong.
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong. <br>"; // Jika array tidak terdefinisi atau kosong, cetak pesan ini
} else {
    echo "Array terdefinisi dan tidak kosong. <br>"; // Jika array terdefinisi dan tidak kosong, cetak pesan ini
}


//Tambahkan isi dari file empty.php tersebut dengan kode di bawah ini.
//buat hasil tidak menjadi 1 baris, jadi tampilan dari echo harus terpisah. (soal no 2.2)-->
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong. <br>"; // Jika variabel tidak terdefinisi atau kosong, cetak pesan ini
} else {
    echo "Variabel terdefinisi dan tidak kosong. <br>"; // Jika variabel terdefinisi dan tidak kosong, cetak pesan ini
}
?>