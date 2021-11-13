<?php
    // variable define by user
    $nama_siswa = 'Budi Santoso';
    $umur = 25;
    $berat_badan = 55.5;
    // cetak
    echo 'Nama siswa : '.$nama_siswa;  //tanda titik untuk tanda penghubung (concatine)
    echo "<br>Nama siswa : $nama_siswa"; // string interpolation harus menggunakan 2 kutip
    echo '<br>Umur : '.$umur.' tahun';
    echo '<br>Berat badan : '.$berat_badan.' kg';
?>

<hr>
Nama Siswa : <?= $nama_siswa ?>
<br>Umur : <?= $umur ?> tahun
<br>Berat badan : <?= $berat_badan ?> kg