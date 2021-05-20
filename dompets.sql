-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 07:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charge`
--

-- --------------------------------------------------------

--
-- Table structure for table `dompets`
--

CREATE TABLE `dompets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dompets`
--

INSERT INTO `dompets` (`id`, `user_id`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 1, 999999, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(2, 2, 100000, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(3, 3, 100000, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(4, 4, 100000, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(5, 5, 100000, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(6, 6, 100000, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(7, 7, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(8, 8, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(9, 9, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(10, 10, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(11, 11, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(12, 12, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(13, 13, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(14, 14, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23'),
(15, 15, 0, '2021-05-19 22:02:23', '2021-05-19 22:02:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dompets`
--
ALTER TABLE `dompets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dompets`
--
ALTER TABLE `dompets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
