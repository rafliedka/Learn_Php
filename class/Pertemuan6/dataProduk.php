<?php
require_once 'models/Produk.php';
$obj = new Produk();
//panggil method untuk menampilkan data
$rs = $obj->dataProduk();
?>
<h3>Data Produk</h3>
<a href="index.php?hal=formProduk" class="btn btn-primary">Tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no = 1;
    foreach($rs as $prod) {
  ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $prod['kode']; ?></td>
      <td><?= $prod['nama']; ?></td>
      <td><?= $prod['harga']; ?></td>
      <td><?= $prod['stock']; ?></td>
      <td><?= $prod['kondisi']; ?></td>
      <td><?= $prod['kategori']; ?></td>
      <td>
        <form method="POST" action="controllers/produkController.php">
          <a href="index.php?hal=detailProduk&id=<?= $prod['id']; ?>" class="btn btn-info">Detail</a>
          <a href="index.php?hal=formEditProduk&id=<?= $prod['id']; ?>" class="btn btn-warning">Ubah</a>
          <button class="btn btn-danger" onclick="return confirm('Data akan dihapus?')" name="proses" type="submit" value="hapus">Hapus</button>
          <input type="hidden" name="idx" id="idx" value="<?= $prod['idx'];?>">
        </form>
      </td>
    </tr>
    <?php
    $no++; 
    }
    ?>
  </tbody>
</table>