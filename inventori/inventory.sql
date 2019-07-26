-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 01:36 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `no` int(100) NOT NULL,
  `kode_barang` int(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`no`, `kode_barang`, `nama_barang`, `jenis_barang`) VALUES
(11, 12334, 'Benq', 'Proyektor'),
(12, 12335, 'Samsung', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `kode_barang` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `username`, `kode_barang`, `date`) VALUES
(1, '4817090385', 1, '2019-07-03 07:00:07'),
(2, '4817090385', 1, '2019-07-03 07:00:08'),
(3, '4817090385', 0, '2019-07-22 08:59:00'),
(4, '4817090385', 1445, '2019-07-22 08:59:07'),
(5, '4817090385', 1449, '2019-07-22 09:08:09'),
(6, '48170900', 1, '2019-07-25 12:42:13'),
(7, '4817090385', 1445, '2019-07-25 13:31:52'),
(8, '4817090385', 12334, '2019-07-25 13:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `kode_barang` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `username`, `kode_barang`, `date`) VALUES
(14, '4817090385', 1445, '2019-07-25 13:31:52'),
(15, '4817090385', 12334, '2019-07-25 13:48:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `prodi`, `email`, `level`) VALUES
(4, '4817090385', '123456', 'Teknik informatika', 'yamin28@gmail.com', 'pengguna'),
(5, 'admin', 'admin', NULL, NULL, 'admin'),
(6, '4817090331', '123456', 'Teknik informatika', 'test@gmail.com', 'pengguna'),
(7, 'hata', 'hata123', 'Teknik informatika', 'test12@gmail.com', 'pengguna'),
(8, '48170900', '123456', 'Teknik Multimedia Digital', 'yaminz28@gmail.com', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`kode_barang`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
