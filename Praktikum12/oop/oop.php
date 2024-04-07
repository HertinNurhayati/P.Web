<!--Praktikum 1. Basic OOP-->

<?php
class Car
{
    public $brand;
    // Metode untuk memulai mesin mobil
    public function startEngine()
    {
        echo "Engine started!";
    }
}
// Membuat objek mobil pertama
$car1 = new Car();
$car1->brand = "Toyota";
// Membuat objek mobil kedua
$car2 = new Car();
$car2->brand = "Honda";
// Memulai mesin mobil pertama dan menampilkan merek mobil kedua
$car1->startEngine();
echo $car2->brand;
?>