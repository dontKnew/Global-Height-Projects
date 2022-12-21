-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 12:22 AM
-- Server version: 10.3.37-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lensnczo_apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `profile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'photo6096073806402660766_1666006938_f836b69e81f22da6ea37.jpg', 'admin@resort.in', '$2y$10$rivoAJRuvRXxnxIxTQbk4u6J6KYhobkj/Sy0uysd9HmTxJulpB9rK', '2022-10-04 12:42:22', '2022-10-17 11:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `apartment_states`
--

CREATE TABLE `apartment_states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apartment_states`
--

INSERT INTO `apartment_states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(32, 'jharkhand', '2022-10-04 18:58:55', '2022-10-04 18:58:55'),
(37, 'delhi', '2022-10-04 18:59:57', '2022-10-04 18:59:57'),
(38, 'noida', '2022-10-04 19:00:04', '2022-10-04 19:00:04'),
(39, 'mumbai', '2022-10-04 19:00:11', '2022-10-04 19:00:11'),
(41, 'assam', '2022-10-04 19:00:31', '2022-10-04 19:00:31'),
(42, 'gurgaon', '2022-10-11 09:46:01', '2022-10-11 09:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `highlight_apartments`
--

CREATE TABLE `highlight_apartments` (
  `id` int(11) NOT NULL,
  `service_apartment_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `highlight_apartments`
--

INSERT INTO `highlight_apartments` (`id`, `service_apartment_id`, `status`, `created_at`, `updated_at`) VALUES
(10, 6, 'private', '2022-10-03 23:29:05', '2022-10-03 23:29:05'),
(22, 7, 'public', '2022-10-04 00:44:03', '2022-10-04 00:44:03'),
(23, 9, 'public', '2022-10-04 21:09:45', '2022-10-04 21:09:45'),
(24, 10, 'public', '2022-10-04 21:09:55', '2022-10-04 21:09:55'),
(25, 12, 'public', '2022-10-04 21:12:03', '2022-10-04 21:12:03'),
(26, 11, 'public', '2022-10-04 21:25:03', '2022-10-04 21:25:03'),
(27, 13, 'public', '2022-10-04 21:25:09', '2022-10-04 21:25:09'),
(28, 8, 'public', '2022-10-04 21:25:16', '2022-10-04 21:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` text NOT NULL,
  `youtube_url` text NOT NULL,
  `yt_video_title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `sub_title`, `youtube_url`, `yt_video_title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(23, 'best apartment in delhi ncr', 'book now', '_z8uyrllm7k', 'best apartment view', 'v2-2_1664954291_516030a26d7a536d2e62.jpg', 'private', '2022-10-01 23:54:46', '2022-10-04 22:27:08'),
(34, 'beautiful living solutions', 'services we provide', '_z8UyrLlM7k', 'our services', 'v1-2_1664954458_f827274d892de727e234.jpg', 'public', '2022-10-04 20:49:34', '2022-10-05 07:26:16'),
(35, 'best apartment in delhi ncr', 'book now', '_z8uyrllm7k', 'best apartment view', 'v2-2_1664954291_516030a26d7a536d2e62.jpg', 'public', '2022-10-01 23:54:46', '2022-10-04 22:27:54'),
(36, 'beautiful living solutions', 'services we provide', '_z8uyrllm7k', 'our services', 'v1-1_1664954450_dee18759f50f6ba6729b.jpg', 'private', '2022-10-04 20:49:34', '2022-10-04 22:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `service_apartments`
--

CREATE TABLE `service_apartments` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `states` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price_start` bigint(20) NOT NULL,
  `shift_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_apartments`
--

INSERT INTO `service_apartments` (`id`, `title`, `states`, `image`, `price_start`, `shift_time`, `status`, `created_at`, `updated_at`) VALUES
(6, 'desi rajasthan ', 'noida', '10_1664876248_6c6e8558523b51a477d0.jpg', 2000, 'day', 'private', '2022-10-03 23:07:28', '2022-10-04 22:23:16'),
(7, 'original fly way', 'delhi', '1_1664879773_afffd7be80f06c00c401.jpg', 2000, 'day', 'public', '2022-10-04 00:06:13', '2022-10-04 00:06:13'),
(8, 'desi rajasthan ', 'jharkhand', '10_1664876248_6c6e8558523b51a477d0.jpg', 2000, 'day', 'private', '2022-10-03 23:07:28', '2022-10-04 00:05:33'),
(9, 'original fly way', 'assam', '1_1664879773_afffd7be80f06c00c401.jpg', 2000, 'day', 'public', '2022-10-04 00:06:13', '2022-10-04 21:41:27'),
(10, 'desi rajasthan ', 'assam', '10_1664876248_6c6e8558523b51a477d0.jpg', 2000, 'night', 'public', '2022-10-03 23:07:28', '2022-10-04 22:23:25'),
(11, 'functional kitchen', 'mumbai', '1_1664879773_afffd7be80f06c00c401.jpg', 2000, 'day', 'public', '2022-10-04 00:06:13', '2022-10-04 21:41:04'),
(12, 'desi rajasthan ', 'assam', '10_1664876248_6c6e8558523b51a477d0.jpg', 2000, 'day', 'private', '2022-10-03 23:07:28', '2022-10-04 22:11:18'),
(13, 'absoulte privacy', 'mumbai', 'v1-1_1664957388_2e1189eb01897537d687.jpg', 2000, 'day', 'public', '2022-10-04 00:06:13', '2022-10-04 21:40:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apartment_states`
--
ALTER TABLE `apartment_states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `highlight_apartments`
--
ALTER TABLE `highlight_apartments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_apartment_id` (`service_apartment_id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_apartments`
--
ALTER TABLE `service_apartments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apartment_states`
--
ALTER TABLE `apartment_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `highlight_apartments`
--
ALTER TABLE `highlight_apartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `service_apartments`
--
ALTER TABLE `service_apartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `highlight_apartments`
--
ALTER TABLE `highlight_apartments`
  ADD CONSTRAINT `highlight_apartments_ibfk_1` FOREIGN KEY (`service_apartment_id`) REFERENCES `service_apartments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
