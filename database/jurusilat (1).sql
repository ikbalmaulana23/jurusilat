-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2024 pada 10.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurusilat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kontingen` varchar(255) NOT NULL,
  `tanggal_hari` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Tunggal', '2024-08-01 00:19:05', '2024-08-01 00:19:05'),
(2, 'Pasangan', '2024-08-01 00:19:05', '2024-08-01 00:19:05'),
(3, 'Regu', '2024-08-01 00:19:05', '2024-08-01 00:19:05'),
(4, 'Ceritera', '2024-08-01 00:19:05', '2024-08-01 00:19:05');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_25_070425_create_jadwals_table', 1),
(5, '2024_07_30_022617_create_kategoris_table', 1),
(6, '2024_07_30_024227_create_registrasis_table', 1),
(7, '2024_07_30_024418_create_pendaftars_table', 1),
(8, '2024_07_30_040007_create_skors_table', 1);

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
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_registrasi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `jen_kelamin` varchar(255) NOT NULL,
  `tpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tb` varchar(255) NOT NULL,
  `bb` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `kontingen` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `akta_lahir` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `id_registrasi`, `id_kategori`, `jen_kelamin`, `tpt_lahir`, `tgl_lahir`, `tb`, `bb`, `kelas`, `asal_sekolah`, `golongan`, `kontingen`, `foto`, `ktp`, `akta_lahir`, `ijazah`, `created_at`, `updated_at`) VALUES
(5, 'ruben baru lagi', 4, 2, 'Laki-Laki', 'padang', '2024-08-20', '170', '70', '-', '-', 'Golongan Remaja', 'padang', NULL, NULL, NULL, NULL, '2024-08-01 01:15:51', '2024-08-01 01:28:33'),
(7, 'toha cs', 5, 3, 'Laki-Laki', 'padang', '2024-08-07', '175', '70', '-', '-', 'Golongan Dewasa', 'padang', NULL, NULL, NULL, NULL, '2024-08-01 01:34:16', '2024-08-01 01:34:16'),
(8, 'robi cs', 5, 3, 'Laki-Laki', 'jambi', '2024-08-13', '170', '60', '-', '-', 'Golongan Dewasa', 'sumsel', NULL, NULL, NULL, NULL, '2024-08-01 01:34:16', '2024-08-01 01:34:16'),
(9, 'badu cs', 5, 3, 'Laki-Laki', 'padang', '2024-08-07', '169', '60', '-', '-', 'Golongan Dewasa', 'bandung', NULL, NULL, NULL, NULL, '2024-08-01 01:34:16', '2024-08-01 01:34:16'),
(10, 'mamat cs', 5, 3, 'Laki-Laki', 'padang', '2024-08-13', '156', '70', '-', '-', 'Golongan Dewasa', 'bandung', NULL, NULL, NULL, NULL, '2024-08-01 01:34:16', '2024-08-01 01:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-01 00:21:45', '2024-08-01 00:21:45'),
(2, 1, '2024-08-01 00:56:26', '2024-08-01 00:56:26'),
(3, NULL, '2024-08-01 01:13:01', '2024-08-01 01:13:01'),
(4, NULL, '2024-08-01 01:15:51', '2024-08-01 01:15:51'),
(5, NULL, '2024-08-01 01:34:16', '2024-08-01 01:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aF4k73J939Mj4qC0nlr0G7YEkCVjFXNwxSAYXcC9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaEpmSXpKQjhGTE5QU090TlZ5eVVSZmRqMTFJQ0M2RDVBSXM2amtYRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wZXNlcnRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1722502212);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skor`
--

CREATE TABLE `skor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED DEFAULT NULL,
  `id_registrasi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_juri` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `orisinil` int(11) NOT NULL,
  `kekayaan_teknik` int(11) NOT NULL,
  `kemantapan_gerak` int(11) NOT NULL,
  `penampilan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skor`
--

INSERT INTO `skor` (`id`, `peserta_id`, `id_registrasi`, `id_juri`, `id_kategori`, `orisinil`, `kekayaan_teknik`, `kemantapan_gerak`, `penampilan`, `total`, `created_at`, `updated_at`) VALUES
(6, 7, 5, 1, 3, 25, 23, 25, 25, 98, '2024-08-01 01:38:46', '2024-08-01 01:38:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'juri1', 'juri1@gmail.com', NULL, '$2y$12$XeEFT676GbCGyLHa89rVC.TecFkQJxM2bCkKvZ7dqUyYhCtw4/i3S', NULL, '2024-08-01 00:19:06', '2024-08-01 00:19:06'),
(2, 'juri2', 'juri2@gmail.com', NULL, '$2y$12$IfHCe9DdBJTO2IFmmKvWm.q0aTjA2zqlnFB0os0scoe5r2LdODlOW', NULL, '2024-08-01 00:19:06', '2024-08-01 00:19:06'),
(3, 'juri3', 'juri3@gmail.com', NULL, '$2y$12$rtf16yx1aU2hYSfRKEiRXOYxMce7ck0bZnJyabnsxT.0kxqKpWN/W', NULL, '2024-08-01 00:19:06', '2024-08-01 00:19:06'),
(4, 'juri4', 'juri4@gmail.com', NULL, '$2y$12$vuOakxHYo.kJ1eIH7jk.WuDZqoDgKg1mn4lNcBwOKoZFJ.4fwDq5O', NULL, '2024-08-01 00:19:07', '2024-08-01 00:19:07'),
(5, 'juri5', 'juri5@gmail.com', NULL, '$2y$12$HbMJTtXaxCywTqNjLW9y2ulRxAj2vrzw5xhpoTWiP2pCSujAIWz2G', NULL, '2024-08-01 00:19:07', '2024-08-01 00:19:07'),
(6, 'admin', 'admin@gmail.com', NULL, '$2y$12$WUxRFwJ9GfYGbeY1.g/Kw.BRsujkvkYsEJUXLbcKMA6/9sCRs4G0e', NULL, '2024-08-01 00:19:08', '2024-08-01 00:19:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
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
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftar_id_registrasi_foreign` (`id_registrasi`),
  ADD KEY `pendaftar_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registrasi_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `skor`
--
ALTER TABLE `skor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skor_peserta_id_foreign` (`peserta_id`),
  ADD KEY `skor_id_registrasi_foreign` (`id_registrasi`),
  ADD KEY `skor_id_juri_foreign` (`id_juri`),
  ADD KEY `skor_id_kategori_foreign` (`id_kategori`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `skor`
--
ALTER TABLE `skor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `pendaftar_id_registrasi_foreign` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `skor`
--
ALTER TABLE `skor`
  ADD CONSTRAINT `skor_id_juri_foreign` FOREIGN KEY (`id_juri`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `skor_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `skor_id_registrasi_foreign` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi` (`id`),
  ADD CONSTRAINT `skor_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pendaftar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
