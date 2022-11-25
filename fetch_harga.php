<?php
require_once 'Koneksi.php';
session_start();
$total = 0;
$query = "SELECT * FROM cart, barang WHERE cart.c_IdBarang = barang.IdBarang AND cart.c_username = '$_SESSION[username]'";
$result = mysqli_query($conn, $query);
foreach ($result as $row) {
    $total += $row['quantity'] * $row['Harga'];
}
echo "<p style='color:red;'>$" . number_format($total) . "</p>";
