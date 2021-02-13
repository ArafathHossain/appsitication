-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 09:37 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_first_leravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone_no`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Saiful_Islam', 'saifulbd943@gmail.com', '$2y$10$BomYBe14tF72DULwt.sz7ef1y8pZawAHJ669bb/TJAJ7LnYBBBZDi', '01853951775', 'Super Admin', '2019-03-04 07:12:22', '2019-03-04 07:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Samsung', '<p>Abc</p>', '1552819399.jpg', '2019-03-17 04:43:19', '2019-03-17 04:43:19'),
(7, 'Apple', '<p>Abc</p>', '1552819572.jpg', '2019-03-17 04:46:12', '2019-03-17 04:46:12'),
(8, 'Huawei', '<p>Abc</p>', '1552819599.jpg', '2019-03-17 04:46:39', '2019-03-17 04:46:39'),
(9, 'Lenovo', '<p>Abc</p>', '1552819619.jpg', '2019-03-17 04:46:59', '2019-03-17 04:46:59'),
(10, 'Xiaomi', '<p>Abc</p>', '1552819637.png', '2019-03-17 04:47:17', '2019-03-17 04:47:17'),
(11, 'LG', '<p>Abc</p>', '1552819674.png', '2019-03-17 04:47:54', '2019-03-17 04:47:54'),
(12, 'ZTE', '<p>Abc</p>', '1552819692.png', '2019-03-17 04:48:13', '2019-03-17 04:48:13'),
(13, 'Oppo', '<p>Abc</p>', '1552819712.jpg', '2019-03-17 04:48:32', '2019-03-17 04:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_quanity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(4, 'Winter-Collection', '<p>Winter Collection Winter Collection</p>', '1552814042.jpg', 1, '2019-03-02 22:24:12', '2019-03-17 03:14:02'),
(5, 'Home-Cleaning', '<p>Home &amp; Cleaning Home &amp; Cleaning Home &amp; Cleaning</p>', '1552814016.jpg', 1, '2019-03-02 22:24:39', '2019-03-17 03:13:36'),
(6, 'Children-use', '<p>Abc</p>', '1552813932.jpg', 1, '2019-03-17 03:12:12', '2019-03-17 03:12:12'),
(7, 'Food-items', '<p><span>Abc</span></p>', '1552813978.jpg', 1, '2019-03-17 03:12:58', '2019-03-17 03:19:06'),
(8, 'Pet-Items', '<p><span>Abc</span></p>', '1552814060.jpg', 1, '2019-03-17 03:14:20', '2019-03-17 03:19:15'),
(9, 'Cleaning-Materials', '<p><span>Abc</span></p>', '1552814092.jpg', 1, '2019-03-17 03:14:52', '2019-03-17 03:19:25'),
(10, 'Office-Products', '<p><span>Abc</span></p>', '1552814118.jpg', 1, '2019-03-17 03:15:18', '2019-03-17 03:19:34'),
(11, 'Vehicle-requirements', '<p><span>Abc</span></p>', '1552814131.jpg', 1, '2019-03-17 03:15:31', '2019-03-17 03:19:42'),
(12, 'Organized-winter', '<p><span>Abc</span></p>', '1552814147.jpg', 1, '2019-03-17 03:15:47', '2019-03-19 02:59:22'),
(13, 'Health-and-Beauty', '<p><span>Abc</span></p>', '1552814162.jpg', 1, '2019-03-17 03:16:02', '2019-03-19 02:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_02_27_105026_create_categories_table', 2),
(6, '2019_02_27_105159_create_brands_table', 2),
(8, '2019_02_27_120258_create_product_images_table', 3),
(9, '2019_02_27_080527_create_products_table', 4),
(11, '2019_03_02_083517_create_sub_categories_table', 5),
(12, '2019_03_03_044024_create_sliders_table', 6),
(16, '2014_10_12_000000_create_users_table', 7),
(18, '2019_02_27_105304_create_admins_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saifulbd943@gmail.com', '$2y$10$pWMNxLIppJqvWZoMWTd57.jy8sw6oMArFEHDlfk0wTifbnSDi2hpa', '2019-03-04 03:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` int(11) NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `image2` longtext COLLATE utf8mb4_unicode_ci,
  `image3` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `image`, `image2`, `image3`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(8, 4, 17, 13, 'A', '<p>Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.</p>', 'a', 100, 1200, '1552821774.png', '1552821776.png', '1552821777.png', 1, 100, 1, '2019-03-17 05:22:54', '2019-03-17 05:22:54'),
