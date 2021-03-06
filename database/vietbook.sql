-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2021 lúc 10:25 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

﻿--
-- Cơ sở dữ liệu: `vietbook`
--
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `mactdh` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `masach` int(111) NOT NULL,
  `soluongdat` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

﻿INSERT INTO `chitietdonhang` (`mactdh`, `madh`, `masach`, `soluongdat`, `thanhtien`) VALUES
(10, 33, 64, 1, 124000)﻿,
(12, 35, 116, 1, 83000)﻿,
(13, 36, 73, 1, 43000)﻿,
(14, 37, 118, 1, 64000)﻿,
(15, 38, 76, 1, 93000)﻿,
(16, 39, 43, 4, 748000)﻿,
(17, 40, 28, 4, 160000)﻿,
(18, 41, 36, 1, 69000)﻿,
(19, 42, 3, 1, 89000)﻿,
(20, 43, 98, 1, 198000)﻿,
(21, 44, 98, 1, 198000)﻿,
(22, 44, 90, 1, 112000)﻿,
(24, 46, 1, 3, 237000)﻿,
(25, 47, 1, 5, 395000)﻿,
(26, 48, 5, 3, 231000)﻿,
(28, 50, 13, 1, 52000)﻿,
(29, 51, 47, 3, 90000)﻿,
(30, 51, 29, 3, 90000)﻿,
(32, 53, 5, 2, 154000)﻿,
(33, 54, 22, 1, 72000)﻿,
(34, 55, 58, 1, 172000)﻿,
(47, 76, 1, 4, 288000)﻿,
(48, 77, 51, 3, 240000)﻿,
(49, 78, 107, 3, 108000)﻿,
(50, 79, 100, 1, 72000)﻿,
(51, 80, 98, 1, 198000)﻿,
(52, 81, 35, 4, 396000)﻿,
(53, 82, 89, 1, 51000)﻿,
(56, 85, 122, 1, 52000)﻿,
(57, 86, 47, 1, 30000)﻿,
(58, 87, 11, 1, 60000)﻿,
(59, 88, 15, 1, 54000)﻿,
(60, 88, 123, 1, 82000)﻿,
(63, 93, 25, 1, 56000)﻿,
(64, 94, 107, 1, 36000)﻿,
(68, 97, 8, 1, 18000)﻿,
(69, 97, 37, 1, 96000)﻿,
(70, 98, 122, 1, 52000)﻿,
(71, 99, 66, 1, 164000)﻿,
(72, 100, 105, 2, 176000)﻿,
(73, 101, 67, 1, 69000)﻿,
(74, 102, 46, 1, 131000)﻿,
(75, 103, 113, 1, 135000)﻿,
(76, 104, 58, 1, 172000)﻿,
(77, 105, 52, 1, 148000)﻿,
(78, 106, 84, 3, 288000)﻿,
(79, 107, 8, 1, 18000)﻿,
(80, 108, 89, 1, 51000)﻿,
(81, 109, 12, 2, 130000)﻿,
(82, 110, 2, 4, 340000)﻿,
(96, 119, 5, 1, 77000)﻿,
(97, 119, 2, 1, 85000)﻿,
(98, 120, 4, 1, 71000)﻿,
(99, 120, 14, 1, 26000)﻿,
(106, 124, 89, 2, 102000)﻿,
(107, 124, 4, 2, 142000)﻿,
(110, 127, 1, 1, 72000)﻿,
(111, 128, 2, 1, 85000)﻿,
(112, 129, 15, 1, 54000)﻿,
(113, 130, 84, 2, 192000)﻿,
(114, 131, 78, 3, 144000)﻿,
(115, 132, 15, 1, 54000)﻿,
(116, 132, 1, 1, 72000)﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

