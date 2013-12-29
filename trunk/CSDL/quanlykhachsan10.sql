-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2013 at 01:32 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`iddichvu`, `tendv`, `gia`, `donvi`, `tinhtrang`) VALUES
(1, 'cơm', 50000, 'VND', 1),
(5, 'karaoke', 100000, 'VND', 1),
(3, 'massage', 100000, 'VND', 0),
(4, 'Karaoke', 200000, 'VND', 1),
(6, 'karaoke', 600000, 'VND', 1),
(9, 'abc', 123, 'VND', 1);

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
(23568977, 'Nguyễn Văn A', 'Đà Lạt', '0167556677', 'VanA@gmail.com', 0),
(1, 'a', 'a', '1212', 'asd@asd', 1),
(2, '2', '2', '2', '2@asdas', 1),
(34895, '3', '3', '3', 'asdad@asd', 1),
(8, '8', '8', '8', 'dfg@fhgf', 1),
(9, 'a', 'a', '1212', 'asd@asd', 1),
(4, 'sdf', 'sdf', '12', 'dfd@ads', 1),
(6, 'asd', 'asd', 'adas', 'sda@asd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaiphong`
--

CREATE TABLE IF NOT EXISTS `loaiphong` (
  `idloaiphong` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `loaiphong` varchar(20) NOT NULL,
  `dongia` int(11) NOT NULL,
  `donvi` varchar(20) DEFAULT NULL,
  `tinhtrang` int(11) NOT NULL,
  PRIMARY KEY (`idloaiphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `loaiphong`
--

INSERT INTO `loaiphong` (`idloaiphong`, `loaiphong`, `dongia`, `donvi`, `tinhtrang`) VALUES
(1, 'AVG2', 600000, 'VND', 1),
(2, 'AVG', 400000, 'VND', 1),
(3, 'Cheap', 200000, 'VND', 0),
(4, 'VIP', 1200000, 'VND', 1),
(6, 'Test', 500000, 'VND', 1);

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
  `idphong` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tenphong` varchar(50) NOT NULL,
  `loaiphong` varchar(20) NOT NULL,
  `hinhanh` varchar(20) DEFAULT NULL,
  `tinhtrang` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`idphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`idphong`, `tenphong`, `loaiphong`, `hinhanh`, `tinhtrang`) VALUES
(1, 'HD02', 'Cheap', 'vip.jpg', 1),
(2, 'PH02', 'VIP2', NULL, 1),
(3, 'Mini103', 'AVG', 'mini103.jpg', 1),
(5, 'HDD01', 'AVG', 'HDD01.jpg', 0),
(6, 'SSD01', 'VIP', 'ssd01.jpg', 1),
(7, 'DDR', 'Cheap', '', 0),
(8, '101', 'VIP2', '101.jpg', 0),
(9, '202', 'AVG2', '202.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE IF NOT EXISTS `quyen` (
  `idquyen` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenquyen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tenhienthi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idquyen`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`idquyen`, `tenquyen`, `tenhienthi`, `ghichu`) VALUES
(22, 'delete_user', 'Xóa thành viên', ''),
(2, 'update_user', 'Cập nhật thành viên', '.........'),
(3, 'addnew_user', 'Thêm thành viên', '--------'),
(8, 'update_service', 'Cập nhật dịch vụ', ''),
(9, 'delete_service', 'Xóa dịch vụ', ''),
(10, 'manage_capability', 'Quản lý quyền', ''),
(11, 'manage_role', 'Quản lý vai trò', ''),
(14, 'manage_room', 'Quản lý phòng', ''),
(13, 'manage_service', 'Quản lý dịch vụ', '..................'),
(15, 'manage_roomtype', 'Quản lý loại phòng', ''),
(24, 'aa', 'test', ''),
(25, 'manage_roomlease', 'Quản lý thuê phòng', ''),
(26, 'manage_servicelease', 'Quản lý thuê dịch vụ', '');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `idtaikhoan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tentk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL,
  `vaitro` int(10) unsigned NOT NULL,
  `tinhtrang` tinyint(1) unsigned NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idtaikhoan`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `tentk`, `matkhau`, `ngaytao`, `vaitro`, `tinhtrang`, `ghichu`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2013-12-23 08:42:08', 1, 1, '123'),
(2, 'quanly1', '96f6f261603105bcd4a039ba0349be48', '2013-12-23 09:23:06', 2, 1, '123'),
(4, 'dung', '625d45c587033e8970af8b4e3fdb575c', '2013-12-24 19:15:49', 2, 1, ''),
(6, 'phu', 'e6354b14257db8ac7760967c51d04a96', '2013-12-24 23:08:20', 17, 1, 'quyền quản lý 1'),
(10, 'abc', '900150983cd24fb0d6963f7d28e17f72', '2013-12-28 13:38:16', 1, 1, ''),
(9, 'tridung', '1651cb19e9219de058e31fb769506dd2', '2013-12-27 14:05:47', 1, 0, ''),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', '2013-12-28 15:51:05', 0, 1, ''),
(12, 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2013-12-28 18:27:23', 0, 1, ''),
(13, 'a', '0cc175b9c0f1b6a831c399e269772661', '2013-12-28 18:31:33', 0, 1, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `thuephong`
--

CREATE TABLE IF NOT EXISTS `thuephong` (
  `idthuephong` int(10) unsigned NOT NULL,
  `idphong` int(11) unsigned NOT NULL,
  `cmnd` int(11) NOT NULL,
  `ngayden` date NOT NULL,
  `ngaydi` date DEFAULT NULL,
  PRIMARY KEY (`idphong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thuephong`
--

INSERT INTO `thuephong` (`idthuephong`, `idphong`, `cmnd`, `ngayden`, `ngaydi`) VALUES
(0, 1, 2, '2013-12-27', '2013-12-27'),
(0, 9, 5, '2013-12-14', '2013-12-14'),
(0, 36058, 1, '0000-00-00', '0000-00-00'),
(0, 1806, 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE IF NOT EXISTS `vaitro` (
  `idvaitro` int(10) NOT NULL AUTO_INCREMENT,
  `tenvaitro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` text COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idvaitro`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`idvaitro`, `tenvaitro`, `quyen`, `ghichu`) VALUES
(1, 'Super Admin', 'a:12:{i:0;s:2:"22";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"8";i:4;s:1:"9";i:5;s:2:"10";i:6;s:2:"11";i:7;s:2:"14";i:8;s:2:"13";i:9;s:2:"15";i:10;s:2:"25";i:11;s:2:"26";}', '123'),
(2, 'Quản lý 1', 'a:6:{i:0;s:1:"7";i:1;s:1:"8";i:2;s:1:"9";i:3;s:2:"14";i:4;s:2:"13";i:5;s:2:"15";}', '.........'),
(11, 'thanhvien', 'a:1:{i:0;s:2:"15";}', 'chi co quan ly phong'),
(13, 'quản lý dịch vụ', 'a:1:{i:0;s:2:"13";}', 'quản lý dịch vụ'),
(18, 'abc', 'a:3:{i:0;s:2:"14";i:1;s:2:"13";i:2;s:2:"15";}', '');
