<!--Praktikum Bagian 3 : Form Input PHP-->

<!--Buat satu file baru bernama proses_form.php di dalam folder dasarWeb. Ketikkan kode pada langkah 2 di dalam proses_form.php-->
<!--Apa yang anda pahami dari penggunaan form pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 3.1)

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fungsinya adalah untuk mengambil nilai yang dikirim melalui metode POST dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Menampilkan nilai yang telah diambil dari form
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>
