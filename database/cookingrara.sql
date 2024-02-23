-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 05:38 PM
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
-- Database: `cookingrara`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(13) NOT NULL,
  `Nama_menu` varchar(100) NOT NULL,
  `deskripsi_menu` text NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `waktu_memasak` varchar(50) NOT NULL,
  `tingkat_kesulitan` varchar(100) NOT NULL,
  `porsi` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `Nama_menu`, `deskripsi_menu`, `foto`, `waktu_memasak`, `tingkat_kesulitan`, `porsi`, `kategori`) VALUES
(10, 'Mie Goreng Ndeso', 'Mie Goreng yang makkknyusss', '', '15 Menit', 'sedang', 5, 'Resep Mie Terfavorit'),
(11, 'Mie Laksa Singapore', 'Mie laksa lezat', '', '15 menit', 'sedang', 2, 'Resep Mie Terfavorit'),
(12, 'Mie Gomak Khas Medan', 'Makanan Khas Medan yang gak kalah maknyuss abis', '', '15 Menit', 'mudah', 5, 'Mie Khas Medan');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `saran_id` int(11) NOT NULL,
  `Nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nomor_Handphone` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`saran_id`, `Nama`, `Email`, `Nomor_Handphone`, `Pesan`, `Date`) VALUES
(33, 'Aulia Azahra', 'aulia234@gmail.com', '083199560302', 'sering update ya', '2024-01-20 10:13:28'),
(34, 'rahmah dewi', 'rahmah123@gmail.com', '982134523314', 'secara tampilan sudah menarik, tapi harus sering di upgrade ', '2024-01-24 09:01:03'),
(36, 'rawi', 'aulia@gmail.com', '082166543467', 'baguss', '2024-02-20 07:37:55'),
(37, 'fahri', 'fahri456@gmail.com', '082144678898', 'tampilan di update lagi', '2024-02-23 16:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'auliaazahra898@gmail.com', 'e0dd669bdfe0821b8083fe92b0689426', '1', '2024-02-23 22:59:18'),
(2, 'rara', '202cb962ac59075b964b07152d234b70', 'auliaazahra877@gmail.com', 'a5712f2f2ac4b9708c5a7d0c0fe294eb', '1', '2024-02-23 23:28:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`saran_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `saran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
