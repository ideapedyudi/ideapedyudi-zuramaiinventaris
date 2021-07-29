<?php
session_start();
include '../../koneksi.php';
?>
<?php
$koneksi->query("DELETE FROM tbl_operator WHERE id_operator='$_GET[id]'");
echo "<script>alert('Data operator terhapus');</script>";
echo "<meta http-equiv='refresh'>";
echo "<script>location='operator.php';</script>";
?>