<?php
require_once 'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhala Shop - Detail</title>
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
                <input type="text" class="form-control" placeholder="Search">
                <div class="tampil">
                    <ul>
                        <li>
                            <img src="assets/img/bg/sm1.jpg" alt="">
                            <div class="judul">
                                <h4>halo gais</h4>
                                <p>ini deksripsi</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/bg/sm1.jpg" alt="">
                            <div class="judul">
                                <h4>halo gais</h4>
                                <p>ini deksripsi</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/bg/sm1.jpg" alt="">
                            <div class="judul">
                                <h4>halo gais</h4>
                                <p>ini deksripsi</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/bg/sm1.jpg" alt="">
                            <div class="judul">
                                <h4>halo gais</h4>
                                <p>ini deksripsi</p>
                            </div>
                        </li>
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
                                <a href="product-details.php">Product Details</a>
                            </li>
                            <li>
                                <a href="payment.php">Payment</a>
                            </li>
                            <li>
                                <a href="checkout.php">Checkout</a>
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
                                        <li><a href="signin.php">Sign In</a></li>
                                        <li><a href="signup.php">Sign Up</a></li>
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

    <!-- product-details-tab start -->
    <div class="product-details-tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="slider-tabfor">
                        <?php
                        $IdBarang = $_GET['id'];
                        $query = "SELECT * FROM barang WHERE IdBarang = '$IdBarang'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);

                        for ($i = 0; $i < 3; $i++) {
                            echo "<div class='single-item'>";
                            echo "<img draggable='false' alt='Barang' src='images/" . $row['gambar'] . ".jpg'>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <div class="slider-tabnav">
                        <?php
                        $IdBarang = $_GET['id'];
                        $query = "SELECT * FROM barang WHERE IdBarang = '$IdBarang'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        for ($i = 0; $i < 5; $i++) {
                            echo "<div class='single-item'>";
                            echo "<div class='img'>";
                            echo "<img draggable='false' alt='Barang' src='images/" . $row['gambar'] . ".jpg'>";
                            echo "</div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-part">
                        <!-- <h1>Figure <span>For Men, Made in ISTTS, 2022</span></h1>
                        <span class="specifications">Brand: Lumos</span>
                        <span class="specifications">SKU: RPL02075 </span>
                        <span class="specifications">Seller: RPL Distribution</span><br>
                        <span class="point">4.5</span><span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span>
                        <p class="price">Price : $250.00 <span>$350.00</span> </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet
                            semper augue.</p>
                        <div class="margin-top-30 margin-bottom-30 btn-wrapper desktop-left">
                            
                            <a href="#" class="btn sm-btn black-btn">Add to favourite <i class="fa fa-heart"></i></a>
                        </div> -->
                        <?php
                        $IdBarang = $_GET['id'];
                        $query = "SELECT * FROM barang WHERE IdBarang = '$IdBarang'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        echo "<h1>" . $row['NamaBarang'] . "</h1>";
                        echo "<span class='specifications'>Brand: " . $row['brand'] . "</span>";
                        echo "<span class='specifications'>SKU: " . $row['IdBarang'] . "</span>";
                        echo "<span class='specifications'>Seller: " . $row['seller'] . "</span><br>";
                        $rating = $row['rating'];
                        echo "<span class='point'>" . $rating . "</span><span class='rating'>";
                        for ($i = 0; $i < $rating; $i++) {
                            if ($rating - $i == 0.5) {
                                echo "<i class='fa fa-star-half-o'></i>";
                            } else {
                                echo "<i class='fa fa-star'></i>";
                            }
                        }
                        echo "</span>";
                        echo "<p class='price'>Price : $" . number_format($row['Harga']) . "</p>";
                        echo "<p class='description'>" . $row['Deskripsi'] . "</p";
                        echo "<div class='margin-top-30 margin-bottom-30 btn-wrapper desktop-left'>";
                        echo "<button class='btn sm-btn' value='" . $row['IdBarang'] . "' style='color:#fff' id='addToCart'>Add to cart</button>";
                        echo "</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details-tab end -->

    <!-- brand start -->
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
    <!-- brand end -->

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

    <!-- Modal -->
    <div class="modal fade" id="cart-modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="invoice">
                        <div class="invoice-top">
                            <h1>Shopping Cart</h1>
                            <button type="button" class="close" data-dismiss="modal">Close - </button>
                        </div>
                        <div class="invoice-bottom outputCart">
                            <!-- <h3 class="item-title">Items (6)</h3>
                            <ul class="single-item">
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="checkout-item-kosongan" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                    <span class="close">x</span>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="checkout-item-kosongan" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                    <span class="close">x</span>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="checkout-item-kosongan" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                    <span class="close">x</span>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="checkout-item-kosongan" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                    <span class="close">x</span>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="checkout-item-kosongan" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                    <span class="close">x</span>
                                </li>
                            </ul> -->
                            <!-- <div class="total">
                                <h3>Subtotal</h3>
                                <p class="text-right">$1250.00</p>
                            </div> -->
                            <!-- <div class="btn-checkout btn-wrapper">
                                <a class="btn btn-secondary btn-lg btn-block" href="payment.php">Checkout process</a>
                            </div> -->
                            <!-- <div class="btn-wrapper desktop-center">
                                <a href="#" class="btn btn-invoice" data-dismiss="modal">Continue Shopping <i class="fa fa-long-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="assets/js/product-details.js"></script>

    <script>
        $(window).load(function() {
            $('#cart-modal').modal('show');
        });

        function modal() {
            $(window).load(function() {
                $('#cart-modal').modal('show');
            });
        }
    </script>

</body>

</html>