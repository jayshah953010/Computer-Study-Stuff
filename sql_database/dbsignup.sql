-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2014 at 06:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`First Name`, `Last Name`, `Mail`, `Password`) VALUES
('Jay', 'Shah', 'jayshah953010@gmail.com', 2147483647),
('jay1', 'shah1', 'jayshah953010@gmail1.com', 2147483647),
('jay', 'shah', 'jay', 840),
('', '', '', 0),
('Jay', 'Shah', 'jayshah953010@gmail.com', 2147483647),
('m,bkjbn', 'kjbhklh', 'jkhkjh@hvbjhnbkj.com', 0),
('vandan', 'thaker', 'VANDANTHAKER@GMAIL.COM', 2147483647),
('', '', 'jayshah953010@gmail.com', 0),
('ju', 'xds', 'jayshah953010@gmail.com', 0),
('Jay', 'Shah', 'jayshah953010@gmail.com', 2147483647),
('jay1', 'shah1', 'jayshah953010@gmail1.com', 2147483647),
('jay', 'shah', 'jay', 840),
('', '', '', 0),
('Jay', 'Shah', 'jayshah953010@gmail.com', 2147483647),
('m,bkjbn', 'kjbhklh', 'jkhkjh@hvbjhnbkj.com', 0),
('vandan', 'thaker', 'VANDANTHAKER@GMAIL.COM', 2147483647),
('', '', 'jayshah953010@gmail.com', 0),
('ju', 'xds', 'jayshah953010@gmail.com', 0),
('jay', 'shah', 'jay@jay.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
