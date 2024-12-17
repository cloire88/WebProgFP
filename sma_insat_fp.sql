-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2024 at 02:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma_insat_fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int NOT NULL,
  `foto` varchar(64) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jurusan` varchar(16) NOT NULL,
  `alamat` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `foto`, `nis`, `nama`, `jurusan`, `alamat`) VALUES
(1, '67597629a5489_download (1).jpeg', 'NS501', 'Adi', 'IPA', 'Jl. Tikus 1'),
(2, '6759762e39d5c_download (1).jpeg', 'NS501', 'Adi', 'IPA', 'Jl. Tikus 1'),
(3, '67597643d9998_download (1).jpeg', 'NS501', 'Adi', 'IPA', 'Jl. Tikus 1'),
(4, '6759c97f8de01_download.jpeg', 'NS501', 'Adi', 'IPA', 'Jl. Tikus 2'),
(6, '6759cb50ddcd5_download.png', 'NS503', 'Dia', 'IPA', 'Jl. Ben 2'),
(7, '', 'NS505', 'Onizuka', 'IPA', 'Jl. Takeru 12'),
(9, '675c794b59c28_2021-10-17.png', 'NS503', 'Adi', 'IPS', 'Jl. Muda Mudi 32'),
(10, '', 'NS500', 'Dona', 'IPA', 'Altruis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
