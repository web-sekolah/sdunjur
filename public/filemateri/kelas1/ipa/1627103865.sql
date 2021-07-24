-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 05:54 AM
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
(26, 'A01', 'Then She Was Gone', 'New York Times', 'C02', '1619965512.jpg', '2021-04-23 18:58:26', '2021-05-03 05:41:09'),
(27, 'A02', 'I AM WATCHING YOU', 'Terrain Group', 'T09', '1620045624.jpg', '2021-05-02 06:56:44', '2021-05-03 05:41:15'),
(28, 'A03', 'The Indigo Girl', 'Natasha Boyd', 'G09', '1620045643.jpg', '2021-05-02 06:57:20', '2021-05-03 05:41:20'),
(29, 'A04', 'The Dancing Girls', 'Chouninard', 'X01', '1620045703.jpg', '2021-05-02 06:58:30', '2021-05-03 05:41:50'),
(30, 'A05', 'When We Believed in Mermaids', 'Barbara O\'Neal', 'R07', '1620045725.jpg', '2021-05-02 07:00:07', '2021-05-03 05:42:05'),
(31, 'A06', 'The Indigo Girl Pt. II', 'Terrain Group', 'B28', '1620045743.jpg', '2021-05-02 07:00:59', '2021-05-03 05:42:23'),
(32, 'A10', 'The Girl Who Lived: A Thrilling Suspense Novel', 'Twins Group', 'H31', '1620227148.jpg', '2021-05-04 00:12:31', '2021-05-05 08:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_peminjaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_buku` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id`, `id_peminjaman`, `nama`, `judul_buku`, `tgl_pinjam`, `tgl_jatuh_tempo`, `tgl_kembali`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A01', 'Rizky', 'Nusa Indah', '2021-05-04', '2021-05-08', '2021-05-10', 1, NULL, '2021-05-03 07:03:28'),
(11, 'A02', 'Rosani', 'The Kill The Mocking Bird', '2021-04-11', '2021-04-14', '2021-04-17', 1, '2021-04-24 02:02:26', '2021-05-03 06:55:16'),
(12, 'A03', 'Ester', 'The Kill The Mocking Bird', '2021-04-25', '2021-04-29', '2021-04-28', 1, '2021-04-24 19:34:02', '2021-05-03 07:03:27'),
(13, 'A04', 'Sopianna', 'Pesona Indonesia', '2021-04-24', '2021-04-29', '2021-04-28', 1, '2021-04-24 19:34:21', '2021-05-03 03:44:17'),
(14, 'A05', 'Wordyka', 'Nusa Indah2', '2021-05-05', '2021-05-11', NULL, 0, '2021-04-24 19:34:44', '2021-05-03 07:03:26'),
(15, 'A06', 'Ahmad', 'I am watching you', '2021-05-03', '2021-05-07', NULL, 0, '2021-05-03 06:48:11', '2021-05-03 06:48:11');

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
(6, '2021_04_23_161348_create_data_peminjaman', 3),
(8, '2014_10_12_000000_create_users_table', 4),
(9, '2014_10_12_100000_create_password_resets_table', 4),
(10, '2019_08_19_000000_create_failed_jobs_table', 4),
(11, '2021_04_20_142140_create_data_buku', 4),
(12, '2021_04_23_143456_add_column_to_users_table', 5),
(13, '2021_04_24_133720_create_pengunjung_table', 5),
(14, '2021_05_01_114902_create_data_peminjaman_table', 6),
(15, '2021_05_01_122323_create_data_peminjaman', 7),
(16, '2021_05_01_123812_create_data_peminjaman', 8),
(17, '2021_05_02_120902_create_data_peminjaman', 9);

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
(1, 'Wordyka', 'Word_007', 'wordyka@gmail.com', NULL, '$2y$10$.ybVkPO8rBzTD8aXDl/L1e/QS0bcQtpfposZ0BqlNxvNFwX8cy1Ve', 'Yzn7WF6OpWd71pkrLfs2Y5tED6K3rt1jjPjOoFd9V0JSUlHNiEZR056KkroS', '2021-05-01 05:15:42', '2021-05-01 05:15:42');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
