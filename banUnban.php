<?php
require_once 'Koneksi.php';
session_start();
$username = $_REQUEST['username'];
// echo "<script>alert('$username');</script>";
$query = "UPDATE users SET status = 1 WHERE username = '$username'";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('akun dengan username $username berhasil di unban');</script>";
} else {
    echo "<script>console.log('akun dengan username $username gagal di unban');</script>";
}
