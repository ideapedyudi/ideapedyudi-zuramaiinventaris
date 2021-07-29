<?php 
include 'header.php';
?>
    <div class="container">
        <h3>Data Anggota yang dicari</h3> 
        <?php
        $ambil = $koneksi->query("SELECT * FROM tbl_anggota  WHERE nama_anggota LIKE '%$_GET[nama]%'");
        $pecah = $ambil->fetch_assoc();
        ?>
        <table class="table">
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
                </tr>
            </thead>
            <tbody>
                <td><?php echo $pecah['nis']; ?></td>
                <td><?php echo $pecah['nama_anggota']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td><?php echo $pecah['tempat_lahir']; ?></td>
                <td><?php echo $pecah['tgl_lahir']; ?></td>
                <td><?php echo $pecah['jk']; ?></td>
                <td><?php echo $pecah['prodi']; ?></td>
                <td><?php echo $pecah['thn_masuk']; ?></td>
            </tbody>
        </table><br>
        <a href="anggota.php" class="btn blue light">KEMBALI</a>
        </div> 
<?php 
include 'footer.php';
?>