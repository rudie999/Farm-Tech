-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 04:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siperpus_percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(12) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `nama`, `slug`, `pengarang`, `gambar`, `deskripsi`, `updated_at`, `created_at`) VALUES
(6, 'Robby', 'robby-220610010644', 'Klojen, Malang', '25012021102410_3._SY475_.jpg', '-', '2022-06-09 18:06:44', '2021-01-25 03:24:10'),
(7, 'Cici', 'cici-220610010617', 'Kedungkandang, Malang', '25012021163351_1398034._SY475_.jpg', '-', '2022-06-09 18:06:17', '2021-01-25 09:33:51'),
(8, 'Lily', 'lily-220610010807', 'Sukun, Malang', '26012021135340_36393774._SX318_.jpg', '-', '2022-06-09 18:08:07', '2021-01-25 09:42:09'),
(9, 'Jeny', 'jeny-220610010717', 'Lowokwaru, Malang', '26012021132444_36294386.jpg', '-', '2022-06-09 18:07:17', '2021-01-26 06:24:44'),
(10, 'Max', 'max-220610010420', 'Blimbing, Malang', '26012021133359_53047521.jpg', '-', '2022-06-09 18:04:20', '2021-01-26 06:33:59'),
(12, 'Roxy', 'roxy-220610010918', 'Mayangan, Probolinggo', '26012021160309_43270033._SY475_.jpg', '-', '2022-06-09 18:09:18', '2021-01-26 09:03:09'),
(13, 'Alex', 'alex-220610010848', 'Kedopok, Probolinggo', '26012021160413_43292104._SX318_.jpg', '-', '2022-06-09 18:08:48', '2021-01-26 09:04:13');

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
(3, '2021_01_22_030823_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 9),
(2, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 6),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(3, 'App\\User', 3),
(3, 'App\\User', 4),
(3, 'App\\User', 5),
(3, 'App\\User', 10),
(3, 'App\\User', 11),
(3, 'App\\User', 12),
(3, 'App\\User', 13);

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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_maks_pengembalian` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `denda` int(12) NOT NULL DEFAULT 0,
  `status_peminjaman` varchar(100) NOT NULL DEFAULT 'Belum Dikembalikan',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_user`, `nama_buku`, `tanggal_pinjam`, `tanggal_maks_pengembalian`, `tanggal_kembali`, `denda`, `status_peminjaman`, `updated_at`, `created_at`) VALUES
