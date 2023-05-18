<?php
class Animal {
    public $nama;
    public $jenis;

    function getInfo(){
        return " Hewan ini merupakan $this->nama dan Jenisnya $this->jenis";
    }
}

class Cat extends Animal {
        function __construct($nama)
    {   
        $this->nama = $nama;
    }
        function getInfo(){
        return " Hewan ini merupakan " . $this->nama . "  jenis " . $this->jenis = "Kucing" . ". Kucing disebut juga kucing domestik atau kucing rumah adalah sejenis mamalia karnivora dari keluarga Felidae.";
    }
}

class Dog extends Animal {
    function getInfo(){
        return " Hewan ini merupakan " . $this->nama . "  jenis " . $this->jenis = "Anjing" . ". Anjing domestik atau Anjing adalah hewan mamalia yang telah mengalami domestikasi dari serigala sejak 15.000 tahun yang lalu.";
    }
}

$animal = new Animal();
$animal->nama = " Singa ";
$animal->jenis = " Karnivora.";
echo $animal->getInfo();
echo "</br>";

$cat = new Cat("Mine");
echo $cat->getInfo();
echo "</br>";

$dog = new Dog();
$dog->nama = "Milo";
echo $dog->getInfo();

?>