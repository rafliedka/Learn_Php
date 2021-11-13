<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    public $kategoris,
           $nama,
           $pembuat,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;

    public function __construct($kategori, $nama, $pembuat, $penerbit, $harga, $jmlHalaman, $waktuMain){
        $this->kategori = $kategori;
        $this->nama = $nama;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
           
    //membuat method getLable
    public function getLable(){
        return "$this->nama, $this->pembuat, $this->penerbit";
    }
}

class getInfoLengkap{

    public function cetak($product){
        $str = "{$product->kategori} | {$product->getLable()} (Rp. $product->harga)";

        if($this->kategori == "komik"){
            $str .= " ~ {$this->jmlHalaman} Halaman.";
        } elseif ($this->kategori == "game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}   

//objek
$product1 = new Product("komik", "one pece", "oda nobunaga", "shonen jump", 10000, 100, 0);
$product2 = new Product("game", "FFXV", "yukimura", "kotak enik", 1000000, 0, 50);

//objek pencetakan
$infoProduct1 = new getInfoLengkap();
echo $infoProduct1->cetak($product1);