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

if (isset($_POST['MB'])) {
    header("Location: masterBarang.php");
}

if (isset($_POST['MT'])) {
    header("Location: masterTransaction.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
</head>

<body>
    <h1>HOME ADMIN</h1> <br>
    <form action="" method="post">
        <button name="logout">Logout</button>
        <button name="MU">Master User</button>
        <button name="MB">Master Barang</button>
        <button name="MT">Master Transaction</button>
    </form> <br>

    <table border="1" style="text-align: center;" id="table">

    </table>

    <script>
        function fetch_table() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("table").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "tableUser.php", true);
            xhttp.send();
        }

        document.addEventListener("DOMContentLoaded", function() {
            fetch_table();
        });

        function banUser(ctr) {
            let username = document.getElementById("ban").value;

            let ban = document.getElementsByClassName("ban")[ctr - 1];

            lol = new XMLHttpRequest();
            lol.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    fetch_table();
                }
            };
            lol.open("POST", "banUser.php", true);
            lol.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            lol.send("username=" + ban.value);
        }

        function unbanUser(ctr) {
            let username = document.getElementById("unban").value;

            let ban = document.getElementsByClassName("ban")[ctr - 1];

            lol = new XMLHttpRequest();
            lol.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    fetch_table();
                }
            };
            lol.open("POST", "banUnban.php", true);
            lol.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            lol.send("username=" + ban.value);
        }
    </script>
</body>

</html>