-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 01:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_anxiety`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `level_id`) VALUES
(14, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Sandi Tamalia H', 1),
(23, 'abdul', '81dc9bdb52d04dc20036dbd8313ed055', 'Abdul Muhrib', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_konsultasi`
--

CREATE TABLE `tb_detail_konsultasi` (
  `id_detail_konsultasi` int(11) NOT NULL,
  `id_konsultasi` varchar(255) NOT NULL,
  `kd_gejala` varchar(25) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_konsultasi`
--

INSERT INTO `tb_detail_konsultasi` (`id_detail_konsultasi`, `id_konsultasi`, `kd_gejala`, `nilai`) VALUES
(822, 'konsultasi65a4ef0c14242', 'G01', 0.6),
(823, 'konsultasi65a4ef0c14242', 'G02', 0),
(824, 'konsultasi65a4ef0c14242', 'G03', 0),
(825, 'konsultasi65a4ef0c14242', 'G04', 0.2),
(826, 'konsultasi65a4ef0c14242', 'G05', 1),
(827, 'konsultasi65a4ef0c14242', 'G06', 0),
(828, 'konsultasi65a4ef0c14242', 'G07', 0),
(829, 'konsultasi65a4ef0c14242', 'G08', 0.2),
(830, 'konsultasi65a4ef0c14242', 'G09', 1),
(831, 'konsultasi65a4ef0c14242', 'G10', 0),
(832, 'konsultasi65a4ef0c14242', 'G11', 0.6),
(833, 'konsultasi65a4ef0c14242', 'G12', 0.6),
(834, 'konsultasi65a4ef0c14242', 'G13', 0.6),
(835, 'konsultasi65a4ef0c14242', 'G14', 0),
(836, 'konsultasi65a4ef0c14242', 'G15', 0),
(837, 'konsultasi65a4ef0c14242', 'G16', 0),
(838, 'konsultasi65a4ef0c14242', 'G17', 0.4),
(839, 'konsultasi65a4ef0c14242', 'G18', 0),
(840, 'konsultasi65a4ef0c14242', 'G19', 0),
(841, 'konsultasi65a4f36a0cab9', 'G01', 0.8),
(842, 'konsultasi65a4f36a0cab9', 'G02', 0.6),
(843, 'konsultasi65a4f36a0cab9', 'G03', 0.4),
(844, 'konsultasi65a4f36a0cab9', 'G04', 0.2),
(845, 'konsultasi65a4f36a0cab9', 'G05', 0.8),
(846, 'konsultasi65a4f36a0cab9', 'G06', 0),
(847, 'konsultasi65a4f36a0cab9', 'G07', 0),
(848, 'konsultasi65a4f36a0cab9', 'G08', 0),
(849, 'konsultasi65a4f36a0cab9', 'G09', 0),
(850, 'konsultasi65a4f36a0cab9', 'G10', 0),
(851, 'konsultasi65a4f36a0cab9', 'G11', 0.8),
(852, 'konsultasi65a4f36a0cab9', 'G12', 0.8),
(853, 'konsultasi65a4f36a0cab9', 'G13', 0),
(854, 'konsultasi65a4f36a0cab9', 'G14', 0),
(855, 'konsultasi65a4f36a0cab9', 'G15', 0),
(856, 'konsultasi65a4f36a0cab9', 'G16', 0),
(857, 'konsultasi65a4f36a0cab9', 'G17', 0),
(858, 'konsultasi65a4f36a0cab9', 'G18', 0),
(859, 'konsultasi65a4f36a0cab9', 'G19', 0),
(860, 'konsultasi65b54a27695ba', 'G01', 0.8),
(861, 'konsultasi65b54a27695ba', 'G02', 0),
(862, 'konsultasi65b54a27695ba', 'G03', 0),
(863, 'konsultasi65b54a27695ba', 'G04', 0.2),
(864, 'konsultasi65b54a27695ba', 'G05', 1),
(865, 'konsultasi65b54a27695ba', 'G06', 0),
(866, 'konsultasi65b54a27695ba', 'G07', 0),
(867, 'konsultasi65b54a27695ba', 'G08', 0),
(868, 'konsultasi65b54a27695ba', 'G09', 0.2),
(869, 'konsultasi65b54a27695ba', 'G10', 0),
(870, 'konsultasi65b54a27695ba', 'G11', 0.2),
(871, 'konsultasi65b54a27695ba', 'G12', 0),
(872, 'konsultasi65b54a27695ba', 'G13', 0),
(873, 'konsultasi65b54a27695ba', 'G14', 0.2),
(874, 'konsultasi65b54a27695ba', 'G15', 0),
(875, 'konsultasi65b54a27695ba', 'G16', 0),
(876, 'konsultasi65b54a27695ba', 'G17', 0),
(877, 'konsultasi65b54a27695ba', 'G18', 0),
(878, 'konsultasi65b54a27695ba', 'G19', 0),
(879, 'konsultasi6639fc7610e2b', 'G01', 0.4),
(880, 'konsultasi6639fc7610e2b', 'G02', 0.6),
(881, 'konsultasi6639fc7610e2b', 'G03', 0.2),
(882, 'konsultasi6639fc7610e2b', 'G04', 0.2),
(883, 'konsultasi6639fc7610e2b', 'G05', 0),
(884, 'konsultasi6639fc7610e2b', 'G06', 0),
(885, 'konsultasi6639fc7610e2b', 'G07', 0.4),
(886, 'konsultasi6639fc7610e2b', 'G08', 0),
(887, 'konsultasi6639fc7610e2b', 'G09', 0.2),
(888, 'konsultasi6639fc7610e2b', 'G10', 0.2),
(889, 'konsultasi6639fc7610e2b', 'G11', 0),
(890, 'konsultasi6639fc7610e2b', 'G12', 0),
(891, 'konsultasi6639fc7610e2b', 'G13', 0),
(892, 'konsultasi6639fc7610e2b', 'G14', 0),
(893, 'konsultasi6639fc7610e2b', 'G15', 0),
(894, 'konsultasi6639fc7610e2b', 'G16', 0),
(895, 'konsultasi6639fc7610e2b', 'G17', 0),
(896, 'konsultasi6639fc7610e2b', 'G18', 0),
(897, 'konsultasi6639fc7610e2b', 'G19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kd_gejala` varchar(25) NOT NULL,
  `nama_gejala` varchar(70) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kd_gejala`, `nama_gejala`, `level_id`) VALUES
('G01', 'Merasa gelisah', 1),
('G02', 'Lebih sensitif', 1),
('G03', 'Tubuh gemetar', 2),
('G04', 'Sulit mengendalikan kekhawatiran', 2),
('G05', 'Sulit tidur', 2),
('G06', 'Nafsu makan terganggu', 2),
('G07', 'Psikosomatis (keluhan gejala fisik akibat stres)', 1),
('G08', 'Jantung berdebar-debar kencang', 2),
('G09', 'Keringat berlebihan', 2),
('G10', 'Sakit perut', 2),
('G11', 'Sulit berkonsentrasi', 2),
('G12', 'Mudah lelah', 2),
('G13', 'Kesulitan melakukan kontak mata', 2),
('G14', 'Perasaan minder atau takut orang lain menilai negatif', 2),
('G15', 'Merasakan kecemasan yang intens saat menghadapi objek atau situasi', 2),
('G16', 'Ketakutan terhadap suatu objek atau situasi', 2),
('G17', 'Ketakutan di tempat umum', 2),
('G18', 'Takut akan sendirian', 2),
('G19', 'Sulit jauh dari orang yang dicintai atau disayangi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsultasi`
--

CREATE TABLE `tb_konsultasi` (
  `id_konsultasi` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` int(11) NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai_cf` double NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_konsultasi`
--

INSERT INTO `tb_konsultasi` (`id_konsultasi`, `nama`, `usia`, `jenis_kelamin`, `telp`, `alamat`, `nama_penyakit`, `keterangan`, `nilai_cf`, `time`) VALUES
('konsultasi65a4ef0c14242', 'Sandi Tamalia H', 10, 'Laki-Laki', '098754', 'Tangerang', 'Kecemasan Umum', 'Rasa cemas atau khawatir yang berlebihan dan tidak', 100, '2024-01-15 15:38:36'),
('konsultasi65a4f36a0cab9', 'Anton', 15, 'Laki-Laki', '23523643', 'Jombang', 'Kecemasan Umum', 'Rasa cemas atau khawatir yang berlebihan dan tidak', 95.6041007104, '2024-01-15 15:57:14'),
('konsultasi65b54a27695ba', 'Sandi Tamalia H', 12, 'Laki-Laki', '23523643', 'Tangerang', 'Gangguan Panik', 'Ketakutan yang terjadi secara intens dan tiba-tiba', 87.2, '2024-01-28 01:23:35'),
('konsultasi6639fc7610e2b', 'Abdul', 10, 'Laki-Laki', '098765', 'Pamulang', 'Gangguan Panik', 'Ketakutan yang terjadi secara intens dan tiba-tiba', 69.28, '2024-05-07 17:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'pakar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pakar`
--

CREATE TABLE `tb_pakar` (
  `id_pakar` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pakar`
--

INSERT INTO `tb_pakar` (`id_pakar`, `username`, `password`, `nama`, `level_id`) VALUES
(1, 'pakar', '81dc9bdb52d04dc20036dbd8313ed055', 'Nabila Nur Amalia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kd_penyakit` varchar(25) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `level_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kd_penyakit`, `nama_penyakit`, `keterangan`, `level_id`, `date`) VALUES
('P01', 'Kecemasan Umum', 'Rasa cemas atau khawatir yang berlebihan dan tidak terkendali terhadap berbagai hal', 1, '2024-02-05'),
('P02', 'Kecemasan Sosial', 'Ketakutan yang intens dan terus-menerus akan diawasi dan dihakimi oleh orang lain', 1, '2023-12-27'),
('P03', 'Gangguan Panik', 'Ketakutan yang terjadi secara intens dan tiba-tiba sehingga memicu reaksi fisik yang parah. Pemicunya seringkali tidak jelas bahkan tidak membahayakan', 1, '2023-12-19'),
('P04', 'Gangguan Kecemasan Berpisah', 'Kecemasan atau ketakutan akan jauh-jauh dari orang terdekatnya', 1, '2023-12-27'),
('P05', 'Fobia', 'Ketakutan yang hebat terhadap objek atau situasi tertentu', 1, '2023-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_rules` int(11) NOT NULL,
  `kd_penyakit` varchar(25) NOT NULL,
  `kd_gejala` varchar(25) NOT NULL,
  `level_id` int(11) NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL,
  `cf_rule` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_rules`, `kd_penyakit`, `kd_gejala`, `level_id`, `nilai_mb`, `nilai_md`, `cf_rule`) VALUES
(51, 'P01', 'G12', 2, 0.8, 0.2, '0.6'),
(52, 'P01', 'G02', 2, 0.8, 0.2, '0.6'),
(53, 'P01', 'G04', 2, 1, 0.2, '0.8'),
(54, 'P01', 'G05', 2, 1, 0.2, '0.8'),
(55, 'P01', 'G10', 2, 0.8, 0.2, '0.6'),
(56, 'P01', 'G11', 2, 0.6, 0, '0.6'),
(57, 'P01', 'G12', 2, 0.6, 0.4, '0.2'),
(58, 'P02', 'G03', 2, 0.8, 0.2, '0.6'),
(59, 'P02', 'G08', 2, 1, 0, '1.0'),
(60, 'P02', 'G10', 2, 0.6, 0.2, '0.4'),
(61, 'P02', 'G13', 2, 1, 0, '1.0'),
(62, 'P02', 'G14', 2, 1, 0, '1.0'),
(63, 'P02', 'G09', 2, 0.8, 0.2, '0.6'),
(64, 'P02', 'G17', 2, 0.6, 0.4, '0.2'),
(65, 'P03', 'G01', 2, 1, 0, '1.0'),
(66, 'P03', 'G03', 2, 1, 0, '1.0'),
(67, 'P03', 'G08', 2, 1, 0, '1.0'),
(68, 'P03', 'G09', 2, 1, 0, '1.0'),
(69, 'P03', 'G04', 2, 1, 0, '1.0'),
(70, 'P04', 'G04', 2, 0.8, 0.2, '0.6'),
(71, 'P04', 'G18', 2, 1, 0, '1.0'),
(72, 'P04', 'G19', 2, 1, 0, '1.0'),
(73, 'P05', 'G14', 2, 0.8, 0.2, '0.6'),
(74, 'P05', 'G15', 2, 1, 0, '1.0'),
(75, 'P05', 'G16', 2, 1, 0, '1.0'),
(76, 'P05', 'G17', 2, 0.6, 0.4, '0.2'),
(77, 'P05', 'G04', 2, 0.8, 0.2, '0.6'),
(78, 'P05', 'G08', 2, 1, 0, '1.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `tb_detail_konsultasi`
--
ALTER TABLE `tb_detail_konsultasi`
  ADD PRIMARY KEY (`id_detail_konsultasi`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `tb_detail_konsultasi_ibfk_1` (`id_konsultasi`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kd_gejala`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `tb_konsultasi`
--
ALTER TABLE `tb_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pakar`
--
ALTER TABLE `tb_pakar`
  ADD PRIMARY KEY (`id_pakar`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD PRIMARY KEY (`id_rules`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `kd_penyakit` (`kd_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_detail_konsultasi`
--
ALTER TABLE `tb_detail_konsultasi`
  MODIFY `id_detail_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=898;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pakar`
--
ALTER TABLE `tb_pakar`
  MODIFY `id_pakar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rules`
--
ALTER TABLE `tb_rules`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `tb_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
