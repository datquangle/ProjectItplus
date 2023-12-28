-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2023 lúc 06:45 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thi2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Lifestyle', 'Giay Lifestyle', 'lifestyle', '2023-12-12 09:38:58', '2023-12-12 09:38:58'),
(2, 'Jordan', 'Giay Jordan', 'jordan', '2023-12-13 18:02:17', '2023-12-13 18:04:30'),
(3, 'Boots', 'Giay Boots', 'boost', '2023-12-13 18:05:35', '2023-12-19 19:20:19'),
(4, 'Football', 'Giay Football', 'football', '2023-12-13 18:06:17', '2023-12-13 18:06:17'),
(5, 'Running', 'Giay Running', 'running', '2023-12-16 19:13:55', '2023-12-16 19:23:06');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_12_10_235557_create_users_table', 1),
(4, '2023_12_10_235607_create_products_table', 1),
(5, '2023_12_10_235619_create_categories_table', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_category`, `name`, `img`, `price`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(6, '1', 'Nike Full Force Low', 'storage/product/Nike Full Force Low311702375713.webp', '2300000', 'A new shoe with old-school appeal—your retro dreams just came true', 'nike-full-force-low', '2023-12-12 10:08:33', '2023-12-12 10:08:33'),
(7, '1', 'Jordan Stadium 90', 'storage/product/Jordan Stadium 906841703096518.webp', '1700000', NULL, 'jordan-stadium-90', '2023-12-20 18:21:58', '2023-12-20 18:21:58'),
(8, '1', 'Nike Air Force 1 LV8 3', 'storage/product/Nike Air Force 1 LV8 35911703096564.webp', '2400000', NULL, 'nike-air-force-1-lv8-3', '2023-12-20 18:22:44', '2023-12-20 18:22:44'),
(9, '1', 'Nike Air Huarache', 'storage/product/Nike Air Huarache6891703096589.webp', '1900000', NULL, 'nike-air-huarache', '2023-12-20 18:23:09', '2023-12-20 18:23:09'),
(10, '1', 'Nike Air Max 1', 'storage/product/Nike Air Max 15221703096631.webp', '1600000', NULL, 'nike-air-max-1', '2023-12-20 18:23:51', '2023-12-20 18:23:51'),
(11, '1', 'Nike Air Max 1wi', 'storage/product/Nike Air Max 1wi5811703096678.webp', '2000000', NULL, 'nike-air-max-1wi', '2023-12-20 18:24:38', '2023-12-20 18:24:38'),
(12, '1', 'Nike Air Max 90 GORE-TEX.', 'storage/product/Nike Air Max 90 GORE-TEX.7921703096713.webp', '3600000', NULL, 'nike-air-max-90-gore-tex', '2023-12-20 18:25:13', '2023-12-20 18:25:13'),
(13, '1', 'Nike Air Max 90', 'storage/product/Nike Air Max 906761703096862.webp', '2500000', NULL, 'nike-air-max-90', '2023-12-20 18:27:42', '2023-12-20 18:27:42'),
(14, '1', 'Nike Air Max 97 SE', 'storage/product/Nike Air Max 97 SE111703096902.webp', '1200000', NULL, 'nike-air-max-97-se', '2023-12-20 18:28:22', '2023-12-20 18:28:22'),
(15, '1', 'Nike Blazer Low 77 Vintage', 'storage/product/Nike Blazer Low 77 Vintage9441703096932.webp', '2600000', NULL, 'nike-blazer-low-77-vintage', '2023-12-20 18:28:52', '2023-12-20 18:28:52'),
(16, '1', 'Nike Court Legacy Next Nature', 'storage/product/Nike Court Legacy Next Nature9741703096955.webp', '1700000', NULL, 'nike-court-legacy-next-nature', '2023-12-20 18:29:15', '2023-12-20 18:29:15'),
(17, '1', 'Nike Gamma Force', 'storage/product/Nike Gamma Force9831703097007.webp', '2000000', NULL, 'nike-gamma-force', '2023-12-20 18:30:07', '2023-12-20 18:30:07'),
(18, '1', 'Nike Killshot 2', 'storage/product/Nike Killshot 27611703097037.webp', '1700000', NULL, 'nike-killshot-2', '2023-12-20 18:30:37', '2023-12-20 18:30:37'),
(19, '1', 'Nike Phoenix Waffle', 'storage/product/Nike Phoenix Waffle7631703097065.webp', '2800000', NULL, 'nike-phoenix-waffle', '2023-12-20 18:31:05', '2023-12-20 18:31:05'),
(20, '1', 'Nike Tech Hera', 'storage/product/Nike Tech Hera5041703097092.webp', '2000000', NULL, 'nike-tech-hera', '2023-12-20 18:31:32', '2023-12-20 18:31:32'),
(21, '1', 'Nike Waffle Debut Vintage', 'storage/product/Nike Waffle Debut Vintage4671703097120.webp', '2000000', NULL, 'nike-waffle-debut-vintage', '2023-12-20 18:32:00', '2023-12-20 18:32:00'),
(22, '2', 'Air Jordan 1 Elevate Low', 'storage/product/Air Jordan 1 Elevate Low3561703097402.webp', '2000000', NULL, 'air-jordan-1-elevate-low', '2023-12-20 18:36:42', '2023-12-20 18:36:42'),
(23, '2', 'Air Jordan 1 Hi FlyEase', 'storage/product/Air Jordan 1 Hi FlyEase6831703097455.webp', '3600000', NULL, 'air-jordan-1-hi-flyease', '2023-12-20 18:37:35', '2023-12-20 18:37:35'),
(24, '2', 'Air Jordan 1 High Method of Make', 'storage/product/Air Jordan 1 High Method of Make9661703097490.webp', '3600000', NULL, 'air-jordan-1-high-method-of-make', '2023-12-20 18:38:10', '2023-12-20 18:38:10'),
(25, '2', 'Air Jordan 1 Low Pink', 'storage/product/Air Jordan 1 Low Pink6181703097518.webp', '2400000', NULL, 'air-jordan-1-low-pink', '2023-12-20 18:38:38', '2023-12-20 18:38:38'),
(26, '2', 'Air Jordan 1 Low SE JG', 'storage/product/Air Jordan 1 Low SE JG7191703097811.webp', '2000000', NULL, 'air-jordan-1-low-se-jg', '2023-12-20 18:43:31', '2023-12-20 18:43:31'),
(27, '2', 'Air Jordan 1 Low SE', 'storage/product/Air Jordan 1 Low SE4781703097841.webp', '2000000', NULL, 'air-jordan-1-low-se', '2023-12-20 18:44:01', '2023-12-20 18:44:01'),
(28, '2', 'Air Jordan 1 Low', 'storage/product/Air Jordan 1 Low971703097885.webp', '2000000', NULL, 'air-jordan-1-low', '2023-12-20 18:44:45', '2023-12-20 18:44:45'),
(29, '2', 'Air Jordan 1 Mid', 'storage/product/Air Jordan 1 Mid4861703097904.webp', '3600000', NULL, 'air-jordan-1-mid', '2023-12-20 18:45:04', '2023-12-20 18:45:04'),
(30, '2', 'Air Jordan 1 Zoom CMFT 2', 'storage/product/Air Jordan 1 Zoom CMFT 25951703098006.webp', '3600000', NULL, 'air-jordan-1-zoom-cmft-2', '2023-12-20 18:46:46', '2023-12-20 18:46:46'),
(31, '2', 'Air Jordan Legacy 312 Low', 'storage/product/Air Jordan Legacy 312 Low4771703098035.webp', '3400000', NULL, 'air-jordan-legacy-312-low', '2023-12-20 18:47:15', '2023-12-20 18:47:15'),
(32, '2', 'Jordan Max Aura 5', 'storage/product/Jordan Max Aura 59671703098273.webp', '3500000', NULL, 'jordan-max-aura-5', '2023-12-20 18:51:13', '2023-12-20 18:51:13'),
(33, '2', 'Jordan Nu Retro 1 Low Black', 'storage/product/Jordan Nu Retro 1 Low Black9431703098292.webp', '2700000', NULL, 'jordan-nu-retro-1-low-black', '2023-12-20 18:51:32', '2023-12-20 18:51:32'),
(34, '2', 'Jordan Nu Retro 1 Low', 'storage/product/Jordan Nu Retro 1 Low3901703098375.webp', '2700000', NULL, 'jordan-nu-retro-1-low', '2023-12-20 18:52:55', '2023-12-20 18:52:55'),
(35, '2', 'Jordan One Take 4 PF', 'storage/product/Jordan One Take 4 PF1981703098404.webp', '2800000', NULL, 'jordan-one-take-4-pf', '2023-12-20 18:53:24', '2023-12-20 18:53:24'),
(36, '2', 'Jordan Stadium 90', 'storage/product/Jordan Stadium 907331703098448.webp', '2400000', NULL, 'jordan-stadium-90', '2023-12-20 18:54:08', '2023-12-20 18:54:08'),
(37, '2', 'Jordan Stay Loyal 2', 'storage/product/Jordan Stay Loyal 21391703098480.webp', '3600000', NULL, 'jordan-stay-loyal-2', '2023-12-20 18:54:40', '2023-12-20 18:54:40'),
(38, '3', 'Jordan Lil Drip', 'storage/product/Jordan Lil Drip6851703098561.webp', '3500000', NULL, 'jordan-lil-drip', '2023-12-20 18:56:01', '2023-12-20 18:56:01'),
(39, '3', 'Nike City Classic Premium', 'storage/product/Nike City Classic Premium7671703098600.webp', '4000000', NULL, 'nike-city-classic-premium', '2023-12-20 18:56:40', '2023-12-20 18:56:40'),
(40, '3', 'Nike City Classic', 'storage/product/Nike City Classic2871703098622.webp', '3600000', NULL, 'nike-city-classic', '2023-12-20 18:57:02', '2023-12-20 18:57:02'),
(41, '3', 'Nike Flex Advance', 'storage/product/Nike Flex Advance5291703098663.webp', '4000000', NULL, 'nike-flex-advance', '2023-12-20 18:57:44', '2023-12-20 18:57:44'),
(42, '4', 'Nike Jr. Tiempo Legend 10 Academy', 'storage/product/Nike Jr. Tiempo Legend 10 Academy2751703098886.webp', '2400000', NULL, 'nike-jr-tiempo-legend-10-academy', '2023-12-20 19:01:26', '2023-12-20 19:01:26'),
(43, '4', 'Nike Mercurial Superfly 9 Academy', 'storage/product/Nike Mercurial Superfly 9 Academy9151703098955.webp', '2600000', NULL, 'nike-mercurial-superfly-9-academy', '2023-12-20 19:02:35', '2023-12-20 19:02:35'),
(44, '4', 'Nike Mercurial Vapor 15 Club', 'storage/product/Nike Mercurial Vapor 15 Club481703098975.webp', '2000000', NULL, 'nike-mercurial-vapor-15-club', '2023-12-20 19:02:55', '2023-12-20 19:02:55'),
(45, '4', 'Nike Phantom GX Club', 'storage/product/Nike Phantom GX Club2951703099022.webp', '2000000', NULL, 'nike-phantom-gx-club', '2023-12-20 19:03:42', '2023-12-20 19:03:42'),
(46, '4', 'Nike Phantom GX Elite', 'storage/product/Nike Phantom GX Elite2591703099042.jpg', '2100000', NULL, 'nike-phantom-gx-elite', '2023-12-20 19:04:02', '2023-12-20 19:04:02'),
(47, '4', 'Nike Phantom GX Pro', 'storage/product/Nike Phantom GX Pro4331703099062.webp', '2000000', NULL, 'nike-phantom-gx-pro', '2023-12-20 19:04:22', '2023-12-20 19:04:22'),
(48, '4', 'Nike Phantom Luna Elite SE', 'storage/product/Nike Phantom Luna Elite SE8301703099076.jpg', '2000000', NULL, 'nike-phantom-luna-elite-se', '2023-12-20 19:04:36', '2023-12-20 19:04:36'),
(49, '4', 'Nike Phantom TX Club', 'storage/product/Nike Phantom TX Club701703099106.webp', '2000000', NULL, 'nike-phantom-tx-club', '2023-12-20 19:05:06', '2023-12-20 19:05:06'),
(50, '4', 'Nike Premier 3', 'storage/product/Nike Premier 35721703099156.webp', '2400000', NULL, 'nike-premier-3', '2023-12-20 19:05:56', '2023-12-20 19:05:56'),
(51, '4', 'Nike Superfly 9 Academy Mercurial Dream Speed', 'storage/product/Nike Superfly 9 Academy Mercurial Dream Speed1381703099226.webp', '2400000', NULL, 'nike-superfly-9-academy-mercurial-dream-speed', '2023-12-20 19:07:06', '2023-12-20 19:07:06'),
(52, '4', 'Nike Tiempo Legend 10 Academy', 'storage/product/Nike Tiempo Legend 10 Academy6491703099271.webp', '2400000', NULL, 'nike-tiempo-legend-10-academy', '2023-12-20 19:07:51', '2023-12-20 19:07:51'),
(53, '4', 'Nike Tiempo Legend 10 Club', 'storage/product/Nike Tiempo Legend 10 Club9291703099288.webp', '2000000', NULL, 'nike-tiempo-legend-10-club', '2023-12-20 19:08:08', '2023-12-20 19:08:08'),
(54, '4', 'Nike Vapor 15 Academy Mercurial Dream Speed', 'storage/product/Nike Vapor 15 Academy Mercurial Dream Speed571703099318.webp', '2100000', NULL, 'nike-vapor-15-academy-mercurial-dream-speed', '2023-12-20 19:08:38', '2023-12-20 19:08:38'),
(55, '4', 'Nike Vapor 15 Elite Mercurial Dream Speed', 'storage/product/Nike Vapor 15 Elite Mercurial Dream Speed1151703099371.webp', '2000000', NULL, 'nike-vapor-15-elite-mercurial-dream-speed', '2023-12-20 19:09:31', '2023-12-20 19:09:31'),
(56, '4', 'Nike Zoom Mercurial Superfly 9 Academy KM MG', 'storage/product/Nike Zoom Mercurial Superfly 9 Academy KM MG4241703099391.webp', '3500000', NULL, 'nike-zoom-mercurial-superfly-9-academy-km-mg', '2023-12-20 19:09:51', '2023-12-20 19:09:51'),
(57, '4', 'Nike Zoom Mercurial Superfly 9 Elite KM FG', 'storage/product/Nike Zoom Mercurial Superfly 9 Elite KM FG5911703099419.webp', '3500000', NULL, 'nike-zoom-mercurial-superfly-9-elite-km-fg', '2023-12-20 19:10:19', '2023-12-20 19:10:19'),
(58, '5', 'Nike Downshifter 12', 'storage/product/Nike Downshifter 129631703099462.webp', '2000000', NULL, 'nike-downshifter-12', '2023-12-20 19:11:02', '2023-12-20 19:11:02'),
(59, '5', 'Nike InfinityRN 4 BL', 'storage/product/Nike InfinityRN 4 BL5421703100551.webp', '2400000', NULL, 'nike-infinityrn-4-bl', '2023-12-20 19:29:13', '2023-12-20 19:29:13'),
(60, '5', 'Nike InfinityRN 4', 'storage/product/Nike InfinityRN 49901703100591.webp', '2000000', NULL, 'nike-infinityrn-4', '2023-12-20 19:29:51', '2023-12-20 19:29:51'),
(61, '5', 'Nike InfinityRN ET 4', 'storage/product/Nike InfinityRN ET 44431703100639.jpg', '2400000', NULL, 'nike-infinityrn-et-4', '2023-12-20 19:30:39', '2023-12-20 19:30:39'),
(62, '5', 'Nike Invincible 3', 'storage/product/Nike Invincible 37961703100673.webp', '2400000', NULL, 'nike-invincible-3', '2023-12-20 19:31:13', '2023-12-20 19:31:13'),
(63, '5', 'Nike Juniper Trail 2 GORE-TEX', 'storage/product/Nike Juniper Trail 2 GORE-TEX2051703100705.webp', '2400000', NULL, 'nike-juniper-trail-2-gore-tex', '2023-12-20 19:31:45', '2023-12-20 19:31:45'),
(64, '5', 'Nike Juniper Trail 2', 'storage/product/Nike Juniper Trail 22191703100720.webp', '2400000', NULL, 'nike-juniper-trail-2', '2023-12-20 19:32:00', '2023-12-20 19:32:00'),
(65, '5', 'Nike Pegasus 40 Eliud Kipchoge', 'storage/product/Nike Pegasus 40 Eliud Kipchoge4581703100771.webp', '2400000', NULL, 'nike-pegasus-40-eliud-kipchoge', '2023-12-20 19:32:51', '2023-12-20 19:32:51'),
(66, '5', 'Nike Pegasus 40', 'storage/product/Nike Pegasus 401901703100790.webp', '1700000', NULL, 'nike-pegasus-40', '2023-12-20 19:33:10', '2023-12-20 19:33:10'),
(67, '5', 'Nike Pegasus Turbo Premium', 'storage/product/Nike Pegasus Turbo Premium6411703100811.webp', '2400000', NULL, 'nike-pegasus-turbo-premium', '2023-12-20 19:33:31', '2023-12-20 19:33:31'),
(68, '5', 'Nike Revolution 7', 'storage/product/Nike Revolution 75711703100826.webp', '2000000', NULL, 'nike-revolution-7', '2023-12-20 19:33:46', '2023-12-20 19:33:46'),
(69, '5', 'Nike Run Swift 3', 'storage/product/Nike Run Swift 34431703100843.webp', '1700000', NULL, 'nike-run-swift-3', '2023-12-20 19:34:03', '2023-12-20 19:34:03'),
(70, '5', 'Nike Structure 25', 'storage/product/Nike Structure 252121703100888.jpg', '2400000', NULL, 'nike-structure-25', '2023-12-20 19:34:48', '2023-12-20 19:34:48'),
(71, '5', 'Nike Vaporfly 3', 'storage/product/Nike Vaporfly 32461703100903.webp', '1700000', NULL, 'nike-vaporfly-3', '2023-12-20 19:35:03', '2023-12-20 19:35:03'),
(72, '5', 'Nike Winflo 10', 'storage/product/Nike Winflo 101211703100971.webp', '2000000', NULL, 'nike-winflo-10', '2023-12-20 19:36:11', '2023-12-20 19:36:11'),
(73, '5', 'Nike Structure 25 PS', 'storage/product/Nike Structure 25 PS2071703101021.webp', '2400000', NULL, 'nike-structure-25-ps', '2023-12-20 19:37:01', '2023-12-20 19:37:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `avatar`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '123', '123@gmail.com', NULL, '$2y$10$4BdMysAUUMdPkrECWPM0geu9GdTmJ0hrO1t7IEbAc5KYBfhhBhqNO', NULL, '123', NULL, '2023-12-10 17:06:42', '2023-12-10 17:06:42'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$UrdmW8hLc3Ap.f3V7lnyVeMdYneUIvrliaZSIBbMeICnoMb12nUym', NULL, 'admin', NULL, '2023-12-10 17:13:25', '2023-12-10 17:13:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
