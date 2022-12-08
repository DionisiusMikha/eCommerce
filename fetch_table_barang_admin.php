<?php
require_once 'Koneksi.php';
session_start();
// semua role tidak boleh masuk ke halaman ini
if (!isset($_SESSION['khususAdmin'])) {
    header("Location: admin.php");
}

echo "<th>Nama Barang</th>";
echo "<th>Harga Barang</th>";
echo "<th>Stok Barang</th>";
echo "<th>rating</th>";
echo "<th>Deskripsi</th>";
echo "<th>Action</th>";

$query = "SELECT * FROM barang";
$result = mysqli_query($conn, $query);
$ctr = 1;
while ($row = mysqli_fetch_assoc($result)) {

    $deskripsiSplit = "";
    $deskripsi = $row['Deskripsi'];
    if (strlen($deskripsi) > 20) {
        $deskripsiSplit = substr($deskripsi, 0, 20) . "...";
    } else {
        $deskripsiSplit = $deskripsi;
    }
    echo "<tr>";
    echo "<td id='namaBarangtb' class='namaBarangtb'>" . $row['NamaBarang'] . "</td>";
    echo "<td id='hargatb' class='hargatb'>$" . number_format($row['Harga']) . "</td>";
    echo "<td id='stoktb' class='stoktb'>" . $row['Stok'] . "</td>";
    if ($row['rating'] == null) {
        echo "<td id='ratingtb'>0</td>";
    } else {
        echo "<td id='ratingtb'>" . $row['rating'] . "</td>";
    }
    echo "<td>" . $deskripsiSplit . "</td>";
    echo "<td style='width: 60px;'><button class='btn btn-primary' onclick='editBarang(" . $ctr++ . ")'>Edit</button></td>";
    echo "</tr>";
}
