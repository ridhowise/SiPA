-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2020 pada 10.26
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitra`
--

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
(1, '2018_01_12_133713_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `aplikasi` varchar(255) DEFAULT NULL,
  `penjelasan` text NOT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT '0',
  `keterangan` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request`
--

INSERT INTO `request` (`id`, `nama`, `aplikasi`, `penjelasan`, `lampiran`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(61, 'Badan Penanggulangan Bencana Daerah', 'Penanganan bencana', 'penanganan bencana', 'ANDRE TA CEK PLAGIAT.docx', '0', 'tidak layak', '2020-02-22 17:33:20', '2020-03-20 00:41:11'),
(68, 'Dinas Ketahanan Pangan', 'Aplikasi Pangan', 'Pangan', 'Finish 30 Juli.docx', '1', NULL, '2020-02-22 20:10:22', '2020-02-25 02:52:26'),
(73, 'Dinas Ketahanan Pangan', 'Aplikasi Pangan 2', 'hahaha', 'Fian Fix Wisuda 2019.docx', '0', 'gak jelas astaga', '2020-02-24 21:14:05', '2020-02-25 02:52:57'),
(74, 'Dinas Ketahanan Pangan', 'Aplikasi Pangan 3', 'hehehe', 'Kerangka TA-Skripsi (AutoRecovered).docx', NULL, NULL, '2020-02-24 21:16:31', '2020-02-25 02:54:56'),
(75, 'Badan Penanggulangan Bencana Daerah', 'Penanganan bencana 2', 'itu lah', 'Angga Tugas Akhir.docx', '1', NULL, '2020-02-25 02:59:02', '2020-02-25 03:00:32'),
(76, 'Badan Penanggulangan Bencana Daerah', 'Penanganan bencana 3', 'heheheh', 'PCX - Report rosa.pdf', NULL, NULL, '2020-02-25 02:59:24', '2020-02-25 02:59:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `jabatan`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(27, 'ridho', 'ridho', '$2y$10$6QkF79pxJGYPtp8PhklZm.ynvv0jrA1eMr9dLP7KooF4petmxseXG', 'admin', 'ridho.jpg', 'Tc4aovjjaw5sZCm9WkhuUCROWKxQkNhnRjrFARWXrtr5o6byHWEkpCBKyDDW', NULL, '2020-02-25 06:39:45'),
(28, 'Dinas Ketahanan Pangan', 'ketapang', '$2y$10$s/c4ez1s0eRrWgohNqUO/umD1LCFobDxyEyd1w2ec3QQ0ZqHT2et.', 'user', '10999668_325273277643100_7431738826563418399_o.jpg', 'Y2lIOGFZpvPiPZdaYzMA0iO3xJsRDa3IYNfqqZW3ANG34z89yfOc542ej24x', NULL, '2020-02-25 17:38:06'),
(29, 'Badan Penanggulangan Bencana Daerah', 'BPBD', '$2y$10$UrlO00FPXYISD689vZNax.qoc8mfc7OWrJnocLO4ORCpC7nen9aM6', 'user', '45313728_868316790223666_2131786405821546496_n.jpg', '7Zt21JDuDBEqy5rceVbT5GYY7kcbAvtab3HMuGyC8eJi0tQ3FqiYLHZuOp6n', NULL, NULL),
(30, 'Edgar Pontoh', 'ega', '$2y$10$UvDkqqN4V.S/.lx2Jyol3uzikFKmVEr8aVsB/5l4IF5OFXtA4xIdm', 'admin', '1436267388179-197x300.jpg', NULL, NULL, NULL),
(31, 'Yohanes Sahante', 'yohanes', '$2y$10$uei97KlRQRmgsmXpuVA7oOASBuEtkHpna8g36aW3Jk.i7Gpz06xxW', 'admin', 'logo.png', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
