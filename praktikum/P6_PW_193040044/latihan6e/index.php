<?php

require 'php/functions.php';

$alatmusik = query("SELECT * FROM alat_musik")
?>

<html>

<head>
    <title>Latihan6d_193040044</title>
    <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
</head>

<body background="assets/img/bckgrd.jpg">
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <?php foreach ($alatmusik as $b) : ?>
                <P class="tipe">
                    <a href="php/detail.php?id=<?= $b['id'] ?>">
                        <?= $b["nama_alatmusik"] ?>
                    </a>
                </P>
            <?php endforeach; ?>
        </div>
    </center>
</body>

</html>