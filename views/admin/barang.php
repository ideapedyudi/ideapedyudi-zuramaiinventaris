<?php 
include 'header.php';
?>
    <div class="container" style="width: 80%; margin-left: 12%;" data-aos="zoom-in">
        <h3 class="mt-5">Data Barang</h3> 
        <form class="form-inline my-2 my-lg-0" action="" method="post">
          <input class="form-control mr-sm-2" name="namabarang" type="search" placeholder="Search" aria-label="Search" style="width: 70%;">
          <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
        </form>
        <?php
        if (isset($_POST['cari'])) {
            $nama = $_POST['namabarang'];

            echo "<script>location='caribarang.php?nama=$nama';</script>";
        }
        ?>
        <div class="tables">
        <table class="table table-striped table-bordered mt-5">
            <thead>
                <tr>		
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Kategori</th>
                <th>Tahun Beli</th>
                <th>Kondisi</th>
                <th>Foto</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <!-- mengambil data dari tb_barang -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_barang ORDER BY nama_barang"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_barang']; ?></td>
                <td><?php echo $pecah['jumlah_barang']; ?></td>
                <td><?php echo $pecah['kategori']; ?></td>
                <td><?php echo $pecah['tahun_beli']; ?></td>
                <td><?php echo $pecah['kondisi']; ?></td>
                <td>
                <img src="../../img/foto_barang/<?php echo $pecah['foto_barang']; ?>" width="50">
                </td>
                <th>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusbarang.php?id=<?php echo $pecah['id_barang']; ?>" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>
                <a href="ubahbarang.php?id=<?php echo $pecah['id_barang']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                </td>
                </tr>
            <?php $nomor++; ?>
            <?php 
        } ?>
            </tbody>
        </table>
    </div><br>
				<a href="tambahbarang.php" class="btn btn-primary mt-n3">Tambah Data</a>
        </div> 
<?php 
include 'footer.php';
?>