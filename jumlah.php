<?php
require_once 'Koneksi.php';
session_start();
$jumlah = 0;
$query = "SELECT * FROM cart WHERE c_username = '$_SESSION[username]'";
$result = mysqli_query($conn, $query);
foreach ($result as $row) {
    $jumlah++;
}
echo "<p style='color:red;'>Total items(". "<span id='totalss'>$jumlah</span>" .")</p>";
