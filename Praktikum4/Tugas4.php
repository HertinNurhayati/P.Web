<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<?php
// Data mahasiswa dalam array multidimensi
$dataMahasiswa = [
    [
        'Nama' => 'Hertin',
        'NIM' => '2241760025',
        'Jurusan' => 'Teknologi Informasi',
        'Email' => 'hertinnurhayati4@gmail.com',
        'Gambar' => 'gambar1.jpeg',
    ],
    [
        'Nama' => 'Fufu',
        'NIM' => '2241760026',
        'Jurusan' => 'Teknologi Informasi',
        'Email' => 'fufu@gmail.com',
        'Gambar' => 'gambar2.jpg',
    ],
];

// Menampilkan data mahasiswa menggunakan HTML
echo "<h2>Data Mahasiswa array multidimensi</h2>";

foreach ($dataMahasiswa as $mahasiswa) {
    echo "<div style='margin-bottom: 20px;'>
            <ul>
                <li><img src='{$mahasiswa['Gambar']}' alt='Gambar Mahasiswa'></li>
                <li>Nama:</strong> {$mahasiswa['Nama']}</li>
                <li>NIM:</strong> {$mahasiswa['NIM']}</li>
                <li>Jurusan:</strong> {$mahasiswa['Jurusan']}</li>
                <li>Email:</strong> {$mahasiswa['Email']}</li>
            </ul>
        </div>";
}
?>

</body>
</html>
