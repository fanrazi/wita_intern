-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 12:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wita_new_intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nama_d` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama_d`, `file`) VALUES
(1, 'visa jepang', 'visa_jepang.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `domestik`
--

CREATE TABLE `domestik` (
  `id` int(11) NOT NULL,
  `nama_dom` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domestik`
--

INSERT INTO `domestik` (`id`, `nama_dom`) VALUES
(1, 'Bandung'),
(2, 'Bali'),
(3, 'Jakarta'),
(4, 'Jawa Tengah Other City'),
(5, 'Jawa Timur Other City'),
(6, 'Kalimantan'),
(7, 'Komodo Island'),
(8, 'Surabaya'),
(9, 'Lombok'),
(10, 'Bangka Belitung'),
(11, 'Sulawesi'),
(12, 'Jogja'),
(13, 'Sumba'),
(14, 'Sumatera'),
(15, 'Puncak'),
(16, 'Jawa Barat'),
(17, 'Semarang & Solo'),
(18, 'Batam Bintan');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_dom`
--

CREATE TABLE `hotel_dom` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `nama_h` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_dom`
--

INSERT INTO `hotel_dom` (`id`, `id_city`, `nama_h`, `file`) VALUES
(5, 2, 'Pop', '3Hr Paket Surabaya Madakaripura Bromo.pdf'),
(6, 1, 'Pop', '3Hr Paket Surabaya Madakaripura Bromo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_int`
--

CREATE TABLE `hotel_int` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `nama_h` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_int`
--

INSERT INTO `hotel_int` (`id`, `id_city`, `nama_h`, `file`) VALUES
(1, 36, 'Pop', '3Hr Paket Surabaya Madakaripura Bromo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `internasional`
--

CREATE TABLE `internasional` (
  `id` int(11) NOT NULL,
  `nama_int` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internasional`
--

INSERT INTO `internasional` (`id`, `nama_int`) VALUES
(1, 'Costa Cruise'),
(2, 'Honeymoon Package'),
(3, 'MSC/NCL Cruise'),
(4, 'Royal Caribbean'),
(5, 'Philippine'),
(6, 'Maldives Srilanka'),
(7, 'Hong Kong SQ'),
(8, 'Christmas New Year'),
(9, 'Macau'),
(10, 'New Zealand'),
(11, 'Dubai'),
(12, 'Turkey'),
(13, 'Nepal'),
(14, 'WIFI ROUTER'),
(15, 'Genting Dream Cruise'),
(16, 'Visa'),
(17, 'Hong Kong Land Tour'),
(18, 'Cambodia Siem Reap'),
(19, 'Europe'),
(20, 'Australia'),
(21, 'Japan'),
(22, 'Vietnam'),
(23, 'India'),
(24, 'Singapore'),
(25, 'Disney Cruise'),
(26, 'Hong Kong CX'),
(27, 'Hong Kong GA'),
(28, 'Asuransi'),
(29, 'Malaysia'),
(30, 'Lebaran'),
(31, 'F1'),
(32, 'Hong Kong Hotel'),
(33, 'Hong Kong Optional Tour'),
(34, 'Thailand'),
(35, 'China'),
(36, 'America'),
(37, 'Taiwan'),
(38, 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `paket_dom`
--

CREATE TABLE `paket_dom` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_dom`
--

INSERT INTO `paket_dom` (`id`, `id_city`, `nama_p`, `file`) VALUES
(1, 2, '3Hr Paket Surabaya Madakaripura Bromo', '3Hr Paket Surabaya Madakaripura Bromo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `paket_int`
--

CREATE TABLE `paket_int` (
  `id` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `nama_t` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `nama_t`, `file`) VALUES
(1, 'tiket agus', 'Invoice-57.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'WTTUR', 'admin'),
(2, 'IT', 'witait', 'it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domestik`
--
ALTER TABLE `domestik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_dom`
--
ALTER TABLE `hotel_dom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_int`
--
ALTER TABLE `hotel_int`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internasional`
--
ALTER TABLE `internasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_dom`
--
ALTER TABLE `paket_dom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_int`
--
ALTER TABLE `paket_int`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `domestik`
--
ALTER TABLE `domestik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hotel_dom`
--
ALTER TABLE `hotel_dom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hotel_int`
--
ALTER TABLE `hotel_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internasional`
--
ALTER TABLE `internasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `paket_dom`
--
ALTER TABLE `paket_dom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `paket_int`
--
ALTER TABLE `paket_int`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
