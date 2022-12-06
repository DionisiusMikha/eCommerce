<?php
require_once 'Koneksi.php';
session_start();
$id = $_REQUEST['trash'];
$query = "DELETE FROM cart WHERE c_username = '" . $_SESSION['username'] . "' AND IdCart = '" . $id . "'";
$result = mysqli_query($conn, $query);

$jumlahData = 1;
$query2 = "SELECT * FROM cart WHERE c_username = '" . $_SESSION['username'] . "'";
$result2 = mysqli_query($conn, $query2);
while ($row = mysqli_fetch_array($result2)) {
    $query3 = "UPDATE cart SET IdCart = '" . $jumlahData . "' WHERE c_username = '" . $_SESSION['username'] . "' AND c_IdBarang ='" . $row['c_IdBarang'] . "'";
    $jumlahData++;
}
