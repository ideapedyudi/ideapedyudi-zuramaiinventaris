<?php
include 'header.php';
?>
<div class="container mt-5" data-aos="zoom-in">
        <h3>Transaksi</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Id Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Nama Barang</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php 
                $no = 1;
                $ambil = $koneksi->query("SELECT * FROM  tbl_pinjam JOIN tbl_pinjam_barang
               ON tbl_pinjam.id_pinjam=tbl_pinjam_barang.id_pinjam");
                ?>
              <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <!-- menampilkan pembelian yang masih berstatus belum bayar-->
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["id_pinjam"]; ?></td>
                    <td> <?php echo $pecah["nama_anggota"]; ?></td>
                    <td> <?php echo $pecah["nama_barang"]; ?></td>
                    <td><?php echo $pecah["tanggal_peminjaman"]; ?></td>
                    <td><?php echo $pecah["tanggal_pengembalian"]; ?></td>
                    <td><?php echo $pecah["status_peminjaman"]; ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php 
            } ?>
            </tbody>
        </table>
        <br>
        </div>
<?php
include 'footer.php';
?>