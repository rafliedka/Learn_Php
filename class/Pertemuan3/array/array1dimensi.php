<!-- array 1 dimensi (Skalar) -->
<?php
$buah = ['pepaya', 'mangga', 'pisang'];
$buah[2] = 'jeruk';
unset($buah[2]);
$buah[] = 'markisa';
foreach ($buah as $key => $value) {
    echo '<br>Buah dengan index ke-' . $key . ' : ' . $value;
}
