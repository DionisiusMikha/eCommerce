<?php
require_once 'Koneksi.php';
session_start();
$id = $_REQUEST['plus'];
$query = "UPDATE cart SET quantity = quantity + 1 WHERE c_username = '" . $_SESSION['username'] . "' AND c_IdBarang = '" . $id . "'";
$result = mysqli_query($conn, $query);
if ($result) {
    $query = "SELECT * FROM cart WHERE c_username = '" . $_SESSION['username'] . "' AND c_IdBarang = '" . $id . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo $row['quantity'];
    // echo "<script>console.log('" . $row['quantity'] . "')</script>";
} else {
    echo "error";
}
