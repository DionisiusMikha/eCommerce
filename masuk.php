<?php
require_once 'Koneksi.php';

$jumlahRow = "SELECT COUNT(*) FROM barang";
$jumlahRow = $conn->query($jumlahRow);
$jumlahRow = $jumlahRow->fetch_assoc();
$jumlahRow = $jumlahRow['COUNT(*)'];

for ($i = 1; $i < $jumlahRow; $i++) {
    $randHarga = rand(10000, 100000);
    $randStok = rand(1, 100);
    $query = "UPDATE `barang` SET `Harga` = '$randHarga', `Stok` = '$randStok' WHERE `barang`.`idBarang` = $i";
    $result = mysqli_query($conn, $query);

    // echo "<script>console.log('Data berhasil disimpan!');window.location.href='index.php';</script>";
}
