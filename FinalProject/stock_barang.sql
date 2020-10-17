-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_brg` int(7) NOT NULL,
  `nama_brg` varchar(30) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `jumlah_brg` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_barang`
--

INSERT INTO `stock_barang` (`id_brg`, `nama_brg`, `ukuran`, `jumlah_brg`) VALUES
(1, 'Rucika Standard AW', '10\"', '400'),
(3, 'Rucika Standard Aw', '8\"', '900');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_barang`
--
ALTER TABLE `stock_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock_barang`
--
ALTER TABLE `stock_barang`
  MODIFY `id_brg` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
