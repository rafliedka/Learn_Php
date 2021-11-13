<?php
require_once '../koneksi.php';
require_once '../models/Produk.php';

//tangkap request element formProduk.php
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$idjenis = $_POST['jenis'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

//menyimpan data diatas ke array
$data = [$kode, $nama, $kondisi, $harga, $stock, $idjenis, $foto];

$obj = new Produk();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx']; //get hidden file and post to server(array)
        $obj->ubah($data);
        break;
    case 'hapus':
        unset($data);
        $data[] = $_POST['idx'];
        $obj->hapus($data);
        break;
    default:
        header('Location:http://localhost/learn-php/class/Pertemuan6/index.php?hal=dataProduk');
        break;
}

//landing page
header('Location:http://localhost/learn-php/class/Pertemuan6/index.php?hal=dataProduk');



