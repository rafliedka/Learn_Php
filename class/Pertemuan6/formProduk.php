<?php
require_once 'models/Produk.php';
$arr_kondisi = ['Baru', 'Second'];
$obj = new Produk();
$rs = $obj->dataJenis();
?>

<h3>Form Produk</h3>

<form method="POST" action="controllers/produkController.php">
  <div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" class="form-control" id="kode" name="kode" required>
  </div>
  <div class="form-group">
    <label for="nama">Nama Produk</label>
    <input type="text" class="form-control" id="nama" name="nama" required>
  </div>
  <div class="form-group">
    <label for="kondisi">Kondisi</label>
    <?php
    $no = 0;
    foreach($arr_kondisi as $kondisi) {

    ?>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="kondisi" id="kondisi_<?= $no; ?>" value="<?= $kondisi; ?>" required>
        <label class="form-check-label" for="kondisi_<?= $no; ?>">
            <?= $kondisi; ?>
        </label>
    </div>
    <?php $no++; } ?>
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" required>
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" name="stock" required>
  </div>
  <div class="form-group">
    <label for="jenis">Jenis Produk</label>
    <select id="jenis" class="form-control" name="jenis" required>
        <option value="" selected>-- Pilih Jenis --</option>
        <?php
        foreach($rs as $opsi) {
        ?>
        <option value="<?= $opsi['id']; ?>"><?= $opsi['nama']; ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="text" class="form-control" id="foto" name="foto">
  </div>   
  <button type="submit" class="btn btn-primary" name="proses" value="simpan">Simpan</button>
</form>