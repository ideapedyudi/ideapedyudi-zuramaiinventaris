<?php 
  include 'header.php';
?>
    <div class="container mt-4 text-center">
        <h4 data-aos="fade-right">Selamat datang <span class="text-danger">
          <?php echo $_SESSION["admin"]["nama_admin"] ?></span><br>
          Anda login sebagai admin
        </h4><br>
        <div class="row mt-4" data-aos="fade-left">
          <!-- card login admin -->
          <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-users-cog fa-3x" style="color: #4e73df;"></i></h5>
                  <a href="admin.php" class="btn btn-primary mt-3">Data Admin</a>
                </div>
              </div>
          </div>
          
          <!-- card login operator -->
           <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center">
                  <h5 class="card-title"><i class="fas fa-user-secret fa-3x" style="color: #1cc88a;"></i></h5>
                  <a href="operator.php" class="btn btn-success mt-3">Data Operator</a>
                </div>
              </div>
          </div>
          
          <!-- card login anggota -->
           <div class="col-lg-4">
            <div class="card mobile">
                <div class="card-body text-center">
                  <h5 class="card-title"><i class="fas fa-envelope fa-3x" style="color: #f4cc73;"></i></h5>
                  <a href="kritiksaran.php" class="btn btn-warning mt-3">Kritik & Saran</a>       
                </div>
              </div>
          </div>
        </div>
      </div>
<?php 
  include 'footer.php';
?>