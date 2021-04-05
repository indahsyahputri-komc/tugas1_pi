-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspi`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswatabel`
--

CREATE TABLE `mahasiswatabel` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswatabel`
--

INSERT INTO `mahasiswatabel` (`id`, `nama`, `jk`, `agama`, `alamat`, `tlp`) VALUES
(1, 'Amira Nurul Amanda', 'Perempuan', 'Islam', 'Perumahan Grand Sememe Residence', '081263056146'),
(2, 'Indah Syahputri', 'Perempuan', 'Islam', 'Binjai Kuala Gumit', '081265436789'),
(3, 'Nabilah Luthfiyah', 'Perempuan', 'Islam', 'Tembung Perumahan Gaktau', '089765478903'),
(4, 'Vanya Widya', 'Perempuan', 'Islam', 'Rantau Perapat', '081235678903'),
(5, 'Lolyfia Khoiriah Daulay', 'Perempuan', 'Islam', 'Kota Tua', '081345678901'),
(6, 'Arya Ahmad Diansyah', 'Laki-laki', 'Islam', 'Jalan Sepak Bola', '082156789234'),
(7, 'Hafizh Rafi Ahmad', 'Laki-laki', 'Islam', 'Jalan Titi Bobrok', '087865789022'),
(8, 'Fadel Majid Muhammad', 'Laki-laki', 'Islam', 'Jalan Madrasah', '086675892340');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswatabel`
--
ALTER TABLE `mahasiswatabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswatabel`
--
ALTER TABLE `mahasiswatabel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
