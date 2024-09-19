<?php

class Orang{
    //property
    public string $nama;
    public string $tglLahir;
    public string $alamat;

    //constructornya
    public function __construct ($nama)
    {
        $this->nama = $nama;
        echo "object". $this->nama ."dibuat <br>";
        $this->tampilkanPasword();
    }

    //destructornya
    public function __destruct()
    {
        echo "object"  .$this->nama. "dihapus <br>";
    }

    //method
    public function ucapkanSalam(){
        echo "<h2> Halo perkenalkan nama saya" . $this ->nama ." </h2>";
    }
    
    private function tampilkanPasword() {
        echo "Rahasia123";
    }

    //setter
    public function setNama($nama) 
    {
        $this->nama = $nama;
    }

    //getter
    public function getNama()  
    {
        return $this->nama;
    }
    
    public function setTgllahir ($tglLahir)
    {
        $this->tgllahir = $tglLahir;
    }

    public function getTgllahir() 
    {
        return $this->alamat;
    }

    public function setAlamat($alamat) 
    {
        $this->alamat = $alamat;
    }
    public function getAlamat() 
    {
        return $this->alamat;
    }
}