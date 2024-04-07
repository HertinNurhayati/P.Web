<!--Praktikum 2. CRUD dengan OOP-->

<?php
class Database
{
    // Properties
    private $host = "localhost"; // Menyimpan nama host database
    private $username = "root"; // Menyimpan nama pengguna database
    private $password = ""; // Menyimpan kata sandi database
    private $database = "prakwebdb"; // Menyimpan nama database
    public $conn; // Variabel koneksi

    // Constructor untuk inisialisasi koneksi database
    public function __construct()
    {
        // Membuat koneksi ke database menggunakan mysqli
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil
        if ($this->conn->connect_error) {
            // Jika koneksi gagal, tampilkan pesan error dan hentikan eksekusi skrip
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
