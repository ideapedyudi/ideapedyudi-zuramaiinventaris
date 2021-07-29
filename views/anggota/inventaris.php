<?php
include 'header.php';
?>
      <!-- tampil menu -->
      <div class="container">
      <h3 class="mt-5 text-center">List Barang</h3><br>
        
      <div class="row">

          <?php $ambil = $koneksi->query("SELECT * FROM tbl_barang"); ?>
					<?php while ($tampil = $ambil->fetch_assoc()) { ?>

         <div class="card ml-5 mx-auto mt-5 text-center" style="width: 18rem;">
            <img src="../../img/foto_barang/<?php echo $tampil['foto_barang']; ?>" class="card-img-top">
            <h5 class="card-title text-dark"> <?php echo $tampil['nama_barang']; ?></h5>
            <h3 style="color: #1cc88a"><?php echo $tampil['jumlah_barang']; ?></h3>
            <div class="card-body">
              <a href="info.php?id=<?php echo $tampil['id_barang']; ?>" class="btn btn-primary">Pinjam</a>
            </div>
         </div>
          <?php 
        } ?>
        </div>
      </div>
<?php
include 'footer.php';
?>