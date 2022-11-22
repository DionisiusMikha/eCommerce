<?php
require_once 'Koneksi.php';

if (isset($_POST['btnSignIn'])) {
    $username = mysqli_real_escape_string($conn, strtolower(stripslashes($_POST['username'])));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if ($username == "" || $password == "") {
        echo "<script>alert('Please fill all the fields!')</script>";
        echo "<script>window.location.href='signin.php'</script>";
    } else {
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['full_name'] = $row['full_name'];
                echo "<script>alert('Sign In Success!')</script>";
                echo "<script>window.location.href='index.php'</script>";
            } else {
                echo "<script>alert('Wrong password!')</script>";
                echo "<script>window.location.href='signin.php'</script>";
            }
        } else {
            echo "<script>alert('Username not found!')</script>";
            echo "<script>window.location.href='signin.php'</script>";
        }
    }
}
