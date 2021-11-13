<?php
require_once 'models/Produk.php';
$id = $_REQUEST['id'];
$obj = new Produk();
$rs = $obj->getProduk($id);
// print_r($rs); exit();
?>

<div class="card" style="width: 18rem;">
  <?php
  //$gambar = (!empty($rs['foto'])) ? $rs['foto'] : "no-image.jpg";
  ?>
  <img class="card-img-top" src="<?= $rs['foto']; ?>" width="50%" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama']; ?></h5>
    <p class="card-text">
        Kode : <?= $rs['kode']; ?><br>
        Kondisi : <?= $rs['kondisi']; ?><br>
        harga : <?= number_format($rs['harga'],0,',','.'); ?><br>
        Stock : <?= $rs['stock']; ?><br>
        Kategori : <?= $rs['kategori']; ?><br>
    </p>
    <a href="index.php?hal=dataProduk" class="btn btn-danger">Kembali</a>
  </div>
</div>