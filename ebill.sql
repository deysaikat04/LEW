-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2017 at 03:53 AM
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
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `uphone` varchar(15) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`uid`, `user`, `upassword`, `uphone`) VALUES
(23, 'Saikat ', '123456', '8981380649');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `tax` varchar(5) NOT NULL,
  `bdate` varchar(15) NOT NULL,
  `InvoiceNo` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`InvoiceNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`tax`, `bdate`, `InvoiceNo`) VALUES
('', '', 'ABC02');

-- --------------------------------------------------------

--
-- Table structure for table `itemid`
--

CREATE TABLE IF NOT EXISTS `itemid` (
  `ItemId` int(20) NOT NULL,
  `InvoiceNo` varchar(50) NOT NULL,
  `brought` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemid`
--

INSERT INTO `itemid` (`ItemId`, `InvoiceNo`, `brought`) VALUES
(6, 'ABC02', '1716.00'),
(6, 'ABC02', '1716.00'),
(59, '', '396.00'),
(69, 'PQRST', '509.84'),
(69, 'PQRST', '509.84'),
(69, 'PQRST', '509.84'),
(69, 'PQRST', '509.84'),
(69, 'PQRST', '509.84'),
(69, 'PQRST', '509.84'),
(73, 'PQRST', '254.92'),
(73, 'PQRST', '254.92'),
(73, 'PQRST', '254.92'),
(73, 'PQRST', '254.92'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(0, 'asdasdasd', '0.00'),
(0, 'asdasdasd', '0.00'),
(6, 'ABC02', '1716.00'),
(6, 'ABC02', '1716.00'),
(81, 'PQRST', '3137.50'),
(81, 'PQRST', '3137.50'),
(59, '', '396.00'),
(59, '', '396.00'),
(91, 'PQRSTUV', '150.00'),
(91, 'PQRSTUV', '150.00'),
(107, 'asdasd', '72.00'),
(107, 'asdasd', '72.00'),
(110, 'ABCD3', '288.00'),
(110, 'ABCD3', '288.00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`IdItem`, `InvoiceNo`, `Qnty`, `HSNCode`, `Description`, `Rate`, `Unit`, `Amount`) VALUES
(4, 'ABC02', 12, '8080', 'GI', '12.00', 'Each', 144.00),
(5, 'ABC02', 12, '8080', 'GI', '12.00', 'Each', 1441.00),
(6, 'ABC02', 11, '80802', 'GIM', '12.00', 'Each', 131.00),
(7, 'ABC023', 1200, '55874', 'GIhjsdh', '12.00', 'Each', 144.00),
(8, 'ABC023', 1145, '580802', 'GIMsrisfh', '12.00', 'Each', 131.00),
(9, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(10, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(11, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(12, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(13, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(14, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(15, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(16, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(17, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(18, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(19, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(20, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(21, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(22, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(23, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(24, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(25, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(26, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(27, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(28, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(29, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(30, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(31, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(32, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(33, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(34, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(35, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(36, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(37, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(38, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(39, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(40, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(41, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(42, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(43, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(44, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(45, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(46, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(47, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(48, 'XYZ', 11, '8088', '12X1/2 Barrel Nipple', '11.00', 'Each', 121.00),
(49, 'XYZ', 10, '8085', '1X1/2 GI Barrel Nipple', '12.50', 'Each', 125.00),
(59, '', 33, '55874', 'Half inch Barrel Nipple', '12.00', 'Each', 396.00),
(60, 'KKLMNOP', 33, '55874', '1X1/2 GI Barrel Nipple', '12.00', 'Each', 396.00),
(61, 'KKLMNOP', 25, '8080', 'Saikat dey', '12.83', 'Each', 320.83),
(86, '', 0, '', '', '0.00', 'Each', 0.00),
(87, 'PQRST', 12, '', '', '12.00', 'Each', 144.00),
(88, 'PQRST', 12, '', '', '111.00', 'Each', 1332.00),
(89, 'PQRST', 12, '', '', '111.00', 'Each', 1332.00),
(90, '', 0, '', '', '0.00', 'Each', 0.00),
(91, 'PQRSTUV', 12, '', '', '12.50', 'Each', 150.00),
(92, '', 0, '', '', '0.00', 'Each', 0.00),
(93, '', 0, '', '', '0.00', 'Each', 0.00),
(94, '', 0, '', '', '0.00', 'Each', 0.00),
(95, '', 0, '', '', '0.00', 'Each', 0.00),
(96, '', 0, '', '', '0.00', 'Each', 0.00),
(97, '', 0, '', '', '0.00', 'Each', 0.00),
(98, '', 0, '', '', '0.00', 'Each', 0.00),
(99, '', 0, '', '', '0.00', 'Each', 0.00),
(100, '', 0, '', '', '0.00', 'Each', 0.00),
(101, '', 0, '', '', '0.00', 'Each', 0.00),
(102, '', 0, '', '', '0.00', 'Each', 0.00),
(103, 'rtyryrty', 12, '', '', '12.00', 'Each', 144.00),
(104, '', 0, '', '', '0.00', 'Each', 0.00),
(105, 'UVW2', 0, '', '', '0.00', 'Each', 0.00),
(106, 'UVW2', 12, '55874', '', '11.00', 'Each', 0.00),
(107, 'asdasd', 12, '', '', '6.00', 'Each', 72.00),
(108, 'ABCD', 10, '', '', '12.00', 'Each', 120.00),
(109, 'ABCD3', 12, '', '', '12.00', 'Each', 144.00),
(110, 'ABCD3', 12, '', '', '12.00', 'Each', 144.00);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE IF NOT EXISTS `parties` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `InvoiceNo` varchar(50) NOT NULL,
  `BillDate` date NOT NULL,
  `Messers` varchar(200) NOT NULL,
  `MessersAdd` varchar(200) NOT NULL,
  `GSTNo` varchar(50) NOT NULL,
  `Through` varchar(50) NOT NULL,
  `LRRRNo` varchar(50) NOT NULL,
  `PrivateMark` varchar(50) NOT NULL,
  `DocThrough` varchar(50) NOT NULL,
  `NoOfBags` int(10) NOT NULL,
  `Packing` decimal(50,2) NOT NULL,
  `TaxableAmnt` decimal(50,2) NOT NULL,
  `SGSTRate` decimal(10,2) NOT NULL,
  `SGSTAmnt` decimal(50,2) NOT NULL,
  `CGSTRate` decimal(10,2) NOT NULL,
  `CGSTAmnt` decimal(50,2) NOT NULL,
  `IGSTRate` decimal(10,2) NOT NULL,
  `IGSTAmnt` decimal(50,2) NOT NULL,
  `GrandTotal` decimal(60,2) NOT NULL,
  `Rupees` varchar(150) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `InvoiceNo` (`InvoiceNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`Id`, `InvoiceNo`, `BillDate`, `Messers`, `MessersAdd`, `GSTNo`, `Through`, `LRRRNo`, `PrivateMark`, `DocThrough`, `NoOfBags`, `Packing`, `TaxableAmnt`, `SGSTRate`, `SGSTAmnt`, `CGSTRate`, `CGSTAmnt`, `IGSTRate`, `IGSTAmnt`, `GrandTotal`, `Rupees`) VALUES
(42, 'UVW2', '0000-00-00', 'Saikat', 'Howrah', '456789', 'Bag', 'ABCD', '447744', 'Bag', 20, '0.00', '0.00', '9.00', '0.00', '9.00', '0.00', '18.00', '0.00', '0.00', 'Point '),
(43, 'asdasd', '0000-00-00', 'Saikat', 'Howrah', 'sdfsfsaf', 'sdfdsf', '4646dsf', 'dsfdsf46468', 'sdfdsf', 20, '12.00', '84.00', '9.00', '7.56', '9.00', '7.56', '18.00', '0.00', '99.12', 'Ninety Nine Point Twelve Only'),
(44, 'ABCD', '0000-00-00', 'safdsfsaf', 'sadfdsafds', 'sdfdsf', 'dsfdsf', 'sdfsdf', 'sdfdsfds', 'sdfdsf', 20, '0.00', '120.00', '9.00', '0.00', '9.00', '0.00', '18.00', '21.60', '141.60', 'One Hundred and Forty One Point Six Zero Only'),
(45, 'ABCD3', '0000-00-00', 'safdsfsaf', 'sadfdsafds', 'sdfdsf', 'dsfdsf', 'sdfsdf', 'sdfdsfds', 'sdfdsf', 20, '12.00', '300.00', '9.00', '0.00', '9.00', '0.00', '18.00', '54.00', '354.00', 'Three Hundred and Fifty Four Point ');
