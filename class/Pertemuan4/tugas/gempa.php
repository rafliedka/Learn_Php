<?php
class Gempa
{
    public $tempat;
    public $skala;
    protected $efek;

    public function __construct($tempat, $skala)
    {
        $this->tempat = $tempat;
        $this->skala = $skala;
    }

    public function dampak()
    {
        if ($this->skala < 2) {
            $efek = 'Tidak Terasa';
        } elseif ($this->skala >= 2 && $this->skala < 4) {
            $efek = 'Bergoncang';
        } else if ($this->skala >= 4 && $this->skala <= 6) {
            $efek = 'Bangunan Roboh';
        } else { // untuk skala > 6
            $efek = 'Bangunan Roboh dan Berpotensi tsunami';
        }

        echo '<li>Telah terjadi Gempa di ' . $this->tempat . ' dengan skala ' . $this->skala . ' Richter' . ', berdampak ' . $efek . '<br>' . '</li>';
    }
}