﻿INSERT INTO `danhmuc` (`madm`, `tendm`) VALUES
(1, 'Văn học')﻿,
(2, 'Kinh tế')﻿,
(3, 'Kĩ năng sống')﻿,
(4, 'Sách giáo khoa - tham khảo')﻿,
(5, 'Sách ngoại ngữ')﻿,
(6, 'Tiểu sử - Hồi ký')﻿,
(7, 'Lịch sử')﻿,
(8, 'Địa lý')﻿,
(9, 'Khoa học ký thuật')﻿,
(10, 'Từ điển')﻿,
(11, 'Âm nhạc - Mỹ thuật')﻿,
(12, 'Thể dục thể thao - Giải trí')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `manv` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tinhtrang` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `guitang` tinyint(4) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `donhang`
--

﻿INSERT INTO `donhang` (`madh`, `manv`, `makh`, `ngaydat`, `tinhtrang`, `guitang`, `tongtien`) VALUES
(33, 4, 3, '2020-07-25', 'Giao hàng thành công', 0, 124000)﻿,
(35, 3, 1, '2020-07-25', 'Nhận hàng - Hoàn tất đơn hàng', 0, 83000)﻿,
(36, 3, 3, '2020-07-25', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 43000)﻿,
(37, 3, 1, '2020-07-26', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 64000)﻿,
(38, 4, 1, '2020-07-27', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 93000)﻿,
(39, 3, 1, '2020-07-27', 'Giao hàng thành công', 0, 748000)﻿,
(40, 4, 3, '2020-07-27', 'Nhận hàng - Hoàn tất đơn hàng', 0, 160000)﻿,
(41, 4, 3, '2020-07-27', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 69000)﻿,
(42, 3, 1, '2020-07-27', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 89000)﻿,
(43, 4, 1, '2020-07-27', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 198000)﻿,
(44, 4, 1, '2020-07-27', 'Nhận hàng - Hoàn tất đơn hàng', 0, 310000)﻿,
(46, 3, 3, '2020-07-29', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 237000)﻿,
(47, 4, 3, '2020-07-29', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 395000)﻿,
(48, 1, 3, '2020-07-29', 'Chờ duyệt', 0, 231000)﻿,
(50, 4, 3, '2020-07-29', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 52000)﻿,
(51, 4, 1, '2020-07-29', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 180000)﻿,
(53, 1, 4, '2020-08-10', 'Chờ duyệt', 0, 154000)﻿,
(54, 4, 1, '2020-08-20', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 72000)﻿,
(55, 4, 3, '2020-09-15', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 172000)﻿,
(76, 3, 1, '2020-09-16', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 288000)﻿,
(77, 3, 3, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 240000)﻿,
(78, 4, 3, '2020-09-17', 'Không nhận hàng', 0, 108000)﻿,
(79, 3, 3, '2020-09-17', 'Giao hàng thành công', 0, 72000)﻿,
(80, 3, 1, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 198000)﻿,
(81, 3, 1, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 396000)﻿,
(82, 3, 1, '2020-09-17', 'Gói hàng', 0, 51000)﻿,
(85, 4, 1, '2020-09-17', 'Đang vận chuyển', 0, 52000)﻿,
(86, 3, 1, '2020-09-17', 'Gói hàng', 0, 30000)﻿,
(87, 4, 1, '2020-09-17', 'Đang vận chuyển', 0, 60000)﻿,
(88, 3, 1, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 136000)﻿,
(93, 3, 1, '2020-09-17', 'Đang vận chuyển', 1, 56000)﻿,
(94, 3, 1, '2020-09-17', 'Gói hàng', 1, 36000)﻿,
(97, 1, 1, '2020-09-17', 'Chờ duyệt', 0, 114000)﻿,
(98, 3, 1, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 52000)﻿,
(99, 3, 1, '2020-09-17', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 164000)﻿,
(100, 1, 1, '2020-09-17', 'Chờ duyệt', 0, 176000)﻿,
(101, 1, 1, '2020-09-17', 'Chờ duyệt', 0, 69000)﻿,
(102, 1, 1, '2020-09-17', 'Chờ duyệt', 0, 131000)﻿,
(103, 1, 1, '2020-09-17', 'Chờ duyệt', 0, 135000)﻿,
(104, 4, 1, '2020-09-17', 'Gói hàng', 0, 172000)﻿,
(105, 1, 1, '2020-09-17', 'Chờ duyệt', 1, 148000)﻿,
(106, 3, 3, '2020-09-17', 'Đang vận chuyển', 0, 288000)﻿,
(107, 1, 3, '2020-09-17', 'Chờ duyệt', 0, 18000)﻿,
(108, 1, 3, '2020-09-17', 'Chờ duyệt', 1, 51000)﻿,
(109, 3, 1, '2020-09-18', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 130000)﻿,
(110, 3, 1, '2020-09-18', 'Nhận hàng - Hoàn tất đơn hàng', 0, 340000)﻿,
(119, 3, 3, '2020-09-18', 'Nhận hàng - Hoàn tất đơn hàng', 0, 162000)﻿,
(120, 1, 1, '2020-09-18', 'Chờ duyệt', 1, 97000)﻿,
(124, 3, 1, '2020-09-19', 'Nhận hàng - Hoàn tất đơn hàng', 0, 244000)﻿,
(127, 3, 1, '2020-09-24', 'Gói hàng', 0, 72000)﻿,
(128, 3, 1, '2020-09-24', 'Nhận hàng - Hoàn tất đơn hàng', 0, 85000)﻿,
(129, 3, 1, '2020-09-26', 'Gói hàng', 0, 54000)﻿,
(130, 3, 1, '2020-09-26', 'Nhận hàng - Hoàn tất đơn hàng', 0, 192000)﻿,
(131, 3, 1, '2020-09-26', 'Không nhận hàng - Hoàn tất đơn hàng', 0, 144000)﻿,
(132, 1, 1, '2020-09-27', 'Chờ duyệt', 0, 126000)﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `guitang`
--

CREATE TABLE `guitang` (
  `maguitang` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `tennn` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `diachigt` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  `sdtgt` int(11) NOT NULL,
  `emailgt` varchar(100) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `guitang`
--

﻿INSERT INTO `guitang` (`maguitang`, `madh`, `tennn`, `diachigt`, `sdtgt`, `emailgt`) VALUES
(1, 93, 'Lê Văn Hoàng', '42 Dũng Sĩ Thanh Khê - Đà Nẵng', 123123123, 'hoangle@gmail.com')﻿,
(2, 94, 'Hoàng Hà', '123 Ông Ích Khiêm - Đà Nẵng', 851154321, 'hoangha@gmail.com')﻿,
(3, 105, 'Văn Đức ', '48 Cao Thắng - Đà Nẵng', 369258741, 'vanduc@gmail.com')﻿,
(4, 108, 'Hoàng An', '32 Nguyễn Tất Thành - Đà Nẵng', 789561526, 'hoangan@gmail.com')﻿,
(5, 120, 'Văn Đức', '142 Trần Phú - Đà Nẵng', 16456842, 'vanduc@gmail.com')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `usename` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `diachikh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdtkh` int(11) NOT NULL,
  `emailkh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

