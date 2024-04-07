<!--Praktikum 1. Basic OOP-->

<!--CONTOH SEDERHANA ABSTRAKSI DALAM PHP MENGGUNAKAN ABSTRACT CLASS DAN METHOD-->
<?php
// Definisikan kelas abstract Shape
abstract class Shape
{
    // Metode abstrak untuk menghitung luas
    abstract public function calculateArea();
}
// Definisikan kelas Circle yang merupakan turunan dari Shape
class Circle extends Shape
{
    private $radius;
    // Konstruktor untuk menginisialisasi radius lingkaran
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    // Implementasi metode calculateArea untuk lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
// Definisikan kelas Rectangle yang merupakan turunan dari Shape
class Rectangle extends Shape
{
    private $width;
    private $height;
    // Konstruktor untuk menginisialisasi panjang dan lebar persegi panjang
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    // Implementasi metode calculateArea untuk persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
// Membuat objek lingkaran dengan radius 5
$circle = new Circle(5);
// Membuat objek persegi panjang dengan panjang 4 dan lebar 6
$rectangle = new Rectangle(4, 6);
// Menampilkan luas lingkaran
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// Menampilkan luas persegi panjang
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
?>


<?php
// Definisikan kelas abstract Shape
abstract class Shape
{
    // Metode abstrak untuk menghitung luas
    abstract public function calculateArea();
}

// Definisikan kelas Circle yang merupakan turunan dari Shape
class Circle extends Shape
{
    private $radius;

    // Konstruktor untuk menginisialisasi radius lingkaran
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementasi metode calculateArea untuk lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Definisikan kelas Rectangle yang merupakan turunan dari Shape
class Rectangle extends Shape
{
    private $width;
    private $height;

    // Konstruktor untuk menginisialisasi panjang dan lebar persegi panjang
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode calculateArea untuk persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Membuat objek lingkaran dengan radius 5
$circle = new Circle(5);
// Membuat objek persegi panjang dengan panjang 4 dan lebar 6
$rectangle = new Rectangle(4, 6);

// Menampilkan luas lingkaran
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// Menampilkan luas persegi panjang
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
?>
