<?php
include 'header.php';
?>
<div class="container mt-5">
          <h3 class="light center grey-text text-darken-3">My Profile</h3><br>
          <div class="row">
          <div class="col-lg-6 p-5">
            <img class="mx-auto" src="../../img/Profile.svg" alt="" width="50%;">
          </div>
            <div class="col-lg-6">
              <ul class="list-group">
                  <li class="list-group-item"> <strong> NIS :</strong>  &nbsp;&nbsp;<?= $_SESSION["anggota"]["nis"]; ?></li>
                  <li class="list-group-item"> <strong> Nama Lengkap :  &nbsp;&nbsp;</strong> <?= $_SESSION["anggota"]["nama_anggota"]; ?></li>
                  <li class="list-group-item"> <strong> Password : </strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["password"]; ?> </li>
                  <li class="list-group-item"> <strong> Tempat Lahir: </strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["tempat_lahir"]; ?></li>
                  <li class="list-group-item"> <strong> Tanggal Lahir:</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["tgl_lahir"]; ?></li>
                  <li class="list-group-item"> <strong> Jenis Kelamin :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["jk"]; ?></li>
                  <li class="list-group-item"> <strong> Jurusan :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["prodi"]; ?></li>
                  <li class="list-group-item"> <strong> Tahun Masuk :</strong> &nbsp;&nbsp;<?= $_SESSION["anggota"]["thn_masuk"]; ?></li>
             </ul>
            </div>
        </div>
<?php
include 'footer.php';
?>