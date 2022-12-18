<?php
require_once 'Koneksi.php';
session_start();
if (!isset($_SESSION['khususAdmin'])) {
    header("Location: admin.php");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: admin.php");
}


if (isset($_POST['tambahBarang'])) {
    $namaBarang = $_POST['namaBarang'];
    $hargaBarang = $_POST['hargaBarang'];
    $stokBarang = $_POST['stokBarang'];
    $deskripsi = $_POST['deskripsiBarang'];

    // var_dump($namaBarang);
    // var_dump($hargaBarang);
    // var_dump($stokBarang);
    // var_dump($deskripsi);

    $namaGambar = uploadGambar();

    $namaBarang = mysqli_real_escape_string($conn, $namaBarang);
    $deskripsi = mysqli_real_escape_string($conn, $deskripsi);
    // $namaBarang = addslashes($namaBarang);
    var_dump($namaBarang);

    if (!$namaGambar) {
        // return false;
        echo "<script>";
        echo "window.location.href = 'MasterBarang.php';";
        echo "</script>";
    } else {
        if ($namaBarang == ""  || $deskripsi == "") {
            echo "<script>";
            echo "alert('Data tidak boleh kosong');";
            echo "</script>";
        } else {

            $IdBarang = 0;
            $query = "SELECT * FROM barang ORDER BY IdBarang DESC LIMIT 1";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $IdBarang = $row['IdBarang'] + 1;

            $query = "INSERT INTO barang (IdBarang, NamaBarang, Harga, Stok, Deskripsi, gambar) VALUES ('$IdBarang', '$namaBarang', '$hargaBarang', '$stokBarang', '$deskripsi', '$namaGambar')";

            $result = mysqli_query($conn, $query);
            var_dump($result);
            if ($result) {
                echo "<script>";
                // echo "alert('Data berhasil ditambahkan');";
                echo "fetch_table_barang()";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Data gagal ditambahkan');";
                echo "fetch_table_barang()";
                echo "</script>";
            }
        }
    }
}

function uploadGambar()
{
    $namaGambar = $_FILES['gambarBarang']['name'];
    $ukuranGambar = $_FILES['gambarBarang']['size'];
    $errorGambar = $_FILES['gambarBarang']['error'];
    $tmpGambar = $_FILES['gambarBarang']['tmp_name'];

    if ($errorGambar === 4) {
        echo "<script>
            alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $extension = ['jpg', 'jpeg', 'png'];
    $extensionGambar = explode('.', $namaGambar);
    $extensionGambar = strtolower(end($extensionGambar));
    if (!in_array($extensionGambar, $extension)) {
        echo "<script>
            alert('Yang anda pilih bukan gambar');
        </script>";
        return false;
    }

    if ($ukuranGambar > 1000000) {
        echo "<script>
            alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    move_uploaded_file($tmpGambar, 'images/' . $namaGambar);
    return $namaGambar;
}

if (isset($_POST['editBarang'])) {
    $namaBarang = $_POST['namaBarangEdit'];
    $hargaBarang = $_POST['hargaBarangEdit'];
    $stokBarang = $_POST['stokBarangEdit'];

    $IdBarang = $_POST['IdBarang'];

    if ($namaBarang == "" || $hargaBarang == "" || $stokBarang == "") {
        echo "<script>";
        echo "alert('Data tidak boleh kosong');";
        echo "</script>";
    } else {
        $query = "UPDATE barang SET NamaBarang = '$namaBarang', Harga = '$hargaBarang', Stok = '$stokBarang' WHERE IdBarang = '$IdBarang'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>";
            echo "alert('Data berhasil diubah');";
            echo "fetch_table_barang()";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Data gagal diubah');";
            echo "fetch_table_barang()";
            echo "</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master User</title>

    <style>
        .atas {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px;
        }

        #left {
            width: 50%;
            height: 250px;
        }

        #right {
            width: 50%;
            height: 250px;
        }
    </style>
</head>

<body>
    <h1>Master Barang</h1>

    <form action="" method="post">
        <button name="logout">Logout</button>
    </form>
    <br><br>
    <div class="atas">
        <fieldset id="left">
            <legend>Tambah Barang</legend>
            <form action="" method="post" enctype="multipart/form-data">
                Nama Barang: <input type="text" name="namaBarang" placeholder="Nama Barang">
                <br><br>
                Deskripsi: <input type="text" name="deskripsiBarang" placeholder="Deskripsi Barang">
                <br><br>
                Harga Barang: <input type="text" name="hargaBarang" placeholder="Harga Barang" id="hargaBarang">
                <br><br>
                Stok Barang: <input type="text" name="stokBarang" placeholder="Stok Barang" id="stokBarang">
                <br><br>
                Gambar Barang: <input type="file" name="gambarBarang" accept="image/*">
                <br><br>
                <button name="tambahBarang" id="tambahBarang">Tambah Barang</button>
            </form>
        </fieldset>
        <fieldset id="right" disabled>
            <legend>Edit Barang</legend>
            <form action="" method="post" enctype="multipart/form-data">
                Nama Barang: <input type="text" name="namaBarangEdit" placeholder="Nama Barang" id="namaBarangEdit">
                <br><br>
                Harga Barang: <input type="text" name="hargaBarangEdit" placeholder="Harga Barang" id="hargaBarangEdit">
                <br><br>
                Stok Barang: <input type="text" name="stokBarangEdit" placeholder="Stok Barang" id="stokBarangEdit">
                <br><br>
                <button name="editBarang">Edit Barang</button>
                <input type="text" name="IdBarang" id="IdBarangEdit">
            </form>
        </fieldset>
    </div>

    <table border="1" id="tableBarangAdmin" style="text-align: center;">
    </table>

    <script>
        function fetch_table_barang() {
            admin = new XMLHttpRequest();
            admin.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("tableBarangAdmin").innerHTML = this.responseText;
                }
            }
            admin.open("POST", "fetch_table_barang_admin.php", true);
            admin.send();
        }

        document.addEventListener("DOMContentLoaded", function() {
            fetch_table_barang();
            randomNumber2();
            document.getElementById("stokBarang").value = randomNumber();
        });

        function editBarang(noBarang) {
            let namaBarang = document.getElementsByClassName("namaBarangtb")[noBarang - 1].innerHTML;
            let hargaBarang = document.getElementsByClassName("hargatb")[noBarang - 1].innerHTML;
            let stokBarang = document.getElementsByClassName("stoktb")[noBarang - 1].innerHTML;

            if (hargaBarang.includes("$") || hargaBarang.includes(",")) {
                hargaBarang = hargaBarang.replace("$", "");
                hargaBarang = hargaBarang.replace(",", "");
            }

            document.getElementById("namaBarangEdit").value = namaBarang;
            document.getElementById("hargaBarangEdit").value = hargaBarang;
            document.getElementById("stokBarangEdit").value = stokBarang;
            document.getElementById("IdBarangEdit").value = noBarang;

            document.getElementById("right").disabled = false;
        }

        function randomNumber() {
            return Math.floor(Math.random() * 100) + 1;
        }

        function randomNumber2() {
            let rand = Math.floor(Math.random() * 100) + 1 + "," + Math.floor(Math.random() * 10) + 1;
            document.getElementById("hargaBarang").value = rand;
        }

        document.getElementById("tambahBarang").addEventListener("click", function() {
            // document.getElementById("hargaBarang").value = randomNumber2();
            document.getElementById("stokBarang").value = randomNumber();
            randomNumber2();
        });
    </script>

</body>

</html>