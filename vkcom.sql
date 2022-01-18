-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2022 lúc 11:14 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vkcom`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'b8602e39baab70f529ba.jpg', '2022-01-03 16:53:37', '1'),
(2, 'b8602e39baab70f529ba.jpg', '2022-01-04 15:06:17', '1'),
(3, 'b8602e39baab70f529ba.jpg', '2022-01-04 15:10:09', '1'),
(4, 'b8602e39baab70f529ba.jpg', '2022-01-12 15:51:27', '1'),
(5, 'b8602e39baab70f529ba.jpg', '2022-01-12 15:53:47', '1'),
(6, 'b8602e39baab70f529ba.jpg', '2022-01-12 16:09:48', '1'),
(7, '195575519_322929442773799_4401019186322701469_n3 - Copy (2).jpg', '2022-01-12 22:39:09', '1'),
(8, '195575519_322929442773799_4401019186322701469_n3 - Copy (2).jpg', '2022-01-12 22:39:49', '1'),
(9, 'DT2.png', '2022-01-12 22:41:52', '1'),
(10, 'logo_android.jpg', '2022-01-12 22:58:25', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL CHECK (`gender` in ('Male','Female'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `first_name`, `last_name`, `day`, `month`, `year`, `gender`) VALUES
(1, 'Trung', 'Quyền', '18', 'January', '2000', 'Male'),
(3, 'Nhàn', 'Vũ', '9', 'April', '2001', 'Female'),
(4, 'Thiệu', 'Nguyễn', '9', 'June', '1995', 'Male'),
(5, 'Văn', 'nam', '4', 'April', '1911', 'Male');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `email_verification_link`, `email_verified_at`) VALUES
(3, 'Khang Vũ', 'vutuandat810@gmail.com', '$2y$10$4IEZq.svfTgfDZRoSDKQ8ecQD3p/6r13GT7hFLtTCo93sRWyei6oK', 0, '6e38d044f86970e3de9832a607ea8b652538', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `first_name` (`first_name`),
  ADD UNIQUE KEY `last_name` (`last_name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users` FOREIGN KEY (`id`) REFERENCES `info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
