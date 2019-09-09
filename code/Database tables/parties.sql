-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2017 at 06:00 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`Id`, `InvoiceNo`, `BillDate`, `Messers`, `MessersAdd`, `GSTNo`, `Through`, `LRRRNo`, `PrivateMark`, `DocThrough`, `NoOfBags`, `Packing`, `TaxableAmnt`, `SGSTRate`, `SGSTAmnt`, `CGSTRate`, `CGSTAmnt`, `IGSTRate`, `IGSTAmnt`, `GrandTotal`, `Rupees`) VALUES
(30, '', '0000-00-00', '', '', '', '', '', '', '', 0, '0.00', '0.00', '9.00', '0.00', '9.00', '0.00', '18.00', '0.00', '0.00', '');
