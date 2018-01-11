-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2014 at 01:27 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsignup`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `IID` int(5) NOT NULL AUTO_INCREMENT,
  `INAME` varchar(25) NOT NULL,
  `ITYPE` varchar(25) NOT NULL,
  `ILOC` varchar(100) NOT NULL,
  `CID` int(5) NOT NULL,
  PRIMARY KEY (`IID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`IID`, `INAME`, `ITYPE`, `ILOC`, `CID`) VALUES
(1, 'maths1 xyz', 'book', '', 3),
(6, 'maths1 abc', 'pdf', '', 3),
(7, 'maths 2 xyz', 'book', '', 11),
(8, 'maths 2 abc', 'pdf', '', 11);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
