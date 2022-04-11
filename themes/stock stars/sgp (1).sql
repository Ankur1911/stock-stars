-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 06:22 PM
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

--
-- Dumping data for table `demat`
--

INSERT INTO `demat` (`Email`, `password`, `name`, `pan_number`, `aadhar`, `phone`, `street`, `city`, `country`, `Gender`, `birthdate`, `nationality`) VALUES
('aa', 'aa', 'aa', 88, 88, 88, '88', 'aa', 'USA', 'none', '0000-00-00', 'Armenian'),
('viv', 'w', 'ww', 2, 22, 2, 'd', 'd', 'd', 'd', '2022-04-12', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
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

INSERT INTO `expert` (`FName`, `LName`, `MobileNumber`, `EmailID`, `Education`, `City`, `Country`, `State`, `Experience`, `Expertise`, `Charge1`, `Charge3`, `Charge6`, `Charge12`, `AddTime`) VALUES
('', '', 0, '', '', '', '', '', '', '', 0, 0, 0, 0, '2022-03-11 11:46:05'),
('d', 'd', 323, 'fs@gmail.com', 'ewq', 'we', 'we', 'we', 'we', 'ewf', 32, 32, 32, 32, '2022-03-11 11:11:00'),
('sd', ' k', 32, 'll@gmail.com', 'oo', 'mo', 'ommo', 'mom', 'mm', 'mom', 0, 88, 88, 8, '2022-03-11 11:47:26'),
('vvv', 'nn', 909, 'viek@gmail.com', 'jni', 'nii', 'ninn', 'nii', 'nin', 'nn', 0, 99, 99, 99, '2022-03-11 11:46:47');

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
('xvsd', '20DCE043@charusat.edu.in', 53453, '3423', 0, 1),
('caa', 'csa@gmail.com', 0, 'dwm', 0, 1),
('asdca', 'dqa@gmail.com', 23123, '123', 1, 0),
('xzcsd', 'ds@gmail.com', 0, 'fmlwefml', 0, 1),
('ewrfwf', 'dsd@gmail.com', 0, 'dqa', 0, 1),
('dsfsf', 'dsfs@gmail.com', 0, 'addqaw', 0, 1),
('cdef', 'ewddw@gmail.com', 0, '232', 0, 1),
('vivek', 'ivek@gmail.com ', 777777777, '121', 0, 0),
('vivek', 'kk@gmial.com', 992929, '123', 0, 0),
('cxvvx', 'vivdk@gmail.com', 5432532, '234', 1, 1),
('sdvs', 'vivek.kakadiya111@gmail.com', 3423423, 'wq', 0, 0),
('edwdfasfavcd', 'vivek@gmail.com', 123, '123', 1, 0),
('fv', 'vsvdsv@gmail.com', 0, 'cdsz', 0, 1);

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
  ADD PRIMARY KEY (`EmailID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
