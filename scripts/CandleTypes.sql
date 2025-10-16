-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 16, 2025 at 05:02 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8
--Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu--

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
(100, 'SCNT', 'Scented', 'S1', '2025-10-15 00:22:18', '2025-10-15 00:22:18'),
(200, 'LED', 'LED', 'S2', '2025-10-15 00:23:56', '2025-10-15 00:23:56'),
(300, 'DECO', 'Decorative', 'S3', '2025-10-15 00:25:44', '2025-10-15 00:25:44');

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
