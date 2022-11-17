<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhala Shop - Payment</title>
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

    <div class="payment-area padding-bottom-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="row">
                        <div class="payment-content">
                            <div class="title">
                                <h2>Choose Your Payment options</h2>
                            </div>
                            <div class="payment-tab">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="pill" href="#home" class="active">
                                            <h2 class="tab-menu-title">Pay With Mastercard</h2>
                                            <div class="img">
                                                <img src="assets/img/payment/mastercard.png" alt="">
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
                                        <div class="all-tab-content">
                                            <h2>Pay by Mastercard</h2>
                                            <div class="card-option">
                                                <img src="assets/img/payment/card-logo.png" alt="">
                                                <div class="form-group">
                                                    <form action="#" class="form">
                                                        <div class="form-field margin-top-20">
                                                            <label for="number">Card Number</label>
                                                            <input id="number" type="number" placeholder="0000 - 0000 - 0000 - 0000" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-30 position-form">
                                                            <label for="cvc">CVC</label>
                                                            <input id="cvc" type="password" placeholder="***" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="Month">Month</label>
                                                            <input id="Month" type="text" placeholder="0 0" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="Year">Year</label>
                                                            <input id="Year" type="text" placeholder="0 0" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="n">Name</label>
                                                            <input id="n" type="text" placeholder="Name" class="input-form" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="btn-wrapper desktop-left">
                                                <a href="#invoice" onclick="invoice()" class="btn sm-btn confirm-btn">Confirm Payment</a>
                                            </div>

                                            <div class="privacy-policy">
                                                <h2>Privacy Policy</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat.<br><br> Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <div class="all-tab-content">
                                            <h2>Pay by mastercard</h2>
                                            <div class="card-option">
                                                <img src="assets/img/payment/card-logo.png" alt="">
                                                <div class="form-group">
                                                    <form action="#" class="form">
                                                        <div class="form-field margin-top-20">
                                                            <label for="number1">Card Number</label>
                                                            <input id="number1" type="number" placeholder="0000 - 0000 - 0000 - 0000" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-30 position-form">
                                                            <label for="cvc1">CVC</label>
                                                            <input id="cvc1" type="password" placeholder="***" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="Month1">Month</label>
                                                            <input id="Month1" type="text" placeholder="0 0" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="Year1">Year</label>
                                                            <input id="Year1" type="text" placeholder="0 0" class="input-form" />
                                                        </div>
                                                        <div class="form-field width-30 margin-top-20 margin-bottom-10">
                                                            <label for="n1">Name</label>
                                                            <input id="n1" type="text" placeholder="Name" class="input-form" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="btn-wrapper desktop-left">
                                                <a href="#" class="btn sm-btn confirm-btn">Confirm Payment</a>
                                            </div>

                                            <div class="privacy-policy">
                                                <h2>Privacy Policy</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat.<br><br> Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet semper augue. Maecenas gravida tortor sit amet enim venenatis tristique. Nulla vehicula porta tortor non maximus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam eu viverra augue. Donec aliquet dignissim augue, nec posuere augue pharetra sed. Pellentesque consequat ornare ornare. Aliquam erat volutpat. Nullam posuere porttitor lectus, ut efficitur nisi tincidunt posuere.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="invoice" id="invoice">
                        <div class="invoice-top">
                            <h1>Summary</h1>
                            <h2>Invoice # 428836 Summary</h2>
                            <h6>Thanks For Shopping With Us</h6>
                        </div>
                        <div class="invoice-bottom">
                            <h2 class="date">Estimated Delivery : 25 - 28 July</h2>
                            <p class="address">Delivery: Pucang Sewu, Gubeng, Kota Surabaya, Jawa Timur Jl. Ngagel Jaya Utara No.32, RT.003/RW.04</p>
                            <p class="item-title">Items (6)</p>
                            <ul class="single-item">
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="item-checkout" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="item-checkout" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="item-checkout" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="item-checkout" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                </li>
                                <li class="single-cart-item">
                                    <div class="thumb">
                                        <img src="item-checkout" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>Figure<br> <span>For Men, Made in ISTTS, 2022</span></h3>
                                        <span>$250.00</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                                <h3>Total</h3>
                                <p class="text-right">$1250.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

</body>
<script>
    function invoice() {
        alert("berhasil beli cie");
    };
</script>

</html>