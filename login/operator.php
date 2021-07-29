<?php
session_start();
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zuramai - Login Admin</title>
  <!-- icon title zuramai -->
  <link rel="icon" type="image/png" href="../vendor/img/logoWhite.svg">
  <!-- link framework bootstrap -->
  <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.css">
  <!-- link fontwesome icon -->
  <link rel="stylesheet" href="../vendor/fontawesome/fontawesome.css">
  <!-- link aos animasi -->
  <link rel="stylesheet" href="../vendor/aos/aos.css">
  <!-- style css native -->
  <link rel="stylesheet" href="style.css">
  <!-- style font -->
  <style>../
    @font-face {
      font-family: "Font Digital";
      src: url('../vendor/font/Montserrat-Regular.ttf');
    }
  </style>
</head>

<body>
  <div class="container" style="margin-top: 30px;">
    <a href="../index.php" class="nav-link btn btn-success mb-2" data-toggle="tooltip" data-placement="top" title="Kembali" style="width: 80px;height: 40px;border-bottom-right-radius: 15px;background-color: #1cc88a;"><i class="fas fa-arrow-left"></i></a>
    <div class="row justify-content-md-center">
      <div class="card" data-aos="zoom-in" style="width: 60rem;">
        <div class="card-body">
          <!-- ========================================= pembuka bagian banner ======================================== -->
          <div class="col-lg-6 bg-white float-left col-hidden">
            <img class="banner_login" src="../vendor/img/banner_login.svg" alt="">
          </div>
          <!-- ========================================== penutup bagian banner ======================================== -->

          <!-- ======================================== pembuka bagian form login ========================================  -->
          <div class="col-lg-6 bg-white float-right" style="margin-top: 40px;">
            <form class="mt-n4" method="post" autocomplete="off">
              <h4 class="text-center mb-4" data-toggle="tooltip" data-placement="top" title="Zuramai program inventaris peminjaman barang sekolah"> <img class="logo" src="../vendor/img/logo.svg" alt="logo error" style="margin-top: -5px"> ZURAMAI</h4>
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <input class="form-control btn btn-primary text-white" type="submit" name="login" value="Login Operator" style="border-radius: 10px;" >
            </form>
          </div>
          <!-- ======================================== penutup bagian form login ========================================  -->
        </div>
      </div>
    </div>
    <!-- ============================================= pembuka bagian footer ============================================ -->
    <div class="footer text-center mt-4" style="color: #ddd; font-size: 15px">
      <p>Copyright &copy; <?php echo date("Y"); ?> by YuMal </p>
    </div>
    <!-- ============================================= penutup bagian footer ============================================ -->
  </div>
  <!-- fungsi -->
   <?php
      if (isset($_POST['login'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
          //lakukan cek query akun pelanggan di db
        $ambil = $koneksi->query("SELECT * FROM tbl_operator
            WHERE username='$username' AND password='$password'");

          //ngitung akun yg terambil
        $akunyangcocok = $ambil->num_rows;

          //jika akun cocok maka akan login
        if ($akunyangcocok == 1) {
            //anda sudah login
            //mendapatkan akun dengan array
          $akun = $ambil->fetch_assoc();
            //simpan disession 
          $_SESSION["operator"] = $akun;
          echo "<script>alert('login berhasil');</script>";
          echo "<script>location='../views/operator/index.php';</script>";
        } else {
            //anda gagal login
          echo "<script>alert('anda gagal login, periksa akun anda');</script>";
          echo "<script>location='operator.php';</script>";
        }
      }
      ?>
</body>
<!-- link js jquery -->
<script src="../vendor/bootstrap/jquery.js"></script>
<!-- link js boostrap -->
<script src="../vendor/bootstrap/popper.js"></script>
<!-- link js popper bootstrap -->
<script src="../vendor/bootstrap/bootstrap.js"></script>
<!-- link js aos animasi -->
<script src="../vendor/aos/aos.js"></script>
<!-- link js fontawesome icon -->
<script src="../vendor/fontawesome/fontawesome.js"></script>
<!-- initialize aos -->
<script>
  AOS.init();

  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

</html>