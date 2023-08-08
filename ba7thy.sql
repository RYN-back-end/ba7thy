-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2023 at 12:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ba7thy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$l1QdLjITGoDyawNko1bgku8508hyhdzFm9cGzCYIqmO/J/4pSYDO2', NULL, 'NUoHrGsm8oBY15QCSGcZrBHbOLxEjLeSzoIFuVEQZCVegSLBmbAMNwaxWPyn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_08_122055_create_admins_table', 1),
(3, '2023_06_20_024925_create_settings_table', 1),
(4, '2023_08_07_182523_create_sliders_table', 2),
(6, '2023_08_07_202656_create_what_presents_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `snapchat` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `title`, `desc`, `address`, `email`, `phone`, `whatsapp`, `twitter`, `facebook`, `snapchat`, `instagram`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-06 15:41:39', '2023-08-06 15:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `button_text` text DEFAULT NULL,
  `button_link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `text`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'admins/png_Screenshot from 2023-08-05 20-25-01.png_1691433303.png', '{\"en\":\"DESIGN INSPIRATION\",\"ar\":\"\\u0627\\u0644\\u0641\\u0631\\u0639\\u0649 \\u0627\\u0644\\u0623\\u0648\\u06443\"}', '{\"en\":\"dwewe\",\"ar\":\"esdz\"}', '{\"en\":\"get in touch\",\"ar\":\"button text ar\"}', 'http://127.0.0.1:8000/ar/admin/slider#!', '2023-08-07 15:35:03', '2023-08-07 15:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `what_presents`
--

CREATE TABLE `what_presents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_presents`
--

INSERT INTO `what_presents` (`id`, `text`, `video`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"<h5>Provides integrated support to academic academic researchers. We are aware of the academic and its impact on the student&#39;s academic career and future career. Specialized experts in various academic fields, which gives us the ability to provide appropriate assistance in various disciplines.<br \\/>\\r\\n- Moreover, we help students to present designs and sneakers clearly and specifically. Where specific and goals are specific.<\\/h5>\",\"ar\":\"<h5 style=\\\"text-align:right\\\">- \\u0646\\u0642\\u062f\\u0645 \\u062f\\u0639\\u0645\\u064b\\u0627 \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u064b\\u0627 \\u0644\\u0644\\u0628\\u0627\\u062d\\u062b\\u064a\\u0646 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u064a\\u0646 \\u0648\\u0646\\u0633\\u0627\\u0639\\u062f\\u0647\\u0645 \\u0641\\u064a \\u0625\\u0639\\u062f\\u0627\\u062f \\u0623\\u0637\\u0631\\u0648\\u062d\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u062e\\u0627\\u0635\\u0629 \\u0628\\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0628\\u0623\\u0639\\u0644\\u0649 \\u0645\\u0633\\u062a\\u0648\\u0649 \\u0645\\u0646 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0627\\u0644\\u0627\\u062d\\u062a\\u0631\\u0627\\u0641\\u064a\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u062f\\u0631\\u0643 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0648\\u062a\\u0623\\u062b\\u064a\\u0631\\u0647 \\u0639\\u0644\\u0649 \\u0645\\u0633\\u064a\\u0631\\u0629 \\u0627\\u0644\\u0637\\u0627\\u0644\\u0628 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0648\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644\\u0647 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a. \\u0644\\u0630\\u0644\\u0643\\u060c \\u0641\\u0625\\u0646 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0645\\u0643\\u0648\\u0646 \\u0645\\u0646 \\u062e\\u0628\\u0631\\u0627\\u0621 \\u0645\\u062a\\u062e\\u0635\\u0635\\u064a\\u0646 \\u0641\\u064a \\u0645\\u062e\\u062a\\u0644\\u0641 \\u0627\\u0644\\u0645\\u062c\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629\\u060c \\u0645\\u0645\\u0627 \\u064a\\u0645\\u0646\\u062d\\u0646\\u0627 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0645\\u062e\\u062a\\u0644\\u0641 \\u0627\\u0644\\u062a\\u062e\\u0635\\u0635\\u0627\\u062a.<\\/h5>\\r\\n\\r\\n<h5 style=\\\"text-align:right\\\">- \\u0639\\u0644\\u0627\\u0648\\u0629 \\u0639\\u0644\\u0649 \\u0630\\u0644\\u0643\\u060c \\u0646\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0628\\u0634\\u0643\\u0644 \\u0648\\u0627\\u0636\\u062d \\u0648\\u0645\\u062d\\u062f\\u062f. \\u062d\\u064a\\u062b \\u064a\\u0639\\u062f \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641 \\u0628\\u062f\\u0642\\u0629 \\u0623\\u0645\\u0631\\u064b\\u0627 \\u062d\\u0627\\u0633\\u0645\\u064b\\u0627 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u062a\\u0648\\u062c\\u064a\\u0647 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0641\\u064a \\u0627\\u0644\\u0627\\u062a\\u062c\\u0627\\u0647 \\u0627\\u0644\\u0635\\u062d\\u064a\\u062d \\u0648\\u0636\\u0645\\u0627\\u0646 \\u062d\\u0635\\u0648\\u0644\\u0647 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0642\\u064a\\u0645\\u0629 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0631\\u062c\\u0648\\u0629.<\\/h5>\"}', 'whatPresent/mp4_Bahthi edit3.mp4 - Google Drive_2.mp4_1691442729.mp4', 'whatPresent/jpg_banner.jpg_1691442729.jpg', '2023-08-07 18:09:38', '2023-08-08 19:07:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_presents`
--
ALTER TABLE `what_presents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `what_presents`
--
ALTER TABLE `what_presents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
