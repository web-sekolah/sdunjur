-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 10:37 AM
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
-- Database: `db_sdunjur`
--

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen1`
--

CREATE TABLE `agamakomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen2`
--

CREATE TABLE `agamakomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen3`
--

CREATE TABLE `agamakomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen4`
--

CREATE TABLE `agamakomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen5`
--

CREATE TABLE `agamakomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamakomen6`
--

CREATE TABLE `agamakomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies1`
--

CREATE TABLE `agamareplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies2`
--

CREATE TABLE `agamareplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies3`
--

CREATE TABLE `agamareplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies4`
--

CREATE TABLE `agamareplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies5`
--

CREATE TABLE `agamareplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agamareplies6`
--

CREATE TABLE `agamareplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `indokomen1`
--

CREATE TABLE `indokomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indokomen2`
--

CREATE TABLE `indokomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indokomen3`
--

CREATE TABLE `indokomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indokomen4`
--

CREATE TABLE `indokomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indokomen5`
--

CREATE TABLE `indokomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indokomen6`
--

CREATE TABLE `indokomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies1`
--

CREATE TABLE `indoreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies2`
--

CREATE TABLE `indoreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies3`
--

CREATE TABLE `indoreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies4`
--

CREATE TABLE `indoreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies5`
--

CREATE TABLE `indoreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indoreplies6`
--

CREATE TABLE `indoreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen1`
--

CREATE TABLE `ipakomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen2`
--

CREATE TABLE `ipakomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen3`
--

CREATE TABLE `ipakomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen4`
--

CREATE TABLE `ipakomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen5`
--

CREATE TABLE `ipakomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipakomen6`
--

CREATE TABLE `ipakomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies1`
--

CREATE TABLE `ipareplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies2`
--

CREATE TABLE `ipareplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies3`
--

CREATE TABLE `ipareplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies4`
--

CREATE TABLE `ipareplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies5`
--

CREATE TABLE `ipareplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipareplies6`
--

CREATE TABLE `ipareplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen1`
--

CREATE TABLE `ipskomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen2`
--

CREATE TABLE `ipskomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen3`
--

CREATE TABLE `ipskomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen4`
--

CREATE TABLE `ipskomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen5`
--

CREATE TABLE `ipskomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipskomen6`
--

CREATE TABLE `ipskomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies1`
--

CREATE TABLE `ipsreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies2`
--

CREATE TABLE `ipsreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies3`
--

CREATE TABLE `ipsreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies4`
--

CREATE TABLE `ipsreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies5`
--

CREATE TABLE `ipsreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ipsreplies6`
--

CREATE TABLE `ipsreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas1mtk`
--

