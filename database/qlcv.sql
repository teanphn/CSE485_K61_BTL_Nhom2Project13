-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 06:44 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlcv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoach`
--

CREATE TABLE `kehoach` (
  `idkh` int(2) NOT NULL,
  `idus` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noi dung` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tạm thời chưa có',
  `ngay tao` datetime DEFAULT NULL,
  `han hoan thanh` datetime DEFAULT NULL,
  `tg con lai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kehoach`
--

INSERT INTO `kehoach` (`idkh`, `idus`, `ten`, `noi dung`, `ngay tao`, `han hoan thanh`, `tg con lai`) VALUES
(8, 34, 'ngủ', 'tạm thời chưa có', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `id` int(11) NOT NULL,
  `ten` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `ho ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia chi` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuoi` int(3) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai` int(2) DEFAULT NULL,
  `taikhoan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `ho ten`, `dia chi`, `tuoi`, `email`, `loai`, `taikhoan`, `matkhau`) VALUES
(1, 'le hong quang1', 'ha noi', 21, 'quangho@gmail.com', 1, 'bnmbnmmnb123', '123123qq1'),
(3, 'phan nhat tan', 'ha noi', 21, 'tanphan123@gmail.com', 1, 'tan123', '123123qq1'),
(34, 'nguyễn việt hưng', 'vĩnh phúc', 21, 'hung123@gmail.com', 2, 'hung123', '123123qq1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD PRIMARY KEY (`idkh`),
  ADD KEY `iduser` (`idus`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  MODIFY `idkh` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhom`
--
ALTER TABLE `nhom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD CONSTRAINT `kehoach_ibfk_1` FOREIGN KEY (`idus`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
