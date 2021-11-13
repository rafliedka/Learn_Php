<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    public $kategoti,
           $nama,
           $pembuat,
           $penerbit,
           $harga;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga){
        $this->kategori = $kategori;
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
           
    //membuat method getLable
    public function getLable(){
        return "Komik : $this->nama, $this->pembuat, $this->penerbit";
    }
}

//membuat object
//mebuat objek dan mengubah index property komik
$product1 = new Product("komik", "one pece", "oda nobunaga", "shonen jump", 10000);

var_dump($product1);
echo "<br>";
echo $product1->getLable();
