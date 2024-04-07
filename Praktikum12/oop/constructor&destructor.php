<!--Praktikum 1. Basic OOP-->

<!--BERIKUT ADALAH CONTOH CONSTRUCTOR DAN DESTRUCTOR:-->
<?php
// Definisikan kelas Car
class Car
{
    // Properti private untuk merek mobil
    private $brand;

    // Konstruktor untuk menginisialisasi merek mobil saat objek dibuat
    public function __construct($brand)
    {
        // Menampilkan pesan bahwa mobil baru telah dibuat
        echo "A new car is created.<br>";
        
        // Menginisialisasi merek mobil
        $this->brand = $brand;
    }

    // Metode untuk mendapatkan merek mobil
    public function getBrand()
    {
        return $this->brand;
    }

    // Destruktor untuk menampilkan pesan saat mobil dihancurkan
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

// Membuat objek mobil dengan merek "Toyota"
$car = new Car("Toyota");

// Menampilkan merek mobil
echo "Brand: " . $car->getBrand() . "<br>";
?>
