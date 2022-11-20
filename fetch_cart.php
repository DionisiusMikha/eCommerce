<?php
require_once('Koneksi.php');

$id = $_REQUEST['id'];

$query = "SELECT * FROM cart";
$result = mysqli_query($conn, $query);
