<?php
require_once 'Koneksi.php';
session_start();
require_once dirname(__FILE__) . '/Midtrans.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-GWAW904tRTnZhyvlAS8BmM-H';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$order_id = rand();
$params = array(
    'transaction_details' => array(
        'order_id' => $order_id,
        'gross_amount' => rand(),
    ),
    'customer_details' => array(
        'first_name' => 'Dionisius Mikha',
        'email' => 'tolongdigantinanti@gmail.com',
        'phone' => '081',
    ),
);

$snapToken = \Midtrans\Snap::getSnapToken($params);
echo "
        <script>
            var token = '" . $snapToken . "';
        </script>
    ";


$sudahPencet = false;
if (isset($_POST['continue'])) {
    $sudahPencet = true;
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
    <!-- delivery-area start -->
    <div class="delivery-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="delivery-content">
                            <div class="delivery-tab">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
                                        <h2 class="content-title">Enter delivery address</h2>
                                        <div class="form-group">
                                            <form action="#" class="form">
                                                <div class="form-field margin-top-30 margin-bottom-30">
                                                    <label for="name">Full Name</label>
                                                    <input id="name" type="text" placeholder="Mr Blablabla" class="input-form" />
                                                </div>
                                                <div class="form-field margin-top-30 margin-bottom-30">
                                                    <label for="phn">Phone Number</label>
                                                    <input id="phn" type="number" placeholder="+62 81230098392 " class="input-form" />
                                                </div>
                                                <div class="form-field margin-top-30 margin-bottom-30">
                                                    <label for="phn1">Alternative phone number (Optional)</label>
                                                    <input id="phn1" type="number" placeholder="+62 81230098392" class="input-form" />
                                                </div>
                                                <div class="form-field margin-top-30">
                                                    <label>City</label>
                                                    <input id="city" type="text" placeholder="Surabaya" class="input-form" />
                                                </div>
                                                <div class="form-field margin-top-30 margin-bottom-30">
                                                    <label for="address">Address</label>
                                                    <textarea id="address" cols="30" rows="5" placeholder="Pucang Sewu, Gubeng, Kota Surabaya, Jawa Timur Jl. Ngagel Jaya Utara No.32, RT.003/RW.04"></textarea>
                                                </div>
                                                <div class="form-field margin-top-30 margin-bottom-30">
                                                    <label for="instruction">Delivery Instructions (Optional)</label>
                                                    <textarea id="instruction" cols="30" rows="5" placeholder="in front of ex girl friend house"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="invoice">
                        <?php
                        if ($sudahPencet == true) {
                            $tanggalEstimasiAwal = date("d F");
                            if (date("Y") != date("Y", strtotime("+1 day"))) {
                                $tanggalEstimasiAwal .= " " . date("Y");
                            }
                            $tanggalEstimasiAkhir = date("d F", strtotime("+3 day"));
                            if (date("Y") != date("Y", strtotime("+3 day"))) {
                                $tanggalEstimasiAkhir .= " " . date("Y", strtotime("+3 day"));
                            }
                            if (date("Y") == date("Y", strtotime("+3 day"))) {
                                $tanggalEstimasiAkhir = date("d", strtotime("+3 day")) . " " . date("F", strtotime("+3 day")) . " " . date("Y", strtotime("+3 day"));
                            }

                            $invoice = "";
                            // INVOICE 
                            echo "<div class='invoice-top'>";
                            echo "<h1>Invoice #" . $invoice . "</h1>";
                            echo "<h5>Estimated Delivery : " . $tanggalEstimasiAwal . " - " . $tanggalEstimasiAkhir . " </h5>";
                        }
                        ?>
                        <!-- <div class="invoice-top">
                            <h1>Invoice # 428836 Summary</h1>
                            <h5>Estimated Delivery : 25 - 28 July</h5>
                        </div> -->
                        <div class="invoice-bottom">
                            <!-- <p class="item-title">Items (6)</p> -->
                            <div class="item-title" id="outputItemTitle">

                            </div>
                            <ul class="single-item">
                                <!-- <li class="single-cart-item">
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
                                </li> -->
                                <?php
                                $query = "SELECT * FROM cart, barang WHERE cart.c_IdBarang = barang.IdBarang AND cart.c_username = '$_SESSION[username]'";
                                $result = mysqli_query($conn, $query);
                                $total = 0;
                                foreach ($result as $row) {
                                    $deskripsiSplit = "";
                                    if (strlen($row["Deskripsi"]) > 35) {
                                        $deskripsiSplit = substr($row["Deskripsi"], 0, 35) . "...";
                                    } else {
                                        $deskripsiSplit = $row["Deskripsi"];
                                    }
                                    echo "<li class='single-cart-item'>";
                                    echo "<div class='thumb'>";
                                    echo "<img src='images/" . $row['gambar'] . ".jpg' alt='" . $row['NamaBarang'] . "'>";
                                    echo "</div>";
                                    echo "<div class='content'>";
                                    echo "<h3>" . $row['NamaBarang'] . "<br> <span>" . $deskripsiSplit . "</span></h3>";
                                    echo "<span>$" . $row['Harga'] . "</span>";
                                    echo "</div>";
                                    echo "</li>";
                                    $total += $row['Harga'];
                                }
                                ?>
                            </ul>
                            <div class="total">
                                <h3>Total</h3>
                                <p class="text-right">$<?= number_format($total) ?></p>
                            </div>
                            <div class="btn-payment btn-wrapper">
                                <button class="btn btn-secondary btn-lg btn-block" name="continue" id="continue">Continue to payment</button>
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

    <!-- script midtrans -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
    <script>
        document.getElementById('continue').onclick = function() {
            // SnapToken acquired from previous step
            let name = document.getElementById('name').value;
            let phone = document.getElementById('phn').value;
            let city = document.getElementById('city').value;
            let address = document.getElementById('address').value;

            if (name == '' || phone == '' || city == '' || address == '') {
                alert('Please fill all the fields');
            } else {
                snap.pay(token, {
                    // Optional
                    onSuccess: function(result) {
                        alert('Berhasil Bayar!');
                        window.location.href = "payment.php";
                    },
                    // Optional
                    onPending: function(result) {
                        alert('Menunggu Pembayaran!');
                        /* You may add your own js here, this is just example */
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onError: function(result) {
                        alert('Pembayaran Gagal yang benar kamu!');
                        /* You may add your own js here, this is just example */
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    }
                });
            }
        };

        function jumlah() {
            lol = new XMLHttpRequest();
            lol.onreadystatechange = function() {
                if (lol.readyState == 4 && lol.status == 200) {
                    document.getElementById('outputItemTitle').innerHTML = lol.responseText;
                }
            }
            lol.open("GET", "jumlah2.php", true);
            lol.send();
        }

        document.addEventListener("DOMContentLoaded", function() {
            jumlah();
        });
    </script>

</body>

</html>