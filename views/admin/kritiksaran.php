<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in">
        <h3><a href="index.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a><span class="ml-3">Kritik Dan Saran</span></h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>		
                <th>No</th>
                <th>NIS</th>
                <th>Nama Anggota</th>
                <th>Email</th>
                <th>Kritik&Saran</th>     
              </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_barang -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_kritiksaran"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nis']; ?></td>
                <td><?php echo $pecah['nama_anggota']; ?></td>
                <td><?php echo $pecah['email']; ?></td>
                <td><?php echo $pecah['message']; ?></td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table><br>
        </div> 
<?php 
include 'footer.php';
?>