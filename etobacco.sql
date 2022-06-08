-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 02:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etobacco`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_aktifitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `waktu`, `dokumentasi`, `id_aktifitas`, `deskripsi`, `id_kabupaten`, `id_kecamatan`, `id_desa`, `username`) VALUES
(5, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(6, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(7, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(8, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(9, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(10, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(11, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(12, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(13, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(14, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(15, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(16, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(17, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(18, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(19, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(20, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(21, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(22, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(23, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(24, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(25, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(26, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(27, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(28, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(29, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(30, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(31, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(32, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(33, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(34, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'bima'),
(35, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'bima'),
(36, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(37, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(38, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(39, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(40, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(41, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(42, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(43, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(44, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(45, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(46, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(47, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(48, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(49, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(50, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(51, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(52, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(53, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(54, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(55, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(56, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(57, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(58, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(59, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(60, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(61, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'jastin'),
(62, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(63, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'jastin'),
(64, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(65, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(66, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(67, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(68, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(69, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(70, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(71, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(72, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(73, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(74, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(75, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(76, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(77, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(78, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(79, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(80, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(81, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(82, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au'),
(83, '1649134800', '1653548250.jpg', '1', 'Selesai', '1', '10', '74', 'au'),
(84, '1648962000', '1652019373.jpg', '1', '20 Pekerja', '1', '8', '54', 'au');

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`id`, `nama`) VALUES
(1, 'Land Clearing'),
(2, 'Bersihan Gulma'),
(3, 'Pembelian Bibit'),
(4, 'Turunkan Bibit'),
(5, 'Bakar Daduk'),
(6, 'Kepras'),
(7, 'Putus Akar'),
(8, 'Buat Got'),
(9, 'Bajak Kayar'),
(10, 'Tanam'),
(11, 'Peracunan'),
(12, 'Sulam Tanaman'),
(13, 'Pemupukan 1'),
(14, 'Bumbun 1'),
(15, 'Pemupukan 2'),
(16, 'Bumbun 2'),
(17, 'Klentek 1'),
(18, 'Bumbun 3'),
(19, 'Klentek 2'),
(20, 'Torap'),
(21, 'Klentek 3'),
(22, 'Tebang Tebu'),
(23, 'Angkutan Tebu'),
(24, 'Angkutan Bibit'),
(25, 'Umbalan Tebang Tebu');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `id_kecamatan`, `nama`) VALUES
(1, '1', 'Ajung'),
(2, '1', 'Klompangan'),
(3, '1', 'Mangaran'),
(4, '1', 'Pancakarya'),
(5, '1', 'Rowoindah'),
(6, '1', 'Sukamakmur'),
(7, '1', 'Wirowongso'),
(8, '2', 'Ambulu'),
(9, '2', 'Andongsari'),
(10, '2', 'Karanganyar'),
(11, '2', 'Pontang'),
(12, '2', 'Sabrang'),
(13, '2', 'Sumberejo'),
(14, '2', 'Tegalsari'),
(15, '3', 'Arjasa'),
(16, '3', 'Biting'),
(17, '3', 'Candijati'),
(18, '3', 'Darsono'),
(19, '3', 'Kamal'),
(20, '3', 'Kemuninglor'),
(21, '4', 'Badean'),
(22, '4', 'Bangsalsari'),
(23, '4', 'Banjarsari'),
(24, '4', 'Curahkalong'),
(25, '4', 'Gambirono'),
(26, '4', 'Karangsono'),
(27, '4', 'Langkap'),
(28, '4', 'Petung'),
(29, '4', 'Sukorejo'),
(30, '4', 'Tisnogambar'),
(31, '4', 'Tugusari'),
(32, '5', 'Balungkidul'),
(33, '5', 'Balungkulon'),
(34, '5', 'Balunglor'),
(35, '5', 'Curahlele'),
(36, '5', 'Gumelar'),
(37, '5', 'Karangduren'),
(38, '5', 'Karang Semanding'),
(39, '5', 'Tutul'),
(40, '6', 'Bagorejo'),
(41, '6', 'Gumukmas'),
(42, '6', 'Karangrejo'),
(43, '6', 'Kepanjen'),
(44, '6', 'Mayangan'),
(45, '6', 'Menampu'),
(46, '6', 'Purwoasri'),
(47, '6', 'Tembokrejo'),
(48, '7', 'Jelbuk'),
(49, '7', 'Panduman'),
(50, '7', 'Sucopangepok'),
(51, '7', 'Sugerkidul'),
(52, '7', 'Sukojember'),
(53, '7', 'Sukowiryo'),
(54, '8', 'Cangkring'),
(55, '8', 'Jatimulyo'),
(56, '8', 'Jatisari'),
(57, '8', 'Jenggawah'),
(58, '8', 'Kemuningsari Kidul'),
(59, '8', 'Kertonegoro'),
(60, '8', 'Sruni'),
(61, '8', 'Wonojati'),
(62, '9', 'Jombang'),
(63, '9', 'Keting'),
(64, '9', 'Ngampelrejo'),
(65, '9', 'Padomasan'),
(66, '9', 'Sarimulyo'),
(67, '9', 'Wringinagung'),
(68, '10', 'Ajung'),
(69, '10', 'Gambiran'),
(70, '10', 'Glagahwero'),
(71, '10', 'Gumuksari'),
(72, '10', 'Kalisat'),
(73, '10', 'Patempuran'),
(74, '10', 'Plalangan'),
(75, '10', 'Sebanen'),
(76, '10', 'Sukoreno'),
(77, '10', 'Sumberjeruk'),
(78, '10', 'Sumberkalong'),
(79, '10', 'Sumberketempa'),
(80, '11', 'Jember Kidul'),
(81, '11', 'Kaliwates'),
(82, '11', 'Kebon Agung'),
(83, '11', 'Kepatihan'),
(84, '11', 'Mangli'),
(85, '11', 'Sempusari'),
(86, '11', 'Tegal Besar'),
(87, '12', 'Cakru'),
(88, '12', 'Kencong'),
(89, '12', 'Kraton'),
(90, '12', 'Paseban'),
(91, '12', 'Wonorejo'),
(92, '13', 'Karangpaiton'),
(93, '13', 'Ledokombo'),
(94, '13', 'Lembengan'),
(95, '13', 'Slateng'),
(96, '13', 'Sukogidri'),
(97, '13', 'Sumberanget'),
(98, '13', 'Sumberbulus'),
(99, '13', 'Sumberlesung'),
(100, '13', 'Sumbersalak'),
(101, '13', 'Suren'),
(102, '14', 'Mayang'),
(103, '14', 'Mrawon'),
(104, '14', 'Seputih'),
(105, '14', 'Sidomukti'),
(106, '14', 'Sumberkejayan'),
(107, '14', 'Tegalwaru'),
(108, '14', 'Tegalrejo'),
(109, '15', 'Karang Kedawung'),
(110, '15', 'Kawangrejo'),
(111, '15', 'Lampeji'),
(112, '15', 'Lengkong'),
(113, '15', 'Mumbulsari'),
(114, '15', 'Suco'),
(115, '15', 'Tamansari'),
(116, '16', 'Glagahwero'),
(117, '16', 'Kemiri'),
(118, '16', 'Kamuningsari Utara'),
(119, '16', 'Pakis'),
(120, '16', 'Panti'),
(121, '16', 'Serut'),
(122, '16', 'Suci'),
(123, '17', 'Bedadung'),
(124, '17', 'Jatian'),
(125, '17', 'Kertosari'),
(126, '17', 'Pakusari'),
(127, '17', 'Patemon'),
(128, '17', 'Subo'),
(129, '17', 'Sumberpinang'),
(130, '18', 'Banjarsengon'),
(131, '18', 'Baratan'),
(132, '18', 'Bintoro'),
(133, '18', 'Gebang'),
(134, '18', 'Jemberlor'),
(135, '18', 'Jumerto'),
(136, '18', 'Patrang'),
(137, '18', 'Slawu'),
(138, '19', 'Bagon'),
(139, '19', 'Grenden'),
(140, '19', 'Jambearum'),
(141, '19', 'Kasiyan'),
(142, '19', 'Kasiyan Timur'),
(143, '19', 'Mlokorejo'),
(144, '19', 'Mojomulyo'),
(145, '19', 'Mojosari'),
(146, '19', 'Puger Barat'),
(147, '19', 'Puger Timur'),
(148, '19', 'Wonosari'),
(149, '19', 'Wringintelu'),
(150, '20', 'Curah Malang'),
(151, '20', 'Gugut'),
(152, '20', 'Kaliwining'),
(153, '20', 'Nogosari'),
(154, '20', 'Pecoro'),
(155, '20', 'Rambigundam'),
(156, '20', 'Rambipuji'),
(157, '20', 'Rowotamtu'),
(158, '21', 'Pondokdalem'),
(159, '21', 'Pondokjoyo'),
(160, '21', 'Rejoagung'),
(161, '21', 'Semboro'),
(162, '21', 'Sidomekar'),
(163, '21', 'Sidomulyo'),
(164, '22', 'Garahan'),
(165, '22', 'Harjomulyo'),
(166, '22', 'Karangharjo'),
(167, '22', 'Mulyorejo'),
(168, '22', 'Pace'),
(169, '22', 'Sempolan'),
(170, '22', 'Sidomulyo'),
(171, '22', 'Silo'),
(172, '22', 'Sumberjati'),
(173, '23', 'Dukuhmencek'),
(174, '23', 'Jubung'),
(175, '23', 'Karangpring'),
(176, '23', 'Klungkung'),
(177, '23', 'Sukorambi'),
(178, '24', 'Arjasa'),
(179, '24', 'Baletaru'),
(180, '24', 'Dawuhanmangli'),
(181, '24', 'Mojogemi'),
(182, '24', 'Pocangan'),
(183, '24', 'Sukokerto'),
(184, '24', 'Sukorejo'),
(185, '24', 'Sukosari'),
(186, '24', 'Sukowono'),
(187, '24', 'Sumberwringin'),
(188, '24', 'Sumberdanti'),
(189, '24', 'Sumberwaru'),
(190, '25', 'Gelang'),
(191, '25', 'Jambesari'),
(192, '25', 'Jamintoro'),
(193, '25', 'Jatiroto'),
(194, '25', 'Kaliglagah'),
(195, '25', 'Karangbayat'),
(196, '25', 'Pringgowirawan'),
(197, '25', 'Rowotengah'),
(198, '25', 'Sumberagung'),
(199, '25', 'Yosorati'),
(200, '26', 'Cumedak'),
(201, '26', 'Gunungmalang'),
(202, '26', 'Jambearum'),
(203, '26', 'Plerean'),
(204, '26', 'Pringgondani'),
(205, '26', 'Randuagung'),
(206, '26', 'Rowosari'),
(207, '26', 'Sumberjambe'),
(208, '26', 'Sumberpakem'),
(209, '27', 'Antirogo'),
(210, '27', 'Karangrejo'),
(211, '27', 'Kebonsari'),
(212, '27', 'Kranjingan'),
(213, '27', 'Sumbersari'),
(214, '27', 'Tegalgede'),
(215, '27', 'Wirolegi'),
(216, '28', 'Darungan'),
(217, '28', 'Klatakan'),
(218, '28', 'Kramat Sukoharjo'),
(219, '28', 'Manggisan'),
(220, '28', 'Patemon'),
(221, '28', 'Selodakon'),
(222, '28', 'Tanggul Kulon'),
(223, '28', 'Tanggul Wetan'),
(224, '29', 'Andongrejo'),
(225, '29', 'Curahnongko'),
(226, '29', 'Curahtakir'),
(227, '29', 'Pondokrejo'),
(228, '29', 'Sidodadi'),
(229, '29', 'Sanenrejo'),
(230, '29', 'Tempurejo'),
(231, '29', 'Wonoasri'),
(232, '30', 'Gadingrejo'),
(233, '30', 'Gunungsari'),
(234, '30', 'Mundurejo'),
(235, '30', 'Paleran'),
(236, '30', 'Sidorejo'),
(237, '30', 'Sukoreno'),
(238, '30', 'Tanjungsari'),
(239, '30', 'Tegalwangi'),
(240, '30', 'Umbulrejo'),
(241, '30', 'Umbulsari'),
(242, '31', 'Ampel'),
(243, '31', 'Dukuh Dempok'),
(244, '31', 'Glundengan'),
(245, '31', 'Kesilir'),
(246, '31', 'Lojejer'),
(247, '31', 'Tamansari'),
(248, '31', 'Tanjung Rejo'),
(249, '32', 'Baratan'),
(250, '32', 'Bendelan'),
(251, '32', 'Binakal'),
(252, '32', 'Gadingsari'),
(253, '32', 'Jeruk Soksok'),
(254, '32', 'Kembangan'),
(255, '32', 'Sumber Tengah'),
(256, '32', 'Sumberwaru'),
(257, '33', 'Kembang'),
(258, '33', 'Pancoran'),
(259, '33', 'Pejaten'),
(260, '33', 'Sukowiryo'),
(261, '33', 'Badean'),
(262, '33', 'Blindungan'),
(263, '33', 'Dabasah'),
(264, '33', 'Kademangan'),
(265, '33', 'Kota Kulon'),
(266, '33', 'Nangkaan'),
(267, '33', 'Tamansari'),
(268, '34', 'Botolinggo'),
(269, '34', 'Gayam'),
(270, '34', 'Gayam Lor'),
(271, '34', 'Lanas'),
(272, '34', 'Lumutan'),
(273, '34', 'Klekehan'),
(274, '34', 'Penang'),
(275, '34', 'Sumber Canting'),
(276, '35', 'Bajuran'),
(277, '35', 'Batuampar'),
(278, '35', 'Batusalang'),
(279, '35', 'Bercak'),
(280, '35', 'Bercak Asri'),
(281, '35', 'Cermee'),
(282, '35', 'Grujugan'),
(283, '35', 'Jirek Mas'),
(284, '35', 'Kladi'),
(285, '35', 'Pelalangan'),
(286, '35', 'Ramban Barat'),
(287, '35', 'Ramban Timur'),
(288, '35', 'Solor'),
(289, '35', 'Suling Barat'),
(290, '35', 'Suling Timur'),
(291, '36', 'Curahpoh'),
(292, '36', 'Jetis'),
(293, '36', 'Kupang'),
(294, '36', 'Locare'),
(295, '36', 'Pakuwesi'),
(296, '36', 'Penambangan'),
(297, '36', 'Petung'),
(298, '36', 'Poncogati'),
(299, '36', 'Selolembu'),
(300, '36', 'Sumbersalak'),
(301, '36', 'Sumbersuko'),
(302, '36', 'Curahdami'),
(303, '37', 'Dadapan'),
(304, '37', 'Dawuhan'),
(305, '37', 'Grujugan Kidul'),
(306, '37', 'Kabuaran'),
(307, '37', 'Kejawan'),
(308, '37', 'Pekauman'),
(309, '37', 'Sumber Pandan'),
(310, '37', 'Taman'),
(311, '37', 'Tegal Mijin'),
(312, '37', 'Wanisodo'),
(313, '37', 'Wonosari'),
(314, '38', 'Grujugan Lor'),
(315, '38', 'Jambeanom'),
(316, '38', 'Jambesari'),
(317, '38', 'Pejagan'),
(318, '38', 'Pengarang'),
(319, '38', 'Pucanganom'),
(320, '38', 'Sumber Anyar'),
(321, '38', 'Sumberjeruk'),
(322, '38', 'Tegalpasir'),
(323, '39', 'Besuk'),
(324, '39', 'Blimbing'),
(325, '39', 'Karanganyar'),
(326, '39', 'Karangsengon'),
(327, '39', 'Klabang'),
(328, '39', 'Klampokan'),
(329, '39', 'Leprak'),
(330, '39', 'Pandak'),
(331, '39', 'Sumbersuko'),
(332, '39', 'Wonoboyo'),
(333, '39', 'Wonokerto'),
(334, '40', 'Gambangan'),
(335, '40', 'Gunungsari'),
(336, '40', 'Maesan'),
(337, '40', 'Pakuniran'),
(338, '40', 'Penanggungan'),
(339, '40', 'Pujerbaru'),
(340, '40', 'Sucolor'),
(341, '40', 'Suger Lor'),
(342, '40', 'Sumberanyar'),
(343, '40', 'Sumberpakem'),
(344, '40', 'Sumbersari'),
(345, '40', 'Tanahwulan'),
(346, '41', 'Andungsari'),
(347, '41', 'Ardisaeng'),
(348, '41', 'Gadingsari'),
(349, '41', 'Kupang'),
(350, '41', 'Pakem'),
(351, '41', 'Patemon'),
(352, '41', 'Petung'),
(353, '41', 'Sumberdumpyong'),
(354, '42', 'Bandilan'),
(355, '42', 'Cangkring'),
(356, '42', 'Prajekan Kidul'),
(357, '42', 'Prajekan Lor'),
(358, '42', 'Sempol'),
(359, '42', 'Tarum'),
(360, '42', 'Walidono'),
(361, '43', 'Alassumur'),
(362, '43', 'Kejayan'),
(363, '43', 'Mangli'),
(364, '43', 'Maskuning Barat'),
(365, '43', 'Maskuning Timur'),
(366, '43', 'Mengok'),
(367, '43', 'Padasan'),
(368, '43', 'Randucangkring'),
(369, '43', 'Sukodono'),
(370, '43', 'Sukokerto'),
(371, '43', 'Sukowono'),
(372, '44', 'Jampit'),
(373, '44', 'Kali Gedang'),
(374, '44', 'Kalianyar'),
(375, '44', 'Kalisat'),
(376, '44', 'Sempol'),
(377, '44', 'Sumber Rejo'),
(378, '45', 'Kerang'),
(379, '45', 'Nogosari'),
(380, '45', 'Pecalongan'),
(381, '45', 'Sukosari Lor'),
(382, '46', 'Rejo Agung'),
(383, '46', 'Sukorejo'),
(384, '46', 'Sukosari Kidul'),
(385, '46', 'Sumber Gading'),
(386, '46', 'Sumberwringin'),
(387, '46', 'Tegaljati'),
(388, '47', 'Gentong'),
(389, '47', 'Kemuningan'),
(390, '47', 'Kretek'),
(391, '47', 'Paguan'),
(392, '47', 'Sumberkokap'),
(393, '47', 'Taman'),
(394, '47', 'Trebungan'),
(395, '48', 'Kalianyar'),
(396, '48', 'Karang Melok'),
(397, '48', 'Kemirian'),
(398, '48', 'Mengen'),
(399, '48', 'Sukosari'),
(400, '48', 'Sumber Anom'),
(401, '48', 'Sumber Kemuning'),
(402, '48', 'Tamanan'),
(403, '48', 'Wonosuko'),
(404, '49', 'Cindogo'),
(405, '49', 'Gunung Anyar'),
(406, '49', 'Jurang Sapi'),
(407, '49', 'Kalitapen'),
(408, '49', 'Mangli Wetan'),
(409, '49', 'Mrawan'),
(410, '49', 'Taal'),
(411, '49', 'Tapen'),
(412, '49', 'Wonokusumo'),
(413, '50', 'Karanganyar'),
(414, '50', 'Klabang'),
(415, '50', 'Klabang Agung'),
(416, '50', 'Mandiro'),
(417, '50', 'Purnama'),
(418, '50', 'Tanggulangin'),
(419, '50', 'Tegalampel'),
(420, '50', 'Sekarputih'),
(421, '51', 'Bataan'),
(422, '51', 'Dawuhan'),
(423, '51', 'Gebang'),
(424, '51', 'Kajar'),
(425, '51', 'Kesemek'),
(426, '51', 'Koncerdarulaman'),
(427, '51', 'Koncer Selatan'),
(428, '51', 'Lojajar'),
(429, '51', 'Pekalangan'),
(430, '51', 'Sumbersalam'),
(431, '51', 'Tangsil Barat'),
(432, '51', 'Tenggarang'),
(433, '52', 'Brambangdarussolah'),
(434, '52', 'Gunosari'),
(435, '52', 'Jebung Selatan'),
(436, '52', 'Jebung Utara'),
(437, '52', 'Kembang'),
(438, '52', 'Pakisan'),
(439, '52', 'Patemon'),
(440, '52', 'Sulek'),
(441, '52', 'Tlogosari'),
(442, '52', 'Trotosari'),
(443, '53', 'Ambulu'),
(444, '53', 'Ampelan'),
(445, '53', 'Banyuputih'),
(446, '53', 'Banyuwulu'),
(447, '53', 'Bukor'),
(448, '53', 'Glingseran'),
(449, '53', 'Gubrih'),
(450, '53', 'Jambewungu'),
(451, '53', 'Jatisari'),
(452, '53', 'Jatitamban'),
(453, '53', 'Sumbercanting'),
(454, '53', 'Sumbermalang'),
(455, '53', 'Wringin'),
(456, '54', 'Bendoarum'),
(457, '54', 'Jumpong'),
(458, '54', 'Kapuran'),
(459, '54', 'Lombok Barat'),
(460, '54', 'Lombok Timur'),
(461, '54', 'Pasarejo'),
(462, '54', 'Pelalangan'),
(463, '54', 'Sumberkalong'),
(464, '54', 'Tangsil Timur'),
(465, '54', 'Traktakan'),
(466, '54', 'Tumpeng'),
(467, '54', 'Wonosari');

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_users` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_pokok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_bersih` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `waktu`, `username_users`, `gaji_pokok`, `tanggungan_kerja`, `hari_kerja`, `denda`, `gaji_bersih`, `periode`, `bukti`, `status`) VALUES
(22, '3000000', 'bima', '3000000', '31', '31', '0', '3000000', 'Apr 2022', '1653622891.jpg', 'Terbayar'),
(23, '3000000', 'au', '3000000', '31', '21', '3000000', '0', 'Apr 2022', NULL, 'Belum Terbayar'),
(24, '3000000', 'jastin', '3000000', '31', '28', '300000', '2700000', 'Apr 2022', NULL, 'Belum Terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_karyawan`
--

