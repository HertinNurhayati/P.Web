<!--Praktikum Bagian 1. Indexed Array-->

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <!--berikut untuk memahami indexed array di dalam PHP-->
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    echo $Listdosen[2] . "<br>";
    echo $Listdosen[0] . "<br>";
    echo $Listdosen[1] . "<br>";
    ?>

    <!--Untuk menampilakn array, selain menggunakan indeks kita juga bisa menggunakan perulangan.
    Coba tampilan hasil dari kode program diatas dengan menggunakan perulangan. Tampilkan kode program dan hasilnya.
    (soal no.1)-->
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    // Menggunakan perulangan untuk menampilkan isi array
    foreach ($Listdosen as $dosen) {
        echo $dosen . "<br>";
    }
    ?>

</body>
</html>
