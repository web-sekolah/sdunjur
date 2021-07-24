drop database db_delibrary;
create database db_delibrary

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_delibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kontak` int(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `PASSWORD`, `nama`, `kontak`, `alamat`) VALUES
('A001', 'Rizkiokto1', 'rizki123', 'Rizki Okto S', 821344582, 'Ambarita');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `id_buku`, `judul`, `penerbit`, `rak`, `gambar`, `created_at`, `updated_at`) VALUES
(28, 'A01', 'The Indigo Girl: A Novel Kindle Edition', 'Kindle Company', 'C03', '1619342692.jpg', '2021-04-25 02:24:52', '2021-04-25 02:24:52'),
(29, 'A02', 'The Girl Who Lived: A Thrilling Suspense Novel', 'Paperback', 'G04', '1619342743.jpg', '2021-04-25 02:25:43', '2021-04-25 02:25:43'),
(30, 'A03', 'Beneath a Scarlet Sky: A Novel', 'Kindle Company', 'G05', '1619342787.jpg', '2021-04-25 02:26:27', '2021-04-25 02:26:27'),
(31, 'A04', 'Little Fires Everywhere: A Novel', 'New East Times', 'Y03', '1619342858.jpg', '2021-04-25 02:27:38', '2021-04-25 02:27:38'),
(32, 'A05', 'Hello World', 'Terrain Group', 'H02', '1619342909.jpg', '2021-04-25 02:28:29', '2021-04-26 08:24:37'),
(33, 'A06', 'When We Believed in Mermaids', 'O\'Neal Company', 'K03', '1619342978.jpg', '2021-04-25 02:29:38', '2021-04-25 02:29:38'),
(37, 'A10', 'Nusa Indah', 'Erlangga', 'T08', '1619346916.jpg', '2021-04-25 03:35:16', '2021-04-26 08:24:22'),
(38, 'haloo', 'aaaaa', 'Erlanggaaaa', 'aaaa', '1619452667.jpg', '2021-04-26 08:37:44', '2021-04-26 08:57:47'),
(41, 'dd', 'dd', 'dd', 'dd', '1619452917.jpg', '2021-04-26 09:01:33', '2021-04-26 09:01:57'),
(42, 'A09', 'Nusa Indah', 'Erlangga', 'C10', '1619501171.jpg', '2021-04-26 22:25:47', '2021-04-26 22:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_peminjaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_jatuh_tempo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id`, `id_peminjaman`, `nama`, `judul_buku`, `tgl_pinjam`, `tgl_jatuh_tempo`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Rizky', 'Nusa Indah', '2021-04-15', '2021-04-20', '2021-04-19', NULL, NULL),
(11, 'A02', 'Rosani', 'The Kill The Mocking Bird', '2021-04-23', '2021-04-28', '2021-04-27', '2021-04-24 02:02:26', '2021-04-24 02:02:26'),
(12, 'A03', 'Ester', 'The Kill The Mocking Bird', '2021-04-23', '2021-04-28', '2021-04-27', '2021-04-24 19:34:02', '2021-04-24 19:34:02'),
(13, 'A04', 'Sopianna', 'Pesona Indonesia', '2021-04-24', '2021-04-29', '2021-04-28', '2021-04-24 19:34:21', '2021-04-24 19:34:21'),
(14, 'A05', 'Wordyka', 'Nusa Indah2', '2021-04-26', '2021-04-30', '2021-04-29', '2021-04-24 19:34:44', '2021-04-24 19:34:44');

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
(4, '2021_04_20_142140_create_data_buku', 1),
(5, '2021_04_23_143456_add_column_to_users_table', 2),
(6, '2021_04_23_161348_create_data_peminjaman', 3),
(7, '2021_04_24_133720_create_pengunjung_table', 3);

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
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengunjung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terdaftar` date NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `id_pengunjung`, `nama`, `tanggal_terdaftar`, `kontak`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'P1', 'Sopianna Siagian', '2021-04-10', '+62 857 6500 8281', 'Jl.Raya Rianiate KM 5,5, Hutanamora', NULL, '2021-04-24 06:45:09'),
(4, 'P2', 'Rosani Sitinjak', '2021-04-11', '+62 834 6796 0990', 'Tuktuk', NULL, NULL),
(5, 'P3', 'Ester Berutu', '2021-04-12', '+62 8970 76587 7879', 'Pematang Siantar', NULL, NULL),
(6, 'P4', 'Wordyka Nainggolan', '2021-04-12', '+62 9879 8129 8719', 'Porsea', NULL, NULL),
(7, 'P5 ', 'Rizki Okto', '2021-04-13', '+62 7689 8789 7689', 'Tuktuk', NULL, NULL),
(8, 'P6', 'Isabella', '2021-04-14', '+62 8767 7869 8799', 'Samosir', NULL, NULL),
(9, 'P7', 'Yanti', '2021-04-15', '+62 7869 8798 7866', 'Medan', NULL, NULL),
(10, 'P8', 'Raymond', '2021-04-17', '+62 7689 9879 9867', 'Laguboti', NULL, NULL),
(11, 'P9', 'Christofel', '2021-04-18', '+62 7680 8979 8990', 'Laguboti', NULL, NULL),
(12, 'P10', 'Yeheskiel', '2021-04-20', '+62 8769 7869 7689', 'Balige', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rizki Okto', '', 'rizki@gmail.com', NULL, '$2y$10$KU4N0eCl8XXgJJhwd7bWhOAw4nYjyXKU5LnyLIsu9AL/80z9emtk2', 'HQGLF5nVNikz8z2C79wc2RQqk76u48sC7iGXveWBXRhNpB6ghtp6Zq0i3dRd', '2021-04-21 10:28:54', '2021-04-21 10:28:54'),
(3, 'Wordyka Nainggolan', '', 'wordyka99@gmail.com', NULL, '$2y$10$k95L9TSVugOmu1SmR41mXelXf47vE16WhbMxPZxA2cYb.FDMNt8lW', 'wjD2RbQRLp6Bkw5E5N5TjEOO0iO0sJnwBV5Ari3vuZFNVhjcTgndIkTnUf7n', '2021-04-23 22:33:32', '2021-04-23 22:33:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
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
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
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
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
