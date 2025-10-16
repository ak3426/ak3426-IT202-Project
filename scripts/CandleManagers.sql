--Arghavan  Katebi-10/15/2025-IT202:Internet Applications-Section003-Phase 2 Assignment/ak3426@njit.edu--
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 03, 2025 at 05:00 AM
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
-- Table structure for table `CandleManagers`
--

CREATE TABLE IF NOT EXISTS `CandleManagers` (
`CandleManagerID` int(11) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `pronouns` varchar(60) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `CandleManagers`
--

INSERT INTO `CandleManagers` (`CandleManagerID`, `emailAddress`, `password`, `pronouns`, `firstName`, `lastName`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1, 'Ava@candleshop.com', '3cdfa761361762ddedc01ea1428db10a92e327325f490f7f34f1b1b91d994f22', 'She/Her', 'Ava', 'Rich', '2025-10-01 15:49:43', '2025-10-01 15:49:43'),
(2, 'Thomas', '579ea6392c7bcc34f37876f18e78be2da7104e02315da3a3ef14abd14190e3b7', 'He/His', 'Thomas', 'Parker', '2025-10-01 15:49:44', '2025-10-01 15:49:44'),
(3, 'Jackie', '21327320cf88806a14c0268710e141a528af8fb64872fbe983a6438f9d1c1799', 'She/Her', 'Jackie', 'Cox', '2025-10-01 15:49:45', '2025-10-01 15:49:45'),
(4, 'Fred', 'a215e3e38b4991131c39201650650af4a5211459df9e5d0a5eddfa2718ca350b', 'He/His', 'Fred', 'Mack', '2025-10-01 15:49:48', '2025-10-01 15:49:48'),
(6, 'Thomas@candleshop.com', '579ea6392c7bcc34f37876f18e78be2da7104e02315da3a3ef14abd14190e3b7', 'He/His', 'Thomas', 'Parker', '2025-10-01 16:52:01', '2025-10-01 16:52:01'),
(7, 'Jackie@candleshop.com', '21327320cf88806a14c0268710e141a528af8fb64872fbe983a6438f9d1c1799', 'She/Her', 'Jackie', 'Cox', '2025-10-01 16:52:13', '2025-10-01 16:52:13'),
(8, 'Fred@candleshop.com', 'a215e3e38b4991131c39201650650af4a5211459df9e5d0a5eddfa2718ca350b', 'He/His', 'Fred', 'Mack', '2025-10-01 16:52:25', '2025-10-01 16:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CandleManagers`
--
ALTER TABLE `CandleManagers`
 ADD PRIMARY KEY (`CandleManagerID`), ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CandleManagers`
--
ALTER TABLE `CandleManagers`
MODIFY `CandleManagerID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
