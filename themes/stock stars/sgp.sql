-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 06:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgp`
--

-- --------------------------------------------------------

--
-- Table structure for table `demat`
--

CREATE TABLE `demat` (
  `Email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pan_number` int(14) NOT NULL,
  `aadhar` int(14) NOT NULL,
  `phone` int(10) NOT NULL,
  `street` varchar(40) NOT NULL,
  `city` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `birthdate` date NOT NULL,
  `nationality` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Experience` varchar(20) NOT NULL,
  `Expertise` text NOT NULL,
  `Charge1` int(11) NOT NULL,
  `Charge3` int(5) NOT NULL,
  `Charge6` int(5) NOT NULL,
  `Charge12` int(5) NOT NULL,
  `AddTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`FName`, `LName`, `MobileNumber`, `Email`, `Education`, `City`, `Country`, `State`, `Experience`, `Expertise`, `Charge1`, `Charge3`, `Charge6`, `Charge12`, `AddTime`) VALUES
('', '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, '2022-04-19 09:43:56'),
('Ankur', 'Kapuriya', 2147483647, 'ankur1911@gmail.com', 'hsc', 'junagadh', 'india', 'gujarat', '2', 'i am an expert in quity call', 500, 900, 1600, 4000, '2022-04-19 09:16:35'),
('Vandan', 'Kalariya', 1353113298, 'kalariyavandan1234@gmail.com', 'MBA', 'Surat', 'India', 'Gujarat', '5 Years', 'Expert in Equity trading.', 2000, 5000, 10000, 18000, '2022-04-19 09:39:34'),
('Namra', 'Mehta', 2147483647, 'namramehta108@gmail.com', 'MBA', 'Rajkot', 'India', 'Gujarat', '5', 'Mutual Funds', 300, 900, 1200, 1800, '2022-04-19 09:45:54'),
('Parth', 'Trivedi', 2147483647, 'parth@gmail.com', 'B tech', 'Rajkot', 'India', 'Gujarat', '2', 'Well Knowledge Of Intraday Trading and Option Trading', 3000, 9000, 15000, 25000, '2022-04-18 23:25:49'),
('Prins', 'mathukiya', 1283811759, 'pd@gmail.com', 'hsc', 'junagadh', 'india', 'gujarat', '1', 'i am an intraday trader.', 100, 300, 600, 1000, '2022-04-19 09:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Number` int(10) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `about` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Email`, `Number`, `Password`, `about`, `status`) VALUES
('ankur kapuriya', 'ankur1911@gmail.com', 2147483647, 'Ankur@123', 1, 1),
('Namra', 'namramehta108@gmail.com', 2147483647, 'Namra@123', 1, 1),
('vivek kakadiya', 'vivek123@gmail.com', 2147483647, 'Vivek@123', 0, 1),
('vivek', 'vivek@123', 1234567890, 'Vivek@123', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demat`
--
ALTER TABLE `demat`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
