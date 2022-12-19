<?php
require_once 'Koneksi.php';
session_start();

if (!isset($_GET['q'])) {
    header("Location: index.php");
} else {
    $q = $_GET['q'];
}

if (isset($_POST['submitFilter'])) {
    $minValue = $_POST['min'];
    $maxValue = $_POST['max'];
    header("Location: search.php?q=$q&min=$minValue&max=$maxValue");
}
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Berhala Shop - Search Result</title>
        <!-- favicon -->
        <link rel=icon href=assets/img/favicon.png sizes="20x20" type="image/png">
        <!-- animate -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        <style>
            .range-slider {
                width: 300px;
                margin: auto;
                text-align: center;
                position: relative;
                height: 6em;
            }

            .range-slider svg,
            .range-slider input[type=range] {
                position: absolute;
                left: 0;
                bottom: 0;
            }

            input[type=number] {
                border: 1px solid #ddd;
                text-align: center;
                font-size: 1.6em;
                -moz-appearance: textfield;
            }

            input[type=number]::-webkit-outer-spin-button,
            input[type=number]::-webkit-inner-spin-button {
                -webkit-appearance: none;
            }

            input[type=number]:invalid,
            input[type=number]:out-of-range {
                border: 2px solid #ff6347;
            }

            input[type=range] {
                -webkit-appearance: none;
                width: 100%;
            }

            input[type=range]:focus {
                outline: none;
            }

            input[type=range]:focus::-webkit-slider-runnable-track {
                background: #2497e3;
            }

            input[type=range]:focus::-ms-fill-lower {
                background: #2497e3;
            }

            input[type=range]:focus::-ms-fill-upper {
                background: #2497e3;
            }

            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 5px;
                cursor: pointer;
                animate: 0.2s;
                background: #2497e3;
                border-radius: 1px;
                box-shadow: none;
                border: 0;
            }

            input[type=range]::-webkit-slider-thumb {
                z-index: 2;
                position: relative;
                box-shadow: 0px 0px 0px #000;
                border: 1px solid #2497e3;
                height: 18px;
                width: 18px;
                border-radius: 25px;
                background: #a1d0ff;
                cursor: pointer;
                -webkit-appearance: none;
                margin-top: -7px;
            }

            input[type=range]::-moz-range-track {
                width: 100%;
                height: 5px;
                cursor: pointer;
                animate: 0.2s;
                background: #2497e3;
                border-radius: 1px;
                box-shadow: none;
                border: 0;
            }

            input[type=range]::-moz-range-thumb {
                z-index: 2;
                position: relative;
                box-shadow: 0px 0px 0px #000;
                border: 1px solid #2497e3;
                height: 18px;
                width: 18px;
                border-radius: 25px;
                background: #a1d0ff;
                cursor: pointer;
            }

            input[type=range]::-ms-track {
                width: 100%;
                height: 5px;
                cursor: pointer;
                animate: 0.2s;
                background: transparent;
                border-color: transparent;
                color: transparent;
            }

            input[type=range]::-ms-fill-lower,
            input[type=range]::-ms-fill-upper {
                background: #2497e3;
                border-radius: 1px;
                box-shadow: none;
                border: 0;
            }

            input[type=range]::-ms-thumb {
                z-index: 2;
                position: relative;
                box-shadow: 0px 0px 0px #000;
                border: 1px solid #2497e3;
                height: 18px;
                width: 18px;
                border-radius: 25px;
                background: #a1d0ff;
                cursor: pointer;
            }
        </style>
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
                    <input type="text" class="form-control" placeholder="Search" id="q">
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
        <div class="animate__animated animate__fadeIn d-flex">
            <!-- shop-tab start -->
            <div class="filter w-25">
                <h2 class="text-center">Filter</h2>
                <div class="range-slider">
                    <form action="" method="post">
                        <span>
                            <?php
                            $queryMin = "SELECT MIN(Harga) FROM barang WHERE NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%'";
                            $resultMin = mysqli_query($conn, $queryMin);
                            $min = mysqli_fetch_assoc($resultMin);
                            $queryMax = "SELECT MAX(Harga) FROM barang WHERE NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%'";
                            $resultMax = mysqli_query($conn, $queryMax);
                            $max = mysqli_fetch_assoc($resultMax);

                            echo "<input type='number' value='" . $min['MIN(Harga)'] . "' min='0' max='" . $max['MAX(Harga)'] . "' name='min' />";
                            echo "<input type='number' value='" . $max['MAX(Harga)'] . "' min='" . $min['MIN(Harga)'] . "' max='" . $max['MAX(Harga)'] . "' name='max' />";
                            ?>
                        </span>
                        <?php
                        echo "<input value='" . $min['MIN(Harga)'] . "'  min='" . $min['MIN(Harga)'] . "' max='" . $max['MAX(Harga)'] . "' step='1' type='range' />";
                        echo "<input value='" . $max['MAX(Harga)'] . "' min='" . $min['MIN(Harga)'] . "' max='" . $max['MAX(Harga)'] . "' step='1' type='range' />";
                        ?>
                        <br> <br> <br> <br>
                        <!-- filter by brand -->
                        <h4 class="fs-3">Brand</h4>
                        <div class="fs-5 form-check form-check-inline text-dark d-flex">
                            <input class="form-check" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check" for="inlineCheckbox1">Hobby Search</label>
                        </div>
                        <div class="fs-5 form-check form-check-inline text-dark d-flex">
                            <input class="form-check" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check" for="inlineCheckbox1">Suruga-ya</label>
                        </div>
                        <div class="fs-5 form-check form-check-inline text-dark d-flex">
                            <input class="form-check" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check" for="inlineCheckbox1">Aniplex+</label>
                        </div>
                        <div class="fs-5 form-check form-check-inline text-dark d-flex">
                            <input class="form-check" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check" for="inlineCheckbox1">MelonBooks</label>
                        </div>
                        <div class="fs-5 form-check form-check-inline text-dark d-flex">
                            <input class="form-check" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check" for="inlineCheckbox1">cdJapan</label>
                        </div>

                        <button type="submit" name="submitFilter" class="btn btn-primary w-100">Submit</button>
                    </form>


                </div>
            </div>
            <div class="shop-tab w-75">
                <div class="tab-content">
                    <div class="container">
                        <div class="tab-content-area">
                            <div class="tab-one-content inactive active">
                                <?php

                                $jumlahDataPerHalaman = 16;
                                $jumlahData = "";

                                if (isset($_GET['min']) && isset($_GET['max'])) {
                                    $min = $_GET['min'];
                                    $max = $_GET['max'];
                                    $jumlahData = "SELECT COUNT(*) FROM barang WHERE Harga BETWEEN $min AND $max AND (NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%')";
                                } else {
                                    $jumlahData = "SELECT COUNT(*) FROM barang WHERE NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%'";
                                }

                                $resultData = mysqli_query($conn, $jumlahData);
                                $rowData = mysqli_fetch_assoc($resultData);
                                $jumlahData = $rowData['COUNT(*)'];
                                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                                $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                                $page = mysqli_escape_string($conn, $page);

                                if ($page > $jumlahHalaman) {
                                    $page = $jumlahHalaman;
                                    header("Location: market.php?page=$page");
                                } else if ($page < 1) {
                                    $page = 1;
                                }

                                $data = ($jumlahDataPerHalaman * $page) - $jumlahDataPerHalaman + 1;

                                $query = "";

                                if (isset($_GET['min']) && isset($_GET['max'])) {
                                    $min = $_GET['min'];
                                    $max = $_GET['max'];
                                    $query = "SELECT * FROM barang WHERE Harga BETWEEN $min AND $max AND (NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%') LIMIT $data, $jumlahDataPerHalaman";
                                } else {
                                    $query = "SELECT * FROM barang WHERE NamaBarang LIKE '%$q%' OR Deskripsi LIKE '%$q%'";
                                }

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
                                                echo "<img loading='lazy' draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . "'>";
                                                echo "</a>";
                                            } else {
                                                echo "<a href='product-details.php?id=" . $row['IdBarang'] . "'>";
                                                echo "<img draggable='false' class='shop-image' alt='shop item' src='images/" . $row['gambar'] . ".jpg'>";
                                                echo "</a>";
                                            }
                                            // echo "<span class='bottom-text'>For Men, Made in China, 2017</span>";
                                            echo "<span class='rating'>";
                                            for ($k = 0; $k < 5; $k++) {
                                                if ($k < $row['rating']) {
                                                    echo "<i class='fa fa-star'></i>";
                                                } else {
                                                    echo "<i class='fa fa-star-o'></i>";
                                                }
                                            }
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
                                        echo "<li><a href='search.php?page=$i'><span class=''>$i</span></a></li>";
                                    }
                                }
                                // if there isnt next page disable next button
                                if ($page == $jumlahHalaman) {
                                    echo "<li><span class='next page-bumber'><i class='fa fa-long-arrow-right'></i></span></li>";
                                } else {
                                    echo "<li><a href='search.php?page=" . ($page + 1) . "'><span class='next page-bumber'><i class='fa fa-long-arrow-right'></i></span></a></li>";
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shop-tab end -->

        </div>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

        <script>
            (function() {

                var parent = document.querySelector(".range-slider");
                if (!parent) return;

                var
                    rangeS = parent.querySelectorAll("input[type=range]"),
                    numberS = parent.querySelectorAll("input[type=number]");

                rangeS.forEach(function(el) {
                    el.oninput = function() {
                        var slide1 = parseFloat(rangeS[0].value),
                            slide2 = parseFloat(rangeS[1].value);

                        if (slide1 > slide2) {
                            [slide1, slide2] = [slide2, slide1];
                        }

                        numberS[0].value = slide1;
                        numberS[1].value = slide2;
                    }
                });

                numberS.forEach(function(el) {
                    el.oninput = function() {
                        var number1 = parseFloat(numberS[0].value),
                            number2 = parseFloat(numberS[1].value);

                        if (number1 > number2) {
                            var tmp = number1;
                            numberS[0].value = number2;
                            numberS[1].value = tmp;
                        }

                        rangeS[0].value = number1;
                        rangeS[1].value = number2;

                    }
                });

            })();
        </script>
    </body>

</php>