CREATE TABLE `kelas1mtk` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(15) NOT NULL,
  `Topik` varchar(255) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `waktumulai` time NOT NULL,
  `waktuselesai` time NOT NULL,
  `vidio` varchar(500) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas1mtk`
--

INSERT INTO `kelas1mtk` (`id`, `tanggal`, `hari`, `Topik`, `Judul`, `waktumulai`, `waktuselesai`, `vidio`, `file`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, '2021-07-12', 'sabtu', 'perkalian', 'Perkalian bilangan ribuan', '12:39:00', '12:40:00', 'aarvJYlQFpA', '1626068420.html', '123132', '2021-07-11 22:40:20', '2021-07-11 22:58:56'),
(7, '2021-07-12', 'senin', 'adsasdas', 'asdasd', '13:55:00', '13:55:00', 'aarvJYlQFpA', '1626073005.docx', 'lorem', '2021-07-11 23:56:45', '2021-07-11 23:56:45'),
(8, '2021-07-12', 'senin', 'adsasdas', 'asdasd', '13:55:00', '13:55:00', 'aarvJYlQFpA', '1626073006.docx', 'lorem', '2021-07-11 23:56:46', '2021-07-11 23:56:46'),
(9, '2021-07-12', 'senin', 'Penjumlahan', 'Penjumlahan dua bilangan', '14:16:00', '14:16:00', 'xKTTpRl3VN0', '1626074256.docx', 'Menjjumlahkan dua bilangan', '2021-07-12 00:17:36', '2021-07-12 00:17:36'),
(11, '2021-07-13', 'Senin', 'lorem', 'sfdfsdf', '16:19:00', '16:19:00', 'aarvJYlQFpA', '1626168323.docx', '<p>asdasdasda</p>', '2021-07-13 02:22:43', '2021-07-13 02:25:23'),
(12, '2021-07-13', 'Senin', 'Fungsi Kuadrat3', 'asdasd', '16:36:00', '16:36:00', NULL, NULL, NULL, '2021-07-13 02:37:10', '2021-07-13 02:37:10'),
(13, '2021-07-18', 'Rabu', 'lorem', 'asdasda', '21:41:00', '21:41:00', 'xKTTpRl3VN0', NULL, NULL, '2021-07-18 07:42:10', '2021-07-18 07:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `kls1mtksubmision`
--

CREATE TABLE `kls1mtksubmision` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bataswaktu` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kls1mtksubmision`
--

INSERT INTO `kls1mtksubmision` (`id`, `judul`, `bataswaktu`, `created_at`, `updated_at`) VALUES
(1, 'mardan', '2021-07-20 20:06:00', '2021-07-20 06:09:32', '2021-07-20 06:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `kls1mtksubmitan`
--

CREATE TABLE `kls1mtksubmitan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submit_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kls1mtksubmitan`
--

INSERT INTO `kls1mtksubmitan` (`id`, `nama`, `file`, `submit_id`, `created_at`, `updated_at`) VALUES
(3, 'bobiar', '1626788409.jpg', 1, '2021-07-20 06:40:09', '2021-07-20 06:40:09'),
(4, 'bobiar', 'C:\\xampp\\tmp\\php2051.tmp', 1, '2021-07-20 13:58:35', '2021-07-20 13:58:35'),
(5, 'bobiar', '1626789515.jpg', 1, '2021-07-20 13:58:35', '2021-07-20 13:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `kuismatka`
--

CREATE TABLE `kuismatka` (
  `id` int(11) NOT NULL,
  `topik` varchar(60) NOT NULL,
  `waktumulai` time NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuismatka`
--

