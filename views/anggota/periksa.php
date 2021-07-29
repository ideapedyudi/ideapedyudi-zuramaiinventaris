<?php
if (empty($_SESSION["anggota"]) or !isset($_SESSION["anggota"])) {
    echo "<script>alert('Jangan Nakal anda bukan anggota');</script>";
    echo "<script>location='../../login/anggota.php';</script>";
}
?>