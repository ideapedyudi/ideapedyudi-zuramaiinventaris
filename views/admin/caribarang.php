<?php 
include 'header.php';
?>
    <div class="container">
        <h3>Data Barang yang dicari</h3> 
        <?php
        $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE nama_barang LIKE '%$_GET[nama]%'");

        $pecah = $ambil->fetch_assoc();

        ?>
        <table class="table">
            <thead>
                <tr>		
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Kategori</th>
                <th>Tahun Beli</th>
                <th>Kondisi</th>
                <th>Foto</th>
                </tr>
            </thead>
            <tbody>
            <td><?php echo $pecah['nama_barang']; ?></td>
            <td><?php echo $pecah['jumlah_barang']; ?></td>
            <td><?php echo $pecah['kategori']; ?></td>
            <td><?php echo $pecah['tahun_beli']; ?></td>
            <td><?php echo $pecah['kondisi']; ?></td>
            <td>
                <img src="../../img/foto_barang/<?php echo $pecah['foto_barang']; ?>" width="50">
            </td>
            </tbody>
        </table><br>
        <a href="barang.php" class="btn blue light">KEMBALI</a>
        </div> 
<?php 
include 'footer.php';
?>