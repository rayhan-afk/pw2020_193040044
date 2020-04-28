<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040044") or die("Database Salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_alatmusik = htmlspecialchars($data['nama_alatmusik']);
    $jenis = htmlspecialchars($data['jenis']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['warna']);

    $query = "INSERT INTO 
                alat_musik
              VALUES
              ('', '$gambar', '$nama_alatmusik', '$jenis', '$asal', '$tahun_ditemukan', '$warna')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}
