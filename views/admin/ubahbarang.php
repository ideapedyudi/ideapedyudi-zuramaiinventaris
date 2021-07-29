<?php 
include 'header.php';
?>  
<?php
            // ambil data barang berdasarkan id_barang
            $ambil = $koneksi->query("SELECT * FROM tbl_barang WHERE id_barang='$_GET[id]'");
            // memecahdata dari variable $ambil
            $pecah = $ambil->fetch_assoc();
?>
    <div class="container mt-5" data-aos="zoom-in">
        <div class="card mx-auto p-4" style="box-shadow: 3px 3px 3px #ddd">
            <div class="card-title">
                <h3><a href="barang.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Ubah Data Barang</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-grup">
                        <label><span class="black-text">Nama Barang</span></label>
                        <input class="form-control" type="text" name="nama" required value="<?php echo $pecah['nama_barang']; ?>">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Jumlah Barang</span></label>
                        <input class="form-control" type="number" name="jumlah" required value="<?php echo $pecah['jumlah_barang']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select name="kategori" id="" class="form-control">
                            <option value="<?php echo $pecah['kategori']; ?>" disable selected ><?php echo $pecah['kategori'] ?></option>
                            <option value="Alat Elektronik">Alat Elektronik</option>
                            <option value="Alat Sekolah">Alat Sekolah</option>
                            <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                            <option value="ATK">Alat Tulis Kantor</option>
                        </select> 
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Spesifikasi Barang</span></label>
                        <input class="form-control" type="text" name="spek" required value="<?php echo $pecah['spek']; ?>">
                    </div>                        
                    <div class="form-grup">
                        <label><span class="black-text">Tahun Beli</span></label>
                        <input class="form-control" type="text" name="tahun" required value="<?php echo $pecah['tahun_beli']; ?>">
                    </div>    

                    <div class="form-group">
                        <label><span class="black-text">Kondisi Barang</span></label>
                        <select name="kondisi" class="form-control">
                            <option value="<?php echo $pecah['kondisi']; ?>"><?php echo $pecah['kondisi'] ?></option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select> 
                    </div>

                    <div class="form-group">
                        <div class="btn btn-warning form-control text-left">
                            <span>Foto barang</span>
                            <input class="mt-n2" type="file" name="foto" id="" multiple>
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

            <?php
            if (isset($_POST['simpan'])) {
                //ambil data input
                $namafoto = $_FILES['foto']['name'];
                $lokasifoto = $_FILES['foto']['tmp_name'];

                $nama = $_POST['nama'];
                $jumlah = $_POST['jumlah'];
                $kategori = $_POST['kategori'];
                $spek = $_POST['spek'];
                $tahun = $_POST['tahun'];
                $kondisi = $_POST['kondisi'];

                // jk foto dirubah
                if (!empty($lokasifoto)) {
                    move_uploaded_file($lokasifoto, "../../img/foto_barang/$namafoto");

                    $koneksi->query("UPDATE tbl_barang SET nama_barang='$nama',
                        foto_barang='$namafoto',jumlah_barang='$jumlah',kategori='$kategori',spek='$spek',kondisi='$kondisi'
                        WHERE id_barang='$_GET[id]'");
                } else {
                    $koneksi->query("UPDATE tbl_barang SET nama_barang='$nama',
                    jumlah_barang='$jumlah',kategori='$kategori',spek='$spek',kondisi='$kondisi'
                    WHERE id_barang='$_GET[id]'");
                }
                echo "<script>alert('data barang telah dirubah');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='barang.php';</script>";
            }
            ?>

<?php 
include 'footer.php';
?>