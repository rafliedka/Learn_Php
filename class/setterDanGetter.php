<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    private $kategori,
           $nama,
           $pembuat,
           $penerbit,
           $harga;
    protected $diskon;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga){
        $this->kategori = $kategori;
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setKategori($kategori){
        return $this->kategori = $kategori;
    }

    public function getKategori(){
        return $this->kategori;
    }

    public function setNama($nama){
        if (!is_string($nama)) {
            throw new Exception("harus string");
            
        }
        return $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setPembuat($pembuat){
        return $this->pembuat = $pembuat;
    }

    public function getPembuat(){
        return $this->pembuat;
    }

    public function setPenerbit($penerbit){
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
    
    public function setHarga(){
        return $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    //membuat method getLable
    public function getLable(){
        return "$this->nama, $this->pembuat, $this->penerbit";
    }

    public function getInfoProduct(){
        $str = "{$this->kategori} | {$this->getLable()} (Rp. $this->harga)";
        return $str;
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
}

class game extends Product{

    private $waktuMain;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain){
        parent::__construct($kategori, $nama, $pembuat, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
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

$product2->setDiskon(25);
echo $product2->getHarga();

echo "<hr>";

$product1->setPembuat("udin");
echo $product1->getPembuat();