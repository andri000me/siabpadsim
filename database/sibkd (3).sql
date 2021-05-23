-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 06:05 PM
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
(5, '5555', '5555', 'Siti Armida Siregar, S.H.', 'Pengurus Barang Pengguna', 'Pengurus Barang Pengguna', 1, 'admin'),
(6, '0000', '0000', 'Operator', 'Operator', 'Operator', 35, 'admin'),
(9, 'admin', 'admin', 'admin', 'admin', 'Admin', 35, 'admin'),
(10, 'pptk', 'pptk', 'nama pptk', 'jabatan pptk', 'PPTK', 35, 'admin'),
(11, 'pbp', 'pbp', 'nama pbp', 'jabatan pbp', 'Pengurus Barang Pengguna', 35, 'admin'),
(12, 'operator', 'operator', 'nama operator', 'jabatan operator', 'Operator', 35, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailmutasi`
--

CREATE TABLE `tbl_detailmutasi` (
  `id_detailmutasi` int(11) NOT NULL,
  `id_mutasi` int(11) NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang_in` int(11) DEFAULT NULL,
  `total_barang_out` int(11) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detailmutasi`
--

INSERT INTO `tbl_detailmutasi` (`id_detailmutasi`, `id_mutasi`, `id_ssh`, `total_barang_in`, `total_barang_out`, `username`, `tanggal_input`, `tahun_order`, `statusorder`) VALUES
(67, 35, 13, 4, NULL, 'pptk', '2021-05-23 20:56:45', 2021, 'Belum Diterima'),
(68, 35, 12, 2, NULL, 'pptk', '2021-05-23 20:56:58', 2021, 'Belum Diterima'),
(69, 36, 14, 5, NULL, 'pptk', '2021-05-23 21:18:43', 2021, 'Belum Diterima'),
(70, 36, 12, 5, NULL, 'pptk', '2021-05-23 21:18:48', 2021, 'Belum Diterima'),
(71, 36, 15, 1, NULL, 'pptk', '2021-05-23 21:23:36', 2021, 'Belum Diterima'),
(72, 37, 12, NULL, 10, 'pptk', '2021-05-23 21:35:22', 2021, 'Belum Diterima'),
(73, 37, 13, NULL, 8, 'pptk', '2021-05-23 21:35:29', 2021, 'Belum Diterima'),
(74, 37, 16, NULL, 1, 'pptk', '2021-05-23 21:49:04', 2021, 'Belum Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpengadaan`
--

CREATE TABLE `tbl_detailpengadaan` (
  `id_detailpengadaan` int(11) NOT NULL,
  `id_pengadaan` int(11) NOT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang_in` int(11) NOT NULL,
  `total_barang_out` int(11) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_order` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpenyaluran`
--

CREATE TABLE `tbl_detailpenyaluran` (
  `id_detailpenyaluran` int(11) NOT NULL,
  `id_penyaluran` int(11) DEFAULT NULL,
  `id_ssh` int(11) NOT NULL,
  `total_barang_in` int(11) DEFAULT NULL,
  `total_barang_out` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `tanggal_input` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_penyaluran` year(4) NOT NULL DEFAULT current_timestamp(),
  `statusorder` enum('Belum Diterima','Sudah Diterima','Sudah Disalurkan','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mutasi`
--

CREATE TABLE `tbl_mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `jenis_mutasi` enum('Pengadaan','Penyaluran','','') DEFAULT NULL,
  `tahun_pesan` year(4) NOT NULL DEFAULT current_timestamp(),
  `tanggal_pesan` date DEFAULT NULL,
  `id_rekanan` int(11) DEFAULT NULL,
  `keterangan` enum('Disetujui','Ditolak','Menunggu Konfirmasi','') DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `id_opd` int(128) DEFAULT NULL,
  `no_suratpermohonanpptk` varchar(50) DEFAULT NULL,
  `no_suratpermohonanpenyedia` varchar(50) DEFAULT NULL,
  `no_suratbalasan` varchar(50) DEFAULT NULL,
  `no_suratperintahpengiriman` varchar(50) DEFAULT NULL,
  `no_bapenyedia` varchar(50) DEFAULT NULL,
  `no_bappk` varchar(50) DEFAULT NULL,
  `statusorder` enum('Sedang Diproses','Selesai','','') DEFAULT NULL,
  `tanggalterimabarang` date DEFAULT NULL,
  `id_paketpekerjaan` int(11) DEFAULT NULL,
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
  `tanggal_bapembayaran` date DEFAULT NULL,
  `no_sppb` varchar(128) DEFAULT NULL,
  `tanggal_sppb` date DEFAULT NULL,
  `no_bapenyaluranbarang` varchar(128) DEFAULT NULL,
  `tanggal_bapenyaluranbarang` date DEFAULT NULL,
  `statuspenyaluran` enum('Belum Diproses','Sudah Disalurkan','','') DEFAULT NULL,
  `tanggalpenyaluran` date DEFAULT NULL,
  `untuk` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mutasi`
--

INSERT INTO `tbl_mutasi` (`id_mutasi`, `jenis_mutasi`, `tahun_pesan`, `tanggal_pesan`, `id_rekanan`, `keterangan`, `username`, `id_opd`, `no_suratpermohonanpptk`, `no_suratpermohonanpenyedia`, `no_suratbalasan`, `no_suratperintahpengiriman`, `no_bapenyedia`, `no_bappk`, `statusorder`, `tanggalterimabarang`, `id_paketpekerjaan`, `tanggal_suratpermohonanpptk`, `tanggal_suratpermohonanpenyedia`, `tanggal_suratbalasan`, `tanggal_suratperintahpengiriman`, `tanggal_bapenyedia`, `tanggal_bappk`, `belanja`, `memesan`, `no_kwitansi`, `no_faktur`, `no_suratpermohonanpembayaran`, `no_bapembayaran`, `tanggal_kwitansi`, `tanggal_faktur`, `tanggal_suratpermohonanpembayaran`, `tanggal_bapembayaran`, `no_sppb`, `tanggal_sppb`, `no_bapenyaluranbarang`, `tanggal_bapenyaluranbarang`, `statuspenyaluran`, `tanggalpenyaluran`, `untuk`) VALUES
(36, 'Pengadaan', 2021, '2021-05-17', 1, 'Disetujui', 'pptk', 35, 'a', 'a', 'a', 'a', 'a', 'a', 'Selesai', '2021-05-23', NULL, '2021-05-27', '2021-04-29', '2021-05-27', '2021-05-18', '2021-05-15', '2021-05-19', 'aaa', 'aaa', 'a', 'a', 'a', 'a', '2021-04-30', '2021-05-29', '2021-05-29', '2021-05-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Penyaluran', 2021, '2021-05-24', NULL, 'Disetujui', 'pptk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sedang Diproses', '2021-05-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'b', '2021-04-27', 'b', '2021-06-02', 'Sudah Disalurkan', '2021-05-23', NULL);

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
  `id_opd` int(128) NOT NULL,
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
(6, 'coba pimpinan', 'coba rekanan', 'coba alamat', 'pptk', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sk`
--

CREATE TABLE `tbl_sk` (
  `id` int(11) NOT NULL,
  `no_sk` varchar(128) NOT NULL,
  `tanggal_sk` date NOT NULL,
  `tanggal_skberakhir` date NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `gol_jabatan` varchar(128) NOT NULL,
  `gol` varchar(128) NOT NULL,
  `id_user` varchar(128) NOT NULL,
  `id_opd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sk`
--

INSERT INTO `tbl_sk` (`id`, `no_sk`, `tanggal_sk`, `tanggal_skberakhir`, `nama`, `nip`, `jabatan`, `gol_jabatan`, `gol`, `id_user`, `id_opd`) VALUES
(5, 'nomor sk atasan langsung', '2021-01-01', '2021-12-31', 'Sulaiman Lubis, SE', '19690501 199303 1 004', 'Pembina Utama Muda', 'Pembina Utama Muda', 'Atasan Langsung', 'operator', '35'),
(6, 'nomor sk pejabat tata usaha barang', '2021-01-01', '2021-12-31', 'Nama Pejabat Penatausahaan Barang', 'Nip Pejabat Penatausahaan Barang', 'Jabatan Pejabat Penatausahaan Barang', 'Golongan Pejabat Penatausahaan Barang', 'Pejabat Penatausahaan Barang', 'operator', '35'),
(7, 'nomor sk pbp', '2021-01-01', '2021-12-31', 'Nama PBP', 'Nip PBP', 'Jabatan PBP', 'Golongan PBP', 'Pengurus Barang Pengguna', 'operator', '35');

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
-- Indexes for table `tbl_detailmutasi`
--
ALTER TABLE `tbl_detailmutasi`
  ADD PRIMARY KEY (`id_detailmutasi`);

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
-- Indexes for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_detailmutasi`
--
ALTER TABLE `tbl_detailmutasi`
  MODIFY `id_detailmutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_detailpengadaan`
--
ALTER TABLE `tbl_detailpengadaan`
  MODIFY `id_detailpengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_detailpenyaluran`
--
ALTER TABLE `tbl_detailpenyaluran`
  MODIFY `id_detailpenyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_mutasi`
--
ALTER TABLE `tbl_mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_paketpekerjaan`
--
ALTER TABLE `tbl_paketpekerjaan`
  MODIFY `id_paketpekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_penyaluran`
--
ALTER TABLE `tbl_penyaluran`
  MODIFY `id_penyaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_rekanan`
--
ALTER TABLE `tbl_rekanan`
  MODIFY `id_rekanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_sk`
--
ALTER TABLE `tbl_sk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ssh`
--
ALTER TABLE `tbl_ssh`
  MODIFY `id_ssh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
