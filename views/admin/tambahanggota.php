<?php 
include 'header.php';
?>
    <div class="container mt-5" data-aos="zoom-in"> 
        <div class="card mx-auto p-4" style="box-shadow: 3px 3px 3px #ddd">
            <div class="card-title">
                <h3><a href="anggota.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Tambah Data Anggota</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-grup">
                        <label><span class="black-text">NIS</span></label>
                        <input class="form-control" type="text" name="nis">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Nama Lengkap</span></label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Password</span></label>
                        <input class="form-control" type="text" name="password">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Tempat Lahir</span></label>
                        <input class="form-control" type="text" name="tempat">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Tanggal Lahir</span></label>
                        <input class="form-control" type="text" name="tanggal" placeholder="00-feb-0000">
                    </div>

                     <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="kelamin" class="form-control">
                            <option value="" disable selected >Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select> 
                    </div>

                    <div class="form-group">
                        <label>Program Studi/Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="" disable selected >Program Studi</option>
                            <option value="AP">Administrasi Perkantoran</option>
                            <option value="MM">Multimedia</option>
                            <option value="PM">Pemasaran</option>
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                        </select> 
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Tahun Masuk</span></label>
                        <input class="form-control" type="text" name="tahun">
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

            $ambil = $koneksi->query("SELECT * FROM tbl_anggota WHERE nis='$nis'");
            $yangcocok = $ambil->num_rows;
            //jika ada nis yang cocok maka tambah data akan gagal 
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, nis sudah terdaftar');</script>";
                echo "<script>location='tambahanggota.php'</script>";
            } else {
                //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_anggota(nis,nama_anggota,password,tempat_lahir,tgl_lahir,jk,prodi,thn_masuk)VALUES('$nis','$nama','$pas','$tempat','$tanggal','$kelamin','$jurusan','$tahun')");
                echo "<script>alert('data anggota disimpan');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='anggota.php';</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>