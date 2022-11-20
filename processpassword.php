<?php
require_once 'Koneksi.php';

$email = mysqli_real_escape_string($conn, $_POST['emailforgot']);
$token = md5(rand());


if (isset($_POST['btnSignIn'])) {
    if ($email == "") {
        echo "<script>alert('Please enter your email!')</script>";
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $to = $email;
            $subject = "Reset Password - Kyou.com";
            $message = "Klik link dibawah ini untuk mereset password anda : DISINI NANTI ISI LINK WEBSITE YA SAYANG/resetpassword.php?email=$email&token=$token";
            $headers = "From: kyou.com";
            $sql = "UPDATE users SET token = '$token' WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if (mail($to, $subject, $message, $headers)) {
                echo "<script>alert('Please check your email to reset your password!')</script>";
            } else {
                // echo "<script>alert('Failed to send reset password link!')</script>";
                echo "<script>alert('Coming Soon!')</script>";
                echo "<script>window.location.href='signin.php'</script>";
            }
        } else {
            echo "<script>alert('Email does not exist!')</script>";
        }
    }
}
