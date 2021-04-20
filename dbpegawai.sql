-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 02:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id`, `nama`) VALUES
(1, 'HRD'),
(2, 'Keuangan'),
(3, 'Operasional'),
(4, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff','') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `fullname`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Ahmed Rayhan Primadedas', 'arayhan', '46f94c8de14fb36680850768ff1b7f2a', 'admin', NULL),
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL),
(3, 'manager', 'manager', '1d0258c2440a8d19e716292b231e3190', 'manager', NULL),
(4, 'staff', 'staff', '1253208465b1efa876f982d8a9e73eef', 'staff', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` enum('islam','kristen katolik','kristen protestan','hindu','buddha','kong hu chu') NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nip`, `nama`, `email`, `agama`, `id_divisi`, `foto`) VALUES
(11, '01102', 'Ahmed Rayhan Primadedas', 'rayhanprima99@gmail.com', 'islam', 1, NULL),
(12, '11102', 'Budi Santoso', 'budi@gmail.com', 'kristen katolik', 4, NULL),
(13, '21102', 'Sidiq Permana Putra', 'sidiq@gmail.com', 'islam', 3, NULL),
(14, '31102', 'Renaldi Alfi Syahar', 'alfisyahar@gmail.com', 'kristen katolik', 2, NULL),
(15, '41102', 'Joko Pardede', 'joko@gmail.com', 'hindu', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
