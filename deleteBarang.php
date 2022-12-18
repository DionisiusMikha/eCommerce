<?php
require_once 'Koneksi.php';
session_start();
$id = $_REQUEST['trash'];
$query = "DELETE FROM cart WHERE c_username = '" . $_SESSION['username'] . "' AND c_IdBarang = '" . $id . "'";
$result = mysqli_query($conn, $query);
