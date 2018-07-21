-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jul 2018 pada 17.10
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahunterbit` int(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `abstrak` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `penerbit`, `pengarang`, `tahunterbit`, `stok`, `harga`, `abstrak`, `gambar`) VALUES
(1, '1', '22', '2', 2, 0, 0, '2', 'adidas_2.jpg'),
(2, '2', '2', '2', 2, 1, 2, '2', 'gafas-sol-hawkers-messi-hmotr01-lf2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `kode` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `no_pinjam` varchar(20) NOT NULL,
  `kode_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`kode`, `jumlah`, `no_pinjam`, `kode_buku`) VALUES
(3, 1, '0', 1),
(4, 3, '0', 1),
(5, 4, '0', 1),
(6, 123, 'PER00010', 1),
(7, 123, 'PER00011', 1),
(8, 13, 'PER00012', 1),
(9, 123, 'PER00012', 1),
(10, 123, 'PER00012', 1),
(11, 1, 'PER00013', 1),
(12, 2, 'PER00014', 1),
(13, 1, 'PER00015', 1),
(14, 1, 'PER00015', 1),
(15, 1, 'PER00016', 2);

--
-- Trigger `detail_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `mengurangi` BEFORE INSERT ON `detail_peminjaman` FOR EACH ROW update buku set stok=stok-NEW.jumlah where buku.kode = NeW.kode_buku
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_pinjam` varchar(15) NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `kode_pengguna` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` int(11) DEFAULT '1',
  `tanggal_dikembalikan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_pinjam`, `kode_petugas`, `kode_pengguna`, `tanggal`, `tanggal_kembali`, `status`, `tanggal_dikembalikan`) VALUES
('PER00001', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00002', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00003', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00004', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00005', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00006', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00007', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00008', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00009', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00010', 2, 2, '2018-07-12', '2018-06-12', 2, '2018-07-18'),
('PER00011', 2, 2, '2018-07-12', '2018-07-12', 2, '2018-07-18'),
('PER00012', 2, 2, '2018-07-12', '2018-07-12', 1, NULL),
('PER00013', 2, 2, '2018-07-18', '2018-07-18', 1, NULL),
('PER00014', 1, 2, '2018-07-18', '2018-07-18', 1, NULL),
('PER00015', 2, 3, '2018-07-18', '2018-07-18', 1, NULL),
('PER00016', 2, 3, '2018-07-18', '2018-07-18', 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `kode` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `peran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`kode`, `nama`, `alamat`, `notelp`, `username`, `password`, `peran`) VALUES
(1, '1', '1', '1', '1', '1', '1'),
(2, '2', '2', '2', '2', '2', '2'),
(3, 'Jihun', 'Sawojajar', '089123123', 'jihun', 'jihun', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `no_pinjam` (`no_pinjam`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `kode_petugas` (`kode_petugas`),
  ADD KEY `kode_pengguna` (`kode_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
