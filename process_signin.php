<?php
require_once 'Koneksi.php';

if (isset($_POST['btnSignIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "" || $password == "") {
        echo "<script>alert('Please fill all the fields!')</script>";
    } else {
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] == $password) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['full_name'] = $row['full_name'];
                echo "<script>alert('Sign In Success!')</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Wrong Password!')</script>";
            }
        } else {
            echo "<script>alert('Username not found!')</script>";
        }
    }
}
