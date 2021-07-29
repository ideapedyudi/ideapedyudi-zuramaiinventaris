<?php
include 'header.php';
?>

<div class="row mt-5">
    <div class="col-md-10 mx-auto">
        <div class="alert alert-success">
                <strong class="text-success">Zuramai Inventaris - Peminjaman Success</strong>
        </div>
    </div>
</div>

  <section class="konten">
	<div class="container">
		<h4>Detail Pinjaman</h4>
		<?php
    $ambil = $koneksi->query("SELECT * FROM  tbl_pinjam JOIN tbl_anggota
		  ON tbl_pinjam.nis=tbl_anggota.nis
		  WHERE tbl_pinjam.id_pinjam='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
    ?>
		<!--jika pelanggan yang beli berbeda dengan pelanggan yang login maka -->
		<?php
			//mendapatkan id pelanggan yang beli
    $nisanggotayangpinjam = $detail["nis"];

			//mendapatkan id pelangggan yang login
    $nisanggotayanglogin = $_SESSION["anggota"]["nis"];
    if ($nisanggotayangpinjam !== $nisanggotayanglogin) {
        echo "<script>alert('jangan nakal');</script>";
        // echo "<script>location='../../login/anggota.php';</script>";
        exit();
    }
    ?>

        <div class="row">
            <div class="col m4 s12">
                <h5>Peminjaman</h5>
                <strong>No. Peminjaman :<?php echo $detail['id_pinjam']; ?> </strong><br>
                Tanggal : <?php echo $detail['tanggal_peminjaman']; ?><br>
            </div>
            <div class="col m4 s12">
                <h5>Anggota</h5>
                <strong>NIS : <?php echo $detail['nis']; ?></strong><br>
                Nama Lengkap : <?php echo $detail['nama_anggota']; ?> <br>
            </div>
        </div>

        <table class="table table-striped table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM tbl_pinjam_barang WHERE id_pinjam='$_GET[id]'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_barang']; ?></td>
                    <td><?php echo $pecah['jumlah']; ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php 
            } ?>
            </tbody>
        </table>
	

	    </div>
        </section>

<?php
include 'footer.php';
?>