<!--Praktikum Bagian 7. Penerapan Cookies pada Fitur Keranjang Belanja-->

<?php
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    setcookie("beliNovel", $_POST["beliNovel"]);
    setcookie("beliBuku", $_POST["beliBuku"]);
    header("location: keranjangBelanja.php");
}
?>
