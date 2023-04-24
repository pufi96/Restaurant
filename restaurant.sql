-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 10:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nameCategory`, `created_at`, `updated_at`) VALUES
(1, 'Drinks', NULL, NULL),
(2, 'Lunch', NULL, NULL),
(3, 'Dinner', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `idCM` bigint(20) UNSIGNED NOT NULL,
  `idMenu` bigint(20) UNSIGNED NOT NULL,
  `idCategory` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`idCM`, `idMenu`, `idCategory`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 5, 3, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 8, 1, NULL, NULL),
(9, 9, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nameMenu`, `descMenu`, `imageMenu`, `altMenu`, `price`, `type`, `visible`, `created_at`, `updated_at`) VALUES
(1, 'aperiam', 'commodi', 'img-01.jpg', 'impedit', 11, 'drinks', 0, NULL, '2022-03-13 18:48:22'),
(2, 'alias', 'quidem', 'img-01.jpg', 'quas', 24, 'Drink', 1, NULL, NULL),
(3, 'expedita', 'commodi', 'img-01.jpg', 'numquam', 17, 'Drink', 1, NULL, NULL),
(4, 'sint', 'neque', 'img-01.jpg', 'autem', 8, 'facere', 1, NULL, NULL),
(5, 'et', 'sed', 'img-01.jpg', 'quae', 12, 'quas', 1, NULL, NULL),
(6, 'et', 'earum', 'img-01.jpg', 'eum', 14, 'ea', 1, NULL, NULL),
(7, 'fuga', 'sit', 'img-01.jpg', 'accusantium', 17, 'ea', 1, NULL, NULL),
(8, 'sit', 'earum', 'img-01.jpg', 'ut', 19, 'omnis', 1, NULL, NULL),
(11, 'asdads', 'adsads', '1647131592qt-bg.jpg', 'asdds', 2132, 'lunch', 1, '2022-03-12 23:33:12', '2022-03-12 23:33:12'),
(12, 'adsadsds', 'asdads', '1647131800slider-02.jpg', 'adsads', 123, 'drinks', 1, '2022-03-12 23:36:40', '2022-03-12 23:36:40'),
(13, 'Dinner', 'Dinner', '1647131867blog-img-02.jpg', 'Dinner', 22, 'dinner', 1, '2022-03-12 23:37:47', '2022-03-12 23:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_09_235845_create_nav_table', 1),
(3, '2022_03_11_143142_create_menu_table', 1),
(4, '2022_03_11_144301_create_category_table', 1),
(5, '2022_03_10_143142_create_menu_table', 2),
(6, '2022_03_10_144301_create_category_table', 3),
(7, '2022_03_10_144523_create_category_menu_table', 4),
(8, '2022_03_12_201304_create_reservation_table', 5),
(9, '2022_03_11_222729_create_role_table', 6),
(10, '2022_03_11_222539_create_user_table', 7),
(11, '2022_03_12_143142_create_menu_table', 8),
(12, '2022_03_12_144301_create_category_table', 9),
(13, '2022_03_12_144523_create_category_menu_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `idNav` bigint(20) UNSIGNED NOT NULL,
  `nameNav` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`idNav`, `nameNav`, `route`, `order`, `created_at`, `updated_at`) VALUES
(53, 'Home', 'home', 0, NULL, NULL),
(54, 'Menu', 'menu', 1, NULL, NULL),
(55, 'Reservation', 'reservation', 2, NULL, NULL),
(56, 'Contact', 'contact', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `email`, `date`, `message`, `created_at`, `updated_at`) VALUES
(1, 'peraperic@gmail.com', '2022-03-25', 'asdadsdassd', '2022-03-12 19:29:57', '2022-03-12 19:29:57'),
(2, 'peraperic@gmail.com', '2022-03-12', '123', '2022-03-13 19:09:47', '2022-03-13 19:09:47'),
(3, 'peraperic@gmail.com', '2022-03-10', '21', '2022-03-13 19:10:05', '2022-03-13 19:10:05'),
(4, 'peraperic@gmail.com', '2022-03-11', '123', '2022-03-13 19:11:20', '2022-03-13 19:11:20'),
(5, 'peraperic@gmail.com', '2022-03-16', '123', '2022-03-13 19:11:26', '2022-03-13 19:11:26'),
(6, 'peraperic@gmail.com', '2022-03-04', '213', '2022-03-13 19:12:20', '2022-03-13 19:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameRole` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nameRole`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, NULL),
(2, 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surnameUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `idRole` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nameUser`, `surnameUser`, `email`, `password`, `active`, `idRole`, `created_at`, `updated_at`) VALUES
(1, 'Pera', 'Peric', 'pera@peric.rs', '68cb6aa94e0b567ebf9c8d305688a850', 1, 1, NULL, '2022-03-13 18:49:50'),
(2, 'Mika', 'Mikic', 'mika@mikic.rs', '30a620b46a591e95397a269a1f8fc403', 1, 1, NULL, '2022-03-12 22:35:32'),
(3, 'Bojan', 'Stojkovic', 'bojan.stojkovic.29.19@ict.edu.rs', '5c1adc0b439fb817daffd015f08b4ce7', 1, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD PRIMARY KEY (`idCM`),
  ADD KEY `category_menu_idmenu_foreign` (`idMenu`),
  ADD KEY `category_menu_idcategory_foreign` (`idCategory`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`idNav`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_namerole_unique` (`nameRole`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_idrole_foreign` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_menu`
--
ALTER TABLE `category_menu`
  MODIFY `idCM` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `idNav` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD CONSTRAINT `category_menu_idcategory_foreign` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `category_menu_idmenu_foreign` FOREIGN KEY (`idMenu`) REFERENCES `menu` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_idrole_foreign` FOREIGN KEY (`idRole`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