CREATE TABLE `jenis_karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_karyawan`
--

INSERT INTO `jenis_karyawan` (`id`, `nama`, `gaji`) VALUES
(1, 'Tetap', '3000000'),
(2, 'Kontrak', '2500000');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`) VALUES
(1, 'Jember'),
(2, 'Bondowoso');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kabupaten`, `nama`) VALUES
(1, '1', 'Ajung'),
(2, '1', 'Ambulu'),
(3, '1', 'Arjasa'),
(4, '1', 'Bangsalsari'),
(5, '1', 'Balung'),
(6, '1', 'Gumukmas'),
(7, '1', 'Jelbuk'),
(8, '1', 'Jenggawah'),
(9, '1', 'Jombang'),
(10, '1', 'Kalisat'),
(11, '1', 'Kaliwates'),
(12, '1', 'Kencong'),
(13, '1', 'Ledokombo'),
(14, '1', 'Mayang'),
(15, '1', 'Mumbulsari'),
(16, '1', 'Panti'),
(17, '1', 'Pakusari'),
(18, '1', 'Patrang'),
(19, '1', 'Puger'),
(20, '1', 'Rambipuji'),
(21, '1', 'Semboro'),
(22, '1', 'Silo'),
(23, '1', 'Sukorambi'),
(24, '1', 'Sukowono'),
(25, '1', 'Sumberbaru'),
(26, '1', 'Sumberjambe'),
(27, '1', 'Sumbersari'),
(28, '1', 'Tanggul'),
(29, '1', 'Tempurejo'),
(30, '1', 'Umbulsari'),
(31, '1', 'Wuluhan'),
(32, '2', 'Binakal'),
(33, '2', 'Bondowoso'),
(34, '2', 'Botolinggo'),
(35, '2', 'Cermee'),
(36, '2', 'Curahdami'),
(37, '2', 'Grujugan'),
(38, '2', 'Jambesari Darus Sholah'),
(39, '2', 'Klabang'),
(40, '2', 'Maesan'),
(41, '2', 'Pakem'),
(42, '2', 'Prajekan'),
(43, '2', 'Pujer'),
(44, '2', 'Sempol'),
(45, '2', 'Sukosari'),
(46, '2', 'Sumberwringin'),
(47, '2', 'Taman Krocok'),
(48, '2', 'Tamanan'),
(49, '2', 'Tapen'),
(50, '2', 'Tegalampel'),
(51, '2', 'Tenggarang'),
(52, '2', 'Tlogosari'),
(53, '2', 'Wringin'),
(54, '2', 'Wonosari');

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
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2019_08_19_000000_create_failed_jobs_table', 1),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(44, '2022_04_11_004833_master', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_karyawan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `level`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_hp`, `tanggal_masuk`, `no_rekening`, `jenis_karyawan_id`, `profile_picture`, `username`, `password`) VALUES
(1, 'Tony Mardianto', 'Manager', 'Pria', '1003813200', 'admin', '082228132003', '1653050353', '1597532468', '1', 'Default.jpg', 'admin', 'admin'),
(2, 'Bima Tribuana Putra', 'Karyawan', 'Pria', '1003813200', 'bima', '082228132003', '1653050353', '1597532468', '1', 'Default.jpg', 'bima', 'bima'),
(3, 'Aurelia', 'Karyawan', 'Wanita', '978325200', 'au', '08123456789', '1653276076', '789456123', '1', 'Default.jpg', 'au', 'au'),
(4, 'Jastin', 'Karyawan', NULL, NULL, NULL, NULL, '1653279005', NULL, '1', 'Default.jpg', 'jastin', 'jastin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_karyawan`
--
ALTER TABLE `jenis_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=468;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `jenis_karyawan`
--
ALTER TABLE `jenis_karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
