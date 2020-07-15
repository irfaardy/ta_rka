-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2020 at 10:21 PM
-- Server version: 10.1.45-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshanstu_rka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `level` int(4) DEFAULT NULL,
  `password` varchar(190) NOT NULL COMMENT 'Hashed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `nama`, `level`, `password`) VALUES
(1, 'administrator', 'Administrator', 5, '$2y$10$3UdycJoCQ1ne7XjjyPx/t.OfW9oqDrEenln3p/sl7gxTSfN9G5rry'),
(2, 'kajur', 'kajur', 3, '$2y$10$NLcdpsY0ekLW8uG5XSg4decGsx2APUbSfNz4C9g5RUff5Oa13TKU6'),
(3, 'user_lab', 'Lab user', 2, '$2y$10$EYUvx88sLaIcEchTrA0ncOusQonBriuIS67BbyBO8DCmFc0RF41dO'),
(4, 'user_tu', 'Rali', 4, '$2y$10$9UwgIxV0tRahV0I7xUcvqeCrB5DSYxQ2DXJ7M4povSUHi1lAJ4zEe'),
(5, 'sekertaris', 'Richard', 1, '$2y$10$FFSp4xujLTMIQBe6jzqFiuK9fGC9iypv0I/YTiUNr08MGIpqu5YW.');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
