<form method="GET" action="form_ujian.php">
    <label for="">Nama Siswa : </label>
    <input type="text" name="nama" id=""><br>
    <label for="">Pelajaran : </label>
    <select name="pelajaran" id="">
        <option value="">--Pilih Pelajaran--</option>
        <option value="ipa">IPA</option>
        <option value="ips">IPS</option>
        <option value="mtk">Matematika</option>
    </select><br>
    <label for="">Nilai Siswa : </label>
    <input type="text" name="nilai" id=""><br>
    <input type="submit" name="proses" value="Simpan">
</form>
<?php
    $nama = $_GET['nama'];
    $matpel = $_GET['pelajaran'];
    $nilai = $_GET['nilai']; 

    /*
    echo 'Nama siswa : '.$nama;
    echo '<br>Pelajran : '.$matpel;
    echo '<br>Nilai Siswa : '.$nilai;
    */
?>

Nama siswa : <?= $nama; ?>
<br>Pelajaran : <?= $matpel; ?>
<br>Nilai Siswa : <?= $nilai; ?>