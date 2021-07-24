-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 04:57 PM
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
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terdaftar` date DEFAULT NULL,
  `kontak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_peminjaman` enum('Bebas','Meminjam') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Bebas',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `nama`, `jenis_kelamin`, `tanggal_terdaftar`, `kontak`, `alamat`, `status_peminjaman`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Sopianna Siagian', 'Perempuan', '2021-05-01', '6285765008281', 'Samosir', 'Bebas', '1620895801.png', '2021-05-12 18:50:01', '2021-05-13 06:23:17'),
(6, 'Angelia Malau', 'Perempuan', '2021-05-01', '+6281234336756', 'Samosir', 'Meminjam', '1620895851.png', '2021-05-12 18:50:51', '2021-05-13 06:23:35'),
(7, 'Easter Sianipar', 'Perempuan', '2021-05-02', '+6282189677788', 'Bogor', 'Bebas', '1620895899.png', '2021-05-12 18:51:39', '2021-05-13 06:23:50'),
(8, 'Ester Berutu', 'Perempuan', '2021-05-03', '+628237441120', 'Medan', 'Bebas', '1620895951.png', '2021-05-12 18:52:31', '2021-05-13 06:24:04'),
(9, 'Grace Pardosi', 'Perempuan', '2021-05-04', '+628767552277', 'Pematang Siantar', 'Meminjam', '1620896005.png', '2021-05-12 18:53:25', '2021-05-13 06:24:17'),
(10, 'Joseph Naibaho', 'Laki-Laki', '2021-05-04', '+628678995543', 'Pangururan', 'Bebas', '1620896067.png', '2021-05-12 18:54:27', '2021-05-13 06:24:29'),
(11, 'Kania', 'Perempuan', '2021-05-05', '+6282345456789', 'Balige', 'Meminjam', '1620896162.png', '2021-05-12 18:56:02', '2021-05-13 06:24:43'),
(12, 'Putri Simamora', 'Perempuan', '2021-05-08', '+6282345678900', 'Medan', 'Meminjam', '1620896363.png', '2021-05-12 18:59:23', '2021-05-13 06:24:53'),
(13, 'Regina', 'Perempuan', '2021-05-09', '+6287653456789', 'Sidikalang', 'Bebas', '1620896418.png', '2021-05-12 19:00:18', '2021-05-13 06:25:07'),
(14, 'Rizki Situmorang', 'Laki-Laki', '2021-05-10', '+6281234567890', 'Tuktuk', 'Meminjam', '1620896460.png', '2021-05-12 19:01:00', '2021-05-13 06:25:26'),
(15, 'Niar Simbolon', 'Perempuan', '2021-05-10', '+6289001239878', 'Hutanamora', 'Bebas', '1620896501.png', '2021-05-12 19:01:41', '2021-05-13 06:25:40'),
(16, 'Rosani Sitinjak', 'Perempuan', '2021-05-11', '+6281234567890', 'Simanindo', 'Bebas', '1620896549.png', '2021-05-12 19:02:29', '2021-05-13 06:25:58'),
(17, 'Sophia Tambunan', 'Perempuan', '2021-05-11', '+6289345671234', 'Pangururan', 'Bebas', '1620896613.png', '2021-05-12 19:03:33', '2021-05-13 06:26:12'),
(18, 'Tria Tampubolon', 'Perempuan', '2021-05-12', '+6281234567654', 'Humbahas', 'Meminjam', '1620896778.png', '2021-05-12 19:06:18', '2021-05-13 06:26:27'),
(19, 'Wordyka Nainggolan', 'Laki-Laki', '2021-05-13', '+6287656788765', 'Laguboti', 'Bebas', '1620896815.png', '2021-05-12 19:06:55', '2021-05-13 06:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_buku` tinyint(1) NOT NULL DEFAULT 0,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id`, `id_buku`, `judul`, `penerbit`, `lokasi`, `gambar`, `status_buku`, `kategori`, `jumlah_buku`, `deskripsi`, `bahasa`, `keterangan`, `tahun`, `subjek`, `created_at`, `updated_at`) VALUES
(5, '', 'Bad Player', 'PT Gramedia Widiasarana Indonesia', 'Lt1, A03', '1620831442.jpg', 1, 'Novel Fiksi', 4, 'Shaenette Jevina Argadhika punya julukan sebagai bad Barbie. Ia gadis cantik yang sombong dan tahu betul cara menyakiti hati orang lain. Sementara itu, Gavin Adibrata adalah kebalikannya. Hampir semua orang menyukainya. Akan tetapi, bagi Shaen, Gavin hanya seorang playboy yang jago matematika dengan segudang rencana licik. Keduanya saling bermusuhan. Walaupun demikian, apakah keduanya benar-benar tidak dapat disatukan?', 'Bahasa Indonesia', 'Original', '2018', 'Novel', '2021-05-12 00:57:22', '2021-05-13 07:02:55'),
(6, '', 'Tengah hari di spijkenisse', 'PT Pustaka Alvabet', 'Lt.1, B05', '1620831614.jpg', 1, 'Novel Fiksi', 5, 'Novel ini berkisah seorang pemuda Indonesia yang bekerja sebagai asisten terapis untuk para pasisen yang telah mendapatkan perawtan medis tetapi perlu pemulihan lebih lanjut. Novel ini menggambarkan perihal profesionalisme, pengorbanan, kekuatan memegang prinsip dan keyakinan, keteguhan hati dalam situasi dilematik, kesabaran menghadapi dan menyelesaikan persoalan, cinta segitiga yang menguras emosi, serta persahabatan beda bangsa yang dipertemukan dan dipertautkan oleh sejarah masa lalu.', 'Bahasa Indonesia', 'Original', '2018', 'Novel', '2021-05-12 01:00:14', '2021-05-13 07:03:34'),
(7, '', 'CahayaMu Tak Bisa Kutawar : Novel Biografi Mahfud MD', 'Ar-Ruzz Media', 'Lt.1, G09', '1620831738.jpg', 0, 'Novel Nonfiksi', 4, 'Menceritakan kembali masa lalu Mahfud MD dalam bentuk novel berdasarkan kejadian nyata. Aguk Irawan mampu menghidupkan kembali masa lalu Mahfud MD, mengantarkan kita seolah-olah mengalami apa yang dirasakan oleh Mahfud MD dan tokoh-tokoh yang dikisahkan di dalamnya.', 'Bahasa Indonesia', 'Original', '2017', 'Novel', '2021-05-12 01:02:18', '2021-05-12 01:02:18'),
(8, '', 'Pemrograman android & database', 'PT Elex Media Komputindo', 'Lt.2, B02', '1620832081.jpg', 1, 'Nonfiksi', 4, 'Buku ini membahas cara untuk membuat aplikasi Android yang memerlukan penyimpanan data, baik di penyimpanan internal pada perangkat android maupun pada penyimpanan eksternal yang disimpan di server. Juga membahas dasar-dasar yang digunakan untuk menyusun aplikasi berbasis database, dasar-dasar pembuatan skrip PHP, termauk untuk mengakses MySQL, dengan maksud agar dapat mempraktikkan pengaksesan database MySQL dengan mudah. Materi dibahas langkah demi langkah sehingga memudahkan bagi siapa saja untuk mempraktiknnya. Dasar-dasar pemrograman Web diberikan dari HTML, CSS, JavaScript, JQuery, hingga PHP. Juga contoh aplikasi Android untuk mengelola data inventori laboratorium dan juga aplikasi internet of things untuk mengontrol sejumlah lampu.', 'Bahasa Indonesia', 'Original', '2018', 'Buku Teks', '2021-05-12 01:08:01', '2021-05-13 07:03:02'),
(9, '', 'Otodidak pemrograman ruby untuk pemula', 'PT. Elex Media Komputindo', 'Lt.2, G04', '1620832193.jpg', 0, 'Nonfiksi', 3, NULL, 'Bahasa Indonesia', 'Original', '2018', 'Buku Teks', '2021-05-12 01:09:53', '2021-05-12 01:09:53'),
(10, '', 'Panduan lengkap perakitan komputer', 'Lembaga Kajian Profesi', 'Lt.3, H03', '1620832341.jpg', 1, 'Nonfiksi', 3, NULL, 'Bahasa Indonesia', 'Original', '2018', 'Buku Teks', '2021-05-12 01:12:21', '2021-05-13 07:03:26'),
(11, '', 'Biologi molekuler dalam perspektif konservasi', 'Plantaxia', 'Lt.3, C12', '1620832535.jpg', 1, 'Nonfiksi', 2, 'Buku ini akan mengupas tuntas teori dan praktik taksonomi molekuler, memberikan gambaran penelitian taksonomi molekuler dalam konservasi pelestarian suatu spesies.', 'Bahasa Indonesia', 'Original', '2015', 'Buku Teks', '2021-05-12 01:15:35', '2021-05-13 07:03:13'),
(12, '', 'Image processing system', 'Jendela Sastra Indonesia Press', 'Lt.3, Y01', '1620832779.jpg', 0, 'Nonfiksi', 4, 'ENVI (The Enviroment foisusalizing Images) merupakan software pengindraan jauh yang menyediakan data visualisasi menyeluruh serta analisa citra dalam berbagai ukuran dan tie yang mudah untuk dioperasikan. Melalui buku ini pembaca memperkenalkan dengan berbagai jenis data, image fusion, koreksi citra, dan pengolahan citra digital yang meliputi DEM (Digital Elevation Model) serta klasifikasi vegetasi. Buku ini diharapkan dapat bermanfaat bagi para pengguna dalam menyelesaikan berbagai analisis citra baik dilingkungan akademik maupun umum. Isi buku ini terbagi menjadi empat bab, meliputi; supported data, explore imagery, correction data, dan image processing.', 'Bahasa Inggris', 'Original', '2020', 'Buku Teks', '2021-05-12 01:19:39', '2021-05-12 01:19:39'),
(13, '', 'Posthumous : a novel about the power of belief', 'Flying Solo Press', 'Lt.1, F02', '1620833053.jpg', 0, 'Fiksi', 3, 'Buku ini mengisahkan seorang gadis berusia 12 tahun dan keinginannya untuk menerbitkan buku anak-anak yang ditulis oleh ibunya yang telah meninggal. Ella menggambarkan kanker, teman-teman dan keluarganya, dan ibunya serta perasaan mereka \"Kisahnya, meski sedih, juga penuh dengan cinta, harapan, dan persahabatan. Saat tinggal di Paris, ibu Ellie Kerr menulis serangkaian cerita anak-anak, namun sayangnya meninggal sebelum buku bisa diterbitkan. Begitu Ellie dan ayahnya kembali ke AS, bocah dua belas tahun itu memutuskan untuk menyelesaikan apa yang tidak bisa dilakukan ibunya. Namun ketika kata sandi misterius memblokir Ellie dari mendapatkan akses ke komputer ibunya, ia bertekad untuk menemukan kebenaran - meskipun empat upaya yang gagal akan menghancurkan data komputer, termasuk kisah-kisah ibunya yang tidak dipublikasikan! Ayah Ellie berpikir bahwa kode itu tidak bisa dipecahkan, tetapi Ellie percaya bahwa ibunya mungkin meninggalkan pesan anumerta di kata sandi baru. Dengan bantuan teman-teman, Ellie mencoba memecahkan kode, menerbitkan buku-buku, dan akhirnya untuk menghormati ibunya.', 'Bahasa Inggris', 'Original', '2018', 'Novel', '2021-05-12 01:24:01', '2021-05-12 01:24:13'),
(14, '', 'Teaching in pandemic and new normal', 'Jendela Sastra Indonesia Press', 'Lt.2, J03', '1620833458.jpg', 1, 'Nonfiksi', 4, 'Tidak dapat dipungkiri bahwa pandemic covid-19 memberikan impact besar pada ativitas tatap muka di sekolah. Demi keamanan dan kesehatan bersama ditetapkan kebijakan untuk melaksanakan pembelajaran secara jarak jauh dengan memanfaatkan teknologi. Tuntutan inilah yang menimbulkan paradigma bahwa, pembelajaran model ini akan menyulitkan baik bagi guru, siswa dan orang tua. Buku ini akan menyanggah paradigma tersebut dengan cara menyajikan langkah-langkah mudah, untuk memanfaatkan teknologi yang akrab dengan masyarakat demi terciptanya pembelajaran yang bermutu baik dalam bentuk pembelajaran online malalui virtual calssroom maupun jenis pembelajaran jarak jauh lainnya.', 'Bahasa Indonesia', 'Original', '2020', 'Buku Teks', '2021-05-12 01:30:58', '2021-05-13 07:03:46'),
(15, '', 'Youtuber sukses', 'Jendela Sastra Indonesia Press', 'Lt.1, R02', '1620833549.jpg', 0, 'Nonfiksi', 4, 'Namanya Ketut, namun lebih sering dipanggil dengan sebutan Kentut. Dia memiliki empat orang sahabat sejak ia pindah ke Jakarta. Ketut adalah seorang yatim piatu yang kini tinggal bersama bibinya yang janda. Ia salah satu murid yang bisa dikatakan pandai namun memiliki satu kebiasaan yang jarang dimiliki oleh lelaki yaitu menggosip. Rasa bingung kini tengah menyelimuti hati Ketut, tatkala ia harus memilih antara bekerja atau melanjutkan kuliah untuk memenuhi keinginan ibunya. Di lain sisi ia juga merasa harus membantu dan melunasi utang bibinya. Bagaimana ia membayar kuliah jika dia melanjutkan pendidikan ? Dan bagaimana caranya untuk bisa bertahan hidup dengan utang yang dimiliki bibinya ?', 'Bahasa Indonesia', 'Original', '2020', 'Novel', '2021-05-12 01:32:29', '2021-05-12 01:32:29'),
(16, '', 'Metamorfosis rasa', 'Jendela Sastra Indonesia', 'Lt.1, R11', '1620833637.jpg', 0, 'Fiksi', 4, 'Luka, cemburu, jarak, cinta dan rindu adalah sebuah Rumusan masalah yang pasti ada dalam cinta yang bermetamorfosis menjadi sebuah konspirasi semesta yang melelahkan. Buku ini hadir untuk semua rasa itu, rasa yang pernah hadir dan kini hanya tinggal kenangan. Suatu cara mencintai aksara yang di tuangkan dalam sebuah kata-kata ini, dari hati seorang gadis pecinta Sastra yang ingin berbagi sebuah pengalaman cinta, yang penuh pengorbanan dan tantangan sebuah cinta untuk keluarga dan orang yang di cintai. “Jangan pernah berprasangka buruk pada takdir, mungkinsaja takdir sedang menguji kita agar dapat bertahan ditengah badai kehidupan yang keras.” Buku ini berisi kumpulan kata-kata seorang gadis pecinta sastra untuk orang yang sedang merasakan kegalauan dalam hidup ataupun cinta.', 'Bahasa Indonesia', 'Original', '2020', 'Novel', '2021-05-12 01:33:57', '2021-05-12 01:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pegawai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Wanita') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `id_buku` int(10) UNSIGNED DEFAULT NULL,
  `id_anggota` int(10) UNSIGNED DEFAULT NULL,
  `id_pegawai` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id`, `nama`, `judul`, `tgl_pinjam`, `tgl_jatuh_tempo`, `tgl_kembali`, `status`, `id_buku`, `id_anggota`, `id_pegawai`, `created_at`, `updated_at`) VALUES
