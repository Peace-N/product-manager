-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 07:16 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_08_27_131452_create_products_table', 2),
('2017_08_27_131515_create_products_metadata_table', 2),
('2017_08_27_132736_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `sku`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'PeaceProduct', '12355', 'Test Product', NULL, '2017-08-27 23:00:30', '2017-08-27 23:00:30'),
(3, 1, 'PeaceProduct', '12355', 'Test Product', NULL, '2017-08-27 23:02:28', '2017-08-27 23:02:28'),
(4, 1, 'Test Product 3', 'Test', 'Test', NULL, '2017-08-27 23:04:08', '2017-08-27 23:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `products_metadata`
--

CREATE TABLE `products_metadata` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `ip_address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_metadata`
--

INSERT INTO `products_metadata` (`id`, `product_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 3, '::1', '2017-08-28 19:23:26', '2017-08-28 19:23:26'),
(2, 4, '::1', '2017-08-28 19:23:29', '2017-08-28 19:23:29'),
(3, 2, '::1', '2017-08-28 19:24:10', '2017-08-28 19:24:10'),
(4, 3, '::1', '2017-08-28 19:24:14', '2017-08-28 19:24:14'),
(5, 3, '::1', '2017-08-28 19:24:17', '2017-08-28 19:24:17'),
(6, 3, '::1', '2017-08-28 19:48:19', '2017-08-28 19:48:19'),
(7, 4, '::1', '2017-08-28 21:03:08', '2017-08-28 21:03:08'),
(8, 2, '::1', '2017-08-28 21:36:48', '2017-08-28 21:36:48'),
(9, 3, '::1', '2017-08-28 21:36:52', '2017-08-28 21:36:52'),
(10, 4, '::1', '2017-08-28 21:36:57', '2017-08-28 21:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `products_transactions`
--

CREATE TABLE `products_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `bid_amount` decimal(8,2) NOT NULL,
  `bid_owner_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products_transactions`
--

INSERT INTO `products_transactions` (`id`, `product_id`, `bid_amount`, `bid_owner_email`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, '0.00', '0.00', 'New Product Bid !', '2017-08-28 19:45:50', '2017-08-28 19:45:50'),
(2, 2, '25333.00', '0.00', 'New Product Bid !', '2017-08-28 19:46:37', '2017-08-28 19:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Peace', 'peacengara@aol.com', '$2y$10$T4Ot0vfiqmHknrJJgGjfpOgGv0mJExAiGlK.6NUDIUcZOrXMJSVEi', 'Yd3yDJEYdU1Q68PwgrM3Z41HebtDxXx1ZlcwzCDF7gkV3ITh5fcOL4hEpPjO', '2017-08-27 22:55:49', '2017-08-27 23:36:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_metadata`
--
ALTER TABLE `products_metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_transactions`
--
ALTER TABLE `products_transactions`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products_metadata`
--
ALTER TABLE `products_metadata`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products_transactions`
--
ALTER TABLE `products_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
