-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 07:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean_poli1`
--

CREATE TABLE `antrean_poli1` (
  `id_poli` int(1) NOT NULL,
  `no_antrean` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrean_poli1`
--

INSERT INTO `antrean_poli1` (`id_poli`, `no_antrean`, `nik`, `nama_pasien`, `jeniskelamin`, `tgllahir`, `alamat`, `notelp`) VALUES
(1, 1, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 2, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 3, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 4, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 5, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 6, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 7, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 8, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 9, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957'),
(1, 10, '123', 'tri', 'L', '1996-06-07', 'depok', '081384389957');

-- --------------------------------------------------------

--
-- Table structure for table `antrean_poli2`
--

CREATE TABLE `antrean_poli2` (
  `id_poli` int(1) NOT NULL,
  `no_antrean` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrean_poli2`
--

INSERT INTO `antrean_poli2` (`id_poli`, `no_antrean`, `nik`, `nama_pasien`, `jeniskelamin`, `tgllahir`, `alamat`, `notelp`) VALUES
(2, 1, '111', 'agung', 'L', '2018-12-06', 'depok', '081384389957');

-- --------------------------------------------------------

--
-- Table structure for table `antrean_poli3`
--

CREATE TABLE `antrean_poli3` (
  `id_poli` int(1) NOT NULL,
  `no_antrean` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antrean_poli4`
--

CREATE TABLE `antrean_poli4` (
  `id_poli` int(1) NOT NULL,
  `no_antrean` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antrean_poli5`
--

CREATE TABLE `antrean_poli5` (
  `id_poli` int(1) NOT NULL,
  `no_antrean` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(1) NOT NULL,
  `nama_poli` varchar(10) NOT NULL,
  `deskripsi_poli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `deskripsi_poli`) VALUES
(1, 'Umum', 'Pilih Layanan Umum apabila anda mengalami sakit dengan gejala umum.'),
(2, 'Gigi', 'Pilih Layanan Gigi apabila mengalami sakit dengan gejala sakit gigi.'),
(3, 'Lansia', 'Pilih Layanan Lansia apabila anda pasien dengan usia >60th.'),
(4, 'Anak', 'Pilih Layanan Anak apabila anda pasien dengan usia 6 - 17th.'),
(5, 'KIA', 'Pilih Layanan KIA apabila mendaftar pasien ibu (hamil, menyusui, nifas).');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean_poli1`
--
ALTER TABLE `antrean_poli1`
  ADD PRIMARY KEY (`no_antrean`);

--
-- Indexes for table `antrean_poli2`
--
ALTER TABLE `antrean_poli2`
  ADD PRIMARY KEY (`no_antrean`);

--
-- Indexes for table `antrean_poli3`
--
ALTER TABLE `antrean_poli3`
  ADD PRIMARY KEY (`no_antrean`);

--
-- Indexes for table `antrean_poli4`
--
ALTER TABLE `antrean_poli4`
  ADD PRIMARY KEY (`no_antrean`);

--
-- Indexes for table `antrean_poli5`
--
ALTER TABLE `antrean_poli5`
  ADD PRIMARY KEY (`no_antrean`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrean_poli1`
--
ALTER TABLE `antrean_poli1`
  MODIFY `no_antrean` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `antrean_poli2`
--
ALTER TABLE `antrean_poli2`
  MODIFY `no_antrean` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `antrean_poli3`
--
ALTER TABLE `antrean_poli3`
  MODIFY `no_antrean` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `antrean_poli4`
--
ALTER TABLE `antrean_poli4`
  MODIFY `no_antrean` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `antrean_poli5`
--
ALTER TABLE `antrean_poli5`
  MODIFY `no_antrean` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
