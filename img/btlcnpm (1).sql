-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 05:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btlcnpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `ngayLap` datetime NOT NULL,
  `soLuongBan` int(11) DEFAULT NULL,
  `maKH` int(11) NOT NULL,
  `maSach` int(11) DEFAULT NULL,
  `thanhTien` int(255) NOT NULL,
  `thanhToan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `ngayLap`, `soLuongBan`, `maKH`, `maSach`, `thanhTien`, `thanhToan`) VALUES
(1, '2016-11-29 00:00:00', 2, 1, 2, 100, 1),
(2, '2016-11-29 04:27:13', 1, 2, 1, 100, 1),
(3, '2016-11-03 00:00:00', 1, 1, 1, 100, 1),
(4, '2016-11-02 00:00:00', 1, 2, 1, 152, 1),
(5, '2016-11-30 14:55:24', 1, 5, 8, 2000, 1),
(6, '2016-11-30 14:56:42', 1, 5, 2, 100, 1),
(7, '2016-11-30 15:26:42', 12, 3, 2, 1200, 1),
(8, '2016-11-30 15:37:54', 1, 3, 8, 200000, 1),
(9, '2016-12-01 10:14:45', 10, 4, 8, 20000, 1),
(10, '2016-12-01 12:30:54', 1, 2, 2, 100, 1),
(11, '2016-12-01 12:33:45', 10, 2, 2, 1000, 1),
(12, '2016-12-01 12:56:31', 12, 4, 1, 2400, 1),
(13, '2016-12-01 14:25:15', 1, 2, 10, 2000, 1),
(14, '2016-12-01 14:29:43', 1, 2, 10, 2000, 1),
(16, '2016-12-01 14:44:21', 1, 1, 10, 2000, 0),
(17, '2016-12-01 14:44:25', 1, 1, 10, 2000, 0),
(18, '2016-12-01 14:44:29', 2, 1, 8, 4000, 0),
(19, '2016-12-01 16:49:15', 10, 9, 10, 20000, 0),
(20, '2016-12-01 16:49:20', 1, 9, 10, 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `hotenKH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienThoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sotienNo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `hotenKH`, `diaChi`, `dienThoai`, `email`, `sotienNo`) VALUES
(1, 'Mạnh trung', 'ha nội', '0123456789', 'trungoc@gmail.com', 9),
(2, 'Phạm đăng Sứ', ' Hưng yên', '0124455221', 'siu@gmail.com', 1001),
(3, 'Nguyễn Văn Đại', 'hanoi', '1242434', '', 0),
(4, 'Nguyễn Đức Tài', 'Nam Định', '016791787', 'taioc@gmail.com', 100),
(5, 'Thành Bop', 'Hà Nội', '01679178772', 'thanhbop@gmail.com', 21000),
(6, 'Đinh Gia Khánh', 'hanoi', '', 'admin@gmail.com', 0),
(7, 'Khiếu Văn Hoàn', 'Bắc Ninh', '0198887778', 'hoannv@gmail.com', 0),
(8, '', 'eqe', '1242434', 'eqe@gmail.com', 0),
(9, 'Nguyen van Đại', 'Hà Nội', '1242434', 'dainv320@wru.vn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `maPN` int(11) NOT NULL,
  `ngayNhap` datetime DEFAULT NULL,
  `soLuong` int(11) NOT NULL,
  `maSach` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `maSach` int(11) NOT NULL,
  `tenSach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `theLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soLuongTon` int(11) NOT NULL,
  `donGia` int(100) NOT NULL,
  `ngayNhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`maSach`, `tenSach`, `theLoai`, `tacGia`, `soLuongTon`, `donGia`, `ngayNhap`) VALUES
(1, 'doremo', 'tamly', 'abc', 18, 200, '2016-11-29'),
(2, 'hentai', 'ham', 'hdkd', 19, 100, '2016-11-30'),
(8, 'abc', 'Truyện Tranh', 'Hoàn Khế', 287, 2000, '2016-11-29'),
(9, 'naruto', 'hoathinh', 'trung oc', 20, 100, '2016-11-30'),
(10, 'trung oc', 'tamty', 'nguyen dao', 2984, 2000, '2016-12-01'),
(11, 'Tâm lý tình cảm', 'Tâm lý tình cảm', 'trung oc', 140, 100, '2016-12-01'),
(12, 'hiden', 'Truyện Tranh', 'Hoàn Khế', 100, 20000, '2016-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('admin', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKH` (`maKH`),
  ADD KEY `maSach` (`maSach`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`maPN`),
  ADD KEY `maSach` (`maSach`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`maSach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `maPN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `maSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`maSach`) REFERENCES `sach` (`maSach`);

--
-- Constraints for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`maSach`) REFERENCES `sach` (`maSach`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
