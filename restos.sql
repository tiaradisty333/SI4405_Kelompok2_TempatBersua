-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 08, 2023 at 01:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `restos`
--

CREATE TABLE `restos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaresto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open` time NOT NULL,
  `close` time NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restos`
--

INSERT INTO `restos` (`id`, `namaresto`, `district`, `address`, `open`, `close`, `price`, `upto`, `thumbnail`, `content`, `menu`, `category`, `status`, `rekomen`, `created_at`, `updated_at`) VALUES
(1, '911', 'Buah Batu', 'Talaga Bodas St No.27, South Lingkar, Lengkong, Bandung City, West Java 40263', '10:10:00', '10:10:00', '20000', '50000', '911.jpeg-1673178227.jpg', '911_20180928_170036.jpg-1673178227.jpg', 'menu eighteen.png-1673178227.png', 'gratis', 'approved', 'tidak', '2023-01-08 04:43:47', '2023-01-08 04:43:47'),
(2, 'Bagi Kopi', 'Riau', 'Jl. Naripan No.53, Kb. Pisang, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40112', '10:00:00', '00:00:00', '15000', '50000', 'bagi kopi.png-1673179374.png', 'download.jpg-1673179374.jpg', 'menu bagi kopi.png-1673179374.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:02:54', '2023-01-08 05:02:54'),
(3, 'Bahagia Kopi', 'Riau', 'Jl. Banda No.8, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113', '09:00:00', '22:00:00', '15000', '50000', 'bahagia kp.png-1673179628.png', 'bahagia2.jpg-1673179628.jpg', 'bagagia menu.jpeg-1673179628.jpg', 'gratis', 'approved', 'tidak', '2023-01-08 05:07:08', '2023-01-08 05:07:08'),
(4, 'de.u', 'Dipati Ukur', 'Jl. Dipati Ukur No.43 / 60', '12:00:00', '23:00:00', '40000', '70000', 'de.u kopi.jpeg-1673179986.jpg', 'deu2.jpg-1673179986.jpg', 'menu de u.png-1673179986.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:13:07', '2023-01-08 05:13:07'),
(5, 'Didago Kopi', 'Dago', 'Jl. Ir. H. Juanda No.. 21, Tamansari, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40135', '13:00:00', '00:00:00', '40000', '80000', 'didago kopi.jpg-1673180145.jpg', 'didago3.jpg-1673180145.jpg', 'menu didago.png-1673180145.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:15:45', '2023-01-08 05:15:45'),
(6, 'Dua Kopi', 'Riau', 'Jl. Taman Cemp. No.7, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113', '10:00:00', '00:00:00', '20000', '60000', 'dua kopi.jpg-1673180356.jpg', 'dua3.jpg-1673180356.jpg', 'menu dua kopi.png-1673180356.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:19:16', '2023-01-08 05:19:16'),
(7, 'Eighteen Coffee', 'Dago', 'Jl. Cemara No. 46, Sukajadi, Bandung', '13:00:00', '00:00:00', '30000', '100000', 'eighteen.jpg-1673180502.jpg', '18.jpg-1673180502.jpg', 'menu eighteen.png-1673180502.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:21:42', '2023-01-08 05:21:42'),
(8, 'Hamsa Coffee', 'Riau', 'Jl. Ciliwung No. 29, Riau, Bandung', '12:00:00', '23:00:00', '25000', '50000', 'hamsa kopi.png-1673180639.png', 'hamsa1.png-1673180639.png', 'menu hamsa.png-1673180639.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:23:59', '2023-01-08 05:23:59'),
(9, 'Kawan Kopi', 'Riau', 'Jl. Hayam Wuruk No. 30, Gedung Sate, Bandung', '10:00:00', '22:00:00', '20000', '50000', 'kawan kopi.png-1673180799.png', 'kawan2.jpg-1673180799.jpg', 'menu kawan kopi.png-1673180799.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:26:39', '2023-01-08 05:26:39'),
(10, 'Kilogram', 'Dago', 'Jl. Karang Tinggal No. 24, Sukajadi, Bandung', '10:00:00', '23:00:00', '40000', '100000', 'kilogram.jpg-1673181031.jpg', 'kilogram3.jpg-1673181031.jpg', 'menu kilogram .png-1673181031.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:30:31', '2023-01-08 05:30:31'),
(11, 'Kisah Manis', 'Riau', 'Jl. Sunda No. 65, Sunda, Bandung', '10:00:00', '23:00:00', '25000', '100000', 'kisah manis fix.jpg-1673181213.jpg', 'kisah manis.jpg-1673181213.jpg', 'Menu kisah manis .png-1673181213.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:33:33', '2023-01-08 05:33:33'),
(12, 'Railway', 'Dago', 'Jl. Kebon Jukut No. 17, Cicendo, Bandung', '10:00:00', '22:00:00', '15000', '60000', 'railway.png-1673181379.png', 'railway3.jpg-1673181379.jpg', 'menu railway.png-1673181379.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:36:19', '2023-01-08 05:36:19'),
(13, 'Segi Coffee', 'Dago', 'Jl. Cihampelas No. 144, Cihampelas, Bandung', '08:00:00', '21:00:00', '25000', '70000', 'segi kopi.png-1673181537.png', 'segi3.jpg-1673181537.jpg', 'menu segi kopi.png-1673181537.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:38:57', '2023-01-08 05:38:57'),
(14, 'Kopi Toko Djawa', 'Riau', 'Jl. Braga No. 81, Braga, Bandung', '07:00:00', '22:00:00', '15000', '60000', 'tokjaww.jpeg-1673181712.jpg', 'tokjaw3.png-1673181712.png', 'menu tokjaw.png-1673181712.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:41:52', '2023-01-08 05:41:52'),
(15, 'Work Coffee', 'Riau', 'Jl. Sumbawa No. 28, Riau, Bandung', '07:00:00', '22:00:00', '25000', '100000', 'work-coffee.jpg-1673181843.jpg', 'work3.png-1673181843.png', 'menu work .png-1673181843.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:44:03', '2023-01-08 05:44:03'),
(16, 'Revuse Cafe', 'Dago', 'Jl. Tubagus Ismail Raya No. 34, Dago Atas, Bandung', '08:00:00', '22:00:00', '30000', '100000', 'WhatsApp Image 2022-12-28 at 22.29.11.jpeg-1673182001.jpg', 'revuse3.jpg-1673182001.jpg', 'salah satu menu reveuse.png-1673182001.png', 'gratis', 'approved', 'tidak', '2023-01-08 05:46:41', '2023-01-08 05:46:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restos`
--
ALTER TABLE `restos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restos`
--
ALTER TABLE `restos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
