<?php
if (empty($_SESSION["admin"]) or !isset($_SESSION["admin"])) {
    echo "<script>alert('Jangan Nakal anda bukan Admin');</script>";
    echo "<script>location='../../login/admin.php';</script>";
}
?>