<?php
include 'header.php';
if (empty($_SESSION["keranjang"]) or !isset($_SESSION["keranjang"])) {
    echo "<script>alert('keranjang kosong silahkan pinjam dahulu');</script>";
    echo "<script>location='inventaris.php';</script>";
}
?>

<div class="container">
            <h3>Keranjang</h3>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) : ?>
                    <!-- menampilkan barang yg sedang diperulangkan berdasarkan id_barang-->
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
                    $pecah = $ambil->fetch_assoc();
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_barang"]; ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>
                            <a href="hapuskeranjang.php?id=<?php echo $id_barang ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                <?php endforeach ?>

                </tbody>
            </table>
            <a href="inventaris.php" class="btn btn-primary">Lanjutkan Pinjam</a>
            <a href="peminjaman.php" class="btn btn-success">Peminjaman</a>
            </div>
        </section>

<?php
include 'footer.php';
?>