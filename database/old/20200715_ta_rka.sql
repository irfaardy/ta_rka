-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 05:16 PM
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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kegiatan`
--

CREATE TABLE `tb_detail_kegiatan` (
  `no_detail` int(11) NOT NULL,
  `no` varchar(20) DEFAULT NULL,
  `jenis_peralatan` varchar(255) DEFAULT NULL,
  `banyak` int(11) DEFAULT NULL,
  `d_anggaran` float(12,2) DEFAULT NULL,
  `total_d_anggaran` float(12,2) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_anggaran`
--

CREATE TABLE `tb_mata_anggaran` (
  `kode_rekening` varchar(25) NOT NULL,
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
  `kode_rekening` varchar(60) DEFAULT NULL,
  `uraian` text,
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
  `qty` varchar(11) DEFAULT NULL,
  `anggaran` float(12,2) DEFAULT NULL,
  `jumlah` float(12,2) DEFAULT NULL,
  `status_kajur` varchar(25) DEFAULT NULL,
  `level_kegiatan` varchar(25) DEFAULT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) DEFAULT NULL
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
(2, 'administrator', NULL, 'Admin', 5, '$2y$10$zsIJfpeT9PqcgZdz3aP1QeXxUyWen2wUi1p/lK73XYDJ4seHR6Kwa'),
(5, 'kajur', NULL, 'KA Jurusan', 3, '$2y$10$8OR4u3QLjNSfQxixfGNo8OtquWFxF86Av7yAkKbIa3ix7dlPz0v1.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_detail_kegiatan`
--
ALTER TABLE `tb_detail_kegiatan`
  ADD PRIMARY KEY (`no_detail`);

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
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_perencanaan`
--
ALTER TABLE `tb_perencanaan`
  MODIFY `no` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_sasaran_mutu`
--
ALTER TABLE `tb_sasaran_mutu`
  MODIFY `no_sarmut` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
