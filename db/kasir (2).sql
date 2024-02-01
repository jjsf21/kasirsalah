-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 06:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(4) NOT NULL,
  `nama_level` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'user'),
(2, 'petugas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pendataan_brg`
--

CREATE TABLE `pendataan_brg` (
  `id_data` int(4) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `jenis_data` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendataan_brg`
--

INSERT INTO `pendataan_brg` (`id_data`, `id_brg`, `jenis_data`, `tanggal`) VALUES
(3, 0, 'Kursi', '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_user`
--

CREATE TABLE `registrasi_user` (
  `id_registrasi_user` int(4) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi_user`
--

INSERT INTO `registrasi_user` (`id_registrasi_user`, `nama`, `harga`, `jumlah`) VALUES
(2, 'Leo', '100.000', '30'),
(3, 'Jes', '12000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stok_brg_klr`
--

CREATE TABLE `stok_brg_klr` (
  `id_stok_brg` int(4) NOT NULL,
  `nama_stok` varchar(1000) NOT NULL,
  `tgl_stok_klr` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stok_brg_msk`
--

CREATE TABLE `stok_brg_msk` (
  `id_stok_brg` int(4) NOT NULL,
  `nama_stok` varchar(1000) NOT NULL,
  `tgl_stok_msk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(4, 'admin', '12345', '1'),
(5, 'petugas', '12345', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pendataan_brg`
--
ALTER TABLE `pendataan_brg`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `registrasi_user`
--
ALTER TABLE `registrasi_user`
  ADD PRIMARY KEY (`id_registrasi_user`);

--
-- Indexes for table `stok_brg_klr`
--
ALTER TABLE `stok_brg_klr`
  ADD PRIMARY KEY (`id_stok_brg`);

--
-- Indexes for table `stok_brg_msk`
--
ALTER TABLE `stok_brg_msk`
  ADD PRIMARY KEY (`id_stok_brg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendataan_brg`
--
ALTER TABLE `pendataan_brg`
  MODIFY `id_data` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrasi_user`
--
ALTER TABLE `registrasi_user`
  MODIFY `id_registrasi_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stok_brg_klr`
--
ALTER TABLE `stok_brg_klr`
  MODIFY `id_stok_brg` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stok_brg_msk`
--
ALTER TABLE `stok_brg_msk`
  MODIFY `id_stok_brg` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
