-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2020 at 01:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproposal`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisys`
--

CREATE TABLE `analisys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anggota_id` bigint(20) UNSIGNED NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `tingkat_pengaruh` int(11) NOT NULL,
  `tingkat_kepentingan` int(11) NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `golongan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `golongan`, `nama`, `proposal_id`, `created_at`, `updated_at`) VALUES
(1, 'Pihak Pemerintah', 'Abd. Asis', 1, '2020-11-18 16:20:05', '2020-11-18 16:20:05'),
(2, 'Pihak Pengusaha / Swasta', 'Zainal Alim', 1, '2020-11-18 16:20:16', '2020-11-18 16:20:16'),
(3, 'Pihak Pemerintah', 'Abd. Asis', 2, '2020-11-27 08:12:05', '2020-11-27 08:12:05');

-- --------------------------------------------------------

--
-- Table structure for table `dampaks`
--

CREATE TABLE `dampaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tantangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengaruh_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `indikator_tujuans`
--

CREATE TABLE `indikator_tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan_prioritas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikator_kinerja` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_awal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisis`
--

CREATE TABLE `kondisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kondisi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab_langsung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swot` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kondisis`
--

INSERT INTO `kondisis` (`id`, `jenis_kondisi`, `kondisi`, `penyebab_langsung`, `swot`, `proposal_id`, `created_at`, `updated_at`) VALUES
(1, 'Baik', 'Dekat dengan persawahan', 'Sangat baik', 'S', 1, '2020-11-18 16:21:17', '2020-11-18 16:21:17'),
(2, 'Baik', 'Jauh dari pabrik', 'Sangat baik', 'S', 1, '2020-11-18 16:21:34', '2020-11-18 16:21:34'),
(3, 'Baik', 'Jauh dari sungai besar', 'Sangat baik', 'S', 1, '2020-11-18 16:21:47', '2020-11-18 16:21:47'),
(4, 'Baik', 'Jauh dari lapindo', 'Sangat baik', 'S', 1, '2020-11-18 16:21:59', '2020-11-18 16:21:59'),
(5, 'Tidak Baik', 'Pengairan sulit', 'Sangat baik', 'W', 1, '2020-11-18 16:22:59', '2020-11-18 16:22:59'),
(6, 'Tidak Baik', 'Tidak ada sumber air', 'Sangat baik', 'W', 1, '2020-11-18 16:23:13', '2020-11-18 16:23:13'),
(7, 'Tidak Baik', 'Jauh dair sungai', 'Sangat baik', 'W', 1, '2020-11-18 16:23:28', '2020-11-18 16:23:28'),
(8, 'Baik', 'Banyak Pencemaran', 'deket dengan lapangan bola', 'T', 1, '2020-11-18 17:04:22', '2020-11-18 17:04:22'),
(9, 'Baik', 'Banyak Penebang Pohon', 'deket dengan lapangan bola', 'T', 1, '2020-11-18 17:04:37', '2020-11-18 17:04:37'),
(10, 'Baik', 'Banyak Orang Pintar', 'deket dengan lapangan bola', 'T', 1, '2020-11-18 17:04:48', '2020-11-18 17:04:48'),
(11, 'Baik', 'Tanah Tidak subur', 'deket dengan lapangan bola', 'W', 1, '2020-11-18 17:05:12', '2020-11-18 17:05:12'),
(12, 'Baik', 'Sawah Tidak Subur', 'deket dengan lapangan bola', 'O', 1, '2020-11-18 17:05:28', '2020-11-18 17:05:28'),
(13, 'Baik', 'Sawah kurang gambur', 'deket dengan lapangan bola', 'O', 1, '2020-11-18 17:05:42', '2020-11-18 17:05:42'),
(14, 'Baik', 'Tidak ada ikan', 'deket dengan lapangan bola', 'O', 1, '2020-11-18 17:05:48', '2020-11-18 17:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `manfaats`
--

CREATE TABLE `manfaats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manfaat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `survey_kondisi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manfaats`
--

INSERT INTO `manfaats` (`id`, `manfaat`, `nilai`, `survey_kondisi_id`, `created_at`, `updated_at`) VALUES
(1, 'Tidak ada ikan', 10, 1, '2020-11-27 15:42:18', '2020-11-27 15:42:18'),
(2, 'Sawah kurang gambur', 20, 2, '2020-11-27 15:44:12', '2020-11-27 15:44:12'),
(3, 'Sawah Tidak Subur', 30, 3, '2020-11-27 15:53:51', '2020-11-27 15:53:51');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_26_064637_create_sessions_table', 1),
(7, '2020_09_26_074647_create_proposals_table', 1),
(8, '2020_09_26_074855_create_anggotas_table', 1),
(9, '2020_11_01_095242_add_status_tahap', 1),
(10, '2020_11_01_120600_create_tingkat_pengaruhs_table', 1),
(11, '2020_11_01_125131_create_respondens_table', 1),
(12, '2020_11_02_114931_create_kondisis_table', 1),
(13, '2020_11_02_121908_create_analisys_table', 1),
(14, '2020_11_03_231523_create_pengaruhs_table', 1),
(15, '2020_11_03_231542_create_dampaks_table', 1),
(16, '2020_11_04_213532_create_survei_pengaruhs_table', 1),
(17, '2020_11_09_223118_create_survei_kondisis_table', 1),
(18, '2020_11_11_104115_create_strategis_table', 1),
(19, '2020_11_11_181252_create_tujuans_table', 1),
(20, '2020_11_14_022543_create_survey_kondisis_table', 1),
(21, '2020_11_14_023458_create_nilai_dampaks_table', 1),
(22, '2020_11_14_023515_create_manfaats_table', 1),
(23, '2020_12_01_001356_create_indikator_tujuans_table', 2),
(24, '2020_12_01_001421_create_target_threats_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_dampaks`
--

CREATE TABLE `nilai_dampaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dampak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `survey_kondisi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_dampaks`
--

INSERT INTO `nilai_dampaks` (`id`, `dampak`, `nilai`, `survey_kondisi_id`, `created_at`, `updated_at`) VALUES
(1, 'Banyak Orang Pintar', 10, 1, '2020-11-27 15:42:18', '2020-11-27 15:42:18'),
(2, 'Banyak Penebang Pohon', 20, 2, '2020-11-27 15:44:12', '2020-11-27 15:44:12'),
(3, 'Banyak Pencemaran', 30, 3, '2020-11-27 15:53:51', '2020-11-27 15:53:51');

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
-- Table structure for table `pengaruhs`
--

CREATE TABLE `pengaruhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtrw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latar_belakang` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_tahap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `judul`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `dusun`, `rtrw`, `latar_belakang`, `created_at`, `updated_at`, `status_tahap`) VALUES
(1, 'Proposal Tentang Penanaman Pohon Jati', 'Jawa Timur', 'Bangkalan', 'Tanah Merah', 'Rongdurin', 'Bandungan', '00/00', '<p>Tidak ada keterangan lebih lanjut tentang artikel in</p>', '2020-11-18 16:19:43', '2020-11-18 16:21:17', '4'),
(2, 'Proposal Tentang Pembangunan Tempat Sampah', 'Jawa Timur', 'Bangkalan', 'Tanah Merah', 'Rongdurin', 'Bandungan', '00/00', '<p>Ini adalah conoth pembuatan proposa</p>', '2020-11-27 08:03:51', '2020-11-27 08:12:05', '2');

-- --------------------------------------------------------

--
-- Table structure for table `respondens`
--

CREATE TABLE `respondens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hy96OmD7MyGdNQMiV7NN49UJgOkiVb3M3vgLIlQR', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWWpLREJ5bHVGQkhVWlB3dWJ5V0M4NTFIQWFNbWVFZHY3Q2JQazR5YiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3N0cmF0ZWdpL2RhZnRhci1wcm9wb3NhbCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1606781557),
('sNj3Y8G8zpTxuTkeZU4JSkEFBHQwl7toNHoW9DlC', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiclJXNm5QMUU2Qm9ZTzRIOE11bEJMamVRY1Z1b0IyRmQ0STB0WnUzMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9pbmRpa2F0b3ItdHVqdWFuL3RhbWJhaCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWlVLRFc5Wlh6OHN1bU5Tblg0c2dDT0U0NmlRL2NoUmtQdk9ZM3lTek5abmFKMEY4ZnpHbGkiO30=', 1606665482);

-- --------------------------------------------------------

--
-- Table structure for table `strategis`
--

CREATE TABLE `strategis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `killerweakness1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kw1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `killerweakness2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kw2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `killerweakness3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sw1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `killerweakness4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sw2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `strategis`
--

INSERT INTO `strategis` (`id`, `killerweakness1`, `kw1`, `tujuan_1`, `killerweakness2`, `kw2`, `tujuan_2`, `killerweakness3`, `sw1`, `tujuan_3`, `killerweakness4`, `sw2`, `tujuan_4`, `proposal_id`, `created_at`, `updated_at`) VALUES
(1, 'Sesuatu', 'yang terjadi', 'pasti', 'akan terjadi', 'dan tidak ', 'akan', 'menolak', 'keadannya', 'yang sudah', 'diatur', 'oleh', 'tuhan', 2, '2020-11-28 08:57:00', '2020-11-28 08:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `survei_kondisis`
--

CREATE TABLE `survei_kondisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_survey` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survei_pengaruhs`
--

CREATE TABLE `survei_pengaruhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengaruh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengurangan_dampak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemanfaatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `survey_kondisis`
--

CREATE TABLE `survey_kondisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengaruh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_kondisis`
--

INSERT INTO `survey_kondisis` (`id`, `pengaruh`, `proposal_id`, `created_at`, `updated_at`) VALUES
(1, 'Jauh dari lapindo', 1, '2020-11-27 15:42:18', '2020-11-27 15:42:18'),
(2, 'Jauh dari lapindo', 1, '2020-11-27 15:44:12', '2020-11-27 15:44:12'),
(3, 'Jauh dari lapindo', 1, '2020-11-27 15:53:51', '2020-11-27 15:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `target_threats`
--

CREATE TABLE `target_threats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_threats` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikator_tujuan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_pengaruhs`
--

CREATE TABLE `tingkat_pengaruhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tujuans`
--

CREATE TABLE `tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikator_tujuan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_awal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_target` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'Abd. Asis', 'mail@abdasis.my.id', NULL, '$2y$10$ZUKDW9ZXz8sumNSnX4sgCOE46iQ/chRkPvOY3ySzNZnaJ0F8fzGli', NULL, NULL, NULL, NULL, NULL, 'fpm', '2020-11-18 16:16:50', '2020-11-18 16:16:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisys`
--
ALTER TABLE `analisys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `analisys_anggota_id_foreign` (`anggota_id`),
  ADD KEY `analisys_proposal_id_foreign` (`proposal_id`),
  ADD KEY `analisys_responden_id_foreign` (`responden_id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggotas_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `dampaks`
--
ALTER TABLE `dampaks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dampaks_pengaruh_id_foreign` (`pengaruh_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `indikator_tujuans`
--
ALTER TABLE `indikator_tujuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisis`
--
ALTER TABLE `kondisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kondisis_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `manfaats`
--
ALTER TABLE `manfaats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manfaats_survey_kondisi_id_foreign` (`survey_kondisi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_dampaks`
--
ALTER TABLE `nilai_dampaks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_dampaks_survey_kondisi_id_foreign` (`survey_kondisi_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaruhs`
--
ALTER TABLE `pengaruhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respondens`
--
ALTER TABLE `respondens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `respondens_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `strategis`
--
ALTER TABLE `strategis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `strategis_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `survei_kondisis`
--
ALTER TABLE `survei_kondisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `survei_kondisis_responden_id_foreign` (`responden_id`);

--
-- Indexes for table `survei_pengaruhs`
--
ALTER TABLE `survei_pengaruhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `survei_pengaruhs_responden_id_foreign` (`responden_id`),
  ADD KEY `survei_pengaruhs_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `survey_kondisis`
--
ALTER TABLE `survey_kondisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `survey_kondisis_proposal_id_foreign` (`proposal_id`);

--
-- Indexes for table `target_threats`
--
ALTER TABLE `target_threats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `target_threats_indikator_tujuan_id_foreign` (`indikator_tujuan_id`);

--
-- Indexes for table `tingkat_pengaruhs`
--
ALTER TABLE `tingkat_pengaruhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tujuans_proposal_id_foreign` (`proposal_id`);

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
-- AUTO_INCREMENT for table `analisys`
--
ALTER TABLE `analisys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dampaks`
--
ALTER TABLE `dampaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indikator_tujuans`
--
ALTER TABLE `indikator_tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisis`
--
ALTER TABLE `kondisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `manfaats`
--
ALTER TABLE `manfaats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nilai_dampaks`
--
ALTER TABLE `nilai_dampaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaruhs`
--
ALTER TABLE `pengaruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `strategis`
--
ALTER TABLE `strategis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survei_kondisis`
--
ALTER TABLE `survei_kondisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survei_pengaruhs`
--
ALTER TABLE `survei_pengaruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_kondisis`
--
ALTER TABLE `survey_kondisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `target_threats`
--
ALTER TABLE `target_threats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkat_pengaruhs`
--
ALTER TABLE `tingkat_pengaruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisys`
--
ALTER TABLE `analisys`
  ADD CONSTRAINT `analisys_anggota_id_foreign` FOREIGN KEY (`anggota_id`) REFERENCES `anggotas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `analisys_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `analisys_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD CONSTRAINT `anggotas_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dampaks`
--
ALTER TABLE `dampaks`
  ADD CONSTRAINT `dampaks_pengaruh_id_foreign` FOREIGN KEY (`pengaruh_id`) REFERENCES `pengaruhs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kondisis`
--
ALTER TABLE `kondisis`
  ADD CONSTRAINT `kondisis_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `manfaats`
--
ALTER TABLE `manfaats`
  ADD CONSTRAINT `manfaats_survey_kondisi_id_foreign` FOREIGN KEY (`survey_kondisi_id`) REFERENCES `survey_kondisis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_dampaks`
--
ALTER TABLE `nilai_dampaks`
  ADD CONSTRAINT `nilai_dampaks_survey_kondisi_id_foreign` FOREIGN KEY (`survey_kondisi_id`) REFERENCES `survey_kondisis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `respondens`
--
ALTER TABLE `respondens`
  ADD CONSTRAINT `respondens_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `strategis`
--
ALTER TABLE `strategis`
  ADD CONSTRAINT `strategis_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survei_kondisis`
--
ALTER TABLE `survei_kondisis`
  ADD CONSTRAINT `survei_kondisis_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survei_pengaruhs`
--
ALTER TABLE `survei_pengaruhs`
  ADD CONSTRAINT `survei_pengaruhs_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `survei_pengaruhs_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `survey_kondisis`
--
ALTER TABLE `survey_kondisis`
  ADD CONSTRAINT `survey_kondisis_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `target_threats`
--
ALTER TABLE `target_threats`
  ADD CONSTRAINT `target_threats_indikator_tujuan_id_foreign` FOREIGN KEY (`indikator_tujuan_id`) REFERENCES `indikator_tujuans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD CONSTRAINT `tujuans_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
