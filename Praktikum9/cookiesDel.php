<!--Praktikum Bagian 6. Menghapus Nilai Cookies-->

<?php
    setcookie("user", "Polinema", time()-3600);
?>

<!--Amati dan jelaskan hasil yang dihasilkan dari langkah 2 dan 3, kemudian beri kesimpulan (soal no 14)
Kesimpulan: Setelah menjalankan cookiesDel.php, cookie 'user' dengan nilai 'Polinema' sudah dihapus.
Saat mencoba mengaksesnya kembali di cookiesCall.php, cookie tersebut tidak lagi tersedia, sehingga menghasilkan pesan kesalahan "Undefined array key 'user'".