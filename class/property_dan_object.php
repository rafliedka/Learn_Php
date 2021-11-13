<?php

//membuat kelas produk
class Product{

    //membuat prpoerty
    public $category = "kategori",
           $name = "nama produk",
           $creator = "pembuat",
           $publisher = "penerbit",
           $price = "harga";

    //membuat method getLable
    public function getLable(){
        return "Komik : $this->name, $this->creator, $this->publisher";
    }
}

//membuat object
//mebuat objek dan mengubah index property komik
$product1 = new Product();
$product1->category = "komik";
$product1->name = "one piece";
$product1->creator = "eichiro oda";
$product1->publisher = "shonen jump";
$product1->price = "10000";

var_dump($product1);
echo "komik : $product1->name, $product1->creator, $product1->publisher";
echo "<br>";
echo $product1->getLable(); //memanggil method class product

echo "<hr>";

//membuat objek dan mengubah index property game
$product2 = new Product();
$product2->category = 'game';
$product2->name = 'Final Fantasy';
$product2->creator = 'tetsuya nomura';
$product2->publisher = 'square enix';
$product2->price = '1500000';

var_dump($product2);
echo "<br>";
echo $product2->getLable();