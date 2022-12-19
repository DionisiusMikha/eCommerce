<?php
require_once 'Koneksi.php';
session_start();

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
                if ($row['status'] == 0) {
                    $_SESSION['error'] = "Akun anda sedang di suspend!";
                    echo "<script>window.location.href='signin.php'</script>";
                } else {
                    $_SESSION['username'] = $username;
                    $_SESSION['full_name'] = $row['full_name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['logged_in'] = true;
                    echo "<script>alert('Sign In Success!')</script>";
                    echo "<script>window.location.href='index.php'</script>";
                }
            } else {
                $_SESSION['error'] = "Incorrect password!";
                echo "<script>window.location.href='signin.php'</script>";
            }
        } else {
            $_SESSION['error'] = "Username not found!";
            echo "<script>window.location.href='signin.php'</script>";
        }
    }
}
