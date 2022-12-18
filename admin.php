<?php
require_once 'Koneksi.php';
session_start();
if (isset($_POST['btnSignIn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($username == "admin" || $password == "siPalingBackend") {
        $_SESSION['khususAdmin'] = $username;
        header("Location: homeAdmin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE ADMIN</title>
    <link rel="icon" href="assets/img/logo.png">
</head>

<body>
    <h1>ADMIN PAGE</h1>
    <form action="" method="post">
        Username: <input type="text" name="username" placeholder="Username"> <br>
        Password: <input type="password" name="password" placeholder="Password"> <br>
        <input type="submit" name="btnSignIn" value="Sign In">
    </form>
</body>

</html>