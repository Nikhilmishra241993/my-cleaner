-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_manager_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekly_cru_cost` float NOT NULL,
  `fortnightly_cru_cost` float NOT NULL,
  `monthly_cru_cost` float NOT NULL,
  `weekly_cleaner_cost` float NOT NULL,
  `fortnightly_cleaner_cost` float NOT NULL,
  `monthly_cleaner_cost` float NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `area_code`, `area_manager_id`, `weekly_cru_cost`, `fortnightly_cru_cost`, `monthly_cru_cost`, `weekly_cleaner_cost`, `fortnightly_cleaner_cost`, `monthly_cleaner_cost`, `created_at`, `updated_at`) VALUES
(1, 'DEVON', 'PL', '1', 3, 4, 5, 9, 9, 10, NULL, NULL),
(2, 'LONDON & CROYDON', 'LC', '1', 3, 3, 3, 9, 9, 9, NULL, NULL),
(3, 'WOLVERHAMPTON', 'WV', '1', 3, 3.5, 3.5, 9, 9, 9, NULL, NULL),
(4, 'NORWICH', 'NR', '1', 2.9, 3.4, 4, 10, 10.5, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcod` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `image`, `email`, `zipcod`, `phone`) VALUES
(7, '2020-06-03 07:56:18', '2020-06-03 07:56:18', 'okol', 'mlm', '1278352765.jpg', 'nikhilak47.nik@gmail.com', '12541236', '8745896587'),
(8, '2020-06-07 04:27:26', '2020-06-07 04:27:26', 'Nikhil', 'Mishra', '568734166.jpg', 'nikhil124@gmail.com', '1452365', '8168941802');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_03_120831_create_crud_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcodes`
--

CREATE TABLE `postcodes` (
  `id` int(20) UNSIGNED NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postcodes`
--

INSERT INTO `postcodes` (`id`, `postcode`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'EX1 1', 1, '0000-00-00 00:00:00', '2020-07-22 18:16:21'),
(2, 'EX1 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(3, 'EX1 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(4, 'EX2 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(5, 'EX2 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(6, 'EX2 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(7, 'EX3 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(8, 'EX4 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(9, 'EX4 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(10, 'EX4 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(11, 'EX4 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(12, 'EX4 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(13, 'EX4 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(14, 'EX5 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(15, 'EX6 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(16, 'PL1 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(17, 'PL1 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(18, 'PL1 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(19, 'PL1 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(20, 'PL1 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(21, 'PL1 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(22, 'PL2 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(23, 'PL2 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(24, 'PL2 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(25, 'PL2 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(26, 'PL3 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(27, 'PL3 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(28, 'PL3 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(29, 'PL4 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(30, 'PL4 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(31, 'PL4 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(32, 'PL4 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(33, 'PL4 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(34, 'PL5 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(35, 'PL5 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(36, 'PL5 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(37, 'PL5 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(38, 'PL5 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(39, 'PL6 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(40, 'PL6 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(41, 'PL6 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(42, 'PL6 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(43, 'PL6 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(44, 'PL7 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(45, 'PL7 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(46, 'PL7 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(47, 'PL7 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(48, 'PL7 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(49, 'PL8 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(50, 'PL8 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(51, 'PL9 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(52, 'PL9 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(53, 'PL9 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(54, 'PL9 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(55, 'PL21 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(56, 'PL21 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(57, 'PL21 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(58, 'TQ1 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(59, 'TQ1 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(60, 'TQ1 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(61, 'TQ1 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(62, 'TQ2 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(63, 'TQ2 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(64, 'TQ2 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(65, 'TQ3 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(66, 'TQ3 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(67, 'TQ3 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(68, 'TQ4 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(69, 'TQ4 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(70, 'TQ4 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(71, 'TQ5 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(72, 'TQ5 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(73, 'TQ5 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(74, 'TQ7 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(75, 'TQ9 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(76, 'TQ11 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(77, 'TQ12 1', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(78, 'TQ12 2', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(79, 'TQ12 3', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(80, 'TQ12 4', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(81, 'TQ12 5', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(82, 'TQ12 6', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(83, 'TQ13 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(84, 'TQ13 7', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(85, 'TQ13 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(86, 'TQ14 0', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(87, 'TQ14 8', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(88, 'TQ14 9', 1, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(89, 'CR0 0', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(90, 'CR0 1', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(91, 'CR0 2', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(92, 'CR0 3', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(93, 'CR0 4', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(94, 'CR0 5', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(95, 'CR0 6', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(96, 'CR0 7', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(97, 'CR0 8', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(98, 'CR0 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(99, 'CR2 1', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(100, 'CR2 6', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(101, 'CR2 7', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(102, 'CR2 8', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(103, 'CR2 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(104, 'CR3 0', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(105, 'CR3 4', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(106, 'CR3 5', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(107, 'CR3 6', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(108, 'CR3 7', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(109, 'CR4 1', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(110, 'CR4 2', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(111, 'CR4 3', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(112, 'CR4 4', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(113, 'CR4 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(114, 'CR5 1', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(115, 'CR5 2', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(116, 'CR5 3', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(117, 'CR5 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(118, 'CR6 0', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(119, 'CR6 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(120, 'CR7 6', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(121, 'CR7 7', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(122, 'CR7 8', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21'),
(123, 'CR7 9', 2, '2020-07-22 18:16:01', '2020-07-22 18:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nikhil', 'Nikhil@gmail.com', NULL, '$2y$10$z9SFskGgY1tVSfdydMuUpuDPJWBa2XzVHJXrcpcvewcycRm3gplCW', NULL, '2020-06-07 08:19:55', '2020-06-07 08:19:55'),
(2, 'Nikhil', 'nikhilmishra241993.nm@gmail.com', NULL, '$2y$10$f/T2ja7y17F8qPqHfvMF6.TcsPqzbBVbnohJRqLa9igOnbGCq6./6', NULL, '2020-07-27 01:23:07', '2020-07-27 01:23:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `postcodes`
--
ALTER TABLE `postcodes`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postcodes`
--
ALTER TABLE `postcodes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
