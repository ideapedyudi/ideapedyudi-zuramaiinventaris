<?php
session_start();
//mendapaykan id produk dari url
$id_barang = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_barang])) {
    $_SESSION['keranjang'][$id_barang] += 1;
} else {
    $_SESSION['keranjang'][$id_barang] = 1;
}

//kehalaman keranjang
echo "<script>alert('barang telah masuk kekeranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>