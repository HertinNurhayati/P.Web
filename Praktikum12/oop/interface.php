<!--Praktikum 1. Basic OOP-->

<!--BERIKUT ADALAH CONTOH PENGGUNAAN INTERFACE DALAM PHP:-->
<?php
// Mendefinisikan interface Shape
interface Shape {
    // Metode untuk menghitung luas
    public function calculateArea();
}

// Mendefinisikan interface Color
interface Color {
    // Metode untuk mendapatkan warna
    public function getColor();
}

// Mendefinisikan kelas Circle yang mengimplementasikan Shape dan Color
class Circle implements Shape, Color {
    private $radius;
    private $color;

    // Konstruktor untuk menginisialisasi radius dan warna lingkaran
    public function __construct($radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }

    // Implementasi metode calculateArea untuk menghitung luas lingkaran
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    // Implementasi metode getColor untuk mendapatkan warna lingkaran
    public function getColor() {
        return $this->color;
    }
}

// Membuat objek lingkaran dengan radius 5 dan warna "Blue"
$circle = new Circle(5, "Blue");

// Menampilkan luas lingkaran
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// Menampilkan warna lingkaran
echo "Color of Circle: " . $circle->getColor() . "<br>";
?>
