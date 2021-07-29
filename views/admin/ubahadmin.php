<?php 
include 'header.php';
?>
    <?php
            // ambil data admin berdasarkan id_admin
    $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE id_admin='$_GET[id]'");
            // memecahdata dari variable $ambil
    $pecah = $ambil->fetch_assoc();
    ?>
        <div class="container mt-5">
            <div class="card mx-auto p-4" style="width: 60%;box-shadow: 3px 3px 3px #ddd;" data-aos="zoom-in">
                <div class="card-title">
                    <h3><a href="admin.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Ubah Data Admin</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-grup">
                            <label><span class="black-text">Nama Lengkap</span></label>
                            <input class="form-control" type="text" name="nama" value="<?php echo $pecah['nama_admin']; ?>">
                        </div>

                        <div class="form-grup">
                            <label><span class="black-text">Username</span></label>
                            <input class="form-control" type="text" name="username" value="<?php echo $pecah['username']; ?>">
                        </div>

                        <div class="form-grup">
                            <label><span class="black-text">Password</span></label>
                            <input class="form-control" type="text" name="password" value="<?php echo $pecah['password']; ?>">
                        </div>
                        <input type="submit" name="simpan" value="UBAH" class="btn btn-primary mt-4 btn-block">
                    </form>
                </div>
            </div>
        </div>
            <?php
            if (isset($_POST['simpan'])) {
                //ambil data input
                $nama = $_POST['nama'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                // mengubah data berdasarkan id admin yang dipilih
                $koneksi->query("UPDATE tbl_admin SET nama_admin='$nama',username='$username',password='$password' WHERE id_admin='$_GET[id]'");

                echo "<script>alert('data admin telah dirubah');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='admin.php';</script>";
            }
            ?>
<?php 
include 'footer.php';
?>