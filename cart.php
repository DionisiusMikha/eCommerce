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

$query = "SELECT * FROM cart WHERE c_username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<script>window.location.href='cart_empty.php'</script>";
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
                                            <ul class="single-item" id="isiQuantity" style="list-style:none;">
                                                <?php

                                                ?>
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
                            <div class="item-title" id="total-items">
                                <!-- <p>Total items (2)</p> -->
                            </div>
                            <div class="total">
                                <h3>Total</h3>
                                <!-- <p class="text-right">$1250.00</p> -->
                                <div class="text-right" id="text-right">
                                </div>
                            </div>
                            <div class="btn-payment btn-wrapper">
                                <form action="" method="post">
                                    <button class="btn btn-secondary btn-lg btn-block" id="btnBuy" name="btnBuy">Buy</button>
                                </form>
                            </div>
                            <div class="btn-wrapper desktop-center" id="btnBack">
                                <a href="#" class="btn btn-invoice"><i class="fa fa-long-arrow-left"></i> Back </a>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
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

    <script>
        let plus = document.getElementById('plus');
        let minus = document.getElementById('minus');

        document.addEventListener('DOMContentLoaded', function() {
            fetch_quantity();
            fetch_harga();
            jumlah();

            // let modal = document.getElementById('modalSignin');
            // modal.style.display = '';
        });

        function fetch_quantity() {
            c = new XMLHttpRequest();
            c.onreadystatechange = function() {
                if (c.readyState == 4 && c.status == 200) {
                    document.getElementById('isiQuantity').innerHTML = c.responseText;
                }
            }
            c.open("GET", "quantity.php", true);
            c.send();
        }

        function fetch_harga() {
            r = new XMLHttpRequest();
            r.onreadystatechange = function() {
                if (r.readyState == 4 && r.status == 200) {
                    document.getElementById('text-right').innerHTML = r.responseText;
                }
            }
            r.open("GET", "fetch_harga.php", true);
            r.send();
        }

        function jumlah() {
            lol = new XMLHttpRequest();
            lol.onreadystatechange = function() {
                if (lol.readyState == 4 && lol.status == 200) {
                    document.getElementById('total-items').innerHTML = lol.responseText;
                }
            }
            lol.open("GET", "jumlah.php", true);
            lol.send();
        }

        function tambahQuantity(IdCart) {
            dor = new XMLHttpRequest();
            dor.onreadystatechange = function() {
                if (dor.readyState == 4 && dor.status == 200) {
                    document.getElementsByClassName('kwan')[IdCart - 1].innerHTML = dor.responseText;
                    fetch_harga();
                    console.log(dor.responseText);
                }
            }
            dor.open("POST", "tambahQuantity.php", true);
            dor.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // alert(IdCart);
            dor.send("plus=" + IdCart);
        }

        function kurangQuantity(IdCart) {
            let quantity = parseInt(document.getElementsByClassName('kwan')[IdCart - 1].innerHTML);
            if (quantity <= 1)[
                deleteBarang(IdCart)
            ]
            else {
                dionisius = new XMLHttpRequest();
                dionisius.onreadystatechange = function() {
                    if (dionisius.readyState == 4 && dionisius.status == 200) {
                        document.getElementsByClassName('kwan')[IdCart - 1].innerHTML = dionisius.responseText;
                        fetch_harga();
                        console.log(dionisius.responseText);
                        // fetch_quantity();

                    }
                }
                dionisius.open("POST", "kurangQuantity.php", true);
                dionisius.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                dionisius.send("minus=" + IdCart);
            }

        }

        function deleteBarang(IdCart) {
            let conf = confirm("Apakah anda yakin ingin menghapus barang ini?");
            if (conf == true) {
                // let trash = document.getElementById('trash');
                wilbert = new XMLHttpRequest();
                wilbert.onreadystatechange = function() {
                    if (wilbert.readyState == 4 && wilbert.status == 200) {
                        // document.getElementByClassName('kwan')[IdCart - 1].innerHTML = wilbert.responseText;
                        fetch_harga();
                        jumlah();
                        fetch_quantity();
                    }
                }
                wilbert.open("POST", "deleteBarang.php", true);
                wilbert.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                wilbert.send("trash=" + IdCart);
            } else {
                return false;
            }
        }

        document.getElementById("btnBack").addEventListener("click", function() {
            window.history.back();
        });
    </script>

</body>

</html>