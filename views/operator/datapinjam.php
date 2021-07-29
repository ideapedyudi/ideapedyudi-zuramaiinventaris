<?php
include 'header.php';
?>
<div class="container mt-5" data-aos="zoom-in">
        <h3>Data Pinjam</h3>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <th>No</th>
                <th>Id Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $status = 'dipinjam' ?>
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_pinjam WHERE status_peminjaman='$status'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <!-- menampilkan pembelian yang masih berstatus belum bayar-->
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["id_pinjam"]; ?></td>
                    <td> <?php echo $pecah["nama_anggota"]; ?></td>
                    <td><?php echo $pecah["tanggal_peminjaman"]; ?></td>
                    <td><?php echo $pecah["keterangan"]; ?></td>
                    <td>
                        <a href="terima.php?id=<?php echo $pecah["id_pinjam"]; ?>" class="btn btn-success">Diterima</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php 
            } ?>
            </tbody>
        </table>
        <br>
        <p>
            <span class="text-danger">Menekan Tombol diterima merubah status peminjaman menjadi sudah dikembalikan</span>
        </p>
        </div>
<?php
include 'footer.php';
?>