  -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 04:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `tabel_pelajaran`
--

CREATE TABLE `tabel_pelajaran` (
  `id` int(11) NOT NULL,
  `pelajaran` varchar(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_pelajaran`
--

INSERT INTO `tabel_pelajaran` (`id`, `pelajaran`, `jurusan`, `guru`, `created_at`) VALUES
(7, 'Sejarah', 'IPS', 'Budi Santoso', '2024-12-15 09:56:06'),
(8, 'Matematika', 'IPA', 'Dr. Andi Wirawan', '2024-12-15 11:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pelajaran`
--
ALTER TABLE `tabel_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pelajaran`
--
ALTER TABLE `tabel_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
