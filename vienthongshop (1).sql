-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 08:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vienthongshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123'),
(2, 'admin2', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_dh`
--

CREATE TABLE `chitiet_dh` (
  `id_dh` int NOT NULL,
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sp`
--

CREATE TABLE `danhmuc_sp` (
  `id_dm` int NOT NULL,
  `ten_dm` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `danhmuc_sp`
--

INSERT INTO `danhmuc_sp` (`id_dm`, `ten_dm`) VALUES
(3, 'Tổng đài điện thoại nội bộ'),
(4, 'Camera quan sát'),
(5, 'Máy vi tính - Laptop'),
(6, 'Thiết bị mạng');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int NOT NULL,
  `ten_kh` varchar(256) NOT NULL,
  `sdt_kh` int NOT NULL,
  `dc_kh` varchar(256) NOT NULL,
  `trangthai` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int NOT NULL,
  `id_danhmuc` int NOT NULL,
  `ten_sp` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `maso_sp` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `giaithich_sp` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_imgsp` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gia_sp` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `id_danhmuc`, `ten_sp`, `maso_sp`, `giaithich_sp`, `link_imgsp`, `gia_sp`) VALUES
(5, 1, 'TỔNG ĐÀI ĐIỆN THOẠI NỘI BỘ PANA', 'ĐTPN01', 'Hỗ trợ 2 cổng LAN 10/100, có PoE. Hỗ trợ 2 tài khoản SIP. Màn hình LCD công nghệ mới, giúp hiển thiệ rõ các chức năng', 'public/frontend/images/dt1.jpg', 3000000),
(6, 2, 'CAMERA QUAN SÁT DAHUA IP 2.0', 'CMRIPĐH01', 'Camera ip dahua 2.0\r\nđộ phẩn giải 2.0, với thiết kế vỏ kim loại nhỏ gọn, thích hợp sử dụng trong nhà và ngoài trời, cho hình ảnh rõ nét', 'public/frontend/images/camera.jpg', 500000),
(7, 4, 'CÁP MẠNG 5E GOLDEL LINK', 'CM5E01', 'PN: TW1101-1. Có 02 màu: Trắng, Cam. Chiều dài mỗi cuộn là 305m\r\nPN: TW1101-1. Có 02 màu: Trắng, Cam. Chiều dài mỗi cuộn là 305m', 'public/frontend/images/capmang.jpg', 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `chitiet_dh`
--
ALTER TABLE `chitiet_dh`
  ADD PRIMARY KEY (`id_dh`);

--
-- Indexes for table `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chitiet_dh`
--
ALTER TABLE `chitiet_dh`
  MODIFY `id_dh` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc_sp`
--
ALTER TABLE `danhmuc_sp`
  MODIFY `id_dm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
