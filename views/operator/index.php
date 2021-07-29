<?php
include 'header.php';
?>
<!-- Home -->
<div class="container mt-5 text-center">
        <h4 data-aos="zoom-in">Selamat datang <span class="text-danger">
          <?php echo $_SESSION["operator"]["nama_operator"] ?></span><br>
          Anda login sebagai operator
        </h4><br>
        <div class="row mt-4" data-aos="zoom-in">
          <!-- card login admin -->
          <div class="col-lg-4 mx-auto">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-handshake fa-3x" style="color: #1cc88a;"></i></h5>
                  <a href="datapinjam.php" class="btn btn-success mt-3">Data Pinjam</a>
                </div>
              </div>
          </div>
      </div>
<?php
include 'footer.php';
?>