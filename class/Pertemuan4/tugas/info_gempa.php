<?php
require_once('gempa.php');

$infoGempa = new Gempa('Tokyo', 4.8);
$infoGempa1 = new Gempa('Texas', 5.6);
$infoGempa2 = new Gempa('Banten', 1.6);
$infoGempa3 = new Gempa('Tel Aviv', 9.2);

$list_infoGempa = [$infoGempa, $infoGempa1, $infoGempa2, $infoGempa3];

echo '<h1>Informasi Gempa</h1><hr/><br>';

foreach ($list_infoGempa as $info) {
    '<ul>';
    $info->dampak();
    '</ul>';
}
