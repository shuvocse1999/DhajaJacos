-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 08:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhakajacos_database`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MONJURUL ISLAM ajad', 'mmajad50@gmail.com', NULL, '$2y$10$Xjw00bDCZ18Ye/vAA2je0uwSMklVlW6BVI9cJ78W19lmIguJrWMd.', NULL, '2021-11-01 07:13:13', '2021-11-01 12:01:26'),
(5, 'Maxwell Barton', 'znader@yahoo.com', NULL, '$2y$10$7MObMGWXnv3iMaHHx6pem.9FTMYeNeCZ7k7B0v0seScoKgwTUZcTy', NULL, '2021-11-01 09:03:30', '2021-11-01 09:03:30'),
(6, 'Leonor Hackett DDS', 'bartholome.volkman@lockman.com', NULL, '$2y$10$n/KJ/s60YWt3Y.6IVEjdmuOBVv2kTby86tj6XLUXeHmdEdzRqXuhW', NULL, '2021-11-01 09:03:30', '2021-11-01 09:03:30'),
(8, 'Marcos Herman', 'bridget.reinger@heller.com', NULL, '$2y$10$O9LhOf/yKgKri7Y7wIshOOw3kxiMKrWQ5uiPvf3OmIGNwLP7DXRHO', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(9, 'Sidney Casper', 'uwuckert@yahoo.com', NULL, '$2y$10$kdiVylBvVzWKt0PIVWglMeCX/e93U9TO7pGUSF1MJCUIZf4ow0gLe', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(10, 'Alysa Osinski', 'gottlieb.easton@hotmail.com', NULL, '$2y$10$EOWKBcmrazfCEycEkT.Equ8ZVF11nQoMtmZZawF5O9b5.Wrw94sYW', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(11, 'Ms. Madelyn Dare IV', 'halvorson.alyson@hotmail.com', NULL, '$2y$10$O7znalCtJlAJ7ptTRIOubu.fD68Q3CVNIrRIdzAvcPd5YGuk4zXqS', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(12, 'Dr. Trevor Botsford', 'joanny.johns@gmail.com', NULL, '$2y$10$t54wjVzNNjrmTxo2wMDYwuqXJ.0u4XBhDxsgSXPN7eJ3Pq3TrFV0m', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(13, 'Lukas Cartwright Sr.', 'mdietrich@hotmail.com', NULL, '$2y$10$pc0U9K1a6pCzviHHFhnxF.mZJfQFARWJWkQ8owwPEyUNE0h2lMBDy', NULL, '2021-11-01 09:03:31', '2021-11-01 09:03:31'),
(24, 'Dhaka Jacos', 'dhakajacos@admin.com', NULL, '$2y$10$z/jgFBn1UJk6quVc49wGNO4OBCbkWcp4Kz2nvO7ZQ/bwiH7m1XyJW', NULL, '2021-11-01 09:08:36', '2021-11-01 12:00:14'),
(26, 'MONJURUL ISLAM', 'info@sbit.com.bd', NULL, '$2y$10$ln4OPfY./s2DWoktATAovOkSWfPGPZ06QvfApgV3.VCg3COHUZgIC', NULL, '2021-11-01 10:36:47', '2021-11-01 10:36:47'),
(27, 'Monjurul islam', 'ajad@gmail.com', NULL, '$2y$10$tS/XhL5H7u2ZDirU0HdewOZlxDI0nfVlBWcc/VawW3ChOIUT5xdnW', NULL, '2021-11-01 10:37:52', '2021-11-01 10:37:52'),
(28, 'Monjurul islam', 'admin@superadmin.com', NULL, '$2y$10$9JpDwJC711TC1nfFY0guA.PO8p0wLcmJyXReWBzP7uNPkvpMTyZyq', NULL, '2021-11-01 10:40:08', '2021-11-01 10:40:08'),
(29, 'Monjurul islam', 'as@g.com', NULL, '$2y$10$zQew0ORMvX5HS/ll2Z5d3uOxtVBoAAOzuokqFQ6ZnjU12TvT/8WDy', NULL, '2021-11-01 11:23:56', '2021-11-01 11:23:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
