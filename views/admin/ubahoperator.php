<?php 
include 'header.php';
?>
    <?php
            // ambil data admin berdasarkan id_admin
    $ambil = $koneksi->query("SELECT * FROM tbl_operator WHERE id_operator='$_GET[id]'");
            // memecahdata dari variable $ambil
    $pecah = $ambil->fetch_assoc();
    ?>  
        <div class="container mt-5">
            <div class="card mx-auto p-4" style="width: 60%;box-shadow: 3px 3px 3px #ddd;" data-aos="zoom-in">
                <div class="card-title">
                    <h3><a href="operator.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Ubah Data Operator</h3>
                </div>
                <div class="card-body">    
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-grup">
                            <label><span class="black-text">Nama Lengkap</span></label>
                            <input class="form-control" type="text" name="nama" value="<?php echo $pecah['nama_operator']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Username</span></label>
                            <input class="form-control" type="text" name="username" value="<?php echo $pecah['username']; ?>">
                        </div>
                        <div class="form-grup">
                            <label><span class="black-text">Password</span></label>
                            <input class="form-control" type="text" name="password" value="<?php echo $pecah['password']; ?>">
                        </div>

                        <input type="submit" name="simpan" value="UBAH" class="btn btn-primary btn-block mt-4">
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

                // mengubah data berdasarkan id operator yang dipilih
                $koneksi->query("UPDATE tbl_operator SET nama_operator='$nama',username='$username',password='$password' WHERE id_operator='$_GET[id]'");

                echo "<script>alert('data operator telah dirubah');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='operator.php';</script>";
            }
            ?>
<?php 
include 'footer.php';
?>