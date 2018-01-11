-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2014 at 10:52 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wolly`
--
CREATE DATABASE `wolly` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wolly`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CID` int(5) NOT NULL AUTO_INCREMENT,
  `Cname` varchar(30) NOT NULL,
  `SID` int(5) NOT NULL,
  `Sub` tinyint(1) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CID`, `Cname`, `SID`, `Sub`) VALUES
(1, 'Bollywood', 0, 1),
(2, 'Hollywood', 0, 1),
(3, 'Aliya Bhatt', 7, 0),
(4, 'Motivational', 0, 0),
(5, 'Nature', 0, 0),
(6, 'Bollywood Acter', 1, 1),
(7, 'Bollywood Acteress', 1, 1),
(8, 'Salman Khan', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories_cache`
--

CREATE TABLE IF NOT EXISTS `categories_cache` (
  `CID` int(5) NOT NULL,
  `ID` int(1) NOT NULL,
  `WLoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_cache`
--

INSERT INTO `categories_cache` (`CID`, `ID`, `WLoc`) VALUES
(7, 1, 'Aliya_Bhatt/Aliya_Bhatt_102.jpg'),
(1, 1, 'Aliya_Bhatt/Aliya_Bhatt_102.jpg'),
(3, 1, 'Aliya_Bhatt/Aliya_Bhatt_102.jpg'),
(4, 1, 'Motivational/Motivational_101.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `LID` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `MailID` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LID`, `Username`, `MailID`, `Password`, `Mobile`) VALUES
(1, 'Nirav Patel', 'nirav6895@gmail.com', 'sexy', '8866882892'),
(2, 'Brij Shah', 'brijshah@gmail.com', 'brij', '9898789159'),
(3, 'Bhavin Malaviya', 'bhavin.aeni24@gmail.com', 'bhavin24', '9408572915'),
(4, 'Jay Prajapati', 'jprajapati949@gmail.com', 'jorden949', '9408276836');

-- --------------------------------------------------------

--
-- Table structure for table `wallpapers`
--

CREATE TABLE IF NOT EXISTS `wallpapers` (
  `WID` int(10) NOT NULL AUTO_INCREMENT,
  `Wname` varchar(20) NOT NULL,
  `WLoc` text NOT NULL,
  `CID` int(5) NOT NULL,
  PRIMARY KEY (`WID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wallpapers`
--

INSERT INTO `wallpapers` (`WID`, `Wname`, `WLoc`, `CID`) VALUES
(1, 'Aliya_Bhatt_100', 'Aliya_Bhatt/Aliya_Bhatt_100.jpg', 3),
(2, 'Motivational_100', 'Motivational/Motivational_100.jpg', 4),
(3, 'Aliya_Bhatt_101', 'Aliya_Bhatt/Aliya_Bhatt_101.jpg', 3),
(4, 'Aliya_Bhatt_102', 'Aliya_Bhatt/Aliya_Bhatt_102.jpg', 3),
(5, 'Motivational_101', 'Motivational/Motivational_101.jpg', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
