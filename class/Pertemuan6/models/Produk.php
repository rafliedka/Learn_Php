<?php
class Produk {
    private $koneksi;
    public function __construct() {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataProduk() {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis ORDER BY produk.id DESC";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function dataJenis() {
        $sql = "SELECT * FROM jenis";
        //fungsi query digunakan untuk eksekusi query dan ambil datanya sehingga tidak butuh fetchAll()
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data) {
        $sql = "INSERT INTO produk (kode,nama,kondisi,harga,stock,idjenis,foto) VALUES(?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getProduk($id) {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data) {
        $sql = "UPDATE produk SET kode=?, nama=?, kondisi=?, harga=?, stock=?, idjenis=?, foto=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id) {
        $sql = "DELETE FROM produk WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }
}