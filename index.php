<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zuramai - Pilih Login</title>
  <!-- icon title zuramai -->
  <link rel="icon" type="image/png" href="img/logoWhite.svg">
  <link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="vendor/fontawesome/fontawesome.css">
  <link rel="stylesheet" href="vendor/aos/aos.css">
  <link rel="stylesheet" href="cssnative/logins.css">
  <style>
    @font-face {
      font-family: "Montserrat-Regular";
      src: url('vendor/font/Montserrat-Light.ttf');
    }
    @media (max-width: 980px) {
      .mobile {
        width: 100% !important;
        margin-top: 25px !important;
      }
    }
  </style>
</head>
<body>
  <!-- fungsi redirect -->
  <?php
  function admin()
  {
    echo "<script>alert('anda memilih admin');</script>";
    echo "<script>location='login/admin.php';</script>";
  }
  function operator()
  {
    echo "<script>alert('anda memilih operator');</script>";
    echo "<script>location='login/operator.php';</script>";
  }
  function anggota()
  {
    echo "<script>alert('anda memilih anggota');</script>";
    echo "<script>location='login/anggota.php';</script>";
  }
  ?>

  <!-- navbar Image and text -->
  <nav class="navbar navbar-light bg-primary fixed-top">
    <a class="navbar-brand mx-auto text-white" href="index.php">
      <img src="img/logoWhite.svg" width="33" class="d-inline-block align-top logo" alt="">
      ZURAMAI INVENTORY
    </a>
  </nav>

  <div class="card border-0">
    <form action="" method="post" class="form-group mx-auto">
      <div class="card-body mx-auto" style="margin-top: 150px;" data-aos="zoom-in">
        <div class="row">
          <!-- card login admin -->
          <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-users-cog fa-3x" style="color: #4e73df;"></i></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Admin</h6>
                  <p class="card-text">Login Sebagai Admin</p>
                  <button type="submit" class="btn btn-primary" name="admin" value="admin">Login</button>
                </div>
              </div>
          </div>
          
          <!-- card login operator -->
           <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center">
                  <h5 class="card-title"><i class="fas fa-user-secret fa-3x" style="color: #1cc88a;"></i></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Operator</h6>
                  <p class="card-text">Login Sebagai Operator</p>
                  <button type="submit" class="btn btn-success" name="operator" value="operator">Login</button>
                </div>
              </div>
          </div>
          
          <!-- card login anggota -->
           <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center">
                  <h5 class="card-title"><i class="fas fa-users fa-3x" style="color: #f4cc73;"></i></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Anggota</h6>
                  <p class="card-text">Login Sebagai Anggota</p>
                  <button type="submit" class="btn btn-warning" name="anggota" value="anggota">Login</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </form>
     <div class="footer mx-auto">
      <p class="text-dark" style="margin-top: 130px;">Copyright &copy; <?php echo date("Y"); ?> by YuMal </p>
    </div>
  </div>
    
    <!-- pemilihan redirect -->
    <?php
    if (isset($_POST['admin'])) {
      admin();
    } elseif (isset($_POST['operator'])) {
      operator();
    } elseif (isset($_POST['anggota'])) {
      anggota();
    }
    ?>


</body>
<script src="vendor/bootstrap/jquery.js"></script>
<script src="vendor/bootstrap/bootstrap.js"></script>
<script src="vendor/bootstrap/popper.js"></script>
<script src="vendor/fontawesome/fontawesome.js"></script>
<script src="vendor/aos/aos.js"></script>
<script>
  AOS.init();
</script>
</html>