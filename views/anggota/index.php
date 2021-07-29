<?php
include 'header.php';
?>
<!-- pembuka bagian Home -->
<div class="container" style="margin-top: 80px">
	<div class="row">
	<div class="col-lg-6 banner-title">
		<h4 class="mt-5"><img src="../../img/logo.svg" style="width: 40px; margin-top: -4px;"> ZURAMAI INVENTORY</h4>
		<p>Aplikasi inventaris peminjaman barang, dan pengembalian barang, pinjamlah barang dan jaga dengan baik, <span class="text-danger font-weight-bold">rusak harus di ganti</span><br>
		   </p>
	</div>
	<div class="col-lg-6 banner-gambar">
		<img class="ml-4" src="../../img/banner-pinjam.svg" alt="" style="width: 430px;">
	</div>
	</div>
</div>
<hr class="garis">
<h4 class="text-center">Kritik Dan Saran</h4>
<div class="container">
	<div class="card mx-auto mt-5" style="width: 90%;">
	  <div class="card-body p-5" style="box-shadow: 3px 3px 3px #ddd">
                  <form method="post">
	                  <div class="form-group">
	                      <label for="nis">NIS</label>
	                      <input class="form-control" type="text" name="nis" id="nis" readonly value="<?= $_SESSION["anggota"]["nis"] ?>">
	                  </div>
	                  <div class="form-group">
	                    <label for="name">Nama Anggota</label>
	                    <input class="form-control" type="text" name="name" id="name" readonly value="<?= $_SESSION["anggota"]["nama_anggota"] ?>">
	                  </div>
	                  <div class="form-group">
	                      <label for="email">Email</label>
	                      <input class="form-control" type="email" name="email" id="email" class="validate">
	                  </div>
	                  <div class="form-group">
	                      <label for="message">Message</label>
	                      <textarea class="form-control"rea name="message" id="message" class="materialize-textarea"></textarea>
	                  </div>
	                  <button type="submit" name="kirim" class="btn btn-primary">SEND</button>
	              </form>
                </div>
	</div>
	  <?php
        if (isset($_POST['kirim'])) {


                //ambil data input
          $nama = $_POST['name'];
          $email = $_POST['email'];
          $nis = $_POST['nis'];
          $massage = $_POST['message'];

          $koneksi->query("INSERT INTO tbl_kritiksaran(nama_anggota,email,nis,message) VALUES ('$nama','$email','$nis','$massage')");
          echo "<script>alert('Terima Kasih telah memberi kritik dan saran');</script>";
          echo "<meta http-equiv='refresh'>";
          echo "<script>location='index.php'</script>";

        }
        ?>
	<div class="footer">
		<p class="text-center mt-5">Copyright &copy; <?php echo date("Y"); ?> By YuMal</p>
	</div>
</div>
<!-- penutup bagian home -->
<?php
include 'footer.php';
?>