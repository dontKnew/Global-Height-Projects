-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2021 at 04:21 PM
-- Server version: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.3.27-9+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `vivekanandahealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('developer','superadmin') NOT NULL,
  `status` enum('active','terminated') NOT NULL DEFAULT 'active',
  `last_login` datetime NOT NULL,
  `last_login_ip` varchar(15) NOT NULL,
  `create_ip` varchar(15) NOT NULL,
  `modify_ip` varchar(15) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `role`, `status`, `last_login`, `last_login_ip`, `create_ip`, `modify_ip`, `date_create`, `date_modify`) VALUES
(1, 'admin@example.com', 'admin', '$2y$10$O7DzgMqCANQBvQotMywkUuAFtxcQDy9sdI0faSpW/Hqapt0ZtdvJO', 'developer', 'active', '2021-04-02 16:11:41', '127.0.0.1', '127.0.0.1', '127.0.0.1', '0000-00-00 00:00:00', '2021-03-23 11:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `key_name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `create_ip` varchar(15) NOT NULL,
  `modify_ip` varchar(15) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `key_name`, `value`, `description`, `create_ip`, `modify_ip`, `date_create`, `date_modify`) VALUES
(1, 'site_name', 'vivekanandahealth', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(2, 'brand_name', 'Vivekananda Health Global', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(3, 'contact_number', '+91 95913 36226', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(4, 'contact_address', '61, 11th Main Rd, Sector 6, HSR Layout, Bengaluru, Karnataka 560102', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(5, 'email_from', 'info@vhg.co.in', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(6, 'reply_to', 'info@vhg.co.in', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(7, 'webmaster_email', 'info@vhg.co.in', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(8, 'facebook', 'https://www.facebook.com/vivekanandahealthglobal', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(9, 'twitter', 'https://twitter.com/vhg_global', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(10, 'instagram', 'https://www.instagram.com/vivekanandahealthglobal/', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(11, 'whatsapp', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(12, 'linkedin', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(13, 'skype', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(14, 'reddit', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(15, 'youtube', 'https://www.youtube.com/channel/UCcuUwckWKEupVI8bJY7encA', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(16, 'smtp_host', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:32:56', '0000-00-00 00:00:00'),
(17, 'smtp_port', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:33:36', '0000-00-00 00:00:00'),
(18, 'smtp_user', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:38:18', '0000-00-00 00:00:00'),
(19, 'smtp_password', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:39:10', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
