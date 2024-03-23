<!--Praktikum 4 : HTML Injection-->

<!--Buat satu file baru bernama html_aman.php di dalam folder dasarWeb. Ketikkan kode pada langkah 2 di dalam html_aman.php (soal no 4.2)-->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input">
        <input type="submit" name="submit" value="Submit">
    </form>

    <!--Ketikkan kode tambahan pada langkah 6 di dalam html_aman.php-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //memeriksa apakah input adalah email yang valid
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Lanjutkan dengan pengolahan email yang aman
                echo "Email yang dimasukkan adalah email yang valid.";
            } else {
                // Tangani input yang tidak valid
                echo "Email yang dimasukkan tidak valid.";
            }
        } else {
            echo "Email tidak dimasukkan.";
        }
    }
    ?>
</body>
</html>

