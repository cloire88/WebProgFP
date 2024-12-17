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
-- Table structure for table `tabel_ujian`
--

CREATE TABLE `tabel_ujian` (
  `no_ujian` char(7) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `nis` char(6) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_tertinggi` int(11) NOT NULL,
  `nilai_terendah` int(11) NOT NULL,
  `nilai_rata2` int(11) NOT NULL,
  `hasil_ujian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_ujian`
--

INSERT INTO `tabel_ujian` (`no_ujian`, `tgl_ujian`, `nis`, `jurusan`, `total_nilai`, `nilai_tertinggi`, `nilai_terendah`, `nilai_rata2`, `hasil_ujian`) VALUES
('UAS-001', '2024-12-04', '11112', 'IPA', 160, 80, 80, 80, 'LULUS'),
('UAS-002', '2024-12-15', '11112', 'IPA', 60, 30, 30, 30, 'GAGAL'),
('UAS-003', '2024-12-10', '11112', 'IPA', 150, 75, 75, 75, 'LULUS'),
('UAS-004', '2024-12-10', '11112', 'IPA', 160, 80, 80, 80, 'LULUS'),
('UAS-005', '2024-12-12', '11112', 'IPA', 50, 10, 40, 25, 'GAGAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_ujian`
--
ALTER TABLE `tabel_ujian`
  ADD PRIMARY KEY (`no_ujian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
