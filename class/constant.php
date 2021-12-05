<?php

// cara pertama untuk membuat konstanta yang tidak bisa masuk kedalam class
define('NAMA', 'Edka');

const UMUR = 20 ;

echo NAMA;
echo "<br>";
echo UMUR;


echo "<hr>";

class Coba{
    const NAMA = "Etka";
}

echo Coba::NAMA;
echo "<br>";

// menampilkan line
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;