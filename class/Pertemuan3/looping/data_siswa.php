<h3 align="center">Data Siswa</h3>
<table align="center" width="50%" cellpadding="10">
    <thead>
        <tr bgcolor="pink">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($no = 1; $no <= 5; $no++) {
            $warna = ($no % 2 == 0) ? 'yellow' : 'green';
        ?>
            <tr bgcolor="<?= $warna; ?>">
                <td>
                    <?= $no; ?>
                </td>
                <td>Siswa <?= $no; ?></td>
                <td>Jl. Melati no.<?= $no; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>