(8, 5, 'Cici', '2022-06-26', '2022-07-03', '2022-06-26', 0, 'Sudah Dikembalikan', '2022-06-26 03:48:50', '2022-06-26 03:27:18'),
(9, 5, 'Roxy', '2022-06-26', '2022-07-03', '2022-06-27', 0, 'Sudah Dikembalikan', '2022-06-27 14:38:20', '2022-06-26 03:55:07'),
(10, 12, 'Roxy', '2022-06-26', '2022-07-03', NULL, 0, 'Belum Dikembalikan', '2022-06-26 04:16:41', '2022-06-26 04:16:41'),
(11, 12, 'Alex', '2022-06-27', '2022-07-04', NULL, 0, 'Belum Dikembalikan', '2022-06-27 14:37:04', '2022-06-27 14:37:04'),
(12, 13, 'Roxy', '2022-06-27', '2022-07-04', NULL, 0, 'Belum Dikembalikan', '2022-06-27 14:40:40', '2022-06-27 14:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `gambar_header` varchar(250) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `id_user`, `judul`, `slug`, `isi`, `gambar_header`, `updated_at`, `created_at`) VALUES
(1, 1, 'Gerakan Ayo Membaca Bangkitkan Budaya Literasi Indonesia', 'gerakan-ayo-membaca-bangkitkan-budaya-literasi-indonesia-210203033558', '<p>Ketua Ikatan Penerbit Indonesia (IKAPI) DKI Jakarta Afrizal Sinaro mendukung diluncurkannya Gerakan&nbsp; Ayo Membaca Indonesia yang digagas oleh Yayasan Ayo Membaca Indonesia (AMInd). Menurut Afrizal, apa-apa yang ditawarkan oleh gagasan tersebut dapat menjadi langkah awal bagi masyarakat Indonesia untuk menuju sebagai masyarakat yang cerdas.<br />\r\n<br />\r\n<strong>&ldquo;Ini sebagai langkah awal, IKAPI pasti mendukung, karena membaca adalah langkah untuk mewujudkan masyarakat yang maju dan cerdas,&rdquo;</strong> kata Afrizal kepada&nbsp;<strong><em>ROL</em></strong>, Rabu (4/3).<br />\r\n<br />\r\nApalagi, kata dia, gerakan ini muncul dari kalangan masyarakat yang ingin mengubah agar budaya literasi di Indonesia terus ditingkatkan. Ide ini menurut Afrizal harus disambut baik oleh seluruh kalangan masyarakat baik itu pemerintah, komunitas ataupun masyarakat biasa.<br />\r\n<br />\r\nAfrizal menjelaskan faktanya saat ini budaya&nbsp; membaca di masyarakat Indonesia saat ini masih rendah. Baik itu fakta dari dunia internasional ataupun berdasarkan riset dari dalam negeri. Untuk itu, inilah saatnya bagi Indonesia untuk mulai meningkatkan kualitas setiap diri masyarakat dengan menggiatkan kegemaran membaca. Tidak hanya bagi orang dewasa, tetapi juga dimulai dari anak-anak usia dini.<br />\r\n<br />\r\nSebuah negara maju kata Afrizal akan terwujud bila masyarakat sebagai elemen penting di dalamnya gemar membaca dan punya pengetahuan dan wawasan yang luas. &ldquo;Tanpa membaca buku, kita tidak akan tahu, tanpa membaca kita tidak akan cerdas. Benar yang dikatakan Pak Dedi Panigoro (Ketua AMInd) membaca itu untuk memberantas kebodohan, kemiskinan dan korupsi,&rdquo; ujar Afrizal.</p>', '03022021033558_pengunjung-melihat-koleksi-pada-stand-penerbit-republika-di-pameran.jpg', '2021-02-02 20:35:58', '2021-02-02 20:35:58'),
(2, 1, '8 Manfaat Membaca Bagi Kita', '8-manfaat-membaca-bagi-kita-210203120207', '<p><em><strong>Manfaat yang bisa kita dapatkan hanya meluangkan dengan waktu untuk membaca, yaitu :</strong></em></p>\r\n\r\n<p><strong>1. Melatih otak</strong></p>\r\n\r\n<p>Dengan sering membaca, secara tidak langsung dapat melatih otak dan pikiran kita. Otak ibarat sebuah pedang, semakin diasah akan semakin tajam. Kebalikannya jika tidak diasah, juga akan tumpul.</p>\r\n\r\n<p><strong>2. Dapat meringankan stress</strong></p>\r\n\r\n<p>Keindahan bahasa dalam sebuah tulisan memiliki kemampuan yang dapat menenangkan dan mengurangi stress, apalagi buku yang di baca berupa buku fiksi atau cerita humor.</p>\r\n\r\n<p><img alt=\"\" src=\"https://image-cdn.medkomtek.com/BVW1D2jmFpIRM91pValnwx2cz9k=/673x379/smart/klikdokter-media-buckets/medias/2315018/original/030647800_1589955378-Menstimulasi-Perkembangan-Otak-shutterstock_726182569.jpg\" style=\"float:left; height:282px; width:500px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>3. Meningkatkan konsentrasi</strong></p>\r\n\r\n<p>Siapapun yang suka membaca akan memiliki otak yang lebih fokus dan berkonsentrasi, serta memiliki kemampuan yang penuh perhatian dan praktis dalam kehidupan. Selain itu, dapat mengembangkan keterampilan objektivitas dan pengambilan keputusan.</p>\r\n\r\n<p><strong>4. Mengembangkan pola tidur sehat</strong></p>\r\n\r\n<p>Dengan terbiasa membaca buku sebelum tidur, maka hal ini akan bertindak sebagai alarm bagi tubuh sehingga mengirimkan sinyal bahwa sudah waktunya untuk tidur. Dengan demikian dapat membantu untuk mendapatkan tidur nyenyak dan pastinya bangun pagi akan terasa segar.</p>\r\n\r\n<p><strong>5. Menjauhkan risiko penyakit Alzheimer (pelupa)</strong></p>\r\n\r\n<p>Membaca dapat langsung meningkatkan daya ikat otak. Saat membaca, otak akan dirangsang dan distimulasi secara teratur sehingga dapat membantu mencegah gangguan pada otak, termasuk penyakit Alzheimer.</p>\r\n\r\n<p><strong>6. Meningkatkan kosakata</strong></p>\r\n\r\n<p>Dengan rutin melakukan aktifitas membaca, secara tidak sadar kita memperluas perbendaharaan kata di kamus yang ada dalam otak kita. Untuk yang satu ini penting sekali bila diterapkan pada anak-anak.</p>\r\n\r\n<p><strong>7. Mengasah kemampuan menulis</strong></p>\r\n\r\n<p>Selain menambah wawasan dan ilmu pengetahuan, membaca juga bisa mengasah kemampuan menulis. Dengan rajin membaca, kita bisa mempelajari gaya menulis orang lain dengan membaca tulisannya. Dan dengan membaca, kita bisa mendapatkan ide yang melimpah untuk dijadikan bahan menulis.</p>\r\n\r\n<p><strong>8. Sarana refleksi dan pengembangan diri</strong></p>\r\n\r\n<p>Lewat membaca, kita bisa mempelajari bagaimana cara orang lain dalam mengembangkan diri, sehingga bisa kita jadikan bahan pertimbangan atau pembanding sebelum kita melakukan sesuatu.</p>\r\n\r\n<p>Jadi jangan hanya menghabiskan waktu berjam-jam untuk menonton televisi, bermain game komputer atau bersosial media saja, tetapi juga luangkan waktu untuk membaca buku. Kebiasaan baik itu tidak hanya akan menyegarkan pikiran tetapi juga memberi manfaat untuk kesehatan dan kehidupan.</p>', '03022021112827_Pengertian-Membaca-Menurut-Beberapa-Cendekiawan-626x391.jpg', '2021-02-03 05:02:07', '2021-02-03 04:28:27'),
(4, 1, 'Tentang SIPERPUS', 'tentang-siperpus-210203123621', '<p><strong>Sistem Informasi Perpustakaan <em>(SIPERPUS)</em> kami buat untuk memudahkan para pegawai dalam manajemen buku, transaksi peminjaman dan manajemen anggota. Sedangkan pada sisi anggota akan dimudahkan jika ingin melihat status peminjamannya (Batas Tanggal Mengembalikan) dan melihat katalog buku yang tersedia tanpa harus ke perpustakaan.</strong></p>', '03022021123345_0d0173e06b57b2f91611683b35500e47.jpg', '2021-02-03 05:36:21', '2021-02-03 05:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-01-21 20:09:07', '2021-01-21 20:09:07'),
(2, 'pegawai', 'web', '2021-01-21 20:09:12', '2021-01-21 20:09:12'),
(3, 'anggota', 'web', '2021-01-24 07:44:09', '2021-01-24 07:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tidak Aktif',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `alamat`, `no_hp`, `password`, `status_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maulana', 'irfan@gmail.com', 'Jl. Kusman 10', '089560678752', '$2y$10$q/MBBG70jqY6FiPWJ2Fcn.ThbnDGKvBHfrTtAdCu6ckzSFy2miaxG', 'Aktif', 'm0vHm7hiRz1K5j200yDlSVOwXf2fh2C441izm4W6MFylDlpn6clN9P7Zq6Fq', '2021-01-21 20:28:23', '2021-01-31 08:50:04'),
(2, 'Gunawan Kurniya Aji', 'gunawan@gmail.com', 'JL. Kenanga 99 Balen', '082341235127', '$2y$10$4FwxnKJV.zjJbFP2rjrm3uZUQZ2PITlt41R5UgH.kesXMwzdjlMAm', 'Aktif', 'ASVPXcQy5CzTvvd6sOTOFGODVkHuO3OC1AR1nBr5TGgWHkxhbVdsBsnkVCkk', '2021-01-21 20:29:28', '2021-01-21 20:29:28'),
(3, 'Ahmad Kholil', 'kholil@gmail.com', 'Jl. Melati 12 Bojonegoro', '082359124212', '$2y$10$Cv6wCtUW9KRlpsymyqCa/e5vuofrCq50/44rFvhjNhM2664ESrTQu', 'Aktif', 'u9jcKERUlyVSVPUwWCglfnM2bvhvrCe1HVUK3ta4LftkSa5hWrSgYDkRSWgI', '2021-01-21 23:46:00', '2021-01-21 23:46:00'),
(4, 'Yuni Kurnia', 'yuni@gmail.com', 'Jl. Mawar 13 Bojonegoro', '081234561232', '$2y$10$xn2DoksDfpkNWCM.lm0yCOkOrKA5FIGGz8tAuHKH4VdgKpXQinmZq', 'Aktif', '8vpDJkyKxhh4tYUgPkY4WTyapMkQQ50CLdNu3Jj2sESM9l9SsUuK3AFqb8yO', '2021-01-24 20:33:03', '2021-01-31 08:58:46'),
(5, 'Gita Savitri Devi', 'gita@gmail.com', 'Jl. Sesame 12 Bojonegoro', '082341234821', '$2y$10$s7.L/GrMVb.uH/HqBYw/quXJ3kkVVBmGbyVfG0l0bVa3xXzhcG0ga', 'Aktif', 'aC48p3grwnqI673RrL8aaboSfFMA8TODJ6W8rQX02RZyuz6WIrU6Cu2G42Tp', '2021-01-24 20:43:00', '2021-01-29 19:05:17'),
(6, 'Agung Adi', 'agung@gmail.com', 'Jl. Depan Stadion 15', '08951234231', '$2y$10$PEGA7NvFNvI6kCvdykpZLenmMqkztswrms1Q5NbMkWYQPxJXP51Y.', 'Aktif', '1bP8Mi8o8kemLjHzv3kBWx7jOdUte4N9CH5x58tQDgVCmqtPP31WwYEZ2lp5', '2021-01-29 20:08:50', '2021-01-29 20:08:50'),
(8, 'Demo Pegawai', 'demo@gmail.com', 'Jl Demo Pegawai', '08123456732', '$2y$10$GzbRnUGXhoJxZX0ygfY3c.aLNDsnf0.V9ecsqIGkRr7be6Oru0tKK', 'Aktif', 'te08fttYdr1IBOIruAX9eYo69aZ2eomqf7UmguBdiPBhshiR7rEY4ObE9VB4', '2021-01-31 09:08:39', '2021-01-31 09:08:39'),
(9, 'Another Admin', 'admin@gmail.com', 'Bojonegoro', '0859212323', '$2y$10$CfoyPThOdmgIzzVFpQgRoeSkxgalOfGB65pqCRQx9mPLVWwcKE5.q', 'Aktif', 'NUMpmlHqISVTdXasHfJChMbLncbPR5OzNUACtYkSL7S8sHmnC77q6aHxJSkO', '2021-01-31 09:13:10', '2021-01-31 09:13:10'),
(10, 'Lana', 'bina@gmail.com', 'Perum Grahadewata, Malang', '085730868055', '$2y$10$8IZDu5gh31ioCaGV4VD40OQOjJO7vq7tBv/DY9.sA/G0XFv.KG6G2', 'Aktif', '8MuPslnH7DUfVLxCSXuxkFLJTjYp48NslRgOV8E2YV3FA3F2kp9yxp5YqcDj', '2022-06-25 08:21:39', '2022-06-25 21:16:19'),
(11, 'Irfansyah', 'irfansyah@gmail.com', 'Perum Pondok Pabean Indah, Probolinggo', '085232060219', '$2y$10$krq6l6awNYRkqEAzxND41uKzLb37ZZzgaT5kxoIGxN/nxjG/c6vYi', 'Aktif', 'gPDmSsfIKeWx5VyL5vLUDKbOTVB3SOkJSx2L0wcVlYWbcfEFUVpfsOGVCSde', '2022-06-25 08:22:32', '2022-06-25 21:16:17'),
(12, 'Iftitah', 'iftitah@gmail.com', 'Wonoasih, Probolinggo', '081808590304', '$2y$10$VEBXaQ5pkZcqKijFWbQqpuepgK32AOf8mpOq2V7U6PiLMvtFy1AIO', 'Aktif', 'rPtjSrCYx5eORQUfyRFuyCorWNNTPsM6zsegWZBwIg0wqhrqqiH0VBPFDJLr', '2022-06-25 21:04:17', '2022-06-25 21:16:13'),
(13, 'Meliusa', 'meli@gmail.com', 'Probolinggo', '081938680321', '$2y$10$bBpNFxBDI5I.WAYfrbKQuOqF3uDfIFBnnE4YnwmnBW4bkk92LrQlW', 'Aktif', 'l80M7TZazNEKOpARFvxvEOZMPm5h7KS21H8xfecM5xuae4zA0ltQU5dGIUbC', '2022-06-27 07:39:38', '2022-06-27 07:40:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
