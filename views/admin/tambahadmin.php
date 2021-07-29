<?php 
include 'header.php';
?>
    <div class="container mt-5">
        <div class="card mx-auto p-4" style="width: 60%;box-shadow: 3px 3px 3px #ddd;" data-aos="zoom-in">
         <div class="card-body">
            <h3><a href="admin.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Tambah Data Admin</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="form-grup">
                    <label><span class="black-text">Nama Admin</span></label>
                    <input class="form-control" type="text" name="nama" required>
                </div>
                
                <div class="form-group">
                    <label><span class="black-text">Username</span></label>
                    <input class="form-control" type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label><span class="black-text">Password</span></label>
                    <input class="form-control" type="text" name="password" required>
                </div>
                <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary btn-block mt-5">
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


            $ambil = $koneksi->query("SELECT * FROM tbl_admin WHERE username='$username'");
            $yangcocok = $ambil->num_rows;
                //memeriksa username sudah digunakan atau belum
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, username sudah digunakan silahkan pakai username yang lain');</script>";
                echo "<script>location='tambahadmin.php'</script>";
            } else {
                    //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_admin(username,password,nama_admin) VALUES ('$username','$password','$nama')");
                echo "<script>alert('selamat pendaftaran berhasil');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='admin.php'</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>