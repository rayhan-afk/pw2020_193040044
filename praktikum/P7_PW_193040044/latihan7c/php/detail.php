<?php

if (!isset($_GET['id'])) {
    header("location: ../ index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$b = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Latihan6eDetail_193040044</title>
</head>

<body style="background-color: aquamarine">
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $b["gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">
                <p class="btn btn-success">Nama Alat Musik :<?= $b["nama_alatmusik"]; ?></p>
                <p class="btn btn-success">Jenis : <?= $b["jenis"]; ?></p>
                <p class="btn btn-success">Asal : <?= $b["asal"]; ?></p>
                <p class="btn btn-success">Tahun ditemukan : <?= $b["tahun_ditemukan"]; ?></p>
                <p class="btn btn-success">Warna : <?= $b["warna"]; ?></p>
            </div>

            <button class="btn btn-light" class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </center>
</body>

</html>