<?php
require_once 'Koneksi.php';
session_start();
$username = $_REQUEST['username'];
$query = "UPDATE users SET status = 0 WHERE username = '$username'";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>console.log('akun dengan username $username berhasil di ban');</script>";
} else {
    echo "<script>console.log('akun dengan username $username gagal di ban');</script>";
}
