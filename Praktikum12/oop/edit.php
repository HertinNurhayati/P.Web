<!--Praktikum 2. CRUD dengan OOP-->

<?php
require_once 'crud.php';
$crud = new crud();

// Mendapatkan ID dari parameter URL
$id = $_GET['id'];

// Membaca data berdasarkan ID
$tampil = $crud->readById($id);

// Memproses pembaruan data jika metode permintaan adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jabatan = $_POST['jabatan'];
    $keterangan = $_POST['keterangan'];
    $crud->update($id, $jabatan, $keterangan);
    
    // Redirect ke halaman utama setelah pembaruan data
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jabatan</h2>
        <!-- Form untuk mengedit data -->
        <form method="post" action="">
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <!-- Nilai awal dari input jabatan diisi dengan nilai yang sudah ada -->
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $tampil['jabatan']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <!-- Nilai awal dari input keterangan diisi dengan nilai yang sudah ada -->
                <textarea name="keterangan" class="form-control" id="keterangan" cols="38" rows="10" required><?php echo $tampil['keterangan']; ?></textarea>
            </div>
            <!-- Menambahkan input tersembunyi untuk menyimpan ID -->
            <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Script untuk Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>