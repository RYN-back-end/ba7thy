-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2023 at 12:09 AM
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"who are we\",\"ar\":\"\\u0645\\u0646 \\u0646\\u062d\\u0646\"}', '{\"en\":\"We are always keen to provide academic support and guidance of the highest quality, and strive to help students achieve their research and academic goals successfully. Student satisfaction is our first and foremost goal, and we believe in the importance of building a sustainable working relationship that benefits all parties involved.\",\"ar\":\"\\u0646\\u062d\\u0631\\u0635 \\u062f\\u0627\\u0626\\u0645\\u064b\\u0627 \\u0639\\u0644\\u0649 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0648\\u0627\\u0644\\u0625\\u0631\\u0634\\u0627\\u062f \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0628\\u0623\\u0639\\u0644\\u0649 \\u0645\\u0633\\u062a\\u0648\\u0649 \\u0645\\u0646 \\u0627\\u0644\\u062c\\u0648\\u062f\\u0629\\u060c \\u0648\\u0646\\u0633\\u0639\\u0649 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0623\\u0647\\u062f\\u0627\\u0641\\u0647\\u0645 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0628\\u0646\\u062c\\u0627\\u062d. \\u0625\\u0646 \\u0631\\u0636\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0647\\u0648 \\u0647\\u062f\\u0641\\u0646\\u0627 \\u0627\\u0644\\u0623\\u0648\\u0644 \\u0648\\u0627\\u0644\\u0623\\u062e\\u064a\\u0631\\u060c \\u0648\\u0646\\u062d\\u0646 \\u0646\\u0624\\u0645\\u0646 \\u0628\\u0623\\u0647\\u0645\\u064a\\u0629 \\u0628\\u0646\\u0627\\u0621 \\u0639\\u0644\\u0627\\u0642\\u0629 \\u0639\\u0645\\u0644 \\u0645\\u0633\\u062a\\u062f\\u0627\\u0645\\u0629 \\u062a\\u0639\\u0648\\u062f \\u0628\\u0627\\u0644\\u0641\\u0627\\u0626\\u062f\\u0629 \\u0639\\u0644\\u0649 \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0623\\u0637\\u0631\\u0627\\u0641 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a\\u0629.\"}', '2023-08-10 01:31:48', '2023-08-10 01:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_images`
--

