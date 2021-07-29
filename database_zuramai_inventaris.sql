-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Agu 2020 pada 06.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_zuramai_inventaris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(2, 'admin', 'admin', 'WAHYUDI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `prodi` enum('AP','MM','PM','RPL') NOT NULL,
  `thn_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`nis`, `nama_anggota`, `password`, `tempat_lahir`, `tgl_lahir`, `jk`, `prodi`, `thn_masuk`) VALUES
(10902, 'Muh Ikmal Rizki Yanto', 'mangzkun', 'Probolinggo', '01 September 20', 'L', 'MM', '2020'),
(12345678, 'Muh Wahyudi', 'user', 'Probolinggo', '17 September 20', 'L', 'RPL', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(8) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `foto_barang` varchar(200) NOT NULL,
  `jumlah_barang` int(8) NOT NULL,
  `kategori` varchar(150) NOT NULL,
  `spek` varchar(300) NOT NULL,
  `tahun_beli` varchar(5) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `foto_barang`, `jumlah_barang`, `kategori`, `spek`, `tahun_beli`, `kondisi`) VALUES
(1, 'Proyektor', 'infocus.png', 11, 'Alat Elektronik', 'xVGA 1024x720', '2010', 'baik'),
(4, 'Mouse', 'mouse.png', 18, 'Alat Elektronik', 'Wirreles', '2013', 'Baik'),
(5, 'Bola Basket', 'bolabasket.png', 8, 'Peralatan Olahraga', 'Standar PERBASI', '2015', 'Baik'),
(6, 'Bola Futsal', 'bolafutsal.png', 10, 'Peralatan Olahraga', 'Diameter 62cm', '2016', 'Baik'),
(7, 'Kamera DSLR', 'kamera.png', 7, 'Alat Elektronik', 'Nikon D3300', '2017', 'Baik'),
(8, 'Laptop Asus', 'laptop.png', 5, 'Alat Elektronik', 'i7-8700k, full HD, Hdd 1tb', '2018', 'Baik'),
(9, 'Pulpen', 'pulpen.png', 31, 'ATK', 'Pulpen Gel warna hitam', '2018', 'Baik'),
(10, 'Raket', 'raketbadminton.png', 5, 'Peralatan Olahraga', 'Standar PBSI', '2019', 'Baik'),
(11, 'Bangku', 'bangku.png', 40, 'Alat Sekolah', 'kayu jati', '2010', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kritiksaran`
--

CREATE TABLE `tbl_kritiksaran` (
  `id_kritik` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kritiksaran`
--

INSERT INTO `tbl_kritiksaran` (`id_kritik`, `nis`, `nama_anggota`, `email`, `message`) VALUES
(1, 10657357, 'Christina Paulin', 'tina@gmail.com', 'lapangan banyak lubang'),
(2, 10657350, 'Farhan Fadila', 'farhan.fadila1717@gmail.com', 'komputer no 2 sering blue screen'),
(3, 10657350, 'Farhan Fadila', 'farhan.fadila1717@gmail.com', 'spp kemahalan'),
(4, 12345678, 'wahyudi', 'mydroidyudicoder@gmail.com', 'bola basket rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_operator` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_operator`, `username`, `password`, `nama_operator`) VALUES
(1, 'operator', 'operator', 'operator wahyudi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL,
  `jumlah_pinjam` varchar(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `nis`, `nama_anggota`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`, `jumlah_pinjam`, `keterangan`) VALUES
(19, 12345678, 'wahyudi', '2020-08-13', '2020-08-13', 'dikembalikan', '', ' proyektor 5'),
(20, 12345678, 'wahyudi', '2020-08-13', '2020-08-13', 'dikembalikan', '', ' mouse 5 biji'),
(21, 12345678, 'wahyudi', '2020-08-15', '2020-08-15', 'dikembalikan', '', ' proyektor 2 biji'),
(22, 12345678, 'Muh Wahyudi', '2020-08-17', '2020-08-17', 'dikembalikan', '', ' proyektor 5 biji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam_barang`
--

CREATE TABLE `tbl_pinjam_barang` (
  `id_peminjaman_barang` int(15) NOT NULL,
  `id_pinjam` int(15) NOT NULL,
  `id_barang` int(15) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjam_barang`
--

INSERT INTO `tbl_pinjam_barang` (`id_peminjaman_barang`, `id_pinjam`, `id_barang`, `nama_barang`, `jumlah`) VALUES
(19, 14, 11, 'Bangku', 5),
(20, 15, 1, 'Proyektor', 5),
(21, 16, 4, 'Mouse', 5),
(22, 17, 5, 'Bola Basket', 5),
(23, 18, 1, 'Proyektor', 5),
(24, 19, 1, 'Proyektor', 5),
(25, 20, 4, 'Mouse', 5),
(26, 21, 1, 'Proyektor', 2),
(27, 22, 1, 'Proyektor', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indeks untuk tabel `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indeks untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indeks untuk tabel `tbl_pinjam_barang`
--
ALTER TABLE `tbl_pinjam_barang`
  ADD PRIMARY KEY (`id_peminjaman_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_pinjam_barang`
--
ALTER TABLE `tbl_pinjam_barang`
  MODIFY `id_peminjaman_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
