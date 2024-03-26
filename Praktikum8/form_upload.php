<!--Praktikum 1. Upload File-->

<!--Apa yang anda pahami dari script pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 1.1)-->
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <!-- Form untuk mengunggah file -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <!-- Input untuk memilih file yang akan diunggah -->
        <input type="file" name="fileToUpload" id="fileToUpload">
        <!-- Tombol untuk mengirimkan formulir -->
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>

