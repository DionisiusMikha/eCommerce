<?php
// mysqli_connect("localhost", "root", "", "db_ecommerce");
$conn = mysqli_connect("localhost", "root", "", "db_ecommerce");
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