INSERT INTO `kuismatka` (`id`, `topik`, `waktumulai`, `tanggal`, `keterangan`, `link`, `created_at`, `updated_at`) VALUES
(36, 'Kuis Penjumlahan', '10:46:00', '2021-07-20', '<p>adsda</p>', 'https://quizizz.com/join?gc=0729344&from=challengeFriends', '2021-07-19 20:43:39', '2021-07-19 20:43:39'),
(37, 'Kuis Dadakan', '14:39:00', '2021-07-20', '<p>Mantap JIwa</p>', 'https://quizizz.com/join?gc=0729344&from=challengeFriends', '2021-07-20 00:40:11', '2021-07-20 00:40:11'),
(38, 'Kuis Dadakan', '14:43:00', '2021-07-20', '<p>Kuis Dadakan</p>', 'https://quizizz.com/join?gc=0729344&from=challengeFriends', '2021-07-20 00:40:45', '2021-07-20 00:40:45');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_07_08_131405_user', 1),
(10, '2021_07_11_075428_create_table_kelas1mtk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen1`
--

CREATE TABLE `mtkkomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen2`
--

CREATE TABLE `mtkkomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen3`
--

CREATE TABLE `mtkkomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mtkkomen3`
--

INSERT INTO `mtkkomen3` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'rizkiokto', '<p>horas</p>', '2021-07-21 08:15:25', '2021-07-21 08:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen4`
--

CREATE TABLE `mtkkomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen5`
--

CREATE TABLE `mtkkomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkkomen6`
--

CREATE TABLE `mtkkomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies1`
--

CREATE TABLE `mtkreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies2`
--

CREATE TABLE `mtkreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mtkreplies2`
--

INSERT INTO `mtkreplies2` (`id`, `comment_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'rizkiokto', '<p>horas</p>', '2021-07-21 08:16:10', '2021-07-21 08:16:10'),
(2, 1, 'rizkiokto', '<p>horas</p>', '2021-07-21 08:16:10', '2021-07-21 08:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies3`
--

CREATE TABLE `mtkreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mtkreplies3`
--

INSERT INTO `mtkreplies3` (`id`, `comment_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'rizkiokto', '<p>horas</p>', '2021-07-21 08:15:31', '2021-07-21 08:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies4`
--

CREATE TABLE `mtkreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies5`
--

CREATE TABLE `mtkreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mtkreplies6`
--

CREATE TABLE `mtkreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mtkreplies6`
--

INSERT INTO `mtkreplies6` (`id`, `comment_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'rizkiokto', '<p>horas</p>', '2021-07-21 08:27:10', '2021-07-21 08:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen1`
--

CREATE TABLE `mulokkomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen2`
--

CREATE TABLE `mulokkomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen3`
--

CREATE TABLE `mulokkomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen4`
--

CREATE TABLE `mulokkomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen5`
--

CREATE TABLE `mulokkomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokkomen6`
--

CREATE TABLE `mulokkomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies1`
--

CREATE TABLE `mulokreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies2`
--

CREATE TABLE `mulokreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies3`
--

CREATE TABLE `mulokreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies4`
--

CREATE TABLE `mulokreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies5`
--

CREATE TABLE `mulokreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mulokreplies6`
--

CREATE TABLE `mulokreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pjkkomen1`
--

CREATE TABLE `pjkkomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkkomen2`
--

CREATE TABLE `pjkkomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkkomen3`
--

CREATE TABLE `pjkkomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkkomen4`
--

CREATE TABLE `pjkkomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkkomen5`
--

CREATE TABLE `pjkkomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkkomen6`
--

CREATE TABLE `pjkkomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies1`
--

CREATE TABLE `pjkreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies2`
--

CREATE TABLE `pjkreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies3`
--

CREATE TABLE `pjkreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies4`
--

CREATE TABLE `pjkreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies5`
--

CREATE TABLE `pjkreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pjkreplies6`
--

CREATE TABLE `pjkreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen1`
--

CREATE TABLE `ppknkomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen2`
--

CREATE TABLE `ppknkomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen3`
--

CREATE TABLE `ppknkomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen4`
--

CREATE TABLE `ppknkomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen5`
--

CREATE TABLE `ppknkomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknkomen6`
--

CREATE TABLE `ppknkomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies1`
--

CREATE TABLE `ppknreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies2`
--

CREATE TABLE `ppknreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies3`
--

CREATE TABLE `ppknreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies4`
--

CREATE TABLE `ppknreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies5`
--

CREATE TABLE `ppknreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppknreplies6`
--

CREATE TABLE `ppknreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen1`
--

CREATE TABLE `senbudkomen1` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen2`
--

CREATE TABLE `senbudkomen2` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen3`
--

CREATE TABLE `senbudkomen3` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen4`
--

CREATE TABLE `senbudkomen4` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen5`
--

CREATE TABLE `senbudkomen5` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudkomen6`
--

CREATE TABLE `senbudkomen6` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies1`
--

CREATE TABLE `senbudreplies1` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies2`
--

CREATE TABLE `senbudreplies2` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies3`
--

CREATE TABLE `senbudreplies3` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies4`
--

CREATE TABLE `senbudreplies4` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies5`
--

CREATE TABLE `senbudreplies5` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senbudreplies6`
--

CREATE TABLE `senbudreplies6` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_kelas1mtk`
--

CREATE TABLE `table_kelas1mtk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Rizki Okto', 'rizkiokto@gmail.com', 'if420033', '12345678', NULL, '12345678', NULL, '2021-07-13 06:38:41', '2021-07-13 06:38:41'),
(6, 'rizkiokto', 'rizkiokto12@gmail.com', 'if4200330', 'siswa', NULL, '$2y$10$6TAmPoe9xINkmBtxjtMMz.6Xo0jyYqKGMdavdV0ZwxVJivDxGzzTy', NULL, '2021-07-13 07:12:20', '2021-07-13 07:12:20'),
(7, 'rizkiokto', 'rizkiokto31@gmail.com', 'rizkiokto1', 'guru', NULL, '$2y$10$MqLxizyU1C7NBsfjlpc.YepW3b32EQi17rkoHDBKlhmWEIKQMpc0K', NULL, '2021-07-13 07:18:02', '2021-07-13 07:18:02'),
(8, 'bobiar', 'wordyka@gmail.com', 'admin01', 'guru', NULL, '$2y$10$.uhyBfEsMVAIuuHJju0IcO1wAT4yKZj69isBf0fosEWtBLA7uncmm', NULL, '2021-07-14 02:26:35', '2021-07-14 02:26:35'),
(9, 'casas', 'scacsca@gmail.com', 'scasc', 'siswa', NULL, '$2y$10$iEdP.rsqf4fUORPibZ/IXOtYJTy0hQLGkVB.OUyIRP2BPWCVlAAiu', NULL, '2021-07-14 02:36:57', '2021-07-14 02:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agamakomen1`
--
ALTER TABLE `agamakomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamakomen2`
--
ALTER TABLE `agamakomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamakomen3`
--
ALTER TABLE `agamakomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamakomen4`
--
ALTER TABLE `agamakomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamakomen5`
--
ALTER TABLE `agamakomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamakomen6`
--
ALTER TABLE `agamakomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies1`
--
ALTER TABLE `agamareplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies2`
--
ALTER TABLE `agamareplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies3`
--
ALTER TABLE `agamareplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies4`
--
ALTER TABLE `agamareplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies5`
--
ALTER TABLE `agamareplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agamareplies6`
--
ALTER TABLE `agamareplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `indokomen1`
--
ALTER TABLE `indokomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indokomen2`
--
ALTER TABLE `indokomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indokomen3`
--
ALTER TABLE `indokomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indokomen4`
--
ALTER TABLE `indokomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indokomen5`
--
ALTER TABLE `indokomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indokomen6`
--
ALTER TABLE `indokomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies1`
--
ALTER TABLE `indoreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies2`
--
ALTER TABLE `indoreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies3`
--
ALTER TABLE `indoreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies4`
--
ALTER TABLE `indoreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies5`
--
ALTER TABLE `indoreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indoreplies6`
--
ALTER TABLE `indoreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen1`
--
ALTER TABLE `ipakomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen2`
--
ALTER TABLE `ipakomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen3`
--
ALTER TABLE `ipakomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen4`
--
ALTER TABLE `ipakomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen5`
--
ALTER TABLE `ipakomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipakomen6`
--
ALTER TABLE `ipakomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies1`
--
ALTER TABLE `ipareplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies2`
--
ALTER TABLE `ipareplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies3`
--
ALTER TABLE `ipareplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies4`
--
ALTER TABLE `ipareplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies5`
--
ALTER TABLE `ipareplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipareplies6`
--
ALTER TABLE `ipareplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen1`
--
ALTER TABLE `ipskomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen2`
--
ALTER TABLE `ipskomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen3`
--
ALTER TABLE `ipskomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen4`
--
ALTER TABLE `ipskomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen5`
--
ALTER TABLE `ipskomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipskomen6`
--
ALTER TABLE `ipskomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies1`
--
ALTER TABLE `ipsreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies2`
--
ALTER TABLE `ipsreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies3`
--
ALTER TABLE `ipsreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies4`
--
ALTER TABLE `ipsreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies5`
--
ALTER TABLE `ipsreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipsreplies6`
--
ALTER TABLE `ipsreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas1mtk`
--
ALTER TABLE `kelas1mtk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kls1mtksubmision`
--
ALTER TABLE `kls1mtksubmision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kls1mtksubmitan`
--
ALTER TABLE `kls1mtksubmitan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuismatka`
--
ALTER TABLE `kuismatka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen1`
--
ALTER TABLE `mtkkomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen2`
--
ALTER TABLE `mtkkomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen3`
--
ALTER TABLE `mtkkomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen4`
--
ALTER TABLE `mtkkomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen5`
--
ALTER TABLE `mtkkomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkkomen6`
--
ALTER TABLE `mtkkomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies1`
--
ALTER TABLE `mtkreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies2`
--
ALTER TABLE `mtkreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies3`
--
ALTER TABLE `mtkreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies4`
--
ALTER TABLE `mtkreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies5`
--
ALTER TABLE `mtkreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mtkreplies6`
--
ALTER TABLE `mtkreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen1`
--
ALTER TABLE `mulokkomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen2`
--
ALTER TABLE `mulokkomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen3`
--
ALTER TABLE `mulokkomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen4`
--
ALTER TABLE `mulokkomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen5`
--
ALTER TABLE `mulokkomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokkomen6`
--
ALTER TABLE `mulokkomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies1`
--
ALTER TABLE `mulokreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies2`
--
ALTER TABLE `mulokreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies3`
--
ALTER TABLE `mulokreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies4`
--
ALTER TABLE `mulokreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies5`
--
ALTER TABLE `mulokreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulokreplies6`
--
ALTER TABLE `mulokreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pjkkomen1`
--
ALTER TABLE `pjkkomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkkomen2`
--
ALTER TABLE `pjkkomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkkomen3`
--
ALTER TABLE `pjkkomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkkomen4`
--
ALTER TABLE `pjkkomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkkomen5`
--
ALTER TABLE `pjkkomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkkomen6`
--
ALTER TABLE `pjkkomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies1`
--
ALTER TABLE `pjkreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies2`
--
ALTER TABLE `pjkreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies3`
--
ALTER TABLE `pjkreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies4`
--
ALTER TABLE `pjkreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies5`
--
ALTER TABLE `pjkreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pjkreplies6`
--
ALTER TABLE `pjkreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen1`
--
ALTER TABLE `ppknkomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen2`
--
ALTER TABLE `ppknkomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen3`
--
ALTER TABLE `ppknkomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen4`
--
ALTER TABLE `ppknkomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen5`
--
ALTER TABLE `ppknkomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknkomen6`
--
ALTER TABLE `ppknkomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies1`
--
ALTER TABLE `ppknreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies2`
--
ALTER TABLE `ppknreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies3`
--
ALTER TABLE `ppknreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies4`
--
ALTER TABLE `ppknreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies5`
--
ALTER TABLE `ppknreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppknreplies6`
--
ALTER TABLE `ppknreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen1`
--
ALTER TABLE `senbudkomen1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen2`
--
ALTER TABLE `senbudkomen2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen3`
--
ALTER TABLE `senbudkomen3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen4`
--
ALTER TABLE `senbudkomen4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen5`
--
ALTER TABLE `senbudkomen5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudkomen6`
--
ALTER TABLE `senbudkomen6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies1`
--
ALTER TABLE `senbudreplies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies2`
--
ALTER TABLE `senbudreplies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies3`
--
ALTER TABLE `senbudreplies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies4`
--
ALTER TABLE `senbudreplies4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies5`
--
ALTER TABLE `senbudreplies5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senbudreplies6`
--
ALTER TABLE `senbudreplies6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_kelas1mtk`
--
ALTER TABLE `table_kelas1mtk`
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
-- AUTO_INCREMENT for table `agamakomen1`
--
ALTER TABLE `agamakomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agamakomen2`
--
ALTER TABLE `agamakomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamakomen3`
--
ALTER TABLE `agamakomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamakomen4`
--
ALTER TABLE `agamakomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamakomen5`
--
ALTER TABLE `agamakomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamakomen6`
--
ALTER TABLE `agamakomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamareplies1`
--
ALTER TABLE `agamareplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agamareplies2`
--
ALTER TABLE `agamareplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamareplies3`
--
ALTER TABLE `agamareplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamareplies4`
--
ALTER TABLE `agamareplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamareplies5`
--
ALTER TABLE `agamareplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agamareplies6`
--
ALTER TABLE `agamareplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indokomen1`
--
ALTER TABLE `indokomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `indokomen2`
--
ALTER TABLE `indokomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indokomen3`
--
ALTER TABLE `indokomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indokomen4`
--
ALTER TABLE `indokomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indokomen5`
--
ALTER TABLE `indokomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indokomen6`
--
ALTER TABLE `indokomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indoreplies1`
--
ALTER TABLE `indoreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `indoreplies2`
--
ALTER TABLE `indoreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indoreplies3`
--
ALTER TABLE `indoreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indoreplies4`
--
ALTER TABLE `indoreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indoreplies5`
--
ALTER TABLE `indoreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indoreplies6`
--
ALTER TABLE `indoreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipakomen1`
--
ALTER TABLE `ipakomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ipakomen2`
--
ALTER TABLE `ipakomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipakomen3`
--
ALTER TABLE `ipakomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipakomen4`
--
ALTER TABLE `ipakomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipakomen5`
--
ALTER TABLE `ipakomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipakomen6`
--
ALTER TABLE `ipakomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipareplies1`
--
ALTER TABLE `ipareplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ipareplies2`
--
ALTER TABLE `ipareplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipareplies3`
--
ALTER TABLE `ipareplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipareplies4`
--
ALTER TABLE `ipareplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipareplies5`
--
ALTER TABLE `ipareplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipareplies6`
--
ALTER TABLE `ipareplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipskomen1`
--
ALTER TABLE `ipskomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ipskomen2`
--
ALTER TABLE `ipskomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipskomen3`
--
ALTER TABLE `ipskomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipskomen4`
--
ALTER TABLE `ipskomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipskomen5`
--
ALTER TABLE `ipskomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipskomen6`
--
ALTER TABLE `ipskomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipsreplies1`
--
ALTER TABLE `ipsreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ipsreplies2`
--
ALTER TABLE `ipsreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipsreplies3`
--
ALTER TABLE `ipsreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipsreplies4`
--
ALTER TABLE `ipsreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipsreplies5`
--
ALTER TABLE `ipsreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipsreplies6`
--
ALTER TABLE `ipsreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas1mtk`
--
ALTER TABLE `kelas1mtk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kls1mtksubmision`
--
ALTER TABLE `kls1mtksubmision`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kls1mtksubmitan`
--
ALTER TABLE `kls1mtksubmitan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kuismatka`
--
ALTER TABLE `kuismatka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mtkkomen1`
--
ALTER TABLE `mtkkomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `mtkkomen2`
--
ALTER TABLE `mtkkomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtkkomen3`
--
ALTER TABLE `mtkkomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtkkomen4`
--
ALTER TABLE `mtkkomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtkkomen5`
--
ALTER TABLE `mtkkomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtkkomen6`
--
ALTER TABLE `mtkkomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtkreplies1`
--
ALTER TABLE `mtkreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mtkreplies2`
--
ALTER TABLE `mtkreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mtkreplies3`
--
ALTER TABLE `mtkreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mtkreplies4`
--
ALTER TABLE `mtkreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtkreplies5`
--
ALTER TABLE `mtkreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mtkreplies6`
--
ALTER TABLE `mtkreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mulokkomen1`
--
ALTER TABLE `mulokkomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mulokkomen2`
--
ALTER TABLE `mulokkomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokkomen3`
--
ALTER TABLE `mulokkomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokkomen4`
--
ALTER TABLE `mulokkomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokkomen5`
--
ALTER TABLE `mulokkomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokkomen6`
--
ALTER TABLE `mulokkomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokreplies1`
--
ALTER TABLE `mulokreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mulokreplies2`
--
ALTER TABLE `mulokreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokreplies3`
--
ALTER TABLE `mulokreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokreplies4`
--
ALTER TABLE `mulokreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokreplies5`
--
ALTER TABLE `mulokreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mulokreplies6`
--
ALTER TABLE `mulokreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkkomen1`
--
ALTER TABLE `pjkkomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pjkkomen2`
--
ALTER TABLE `pjkkomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkkomen3`
--
ALTER TABLE `pjkkomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkkomen4`
--
ALTER TABLE `pjkkomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkkomen5`
--
ALTER TABLE `pjkkomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkkomen6`
--
ALTER TABLE `pjkkomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkreplies1`
--
ALTER TABLE `pjkreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pjkreplies2`
--
ALTER TABLE `pjkreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkreplies3`
--
ALTER TABLE `pjkreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkreplies4`
--
ALTER TABLE `pjkreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkreplies5`
--
ALTER TABLE `pjkreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pjkreplies6`
--
ALTER TABLE `pjkreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknkomen1`
--
ALTER TABLE `ppknkomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ppknkomen2`
--
ALTER TABLE `ppknkomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknkomen3`
--
ALTER TABLE `ppknkomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknkomen4`
--
ALTER TABLE `ppknkomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknkomen5`
--
ALTER TABLE `ppknkomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknkomen6`
--
ALTER TABLE `ppknkomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknreplies1`
--
ALTER TABLE `ppknreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ppknreplies2`
--
ALTER TABLE `ppknreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknreplies3`
--
ALTER TABLE `ppknreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknreplies4`
--
ALTER TABLE `ppknreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknreplies5`
--
ALTER TABLE `ppknreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppknreplies6`
--
ALTER TABLE `ppknreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudkomen1`
--
ALTER TABLE `senbudkomen1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `senbudkomen2`
--
ALTER TABLE `senbudkomen2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudkomen3`
--
ALTER TABLE `senbudkomen3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudkomen4`
--
ALTER TABLE `senbudkomen4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudkomen5`
--
ALTER TABLE `senbudkomen5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudkomen6`
--
ALTER TABLE `senbudkomen6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudreplies1`
--
ALTER TABLE `senbudreplies1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `senbudreplies2`
--
ALTER TABLE `senbudreplies2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudreplies3`
--
ALTER TABLE `senbudreplies3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudreplies4`
--
ALTER TABLE `senbudreplies4`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudreplies5`
--
ALTER TABLE `senbudreplies5`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senbudreplies6`
--
ALTER TABLE `senbudreplies6`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_kelas1mtk`
--
ALTER TABLE `table_kelas1mtk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
