-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 04:26 PM
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
  `level` enum('Admin','Pengguna Anggaran','Bendahara','PPTK','Pengurus Barang') NOT NULL,
  `id_opd` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id`, `username`, `password`, `nama`, `jabatan`, `level`, `id_opd`, `admin`) VALUES
(1, '111111111', '111111111', 'Arin Dewi Jayanti', 'Admin', 'Admin', 1, 'admin'),
(2, '211211211', '211211211', 'Sulaiman Lubis, S.E.', 'Pengguna Anggaran', 'Pengguna Anggaran', 1, 'admin'),
(3, '321321321', '321321321', 'Bendahara', 'Bendahara', 'Bendahara', 1, 'admin'),
(4, '432432432', '432432432', 'Hj. Rosti Megawati Harahap', 'PPTK', 'PPTK', 1, 'admin'),
(5, '543543543', '543543543', 'Siti Armida Siregar, S.H.', 'Pengurus Barang', 'Pengurus Barang', 1, 'admin');

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
(15, 2021, '2021-02-03', 1, 'Disetujui', '321321321', 'no surat perintah 15', 'nosuratperitnah15', 'nofaktur15', 'nokwitansi15', 'no_beritaacarphp15', 'noberitaacarapbp15', 'Sudah Diterima', '2021-02-27', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2021, '2021-03-10', 1, 'Disetujui', '321321321', NULL, NULL, NULL, NULL, NULL, NULL, 'Sudah Diterima', '2021-03-01', 1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opd`
--

CREATE TABLE `tbl_opd` (
  `id_opd` int(11) NOT NULL,
  `kode_opd` varchar(50) NOT NULL,
  `nama_opd` varchar(50) NOT NULL,
  `nip_kepala` int(11) NOT NULL,
  `nama_kepala` varchar(50) NOT NULL,
  `alamat_opd` varchar(100) NOT NULL,
  `kecamatan_opd` varchar(50) NOT NULL,
  `alamat_kop_opd` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_opd`
--

INSERT INTO `tbl_opd` (`id_opd`, `kode_opd`, `nama_opd`, `nip_kepala`, `nama_kepala`, `alamat_opd`, `kecamatan_opd`, `alamat_kop_opd`, `username`) VALUES
(1, '5657', 'Badan Keuangan Daerah', 123123123, 'Sulaiman Lubis, S.E.', 'Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling', 'Kec. Padangsidimpuan Tenggara', 'Jln. Jen. Dr. Abd.Haris Nasution Pal - IV Pijorkoling Telp (0634)27075 Fax. (0634) 27075', 'admin'),
(2131, '345345', 'Dinas Lain', 0, '', '', '', '', 'admin');

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
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_penyaluran`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_order`) VALUES
(10, 17, 4, 1, '432432432', '2021-02-27 20:51:57', 2021);

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
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderrekanan`
--

INSERT INTO `tbl_orderrekanan` (`id_orderrekanan`, `id_fakturrekanan`, `id_ssh`, `total_barang`, `username`, `tanggal_input`, `tahun_order`) VALUES
(32, 19, 3, 6, '321321321', '2021-03-01 14:50:25', 2021),
(33, 19, 4, 7, '321321321', '2021-03-01 14:50:31', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paketpekerjaan`
--

CREATE TABLE `tbl_paketpekerjaan` (
  `id_paketpekerjaan` int(11) NOT NULL,
  `paketpekerjaan` varchar(100) NOT NULL,
  `spk_paketpekerjaan` text NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_paketpekerjaan`
--

INSERT INTO `tbl_paketpekerjaan` (`id_paketpekerjaan`, `paketpekerjaan`, `spk_paketpekerjaan`, `username`) VALUES
(1, 'Penyediaan Cetak', 'SPK Belanja Penyediaan Cetak Nomor: 02/SPK/BK/2020 Tanggal 11 Mei 2020', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyaluran`
--

CREATE TABLE `tbl_penyaluran` (
  `id_penyaluran` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') NOT NULL,
  `username` varchar(15) NOT NULL,
  `no_sppb` varchar(50) DEFAULT NULL,
  `no_beritaacarapb` varchar(50) DEFAULT NULL,
  `statusorder` enum('Belum Diterima','Sudah Disalurkan','Sudah Diterima','') DEFAULT NULL,
  `tanggalterimabarang` date DEFAULT NULL,
  `id_opd` int(11) DEFAULT NULL,
  `tahun_penyaluran` year(4) NOT NULL DEFAULT current_timestamp(),
  `tanggal_sppb` date DEFAULT NULL,
  `tanggal_beritaacarapb` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyaluran`
--

INSERT INTO `tbl_penyaluran` (`id_penyaluran`, `tanggal_pesan`, `keterangan`, `username`, `no_sppb`, `no_beritaacarapb`, `statusorder`, `tanggalterimabarang`, `id_opd`, `tahun_penyaluran`, `tanggal_sppb`, `tanggal_beritaacarapb`) VALUES
(17, '2021-02-12', 'Disetujui', '432432432', '123', 'vff', 'Sudah Diterima', '2021-02-27', NULL, 2021, NULL, NULL);

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
-- Indexes for table `tbl_paketpekerjaan`
--
ALTER TABLE `tbl_paketpekerjaan`
  ADD PRIMARY KEY (`id_paketpekerjaan`);

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
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_opd`
--
ALTER TABLE `tbl_opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2132;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_orderrekanan`
--
ALTER TABLE `tbl_orderrekanan`
  MODIFY `id_orderrekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_paketpekerjaan`
--
ALTER TABLE `tbl_paketpekerjaan`
  MODIFY `id_paketpekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penyaluran`
--
ALTER TABLE `tbl_penyaluran`
  MODIFY `id_penyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
