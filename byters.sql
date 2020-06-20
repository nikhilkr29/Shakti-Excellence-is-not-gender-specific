-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 07:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byters`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `firstName` varchar(20) NOT NULL,
  `NGOName` varchar(20) NOT NULL,
  `AadharNum` int(16) NOT NULL,
  `UNGOI` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `state` enum('Andhra Pradesh','Arunachal Pradesh','Bihar','Chhattisgarh','Goa','Gujarat','Haryana','Himachal Pradesh','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Mizoram','Nagaland','Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu','Telangana','Tripura','Uttar Pradesh','Uttarakhand','West Bengal') NOT NULL,
  `country` enum('india') NOT NULL,
  `zip` int(6) NOT NULL,
  `bank` enum('state bank of india','union bank of india','canara bank','others') NOT NULL,
  `cc_name` varchar(20) NOT NULL,
  `cc_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`firstName`, `NGOName`, `AadharNum`, `UNGOI`, `userid`, `password`, `email`, `address`, `address2`, `state`, `country`, `zip`, `bank`, `cc_name`, `cc_number`) VALUES
('surya', 'mahila', 2147483647, 'kuwdhfw', 'elefh', 'kjmnjhbgtb', 'dfuiduf@gmail.com', 'wkhfgw', 'wekuf', 'Madhya Pradesh', 'india', 511266, 'union bank of india', 'wdcdcws', 2147483647),
('surya', 'mahila', 2147483647, 'kuwdhfw', 'elefh', 'gufufg', 'dfuiduf@gmail.com', 'wkhfgw', 'wekuf', 'Madhya Pradesh', 'india', 511266, 'union bank of india', 'wdcdcws', 2147483647),
('surya', 'mahila', 2147483647, 'kuwdhfw', 'elefh', '4684khvyf', 'dfuiduf@gmail.com', 'wkhfgw', 'wekuf', 'Madhya Pradesh', 'india', 511266, 'state bank of india', 'dchs', 2147483647);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
