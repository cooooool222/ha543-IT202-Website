-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Mar 15, 2025 at 02:36 AM
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
-- Table structure for table `TechGadgetsProducts`
--

CREATE TABLE IF NOT EXISTS `TechGadgetsProducts` (
  `TechgadgetProductID` int(11) NOT NULL,
  `TechgadgetProductCode` varchar(10) NOT NULL,
  `TechgadgetProductName` varchar(255) NOT NULL,
  `TechgadgetDescription` text NOT NULL,
  `Techgadgetcolor` varchar(255) NOT NULL,
  `TechgadgetCategoryID` int(11) NOT NULL,
  `TechgadgetWholesalePrice` decimal(10,2) NOT NULL,
  `TechgadgetListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TechGadgetsProducts`
--

INSERT INTO `TechGadgetsProducts` (`TechgadgetProductID`, `TechgadgetProductCode`, `TechgadgetProductName`, `TechgadgetDescription`, `Techgadgetcolor`, `TechgadgetCategoryID`, `TechgadgetWholesalePrice`, `TechgadgetListPrice`, `DateCreated`) VALUES
(1000, 'Bazinga', 'BAZ', 'bazinga is a nice product', 'Jail', 100, 599.99, 699.99, '2025-03-14 22:32:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TechGadgetsProducts`
--
ALTER TABLE `TechGadgetsProducts`
 ADD PRIMARY KEY (`TechgadgetProductID`), ADD UNIQUE KEY `TechgadgetProductCode` (`TechgadgetProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
