<!-- for loop -->
<?php
echo 'cetak bilangan 1 s/d 30';
for ($i = 1; $i <= 30; $i++) {
    echo '<br>Bilangan ' . $i;
}

echo '<hr/>Cetak Angka 20 s/d 10';
for ($j = 20; $j >= 10; $j--) {
    echo '<br>Angka' . $j;
}

// while loop
echo '<hr/>cetak angka 1 s/d 5';
$a = 1;
while ($a <= 5) {
    echo '<br>Angka ' . $a;
    $a++;
    if ($a == 2) continue;
    if ($a == 5) break;
}
