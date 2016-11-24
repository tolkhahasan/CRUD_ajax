-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 05:29 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cendana`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki Laki'),
(2, 'Perempuan'),
(3, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(2, 'Nganjuk'),
(3, 'Blitar'),
(4, 'Tulungagung'),
(5, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kelamin` int(1) DEFAULT NULL,
  `id_posisi` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `no_telp`, `alamat`, `kelamin`, `id_posisi`, `status`) VALUES
('1', 'thol''kha hassani', '081233072121', '1', 1, '2', 1),
('4', 'dody ahmad', '083854520015', '2', 1, '2', 1),
('5', 'choirul ihsan', '085749535400', '3', 1, '2', 1),
('7', 'ahmad chaidil auwfar', '08984119934', '4', 1, '1', 1),
('8', 'rizal ferdian', '087777284179', '5', 1, '3', 1),
('9', 'redika', '083834657395', '1', 1, '1', 1),
('10', 'antony febriansyah', '082199568540', '2', 1, '1', 1),
('11', 'alhafizhasrofil', '087859615271', '3', 1, '1', 1),
('12', 'faiq fajrullah', '085736333728', '1', 1, '2', 1),
('13', 'paini', '081111111', '2', 2, '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama`) VALUES
('1', 'it'),
('2', 'hrd'),
('3', 'keuangan'),
('4', 'produk'),
('5', 'marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelamin`
--
ALTER TABLE `kelamin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
