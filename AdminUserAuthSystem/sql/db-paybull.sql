-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Şub 2022, 15:27:45
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db-paybull`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
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
-- Tablo için tablo yapısı `admins`
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
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admi2n@admin.com', NULL, '$2y$10$DmtbcWgcB6TYVtXPZVNCWegnUUUoY8ecTt/OtVdKIUjxUlJOL.Xl2', NULL, '2022-02-21 11:18:56', '2022-02-21 11:18:56'),
(3, 'Admin', 'adminn@admin.com', NULL, '$2y$10$HMmCiKmSU16wVHSDmFMJX.s.fRMkXNuGlQg2zkPqK4qHd1FOP7xrK', NULL, '2022-02-21 11:20:11', '2022-02-21 11:20:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `applications`
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
-- Tablo döküm verisi `applications`
--

INSERT INTO `applications` (`id`, `fullname`, `email`, `cardDetails`, `streetNumber`, `city`, `country`, `companyName`, `status_id`, `personelId`, `created_at`, `updated_at`) VALUES
(25, 'Cihat Şenel', 'cihat-cy@hotmail.com', '3213', 'Pınar mahallesi 1505 sokak no 5 daire 2 istanbul/esenyurt', 'Esenyurt', 'Türkiye', 'Celâl Bayar Üniversitesi', 3, 1, '2022-02-25 10:01:38', '2022-02-25 10:51:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `documents`
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
-- Tablo döküm verisi `documents`
--

INSERT INTO `documents` (`id`, `applications_id`, `firmaYetkiliKimlik`, `digerYetkiliKimlik`, `adresBelgesi`, `imzaSirküleri`, `vergiLevhasi`, `created_at`, `updated_at`) VALUES
(7, 15, '15/ji36vQHKsgTOhqNZKoXr5HlE4yEReNdDDdsG8g3G.pdf', '15/pEDfpMW4FUvA9eZJq8yC0Wsk9YBXilhsPz6fXov7.pdf', '15/EOvhXeGChsck3T8ibq61TME9ionwlh6RhraU7zG7.pdf', '15/sYvjWg87RFciwGzFneI11aLPRzNF4cgANnCcXxEL.pdf', '15/LCR5EpNgdUQCmC1bZIcHdSL6iJdwL59PoLljpqat.pdf', '2022-02-23 17:13:00', '2022-02-23 17:13:00'),
(10, 18, '18/firmaYetkiliKimlik.pdf', '18/digerYetkiliKimlik.pdf', '18/adresBelgesi.pdf', '18/imzaSirküleri.pdf', '18/vergiLevhasi.pdf', '2022-02-24 07:58:13', '2022-02-24 07:58:13'),
(15, 19, '19/firmaYetkiliKimlik.pdf', '19/digerYetkiliKimlik.pdf', '19/adresBelgesi.pdf', '19/imzaSirküleri.pdf', '19/vergiLevhasi.pdf', '2022-02-24 10:16:47', '2022-02-24 10:16:47'),
(16, 16, '16/firmaYetkiliKimlik.pdf', '16/digerYetkiliKimlik.pdf', '16/adresBelgesi.pdf', '16/imzaSirküleri.pdf', '16/vergiLevhasi.pdf', '2022-02-24 10:28:34', '2022-02-24 10:28:34'),
(20, 17, '17/firmaYetkiliKimlik.pdf', '17/digerYetkiliKimlik.pdf', '17/adresBelgesi.pdf', '17/imzaSirküleri.pdf', '17/vergiLevhasi.pdf', '2022-02-25 06:54:00', '2022-02-25 06:54:00'),
(25, 22, '22/firmaYetkiliKimlik.pdf', '22/digerYetkiliKimlik.pdf', '22/adresBelgesi.pdf', '22/imzaSirküleri.pdf', '22/vergiLevhasi.pdf', '2022-02-25 09:21:41', '2022-02-25 09:21:41'),
(26, 23, '23/firmaYetkiliKimlik.pdf', '23/digerYetkiliKimlik.pdf', '23/adresBelgesi.pdf', '23/imzaSirküleri.pdf', '23/vergiLevhasi.pdf', '2022-02-25 09:25:52', '2022-02-25 09:25:52'),
(27, 24, '24/firmaYetkiliKimlik.pdf', '24/digerYetkiliKimlik.pdf', '24/adresBelgesi.pdf', '24/imzaSirküleri.pdf', '24/vergiLevhasi.pdf', '2022-02-25 09:36:07', '2022-02-25 09:36:07'),
(35, 25, '25/firmaYetkiliKimlik.pdf', '25/digerYetkiliKimlik.pdf', '25/adresBelgesi.pdf', '25/imzaSirküleri.pdf', '25/vergiLevhasi.pdf', '2022-02-25 10:51:12', '2022-02-25 10:51:12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
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
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personals`
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
-- Tablo döküm verisi `personals`
--

INSERT INTO `personals` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'personal@personal.com', NULL, '$2y$10$rO5H3Rx4sYS7xLMjkalaZeDLUDeRfeGdYVC8r13roDGTylMhsQ2di', NULL, '2022-02-21 11:20:11', '2022-02-21 11:20:11'),
(4, 'asdas', 'asdasd@mail.com', NULL, '$2y$10$flW06JN5ZQ/pPnyleUaB7O6P3Ng512P6T3UQeyOu/OW5m0Rdl8eZC', NULL, '2022-02-23 07:53:04', NULL),
(5, 'adssadasd', 'asdasd@gmail.com', NULL, '$2y$10$1vZvKG5eLJf7ORAOnYpzpeginVCbFdODMndxgQz4XcF9np6whg2pC', NULL, '2022-02-23 07:56:37', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `statuses`
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
-- Tablo için tablo yapısı `users`
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
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Tablo için indeksler `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applications_email_unique` (`email`),
  ADD UNIQUE KEY `applications_carddetails_unique` (`cardDetails`);

--
-- Tablo için indeksler `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personals_email_unique` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;