(9, 6, 6, 10, 'B', '<p>Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.</p>', 'b', 50, 1000, '1552821869.png', '1552821871.jpg', '1552821873.jpg', 1, 200, 1, '2019-03-17 05:24:30', '2019-03-17 05:24:30'),
(10, 13, 16, 13, 'C', '<p>Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.</p>', 'c', 20, 600, '1552822065.jpg', '1552822067.jpg', '1552822068.jpg', 1, 100, 1, '2019-03-17 05:27:45', '2019-03-17 05:27:45'),
(11, 7, 8, 10, 'D', '<p>Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.</p>', 'd', 5, 540, '1552822107.jpg', '1552822109.jpg', '1552822110.jpg', 1, 40, 1, '2019-03-17 05:28:27', '2019-03-17 05:28:27'),
(12, 9, 14, 6, 'E', '<p>Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.Product Type: Dry pant. Per Bag: 32 Pcs, Size: Extra Large (15-25Kg). 5 Layer Protections. Wetness Indicator.</p>', 'e', 20, 1000, '1552822169.jpg', '1552822171.jpg', '1552822172.jpg', 1, 50, 1, '2019-03-17 05:29:29', '2019-03-17 05:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, '1551359742.png', '2019-02-28 07:15:42', '2019-02-28 07:15:42'),
(2, 2, '1551359742.png', '2019-02-28 07:15:42', '2019-02-28 07:15:42'),
(3, 2, '1551359742.png', '2019-02-28 07:15:43', '2019-02-28 07:15:43'),
(4, 2, '1551359743.png', '2019-02-28 07:15:45', '2019-02-28 07:15:45'),
(5, 3, '1551587428.jpg', '2019-03-02 22:30:28', '2019-03-02 22:30:28'),
(6, 3, '1551587428.jpg', '2019-03-02 22:30:29', '2019-03-02 22:30:29'),
(7, 3, '1551587429.jpg', '2019-03-02 22:30:29', '2019-03-02 22:30:29'),
(8, 3, '1551587429.jpg', '2019-03-02 22:30:29', '2019-03-02 22:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Popy Bazar3', '1552390090.jpg', '2019-03-12 05:28:10', '2019-03-19 01:30:36'),
(7, 'Popy Bazar', '1552390140.jpg', '2019-03-12 05:29:00', '2019-03-12 05:29:00'),
(8, 'Popy Bazar', '1552390156.jpg', '2019-03-12 05:29:16', '2019-03-12 05:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` longtext COLLATE utf8mb4_unicode_ci,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `description`, `image`, `image2`, `admin_id`, `created_at`, `updated_at`) VALUES
(6, 'Dayaparim', 6, '<p>Sub Category Details</p>', '1552817796.jpg', NULL, 1, '2019-03-17 04:16:36', '2019-03-17 04:17:59'),
(7, 'Feeder', 6, '<p><span>Sub Category Details</span></p>', '1552817907.jpg', NULL, 1, '2019-03-17 04:18:27', '2019-03-17 04:18:27'),
(8, 'Formula', 7, '<p>Abc</p>', '1552817955.jpg', NULL, 1, '2019-03-17 04:19:15', '2019-03-17 04:19:15'),
(9, 'Children\'s Food', 7, '<p>Abc</p>', '1552817974.jpg', NULL, 1, '2019-03-17 04:19:34', '2019-03-17 04:19:34'),
(10, 'Milk and juice', 7, '<p>Abc</p>', '1552818004.jpg', NULL, 1, '2019-03-17 04:20:04', '2019-03-17 04:20:04'),
(11, 'Kitten food', 8, '<p>Abc</p>', '1552818036.jpg', NULL, 1, '2019-03-17 04:20:36', '2019-03-17 04:20:36'),
(12, 'Cat Food', 8, '<p>Abc</p>', '1552818062.jpg', NULL, 1, '2019-03-17 04:21:02', '2019-03-17 04:21:02'),
(13, 'Dog Food', 8, '<p>Abc</p>', '1552818081.jpg', NULL, 1, '2019-03-17 04:21:21', '2019-03-17 04:21:21'),
(14, 'Air fresheners', 9, '<p>Abc</p>', '1552818117.jpg', NULL, 1, '2019-03-17 04:21:57', '2019-03-17 04:21:57'),
(15, 'Housewares', 9, '<p>Abc</p>', '1552818142.jpg', NULL, 1, '2019-03-17 04:22:22', '2019-03-17 04:22:22'),
(16, 'Oral Care', 13, '<p>Abc</p>', '1552818309.jpg', '1552997965.jpg', 1, '2019-03-17 04:25:09', '2019-03-19 06:19:23'),
(17, 'Massage & Relaxation', 4, '<p>Abc</p>', '1552818350.jpg', '1552997956.jpg', 1, '2019-03-17 04:25:50', '2019-03-19 06:19:14'),
(18, 'Monitoring & Testing', 4, '<p>Abc</p>', '1552818372.jpg', '1552997944.jpg', 1, '2019-03-17 04:26:12', '2019-03-19 06:19:02'),
(19, 'Electric Shavers', 12, '<p>Abc</p>', '1552818547.jpg', '1552997934.jpg', 1, '2019-03-17 04:29:07', '2019-03-19 06:18:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divison_id` longtext COLLATE utf8mb4_unicode_ci,
  `district_id` longtext COLLATE utf8mb4_unicode_ci,
  `shipping_address` longtext COLLATE utf8mb4_unicode_ci,
  `avater` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `ip_address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone_no`, `street_address`, `divison_id`, `district_id`, `shipping_address`, `avater`, `status`, `ip_address`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(25, 'Saiful', 'Islam', 'saifulislam', '01853951775', '18?2 Ahson Ullah Road Dhaka-1100', NULL, NULL, NULL, NULL, 1, '::1', 'saifulbd943@gmail.com', '$2y$10$BkRP7boO609fqZ52Vpg24.d6r9FESN.VmiiE7MxhaBGPFpVOieUHq', NULL, '2019-03-04 03:25:49', '2019-03-04 03:26:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