(2, 'Wordyka Nainggolan', 'Otodidak pemrograman ruby untuk pemula', '2021-05-13', '2021-05-21', NULL, 0, NULL, NULL, NULL, '2021-05-13 07:08:46', '2021-05-13 07:08:46'),
(3, 'Joseph Naibaho', 'Youtuber sukses', '2021-05-09', '2021-05-12', '2021-05-15', 0, NULL, NULL, NULL, '2021-05-13 07:09:05', '2021-05-13 07:09:05'),
(4, 'Ester Berutu', 'Metamorfosis rasa', '2021-05-15', '2021-05-28', NULL, 0, NULL, NULL, NULL, '2021-05-13 07:09:24', '2021-05-13 07:09:24'),
(5, 'Sopianna Siagian', 'Posthumous : a novel about the power of belief', '2021-05-02', '2021-05-08', '2021-05-06', 0, NULL, NULL, NULL, '2021-05-13 07:09:45', '2021-05-13 07:09:45'),
(6, 'Easter Sianipar', 'Otodidak pemrograman ruby untuk pemula', '2021-05-11', '2021-05-18', '2021-05-17', 0, NULL, NULL, NULL, '2021-05-13 07:10:09', '2021-05-13 07:10:09'),
(7, 'Rosani Sitinjak', 'Image processing system', '2021-05-03', '2021-05-08', '2021-05-12', 0, NULL, NULL, NULL, '2021-05-13 07:10:39', '2021-05-13 07:10:39'),
(8, 'Niar Simbolon', 'Otodidak pemrograman ruby untuk pemula', '2021-05-11', '2021-05-18', '2021-05-20', 0, NULL, NULL, NULL, '2021-05-13 07:11:04', '2021-05-13 07:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengembalian`
--

CREATE TABLE `data_pengembalian` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pengembalian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_buku` int(10) UNSIGNED NOT NULL,
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `id_pegawai` int(10) UNSIGNED NOT NULL,
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2021_04_23_143456_add_column_to_users_table', 1),
(13, '2021_05_06_140221_create_data_buku_table', 1),
(14, '2021_05_13_014740_create_data_anggota_table', 1),
(15, '2021_05_13_101110_create_data_pegawai_table', 1),
(16, '2021_05_13_101611_create_data_peminjaman_table', 1),
(17, '2021_05_13_101759_create_data_pengembalian_table', 1);

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
(1, 'Wordyka', 'Wordyka07', 'Wordyka@gmail.com', NULL, '$2y$10$4q65ZM7PRRTwRVMT4PLqFeapMRmA9ROm6JemC1nIeL5aJH0xBM2Q2', 'FoM14GeozgcOa6yMjQFmmYjw4WMR6b7yN6E1QIZDBe7B8QfWZa', '2021-05-13 03:31:55', '2021-05-13 03:31:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_peminjaman_id_buku_foreign` (`id_buku`),
  ADD KEY `data_peminjaman_id_anggota_foreign` (`id_anggota`),
  ADD KEY `data_peminjaman_id_pegawai_foreign` (`id_pegawai`);

--
-- Indexes for table `data_pengembalian`
--
ALTER TABLE `data_pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_pengembalian_id_buku_foreign` (`id_buku`),
  ADD KEY `data_pengembalian_id_anggota_foreign` (`id_anggota`),
  ADD KEY `data_pengembalian_id_pegawai_foreign` (`id_pegawai`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_pengembalian`
--
ALTER TABLE `data_pengembalian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD CONSTRAINT `data_peminjaman_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_peminjaman_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_peminjaman_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data_pengembalian`
--
ALTER TABLE `data_pengembalian`
  ADD CONSTRAINT `data_pengembalian_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pengembalian_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `data_pengembalian_id_pegawai_foreign` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
