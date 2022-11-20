<?php
require_once 'Koneksi.php';

$jumlahRow = "SELECT COUNT(*) FROM barang";
$jumlahRow = $conn->query($jumlahRow);
$jumlahRow = $jumlahRow->fetch_assoc();
$jumlahRow = $jumlahRow['COUNT(*)'];
echo $jumlahRow;
$ctr = 77;

for ($i = 1; $i < $jumlahRow; $i++) {
    // $randHarga = rand(10000, 100000);
    // $randStok = rand(1, 100);
    // $query = "UPDATE `barang` SET `Harga` = '$randHarga', `Stok` = '$randStok', `IdBarang` = '$i' WHERE `barang`.`IdBarang` = '$ctr'";
    // $result = mysqli_query($conn, $query);
    // $ctr++;

    // $randomRating = 0;
    // randomr rating can float but only ,5
    $randomRating = rand(1, 5) / 2;
    $query = "UPDATE `barang` SET `rating` = '$randomRating' WHERE `barang`.`IdBarang` = '$i'";
    $result = mysqli_query($conn, $query);


    // echo "<script>console.log('Data berhasil disimpan!');window.location.href='index.php';</script>";
}
