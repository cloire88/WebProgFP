<?php

require_once "../config.php";

$jurusan = $_GET['jurusan'];

$no = 1;
$queryPelajaran = mysqli_query($db, "SELECT * FROM tabel_pelajaran WHERE jurusan = 'IPA' OR jurusan = '$jurusan'");
if (mysqli_num_rows($queryPelajaran) > 0) {
    $no = 1;
    while ($data = mysqli_fetch_array($queryPelajaran)) { ?>
        <tr>
            <td align="center"><?= $no++ ?></td>
            <td><input type="text" name="mapel[]" value="<?= $data['pelajaran']?>" class="border-0 bg-transparent col-12" readonly></td>
            <td><input type="text" name="jurus[]" value="<?= $data['jurusan']?>" class="border-0 bg-transparent col-12" readonly></td>
            <td><input type="number" name="nilai[]" value="0" min="0" max="100" step="5" class="form-control nilai text-center" onchange="fnhitung()"></td>
        </tr>
    <?php
    }
} else {
    echo "<tr><td colspan='4' align='center'>Data tidak ditemukan</td></tr>";
}


?>