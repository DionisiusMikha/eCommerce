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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master User</title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!-- <style>
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
    </style> -->
</head>

<body>
    <h1>Master Transaksi</h1>

    <form action="" method="post">
        <button name="logout">Logout</button>
    </form>
    <br><br>
    <div class="container" id="cardTransaksiAdmin"></div>

    <script>
        function fetch_transaksi() {
            admin = new XMLHttpRequest();
            admin.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("cardTransaksiAdmin").innerHTML = this.responseText;
                }
            }
            admin.open("POST", "transaksi_admin.php", true);
            admin.send();
        }
        setInterval(() => {
            fetch_transaksi();
        }, 1000);
    </script>

</body>

</html>