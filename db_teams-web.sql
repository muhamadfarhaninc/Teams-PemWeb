-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2023 pada 07.26
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teams-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kad3`
--

CREATE TABLE `data_kad3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kad3`
--

INSERT INTO `data_kad3` (`id`, `gambar`, `nama`, `nim`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(3, '230609110621.jpg', 'Sarah Wijayanto', 22020012, 'Kampung Asukan Simanjuntak Jalan Kemanga No.90', 83801234567, 'sarah@gmail.com', NULL, '2023-06-11 22:02:28'),
(6, '230610112103.jpg', 'Syifa Nur Afifah', 22020056, 'Kampung Kenanga Simanjuntak Jalan Gima No.90', 8123453244, 'syifa@gmail.com', NULL, '2023-06-10 04:21:03'),
(7, '230610111932.png', 'Kevin', 20000010, 'Kampung durian runtuh', 89765421323, 'dadsd@gmail.com', NULL, '2023-06-10 04:19:32'),
(13, '230612050136.jpg', 'anggia sabilla', 22036253, 'jl swis artatika', 89765543227, 'gia@gmail.com', NULL, NULL),
(14, '230614084949.png', 'Garaaa.', 22020000, 'Kampuingdsgsd', 823434234234, 'aziz.inc@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `frontpage`
--

CREATE TABLE `frontpage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(20) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `frontpage`
--

INSERT INTO `frontpage` (`id`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 'visi', 'Menjadikan program studi komputerisasi akutansi yang unggul dalam menyiapkan sumber daya manusisa yang bertaqwa kepada Tuhan YME memiliki kemampuan dan etika profesi dalam bidang informatika serta berwawasan global', '2023-06-14 21:48:37', '2023-06-14 21:48:37'),
(2, 'misi', 'Meningkatkan etika profesi dan sikap profesional yang tinggi menuju efektivitas kerja berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air', '2023-06-14 21:48:37', '2023-06-14 21:48:37'),
(3, 'misi', 'Menganalisis dan mengantisipasi dinamika lingkungan usaha untuk perusahaan, konsultan, akuntan publik, perusahaan swasta, instansi pemerintah', '2023-06-14 21:48:37', '2023-06-14 21:48:37'),
(4, 'tujuan', 'Lulusan diharapkan dapat menjadi tenaga ahli madya yang memiliki kemampuan untuk mengamati, memahami, menganalisis, merancang dan membangun atau mengembangkan sistem informasi khususnya untuk bidang akuntansi (sistem informasi akuntansi) yang memiliki etika profesi dan sikap profesional yang tinggi berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air', '2023-06-14 21:48:37', '2023-06-14 21:48:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(77, '2014_10_12_000000_create_users_table', 1),
(78, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(79, '2019_08_19_000000_create_failed_jobs_table', 1),
(80, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(81, '2023_06_05_190606_create_todos_table', 1),
(82, '2023_06_09_122001_create_datakad3_table', 1),
(83, '2023_06_15_043312_create_content_frontpage', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `list` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `todos`
--

INSERT INTO `todos` (`id`, `list`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Membuat website ini butuh perjuangan😊', '', '2023-06-09 06:05:42', '2023-06-09 06:05:42'),
(2, 'Nilai betul-betul !!!', 'checked', '2023-06-09 06:05:42', '2023-06-09 06:05:42'),
(3, 'Copper Canyon', '', '2023-06-09 06:05:42', '2023-06-09 06:05:42'),
(4, 'See The Unmatched Beauty Of The Great Lakes', 'checked', '2023-06-09 06:05:42', '2023-06-09 06:05:42'),
(5, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.\n                Provident, eius!', '', '2023-06-09 06:05:42', '2023-06-09 06:05:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `gambar` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Farhan', 'muhamadfarhan.inc@gmail.com', NULL, '$2y$10$Ogu8PEcyxYVFwFgrQP68me5WpE/329RUQxoHLcuebuaG0XjKl///S', 'admin', 'example.jpg', NULL, '2023-06-09 06:05:14', '2023-06-09 06:05:14'),
(2, 'Eko Kurniawan Khannedy', 'kurniawankhannedy.inc@gmail.com', NULL, '$2y$10$j6Atd.htNOUlbCQuIpA26.BDPki.Ps3lGRjFfpHsMICNIwwMvofpW', 'user', '230610124153.png', NULL, '2023-06-09 06:05:14', '2023-06-10 20:17:24'),
(3, 'Sandhika Galih', 'wpuunpas.inc@gmail.com', NULL, '$2y$10$HhfkK8YFlNrLif.GbxvAPePAwYJEdpqgy/sdZdVvNF8ZPzkFTjFSy', 'user', '230610124026.png', NULL, '2023-06-09 06:05:14', '2023-06-10 05:40:26'),
(7, 'rinaaa', 'ina@gmail.com', NULL, '$2y$10$kXW13OSOKJXP2JTNYy0EbOYcwwTlTNggbzBB3nlMRD0CczZ0onXOi', 'user', '230611060827.jpg', NULL, '2023-06-10 23:08:27', '2023-06-10 23:08:27'),
(8, 'Denisa Kartinah', 'denisa@gmail.com', NULL, '$2y$10$2//sxo3YbRv9HqGEaGqFaeSP3KJ3GS3x1pTMIdH4QACjzY0qOz98a', 'admin', '230611060946.webp', NULL, '2023-06-10 23:09:46', '2023-06-10 23:09:46'),
(10, 'Aziz Abdul', 'example@gmail.com', NULL, '$2y$10$4xDgnluqTAjKAowWE5IVCeIk/57oqlQmbZOIjz6/N89VkitHCawjG', 'user', '230614084801.jpg', NULL, '2023-06-14 01:48:01', '2023-06-14 01:48:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kad3`
--
ALTER TABLE `data_kad3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_kad3_nim_unique` (`nim`),
  ADD UNIQUE KEY `data_kad3_telepon_unique` (`telepon`),
  ADD UNIQUE KEY `data_kad3_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `frontpage`
--
ALTER TABLE `frontpage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kad3`
--
ALTER TABLE `data_kad3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `frontpage`
--
ALTER TABLE `frontpage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
