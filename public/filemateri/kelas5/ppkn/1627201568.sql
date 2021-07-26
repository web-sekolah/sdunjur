-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2021 pada 10.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desawisatatuktuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `subjek`, `created_at`, `updated_at`) VALUES
(1, 'Rizki', 'admin01', 'Admin@gmail.com', NULL, '$2y$10$a90MS6C/JPe6l7leg/cejevFCnWlZsHXCo4fhJdBtKB5Go6eRJqcC', 'oKNyJLJZTlrTDqe4EjGNGpDweccF4MjGgfwdp1D94qvumeutqo', NULL, '2021-06-08 03:54:42', '2021-06-08 03:54:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eventcomments`
--

CREATE TABLE `eventcomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `eventcomments`
--

INSERT INTO `eventcomments` (`id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(6, 'Rizki Okto', 'horas', '2021-06-08 08:32:36', '2021-06-08 08:32:36'),
(7, 'Rizki Okto', 'maaf', '2021-06-08 08:33:05', '2021-06-08 08:33:05'),
(8, 'Rizki Okto', 'no problem', '2021-06-08 08:33:18', '2021-06-08 08:33:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eventreplies`
--

CREATE TABLE `eventreplies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `eventreplies`
--

INSERT INTO `eventreplies` (`id`, `comment_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(5, 6, 'Rizki Okto', 'syalom', '2021-06-08 08:32:47', '2021-06-08 08:32:47'),
(6, 8, 'Rizki Okto', 'gass', '2021-06-08 08:33:27', '2021-06-08 08:33:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `halaman_event`
--

CREATE TABLE `halaman_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu` time NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_event`
--

INSERT INTO `halaman_event` (`id`, `id_event`, `nama_event`, `kategori`, `tgl_pelaksanaan`, `tgl_selesai`, `waktu`, `harga`, `lokasi`, `map`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '', 'Samosir music Festival 2020', 'Music', '2020-08-23', '2021-05-25', '20:00:00', 'Rp 5.000', 'Open Stage Tuk-tuk', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4835299480046!2d98.85817631472803!3d2.671064956650426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ea218872fbed%3A0xba87d2f92345c80a!2sOpen%20Stage!5e0!3m2!1sid!2sid!4v1622446454750!5m2!1sid!2sid', 'EventSMIF.jpeg', 'Menghadirkan musisi-musisi lokal dan manca negara ternama.\r\nHadir dan saksikan samosir music festival 2020 di open stage Tuktuk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_hotel`
--

CREATE TABLE `halaman_hotel` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `kontak` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_hotel`
--

INSERT INTO `halaman_hotel` (`id`, `id_hotel`, `nama_hotel`, `gambar1`, `gambar2`, `gambar3`, `lokasi`, `map`, `deskripsi`, `rating`, `kontak`, `harga`, `link`, `fasilitas`, `created_at`, `updated_at`) VALUES
(1, '', 'Carolina Hotel', 'carolina1.jpg', 'carolina2.jpg', 'carolina3.jpg', 'Jalan Lingkar Tuktuk, Kecamatan Simanindo, 22395 Tuk Tuk, Indonesia', 'https://www.google.com/maps/embed/v1/place?q=Carolina+Hotel,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Di tengah taman di tepi Danau Toba, hotel ala pedesaan ini bertempat di sekumpulan cottage kayu berornamen dan berjarak 6 km dari museum terbuka Batu Kursi Raja Siallagan, serta 13 km dari desa Tomok.', 5, '+6281265000422', 'Rp 377.000 - Rp 420.000', 'http://www.carolina-cottages.com/', 'Free parking, Free internet, Restaurant, Beach, Bicycle rental, Children Activities, Airport transportation, Massage', NULL, NULL),
(2, '', 'Zoé’s Paradise Waterfront Hotel', 'Zoes1.jpg', 'Zoes2.jpg', 'Zoes3.jpg', 'Jalan Lingkar Tuktuk, Kecamatan Simanindo, 22395 Tuk Tuk, Indonesia', 'https://www.google.com/maps/embed/v1/place?q=Zoé\'s+Paradise+Waterfront+Hotel,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Hotel santai dengan bangunan menawan di tepi Danau Toba, berjarak 4 menit berjalan kaki dari terminal feri Port Sosor Galung, atau 4 km dari Museum Batak dan Cagar Alam Kebun Raya Samosir.', 3, '+6281263152955', 'Rp 435.000 - Rp 841.000', 'https://www.zoesparadise.com/', '2 swimming pools, Free parking, Airport shuttle, Restaurant, Free WiFi, Room service Tea/coffee maker in all rooms', NULL, NULL),
(3, '', 'Mas Cottages', 'Mas1.jpg', 'Mas2.jpg', 'Mas3.jpg', 'Tuk Tuk Pinda Raya, 22395 Tuk Tuk, Indonesia', 'https://www.google.com/maps/embed/v1/place?q=Mas+Cottages&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Berjarak 3 meter dari Danau Toba dan menampilkan eksterior bergaya tradisional Batak dan kamar-kamar dengan perabotan yang simple. Bersantai dan berjemur di tepi danau atau menyewa sepeda untuk menjelajahi daerah sekitar Danau Toba.', 2, '+62625451051', 'Rp 203.000 - Rp 319.000', 'https://www.booking.com/hotel/id/mas-cottages.id.html', '1 kolam renang, Antar-Jemput Bandara, Termasuk Akses Wi-Fi Gratis, Parkir Gratis, Kamar Keluarga, Restoran, Bar, Tepi pantai', NULL, NULL),
(4, '', 'Tabo Cottages', 'Tabo1.jpg', 'Tabo2.jpg', 'Tabo3.jpg', 'Jl. Lkr. Tuktuk Toba, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara 22395', 'https://www.google.com/maps/embed/v1/place?q=Tabo+Cottages,+Jalan+Lingkar+Tuktuk+Toba,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Hotel santai yang terletak di tepi Danau Toba ini berjarak 4 km dari Museum Batak yang memiliki koleksi sejarah lokal, 8 km dari cagar alam Kebun Raya Samosir, dan 63 km dari Jalan Raya Lintas Barat Sumatera.', 4, '+6281260429452', 'Rp. 600.000,00', 'http://www.tabocottages.com/', 'Parkir gratis, Internet Kecepatan Tinggi Gratis (Wi-Fi), Kolam renang, Sarapan gratis, Pantai, Penyewaan sepeda, Buku, DVD, musik untuk anak-anak, Tempat bermain anak', NULL, NULL),
(5, '', 'Samosir Cottages', 'Samosir1.jpg', 'Samosir2.jpg', 'Samosir3.jpg', 'Jl lingkar Tuk Tuk Lake Toba, samosir island, Sumatera Utara, 22395', 'https://www.google.com/maps/embed/v1/place?q=Samosir+Cottages+Resort,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Terletak di tengah desa Tuk Tuk, menghadap ke Danau Toba, resor bata merah fungsional ini berada di sisi timur Pulau Samosir.', 3, '+62625451170', 'Rp 449.000 - Rp 1.014.000', 'http://www.samosircottages.com/', 'Parkir gratis, Internet gratis, Kolam renang, Sarapan gratis, Penyewaan sepeda, Memancing, Aktivitas Anak-Anak, Penyewaan mobil, AC', NULL, NULL),
(6, '', 'Anju Cottage', 'Anju1.jpg', 'Anju2.jpg', 'Anju3.jpg', 'Jl. Lkr. Tuktuk No.Kelurahan, Tuktuk Siadong, Kabupaten Samosir, Sumatera Utara 22395', 'https://www.google.com/maps/embed/v1/place?q=Anju+Cottage,+Jalan+Lingkar+Tuktuk,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Mencari suasana hotel kecil menawan di Ambarita dan dekat dengan tempat menarik Kursi Batu Raja Siallagan yang mudah untuk dicapai dengan berjalan kaki.', 4, '+6281320608618', 'Rp 290.000 - Rp 449.000', 'https://www.tripadvisor.co.id/Hotel_Review-g3187028-d3584618-Reviews-Anju_Cottages-Ambarita_Samosir_Island_North_Sumatra_Sumatra.html', 'Parkir gratis, Internet gratis, Tersedia sarapan, Aktivitas Anak-Anak, Transportasi bandara, Petugas keamanan 24 jam, Penyimpanan koper, Check-in 24 jam', NULL, NULL),
(7, '', 'Samosir Villa Resort', 'Villa1.jpg', 'Villa2.jpg', 'Villa3.jpg', 'Jl. Lkr. Tuktuk No.Kelurahan, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara 22395', 'https://www.google.com/maps/embed/v1/place?q=Samosir+Villa+Resort,+Jalan+Lingkar+Tuktuk,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Perpaduan sempurna antara penghematan dan kenyamanan dengan menawarkan suasana yang menawan dengan fasilitas yang di desain untuk wisatawan.\r\n', 4, '+62625451399', 'Rp 543.000 - Rp 1.600.000', 'https://www.samosirvillaresort.com/', 'Parkir gratis, Internet Kecepatan Tinggi Gratis (Wi-Fi), Kolam renang, Bar/lounge, Penyewaan sepeda, Bermain kano, Penyewaan mobil, Layanan pijat', NULL, NULL),
(8, '', 'Duma Sari Hotel', 'Duma1.jpg', 'Duma2.jpg', 'Duma3.jpg', 'Jl. Tuk Tuk Siadong, Girsang Sipangan Bolon, Simalungun, Kabupaten Samosir, Sumatera Utara 21174', 'https://www.google.com/maps/embed/v1/place?q=Dumasari+Hotel,+Simalungun,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Memiliki taman dan teras dengan dilengkapi akomodasi yang lengkap. Setiap kamar memiliki TV, kamar mandi pribadi, dan balkon dengan pemandangan Danau Toba serta menikmati sarapan a la carte.', 2, '+62625451121', 'Rp 300.000 - Rp 350.000', 'https://www.agoda.com/id-id/hotel-dumasari/hotel/all/samosir-id.html?finalPriceView=1&isShowMobileAppPrice=false&cid=1731353&numberOfBedrooms=&familyMode=false&adults=2&children=0&rooms=1&maxRooms=0&checkIn=2021-05-22&isCalendarCallout=false&childAges=&numberOfGuest=0&missingChildAges=false&travellerType=-1&showReviewSubmissionEntry=false&currencyCode=IDR&isFreeOccSearch=false&tspTypes=8&los=1&searchrequestid=a7a3bce0-8872-4751-b15a-0bc7ccfaf389', 'WiFi di tempat umum, WiFi gratis di semua kamar, Aktivitas dan fasilitas bersantai, Taman, Area merokok, Hewan peliharaan diperbolehkan, Resepsionis 24 jam, Layanan kebersihan harian, Transportasi, Penyewaan mobil, Tempat parkir mobil gratis', NULL, NULL),
(9, '', 'Ambaroba Resort Hotel', 'Ambaroba1.jpg', 'Ambaroba2.jpg', 'Ambaroba3.jpg', 'Jalan Lingkar Tuktuk, Kelurahan No.10, Tuktuk Siadong, Simanindo, Kabupaten Samosir, Sumatera Utara 22395', 'https://www.google.com/maps/embed/v1/place?q=Ambaroba+Hotel,+Kelurahan,+Tuktuk+Siadong,+Kabupaten+Samosir,+Sumatera+Utara&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8', 'Ideally located in the prime touristic area of Tuk Tuk, Ambaroba Resort Hotel promises a relaxing and wonderful visit. The property features a wide range of facilities to make your stay a pleasant experience.', 2, '+62625451351', 'Rp 293.000', 'https://ambaroba-hotel.business.site/', 'Free parking, Hot bath, Restaurant, Bicycle rental, Children Activities, Meeting rooms, Newspaper, 24-hour front desk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman_souvenir`
--

CREATE TABLE `halaman_souvenir` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_souvenir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` blob NOT NULL,
  `gambar2` blob NOT NULL,
  `gambar3` blob NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `halaman_souvenir`
--

INSERT INTO `halaman_souvenir` (`id`, `nama_souvenir`, `nama_toko`, `pemilik`, `bahan`, `tipe`, `ukuran`, `warna`, `harga`, `kontak`, `map`, `lokasi`, `gambar1`, `gambar2`, `gambar3`, `deskripsi`, `created_at`, `updated_at`) VALUES
(9, 'Ukiran Hiasan Dinding', 'Arga Galery', 'Rawadinson Saragih', 'Kayu Ingul / Suren', 'Patung', '75cm x 35cm', 'pernis dan melamin', 'Rp 5.000.000', '6281361285286', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-Tuk Siadong', 0x706174756e67312e6a706567, 0x706174756e67322e6a706567, 0x706174756e67332e6a706567, 'Ukiran untuk mempercantik ruangan rumah anda dengan ukiran yang yang mendetail dan rapi', NULL, NULL),
(10, 'Cup Lampu', 'Arga Galery', 'Rawadinson Saragih', 'Kayu Ingul / Suren', 'Patung', '30cm x 11cm', 'Pernis', 'Rp 300.000', '6281361285286', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-tuk Siadong', 0x6375706c616d7075312e6a706567, 0x6375706c616d7075322e6a706567, 0x6375706c616d7075332e6a706567, 'Hias ruangan anda dengan memasang lampu di cup lampu denga motif dan ukiran yang menarik', NULL, NULL),
(11, 'Ukiran Hiasan Dinding', 'Arga Galery', 'Rawadinson Saragih', 'Kayu Ingul / Suren', 'Patung / Ukiran', '150cm x 80cm', 'Pernis / Melamin', 'Rp 1.500.000', '6281361285286', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-tuk Siadong', 0x756b6972616e312e6a706567, 0x756b6972616e322e6a706567, 0x756b6972616e332e6a706567, '', NULL, NULL),
(12, 'Jam Dinding Hias', 'Arga Galery', 'Rawadinson Saragih', 'Ingul / Suren', 'Patung / Ukiran', '120cm x 45cm', 'Variasi Merah, Hitam, Putih, pernis, dan melamin', 'Rp 1.000.000', '6281361285286', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-tuk Siadong', 0x6a616d312e6a706567, 0x6a616d322e6a706567, 0x6a616d332e6a706567, 'Ukiran untuk memperindah tampilan jam dinding anda (Produk sudah termasuk dengan 1 unit jam dinding)', NULL, NULL),
(13, 'Ulos Sadum', 'Arga Souvenir', 'Rawadinson Saragih', 'Kain Kapas', 'Ulos', '200cm x 40cm', 'Merah dan Biru Navy', 'Rp 120.000', '6281361285286', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-tuk Siadong', 0x756c6f73312e6a706567, 0x756c6f73322e6a706567, 0x756c6f73332e6a706567, 'Kain ulos yang bisa digunakan sebagai selendang dan juga alas meja', NULL, NULL),
(14, 'Ukiran Hiasan Dinding', 'Arga Galery', 'Rawadinson Saragih', 'Kayu ingul / Suren', 'Ukiran / Patung', '50cm x 22cm', 'Pernis dan melamin', 'Rp 250.000', '6281361285286\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.482871347394!2d98.85284611529366!3d2.671267898053842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb57fdc1542f%3A0x71d9597da6a6cc79!2sArga%20Art%20%26%20Souvenir!5e0!3m2!1sid!2sid!4v1621669987999!5m2!1sid!2sid', 'Jl.Inpres Tuk-tuk Siadong', 0x64696e64696e67312e6a706567, 0x64696e64696e67322e6a706567, 0x64696e64696e67342e6a706567, 'Ukiran untuk menghiasi dinding rumah anda menjadi lebih klasik', NULL, NULL),
(15, 'Cardigan', 'Dewys Souvenir', 'Delima Sitanggang', 'Katun', 'Baju', 'Free Size', 'Hitam', 'Rp 150.000', '6281263225148', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4653356520876!2d98.8517554147562!3d2.6766656980499253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb7fa0475539%3A0x40cae9f8806cdc13!2sDewys%20Souvenir!5e0!3m2!1sid!2sid!4v1621672077377!5m2!1sid!2sid', 'Jl. Lingkar. Tuktuk, Tuktuk Siadong', 0x636172646967616e312e6a706567, 0x636172646967616e322e6a706567, 0x636172646967616e332e6a706567, 'outer panjang untuk perempuan bahan lembut dan terbuat dari katun', NULL, NULL),
(16, 'Baju Lake Toba', 'Dewys Souvenir', 'Delima Sitanggang', 'Kain', 'Baju', 'L', 'Merah dan Putih dengan motif Gorga', 'Rp 75.000', '6281263225148', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4653356520876!2d98.8517554147562!3d2.6766656980499253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb7fa0475539%3A0x40cae9f8806cdc13!2sDewys%20Souvenir!5e0!3m2!1sid!2sid!4v1621672077377!5m2!1sid!2sid', 'Jl.Lingkar, Tuk-tuk Siadong', 0x62616a75312e6a706567, 0x62616a75322e6a706567, 0x62616a75332e6a706567, 'Baju pantai untuk wanita bahan lembut dan mulus (Produk sudah termasuk dengan celana)', NULL, NULL),
(17, 'Baju Horas', 'Dewys Souvenir', 'Delima Sitanggang', 'Kain', 'Baju', 'XL', 'Hitam', 'Rp 60.000', '6281263225148', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4653356520876!2d98.8517554147562!3d2.6766656980499253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031eb7fa0475539%3A0x40cae9f8806cdc13!2sDewys%20Souvenir!5e0!3m2!1sid!2sid!4v1621672077377!5m2!1sid!2sid', 'Jl.Lingkar, Tuk-tuk Siadong', 0x686f726173312e6a706567, 0x686f726173322e6a706567, 0x686f726173332e6a706567, 'Baju horas berbahan lembut dan mulus tidak mudah luntur', NULL, NULL),
(18, 'sdasdas', 'situmorang store', 'Rizki okto', 'katu ingul', 'batu akik', '12 x 4 cm', 'navy blue', 'Rp.12.000.000', 'qwadsdasdasd', 'udasudja', 'samping rumah', 0x433a5c78616d70705c746d705c706870333830352e746d70, 0x433a5c78616d70705c746d705c706870333830362e746d70, 0x433a5c78616d70705c746d705c706870333830362e746d70, 'asdasdas', '2021-06-09 01:14:30', '2021-06-09 01:14:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotelcomments`
--

CREATE TABLE `hotelcomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotelreplies`
--

CREATE TABLE `hotelreplies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_10_080048_create_halaman_event_table', 1),
(5, '2021_05_10_080100_create_halaman_souvenir_table', 1),
(6, '2021_05_10_080111_create_halaman_hotel_table', 1),
(7, '2021_05_10_081544_create_user_table', 1),
(8, '2021_05_17_032710_create_comment_replies_table', 2),
(9, '2021_05_17_100059_create_posts_table', 3),
(10, '2021_05_17_100256_create_comments_table', 3),
(11, '2021_05_18_042948_create_komentar_table', 4),
(12, '2021_05_18_043248_create_forum_table', 4),
(13, '2021_05_18_063251_create_comments_table', 5),
(14, '2021_05_18_063301_create_replies_table', 5),
(15, '2021_05_18_063546_add_coloum_user_id_in_replies_table', 5),
(16, '2021_05_18_101930_create_comments_table', 6),
(17, '2021_05_18_112120_create_replies_table', 7),
(18, '2021_05_18_141818_create_comments_table', 8),
(19, '2021_05_18_141846_create_replies_table', 8),
(20, '2021_05_19_015812_create__souvenircomments_table', 9),
(21, '2021_05_19_015831_create__souvenirreplies_table', 9),
(22, '2021_05_19_020005_create__eventcomments_table', 9),
(23, '2021_05_19_020018_create__eventreplies_table', 9),
(24, '2021_05_19_021955_create_souvenircomments_table', 10),
(25, '2021_05_19_022134_create_souvenirreplies_table', 10),
(26, '2021_05_19_022309_create_eventcomments_table', 10),
(27, '2021_05_19_022321_create_eventreplies_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `souvenircomments`
--

CREATE TABLE `souvenircomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `souvenirreplies`
--

CREATE TABLE `souvenirreplies` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `subjek`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'wordyka', 'wordyka777', 'wordyka@gmail.com', NULL, '$2y$10$BFIpcBTqviD5d0Y/.6o20.UVb9S1I/5UPwo3SPSMPHSD3lc1cFubS', NULL, '', '', '2021-05-16 13:26:32', '2021-05-16 13:26:32'),
(2, 'Wordyka', 'wordyka', 'nainggolan@gmail.com', NULL, '$2y$10$JhsOTsBPH4UpvodvO5EigO3.EeAAGncyFtfelROsGEhHfvw2W0LA.', 'Q2XreD6HgbaTt3pi5IqMo7hoatjW7stEOfCzE0k1N3l6xh9JQHyKK3mjm9L4', NULL, NULL, '2021-05-17 05:10:11', '2021-05-17 05:10:11'),
(3, 'Rizki', 'Rizki', 'rizki@gmail.com', NULL, '$2y$10$cLLNNyb4fH1ZnYHcY.vfYOGdn8WnRbP1nerzMwvo.erDJ6HLrMjqO', NULL, NULL, NULL, '2021-05-17 18:02:57', '2021-05-17 18:02:57'),
(4, 'Rizki Okto s', 'Rizkis', 'rizkiokto@gmail.com', NULL, '$2y$10$Gywrd4zV7ZisTpAgLH4MeOFUyyI25JhKDiZkHlcQlqowgOlTSkBMy', NULL, NULL, NULL, '2021-05-18 15:33:33', '2021-05-18 15:33:33'),
(5, 'Rizki Okto', 'Rizkiokto', 'rizkiokt12o@gmail.com', NULL, '$2y$10$PeV5AxO1405ympZ3.VdJ/eXGJSWxvjQRlql3RZ87pJcV1Td.oBb3m', NULL, NULL, NULL, '2021-05-18 19:05:23', '2021-05-18 19:05:23'),
(6, 'Rizki Okto', 'if420033', 'rizkindjnj@gmail.com', NULL, '$2y$10$ReivOKexSFrL1ujBkKRoHOFlR0LFQisQTf7T3cIFX.xuWg1yk7HQ6', NULL, NULL, NULL, '2021-05-20 16:40:55', '2021-05-20 16:40:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `eventcomments`
--
ALTER TABLE `eventcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `eventreplies`
--
ALTER TABLE `eventreplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eventreplies_comment_id_foreign` (`comment_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `halaman_event`
--
ALTER TABLE `halaman_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman_hotel`
--
ALTER TABLE `halaman_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `halaman_souvenir`
--
ALTER TABLE `halaman_souvenir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hotelcomments`
--
ALTER TABLE `hotelcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hotelreplies`
--
ALTER TABLE `hotelreplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `souvenircomments`
--
ALTER TABLE `souvenircomments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `souvenirreplies`
--
ALTER TABLE `souvenirreplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `souvenirreplies_comment_id_foreign` (`comment_id`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `eventcomments`
--
ALTER TABLE `eventcomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `eventreplies`
--
ALTER TABLE `eventreplies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halaman_event`
--
ALTER TABLE `halaman_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `halaman_hotel`
--
ALTER TABLE `halaman_hotel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `halaman_souvenir`
--
ALTER TABLE `halaman_souvenir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `hotelcomments`
--
ALTER TABLE `hotelcomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `hotelreplies`
--
ALTER TABLE `hotelreplies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `souvenircomments`
--
ALTER TABLE `souvenircomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `souvenirreplies`
--
ALTER TABLE `souvenirreplies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `eventreplies`
--
ALTER TABLE `eventreplies`
  ADD CONSTRAINT `eventreplies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `eventcomments` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hotelreplies`
--
ALTER TABLE `hotelreplies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `hotelcomments` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `souvenirreplies`
--
ALTER TABLE `souvenirreplies`
  ADD CONSTRAINT `souvenirreplies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `souvenircomments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