﻿INSERT INTO `khachhang` (`makh`, `tenkh`, `usename`, `password`, `diachikh`, `sdtkh`, `emailkh`, `ngaysinh`, `gioitinh`, `ngaydangky`) VALUES
(1, 'Nhật Nguyễn', 'khachhang', '123456', 'Da Nang', 385842356, 'ducnhatnguyenvan@gmail.com', '1999-10-27', 'Nam', '2020-05-13')﻿,
(3, 'Lê Văn Hải', 'haihai', '123456', '21 Dũng Sĩ Thanh Khê - Đà Nẵng', 45454545, 'haihai@gmail.com', '1999-02-02', 'Nam', '2020-07-24')﻿,
(4, 'Nhật Nguyễn Văn Đức', 'nguyennguyen', 'nguyennguyen', '312 Nguyễn Tất Thành - Đà Nẵng', 385842222, 'nguyennguyen@gmail.com', '1998-03-01', 'Nam', '2020-08-10')﻿,
(5, 'Hoàng Lê Văn', 'khachhang2', 'khachhang2', '43 Ông Ích Khiêm', 33358654, 'levan@gmail.com', '1998-04-04', 'Nam', '2020-09-24')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `usename` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf32_unicode_ci NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` varchar(50) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

﻿INSERT INTO `nhanvien` (`manv`, `tennv`, `usename`, `password`, `diachi`, `sdt`, `email`, `ngaysinh`, `gioitinh`, `ngaydangky`, `phanquyen`) VALUES
(1, 'Nguyen Van Duc Nhat', 'admin', 'admin', 'Hue', 123123123, 'nguyenvanducnhat@gmail.com', '1999-10-27', 'Nam', '2020-05-13', 'admin')﻿,
(2, 'Nguyen Văn Hoàng', 'nvkho', 'nvkho', 'Quang Nam', 345, 'nhatduc@gmail.com', '1999-03-03', 'Nam', '2020-06-01', 'nvkho')﻿,
(3, 'Nguyễn Văn Nam', 'giaohang', 'giaohang', 'Quang Nam', 784512963, 'nhatnhat@gmail.com', '1998-03-29', 'Nam', '2020-06-12', 'nvgiaohang')﻿,
(4, 'Hoàng Anh', 'giaohang1', 'giaohang1', 'Đà Nẵng', 78787878, 'haianh@gmail.com', '2000-04-19', 'Nam', '2020-06-22', 'nvgiaohang')﻿,
(30, 'Le Van Anh Hung	', 'nvkho1', 'nvkho1', '412 Nguyễn Tất Thành - Đà Nẵng', 385842356, 'lehung@gmail.com', '1998-02-03', 'Nam', '2020-07-24', 'nvkho')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `manxb` int(11) NOT NULL,
  `tennxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `diachinxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sdtnxb` int(11) NOT NULL,
  `emailnxb` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

﻿INSERT INTO `nhaxuatban` (`manxb`, `tennxb`, `diachinxb`, `sdtnxb`, `emailnxb`) VALUES
(1, 'NXB Trẻ', 'TP Hồ Chí Minh', 99999999, 'nxbtre@gmail.com')﻿,
(2, 'NXB Tổng hợp TPHCM', 'TP Hồ Chí Minh', 123456987, 'ncbtonghop@gmail.com')﻿,
(3, 'NXB Hà Nội', 'Hà Nội', 321456789, 'nxbhanoi@gmail.com')﻿,
(4, 'NXB Văn học', 'Tp Hồ Chí Minh', 457892165, 'nxbvanhoc@gmail.com')﻿,
(5, 'NXB Hội nhà văn', 'Hà Nội', 789456123, 'nxbhnv@gmail.com')﻿,
(6, 'NXB Thanh niên', 'TP Hồ Chí Minh', 456123798, 'nxbthanhnien@gmail.com')﻿,
(7, 'NXB Kim Đồng', 'Tp Hồ Chí Minh', 321478596, 'nxbkimdong@gmail.com')﻿,
(8, 'NXB Công thương', 'Hà Nội', 963258741, 'nxbcongthuong@gmail.com')﻿,
(9, 'NXB Lao động', 'TP Hồ Chí Minh', 74589631, 'nxblaodong@gmail.com')﻿,
(10, 'NXB Lao động và xã hội', 'TP Hồ Chí Minh', 159874632, 'nxbldxh@gmail.com')﻿,
(11, 'NXB Hồng Đức', 'Hồng Đức', 154789632, 'nxbhongduc@gmail.com')﻿,
(12, 'NXB Thế giới', 'TP Hồ Chí Minh', 123965874, 'nxbthegioi@gmail.com')﻿,
(13, 'NXB Dân trí', 'TP Hồ Chí Minh', 145236987, 'nxbdantri@gmail.com')﻿,
(14, 'NXB Đại Học Quốc Gia Hà Nội', 'Hà Nội', 745896321, 'nxbdhqghn@gmail.com')﻿,
(15, 'NXB Tri Thức', 'Đà Nẵng', 563214789, 'nxbtrithuc@gmail.com')﻿,
(16, 'NXB Đại học Vinh', 'Nghệ An', 693258741, 'nxbvinh@gmail.com')﻿,
(17, 'NXB Khoa học xã hội', 'Hà Nội', 748512369, 'nxbkhxh@gmail.com')﻿,
(18, 'NXB Đại học quốc gia TPHCM', 'TP Hồ Chí Minh', 124578963, 'nxbdhqghcm@gmail.com')﻿,
(19, 'NXB Giáo dục VIệt Nam', 'Hà Nội', 121412135, 'nxbgdvn@gmail.com')﻿,
(20, 'NXB Đà Nẵng', 'Đà Nẵng', 789652341, 'nxbdanang@gmail.com')﻿,
(21, 'NXB Đại học sư phạm', 'TP Hồ Chí Minh', 896574321, 'nxbdhsp@gmail.com')﻿,
(22, 'NXB Báo Sinh Viên VN - Hoa Học ', 'TP Hồ Chí Minh', 524137896, 'nxbbsv@gmail.com')﻿,
(23, 'NXB Kinh tế TP.Hồ Chí Minh', 'TP.Hồ Chí Minh', 968741235, 'nxbkthcm@gmail.com')﻿,
(24, 'NXB Công an nhân dân', 'Hà Nội', 914325687, 'nxbcand@gmail.com')﻿,
(25, 'NXB Văn hóa Văn nghệ', 'Hà Nội', 963125478, 'nxbvhvn@gmail.com')﻿,
(26, 'NXB Mỹ Thuật', 'Đà Nẵng', 917382465, 'nxbmythuat@gmail.com')﻿,
(27, 'NXB Văn Hóa Dân Tộc', 'Tp Hồ Chí Minh', 123658794, 'nxbvhdt@gmail.com')﻿,
(28, 'NXB Thông Tấn', 'Tp Hồ Chí Minh', 985632147, 'nxbthongtan@gmail.com')﻿,
(29, 'NXB Chính trị Quốc gia và Sự thật', 'Hà Nội', 35978156, 'nxbctqgst@gmail.com')﻿,
(30, 'NXB Hải Phòng', 'Hải Phòng', 360254890, 'nxbhaiphong@gmail.com')﻿,
(31, 'NXB Thống Kê', 'Tp Hồ Chí Minh', 901257841, 'nxbthongke@gmail.com')﻿,
(32, 'NXB Thanh Hóa', 'Thanh Hóa', 201459635, 'nxbthanhhoa@gmail.com')﻿,
(33, 'NXB Giao Thông Vận Tải', 'TP Hồ Chí Minh', 701235896, 'nxbgtvt@gmail.com')﻿,
(34, 'NXB Phương Đông', 'Đà Nẵng', 152304489, 'nxbphuongdong@gmail.com')﻿,
(35, 'NXB Âm Nhạc', 'Hà Nội', 302145875, 'nxbannhac@gmail.com')﻿,
(36, 'NXB Thể Thao và Du Lịch', 'Hà Nội', 104523687, 'nxbttdl@gmail.com')﻿,
(37, 'NXB Thể Dục - Thể Thao', 'Tp Hồ Chí Minh', 220113365, 'nxbtttt@gmail.com')﻿,
(38, 'NXB Phụ Nữ', 'Đà Nẵng', 112002145, 'nxbphunu@gmail.com')﻿,
(39, 'NXB Văn Hoá Thông Tin', 'TP Hồ Chí Minh', 10223547, 'nxbvhtt@gmail.com')﻿,
(40, 'NXB Bách Khoa Hà Nội', 'Hà Nội', 1112020220, 'nxbbkhn@gmail.com')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `manhap` int(11) NOT NULL,
  `manv` int(11) NOT NULL,
  `masach` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `ngaynhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

﻿INSERT INTO `phieunhap` (`manhap`, `manv`, `masach`, `soluongnhap`, `ngaynhap`) VALUES
(1, 2, 122, 50, '2020-07-30')﻿,
(2, 2, 123, 50, '2020-07-30')﻿,
(3, 2, 124, 50, '2020-07-30')﻿,
(7, 2, 102, 50, '2020-09-14')﻿;
﻿
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masach` int(11) NOT NULL,
  `madm` int(11) NOT NULL,
  `manxb` int(11) NOT NULL,
  `tensach` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `tentacgia` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `namxb` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `noibat` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
