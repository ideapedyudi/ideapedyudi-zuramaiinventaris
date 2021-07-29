<?php
include 'header.php';
?>
<div class="container">
            <br><br>
        <h4>Riwayat Pinjaman <?php echo $_SESSION["anggota"]["nama_anggota"]; ?></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Status Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php 
                $nis = $_SESSION["anggota"]["nis"];
                $ambil = $koneksi->query("SELECT * FROM tbl_pinjam WHERE nis='$nis'");
                ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["tanggal_peminjaman"]; ?></td>
                    <td><?php echo $pecah["status_peminjaman"]; ?></td>
                    <td><?php echo $pecah["tanggal_pengembalian"]; ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php 
            } ?>
            </tbody>
        </table>
        </div>
<?php
include 'footer.php';
?>