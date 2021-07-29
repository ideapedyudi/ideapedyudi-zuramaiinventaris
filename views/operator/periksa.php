<?php
if (empty($_SESSION["operator"]) or !isset($_SESSION["operator"])) {
    echo "<script>alert('Jangan Nakal anda bukan operator');</script>";
    echo "<script>location='../../login/operator.php';</script>";
}
?>