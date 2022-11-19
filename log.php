<?php
require_once 'Koneksi.php';
session_start();
session_destroy();
echo "<script>window.location.href='index.php'</script>";
