<?php
include 'header.php';
?>
<div class="container mt-5  ">
        <h3>Peminjaman Barang</h3>
        <hr>
        <table class="table table-bordered">
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
                <div class="form-group">
                <input class="form-control" type="text" readonly value="Nama Peminjam : <?php echo $_SESSION["anggota"]['nama_anggota'] ?>" class="input-field" >
                <input class="form-control" type="text" name="ket" placeholder="Keterangan =  Contoh : Mouse, jumlah barang" class="input-field" >
                </div>
            <button class="btn btn-primary" name="pinjam">Pinjam</button>
            </div><br>
        </form>
        <?php 
        if (isset($_POST["pinjam"])) {
            $nis = $_SESSION["anggota"]["nis"];
            $ket = $_POST["ket"];
            $namapel = $_SESSION["anggota"]["nama_anggota"];
            $tanggal_peminjaman = date("Y-m-d");
                
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
        <br>
<?php
include 'footer.php';
?>