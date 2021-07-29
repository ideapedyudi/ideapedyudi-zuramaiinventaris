<?php
  session_start();
  include '../../koneksi.php';
  include 'periksa.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zuramai Inventori - admin</title>
  <!-- icon title zuramai -->
  <link rel="icon" type="image/png" href="../../img/logoWhite.svg">
  <link rel="stylesheet" href="../../vendor/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../vendor/fontawesome/fontawesome.css">
  <link rel="stylesheet" href="../../vendor/aos/aos.css">
  <link rel="stylesheet" href="../../cssnative/views.css">
</head>
<body>
  <?php 
    include 'menu.php';
  ?>