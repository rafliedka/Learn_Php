<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    public $kategori,
           $nama,
           $pembuat,
           $penerbit;
    protected $diskon;
    private $harga;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga){
        $this->kategori = $kategori;
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
           
    //membuat method getLable
    public function getLable(){
        return "$this->nama, $this->pembuat, $this->penerbit";
    }

    public function getInfoProduct(){
        $str = "{$this->kategori} | {$this->getLable()} (Rp. $this->harga)";
        return $str;
    }
    
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

class komik extends Product{
    
    private $jmlHalaman;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $jmlHalaman){
        
        parent::__construct($kategori, $nama, $pembuat, $penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct(){
        $str = parent::getInfoProduct() . "~ {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }
}

class game extends Product{

    private $waktuMain;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain){
        parent::__construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct(){
        $str = parent::getInfoProduct() . "~ {$this->waktuMain} Jam.";
        return $str;
    }
}

//objek
$product1 = new komik("komik", "one pece", "oda nobunaga", "shonen jump", 10000, 100);
$product2 = new game("game", "FFXV", "yukimura", "kotak enik", 1000000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

echo "<hr>";

$product1->setDiskon(25);
echo $product1->getHarga();