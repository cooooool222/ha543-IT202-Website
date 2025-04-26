-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 26, 2025 at 03:14 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ha543`
--

-- --------------------------------------------------------

--
-- Table structure for table `TechGadgetsCategories`
--

CREATE TABLE IF NOT EXISTS `TechGadgetsCategories` (
  `TechgadgetCategoryID` int(11) NOT NULL,
  `TechgadgetCategoryCode` varchar(255) NOT NULL,
  `TechgadgetshelfNumber` int(11) NOT NULL,
  `TechgadgetCategoryName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TechGadgetsCategories`
--

INSERT INTO `TechGadgetsCategories` (`TechgadgetCategoryID`, `TechgadgetCategoryCode`, `TechgadgetshelfNumber`, `TechgadgetCategoryName`, `DateCreated`) VALUES
(100, 'VRH', 1, 'Virtual Reality Headset', '2025-03-14 11:27:05'),
(200, 'STH', 2, 'Smart Thermostat', '2025-03-14 11:29:34'),
(300, 'WCP', 3, 'Wireless Charging Pad ', '2025-03-14 11:30:04'),
(400, 'BSP', 4, 'Bluetooth Speaker', '2025-03-14 11:30:58'),
(500, 'FSS', 5, 'Fitness Smart Scale', '2025-03-14 11:31:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TechGadgetsCategories`
--
ALTER TABLE `TechGadgetsCategories`
 ADD PRIMARY KEY (`TechgadgetCategoryID`), ADD UNIQUE KEY `TechgadgetCategoryCode` (`TechgadgetCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
