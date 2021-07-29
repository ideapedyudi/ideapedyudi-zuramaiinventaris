<?php
session_start();
include '../../koneksi.php';

$_SESSION['operator'] = '';
unset($_SESSION['operator']);
session_unset();
session_destroy();
echo "<script>location='../../index.php'</script>";
?>