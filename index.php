<?php

class Maaalik
{
    protected $nama;
    private static $alamat = "lubuk linggau";
    protected $salary;

    public static function hiName()
    {
        return $this->nama;
    }

    public static function lastName()
    {
        return self::$alamat;
    }

    public function __construct($newName, $newAlamat)
    {
        $this->nama = $newName;
        $this->alamat = $newAlamat;
    }

    public static $nama_saya = "malik abdullah";
}

echo Maaalik::lastName();