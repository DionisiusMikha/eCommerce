<?php
require_once 'Koneksi.php';
session_start();
$total = 0;
$query = "SELECT * FROM cart, barang WHERE cart.c_IdBarang = barang.IdBarang AND cart.c_username = '$_SESSION[username]'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result)) {
    $total += $row['quantity'] * $row['Harga'];

    $namaSplit = "";
    if (strlen($row['NamaBarang']) > 35) {
        $namaSplit = substr($row['NamaBarang'], 0, 35) . "...";
    } else {
        $namaSplit = $row['NamaBarang'];
    }
    echo "<li class='single-cart-item' style='border: 0.1px solid black; background-color:rgb(245, 245, 245);'>";
    echo "<div class='thumb' style='margin-top: 20px; margin-left:20px;'>";
    echo "<img src='images/" . $row['gambar'] . ".jpg' alt='' style='width: 10%;'>";
    echo "</div>";
    echo "<div class='d-flex'>";
    echo "<div class='content' style='margin-top: 20px; margin-left:20px;'>";
    echo "<h3>" . $namaSplit . "<br>";
    echo "<p>" . $row['Deskripsi'] . "</p>";
    echo "<span>$" . number_format($row['Harga']) . "</span>";
    echo "</div>";
    echo "<div class='content' style='margin-left:auto; margin-right:15px; margin-top:20px;'>";
    echo "<button id='trash' style='margin-right:5px;' class='btn' value='" . $row['IdBarang'] . "' ><i class='fa fa-trash'></i></button>";
    echo "<button id='minus' class='btn'><i class='fa fa-minus'></i></button>";
    echo "<span id='kwan' style='margin-left:5px; margin-right:5px; font-size:20px; font-weight:bold;'>" . $row['quantity'] . "</span>";
    echo "<button id='plus' class='btn'><i class='fa fa-plus'></i></button>";
    echo "</div>";
    echo "</div>";
    echo "</li>";
}
