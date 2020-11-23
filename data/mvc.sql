-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2020 lúc 09:59 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `img` text NOT NULL,
  `username` char(200) NOT NULL,
  `password` char(200) NOT NULL,
  `email` char(200) NOT NULL,
  `tell` int(20) NOT NULL,
  `action` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `img`, `username`, `password`, `email`, `tell`, `action`, `create_at`, `update_at`) VALUES
(14, 'Nguyễn Thế Bắc', 'NAGL0053.jpg', 'bacnt', '356a192b7913b04c54574d18c28d46e6395428ab', 'ntbaccntt@gmail.com', 977778999, 1, '2020-10-30 01:55:49', NULL),
(22, 'Nguyễn Thế Bắc', 'a125401241_2706335179628317_3054206264941056827_na.jpg', 'bacnt1', '356a192b7913b04c54574d18c28d46e6395428ab', 'ntbaccntt@gmail.com', 977778999, 0, '2020-11-02 05:19:56', '2020-11-23 03:57:14'),
(25, 'Nguyễn Văn A', 'a125401241_2706335179628317_3054206264941056827_na.jpg', 'bacnt2', '356a192b7913b04c54574d18c28d46e6395428ab', 'abc@gmail.com', 977778999, 1, '2020-11-23 03:58:25', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
