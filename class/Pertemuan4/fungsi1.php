<?php
$str = 'Belajar PHP mengasyikan';
$str = strtoupper($str); //digunakan untuk membuat string menjadi kapital semua
echo $str;
$str = strtolower($str);
echo '<hr/>' . $str;
$str = ucwords($str);
echo '<hr/>' . $str . '<hr/>';
$ar_buah = ['semangka', 'durian montong', 'nangka', 'kelapa', 'melon', 'timun suri'];
sort($ar_buah);
foreach ($ar_buah as $buah) {
    echo ucfirst($buah) . ', '; //ucfirst digunakan untuk membuat huruf pertama menjadi kapital
}

echo '<hr/>';
arsort($ar_buah);
foreach ($ar_buah as $buah) {
    echo ucfirst($buah) . ', ';
}
