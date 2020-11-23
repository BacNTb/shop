-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

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
  `username` char(200) NOT NULL,
  `password` char(200) NOT NULL,
  `email` char(200) NOT NULL,
  `tell` int(20) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`, `tell`, `create_at`, `update_at`) VALUES
(1, 'Nguyễn Thế Bắc', 'bacnt', 'a', 'thebac9910@gmail.com', 975316940, '2020-10-08 11:21:11', NULL),
(3, 'Admin', 'admin', 'a', 'bac.nt.670@aptechlearning.edu.vn', 977778999, '2020-10-09 02:40:00', '0000-00-00 00:00:00');

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
(14, 'Đèn Đường LED', '', 1, '0000-00-00 00:00:00', '2020-10-10 10:25:30'),
(15, 'Đèn Chùm Trang Trí', '', 1, '2020-10-09 04:36:05', '0000-00-00 00:00:00'),
(16, 'Đèn Cao Áp Metal', '', 1, '2020-10-09 04:36:43', '0000-00-00 00:00:00'),
(17, 'Đèn LED 3 Chế Độ', '', 1, '2020-10-09 04:37:02', '0000-00-00 00:00:00'),
(18, 'Bóng LED Trụ Tròn', '', 1, '2020-10-09 04:39:07', '0000-00-00 00:00:00'),
(19, 'Đèn LED Âm Trần', '', 1, '2020-10-10 10:27:24', '0000-00-00 00:00:00'),
(20, 'Đèn LED Dây', '', 1, '2020-10-10 10:57:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `custummer`
--

CREATE TABLE `custummer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `tell` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(115, 215, 'den-duong-100w-1.jpg', '2020-10-13 01:11:11', NULL),
(116, 215, 'den-duong-100w-2.jpg', '2020-10-13 01:11:11', NULL),
(117, 215, 'den-duong-led-100w.jpg', '2020-10-13 01:11:11', NULL),
(118, 216, 'den-duong-led-120w-3chip.jpg', '2020-10-13 01:14:00', NULL),
(119, 216, 'led-street-light-120w-80w.jpg', '2020-10-13 01:14:00', NULL),
(120, 217, 'den-duong-led-150w.jpg', '2020-10-13 01:15:10', NULL),
(121, 218, 'den-duong-led-80w-2chip.jpg', '2020-10-13 01:16:09', NULL),
(122, 219, 'drl-037-8.jpg', '2020-10-13 01:17:24', NULL),
(123, 220, 'drl-036-12.jpg', '2020-10-13 01:18:17', NULL),
(124, 222, 'den-trang-tri-dragon-chum-t.jpg', '2020-10-13 01:20:31', NULL),
(125, 223, 'den-trang-tri-dragon-260-6.jpg', '2020-10-13 01:22:18', NULL),
(126, 224, 'bong-kich-tu-choa-den-cao-ap.jpg', '2020-10-13 01:23:19', NULL),
(127, 224, 'bong-kich-tu-choa-den-cao-ap-250x250.jpg', '2020-10-13 01:23:19', NULL),
(128, 229, 'a11113.jpg', '2020-10-13 01:31:36', NULL);

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
(215, 'Đèn đường LED 100W', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác.Mẫu mới 2019', 1400000, '2020-10-13 01:11:11', NULL, 14),
(216, 'Đèn đường LED 120W 3Chip', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác. Mẫu mới 2019.', 2000000, '2020-10-13 01:14:00', NULL, 14),
(217, 'Đèn đường LED 150W', 'Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon, với chất liệu hợp kim nhôm đúc nguyên khối chống chịu bão cấp 15 và các dạng thời tiết khắc nghiệt khác, chip Epistar siêu sáng, đặc biệt mở  điện là sáng ngay không cần phải đợi như các loại đèn cao áp khác.Mẫu mới 2019', 2200000, '2020-10-13 01:15:10', NULL, 14),
(218, 'Đèn đường LED 80W 2Chip', 'Đèn đường LED Dragon, là biện pháp thay thế các loại đèn thế hệ cũ trước đây, ngoài khả năng tiết kiệm điện thì việc khởi động nhanh chính là ưu điểm mà các loại đèn trước đây như đèn mê tan, đèn nari không thể có được. Việc vận hành lâu dài và không cần thay bóng do suy sáng hay bóng nhanh hỏng cũng tạo nên rất nhiều sự tiện lợi và tiết kiệm thời gian cho người sử dụng.Mẫu mới 2019.', 1100000, '2020-10-13 01:16:09', NULL, 14),
(219, 'Đèn chùm nến pha lê cổ điển Dragon DRL-037/8', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4230000, '2020-10-13 01:17:24', NULL, 15),
(220, 'Đèn chùm pha lê bóng nến Dragon DRL-036/12', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4815000, '2020-10-13 01:18:17', NULL, 15),
(221, 'Đèn chùm pha lê châu Âu Dragon DRL-002', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 10890000, '2020-10-13 01:19:08', NULL, 15),
(222, 'Đèn chùm pha lê tròn Dragon DRL-062', 'Đèn chùm trang trí là vật bất ly thân cho bất kỳ căn nhà sang trọng nào, nó thể hiện đẳng cấp của gia chủ, cũng như mang lại sự ngưỡng mộ cho các khách viếng thăm.Mẫu mới 2019.', 4500000, '2020-10-13 01:20:31', NULL, 15),
(223, 'Đèn chùm tròn kiểu tròn Dragon DRL-260/6', 'Mẫu mới 2019.', 2340000, '2020-10-13 01:22:18', NULL, 15),
(224, 'Bóng, Tăng Phô, Kích, Tụ, Chóa Đèn Cao Áp', 'Mẫu mới 2019', 900000, '2020-10-13 01:23:19', NULL, 16),
(225, 'Đèn cao áp Metal/Sodium Halide 1000W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 1000w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 3500000, '2020-10-13 01:24:23', NULL, 16),
(226, 'Đèn cao áp Metal/Sodium Halide 250W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 250w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019', 650000, '2020-10-13 01:24:57', NULL, 16),
(227, 'Đèn cao áp Metal/Sodium Halide 400W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 400w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 780000, '2020-10-13 01:25:47', NULL, 16),
(229, 'Đèn cao áp Metal/Sodium Halide 400W', 'Với xưởng cơ khí riêng, chúng tôi trực tiếp sản xuất các loại đèn cao áp 400w chất lượng cao với giá thành cực kỳ tối ưu đáp ứng các yêu cầu về độ ổn định điện áp, độ bền, tiêu chuần chống nước … Mẫu mới 2019.', 780000, '2020-10-13 01:31:36', NULL, 16),
(230, 'Đèn LED Trụ Tròn', 'des for task 111222', 25000000, '2020-10-14 08:09:01', NULL, 20),
(231, 'Đèn đường LED 100W', '', 0, '2020-10-14 08:14:29', NULL, 19),
(232, 'Đèn đường LED 100W', '', 0, '2020-10-14 08:15:03', NULL, 19);

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
-- Chỉ mục cho bảng `custummer`
--
ALTER TABLE `custummer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `categori`
--
ALTER TABLE `categori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `custummer`
--
ALTER TABLE `custummer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `led`
--
ALTER TABLE `led`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
