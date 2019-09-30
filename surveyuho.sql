-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 02:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveyuho`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_mahasiswa`
--

CREATE TABLE `tbl_data_mahasiswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nim` char(9) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `pekerjaan_orang_tua` varchar(100) NOT NULL,
  `penghasilan_orang_tua` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_mahasiswa`
--

INSERT INTO `tbl_data_mahasiswa` (`id`, `id_user`, `nama_lengkap`, `nim`, `jurusan`, `fakultas`, `no_hp`, `alamat_rumah`, `nama_orang_tua`, `pekerjaan_orang_tua`, `penghasilan_orang_tua`) VALUES
(5, 50, 'Arwan Prianto', 'f1a316006', 'Matematika', 'Mipa', '085396252675', 'Kendari', 'Orang tua', 'petani', 100000),
(6, 52, 'Arwan Lagi', 'f1a316006', 'Matematika ilmu komputer', 'matematika', '085396252675', 'kendari lagi', 'Orang tua lagi', 'petani', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `id` int(11) NOT NULL,
  `nama_aplikasi` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `icon_apps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`id`, `nama_aplikasi`, `email`, `no_telp`, `alamat`, `icon_apps`) VALUES
(1, 'survey UKT', 'samsul.marif100@gmail.com', '081341146229', 'jalan mokodompit', 'icon_app112.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `status` enum('mahasiswa_aktif','mahasiswa_alumni') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `isi`, `status`) VALUES
(1, 'Ruang kuliah tertata besih dan rapi', 'mahasiswa_aktif'),
(2, 'Ruang kuliah sejuk dan nyaman', 'mahasiswa_aktif'),
(3, 'Sarana pembelajaran yang tersedia di ruang kuliah', 'mahasiswa_aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(12) NOT NULL,
  `name_role` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name_role`, `deskripsi`) VALUES
(1, 'mahasiswa_aktif', 'login ke form mahasiswa aktif'),
(2, 'mahasiswa_alumni', 'login ke form mahasiswa alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` enum('mahasiswa_aktif','mahasiswa_alumni') NOT NULL,
  `tanggal_akun_dibuat` datetime NOT NULL,
  `user_activation` int(1) NOT NULL,
  `user_survey` int(1) NOT NULL,
  `default_survey` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama_lengkap`, `username`, `password`, `status`, `tanggal_akun_dibuat`, `user_activation`, `user_survey`, `default_survey`) VALUES
(31, 'shultonul marif', 'shultonul1129321', '$2y$05$nmT8/08/vgIzc0Qj0JWyyeGd8eLXtWed4Upe5m70pGVii/ExElV7C', 'mahasiswa_alumni', '2019-08-10 20:40:40', 1, 0, 0),
(33, 'ridwan ermawan', 'ridwan112', '$2y$05$lbBQSbobCFFBk8z9cs.jjO13AgQZnGCon3I/4yvTQfeGAdWSuTZme', 'mahasiswa_aktif', '2019-08-10 20:49:35', 1, 0, 0),
(35, 'Muhammad Syamsul Marif', 'samsul112', '$2y$05$ViAklAOh14LnMLAb/P5pWenJ9sdfXC4SvuGwMwxA8ePmRrN1z/G9e', 'mahasiswa_alumni', '2019-08-10 20:57:21', 1, 0, 0),
(36, 'MIftahul Jannah', 'jannah', '$2y$05$j2JE3bNEkbRckiHw8TMR/euqR7dXOkKCE29GKDRyErqjbwc8MfnEW', 'mahasiswa_aktif', '2019-08-10 21:00:28', 0, 0, 0),
(39, 'arwan112', 'arwan112', '$2y$05$aZGU8qkKu7ft4i3Yzfn5cey50RNWPjZ98K0xLGVskHO8MIgoe4sK2', 'mahasiswa_aktif', '2019-08-10 21:07:27', 1, 0, 0),
(40, 'MIftahul Jannah', 'miftahul', '$2y$05$Qnmw/eSe/peQcn06i2Hk1ucFViVgu8.vIcG5xbUqRg4eezcnx7k/i', 'mahasiswa_alumni', '2019-08-10 21:52:01', 1, 0, 0),
(41, 'samsul marif', 'syamsulmarif', '$2y$05$Am/ntd3qo2LcTKLI9MwRqOdIKpTzIvYKFj4btYZCMDe6UBdEtam8S', 'mahasiswa_alumni', '2019-08-12 14:37:53', 1, 0, 0),
(47, 'muhammad kevin oheo', 'kevin1129321', '$2y$05$a0IJD2KBhOF7tuNeqL7JeOU0lOJQbBc9v1d0LWQJ2iIwSqpePhtM2', 'mahasiswa_aktif', '2019-08-18 16:25:34', 1, 0, 0),
(48, 'nadila puspita ningsih', 'nadilakolaka112', '$2y$05$AhutqhvmtFx2eOHlEFRDFOGTzkDVwFVUeN0N3JwOWdUab5UL1eJ92', 'mahasiswa_aktif', '2019-08-18 16:27:23', 0, 0, 0),
(49, 'samsung', 'samsungj2', '$2y$05$vJy4H15JgOsFcxrHpe5EgeA9ud7sh.nP/pXkFE6E4SjdIW5/g0nu.', 'mahasiswa_alumni', '2019-08-20 21:19:37', 0, 0, 0),
(50, 'Arwan Prianto', 'f1a316006', '$2y$05$y0SY5gMcxs2tC6JQiMcMd.uyxL06SrltCOfNPqt.cz6kVU2O9DbMS', 'mahasiswa_aktif', '2019-08-22 09:02:55', 1, 0, 1),
(51, 'Arwan1999', 'arwan1999', '$2y$05$7rsPBj8ACIQ.1pcGKppTDuJIypeMFJ3p/H2IoWTIBqfab/SAZBYg2', 'mahasiswa_aktif', '2019-09-25 12:56:30', 1, 0, 0),
(52, 'Arwan Lagi', 'arwanlagi', '$2y$05$xW6zoBqHsB5GOOMMSbfUeeuW5HfS2MGRrCd.WHeIdfDMlR5m9XKLG', 'mahasiswa_alumni', '2019-09-30 07:14:25', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_mahasiswa`
--
ALTER TABLE `tbl_data_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_mahasiswa`
--
ALTER TABLE `tbl_data_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
