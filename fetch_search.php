<?php
require_once 'Koneksi.php';
$search = $_REQUEST['search'];

$query = "SELECT * FROM `barang` WHERE `namaBarang` LIKE '%$search%'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "<img src='images/" . $row['gambar'] . ".jpg' alt='' loading='lazy' />";
        echo "<div class='judul'>";
        echo "<h3>" . $row['NamaBarang'] . "</h3>";
        echo "<p>" . $row['Harga'] . "</p>";
        echo "</div>";
        echo "</li>";
    }
}