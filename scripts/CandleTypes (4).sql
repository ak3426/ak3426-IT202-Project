-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--//Arghavan  Katebi-12/03/2025-IT202:Internet Applications-Section003-Phase 5 Assignment/ak3426@njit.edu//
require_once('candle.php');
-- Host: sql1.njit.edu
-- Generation Time: Dec 05, 2025 at 01:04 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ak3426`
--

-- --------------------------------------------------------

--
-- Table structure for table `CandleTypes`
--

CREATE TABLE IF NOT EXISTS `CandleTypes` (
  `CandleTypeID` int(11) NOT NULL,
  `CandleTypeCode` varchar(255) NOT NULL,
  `CandleTypeName` varchar(255) NOT NULL,
  `ShelfNumber` varchar(60) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CandleTypes`
--

INSERT INTO `CandleTypes` (`CandleTypeID`, `CandleTypeCode`, `CandleTypeName`, `ShelfNumber`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(100, 'SCNT', 'Scented', 'S1', '2025-10-15 00:22:18', '2025-12-04 23:54:29'),
(102, 'EXM', 'Example', 'S1', '2025-12-05 00:51:59', '2025-12-05 00:51:59'),
(200, 'LED', 'LED', 'S2', '2025-10-15 00:23:56', '2025-10-15 00:23:56'),
(300, 'DECO', 'Decorative', 'S3', '2025-10-15 00:25:44', '2025-10-15 00:25:44'),
(400, 'HOL', 'Holiday', 'S4', '2025-10-31 03:41:27', '2025-10-31 03:41:27'),
(500, 'WED', 'Wedding', 'S5', '2025-10-31 14:50:34', '2025-10-31 14:50:34'),
(600, 'PAR', 'Party', 'S6', '2025-11-22 01:04:58', '2025-11-22 01:04:58'),
(700, 'ANM', 'Animals', 'S7', '2025-11-22 01:24:05', '2025-12-02 05:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CandleTypes`
--
ALTER TABLE `CandleTypes`
 ADD PRIMARY KEY (`CandleTypeID`), ADD UNIQUE KEY `CandleTypeCode` (`CandleTypeCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
