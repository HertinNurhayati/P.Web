<!--Praktikum Bagian 10. Penerapan Session pada Fitur Login-->

<html>
<head>
</head>
<body>
<?php
session_start();

// Memeriksa apakah pengguna sudah login
if(isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    echo "Selamat datang " . $_SESSION['username'] . "<br>";
    echo "<a href='sessionLogout.php'>Log Out</a>";
} else {
    echo "Anda belum login. Silahkan ";
    ?>
    <a href="sessionLoginForm.html">Log In</a>
    <?php
}
?>
</body>
</html>
