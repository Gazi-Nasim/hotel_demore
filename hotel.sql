-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 04:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about_text` text NOT NULL,
  `feature_photo` varchar(255) DEFAULT NULL,
  `about_photo_1` varchar(255) DEFAULT NULL,
  `about_photo_2` varchar(255) DEFAULT NULL,
  `about_photo_3` varchar(255) DEFAULT NULL,
  `map` text NOT NULL,
  `video` varchar(255) NOT NULL,
  `about_banner` varchar(255) NOT NULL,
  `contact_banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `address`, `phone`, `email`, `about_text`, `feature_photo`, `about_photo_1`, `about_photo_2`, `about_photo_3`, `map`, `video`, `about_banner`, `contact_banner`, `created_at`, `updated_at`) VALUES
(1, 'D\'More Cox\'s Hotel & Resort', 'D\'more Kuakata Hotel & Resort\r\nKeranipara, Word no # 07, Kuakata Pouroshova,\r\nKolapara, Potuakhali, Bangladesh', '01927788578', 'coxsbazar@gmail.com', 'Enjoy a Luxury Experience', '1707675680_3.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', 'Map', 'https://youtu.be/qUD1gWOpeOg', 'Coastal Charm: Experience the coastal charm at D\'more Kuakata Hotel and Resort, located in Patuakhali. Our three-star property offers guests a delightful beachfront stay, coupled with the same high-quality service found across all our D\'more hotels.', '01928788588', '2024-02-06 04:19:58', '2024-02-22 10:31:24'),
(2, 'D\'More Sajek Valley', 'D\'more Kuakata Hotel & Resort\r\nKeranipara, Word no # 07, Kuakata Pouroshova,\r\nKolapara, Potuakhali, Bangladesh', '01927788578', 'coxsbazar@gmail.com', 'Enjoy a Luxury Experience', '1707675680_3.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', '1707214798_323890860_762979144722763_4255244792265059392_n.jpg', 'Map', 'https://youtu.be/qUD1gWOpeOg', 'Coastal Charm: Experience the coastal charm at D\'more Kuakata Hotel and Resort, located in Patuakhali. Our three-star property offers guests a delightful beachfront stay, coupled with the same high-quality service found across all our D\'more hotels.', '01928788588', '2024-02-06 04:19:58', '2024-02-25 04:41:16'),
(3, 'D\'More Khulna Hotel &  Resort', 'address', '(+88) 01329-723050', 'reservation.kuakata@hoteldmore.com', 'about', '1707675698_5.jpg', '1707675301_1.jpg', '1707675301_2.jpg', '1707675301_3.jpg', 'Branch Map', 'https://youtu.be/qUD1gWOpeOg', 'about banner', '01928788588', '2024-02-11 12:15:01', '2024-02-25 04:50:16'),
(4, 'D\'More Kuakata Hotel & Resort', 'Branch Address', '01927788578', 'reservation.kuakata@hoteldmore.com', 'Branch About', '1707675658_2.jpg', '1707207898_moriomful.jpg', '1707207898_colorful_logo.jpg', '1707207898_1671970550.1661423837.1654173379.corona-BG.jpg', 'Branch Map', 'https://youtu.be/qUD1gWOpeOg', 'About Banner', '01928788588', '2024-02-06 02:24:58', '2024-02-16 03:23:48'),
(5, 'D\'More Sreemongol', 'Address', '01927788578', 'email@email.com', 'About Address', '1708587196_6.jpg', '1708587196_4.jpg', '1708587196_5.jpg', '1708587196_6.jpg', 'https://www.youtube.com/watch?v=bFrEgdSCHEo&ab_channel=DBCNEWS', 'https://youtu.be/qUD1gWOpeOg', 'about Banner', '01928788588', '2024-02-22 01:33:16', '2024-02-22 01:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `branchmessages`
--

CREATE TABLE `branchmessages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branchsliders`
--

CREATE TABLE `branchsliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchsliders`
--

INSERT INTO `branchsliders` (`id`, `branch_id`, `title_1`, `title_2`, `photo`, `created_at`, `updated_at`) VALUES
(2, 2, 'Branch Title One', 'Branch Title Two', '1707219671_2a51299e637a606f3ea038822ecc33a7.jpg', '2024-02-06 05:41:11', '2024-02-06 05:41:11'),
(3, 2, 'title one', 'title two', '1708588506_2.jpg', '2024-02-17 10:23:25', '2024-02-22 01:55:06'),
(4, 1, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(5, 1, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(6, 3, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(7, 3, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(8, 4, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(9, 4, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(10, 5, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33'),
(11, 5, 'D\'more Cox\'s Hotel & Resort', 'The Perfect Base For You', '1708616973_1.jpg', '2024-02-22 09:49:33', '2024-02-22 09:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `psnt_address` text NOT NULL,
  `prmnt_address` text NOT NULL,
  `vacan_posi` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `experience_1` varchar(255) NOT NULL,
  `experience_2` varchar(255) NOT NULL,
  `experience_3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `experience_time` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `remote` enum('yes','no') NOT NULL,
  `cv` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `name_bn`, `father`, `mother`, `psnt_address`, `prmnt_address`, `vacan_posi`, `reference`, `experience_1`, `experience_2`, `experience_3`, `email`, `phone`, `experience_time`, `message`, `remote`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'Yamini', 'Yamini Tabassum Tahi', 'Yasin Babar', 'Bithi', 'Address', 'Address', 'position', 'reference', 'job 1', 'job 2', 'job 3', 'yamini@gmail.com', '01927788578', 'Less than a year', 'Myself', 'yes', '1708160270_02.pdf', '2024-02-17 02:57:50', '2024-02-17 02:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `branch_id`, `name`, `details`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Parking Space', 'Secure and Ample Parking Space Available to Ensure a Convenient and Safe Parking Experience for Your Vehicle.', 'flaticon-car', '2024-02-06 06:21:32', '2024-02-22 10:53:39'),
(3, 1, 'Room Service', 'Enjoy the convenience of our Room Service, bringing a variety of options right to your door for a effortless dining experience.', 'flaticon-bed', '2024-02-06 06:21:32', '2024-02-22 10:56:55'),
(4, 1, 'Swimming Pool', 'Dive into relaxation at our inviting swimming pool, where crystal-clear waters and enjoy a peaceful atmosphere for a refreshing getaway.', '1707222444_2a51299e637a606f3ea038822ecc33a7.jpg', '2024-02-06 06:21:32', '2024-02-22 10:57:35'),
(5, 2, 'test facility', 'facility details', '1709560281_2a51299e637a606f3ea038822ecc33a7.jpg', '2024-03-04 07:51:22', '2024-03-04 07:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_infos`
--

CREATE TABLE `general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about_short` text NOT NULL,
  `about_full` text NOT NULL,
  `reservation` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_infos`
--

INSERT INTO `general_infos` (`id`, `name`, `logo`, `about_short`, `about_full`, `reservation`, `whatsapp`, `fb`, `youtube`, `instagram`, `twitter`, `pinterest`, `created_at`, `updated_at`) VALUES
(3, 'D\'More Hotel & Resort', '1708822781_logo.jpg', 'At D\'more Hotel & Resort, we believe in going above and beyond to create cherished memories for our guests. Come and experience the essence of Bangladesh\'s hospitality with us. Your journey begins here!', 'Welcome to D\'more Hotel & Resort, the first-ever Local Chain Hotel in Bangladesh, offering a truly unique and extraordinary experience. Our chain proudly boasts several properties strategically located in some of the most attractive tourist places in the country like; Cox’s Bazar, Dhaka, Bandarban, Sajek, Kuakata, Sreemongal and Chittagong.', 'reservation.kuakata@hoteldmore.com', 'whatsapp.com', 'facebook.com', 'youtube.com', 'instragrame.com', 'twiter.com', 'pinster.com', '2024-02-24 18:59:41', '2024-02-24 19:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `main_addres`
--

CREATE TABLE `main_addres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_addres`
--

INSERT INTO `main_addres` (`id`, `title`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Main Title', 'Main Address', '01927788578', '2024-02-06 07:11:27', '2024-02-06 07:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `main_sliders`
--

CREATE TABLE `main_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_1` varchar(255) NOT NULL,
  `title_2` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_sliders`
--

INSERT INTO `main_sliders` (`id`, `title_1`, `title_2`, `photo`, `link`, `created_at`, `updated_at`) VALUES
(3, 'Welcome to D\'more Hotel & Resort', 'Enjoy a Luxury Experience', '1707547058_1.jpg', 'https://kuakata.hsblco.com/home', '2024-02-10 00:37:38', '2024-02-10 00:37:38'),
(4, 'Welcome to D\'more Hotel & Resort', 'The Perfect Base For You', '1707547154_2.jpg', 'https://resort.hsblco.com/home', '2024-02-10 00:39:14', '2024-02-10 00:40:11'),
(5, 'Welcome to D\'more Hotel & Resort', 'The Perfect Base For You', '1707547787_3.jpg', 'https://sreemongol.hsblco.com/home', '2024-02-10 00:49:47', '2024-02-10 00:49:47'),
(6, 'Welcome to D\'more Hotel & Resort', 'Enjoy a Luxury Experience', '1707547822_4.jpg', 'https://bandarban.hsblco.com/home', '2024-02-10 00:50:22', '2024-02-10 00:50:22'),
(7, 'Welcome to D\'more Hotel & Resort', 'The Perfect Base For You', '1707547860_5.jpg', 'https://galesia.hsblco.com/home', '2024-02-10 00:51:00', '2024-02-10 00:51:00'),
(8, 'Welcome to D\'more Hotel & Resort', 'The Perfect Base For You', '1707547917_6.jpg', 'https://www.hotelthecoxtoday.com/', '2024-02-10 00:51:33', '2024-02-10 00:51:57'),
(9, 'Welcome to D\'more Hotel & Resort', 'The Perfect Base For You', '1707547953_7.jpg', 'https://www.hotelthecoxtoday.com/', '2024-02-10 00:52:33', '2024-02-10 00:52:33');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_08_043101_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `branch_id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(2, 1, 'Hotel Bathroom Collections', '1708623497_13.png', '2024-02-06 08:10:43', '2024-02-22 11:38:17'),
(3, 2, 'Hotel Bathroom Collections', '1708623497_13.png', '2024-02-06 08:10:43', '2024-02-22 11:38:17'),
(4, 3, 'Hotel Bathroom Collections', '1708623497_13.png', '2024-02-06 08:10:43', '2024-02-22 11:38:17'),
(5, 4, 'Hotel Bathroom Collections', '1708623497_13.png', '2024-02-06 08:10:43', '2024-02-22 11:38:17'),
(6, 5, 'Hotel Bathroom Collections', '1708623497_13.png', '2024-02-06 08:10:43', '2024-02-22 11:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'web', 'dashboard', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(2, 'dashboard.edit', 'web', 'dashboard', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(3, 'admin.create', 'web', 'admin', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(4, 'admin.view', 'web', 'admin', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(5, 'admin.edit', 'web', 'admin', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(6, 'admin.delete', 'web', 'admin', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(7, 'admin.approve', 'web', 'admin', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(8, 'role.create', 'web', 'role', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(9, 'role.view', 'web', 'role', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(10, 'role.edit', 'web', 'role', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(11, 'role.delete', 'web', 'role', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(12, 'role.approve', 'web', 'role', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(13, 'profile.view', 'web', 'profile', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(14, 'profile.edit', 'web', 'profile', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(15, 'user.create', 'web', 'user', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(16, 'user.view', 'web', 'user', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(17, 'user.edit', 'web', 'user', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(18, 'user.delete', 'web', 'user', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(19, 'user.approve', 'web', 'user', '2024-02-01 02:08:31', '2024-02-01 02:08:31'),
(21, 'test.view', 'web', 'test', '2024-02-02 11:53:27', '2024-02-02 11:53:27'),
(22, 'test.create', 'web', 'test', '2024-02-02 11:53:27', '2024-02-02 11:53:27'),
(23, 'test.edit', 'web', 'test', '2024-02-02 11:53:27', '2024-02-02 11:53:27'),
(24, 'test.delete', 'web', 'test', '2024-02-02 11:53:27', '2024-02-02 11:53:27'),
(25, 'test2.view', 'web', 'test2', '2024-02-02 11:57:45', '2024-02-02 11:57:45');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(2, 'admin', 'web', '2024-02-01 02:10:50', '2024-02-01 02:10:50'),
(3, 'user', 'web', '2024-02-01 02:11:05', '2024-02-01 02:11:05'),
(4, 'Role All', 'web', '2024-02-06 04:09:09', '2024-02-06 04:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 4),
(4, 1),
(4, 2),
(4, 4),
(5, 1),
(5, 2),
(5, 4),
(6, 1),
(6, 2),
(6, 4),
(7, 1),
(7, 2),
(7, 4),
(8, 1),
(8, 4),
(9, 1),
(9, 4),
(10, 1),
(10, 4),
(11, 1),
(11, 4),
(12, 1),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 4),
(16, 1),
(16, 2),
(16, 4),
(17, 1),
(17, 2),
(17, 4),
(18, 1),
(18, 2),
(18, 4),
(19, 1),
(19, 2),
(19, 4),
(21, 1),
(21, 4),
(22, 1),
(22, 4),
(23, 1),
(23, 4),
(24, 1),
(24, 4),
(25, 1),
(25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomphotos`
--

CREATE TABLE `roomphotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomphotos`
--

INSERT INTO `roomphotos` (`id`, `room_id`, `photo`, `created_at`, `updated_at`) VALUES
(2, 2, '1707373628_2a51299e637a606f3ea038822ecc33a7.jpg', '2024-02-08 00:27:08', '2024-02-08 00:27:08'),
(3, 3, '1707373670_2a51299e637a606f3ea038822ecc33a7.jpg', '2024-02-08 00:27:50', '2024-02-08 00:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `wifi` enum('Yes','No') NOT NULL DEFAULT 'No',
  `bed` varchar(255) NOT NULL,
  `tv` enum('Yes','No') NOT NULL DEFAULT 'No',
  `ac` enum('Yes','No') NOT NULL DEFAULT 'No',
  `featured_photo` varchar(255) NOT NULL,
  `type` enum('accommodation','restaurant','recreation','meeting') NOT NULL DEFAULT 'accommodation',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `branch_id`, `name`, `details`, `price`, `size`, `view`, `person`, `wifi`, `bed`, `tv`, `ac`, `featured_photo`, `type`, `created_at`, `updated_at`) VALUES
(2, 1, 'GYM ( Ledis )', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'recreation', '2024-02-06 09:00:17', '2024-02-23 00:30:31'),
(3, 3, 'Room2', 'Room 2 details', '5400.00', '200sq', '2 side', '3', 'No', '2 Bed', 'No', 'No', '1707234197_333593808_3664688710435489_5237373195740798268_n.jpg', 'meeting', '2024-02-06 09:43:17', '2024-02-06 09:43:17'),
(4, 1, 'GYM (Men\'s)', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707234197_333593808_3664688710435489_5237373195740798268_n.jpg', 'recreation', '2024-02-06 09:00:17', '2024-02-23 00:31:30'),
(5, 5, 'DELUXE COUPLE ROOM', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'accommodation', '2024-02-06 09:00:17', '2024-02-23 00:26:57'),
(6, 1, 'Lebur Char Dine & Delight', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1709143478_property-5 (1).jpg', 'restaurant', '2024-02-06 09:00:17', '2024-02-28 12:04:38'),
(7, 1, 'DELUXE TWIN ROOM', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'accommodation', '2024-02-06 09:00:17', '2024-02-23 00:27:21'),
(8, 1, 'Room room', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'restaurant', '2024-02-06 09:00:17', '2024-02-22 10:33:36'),
(9, 1, 'SWIMMING POOL', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'recreation', '2024-02-06 09:00:17', '2024-02-23 00:29:10'),
(10, 1, 'Dumki Hall', 'Room detqails', '3500.00', '1200sq', '3 side', '4', 'No', '3 Bed', 'Yes', 'No', '1707231617_property-2 (1).jpg', 'meeting', '2024-02-06 09:00:17', '2024-02-23 00:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `branch_id`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@gmail.com', 'superadmin', '2024-02-01 02:08:30', '$2y$12$cVtAHF7zGyTbW76jYArExOB.KumHPTd0xa39FEojoDKZXNs/.3jIG', 'jNFQLSfxlnJvmOcXwWMf2IfTkDUJHR8JRpDwtzGM1iOUsYk6OgNfxtudrasX', NULL, '2024-02-01 02:08:30', '2024-02-01 02:08:30'),
(2, 'User', 'user@gmail.com', 'user', NULL, '$2y$12$HyfbhNgzWismGn44MaVO1.b9Sjh3DUxrpfDMaqLIkPfcS4WjJqBVO', NULL, NULL, '2024-02-01 02:11:33', '2024-02-01 22:04:16'),
(4, 'Gazi Nasim', 'gazinasim001@gmail.com', 'admin', NULL, '$2y$12$93IRr0IUC7.4tTDzu95hRuDXWyRTq/j6E8REPTOb1KiJOJZvRxMwe', NULL, NULL, '2024-02-02 09:51:50', '2024-02-02 22:47:00'),
(5, 'Test', 'test@gmail.com', 'user', NULL, '$2y$12$0AQA/e45j.XHQXAiadRmM.HYSUefw2fe/NzhX19JJ91isAaOaAVzu', NULL, NULL, '2024-02-06 04:06:41', '2024-02-06 04:06:41'),
(8, 'User', 'gazinasim01@gmail.com', 'superadmin', NULL, '$2y$12$oZTyvp2FkkkGc2w0sPawW.9uULfWJkcBoMRutXTK.kHZBvSbiuo5q', NULL, NULL, '2024-02-24 19:03:31', '2024-02-24 19:03:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchmessages`
--
ALTER TABLE `branchmessages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `branchsliders`
--
ALTER TABLE `branchsliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_infos`
--
ALTER TABLE `general_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_addres`
--
ALTER TABLE `main_addres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_sliders`
--
ALTER TABLE `main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `roomphotos`
--
ALTER TABLE `roomphotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `branch_id` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branchmessages`
--
ALTER TABLE `branchmessages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branchsliders`
--
ALTER TABLE `branchsliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_infos`
--
ALTER TABLE `general_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `main_addres`
--
ALTER TABLE `main_addres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roomphotos`
--
ALTER TABLE `roomphotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
