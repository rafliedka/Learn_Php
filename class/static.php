<?php


/* //membuat class contoh static
class contohStatic {

    //membuat prperti angka
    public static $angka = 1;

    //membuat static method halo
    public static function halo(){
        return "Halo" . self::$angka++ . "kali";
    }
}

//pemanggilan static keyword tidak perlu instantiating lagi
echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<br>";
echo contohStatic::halo(); */



/* contoh ke2 */
/* class contoh {
    public $angka = 1;

    public function halo(){
        return "Halo" . $this->angka++ . "kali <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo(); */


/* contoh ke3 */ //nilai statik akan tetap walaupun banyak objek
class contoh {
    public static $angka = 1;

    public function halo(){
        return "Halo" . self::$angka++ . "kali <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();