<?php 
include '../../koneksi.php';

$koneksi->query("DELETE FROM tbl_anggota WHERE nis='$_GET[nis]'");
echo "<script>alert('Data anggota terhapus');</script>";
echo "<meta http-equiv='refresh'>";
echo "<script>location='anggota.php';</script>";
?>
    