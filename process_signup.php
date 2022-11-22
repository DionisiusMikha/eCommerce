<?php
require_once 'Koneksi.php';

function RandomString($length)
{
    $key = "";
    $keys = array_merge(range('a', 'z'), range('A', 'Z'));
    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }
    return $key;
}

if (isset($_POST['btnSignUp'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $token = md5(rand());
    echo "<script>alert('$hashPassword');</script>";
    $full_name = RandomString(10);
    if ($username == "" || $email == "" || $password == "") {
        echo "<script>alert('Please fill all the fields!')</script>";
        echo "<script>window.location.href='signup.php'</script>";
    } else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $email) || preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
        echo "<script>alert('Please do not use special characters!')</script>";
        echo "<script>window.location.href='signup.php'</script>";
    } else {
        $query = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username already exists!')</script>";
            echo "<script>window.location.href='signup.php'</script>";
        } else {
            $query = "INSERT INTO `users`(`username`, `email`, `password`, `full_name`, `token`) VALUES ('$username', '$email', '$hashPassword', '$full_name', '$token')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Sign Up Success!')</script>";
                echo "<script>window.location.href='signin.php'</script>";
            } else {
                echo "<script>alert('Sign Up Failed!')</script>";
            }
        }
    }
}
