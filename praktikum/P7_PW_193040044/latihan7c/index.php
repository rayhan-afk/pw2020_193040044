<?php

require 'php/functions.php';

$alatmusik = query("SELECT * FROM alat_musik")
?>

<html>

<head>
    <title>ALAT MUSIK</title>
    <link rel="stylesheet" href="css/styleCindex.css" type="text/css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-color: aquamarine;">
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <?php foreach ($alatmusik as $b) : ?>
                <P class="tipe">
                    <a class="btn btn-success" href="php/detail.php?id=<?= $b['id'] ?>">
                        <?= $b["nama_alatmusik"] ?>
                    </a>
                    <br>
                    <a href="php/login.php">
                        <button class="btn btn-light" type="">Masuk Ke halaman admin</button>
                        <a />
                </P>
            <?php endforeach; ?>
        </div>
    </center>
</body>

</html>