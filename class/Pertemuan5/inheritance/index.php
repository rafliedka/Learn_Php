<?php
require_once 'dosen.php';
require_once 'mahasiswa.php';

$d1 = new Dosen('Nasrul', 'L', '111', 'S.Kom, M.Kom');
$m1 = new Mahasiswa('Fawwaz', 'L', 5, 'TI');
$m2 = new Mahasiswa('Fawwaz2', 'L', 5, 'TI');

echo '<h2>Data Dosen</h2>';
$d1->cetak(); 
echo '<h2>Data Mahasiswa</h2>';
$m1->cetak();
$m2->cetak();