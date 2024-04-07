<!--Praktikum 1. Basic OOP-->

<!--BERIKUT ADALAH CONTOH PENGGUNAAN ACCESS MODIFIERS DALAM PHP:-->
<?php
// Definisikan kelas Animal
class Animal
{
    // Properti publik $name, protected $age, dan private $color
    public $name;
    protected $age;
    private $color;
    
    // Konstruktor untuk menginisialisasi properti
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }
    
    // Metode untuk mendapatkan nama hewan
    public function getName()
    {
        return $this->name;
    }
    
    // Metode protected untuk mendapatkan usia hewan
    protected function getAge()
    {
        return $this->age;
    }
    
    // Metode private untuk mendapatkan warna hewan
    private function getColor()
    {
        return $this->color;
    }

    // Metode publik untuk mendapatkan usia hewan dari luar kelas
    public function publicGetAge()
    {
        return $this->getAge();
    }
}

// Membuat objek Animal dengan nama "Dog", usia 3, dan warna "Brown"
$animal = new Animal("Dog", 3, "Brown");

// Menampilkan nama hewan
echo "Name: $animal->name <br>";

// Menampilkan usia hewan menggunakan metode publicGetAge()
echo "Age: " . $animal->publicGetAge() . "<br>";

// Menampilkan warna hewan menggunakan metode getColor() (yang sebenarnya tidak dapat diakses secara langsung dari luar kelas)
// echo "Color: " . $animal->getColor() . "<br>"; // Ini akan menimbulkan error karena getColor() bersifat private
?>
