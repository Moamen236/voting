-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 04:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

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
(1, '2014_01_26_170830_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-01-26 18:12:19', '2022-01-26 18:12:19'),
(2, 'user', '2022-01-26 18:12:19', '2022-01-26 18:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_votes` smallint(6) DEFAULT NULL,
  `is_vote` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `image`, `number_of_votes`, `is_vote`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@info.com', '$2y$10$Wte7saSy5eUkoVSnlwbT.uiky7ZIn8VtqKLh/Jmxsc56ha1Poa9uG', NULL, NULL, NULL, NULL, 0, NULL, NULL, '2022-01-26 18:12:19', '2022-01-26 18:12:19'),
(2, 2, 'Sharif Wail', 'sharif@user.com', '$2y$10$nVAZUxuwdnTQ9Ukm0FuTKOO49jVydrmE56NrqKU0lbuQk4WO79G.K', NULL, NULL, 'images/mM7A7jKeJkAtjEGWlOnahgJQ23iIolfXmQkKPKv9.jpg', 4, 0, NULL, NULL, '2022-01-26 19:58:28', '2022-01-27 23:35:31'),
(3, 2, 'Nesim Erland', 'nesim@user.com', '$2y$10$9mV9BE3a21aJkmnERbuhsOhQKsls/ya2dzm7rQYU.LW6q/eJ.sQaK', NULL, NULL, 'images/4A03LPC5WoDqrBbuMOCGU1tajm4RH56DX2wc2SOw.jpg', 4, 0, NULL, NULL, '2022-01-26 21:44:44', '2022-01-28 01:29:44'),
(4, 2, 'Tim Berners', 'new@info.com', '$2y$10$oU1y9.fVStIDdDj/os7mrunM1G4LgSd8gx1WYXD2qzqLCuMQra.7G', NULL, NULL, 'images/H4wgVOnnhvhtSZjVgAgQY3kt0KAd0s2nlohm6TMn.jpg', NULL, 0, NULL, NULL, '2022-01-26 22:12:24', '2022-01-27 10:44:55'),
(6, 2, 'Kalypso Pwyll', 'pwyll@user.com', '$2y$10$DBEKB8BICekJHSme3JXsLezgK8QahNRvBuppkiobYjLjQeBf7D4Z6', NULL, NULL, 'images/JFcqKaFqlLrlUIUVPWKxTJRoX6s9hXtUPdUkD3pg.jpg', 1, 0, NULL, NULL, '2022-01-26 22:16:07', '2022-01-28 00:47:08'),
(7, 2, 'Jamil Abd al-Rashid', 'jamil@user.com', '$2y$10$uSLfjL3SmF/b59WsjIr37OBu7XI26s/Jm4mSnfpe45E6qimp9kW5m', NULL, NULL, 'images/FYsuy8xTj3r2JAVkzcZ6CREp7lzSzZ3EfOJzlYZE.jpg', 2, 1, NULL, NULL, '2022-01-27 10:53:40', '2022-01-28 00:47:08'),
(8, 2, 'Fawzi Toufik', 'fawzi@user.com', '$2y$10$46.18SXx1aZ/1fX/qJ11nOXsPpgprkuinJo.Q5kGh/N/XbtFLyIIO', NULL, NULL, 'images/LTnDmh8yN51HDJ6Oc7HtP3l7dntBPVUZGKTbeLZQ.jpg', 1, 1, NULL, NULL, '2022-01-27 10:54:39', '2022-01-28 00:43:03'),
(9, 2, 'Mariam Amna', 'mariam@user.com', '$2y$10$GYPefuUmuW5JhS0z4vMzAe0xaWw4tQ7eAlSCUR1q8O7KarJTcmrku', NULL, NULL, 'images/JBQtUTYSpGsgI2yGdTqweFoa0b5EMc9BCYAYSXQx.jpg', 2, 0, NULL, NULL, '2022-01-27 23:36:57', '2022-01-28 01:41:11'),
(10, 2, 'Haamid Navid', 'haamid@user.com', '$2y$10$TwMqPq6w/INSbtcjihqQvOdBUy0QLYAoo99tPmg3dJjqm.1EQOoS6', NULL, NULL, 'images/zzewTanTCXRiq5QaW9cH0SNFqqK90xA5AXGjErOK.jpg', 3, 0, NULL, NULL, '2022-01-27 23:38:13', '2022-01-28 01:41:11'),
(11, 2, 'Suhail Zayn', 'suhail@user.com', '$2y$10$N1bJlg.7RbxW7P3taAHMLOKHjS.iBzxSbI7EYrACrxn3wRTA5ihdG', NULL, NULL, 'images/LlCbYqIfH4G8hJ22XwhWBJxD5UXpRqhTpK2koJOh.jpg', 3, 0, NULL, NULL, '2022-01-27 23:38:47', '2022-01-28 01:41:12'),
(12, 2, 'Khalid Anwar', 'khalid@user.com', '$2y$10$MzGOVsOTOWPy1VwCf9X2xeW9cB6LNl4qaBXKizfuJcPFislXWv9YS', NULL, NULL, 'images/TJ2ityzhgpJ11HqiKpD1i45PyGU50jzHcMEuZ8AT.jpg', 2, 1, NULL, NULL, '2022-01-27 23:41:55', '2022-01-28 01:41:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
