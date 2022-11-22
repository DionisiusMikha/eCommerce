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
                <input type="text" class="form-control" placeholder="Search" id="searchInput" name="searchInput">
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

    <!-- delivery-area start -->
    <div class="delivery-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="delivery-content">
                            <div class="delivery-tab">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active show">
                                        <h2 class="content-title">Cart</h2>
                                        <div class="form-group">
                                            <ul class="single-item" style="list-style:none;">
                                                <li class="single-cart-item" style="border: 0.1px solid black; background-color:rgb(245, 245, 245);">
                                                    <div class="thumb" style="margin-top: 20px; margin-left:20px;">
                                                        <img src="assets/img/product-details/sm1.png" alt="" style="width: 10%;">
                                                    </div>
                                                    <div class="content" style="margin-top: 20px; margin-left:20px;">
                                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                                        <span>$250.00</span>
                                                    </div>
                                                    <div class="content" style="margin-left:20px;">
                                                        - 0 +
                                                    </div>
                                                </li>
                                                <li class="single-cart-item" style="border: 0.1px solid black; background-color:rgb(245, 245, 245);">
                                                    <div class="thumb" style="margin-top: 20px; margin-left:20px;">
                                                        <img src="assets/img/product-details/sm1.png" alt="" style="width: 10%;">
                                                    </div>
                                                    <div class="content" style="margin-top: 20px; margin-left:20px;">
                                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                                        <span>$250.00</span>
                                                    </div>
                                                    <div class="content" style=" margin-left:20px;">
                                                        - 0 +
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="invoice">
                        <div class="invoice-top">
                            <h1>Please Check Your Order!</h1>
                            <h5>Make sure nothing is wrong</h5>
                        </div>
                        <div class="invoice-bottom">
                            <p class="item-title">Total items (2)</p>
                            <div class="total">
                                <h3>Total</h3>
                                <p class="text-right">$1250.00</p>
                            </div>
                            <div class="btn-payment btn-wrapper">
                                <a class="btn btn-secondary btn-lg btn-block" href="checkout.php">Buy</a>
                            </div>
                            <div class="btn-wrapper desktop-center">
                                <a href="cart.php" class="btn btn-invoice"><i class="fa fa-long-arrow-left"></i> Back </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- delivery-area end -->

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

</body>

</html>