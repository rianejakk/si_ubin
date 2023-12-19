-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mitra`
--

CREATE TABLE `data_mitra` (
  `sobat-id` varchar(12) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `username` varchar(16) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `NPWP` varchar(16) NOT NULL,
  `Alamat` varchar(32) NOT NULL,
  `Tempat Lahir` varchar(32) NOT NULL,
  `Tanggal Lahir` date DEFAULT NULL,
  `Jenis Kelamin` varchar(16) NOT NULL,
  `Jabatan` varchar(32) NOT NULL,
  `Agama` varchar(8) NOT NULL,
  `Status Perkawinan` varchar(16) NOT NULL,
  `Pendidikan Terakhir` varchar(16) NOT NULL,
  `No Handphone` varchar(16) NOT NULL,
  `Pekerjaan` varchar(32) NOT NULL,
  `done_sensus_penduduk` tinyint(1) NOT NULL,
  `done_sensus_pertanian` tinyint(1) NOT NULL,
  `done_sensus_ekonomi` tinyint(1) NOT NULL,
  `done_survei_sen` tinyint(1) NOT NULL,
  `done_survei_akn` tinyint(1) NOT NULL,
  `done_survei_biaya_hidup` tinyint(1) NOT NULL,
  `done_capi` tinyint(1) NOT NULL,
  `Nama Bank` varchar(16) NOT NULL,
  `Nomor Rekening` varchar(16) NOT NULL,
  `Nama Pemilik Rekening` varchar(32) NOT NULL,
  `memiliki_android` tinyint(1) NOT NULL,
  `Merk HP` varchar(16) NOT NULL,
  `Tipe HP` varchar(32) NOT NULL,
  `Kendaraan Bermotor` tinyint(1) NOT NULL,
  `Bisa Mengendarai` tinyint(1) NOT NULL,
  `Laptop` tinyint(1) NOT NULL,
  `Menggunakan PC` tinyint(1) NOT NULL,
  `Catatan` varchar(128) NOT NULL,
  `Hubungan Eksternal` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mitra`
--

INSERT INTO `data_mitra` (`sobat-id`, `NIK`, `Nama`, `username`, `Email`, `NPWP`, `Alamat`, `Tempat Lahir`, `Tanggal Lahir`, `Jenis Kelamin`, `Jabatan`, `Agama`, `Status Perkawinan`, `Pendidikan Terakhir`, `No Handphone`, `Pekerjaan`, `done_sensus_penduduk`, `done_sensus_pertanian`, `done_sensus_ekonomi`, `done_survei_sen`, `done_survei_akn`, `done_survei_biaya_hidup`, `done_capi`, `Nama Bank`, `Nomor Rekening`, `Nama Pemilik Rekening`, `memiliki_android`, `Merk HP`, `Tipe HP`, `Kendaraan Bermotor`, `Bisa Mengendarai`, `Laptop`, `Menggunakan PC`, `Catatan`, `Hubungan Eksternal`) VALUES
('', '3509000000000001', 'John Doe', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000002', 'Jane Smith', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000003', 'Bob Johnson', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000004', 'Alice Williams', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000005', 'Charlie Brown', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000006', 'Eva Martinez', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000007', 'David Taylor', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000008', 'Grace Turner', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000009', 'Henry Davis', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000010', 'Olivia Robinson', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000011', 'Samuel White', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000012', 'Lily Adams', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000013', 'Andrew Miller', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000014', 'Sophia Wilson', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000015', 'Jack Harris', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000016', 'Emma Lee', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000017', 'Daniel Brown', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509000000000018', 'Ava Johnson', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509223655731184', 'Lestari Dwi', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0),
('', '3509271758281123', 'Oden Mahaputra', '', '', '', '', '', NULL, '', 'Petugas Mitra', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, '', '', 0, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(6) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mitra`
--
ALTER TABLE `data_mitra`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
