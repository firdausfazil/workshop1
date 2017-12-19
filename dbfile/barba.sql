-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 06:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barba`
--

-- --------------------------------------------------------

--
-- Table structure for table `barber`
--

CREATE TABLE IF NOT EXISTS `barber` (
`id` int(5) NOT NULL,
  `barname` varchar(50) NOT NULL,
  `baremail` varchar(30) NOT NULL,
  `barpassword` varchar(30) NOT NULL,
  `barphonum` text NOT NULL,
  `baraddress` varchar(30) NOT NULL,
  `barcity` varchar(20) NOT NULL,
  `barzipcode` int(10) NOT NULL,
  `barcountry` varchar(20) NOT NULL,
  `barcompany` varchar(50) NOT NULL,
  `barstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`booking_id` int(5) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `bar_id` int(5) NOT NULL,
  `booking_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
`id` int(5) NOT NULL,
  `custname` varchar(30) NOT NULL,
  `custemail` varchar(30) NOT NULL,
  `custpassword` varchar(30) NOT NULL,
  `custphonum` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `custname`, `custemail`, `custpassword`, `custphonum`) VALUES
(22, 'Muhammad', 'techboy.pdot@gmail.com', '123', 145263789),
(27, 'syaik', 'fir@gmail.com', '123', 79654),
(30, 'firda', 'fir@gmail.com', '123', 545);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`id` int(5) NOT NULL,
  `haircut` int(2) NOT NULL,
  `haircleaning` int(2) NOT NULL,
  `haircoloring` int(2) NOT NULL,
  `essentialfacials` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barber`
--
ALTER TABLE `barber`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barber`
--
ALTER TABLE `barber`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
