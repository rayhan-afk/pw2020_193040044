<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
</head>

<body style="background-color: aquamarine; ">
  <h3>Form Tambah Data Alat Musik</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar" required><br></br>
      </li>
      <li>
        <label for="nama_alatmusik">Nama Alat Musik :</label>
        <input type="text" name="nama_alatmusik" id="nama_alatmusik" required><br></br>
      </li>
      <li>
        <label for="jenis">Jenis :</label>
        <input type="text" name="jenis" id="jenis" required><br></br>
      </li>
      <li>
        <label for="asal">Asal :</label>
        <input type="text" name="asal" id="asal" required><br></br>
      </li>
      <li>
        <label for="tahun_ditemukan">Tahun Ditemukan :</label>
        <input type="text" name="tahun_ditemukan" id="tahun_ditemukan" required><br></br>
      </li>
      <li>
        <label for="warna">Warna :</label>
        <input type="text" name="warna" id="warna" required><br></br>
      </li>

    </ul>
    <button class="btn btn-success" type="submit" name="tambah">Tambah Data!</button>
    <button class="btn btn-light" type="sumbit"><a href="admin.php" style="text-decoration: none; color: black;">Kembali</a></button>
  </form>
</body>

</html>