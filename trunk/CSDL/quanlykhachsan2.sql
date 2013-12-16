-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 17, 2013 at 12:16 AM
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
  `tendv` varchar(20) NOT NULL,
  `gia` int(11) NOT NULL,
  `donvi` varchar(20) DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  PRIMARY KEY (`iddichvu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`iddichvu`, `tendv`, `gia`, `donvi`, `tinhtrang`) VALUES
(1, 'cơm', 50000, 'VND', 1),
(2, 'Nước ngọt', 20000, 'VND', 1),
(3, 'massage', 100000, 'VND', 0),
(4, 'Karaoke', 200000, 'VND', 1);

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
  `tinhtrang` int(1) NOT NULL,
  PRIMARY KEY (`cmnd`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23568978 ;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`cmnd`, `tenkhachhang`, `diachi`, `sodt`, `email`, `tinhtrang`) VALUES
(1806, 'Nguyễn Nam Phú', 'Đà Lạt', '121198', 'Email@gmail.com', 1),
(36058, 'Nguyên Vũ', 'Đà Lạt', '998877', NULL, 1),
(23568977, 'Nguyễn Văn A', 'Đà Lạt', '0167556677', 'VanA@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE IF NOT EXISTS `loaiphong` (
  `idloaiphong` int(11) NOT NULL AUTO_INCREMENT,
  `loaiphong` varchar(20) NOT NULL,
  `dongia` int(11) NOT NULL,
  `donvi` varchar(20) DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  PRIMARY KEY (`idloaiphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`idloaiphong`, `loaiphong`, `dongia`, `donvi`, `tinhtrang`) VALUES
(1, 'AVG2', 600000, 'VND', 1),
(2, 'AVG', 400000, 'VND', 1),
(3, 'Cheap', 200000, 'VND', 0),
(4, 'VIP', 1200000, 'VND', 1),
(5, 'VIP2', 900000, 'VND', 0);

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
  `tinhtrang` int(1) NOT NULL,
  PRIMARY KEY (`idnhanvien`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnhanvien`, `hoten`, `cmnd`, `ngaysinh`, `sodt`, `email`, `tinhtrang`) VALUES
(1, 'Đỗ Ngọc Dân', 1010810, '1989-03-21', '0123456872', 'ngocdan.ctk34@gmail.com', 0),
(2, 'Đặng Nguyễn Nguyên Vũ', 19216810, '1992-06-11', '0167556677', 'nguyenvuctk34@gmail.com', 1),
(3, 'Nguyễn Nam Phú', 23457889, '1992-09-09', '0167556677', NULL, 0),
(4, 'Đinh Trí Dũng', 23568974, '1992-06-15', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phieudichvu`
--

CREATE TABLE IF NOT EXISTS `phieudichvu` (
  `idphieudichvu` int(11) NOT NULL AUTO_INCREMENT,
  `cmnd` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtoan` int(1) NOT NULL,
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
  `loaiphong` varchar(20) NOT NULL,
  `hinhanh` varchar(20) DEFAULT NULL,
  `tinhtrang` int(1) NOT NULL,
  PRIMARY KEY (`idphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`idphong`, `tenphong`, `loaiphong`, `hinhanh`, `tinhtrang`) VALUES
(1, 'HD01', 'VIP', 'vip.jpg', 1),
(2, 'PH02', 'VIP2', NULL, 1),
(3, 'Mini103', 'AVG', 'mini103.jpg', 1),
(4, 'Cheap203', 'Cheap', NULL, 0),
(5, 'HDD01', 'AVG', 'HDD01.jpg', 0),
(6, 'SSD01', 'VIP', 'ssd01.jpg', 1),
(7, 'DDR', 'Cheap', NULL, 0),
(8, '101', 'VIP2', '101.jpg', 0),
(9, '202', 'AVG2', '202.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `idtaikhoan` int(11) NOT NULL AUTO_INCREMENT,
  `tentk` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `quyen` int(11) NOT NULL,
  `tinhtrang` int(1) NOT NULL,
  PRIMARY KEY (`idtaikhoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `tentk`, `matkhau`, `quyen`, `tinhtrang`) VALUES
(1, 'tridung', '123456', 1, 1),
(2, 'namphu', '123456', 1, 1),
(3, 'nguyenvu', 'vunguyen', 2, 1),
(4, 'ngocdan', '123456', 2, 1),
(5, 'khicon', '123', 2, 0),
(6, 'chanqua', '312', 2, 0),
(7, 'ctk34', '123', 2, 0),
(8, 'nhanvien1', '321', 2, 1);

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

