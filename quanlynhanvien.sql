-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2023 lúc 09:45 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_03_30_003036_create__muc_luong', 1),
(14, '2023_03_30_003053_create__vi_tri', 1),
(15, '2023_03_30_003106_create__phong_ban', 1),
(16, '2023_03_30_003123_create__nhan_vien', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muc_luong`
--

CREATE TABLE `muc_luong` (
  `MaML` bigint(20) UNSIGNED NOT NULL,
  `Mucthap` int(11) NOT NULL,
  `Muccao` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muc_luong`
--

INSERT INTO `muc_luong` (`MaML`, `Mucthap`, `Muccao`, `created_at`, `updated_at`) VALUES
(1, 8000000, 10000000, '2023-05-24 07:26:50', '2023-05-24 07:26:50'),
(2, 10000000, 15000000, '2023-05-24 07:26:59', '2023-05-24 07:26:59'),
(3, 15000000, 30000000, '2023-05-24 07:27:05', '2023-05-24 07:27:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TenNV` varchar(255) NOT NULL,
  `MaVT` bigint(20) UNSIGNED NOT NULL,
  `MaPB` bigint(20) UNSIGNED NOT NULL,
  `Luong` varchar(255) NOT NULL,
  `NgayVL` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `TenNV`, `MaVT`, `MaPB`, `Luong`, `NgayVL`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Tuấn', 1, 1, '8500000', '2019-06-16', '2023-05-24 07:34:48', '2023-05-30 18:18:13'),
(2, 'Đoàn Thanh Huy', 3, 2, '11000000', '2019-06-23', '2023-05-24 07:35:16', '2023-05-24 07:35:16'),
(4, 'Lê Đức Cạp', 1, 2, '8500000', '2019-06-16', '2023-05-30 17:22:03', '2023-05-30 17:22:03'),
(5, 'Hoàng Hoa Minh', 2, 1, '10000000', '2019-06-23', '2023-05-30 17:22:39', '2023-05-30 17:22:39'),
(6, 'Đoàn Huy Khánh', 4, 1, '15000000', '2019-06-12', '2023-05-30 17:23:23', '2023-05-30 17:23:23'),
(7, 'Lê Dinh', 3, 1, '12000000', '2019-04-29', '2023-05-30 17:23:44', '2023-05-30 17:23:44'),
(8, 'Nguyễn Vinh Tường', 2, 1, '10000000', '2019-06-12', '2023-05-30 17:24:08', '2023-05-30 17:24:08'),
(9, 'Nguyễn Thị Anh Tú', 1, 1, '8500000', '2019-04-29', '2023-05-30 17:24:32', '2023-05-30 17:24:32'),
(10, 'Khánh Đăng', 5, 1, '5000000', '2019-06-12', '2023-05-30 17:25:45', '2023-05-30 17:25:45'),
(11, 'Đình Thành', 5, 1, '5000000', '2019-04-29', '2023-05-30 17:26:15', '2023-05-30 17:26:15'),
(12, 'Đức Anh', 5, 2, '5000000', '2019-04-29', '2023-05-30 17:27:20', '2023-05-30 17:27:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `MaPB` bigint(20) UNSIGNED NOT NULL,
  `TenPB` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `NgayTL` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`MaPB`, `TenPB`, `DiaChi`, `NgayTL`, `created_at`, `updated_at`) VALUES
(1, 'Phòng quản lý nhân sự', '203H', '2019-01-05', '2023-05-24 07:25:56', '2023-05-24 07:25:56'),
(2, 'Phòng đào tạo học viên', '504H', '2018-08-12', '2023-05-24 07:26:13', '2023-05-24 07:26:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sdfg', '123hs@gmail.com', NULL, '$2y$10$NkmZ.oNlVmorhEM49eMWnONopMEySMrHNuQs2vYHW96/XutKAiKfK', 'YJXwtOsZoG8XQ7wEAjAR3gL44NV7mHwMaDDUZblijHzkJHyZ04XSfpq8bMjL', '2023-05-24 07:25:39', '2023-05-24 07:25:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vi_tri`
--

CREATE TABLE `vi_tri` (
  `MaVT` bigint(20) UNSIGNED NOT NULL,
  `mota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vi_tri`
--

INSERT INTO `vi_tri` (`MaVT`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'Nhân Viên', '2023-05-24 07:26:20', '2023-05-24 07:26:20'),
(2, 'Trưởng nhóm', '2023-05-24 07:26:27', '2023-05-24 07:26:27'),
(3, 'Phó Phòng', '2023-05-24 07:26:35', '2023-05-24 07:26:35'),
(4, 'Trưởng Phòng', '2023-05-24 07:26:41', '2023-05-24 07:26:41'),
(5, 'Bảo vệ', '2023-05-30 17:24:59', '2023-05-30 17:24:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `muc_luong`
--
ALTER TABLE `muc_luong`
  ADD PRIMARY KEY (`MaML`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhan_vien_mavt_foreign` (`MaVT`),
  ADD KEY `nhan_vien_mapb_foreign` (`MaPB`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`MaPB`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vi_tri`
--
ALTER TABLE `vi_tri`
  ADD PRIMARY KEY (`MaVT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `muc_luong`
--
ALTER TABLE `muc_luong`
  MODIFY `MaML` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  MODIFY `MaPB` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `vi_tri`
--
ALTER TABLE `vi_tri`
  MODIFY `MaVT` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_mapb_foreign` FOREIGN KEY (`MaPB`) REFERENCES `phong_ban` (`MaPB`) ON DELETE CASCADE,
  ADD CONSTRAINT `nhan_vien_mavt_foreign` FOREIGN KEY (`MaVT`) REFERENCES `vi_tri` (`MaVT`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
