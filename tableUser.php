<?php
require_once 'Koneksi.php';
session_start();
if (!isset($_SESSION['khususAdmin'])) {
    header("Location: admin.php");
}
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' style='text-align: center;'>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Status</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    $no = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td style='width:200px;'>" . $row['email'] . "</td>";
        // echo "<td>" . $row['status'] . "</td>";

        if ($row['status'] == 1) {
            echo "<td style='width:100px;'>Active</td>";
        } else {
            echo "<td style='width:100px;'>Non Active</td>";
        }

        if ($row['status'] == 1) {
            echo "<td style='width:65px;'><button id='ban' onclick='banUser(" . $no . ")' value='" . $row['username'] . "' class='ban'>Ban</button></td>";
        } else {
            echo "<td style='width:65px;'><button id='unban' onclick='unbanUser(" . $no . ")' value='" . $row['username'] . "' class='ban'>Unban</button></td>";
        }
        $no++;
    }
}
