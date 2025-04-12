-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 12, 2025 at 03:30 AM
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
(901, 'TA-TEST', 'TA_TEST', 'TA_TESTING', 'Red', 901, 999.00, 999.00, '2025-04-03 18:21:28'),
(1000, 'OPG', 'Optical Ghost', 'The Optical Ghost is a cool virtual reality headset that uses illusions. It contains interesting features that determine the worth of it.', 'Purple', 100, 399.00, 598.00, '2025-03-25 11:42:34'),
(1001, 'grgr', 'rrgrgrg', 'fffff', 'Blue', 102, 499.99, 500.00, '2025-04-11 14:12:35'),
(1002, 'hi', 'Test', 'fefiefi', 'Blue ', 100, 599.99, 599.99, '2025-04-11 23:12:52'),
(2000, 'FVR', 'Facebook Virtual Reality', 'The  Facebook Virtual Reality is an amazing virtual reality headset that uses 3d graphics. It contains crucuial features that redefine virtual reality.', 'Pink', 100, 499.00, 599.00, '2025-03-25 11:44:02'),
(3000, 'AVR', 'Amazon Virtual Reality', 'The  Amazon Virtual Reality is an dynamic virtual reality headset that uses 3d graphics. It contains special features that are exclusive.', 'Red', 100, 499.00, 599.00, '2025-03-25 11:46:21'),
(4000, 'TMT', 'The Machine Thermo', 'The Machine Thermo is a highly intelligent smart thermostat. It has a soft shell for sliding', 'Green', 200, 399.00, 499.00, '2025-03-25 11:47:56'),
(4444, 'ggg', 'grgrg', 'feefee', '&lt;script&gt;alert(&quot;Hello!&quot;);&lt;/script&gt;', 101, 199.99, 299.99, '2025-04-11 13:05:28'),
(5000, 'EST', 'Ecobee Smart Thermostat', 'The Ecobee  is a highly intelligent smart thermostat. It contains introspective stuff too make your experience better', 'Black', 200, 399.00, 499.00, '2025-03-25 11:50:46'),
(6000, 'NST', 'Nest Thermostat', 'The Nest Thermostat is a highly intricate smart thermostat. It has an attractive desgin and is esaily portabler', 'Yellow', 200, 399.00, 499.00, '2025-03-25 11:52:17'),
(7000, 'TJP', 'The Joshner Pad', 'The Joshner Pad is a highly intelligent wireless charging pad. It can charge in a jiffy', 'Black', 300, 199.00, 299.00, '2025-03-25 11:54:04'),
(8000, 'TGM', 'The Great Magsafe', 'The Joshner Pad is an affordable wireless charging pad. It is practical and good looking.', 'Red', 300, 199.00, 399.00, '2025-03-25 11:56:03'),
(9000, 'IOWC', 'iOttie Wireless Car Charger', 'The iOttie Wireless is an sizable wireless charging pad. It is a versatile car mount.', 'White', 300, 199.00, 399.00, '2025-03-25 12:00:19'),
(9999, 'TSTT', 'TESTING', 'Testing', 'Black', 900, 599.99, 699.99, '2025-03-28 13:28:16'),
(10000, 'SBL', 'Speaker bleaker', 'The Speaker Bleacker contains bluetooth which can be used in a 100m Radius!. It is an absolute beast when it performs', 'Yellow', 400, 299.00, 399.00, '2025-03-25 12:01:17'),
(11000, 'TSR', ' Sonos Roam', 'The Sonos Roam is a speaker that contains bluetooth. It has Bluetooth connectivity and reduced reliance on the Sonos app.', 'Blue', 400, 299.00, 399.00, '2025-03-25 12:04:44'),
(12000, 'BSL', 'Bose SoundLink', 'The Bose SoundLink is a speaker that contains bluetooth. Jt stylish cylinder with a sturdy aluminium body.', 'Purple', 400, 299.00, 399.00, '2025-03-25 12:28:52'),
(13000, 'HSC', 'Healthy Scale', 'The Healthy scale is a fitness scale that will accurately measure your weight!. Track you weight easily', 'White', 500, 199.00, 299.00, '2025-03-25 12:31:16'),
(14000, 'WSX', ' Wyze Scale X', 'The Wyze Scale X is a fitness scale that will accurately measure your weight!. It gives you the option to track your muscle mass percentage.', 'Blue', 500, 199.00, 299.00, '2025-03-25 12:45:28'),
(15000, 'WBS', 'Withings Body Scan', 'The Withingd Body Scan is a fitness scale that will accurately measure your weight!. It is packed with health-tracking features and is the brands top scale.', 'Blue', 500, 199.00, 299.00, '2025-03-25 12:50:51');

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
