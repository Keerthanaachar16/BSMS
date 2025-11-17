-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2025 at 05:36 PM
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
-- Database: `bspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'system292916@gmail.com', '$2y$12$3xhS8yMBuU5.NoI4a2Ev8uNMIXAw5TDp04m9LukqVI5SCD00bw2Wy', '2025-08-08 01:42:43', '2025-09-21 00:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `raised_by` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `complaint_status` varchar(255) NOT NULL DEFAULT 'pending',
  `ward` varchar(255) NOT NULL,
  `remarks` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `updated_image` varchar(255) DEFAULT NULL,
  `officials_remarks` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_at` timestamp NULL DEFAULT NULL,
  `deadline_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `raised_by`, `user_id`, `latitude`, `longitude`, `complaint_status`, `ward`, `remarks`, `image`, `updated_image`, `officials_remarks`, `created_at`, `updated_at`, `assigned_at`, `deadline_at`) VALUES
(1, 1, 1, '12.9630208', '77.594624', 'In progress', '1', 'ffff', '1754589377.jpg', NULL, NULL, '2025-08-07 12:26:17', '2025-08-26 08:07:58', NULL, NULL),
(2, NULL, 1, '12.959744', '77.5815168', 'In progress', '2', 'abc', '1755004821.jpg', 'complaint_images/1756806695_96700f75-f657-47a4-8607-8bcf681d003b.jpg', 'Resolved', '2025-08-12 07:50:21', '2025-09-24 02:14:46', '2025-09-24 02:14:46', NULL),
(3, NULL, 1, '12.9630208', '77.594624', 'Resolved', '2', 'gggg', '1755077046.jpg', 'complaint_images/1757919744_96700f75-f657-47a4-8607-8bcf681d003b.jpg', 'Resolved', '2025-08-13 03:54:06', '2025-09-15 01:32:24', NULL, NULL),
(4, NULL, 1, '12.9662976', '77.6077312', 'In progress', '66', 'Garbage dumped in open space', '1756106727.jpg', NULL, NULL, '2025-08-25 01:55:27', '2025-09-01 04:35:02', NULL, NULL),
(5, NULL, 1, '12.9564672', '77.594624', 'In progress', '110', NULL, '1756811181.jpg', NULL, NULL, '2025-09-02 05:36:21', '2025-09-13 08:26:35', NULL, NULL),
(6, NULL, 1, '12.9564672', '77.594624', 'pending', '168', 'Garbage dumbed near residential area', '1756969864.jpg', NULL, NULL, '2025-09-04 01:41:04', '2025-09-04 01:41:04', NULL, NULL),
(7, NULL, 1, '12.9786', '77.364', 'pending', '175', 'abcd', '1758375585.jpg', NULL, NULL, '2025-09-20 08:09:45', '2025-09-20 08:09:45', NULL, NULL),
(8, NULL, 1, '12.9786', '77.364', 'In progress', '14', 'abcdefgh', '1758466609.jpg', NULL, NULL, '2025-09-21 09:26:49', '2025-09-21 09:32:23', NULL, NULL),
(9, NULL, 1, '13.335306159880657', '74.75261680459373', 'pending', '7', 'abcd', '1758523558.jpg', NULL, NULL, '2025-09-22 01:15:58', '2025-09-22 01:15:58', NULL, NULL),
(10, 5, 5, '12.9786', '77.364', 'Irrelevant', '17', 'abcdefg', '1758611207.jpg', NULL, NULL, '2025-09-23 01:36:47', '2025-09-23 05:08:51', NULL, NULL),
(11, NULL, 5, '13.335784', '74.752261', 'Irrelevant', '17', 'abcdefg', '1759393429.jpg', NULL, NULL, '2025-10-02 02:53:49', '2025-10-02 03:10:14', '2025-10-02 02:58:32', NULL),
(12, NULL, 5, '13.335784', '74.752261', 'Irrelevant', '17', 'abcdefg', '1759393478.jpg', NULL, NULL, '2025-10-02 02:54:38', '2025-10-02 03:13:37', '2025-10-02 02:58:50', NULL),
(13, NULL, 1, '13.335784', '74.752261', 'pending', '175', 'abcdefg', '1761540605.jpg', NULL, NULL, '2025-10-26 23:20:05', '2025-10-26 23:20:05', NULL, NULL),
(14, NULL, 1, '13.335784', '74.752261', 'pending', '175', 'abcdefg', '1761540658.jpg', NULL, NULL, '2025-10-26 23:20:58', '2025-10-26 23:20:58', NULL, NULL),
(15, NULL, 1, '15.3647083', '75.1239547', 'pending', '66', 'abcds', '1761559817.jpg', NULL, NULL, '2025-10-27 04:40:17', '2025-10-27 04:40:17', NULL, NULL),
(16, NULL, 1, '15.3647083', '75.1239547', 'pending', '168', 'Garbage dumped in open space', '1763295289.jpg', NULL, NULL, '2025-11-16 06:44:50', '2025-11-16 06:44:50', NULL, NULL),
(17, NULL, 1, '15.3647083', '75.1239547', 'pending', '110', 'Garbage is thrown improperly in this area', '1763296498.jpg', NULL, NULL, '2025-11-16 07:04:58', '2025-11-16 07:04:58', NULL, NULL),
(18, NULL, 1, '15.3647083', '75.1239547', 'pending', '175', 'Garbage is not managed properly here', '1763296699.jpg', NULL, NULL, '2025-11-16 07:08:19', '2025-11-16 07:08:19', NULL, NULL),
(19, NULL, 1, '15.3647083', '75.1239547', 'pending', '3', 'kkk', '1763392855.jpg', NULL, NULL, '2025-11-17 09:50:55', '2025-11-17 09:50:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_official`
--

