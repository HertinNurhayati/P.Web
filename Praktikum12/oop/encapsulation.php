<!--Praktikum 1. Basic OOP-->

<!--CONTOH ENCAPSULATION DALAM PHP:-->
<?php
// Definisi kelas Car2
class Car
{
    // Properti model dan color
    private $model;
    private $color;
    //Konstruktor untuk menginisialisasi model dan warna mobil
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    // Metode untuk mendapatkan model mobil
    public function getModel()
    {
        return $this->model;
    }
    // Metode untuk mengatur warna mobil
    public function setColor($color)
    {
        $this->color = $color;
    }
    // Metode untuk mendapatkan warna mobil
    public function getColor()
    {
        return $this->color;
    }
}
// Membuat objek mobil dengan model "Toyota" dan warna "Blue"
$car = new Car("Toyota", "Blue");
// Menampilkan model mobil
echo "Model: " . $car->getModel() . "<br>";
// Menampilkan warna mobil
echo "Color: " . $car->getColor() . "<br>";
// Mengubah warna mobil menjadi "Red"
$car->setColor("Red");
// Menampilkan warna mobil yang sudah diubah
echo "Updated Color: " . $car->getColor() . "<br>";
?>
