-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 01:28 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlykhachsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `thuedichvu`
--

CREATE TABLE IF NOT EXISTS `thuedichvu` (
  `idthuedichvu` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `iddichvu` int(11) unsigned NOT NULL,
  `tendichvu` varchar(45) NOT NULL,
  `cmnd` int(11) DEFAULT NULL,
  `ngaydung` date DEFAULT NULL,
  `dongia` int(50) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `thanhtien` int(50) DEFAULT NULL,
  PRIMARY KEY (`idthuedichvu`),
  UNIQUE KEY `iddichvu` (`idthuedichvu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `thuedichvu`
--

INSERT INTO `thuedichvu` (`idthuedichvu`, `iddichvu`, `tendichvu`, `cmnd`, `ngaydung`, `dongia`, `soluong`, `thanhtien`) VALUES
(3, 0, 'dv01', 1806, '2013-10-01', 1, 123, 1),
(4, 0, 'dv02', 1806, '2013-10-01', 1, 3245, 12313),
(5, 0, 'dv01', 1806, '2013-10-01', 1, 3245, 3245),
(6, 0, 'dv01', 1806, '0000-00-00', 1, 123, 123),
(7, 0, 'dv01', 23568977, '2013-10-01', 100, 123, 12300),
(8, 0, '', 1806, '0000-00-00', 0, 0, 0),
(9, 0, '', 1806, '0000-00-00', 0, 0, 0),
(10, 0, 'dv01', 36058, '2013-10-01', 1, 123, 123);
