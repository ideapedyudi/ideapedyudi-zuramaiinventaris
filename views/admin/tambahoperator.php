<?php 
include 'header.php';
?>
    <div class="container mt-5">
        <div class="card mx-auto p-4" style="width: 60%;box-shadow: 3px 3px 3px #ddd;" data-aos="zoom-in">
            <div class="card-title">
                <h3><a href="operator.php" class="btn btn-primary mt-n2"><i class="fas fa-arrow-left"></i></a> Tambah Data Operator</h3>
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-grup">
                        <label><span class="black-text">Nama Operator</span></label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Username</span></label>
                        <input class="form-control" type="text" name="username">
                    </div>
                    <div class="form-grup">
                        <label><span class="black-text">Password</span></label>
                        <input class="form-control" type="text" name="password">
                    </div>

                    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary mt-4 btn-block">
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


            $ambil = $koneksi->query("SELECT * FROM tbl_operator WHERE username='$username'");
            $yangcocok = $ambil->num_rows;
                //memeriksa username sudah digunakan atau belum
            if ($yangcocok == 1) {
                echo "<script>alert('pendaftaran gagal, username sudah digunakan silahkan pakai username yang lain');</script>";
                echo "<script>location='tambahoperator.php'</script>";
            } else {
                    //query insert kedatabase
                $koneksi->query("INSERT INTO tbl_operator(username,password,nama_operator) VALUES ('$username','$password','$nama')");
                echo "<script>alert('selamat pendaftaran berhasil');</script>";
                echo "<meta http-equiv='refresh'>";
                echo "<script>location='operator.php'</script>";
            }
        }
        ?>
<?php 
include 'footer.php';
?>