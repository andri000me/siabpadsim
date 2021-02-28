-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 10:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibkd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `level` enum('Kepala','Sekretaris','User','Admin','Operator') NOT NULL,
  `id_opd` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `username`, `password`, `nama`, `jabatan`, `level`, `id_opd`, `admin`) VALUES
(1, '1', '1', '1', 'Admin', 'Admin', 1, '3'),
(2, '2', '2', 'sulaiman', 'pengguna anggaran', 'Kepala', 1, '3'),
(3, '3', '3', '3', 'Sekretaris', 'Sekretaris', 1, '3'),
(4, '4', '4', '4', 'Kepala Bidang', 'User', 1, '3'),
(5, '5', '5', '5', 'Tata Usaha', 'Operator', 1, '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakturrekanan`
--

CREATE TABLE `tbl_fakturrekanan` (
  `id_faktur` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_rekanan` int(11) NOT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `no_suratpesanan` varchar(50) DEFAULT NULL,
  `no_suratperintahpengiriman` varchar(50) DEFAULT NULL,
  `no_faktur` varchar(50) DEFAULT NULL,
  `no_kwitansi` varchar(50) DEFAULT NULL,
  `no_beritaacaraphp` varchar(50) DEFAULT NULL,
  `no_beritaacarapb` varchar(50) DEFAULT NULL,
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') DEFAULT NULL,
  `tanggalterimabarang` date DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fakturrekanan`
--

INSERT INTO `tbl_fakturrekanan` (`id_faktur`, `tanggal_pesan`, `id_rekanan`, `keterangan`, `username`, `no_suratpesanan`, `no_suratperintahpengiriman`, `no_faktur`, `no_kwitansi`, `no_beritaacaraphp`, `no_beritaacarapb`, `statusorder`, `tanggalterimabarang`, `id_opd`) VALUES
(14, '2021-02-26', 1, 'Menunggu Konfirmasi', '3', '1', '2', 'asd', 'asd', 'asd', 'q', 'Belum Diterima', '2021-02-25', NULL),
(15, '2021-02-03', 1, 'Disetujui', '3', 'no surat perintah 15', 'nosuratperitnah15', 'nofaktur15', 'nokwitansi15', 'no_beritaacarphp15', 'noberitaacarapbp15', 'Sudah Diterima', '2021-02-27', NULL),
(16, '2021-02-04', 1, 'Disetujui', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'Sudah Diterima', '2021-02-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opd`
--

CREATE TABLE `tbl_opd` (
  `id_opd` int(11) NOT NULL,
  `kode_opd` varchar(50) NOT NULL,
  `nama_opd` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_opd`
--

INSERT INTO `tbl_opd` (`id_opd`, `kode_opd`, `nama_opd`, `username`) VALUES
(1, '5657', 'Dinas Pendidikansss', 'admin'),
(2131, '345345', 'Dinas Lain', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `id_penyaluran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `tanggal_pesan`, `id_ssh`, `total_barang`, `total_harga`, `keterangan`, `username`, `tanggal_input`, `id_penyaluran`) VALUES
(4, '2021-02-10', 3, 6, 6000, 'Ditolak', '3', '2021-02-22 19:01:11', 1),
(5, '2021-02-16', 3, 9, 9000, 'Ditolak', '3', '2021-02-22 23:12:35', 0),
(6, '2021-02-25', 3, 2, 2000, 'Menunggu Konfirmasi', '2', '2021-02-22 23:12:46', 1),
(7, '2021-02-17', 2, 8, 8000, 'Disetujui', '3', '2021-02-22 23:20:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderrekanan`
--

CREATE TABLE `tbl_orderrekanan` (
  `id_orderrekanan` int(11) NOT NULL,
  `id_fakturrekanan` int(11) NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderrekanan`
--

INSERT INTO `tbl_orderrekanan` (`id_orderrekanan`, `id_fakturrekanan`, `id_ssh`, `total_barang`, `total_harga`, `username`, `tanggal_input`) VALUES
(15, 4, 2, 6, 6000, '3', '2021-02-26 00:07:36'),
(17, 4, 3, 7, 7000, '3', '2021-02-26 00:23:45'),
(18, 13, 3, 1, 1000, '3', '2021-02-26 11:41:47'),
(19, 13, 4, 6, 6000, '3', '2021-02-26 11:41:53'),
(20, 13, 4, 2, 2000, '3', '2021-02-26 11:41:59'),
(21, 14, 2, 2, 2000, 'admin', '2021-02-26 12:06:38'),
(27, 14, 4, 1, 1000, 'admin', '2021-02-27 11:51:28'),
(28, 14, 2, 1, 0, 'admin', '2021-02-27 12:01:32'),
(29, 14, 2, 1, 0, 'admin', '2021-02-27 12:18:20'),
(30, 14, 3, 1, 0, 'admin', '2021-02-27 12:35:16'),
(31, 14, 2, 6, 0, 'admin', '2021-02-27 12:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturansurat`
--

CREATE TABLE `tbl_pengaturansurat` (
  `id_pengaturansurat` int(11) NOT NULL,
  `username` int(50) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(50) NOT NULL,
  `nip_kepala_opd` int(20) NOT NULL,
  `nama_kepala_opd` varchar(50) NOT NULL,
  `alamat_opd` varchar(100) NOT NULL,
  `nama_rekanan` varchar(50) NOT NULL,
  `alamat_rekanan` varchar(100) NOT NULL,
  `nama_pimpinan_rekanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengaturansurat`
--

INSERT INTO `tbl_pengaturansurat` (`id_pengaturansurat`, `username`, `id_opd`, `nama_opd`, `nip_kepala_opd`, `nama_kepala_opd`, `alamat_opd`, `nama_rekanan`, `alamat_rekanan`, `nama_pimpinan_rekanan`) VALUES
(1, 2, 1, 'Badan Keuangan Daerah', 12345678, 'Sulaiman', 'alamat opd Padang Sidempuan', 'UD', 'alamat rekanan Padang Sidempuan', 'Bapak Pimpian UD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyaluran`
--

CREATE TABLE `tbl_penyaluran` (
  `id_penyaluran` int(11) NOT NULL,
  `tanggal_penyaluran` date NOT NULL,
  `pemberi` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `keterangan_pemberi` enum('Belum Diproses','Sudah Diserahkan','','') NOT NULL,
  `keterangan_penerima` enum('Belum Diterima','Sudah Diterima','','') NOT NULL,
  `no_sppb` varchar(50) DEFAULT NULL,
  `id_opd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyaluran`
--

INSERT INTO `tbl_penyaluran` (`id_penyaluran`, `tanggal_penyaluran`, `pemberi`, `penerima`, `keterangan_pemberi`, `keterangan_penerima`, `no_sppb`, `id_opd`) VALUES
(1, '2021-02-17', 'pengurus barang', 'kabid aset', 'Belum Diproses', 'Belum Diterima', 'trgrtg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekanan`
--

CREATE TABLE `tbl_rekanan` (
  `id_rekanan` int(11) NOT NULL,
  `nama_pimpinan` varchar(50) NOT NULL,
  `nama_rekanan` varchar(50) NOT NULL,
  `alamat_rekanan` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekanan`
--

INSERT INTO `tbl_rekanan` (`id_rekanan`, `nama_pimpinan`, `nama_rekanan`, `alamat_rekanan`, `username`) VALUES
(1, 'Dra. Sulhana Lely Lubis.Ak., M.M.', 'UD. PERCETAKAN PUSTAKA TIMUR', 'Jln. H. Sulaiman Gg. Kelapa I No. 4 Kel. Timbangan Kec. Padangsidimpuan Utara', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ssh`
--

CREATE TABLE `tbl_ssh` (
  `id_ssh` int(11) NOT NULL,
  `Kelompok_ssh` enum('Umum','Lain','','') NOT NULL,
  `Namabarang_ssh` varchar(50) NOT NULL,
  `Spesifikasi_ssh` varchar(200) NOT NULL,
  `Satuan_ssh` varchar(10) NOT NULL,
  `Hargasatuan_ssh` int(50) NOT NULL,
  `Tahun_ssh` int(15) NOT NULL,
  `No_skpd` varchar(50) NOT NULL,
  `id_opd` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ssh`
--

INSERT INTO `tbl_ssh` (`id_ssh`, `Kelompok_ssh`, `Namabarang_ssh`, `Spesifikasi_ssh`, `Satuan_ssh`, `Hargasatuan_ssh`, `Tahun_ssh`, `No_skpd`, `id_opd`, `username`, `tanggal_input`) VALUES
(2, 'Umum', 'Anak panah platinum plus ', 'Point, Noek,Spine, Vine', 'Lusin', 4940000, 2021, '2021/20/21', 1, '2', '2021-02-22 00:00:00'),
(3, 'Umum', 'Angkat Besi Barbel ', 'tidak ada', 'Buah', 7306000, 2021, '	2021/20/21', 1, '3', '2021-02-22 00:00:00'),
(4, 'Umum', 'Angkle kaki pencak silat ', 'Professional ', 'Pasang', 260000, 2021, '	2021/20/21', 1, '2', '2021-02-22 00:00:00'),
(9, 'Umum', 'kertas a4', 'Point, Noek,Spine, Vine', 'rim', 12000, 2021, '12323/bn/nds/213', 1, '3', '2021-02-24 22:49:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fakturrekanan`
--
ALTER TABLE `tbl_fakturrekanan`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `tbl_opd`
--
ALTER TABLE `tbl_opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_orderrekanan`
--
ALTER TABLE `tbl_orderrekanan`
  ADD PRIMARY KEY (`id_orderrekanan`);

--
-- Indexes for table `tbl_pengaturansurat`
--
ALTER TABLE `tbl_pengaturansurat`
  ADD PRIMARY KEY (`id_pengaturansurat`);

--
-- Indexes for table `tbl_penyaluran`
--
ALTER TABLE `tbl_penyaluran`
  ADD PRIMARY KEY (`id_penyaluran`);

--
-- Indexes for table `tbl_rekanan`
--
ALTER TABLE `tbl_rekanan`
  ADD PRIMARY KEY (`id_rekanan`);

--
-- Indexes for table `tbl_ssh`
--
ALTER TABLE `tbl_ssh`
  ADD PRIMARY KEY (`id_ssh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fakturrekanan`
--
ALTER TABLE `tbl_fakturrekanan`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_opd`
--
ALTER TABLE `tbl_opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orderrekanan`
--
ALTER TABLE `tbl_orderrekanan`
  MODIFY `id_orderrekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_pengaturansurat`
--
ALTER TABLE `tbl_pengaturansurat`
  MODIFY `id_pengaturansurat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_penyaluran`
--
ALTER TABLE `tbl_penyaluran`
  MODIFY `id_penyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rekanan`
--
ALTER TABLE `tbl_rekanan`
  MODIFY `id_rekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ssh`
--
ALTER TABLE `tbl_ssh`
  MODIFY `id_ssh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
