-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 07:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_2201010548`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku_2201010548`
--

CREATE TABLE `tb_buku_2201010548` (
  `ID_buku_2201010548` char(10) NOT NULL,
  `Judul_buku_2201010548` varchar(100) DEFAULT NULL,
  `Kategori_buku_2201010548` varchar(50) DEFAULT NULL,
  `Penerbit_2201010548` varchar(100) DEFAULT NULL,
  `Penulis_2201010548` varchar(100) DEFAULT NULL,
  `Stok_2201010548` int(11) DEFAULT NULL,
  `Harga_2201010548` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku_2201010548`
--

INSERT INTO `tb_buku_2201010548` (`ID_buku_2201010548`, `Judul_buku_2201010548`, `Kategori_buku_2201010548`, `Penerbit_2201010548`, `Penulis_2201010548`, `Stok_2201010548`, `Harga_2201010548`) VALUES
('1', 'Bakso Babi', 'Fiksi', 'SIDU', 'Bagas', 50, 1000000),
('2', 'Es Krim', 'Fiksi', 'SIDU', 'Bagas', 5, 5000),
('3', 'Cara Menjadi Kaya', 'Fiksi', 'SIDU', 'Bagas', 1, 99999),
('4', 'Tutorial Hacker', 'Komputer', 'SIDU', 'Bagas', 55, 45000),
('5', 'Mobile Legend 101', 'Hobi', 'SIDU', 'Bagas', 12, 10000),
('6', 'Cara Menang Slot 100%', 'Hobi', 'SIDU', 'Bagas', 77, 777),
('7', 'Panduan PHP Untuk Pemula', 'Komputer', 'SIDU', 'Bagas', 10, 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku_2201010548`
--
ALTER TABLE `tb_buku_2201010548`
  ADD PRIMARY KEY (`ID_buku_2201010548`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
