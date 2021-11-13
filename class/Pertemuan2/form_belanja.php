<?php
$nama = isset($_POST['customer']) ? $_POST['customer'] : "";
$produk = isset($_POST['produk']) ? $_POST['produk'] : "";
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : "";

switch ($produk) {
    case 'tv':
        $harga = 1250000;
        break;
    case 'kulkas':
        $harga = 1800000;
        break;
    case 'mesin':
        $harga = 3400000;
        break;
    case 'ac':
        $harga = 3100000;
        break;
    default:
        $harga = 0;
        break;
}

$total = ($jumlah >= 1) ? $jumlah * $harga : 0;
$diskon = $total * (15 / 100);
$totalSetelahDiskon = $total - $diskon;
$pajak = $totalSetelahDiskon * (10 / 100);
$final = $totalSetelahDiskon + $pajak;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Belanja Online</title>
</head>

<body>
    <div class="card bg-light row m-4 mb-0 ms-3 me-3">
        <div class="card-header">
            <h2>Belanja Online</h2>
        </div>
        <div class="card-body">
            <form class="needs-validation" action="form_belanja.php" method="POST" novalidate>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="customer" placeholder="Masukkan nama anda" required>
                    <label for="customer">Customer</label>
                    <div class="invalid-feedback">
                        Masukkan nama anda!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-control" name="produk" required>
                        <option value="">--Pilih Produk--</option>
                        <option value="tv">TV</option>
                        <option value="kulkas">Kulkas</option>
                        <option value="mesin">Mesin Cuci</option>
                        <option value="ac">AC</option>
                    </select>
                    <label for="produk">Produk Pilihan</label>
                    <div class="invalid-feedback">
                        Masukkan pilihan produk anda!
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="jumlah" placeholder="Masukkan jumlah beli" required>
                    <label for="jumlah">Jumlah Beli</label>
                    <div class="invalid-feedback">
                        Masukkan jumlah pembelian!
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-end">
                <input class="btn btn-danger me-2" type="reset" value="Reset">
                <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
            </div>
        </div>
        </form>
    </div>

    <div class="card bg-light row m-4 mb-0 ms-3 me-3">
        <div class="card-header">
            <h2>Detail Pesanan</h2>
        </div>
        <div class="card-body">
            Nama Customer : <?= $nama; ?><br>
            Produk Pilihan : <?= $produk; ?><br>
            Jumlah Belanja : <?= $jumlah; ?><br>
            Harga Satuan : <?= $harga; ?><br>
            Total Belanja : <?= $total; ?><br>
            Potongan Diskon 15% : <?= $diskon; ?><br>
            Pajak 10% : <?= $pajak; ?><br>
            Harus Dibayar : <?= $final; ?>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>