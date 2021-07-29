<?php 
include 'header.php';
?>
   <div class="container mx-auto" style="width: 100%" data-aos="zoom-in">
        <h3 class="mt-5">Data Anggota</h3>
        <form class="form-inline my-2 my-lg-0" action="" method="post">
              <input class="form-control mr-sm-2" name="namabarang" type="search" placeholder="Search" aria-label="Search" style="width: 70%;">
              <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
        </form>
        <?php
        if (isset($_POST['cari'])) {
            $nama = $_POST['nama'];

            echo "<script>location='carianggota.php?nama=$nama';</script>";
        }
        ?>
        <div class="tables">
        <table class="table table-striped table-bordered mt-5">
            <thead>
                <tr>		
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Password</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- mengambil data dari tb_operator -->
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_anggota ORDER BY nama_anggota"); ?>
                <!-- memecah data tersebut -->
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $pecah['nis']; ?></td>
                <td><?php echo $pecah['nama_anggota']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td><?php echo $pecah['tempat_lahir']; ?></td>
                <td><?php echo $pecah['tgl_lahir']; ?></td>
                <td><?php echo $pecah['jk']; ?></td>
                <td><?php echo $pecah['prodi']; ?></td>
                <td><?php echo $pecah['thn_masuk']; ?></td>
                <td>
                <a onclick="return confirm('Anda yakin ingin menghapus Data ini..?')" href="hapusanggota.php?nis=<?php echo $pecah['nis']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                <a href="ubahanggota.php?nis=<?php echo $pecah['nis']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                </td>
                </tr>
            <?php 
        } ?>
            </tbody>
        </table></div><br>
				<a href="tambahanggota.php" class="btn btn-primary mt-n3">Tambah data</a>
							
        </div> 
<?php 
include 'footer.php';
?>