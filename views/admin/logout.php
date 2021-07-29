<?php
session_start();
include '../../koneksi.php';

$_SESSION['admin'] = '';
unset($_SESSION['admin']);
session_unset();
session_destroy();
echo "<script>location='../../index.php'</script>";
?>