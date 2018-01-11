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
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CID` int(5) NOT NULL AUTO_INCREMENT,
  `CNAME` varchar(30) NOT NULL,
  `SID` int(5) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `CNAME`, `SID`) VALUES
(1, '1st Sem', 0),
(2, '2nd Sem', 0),
(3, 'Engg.Mathamatics-I', 1),
(4, 'Engg. Materials & Applications', 1),
(5, 'Computer Concept & Programing', 1),
(6, 'Engg. Chemistry', 1),
(7, 'Ele. of Elec. & Electro. Engg', 1),
(8, 'Environment Engg.', 1),
(9, 'Applied Mechanics', 2),
(10, 'English Language Communication', 2),
(11, 'Engineering Mathematics - II', 2),
(12, 'Engineering Graphics', 2),
(13, 'Elements of Mechanical Engg.', 2),
(14, 'Engineering Physics', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
