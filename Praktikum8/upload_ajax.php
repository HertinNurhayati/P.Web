<!--Praktikum 3. Upload  File dengan PHP dan Jquery-->

<!--Apa yang anda pahami dari script pada file tersebut. Catat di bawah ini pemahaman anda. (soal no 3.1)-->
<?php
// Memeriksa apakah file telah diunggah
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    
    // Mendapatkan ekstensi file
    $file_name_parts = explode('.', $_FILES['file']['name']);
    $file_ext = strtolower(end($file_name_parts));
    
    
    // Daftar ekstensi file yang diizinkan
    $extensions = array("pdf", "doc", "docx", "txt");
    
    // Memeriksa apakah ekstensi file diizinkan
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }
    
    // Memeriksa ukuran file
    if ($file_size > 2097152) { // 2 MB
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }
    
    // Jika tidak ada kesalahan, pindahkan file ke direktori tujuan
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";

    } else {
        echo implode("", $errors); // Menampilkan semua pesan kesalahan
    }
}
?>
