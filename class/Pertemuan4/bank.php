<?php
class Bank
{
    // member 1
    public $nama;
    protected $norek;
    private $saldo;
    public const BANK = 'Bank Syariah Nurul Fikri';
    public static $jml = 0;

    // member 2
    public function __construct($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    // member 3
    public function setor($uang)
    {
        $this->saldo += $uang;
    }

    public function ambil($uang)
    {
        $this->saldo -= $uang;
    }

    public function cetak()
    {
        echo '<b><u>' . self::BANK . '</u></b>';
        echo '<br>No. Rekening : ' . $this->norek;
        echo '<br>Nama nasabah : ' . $this->nama;
        echo '<br>Saldo : Rp.' . number_format($this->saldo, 0, ',', '.');
        echo '<hr/>';
    }
}
