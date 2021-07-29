<html>
<head>
    <title>Laporan Barang</title>
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

			<p align="center">LAPORAN DATA BARANG INVENTARIS SEKOLAH</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">

   	          <tr>
   	            <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Nama Barang</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Stok</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Kategori</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Spesifikasi</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tahun Beli</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Kondisi</td>
              </tr>
              <?php $ambil = $koneksi->query("SELECT * FROM tbl_barang  ORDER BY nama_barang");
                $no = 1; ?>
              <?php while ($tampil = $ambil->fetch_assoc()) { ?>
   	        <tbody>
   	          <tr>
   	            <td height="27" align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $tampil['nama_barang']; ?></a>
   	            <td align="center"><?php echo $tampil['jumlah_barang']; ?></a>
   	            <td align="center"><?php echo $tampil['kategori']; ?></a>
   	            <td align="center"><?php echo $tampil['spek']; ?></a>
   	            <td align="center"><?php echo $tampil['tahun_beli']; ?></a>
   	            <td align="center"><?php echo $tampil['kondisi']; ?></a>

              </tr>
            <?php $no++;
        } ?>

            </tbody>
          </table>

</body>
