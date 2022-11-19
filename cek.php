<?php
include('simple_html_dom.php');
include('koneksi.php');

// $html = file_get_html('https://www.amiami.com/');
// foreach ($html->find('img') as $e) {
//     echo $e->src . '<br>';
// }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.global-freaks.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1');
curl_setopt($ch, CURLOPT_REFERER, 'https://www.global-freaks.com/');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
$html = curl_exec($ch);
curl_close($ch);

$dom = new simple_html_dom();
$dom->load($html);

$linkGambar = "";
$idBarang = "";
$namaBarang = "";

// foreach ($dom->find('.product-title') as $e) {
//     $namaBarang = $e->plaintext;
//     echo $namaBarang . '<br>';
// }

$DataBarang = [];

// use tampermonke
foreach ($dom->find('.card') as $element) {
    $idx = 0;
    foreach ($dom->find('.card-img-top img') as $element) {
        $linkGambar = $element->src;
        $DataBarang[$idx]['linkGambar'] = $linkGambar;
        $idx++;

        $ch = curl_init($linkGambar);
        $fp = fopen('images/' . basename($linkGambar), 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);

        $namaFile = basename($linkGambar);
        echo $namaFile . '<br>';
    }

    $idx = 0;
    foreach ($dom->find('.card-body .product-title') as $element) {
        $namaBarang = $element->plaintext;
        echo $namaBarang . '<br>';
        $DataBarang[$idx]['namaBarang'] = $namaBarang;
        $idx++;
    }

    $idx = 0;
    foreach ($dom->find('.product-price-and-shipping') as $element) {
        $hargaBarang = $element->plaintext;
        echo $hargaBarang . '<br>';
        $DataBarang[$idx]['hargaBarang'] = $hargaBarang;
        $idx++;
    }

    $query = "INSERT INTO barang (NamaBarang, harga, stok, gambar) VALUES ('$namaBarang', '$hargaBarang', '9999', '$namaFile')";
    $result = mysqli_query($conn, $query);
    echo "<script>alert('Data berhasil disimpan!');window.location.href='index.php';</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>