<?php
include '../../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM  tbl_pinjam JOIN tbl_pinjam_barang
		  ON tbl_pinjam.id_pinjam=tbl_pinjam_barang.id_pinjam
		  WHERE tbl_pinjam.id_pinjam='$_GET[id]'");
$detail = $ambil->fetch_assoc();

$id_pinjam = $_GET["id"];
$status = 'dikembalikan';
$tanggalpengembalian = date("Y-m-d");
$jumlah = $detail["jumlah"];
$id_barang = $detail["id_barang"];

$koneksi->query("UPDATE tbl_pinjam SET tanggal_pengembalian='$tanggalpengembalian', status_peminjaman='$status' WHERE id_pinjam='$id_pinjam'");

$sql = $koneksi->query("UPDATE tbl_barang SET jumlah_barang=jumlah_barang+$jumlah WHERE id_barang='$id_barang'");
echo "<script>location='datapinjam.php';</script>";
?>