<!--Praktikum 1. Basic OOP-->

<!--CONTOH PENERAPAN INHERITANCE DALAM PHP:-->
<?php
// Mendefinisikan kelas Animal
class Animal {
    protected $name;
    // Konstruktor untuk menginisialisasi nama hewan
    public function __construct($name)
    {
        $this->name = $name;
    }
    // Metode untuk makan
    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }
    // Metode untuk tidur
    public function sleep()
    {
        echo $this->name . " is sleeping. <br>";
    }
}
// Mendefinisikan kelas Cat yang merupakan turunan dari Animal
class Cat extends Animal {
    // Metode untuk bersuara meow
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}
// Mendefinisikan kelas Dog yang merupakan turunan dari Animal
class Dog extends Animal {
    // Metode untuk bersuara bark
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}
// Membuat objek kucing dengan nama "Whiskers"
$cat = new Cat("Whiskers");
// Membuat objek anjing dengan nama "Buddy"
$dog = new Dog("Buddy");
// Memanggil metode makan untuk kucing
$cat->eat();
// Memanggil metode tidur untuk anjing
$dog->sleep();
// Memanggil metode meow untuk kucing
$cat->meow();
// Memanggil metode bark untuk anjing
$dog->bark();
?>