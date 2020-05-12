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
    <title>Latihan6eDetail_193040044</title>
</head>

<body>
    <center>
        <h1>Alat Musik</h1>
        <div class="container">
            <div class="gambar">
                <img src="../assets/img/<?= $b["gambar"]; ?>" alt="">
            </div>
            <div class="keterangan">
                <p>Nama Alat Musik :<?= $b["nama_alatmusik"]; ?></p>
                <p>Jenis : <?= $b["jenis"]; ?></p>
                <p>Asal : <?= $b["asal"]; ?></p>
                <p>Tahun ditemukan : <?= $b["tahun_ditemukan"]; ?></p>
                <p>Warna : <?= $b["warna"]; ?></p>
            </div>

            <button class="tombol_kembali"><a href="../index.php">Kembali</a></button>
        </div>
    </center>
</body>

</html>