<html>
<head>
    <title>Laporan Transaksi</title>
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

			<p align="center">LAPORAN DATA TRANSAKSI INVENTARIS SEKOLAH</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">

   	          <tr>
   	            <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Nama Anggota</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Nama Barang</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Jumlah</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tanggal Pinjam</td>
   	            <td width="21%" bgcolor="#CCCCCC" align="center">Tanggal Kembali</td>
                <td width="21%" bgcolor="#CCCCCC" align="center">Status Pinjam</td>
              </tr>
              <?php 
                $no = 1;
                $ambil = $koneksi->query("SELECT * FROM  tbl_pinjam JOIN tbl_pinjam_barang
               ON tbl_pinjam.id_pinjam=tbl_pinjam_barang.id_pinjam");
                ?>
              <?php while ($detail = $ambil->fetch_assoc()) { ?>
   	        <tbody>
   	          <tr>
   	            <td height="27" align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $detail['nama_anggota']; ?></a>
   	            <td align="center"><?php echo $detail['nama_barang']; ?></a>
   	            <td align="center"><?php echo $detail['jumlah']; ?></a>
   	            <td align="center"><?php echo $detail['tanggal_peminjaman']; ?></a>
   	            <td align="center"><?php echo $detail['tanggal_pengembalian']; ?></a>
   	            <td align="center"><?php echo $detail['status_peminjaman']; ?></a>
              </tr>
            <?php $no++;
        } ?>

            </tbody>
          </table>

</body>
