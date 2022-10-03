-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 07:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestapp`
--

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
(2, '2022_09_29_124051_create_user_claims_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'satishadmin@hotmail.com', NULL, 1, '$2y$10$CZyhwFlBnwfvj.88kLCeF.g2/DF2J2aXf4mlwFlR2wBxJf76N0zCK', NULL, '2022-09-29 03:54:37', '2022-09-29 03:54:37'),
(2, 'Deb', 'Deb@gmail.com', NULL, 0, '$2y$10$wJ0RT9TIPxMw5PjRh4XGz.7PAvPMwZbt/9mdh0Frp2epWkVHR4g36', NULL, '2022-09-29 03:54:37', '2022-09-29 03:54:37'),
(16, 'Admin', 'satishkilariadmin@hotmail.com', NULL, 1, '$2y$10$wJ0RT9TIPxMw5PjRh4XGz.7PAvPMwZbt/9mdh0Frp2epWkVHR4g36', NULL, '2022-10-03 09:18:04', '2022-10-03 09:18:04'),
(17, 'Sai', 'sai@gmail.com', NULL, 0, '$2y$10$CZyhwFlBnwfvj.88kLCeF.g2/DF2J2aXf4mlwFlR2wBxJf76N0zCK', NULL, '2022-10-03 09:18:04', '2022-10-03 09:18:04'),
(18, 'Tirumala', 'tirumala@gmail.com', NULL, NULL, '$2y$10$KFsgECHE/slm.vR5hqBiieJyAuwZQJIQ2gQhI6.Hx1h6JHEALn7KO', NULL, '2022-10-03 09:58:02', '2022-10-03 09:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_claims`
--

CREATE TABLE `user_claims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_claims`
--

INSERT INTO `user_claims` (`id`, `user_name`, `description`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tirumala', 'tirumala@gmail.com', 10, 0, '2022-10-03 11:49:51', '2022-10-03 11:52:25'),
(2, 'Deb', 'For Internet', 100, 1, '2022-10-03 11:54:22', '2022-10-03 11:55:01'),
(3, 'Sai', 'For Transport', 1000, 0, '2022-10-03 11:58:05', '2022-10-03 11:58:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_claims`
--
ALTER TABLE `user_claims`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_claims`
--
ALTER TABLE `user_claims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