﻿
--
-- Đang đổ dữ liệu cho bảng `sach`
--

﻿INSERT INTO `sach` (`masach`, `madm`, `manxb`, `tensach`, `tentacgia`, `namxb`, `soluong`, `gia`, `hinhanh`, `noibat`) VALUES
(1, 1, 1, 'Cô gái đến từ hôm qua', 'Nguyễn Nhật Ánh', 2017, 44, 72000, 'image_book/cogai.jpg', 'co')﻿,
(2, 1, 1, 'Mắt biếc', 'Nguyễn Nhật Ánh', 2019, 44, 85000, 'image_book/matbiec.jpg', '')﻿,
(3, 1, 2, 'Dấu chân trên cát', 'Nguyên Phong', 2016, 50, 89000, 'image_book/dauchantrencat.jpg', '')﻿,
(4, 1, 3, 'Em là nhà', 'Lan Rùa', 2017, 49, 71000, 'image_book/emlanha.jpg', '')﻿,
(5, 1, 5, 'Chuyện ngõ nghèo', 'Nguyễn Xuân Khánh', 2019, 49, 77000, 'image_book/chuyenngongheo.jpg', '')﻿,
(6, 1, 6, 'Phố', 'Chu Lai', 2019, 50, 82000, 'image_book/pho.jpg', '')﻿,
(7, 1, 7, 'Những hình bóng cũ', 'Ngọc Giao', 2019, 50, 42000, 'image_book/nhunghinhbongcu.jpg', '')﻿,
(8, 1, 4, 'Kỹ nghệ lấy tây', 'Vũ Trọng Phụng', 2018, 47, 18000, 'image_book/kynghelaytay.jpg', '')﻿,
(9, 1, 4, 'Lều chõng', 'Ngô Tất Tố', 2016, 50, 41000, 'image_book/leuchong.jpg', '')﻿,
(10, 1, 4, 'Sống mòn', 'Nam Cao', 2019, 50, 54000, 'image_book/songmon.jpg', 'co')﻿,
(11, 2, 8, 'Uber - chuyến đi bão táp', 'Adam Lashinsky', 2017, 49, 60000, 'image_book/uber.png', '')﻿,
(12, 2, 9, 'Cuộc chiến Disney', 'Jame B.Stewcat', 2017, 50, 65000, 'image_book/disney.jpg', '')﻿,
(13, 2, 9, 'Giấc mơ hóa rồng', 'Huỳnh Bửu Sơn', 2016, 50, 52000, 'image_book/giacmohoarong.jpg', '')﻿,
(14, 2, 10, 'Du hành trong thế giới sáng tạo', 'Michael de Krefser', 2014, 49, 26000, 'image_book/duhanh.jpg', '')﻿,
(15, 2, 11, 'Hit Makes - Kẻ dẫn dăt truyền thông', 'Derek Thompson', 2018, 44, 54000, 'image_book/hitmakes.png', 'co')﻿,
(16, 2, 12, 'Tôi PR cho PR', 'Di Li', 2015, 50, 52000, 'image_book/toipr.jpg', '')﻿,
(17, 2, 38, 'Hiện thực hóa sự nghiệp', 'Kenneth Leow', 2018, 50, 59000, 'image_book/hienthuchoasunghiep.jpg', '')﻿,
(18, 2, 12, 'Cuộc cách mạng AI', 'Breth King', 2019, 50, 108000, 'image_book/cuoccachmangai.jpg', '')﻿,
(19, 2, 12, 'Sự kết thúc của thời đại giả kim', 'Mervyn King', 2019, 50, 108000, 'image_book/suketthuccuathoidaigiakim.jpg', '')﻿,
(20, 2, 12, 'Nghệ thuật lãnh đạo', 'Nhiều tác giả', 2017, 50, 78000, 'image_book/nghethuatlanhdao.jpg', '')﻿,
(21, 3, 12, 'Tư Duy Nhanh Và Chậm', 'Daniel Kahneman', 2018, 50, 180000, 'image_book/tuduynhanhvacham.jpg', '')﻿,
(22, 3, 4, 'Khéo Ăn Nói Sẽ Có Được Thiên Hạ', 'Trác Nhã', 2018, 50, 72000, 'image_book/kheoannoi.jpg', '')﻿,
(23, 3, 2, 'Đánh Thức Con Người Phi Thường Trong Bạn', 'Anthony Robbins', 2019, 50, 102000, 'image_book/danhthucconnguoitrongban.jpg', '')﻿,
(24, 3, 6, 'Hài Hước Một Chút Thế Giới Sẽ Khác Đi', 'The Book Worm', 2016, 50, 39000, 'image_book/haihuocmotchut.jpg', '')﻿,
(25, 3, 1, 'Trên Đường Băng', 'Tony Buổi Sáng', 2017, 49, 56000, 'image_book/trenduongbang.jpg', 'co')﻿,
(26, 3, 9, 'Dám Hạnh Phúc', 'Kishimi Ichiro', 2019, 50, 86000, 'image_book/damhanhphuc.jpg', '')﻿,
(27, 3, 12, 'Đừng Lựa Chọn An Nhàn Khi Còn Trẻ', 'Cảnh Thiên', 2019, 50, 60000, 'image_book/dungluachonannhankhicontre.jpg', '')﻿,
(28, 3, 1, 'Óc Sáng Suốt', 'Thu Giang', 2017, 50, 40000, 'image_book/ocsangsuot.jpg', '')﻿,
(29, 3, 2, 'Ai Lấy Miếng Pho Mát Của Tôi', 'Spencer Johnson', 2019, 50, 43000, 'image_book/ailaymiengphmatcuatoi.jpg', '')﻿,
(30, 3, 5, 'Tuổi trẻ đáng giá bao nhiêu', 'Rosie Nguyễn', 2018, 50, 63000, 'image_book/tuoitredanggiabaonhieu.jpg', '')﻿,
(31, 4, 14, 'Mega XOY Học Nhanh - 23 Phương Pháp Giải Hóa Học Hiện Đại', 'Trần Văn Thanh', 2018, 50, 38000, 'image_book/megahoahoc.jpg', '')﻿,
(32, 4, 14, 'Mega XOY Học Nhanh - Phương Pháp Giải Toán Trắc Nghiệm', 'Tô Nga', 2018, 50, 38000, 'image_book/megatoan.jpg', '')﻿,
(33, 4, 14, 'Mega XOY Học Nhanh - Ngữ Pháp Tiếng Anh', 'Dương Hương', 2018, 50, 36000, 'image_book/megaanh.jpg', '')﻿,
(34, 4, 14, 'Mega XOY Học Nhanh - Phương Pháp Giải Nhanh Vật Lý Trắc Nghiệm', 'Nguyễn Minh Thảo', 2018, 50, 50000, 'image_book/megaly.jpg', '')﻿,
(35, 4, 2, 'Cẩm Nang Phương Pháp Sư Phạm', 'Nhiều Tác Giả', 2016, 46, 99000, 'image_book/camnangsupham.jpg', '')﻿,
(36, 4, 15, 'Đi Tìm Triết Lí Giáo Dục Việt Nam', 'Nguyễn Quốc Vương', 2017, 50, 69000, 'image_book/ditimtrietly.jpg', '')﻿,
(37, 4, 16, 'Giáo Trình Phương Pháp Dạy Hóa Học Bằng Tiếng Anh Ở Trường Trung Học Phổ Thông', 'Cao Cự Giác', 2018, 49, 96000, 'image_book/giaotrinhdayhoa.jpg', '')﻿,
(38, 4, 17, 'Sửa Lỗi Ngữ Pháp (Lỗi Về Kết Cấu Câu)', 'PGS Hồ Lê', 2018, 50, 43000, 'image_book/sualoinguphap.jpg', '')﻿,
(39, 4, 18, 'Cơ Sở Dữ Liệu Mờ & Xác Suất', 'Nguyễn Hòa', 2017, 50, 39000, 'image_book/cosoduleumo.jpg', '')﻿,
(40, 4, 19, 'Bộ Đề Trắc Nghiệm Luyện Thi THPT Quốc Gia 2020 - Môn Toán', 'Phạm Đức Tài', 2019, 50, 35000, 'image_book/bodetoan.jpg', '')﻿,
(41, 5, 11, 'Học Nhanh Nhớ Lâu 1500 Từ Vựng Tiếng Trung Thông Dụng', 'The Zhishi', 2019, 50, 140000, 'image_book/hocnhanhnholau.jpg', '')﻿,
(42, 5, 14, '301 Câu Đàm Thoại Tiếng Hoa	', 'Trương Văn Giới', 2017, 50, 72000, 'image_book/301damthoai.jpg', '')﻿,
(43, 5, 12, 'Hackers Ielts: Writing', 'Viện ngôn ngữ Hackers', 2019, 50, 187000, 'image_book/writing.jpg', '')﻿,
(44, 5, 12, 'Hackers Ielts: Reading', 'Viện ngôn ngữ Hackers', 2019, 50, 190000, 'image_book/reading.jpg', '')﻿,
(45, 5, 12, 'Hackers Ielts: Speaking', 'Viện ngôn ngữ Hackers', 2019, 50, 146000, 'image_book/speaking.jpg', '')﻿,
(46, 5, 12, 'Hackers Ielts: Listening', 'Viện ngôn ngữ Hackers', 2019, 49, 131000, 'image_book/listening.jpg', '')﻿,
(47, 5, 13, 'Tập Viết Tiếng Nhật Căn Bản Hiragana', 'Mai Ngọc', 2018, 49, 30000, 'image_book/tapviettiengnhat.png', '')﻿,
(48, 5, 1, 'Luyện Thi Năng Lực Nhật Ngữ N4-N5 500 Câu Hỏi', 'Matsumoto Noriko', 2016, 50, 63000, 'image_book/luyenthinangluc.jpg', '')﻿,
(49, 5, 21, 'Cẩm Nang Cấu Trúc Tiếng Anh', 'Trang Anh', 2019, 50, 66000, 'image_book/camnangcautructienganh.jpg', '')﻿,
(50, 5, 20, 'Ngữ Pháp Tiếng Anh', 'Mai Lan Hương', 2019, 50, 59000, 'image_book/nguphaptienganh.jpg', '')﻿,
(51, 6, 9, 'Khi Hơi Thở Hóa Thinh Không', 'Paul Kalanithi', 2019, 46, 80000, 'image_book/khihoitho.jpg', 'co')﻿,
(52, 6, 12, 'Homo Deus - Lược Sử Tương Lai', 'Yuval Noah Harari', 2018, 49, 148000, 'image_book/homodeus.jpg', '')﻿,
(53, 6, 1, 'Hồi Ký Alex Ferguson', 'Alex Ferguson', 2019, 50, 140000, 'image_book/alex.jpg', '')﻿,
(54, 6, 2, 'Putin Logic Của Quyền Lực', 'Hubert Seipel', 2017, 50, 110000, 'image_book/putin.jpg', 'co')﻿,
(55, 6, 22, 'Hồi Ký Tiến Sĩ Lê Thẩm Dương', 'Lê Thẩm Dương', 2016, 50, 196000, 'image_book/lethamduong.jpg', '')﻿,
(56, 6, 1, 'D.Trump Nghệ Thuật Đàm Phán', 'Donald J.Trump', 2016, 50, 84000, 'image_book/trump.jpg', '')﻿,
(57, 6, 1, 'Thư Tình Gửi Một Người', 'Trịnh Công Sơn', 2017, 50, 144000, 'image_book/thutinhguimotnguoi.jpg', '')﻿,
(58, 6, 12, 'Bill Gates: Tham Vọng Lớn Lao Và Quá Trình Hình Thành Đế Chế Microsoft', 'James Wallace', 2017, 49, 172000, 'image_book/billgates.jpg', '')﻿,
(59, 6, 12, 'Tiểu Sử Steve Jobs', 'Jack Weatherford', 2017, 50, 255000, 'image_book/stevejobs.jpg', '')﻿,
(60, 6, 1, 'Cú Ngoặt Bóng Của Tôi', 'Johan Cruyff', 2018, 50, 116000, 'image_book/cungoatbongcuatoi.jpg', '')﻿,
(61, 7, 24, 'Cuộc Chiến Của Tôi Với CIA: Hồi Ký Của Hoàng Thân Norodom Sihanouk', 'Wilfred Burchett', 2019, 50, 114000, 'image_book/cia.jpg', '')﻿,
(62, 7, 2, 'Sài Gòn Năm Xưa', 'Vương Hồng Sển', 2018, 50, 78000, 'image_book/saigonnamxua.jpg', '')﻿,
(63, 7, 12, 'Xứ Đông Dương', 'Paul Doumer', 2018, 50, 244000, 'image_book/xudongduong.jpg', '')﻿,
(64, 7, 11, 'Lịch Sử Tư Tưởng Nhật Bản', 'Thích Thiên Ân', 2018, 50, 124000, 'image_book/lichsututuongnhatban.jpg', '')﻿,
(65, 7, 12, 'Nhật Bản Duy Tân 30 Năm', 'Đào Trinh Nhất', 2018, 50, 106000, 'image_book/nhatban30nam.jpg', '')﻿,
(66, 7, 17, 'Huế Và Triều Nguyễn', 'Phan Huy Lê', 2019, 49, 164000, 'image_book/huevatrieunguyen.jpg', 'co')﻿,
(67, 7, 25, 'Phan Đình Phùng Một Vị Anh Hùng Có Quan Hệ Đến Lịch Sử Hiện Thời', 'Đào Trinh Nhất', 2017, 49, 69000, 'image_book/phandinhphung.jpg', '')﻿,
(68, 7, 2, 'Những Mũi Tên Đồng Vùng Chợ Lớn', 'Mã Thiện Đồng', 2017, 50, 53000, 'image_book/nhungmuitendongvungcholon.jpg', '')﻿,
(69, 7, 4, 'Việt Nam Sử Lược', 'Trần Trọng Kim', 2019, 50, 106000, 'image_book/vietnamsoluoc.jpg', '')﻿,
(70, 7, 11, 'Cuộc Kháng Chiến Chống Xâm Lược Nguyên Mông', 'Hà Văn Tấn', 2019, 50, 136000, 'image_book/khangchiennguyenmong.jpg', '')﻿,
(71, 8, 5, 'Sự Minh Định Của Địa Lý', 'Robert D. Kaplan', 2018, 50, 165000, 'image_book/suminhdinhcuadialy.jpg', '')﻿,
(72, 8, 18, 'Văn Hóa Vùng Và Phân Vùng Văn Hóa Việt Nam', 'GS TS Ngô Đức Thịnh', 2019, 50, 141000, 'image_book/vanhoavung.jpg', '')﻿,
(73, 8, 18, 'Lược Sử Vùng Đất Nam Bộ Việt Nam', 'Vũ Minh Giang', 2019, 50, 43000, 'image_book/nambovietnam.jpg', '')﻿,
(74, 8, 13, '7 Kì Quan Thế Giới', 'Russell Ash', 2012, 50, 83000, 'image_book/7kyquanthegioi.jpg', '')﻿,
(75, 8, 26, 'Các Thánh Địa Trên Thế Giới – Colin Wilson', 'Trần Văn Huân', 2014, 50, 120000, 'image_book/cacthanhdiatrenthegioi.jpg', '')﻿,
(76, 8, 11, 'Việt Nam Non Sông Gấm Vóc - Miền Trung', 'Võ Văn Thành', 2019, 50, 93000, 'image_book/mientrungvietnam.jpg', '')﻿,
(77, 8, 11, 'Việt Nam Non Sông Gấm Vóc - Miền Bắc', 'Võ Văn Thành', 2019, 50, 96000, 'image_book/mienbacvietnam.jpg', '')﻿,
(78, 8, 27, 'Di Tích Thắng Cảnh Việt Nam', 'Minh Hạnh', 2018, 50, 48000, 'image_book/ditichthangcanhvietnam.jpg', 'co')﻿,
(79, 8, 11, 'Việt Nam Non Sông Gấm Vóc - Miền Nam', 'Võ Văn Thành', 2019, 50, 93000, 'image_book/miennamvietnam.jpg', '')﻿,
(80, 8, 11, 'Non Nước Việt Nam 63 Tỉnh Thành', 'Nhóm Trí Thức Việt', 2017, 50, 130000, 'image_book/63tinhthanh.jpg', '')﻿,
(81, 9, 13, 'Tâm Và Tiểu Trường Trong Đông Y', 'Lương y Hoàng Duy Tân', 2020, 50, 200000, 'image_book/tamvatiendongy.jpg', '')﻿,
(82, 9, 6, 'Các Chòm Sao - Toàn Cảnh Về Bầu Trời Đêm', 'Đặng Vũ Tuấn Sơn', 2020, 50, 152000, 'image_book/cacchomsao.jpg', '')﻿,
(83, 9, 12, 'Vũ Trụ', 'Carl Sagan', 2018, 50, 117000, 'image_book/vutru.jpg', '')﻿,
(84, 9, 12, 'Các Thế Giới Song Song', 'Michio Kaku', 2018, 45, 96000, 'image_book/cacthegioisongsong.jpg', 'co')﻿,
(85, 9, 1, 'Lược Sử Thời Gian', 'Stephen Hawking', 2020, 50, 81000, 'image_book/luocsuthoigian.jpg', '')﻿,
(86, 9, 26, 'Khám Phá Những Bí Ẩn Về Nhân Loại', 'Hình Đào', 2019, 50, 119000, 'image_book/biannhanloai.jpg', '')﻿,
(87, 9, 1, 'Y Học Sức Khỏe - Tâm Bệnh Học', 'Phạm Toàn', 2020, 50, 116000, 'image_book/yhocsuckhoe.jpg', '')﻿,
(88, 9, 3, 'Nông Nghiệp Xanh, Sạch - Kỹ Thuật Trồng Các Loại Cây Cảnh', 'Trần Thị Thanh Liêm', 2020, 50, 38000, 'image_book/nongnghiepcay.jpg', '')﻿,
(89, 9, 3, 'Nông Nghiệp Xanh, Sạch - Kỹ Thuật Nuôi Cá Và Biện Pháp Phòng Trị Bệnh', 'TS Nguyễn Hùng Nguyệt', 2020, 46, 51000, 'image_book/nongnghiepca.jpg', 'co')﻿,
(90, 9, 1, 'Khoa Học Khám Phá - Dữ Liệu Lớn', 'Viktor Mayer', 2020, 50, 112000, 'image_book/dulieulon.jpg', '')﻿,
(91, 10, 13, 'Từ Điển Tiếng Việt Thông Dụng', 'Thành Yến', 2019, 50, 39000, 'image_book/tudientiengvietthongdung.jpg', '')﻿,
(92, 10, 30, 'Từ Điển Tiếng Việt 75.000 Từ', 'Thái Xuân Đệ', 2019, 50, 56000, 'image_book/tudien75000tu.jpg', '')﻿,
(93, 10, 6, 'Từ Điển Anh - Việt (70000 Từ)', 'NXB Thanh Niên', 2018, 50, 56000, 'image_book/anhviet70000.jpg', '')﻿,
(94, 10, 14, 'Từ Điển Nhật - Việt', 'Nguyễn Văn Khang', 2018, 50, 128000, 'image_book/tudiennhatviet.jpg', '')﻿,
(95, 10, 19, 'Từ Điển Mẫu Câu Tiếng Nhật', 'Nhóm Jammassy', 2015, 50, 213000, 'image_book/tudienmaucautiengnhat.jpg', '')﻿,
(96, 10, 17, 'Từ Điển Hán Việt', 'Trương Văn Giới', 2018, 50, 120000, 'image_book/tudienhanviet.jpg', '')﻿,
(97, 10, 11, 'Từ Điển Việt - Pháp (Mini)', 'Nhiều Tác Giả', 2011, 50, 24000, 'image_book/tudienvietphap.jpg', '')﻿,
(98, 10, 6, 'Từ Điển Đức-Việt, Việt-Đức', 'Vĩnh Quyền', 2017, 49, 198000, 'image_book/ducvietvietduc.jpg', 'co')﻿,
(99, 10, 17, 'Từ Điển Thuật Ngữ Ngoại Thương Hán - Việt', 'Trương Văn Giới', 2012, 50, 160000, 'image_book/thuatngungoaithuong.jpg', '')﻿,
(100, 10, 6, 'Từ Điển Việt - Nhật Khoàng 5000 Từ Thông Dụng', 'Hoàng Khang', 2019, 49, 72000, 'image_book/vietnhat50000.jpg', 'co')﻿,
(101, 11, 32, 'Bí Quyết Vẽ Màu Nước', 'Huỳnh Phạm Hương Trang', 2018, 50, 90000, 'image_book/biquyetvemaunuoc.jpg', '')﻿,
(102, 11, 6, '36 Ngày Biết Đệm Guitar - Kèm CD', 'Song Minh', 2017, 200, 50000, 'image_book/36ngay.jpg', '')﻿,
(103, 11, 13, 'Phương Pháp Hồng - Năm Thứ 1 Với Đàn Piano', 'Ernest Van De Velde', 2019, 50, 74000, 'image_book/phuongphaphong.jpg', 'co\r\n')﻿,
(104, 11, 33, 'Thiết Kế Cho Người Mới Bắt Đầu', 'Nguyễn Việt Hùng', 2017, 50, 114000, 'image_book/thietkechonguoimoibatdau.jpg', '')﻿,
(105, 11, 32, 'Học Vẽ Tranh Màu Nước', 'David Sanmiguel', 2019, 48, 88000, 'image_book/hocvetranhmaunuoc.jpg', '')﻿,
(106, 11, 34, 'Tự Học Đàn Guitar Theo Phương Pháp F. Carulli', 'Nguyễn Hạnh', 2016, 50, 47000, 'image_book/tuhocdan.jpg', '')﻿,
(107, 11, 6, 'Phương Pháp Học Đàn Organ Măng Non', 'Nguyễn Hạnh', 2019, 46, 36000, 'image_book/hocdanorgan.jpg', 'co')﻿,
(108, 11, 35, 'Trịnh Công Sơn - Tuyển Tập Những Bài Ca Không Năm Tháng', 'Trịnh Công Sơn', 2008, 50, 150000, 'image_book/trinhcongson.jpg', '')﻿,
(109, 11, 6, 'Tây Ban Cầm Cơ Bản', 'Nguyễn Hạnh', 2019, 50, 36000, 'image_book/taybancamcoban.jpg', '')﻿,
(110, 11, 1, 'Lắng Nghe Giai Điệu Bolero', 'Vũ Đức Sao Biển', 2019, 50, 62000, 'image_book/bolero.jpg', '')﻿,
(111, 12, 3, 'Messi Vs Ronaldo - Đại Chiến Giữa Những Vị Thần', 'Luca Caioli', 2019, 50, 101000, 'image_book/messironaldo.jpg', '')﻿,
(112, 12, 36, 'Cẩm Nang Chạy Bộ', 'BoiDapChay', 2019, 50, 40000, 'image_book/camnangchaybo.jpg', '')﻿,
(113, 12, 36, 'Ăn Và Chạy - Hành Trình Không Tưởng Của Tôi Tới Bộ Môn Ultramarathon Vĩ Đại', 'Scott Jurek', 2020, 49, 135000, 'image_book/anvachay.jpg', '')﻿,
(114, 12, 37, 'Bão Lửa U23 - Thường Châu Tuyết Trắng', 'Nhiều Tác Giả', 2018, 50, 96000, 'image_book/baoluau23.jpg', 'co')﻿,
(115, 12, 13, 'Cờ Vua - Hãy Chơi Để Chiến Thắng', 'Claire Summerscale', 2018, 50, 71000, 'image_book/covuachoidethang.jpg', '')﻿,
(116, 12, 38, 'Yoga Cho Sức Khỏe Vững Bền', 'Liz Lark', 2014, 50, 83000, 'image_book/yoga.jpg', '')﻿,
(117, 12, 7, 'Những Chuyện Lạ, Kì & Hài Hước Về Bóng Đá', 'Puck', 2018, 50, 66000, 'image_book/nhungchuyenla.jpg', '')﻿,
(118, 12, 20, 'Bốn Kinh Yoga Quan Trọng Nhất', 'Lê Viết Hổ', 2018, 50, 64000, 'image_book/bonkinhyoga.png', 'co')﻿,
(120, 1, 16, 'Xóm rá', 'Ngọc Giao', 2018, 50, 90000, 'image_book/xomra.jpg', 'co')﻿,
(121, 1, 13, 'Bỉ vỏ', 'Nguyên Hồng', 2018, 50, 71000, 'image_book/bivo.jpg', 'co')﻿,
(122, 6, 16, '60 giây vàng trong bán hàng', 'David', 2017, 48, 52000, 'image_book/60giay.jpg', 'co')﻿,
(123, 5, 15, 'Hack lược sử', 'Steven Levy', 2016, 49, 82000, 'image_book/hackerluotsu.jpg', '')﻿,
(124, 1, 2, 'Gió lạnh đầu mùa', 'Thạch Lam', 2018, 50, 51000, 'image_book/giolanhdaumua.jpg', '')﻿,
(125, 10, 11, 'Cờ vua', 'Alex', 2017, 50, 54000, 'image_book/covua.jpg', '')﻿,
(126, 1, 12, 'Hòn đất', 'Hòn đất', 2019, 0, 68000, 'image_book/hondat.jpg', '')﻿;
﻿
--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`mactdh`,`madh`,`masach`),
  ADD KEY `madh` (`madh`),
  ADD KEY `masach` (`masach`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`,`manv`,`makh`),
  ADD KEY `makh` (`makh`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `guitang`
--
ALTER TABLE `guitang`
  ADD PRIMARY KEY (`maguitang`,`madh`),
  ADD KEY `madh` (`madh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`manxb`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`manhap`,`manv`,`masach`),
  ADD KEY `masach` (`masach`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`,`madm`,`manxb`),
  ADD KEY `madm` (`madm`),
  ADD KEY `manxb` (`manxb`);
﻿
--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `mactdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `guitang`
--
ALTER TABLE `guitang`
  MODIFY `maguitang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `manxb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `manhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `masach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
﻿
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masach`) REFERENCES `sach` (`masach`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `guitang`
--
ALTER TABLE `guitang`
  ADD CONSTRAINT `guitang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`masach`) REFERENCES `sach` (`masach`),
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`),
  ADD CONSTRAINT `sach_ibfk_2` FOREIGN KEY (`manxb`) REFERENCES `nhaxuatban` (`manxb`);
﻿COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
