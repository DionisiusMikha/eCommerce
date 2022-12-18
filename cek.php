<?php
include('simple_html_dom.php');
include('koneksi.php');

// $html = file_get_html('https://www.amiami.com/');
// foreach ($html->find('img') as $e) {
//     echo $e->src . '<br>';
// }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.amazon.sa/anime-figures/s?k=anime+figures&language=en');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1');
curl_setopt($ch, CURLOPT_REFERER, 'https://www.amazon.sa/anime-figures/s?k=anime+figures&language=en');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
$html = curl_exec($ch);
curl_close($ch);

$dom = new simple_html_dom();
$dom->load($html);

foreach ($dom->find('img') as $e) {
    echo $e->src . '<br>';
    echo $e->alt . '<br>';
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