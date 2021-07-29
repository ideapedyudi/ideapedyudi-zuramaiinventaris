<?php
include 'header.php';
?>
<div class="container">
        <h3>Peminjaman Barang</h3>
        <hr>
        <table class="highlight">
            <thead>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $totalorder = 0; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) : ?>
                <!-- menampilkan produk yg sedang diperulangkan berdasarkan id_produk-->
                <?php
                $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
                $pecah = $ambil->fetch_assoc();
                ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["nama_barang"]; ?></td>
                    <td><?php echo $jumlah; ?></td>
                </tr>
                <?php $nomor++; ?>
            <?php endforeach ?>
            </tbody>
        </table>
        <form method="post">
            
            <div class="row">
                <div class="col m12 s12">
                <div class="input-field">
                <label><span class="black-text">NIS Peminjam</span></label>
                    <input type="text" name="nis" placeholder="masukan nis anggota yang meminjam" class="input-field" ><br>
                </div>
                <div class="input-field">
                    <label><span class="black-text">Keterangan</span></label>
                    <input type="text" name="ket" placeholder="masukan keterangan peminjaman barang" class="input-field" >
                </div>
            </div><br>
            <button class="btn blue darken-2" name="pinjam">Pinjam</button>
        </form>
        <?php 
        if (isset($_POST["pinjam"])) {
            $nis = $_POST["nis"];
            $ket = $_POST["ket"];
            $ambilnis = $koneksi->query("SELECT * FROM tbl_anggota WHERE nis='$nis'");
            $pisah = $ambilnis->fetch_assoc();
            $tanggal_peminjaman = date("Y-m-d");
            $namapel = $pisah["nama_anggota"];
                //1. Menyimpan data ke tabel pinjam
            $koneksi->query("INSERT INTO tbl_pinjam(nis,nama_anggota,tanggal_peminjaman,status_peminjaman,keterangan)
                    VALUES ('$nis','$namapel','$tanggal_peminjaman','dipinjam',' $ket')");
                //mendapatkan id pinjam yg barusan terjadi
            $id = $koneksi->insert_id;

            foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) {

                $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$id_barang'");
                $perbarang = $ambil->fetch_assoc();


                $nama = $perbarang['nama_barang'];


                $koneksi->query("INSERT INTO tbl_pinjam_barang(id_pinjam,id_barang,nama_barang,jumlah)
                        VALUES ('$id','$id_barang','$nama','$jumlah')");

                
                //update jumlah barang
                $koneksi->query("UPDATE tbl_barang SET jumlah_barang=jumlah_barang -$jumlah WHERE id_barang='$id_barang'");   
                //mengkosongkan keranjang
                unset($_SESSION["keranjang"]);

                //tampilan dialihkan kehalaman nota, nota peminjaman barang barusan
                echo "<script>alert('peminjaman sukses');</script>";
                echo "<script>location='nota.php?id=$id';</script>";

            }
        }
        ?>
<?php
include 'footer.php';
?>