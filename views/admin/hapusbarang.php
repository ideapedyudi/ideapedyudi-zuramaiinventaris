<?php 
include '../../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotobarang = $pecah['foto_barang'];
if (file_exists("../../img/foto_barang/$fotobarang")) {
    unlink("../../img/foto_barang/$fotobarang");
}
$koneksi->query("DELETE FROM tbl_barang WHERE id_barang='$_GET[id]'");
echo "<script>alert('Data barang terhapus');</script>";
echo "<meta http-equiv='refresh'>";
echo "<script>location='barang.php';</script>";
?>
    