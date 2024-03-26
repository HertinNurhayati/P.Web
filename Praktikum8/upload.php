<!--Praktikum 1. Upload File-->

<!--Apa yang anda pahami dari penggunaan script tersebut. Catat di bawah ini pemahaman anda. (soal no 1.2)-->
<!--Ubah isi dari file upload.php tersebut dengan kode di bawah ini.-->
<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024; // 5 MB
    
    // Memeriksa apakah tipe file dan ukuran file sesuai dengan yang diizinkan
    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        // Memindahkan file yang diunggah ke direktori tujuan
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";

            //Tambahkan script langkah 5 untuk membuat file gambar thumbnail dengan ukuran lebar 200 dan tinggi mengikuti perubahan secara otomatis. Catat di sini apa yang anda amati dari penambahan kode program di atas. (soal no 1.3)
             // Buat thumbnail dengan lebar 200px (tinggi mengikuti perubahan secara otomatis)
            $thumbnailPath = "thumbnails/" . basename($_FILES["fileToUpload"]["name"]);
            list($width, $height) = getimagesize($targetFile);
            $newWidth = 200;
             $newHeight = intval($height * $newWidth / $width);
            $thumbnail = imagecreatetruecolor($newWidth, $newHeight);
             $source = imagecreatefromjpeg($targetFile); // Sesuaikan dengan tipe file yang diunggah
            imagecopyresized($thumbnail, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
             imagejpeg($thumbnail, $thumbnailPath); // Simpan thumbnail
            imagedestroy($thumbnail);

        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
