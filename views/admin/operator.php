<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in">
        <h3><a href="index.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a><span class="ml-3">Data Operator</span></h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Operator</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_operator"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_operator']; ?></td>
                <td><?php echo $pecah['username']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusoperator.php?id=<?php echo $pecah['id_operator']; ?>" class="btn btn-danger">Hapus</a>&nbsp;
                <a href="ubahoperator.php?id=<?php echo $pecah['id_operator']; ?>" class="btn btn-success">Ubah</a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table>
				<a href="tambahoperator.php" class="btn btn-primary">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>