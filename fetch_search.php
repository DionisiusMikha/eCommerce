<?php
require_once 'Koneksi.php';
$search = $_REQUEST['search'];

$query = "SELECT * FROM `barang` WHERE `namaBarang` LIKE '%$search%'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "<a href='product-details.php?id=" . $row['IdBarang'] . "'>";
        if (strpos($row['gambar'], '.') !== false) {
            echo "<img loading='lazy' draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . "'>";
        } else {
            echo "<img draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . ".jpg'>";
        }

        echo "<div class='judul'>";
        echo "<h3>" . $row['NamaBarang'] . "</h3>";
        echo "<p>$" . number_format($row['Harga']) . "</p>";
        echo "</div>";
        echo "</a>";
        echo "</li>";
    }
}
