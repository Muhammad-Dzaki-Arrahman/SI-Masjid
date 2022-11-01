-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 05:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$dy1sWZLTS4xX2oOJi1zNee.qAJ7jZ1wVqLJf3QGTaFTf5H9HewRbO');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dakwah`
--

CREATE TABLE `tbl_dakwah` (
  `id_dakwah` int(11) NOT NULL,
  `judul_dakwah` varchar(255) NOT NULL,
  `isi_dakwah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kaskeluar`
--

CREATE TABLE `tbl_kaskeluar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kasmasuk`
--

CREATE TABLE `tbl_kasmasuk` (
  `id_kasmasuk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kajian` int(11) NOT NULL,
  `nama_kajian` varchar(255) DEFAULT NULL,
  `nama_ustad` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `judul_kajian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kajian`, `nama_kajian`, `nama_ustad`, `hari`, `judul_kajian`) VALUES
(1, 'Kajian Ahad Subuh', 'Dr. Ustad Maulana Yahya, M.Ag', 'Ahad', 'Keistimewaan Lailatur Qodar'),
(2, 'Kajian Ahad Ba\'da Isya', 'Ustad Zafran Kamal, M.Ag', 'Ahad', 'Cara mendidik anak menurut Al - Qur\'an dan Hadist'),
(4, 'Kajian Malam Jum\'at', 'Ustad Zidan Saifal', 'Kamis', 'Manfaat membaca surat al Kahfi'),
(5, 'Kajian Senin ba\'da Maghrib', 'Ustad Farhan Abraham, Lc. M.A', 'Senin', 'Sabar'),
(7, 'Pembelajaran Santri Masjid Tawakal Ahad Subuh', 'Ustad Amirin Mu\'rof S.Ag', 'Ahad', 'Durhaka Kepada Kedua Orang Tua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `Id_Pengumuman` int(11) NOT NULL,
  `Judul_Pengumuman` varchar(255) NOT NULL,
  `Isi_Pengumuman` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`Id_Pengumuman`, `Judul_Pengumuman`, `Isi_Pengumuman`, `Tanggal`) VALUES
(2, 'KAJIAN SPESIAL MENYAMBUT BULAN RAMADHAN BERSAMA UST Abdul Somad,LC,MA', 'Kajian kali ini dilakukan khusus untuk menyambut bulan suci Ramadhan 1144H yang diantarkan oleh Bapak Ust. Abdul Somad, Lc.MA dimana beliau adalah salah Satu Ulama dan Pendakwah yang sering mengulas masalah - masalah Keagamaan dengan penyampaianya yang cu', '2022-10-24'),
(3, 'GOTONG ROYONG MASJID TAWAKAL', 'KEGIATAN INI AKAN DILAKSANAKAN PADA AHAD 30 OKTOBER 2022 BERSAMA SELURUH JAMAAH MASJID TAWAKAL, OLEH KARENA ITU DIMOHON UNTUK KEHADIRANNYA PADA WAKTU TERSEBUT GUNA MENAMBAH KENYAMANAN KITA BERSAMA DALAM BERIBADAH', '2022-10-30'),
(4, 'Hari Raya Idul Adha', 'Kepada seluruh jamaah masjid tawakal kami mengundang anda untuk sholat hari raya dan menyaksikan pemotongan hewan qurban ', '2023-06-16'),
(12, 'Hari Raya Idul Fitri', 'Kepada seluruh jamaah masjid tawakal kami mengundang anda untuk sholat hari raya dan makan bersama selagi saling memaafkan satu sama lain', '2023-10-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dakwah`
--
ALTER TABLE `tbl_dakwah`
  ADD PRIMARY KEY (`id_dakwah`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kajian`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`Id_Pengumuman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dakwah`
--
ALTER TABLE `tbl_dakwah`
  MODIFY `id_dakwah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `Id_Pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
