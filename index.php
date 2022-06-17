<?php

class Maaalik
{
    protected $nama;
    private $alamat;
    protected $salary;

    public function hiName()
    {
        return $this->nama;
    }

    public function lastName()
    {
        return $this->alamat;
    }

    public function __construct($newName, $newAlamat)
    {
        $this->nama = $newName;
        $this->alamat = $newAlamat;
    }
}

$userOne = new Maaalik("abdullah", "muara beliti");
$userTwo = new Maaalik("tiffany", "lubuk linggau");

print_r($userOne);
echo "<br>";
print_r($userTwo);

echo "<br>";
echo $userOne->hiName();
echo "<br>";
echo $userTwo->hiName();
echo "<br>";
echo $userOne->lastName();

// inherit dari Maaalik

class NewMalik extends Maaalik
{
    public $posisi;

    public function __construct($newName, $newAlamat, $posisi, $salary)
    {
        parent::__construct($newName, $newAlamat);
        $this->posisi = $posisi;
        $this->salary = $salary;
    }

    public function testPrivate()
    {

        return $this->nama;
    }

    public function showSalary()
    {
        return $this->salary;
    }

    public function changeSalary($jumlah)
    {
        $this->salary = $jumlah;
    }

    public function __destruct()
    {
       echo "ini pertama, pusingnngg";
    }
}

echo "<hr>";

$userketiga = new NewMalik("taki", "tokyo", "CEO", "55555");

echo "user ketiga";

print_r($userketiga);

echo "<hr>";
echo $userketiga->testPrivate();
echo $userketiga->showSalary();
echo "<br>";

$userketiga->changeSalary(9999);

echo $userketiga->showSalary();

echo "<br>";

echo $userketiga->hiName() . "punya gaji \$" . $userketiga->showSalary() . " apa ini coba " . $userketiga->posisi;


//unset($userOne);
class something
{
    private $namaku;
    private $alamatku;

    public function __construct($namaku, $alamatku)
    {
        $this->namaku = $namaku;
        $this->alamatku = $alamatku;
    }

    public function lolo()
    {
        echo $this->namaku;
    }
    public function __destruct()
    {
        echo "saat terakhir di jalankan";
    }
}
echo "<hr>";
$userKeempat = new something("bangku", "sumatera");
echo "<br>";
print_r($userKeempat);
echo "<br>";
echo $userKeempat->lolo();
echo "<br>";

//unset($userKeempat);

//var_dump($userKeempat);

class pusing {
    public $aaaa = "asdfasdfas";
    public function __construct()
    {

    }

}