-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 03:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kejati`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(33) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'ADMIN', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@gmail.com', 'admin'),
(8, 'INTELIJEN', '1fd57eb9f76e7fa59b3ee8a6c585af39', 'INTELIJEN', 'INTELIJEN', 'user'),
(9, 'BIN', '35d3245a21b0942070419ef6602d239e', 'BIN', 'BIN', 'user'),
(10, 'PIDUM', '818767fe3d423ffeac7b8c03af827f3e', 'PIDUM', 'PIDUM@gmail.com', 'user'),
(11, 'PIDSUS', '2b2ce421550af09536a39f3fa3e4e42d', 'PIDSUS', 'PIDSUS', 'user'),
(12, 'DATUN', '3c53504b053cad21ad2bec325482a3d1', 'DATUN', 'DATUN', 'user'),
(13, 'WAS', '004a804dd21b4e41a51ec36072af2897', 'WAS', 'WAS', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE IF NOT EXISTS `bidang` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_user` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id`, `nama`, `keterangan`, `id_user`) VALUES
(1, 'INTELIJEN', 'intelijen', 8),
(2, 'BIN', 'pembinaan', 9),
(3, 'PIDUM', 'Pidana Umun', 10),
(4, 'PIDSUS', 'Pidana Khusus', 11),
(5, 'DATUN', 'Perdata Dan Tata Usaha Negara', 12),
(6, 'WAS', 'Pegawasan', 13);

-- --------------------------------------------------------

--
-- Table structure for table `kejari`
--

CREATE TABLE IF NOT EXISTS `kejari` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kejari`
--

INSERT INTO `kejari` (`id`, `nama`, `alamat`) VALUES
(1, 'BANDA ACEH', 'BANDA ACEH'),
(2, 'SABANG', 'SABANG'),
(3, 'SIGLI', 'SIGLI'),
(4, 'LHOKSEUMAWE', 'LHOKSEUMAWE'),
(5, 'LANGSA', 'LANGSA'),
(6, 'TAKENGON', 'TAKENGON'),
(7, 'MEULABOH', 'MEULABOH'),
(8, 'TAPAKTUAN', 'TAPAKTUAN'),
(9, 'KUTA CANE', 'KUTA CANE'),
(10, 'BIREUN', 'BIREUN'),
(11, 'LHOKSUKON', 'LHOKSUKON'),
(12, 'IDI', 'IDI'),
(13, 'KUALA SIMPANG', 'KUALA SIMPANG'),
(14, 'SINABANG', 'SINABANG'),
(15, 'CALANG', 'CALANG'),
(16, 'SINGKIL', 'SINGKIL'),
(17, 'BLANG KEREJEN', 'BLANG KEREJEN'),
(18, 'JANTHO', 'JANTHO'),
(19, 'SUKAMAKMUE', 'SUKAMAKMUE'),
(20, 'BLANG PIDIE', 'BLANG PIDIE'),
(21, 'SP.TIGA REDELONG', 'SP.TIGA REDELONG'),
(22, 'MEUREUDU', 'MEUREUDU');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `tanggal` date DEFAULT NULL,
  `periode` varchar(30) NOT NULL,
  `rutinitas` float DEFAULT NULL,
  `kualitas` float DEFAULT NULL,
  `bentuk_formal` float DEFAULT NULL,
  `kecepatan` float DEFAULT NULL,
  `akurasi` float NOT NULL,
  `skk` float NOT NULL,
  `perdata` float NOT NULL,
  `tun` float NOT NULL,
  `pph` float NOT NULL,
  `rata_rata` float DEFAULT NULL,
  `id_kejari` int(3) DEFAULT NULL,
  `id_bidang` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`tanggal`, `periode`, `rutinitas`, `kualitas`, `bentuk_formal`, `kecepatan`, `akurasi`, `skk`, `perdata`, `tun`, `pph`, `rata_rata`, `id_kejari`, `id_bidang`) VALUES
('2015-06-03', '6-2015', 56, 67, 67, 67, 0, 0, 0, 0, 0, 64.25, 1, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 4),
('2015-06-03', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 4),
('2015-06-04', '6-2015', 34, 45, 55, 66, 0, 0, 0, 0, 0, 50, 1, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 2),
('2015-06-04', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 2),
('2015-06-04', '6-2015', NULL, NULL, NULL, 45, 45, 54, 45, 45, 45, 46.5, 1, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 55, 55, 55, 55, 55, 45, 53.3333, 2, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 3, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 4, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 5, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 6, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 7, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 8, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 9, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 10, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 11, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 12, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 13, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 14, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 15, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 16, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 17, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 18, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 19, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 20, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 21, 5),
('2015-06-04', '6-2015', NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 22, 5),
('2015-06-12', '6-2015', 30, 30, 30, 40, 0, 0, 0, 0, 0, 32.5, 1, 1),
('2015-06-12', '6-2015', 90, 90, 90, 90, 0, 0, 0, 0, 0, 90, 2, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 1),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 1),
('2015-06-12', '6-2015', 1, 1, 2, 2, 0, 0, 0, 0, 0, 1.5, 1, 6),
('2015-06-12', '6-2015', 90, 90, 90, 90, 0, 0, 0, 0, 0, 90, 2, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 6),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 6),
('2015-06-12', '6-2015', 30, 30, 30, 40, 0, 0, 0, 0, 0, 32.5, 1, 3),
('2015-06-12', '6-2015', 90, 30, 30, 40, 0, 0, 0, 0, 0, 47.5, 2, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 9, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 11, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 18, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 19, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 21, 3),
('2015-06-12', '6-2015', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rekapitulasi`
--

CREATE TABLE IF NOT EXISTS `rekapitulasi` (
  `id_rekap` int(3) NOT NULL,
  `id_kejari` int(3) NOT NULL,
  `periode` varchar(30) NOT NULL,
  `INTELIJEN` float NOT NULL,
  `BIN` float NOT NULL,
  `PIDSUS` float NOT NULL,
  `PIDUM` float NOT NULL,
  `DATUN` float NOT NULL,
  `WAS` float NOT NULL,
  `jumlah` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekapitulasi`
--

INSERT INTO `rekapitulasi` (`id_rekap`, `id_kejari`, `periode`, `INTELIJEN`, `BIN`, `PIDSUS`, `PIDUM`, `DATUN`, `WAS`, `jumlah`) VALUES
(1, 1, '6-2015', 32.5, 50, 64.25, 32.5, 46.5, 1.5, 227.25),
(2, 2, '6-2015', 90, 0, 0, 47.5, 53.3333, 90, 280.833),
(3, 3, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(4, 4, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(5, 5, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(6, 6, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(7, 7, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(8, 8, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(9, 9, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(10, 10, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(11, 11, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(12, 12, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(13, 13, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(14, 14, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(15, 15, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(16, 16, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(17, 17, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(18, 18, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(19, 19, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(20, 20, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(21, 21, '6-2015', 0, 0, 0, 0, 0, 0, 0),
(22, 22, '6-2015', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kejari`
--
ALTER TABLE `kejari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `id_kejari` (`id_kejari`,`id_bidang`), ADD KEY `id_bidang` (`id_bidang`);

--
-- Indexes for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  ADD PRIMARY KEY (`id_rekap`), ADD KEY `id_kejari` (`id_kejari`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kejari`
--
ALTER TABLE `kejari`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rekapitulasi`
--
ALTER TABLE `rekapitulasi`
  MODIFY `id_rekap` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidang`
--
ALTER TABLE `bidang`
ADD CONSTRAINT `bidang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `admin` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id`),
ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_kejari`) REFERENCES `kejari` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
