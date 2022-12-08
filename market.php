<?php
require_once 'Koneksi.php';
session_start();
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Berhala Shop - Market</title>
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

        <!-- search Popup -->
        <div class="body-overlay" id="body-overlay">

        </div>
        <div class="search-popup" id="search-popup">
            <form action="" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" id="searchInput">
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
                            <a href="index.php">Home</a>
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

        <!-- shop-banner start -->
        <div class="shop-banner padding-bottom-30 padding-top-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <h1>Choose the Best one That’s right for you.</h1>
                    </div>
                    <div class="col-xl-4 col-md-6 position-relative">
                        <div class="middle-left">
                            <img src="assets/img/shop/anya.png" alt="">
                        </div>
                        <div class="middle-right">
                            <img src="assets/img/shop/anya3.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 d-none d-xl-block position-relative">
                        <div class="right-part">
                            <img class="img1" src="assets/img/shop/anya2.png" alt="">
                            <img class="img2" src="assets/img/shop/anya1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-banner end -->

        <!-- shop-tab start -->
        <div class="shop-tab">
            <div class="tab-content">
                <div class="container">
                    <div class="tab-content-area">

                        <!-- Tab-one start-->
                        <div class="tab-one-content inactive active">
                            <div class="row padding-top-120">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="shop-content">
                                                <h2>Figma product is here</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue.</p>
                                                <div class="btn-wrapper">
                                                    <a href="#" class="btn sm-btn btn-style-3">See Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-6">
                                            <div class="shop-item">
                                                <?php
                                                $query = "SELECT * FROM barang WHERE IdBarang = 1";
                                                $result = mysqli_query($conn, $query);
                                                $row = mysqli_fetch_assoc($result);
                                                $splitNama = "";
                                                if (strlen($row['NamaBarang']) > 15) {
                                                    $splitNama = substr($row['NamaBarang'], 0, 15) . "...";
                                                } else {
                                                    $splitNama = $row['NamaBarang'];
                                                }

                                                $deskripsi = "";
                                                if (strlen($row['Deskripsi']) > 30) {
                                                    $deskripsi = substr($row['Deskripsi'], 0, 30) . "...";
                                                } else {
                                                    $deskripsi = $row['Deskripsi'];
                                                }
                                                echo "<h1 class='top-text'>" . $splitNama . "</h1>";
                                                echo "<ul class='cart-menu'>";
                                                echo "<li><a>$" . number_format($row['Harga']) . "</a></li>";
                                                echo "<li><a><i class='fa fa-heart'></i></a></li>";
                                                echo "<li><a href='product-details.php?id=" . $row['IdBarang'] . "'><i class='fa fa-shopping-cart'></i></a></li>";
                                                echo "</ul>";
                                                echo "<a href='product-details.php?id=" . $row['IdBarang'] . "'>";
                                                echo "<img draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . ".jpg'>";
                                                echo "</a>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-8">
                                    <div class="shop-big-thumb">
                                        <img draggable="false" src="assets/img/shop/shop-big-item.png" alt="shop">
                                    </div>
                                </div>
                            </div>
                            <?php

                            $jumlahDataPerHalaman = 16;
                            $jumlahData = "SELECT COUNT(*) FROM barang";
                            $resultData = mysqli_query($conn, $jumlahData);
                            $rowData = mysqli_fetch_assoc($resultData);
                            $jumlahData = $rowData['COUNT(*)'];
                            $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                            $page = mysqli_escape_string($conn, $page);

                            if ($page > $jumlahHalaman) {
                                $page = $jumlahHalaman;
                                header("Location: shop.php?page=$page");
                            } else if ($page < 1) {
                                $page = 1;
                            }

                            $data = ($jumlahDataPerHalaman * $page) - $jumlahDataPerHalaman + 1;

                            $query = "SELECT * from barang LIMIT $data, $jumlahDataPerHalaman";
                            $result = mysqli_query($conn, $query);
                            $jumlahRow = mysqli_num_rows($result);
                            $jumlahCol = 4;
                            $jumlahRowPerCol = ceil($jumlahRow / $jumlahCol);
                            for ($i = 0; $i < $jumlahRowPerCol; $i++) {
                                echo "<div class='row'>";
                                for ($j = 0; $j < $jumlahCol; $j++) {
                                    $row = mysqli_fetch_array($result);
                                    $namaSplit = "";
                                    if (strlen($row['NamaBarang']) > 15) {
                                        $namaSplit = substr($row['NamaBarang'], 0, 15) . "...";
                                    } else {
                                        $namaSplit = $row['NamaBarang'];
                                    }
                                    if ($row) {
                                        echo "<div class='col-xl-3 col-lg-4 col-md-6 col-12'>";
                                        echo "<div class='shop-item'>";
                                        echo "<h1 class='top-text'>" . $namaSplit . "</h1>";
                                        echo "<ul class='cart-menu'>";
                                        echo "<li style='color:#888888;'>$" . number_format($row['Harga']) . "</li>";
                                        echo "<li><a href='product-details.php?id=" . $row['IdBarang'] . "'><i class='fa fa-shopping-cart'></i></a></li>";
                                        echo "</ul>";
                                        if (strpos($row['gambar'], '.') !== false) {
                                            echo "<a href='product-details.php?id=" . $row['IdBarang'] . "'>";
                                            echo "<img draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . "'>";
                                            echo "</a>";
                                        } else {
                                            echo "<a href='product-details.php?id=" . $row['IdBarang'] . "'>";
                                            echo "<img draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . ".jpg'>";
                                            echo "</a>";
                                        }
                                        echo "<span class='bottom-text'>For Men, Made in China, 2017</span>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                }
                                echo "</div>";
                            }


                            ?>
                        </div>
                        <!-- Tab-one end -->
                    </div>
                    <div class="shop-pagination">
                        <ul>
                            <!-- <li>
                                <span class="page-bumber">1</span>
                            </li>
                            <li>
                                <span class="page-bumber">2</span>
                            </li>
                            <li>
                                <span class="page-bumber">3</span>
                            </li>
                            <li>
                                <span class="page-bumber">4</span>
                            </li>
                            <li>
                                <span class="page-bumber">5</span>
                            </li>
                            <li>
                                <span class="next page-bumber"><i class="fa fa-long-arrow-right"></i></span>
                            </li> -->

                            <!-- pagination PHP -->
                            <?php
                            for ($i = 1; $i <= $jumlahHalaman; $i++) {
                                // jika page > 5 maka tampilkan tambahan ...
                                if ($i > 5) {
                                    echo "<li><span class='page-bumber'>...</span></li>";
                                    break;
                                }
                                if ($i == $page) {
                                    echo "<li><span class=''>$i</span></li>";
                                } else {
                                    echo "<li><a href='market.php?page=$i'><span class=''>$i</span></a></li>";
                                }
                            }
                            echo "<li><a href='market.php?page=" . ($page + 1) . "'><span class='next page-bumber'><i class='fa fa-long-arrow-right'></i></span></a></li>";
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop-tab end -->

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
                                        <img src="assets/img/footer-logo.png" alt="footer logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="footer-widget widget widget_nav_menu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="market.php">Shop</a></li>
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
                                © Berhala shop <i class="fa fa-heart"></i> by <a href="index.php" target="_blank">Bawang</a>
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
        <script src="assets/js/index.js"></script>

    </body>

</php>