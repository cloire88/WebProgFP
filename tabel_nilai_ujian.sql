-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Dec 17, 2024 at 01:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tabel_nilai_ujian`
--

CREATE TABLE `tabel_nilai_ujian` (
  `id` int(11) NOT NULL,
  `no_ujian` int(11) NOT NULL,
  `pelajaran` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nilai_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_nilai_ujian`
--

INSERT INTO `tabel_nilai_ujian` (`id`, `no_ujian`, `pelajaran`, `jurusan`, `nilai_ujian`) VALUES
(1, 0, 'Matematika', 'IPA', 80),
(2, 0, 'Bahasa Indonesia', 'IPA', 80),
(3, 0, 'Matematika', 'IPA', 80),
(4, 0, 'Bahasa Indonesia', 'IPA', 80),
(5, 0, 'Matematika', 'IPA', 80),
(6, 0, 'Bahasa Indonesia', 'IPA', 80),
(7, 0, 'Matematika', 'IPA', 30),
(8, 0, 'Bahasa Indonesia', 'IPA', 40),
(9, 0, 'Matematika', 'IPA', 80),
(10, 0, 'Bahasa Indonesia', 'IPA', 80),
(11, 0, 'Matematika', 'IPA', 50),
(12, 0, 'Bahasa Indonesia', 'IPA', 50),
(13, 0, 'Matematika', 'IPA', 80),
(14, 0, 'Bahasa Indonesia', 'IPA', 80),
(15, 0, 'Matematika', 'IPA', 80),
(16, 0, 'Bahasa Indonesia', 'IPA', 80),
(17, 0, 'Matematika', 'IPA', 30),
(18, 0, 'Bahasa Indonesia', 'IPA', 30),
(19, 0, 'Matematika', 'IPA', 75),
(20, 0, 'Bahasa Indonesia', 'IPA', 75),
(21, 0, 'Matematika', 'IPA', 80),
(22, 0, 'Bahasa Indonesia', 'IPA', 80),
(23, 0, 'Matematika', 'IPA', 10),
(24, 0, 'Bahasa Indonesia', 'IPA', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_nilai_ujian`
--
ALTER TABLE `tabel_nilai_ujian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_nilai_ujian`
--
ALTER TABLE `tabel_nilai_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
