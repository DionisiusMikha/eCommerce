<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Kyou.id</title>
    <!-- favicon -->
    <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <!-- swiper -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <div class="signinup-area" style="border-bottom: 0;">
        <div class="content col-lg-6 col-md-6">
            <div class="login-panel">
                <div class="panel-heading">
                    <a href="index.php"><img src="assets/img/logo.png" alt="logo" style="width: 100px;"></a>
                </div>
                <div class="panel-body">
                    <form action="process_signin.php" method="POST">
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">

                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            <?php
                            if (isset($_SESSION['error'])) {
                                echo "<p style='color: red;'>" . $_SESSION['error'] . "</p>";
                                unset($_SESSION['error']);
                            }
                            ?>
                        </div>
                        <div class="action">
                            <div class="action-left">
                                <a href="forgot-password.php" class="text-dark">Forgot Password?</a>
                            </div>
                            <div class="btn-wrapper desktop-right">
                                <!-- <a href="#" class="btn sm-btn">Sign in</a> -->
                                <button name="btnSignIn" class="btn sm-btn">Sign in</button>
                            </div>
                        </div>
                        <p class="bottom">Don't Have An Account Please <a class="signup" href="signup.php">Sign up </a> Now</p>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- jquery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="assets/js/slick-animation.js"></script>
    <!-- swiper -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- nice select -->
    <script src="assets/js/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- rProgressbar -->
    <script src="assets/js/jQuery.rProgressbar.min.js"></script>
    <!-- main js -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        function openPop(text) {
            alert("MASUK");
            document.getElementById("popup").style.display = "initial";
            document.getElementById("bg-pop").style.display = "initial";
            document.getElementsById("tulisanSenyum").innerHTML = "";
        }

        function closePop() {
            document.getElementById("popup").style.display = "none";
            document.getElementById("bg-pop").style.display = "none";
        }
    </script>

</body>

</html>