<!--Praktikum Bagian 2. Login Single User-->

<?php
// Informasi koneksi ke database
$host = "localhost"; // Sesuaikan dengan host database Anda
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$database = "prakwebdb"; // Sesuaikan dengan nama database yang baru Anda buat

// Membuat koneksi
$connect = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
