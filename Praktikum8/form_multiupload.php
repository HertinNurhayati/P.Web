<!--Praktikum 2. Multi Upload File-->

<!--Apa yang anda pahami dari script pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 2.1)-->
<!--Script tersebut digunakan untuk mengunggah multiple file dokumen ke server.
Pertama, script membuat direktori "documents/" untuk menyimpan file-file dokumen yang diunggah.
Selanjutnya, script memeriksa apakah ada file yang diunggah, jika ada, maka script akan loop melalui semua file yang diunggah.
Setiap file akan dipindahkan ke direktori penyimpanan menggunakan fungsi move_uploaded_file().
Jika proses pengunggahan berhasil, pesan berhasil diunggah akan ditampilkan, jika gagal, pesan gagal diunggah akan ditampilkan.
Jika tidak ada file yang diunggah, pesan "Tidak ada file yang diunggah." akan ditampilkan.-->


<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Dokumen</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Gambar</title>
</head>
<body>
    <h2>Unggah Gambar</h2>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept="image/*" />
        <input type="submit" value="Unggah" />
    </form>
</body>
</html>
