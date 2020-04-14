<?php 

    require 'php/functions.php';

    $alatmusik = query("SELECT*FROM alat_musik")
?>

<html>
    <head>
        <title>Latihan5b_193040044</title>
        <link rel="stylesheet" href="css/styleB.css" type="text/css">
    </head>
    <body background="assets/img/bckgrd.png">
        <h1>Alat Musik</h1>
        <center>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Alat Musik</th>
                <th>Jenis</th>
                <th>Asal</th>
                <th>Tahun Ditemukan</th>
                <th>Warna</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach($alatmusik as $b) : ?>
            <tr>
                <?php $i ?>
                <td><?= $b["id"]; ?></td>
                <td><img src="assets/img/<?= $b["gambar"]; ?>"></td>
                <td><?= $b["nama_alatmusik"]; ?></td>
                <td><?= $b["jenis"]; ?></td>
                <td><?= $b["asal"]; ?></td>
                <td><?= $b["tahun_ditemukan"]; ?></td>
                <td><?= $b["warna"]; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
		</center>
    </body>
</html>