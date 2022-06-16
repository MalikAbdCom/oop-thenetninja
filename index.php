<?php

class Maaalik
{
    private $nama;
    private $alamat;
    function hiName(){
        echo $this->nama;
    }
    function lastName(){
        echo $this->alamat;
    }
    function __construct($newName, $newAlamat)
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
