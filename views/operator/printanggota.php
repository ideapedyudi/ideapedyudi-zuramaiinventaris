<html>
<head>
    <title>Laporan Data Anggota</title>
</head>
<body onLoad="window.print();">
   <?php
		include '../../koneksi.php';
		?>

<style type="text/css">
body {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
</style>

			<p align="center">LAPORAN DATA ANGGOTA INVENTARIS SEKOLAH</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">

   	          <tr>
   	            <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">NIS</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Nama Anggota</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Password</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tempat Lahir</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tanggal Lahir</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Kelamin</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Jurusan</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tahun Masuk</td>
              </tr>
              <?php $ambil = $koneksi->query("SELECT * FROM tbl_anggota ORDER BY nama_anggota");
													$no = 1; ?>
              <?php while ($tampil = $ambil->fetch_assoc()) { ?>
   	        <tbody>
   	          <tr>
   	            <td height="27" align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $tampil['nis']; ?></a>
   	            <td align="center"><?php echo $tampil['nama_anggota']; ?></a>
   	            <td align="center"><?php echo $tampil['password']; ?></a>
   	            <td align="center"><?php echo $tampil['tempat_lahir']; ?></a>
   	            <td align="center"><?php echo $tampil['tgl_lahir']; ?></a>
   	            <td align="center"><?php echo $tampil['jk']; ?></a>
                <td align="center"><?php echo $tampil['prodi']; ?></a>
                <td align="center"><?php echo $tampil['thn_masuk']; ?></a>

              </tr>
            <?php $no++;
										} ?>

            </tbody>
          </table>

</body>
