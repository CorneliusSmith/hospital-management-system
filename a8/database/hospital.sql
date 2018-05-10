-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 07:32 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(2, 'Tom', 't1234');

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE IF NOT EXISTS `appt` (
  `ano` int(11) NOT NULL,
  `adoctor` int(11) NOT NULL,
  `apatient` int(11) NOT NULL,
  `atype` varchar(30) NOT NULL,
  `atime` varchar(11) NOT NULL,
  `ashow` varchar(1) NOT NULL DEFAULT 'Y',
  `adate` date NOT NULL,
  `aptime` int(30) NOT NULL,
  `aid` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appt`
--

INSERT INTO `appt` (`ano`, `adoctor`, `apatient`, `atype`, `atime`, `ashow`, `adate`, `aptime`, `aid`) VALUES
(12, 3, 2, 'foot massage', '10:00am', 'Y', '2015-02-25', 1, '1424822400'),
(13, 2, 1, 'hip acupuncture', '3:00pm', 'Y', '2015-05-23', 2, '1432339200'),
(14, 1, 2, 'leg massage', '9:00am', 'Y', '2015-05-07', 1, '1430956800'),
(15, 3, 3, 'back massage', '1:00PM', 'Y', '2015-06-22', 2, '1434931200'),
(16, 2, 2, 'foot massage', '2:30pm', 'Y', '2015-05-23', 2, '1432339200');

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE IF NOT EXISTS `doct` (
  `dno` int(11) NOT NULL,
  `dfirst` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `dspec` varchar(30) NOT NULL,
  `dpho` varchar(20) NOT NULL,
  `dprice` int(30) NOT NULL,
  `did` varchar(30) NOT NULL,
  `dshow` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`dno`, `dfirst`, `dname`, `dspec`, `dpho`, `dprice`, `did`, `dshow`) VALUES
(1, 'Johnny', 'Beegood', '123 Goodenough Way Truro NS', '902-543-5432', 60, '1020038329', 'Y'),
(2, 'Terry', 'Bradstreet', 'Apt 32 Carebear Ave Sackville', '506-333-2222', 35, '1020038427', 'Y'),
(3, 'Suzanne', 'Almighty', '2143 Shakey Lane Kentville NS', '902-678-4321', 50, '100145678', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pno` int(11) NOT NULL,
  `pfirst` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `paddr` varchar(30) NOT NULL,
  `ppho` varchar(30) NOT NULL,
  `pid` varchar(30) NOT NULL,
  `pshow` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pno`, `pfirst`, `pname`, `paddr`, `ppho`, `pid`, `pshow`) VALUES
(1, 'Roger', 'Moore', '14 King St Fredericton NB', '506-901-2534', '234 567 890', 'Y'),
(2, 'Carol', 'Ling', 'Apt 3 1823 Gottingen St Halif', '902-465-3291', '012 345 678', 'Y'),
(3, 'Orin', 'Snorkel', 'RR#6 Antigonish Co NS', '902-324-2221', '987 654 321', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE IF NOT EXISTS `slot` (
  `sno` int(11) NOT NULL,
  `stime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appt`
--
ALTER TABLE `appt`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `appt`
--
ALTER TABLE `appt`
  MODIFY `ano` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `doct`
--
ALTER TABLE `doct`
  MODIFY `dno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
