<?php
require_once 'Koneksi.php';
session_start();
$id = $_REQUEST['plus'];
// echo "<script>alert('id: " . $id . "');</script>";
$query = "UPDATE cart SET quantity = quantity + 1 WHERE c_username = '" . $_SESSION['username'] . "' AND IdCart = '" . $id . "'";
$result = mysqli_query($conn, $query);
if ($result) {
    $query = "SELECT * FROM cart WHERE c_username = '" . $_SESSION['username'] . "' AND IdCart = '" . $id . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo $row['quantity'];
} else {
    echo "error";
}
