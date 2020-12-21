-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 07:04 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proposal`
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_anggota` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analisys`
--

INSERT INTO `analisys` (`id`, `anggota_id`, `proposal_id`, `tingkat_pengaruh`, `tingkat_kepentingan`, `responden_id`, `created_at`, `updated_at`, `nama_anggota`) VALUES
(37, 23, 5, 4, 3, 3, '2020-12-08 23:32:41', '2020-12-08 23:32:41', 'Halim'),
(38, 24, 5, 3, 3, 3, '2020-12-08 23:32:41', '2020-12-08 23:32:41', 'Bapedda'),
(39, 25, 5, 4, 2, 3, '2020-12-08 23:32:41', '2020-12-08 23:32:41', 'PT Baliho'),
(40, 26, 5, 3, 4, 3, '2020-12-08 23:32:41', '2020-12-08 23:32:41', 'FPI'),
(41, 27, 5, 3, 4, 3, '2020-12-08 23:32:41', '2020-12-08 23:32:41', 'Dosen UTM'),
(42, 23, 5, 2, 2, 4, '2020-12-08 23:36:37', '2020-12-08 23:36:37', 'Halim'),
(43, 24, 5, 3, 3, 4, '2020-12-08 23:36:37', '2020-12-08 23:36:37', 'Bapedda'),
(44, 25, 5, 3, 2, 4, '2020-12-08 23:36:37', '2020-12-08 23:36:37', 'PT Baliho'),
(45, 26, 5, 4, 3, 4, '2020-12-08 23:36:37', '2020-12-08 23:36:37', 'FPI'),
(46, 27, 5, 3, 3, 4, '2020-12-08 23:36:37', '2020-12-08 23:36:37', 'Dosen UTM'),
(47, 23, 5, 4, 4, 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03', 'Halim'),
(48, 24, 5, 4, 4, 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03', 'Bapedda'),
(49, 25, 5, 4, 4, 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03', 'PT Baliho'),
(50, 26, 5, 4, 4, 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03', 'FPI'),
(51, 27, 5, 4, 4, 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03', 'Dosen UTM'),
(52, 23, 5, 4, 4, 6, '2020-12-09 00:09:26', '2020-12-09 00:09:26', 'Halim'),
(53, 24, 5, 4, 4, 6, '2020-12-09 00:09:26', '2020-12-09 00:09:26', 'Bapedda'),
(54, 25, 5, 4, 4, 6, '2020-12-09 00:09:26', '2020-12-09 00:09:26', 'PT Baliho'),
(55, 26, 5, 4, 4, 6, '2020-12-09 00:09:26', '2020-12-09 00:09:26', 'FPI'),
(56, 27, 5, 4, 4, 6, '2020-12-09 00:09:26', '2020-12-09 00:09:26', 'Dosen UTM'),
(57, 28, 7, 4, 4, 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57', 'dinas koperasi'),
(58, 29, 7, 4, 4, 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57', 'PT wings'),
(59, 30, 7, 4, 4, 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57', 'Hasan'),
(60, 31, 7, 4, 4, 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57', 'Remas'),
(61, 32, 7, 4, 4, 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57', 'Dosen UTM'),
(62, 33, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'asdas'),
(63, 34, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'asdas'),
(64, 35, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'asdasd'),
(65, 36, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'dasd'),
(66, 37, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'dfsd'),
(67, 38, 8, 4, 4, 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35', 'sdfsdf'),
(68, 44, 11, 4, 4, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'KEPALA DESA/AHMAD SUHDI'),
(69, 45, 11, 2, 4, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'PENGRAJIN DAN PENJUAL BATIK/SUMIATI'),
(70, 46, 11, 3, 2, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'PERANGKAT DESA/PUJIONO'),
(71, 50, 11, 2, 2, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'KAUR PEMERINTAH SEKALIGUS BENDAHARA PKK/HJ. SAMSIYAH'),
(72, 51, 11, 3, 2, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'BENDAHARA DESA/HERMAN'),
(73, 53, 11, 4, 3, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'KETUA PKK/SYARIFAH'),
(74, 54, 11, 3, 3, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'AKADEMISI UTM/Dr. KURNIYATI INDAHSARI, M.Si.'),
(75, 56, 11, 2, 2, 9, '2020-12-13 21:06:23', '2020-12-13 21:06:23', 'MAHASISWA/NINDYA PRASINTA SAFITRI'),
(76, 44, 11, 4, 3, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'KEPALA DESA/AHMAD SUHDI'),
(77, 45, 11, 3, 4, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'PENGRAJIN DAN PENJUAL BATIK/SUMIATI'),
(78, 46, 11, 3, 2, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'PERANGKAT DESA/PUJIONO'),
(79, 50, 11, 2, 2, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'KAUR PEMERINTAH SEKALIGUS BENDAHARA PKK/HJ. SAMSIYAH'),
(80, 51, 11, 3, 2, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'BENDAHARA DESA/HERMAN'),
(81, 53, 11, 4, 3, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'KETUA PKK/SYARIFAH'),
(82, 54, 11, 3, 2, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'AKADEMISI UTM/Dr. KURNIYATI INDAHSARI, M.Si.'),
(83, 56, 11, 3, 2, 10, '2020-12-13 21:11:47', '2020-12-13 21:11:47', 'MAHASISWA/NINDYA PRASINTA SAFITRI'),
(84, 44, 11, 3, 4, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'KEPALA DESA/AHMAD SUHDI'),
(85, 45, 11, 2, 4, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'PENGRAJIN DAN PENJUAL BATIK/SUMIATI'),
(86, 46, 11, 3, 2, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'PERANGKAT DESA/PUJIONO'),
(87, 50, 11, 2, 2, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'KAUR PEMERINTAH SEKALIGUS BENDAHARA PKK/HJ. SAMSIYAH'),
(88, 51, 11, 3, 3, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'BENDAHARA DESA/HERMAN'),
(89, 53, 11, 4, 4, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'KETUA PKK/SYARIFAH'),
(90, 54, 11, 3, 3, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'AKADEMISI UTM/Dr. KURNIYATI INDAHSARI, M.Si.'),
(91, 56, 11, 2, 3, 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02', 'MAHASISWA/NINDYA PRASINTA SAFITRI'),
(92, 39, 10, 4, 4, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Kepala Desa/Moh Ilyas '),
(93, 40, 10, 3, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Perangkat Desa/Moh Halili'),
(94, 41, 10, 3, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Perangkat Desa/Nurut Taufiq '),
(95, 42, 10, 3, 2, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'PT TIGA JAYA/H. Mustofa'),
(96, 43, 10, 4, 2, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Tokoh Masyarakat/Rokib '),
(97, 47, 10, 4, 2, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Tokoh Agama/H. Rohim '),
(98, 48, 10, 3, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Pendamping Kepemudaan/Moh. Bahar'),
(99, 49, 10, 3, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Kelompok Tani/Khafiluddin'),
(100, 52, 10, 3, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Akademisi UTM/Kurniyati Indahsari'),
(101, 57, 10, 3, 2, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Kepala Dusun/Bisahri'),
(102, 58, 10, 2, 3, 12, '2020-12-13 21:16:00', '2020-12-13 21:16:00', 'Mahasiswa/Dicky Rozaha Yandi '),
(103, 39, 10, 4, 4, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Kepala Desa/Moh Ilyas '),
(104, 40, 10, 3, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Perangkat Desa/Moh Halili'),
(105, 41, 10, 3, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Perangkat Desa/Nurut Taufiq '),
(106, 42, 10, 3, 2, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'PT TIGA JAYA/H. Mustofa'),
(107, 43, 10, 4, 2, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Tokoh Masyarakat/Rokib '),
(108, 47, 10, 4, 2, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Tokoh Agama/H. Rohim '),
(109, 48, 10, 3, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Pendamping Kepemudaan/Moh. Bahar'),
(110, 49, 10, 3, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Kelompok Tani/Khafiluddin'),
(111, 52, 10, 3, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Akademisi UTM/Kurniyati Indahsari'),
(112, 57, 10, 3, 2, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Kepala Dusun/Bisahri'),
(113, 58, 10, 2, 3, 13, '2020-12-13 21:16:40', '2020-12-13 21:16:40', 'Mahasiswa/Dicky Rozaha Yandi ');

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
(23, 'Pihak Individu Masyarakat', 'Halim', 5, '2020-12-08 23:28:07', '2020-12-08 23:28:07'),
(24, 'Pihak Pemerintah', 'Bapedda', 5, '2020-12-08 23:28:24', '2020-12-08 23:28:24'),
(25, 'Pihak Pengusaha / Swasta', 'PT Baliho', 5, '2020-12-08 23:28:56', '2020-12-08 23:28:56'),
(26, 'Pihak Lembaga/Organisasi di Masyarakat', 'FPI', 5, '2020-12-08 23:29:11', '2020-12-08 23:29:11'),
(27, 'Pihak Akademisi', 'Dosen UTM', 5, '2020-12-08 23:29:26', '2020-12-08 23:29:26'),
(28, 'Pihak Pemerintah', 'dinas koperasi', 7, '2020-12-09 00:29:18', '2020-12-09 00:29:18'),
(29, 'Pihak Pengusaha / Swasta', 'PT wings', 7, '2020-12-09 00:30:16', '2020-12-09 00:30:16'),
(30, 'Pihak Individu Masyarakat', 'Hasan', 7, '2020-12-09 00:30:34', '2020-12-09 00:30:34'),
(31, 'Pihak Lembaga/Organisasi di Masyarakat', 'Remas', 7, '2020-12-09 00:30:55', '2020-12-09 00:30:55'),
(32, 'Pihak Akademisi', 'Dosen UTM', 7, '2020-12-09 00:31:06', '2020-12-09 00:31:06'),
(33, 'Pihak Pemerintah', 'asdas', 8, '2020-12-09 04:15:35', '2020-12-09 04:15:35'),
(34, 'Pihak Pengusaha / Swasta', 'asdas', 8, '2020-12-09 04:15:41', '2020-12-09 04:15:41'),
(35, 'Pihak Individu Masyarakat', 'asdasd', 8, '2020-12-09 04:15:48', '2020-12-09 04:15:48'),
(36, 'Pihak Individu Masyarakat', 'dasd', 8, '2020-12-09 04:16:06', '2020-12-09 04:16:06'),
(37, 'Pihak Lembaga/Organisasi di Masyarakat', 'dfsd', 8, '2020-12-09 04:16:27', '2020-12-09 04:16:27'),
(38, 'Pihak Akademisi', 'sdfsdf', 8, '2020-12-09 04:16:39', '2020-12-09 04:16:39'),
(39, 'Pihak Pemerintah', 'Kepala Desa/Moh Ilyas ', 10, '2020-12-13 19:45:04', '2020-12-13 19:45:04'),
(40, 'Pihak Pemerintah', 'Perangkat Desa/Moh Halili', 10, '2020-12-13 19:47:15', '2020-12-13 19:47:15'),
(41, 'Pihak Pemerintah', 'Perangkat Desa/Nurut Taufiq ', 10, '2020-12-13 19:48:03', '2020-12-13 19:48:03'),
(42, 'Pihak Pengusaha / Swasta', 'PT TIGA JAYA/H. Mustofa', 10, '2020-12-13 19:49:20', '2020-12-13 19:49:20'),
(43, 'Pihak Individu Masyarakat', 'Tokoh Masyarakat/Rokib ', 10, '2020-12-13 19:50:07', '2020-12-13 19:50:07'),
(44, 'Pihak Pemerintah', 'KEPALA DESA/AHMAD SUHDI', 11, '2020-12-13 19:50:12', '2020-12-13 19:50:12'),
(45, 'Pihak Pengusaha / Swasta', 'PENGRAJIN DAN PENJUAL BATIK/SUMIATI', 11, '2020-12-13 19:51:28', '2020-12-13 19:51:28'),
(46, 'Pihak Individu Masyarakat', 'PERANGKAT DESA/PUJIONO', 11, '2020-12-13 19:52:43', '2020-12-13 19:52:43'),
(47, 'Pihak Individu Masyarakat', 'Tokoh Agama/H. Rohim ', 10, '2020-12-13 19:52:58', '2020-12-13 19:52:58'),
(48, 'Pihak Individu Masyarakat', 'Pendamping Kepemudaan/Moh. Bahar', 10, '2020-12-13 19:53:24', '2020-12-13 19:53:24'),
(49, 'Pihak Lembaga/Organisasi di Masyarakat', 'Kelompok Tani/Khafiluddin', 10, '2020-12-13 19:54:13', '2020-12-13 19:54:13'),
(50, 'Pihak Individu Masyarakat', 'KAUR PEMERINTAH SEKALIGUS BENDAHARA PKK/HJ. SAMSIYAH', 11, '2020-12-13 19:55:07', '2020-12-13 19:55:07'),
(51, 'Pihak Individu Masyarakat', 'BENDAHARA DESA/HERMAN', 11, '2020-12-13 19:56:22', '2020-12-13 19:56:22'),
(52, 'Pihak Akademisi', 'Akademisi UTM/Kurniyati Indahsari', 10, '2020-12-13 19:56:58', '2020-12-13 19:56:58'),
(53, 'Pihak Lembaga/Organisasi di Masyarakat', 'KETUA PKK/SYARIFAH', 11, '2020-12-13 19:57:22', '2020-12-13 19:57:22'),
(54, 'Pihak Akademisi', 'AKADEMISI UTM/Dr. KURNIYATI INDAHSARI, M.Si.', 11, '2020-12-13 20:04:12', '2020-12-13 20:04:12'),
(56, 'Pihak Akademisi', 'MAHASISWA/NINDYA PRASINTA SAFITRI', 11, '2020-12-13 20:05:17', '2020-12-13 20:05:17'),
(57, 'Pihak Pemerintah', 'Kepala Dusun/Bisahri', 10, '2020-12-13 20:05:19', '2020-12-13 20:05:19'),
(58, 'Pihak Akademisi', 'Mahasiswa/Dicky Rozaha Yandi ', 10, '2020-12-13 20:06:02', '2020-12-13 20:06:02');

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
-- Table structure for table `indikator_kegiatans`
--

CREATE TABLE `indikator_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan_prioritas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_kegiatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kegiaatan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikator_kinerja` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_awal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_target` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kegiatan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indikator_kegiatans`
--

INSERT INTO `indikator_kegiatans` (`id`, `tujuan_prioritas`, `no_kegiatan`, `kegiaatan`, `indikator_kinerja`, `nilai_awal`, `nilai_target`, `proposal_id`, `created_at`, `updated_at`, `kegiatan_id`) VALUES
(14, 'Dasd', NULL, 'Pelatihan', 'Asdasa', '0', '[\"das\"]', 8, '2020-12-09 04:43:48', '2020-12-09 04:43:48', 7),
(15, 'Mengurangi dampak kurangnya pengairan (bor air)', NULL, 'Pengeborang titik-titik sumber air baru ', 'Jumlah partisipasi masyarakat untuk mencapai sasaran ', '0', '[\"30\",\"40\"]', 10, '2020-12-14 01:08:50', '2020-12-14 01:08:50', 8),
(16, 'Mengurangi dampak kurangnya pemanfaatan teknologi				', NULL, 'Pelatihan penggunaan Gadget (HP) sebagai sarana pencari informsi / sarana belajar\n', 'Jumlah peserat (sasaran proyek) pelatihan\n', '0', '[\"20\",\"20\"]', 11, '2020-12-14 01:09:51', '2020-12-14 01:09:51', 9),
(17, 'Mengurangi dampak kurangnya pengetahuan ilmu pertanian  di masyarakat', NULL, 'Pelatihan oengembangan ilmu pertanian ', 'Hasil dari pelatihan peserta pengembangan ilmu pertanian ', '0', '[\"30\",\"40\"]', 10, '2020-12-14 01:12:03', '2020-12-14 01:12:03', 10),
(18, 'Mengurangi dampak keterbatasan dana/modal				', NULL, '\nPenggalangan dana secara polentir dan membangun unit bisnis baru ', 'Jumlah dana yang terkumpul dan jumlah unit usaha baru yang dibangun\n', '0', '[\"25\",\"30\"]', 11, '2020-12-14 01:20:26', '2020-12-14 01:20:26', 11),
(19, 'Mengurangi dampak keterbatasan dana/modal				', NULL, 'Penggalangan dana secara polentir dan membangun', 'Jumlah dana yang terkumpul dan jumlah unit usaha baru ', '0', '[\"20\",\"20\"]', 11, '2020-12-20 07:23:42', '2020-12-20 07:23:42', 11);

-- --------------------------------------------------------

--
-- Table structure for table `indikator_tujuans`
--

CREATE TABLE `indikator_tujuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tujuan_prioritas` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indikator_kinerja` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_awal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_target` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `tujuan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `indikator_tujuans`
--

