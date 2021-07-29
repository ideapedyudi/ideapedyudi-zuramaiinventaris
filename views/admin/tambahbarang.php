<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in">
        <div class="card mx-auto p-4" style="box-shadow: 3px 3px 3px #ddd">
            <div class="card-title">
                <h3><a href="barang.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Tambah Data Barang</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-grup">      
                        <label><span class="black-text">Nama Barang</span></label>
                        <input class="form-control" type="text" name="nama">
                    </div>

                    <div class="form-grup">
                        <label><span class="black-text">Jumlah Barang</span></label>
                        <input class="form-control" type="number" name="jumlah">
                    </div>


                    <div class="form-group">
                        <label for="kategoriBarang">Kategori Barang</label>
                        <select name="kategori" id="kategoriBarang" class="form-control">
                            <option value="" disable selected >Kategori Barang</option>
                            <option value="Alat Elektronik">Alat Elektronik</option>
                            <option value="Alat Sekolah">Alat Sekolah</option>
                            <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                            <option value="ATK">Alat Tulis Kantor</option>
                        </select> 
                    </div>
                    
                    <div class="form-grup">
                        <label><span class="black-text">Spesifikasi Barang</span></label>
                        <input class="form-control" type="text" name="spek">
                    </div>
                    
                    <div class="form-grup">
                        <label><span class="black-text">Tahun Beli</span></label>
                        <input class="form-control" type="text" name="tahun">
                    </div>

                    <div class="form-group">
                        <label for="kondisi">Kondisi Barang</label>
                        <select name="kondisi" id="kondisi" class="form-control">
                            <option value="" disable selected >Kondisi Barang</option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select> 
                    </div>

                    <div class="form-group">
                        <div class="btn btn-warning form-control text-left">
                            <span>Foto barang</span>
                            <input class="mt-n2" type="file" name="foto" multiple>
                        </div>
                    </div>
                    
                    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
        <?php
        if (isset($_POST['simpan'])) {

            $nama = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];

            $namabarang = $_POST['nama'];
            $jumlah = $_POST['jumlah'];
            $kategori = $_POST['kategori'];
            $spek = $_POST['spek'];
            $tahun = $_POST['tahun'];
            $kondisi = $_POST['kondisi'];

            move_uploaded_file($_FILES['foto']['tmp_name'], "../../img/foto_barang/" . $_FILES['foto']['name']);

            $sql = $koneksi->query("INSERT INTO tbl_barang(nama_barang,foto_barang,jumlah_barang,kategori,spek,tahun_beli,kondisi)VALUES('$namabarang','$nama','$jumlah','$kategori','$spek','$tahun','$kondisi')");

            echo "<script>alert('data barang disimpan');</script>";
            echo "<meta http-equiv='refresh'>";
            echo "<script>location='barang.php';</script>";
        }
        ?>
<?php 
include 'footer.php';
?>