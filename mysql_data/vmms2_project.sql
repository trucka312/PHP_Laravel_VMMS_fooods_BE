-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 05:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vmms2_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `avatar_admin` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password_admin` varchar(255) NOT NULL,
  `phone_admin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `email_admin`, `avatar_admin`, `email_verified_at`, `password_admin`, `phone_admin`, `created_at`, `updated_at`) VALUES
(9, 'Thao Ngo', 'nhuthaophap2248@gmail.com', 'public/images/Uq4yZ4vqoakZd45KPfwJEVmNm0NlkgBNFwu9eDbt.jpg', NULL, '1234567', '0528728054', NULL, NULL),
(10, 'Thao Ngo', 'nhuthaophap2482@gmail.com', 'public/images/98AOU8vTY9vGuUijSxKAJb6eKTFT2azWQ08wdxq6.jpg', NULL, '1234567', '0528728054', NULL, NULL),
(11, 'Thao Ngo', 'nhuthaopha2p248@gmail.com', 'public/images/KMlntEyb49kk6WwnxO4YNjZizK835WiaEbVr0bR9.jpg', NULL, '1234567', '0528728054', NULL, NULL),
(20, 'Thao Ngo', 'nhuthaophap248@gmail.com', 'public/images//1688189587.jpg', NULL, '1234567', '0528728054', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coso`
--

CREATE TABLE `coso` (
  `id` int(11) NOT NULL,
  `tencoso` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `tongsoban` int(10) NOT NULL,
  `trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coso`
--

INSERT INTO `coso` (`id`, `tencoso`, `diachi`, `dienthoai`, `tongsoban`, `trangthai`) VALUES
(1, 'Cơ sở 1', '35 To Huu, Cau Giay, Ha Noi', '0888880800', 20, 0),
(2, 'Cơ sở 2', '95 To Vinh Dien, Khuong Trung, Ha Noi', '0888880800', 30, 0),
(3, 'Cơ sở 3', '197 Hoang Mai, Hai Ba Trung, Ha Noi', '08888809003', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `sdt` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `noidung` text NOT NULL,
  `thoigian` time DEFAULT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`id`, `users_id`, `hoten`, `sdt`, `ghichu`, `noidung`, `thoigian`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'nothing', 'Nhân viên phục vụ nhiệt tình, tôi rất hài hòng , món ăn thì ngon vô địch !!!', '00:00:00', 1, NULL, NULL),
(2, 2, NULL, NULL, 'nothing', 'Nhân viên phục vụ nhiệt tình, món ăn thì ngon bổ rẻ !!!', '00:00:00', 1, NULL, NULL),
(3, 3, NULL, NULL, 'nothing', 'Giá cả phải chăng, tôi rất cực kỳ hài lòng, món ăn thì ngon vô địch !!!', '00:00:00', 1, NULL, NULL),
(4, 2, NULL, NULL, 'nothing', 'Nhân viên thân thiện nhiệt tình , món ăn thì ngon vô địch !!!', '00:00:00', 0, NULL, NULL),
(5, 1, NULL, NULL, 'nothing', 'Nhân viên phục vụ nhiệt tình, tôi rất hài hòng , món ăn thì ngon vô địch !!!', '00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucmon`
--

CREATE TABLE `danhmucmon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `trangthai` int(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmucmon`
--

INSERT INTO `danhmucmon` (`id`, `tendanhmuc`, `path`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Khai vị', 'public/images//1688399151.png', 1, NULL, NULL),
(2, 'Món chính', 'public/images//1688399167.png', 1, NULL, NULL),
(3, 'Đồ uống', 'public/images//1688399186.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datban`
--

CREATE TABLE `datban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `songuoi` int(11) NOT NULL,
  `thoigian` varchar(255) NOT NULL,
  `coso` varchar(255) NOT NULL,
  `ghichu` text DEFAULT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `soban` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datban`
--

INSERT INTO `datban` (`id`, `users_id`, `name`, `email`, `sdt`, `songuoi`, `thoigian`, `coso`, `ghichu`, `trangthai`, `soban`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'Cơ sở 1', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, 19, NULL, NULL),
(2, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, 2, NULL, NULL),
(3, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, 2, NULL, NULL),
(4, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(5, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, NULL, NULL, NULL),
(6, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, NULL, NULL, NULL),
(7, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, NULL, NULL, NULL),
(8, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(9, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, NULL, NULL, NULL),
(10, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, NULL, NULL, NULL),
(11, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, NULL, NULL, NULL),
(12, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(13, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, NULL, NULL, NULL),
(14, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, NULL, NULL, NULL),
(15, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, NULL, NULL, NULL),
(16, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(17, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, NULL, NULL, NULL),
(18, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, NULL, NULL, NULL),
(19, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, NULL, NULL, NULL),
(20, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(21, 1, '', 'nhuthao@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể ngồi được một chỗ có không gian ngoài trời không', 1, NULL, NULL, NULL),
(22, 2, '', 'longgay@gmail.com', '0336939453', 4, '00:00:00', 'CS01', 'Tôi có thể ngồi một chỗ tĩnh lặng chút được không?', 1, NULL, NULL, NULL),
(23, 3, '', 'huyanhnguyen@gmail.com', '0336939453', 2, '00:00:00', 'CS01', 'Tôi có thể mang thức ăn bên ngoài vào không?', 1, NULL, NULL, NULL),
(24, 4, '', 'ductran@gmail.com', '0336939453', 1, '00:00:00', 'CS01', 'Tôi có thể có một chỗ yên tĩnh để chill không', 1, NULL, NULL, NULL),
(26, NULL, 'Thao Nhu Ngo', 'nhuthaophap248@gmail.com', '02385784', 10, '13:29:00', 'CS2', 'nice', NULL, NULL, NULL, NULL),
(27, NULL, 'Tùng Lâm', 'tung@gmail.com', '02385784', 2, '05:33:00', 'CS2', 'mom mom', NULL, NULL, NULL, NULL),
(28, NULL, '...thao vy', 'nhuthaophap248@gmail.com', '023857843r5665', 15, '19:51:00', 'CS1', NULL, NULL, NULL, NULL, NULL),
(29, NULL, 'Thao Ngo', 'phap248@gmail.com', '03369393453', 2, '02:54:00', 'CS4', 'nice', NULL, NULL, NULL, NULL),
(30, NULL, 'ngothao', 'nhuthaophap248@gmail.com', '023857843r5665', 15, '02:55:00', 'CS3', NULL, NULL, NULL, NULL, NULL),
(31, NULL, 'Linh Nguyễn', 'linh@gmail.com', '03369393453', 10, '06:24:00', 'CS2', 'nice', NULL, NULL, NULL, NULL),
(32, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '02385784', 2, '04:05:00', 'CS2', 'a', NULL, NULL, NULL, NULL),
(33, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '02385784', 2, '04:05:00', 'CS2', 'a', NULL, NULL, NULL, NULL),
(34, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(35, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(36, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(37, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(38, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(39, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(40, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(41, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(42, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(43, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(44, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(45, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 2, '00:10:00', 'CS3', 'a', NULL, NULL, NULL, NULL),
(46, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 10, '04:49:00', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(47, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '03369393453', 181, '04:49:00', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(48, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '023857843r5665', 10, '18:51:00', 'Cơ sở 1', 'a', NULL, NULL, NULL, NULL),
(49, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '023857843r5665', 1, '18:51:00', 'Cơ sở 1', 'a', NULL, NULL, NULL, NULL),
(50, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '023857843r5665', 1, '18:51:00', 'Cơ sở 1', 'a', NULL, NULL, NULL, NULL),
(51, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 1, '07:39:00', 'Cơ sở 2', 'aa', NULL, NULL, NULL, NULL),
(52, NULL, 'ngothao', 'nhuthaophap248@gmail.com', '0336939453', 15, '11:09:00', 'Cơ sở 2', 'g', NULL, NULL, NULL, NULL),
(53, NULL, 'ngothao', 'nhuthaophap248@gmail.com', '0336939453', 15, '11:09:00', 'Cơ sở 2', 'g', NULL, NULL, NULL, NULL),
(54, NULL, 'ngothao', 'nhuthaophap248@gmail.com', '0336939453', 15, '2023-07-05T11:09', 'Cơ sở 2', 'g', NULL, NULL, NULL, NULL),
(55, NULL, 'ngothao2', 'nhuthaophap248@gmail.com', '0336939453', 15, '2023-07-05T11:09', 'Cơ sở 2', 'g', NULL, NULL, NULL, NULL),
(56, NULL, '...thao vy', 'nhuthaophap248@gmail.com', '0336939453', 1, '2023-07-06T05:05', 'Cơ sở 2', NULL, NULL, NULL, NULL, NULL),
(57, NULL, '...thao vy', 'nhuthaophap248@gmail.com', '0336939453', 1, '2023-07-06T05:05', 'Cơ sở 2', NULL, NULL, NULL, NULL, NULL),
(58, NULL, '...vuta', 'nhuthaophap248@gmail.com', '0238578432', 15, '2023-06-26T15:21', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(59, NULL, '...vuta', 'nhuthaophap248@gmail.com', '0238578432', 15, '2023-06-26T15:21', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(60, NULL, '...vuta', 'nhuthaophap248@gmail.com', '0238578432', 15, '2023-06-26T15:21', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(61, NULL, 'Thao Nhu', 'nhuthaophap248@gmail.com', '0238578432', 1, '2023-07-05T15:30', 'Cơ sở 3', 'a', NULL, NULL, NULL, NULL),
(62, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(63, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(64, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(65, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(66, NULL, 'Thao Ngo2', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(67, NULL, 'Thao Ngo22', 'nhuthaophap248@gmail.com', '0238578432', 10, '2023-07-05T18:30', 'Cơ sở 2', 'a', NULL, NULL, NULL, NULL),
(68, NULL, 'Thao Ngo222', 'nhuthaophap248@gmail.com', '03369393453', 10, '2023-07-05T21:49', 'Cơ sở 1', '2', NULL, NULL, NULL, NULL),
(69, NULL, 'Thao Ngo', 'nhuthaophap248@gmail.com', '0336939453', 1, '2023-08-23T04:52', 'Cơ sở 1', 'nice', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `giomo` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lienhe`
--

INSERT INTO `lienhe` (`id`, `tieude`, `diachi`, `giomo`, `dienthoai`, `created_at`, `updated_at`) VALUES
(1, 'VMMS2 Ha Noi HaiBaChung', '197 Hoang Mai,  Hai Ba Trung, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(2, 'VMMS2 To Vinh Dien', '35 To Vinh Dien, Khuong Trung, Ha noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(3, 'VMMS2 To Huu, Cau Giay, Ha Noi', '35 To Huu, Cau Giay, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(4, 'VMMS2 Ha Noi HaiBaChung', '197 Hoang Mai,  Hai Ba Trung, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(5, 'VMMS2 To Vinh Dien', '35 To Vinh Dien, Khuong Trung, Ha noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(6, 'VMMS2 To Huu, Cau Giay, Ha Noi', '35 To Huu, Cau Giay, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(7, 'VMMS2 Ha Noi HaiBaChung', '197 Hoang Mai,  Hai Ba Trung, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(8, 'VMMS2 To Vinh Dien', '35 To Vinh Dien, Khuong Trung, Ha noi', '08:00 - 23:00', '0336939453', NULL, NULL),
(9, 'VMMS2 To Huu, Cau Giay, Ha Noi', '35 To Huu, Cau Giay, Ha Noi', '08:00 - 23:00', '0336939453', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_23_144256_create_datban_table', 1),
(6, '2023_06_23_144849_create_danhgia_table', 1),
(7, '2023_06_23_144915_create_tuvan_table', 1),
(8, '2023_06_23_144941_create_tintuc_table', 1),
(9, '2023_06_23_145134_create_danhmucmon_table', 1),
(10, '2023_06_23_145217_create_sanpham_table', 1),
(11, '2023_06_23_145248_create_thuvienanh_table', 1),
(12, '2023_06_23_145324_create_lienhe_table', 1),
(16, '2014_10_12_000000_create_users_table', 3),
(17, '2023_06_25_141537_create_admin_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sampham`
--

CREATE TABLE `sampham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `danhmucmon_id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double NOT NULL,
  `mieuta` text NOT NULL,
  `anh` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sampham`
--

INSERT INTO `sampham` (`id`, `danhmucmon_id`, `tensp`, `gia`, `mieuta`, `anh`, `tag`, `featured`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cánh gà sốt me chua cay', 99000, 'Fried chicken wings, tamarind sauce', 'public/images//1688279329.png', 'Gà', 1, NULL, NULL),
(2, 1, 'Cánh gà sóc tỏi ớt', 98000, 'Fried chiken wings, chili, garlic', '', '', 1, NULL, NULL),
(3, 1, 'Bò lá lốt', 108000, 'Grilled marinated beef wrapped lalot leaves, herbs', '', '', 1, NULL, NULL),
(4, 1, 'Chạo tôm bó mía', 118, 'Homemade sugarcane shrimps skewers, herbs', '', '', 1, NULL, NULL),
(5, 2, 'Gà hấp mắm nhĩ', 98, 'Steamed chicken with fish, sauce, mung bean sticky rice', '', 'Gà', 1, NULL, NULL),
(6, 2, 'Cánh gà sốt me', 549, 'Fried chicken wings, tamarind sauce', '', 'Gà', 1, NULL, NULL),
(7, 2, 'Gà lên mâm', 300, 'Shredded chicken with herbs, spicy grilled chicken', '', 'Gà', 1, NULL, NULL),
(8, 2, 'Gà nướng ống tre', 320, 'Grilled chicken in bamboo tube, wild herbs', '', 'Gà', 1, NULL, NULL),
(9, 2, 'Gà hầm thuốc bắc', 250000, 'Wild herbs, ginger, lotus seeds', '', 'Gà', 0, NULL, NULL),
(10, 2, 'Thịt kho tộ', 98000, 'Thịt ba chỉ hoàng đế', 'public/images//1688310866.png', 'Heo', 1, NULL, NULL),
(11, 2, 'Thịt ba chỉ luộc', 600000, 'Thịt đều lạc mỡ', 'public/images//1688310739.png', 'Heo', 1, NULL, NULL),
(12, 2, 'Thịt heo giả cầy', 100, 'Thịt hầm nước 10h', '', 'Heo', 1, NULL, NULL),
(13, 2, 'Bò lá lốt', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(14, 2, 'Bò Bít Tết', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(15, 2, 'Bò Sốt vang', 189, 'Quế, hồi hương, Nho, Rượu', '', 'Bò', 1, NULL, NULL),
(16, 2, 'Bún đâu mắm tôm', 50, 'Bún, chả cốm, chân giò, đậu phụ rán', '', 'Bún/Phở', 1, NULL, NULL),
(17, 2, 'Phở gà', 189, 'Sợi phở, quế, rau mùi, ức gà', '', 'Bún/Phở', 1, NULL, NULL),
(18, 2, 'Phở/Bún Mọc', 189000, 'Thịt băm mọc nhĩ, rau sống', '', 'Bún/Phở', 0, NULL, NULL),
(19, 2, 'Bún Chả', 189, 'Thịt nướng, rau dưa, ớt, rau sống', '', 'Bún/Phở', 1, NULL, NULL),
(20, 2, 'Bún Cá', 50, 'Cá, rau sống, nước thịt hầm', '', 'Bún/Phở', 1, NULL, NULL),
(21, 3, 'Nước dừa tươi', 30, 'Fresh coconut', '', 'Đồ Lạnh', 1, NULL, NULL),
(22, 3, 'Nước cam tươi', 30, 'Fresh squeezed orange juice', '', 'Đồ Lạnh', 1, NULL, NULL),
(23, 3, 'Ginger minosa', 30, 'Lime, cucumber, ginger, soda', '', 'Đồ Lạnh', 1, NULL, NULL),
(24, 3, 'Trà nhiệt đới', 30, 'Mango, passion fruit, honey', '', 'Đồ Nóng', 1, NULL, NULL),
(25, 3, 'Concha y Toro', 30, 'Reservado Cabernet Sauvignon - Chile', '', 'Đồ Nóng', 1, NULL, NULL),
(26, 3, 'Trà hoa nhài nóng', 30, 'Hoa nhài, long cúc, nhân sâm Trung', '', 'Đồ Nóng', 1, NULL, NULL),
(27, 3, 'Trà long cúc', 40, 'Hoa cúc, linh chi, sâm Hàn', '', 'Đồ Nóng', 1, NULL, NULL),
(28, 3, 'Trà nhài long nhãn', 45, 'Hoa nhài, hoa đậu biếc sấy khô, nhãn long hàm', '', 'Đồ Nóng', 1, NULL, NULL),
(51, 3, 'Ginger minosa', 30, 'Lime, cucumber, ginger, soda', '', 'Đồ Lạnh', 1, NULL, NULL),
(52, 3, 'Trà nhiệt đới', 30, 'Mango, passion fruit, honey', '', 'Đồ Nóng', 1, NULL, NULL),
(53, 3, 'Concha y Toro', 30, 'Reservado Cabernet Sauvignon - Chile', '', 'Đồ Nóng', 1, NULL, NULL),
(54, 3, 'Trà hoa nhài nóng', 30, 'Hoa nhài, long cúc, nhân sâm Trung', '', 'Đồ Nóng', 1, NULL, NULL),
(55, 3, 'Trà long cúc', 40, 'Hoa cúc, linh chi, sâm Hàn', '', 'Đồ Nóng', 1, NULL, NULL),
(56, 3, 'Trà nhài long nhãn', 45, 'Hoa nhài, hoa đậu biếc sấy khô, nhãn long hàm', '', 'Đồ Nóng', 1, NULL, NULL),
(113, 2, 'Gà luộc nguyên con (1con)', 250000, 'Gà dai nguyên con 2kg5', '', 'Gà', 1, NULL, NULL),
(114, 2, 'Bò sốt me', 189000, 'Bò sốt me rừng Cao Nguyên', '', 'Bò', 0, NULL, NULL),
(115, 1, 'Cánh gà sốt me', 98, 'Fried chicken wings, tamarind sauce', '', '', 1, NULL, NULL),
(116, 1, 'Cánh gà sóc tỏi ớt', 98, 'Fried chiken wings, chili, garlic', '', '', 1, NULL, NULL),
(117, 1, 'Bò lá lốt', 108, 'Grilled marinated beef wrapped lalot leaves, herbs', '', '', 1, NULL, NULL),
(118, 1, 'Chạo tôm bó mía', 118, 'Homemade sugarcane shrimps skewers, herbs', '', '', 1, NULL, NULL),
(119, 2, 'Gà hấp mắm nhĩ', 98, 'Steamed chicken with fish, sauce, mung bean sticky rice', '', 'Gà', 1, NULL, NULL),
(120, 2, 'Cánh gà sốt me', 549, 'Fried chicken wings, tamarind sauce', '', 'Gà', 1, NULL, NULL),
(121, 2, 'Gà lên mâm', 300, 'Shredded chicken with herbs, spicy grilled chicken', '', 'Gà', 1, NULL, NULL),
(123, 2, 'Gà hầm thuốc bắc', 250, 'Wild herbs, ginger, lotus seeds', '', 'Gà', 1, NULL, NULL),
(124, 2, 'Thịt kho tộ', 98, 'Thịt ba chỉ hoàng đế', '', 'Heo', 1, NULL, NULL),
(125, 2, 'Thịt ba chỉ luộc', 60, 'Thịt đều lạc mỡ', '', 'Heo', 1, NULL, NULL),
(126, 2, 'Thịt heo giả cầy', 100, 'Thịt hầm nước 10h', '', 'Heo', 1, NULL, NULL),
(127, 2, 'Bò lá lốt', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(128, 2, 'Bò Bít Tết', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(129, 2, 'Bò Sốt vang', 189, 'Quế, hồi hương, Nho, Rượu', '', 'Bò', 1, NULL, NULL),
(130, 2, 'Bún đâu mắm tôm', 50, 'Bún, chả cốm, chân giò, đậu phụ rán', '', 'Bún/Phở', 1, NULL, NULL),
(131, 2, 'Phở gà', 189, 'Sợi phở, quế, rau mùi, ức gà', '', 'Bún/Phở', 1, NULL, NULL),
(132, 2, 'Phở/Bún Mọc', 189, 'Thịt băm mọc nhĩ, rau sống', '', 'Bún/Phở', 1, NULL, NULL),
(133, 2, 'Bún Chả', 189, 'Thịt nướng, rau dưa, ớt, rau sống', '', 'Bún/Phở', 1, NULL, NULL),
(134, 2, 'Bún Cá', 50, 'Cá, rau sống, nước thịt hầm', '', 'Bún/Phở', 1, NULL, NULL),
(135, 3, 'Nước dừa tươi', 30, 'Fresh coconut', '', 'Đồ Lạnh', 1, NULL, NULL),
(136, 3, 'Nước cam tươi', 30, 'Fresh squeezed orange juice', '', 'Đồ Lạnh', 1, NULL, NULL),
(137, 3, 'Ginger minosa', 30, 'Lime, cucumber, ginger, soda', '', 'Đồ Lạnh', 1, NULL, NULL),
(138, 3, 'Trà nhiệt đới', 30, 'Mango, passion fruit, honey', '', 'Đồ Nóng', 1, NULL, NULL),
(139, 3, 'Concha y Toro', 30, 'Reservado Cabernet Sauvignon - Chile', '', 'Đồ Nóng', 1, NULL, NULL),
(140, 3, 'Trà hoa nhài nóng', 30, 'Hoa nhài, long cúc, nhân sâm Trung', '', 'Đồ Nóng', 1, NULL, NULL),
(141, 3, 'Trà long cúc', 40, 'Hoa cúc, linh chi, sâm Hàn', '', 'Đồ Nóng', 1, NULL, NULL),
(142, 3, 'Trà nhài long nhãn', 45, 'Hoa nhài, hoa đậu biếc sấy khô, nhãn long hàm', '', 'Đồ Nóng', 1, NULL, NULL),
(143, 1, 'Cánh gà sốt me', 98, 'Fried chicken wings, tamarind sauce', '', '', 1, NULL, NULL),
(144, 1, 'Cánh gà sóc tỏi ớt', 98, 'Fried chiken wings, chili, garlic', '', '', 1, NULL, NULL),
(145, 1, 'Bò lá lốt', 108, 'Grilled marinated beef wrapped lalot leaves, herbs', '', '', 1, NULL, NULL),
(146, 1, 'Chạo tôm bó mía', 118, 'Homemade sugarcane shrimps skewers, herbs', '', '', 1, NULL, NULL),
(147, 2, 'Gà hấp mắm nhĩ', 98, 'Steamed chicken with fish, sauce, mung bean sticky rice', '', 'Gà', 1, NULL, NULL),
(148, 2, 'Cánh gà sốt me', 549, 'Fried chicken wings, tamarind sauce', '', 'Gà', 1, NULL, NULL),
(149, 2, 'Gà lên mâm', 300, 'Shredded chicken with herbs, spicy grilled chicken', '', 'Gà', 1, NULL, NULL),
(150, 2, 'Gà nướng ống tre', 320, 'Grilled chicken in bamboo tube, wild herbs', '', 'Gà', 1, NULL, NULL),
(151, 2, 'Gà hầm thuốc bắc', 250, 'Wild herbs, ginger, lotus seeds', '', 'Gà', 1, NULL, NULL),
(152, 2, 'Thịt kho tộ', 98, 'Thịt ba chỉ hoàng đế', '', 'Heo', 1, NULL, NULL),
(153, 2, 'Thịt ba chỉ luộc', 60, 'Thịt đều lạc mỡ', '', 'Heo', 1, NULL, NULL),
(154, 2, 'Thịt heo giả cầy', 100, 'Thịt hầm nước 10h', '', 'Heo', 1, NULL, NULL),
(155, 2, 'Bò lá lốt', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(156, 2, 'Bò Bít Tết', 189, 'Grilled marinated beef wrapped lalot leaves, herbs', '', 'Bò', 1, NULL, NULL),
(157, 2, 'Bò Sốt vang', 189, 'Quế, hồi hương, Nho, Rượu', '', 'Bò', 1, NULL, NULL),
(158, 2, 'Bún đâu mắm tôm', 50, 'Bún, chả cốm, chân giò, đậu phụ rán', '', 'Bún/Phở', 1, NULL, NULL),
(159, 2, 'Phở gà', 189, 'Sợi phở, quế, rau mùi, ức gà', '', 'Bún/Phở', 1, NULL, NULL),
(160, 2, 'Phở/Bún Mọc', 189, 'Thịt băm mọc nhĩ, rau sống', '', 'Bún/Phở', 1, NULL, NULL),
(161, 2, 'Bún Chả', 189, 'Thịt nướng, rau dưa, ớt, rau sống', '', 'Bún/Phở', 1, NULL, NULL),
(162, 2, 'Bún Cá', 50, 'Cá, rau sống, nước thịt hầm', '', 'Bún/Phở', 1, NULL, NULL),
(163, 3, 'Nước dừa tươi', 30, 'Fresh coconut', '', 'Đồ Lạnh', 1, NULL, NULL),
(164, 3, 'Nước cam tươi', 30, 'Fresh squeezed orange juice', '', 'Đồ Lạnh', 1, NULL, NULL),
(165, 3, 'Ginger minosa', 30, 'Lime, cucumber, ginger, soda', '', 'Đồ Lạnh', 1, NULL, NULL),
(166, 3, 'Trà nhiệt đới', 30, 'Mango, passion fruit, honey', '', 'Đồ Nóng', 1, NULL, NULL),
(167, 3, 'Concha y Toro', 30, 'Reservado Cabernet Sauvignon - Chile', '', 'Đồ Nóng', 1, NULL, NULL),
(168, 3, 'Trà hoa nhài nóng', 30, 'Hoa nhài, long cúc, nhân sâm Trung', '', 'Đồ Nóng', 1, NULL, NULL),
(169, 3, 'Trà long cúc', 40, 'Hoa cúc, linh chi, sâm Hàn', '', 'Đồ Nóng', 1, NULL, NULL),
(170, 3, 'Trà nhài long nhãn', 45, 'Hoa nhài, hoa đậu biếc sấy khô, nhãn long hàm', '', 'Đồ Nóng', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuvienanh`
--

CREATE TABLE `thuvienanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `trangthai` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thuvienanh`
--

INSERT INTO `thuvienanh` (`id`, `tieude`, `path`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'KHÔNG GIAN', 'public/images//1688226421.jpg', 1, NULL, NULL),
(11, 'KHÔNG GIAN', 'public/images//1688800965.jpg', 1, NULL, NULL),
(12, 'KHÔNG GIAN', 'public/images//1688800977.jpg', 1, NULL, NULL),
(14, 'KHÔNG GIAN', 'public/images//1688800991.png', 1, NULL, NULL),
(15, 'KHÔNG GIAN', 'public/images//1688801003.jpg', 1, NULL, NULL),
(17, 'KHÔNG GIAN', 'public/images//1688801029.png', 1, NULL, NULL),
(18, 'KHÔNG GIAN', 'public/images//1688801041.jpg', 1, NULL, NULL),
(19, 'KHÔNG GIAN', 'public/images//1688801063.jpg', 1, NULL, NULL),
(20, 'KHÔNG GIAN', 'public/images//1688801087.png', 1, NULL, NULL),
(37, 'KHU BẾP', 'public/images/RQZ6uooOHSYvo4Gu9UQSInhMuc7NGzgrVRA1lhzW.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `thoigian` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `anh`, `thoigian`, `noidung`, `ghichu`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'Tận Hưởng Ưu Đãi Giờ Vàng Cùng Ngàn Món Ngon Tại VMMS', 'public/images//1688801742.png', '18:39:00', 'Cùng hội ngộ sum vầy những ngày đầu năm trong không gian hiện đại, mang dấu ấn...', NULL, 1, NULL, NULL),
(2, 'Hướng dẫn cách làm cua cà ri kiểu Ấn Độ mới lạ cực ngon', 'public/images//1688801783.jpg', '08:37:00', 'Cà ri một món ăn hấp dẫn có xuất xứ từ Ấn Độ đã được biến tấu thành nhiều món độc...', NULL, 1, NULL, NULL),
(20, 'Hướng dẫn cách làm cua cà ri kiểu Ấn Độ mới lạ cực ngon', 'public/images//1688802208.jpg', '2023-07-19T18:43', 'Cà ri một món ăn hấp dẫn có xuất xứ từ Ấn Độ đã được biến tấu thành nhiều món độc...', NULL, 1, NULL, NULL),
(28, 'Tái hiện mâm cơm truyền thống trong set ẩm thực mới', 'public/images//1688802189.png', '2023-08-01T16:43', 'Bếp trưởng VMMS kết hợp với các đầu bếp khác đã cùng nhau cải biên lại các món ăn...', NULL, 1, NULL, NULL),
(32, 'Hướng dẫn cách làm cua cà ri kiểu Ấn Độ mới lạ cực ngon', 'public/images//1688802173.png', '2023-06-07T16:44', 'Cà ri một món ăn hấp dẫn có xuất xứ từ Ấn Độ đã được biến tấu thành nhiều món độc...', NULL, 1, NULL, NULL),
(33, 'VMMS đón chào quý khách với công suất tối đa', 'public/images//1688802153.jpg', '2023-06-30T19:40', 'VMMS đã quay trở lại đón tiếp các khách hàng ở tất cả các chi nhánh trên địa bàn Hà...', NULL, 1, NULL, NULL),
(34, 'Tái hiện mâm cơm truyền thống trong set ẩm thực mới', 'public/images//1688802129.png', '2023-06-01T20:41', 'Bếp trưởng VMMS kết hợp với các đầu bếp khác đã cùng nhau cải biên lại các món ăn...', NULL, 1, NULL, NULL),
(35, 'VMMS Trần Nhân Tông - Chúc mừng khai trương cơ sở mới', 'public/images//1688801991.png', '2023-06-27T18:40', 'Hệ thống nhà hàng VMMS vừa khai trương cơ sở mới tại số 99 Trần Nhân Tông, Hai Bà...', NULL, 1, NULL, NULL),
(37, 'Giam gia duy nhat ngay hom nay tai chi nhasnh  vMMS1 Ha noi', 'public/images//1688802276.png', '2023-07-26T17:44', 'Nhà hàng bạn có đồ chay không?', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tuvan`
--

CREATE TABLE `tuvan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `noidung` text NOT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tuvan`
--

INSERT INTO `tuvan` (`id`, `users_id`, `hoten`, `sdt`, `diachi`, `noidung`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Thao Duc Hong', '0238578432', '46 Phương Mai, Đống đa, Hà nội', 'Khomg gi ngon bang VMMS2', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `trangthai` tinyint(10) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `trangthai`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thao Ngo', 'nhuthao@gmail.com', 'thaonhu.jpg', 1, NULL, '123456', NULL, NULL, NULL),
(2, 'Tung Duc', 'tungducctran7825345238@gmail.com', 'tungduc.jpg', 1, NULL, '111111', NULL, NULL, NULL),
(3, 'Thap Vu', 'vuthapp67136584@gmail.com', 'avatar.png', 1, NULL, '111111', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma` varchar(255) NOT NULL,
  `giam` double NOT NULL,
  `toithieusonguoi` int(11) NOT NULL,
  `hsd` datetime DEFAULT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `ma`, `giam`, `toithieusonguoi`, `hsd`, `trangthai`, `ghichu`) VALUES
(1, 'SIEUNGON', 5, 4, '2023-09-09 00:25:00', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coso`
--
ALTER TABLE `coso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmucmon`
--
ALTER TABLE `danhmucmon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sampham`
--
ALTER TABLE `sampham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thuvienanh`
--
ALTER TABLE `thuvienanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuvan`
--
ALTER TABLE `tuvan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `coso`
--
ALTER TABLE `coso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `danhmucmon`
--
ALTER TABLE `danhmucmon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `datban`
--
ALTER TABLE `datban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sampham`
--
ALTER TABLE `sampham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `thuvienanh`
--
ALTER TABLE `thuvienanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tuvan`
--
ALTER TABLE `tuvan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
