-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 18, 2022 lúc 09:03 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `active`, `created_at`, `updated_at`) VALUES
(58, 'Tất cả sản phẩm', 0, '', '', 1, '2022-08-17 21:56:20', '2022-08-17 21:56:20'),
(59, 'Apple', 58, '', '', 1, '2022-08-17 21:58:22', '2022-08-17 22:12:51'),
(60, 'Samsung', 58, '', '', 1, '2022-08-17 21:58:32', '2022-08-17 21:58:32'),
(61, 'Oppo', 58, '', '', 1, '2022-08-17 21:58:38', '2022-08-17 21:58:38'),
(62, 'Xiaomi', 58, '', '', 1, '2022-08-17 21:58:57', '2022-08-17 21:58:57'),
(63, 'Realme', 58, '', '', 1, '2022-08-17 21:59:10', '2022-08-17 21:59:10'),
(64, 'Vivo', 58, '', '', 1, '2022-08-17 21:59:15', '2022-08-17 21:59:15'),
(65, 'Phụ kiện', 58, '', '', 1, '2022-08-17 22:13:40', '2022-08-17 22:13:40'),
(66, 'Ốp lưng', 65, '', '', 1, '2022-08-17 22:14:12', '2022-08-17 22:14:12'),
(67, 'Cáp sạc', 65, '', '', 1, '2022-08-17 22:14:20', '2022-08-17 22:14:20'),
(68, 'Củ sạc', 65, '', '', 1, '2022-08-17 22:14:27', '2022-08-17 22:14:27'),
(69, 'Đồng hồ', 65, '', '', 1, '2022-08-17 22:14:43', '2022-08-17 22:14:43'),
(71, 'Tai nghe', 65, '', '', 1, '2022-08-17 22:36:05', '2022-08-17 22:36:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_10_073935_create_menus_table', 1),
(6, '2022_08_10_091808_update_table_menu', 2),
(7, '2022_08_11_074631_create_products_table', 3),
(8, '2022_08_11_133722_create_sliders_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `menu_id`, `price`, `price_sale`, `thumb`, `active`, `created_at`, `updated_at`) VALUES
(47, 'iPhone 13 Pro 128GB Chính Hãng', 'iPhone 13 Pro 128GB Chính hãng (VN/A) là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 24000000, 0, '/storage/uploads/2022/08/18/iphone-13-pro-128gb-didongviet.jpg', 1, '2022-08-17 22:03:00', '2022-08-17 22:03:00'),
(49, 'iPhone 12 128GB Chính Hãng', 'iPhone 12 128GB Chính hãng (VN/A) là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 17990000, 0, '/storage/uploads/2022/08/18/iphone-12-64gb-didongviet.jpeg', 1, '2022-08-17 22:08:05', '2022-08-17 22:08:05'),
(50, 'iPhone 11 64GB Chính Hãng', 'iPhone 11 64GB chính hãng VN/A là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 10690000, 0, '/storage/uploads/2022/08/18/iphone-11-64gb-chinh-hang_3.jpg', 1, '2022-08-17 22:08:54', '2022-08-17 22:08:54'),
(51, 'iPhone SE 3 256GB Chính Hãng', 'iPhone SE 3 256GB Chính hãng là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 14590000, 0, '/storage/uploads/2022/08/18/den-thumb.png', 1, '2022-08-17 22:09:54', '2022-08-17 22:09:54'),
(52, 'iPhone SE 3 64GB Chính Hãng', 'iPhone SE 3 64GB Chính hãng là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 9990000, 0, '/storage/uploads/2022/08/18/iphone-11-64gb-chinh-hang_3.jpg', 1, '2022-08-17 22:11:21', '2022-08-17 22:11:21'),
(54, 'Samsung Galaxy Z Fold4 5G 256GB', 'Samsung Galaxy Z Fold4 5G 256GB Chính Hãng là chiếc smartphone cao cấp với thiết kế mới lạ sang trọng, mang nhiều nâng cấp với màn hình Dynamic AMOLED 2X lớn, độ phân giải Full HD+', '', 60, 40990000, 0, '/storage/uploads/2022/08/18/samsung-galaxy-z-fold4-5g-256gb-didongviet.jpg', 1, '2022-08-17 22:51:22', '2022-08-17 22:51:22'),
(55, 'Samsung Galaxy Z Fold3 5G (12GB|256GB)', 'Galaxy Z Fold3 5G 256GB siêu phẩm nhà Samsung với thiết kế hiện đại, sang trọng, màn hình chính 7.6 inch và màn hình phụ 6.2 inch, đi kèm là công nghệ Foldable Dynamic AMOLED 2X', '', 60, 35790000, 0, '/storage/uploads/2022/08/18/samsung-galaxy-z-fold3-5g-256gb-didongviet_1.jpg', 1, '2022-08-17 22:53:17', '2022-08-17 22:53:17'),
(56, 'Samsung Galaxy S22 Ultra 5G (12GB|256GB)', 'Galaxy S22 Ultra 256GB sở hữu thiết kế cao cấp với màn hình 6.8 inch độ phân giải QuadHD+ (2K), tấm nền Dynamic AMOLED tần số quét 120Hz, cấu hình mạnh mẽ với vi xử lý Snapdragon 8 Gen 1, giao diện OneUI 4.0 trên nền tảng Android 12 mới nhất.', '', 60, 28000000, 0, '/storage/uploads/2022/08/18/samsung-galaxy-s22-ultra-256gb-didongviet.jpg', 1, '2022-08-17 22:53:58', '2022-08-17 22:54:35'),
(57, 'Samsung Galaxy A73 (8GB|128GB)', 'Samsung Galaxy A73 sở hữu thiết kế cao cấp với màn hình 6.7 inch Full HD+, tấm nền Super AMOLED tần số quét 120Hz, bộ vi xử lý Snapdragon 778G, giao diện OneUI 4.1 trên nền tảng Android 12.', '', 60, 10990000, 0, '/storage/uploads/2022/08/18/samsung-galaxy-a73-didongviet_1.jpg', 1, '2022-08-17 22:55:39', '2022-08-17 22:55:39'),
(58, 'Samsung Galaxy A33 (6GB|128GB)', 'Samsung Galaxy A33 có thiết kế mới lạ, trẻ trung. Màn hình giọt nước Super AMOLED 6.5 inch, được tích hợp cảm biến vân tay trên màn hình tiện lợi. Cấu hình mạnh mẽ nhờ con chip Dimensity 800U.', '', 60, 0, 0, '/storage/uploads/2022/08/18/samsung-galaxy-a33-didongviet_1_1.jpg', 1, '2022-08-17 22:56:22', '2022-08-18 01:34:29'),
(59, 'OPPO A57 5G (4GB|64GB)', 'OPPO A57 sở hữu thiết kế hiện đại, tinh tế và vô cùng mỏng với độ dày chỉ 8.4mm.', '', 61, 4100000, 0, '/storage/uploads/2022/08/18/oppo-a57-didongviet.jpg', 1, '2022-08-17 22:58:10', '2022-08-17 22:58:10'),
(60, 'OPPO A96 (8GB|128GB)', 'OPPO A96 128GB sở hữu thiết kế hiện đại, tinh tế và vô cùng mỏng với độ dày chỉ 8.4mm.', '', 61, 0, 0, '/storage/uploads/2022/08/18/oppo-a96-5g-didongviet.jpg', 1, '2022-08-17 22:58:53', '2022-08-18 01:34:09'),
(61, 'Xiaomi Redmi Note 11s (8GB|128GB)', 'Xiaomi Redmi Note 11s 128GB là chiếc điện thoại giá rẻ của Xiaomi, máy có màn hình 6.43 inches. Cấu hình ổn định với chipset Helio G96.', '', 62, 6090000, 0, '/storage/uploads/2022/08/18/xiaomi-redmi-note-11s-128gb-didongviet.jpg', 1, '2022-08-17 22:59:50', '2022-08-17 22:59:50'),
(62, 'Vivo Y15s (3GB|32GB)', 'Vivo Y15s 32GB có thiết kế nguyên khối với màu sắc đẹp. Trang bị màn hình IPS LCD 6.51 inch lớn với tần số quét 60Hz.', '', 64, 2990000, 0, '/storage/uploads/2022/08/18/vivo-y15s-32gb-didongviet_1.jpg', 1, '2022-08-17 23:00:32', '2022-08-17 23:00:32'),
(63, 'Realme C35 64GB', 'Realme C35 sở hữu 2 màu sắc trẻ trung: Đen tuyền và xanh huyền ảo với một thiết kế vô cùng độc đáo, khung bezel bo góc làm bằng vật liệu 2D phát sáng linh động, mang đến hiệu ứng màu ấn tượng khi thay đổi góc nhìn.', '', 63, 4500000, 0, '/storage/uploads/2022/08/18/realme-c35-thumb-new-600x600.jpg', 1, '2022-08-17 23:01:41', '2022-08-18 00:59:12'),
(64, 'Ốp lưng iPhone 13 Pro UAG Standard Issue', 'Ốp lưng iPhone 13 Pro UAG Standard Issue có thành phần silicone lỏng chống vi khuẩn với cảm giác mềm mại đáng kinh ngạc', '', 66, 950000, 0, '/storage/uploads/2022/08/18/op-lung-iphone-13-pro-uag-standard-issue-didongviet.jpg', 1, '2022-08-18 01:29:49', '2022-08-18 01:29:49'),
(65, 'Bộ sạc Bundle On-The-Go 3 trong 1 Aukey TK-2', '', '', 67, 850000, 0, '/storage/uploads/2022/08/18/bo-sac-aukey-tk-2-on-the-go-bundle-didongviet.jpg', 1, '2022-08-18 01:30:42', '2022-08-18 01:30:42'),
(66, 'Sạc nhanh 30W Aukey PA-Y30s', '', '', 68, 0, 0, '/storage/uploads/2022/08/18/sac-nhanh-30w-aukey-pa-y30s-didongviet.jpg', 1, '2022-08-18 01:31:35', '2022-08-18 01:33:40'),
(67, 'Đồng hồ thể thao thông minh Huawei GT 3 42mm - Dây cao su Chính Hãng', 'Đồng hồ thông minh Huawei GT 3 42mm dây cao su có thiết kế màn hình AMOLED, hiệu năng hoạt động ổn định.', '', 69, 4390000, 0, '/storage/uploads/2022/08/18/dong-ho-the-thao-thong-minh-huawei-gt-3-42mm-day-cao-su-didongviet_1.jpg', 1, '2022-08-18 01:32:27', '2022-08-18 01:32:27'),
(68, 'Tai nghe không dây Xiaomi Redmi Buds 3', 'Tai nghe Xiaomi Redmi Buds 3 sở hữu thiết kế dạng earbuds cùng trọng lượng vô cùng nhẹ mang lại cảm giác đeo vô cùng thoải mái.', '', 71, 990000, 0, '/storage/uploads/2022/08/18/tai-nghe-khong-day-xiaomi-redmi-buds-3-didongviet.jpg', 1, '2022-08-18 01:33:11', '2022-08-18 01:33:11'),
(69, 'Xiaomi Redmi Note 11 (4GB|128GB)', 'Redmi Note 11 128GB có thiết kế sang trọng, màn hình rộng 6.43 inch tần số quét 90Hz, camera lên đến 50MP, mạnh mẽ với chip Snapdragon 680', '', 62, 4400000, 0, '/storage/uploads/2022/08/18/xiaomi-redmi-note-11-128gb-didongviet_1.jpeg', 1, '2022-08-18 01:36:41', '2022-08-18 01:36:41'),
(70, 'Samsung Galaxy Z Flip4 5G 128GB', 'Samsung Galaxy Z Flip4 5G 128GB là điện thoại chính hãng Samsung, nhận bảo hành 12 tháng theo chính sách ủy quyền của Samsung Việt Nam.', '', 60, 23900000, 0, '/storage/uploads/2022/08/18/samsung-galaxy-z-flip4-5g-128gb-didongviet_1_1.jpg', 1, '2022-08-18 01:37:29', '2022-08-18 01:37:29'),
(71, 'iPhone 13 128GB Chính Hãng', 'iPhone 13 128GB Chính hãng (VN/A) là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 18790000, 0, '/storage/uploads/2022/08/18/iphone-13-128gb-didongviet_1.jpg', 1, '2022-08-17 22:01:51', '2022-08-17 22:01:51'),
(72, 'iPhone 13 Pro Max 128GB Chính Hãng', 'iPhone 13 Pro Max 128GB Chính hãng (VN/A) là phiên bản được phân phối chính thức bởi Apple Việt Nam', '', 59, 26790000, 0, '/storage/uploads/2022/08/18/iphone-13-pro-max-128gb-didongviet.jpg', 1, '2022-08-17 22:04:28', '2022-08-17 22:04:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_by` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url`, `thumb`, `sort_by`, `active`, `created_at`, `updated_at`) VALUES
(25, 'iphone', NULL, '/storage/uploads/2022/08/18/Apple-iPhone13-Slide.jpg', 1, 0, '2022-08-17 22:37:29', '2022-08-18 01:51:14'),
(28, 'iphone12', NULL, '/storage/uploads/2022/08/18/iphone12PAR56846_TP_V.jpg', 2, 1, '2022-08-18 01:52:29', '2022-08-18 01:52:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@localhost.com', NULL, '$2y$10$EFr2npaGTo7uW6WHFASdlOAGgFygs9WS.oxH/k9KxmfMvXk3jaoQm', 'AgjBL4qK2Kj3H0d7tTiqg4I767p6QjQmClBWNcyDbvRMZ253wcX4dun7xiUv', NULL, NULL);

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
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