CREATE TABLE `complaint_official` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_id` bigint(20) UNSIGNED NOT NULL,
  `official_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaint_official`
--

INSERT INTO `complaint_official` (`id`, `complaint_id`, `official_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 4, 3, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 3, 2, NULL, NULL),
(5, 5, 4, NULL, NULL),
(6, 8, 7, NULL, NULL),
(7, 10, 1, NULL, NULL),
(8, 10, 9, NULL, NULL),
(9, 11, 9, NULL, NULL),
(10, 12, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(255) NOT NULL,
  `div_name` varchar(255) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `zone_name`, `div_name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Bommanahalli', 'BTM Layout', 0.0000000, 0.0000000, '2025-08-21 07:50:25', '2025-08-22 01:11:23'),
(2, 'West', 'Rajajinagar', 13.0005232, 77.5496166, '2025-08-21 10:23:36', '2025-08-21 10:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_07_170822_add_phone_and_address_to_users_table', 1),
(5, '2025_08_07_174704_create_complaints_table', 2),
(6, '2025_08_08_063202_create_admins_table', 3),
(7, '2025_08_11_124341_create_zones_table', 4),
(8, '2025_08_12_052352_add_complaint_status_to_complaints_table', 5),
(9, '2025_08_18_073944_create_officials_table', 6),
(10, '2025_08_21_102707_create_divisions_table', 7),
(11, '2025_08_22_105242_create_wards_table', 8),
(12, '2025_08_25_105219_add_assigned_complaint_id_to_officials_table', 9),
(13, '2025_09_01_095509_create_complaint_official_table=complaint_official', 10),
(14, '2025_09_02_064723_add_updated_image_and_officials_remarks_to_complaints_table', 11),
(15, '2025_09_23_060818_add_is_blocked_to_users_table', 12),
(16, '2025_09_23_112259_add_raised_by_to_complaints_table', 13),
(17, '2025_09_24_061802_add_assigned_at_to_complaints_table', 14),
(18, '2025_09_24_072700_add_deadline_at_to_complaints_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `ward` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `assigned_complaint_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `name`, `phone`, `zone`, `division`, `ward`, `email`, `password`, `created_at`, `updated_at`, `assigned_complaint_id`) VALUES
(1, 'Keerthana', '9844043720', 'Yelahanka', 'Yelahanka', '3', 'kachar292916@gmail.com', '$2y$12$HCEimVNODtbIFMdn91GRRuAtVhaxpNHG4DGJTM7S7WRgj0Vf/F4d.', '2025-08-18 03:49:46', '2025-09-01 00:49:34', 3),
(2, 'Keerthana', '9986577838', 'Yelahanka', 'Yelahanka', '2', 'acharkeerthana6@gmail.com', '$2y$12$sASerf8kOAM9vQLaUAnE4u6O7kqx0/smVAo.izUyTv9AksHqVzSc.', '2025-08-19 07:26:21', '2025-09-21 06:38:44', 3),
(3, 'Kavya', '9844043718', 'Bangalore East', 'Hebbal', '66', 'kavya@gmail.com', '$2y$12$KYDFLAxgvg9gFh05PUZKTujDQkaj7ePen6Vnbc.RZd7ZE9ZxQbSxC', '2025-08-25 05:00:55', '2025-09-24 07:12:24', 4),
(4, 'Shrisha', '9844043719', 'Bangalore West', 'Gandhinagar', '110', 'srisha70707@gmail.com', '$2y$12$3l2S9ywW81buQb80CBS7yekNy60ToFV4SS49L7jwcHt/tihO2y4JO', '2025-09-13 08:21:03', '2025-09-24 07:14:38', NULL),
(6, 'Preethi', '9944043715', 'Bangalore South', 'Basavanagudi', '168', 'preethi16@gmail.com', '$2y$12$x4Pcm3Oxe4EC7i.ZBeDRzOtD6P4cgvABewrHGP9WS2YZG2Zox7WdO', '2025-09-17 06:54:16', '2025-09-24 07:15:27', NULL),
(7, 'Suma', '7583211080', 'Dasarahalli', 'Dasarahalli', '14', 'suma@gmail.com', '$2y$12$DHdMhDWPDRFHgD/r5b/aG.i3Nv2nGGAWMj/gF9InzysiUj9qKpjJi', '2025-09-20 10:39:32', '2025-09-20 10:39:32', NULL),
(8, 'Navya', '9944045762', 'Bommanahalli', 'Bommanahalli', '175', 'navya@gmail.com', '$2y$12$mW4HK1Wr7JGoWBbY4FKWy.mJ1klhZgtVnW8oTcsYR/Lnd2H4hAfla', '2025-09-20 10:55:38', '2025-09-24 07:16:33', NULL),
(9, 'Abc', '8756231456', 'Dasarahalli', 'Peenya', '17', 'system292916@gmail.com', '$2y$12$l13LA2zfcDUiqeCyTof44.Apv7DrUO2fi3/YuUQiAYu0YE3g3Ua0S', '2025-09-21 09:17:08', '2025-09-21 09:17:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_blocked` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_blocked`) VALUES
(1, 'Keerthana', '9844043717', 'acharkeerthana6@gmail.com', 'Koteshwara', NULL, '$2y$12$UWqQplBGm91osRun.yDDAulG7HwPBCZ3AAqbO.XyHWilnZPagSoMy', NULL, '2025-08-07 11:42:48', '2025-09-21 08:59:01', 0),
(2, 'Kishor', '9986577838', 'kishuaachar@gmail.com', 'Kundapura', NULL, '$2y$12$Wv/g/2EpC.08rLO55sm/Ieh4QH0zLMJiKtUEOlW1w2frCOQhD9ppS', NULL, '2025-08-07 23:04:12', '2025-08-07 23:05:04', 0),
(3, 'Kiran', '8971779835', 'kiran@gmail.com', 'Kundapura', NULL, '$2y$12$djpD15fZ9I/lz3BYAPCHIeGAUUTlRDkF/7doHsFx6OChxO21PPt9C', NULL, '2025-08-08 02:59:39', '2025-08-08 02:59:39', 0),
(4, 'Keerthana', '9449047838', 'kachar292916@gmail.com', 'Kundapura', NULL, '$2y$12$4dcV/SZ8NEvtESDXLUE3X.1w9HhSJNr/1O/Op7HWWIiiaZxlzLUCG', NULL, '2025-08-13 03:48:17', '2025-09-23 02:22:33', 0),
(5, 'Keerthana', '9844043718', 'system292916@gmail.com', 'Koteshwara', NULL, '$2y$12$/y.3ZuD2bMrT.SZrQU03kOkNVu8XcLBE9LSRJq8Km8CnfS5WC2c0m', NULL, '2025-08-23 05:37:54', '2025-09-23 07:07:51', 3),
(6, 'abcd', '9855632147', 'keerthana@gmail.com', 'Kundapura', NULL, '$2y$12$bCnjwGpiaIKWTADDxRywXOBQPMIZLKxFj8vUmyz.MX09zYBhcKtvm', NULL, '2025-10-27 04:35:40', '2025-10-27 04:35:40', 0),
(7, 'Shravya', '9874563215', 'shravya@gmai.com', 'Bommanahalli', NULL, '$2y$12$eKY.ufznFfpxpKL44U54OeHoJrI8F3mQHk91IBwwFOW1xcf8ke8U.', NULL, '2025-11-16 10:00:02', '2025-11-16 10:00:02', 0),
(8, 'Divya', '8965741236', 'divya@gmail.com', 'Akkur', NULL, '$2y$12$ePY1IjeAwPOL9NLiV6SWh.F2DpDF6NKBehgA.dAPmjZJjDpD.VfMS', NULL, '2025-11-17 09:27:42', '2025-11-17 09:27:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `ward_name` varchar(255) NOT NULL,
  `ward_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `division_name`, `ward_name`, `ward_no`, `created_at`, `updated_at`) VALUES
(1, 'Yelahanka', 'Kempegowda Ward', '1', '2025-08-22 06:57:32', '2025-09-04 01:33:26'),
(2, 'Yelahanka', 'Jakkur', '2', '2025-08-23 06:04:21', '2025-09-04 01:34:04'),
(3, 'Yelahanka', 'Akkur', '3', '2025-09-04 01:00:50', '2025-09-17 06:42:22'),
(4, 'Hebbal', 'Radhakrina Temple', '66', '2025-09-17 06:44:59', '2025-09-24 07:48:02'),
(5, 'Gandhinagar', 'Subhash Nagar', '110', '2025-09-17 06:45:38', '2025-09-24 07:52:39'),
(6, 'Dasarahalli', 'T. Dasarahalli', '14', '2025-09-20 10:16:10', '2025-09-20 10:16:10'),
(7, 'Basavanagudi', 'Sunkenahalli', '168', '2025-09-24 07:53:45', '2025-09-24 07:53:45'),
(8, 'Bommanahalli', 'Hongasandra', '175', '2025-09-24 07:54:10', '2025-09-24 07:54:10'),
(9, 'Peenya', 'Peenya Industrial Area', '17', '2025-09-24 07:54:33', '2025-09-24 07:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(255) NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `zone_name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Jayanagara', 12.9292731, 77.5824229, '2025-08-12 02:55:37', '2025-08-12 03:32:20'),
(2, 'Malleshwaram', 13.0027353, 77.5703253, '2025-08-12 04:40:51', '2025-08-12 04:40:51'),
(3, 'RR Nagar', 12.9061274, 77.5195580, '2025-08-12 05:16:04', '2025-08-12 05:16:04'),
(4, 'Mahadevapura', 12.9965445, 77.6927176, '2025-09-06 06:42:26', '2025-09-06 06:42:26'),
(6, 'Dasarahalli', 12.9784134, 77.5427194, '2025-09-17 06:40:19', '2025-09-17 06:40:19'),
(7, 'Bangalore East', 13.0011462, 77.6183453, '2025-10-27 05:00:52', '2025-10-27 05:00:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaints_user_id_foreign` (`user_id`),
  ADD KEY `complaints_raised_by_foreign` (`raised_by`);

--
-- Indexes for table `complaint_official`
--
ALTER TABLE `complaint_official`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complaint_official_complaint_id_foreign` (`complaint_id`),
  ADD KEY `complaint_official_official_id_foreign` (`official_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `officials_phone_unique` (`phone`),
  ADD UNIQUE KEY `officials_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zones`
--
ALTER TABLE `zones`
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
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `complaint_official`
--
ALTER TABLE `complaint_official`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_raised_by_foreign` FOREIGN KEY (`raised_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `complaint_official`
--
ALTER TABLE `complaint_official`
  ADD CONSTRAINT `complaint_official_complaint_id_foreign` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaint_official_official_id_foreign` FOREIGN KEY (`official_id`) REFERENCES `officials` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
