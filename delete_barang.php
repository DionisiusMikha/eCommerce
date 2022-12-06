<?php
require_once 'Koneksi.php';
session_start();

$IdBarang = $_POST['IdBarang'];
echo "<script>alert('$IdBarang')</script>";
$query = "DELETE FROM barang WHERE IdBarang = '$IdBarang'";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>alert('Data berhasil dihapus')</script>";
} else {
    echo "<script>alert('Data gagal dihapus')</script>";
}
