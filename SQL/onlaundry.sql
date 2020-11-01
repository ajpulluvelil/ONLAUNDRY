-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2018 at 03:48 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlaundry`
--
CREATE DATABASE IF NOT EXISTS `onlaundry` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onlaundry`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `message` varchar(100) NOT NULL,
  `replay` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `message`, `replay`, `date`, `username`) VALUES
(1, 'jkhdjkhjd', 'nill', '2018/12/17 06:42:22', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laundry`
--

CREATE TABLE IF NOT EXISTS `tbl_laundry` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `shirt` varchar(20) NOT NULL,
  `pants` varchar(20) NOT NULL,
  `swetter` varchar(20) NOT NULL,
  `lungy` varchar(20) NOT NULL,
  `bedsheet` varchar(20) NOT NULL,
  `blanket` varchar(20) NOT NULL,
  `banian` varchar(20) NOT NULL,
  `towel` varchar(20) NOT NULL,
  `date` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `housename` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9637 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `name`, `housename`, `address`, `pincode`, `phonenumber`, `email`, `username`, `password`, `status`, `type`) VALUES
(9630, 'Akhil Joseph', 'Pulluvelil', 'Mathaipara p.o Kothapara', '685505', '8113811270', 'ajpulluvelil@gmail.com', 'iamaryder', 'gowithdreams', 1, 'admin'),
(9631, '', '', '', '', '', '', 'iamauser', 'iamauser', 0, 'user'),
(9632, '', '', '', '', '', '', 'iamauser', 'iamauser', 0, 'user'),
(9633, '', '', '', '', '', '', 'akhil', 'joseph', 0, 'user'),
(9634, '', '', '', '', '', '', 'user', '123', 0, 'user'),
(9635, '', '', '', '', '', '', 'abraham', 'joseph', 0, 'user'),
(9636, '', '', '', '', '', '', 'qwerty', 'qwerty', 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
