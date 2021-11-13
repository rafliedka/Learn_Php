<?php
    // variable constant
    define('PHI', 3.14);
    define('PELAJARAN', 'MATEMATIKA');
    // diketahui
    $jari2 = 10;
    // cari luas dan keliling lingkaran
    $luas = PHI * $jari2 * $jari2;
    $keliling = 2 * PHI * $jari2;

?>

Luas lingkaran : <?= $luas ?>
<br> Keliling : <?= $keliling ?>