<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in">
        <h3><a href="index.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a><span class="ml-3">Data Admin</span></h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_admin"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_admin']; ?></td>
                <td><?php echo $pecah['username']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusadmin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn btn-danger">Hapus</a>&nbsp;
                <a href="ubahadmin.php?id=<?php echo $pecah['id_admin']; ?>" class="btn btn-success">Ubah</a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table>
				<a href="tambahadmin.php" class="btn btn-primary">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>