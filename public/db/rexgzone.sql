-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 03:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rexgzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_22_064931_create_admins_table', 2),
(4, '2019_02_22_100036_create_weekmatches_table', 2),
(5, '2019_02_22_103134_create_weeklymatches_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userImage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutMe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `dob`, `mobile`, `userImage`, `city`, `country`, `aboutMe`, `status`) VALUES
(3, 'fejin', 'fejin@gmail.com', '2019-02-21 14:17:56', '$2y$10$YEQa0xucYz.Ghyl6hCGxMuTtTwvtbKImceykyGLLJWWii94x9wQwu', NULL, '2019-02-21 14:14:01', '2019-02-21 14:17:56', '-', '8148623224', '-', '-', '-', '-', '0'),
(4, 'fejin3', 'rpf.fejin@gmail.com', '2019-02-21 14:20:06', '$2y$10$bMb1XWRKsZf8QI6JoFSgye8IwHa4Fd4wGlTfLnDBjbdxaN6cTs3Di', NULL, '2019-02-21 14:19:55', '2019-02-21 14:20:06', '-', '8148623224', 'avatar.png', '-', '-', '-', '0');

-- --------------------------------------------------------

--
-- Table structure for table `weeklymatches`
--

CREATE TABLE `weeklymatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prize` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_fee` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weeklymatches`
--

INSERT INTO `weeklymatches` (`id`, `m_title`, `m_type`, `description`, `rules`, `time_zone`, `prize`, `result`, `video`, `team_type`, `member_type`, `rating`, `categories`, `tagline`, `entry_fee`, `created_at`, `updated_at`) VALUES
(1, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 1, '2019-02-22 05:35:24', '2019-02-22 05:35:24'),
(2, 'test', 'test', 'ewfe', 'fdsfs', 'test', '23', '-', '-', 'sffs', 'test', '-', 'test', 'sfss', 1223, '2019-02-22 06:52:29', '2019-02-22 06:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `weekmatches`
--

CREATE TABLE `weekmatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rules` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_fee` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `weeklymatches`
--
ALTER TABLE `weeklymatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekmatches`
--
ALTER TABLE `weekmatches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `weeklymatches`
--
ALTER TABLE `weeklymatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weekmatches`
--
ALTER TABLE `weekmatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
