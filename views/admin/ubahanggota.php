<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tbl_anggota WHERE nis='$_GET[nis]'");
            // memecahdata dari variable $ambil
            $pecah = $ambil->fetch_assoc();
            ?>
            <div class="card mx-auto p-4" style="box-shadow: 3px 3px 3px #ddd">
                <div class="card-title">
                    <h3><a href="anggota.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Ubah Data</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-grup">
                            <label><span class="black-text">NIS</span></label>
                            <input class="form-control" type="text" name="nis" value="<?php echo $pecah['nis']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Nama Lengkap</span></label>
                            <input class="form-control" type="text" name="nama"  value="<?php echo $pecah['nama_anggota']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Password</span></label>
                            <input class="form-control" type="text" name="password"  value="<?php echo $pecah['password']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Tempat Lahir</span></label>
                            <input class="form-control" type="text" name="tempat"  value="<?php echo $pecah['tempat_lahir']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Tanggal Lahir</span></label>
                            <input class="form-control" type="text" name="tanggal" value="<?php echo $pecah['tgl_lahir']; ?>">
                        </div>

                         <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="kelamin" class="form-control">
                                <option value="<?php echo $pecah['jk']; ?>" ><?= $pecah['jk'] ?></option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select> 
                        </div>

                        <div class="form-group">
                            <label>Program Studi/Jurusan</label>
                            <select name="jurusan" class="form-control">
                                <option value="<?php echo $pecah['prodi']; ?>"><?= $pecah['prodi'] ?></option>
                                <option value="AP">Administrasi Perkantoran</option>
                                <option value="MM">Multimedia</option>
                                <option value="PM">Pemasaran</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                            </select> 
                        </div>
                        
                        <div class="form-grup">
                            <label><span class="black-text">Tahun Masuk</span></label>
                            <input class="form-control" type="text" name="tahun" value="<?php echo $pecah['thn_masuk']; ?>">
                        </div>

                         <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary mt-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['simpan'])) {

            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $tempat = $_POST['tempat'];
            $tanggal = $_POST['tanggal'];
            $kelamin = $_POST['kelamin'];
            $jurusan = $_POST['jurusan'];
            $tahun = $_POST['tahun'];
            $pas = $_POST['password'];

            $koneksi->query("UPDATE tbl_anggota SET nis='$nis',nama_anggota='$nama',password='$pas',tempat_lahir='$tempat',tgl_lahir='$tanggal',jk='$kelamin',prodi='$jurusan' ,thn_masuk='$tahun'  WHERE nis='$_GET[nis]'");

            echo "<script>alert('data anggota disimpan');</script>";
            echo "<meta http-equiv='refresh'>";
            echo "<script>location='anggota.php';</script>";
        }
        ?>
<?php 
include 'footer.php';
?>