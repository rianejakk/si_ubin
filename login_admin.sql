-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 11:56 AM
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
  `id` varchar(16) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Jabatan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mitra`
--

INSERT INTO `data_mitra` (`id`, `Nama`, `Jabatan`) VALUES
('3509223655731184', 'Lestari Dwi', 'Petugas Mitra'),
('3509000000000001', 'John Doe', 'Petugas Mitra'),
('3509000000000002', 'Jane Smith', 'Petugas Mitra'),
('3509000000000003', 'Bob Johnson', 'Petugas Mitra'),
('3509000000000004', 'Alice Williams', 'Petugas Mitra'),
('3509000000000005', 'Charlie Brown', 'Petugas Mitra'),
('3509000000000006', 'Eva Martinez', 'Petugas Mitra'),
('3509000000000007', 'David Taylor', 'Petugas Mitra'),
('3509000000000008', 'Grace Turner', 'Petugas Mitra'),
('3509000000000009', 'Henry Davis', 'Petugas Mitra'),
('3509000000000010', 'Olivia Robinson', 'Petugas Mitra'),
('3509000000000011', 'Samuel White', 'Petugas Mitra'),
('3509000000000012', 'Lily Adams', 'Petugas Mitra'),
('3509000000000013', 'Andrew Miller', 'Petugas Mitra'),
('3509000000000014', 'Sophia Wilson', 'Petugas Mitra'),
('3509000000000015', 'Jack Harris', 'Petugas Mitra'),
('3509000000000016', 'Emma Lee', 'Petugas Mitra'),
('3509000000000017', 'Daniel Brown', 'Petugas Mitra'),
('3509000000000018', 'Ava Johnson', 'Petugas Mitra');

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
