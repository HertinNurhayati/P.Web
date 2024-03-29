<!--Praktikum Bagian 10. Penerapan Session pada Fitur Login-->

<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

// Query untuk memeriksa apakah username dan password sesuai
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $sql);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username; // Menyimpan username ke dalam session
    $_SESSION['status'] = 'login'; // Menyimpan status login ke dalam session
    ?>
    Anda Berhasil Login, silahkan menuju <a href="homeSession.php">Halaman Home</a>
    <?php
} else {
    ?>
    Gagal login, silahkan login lagi<br>
    <a href="sessionLoginForm.html">Halaman Login</a>
    <?php
    echo mysqli_error($connect); // Menampilkan pesan error dari database jika terjadi
}
?>
