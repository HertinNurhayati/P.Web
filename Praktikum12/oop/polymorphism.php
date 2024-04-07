<!--Praktikum 1. Basic OOP-->

<!--CONTOH POLYMORPHISM DALAM PHP -->
<?php
// Definisi interface Shape
interface Shape {
    public function calculateArea();
}
// Definisi kelas Circle yang mengimplementasikan interface Shape
class Circle implements Shape {
    private $radius;
    // Konstruktor untuk menginisialisasi radius lingkaran
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // Metode untuk menghitung luas lingkaran
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
// Definisi kelas Rectangle yang mengimplementasikan interface Shape
class Rectangle implements Shape {
    private $width;
    private $height;
    // Konstruktor untuk menginisialisasi lebar dan tinggi persegi panjang
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // Metode untuk menghitung luas persegi panjang
    public function calculateArea() {
        return $this->width * $this->height;
    }
}
// Fungsi untuk mencetak luas sebuah bentuk dengan menggunakan interface Shape
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}
// Membuat objek lingkaran dengan radius 5
$circle = new Circle(5);
// Membuat objek persegi panjang dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4, 6);
printArea($circle);
printArea($rectangle);
?>