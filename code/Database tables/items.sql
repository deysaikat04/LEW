-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2017 at 05:10 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebill`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `IdItem` int(100) NOT NULL AUTO_INCREMENT,
  `InvoiceNo` varchar(50) NOT NULL,
  `Qnty` int(10) NOT NULL,
  `HSNCode` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Rate` decimal(10,2) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Amount` float(10,2) NOT NULL,
  PRIMARY KEY (`IdItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`IdItem`, `InvoiceNo`, `Qnty`, `HSNCode`, `Description`, `Rate`, `Unit`, `Amount`) VALUES
(4, 'ABC02', 12, '8080', 'GI', '12.00', 'Each', 144.00),
(5, 'ABC02', 12, '8080', 'GI', '12.00', 'Each', 144.00),
(6, 'ABC02', 11, '80802', 'GIM', '12.00', 'Each', 131.00),
(7, 'ABC023', 1200, '55874', 'GIhjsdh', '12.00', 'Each', 144.00),
(8, 'ABC023', 1145, '580802', 'GIMsrisfh', '12.00', 'Each', 131.00);
