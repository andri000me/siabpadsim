-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 02:56 PM
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
  `level` enum('Admin','Pengguna Anggaran','PPTK','Pengurus Barang Pengguna','Operator') NOT NULL,
  `id_opd` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `username`, `password`, `nama`, `jabatan`, `level`, `id_opd`, `admin`) VALUES
(1, '1111', '1111', 'Arin Dewi Jayanti', 'Admin', 'Admin', 35, 'admin'),
(3, '3333', '3333', 'Sori', 'Bidang Aset', 'PPTK', 35, 'admin'),
(4, '4444', '4444', 'Hj. Rosti Megawati Harahap', 'Sekretariat', 'PPTK', 35, 'admin'),
(5, '5555', '5555', 'Siti Armida Siregar, S.H.', 'Pengurus Barang Pengguna', 'Pengurus Barang Pengguna', 35, 'admin'),
(6, '0000', '0000', 'Operator', 'Operator', 'Operator', 35, 'admin'),
(9, 'admin', 'admin', 'admin', 'admin', 'Admin', 35, 'admin'),
(10, 'pptk', 'pptk', 'pptk', 'pptk', 'PPTK', 35, 'admin'),
(11, 'pbp', 'pbp', 'pbp', 'pbp', 'Pengurus Barang Pengguna', 35, 'admin'),
(12, 'operator', 'operator', 'operator', 'operator', 'Operator', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpengadaan`
--

CREATE TABLE `tbl_detailpengadaan` (
  `id_detailpengadaan` int(11) NOT NULL,
  `id_pengadaan` int(11) NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detailpengadaan`
--

INSERT INTO `tbl_detailpengadaan` (`id_detailpengadaan`, `id_pengadaan`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_order`, `statusorder`) VALUES
(41, 26, 2, 1, '321321321', '2021-03-03 01:21:01', 2021, 'Sudah Diterima'),
(42, 26, 3, 10, '321321321', '2021-03-03 01:21:08', 2021, 'Sudah Diterima'),
(43, 26, 4, 4, '321321321', '2021-03-03 01:21:16', 2021, 'Sudah Diterima'),
(44, 26, 9, 20, '321321321', '2021-03-03 01:21:24', 2021, 'Sudah Diterima'),
(45, 27, 2, 1, '321321321', '2021-03-03 01:45:15', 2021, 'Sudah Diterima'),
(46, 27, 3, 3, '321321321', '2021-03-03 01:45:21', 2021, 'Sudah Diterima'),
(47, 28, 12, 4, '321321321', '2021-03-03 01:45:27', 2021, 'Sudah Diterima'),
(48, 29, 2, 3, '5', '2021-03-03 01:45:34', 2021, 'Sudah Diterima'),
(50, 29, 12, 1, '5', '2021-03-03 01:46:41', 2021, 'Belum Diterima'),
(52, 29, 12, 2, '3333', '2021-03-18 02:16:25', 2021, 'Belum Diterima'),
(54, 30, 15, 1, '5', '2021-03-18 02:34:14', 2021, 'Belum Diterima'),
(55, 29, 14, 2, '3333', '2021-03-23 13:01:37', 2021, 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpenyaluran`
--

CREATE TABLE `tbl_detailpenyaluran` (
  `id_detailpenyaluran` int(11) NOT NULL,
  `id_penyaluran` int(11) DEFAULT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_penyaluran` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','Sudah Disalurkan','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detailpenyaluran`
--

INSERT INTO `tbl_detailpenyaluran` (`id_detailpenyaluran`, `id_penyaluran`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_penyaluran`, `statusorder`) VALUES
(11, 19, 3, 2, '432432432', '2021-03-03 01:49:48', 2021, 'Belum Diterima'),
(12, 19, 4, 1, '432432432', '2021-03-03 01:49:52', 2021, 'Belum Diterima'),
(13, 20, 12, 1, '432432432', '2021-03-03 01:55:17', 2021, 'Belum Diterima'),
(14, 25, 12, 1, '3333', '2021-03-03 01:55:47', 2021, 'Belum Diterima'),
(18, 24, 12, 2, '3333', '2021-03-23 13:50:42', 2021, 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakturrekanan`
--

CREATE TABLE `tbl_fakturrekanan` (
  `id_faktur` int(11) NOT NULL,
  `tahun_pesan` year(4) NOT NULL DEFAULT current_timestamp(),
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
  `id_paketpekerjaan` int(11) NOT NULL,
  `tanggal_suratpesanan` date DEFAULT NULL,
  `tanggal_suratperintahpengiriman` date DEFAULT NULL,
  `tanggal_faktur` date DEFAULT NULL,
  `tanggal_kwitansi` date DEFAULT NULL,
  `tanggal_beritaacaraphp` date DEFAULT NULL,
  `tanggal_beritaacarapb` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fakturrekanan`
--

INSERT INTO `tbl_fakturrekanan` (`id_faktur`, `tahun_pesan`, `tanggal_pesan`, `id_rekanan`, `keterangan`, `username`, `no_suratpesanan`, `no_suratperintahpengiriman`, `no_faktur`, `no_kwitansi`, `no_beritaacaraphp`, `no_beritaacarapb`, `statusorder`, `tanggalterimabarang`, `id_paketpekerjaan`, `tanggal_suratpesanan`, `tanggal_suratperintahpengiriman`, `tanggal_faktur`, `tanggal_kwitansi`, `tanggal_beritaacaraphp`, `tanggal_beritaacarapb`) VALUES
(26, 2021, '2021-03-03', 1, 'Disetujui', '321321321', '1/2/3', '1/1/1', '123123', '1/1/1', '1/1/1/', '1/1/1', 'Belum Diterima', '2021-03-02', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2021, '2021-03-16', 1, 'Disetujui', '321321321', NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Diterima', '2021-03-02', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 2021, '2021-03-24', 1, 'Disetujui', '321321321', NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Diterima', '2021-03-02', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mutasi`
--

CREATE TABLE `tbl_mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `id_order` int(20) DEFAULT NULL,
  `id_orderrekanan` int(20) DEFAULT NULL,
  `year` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mutasi`
--

INSERT INTO `tbl_mutasi` (`id_mutasi`, `id_order`, `id_orderrekanan`, `year`) VALUES
(18, NULL, 41, 2021),
(19, NULL, 42, 2021),
(20, NULL, 43, 2021),
(21, NULL, 44, 2021),
(22, NULL, 45, 2021),
(23, NULL, 46, 2021),
(25, NULL, 48, 2021),
(26, NULL, 47, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opd`
--

CREATE TABLE `tbl_opd` (
  `id_opd` varchar(50) NOT NULL,
  `nama_opd` varchar(50) NOT NULL,
  `alamat_opd` varchar(100) NOT NULL,
  `kecamatan_opd` varchar(50) NOT NULL,
  `alamat_kop_opd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_opd`
--

INSERT INTO `tbl_opd` (`id_opd`, `nama_opd`, `alamat_opd`, `kecamatan_opd`, `alamat_kop_opd`) VALUES
('1', 'Dinas Pendidikan', '', '', ''),
('35', 'Badan Keuangan Daerah', 'Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling', 'Kec. Padangsidimpuan Tenggara', 'Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling Telp (0634)27075 Fax. (0634) 27075');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(11) NOT NULL,
  `id_penyaluran` int(11) DEFAULT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','Sudah Disalurkan','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_penyaluran`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_order`, `statusorder`) VALUES
(11, 19, 3, 2, '432432432', '2021-03-03 01:49:48', 2021, 'Belum Diterima'),
(12, 19, 4, 1, '432432432', '2021-03-03 01:49:52', 2021, 'Belum Diterima'),
(13, 20, 3, 1, '432432432', '2021-03-03 01:55:17', 2021, 'Belum Diterima'),
(14, 21, 9, 1, '432432432', '2021-03-03 01:55:47', 2021, 'Belum Diterima'),
(15, 23, 12, 10, '3333', '2021-03-19 21:58:23', 2021, 'Belum Diterima'),
(16, 23, 12, 10, '3333', '2021-03-19 21:59:24', 2021, 'Belum Diterima'),
(17, 23, 13, 1, '3333', '2021-03-19 22:00:52', 2021, 'Belum Diterima'),
(18, 24, 13, 2, '3333', '2021-03-23 13:01:06', 2021, 'Belum Diterima'),
(19, 24, 13, 2, '3333', '2021-03-23 13:01:29', 2021, 'Belum Diterima'),
(20, 25, 13, 2, '3333', '2021-03-23 13:03:54', 2021, 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderrekanan`
--

CREATE TABLE `tbl_orderrekanan` (
  `id_orderrekanan` int(11) NOT NULL,
  `id_fakturrekanan` int(11) NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderrekanan`
--

INSERT INTO `tbl_orderrekanan` (`id_orderrekanan`, `id_fakturrekanan`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_order`, `statusorder`) VALUES
(41, 26, 2, 1, '321321321', '2021-03-03 01:21:01', 2021, 'Sudah Diterima'),
(42, 26, 3, 10, '321321321', '2021-03-03 01:21:08', 2021, 'Sudah Diterima'),
(43, 26, 4, 4, '321321321', '2021-03-03 01:21:16', 2021, 'Sudah Diterima'),
(44, 26, 9, 20, '321321321', '2021-03-03 01:21:24', 2021, 'Sudah Diterima'),
(45, 27, 2, 1, '321321321', '2021-03-03 01:45:15', 2021, 'Sudah Diterima'),
(46, 27, 3, 3, '321321321', '2021-03-03 01:45:21', 2021, 'Sudah Diterima'),
(47, 27, 9, 4, '321321321', '2021-03-03 01:45:27', 2021, 'Sudah Diterima'),
(48, 27, 2, 3, '321321321', '2021-03-03 01:45:34', 2021, 'Sudah Diterima'),
(50, 28, 2, 1, '321321321', '2021-03-03 01:46:41', 2021, 'Belum Diterima'),
(51, 29, 12, 1, '3333', '2021-03-18 02:05:51', 2021, 'Belum Diterima'),
(52, 29, 12, 1, '3333', '2021-03-18 02:06:19', 2021, 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paketpekerjaan`
--

CREATE TABLE `tbl_paketpekerjaan` (
  `id_paketpekerjaan` int(11) NOT NULL,
  `paketpekerjaan` varchar(100) NOT NULL,
  `spk_paketpekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paketpekerjaan`
--

INSERT INTO `tbl_paketpekerjaan` (`id_paketpekerjaan`, `paketpekerjaan`, `spk_paketpekerjaan`) VALUES
(1, 'Penyediaan Cetak', 'SPK Belanja Penyediaan Cetak Nomor: 02/SPK/BK/2020 Tanggal 11 Mei 2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan`
--

CREATE TABLE `tbl_pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `tahun_pesan` year(4) NOT NULL DEFAULT current_timestamp(),
  `tanggal_pesan` date NOT NULL,
  `id_rekanan` int(11) NOT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `no_suratpermohonanpptk` varchar(50) DEFAULT NULL,
  `no_suratpermohonanpenyedia` varchar(50) DEFAULT NULL,
  `no_suratbalasan` varchar(50) DEFAULT NULL,
  `no_suratperintahpengiriman` varchar(50) DEFAULT NULL,
  `no_bapenyedia` varchar(50) DEFAULT NULL,
  `no_bappk` varchar(50) DEFAULT NULL,
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') DEFAULT NULL,
  `tanggalterimabarang` date DEFAULT NULL,
  `id_paketpekerjaan` int(11) NOT NULL,
  `tanggal_suratpermohonanpptk` date DEFAULT NULL,
  `tanggal_suratpermohonanpenyedia` date DEFAULT NULL,
  `tanggal_suratbalasan` date DEFAULT NULL,
  `tanggal_suratperintahpengiriman` date DEFAULT NULL,
  `tanggal_bapenyedia` date DEFAULT NULL,
  `tanggal_bappk` date DEFAULT NULL,
  `belanja` varchar(200) DEFAULT NULL,
  `memesan` varchar(200) DEFAULT NULL,
  `no_kwitansi` varchar(128) DEFAULT NULL,
  `no_faktur` varchar(128) DEFAULT NULL,
  `no_suratpermohonanpembayaran` varchar(128) DEFAULT NULL,
  `no_bapembayaran` varchar(128) DEFAULT NULL,
  `tanggal_kwitansi` date DEFAULT NULL,
  `tanggal_faktur` date DEFAULT NULL,
  `tanggal_suratpermohonanpembayaran` date DEFAULT NULL,
  `tanggal_bapembayaran` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengadaan`
--

INSERT INTO `tbl_pengadaan` (`id_pengadaan`, `tahun_pesan`, `tanggal_pesan`, `id_rekanan`, `keterangan`, `username`, `no_suratpermohonanpptk`, `no_suratpermohonanpenyedia`, `no_suratbalasan`, `no_suratperintahpengiriman`, `no_bapenyedia`, `no_bappk`, `statusorder`, `tanggalterimabarang`, `id_paketpekerjaan`, `tanggal_suratpermohonanpptk`, `tanggal_suratpermohonanpenyedia`, `tanggal_suratbalasan`, `tanggal_suratperintahpengiriman`, `tanggal_bapenyedia`, `tanggal_bappk`, `belanja`, `memesan`, `no_kwitansi`, `no_faktur`, `no_suratpermohonanpembayaran`, `no_bapembayaran`, `tanggal_kwitansi`, `tanggal_faktur`, `tanggal_suratpermohonanpembayaran`, `tanggal_bapembayaran`) VALUES
(28, 2021, '2021-03-24', 1, 'Disetujui', '3333', NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Diterima', '2021-03-02', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2021, '2021-03-18', 1, 'Menunggu Konfirmasi', '3333', '1', '1', '1', '1', 'ba penyedia ke ppk', 'ba ppk ke pa', 'Sudah Diterima', '2021-03-19', 1, '2021-03-01', '2021-03-02', '2021-03-03', '2021-03-01', '2021-03-19', '2021-03-25', 'asd', 'asd', '1', '1', '1', '1', '2021-03-09', '0000-00-00', '0000-00-00', '2021-03-01'),
(30, 2021, '2021-03-18', 1, 'Disetujui', '3333', '1', '2', '3', '4', '5', '6', 'Belum Diterima', NULL, 0, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'asd', 'asd', '7', '8', '9', '10', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyaluran`
--

CREATE TABLE `tbl_penyaluran` (
  `id_penyaluran` int(11) NOT NULL,
  `tahun_penyaluran` year(4) NOT NULL DEFAULT current_timestamp(),
  `tanggal_pesan` date NOT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `no_sppb` varchar(50) DEFAULT NULL,
  `no_bapenyaluranbarang` varchar(50) DEFAULT NULL,
  `statusorder` enum('Belum Diterima','Sudah Disalurkan','Sudah Diterima','') DEFAULT NULL,
  `tanggalterimabarang` date DEFAULT NULL,
  `tanggal_sppb` date DEFAULT NULL,
  `tanggal_bapenyaluranbarang` date DEFAULT NULL,
  `untuk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyaluran`
--

INSERT INTO `tbl_penyaluran` (`id_penyaluran`, `tahun_penyaluran`, `tanggal_pesan`, `keterangan`, `username`, `no_sppb`, `no_bapenyaluranbarang`, `statusorder`, `tanggalterimabarang`, `tanggal_sppb`, `tanggal_bapenyaluranbarang`, `untuk`) VALUES
(24, 2021, '2021-03-11', 'Disetujui', '3333', '123', '123', 'Sudah Disalurkan', NULL, '2021-03-26', '2021-03-09', 'test'),
(25, 2021, '2021-03-23', 'Disetujui', '3333', '1', '2', 'Sudah Disalurkan', NULL, '0000-00-00', '0000-00-00', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekanan`
--

CREATE TABLE `tbl_rekanan` (
  `id_rekanan` int(11) NOT NULL,
  `nama_pimpinan` varchar(50) NOT NULL,
  `nama_rekanan` varchar(50) NOT NULL,
  `alamat_rekanan` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_opd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekanan`
--

INSERT INTO `tbl_rekanan` (`id_rekanan`, `nama_pimpinan`, `nama_rekanan`, `alamat_rekanan`, `username`, `id_opd`) VALUES
(1, 'Dra. Sulhana Lely Lubis.Ak., M.M.', 'UD. PERCETAKAN PUSTAKA TIMUR', 'Jln. H. Sulaiman Gg. Kelapa I No. 4 Kel. Timbangan Kec. Padangsidimpuan Utara', '3333', '35'),
(5, 'asd', 'asd', 'asd', 'pptk', '1'),
(6, 'coba pimpinan', 'coba rekanan', 'coba alamat', 'pptk', '35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ssh`
--

CREATE TABLE `tbl_ssh` (
  `id_ssh` int(11) NOT NULL,
  `Kelompok_ssh` enum('Umum','Industri','Kesehatan','Pertanian','Pekerjaan Umum','Lain Lain') NOT NULL,
  `Jenisbarang_ssh` varchar(128) NOT NULL,
  `Namabarang_ssh` varchar(50) NOT NULL,
  `Ukuran_ssh` varchar(128) NOT NULL,
  `Spesifikasi_ssh` varchar(200) NOT NULL,
  `Satuan_ssh` varchar(10) NOT NULL,
  `Hargasatuan_ssh` int(50) NOT NULL,
  `Tahun_ssh` int(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ssh`
--

INSERT INTO `tbl_ssh` (`id_ssh`, `Kelompok_ssh`, `Jenisbarang_ssh`, `Namabarang_ssh`, `Ukuran_ssh`, `Spesifikasi_ssh`, `Satuan_ssh`, `Hargasatuan_ssh`, `Tahun_ssh`, `tanggal_input`) VALUES
(12, 'Industri', 'Komputer Dan Perlengkapannya', 'Flash Disk Kingston', '4 Giga', '4 Giga', 'Buah', 56430, 2021, '2021-03-18 00:08:06'),
(13, 'Umum', '', 'Anak panah platinum plus ', '', 'Point, Noek,Spine, Vine', 'Lusin', 4940000, 2021, '2021-03-18 00:16:40'),
(14, 'Kesehatan', 'Obat-Obatan', '4-Epeedo-10 Epirubisin Inj 10mg/5ml', '', '', 'Ampul', 257751, 2021, '2021-03-18 00:19:00'),
(15, 'Lain Lain', '', 'Rehabilitasi Taman Kantor', '', '', 'Kegiatan', 59500000, 2021, '2021-03-18 00:19:33'),
(16, 'Pekerjaan Umum', 'TENAGA KERJA', 'Mandor', '', '', 'Orang/Hari', 195750, 2021, '2021-03-18 00:20:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detailpengadaan`
--
ALTER TABLE `tbl_detailpengadaan`
  ADD PRIMARY KEY (`id_detailpengadaan`);

--
-- Indexes for table `tbl_detailpenyaluran`
--
ALTER TABLE `tbl_detailpenyaluran`
  ADD PRIMARY KEY (`id_detailpenyaluran`);

--
-- Indexes for table `tbl_fakturrekanan`
--
ALTER TABLE `tbl_fakturrekanan`
  ADD PRIMARY KEY (`id_faktur`);

--
-- Indexes for table `tbl_mutasi`
--
ALTER TABLE `tbl_mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

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
-- Indexes for table `tbl_paketpekerjaan`
--
ALTER TABLE `tbl_paketpekerjaan`
  ADD PRIMARY KEY (`id_paketpekerjaan`);

--
-- Indexes for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_detailpengadaan`
--
ALTER TABLE `tbl_detailpengadaan`
  MODIFY `id_detailpengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_detailpenyaluran`
--
ALTER TABLE `tbl_detailpenyaluran`
  MODIFY `id_detailpenyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_fakturrekanan`
--
ALTER TABLE `tbl_fakturrekanan`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_mutasi`
--
ALTER TABLE `tbl_mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_orderrekanan`
--
ALTER TABLE `tbl_orderrekanan`
  MODIFY `id_orderrekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_paketpekerjaan`
--
ALTER TABLE `tbl_paketpekerjaan`
  MODIFY `id_paketpekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_penyaluran`
--
ALTER TABLE `tbl_penyaluran`
  MODIFY `id_penyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_rekanan`
--
ALTER TABLE `tbl_rekanan`
  MODIFY `id_rekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_ssh`
--
ALTER TABLE `tbl_ssh`
  MODIFY `id_ssh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
