<?php

class bangku{

    public $bahan,
           $ukuran,
           $warna,
           $harga;
    
    public function __construct($bahan, $ukuran, $warna, $harga){
    $this->bahan = $bahan;
    $this->ukuran = $ukuran;
    $this->warna = $warna;
    $this->harga = $harga;
    }

    public function getLable(){
        return "Komik : $this->bahan, $this->ukuran, $this->warna, $this->harga";
    }
}

$bangku1 = new bangku("jati", 2, "coklat", 150000);
var_dump($bangku1);
echo "<br>";
echo $bangku1->getLable();

echo "<br>";

$bangku2 = new bangku("biasa");
echo $bangku2->getLable();