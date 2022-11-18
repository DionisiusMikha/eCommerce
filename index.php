<!DOCTYPE php>
<php lang="en">

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

        <!-- search Popup -->
        <div class="body-overlay" id="body-overlay">

        </div>
        <div class="search-popup" id="search-popup">
            <form action="" class="search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="tampil">
                        <ul id="output">
                        </ul>
                    </div>
                </div>
                <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- //. search Popup -->

        <!-- navbar start -->
        <div class="billa-navbar">
            <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
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
                                        <a>
                                            Payment
                                        </a>
                                        <!-- <a href="shopping-detail.php">Shopping Cart</a> -->
                                    </li>
                                    <li>
                                        <a>
                                            Payment
                                        </a>
                                        <!-- <a href="payment.php">Payment</a> -->
                                    </li>
                                    <li>
                                        <a>
                                            Checkout
                                        </a>
                                        <!-- <a href="checkout.php">Checkout</a> -->
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
        </div>
        <!-- navbar end -->

        <!-- banner start -->
        <div class="banner-area home-banner1">
            <div class="banner-slider banner-slider1">
                <div class="banner-bg" style="background-image:url(assets/img/bg/1.png);">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">Chainsaw Man follows the story of Denji, <br>an impoverished young man who makes a contract that <br> fuses his body with that of a dog-like devil named Pochita</p>
                                    <h1 class="title1" data-animation-in="fadeInDown">Chainsaw</h1>
                                    <h1 class="title2" data-animation-in="fadeInUp">Man</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-bg" style="background-image:url(assets/img/bg/2.png);">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">Genshin Impact is an<br> open-world action role-playing game</p>
                                    <h1 class="title1" data-animation-in="fadeInDown">Genshin</h1>
                                    <h1 class="title2" data-animation-in="fadeInUp">Impact</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-bg" style="background-image:url(assets/img/bg/3.png);">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">The story follows Light Yagami, a teen genius<br> who discovers a mysterious notebook: the "Death Note"</p>
                                    <h1 class="title1" data-animation-in="fadeInDown">Death</h1>
                                    <h1 class="title2" data-animation-in="fadeInUp">Note</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-bg" style="background-image:url(assets/img/bg/4.png);">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">New Arrival item<br> We always update every one month</p>
                                    <h1 class="title1" data-animation-in="fadeInDown">New</h1>
                                    <h1 class="title2" data-animation-in="fadeInUp">Arrival</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-bg" style="background-image:url(assets/img/bg/5.png);">
                    <div class="container">
                        <div class="row h-100vh">
                            <div class="col-xl-10 col-lg-10 offset-lg-2 offset-xl-1 col-md-8 offset-md-2">
                                <div class="banner-inner">
                                    <p data-animation-in="fadeInLeft">The game is set in the dystopian,<br> post-apocalyptic future setting of the planet Terra</p>
                                    <h1 class="title1" data-animation-in="fadeInDown">Arknight</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- social icon -->
            <ul class="social-icon">
                <li class="icon-list">
                    <a href="#" class="icon-text">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="icon-list">
                    <a href="#" target="_blank" class="icon-text">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </li>
                <li class="icon-list">
                    <a href="#" class="icon-text">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="icon-list">
                    <a href="#" class="icon-text">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>
            </ul>

            <!-- scroll down -->
            <div class="scroll">
                <a href="#about-area">
                    <div class="scroll-btn"><span class="inside-bg"></span></div>
                </a>
                <span>Scroll to explore</span>
            </div>

            <div class="banner-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-5 d-none d-lg-block">
                            <div class="controler-wrapper">
                                <div class="active-controler">01</div>
                                <div class="progressbar">
                                    <span class="home-slider-progress"></span>
                                    <span class="home-slider-progress-active"></span>
                                </div>
                                <div class="total-controler">05</div>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-lg-1 col-lg-4 col-md-6 offset-md-2 col-sm-6 offset-sm-2 col-10 offset-1">
                            <div class="banner-sm-slider d-flex">
                                <div class="slider-image1"><img src="assets/img/bg/sm1.jpg" alt=""></div>
                                <div class="slider-image2"><img src="assets/img/bg/sm2.jpg" alt=""></div>
                                <div class="slider-image3"><img src="assets/img/bg/sm3.jpg" alt=""></div>
                                <div class="slider-image4"><img src="assets/img/bg/sm4.jpg" alt=""></div>
                                <div class="slider-image4"><img src="assets/img/bg/sm5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- shopping start -->
        <div class="shopping-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shopping-text">
                            <h1>Let's <span>Go</span> Shopping</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-masonry-wrapper">
                            <ul class="portfolio-menu">
                                <li class="active" data-filter="*">Top Trends</li>
                                <li data-filter=".new">New Arrival</li>
                                <li data-filter=".best">Best Seller</li>
                            </ul>
                            <div class="portfolio-masonry grid">
                                <div class="masonry-item new grid-item width-25">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>

                                <div class="masonry-item best grid-item width-50">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample2.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>

                                <div class="masonry-item new best grid-item width-25">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>

                                <div class="masonry-item best grid-item width-25">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>

                                <div class="masonry-item new grid-item width-25">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>

                                <div class="masonry-item new grid-item width-50">
                                    <h1 class="top-text">FIGURE <span>Best Figure Ever</span></h1>
                                    <ul class="cart-menu">
                                        <li><a href="#">$120</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <img class="masonry-image" alt="masonry" src="assets/img/bg/sample3.png">
                                    <span class="bottom-text">For Men, Made in ISTTS, 2022</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper desktop-center margin-top-40">
                            <a href="market.php" class="btn sm-btn btn-style-2">Load More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shopping end -->

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
        <!-- swiper -->
        <script src="assets/js/swiper.min.js"></script>
        <!-- waypoint -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- validate -->
        <script src="assets/js/jquery.validate.min.js"></script>
        <!-- counterup -->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!-- imageloaded -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- isotope -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- rProgressbar -->
        <script src="assets/js/jQuery.rProgressbar.min.js"></script>
        <!-- contact form -->
        <script src="assets/js/contact.js"></script>
        <!-- main js -->
        <script src="assets/js/script.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

</php>
