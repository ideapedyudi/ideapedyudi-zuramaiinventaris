<?php
session_start();
include '../../koneksi.php';

$_SESSION['anggota'] = '';
unset($_SESSION['anggota']);
session_unset();
session_destroy();
echo "<script>location='../../index.php'</script>";
?>