CREATE TABLE `about_us_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin@admin.com', '$2y$10$l1QdLjITGoDyawNko1bgku8508hyhdzFm9cGzCYIqmO/J/4pSYDO2', NULL, 's8BhIsmwHjtmDtE61qOuile4vLoNvOrwC1zAnRkfOoXlgH0YVGNQ83CtSYQx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0645\\u0627\\u062c\\u064a\\u0633\\u062a\\u064a\\u0631 \\u0648\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647\",\"en\":\"Master\'s and PhD theses\"}', '{\"ar\":\"<p style=\\\"text-align:right\\\">\\u062e\\u062f\\u0645\\u0629 &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; - \\u0646\\u0642\\u062f\\u0645 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0627\\u0644\\u0634\\u0627\\u0645\\u0644.<br \\/>\\r\\n\\u062a\\u0639\\u062f\\u0651 \\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0627\\u0644\\u0631\\u0643\\u0627\\u0626\\u0632 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u062f\\u062f \\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0648\\u062a\\u0624\\u062b\\u0631 \\u0628\\u0634\\u0643\\u0644 \\u0643\\u0628\\u064a\\u0631 \\u0639\\u0644\\u0649 \\u062d\\u064a\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629. \\u0625\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0643\\u062b\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0625\\u0639\\u062f\\u0627\\u062f \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u0637\\u0631\\u0648\\u062d\\u0627\\u062a \\u062a\\u062a\\u0637\\u0644\\u0628 \\u062a\\u062e\\u0635\\u0635\\u0627\\u064b \\u0639\\u0627\\u0644\\u064a\\u0627\\u064b \\u0648\\u062c\\u0647\\u062f\\u0627\\u064b \\u0645\\u0633\\u062a\\u0645\\u0631\\u0627\\u064b. \\u0644\\u0630\\u0644\\u0643\\u060c \\u062a\\u0648\\u0641\\u0631 \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0630\\u0647\\u0628\\u064a\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629.<br \\/>\\r\\n\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0641\\u064a \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b: \\u062a\\u0639\\u062a\\u0628\\u0631 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0647\\u064a \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629 \\u0627\\u0644\\u062d\\u0627\\u0633\\u0645\\u0629 \\u0641\\u064a \\u0631\\u062d\\u0644\\u0629 \\u0625\\u0639\\u062f\\u0627\\u062f \\u0627\\u0644\\u0631\\u0633\\u0627\\u0644\\u0629. \\u064a\\u0639\\u0645\\u0644 \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635 \\u0639\\u0644\\u0649 \\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0645\\u0644\\u0647\\u0645 \\u0648\\u0645\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0627\\u0647\\u062a\\u0645\\u0627\\u0645\\u0627\\u062a\\u0647\\u0645 \\u0648\\u0645\\u062c\\u0627\\u0644 \\u062a\\u062e\\u0635\\u0635\\u0647\\u0645. \\u0643\\u0645\\u0627 \\u064a\\u0639\\u062a\\u0645\\u062f \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0639\\u0644\\u0649 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u062a\\u0648\\u0641\\u0631 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0635\\u0627\\u062f\\u0631 \\u0627\\u0644\\u0644\\u0627\\u0632\\u0645\\u0629 \\u0644\\u0644\\u0628\\u062d\\u062b.<br \\/>\\r\\n<br \\/>\\r\\n\\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641: \\u0628\\u0639\\u062f \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0628\\u0634\\u0643\\u0644 \\u0648\\u0627\\u0636\\u062d \\u0648\\u0645\\u062d\\u062f\\u062f. \\u064a\\u0647\\u062f\\u0641 \\u0630\\u0644\\u0643 \\u0625\\u0644\\u0649 \\u062a\\u0648\\u062c\\u064a\\u0647 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0646\\u0637\\u0627\\u0642\\u0647 \\u0628\\u062f\\u0642\\u0629. \\u0643\\u0645\\u0627 \\u0646\\u0633\\u0627\\u0639\\u062f \\u0641\\u064a \\u0648\\u0636\\u0639 \\u0623\\u0647\\u062f\\u0627\\u0641 \\u0628\\u062d\\u062b\\u064a\\u0629 \\u0645\\u062d\\u062f\\u062f\\u0629 \\u0648\\u0642\\u0627\\u0628\\u0644\\u0629 \\u0644\\u0644\\u0642\\u064a\\u0627\\u0633\\u060c \\u0645\\u0645\\u0627 \\u064a\\u0633\\u0647\\u0645 \\u0641\\u064a \\u062a\\u0648\\u062c\\u064a\\u0647 \\u062c\\u0647\\u0648\\u062f \\u0627\\u0644\\u0637\\u0627\\u0644\\u0628 \\u0646\\u062d\\u0648 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0645\\u0624\\u062b\\u0631\\u0629.<br \\/>\\r\\n<br \\/>\\r\\n\\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629: \\u062a\\u0644\\u0639\\u0628 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u062f\\u0648\\u0631\\u0627\\u064b \\u062d\\u0627\\u0633\\u0645\\u0627\\u064b \\u0641\\u064a \\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u062d\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0644\\u0630\\u0644\\u0643\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0626\\u0645\\u0629 \\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0629 \\u0648\\u0637\\u0628\\u064a\\u0639\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0627\\u062d\\u0629 \\u0644\\u062f\\u064a\\u0647\\u0645. \\u0646\\u062d\\u0646 \\u0646\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0623\\u062d\\u062f\\u062b \\u0627\\u0644\\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0627\\u062a \\u0627\\u0644\\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0645\\u0635\\u062f\\u0627\\u0642\\u064a\\u0629 \\u0648\\u062f\\u0642\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b.<br \\/>\\r\\n<br \\/>\\r\\n\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c: \\u0639\\u0646\\u062f \\u0627\\u0643\\u062a\\u0645\\u0627\\u0644 \\u0645\\u0631\\u0627\\u062d\\u0644 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u060c \\u064a\\u0642\\u0648\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0628\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u062f\\u0648\\u0627\\u062a \\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0648\\u0631\\u0629. \\u0646\\u0636\\u0645\\u0646 \\u062a\\u0641\\u0633\\u064a\\u0631 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0628\\u062f\\u0642\\u0629 \\u0648\\u0625\\u0639\\u062f\\u0627\\u062f \\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0645\\u0643\\u062a\\u0648\\u0628\\u0629 \\u062a\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062c\\u0647\\u0629 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a\\u0629.<br \\/>\\r\\n<br \\/>\\r\\n\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f: \\u062a\\u062a\\u0645\\u064a\\u0632 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0628\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u0641\\u0647\\u0645 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u060c \\u0648\\u0644\\u0630\\u0644\\u0643 \\u0646\\u0639\\u0645\\u0644 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u062a\\u0644\\u0628\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0628\\u0623\\u0641\\u0636\\u0644 \\u0634\\u0643\\u0644 \\u0645\\u0645\\u0643\\u0646.<br \\/>\\r\\n<br \\/>\\r\\n\\u062a\\u0639\\u062f \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0634\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\\u060c \\u0628\\u062f\\u0621\\u064b\\u0627 \\u0645\\u0646 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641\\u060c \\u0648\\u0635\\u0648\\u0644\\u0627\\u064b \\u0625\\u0644\\u0649 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0625\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629 \\u062a\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0639\\u0644\\u0649 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0645\\u0645\\u064a\\u0632\\u0629 \\u0648\\u0627\\u0644\\u0646\\u062c\\u0627\\u062d \\u0641\\u064a \\u0645\\u0647\\u0645\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644\\u064a\\u0629.<\\/p>\",\"en\":\"<p>&quot;Master&#39;s and PhD Theses&quot; service - We provide comprehensive academic support.<br \\/>\\r\\nMaster&#39;s and doctoral dissertations are among the most important academic pillars that determine the future of students and greatly influence their careers. The intensive research process required by students to prepare these theses requires high specialization and continuous effort. Therefore, the &quot;Master&#39;s and Doctoral Theses&quot; services provide a golden opportunity for students to obtain integrated academic support in the Arabic language.<br \\/>\\r\\nSupport in defining the research topic: The stage of selecting the research topic is the decisive beginning in the thesis preparation journey. Our dedicated services team helps students choose an inspiring subject that is relevant to their interests and field of specialisation. The choice of topic also depends on the importance of the problem and the availability of data and sources needed for research.<\\/p>\\r\\n\\r\\n<p>Assistance in formulating the problem and objectives: After defining the topic, our team helps students formulate the research problem clearly and specifically. This aims to guide and precisely define the scope of the research. We also help set specific and measurable research goals, which contribute to directing student efforts towards achieving effective and impactful results.<\\/p>\\r\\n\\r\\n<p>Choosing the appropriate research methodology: The research methodology plays a decisive role in the quality of the research and the validity of the results. Therefore, our services team assists students in choosing the appropriate research methodology for the subject of study and the nature of the data available to them. We rely on the latest research methods and statistical techniques to ensure the credibility and accuracy of the research.<\\/p>\\r\\n\\r\\n<p>Data analysis and results formulation: When the research and data collection stages are completed, our team analyzes the data using advanced statistical tools. We ensure that results are interpreted accurately and written reports are prepared to meet the requirements of the relevant academic body.<\\/p>\\r\\n\\r\\n<p>Quality and punctuality: Our services are characterized by high quality and punctuality. We understand the importance of on-time delivery, which is why we work hard to meet customer requirements as best we can.<\\/p>\\r\\n\\r\\n<p>The &quot;Master&#39;s and Doctoral Theses&quot; services are an opportunity for students to obtain comprehensive academic support in Arabic, starting from defining the research topic, formulating the problem and objectives, all the way to selecting the research methodology, analyzing data and formulating the results. This service helps students achieve distinguished results and succeed in their future academic mission.<\\/p>\"}', 'Articles/jpg_doctoral.jpg_1691699175.jpg', '2023-08-10 17:26:15', '2023-08-10 17:26:33'),
(2, '{\"ar\":\"\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0645\\u0627\\u062c\\u064a\\u0633\\u062a\\u064a\\u0631 \\u0648\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647\",\"en\":\"Master\'s and PhD theses\"}', '{\"ar\":\"<p style=\\\"text-align:right\\\">\\u062e\\u062f\\u0645\\u0629 &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; - \\u0646\\u0642\\u062f\\u0645 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0627\\u0644\\u0634\\u0627\\u0645\\u0644.<br \\/>\\r\\n\\u062a\\u0639\\u062f\\u0651 \\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0627\\u0644\\u0631\\u0643\\u0627\\u0626\\u0632 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u062f\\u062f \\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0648\\u062a\\u0624\\u062b\\u0631 \\u0628\\u0634\\u0643\\u0644 \\u0643\\u0628\\u064a\\u0631 \\u0639\\u0644\\u0649 \\u062d\\u064a\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629. \\u0625\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0643\\u062b\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0625\\u0639\\u062f\\u0627\\u062f \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u0637\\u0631\\u0648\\u062d\\u0627\\u062a \\u062a\\u062a\\u0637\\u0644\\u0628 \\u062a\\u062e\\u0635\\u0635\\u0627\\u064b \\u0639\\u0627\\u0644\\u064a\\u0627\\u064b \\u0648\\u062c\\u0647\\u062f\\u0627\\u064b \\u0645\\u0633\\u062a\\u0645\\u0631\\u0627\\u064b. \\u0644\\u0630\\u0644\\u0643\\u060c \\u062a\\u0648\\u0641\\u0631 \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0630\\u0647\\u0628\\u064a\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629.<br \\/>\\r\\n\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0641\\u064a \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b: \\u062a\\u0639\\u062a\\u0628\\u0631 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0647\\u064a \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629 \\u0627\\u0644\\u062d\\u0627\\u0633\\u0645\\u0629 \\u0641\\u064a \\u0631\\u062d\\u0644\\u0629 \\u0625\\u0639\\u062f\\u0627\\u062f \\u0627\\u0644\\u0631\\u0633\\u0627\\u0644\\u0629. \\u064a\\u0639\\u0645\\u0644 \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635 \\u0639\\u0644\\u0649 \\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0645\\u0644\\u0647\\u0645 \\u0648\\u0645\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0627\\u0647\\u062a\\u0645\\u0627\\u0645\\u0627\\u062a\\u0647\\u0645 \\u0648\\u0645\\u062c\\u0627\\u0644 \\u062a\\u062e\\u0635\\u0635\\u0647\\u0645. \\u0643\\u0645\\u0627 \\u064a\\u0639\\u062a\\u0645\\u062f \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0639\\u0644\\u0649 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u062a\\u0648\\u0641\\u0631 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0635\\u0627\\u062f\\u0631 \\u0627\\u0644\\u0644\\u0627\\u0632\\u0645\\u0629 \\u0644\\u0644\\u0628\\u062d\\u062b.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641: \\u0628\\u0639\\u062f \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0628\\u0634\\u0643\\u0644 \\u0648\\u0627\\u0636\\u062d \\u0648\\u0645\\u062d\\u062f\\u062f. \\u064a\\u0647\\u062f\\u0641 \\u0630\\u0644\\u0643 \\u0625\\u0644\\u0649 \\u062a\\u0648\\u062c\\u064a\\u0647 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0646\\u0637\\u0627\\u0642\\u0647 \\u0628\\u062f\\u0642\\u0629. \\u0643\\u0645\\u0627 \\u0646\\u0633\\u0627\\u0639\\u062f \\u0641\\u064a \\u0648\\u0636\\u0639 \\u0623\\u0647\\u062f\\u0627\\u0641 \\u0628\\u062d\\u062b\\u064a\\u0629 \\u0645\\u062d\\u062f\\u062f\\u0629 \\u0648\\u0642\\u0627\\u0628\\u0644\\u0629 \\u0644\\u0644\\u0642\\u064a\\u0627\\u0633\\u060c \\u0645\\u0645\\u0627 \\u064a\\u0633\\u0647\\u0645 \\u0641\\u064a \\u062a\\u0648\\u062c\\u064a\\u0647 \\u062c\\u0647\\u0648\\u062f \\u0627\\u0644\\u0637\\u0627\\u0644\\u0628 \\u0646\\u062d\\u0648 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0645\\u0624\\u062b\\u0631\\u0629.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629: \\u062a\\u0644\\u0639\\u0628 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u062f\\u0648\\u0631\\u0627\\u064b \\u062d\\u0627\\u0633\\u0645\\u0627\\u064b \\u0641\\u064a \\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u062d\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0644\\u0630\\u0644\\u0643\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0626\\u0645\\u0629 \\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0629 \\u0648\\u0637\\u0628\\u064a\\u0639\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0627\\u062d\\u0629 \\u0644\\u062f\\u064a\\u0647\\u0645. \\u0646\\u062d\\u0646 \\u0646\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0623\\u062d\\u062f\\u062b \\u0627\\u0644\\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0627\\u062a \\u0627\\u0644\\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0645\\u0635\\u062f\\u0627\\u0642\\u064a\\u0629 \\u0648\\u062f\\u0642\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c: \\u0639\\u0646\\u062f \\u0627\\u0643\\u062a\\u0645\\u0627\\u0644 \\u0645\\u0631\\u0627\\u062d\\u0644 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u060c \\u064a\\u0642\\u0648\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0628\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u062f\\u0648\\u0627\\u062a \\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0648\\u0631\\u0629. \\u0646\\u0636\\u0645\\u0646 \\u062a\\u0641\\u0633\\u064a\\u0631 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0628\\u062f\\u0642\\u0629 \\u0648\\u0625\\u0639\\u062f\\u0627\\u062f \\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0645\\u0643\\u062a\\u0648\\u0628\\u0629 \\u062a\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062c\\u0647\\u0629 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a\\u0629.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f: \\u062a\\u062a\\u0645\\u064a\\u0632 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0628\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u0641\\u0647\\u0645 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u060c \\u0648\\u0644\\u0630\\u0644\\u0643 \\u0646\\u0639\\u0645\\u0644 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u062a\\u0644\\u0628\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0628\\u0623\\u0641\\u0636\\u0644 \\u0634\\u0643\\u0644 \\u0645\\u0645\\u0643\\u0646.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u062a\\u0639\\u062f \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0634\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\\u060c \\u0628\\u062f\\u0621\\u064b\\u0627 \\u0645\\u0646 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641\\u060c \\u0648\\u0635\\u0648\\u0644\\u0627\\u064b \\u0625\\u0644\\u0649 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0625\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629 \\u062a\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0639\\u0644\\u0649 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0645\\u0645\\u064a\\u0632\\u0629 \\u0648\\u0627\\u0644\\u0646\\u062c\\u0627\\u062d \\u0641\\u064a \\u0645\\u0647\\u0645\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644\\u064a\\u0629.<\\/p>\",\"en\":\"<p>&quot;Master&#39;s and PhD Theses&quot; service - We provide comprehensive academic support.<br \\/>\\r\\nMaster&#39;s and doctoral dissertations are among the most important academic pillars that determine the future of students and greatly influence their careers. The intensive research process required by students to prepare these theses requires high specialization and continuous effort. Therefore, the &quot;Master&#39;s and Doctoral Theses&quot; services provide a golden opportunity for students to obtain integrated academic support in the Arabic language.<br \\/>\\r\\nSupport in defining the research topic: The stage of selecting the research topic is the decisive beginning in the thesis preparation journey. Our dedicated services team helps students choose an inspiring subject that is relevant to their interests and field of specialisation. The choice of topic also depends on the importance of the problem and the availability of data and sources needed for research.<\\/p>\\r\\n\\r\\n<p>Assistance in formulating the problem and objectives: After defining the topic, our team helps students formulate the research problem clearly and specifically. This aims to guide and precisely define the scope of the research. We also help set specific and measurable research goals, which contribute to directing student efforts towards achieving effective and impactful results.<\\/p>\\r\\n\\r\\n<p>Choosing the appropriate research methodology: The research methodology plays a decisive role in the quality of the research and the validity of the results. Therefore, our services team assists students in choosing the appropriate research methodology for the subject of study and the nature of the data available to them. We rely on the latest research methods and statistical techniques to ensure the credibility and accuracy of the research.<\\/p>\\r\\n\\r\\n<p>Data analysis and results formulation: When the research and data collection stages are completed, our team analyzes the data using advanced statistical tools. We ensure that results are interpreted accurately and written reports are prepared to meet the requirements of the relevant academic body.<\\/p>\\r\\n\\r\\n<p>Quality and punctuality: Our services are characterized by high quality and punctuality. We understand the importance of on-time delivery, which is why we work hard to meet customer requirements as best we can.<\\/p>\\r\\n\\r\\n<p>The &quot;Master&#39;s and Doctoral Theses&quot; services are an opportunity for students to obtain comprehensive academic support in Arabic, starting from defining the research topic, formulating the problem and objectives, all the way to selecting the research methodology, analyzing data and formulating the results. This service helps students achieve distinguished results and succeed in their future academic mission.<\\/p>\"}', 'Articles/jpg_doctoral.jpg_1691699442.jpg', '2023-08-10 17:30:42', '2023-08-10 17:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, '{\"ar\":\"\\u0627\\u0644\\u0637\\u0628\",\"en\":\"Medicine\"}', '2023-08-10 17:54:43', '2023-08-10 17:54:43');

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
(6, '2023_08_07_202656_create_what_presents_table', 3),
(7, '2023_08_07_211409_create_about_us_table', 4),
(8, '2023_08_07_211414_create_about_us_images_table', 4),
(9, '2023_08_10_190841_create_articles_table', 5),
(10, '2023_08_10_202727_create_services_table', 6),
(11, '2023_08_10_203332_create_majors_table', 7),
(12, '2023_08_10_203354_create_services_types_table', 7),
(13, '2023_08_10_141619_create_contact_us_table', 8),
(15, '2023_08_12_212654_create_requests_table', 9);

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `major_id` bigint(20) UNSIGNED DEFAULT NULL,
  `services_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `date`, `major_id`, `services_type_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'sayed', 'test@test.com', '2023-08-26', 2, 1, 'dsds', '2023-08-12 18:48:34', '2023-08-12 18:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0645\\u0627\\u062c\\u064a\\u0633\\u062a\\u064a\\u0631 \\u0648\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647\",\"en\":\"Master\'s and PhD theses\"}', '{\"ar\":\"<p style=\\\"text-align:right\\\">\\u062e\\u062f\\u0645\\u0629 &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; - \\u0646\\u0642\\u062f\\u0645 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0627\\u0644\\u0634\\u0627\\u0645\\u0644.<br \\/>\\r\\n\\u062a\\u0639\\u062f\\u0651 \\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647 \\u0645\\u0646 \\u0623\\u0647\\u0645 \\u0627\\u0644\\u0631\\u0643\\u0627\\u0626\\u0632 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u062f\\u062f \\u0645\\u0633\\u062a\\u0642\\u0628\\u0644 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0648\\u062a\\u0624\\u062b\\u0631 \\u0628\\u0634\\u0643\\u0644 \\u0643\\u0628\\u064a\\u0631 \\u0639\\u0644\\u0649 \\u062d\\u064a\\u0627\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0645\\u0647\\u0646\\u064a\\u0629. \\u0625\\u0646 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0643\\u062b\\u0641\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0637\\u0644\\u0628\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0625\\u0639\\u062f\\u0627\\u062f \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u0637\\u0631\\u0648\\u062d\\u0627\\u062a \\u062a\\u062a\\u0637\\u0644\\u0628 \\u062a\\u062e\\u0635\\u0635\\u0627\\u064b \\u0639\\u0627\\u0644\\u064a\\u0627\\u064b \\u0648\\u062c\\u0647\\u062f\\u0627\\u064b \\u0645\\u0633\\u062a\\u0645\\u0631\\u0627\\u064b. \\u0644\\u0630\\u0644\\u0643\\u060c \\u062a\\u0648\\u0641\\u0631 \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0630\\u0647\\u0628\\u064a\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629.<br \\/>\\r\\n\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0641\\u064a \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b: \\u062a\\u0639\\u062a\\u0628\\u0631 \\u0645\\u0631\\u062d\\u0644\\u0629 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0647\\u064a \\u0627\\u0644\\u0628\\u062f\\u0627\\u064a\\u0629 \\u0627\\u0644\\u062d\\u0627\\u0633\\u0645\\u0629 \\u0641\\u064a \\u0631\\u062d\\u0644\\u0629 \\u0625\\u0639\\u062f\\u0627\\u062f \\u0627\\u0644\\u0631\\u0633\\u0627\\u0644\\u0629. \\u064a\\u0639\\u0645\\u0644 \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0645\\u062a\\u062e\\u0635\\u0635 \\u0639\\u0644\\u0649 \\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0645\\u0644\\u0647\\u0645 \\u0648\\u0645\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0627\\u0647\\u062a\\u0645\\u0627\\u0645\\u0627\\u062a\\u0647\\u0645 \\u0648\\u0645\\u062c\\u0627\\u0644 \\u062a\\u062e\\u0635\\u0635\\u0647\\u0645. \\u0643\\u0645\\u0627 \\u064a\\u0639\\u062a\\u0645\\u062f \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0639\\u0644\\u0649 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u062a\\u0648\\u0641\\u0631 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u0635\\u0627\\u062f\\u0631 \\u0627\\u0644\\u0644\\u0627\\u0632\\u0645\\u0629 \\u0644\\u0644\\u0628\\u062d\\u062b.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641: \\u0628\\u0639\\u062f \\u062a\\u062d\\u062f\\u064a\\u062f \\u0627\\u0644\\u0645\\u0648\\u0636\\u0648\\u0639\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0628\\u0634\\u0643\\u0644 \\u0648\\u0627\\u0636\\u062d \\u0648\\u0645\\u062d\\u062f\\u062f. \\u064a\\u0647\\u062f\\u0641 \\u0630\\u0644\\u0643 \\u0625\\u0644\\u0649 \\u062a\\u0648\\u062c\\u064a\\u0647 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062a\\u062d\\u062f\\u064a\\u062f \\u0646\\u0637\\u0627\\u0642\\u0647 \\u0628\\u062f\\u0642\\u0629. \\u0643\\u0645\\u0627 \\u0646\\u0633\\u0627\\u0639\\u062f \\u0641\\u064a \\u0648\\u0636\\u0639 \\u0623\\u0647\\u062f\\u0627\\u0641 \\u0628\\u062d\\u062b\\u064a\\u0629 \\u0645\\u062d\\u062f\\u062f\\u0629 \\u0648\\u0642\\u0627\\u0628\\u0644\\u0629 \\u0644\\u0644\\u0642\\u064a\\u0627\\u0633\\u060c \\u0645\\u0645\\u0627 \\u064a\\u0633\\u0647\\u0645 \\u0641\\u064a \\u062a\\u0648\\u062c\\u064a\\u0647 \\u062c\\u0647\\u0648\\u062f \\u0627\\u0644\\u0637\\u0627\\u0644\\u0628 \\u0646\\u062d\\u0648 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0641\\u0639\\u0627\\u0644\\u0629 \\u0648\\u0645\\u0624\\u062b\\u0631\\u0629.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0646\\u0627\\u0633\\u0628\\u0629: \\u062a\\u0644\\u0639\\u0628 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u062f\\u0648\\u0631\\u0627\\u064b \\u062d\\u0627\\u0633\\u0645\\u0627\\u064b \\u0641\\u064a \\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u062d\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0644\\u0630\\u0644\\u0643\\u060c \\u064a\\u0633\\u0627\\u0639\\u062f \\u0641\\u0631\\u064a\\u0642 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0641\\u064a \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0644\\u0627\\u0626\\u0645\\u0629 \\u0644\\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u062f\\u0631\\u0627\\u0633\\u0629 \\u0648\\u0637\\u0628\\u064a\\u0639\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0627\\u062d\\u0629 \\u0644\\u062f\\u064a\\u0647\\u0645. \\u0646\\u062d\\u0646 \\u0646\\u0639\\u062a\\u0645\\u062f \\u0639\\u0644\\u0649 \\u0623\\u062d\\u062f\\u062b \\u0627\\u0644\\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0642\\u0646\\u064a\\u0627\\u062a \\u0627\\u0644\\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0645\\u0635\\u062f\\u0627\\u0642\\u064a\\u0629 \\u0648\\u062f\\u0642\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c: \\u0639\\u0646\\u062f \\u0627\\u0643\\u062a\\u0645\\u0627\\u0644 \\u0645\\u0631\\u0627\\u062d\\u0644 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u060c \\u064a\\u0642\\u0648\\u0645 \\u0641\\u0631\\u064a\\u0642\\u0646\\u0627 \\u0628\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0628\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u062f\\u0648\\u0627\\u062a \\u0625\\u062d\\u0635\\u0627\\u0626\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0648\\u0631\\u0629. \\u0646\\u0636\\u0645\\u0646 \\u062a\\u0641\\u0633\\u064a\\u0631 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c \\u0628\\u062f\\u0642\\u0629 \\u0648\\u0625\\u0639\\u062f\\u0627\\u062f \\u062a\\u0642\\u0627\\u0631\\u064a\\u0631 \\u0645\\u0643\\u062a\\u0648\\u0628\\u0629 \\u062a\\u062a\\u0646\\u0627\\u0633\\u0628 \\u0645\\u0639 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062c\\u0647\\u0629 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0646\\u064a\\u0629.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f: \\u062a\\u062a\\u0645\\u064a\\u0632 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0628\\u0627\\u0644\\u062c\\u0648\\u062f\\u0629 \\u0627\\u0644\\u0639\\u0627\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0627\\u0639\\u064a\\u062f \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u0629. \\u0646\\u062d\\u0646 \\u0646\\u0641\\u0647\\u0645 \\u0623\\u0647\\u0645\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0633\\u0644\\u064a\\u0645 \\u0641\\u064a \\u0627\\u0644\\u0648\\u0642\\u062a \\u0627\\u0644\\u0645\\u062d\\u062f\\u062f\\u060c \\u0648\\u0644\\u0630\\u0644\\u0643 \\u0646\\u0639\\u0645\\u0644 \\u062c\\u0627\\u0647\\u062f\\u064a\\u0646 \\u0644\\u062a\\u0644\\u0628\\u064a\\u0629 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\\u0627\\u0621 \\u0628\\u0623\\u0641\\u0636\\u0644 \\u0634\\u0643\\u0644 \\u0645\\u0645\\u0643\\u0646.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align:right\\\">\\u062a\\u0639\\u062f \\u062e\\u062f\\u0645\\u0627\\u062a &quot;\\u0631\\u0633\\u0627\\u0626\\u0644 \\u0627\\u0644\\u0645\\u0627\\u062c\\u0633\\u062a\\u064a\\u0631 \\u0648\\u0627\\u0644\\u062f\\u0643\\u062a\\u0648\\u0631\\u0627\\u0647&quot; \\u0641\\u0631\\u0635\\u0629 \\u0644\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0644\\u0644\\u062d\\u0635\\u0648\\u0644 \\u0639\\u0644\\u0649 \\u062f\\u0639\\u0645 \\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a \\u0634\\u0627\\u0645\\u0644 \\u0628\\u0627\\u0644\\u0644\\u063a\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629\\u060c \\u0628\\u062f\\u0621\\u064b\\u0627 \\u0645\\u0646 \\u062a\\u062d\\u062f\\u064a\\u062f \\u0645\\u0648\\u0636\\u0648\\u0639 \\u0627\\u0644\\u0628\\u062d\\u062b \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0643\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0623\\u0647\\u062f\\u0627\\u0641\\u060c \\u0648\\u0635\\u0648\\u0644\\u0627\\u064b \\u0625\\u0644\\u0649 \\u0627\\u062e\\u062a\\u064a\\u0627\\u0631 \\u0627\\u0644\\u0645\\u0646\\u0647\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0628\\u062d\\u062b\\u064a\\u0629 \\u0648\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0635\\u064a\\u0627\\u063a\\u0629 \\u0627\\u0644\\u0646\\u062a\\u0627\\u0626\\u062c. \\u0625\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629 \\u062a\\u0633\\u0627\\u0639\\u062f \\u0627\\u0644\\u0637\\u0644\\u0627\\u0628 \\u0639\\u0644\\u0649 \\u062a\\u062d\\u0642\\u064a\\u0642 \\u0646\\u062a\\u0627\\u0626\\u062c \\u0645\\u0645\\u064a\\u0632\\u0629 \\u0648\\u0627\\u0644\\u0646\\u062c\\u0627\\u062d \\u0641\\u064a \\u0645\\u0647\\u0645\\u062a\\u0647\\u0645 \\u0627\\u0644\\u0623\\u0643\\u0627\\u062f\\u064a\\u0645\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062a\\u0642\\u0628\\u0644\\u064a\\u0629.<\\/p>\",\"en\":\"<p>&quot;Master&#39;s and PhD Theses&quot; service - We provide comprehensive academic support.<br \\/>\\r\\nMaster&#39;s and doctoral dissertations are among the most important academic pillars that determine the future of students and greatly influence their careers. The intensive research process required by students to prepare these theses requires high specialization and continuous effort. Therefore, the &quot;Master&#39;s and Doctoral Theses&quot; services provide a golden opportunity for students to obtain integrated academic support in the Arabic language.<br \\/>\\r\\nSupport in defining the research topic: The stage of selecting the research topic is the decisive beginning in the thesis preparation journey. Our dedicated services team helps students choose an inspiring subject that is relevant to their interests and field of specialisation. The choice of topic also depends on the importance of the problem and the availability of data and sources needed for research.<\\/p>\\r\\n\\r\\n<p>Assistance in formulating the problem and objectives: After defining the topic, our team helps students formulate the research problem clearly and specifically. This aims to guide and precisely define the scope of the research. We also help set specific and measurable research goals, which contribute to directing student efforts towards achieving effective and impactful results.<\\/p>\\r\\n\\r\\n<p>Choosing the appropriate research methodology: The research methodology plays a decisive role in the quality of the research and the validity of the results. Therefore, our services team assists students in choosing the appropriate research methodology for the subject of study and the nature of the data available to them. We rely on the latest research methods and statistical techniques to ensure the credibility and accuracy of the research.<\\/p>\\r\\n\\r\\n<p>Data analysis and results formulation: When the research and data collection stages are completed, our team analyzes the data using advanced statistical tools. We ensure that results are interpreted accurately and written reports are prepared to meet the requirements of the relevant academic body.<\\/p>\\r\\n\\r\\n<p>Quality and punctuality: Our services are characterized by high quality and punctuality. We understand the importance of on-time delivery, which is why we work hard to meet customer requirements as best we can.<\\/p>\\r\\n\\r\\n<p>The &quot;Master&#39;s and Doctoral Theses&quot; services are an opportunity for students to obtain comprehensive academic support in Arabic, starting from defining the research topic, formulating the problem and objectives, all the way to selecting the research methodology, analyzing data and formulating the results. This service helps students achieve distinguished results and succeed in their future academic mission.<\\/p>\"}', 'Articles/jpg_doctoral.jpg_1691699510.jpg', '2023-08-10 17:31:50', '2023-08-10 17:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `services_types`
--

CREATE TABLE `services_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_types`
--

INSERT INTO `services_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"\\u0627\\u0644\\u0641\\u0631\\u0639\\u0649 \\u0627\\u0644\\u0623\\u0648\\u06443\",\"en\":\"Master\'s and PhD theses\"}', '2023-08-10 18:00:07', '2023-08-10 18:00:07');

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
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_images`
--
ALTER TABLE `about_us_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_major_id_foreign` (`major_id`),
  ADD KEY `requests_services_type_id_foreign` (`services_type_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_types`
--
ALTER TABLE `services_types`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_us_images`
--
ALTER TABLE `about_us_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_types`
--
ALTER TABLE `services_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_services_type_id_foreign` FOREIGN KEY (`services_type_id`) REFERENCES `services_types` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
