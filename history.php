<?php
require_once 'Koneksi.php';

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    echo "<script>alert('Please sign in first!')</script>";
    echo "<script>window.location.href='signin.php'</script>";
}

if (isset($_POST['btnBuy'])) {
    header('Location: checkout.php');
}

$query = "SELECT * FROM sold WHERE s_username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<script>window.location.href='history_empty.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhala Shop</title>
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
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- nice select -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay">

    </div>
    <div class="search-popup" id="search-popup">
        <form action="" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" id="q" name="q">
                <div class="tampil">
                    <ul id="output">

                    </ul>
                </div>
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!-- nav area start -->
    <nav class="navbar navbar-area black-bg navbar-expand-lg nav-style-02">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </button>
            </div>
            <div class="logo" style="width: 100px; margin-top: 10px;">
                <a href="index.php"> <img src="assets/img/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="billatrail_main_menu">
                <ul class="navbar-nav">
                    <li class="current-menu-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="market.php">Shop</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="market.php">Shop</a>
                            </li>
                            <li>
                                <a href="cart.php">Cart</a>
                            </li>
                            <li>
                                <a href="history.php">Transaction</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="nav-right-content">
                <ul class="nav-right-menu">
                    <li class="search" id="search">
                        <i class="fa fa-search"></i>
                    </li>
                    <li>
                        <div class="humberger-wrapper d-none d-lg-block">
                            <div role="navigation" class="humberger-menu">
                                <div id="menuToggle">
                                    <input type="checkbox" />
                                    <span></span>
                                    <span class="second"></span>
                                    <span></span>

                                    <ul id="menu">
                                        <!-- <li><a href="signin.php">Sign In</a></li>
                                        <li><a href="signup.php">Sign Up</a></li> -->
                                        <?php
                                        if (isset($_SESSION['full_name'])) {
                                            echo "<img src='images/gambar_sim.svg' alt='Profile Picture'>";
                                            echo "<li>" . $_SESSION['full_name'] . "</li>";
                                            echo "<button class='btn btn-danger' style='margin-left: 10px;'><a href='log.php' style='color: white;'>Logout</a></button>";
                                        } else {
                                            echo "<li><a href='signin.php'>Sign In</a></li>";
                                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav area end -->

    <!-- history transaction-area start -->
    <div class="container text-dark" id="isiHistory">
        <h2 class="content-title mt-4">Transaction History</h2>
        <?php
            $query = "SELECT * FROM sold WHERE s_username = '{$_SESSION['username']}' ORDER BY inv_num DESC, s_IdBarang";
            $result = mysqli_query($conn, $query);
            $inv = "";
            $ctr = 0;
            while($row = mysqli_fetch_assoc($result)){
                $query2 = "SELECT * FROM barang WHERE IdBarang = {$row['s_IdBarang']}";
                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);
                $splitNama = "";
                if (strlen($row2['NamaBarang']) > 80) {
                    $splitNama = substr($row2['NamaBarang'], 0, 80) . "...";
                } else {
                    $splitNama = $row2['NamaBarang'];
                }
                $date = date_create($row['s_date']);
                $query3 = "SELECT * FROM sold WHERE inv_num = '{$row['inv_num']}'";
                $result3 = mysqli_query($conn, $query3);
                if($row['inv_num'] != $inv){
                    echo "<div class='card mt-3 pl-5 pt-3 cardHist'>";
                    echo "<div class='row g-0 mb-2'>";
                    echo "<h6 class='text-secondary'>" . date_format($date,"j M Y") . " | {$row['inv_num']}</h6>";
                    echo "</div>";
                    echo "<div class='row g-0'>";
                    echo "<div class='col-md-1'>";
                    if (strpos($row2['gambar'], '.') !== false) {
                        echo "<img src='images/{$row2['gambar']}' class='img-fluid rounded' alt='history item' style='width: 75px; height: 75px; object-fit: cover;'>";
                    } else {
                        echo "<img src='images/{$row2['gambar']}.jpg' class='img-fluid rounded' alt='history item' style='width: 75px; height: 75px; object-fit: cover;'>";
                    }
                    echo "</div>";
                    echo "<div class='col-md-9'>";
                    echo "<div class='card-body py-0 px-2'>";
                    echo "<h4 class='card-title mb-1'>$splitNama</h4>";
                    echo "<p class='card-text text-secondary mb-0' style='font-weigth: 500; font-size: 14px;'>{$row['qty']} x $" . number_format($row2['Harga']) . "</p>";
                    if (mysqli_num_rows($result3) > 1) {
                        echo "<p class='card-text text-secondary' style='font-weigth: 500; font-size: 14px;'>+" .mysqli_num_rows($result3) - 1 . " produk lainnya</p>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='col-md-2'>";
                    echo "<p class='text-dark mb-1' style='font-size: 15px;'>Total Pembelian</p>";
                    echo "<h4>$" . number_format($row['total']) ."</h4>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row g-0'>";
                    $inv_str = '"' . $row['inv_num'] . '"';
                    echo "<h6 class='col-md-2 mt-4 mb-3'><a onclick='detail($ctr, $inv_str)'>Lihat Detail Transaksi</a></h6>";
                    echo "</div>";
                    echo "</div>";
                    $ctr++;
                }
                $inv = $row['inv_num'];
            }
        ?>
        
    <!-- history transaction-area end -->

    <!-- brand-area start -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-slider">
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand1.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand2.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand3.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand4.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand5.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand1.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand2.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand3.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand4.png" alt="brand">
                        </div>
                        <div class="brant-item">
                            <img src="assets/img/about-page/brand5.png" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area end -->

    <div class="bottom-bg"></div>

    <!-- footer area start -->
    <footer class="footer-area footer-style-2">
        <div class="footer-top padding-top-40 padding-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="index.php" class="footer-logo">
                                    <img draggable="false" src="assets/img/footer-logo.png" alt="footer logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="footer-widget widget widget_nav_menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-widget widget widget_nav_menu">
                            <ul>
                                <li><a href="https://www.fb.com/kyouhobbyshop" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/Mikha_ion" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/kyouhobbyshop" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCLk6Z8FJvFQCLsTZ4ejyQew" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            ?? Berhala shop <i class="fa fa-heart"></i> by <a href="index.php" target="_blank">Bawang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- jquery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- swiper -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- wow -->
    <script src="assets/js/wow.min.js"></script>
    <!-- nice select -->
    <script src="assets/js/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="assets/js/slick-animation.js"></script>
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

    <script async>

        function detail(idx, inv) {
            dor = new XMLHttpRequest();
            dor.onreadystatechange = function() {
                if (dor.readyState == 4 && dor.status == 200) {
                    document.getElementsByClassName('cardHist')[idx].innerHTML = dor.responseText;
                    console.log(dor.responseText);
                }
            }
            dor.open("POST", "detail_history.php", true);
            dor.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            dor.send("inv_num=" + inv + "&idx=" + idx);
        }
        
        function hide(idx, inv) {
            dor = new XMLHttpRequest();
            dor.onreadystatechange = function() {
                if (dor.readyState == 4 && dor.status == 200) {
                    document.getElementsByClassName('cardHist')[idx].innerHTML = dor.responseText;
                    console.log(dor.responseText);
                }
            }
            dor.open("POST", "hide_history.php", true);
            dor.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            dor.send("inv_num=" + inv + "&idx=" + idx);
        }
    </script>
</body>

</html>