-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 08:54 PM
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
-- Cơ sở dữ liệu: `qlcv2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `idcv` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tai khoan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat khau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idcv`, `tai khoan`, `mat khau`) VALUES
('ql', 'hieu123', '123'),
('us', 'tan123', '456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `idcv` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`idcv`, `loai`) VALUES
('ql', 'quan ly'),
('us', 'nguoi dung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kehoach`
--

CREATE TABLE `kehoach` (
  `idkh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idgr` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten` int(11) NOT NULL,
  `noi dung` int(11) NOT NULL,
  `ngay tao` datetime NOT NULL,
  `han hoan thanh` datetime NOT NULL,
  `tg con lai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom`
--

CREATE TABLE `nhom` (
  `idgr` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten nhom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanh vien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `idcv` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idgr` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia chi` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuoi` int(3) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `mat khau` (`mat khau`),
  ADD UNIQUE KEY `tai khoan` (`tai khoan`),
  ADD KEY `idcv` (`idcv`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD UNIQUE KEY `loai` (`loai`),
  ADD UNIQUE KEY `idcv` (`idcv`);

--
-- Chỉ mục cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idgr` (`idgr`);

--
-- Chỉ mục cho bảng `nhom`
--
ALTER TABLE `nhom`
  ADD UNIQUE KEY `idgr` (`idgr`),
  ADD UNIQUE KEY `ten nhom` (`ten nhom`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `iduser` (`iduser`),
  ADD KEY `idcv` (`idcv`),
  ADD KEY `idgr` (`idgr`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`idcv`) REFERENCES `cv` (`idcv`);

--
-- Các ràng buộc cho bảng `kehoach`
--
ALTER TABLE `kehoach`
  ADD CONSTRAINT `kehoach_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `kehoach_ibfk_2` FOREIGN KEY (`idgr`) REFERENCES `nhom` (`idgr`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idcv`) REFERENCES `cv` (`idcv`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`idcv`) REFERENCES `cv` (`idcv`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`idgr`) REFERENCES `nhom` (`idgr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
