-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Dec 17, 2024 at 01:19 AM
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
-- Table structure for table `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_guru`
--

INSERT INTO `tabel_guru` (`id`, `nip`, `nama`, `alamat`, `email`, `jabatan`, `foto`) VALUES
(4, '729472942949272482', 'Bambang Ketupat Musang', 'ada', 'ada', 'ada', '6760b5cd9f50d_random'),
(5, '100978239001832488', 'Priscilia Yuliani', 'ada', 'ada', 'ada', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_guru`
--
ALTER TABLE `tabel_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
