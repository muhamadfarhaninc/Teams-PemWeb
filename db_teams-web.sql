-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2023 pada 12.30
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
  `telepon` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kad3`
--

INSERT INTO `data_kad3` (`id`, `gambar`, `nama`, `nim`, `alamat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, '230620091006.jpg', 'Muhamad Farhan', 22020057, 'Kampung durian runtuh', 812345678, 'example@gmail.com', NULL, '2023-06-20 14:10:06');

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
(1, 'visi', 'Menjadikan program studi komputerisasi akutansi yang unggul dalam menyiapkan sumber daya manusisa yang bertaqwa kepada Tuhan YME memiliki kemampuan dan etika profesi dalam bidang informatika serta berwawasan global', '2023-06-19 21:14:12', '2023-06-19 21:14:12'),
(2, 'misi', 'Meningkatkan etika profesi dan sikap profesional yang tinggi menuju efektivitas kerja berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air', '2023-06-19 21:14:12', '2023-06-19 21:14:12'),
(3, 'misi', 'Menganalisis dan mengantisipasi dinamika lingkungan usaha untuk perusahaan, konsultan, akuntan publik, perusahaan swasta, instansi pemerintah', '2023-06-19 21:14:12', '2023-06-19 21:14:12'),
(4, 'tujuan', 'Lulusan diharapkan dapat menjadi tenaga ahli madya yang memiliki kemampuan untuk mengamati, memahami, menganalisis, merancang dan membangun atau mengembangkan sistem informasi khususnya untuk bidang akuntansi (sistem informasi akuntansi) yang memiliki etika profesi dan sikap profesional yang tinggi berdasarkan ketaqwaan kepada Tuhan YME serta memiliki kecintaan terhadap tanah air', '2023-06-19 21:14:12', '2023-06-19 21:14:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_05_190606_create_todos_table', 1),
(6, '2023_06_09_122001_create_datakad3_table', 1),
(7, '2023_06_15_043312_create_content_frontpage', 1);

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
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `name`, `rating`, `picture`, `date`) VALUES
(47, 'Rina Nur Afifah', 'wihh..keren websitenya, ini mah jadi bikin semangat kalo mau belajar teh.sukses terus prodi KA', 'vesperr-2/assets/img/testimonials/testimonials1.jpg', '2023-06-20 09:29:06'),
(48, 'Dilla Siti Nur Azizah', 'wihh..keren websitenya, ini mah jadi bikin semangat kalo mau belajar teh.sukses terus prodi KA', 'vesperr-2/assets/img/testimonials/testimonials2.jpg', '2023-06-20 09:29:55'),
(49, 'Denisa Kafinah', 'kami selaku mahasiswa yang mengambil jurusan prodi komputerisasi akutansi sangat senangsekali dengan adanya website,yang memudahkan kita dalam melakukan pembelajaran.', 'vesperr-2/assets/img/testimonials/testimonials3.jpg', '2023-06-20 09:31:43'),
(50, 'Riska Oktafiani', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugi atminim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 'vesperr-2/assets/img/testimonials/testimonials4.jpg', '2023-06-20 09:31:43'),
(51, 'Muhamad Farhan', 'Saya pikir ini website oke juga, karena sudah memenuhi standar website crud dan bukan cuma itu ternyata website ini juga menggunakan dependency, api salah satunya SweetAlert dan banyak sekali fitur.', 'vesperr-2/assets/img/testimonials/testimonials5.png', '2023-06-20 09:32:29'),
(52, 'Eko Kurniawan Khannedy', 'Website nya bagus dan keren. tingkatkan lagi ya ...', 'vesperr-2/assets/img/testimonials/default.jpeg', '2023-06-20 02:46:37');

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
(1, 'Membuat website ini butuh perjuangan😊', '', '2023-06-19 21:14:21', '2023-06-19 21:14:21'),
(2, 'Nilai betul-betul !!!', 'checked', '2023-06-19 21:14:21', '2023-06-19 21:14:21'),
(3, 'Copper Canyon', '', '2023-06-19 21:14:21', '2023-06-19 21:14:21'),
(4, 'See The Unmatched Beauty Of The Great Lakes', 'checked', '2023-06-19 21:14:21', '2023-06-19 21:14:21'),
(5, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.\n                Provident, eius!', '', '2023-06-19 21:14:21', '2023-06-19 21:14:21');

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
  `verify_key` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `gambar`, `verify_key`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Farhan', 'muhamadfarhan.inc@gmail.com', '2023-06-19 21:18:09', '$2y$10$vwmsvyZHy40DC2ZU8vqKDOEbE2yda0Zt23cX515Et/UlPM9IUf8Dm', 'admin', '230620041659.png', '2oT8qt6niDSqZHgOb3cGMW7hZVHhrxOPtJlElgqVMPmQbdYWwZFDSnwqSN7EXw4cZbIMyjM3njrYQzkac3HTYSQ43dP7WNBsKurO', NULL, '2023-06-19 21:16:59', '2023-06-19 21:18:09');

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
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
