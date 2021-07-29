<?php
session_start();
include '../../koneksi.php';
?>
<?php
$koneksi->query("DELETE FROM tbl_admin WHERE id_admin='$_GET[id]'");
echo "<script>alert('Data admin terhapus');</script>";
echo "<meta http-equiv='refresh'>";
echo "<script>location='admin.php';</script>";
?>