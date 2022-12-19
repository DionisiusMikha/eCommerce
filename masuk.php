<?php
require_once 'Koneksi.php';
$arrBrand = array("HobbySearch", "Suruga-ya", "Aniplex+", "MelonBooks", "Cdjapan");

$query = "SELECT * FROM barang";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$jumlahData = mysqli_num_rows($result);

for ($i = 0; $i < $jumlahData; $i++) {
    $randBrand = rand(0, 4);
    $query = "UPDATE barang SET brand = '$arrBrand[$i]' WHERE IdBarang = '$i'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }
}