-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2016 at 02:47 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr_nomination`
--
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `password` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(123, 'ipudelhi');

-- --------------------------------------------------------

--
-- Table structure for table `nominee`
--

CREATE TABLE `nominee` (
  `name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `roll_no` bigint(12) NOT NULL,
  `school` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `branch` varchar(5) COLLATE utf8_general_mysql500_ci NOT NULL,
  `year` tinyint(2) NOT NULL,
  `contact` bigint(12) NOT NULL,
  `votes` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `nominee`
--

INSERT INTO `nominee` (`name`, `roll_no`, `school`, `branch`, `year`, `contact`, `votes`) VALUES
('mudit', 1616403215, 'usict', 'cse', 3, 95824, 3),
('neil', 2116403215, 'usict', 'cse', 3, 12345, 3);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `roll_no` bigint(12) NOT NULL,
  `name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `visited` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`roll_no`, `name`, `visited`) VALUES
(1716403215, 'pankaj', 0),
(1816403215, 'paras', 0),
(1616403215, 'mudit', 0),
(1916403215, 'piyush', 0),
(2016403215, 'pranshu', 0),
(2116403215, 'neil', 0),
(2216403215, 'rajiv', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `roll_no` bigint(12) NOT NULL,
  `school` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `branch` varchar(5) COLLATE utf8_general_mysql500_ci NOT NULL,
  `year` tinyint(2) NOT NULL,
  `contact` bigint(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`roll_no`, `school`, `branch`, `year`, `contact`) VALUES
(1816403215, 'usict', 'cse', 3, 745892),
(2216403215, 'usict', 'cse', 3, 9968752),
(1916403215, 'usict', 'cse', 3, 99642695295),
(2016403215, 'usict', 'cse', 3, 1264885),
(1716403215, 'usict', 'cse', 3, 1808000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominee`
--
ALTER TABLE `nominee`
  ADD PRIMARY KEY (`roll_no`,`branch`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`roll_no`,`branch`),
  ADD UNIQUE KEY `contact` (`contact`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
