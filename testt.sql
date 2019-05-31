-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2017 lúc 04:12 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `box`
--

CREATE TABLE `box` (
  `id` int(5) NOT NULL,
  `idUser1` int(5) NOT NULL,
  `idUser2` int(5) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `box`
--

INSERT INTO `box` (`id`, `idUser1`, `idUser2`, `name`) VALUES
(94, 10000, 10046, '1000010046'),
(95, 10000, 10044, '1000010044'),
(96, 10000, 10045, '1000010045'),
(97, 10000, 10050, '1000010050'),
(98, 10052, 10051, '1005210051'),
(99, 10000, 10051, '1000010051');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `boxnhom`
--

CREATE TABLE `boxnhom` (
  `idUser` int(11) NOT NULL,
  `idPhong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NameP` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `boxnhom`
--

INSERT INTO `boxnhom` (`idUser`, `idPhong`, `NameP`) VALUES
(10000, '1000010044 10045 10046 ', 'Ä‘i chÆ¡i'),
(10000, '1000010044 10045 10046 10047 ', '99'),
(10000, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10000, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10000, '1000010051 10052 ', 'mmmmmm'),
(10000, '1004410000 10045 10046 ', 'a'),
(10044, '1000010044 10045 10046 ', 'Ä‘i chÆ¡i'),
(10044, '1000010044 10045 10046 10047 ', '99'),
(10044, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10044, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10044, '1004410000 10045 10046 ', 'a'),
(10044, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10045, '1000010044 10045 10046 ', 'Ä‘i chÆ¡i'),
(10045, '1000010044 10045 10046 10047 ', '99'),
(10045, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10045, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10045, '1004410000 10045 10046 ', 'a'),
(10046, '1000010044 10045 10046 ', 'Ä‘i chÆ¡i'),
(10046, '1000010044 10045 10046 10047 ', '99'),
(10046, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10046, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10046, '1004410000 10045 10046 ', 'a'),
(10046, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10047, '1000010044 10045 10046 10047 ', '99'),
(10047, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10047, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10047, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10048, '1000010044 10045 10046 10047 10048 ', 'hihihihihihi'),
(10048, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10048, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10049, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10049, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10050, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10050, '1004410046 10047 10048 10049 10050 ', 'ggg'),
(10051, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10051, '1000010051 10052 ', 'mmmmmm'),
(10052, '1000010044 10045 10046 10047 10048 10049 10050 100', 'all'),
(10052, '1000010051 10052 ', 'mmmmmm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friend`
--

CREATE TABLE `friend` (
  `id` int(5) NOT NULL,
  `idGuiYeuCau` int(5) NOT NULL,
  `idNhanYeuCau` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `friend`
--

INSERT INTO `friend` (`id`, `idGuiYeuCau`, `idNhanYeuCau`) VALUES
(25, 8, 99),
(26, 99, 8),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(54, 0, 0),
(55, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mess`
--

CREATE TABLE `mess` (
  `id` int(5) NOT NULL,
  `idGui` int(5) NOT NULL,
  `idPhong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messs` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mess`
--

INSERT INTO `mess` (`id`, `idGui`, `idPhong`, `messs`, `time`) VALUES
(1, 10000, '1000010044 10045 10046', 'Æ°qeqweqweqweqwe', '2017-07-08 14:16:31'),
(2, 10044, '1000010044 10045 10046', 'Æ°qeqweqweqwe', '2017-07-08 14:16:36'),
(3, 10045, '1000010044 10045 10046', 'Ã¡dasdasdasdasdasd', '2017-07-08 14:17:43'),
(4, 10044, '1000010044 10045 10046', 'Ä‘Ã¢sdasdasd', '2017-07-08 14:17:51'),
(5, 10044, '1004410000 10045 10046', 'asdasdasdasd', '2017-08-31 00:47:59'),
(6, 10000, '1004410000 10045 10046', 'asdasdasdasd', '2017-08-31 00:48:03'),
(7, 10000, '1000010051 10052', 'manh', '2017-08-31 21:06:50'),
(8, 10051, '1000010051 10052', 'manh1', '2017-08-31 21:07:09'),
(9, 10052, '1000010051 10052', 'manh2', '2017-08-31 21:07:14'),
(10, 10045, '1000010044 10045 10046 10047 10048 10049 10050 100', '1', '2017-08-31 21:11:13'),
(11, 10000, '1000010044 10045 10046 10047 10048 10049 10050 100', '2', '2017-08-31 21:11:19'),
(12, 10052, '1000010044 10045 10046 10047 10048 10049 10050 100', '3', '2017-08-31 21:11:28'),
(13, 10051, '1000010044 10045 10046 10047 10048 10049 10050 100', '4', '2017-08-31 21:11:33');

--
-- Bẫy `mess`
--
DELIMITER $$
CREATE TRIGGER `themGio` BEFORE INSERT ON `mess` FOR EACH ROW BEGIN
 INSERT INTO friend
 SET 
NEW.time = CURRENT_TIMESTAMP();
 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mest`
--

CREATE TABLE `mest` (
  `id` int(5) NOT NULL,
  `idGui` int(5) NOT NULL,
  `idPhong` int(50) NOT NULL,
  `messs` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mest`
--

INSERT INTO `mest` (`id`, `idGui`, `idPhong`, `messs`, `time`) VALUES
(1, 10000, 95, 'Ã¡dsadasds', '0000-00-00 00:00:00'),
(2, 10044, 95, 'dáº¥ds', '0000-00-00 00:00:00'),
(3, 10000, 95, 'Ã¡dasdsad', '0000-00-00 00:00:00'),
(4, 10000, 95, 'Ã¡dasdsad', '0000-00-00 00:00:00'),
(5, 321, 123, 'ádsadad', '2017-07-01 22:56:08'),
(6, 10044, 95, 'Ã¡dsadasdasd', '2017-07-01 22:56:45'),
(7, 10000, 95, 'dsdsa', '2017-07-01 22:56:52'),
(8, 10000, 95, 'dáº¥dasdasd', '2017-07-08 14:15:40'),
(9, 10000, 95, 'aaaaaaaaaaaaaaaaaa', '2017-07-08 14:15:45'),
(10, 10044, 95, 'bbbbbbbbbbbbbbbbbbbbbbb\r\n', '2017-07-08 14:15:52'),
(11, 10044, 95, 'asdasdasdasd', '2017-08-31 00:46:13'),
(12, 10044, 95, 'a', '2017-08-31 00:46:23'),
(13, 10044, 95, 'a', '2017-08-31 00:46:33'),
(14, 10000, 94, 'Ã¡dasdasdasfasf', '2017-08-31 01:00:51'),
(15, 10046, 94, 'Ã¡dasfasfasf', '2017-08-31 01:01:32'),
(16, 10000, 94, 'Ã¡dasd', '2017-08-31 01:01:35'),
(17, 10000, 94, 'Ã¡dasd', '2017-08-31 01:05:58'),
(18, 10044, 95, 'a', '2017-08-31 01:15:30'),
(19, 10000, 95, 'bbb', '2017-08-31 01:15:35'),
(20, 10051, 98, 'abc', '2017-08-31 21:03:57'),
(21, 10052, 98, 'ccb', '2017-08-31 21:04:06'),
(22, 10051, 98, '123', '2017-08-31 21:04:20'),
(23, 10052, 98, 'eqw', '2017-08-31 21:04:25'),
(24, 10000, 99, '123', '2017-08-31 21:07:32'),
(25, 10051, 99, '321', '2017-08-31 21:07:47');

--
-- Bẫy `mest`
--
DELIMITER $$
CREATE TRIGGER `themGioo` BEFORE INSERT ON `mest` FOR EACH ROW BEGIN

 SET 
 
NEW.time = CURRENT_TIMESTAMP();
 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(5) NOT NULL,
  `idGuiYeuCau` int(5) NOT NULL,
  `idNhanYeuCau` int(5) NOT NULL,
  `TrangThai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id`, `idGuiYeuCau`, `idNhanYeuCau`, `TrangThai`) VALUES
(1, 11, 22, 1),
(2, 11, 22, 3),
(5, 6, 5, 2),
(6, 5, 6, 2),
(7, 8, 99, 3),
(8, 8, 99, 1);

--
-- Bẫy `trangthai`
--
DELIMITER $$
CREATE TRIGGER `before_employee_update` BEFORE UPDATE ON `trangthai` FOR EACH ROW BEGIN
 INSERT INTO friend
 SET 
 friend.idNhanYeuCau = OLD.idNhanYeuCau , 
 friend.idGuiYeuCau=OLD.idGuiYeuCau,


 NEW.idNhanYeuCau = OLD.idGuiYeuCau , 
 NEW.idGuiYeuCau=OLD.idNhanYeuCau;
 
 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_time` datetime NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `LastName`, `FirstName`, `real_time`, `pass`) VALUES
(10000, 'manh@gmail.com', 'nguyá»…n', 'nam', '2017-08-31 21:12:07', 'manh'),
(10044, 'dang@gmail.com', 'Pháº¡m ', 'ÄÄƒng', '2017-08-31 02:57:18', 'dang'),
(10045, 'mai@gmail.com', 'NhÆ° ', 'Mai', '2017-08-31 21:12:10', 'mai'),
(10046, 'ngoc@gmail.com', 'XuÃ¢n ', 'Ngá»c', '2017-08-31 01:11:13', 'ngoc'),
(10047, 'oanh@gmail.com', 'hoÃ ng ', 'oanh', '2017-06-26 01:20:35', 'oanh'),
(10048, 'an@gmail.com', 'anh ', 'an', '2017-06-11 23:52:31', 'an'),
(10049, 'nam@gmail.com', 'hi ', 'nam', '2017-06-30 18:32:04', 'nam'),
(10050, 'toan@gmail.com', 'ChÃ³ ', 'toÃ n', '2017-07-01 13:40:41', 'toan'),
(10051, 'manh1@gmail.com', 'manh1 ', 'tuan', '2017-08-31 21:12:08', 'manh1'),
(10052, 'manh2@gmail.com', 'manh2 ', 'tuan', '2017-08-31 21:12:09', 'manh2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `boxnhom`
--
ALTER TABLE `boxnhom`
  ADD PRIMARY KEY (`idUser`,`idPhong`);

--
-- Chỉ mục cho bảng `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mess`
--
ALTER TABLE `mess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGui` (`idGui`,`idPhong`);

--
-- Chỉ mục cho bảng `mest`
--
ALTER TABLE `mest`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `box`
--
ALTER TABLE `box`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT cho bảng `friend`
--
ALTER TABLE `friend`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT cho bảng `mess`
--
ALTER TABLE `mess`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `mest`
--
ALTER TABLE `mest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10053;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `boxnhom`
--
ALTER TABLE `boxnhom`
  ADD CONSTRAINT `fk_boxnhom_user` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `mess`
--
ALTER TABLE `mess`
  ADD CONSTRAINT `mess_ibfk_1` FOREIGN KEY (`idGui`,`idPhong`) REFERENCES `boxnhom` (`idUser`, `idPhong`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
