<?php
include 'header.php';
?>
<div class="container text-center mt-5">
        <h4> 
            Laporan Inventaris
        </h4>
        
         <div class="row mt-5">
           <div class="col-lg-4 mx-auto">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-box fa-3x" style="color: #1cc88a;"></i></h5>
                  <a href="printbarang.php" class="btn btn-success mt-3">Laporan Barang</a>
                </div>
             </div>
          </div>

           <div class="col-lg-4 mx-auto">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-users fa-3x" style="color: #4e73df;"></i></h5>
                  <a href="printanggota.php" class="btn btn-success mt-3">Laporan Anggota</a>
                </div>
              </div>
          </div>

           <div class="col-lg-4 mx-auto">
            <div class="card mobile">
                <div class="card-body text-center mx-auto" style="width: 15em;">
                  <h5 class="card-title"><i class="fas fa-handshake fa-3x" style="color: #f4cc73;"></i></h5>
                  <a href="printtransaksi.php" class="btn btn-success mt-3">Laporan Transaksi</a>
                </div>
              </div>
          </div>
      </div>
         </div>
<?php
include 'footer.php';
?>