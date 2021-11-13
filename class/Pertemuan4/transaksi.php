<?php
require_once('bank.php');
$n1 = new Bank('111', 'Budi', 5000000);
$n2 = new Bank('112', 'Dewi', 8000000);
$n3 = new Bank('112', 'Tono', 3000000);

$n1->setor(4000000);
$n3->setor(5000000);
$n2->ambil(5000000);
$n3->ambil(1000000);

$list = [$n1, $n2, $n3];

foreach ($list as $nbh) {
    echo $nbh->cetak();
}

echo '<br>Jumlah nasabah : ' . Bank::$jml;
