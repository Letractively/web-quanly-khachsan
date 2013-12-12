-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2013 at 10:08 AM
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
-- Table structure for table `chitiethddichvu`
--

CREATE TABLE IF NOT EXISTS `chitiethddichvu` (
  `idhoadon` int(11) NOT NULL,
  `iddichvu` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  PRIMARY KEY (`idhoadon`,`iddichvu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethddichvu`
--


-- --------------------------------------------------------

--
-- Table structure for table `chitiethdthuephong`
--

CREATE TABLE IF NOT EXISTS `chitiethdthuephong` (
  `idhoadonthuephong` int(11) NOT NULL AUTO_INCREMENT,
  `idphong` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL,
  `songaythue` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  PRIMARY KEY (`idhoadonthuephong`,`idphong`,`idhoadon`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `chitiethdthuephong`
--


-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE IF NOT EXISTS `dichvu` (
  `iddichvu` int(11) NOT NULL AUTO_INCREMENT,
  `tendv` varchar(50) NOT NULL,
  `donvitinh` varchar(50) NOT NULL,
  `dongia` int(11) NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`iddichvu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dichvu`
--


-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `idhoadon` int(11) NOT NULL AUTO_INCREMENT,
  `idphong` int(11) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaylap` varchar(50) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  PRIMARY KEY (`idhoadon`,`idphong`,`cmnd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hoadon`
--


-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `cmnd` int(11) NOT NULL AUTO_INCREMENT,
  `tenkhachhang` varchar(50) NOT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sodt` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`cmnd`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36059 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`cmnd`, `tenkhachhang`, `diachi`, `sodt`, `email`, `tinhtrang`) VALUES
(1806, 'Nguyễn Nam Phú', 'Đà Lạt', '121198', 'Email@gmail.com', 1),
(36058, 'Nguyên Vũ', 'Đà Lạt', '998877', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE IF NOT EXISTS `loaiphong` (
  `idloaiphong` int(11) NOT NULL AUTO_INCREMENT,
  `gia` int(11) NOT NULL,
  `Đơn Vị` varchar(50) DEFAULT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`idloaiphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`idloaiphong`, `gia`, `Đơn Vị`, `tinhtrang`) VALUES
(1, 200000, 'VND', 1),
(2, 100000, 'VND', 1),
(3, 50000, 'VND', 1),
(4, 80000, 'VND', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE IF NOT EXISTS `nhanvien` (
  `idnhanvien` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(50) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sodt` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`idnhanvien`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnhanvien`, `hoten`, `cmnd`, `ngaysinh`, `sodt`, `email`, `tinhtrang`) VALUES
(1, 'Đỗ Ngọc Dân', 1010810, '1989-03-21', '0123456872', 'ngocdan.ctk34@gmail.com', 1),
(2, 'Đặng Nguyễn Nguyên Vũ', 19216810, '1992-06-11', '0167556677', 'nguyenvuctk34@gmail.com', 1),
(3, 'Nguyễn Nam Phú', 23457889, '1992-09-09', '0167556677', NULL, 1),
(4, 'Đinh Trí Dũng', 23568974, '1992-06-15', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieudichvu`
--

CREATE TABLE IF NOT EXISTS `phieudichvu` (
  `idphieudichvu` int(11) NOT NULL AUTO_INCREMENT,
  `cmnd` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtoan` tinyint(1) NOT NULL,
  PRIMARY KEY (`idphieudichvu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `phieudichvu`
--


-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE IF NOT EXISTS `phong` (
  `idphong` int(11) NOT NULL AUTO_INCREMENT,
  `tenphong` varchar(50) NOT NULL,
  `loaiphong` int(11) NOT NULL,
  `hinhanh` varchar(20) DEFAULT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`idphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`idphong`, `tenphong`, `loaiphong`, `hinhanh`, `tinhtrang`) VALUES
(1, 'HD01', 1, NULL, 1),
(2, 'PH02', 2, NULL, 1),
(3, 'Mini103', 3, 'mini103.jpg', 1),
(4, 'Cheap203', 4, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `idtaikhoan` int(11) NOT NULL AUTO_INCREMENT,
  `tentk` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `quyen` int(11) NOT NULL,
  `tinhtrang` tinyint(1) NOT NULL,
  PRIMARY KEY (`idtaikhoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `tentk`, `matkhau`, `quyen`, `tinhtrang`) VALUES
(1, 'tridung', '123456', 1, 1),
(2, 'namphu', '123456', 1, 1),
(3, 'nguyenvu', 'vunguyen', 2, 1),
(4, 'ngocdan', '123456', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thuephong`
--

CREATE TABLE IF NOT EXISTS `thuephong` (
  `idphong` int(11) NOT NULL AUTO_INCREMENT,
  `cmnd` int(11) NOT NULL,
  `ngayden` date NOT NULL,
  `ngaydi` date DEFAULT NULL,
  PRIMARY KEY (`idphong`,`cmnd`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `thuephong`
--

