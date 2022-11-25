<?php
require_once 'Koneksi.php';
session_start();
$query = "SELECT * FROM cart WHERE c_username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
echo $row['quantity'];