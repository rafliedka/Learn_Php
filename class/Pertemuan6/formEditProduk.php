<?php
require_once 'models/Produk.php';
$arr_kondisi = ['Baru', 'Second'];
$obj = new Produk();
$rs = $obj->dataJenis();
$id = $_REQUEST['id'];
$data_edit = $obj->getProduk($id);
?>

<h3>Form Edit Produk</h3>

<form method="POST" action="controllers/produkController.php">
  <div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" id="kode" name="kode" value="<?= $data_edit['kode']; ?>" required>
  </div>
  <div class="form-group">
    <label for="nama">Nama Produk</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_edit['nama']; ?>" required>
  </div>
  <div class="form-group">
    <label for="kondisi">Kondisi</label>
    <?php
    $no = 0;
    foreach($arr_kondisi as $kondisi) {
        $cek = ($data_edit['kondisi'] == $kondisi) ? "checked" : "";
    ?>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi" id="kondisi_<?= $no; ?>" value="<?= $kondisi; ?>" <?= $cek; ?> required>
        <label class="form-check-label" for="kondisi_<?= $no; ?>">
            <?= $kondisi; ?>
        </label>
    </div>
    <?php $no++; } ?>
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="<?= $data_edit['harga']; ?>" required>
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" value="<?= $data_edit['stock']; ?>" required>
  </div>
  <div class="form-group">
    <label for="jenis">Jenis Produk</label>
    <select id="jenis" class="form-control" name="jenis" required>
        <option value="" selected>-- Pilih Jenis --</option>
        <?php
        foreach($rs as $opsi) {
            $sel = ($data_edit['idjenis'] == $opsi['id']) ? "selected" : "";
        ?>
        <option value="<?= $opsi['id']; ?>" <?= $sel; ?> ><?= $opsi['nama']; ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="text" class="form-control" id="foto" name="foto" value="<?= $data_edit['foto']; ?>">
  </div>   
  <button type="submit" class="btn btn-primary" name="proses" value="ubah">Ubah</button>
  <input type="hidden" name="idx" value="<?= $id; ?>">
</form>