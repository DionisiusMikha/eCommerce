<?php
    require_once 'Koneksi.php';
    session_start();
    $total = 0;

    $inv = $_REQUEST['inv_num'];
    $idx = $_REQUEST['idx'];

    $query = "SELECT * FROM sold WHERE s_username = '{$_SESSION['username']}' AND inv_num = '{$inv}' ORDER BY s_IdBarang";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $query2 = "SELECT * FROM barang WHERE IdBarang = {$row['s_IdBarang']}";
    $result2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($result2);

    $splitNama = "";
    if (strlen($row2['NamaBarang']) > 80) {
        $splitNama = substr($row2['NamaBarang'], 0, 80) . "...";
    } else {
        $splitNama = $row2['NamaBarang'];
    }
    $date = date_create($row['s_date']);
    $query3 = "SELECT * FROM sold WHERE inv_num = '{$row['inv_num']}'";
    $result3 = mysqli_query($conn, $query3);
    echo "<div class='row g-0 mb-2'>";
    echo "<h6 class='text-secondary'>" . date_format($date,"j M Y") . " | {$row['inv_num']}</h6>";
    echo "</div>";
    echo "<div class='row g-0'>";
    echo "<div class='col-md-1'>";
    if (strpos($row2['gambar'], '.') !== false) {
        echo "<img src='images/{$row2['gambar']}' class='img-fluid rounded' alt='history item' style='width: 75px; height: 75px; object-fit: cover;'>";
    } else {
        echo "<img src='images/{$row2['gambar']}.jpg' class='img-fluid rounded' alt='history item' style='width: 75px; height: 75px; object-fit: cover;'>";
    }
    echo "</div>";
    echo "<div class='col-md-9'>";
    echo "<div class='card-body py-0 px-2'>";
    echo "<h4 class='card-title mb-1'>$splitNama</h4>";
    echo "<p class='card-text text-secondary mb-0' style='font-weigth: 500; font-size: 14px;'>{$row['qty']} x $" . number_format($row2['Harga']) . "</p>";
    if (mysqli_num_rows($result3) > 1) {
        echo "<p class='card-text text-secondary' style='font-weigth: 500; font-size: 14px;'>+" .mysqli_num_rows($result3) - 1 . " produk lainnya</p>";
    }
    echo "</div>";
    echo "</div>";
    echo "<div class='col-md-2'>";
    echo "<p class='text-dark mb-1' style='font-size: 15px;'>Total Pembelian</p>";
    echo "<h4>$" . number_format($row['total']) ."</h4>";
    echo "</div>";
    echo "</div>";
    echo "<div class='row g-0'>";
    $inv_str = '"' . $row['inv_num'] . '"';
    echo "<h6 class='col-md-2 mt-4 mb-3'><a onclick='detail($idx, $inv_str)'>Lihat Detail Transaksi</a></h6>";
    echo "</div>";
    echo "</div>";
?>