-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 02:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_rka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kegiatan`
--

CREATE TABLE `tb_detail_kegiatan` (
  `no_detail` int(11) NOT NULL,
  `no` varchar(20) DEFAULT NULL,
  `kode_rekening` int(11) DEFAULT NULL,
  `uraian` text,
  `qty` int(5) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `status_kajur` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `no_fasilitas` int(11) NOT NULL,
  `jenis_peralatan` varchar(60) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL,
  `anggaran` float(12,2) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatika', '2020-07-15 14:58:08', '2020-07-18 01:09:50'),
(2, 'Ilmu Politik', '2020-07-18 01:09:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_anggaran`
--

CREATE TABLE `tb_mata_anggaran` (
  `kode_rekening` int(25) NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `nama_rekening` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_perencanaan`
--

CREATE TABLE `tb_perencanaan` (
  `no` bigint(20) NOT NULL,
  `no_sarmut` varchar(60) DEFAULT NULL,
  `kode_rekening` varchar(50) DEFAULT NULL,
  `no_detail_kegiatan` varchar(60) DEFAULT NULL,
  `kegiatan` varchar(255) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `januari` varchar(255) DEFAULT NULL,
  `februari` varchar(255) DEFAULT NULL,
  `maret` varchar(255) DEFAULT NULL,
  `april` varchar(255) DEFAULT NULL,
  `mei` varchar(255) DEFAULT NULL,
  `juni` varchar(255) DEFAULT NULL,
  `juli` varchar(255) DEFAULT NULL,
  `agustus` varchar(255) DEFAULT NULL,
  `september` varchar(255) DEFAULT NULL,
  `oktober` varchar(255) DEFAULT NULL,
  `november` varchar(255) DEFAULT NULL,
  `desember` varchar(255) DEFAULT NULL,
  `jumlah` float(12,2) DEFAULT NULL,
  `status_kajur` varchar(25) DEFAULT NULL,
  `level_kegiatan` varchar(25) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `user_level` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rddkf`
--

CREATE TABLE `tb_rddkf` (
  `kode_rddkf` bigint(20) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `rddkf` text,
  `jurusan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sasaran_mutu`
--

CREATE TABLE `tb_sasaran_mutu` (
  `no_sarmut` int(11) NOT NULL,
  `sarmut` varchar(255) DEFAULT NULL,
  `indikator` varchar(255) DEFAULT NULL,
  `turunan` varchar(10) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `target` int(11) DEFAULT NULL,
  `akar_masalah` text,
  `tkp` varchar(255) DEFAULT NULL,
  `d_akhir_tahun` int(11) DEFAULT NULL,
  `tw1` int(11) DEFAULT NULL,
  `tw2` int(11) DEFAULT NULL,
  `tw3` int(11) DEFAULT NULL,
  `tw4` int(11) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `level` int(4) DEFAULT NULL,
  `password` varchar(190) NOT NULL COMMENT 'Hashed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `jurusan_id`, `nama`, `level`, `password`) VALUES
(2, 'administrator', 1, 'Admin', 5, '$2y$10$UDzEJzSNsTrIxahVLicaruDP2.YWkspoXDCsgEFLaVCSEGcknQld6'),
(5, 'kajur', 1, 'KA Jurusan', 3, '$2y$10$TwUDO3iTyfCIFvXxMRRpiOpkPVxVPsp3.Z/gxGMLM63ZIs8mySjBq'),
(6, 'sekertaris', 1, 'Sekertaris', 1, '$2y$10$Xr/wHdsCSZQ3YnMW2EovhO9ntzexwgvZAP81bXXfd7vvACl.agc4a'),
(7, 'lab', 1, 'Laboratorium', 2, '$2y$10$mj86.BLKCzzKsPektAILluSPFMG5qDJyayVPIMdwxi5ayuHTMSUXG'),
(8, 'kabagtu', 1, 'KA BAG TU', 4, '$2y$10$o/jbXDed2qo2ovZjQtiWoOSV/NFn1BlO7t5VPwNP6sS7YADM62oKi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_kegiatan`
--
ALTER TABLE `tb_detail_kegiatan`
  ADD PRIMARY KEY (`no_detail`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`no_fasilitas`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mata_anggaran`
--
ALTER TABLE `tb_mata_anggaran`
  ADD PRIMARY KEY (`kode_rekening`);

--
-- Indexes for table `tb_perencanaan`
--
ALTER TABLE `tb_perencanaan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_rddkf`
--
ALTER TABLE `tb_rddkf`
  ADD PRIMARY KEY (`kode_rddkf`);

--
-- Indexes for table `tb_sasaran_mutu`
--
ALTER TABLE `tb_sasaran_mutu`
  ADD PRIMARY KEY (`no_sarmut`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_kegiatan`
--
ALTER TABLE `tb_detail_kegiatan`
  MODIFY `no_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `no_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_perencanaan`
--
ALTER TABLE `tb_perencanaan`
  MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rddkf`
--
ALTER TABLE `tb_rddkf`
  MODIFY `kode_rddkf` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sasaran_mutu`
--
ALTER TABLE `tb_sasaran_mutu`
  MODIFY `no_sarmut` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
