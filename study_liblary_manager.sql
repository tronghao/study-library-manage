-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2024 at 12:11 PM
-- Server version: 8.0.35-0ubuntu0.20.04.1
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_liblary_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `luot`
--

CREATE TABLE `luot` (
  `ID` int NOT NULL,
  `tong` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `muon`
--

CREATE TABLE `muon` (
  `ID` int NOT NULL,
  `usename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lop` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tensach` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `datem` date DEFAULT NULL,
  `datet` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `ID` int NOT NULL,
  `theloai` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tensach` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tentacgia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `soluong` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int NOT NULL,
  `usename` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lop` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtin`
--

INSERT INTO `thongtin` (`id`, `usename`, `password`, `hoten`, `lop`) VALUES
(1, 'admin', '123456', 'Admin', 'Admin'),
(2, 'user', '123456', 'Đổ Trọng Hảo', 'DA17TT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luot`
--
ALTER TABLE `luot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `muon`
--
ALTER TABLE `muon`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luot`
--
ALTER TABLE `luot`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `muon`
--
ALTER TABLE `muon`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongtin`
--
ALTER TABLE `thongtin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
