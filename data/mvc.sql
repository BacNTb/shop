-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2020 lúc 10:17 AM
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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categori`
--

CREATE TABLE `categori` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categori`
--

INSERT INTO `categori` (`id`, `name`, `description`, `status`, `create_at`, `update_at`) VALUES
(24, 'Đèn Cao Áp Metal', 'Đèn cao áp Metal cao áp', 1, '2020-10-31 04:51:41', NULL),
(25, 'Đèn Chùm Trang Trí', 'Đèn chùm trang trí chiếu sáng', 1, '2020-10-31 04:52:03', NULL),
(26, 'Đèn đường LED', 'Đèn đường LED cao áp', 1, '2020-10-31 04:52:25', NULL),
(27, 'Đèn LED 3 chế độ', 'Đèn LED 3 chế độ đẹp', 1, '2020-10-31 04:52:45', NULL),
(28, 'Đèn LED âm trần', 'Đèn LED âm trần đa loại', 1, '2020-10-31 04:53:17', NULL),
(29, 'Đèn LED dây', 'Đèn LED dây nhiều màu', 1, '2020-10-31 04:53:36', NULL),
(30, 'Đèn LED nhà xưởng', 'Đèn LED nhà xưởng lớn', 1, '2020-10-31 04:53:56', NULL),
(31, 'Đèn LED Panel Lớn', 'Đèn LED Panel lớn siêu sáng', 1, '2020-10-31 04:54:32', NULL),
(32, 'Đèn LED pha', 'Đèn LED pha nhiều màu', 1, '2020-10-31 04:54:56', NULL),
(33, 'Đèn mâm trang trí', 'Đèn mâm trang trí lớn siêu đẹp', 1, '2020-10-31 04:55:42', NULL),
(34, 'Đèn soi gương - soi tranh', 'Đèn soi gương - soi tranh tinh tế', 1, '2020-10-31 04:56:08', NULL),
(35, 'LED Chiếu Điểm', 'LED chiếu điểm siêu sáng', 0, '2020-10-31 04:57:22', NULL),
(36, 'Đèn LED Tuýp T8 T5', 'Đèn LED tuýp T8 T5 sáng rộng', 1, '2020-10-31 04:58:29', NULL),
(37, 'Đèn Vách Trang Trí', 'Đèn vách trang trí họa tiết đẹp', 1, '2020-10-31 04:58:59', NULL),
(41, 'Đèn LED Trụ Tròn', 'Đèn LED Trụ Tròn', 1, '2020-11-02 01:49:24', NULL),
(42, 'Phụ Kiện Cho Đèn LED', 'Phụ kiện cho đèn LED nhiều loại', 1, '2020-11-02 01:51:03', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `led_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `checkout`
--

INSERT INTO `checkout` (`id`, `led_id`, `cus_id`, `count`, `price`, `total_price`, `create_at`, `update_at`) VALUES
(61, 339, 52, 2, 10890000, 21780000, '2020-11-02 01:34:02', NULL),
(62, 342, 52, 2, 2340000, 4680000, '2020-11-02 01:34:02', NULL),
(63, 350, 52, 4, 300000, 1200000, '2020-11-02 01:34:02', NULL),
(71, 340, 56, 3, 4950000, 14850000, '2020-11-02 05:09:03', NULL),
(72, 360, 56, 2, 2500000, 5000000, '2020-11-02 05:09:03', NULL),
(73, 366, 56, 5, 3000000, 15000000, '2020-11-02 05:09:03', NULL),
(74, 330, 57, 10, 40000, 400000, '2020-11-02 05:10:46', NULL),
(75, 350, 57, 3, 300000, 900000, '2020-11-02 05:10:46', NULL),
(76, 373, 57, 4, 1800000, 7200000, '2020-11-02 05:10:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `custummer`
--

CREATE TABLE `custummer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `email` char(100) NOT NULL,
  `tell` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `custummer`
--

INSERT INTO `custummer` (`id`, `name`, `address`, `email`, `tell`, `create_at`, `update_at`) VALUES
(52, 'Nguyễn Thế Bắc', 'Số a - phường phú đô-Nam từ liêm-Hà Nội', 'ntbaccntt@gmail.com', 977778999, '2020-11-02 01:34:02', NULL),
(56, 'Nguyễn Văn A', 'Số a - phường b-Nam từ liêm-Hà Nội', 'bac.nt.670@aptechlearning.edu.vn', 977778999, '2020-11-02 05:09:03', NULL),
(57, 'Nguyễn Văn B', 'Số c phường d-Nam từ liêm-Hà Nội', 'abc@gmail.com', 977778999, '2020-11-02 05:10:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `led_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `led_id`, `name`, `create_at`, `update_at`) VALUES
(241, 328, 'den-led-bulb-7w (1).jpg', '2020-10-31 11:58:11', NULL),
(242, 328, 'den-led-bulb-7w.jpg', '2020-10-31 11:58:11', NULL),
(243, 329, 'den-led-bup-thuy-tinh-su (1).jpg', '2020-10-31 11:59:18', NULL),
(244, 329, 'den-led-bup-thuy-tinh-su.jpg', '2020-10-31 11:59:18', NULL),
(251, 332, 'bong-kich-tu-choa-den-cao-ap (1).jpg', '2020-11-01 12:11:17', NULL),
(252, 332, 'bong-kich-tu-choa-den-cao-ap.jpg', '2020-11-01 12:11:17', NULL),
(255, 334, 'a11111.jpg', '2020-11-01 12:13:44', NULL),
(256, 334, 'aa11114 (1).jpg', '2020-11-01 12:13:44', NULL),
(257, 335, 'a11112.jpg', '2020-11-01 12:15:20', NULL),
(258, 335, 'aaa11114 (1).jpg', '2020-11-01 12:15:20', NULL),
(259, 336, 'a11113.jpg', '2020-11-01 12:45:25', NULL),
(260, 336, 'aaaa11114 (1).jpg', '2020-11-01 12:45:25', NULL),
(261, 337, 'drl-037-8 (1).jpg', '2020-11-01 02:28:42', NULL),
(262, 337, 'drl-037-8.jpg', '2020-11-01 02:28:42', NULL),
(263, 338, 'drl-036-12 (1).jpg', '2020-11-01 02:30:55', NULL),
(264, 338, 'drl-036-12.jpg', '2020-11-01 02:30:55', NULL),
(265, 339, 'a1.jpg', '2020-11-01 02:32:02', NULL),
(266, 339, 'a1a.jpg', '2020-11-01 02:32:02', NULL),
(267, 340, 'drl-003 (1).jpg', '2020-11-01 02:33:12', NULL),
(268, 340, 'drl-003.jpg', '2020-11-01 02:33:12', NULL),
(269, 341, 'a016.jpg', '2020-11-01 02:35:29', NULL),
(270, 341, 'a016a.jpg', '2020-11-01 02:35:29', NULL),
(271, 341, 'den-trang-tri-dragon-chum-t.jpg', '2020-11-01 02:35:29', NULL),
(272, 342, 'a060.jpg', '2020-11-01 02:37:12', NULL),
(273, 342, 'a060a.jpg', '2020-11-01 02:37:12', NULL),
(274, 342, 'a061.jpg', '2020-11-01 02:37:12', NULL),
(275, 342, 'den-trang-tri-dragon-260-6.jpg', '2020-11-01 02:37:12', NULL),
(276, 343, 'a046.jpg', '2020-11-01 02:39:09', NULL),
(277, 343, 'a054.jpg', '2020-11-01 02:39:09', NULL),
(278, 343, 'a055.jpg', '2020-11-01 02:39:09', NULL),
(279, 343, 'den-trang-tri-dragon-222-6.jpg', '2020-11-01 02:39:09', NULL),
(280, 344, 'den-duong-100w-1.jpg', '2020-11-01 02:41:03', NULL),
(281, 344, 'den-duong-100w-2.jpg', '2020-11-01 02:41:03', NULL),
(282, 344, 'den-duong-100w-3.jpg', '2020-11-01 02:41:03', NULL),
(283, 344, 'den-duong-100w-4.jpg', '2020-11-01 02:41:03', NULL),
(284, 344, 'den-duong-led-100w.jpg', '2020-11-01 02:41:03', NULL),
(285, 345, 'den-duong-led-120w-3chip.jpg', '2020-11-01 02:42:29', NULL),
(286, 345, 'led-street-light-120w-80w.jpg', '2020-11-01 02:42:29', NULL),
(287, 346, 'den-duong-led-150w.jpg', '2020-11-01 02:43:14', NULL),
(288, 347, 'den-duong-led-80w-2chip.jpg', '2020-11-01 02:43:54', NULL),
(289, 348, 'den-3-che-do.gif', '2020-11-01 02:45:28', NULL),
(290, 348, 'den-led-3-che-do.jpg', '2020-11-01 02:45:28', NULL),
(291, 348, 'den-led-am-tran-3-che-do.jpg', '2020-11-01 02:45:28', NULL),
(292, 348, 'ung-dung-den-led-am-tran-3-che-do.jpg', '2020-11-01 02:45:28', NULL),
(293, 349, 'den-led-3-che-do1.jpg', '2020-11-01 02:46:09', NULL),
(294, 350, 'den-led-3-che-do2.jpg', '2020-11-01 02:46:46', NULL),
(295, 351, 'den-led-am-tran-3-che-do.jpg', '2020-11-01 02:48:06', NULL),
(296, 351, 'den-led-am-tran-6w-3che-do2.jpg', '2020-11-01 02:48:06', NULL),
(297, 352, 'den-led-3-che-do (1).gif', '2020-11-01 02:48:59', NULL),
(299, 353, 'den-led-3-che-do3.jpg', '2020-11-01 02:51:09', NULL),
(300, 353, 'den-led-3-che-do-bac.jpg', '2020-11-01 02:51:09', NULL),
(301, 353, 'den-led-3-che-do-vo-nhom.jpg', '2020-11-01 02:51:09', NULL),
(302, 353, 'den-led-am-tran-3-che-do.jpg', '2020-11-01 02:51:09', NULL),
(303, 353, 'den-led-am-tran-6w-3che-do2.jpg', '2020-11-01 02:51:09', NULL),
(304, 353, 'led-3-che-do.jpg', '2020-11-01 02:51:09', NULL),
(305, 353, 'led-3-che-do-mat-sau.jpg', '2020-11-01 02:51:09', NULL),
(306, 353, 'led-3-che-do-vang.jpg', '2020-11-01 02:51:09', NULL),
(307, 354, 'sm24wn.jpg', '2020-11-01 02:53:14', NULL),
(308, 355, 'led-panel-24w-vuong (1).jpg', '2020-11-01 02:54:09', NULL),
(309, 355, 'led-panel-24w-vuong.jpg', '2020-11-01 02:54:09', NULL),
(310, 355, 'led-sieu-mong-vuong.jpg', '2020-11-01 02:54:09', NULL),
(311, 356, 'am-tran-sieu-mong-6w.jpg', '2020-11-01 02:55:23', NULL),
(312, 356, 'am-tran-sieu-mong-18w.jpg', '2020-11-01 02:55:23', NULL),
(313, 356, 'kiem-tra-den-led.jpg', '2020-11-01 02:55:23', NULL),
(314, 356, 'led-am-tran-tron-sieu-mong-6w.jpg', '2020-11-01 02:55:23', NULL),
(315, 356, 'ung-dung-den-led-am-tran-6w-18w.jpg', '2020-11-01 02:55:23', NULL),
(316, 357, 'led-am-tran-tron-sieu-mong-4w.jpg', '2020-11-01 02:56:02', NULL),
(317, 358, 'den-led-sieu-mong-tron.jpg', '2020-11-01 02:57:01', NULL),
(318, 358, 'led-am-tran-tron-sieu-mong-4w (1).jpg', '2020-11-01 02:57:01', NULL),
(319, 358, 'nguon-den-led-sieu-mong.jpg', '2020-11-01 02:57:01', NULL),
(320, 359, 'led-day-5050-doi-mau (1).jpg', '2020-11-01 02:58:30', NULL),
(321, 359, 'led-day-5050-doi-mau.jpg', '2020-11-01 02:58:30', NULL),
(322, 360, 'led-day-2-duong-1.jpg', '2020-11-01 02:59:22', NULL),
(323, 360, 'led-day-2-duong-1-1 (1).jpg', '2020-11-01 02:59:22', NULL),
(324, 360, 'led-day-2-duong-1-1.jpg', '2020-11-01 02:59:22', NULL),
(325, 361, 'den-led-day-mau-tim.jpg', '2020-11-01 03:00:24', NULL),
(326, 361, 'led-day-100m-tim (1).jpg', '2020-11-01 03:00:24', NULL),
(327, 361, 'led-day-100m-tim.jpg', '2020-11-01 03:00:24', NULL),
(328, 361, 'led-trip-decor.jpg', '2020-11-01 03:00:24', NULL),
(329, 362, 'led-day-5050-1 - Copy.jpg', '2020-11-01 03:01:52', NULL),
(330, 362, 'led-day-5050-1 (1).jpg', '2020-11-01 03:01:52', NULL),
(331, 362, 'led-day-5050-1.jpg', '2020-11-01 03:01:52', NULL),
(332, 362, 'led-day-5050-2 - Copy.jpg', '2020-11-01 03:01:52', NULL),
(333, 362, 'led-day-5050-2.jpg', '2020-11-01 03:01:52', NULL),
(334, 362, 'led-day-5050-6.jpg', '2020-11-01 03:01:52', NULL),
(335, 362, 'led-day-5050-7.jpg', '2020-11-01 03:01:52', NULL),
(336, 362, 'led-day-5050-9 - Copy.jpg', '2020-11-01 03:01:52', NULL),
(337, 362, 'led-day-5050-9 (1) - Copy.jpg', '2020-11-01 03:01:52', NULL),
(338, 362, 'led-day-5050-9 (1).jpg', '2020-11-01 03:01:52', NULL),
(339, 362, 'led-day-5050-9.jpg', '2020-11-01 03:01:52', NULL),
(340, 363, 'den-led-thanh.jpg', '2020-11-01 03:02:39', NULL),
(341, 364, 'led-thanh-sam-sung.jpg', '2020-11-01 03:03:22', NULL),
(342, 365, 'anh-sang-den-led-nha-xuong.jpg', '2020-11-01 03:19:03', NULL),
(343, 365, 'highbay-200w.jpg', '2020-11-01 03:19:03', NULL),
(344, 365, 'LED-NHA-XUONG-200W.jpg', '2020-11-01 03:19:03', NULL),
(345, 365, 'size-200w-high-bay-nha-xuong.jpg', '2020-11-01 03:19:03', NULL),
(346, 366, 'den-led-nha-xuong-high-bay-250w-5chip.jpg', '2020-11-01 04:10:33', NULL),
(347, 366, 'led-high-bay-250W-nha-xuong.jpg', '2020-11-01 04:10:33', NULL),
(348, 367, 'highbay-50w-100w.jpg', '2020-11-01 04:11:47', NULL),
(349, 367, 'ung-dung-den-led-dragon-high-bay.jpg', '2020-11-01 04:11:47', NULL),
(350, 367, 'ung-dung-den-led-high-bay-100w.jpg', '2020-11-01 04:11:48', NULL),
(351, 368, 'choa-den-led-cob.jpg', '2020-11-01 04:12:44', NULL),
(352, 368, 'led-highbay-150w.jpg', '2020-11-01 04:12:44', NULL),
(353, 369, 'highbay-50w-100w.jpg', '2020-11-01 04:13:45', NULL),
(354, 369, 'highbay-200w.jpg', '2020-11-01 04:13:45', NULL),
(355, 369, 'led-hight-bay-su-dung-trong-nha-kho.jpg', '2020-11-01 04:13:45', NULL),
(356, 370, 'den-led-100w-2chips.jpg', '2020-11-01 04:15:19', NULL),
(357, 370, 'pha-led-100w-600x600.png', '2020-11-01 04:15:19', NULL),
(358, 371, 'den-led-xanh-la-chieu-cay.jpg', '2020-11-01 04:15:59', NULL),
(359, 371, 'den-pha-led-xanh-duong-do-doi-mau.jpg', '2020-11-01 04:15:59', NULL),
(360, 372, 'den-pha-led-150w-mat-truoc-e1436514123180.jpg', '2020-11-01 04:16:40', NULL),
(361, 373, 'led-lup.jpg', '2020-11-01 04:17:29', NULL),
(362, 374, 'den-pha-led-15w-xanh-la.jpg', '2020-11-01 04:18:24', NULL),
(363, 375, 'den-pha-led-200w.jpg', '2020-11-01 04:19:19', NULL),
(364, 376, 'drl-073 (1).jpg', '2020-11-01 04:21:13', NULL),
(365, 376, 'drl-073.jpg', '2020-11-01 04:21:13', NULL),
(366, 377, 'drl-114.jpg', '2020-11-01 04:21:50', NULL),
(367, 378, 'av21.jpg', '2020-11-01 04:22:34', NULL),
(368, 379, 'drl-071.jpg', '2020-11-01 04:23:09', NULL),
(369, 380, 'drl-074.jpg', '2020-11-01 04:23:45', NULL),
(370, 333, '', '0000-00-00 00:00:00', '2020-11-01 04:37:08'),
(376, 381, 'aaaa11114 (1).jpg', '2020-11-01 04:47:05', NULL),
(377, 381, 'bong-kich-tu-choa-den-cao-ap (1).jpg', '2020-11-01 04:47:05', NULL),
(378, 381, 'bong-kich-tu-choa-den-cao-ap.jpg', '2020-11-01 04:47:05', NULL),
(380, 330, 'den-led-nen-3w (1).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 330, 'den-led-nen-3w.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 327, 'den-led-bulb-3w (1).jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 327, 'den-led-bulb-3w.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `led`
--

CREATE TABLE `led` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` int(100) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `categori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `led`
--

INSERT INTO `led` (`id`, `name`, `description`, `price`, `create_at`, `update_at`, `categori_id`) VALUES
(327, 'Đèn LED Búp 3W', 'Bóng làm bằng chất liệu nhựa cao cấp, kiểu sáng sang trọng, sử dụng đuôi đèn E27 thông dụng.Mẫu mới 2019.', 30000, '2020-10-31 11:56:57', '2020-11-02 01:44:02', 24),
(328, 'Đèn LED Búp 7W Nhựa', 'Bóng làm bằng chất liệu nhựa cao cấp, kiểu sáng sang trọng, sử dụng đuôi đèn E27 thông dụng.Mẫu mới 2019.', 50000, '2020-10-31 11:58:11', NULL, 21),
(329, 'Đèn LED Búp 7W Thủy Tinh Sứ', 'Bóng làm bằng chất liệu thủy  tinh sứ, kiểu sáng sang trọng, sử dụng đuôi đèn E27 thông dụng. Mẫu mới 2019.', 90000, '2020-10-31 11:59:18', NULL, 21),
(330, 'Đèn LED Nến 3W Các Loại', 'Bóng làm bằng chất liệu nhựa cao cấp, kiểu sáng sang trọng, sử dụng đuôi đèn E27 thông dụng.Mẫu mới 2019.', 40000, '2020-11-01 12:02:17', '2020-11-01 04:48:09', 21),
(334, 'Đèn cao áp Metal/Sodium Halide 150W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 150w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 520000, '2020-11-01 12:13:44', NULL, 24),
(335, 'Đèn cao áp Metal/Sodium Halide 250W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 250w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 650000, '2020-11-01 12:15:20', NULL, 24),
(336, 'Đèn cao áp Metal/Sodium Halide 400W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 400w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 780000, '2020-11-01 12:45:25', NULL, 24),
(337, 'Đèn Chùm Cến Pha Lê Cổ Điển Dragon DRL-037/8', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4230000, '2020-11-01 02:28:42', NULL, 25),
(338, 'Đèn Chùm Pha Lê Bóng Nến Dragon DRL-036/12', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4815000, '2020-11-01 02:30:55', NULL, 25),
(339, 'Đèn Chùm Pha Lê Châu Âu Dragon DRL-002', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 10890000, '2020-11-01 02:32:02', NULL, 25),
(340, 'Đèn Chùm Pha Lê Châu Âu Dragon DRL-003', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4950000, '2020-11-01 02:33:12', NULL, 25),
(341, 'Đèn Chùm Pha Lê Tròn Dragon DRL-062', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4500000, '2020-11-01 02:35:29', NULL, 25),
(342, 'Đèn Chùm Tròn Kiểu Tròn Dragon DRL-260/6', 'Mẫu mới 2019.', 2340000, '2020-11-01 02:37:12', NULL, 25),
(343, 'Đèn Treo Cổ Điển Châu Âu Dragon DRL-222/6', 'Mẫu mới 2019.', 2430000, '2020-11-01 02:39:09', NULL, 25),
(344, 'Đèn Đường LED 100W', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác.Mẫu mới 2019', 1400000, '2020-11-01 02:41:03', NULL, 26),
(345, 'Đèn đường LED 120W 3Chip', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác. Mẫu mới 2019.', 2000000, '2020-11-01 02:42:29', NULL, 26),
(346, 'Đèn đường LED 150W', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác.Mẫu mới 2019', 2200000, '2020-11-01 02:43:14', NULL, 26),
(347, 'Đèn đường LED 80W 2Chip', 'Đèn đường LED Dragon, là biện pháp thay thế các loại đèn thế hệ cũ trước đây, ngoài khả năng tiết kiệm điện thì việc khởi động nhanh chính là ưu điểm mà các loại đèn trước đây như đèn mê tan, đèn nari không thể có được. Việc vận hành lâu dài và không cần thay bóng do suy sáng hay bóng nhanh hỏng cũng tạo nên rất nhiều sự tiện lợi và tiết kiệm thời gian cho người sử dụng.Mẫu mới 2019.', 1100000, '2020-11-01 02:43:54', NULL, 26),
(348, 'Đèn LED âm trần 12W 3 chế độ viền xanh', 'Đèn LED có thể chuyển qua lại giữa 3 chế độ màu,với 3 cấp độ ánh sáng khác nhau.', 150000, '2020-11-01 02:45:28', NULL, 27),
(349, 'Đèn LED âm trần 18W 3 chế độ viền xanh', 'Đèn LED có thể chuyển qua lại giữa 3 chế độ màu,với 3 cấp độ ánh sáng khác nhau.', 200000, '2020-11-01 02:46:09', NULL, 27),
(350, 'Đèn LED âm trần 24W 3 chế độ viền xanh', 'Đèn LED có thể chuyển qua lại giữa 3 chế độ màu,với 3 cấp độ ánh sáng khác nhau. Mẫu mới 2019.', 300000, '2020-11-01 02:46:46', NULL, 27),
(351, 'Đèn LED âm trần 12W 3 chế độ', 'Bật tắt điện để chuyển đổi 3 chế độ màu sắc khác nhau bao gồm: vàng nắng, trắng thiên nhiên và trắng tinh. Đèn LED âm trần 3 chế độ thể hiện sự đẳng cấp cho chính ngôi nhà của bạn, khiến bất kỳ vị khách nào cũng ngạc nhiên và thán phục.', 150000, '2020-11-01 02:48:06', NULL, 27),
(352, 'Đèn LED âm trần 6W 3 chế độ', 'Bật tắt điện để chuyển đổi 3 chế độ màu sắc khác nhau bao gồm: vàng nắng, trắng thiên nhiên và trắng tinh. Đèn LED âm trần 3 chế độ thể hiện sự đẳng cấp cho chính ngôi nhà của bạn, khiến bất kỳ vị khách nào cũng ngạc nhiên và thán phục.Mẫu mới 2019.', 90000, '2020-11-01 02:48:59', NULL, 27),
(353, 'Đèn LED âm trần 7W 3 chế độ vỏ nhôm', 'Phiên bản cao cấp của đèn LED âm trần 3 chế độ. Bật tắt điện để chuyển đổi 3 chế độ màu sắc khác nhau bao gồm: vàng nắng, trắng thiên nhiên và trắng tinh. Đèn LED âm trần 3 chế độ thể hiện sự đẳng cấp cho chính ngôi nhà của bạn, khiến bất kỳ vị khách nào cũng ngạc nhiên và thán phục.Mẫu mới 2019.', 90000, '2020-11-01 02:51:09', NULL, 27),
(354, 'Âm trần siêu mỏng 24w tròn', 'Đèn led âm trần siêu mỏng là loại đèn led sử dụng công nghệ truyền ánh sáng gián tiếp nên ánh sáng phát ra đều trên bề mặt đèn. Kết hợp miếng chống chói nên ánh sáng của đèn led âm trần phát ra đều, dễ chịu, và hiệu quả chiếu sáng cao. Đèn âm trần siêu mỏng sử dụng thích hợp trong chiếu sáng văn phòng, khách sạn cũng như công trình dân cư. Với góc phát sáng 150 nên ánh sáng phát ra đều, thích hợp cho nhưngc công trình có trần thấp.Mẫu mới 2019', 160000, '2020-11-01 02:53:14', NULL, 28),
(355, 'Âm trần siêu mỏng 24w vuông', 'Mẫu mới 2019 đèn led âm trần siêu mỏng là loại đèn led sử dụng công nghệ truyền ánh sáng gián tiếp nên ánh sáng phát ra đều trên bề mặt đèn.', 160000, '2020-11-01 02:54:09', NULL, 28),
(356, 'Âm trần siêu mỏng 6w tròn', 'Đèn led âm trần siêu mỏng là loại đèn led sử dụng công nghệ truyền ánh sáng gián tiếp nên ánh sáng phát ra đều trên bề mặt đèn. Kết hợp miếng chống chói nên ánh sáng của đèn led âm trần phát ra đều, dễ chịu, và hiệu quả chiếu sáng cao. Đèn âm trần siêu mỏng sử dụng thích hợp trong chiếu sáng văn phòng, khách sạn cũng như công trình dân cư. Với góc phát sáng 150 nên ánh sáng phát ra đều, thích hợp cho nhưngc công trình có trần thấp. Đèn âm trần siêu mỏng dùng để thay thế đèn lon compact rất hiệu quả về chi phí tiết kiệm điện và độ thẩm mỹ cao.', 60000, '2020-11-01 02:55:23', NULL, 28),
(357, ' Âm trần siêu mỏng tròn 15W', 'Đèn led âm trần siêu mỏng là loại đèn led sử dụng công nghệ truyền ánh sáng gián tiếp nên ánh sáng phát ra đều trên bề mặt đèn.Mẫu mới 2019.', 100000, '2020-11-01 02:56:02', NULL, 28),
(358, 'Âm trần siêu mỏng tròn 4W', 'Đèn led âm trần siêu mỏng là loại đèn led sử dụng công nghệ truyền ánh sáng gián tiếp nên ánh sáng phát ra đều trên bề mặt đèn.', 50000, '2020-11-01 02:57:01', NULL, 28),
(359, 'Bộ điều khiển cuộn LED dây 5m', 'Giúp đèn LED dây thay đổi màu sắc và các kiểu hiệu ứng đẹp mắt.Mẫu mới 2019.', 30000, '2020-11-01 02:58:30', NULL, 29),
(360, 'Đèn Led Dây 2 đường LED', 'Sản phẩm mới 2019 Đèn LED dây 2 đường LED sáng gấp đôi đèn LED thường với nhiều màu sắc để lựa chọn: trắng, vàng, xanh, đỏ… độ sáng  mạnh đáp ứng các nhu cầu sử dụng, thiết kế.', 2500000, '2020-11-01 02:59:22', NULL, 29),
(361, 'Đèn LED dây 5050 cuộn 100m màu tím 60led/m', 'Màu tím là màu sang trọng nhất khi được thắp sáng về đêm, giữa các ánh đèn-màu tím lúc nào cũng lộng lẫy ở vị trí độc tôn của nó. ', 2500000, '2020-11-01 03:00:24', NULL, 29),
(362, 'Đèn LED dây 5050 cuộn 5m các màu', 'Đèn LED dây 5050 các màu loại siêu sáng công nghệ IP67 dùng hắt trần thạch cao, trang trí tiệm vàng, quán cafe, tủ kính, nhà bếp, chiếu sáng nội thất xe ô tô… chúng tôi chỉ bán loại tốt không phải loại trôi nổi trên thị trường, có nhiều màu cho quý khách lựa chọn. Mẫu mới 2019.', 140000, '2020-11-01 03:01:52', NULL, 29),
(363, 'Đèn LED thanh 36W', 'Mẫu mới 2019. Đèn LED chuyên dùng  chiếu sáng ngoài trời, hắt kệ tủ… cho ánh sáng chất lượng cao, ổn định.', 130000, '2020-11-01 03:02:39', NULL, 29),
(364, 'LED thanh chip đôi 4140', 'Mẫu mới 2019. Chip Samsung', 50000, '2020-11-01 03:03:22', NULL, 29),
(365, 'Đèn LED High Bay Dragon 200w', 'Sử dụng chip LED COB cao cấp nhập khẩu Đài Loan, đèn LED Highbay Dragon 200w thích hợp sử dụng trong các khu vực như nhà xưởng, nhà kho, khu sản xuất… cho ánh sáng tốt, đáp ứng các yêu cầu chiếu sáng khắc khe và độ ổn định cao, thích hợp treo ở các khu vực có trần cao trên 6m. Mẫu mới 2019.', 2500000, '2020-11-01 03:19:03', NULL, 30),
(366, 'Đèn LED High Bay Dragon 250w', 'Sử dụng chip LED COB cao cấp nhập khẩu Đài Loan, đèn LED Highbay Dragon 250w thích hợp sử dụng trong các khu vực như nhà xưởng, nhà kho, khu sản xuất… cho ánh sáng tốt, đáp ứng các yêu cầu chiếu sáng khắc khe và độ ổn định cao, thích hợp treo ở các khu vực có trần cao trên 6m. ccccc', 3000000, '2020-11-01 04:10:33', NULL, 30),
(367, 'Đèn LED nhà xưởng Dragon 100w', 'Sử dụng chip LED COB cao cấp nhập khẩu Đài Loan, đèn LED Highbay Dragon thích hợp sử dụng trong các khu vực như nhà xưởng, nhà kho, khu sản xuất… cho ánh sáng tốt, đáp ứng các yêu cầu chiếu sáng khắc khe và độ ổn định cao', 1100000, '2020-11-01 04:11:47', NULL, 30),
(368, 'Đèn LED nhà xưởng Dragon 150w', 'Sử dụng chip LED COB cao cấp nhập khẩu Đài Loan, đèn LED Highbay Dragon 150w thích hợp sử dụng trong các khu vực như nhà xưởng, nhà kho, khu sản xuất… cho ánh sáng tốt, đáp ứng các yêu cầu chiếu sáng khắc khe và độ ổn định cao.  Mẫu mới 2019.', 1750000, '2020-11-01 04:12:44', NULL, 30),
(369, ' Đèn LED nhà xưởng Dragon 50w', 'Sử dụng chip LED COB cao cấp nhập khẩu Đài Loan, đèn LED Highbay Dragon 50W thích hợp sử dụng trong các khu vực như nhà xưởng, nhà kho, khu sản xuất… cho ánh sáng tốt, đáp ứng các yêu cầu chiếu sáng khắc khe và độ ổn định cao.', 780000, '2020-11-01 04:13:45', NULL, 30),
(370, 'Đèn pha LED 100W đủ 100% công suất', 'Đèn Pha LED 100W loại 2 bóng, vỏ dày, đủ công suất', 780000, '2020-11-01 04:15:19', NULL, 32),
(371, 'Đèn pha LED 100W xanh lá/xanh dương – đủ 100% công suất', 'Đèn pha LED xanh lá chuyên dùng chiếu sáng cây cảnh, trang trí sần vườn, nhà hàng khách sạn, tiêu chuẩn chống nước IP65 sử dụng được ngoài trời cho nguồn sáng tốt và ổn định. Ngoài ra chúng tôi còn có đèn LED các màu khác như xanh dương, đỏ và đổi màu. Mẫu mới 2019.', 1000000, '2020-11-01 04:15:59', NULL, 32),
(372, 'Đèn pha LED 150W đủ 100% công suất', 'Đèn pha LED 150W sử dụng nguồn sáng LED công suất cao (High Power LED). Đèn pha LED 150W thiết kế đạt chuẩn IP65 đảm bảo hoạt động tốt ngoài trời mà không cần thiết bị bảo vệ đi kèm. Bên cạnh đó với lợi thế tiêu thụ điện năng thấp, tuổi thọ cao, giảm chi phí bảo dưỡng nên đèn pha LED là sự lựa chọn tốt nhất để thay thế các loại đèn pha công suất cao hiện nay như đèn cao áp Halogen, cao áp Metal Halide, cao áp áp Sodium…  Ứng dụng: chiếu sáng bảng hiệu, pha tường, pha sân vườn, sân bóng đá mini', 1600000, '2020-11-01 04:16:40', NULL, 32),
(373, 'Đèn pha LED 150W lúp đen chiếu xa', 'Đây là loại đèn pha được thiết kế đặc biệt dùng để chiếu xa, thiết kế mới này khắc phục những hạn chế mà các thế hệ đèn LED cũ còn thiếu thốn. Với sự ra đời của chiếc đèn pha lúp chiếu xa này, ngành đèn pha chính thức được chia ra 2 bộ phận đó là ánh sáng phát ra xa và ánh sáng lan tỏa rộng.Mẫu mới 2019', 1800000, '2020-11-01 04:17:29', NULL, 32),
(374, 'Đèn pha LED 150W xanh lá, xanh dương – đủ 100% công suất', 'Đèn pha LED xanh lá chuyên dùng chiếu sáng cây cảnh, trang trí sần vườn, nhà hàng khách sạn, tiêu chuẩn chống nước IP65 sử dụng được ngoài trời cho nguồn sáng tốt và ổn định. Ngoài ra chúng tôi còn có đèn LED các màu khác như xanh dương, đỏ và đổi màu.Mẫu mới 2019.Mẫu mới 2019.', 2000000, '2020-11-01 04:18:24', NULL, 32),
(375, 'Đèn pha LED 200W đủ 100% công suất', 'Đèn pha LED 200W sử dụng nguồn sáng LED công suất cao (High Power LED). Đèn pha LED 200W thiết kế đạt chuẩn IP65 đảm bảo hoạt động tốt ngoài trời mà không cần thiết bị bảo vệ đi kèm. Bên cạnh đó với lợi thế tiêu thụ điện năng thấp, tuổi thọ cao, giảm chi phí bảo dưỡng nên đèn pha LED là sự lựa chọn tốt nhất để thay thế các loại đèn pha công suất cao hiện nay như đèn cao áp Halogen, cao áp Metal Halide, cao áp áp Sodium…  Ứng dụng: chiếu sáng bảng hiệu, pha tường, pha sân vườn, sân bóng đá mini… Mẫu mới 2019.', 1900000, '2020-11-01 04:19:19', NULL, 32),
(376, 'Đèn mâm Dragon DRL-073', 'Đèn mâm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 2800000, '2020-11-01 04:21:13', NULL, 33),
(377, 'Đèn mâm Dragon DRL-114', 'Đèn mâm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 972000, '2020-11-01 04:21:50', NULL, 33),
(378, 'Đèn mâm pha lê châu Âu Dragon DRL-011', 'Đèn mâm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 10350000, '2020-11-01 04:22:34', NULL, 33),
(379, 'Đèn mâm trang trí Dragon DRL-071', 'Đèn mâm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 2610000, '2020-11-01 04:23:09', NULL, 33),
(380, 'Đèn mâm tròn pha lê Dragon DRL-074', 'Đèn mâm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 3330000, '2020-11-01 04:23:45', NULL, 33),
(381, 'Bóng, Tăng Phô, Kích, Tụ, Chóa Đèn Cao Áp', 'Mẫu mới 2019.', 90000, '2020-11-01 04:47:05', NULL, 24);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ck_led` (`led_id`),
  ADD KEY `fk_id_cus` (`cus_id`);

--
-- Chỉ mục cho bảng `custummer`
--
ALTER TABLE `custummer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_led` (`led_id`);

--
-- Chỉ mục cho bảng `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_categori` (`categori_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `categori`
--
ALTER TABLE `categori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `custummer`
--
ALTER TABLE `custummer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT cho bảng `led`
--
ALTER TABLE `led`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
