-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 11:29 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train006`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `nguoiGT` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `level`, `fullname`, `gender`, `birthday`, `phone`, `avatar`, `nguoiGT`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1, 'Nguyễn Văn Đại', 'nam', '1995-08-02', '01679178772', '1.jpg', ''),
(2, 'hocnv', 'hocnv@gmail.com', '123456', 2, 'nguyễn văn học', 'nam', '2016-11-01', '0183939988', '01_2.jpg', ''),
(3, 'abc', 'abc@gmail.com', '123456', 3, 'nguyen van a', 'nu', '2016-11-09', '025656222', '3.jpg\r\n', ''),
(4, 'xyz', 'xyz@gmail.com', '123456', 2, 'nguyen van c', 'nam', '2016-11-01', '201454111', '4.jpg', ''),
(5, 'hoan', 'hoan@gmail.com', 'repass', 3, 'khieu van hoan', 'nam', '2016-11-24', '013365222', '3.jpg', ''),
(6, 'ko', 'ko@gmail.com', '123456', 3, 'Phạm Thị C', 'nu', '2016-11-05', '01679178772', '6.jpg', 'hoan@gmail.com'),
(7, 'ngoc', 'ngoc@gmail.com', '123456', 2, 'Nguyễn Thị  Thu C', 'nu', '1996-11-01', '0165867762', '4.jpg', 'abc@gmail.com'),
(8, 'khanh', 'khanh@gmail.com', '123456', 3, 'Đinh Gia Khánh', 'nam', '2016-11-04', '1242434', '10.jpg', 'abc@gmail.com'),
(9, 'dainv', 'dainv320@wru.vn', '123456', 3, 'Nguyễn Văn Đại', 'nam', '2016-11-17', '01679178772', '01 (1).jpg', 'hocnv@gmail.com'),
(10, 'dainv123', 'dainv95@gmail.com', '123', 3, 'Nguyễn Văn Đại', 'nam', '2016-11-24', '01365225', '1_12.jpg', 'abc@gmail.com'),
(11, '123', '123@gmail.com', '123', 3, '12', 'nam', '2016-11-17', '1242434', '01.jpg', 'hocnv@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
