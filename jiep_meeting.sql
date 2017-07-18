-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 03:34 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiep_meeting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(45) DEFAULT NULL,
  `password_admin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `anggota_divisi`
--

CREATE TABLE `anggota_divisi` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `divisi_anggota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `anggota_meeting`
--

CREATE TABLE `anggota_meeting` (
  `id_anggota_meeting` int(11) NOT NULL,
  `anggota_divisi_meeting` int(11) DEFAULT NULL,
  `meeting_anggota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(45) DEFAULT NULL,
  `username_divisi` varchar(45) DEFAULT NULL,
  `password_divisi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id_meeting` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `waktu_mulai` varchar(45) DEFAULT NULL,
  `waktu_selesai` varchar(45) DEFAULT NULL,
  `estimasi_peserta` varchar(45) DEFAULT NULL,
  `PIC` varchar(45) DEFAULT NULL,
  `divisi_meeting` int(11) DEFAULT NULL,
  `ruangan_meeting` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(45) DEFAULT NULL,
  `kapasitas_ruangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota_divisi`
--
ALTER TABLE `anggota_divisi`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `fk_divisi_anggota_idx` (`divisi_anggota`);

--
-- Indexes for table `anggota_meeting`
--
ALTER TABLE `anggota_meeting`
  ADD PRIMARY KEY (`id_anggota_meeting`),
  ADD KEY `fk_anggota_divisi_meeting_idx` (`anggota_divisi_meeting`),
  ADD KEY `fk_meeting_anggota_idx` (`meeting_anggota`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id_meeting`),
  ADD KEY `fk_divisi_meeting_idx` (`divisi_meeting`),
  ADD KEY `fk_ruangan_meeting_idx` (`ruangan_meeting`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_divisi`
--
ALTER TABLE `anggota_divisi`
  ADD CONSTRAINT `fk_divisi_anggota` FOREIGN KEY (`divisi_anggota`) REFERENCES `divisi` (`id_divisi`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `anggota_meeting`
--
ALTER TABLE `anggota_meeting`
  ADD CONSTRAINT `fk_anggota_divisi_meeting` FOREIGN KEY (`anggota_divisi_meeting`) REFERENCES `anggota_divisi` (`id_anggota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_meeting_anggota` FOREIGN KEY (`meeting_anggota`) REFERENCES `meeting` (`id_meeting`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `fk_divisi_meeting` FOREIGN KEY (`divisi_meeting`) REFERENCES `divisi` (`id_divisi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ruangan_meeting` FOREIGN KEY (`ruangan_meeting`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
