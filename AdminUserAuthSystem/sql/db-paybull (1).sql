-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 10:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-paybull`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admi2n@admin.com', NULL, '$2y$10$DmtbcWgcB6TYVtXPZVNCWegnUUUoY8ecTt/OtVdKIUjxUlJOL.Xl2', NULL, '2022-02-21 11:18:56', '2022-02-21 11:18:56'),
(3, 'Admin', 'adminn@admin.com', NULL, '$2y$10$HMmCiKmSU16wVHSDmFMJX.s.fRMkXNuGlQg2zkPqK4qHd1FOP7xrK', NULL, '2022-02-21 11:20:11', '2022-02-21 11:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cardDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `streetNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(255) NOT NULL DEFAULT 1,
  `personelId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `fullname`, `email`, `cardDetails`, `streetNumber`, `city`, `country`, `companyName`, `status_id`, `personelId`, `created_at`, `updated_at`) VALUES
(15, 'Cihat Şenel', 'dahds@hotmail.com', '213213', 'asdas', 'Esenyurt', 'Türkiye', 'Celâl Bayar Üniversitesi', 2, NULL, '2022-02-23 10:46:46', '2022-02-24 12:45:50'),
(16, 'asdas', 'asdasdafs@hotmail.com', '412098', 'Pınar mahallesi 1505 sokak no 5 daire 2 istanbul/esenyurt', 'Esenyurt', 'Türkiye', 'Celâl Bayar Üniversitesi', 1, NULL, '2022-02-23 10:52:42', '2022-02-23 10:52:58'),
(17, 'deneme', 'dene2me@hotmail.com', '22213', 'sadasd', 'Esenyurt', 'Türkiye', 'Celâl Bayar Üniversitesi', 2, 3, '2022-02-23 13:56:28', '2022-02-24 12:49:38'),
(18, 'asdas', 'csasay@hotmail.com', '21312', 'adsfasdfasfasf', 'Esenyurt', 'Türkiye', 'Celâl Bayar Üniversitesi', 1, 1, '2022-02-23 14:01:55', '2022-02-24 07:58:03'),
(19, 'mahmud', 'mahmyddd@gmail.com', '23123', 'asdasd', 'asdasd', 'asdas', 'mahmud aş', 2, 3, '2022-02-24 09:54:06', '2022-02-24 12:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applications_id` int(11) NOT NULL,
  `firmaYetkiliKimlik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digerYetkiliKimlik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresBelgesi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imzaSirküleri` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vergiLevhasi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `applications_id`, `firmaYetkiliKimlik`, `digerYetkiliKimlik`, `adresBelgesi`, `imzaSirküleri`, `vergiLevhasi`, `created_at`, `updated_at`) VALUES
(7, 15, '15/ji36vQHKsgTOhqNZKoXr5HlE4yEReNdDDdsG8g3G.pdf', '15/pEDfpMW4FUvA9eZJq8yC0Wsk9YBXilhsPz6fXov7.pdf', '15/EOvhXeGChsck3T8ibq61TME9ionwlh6RhraU7zG7.pdf', '15/sYvjWg87RFciwGzFneI11aLPRzNF4cgANnCcXxEL.pdf', '15/LCR5EpNgdUQCmC1bZIcHdSL6iJdwL59PoLljpqat.pdf', '2022-02-23 17:13:00', '2022-02-23 17:13:00'),
(10, 18, '18/firmaYetkiliKimlik.pdf', '18/digerYetkiliKimlik.pdf', '18/adresBelgesi.pdf', '18/imzaSirküleri.pdf', '18/vergiLevhasi.pdf', '2022-02-24 07:58:13', '2022-02-24 07:58:13'),
(15, 19, '19/firmaYetkiliKimlik.pdf', '19/digerYetkiliKimlik.pdf', '19/adresBelgesi.pdf', '19/imzaSirküleri.pdf', '19/vergiLevhasi.pdf', '2022-02-24 10:16:47', '2022-02-24 10:16:47'),
(16, 16, '16/firmaYetkiliKimlik.pdf', '16/digerYetkiliKimlik.pdf', '16/adresBelgesi.pdf', '16/imzaSirküleri.pdf', '16/vergiLevhasi.pdf', '2022-02-24 10:28:34', '2022-02-24 10:28:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_18_133008_create_admins_table', 1),
(6, '2022_02_19_154016_create_abouts_table', 1),
(7, '2022_02_21_094137_create_applications_table', 1),
(8, '2022_02_21_134545_create_personals_table', 1),
(9, '2022_02_23_174832_create_documents_table', 2),
(10, '2022_02_23_175422_documents', 2),
(11, '2022_02_24_143432_create_statuses_table', 3),
(12, '2022_02_24_143538_status', 3);

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
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
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
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'personal@personal.com', NULL, '$2y$10$rO5H3Rx4sYS7xLMjkalaZeDLUDeRfeGdYVC8r13roDGTylMhsQ2di', NULL, '2022-02-21 11:20:11', '2022-02-21 11:20:11'),
(4, 'asdas', 'asdasd@mail.com', NULL, '$2y$10$flW06JN5ZQ/pPnyleUaB7O6P3Ng512P6T3UQeyOu/OW5m0Rdl8eZC', NULL, '2022-02-23 07:53:04', NULL),
(5, 'adssadasd', 'asdasd@gmail.com', NULL, '$2y$10$1vZvKG5eLJf7ORAOnYpzpeginVCbFdODMndxgQz4XcF9np6whg2pC', NULL, '2022-02-23 07:56:37', NULL);

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
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Beklemede', '2022-02-24 11:42:02', '2022-02-24 11:42:02'),
(2, 'Evrak Bekleniyor', '2022-02-24 14:43:20', '2022-02-24 14:43:20'),
(3, 'Evrak İnceleniyor', '2022-02-24 14:47:01', '2022-02-24 14:47:01'),
(4, 'Tamamlandı', '2022-02-24 14:47:10', '2022-02-24 14:47:10'),
(5, 'Reddedildi', '2022-02-24 14:45:56', '2022-02-24 14:45:56'),
(6, 'Evrak Eksik', '2022-02-24 14:47:17', '2022-02-24 14:47:17');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_email_unique` (`email`),
  ADD UNIQUE KEY `applications_carddetails_unique` (`cardDetails`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personals_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