INSERT INTO `indikator_tujuans` (`id`, `tujuan_prioritas`, `indikator_kinerja`, `nilai_awal`, `nilai_target`, `proposal_id`, `tujuan_id`, `created_at`, `updated_at`) VALUES
(1, 'Mengurangi dampak kurangnya pengairan (bor air)', 'test', '20', '[\"20\",\"23\"]', 10, 1, '2020-12-20 08:59:12', '2020-12-20 08:59:12'),
(2, 'Mengurangi dampak kurangnya pengairan (bor air)', 'test 2', '0', '[\"23\",\"25\"]', 10, 1, '2020-12-20 09:06:25', '2020-12-20 09:06:25'),
(3, 'Mengurangi dampak kurangnya pengairan (bor air)', 'Test Lagi yaah', '0', '{\"0\":\"20\",\"2\":\"30\",\"3\":\"40\",\"5\":\"50\"}', 10, 1, '2020-12-20 09:54:36', '2020-12-20 09:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `nama_kegiatan`, `created_at`, `updated_at`, `proposal_id`) VALUES
(7, 'dasd', '2020-12-09 04:43:48', '2020-12-09 04:43:48', 8),
(8, 'Mengurangi dampak kurangnya pengairan (bor air)', '2020-12-14 01:08:50', '2020-12-14 01:08:50', 10),
(9, 'Mengurangi dampak kurangnya pemanfaatan teknologi				', '2020-12-14 01:09:51', '2020-12-14 01:09:51', 11),
(10, 'Mengurangi dampak kurangnya pengetahuan ilmu pertanian  di masyarakat', '2020-12-14 01:12:03', '2020-12-14 01:12:03', 10),
(11, 'Mengurangi dampak keterbatasan dana/modal				', '2020-12-14 01:20:26', '2020-12-14 01:20:26', 11);

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
(28, 'Baik', 'kondisi tanah mendukung', 'banyak warga yang mendukung', 'S', 7, '2020-12-09 00:43:07', '2020-12-09 00:43:07'),
(29, 'Baik', 'kondisi tanah mendukung', 'banyak warga yang mendukung', 'W', 7, '2020-12-09 00:43:30', '2020-12-09 00:43:30'),
(30, 'Baik', 'kondisi tanah mendukung', 'banyak warga yang mendukung', 'O', 7, '2020-12-09 00:43:47', '2020-12-09 00:43:47'),
(31, 'Tidak Baik', 'kondisi tanah mendukung', 'banyak warga yang mendukung', 'T', 7, '2020-12-09 00:43:56', '2020-12-09 00:43:56'),
(32, 'Baik', 'Kelompok perempuan/ibu-ibu PKK cukup aktiv', 'Rasa kepedulian dan sosial masyarakat', 'S', 8, '2020-12-09 04:23:45', '2020-12-09 04:23:45'),
(33, 'Baik', 'Memiliki produk unggulan desa yaitu batik Telaga Biru', 'Merupakan aktivitas turun temurun yaitu membatik', 'O', 8, '2020-12-09 04:24:45', '2020-12-09 04:24:45'),
(34, 'Tidak Baik', 'Memiliki produk unggulan desa yaitu batik Telaga Biru', 'Merupakan aktivitas turun temurun yaitu membatik', 'W', 8, '2020-12-09 04:25:04', '2020-12-09 04:25:04'),
(35, 'Tidak Baik', 'Memiliki produk unggulan desa yaitu batik Telaga Biru', 'Merupakan aktivitas turun temurun yaitu membatik', 'T', 8, '2020-12-09 04:25:14', '2020-12-09 04:25:14'),
(36, 'Baik', 'Kelompok PKK cukup aktif', 'Rasa sosial masyarakat sangat kuat', 'S', 11, '2020-12-13 21:34:33', '2020-12-13 21:34:33'),
(37, 'Baik', 'Tanah Subur', 'Ada tanaman yang tumbuh', 'S', 10, '2020-12-13 21:36:29', '2020-12-13 21:36:29'),
(38, 'Baik', 'Lahan luas ', 'Belum dimanfaatkan ', 'S', 10, '2020-12-13 21:37:32', '2020-12-13 21:37:32'),
(40, 'Baik', 'Ada kemauan yang tinggi masyarakat desa', 'Antusias ingin  menghilangkan image negatif ', 'S', 10, '2020-12-13 21:38:27', '2020-12-13 21:38:27'),
(41, 'Baik', 'Kelompok masyarakat desa yang tinggi', 'Masyarakat desa sangat guyup dan bergotong royong', 'S', 11, '2020-12-13 21:38:27', '2020-12-13 21:38:27'),
(42, 'Baik', 'Tersedianya sumber air', 'Adanya titik sumber air ', 'S', 10, '2020-12-13 21:39:03', '2020-12-13 21:39:03'),
(45, 'Baik', 'Banyaknya Sarjana Muda ', 'Mengembangkan ilmu ', 'S', 10, '2020-12-13 21:58:32', '2020-12-13 21:58:32'),
(46, 'Baik', 'Dana masyarakat ', 'Masyarakat memiliki modal ', 'S', 10, '2020-12-13 21:58:52', '2020-12-13 21:58:52'),
(47, 'Baik', 'Lokasi strategis ', 'Jalan yang bagus dekat dengan Suramadu dan Kabupaten', 'O', 10, '2020-12-13 21:59:15', '2020-12-13 21:59:15'),
(50, 'Tidak Baik', '10 tahun lahan tidak dimanfaatkan', 'Minimnya ilmu pertanian sehingga bertani dengan cara tradisional', 'W', 10, '2020-12-13 21:59:59', '2020-12-13 21:59:59'),
(51, 'Tidak Baik', 'Banyak mahasiswa tidak bekerja', 'Malu bekerja di sektor pertanian', 'W', 10, '2020-12-13 22:00:28', '2020-12-13 22:00:28'),
(52, 'Tidak Baik', 'Lahan tadah hujan', 'Kurangnya pengairan (bor air)', 'W', 10, '2020-12-13 22:00:59', '2020-12-13 22:00:59'),
(55, 'Tidak Baik', 'Peran kelompok tani yang kurang maksimal ', 'Pemberdayaan pertanian yang kurang  maksimal ', 'T', 10, '2020-12-13 22:01:57', '2020-12-13 22:01:57'),
(56, 'Tidak Baik', 'Penyuluhan dari Dinas Pertanian yang minim', 'Kurang koordinasi dengan dinas pertanian ', 'T', 10, '2020-12-13 22:02:32', '2020-12-13 22:02:32'),
(64, 'Baik', 'Wisata pantai biru menjadi lapangan kerja baru ', 'Adanya peluang/ kesempatan kerja bagi masyarakat. ', 'O', 11, '2020-12-13 22:59:57', '2020-12-13 22:59:57'),
(65, 'Tidak Baik', 'Kurangnya lahan/lahan sempit di desa Telaga Biru', 'Dari segi geografi memang desa Telaga Biru tidak cukup luas', 'W', 11, '2020-12-13 23:00:54', '2020-12-13 23:00:54'),
(66, 'Tidak Baik', 'Susah untuk ditanami pepohonan disekitar wisata pantai biru', 'Karena tanah di wisata pantai biru mengandung air asin ', 'W', 11, '2020-12-13 23:01:44', '2020-12-13 23:01:44'),
(67, 'Tidak Baik', 'Keterbatasan masyarakat desa terkait penggunaan teknologi ', 'Masyarakat tidak cukup fasih dan keterbatasan ilmu ', 'W', 11, '2020-12-13 23:02:39', '2020-12-13 23:02:39'),
(68, 'Tidak Baik', 'Akses menuju lokasi wisata lumayan jauh dan sempit', 'Karena memang keterbatasan dari segi geografi desa', 'W', 11, '2020-12-13 23:03:17', '2020-12-13 23:03:17'),
(69, 'Tidak Baik', 'Dana sebagai modal terbatas', 'Belum adanya investor/pengusaha luar yang masuk', 'T', 11, '2020-12-13 23:03:58', '2020-12-13 23:03:58'),
(70, 'Tidak Baik', 'Belum adanya tempat industri batik di desa', 'Keterbatasan dana serta masih dalam proses rencana kepala desa', 'T', 11, '2020-12-13 23:04:30', '2020-12-13 23:04:30');

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
(24, '2020_12_01_001421_create_target_threats_table', 2),
(29, '2014_10_12_000000_create_users_table', 3),
(30, '2014_10_12_100000_create_password_resets_table', 3),
(31, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(32, '2019_08_19_000000_create_failed_jobs_table', 3),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(34, '2020_09_26_064637_create_sessions_table', 3),
(35, '2020_09_26_074647_create_proposals_table', 3),
(36, '2020_09_26_074855_create_anggotas_table', 3),
(37, '2020_11_01_095242_add_status_tahap', 3),
(38, '2020_11_01_120600_create_tingkat_pengaruhs_table', 3),
(39, '2020_11_01_125131_create_respondens_table', 3),
(40, '2020_11_02_114931_create_kondisis_table', 3),
(41, '2020_11_02_121908_create_analisys_table', 3),
(42, '2020_11_03_231523_create_pengaruhs_table', 3),
(43, '2020_11_03_231542_create_dampaks_table', 3),
(44, '2020_11_04_213532_create_survei_pengaruhs_table', 3),
(45, '2020_11_09_223118_create_survei_kondisis_table', 3),
(46, '2020_11_11_104115_create_strategis_table', 3),
(47, '2020_11_11_181252_create_tujuans_table', 3),
(48, '2020_11_14_022543_create_survey_kondisis_table', 3),
(49, '2020_11_14_023458_create_nilai_dampaks_table', 3),
(50, '2020_11_14_023515_create_manfaats_table', 3),
(52, '2020_12_01_230114_create_indikator_kegiatans_table', 3),
(53, '2020_12_04_000616_create_penetuan_rencanas_table', 3),
(54, '2020_12_08_132941_create_kegiatans_table', 3),
(55, '2020_12_08_153106_add_relations_kegiatan', 3),
(56, '2020_12_01_001356_create_indikator_tujuans_table', 4);

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
-- Table structure for table `penetuan_rencanas`
--

CREATE TABLE `penetuan_rencanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_kegiatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_kegiatan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sumber_daya` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penanggung_jawab` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penetuan_rencanas`
--

INSERT INTO `penetuan_rencanas` (`id`, `nomor_kegiatan`, `sub_kegiatan`, `sumber_daya`, `penanggung_jawab`, `jadwal`, `proposal_id`, `created_at`, `updated_at`) VALUES
(10, '1', 'Pelatihan', 'dasdas', 'dasdas', '[\"Februari-Maret 2021\"]', 8, '2020-12-09 04:45:25', '2020-12-09 04:45:25'),
(11, '1', 'Pelatihan oengembangan ilmu pertanian ', 'Narasumber\nDana Pelatihan \nGedung\nPeralatan dan Perlengkapan \nKomsumsi', 'Perangkat Desa/Moh Halili\nPendamping Kepemudaan/Moh Bahar', '[\"Januari 2021\",\"Januari 2012\"]', 10, '2020-12-14 01:34:50', '2020-12-14 01:34:50'),
(12, '1', 'Pelatihan oengembangan ilmu pertanian ', 'Narasumber\nDana Pelatihan \nGedung\nPeralatan dan Perlengkapan \nKomsumsi', 'Perangkat Desa/Moh Halili\nPendamping Kepemudaan/Moh Bahar', '[\"Januari 2021\",\"Januari 2021\"]', 10, '2020-12-14 01:35:59', '2020-12-14 01:35:59'),
(13, '1', '\nPenggalangan dana secara polentir dan membangun unit bisnis baru ', 'Sumber daya modal (bendahara desa)\nRelasi\nKonsumsi\nPeralatan dan perlengkapan', 'BENDAHARA DESA/HERMAN\nPerangkat desa/Pujiono', '[\"15 Januari 2021\",\"15 Januari 2021\"]', 11, '2020-12-14 01:36:31', '2020-12-14 01:36:31'),
(14, '1', 'Pengeborang titik-titik sumber air baru ', 'Dana pengemboran\nKonsumsi\nPeralatan dan Perlengkapan ', 'Perangkat Desa/Nurut Taufiq\nPendamping Kepemudaan/Moh Bahar', '[\"Januari 2021\",\"Januari 2021\"]', 10, '2020-12-14 01:37:39', '2020-12-14 01:37:39'),
(15, '2', 'Pelatihan penggunaan Gadget (HP) sebagai sarana pencari informsi / sarana belajar\n', 'Relasi\nKonsumsi\nPeralatan dan perlengkapan', 'Perangkat desa/Pujiono\nKetua PKK/Syarifah', '[\"06 Februari 2021\",\"14 Februari 2021\"]', 11, '2020-12-14 01:40:22', '2020-12-14 01:40:22');

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
(5, 'Pengembangan Ekonomi Rumahtangga melalui Pengelolaan Sampah Domestik', 'Jawa Timur', 'Bangkalan', 'Kamal', 'Telang', 'Telang asri', '03/04', '<p>pre memor</p>', '2020-12-08 23:15:34', '2020-12-08 23:37:30', '4'),
(6, 'hkshflkfhslfl;s', 'algl;jg;s', 'fklshlkg', 'fkshklfhl', 'nkhslgkhdkl', 'bjkfsjfakj', 'fjajgsk', '<p>1.1. Permasalahan</p>\n<p>jsljflsjljgl</p>\n<p>hsfkjsdklfjld</p>\n<p>1.2. Potensi&nbsp;</p>\n<p>nkskfhksdh</p>\n<p>bjsgfdkjkjshj</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>', '2020-12-08 23:30:48', '2020-12-08 23:30:48', '1'),
(7, 'Pengembangan Produk Pisang Dusun Suka Makmur', 'Jawa timur', 'das', 'dasda', 'dasd', 'dasd', '04/05', '<p>adsdasda</p>', '2020-12-09 00:28:26', '2020-12-09 00:42:29', '4'),
(8, 'Pemberdayaan Ekonomi Kelompok Perempuan dalam Pariwisata Berbasis Masyarakat (Studi Kasus Objek Wisata Pantai Biru Desa Telaga Biru Kecamatan Tanjung Bumi', 'Jatim', 'Bangkalan', 'tanjung Bumi', 'telaga biru', 'jeddih', '01/01', '', '2020-12-09 04:13:01', '2020-12-09 04:23:45', '4'),
(9, 'PEMBERDAYAAN EKONOMI KELOMPOK PEREMPUAN (PKK) DALAM PARIWISATA BERBASIS MASYARAKAT (STUDI KASUS OBJEK WISATA PANTAI BIRU DI DESA TELAGA BIRU KECAMATAN TANJUNG BUMI)', 'JAWA TIMUR', 'BANGKALAN', 'TANJUNG BUMI', 'TELAGA BIRU', 'TELAGA BIRU', '1/1', '', '2020-12-13 19:11:51', '2020-12-13 19:17:06', '1'),
(10, '\"Perencanaan Pengembangan Ekonomi Lokal Melalui Pemanfaatan lahan Tidur di Desa Parseh\"', 'Jawa Timur', 'Bangkalan ', 'Socah ', 'Parseh ', 'Rabesen Timur', '1/2', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 70.9pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level2 lfo2;\"><!-- [if !supportLists]--><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><span style=\"mso-list: Ignore;\">1</span></span></strong><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Permasalahan</span></strong></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo1;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">10 tahun lahan tidak dimanfaatkan</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo1;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Minimnya penyuluhan dari Dinas Pertanian</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo1; tab-stops: 3.0cm 106.35pt;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Lahan tadah hujan </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo1; tab-stops: 3.0cm 106.35pt;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Banyak mahasiswa tidak bekerja karena malu bekerja di sektor pertanian</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo1; tab-stops: 3.0cm 106.35pt;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Peran kelompok tani yang kurang maksimal </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 70.9pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level2 lfo2; tab-stops: 3.0cm 106.35pt;\"><!-- [if !supportLists]--><strong style=\"mso-bidi-font-weight: normal;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Potensi Lokal</span></strong></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Tanah yang subur</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Lahan yang luas </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Tersedianya sumber air </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Ada kemauan yang tinggi<span style=\"mso-spacerun: yes;\">&nbsp; </span>dari masyarakat </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Banyak Sarjana Muda</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Dana Masyarakat </span></p>\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left: 72.0pt; mso-add-space: auto; text-align: justify; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level1 lfo3;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;\"><span style=\"mso-list: Ignore;\">&sect;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">Lokasi strategis </span></p>', '2020-12-13 19:20:13', '2020-12-14 00:41:41', '4'),
(11, '\"PEMBERDAYAAN EKONOMI KELOMPOK PEREMPUAN (PKK) DALAM PARIWISATA BERBASIS MASYARAKAT (STUDI KASUS OBJEK WISATA PANTAI BIRU DI DESA TELAGA BIRU KECAMATAN TANJUNG BUMI)\"', 'JAWA TIMUR', 'BANGKALAN', 'TANJUNG BUMI', 'TELAGA BIRU', 'KARANG TENGAH', '1/1', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level2 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">1.1<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">PERMASALAHAN (</span><em style=\"mso-bidi-font-style: normal;\"><span style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif;\">permasalahan masyarakat di lokasi terkait topik PEL</span></em><em style=\"mso-bidi-font-style: normal;\"><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">)</span></em></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Kurangnya lahan/lahan yang sempit dalam pengembangan wisata pantai biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Keterbatasan masyarakat desa terkait penggunaan teknologi seperti pengoperasian Hp dan laptop dalam memanfaatkan sosial media seperti instagram dan youtube sebagai media untuk mempromosikan wisata pantai biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Kurangnya promosi destinasi wisata di sosial media/objeknya terbatas disebabkan juga karena keterbatasan ilmu tentang cara mengeksplor wisata pantai biru </span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Keterlibatan kelompok perempuan/ibu-ibu/PKK belum begitu nampak dalam pengembangan wisata pantai biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Kurangnya fasilitas yang ada di pantai biru ini untuk memanjakan wisatawan yang berkunjung</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Keterbatasan dana dalam pengembangan destinasi wisata pantai biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l3 level1 lfo2;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Tidak adanya SDA sebagai penunjang ekonomi desa</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level2 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">1.2<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">POTENSI LOKAL (<em>potensi/sumberdaya manusia, alam,sosial, modal di lokasi yang bisa diandalkan menyelesaikan permasalahan di atas)</em></span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level1 lfo3;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Kemauan masyarakat akan keterlibatan dalam pengembangan wisata cukup tinggi dan antusias</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level1 lfo3;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Aktifnya kegiatan organisasi PKK dan paguyuban kelompok perempuan di desa</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level1 lfo3;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Kemampuan masyarakat dalam menghasilkan karya batik Telaga Biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level1 lfo3;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Adanya makanan khas desa yang menjadi keunikan tersendiri yaitu <em>topak sangoh</em></span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l0 level1 lfo3;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Memiliki potensi/produk unggulan desa yaitu Batik Telaga Biru</span></p>\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 54.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l2 level2 lfo1;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">1.3<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">KEBUTUHAN PRIORITAS (<em>pemenuhan kebutuhan prioritas)</em></span></p>\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-left: 90.0pt; mso-add-space: auto; text-indent: -18.0pt; line-height: 150%; mso-list: l1 level1 lfo4;\"><!-- [if !supportLists]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-ansi-language: IN;\"><span style=\"mso-list: Ignore;\">&Oslash;<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp; </span></span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12.0pt; line-height: 150%; font-family: \'Times New Roman\',serif; mso-ansi-language: IN;\">Pemberdayaan kelompok perempuan (PKK) yang ada di desa Telaga Biru sebagai penunjang pengembangan wisata pantai biru berbasis masyarakat</span></p>', '2020-12-13 19:24:31', '2020-12-13 21:34:33', '4');

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

--
-- Dumping data for table `respondens`
--

INSERT INTO `respondens` (`id`, `nama`, `usia`, `jenis_kelamin`, `pekerjaan`, `pendidikan`, `status`, `proposal_id`, `created_at`, `updated_at`) VALUES
(3, 'yudha', '31', 'Laki-laki', 'Dosen', 'S2', 'Warga Asli', 5, '2020-12-08 23:32:41', '2020-12-08 23:32:41'),
(4, 'Zaenal Alim', '23', 'Laki-laki', 'Mahasiswa', 'SMA/Sederajat', 'Warga Asli', 5, '2020-12-08 23:36:37', '2020-12-08 23:36:37'),
(5, 'yudha 2', '31', 'Laki-laki', 'Dosen', 'S2', 'Pendatang', 5, '2020-12-09 00:07:03', '2020-12-09 00:07:03'),
(6, 'yudha 3', '31', 'Laki-laki', 'Dosen', 'S2', 'Warga Asli', 5, '2020-12-09 00:09:26', '2020-12-09 00:09:26'),
(7, 'yudha', '31', 'Laki-laki', 'Dosen', 'S2', 'Warga Asli', 7, '2020-12-09 00:32:57', '2020-12-09 00:32:57'),
(8, 'yudha 4', '31', 'Laki-laki', 'Dosen', 'S2', 'Warga Asli', 8, '2020-12-09 04:19:35', '2020-12-09 04:19:35'),
(9, 'BUDI RAHARJA', '45', 'Laki-laki', 'PEDAGANG', 'SMA/Sederajat', 'Warga Asli', 11, '2020-12-13 21:06:23', '2020-12-13 21:06:23'),
(10, 'NANIK ', '38', 'Perempuan', 'IBU RUMAH TANGGA', 'SMA/Sederajat', 'Warga Asli', 11, '2020-12-13 21:11:47', '2020-12-13 21:11:47'),
(11, 'AGUS', '35', 'Laki-laki', 'NELAYAN', 'SMP', 'Warga Asli', 11, '2020-12-13 21:15:02', '2020-12-13 21:15:02'),
(12, 'Taqim', '38', 'Laki-laki', 'Guru', 'S1', 'Warga Asli', 10, '2020-12-13 21:16:00', '2020-12-13 21:16:00'),
(13, 'Taqim', '38', 'Laki-laki', 'Guru', 'S1', 'Warga Asli', 10, '2020-12-13 21:16:40', '2020-12-13 21:16:40');

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
('aIntJYCgBKYu3LMSULLUEPPfsaOVuoxBF8bHVn2w', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiajNGQkNZSk80Z3JqU2lHM1lyY24wTzhoM3YwY3lUaVNOV2s1ZGFITSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9pbmRpa2F0b3Ita2VnaWF0YW4vdGFtYmFoLzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR3dUhCMkUveTZ0WjZnRWxQZERLWjV1OVBHQklRMkVWWERPU2JGaTBKQTY1Z1dnMU5WdjhFQyI7fQ==', 1608484587),
('FGQ3VzYveOs9BJ7f4V5lwGJS7kx3ZgugmrvRYXqj', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibzZhQXdCY3M0RW1KY3M3Y05PV0E2Y2pkU09yR2xjQlhQZmlnOTNlMSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjU0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vaW5kaWthdG9yLXR1anVhbi90dWp1YW4vMTAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkd3VIQjJFL3k2dFo2Z0VsUGRES1o1dTlQR0JJUTJFVlhET1NiRmkwSkE2NWdXZzFOVnY4RUMiO30=', 1608482242);

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
(3, 'sadas', 'zxcs', 'dasd', 'dasd', 'fgdf', 'gdfgd', 'gdfg', 'dfgd', 'gfdgdf', 'gdfg', 'gdfgd', 'gdfgdf', 8, '2020-12-09 04:36:16', '2020-12-09 04:36:16'),
(4, 'sadas', 'zxcs', 'dasd', '', '', '', 'gdfg', 'dfgd', 'gfdgdf', '', '', '', 8, '2020-12-09 04:36:42', '2020-12-09 04:36:42'),
(5, '	Keterbatasan masyarakat terkait penggunaan teknologi', 'Keterbatasan masyarakat terkait penggunaan teknologi			', 'Mengurangi dampak kurangnya pemanfaatan teknologi				', '	Tanah yang susah ditanami pepohonan', 'Tanah yang susah ditanami pepohonan', 'Mengurangi dampak tanah yang tidak subur di lokasi pantai				', 'Dana yang terbatas', 'Dana yang terbatas', 'Mengurangi dampak keterbatasan dana/modal				', 'Belum ada investor yang masuk', 'Belum ada investor yang masuk', 'Mengurangi dampak belum adanya investor yang masuk				', 11, '2020-12-14 00:38:29', '2020-12-14 00:38:29'),
(6, 'Kurangnya pengairan (bor air)', 'Kurangnya pengairan (bor air)', 'Mengurangi dampak kurangnya pengairan (bor air)', 'Minimnya ilmu pertanian sehingga bertani dengan cara tradisional', 'Minimnya ilmu pertanian sehingga bertani dengan cara tradisional', 'Mengurangi dampak kurangnya pengetahuan ilmu pertanian  di masyarakat', 'Penyuluhan dari Dinas Pertanian yang minim', 'Penyuluhan dari Dinas Pertanian yang minim', 'Mengurangi dampak kurangnya penyuluhan dari Dinas Pertanian', 'Penyuluhan dari Dinas Pertanian yang minim', 'Penyuluhan dari Dinas Pertanian yang minim', 'Mengurangi dampak kurangnya penyuluhan dari Dinas Pertanian', 10, '2020-12-14 00:39:30', '2020-12-14 00:39:30');

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
  `swot` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_dampak` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_manfaat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_kondisis`
--

INSERT INTO `survey_kondisis` (`id`, `pengaruh`, `swot`, `nilai_dampak`, `nilai_manfaat`, `total`, `proposal_id`, `created_at`, `updated_at`) VALUES
(7, 'S1 - Kelompok perempuan/ibu-ibu PKK cukup aktiv', 'S', '[\"1\"]', '[\"2\"]', '3', 8, '2020-12-09 04:28:48', '2020-12-09 04:28:48'),
(8, 'W1 - Memiliki produk unggulan desa yaitu batik Telaga Biru', 'W', '[\"1\"]', '[\"2\"]', '3', 8, '2020-12-09 04:29:04', '2020-12-09 04:29:04'),
(9, 'S1 - Kelompok perempuan/ibu-ibu PKK cukup aktiv', 'S', '[\"1\"]', '[\"2\"]', '3', 8, '2020-12-09 04:31:08', '2020-12-09 04:31:08'),
(10, 'S1 - Dana masyarakat ', 'S', '[\"3\",\"4\"]', '[\"3\"]', '10', 10, '2020-12-13 22:35:34', '2020-12-13 22:35:34'),
(11, 'S2 - Banyaknya Sarjana Muda ', 'S', '[\"3\",\"3\"]', '[\"3\"]', '9', 10, '2020-12-13 22:36:22', '2020-12-13 22:36:22'),
(12, 'S3 - Tersedianya sumber air', 'S', '[\"3\",\"3\"]', '[\"4\"]', '10', 10, '2020-12-13 22:36:56', '2020-12-13 22:36:56'),
(13, 'S1 - Kelompok masyarakat desa yang tinggi', 'S', '[\"3\",\"4\"]', '[\"3\",\"4\"]', '14', 11, '2020-12-13 22:40:21', '2020-12-13 22:40:21'),
(14, 'S4 - Ada kemauan yang tinggi masyarakat desa', 'S', '[\"4\",\"4\"]', '[\"4\"]', '12', 10, '2020-12-13 22:40:23', '2020-12-13 22:40:23'),
(15, 'S5 - Lahan luas ', 'S', '[\"3\",\"3\"]', '[\"2\"]', '8', 10, '2020-12-13 22:42:23', '2020-12-13 22:42:23'),
(16, 'S6 - Tanah Subur', 'S', '[\"3\",\"3\"]', '[\"3\"]', '9', 10, '2020-12-13 22:43:17', '2020-12-13 22:43:17'),
(17, 'W1 - Lahan tadah hujan', 'W', '[\"4\",\"3\"]', '[\"3\"]', '10', 10, '2020-12-13 22:45:16', '2020-12-13 22:45:16'),
(18, 'W2 - Banyak mahasiswa tidak bekerja', 'W', '[\"3\",\"3\"]', '[\"3\"]', '9', 10, '2020-12-13 22:45:59', '2020-12-13 22:45:59'),
(19, 'S2 - Kelompok PKK cukup aktif', 'S', '[\"4\",\"4\"]', '[\"3\",\"3\"]', '14', 11, '2020-12-13 22:46:31', '2020-12-13 22:46:31'),
(20, 'W3 - 10 tahun lahan tidak dimanfaatkan', 'W', '[\"4\",\"4\"]', '[\"4\"]', '12', 10, '2020-12-13 22:46:33', '2020-12-13 22:46:33'),
(21, 'W1 - Akses menuju lokasi wisata lumayan jauh dan sempit', 'W', '[\"3\",\"3\"]', '[\"5\",\"4\"]', '15', 11, '2020-12-13 22:47:37', '2020-12-13 22:47:37'),
(22, 'W2 - Keterbatasan masyarakat desa terkait penggunaan teknologi ', 'W', '[\"3\",\"4\"]', '[\"5\",\"5\"]', '17', 11, '2020-12-13 22:49:26', '2020-12-13 22:49:26'),
(23, 'W2 - Keterbatasan masyarakat desa terkait penggunaan teknologi ', 'W', '[\"3\",\"4\"]', '[\"5\",\"5\"]', '17', 11, '2020-12-13 22:49:26', '2020-12-13 22:49:26'),
(24, 'W3 - Susah untuk ditanami pepohonan disekitar wisata pantai biru', 'W', '[\"4\",\"5\"]', '[\"5\",\"4\"]', '18', 11, '2020-12-13 23:07:22', '2020-12-13 23:07:22'),
(25, 'W4 - Kurangnya lahan/lahan sempit di desa Telaga Biru', 'W', '[\"2\",\"1\"]', '[\"5\",\"3\"]', '11', 11, '2020-12-13 23:08:01', '2020-12-13 23:08:01');

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
  `indikator_tujuan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_awal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_target` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tujuans`
--

INSERT INTO `tujuans` (`id`, `tujuan`, `indikator_tujuan`, `nilai_awal`, `nilai_target`, `proposal_id`, `created_at`, `updated_at`) VALUES
(1, 'Mengurangi dampak kurangnya pengairan (bor air)', NULL, NULL, NULL, 10, '2020-12-20 08:47:15', '2020-12-20 08:47:15');

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
(1, 'Abd. Asis', 'mail@abdasis.my.id', NULL, '$2y$10$wuHB2E/y6tZ6gElPdDKZ5u9PGBIQ2EVXDOSbFi0JA65gWg1NVv8EC', NULL, NULL, 'RFhwLDkavFAurXy3bZV89kE4dCvJzQGSvnUBprzD8FXzgzClI7Bgpw5zBMbN', NULL, NULL, 'fpm', '2020-12-08 09:41:19', '2020-12-08 09:41:19');

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
-- Indexes for table `indikator_kegiatans`
--
ALTER TABLE `indikator_kegiatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_kegiatans_proposal_id_foreign` (`proposal_id`),
  ADD KEY `indikator_kegiatans_kegiatan_id_foreign` (`kegiatan_id`);

--
-- Indexes for table `indikator_tujuans`
--
ALTER TABLE `indikator_tujuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `indikator_tujuans_proposal_id_foreign` (`proposal_id`),
  ADD KEY `indikator_tujuans_tujuan_id_foreign` (`tujuan_id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
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
-- Indexes for table `penetuan_rencanas`
--
ALTER TABLE `penetuan_rencanas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penetuan_rencanas_proposal_id_foreign` (`proposal_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
-- AUTO_INCREMENT for table `indikator_kegiatans`
--
ALTER TABLE `indikator_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `indikator_tujuans`
--
ALTER TABLE `indikator_tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kondisis`
--
ALTER TABLE `kondisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `manfaats`
--
ALTER TABLE `manfaats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `nilai_dampaks`
--
ALTER TABLE `nilai_dampaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penetuan_rencanas`
--
ALTER TABLE `penetuan_rencanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `strategis`
--
ALTER TABLE `strategis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tingkat_pengaruhs`
--
ALTER TABLE `tingkat_pengaruhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tujuans`
--
ALTER TABLE `tujuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `indikator_kegiatans`
--
ALTER TABLE `indikator_kegiatans`
  ADD CONSTRAINT `indikator_kegiatans_kegiatan_id_foreign` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `indikator_kegiatans_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `indikator_tujuans`
--
ALTER TABLE `indikator_tujuans`
  ADD CONSTRAINT `indikator_tujuans_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `indikator_tujuans_tujuan_id_foreign` FOREIGN KEY (`tujuan_id`) REFERENCES `tujuans` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `penetuan_rencanas`
--
ALTER TABLE `penetuan_rencanas`
  ADD CONSTRAINT `penetuan_rencanas_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `tujuans`
--
ALTER TABLE `tujuans`
  ADD CONSTRAINT `tujuans_proposal_id_foreign` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
