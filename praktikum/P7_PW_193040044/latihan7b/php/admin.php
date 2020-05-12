<?php
require 'functions.php';

$alat_musik = query("SELECT * FROM alat_musik");

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat_musik = query("SELECT * FROM alat_musik WHERE 
                        nama_alatmusik LIKE '%$keyword%' OR
                        jenis LIKE '%$keyword%' OR
                        asal LIKE '%$keyword%' OR 
                        tahun_ditemukan LIKE '%$keyword%' OR
                        warna LIKE '%$keyword%' ");
} else {
  $alat_musik = query("SELECT * FROM alat_musik");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <br>
  <form action="" method="get">
    <input type="text" name="keyword" size="40" placeholder="lagi nyari apa?" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!!</button>
  </form>
  <br>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Gambar</th>
      <th>Nama Alat Musik</th>
      <th>Jenis</th>
      <th>Asal</th>
      <th>Tahun Ditemukan</th>
      <th>Warna</th>
    </tr>

    <?php if (empty($alat_musik)) : ?>
      <tr>
        <td colspan="8">
          <h1 style="text-align: center; color: red; font-style: italic;">Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>

      <?php $i = 1; ?>
      <?php foreach ($alat_musik as $musik) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $musik['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $musik['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
          </td>
          <td><img src="../assets/img/<?= $musik['gambar']; ?>" alt=""></td>
          <td><?= $musik['nama_alatmusik']; ?></td>
          <td><?= $musik['jenis']; ?></td>
          <td><?= $musik['asal']; ?></td>
          <td><?= $musik['tahun_ditemukan']; ?></td>
          <td><?= $musik['warna']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>