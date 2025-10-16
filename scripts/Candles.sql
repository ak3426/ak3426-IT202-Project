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
-- Table structure for table `Candles`
--

CREATE TABLE IF NOT EXISTS `Candles` (
  `CandleID` int(11) NOT NULL,
  `CandleCode` varchar(10) NOT NULL,
  `CandleName` varchar(255) NOT NULL,
  `CandleDescription` text NOT NULL,
  `CandleSize` varchar(60) NOT NULL,
  `CandleBurnTime` varchar(60) NOT NULL,
  `CandleColor` varchar(60) NOT NULL,
  `CandleTypeID` int(11) NOT NULL,
  `CandleWholesalePrice` decimal(10,2) NOT NULL,
  `CandleListPrice` decimal(10,2) NOT NULL,
  `DateTimeCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateTimeUpdated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Candles`
--

INSERT INTO `Candles` (`CandleID`, `CandleCode`, `CandleName`, `CandleDescription`, `CandleSize`, `CandleBurnTime`, `CandleColor`, `CandleTypeID`, `CandleWholesalePrice`, `CandleListPrice`, `DateTimeCreated`, `DateTimeUpdated`) VALUES
(1000, 'SAND', 'Vanilla Sandalwood', 'Top Notes - orange, lemon and bergamot\r\nMiddle Notes - amber, resin, vanilla bean and orchid', 'Medium', '48 hours', 'Black', 100, 19.20, 24.00, '2025-10-15 00:54:02', '2025-10-15 00:54:02'),
(1001, 'TBC', ' Weathered Tobacco', ' Embrace the rugged charm of Weathered Tobacco. This evocative scent combines the rustic notes of aged tobacco with subtle hints of weathered wood.', 'Large', ' 50 hours', 'Dark Brown', 100, 20.50, 28.95, '2025-10-16 05:24:18', '2025-10-16 05:24:18'),
(1002, 'CALI', ' California Beach House', 'Inspired by the sun-kissed shores of southern California, brings you premium scents, innovative designs, and affordable luxury.', 'Small', ' 40 hours', 'Blue', 100, 12.50, 18.50, '2025-10-16 05:13:56', '2025-10-16 05:13:56'),
(1003, 'ECS', ' Eucalyptus Spa', ' Fresh aroma of pure eucalyptus, creating a crisp and clean ambiance that refreshes the senses, invoking a feeling of serenity and natural vitality within your space.', 'Large', ' 72 hours', 'Green', 100, 18.50, 27.95, '2025-10-16 05:17:24', '2025-10-16 05:17:24'),
(1004, 'LIM', ' Limoncello', '  Savor the zestful and tangy essence of Limoncello, offering a vibrant and citrusy aroma reminiscent of freshly peeled lemons.', 'Medium', ' 48 hours', 'Yellow', 100, 15.50, 21.95, '2025-10-16 05:19:40', '2025-10-16 05:19:40'),
(2000, 'LEDSF', 'LED Soft Flame Pillar Candle', 'Give any space a rich, warm ambiance with this Ivory LED Soft Flame Pillar Candle', 'Large', 'N/A', 'White', 200, 10.50, 15.50, '2025-10-15 01:00:44', '2025-10-15 01:18:36'),
(2001, 'RSE', ' Rose Bud', '  Our Rose Bud flameless candle is hand-poured with genuine wax and is equipped with patented moving-flame technology that rivals the flicker and glow of traditional burning candles.', '3.6" x 4.3"', ' 10 hours', 'Soft Pink', 200, 25.50, 32.95, '2025-10-16 05:22:16', '2025-10-16 05:22:16'),
(2002, 'RBF', ' Red Berries Pillar', ' Red Berries Flameless Candle Pillar is the highlight of your autumn and winter décor. Real Flame-Effect technology flickers across the wax like the sun shining on the fallen snow.', 'Medium', ' 200 hours', 'White', 200, 25.50, 33.95, '2025-10-16 05:27:25', '2025-10-16 05:27:25'),
(2003, 'GBH', ' Gingerbread House Flameless Candle Pillar', ' Inspired Gingerbread House is crafted to make your home glow with the nostalgic comfort of the holidays. Flickering with genuine moving-flame technology, this flameless candle is hand-crafted with premium wax in a brown sugar color.', '4.5" x 6.7"', '5 Hours On / 19 Hours Off', 'Brown Sugar', 200, 35.50, 44.95, '2025-10-16 05:29:48', '2025-10-16 05:29:48'),
(2004, 'CGG', '  Champagne Glow Glitter Taper', '  Our Champagne Glow Glitter Taper is crafted to sparkle under radiating moving-flame technology. Warm, inviting, and chic, the celebratory champagne hue of this taper has a joyful glitter finish that sparkles without ever rubbing off.', '1" x 9.5"', '10 hours', 'Champagne', 200, 15.50, 22.95, '2025-10-16 05:32:14', '2025-10-16 05:32:14'),
(3000, 'DECOR', 'Ice Cream Candle', 'A dreamy line of dessert-inspired candles that look just like your favorite scoops', 'Large', '30 hours', 'MultiColors', 300, 15.00, 21.00, '2025-10-15 01:05:30', '2025-10-15 01:20:14'),
(3001, 'APP', '  Apple Shape Candle', ' Apple shape candles are hand-poured and made with 100% natural soy wax and scented with essential oils. Each candle is handmade so color, scent.', '3" x 3.5"', ' 5 hours', 'Green', 300, 18.50, 26.95, '2025-10-16 05:36:54', '2025-10-16 05:36:54'),
(3002, 'MSH', ' Mashroom Candle', ' Decorate your home for fall with candles that reflect the season like this large woodland mushroom candle. You can put this candle on a shelf or coffee table tray and combine it with other décor to complete the seasonal look.', '4.9"', '10 hours', 'Red and White', 300, 15.50, 22.95, '2025-10-16 05:40:22', '2025-10-16 05:40:22'),
(3003, 'CAT', ' Geometric Cat', 'Add a little enchantment to your Halloween décor by incorporating the elegant, soft glow of candlelight into your space. ', '6.3"', '5 hours', 'Black', 300, 5.50, 10.95, '2025-10-16 05:45:20', '2025-10-16 05:45:20'),
(3004, 'PUM', ' Pumpkin Spice', 'Transform your space into a cozy autumn retreat with this delightful pumpkin-shaped candle.', '5.23" x 5.23" x 4.8"', '32 hours', 'Orange', 300, 15.50, 23.95, '2025-10-16 05:48:07', '2025-10-16 05:48:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Candles`
--
ALTER TABLE `Candles`
 ADD PRIMARY KEY (`CandleID`), ADD UNIQUE KEY `CandleCode` (`CandleCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
