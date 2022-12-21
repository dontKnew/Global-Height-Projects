-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2022 at 10:27 PM
-- Server version: 5.7.39-cll-lve
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
-- Database: `resort_apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_customize`
--

CREATE TABLE `about_customize` (
  `id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL,
  `about_photo` text NOT NULL,
  `photo_text` varchar(255) NOT NULL,
  `directory_link_home` varchar(255) NOT NULL,
  `directory_link_about` varchar(255) NOT NULL,
  `web_desc_title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `web_description` longtext NOT NULL,
  `something_title` varchar(255) NOT NULL,
  `content_description` text NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_customize`
--

INSERT INTO `about_customize` (`id`, `domain`, `webpage_title`, `about_photo`, `photo_text`, `directory_link_home`, `directory_link_about`, `web_desc_title`, `short_description`, `web_description`, `something_title`, `content_description`, `created-at`, `updated_at`) VALUES
(1, 'business.lenskartbusiness.com', 'Resorts-About', '1664203240_6.jpg', 'About Us', 'Home', 'About', 'WELCOME TO', ' <p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landsc</p>\" ', '<p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort. Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. </p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px;\"><br></p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px;\">This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p> ', 'Why Choose Us!', '         We welcome you to this abode of peace and assure y We welcome you to this abode of peace and assure you of not having the same experience as before We welcome you to this abode of peace and assure you of not having the same experience as beforeou of not having the same experience as before!          ', '2022-09-26 11:45:44', '2022-10-10 08:04:44'),
(2, 'gulshan.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-10 09:40:54', '2022-10-10 09:40:54'),
(3, 'global.lenskartbusiness.com', 'About', 'about_page_1666678880.jpg', 'About us', 'Home', 'About', 'WELCOME TO E SERVICE APARTMENT WEBSITE', '<h2 class=\"this-wtitle\" style=\"font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(96, 96, 96); margin: 0px; font-size: 27px; text-transform: uppercase; letter-spacing: 0.2px;\"><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px; text-transform: none;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; letter-spacing: 0.3px; color: rgb(0, 0, 0); padding-bottom: 20px; text-transform: none;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landsc</p></h2>', '<p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort. Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms.</p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\"><br></p><p open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.3px;=\"\" padding-bottom:=\"\" 20px;\"=\"\" style=\"margin-bottom: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 15px; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.3px; padding-bottom: 20px;\">This is not only the largest resort in Jim Corbett area, it is also the grandest resort.</p>', 'Why Choose Us!', '<span style=\"font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.2px; background-color: rgb(241, 236, 236);\">We welcome you to this abode of peace and assure y We welcome you to this abode of peace and assure you of not having the same experience as before We welcome you to this abode of peace and assure you of not having the same experience as beforeou of not having the same experience as before!</span>  ', '2022-10-25 06:14:10', '2022-10-25 06:21:20'),
(4, '000.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-25 07:13:51', '2022-10-25 07:13:51'),
(5, 'laxman.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(6, 'exi.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(7, 'existay.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-27 13:27:37', '2022-10-27 13:27:37'),
(8, 'domain.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-28 06:01:09', '2022-10-28 06:01:09'),
(9, '0.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-28 06:09:46', '2022-10-28 06:09:46'),
(10, '0.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-10-28 06:12:36', '2022-10-28 06:12:36'),
(11, 'existay.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-11-13 03:32:47', '2022-11-13 03:32:47'),
(12, 'laresidenza.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(13, 'southdelhi.lenskartbusiness.com', '', '', '', '', '', '', '', '', '', '', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `about_point_word`
--

CREATE TABLE `about_point_word` (
  `id` int(11) NOT NULL,
  `point_word` text NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_point_word`
--

INSERT INTO `about_point_word` (`id`, `point_word`, `domain`, `status`, `created_at`) VALUES
(2, 'POINT 2', 'business.lenskartbusiness.com', 'Active', '2022-09-26 11:04:42'),
(4, 'POINT 3', 'business.lenskartbusiness.com', 'Active', '2022-09-26 14:07:03'),
(5, 'POINT 4', 'business.lenskartbusiness.com', 'Active', '2022-09-26 14:07:12'),
(6, 'POINT 2', 'business.lenskartbusiness.com', 'Active', '2022-09-26 11:04:42'),
(7, 'POINT 3', 'business.lenskartbusiness.com', 'Active', '2022-09-26 14:07:03'),
(8, 'POINT 4', 'business.lenskartbusiness.com', 'Active', '2022-09-26 14:07:12'),
(9, 'POINT ONE', 'global.lenskartbusiness.com', 'Active', '2022-10-25 06:22:07'),
(10, 'POINT TWO', 'global.lenskartbusiness.com', 'Active', '2022-10-25 06:22:21'),
(11, 'POINT THREE', 'global.lenskartbusiness.com', 'Active', '2022-10-25 06:22:31'),
(12, 'POINT FOUR', 'global.lenskartbusiness.com', 'Active', '2022-10-25 06:22:51'),
(13, 'Enjoy your weekend with Best Rate Guarantee at La Residenza New Delhi Hotel. Our aims to provide a superior living experience with best price.  La Residenza New Delhi\'s newest and most luxurious BnB offers luxury at budget prices and is located in the upmarket Greater Kailash Part 2 residential area, away from the hustle and bustle of the busy streets of Delhi. Located conveniently in the heart of the city and nestled in a quiet pocket of South Delhi, La Residenza provides perfect access for the exploring tourist to some of Delhi\'s best restaurants, cafes, shopping venues.  To ensure utmost comfort for our travellers, we ensure that all our rooms have air conditioning, attentively cleaned bathrooms and daily complimentary hot delicious breakfast to start your day. Safety is our priority. We have a 24-hour guard watch and screen all our guests and staff to ensure a hassle-free stay. For your safety CCTV cameras monitor most public areas.  We pride ourselves in having some of the most spacious rooms any property in New Delhi has to offer. Our rooms are of three types: La Residenza rooms, Super Deluxe rooms and Deluxe rooms. All necessary facilities like Unlimited Broadband High Speed WiFi Internet access, Free Hot Breakfast, Room Service, High Thread Count Egyptian cotton Bed linen, extra comfortable deep Pocket Spring mattresses, Full HD LED TV with 48 HD Channels and a total of 450 Channels and our many other offerings are designed to make your getaway memorable.', 'existay.lenskartbusiness.com', 'Active', '2022-11-13 03:42:41'),
(14, 'Enjoy your weekend with Best Rate Guarantee at La Residenza New Delhi Hotel. Our aims to provide a superior living experience with best price.  La Residenza New Delhi\'s newest and most luxurious BnB offers luxury at budget prices and is located in the upmarket Greater Kailash Part 2 residential area, away from the hustle and bustle of the busy streets of Delhi. Located conveniently in the heart of the city and nestled in a quiet pocket of South Delhi, La Residenza provides perfect access for the exploring tourist to some of Delhi\'s best restaurants, cafes, shopping venues.  To ensure utmost comfort for our travellers, we ensure that all our rooms have air conditioning, attentively cleaned bathrooms and daily complimentary hot delicious breakfast to start your day. Safety is our priority. We have a 24-hour guard watch and screen all our guests and staff to ensure a hassle-free stay. For your safety CCTV cameras monitor most public areas.  We pride ourselves in having some of the most spacious rooms any property in New Delhi has to offer. Our rooms are of three types: La Residenza rooms, Super Deluxe rooms and Deluxe rooms. All necessary facilities like Unlimited Broadband High Speed WiFi Internet access, Free Hot Breakfast, Room Service, High Thread Count Egyptian cotton Bed linen, extra comfortable deep Pocket Spring mattresses, Full HD LED TV with 48 HD Channels and a total of 450 Channels and our many other offerings are designed to make your getaway memorable.  We have a vibrant team of people with years of experience who go the extra mile to serve you with impeccable sincerity and enormous smiles. We are dedicated to making your experience truly special, please feel free to ask us to accommodate any special requests or suggestions to help plan your stay in Delhi', 'laresidenza.lenskartbusiness.com', 'Active', '2022-12-04 20:47:31'),
(15, 'The primary objective of this website is to promote our Serviced Apartments selection in Delhi NCR as well as other cities of India. These Serviced Apartments are targeted towards Corporates and Medical Tourism guests to India.  We also endeavour to extend this website for offering a ‘one-stop shop’ for our corporate clients. These services include –      * Corporate Relocations     * Unfurnished Apartment Rentals     * Rentals of Furniture & Appliances     * Property Management Services for Landlords     * Medical Tourism packages     * Corporate Guest House & Event Management     ', 'southdelhi.lenskartbusiness.com', 'Active', '2022-12-13 08:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `old_daily_amount` bigint(20) NOT NULL,
  `daily_amount` bigint(20) NOT NULL,
  `old_weekly_amount` bigint(20) NOT NULL,
  `weekly_amount` bigint(20) NOT NULL,
  `old_monthly_amount` bigint(20) NOT NULL,
  `monthly_amount` bigint(20) NOT NULL,
  `shift` varchar(255) NOT NULL DEFAULT 'night',
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `room_webpage_title` varchar(255) NOT NULL,
  `room_header_title` varchar(255) NOT NULL,
  `room_directory_link_home` varchar(255) NOT NULL,
  `directory_link_single_room` varchar(255) NOT NULL,
  `room_title` varchar(255) NOT NULL,
  `room_web_description` longtext NOT NULL,
  `room_service_web_description` longtext NOT NULL,
  `button_book_now` varchar(255) NOT NULL,
  `button_check_availability` varchar(255) NOT NULL,
  `starting_from_text` varchar(255) NOT NULL,
  `starting_price` bigint(20) NOT NULL,
  `shift_search` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `domain`, `name`, `image`, `old_daily_amount`, `daily_amount`, `old_weekly_amount`, `weekly_amount`, `old_monthly_amount`, `monthly_amount`, `shift`, `description`, `status`, `room_webpage_title`, `room_header_title`, `room_directory_link_home`, `directory_link_single_room`, `room_title`, `room_web_description`, `room_service_web_description`, `button_book_now`, `button_check_availability`, `starting_from_text`, `starting_price`, `shift_search`, `created_at`, `updated_at`) VALUES
(14, 'business.lenskartbusiness.com', 'Haveli Room', '1664031271_1.jpg', 8450, 7450, 9450, 8450, 10450, 9450, 'Night', 'Built in 420 sq ft, our rooms are well positioned to ensure that you enjoy maximum comfort. The view of unmatched luxury and stunning open spaces gives our rooms a feast for the senses. The well-appointed rooms are a spontaneous symphony inside and outside the house. All the rooms have a balcony and it offers spectacular views to the secluded gardens. The rooms are divided into 3 floors and have superior security features.\r\n\r\n', 'Active', '', '', '', '0', '0', '0', '0', '0', '0', '', 0, '', '2022-09-24 14:08:56', '2022-10-10 08:04:44'),
(15, 'business.lenskartbusiness.com', 'Air Room', '1664210380_6.jpg', 1000, 1000, 1000, 1000, 1000, 1000, 'Day', 'Built in 420 sq ft, our rooms are well positioned to ensure that you enjoy maximum comfort. The view of unmatched luxury and stunning open spaces gives our rooms a feast for the senses. The well-appointed rooms are a spontaneous symphony inside and outside the house. All the rooms have a balcony and it offers spectacular views to the secluded gardens. The rooms are divided into 3 floors and have superior security features.\r\n\r\n', 'Active', 'Resort-Room-Type', 'OK', 'HOME', 'SINGLE ROOM', 'Description of Room', '<p style=\"margin-bottom: 2em; color: rgb(137, 137, 137); padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.0715em; line-height: 1.8em; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.2px;\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Ut enim ad minima veniam, quis nostrum exercitationem.</p><p style=\"margin-bottom: 2em; color: rgb(137, 137, 137); padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.0715em; line-height: 1.8em; font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: 0.2px;\">Tullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>', '<h5 style=\"font-style: italic; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.3em; line-height: 1.5em; font-family: &quot;Open Sans&quot;, sans-serif; color: rgb(0, 0, 0); margin-top: 1em; margin-bottom: 3em; padding: 0px; letter-spacing: 0.2px;\">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliqu id etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum.</h5>', 'BOOK NOW THIS ROOM', 'CHECK AVAILABILITY', 'STARTING FROM', 299, 'Night', '2022-09-24 14:58:53', '2022-10-10 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `accommodation_customize`
--

CREATE TABLE `accommodation_customize` (
  `accommdation_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Accommodation',
  `accommodation_menu` varchar(255) NOT NULL,
  `photo_title` varchar(255) NOT NULL DEFAULT 'Accommodation',
  `accommodation_photo` varchar(1000) NOT NULL DEFAULT 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg',
  `directory_link_home` varchar(255) NOT NULL DEFAULT 'Home',
  `directory_link_accommodation` varchar(255) NOT NULL DEFAULT 'Accommodation',
  `description_title` varchar(255) NOT NULL DEFAULT 'Accomdation and Tarrif',
  `title_comment` varchar(1000) NOT NULL DEFAULT 'Pick a room that best suits hyour taste and budge ',
  `web_description` varchar(2000) NOT NULL DEFAULT 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a ''home away from home'' as soon as you step into the stunning beauty of Jim Corbett National Park.',
  `contact_form_title` varchar(255) NOT NULL DEFAULT 'Have any question',
  `button_contact_form` varchar(255) NOT NULL DEFAULT 'Submit',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodation_customize`
--

INSERT INTO `accommodation_customize` (`accommdation_id`, `domain`, `webpage_title`, `accommodation_menu`, `photo_title`, `accommodation_photo`, `directory_link_home`, `directory_link_accommodation`, `description_title`, `title_comment`, `web_description`, `contact_form_title`, `button_contact_form`, `created_at`, `updated_at`) VALUES
(1, 'mycompany.com', 'Resort-Accommodation1', '', 'Accommodation', '1663813280_16494166791jpg.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', '<b>        Thank you for </b>your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.        ', 'Have any question', 'Submit', '2022-09-21 16:41:48', '2022-09-22 02:21:54'),
(2, '1COmpanyDoamin.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-09-22 05:24:57', '2022-09-22 05:24:57'),
(3, 'COmpanyDoamin1.1com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-09-22 05:28:50', '2022-09-22 05:28:50'),
(4, 'business.lenskartbusiness.com', 'Accommodation2', '', 'Accommodation', '1663828050_1619622029nainiretreatnainital-superiorroomjpg.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', '   Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.   ', 'Have any question', 'Submit', '2022-09-22 05:30:01', '2022-10-10 08:04:44'),
(5, 'blogger.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-09-24 07:39:43', '2022-09-24 07:39:43'),
(6, 'business.lenskartbusiness.com', 'Resort | Accommodation', 'Accommodation', 'Accommodation', '1664032833_5.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge', '       Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.       ', 'Have any question ??', 'Submit', '2022-09-24 07:39:43', '2022-10-10 08:04:44'),
(7, 'x1yz.domain.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-09-26 11:45:43', '2022-09-26 11:45:43'),
(11, 'laxman.lenskartbusiness.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(12, 'exi.lenskartbusiness.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(18, 'laresidenza.lenskartbusiness.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(19, 'southdelhi.lenskartbusiness.com', 'Accommodation', '', 'Accommodation', 'http://www.bristol.ac.uk/media-library/sites/accommodation/images/large%20-%20module%20-%20badock.jpg', 'Home', 'Accommodation', 'Accomdation and Tarrif', 'Pick a room that best suits hyour taste and budge ', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'Have any question', 'Submit', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `domain` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `image`, `name`, `status`, `domain`, `created_at`, `updated_at`) VALUES
(7, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(8, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(9, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(10, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(11, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(12, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(13, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(14, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(15, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(16, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(17, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(18, '1664094098_2.jpg', 'open Baketball', 'Active', 'business.lenskartbusiness.com', '2022-09-25 08:21:38', '2022-10-10 08:04:44'),
(19, 'amenities_1670187958.jpg', 'Deluxe ', 'Active', 'laresidenza.lenskartbusiness.com', '2022-12-04 21:05:58', '2022-12-04 21:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_customize`
--

CREATE TABLE `amenities_customize` (
  `amenties_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Resorts-Amenties',
  `amenties_photo` varchar(1000) NOT NULL DEFAULT '''https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg''',
  `photo_text` varchar(255) NOT NULL DEFAULT 'Amenities',
  `directory_link_home` varchar(255) NOT NULL DEFAULT 'Home',
  `directory_link_amenities` varchar(255) NOT NULL DEFAULT 'Amenities',
  `web_description_title` varchar(255) NOT NULL DEFAULT 'Special Amenities',
  `web_description_title_comment` varchar(255) NOT NULL DEFAULT 'my something amenities benefit',
  `web_description_amenities` varchar(3000) NOT NULL DEFAULT '''Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\''home away from home\\'' as soon as you step into the stunning beauty of Jim Corbett National Park.''',
  `sidebar_photo` text NOT NULL,
  `sidebar_2photo` text NOT NULL,
  `sidebar_1photo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenities_customize`
--

INSERT INTO `amenities_customize` (`amenties_id`, `domain`, `webpage_title`, `amenties_photo`, `photo_text`, `directory_link_home`, `directory_link_amenities`, `web_description_title`, `web_description_title_comment`, `web_description_amenities`, `sidebar_photo`, `sidebar_2photo`, `sidebar_1photo`, `created_at`, `updated_at`) VALUES
(4, 'blogger.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '0', '2022-09-24 07:39:44', '2022-09-24 07:39:44'),
(5, 'business.lenskartbusiness.com', 'Resorts-Ameenity', '1664204748_6.jpg', 'Amenities', 'Home', 'Amenities', 'Apartments Accomodation in Gurgaon', 'Near Sikanderpur', '   <p class=\"mt-3\" style=\"margin-bottom: 18px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 22px;=\"\" letter-spacing:=\"\" 0.2px;\"=\"\">TreeTop Greens serviced apartments offer reasonably priced accommodation in Gurgaon. There are 3 types of apartments affording flexibility of choice as per requirement, for a long comfortable stay. All apartments are tastefully furnished as per international standards and are equipped with all modern amenities.</p><ul class=\"mt-3\" style=\"margin: 3em 0px 2rem; padding: 0px; list-style: none; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" letter-spacing:=\"\" 0.2px;\"=\"\"><p style=\"margin-bottom: 18px; padding: 0px; line-height: 22px; font-size: 24px; font-weight: 600;\">The apartments are available in ::</p><li class=\"mt-2\" style=\"margin: 0px 0px 1rem; padding: 0px; list-style: none; display: inline-block; font-style: italic; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.43em; line-height: 1em; font-family: \" pt=\"\" serif\",=\"\" serif;\"=\"\">☀ Studio</li><br><li class=\"mt-2\" style=\"margin: 0px 0px 1rem; padding: 0px; list-style: none; display: inline-block; font-style: italic; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.43em; line-height: 1em; font-family: \" pt=\"\" serif\",=\"\" serif;\"=\"\">☀ One bedroom</li><br><li class=\"mt-2\" style=\"margin: 0px 0px 1rem; padding: 0px; list-style: none; display: inline-block; font-style: italic; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 1.43em; line-height: 1em; font-family: \" pt=\"\" serif\",=\"\" serif;\"=\"\">☀ Twin beds</li></ul><p style=\"margin-bottom: 18px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 22px;=\"\" letter-spacing:=\"\" 0.2px;\"=\"\">Sikanderpur is located at 5 minutes drive from Tree Top Greens Service Apartments in Gurgaon. Sikanderpur is also a Metro Station on the Yellow Line of the Delhi Metro and since from 2013. It acts as an interchange station for Rapid Metro for Udhyog Vihar and Golf Course Road. This station gets a much gathering going to office and some other residential and commercial places along this line. It benefits travellers who previously reached these places by some other transportation like Auto and Bus.</p><p style=\"margin-bottom: 18px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 22px;=\"\" letter-spacing:=\"\" 0.2px;\"=\"\">Sikanderpur is located at 5 minutes drive from Tree Top Greens Service Apartments in Gurgaon. Sikanderpur is also a Metro Station on the Yellow Line of the Delhi Metro and since from 2013. It acts as an interchange station for Rapid Metro for Udhyog Vihar and Golf Course Road. This station gets a much gathering going to office and some other residential and commercial places along this line. It benefits travellers who previously reached these places by some other transportation like Auto and Bus.</p><u', '1664207107_4.jpg', '1664207377_3.jpg', '1664207107_8.jpg', '0000-00-00 00:00:00', '2022-10-10 08:04:44'),
(6, 'x1yz.domain.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '0', '2022-09-26 11:45:44', '2022-09-26 11:45:44'),
(10, 'laxman.lenskartbusiness.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(11, 'exi.lenskartbusiness.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(17, 'laresidenza.lenskartbusiness.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(18, 'southdelhi.lenskartbusiness.com', 'Resorts-Amenties', '\'https://i.ytimg.com/vi/UHtQjVVeAFk/hqdefault.jpg\'', 'Amenities', 'Home', 'Amenities', 'Special Amenities', 'my something amenities benefit', '\'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \\\'home away from home\\\' as soon as you step into the stunning beauty of Jim Corbett National Park.\'', '', '', '', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `domain` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `whatsapp` text NOT NULL,
  `address` text NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `youtube_url` text NOT NULL,
  `google_map_link` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `domain`, `email`, `mobile`, `whatsapp`, `address`, `logo`, `favicon`, `youtube_url`, `google_map_link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'service arpartment', 'business.lenskartbusiness.com', 'israfil123.sa@gmail.com', '8888888888', '8888888888', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <p><span style=\"color: rgb(137, 137, 137); font-family: \"open sans\", sans-serif; font-size: 15.001px; letter-spacing: 0.2px;\">vill. santoshpur choi, </span></p><p><span style=\"color: rgb(137, 137, 137); font-family: \"open sans\", sans-serif; font-size: 15.001px; letter-spacing: 0.2px;\">near hanuman dham, </span></p><p><span style=\"color: rgb(137, 137, 137); font-family: \"open sans\", sans-serif; font-size: 15.001px; letter-spacing: 0.2px;\">ramnagar – 244715, </span></p><p><span style=\"color: rgb(137, 137, 137); font-family: \"open sans\", sans-serif; font-size: 15.001px; letter-spacing: 0.2px;\">uttarakhand, india</span></p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', 'logo_1666938983+1.png', 'favicon_1666938983.png', 'rio5hmlv5kk', '!1m12!1m8!1m3!1d5849.938147096442!2d79.13286085002807!3d29.32944585469947!3m2!1i1024!2i768!4f13.1!2m1!1ssantoshpur%20choi%2c%20near%20hanuman%20dham%2c%2c%20ramnagar%2c%20uttarakhand%20244715%2c%20india!5e0!3m2!1sen!2sus!4v1616481129523!5m2!1sen!2sus', 'active', '2022-04-08 11:01:25', '2022-10-28 06:36:23'),
(23, 'laxman', 'laxman.lenskartbusiness.com', 'email@gmail.com', '706521377', '', '                                                  vill. santoshpur choi, <br/>near hanuman dham,<br/>\r\n\r\n                                                ramnagar – 244715,<br/> uttarakhand, india\r\n                                            ', '', 'favicon_1666860423.png', 'https://www.youtube.com/watch?v= rio5hmlv5kk', 'https://www.google.com/maps/embed?pb=', 'active', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(24, 'e 480', 'exi.lenskartbusiness.com', 'rk@gmail.com', '8383915342', '', '                                             e 480 g.k 2<br>                                         ', 'logo_1666938882+1.png', 'favicon_1666938882.png', 'https://www.youtube.com/watch?v= rio5hmlv5kk ', '-> https://www.google.com/maps/embed?pb=', 'active', '2022-10-27 08:48:25', '2022-10-28 06:34:42'),
(29, 'exi apartment & suites', 'existay.lenskartbusiness.com', 'existaydelhi@gmail.com', '8383915342', '', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; color: rgb(139, 139, 139);\"><li style=\"border-bottom: 1px dotted rgb(217, 217, 217); padding-bottom: 7px; margin-bottom: 7px;\">e-480, greater kailash part 2<br></li><li style=\"border-bottom: 1px dotted rgb(217, 217, 217); padding-bottom: 7px; margin-bottom: 7px;\">delhi - 110048<br></li><li style=\"border-bottom: 1px dotted rgb(217, 217, 217); padding-bottom: 7px; margin-bottom: 7px;\">mobile - 8383915342, 9560012375</li></ul>', 'logo_1668310367.jpg', 'favicon_1668310367.jpg', ' hhh', ' jjj', 'active', '2022-11-13 03:32:47', '2022-11-13 03:32:47'),
(30, 'la residenza ', 'laresidenza.lenskartbusiness.com', 'rkjha1984@gmail.com', '8383915342', '', 'e 480 , greater kailash 2 , new delhi 110048', 'logo_1670186118.jpg', 'favicon_1670186118.jpg', ' ', ' ', 'active', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(31, 'company', 'southdelhi.lenskartbusiness.com', 'sales@eserviceapartments.com', '9999105555', '', '<p>e 480 g.k 2 new delhi </p><p>pin no : 110048<br></p>', 'logo_1670921229.jpg', 'favicon_1670921229.jpg', ' ', ' ', 'active', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `footer_facility`
--

CREATE TABLE `footer_facility` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `domain` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_facility`
--

INSERT INTO `footer_facility` (`id`, `name`, `domain`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wifi', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:12:53', '2022-10-10 08:04:44'),
(3, 'Toilet', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:17:09', '2022-10-10 08:04:44'),
(4, 'Tv', 'business.lenskartbusiness.com', 'Inactive', '2022-09-24 12:17:20', '2022-10-10 08:04:44'),
(5, 'Kitchen', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:30', '2022-10-10 08:04:44'),
(6, 'Air Conditioner', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:41', '2022-10-10 08:04:44'),
(8, 'Mobile', 'business.lenskartbusiness.com', 'Active', '2022-09-25 04:35:37', '2022-10-10 08:04:44'),
(9, 'Wifi', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:12:53', '2022-10-10 08:04:44'),
(10, 'Toilet', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:17:09', '2022-10-10 08:04:44'),
(11, 'Tv', 'business.lenskartbusiness.com', 'Inactive', '2022-09-24 12:17:20', '2022-10-10 08:04:44'),
(12, 'Kitchen', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:30', '2022-10-10 08:04:44'),
(13, 'Air Conditioner', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:41', '2022-10-10 08:04:44'),
(14, 'Mobile', 'business.lenskartbusiness.com', 'Active', '2022-09-25 04:35:37', '2022-10-10 08:04:44'),
(15, 'Wifi', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:12:53', '2022-10-10 08:04:44'),
(16, 'Toilet', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:17:09', '2022-10-10 08:04:44'),
(17, 'Tv', 'business.lenskartbusiness.com', 'Inactive', '2022-09-24 12:17:20', '2022-10-10 08:04:44'),
(18, 'Kitchen', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:30', '2022-10-10 08:04:44'),
(19, 'Air Conditioner', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:41', '2022-10-10 08:04:44'),
(20, 'Mobile', 'business.lenskartbusiness.com', 'Active', '2022-09-25 04:35:37', '2022-10-10 08:04:44'),
(21, 'Wifi', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:12:53', '2022-10-10 08:04:44'),
(22, 'Toilet', 'business.lenskartbusiness.com', 'Active', '2022-09-24 12:17:09', '2022-10-10 08:04:44'),
(23, 'Tv', 'business.lenskartbusiness.com', 'Inactive', '2022-09-24 12:17:20', '2022-10-10 08:04:44'),
(24, 'Kitchen', 'business.lenskartbusiness.com', 'Active', '2022-09-24 15:21:30', '2022-10-10 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `gallery_type` varchar(255) NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `domain`, `name`, `image`, `gallery_type`, `status`, `date`) VALUES
(7, 'business.lenskartbusiness.com', 'Room', '16641064576jpg.jpg', 'option3', 'Active', '2022-09-25 11:47:37'),
(8, 'business.lenskartbusiness.com', 'House', '16641058461jpg.jpg', 'option5', 'Active', '2022-09-25 11:31:41'),
(9, 'business.lenskartbusiness.com', 'Room', '16641064576jpg.jpg', 'option3', 'Active', '2022-09-25 11:47:37'),
(10, 'business.lenskartbusiness.com', 'Room', '16641064576jpg.jpg', 'option3', 'Active', '2022-09-25 11:47:37'),
(11, 'business.lenskartbusiness.com', 'House', '16641058461jpg.jpg', 'option5', 'Active', '2022-09-25 11:31:41'),
(12, 'business.lenskartbusiness.com', 'Room', '16641064576jpg.jpg', 'option3', 'Active', '2022-09-25 11:47:37'),
(13, 'southdelhi.lenskartbusiness.com', 'Studio Apartment', 'gallery_page_1670925047.jpg', 'Studio Apartment', 'Active', '2022-12-13 09:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_customize`
--

CREATE TABLE `gallery_customize` (
  `gallery_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Photo Gallery',
  `gallery_photo` varchar(500) NOT NULL DEFAULT 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg',
  `gallery_menu` varchar(255) NOT NULL DEFAULT 'Gallery',
  `photo_text` varchar(255) NOT NULL DEFAULT 'Gallery',
  `directory_link_home` varchar(255) NOT NULL DEFAULT 'Home',
  `directory_link_gallery` varchar(255) NOT NULL DEFAULT 'Gallery',
  `web_description_title` varchar(255) NOT NULL DEFAULT 'Something',
  `web_description_title_comment` varchar(255) NOT NULL DEFAULT 'Somethign Wrong about gallary',
  `web_description_gallery` varchar(5000) NOT NULL DEFAULT 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.',
  `content_description` varchar(3000) NOT NULL DEFAULT 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_customize`
--

INSERT INTO `gallery_customize` (`gallery_id`, `domain`, `webpage_title`, `gallery_photo`, `gallery_menu`, `photo_text`, `directory_link_home`, `directory_link_gallery`, `web_description_title`, `web_description_title_comment`, `web_description_gallery`, `content_description`, `created_at`, `updated_at`) VALUES
(1, 'COmpanyDoamin1.1com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-09-22 05:28:51', '2022-09-22 05:28:51'),
(2, 'business.lenskartbusiness.com', 'My Photo Gallery', '1663826752_16494166791jpg.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '  Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.  ', '2022-09-22 05:30:02', '2022-10-10 08:04:44'),
(3, 'service', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-09-24 07:39:44', '2022-09-27 06:42:31'),
(4, 'x1yz.domain.com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-09-26 11:45:44', '2022-09-26 11:45:44'),
(8, 'laxman.lenskartbusiness.com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(9, 'exi.lenskartbusiness.com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(15, 'laresidenza.lenskartbusiness.com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(16, 'southdelhi.lenskartbusiness.com', 'Photo Gallery', 'https://www.northamptonshiresurprise.com/resources/uploads/companies/AEAG_DSC6515.jpg', 'Gallery', 'Gallery', 'Home', 'Gallery', 'Something', 'Somethign Wrong about gallary', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', 'Long Texts (also referred as SapScript texts or text objects) are the containers for containing long texts in SAP systems, and they are usually attached to business objects, that users can enter free comments. Long Texts were initially created for SapScript tool because old database systems had text columns limited around 255 characters.', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_type`
--

CREATE TABLE `gallery_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_type`
--

INSERT INTO `gallery_type` (`id`, `name`, `domain`, `status`, `created_at`) VALUES
(2, 'option2', 'business.lenskartbusiness.com', 'Active', '2022-09-25 11:10:07'),
(4, 'option3', 'business.lenskartbusiness.com', 'Active', '2022-09-25 11:10:29'),
(5, 'option3', 'business.lenskartbusiness.com', 'Active', '2022-09-25 11:10:33'),
(6, 'option5', 'business.lenskartbusiness.com', 'Active', '2022-09-25 11:10:43'),
(8, 'Deluxe ', 'laresidenza.lenskartbusiness.com', 'Active', '2022-12-04 21:03:45'),
(9, 'Studio Apartment', 'southdelhi.lenskartbusiness.com', 'Active', '2022-12-13 09:49:16'),
(10, 'Studio Apartment', 'southdelhi.lenskartbusiness.com', 'Active', '2022-12-13 09:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `home_customize`
--

CREATE TABLE `home_customize` (
  `home_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Resorts-Home',
  `website_name` varchar(255) NOT NULL DEFAULT 'E Service Apartment Website',
  `phone_no` bigint(20) NOT NULL DEFAULT '7015221377',
  `website_email` varchar(255) NOT NULL DEFAULT 'booking@apartment.com',
  `welcome_text` varchar(255) NOT NULL DEFAULT 'WELCOME TO',
  `web_description` varchar(4000) NOT NULL DEFAULT 'Logan Ipsum will loop at some point. I''m the only person in the world with my name. If you wake up with a giant zit, you are really facing your fears when you look in the mirror. Rumour has it targeted online advertising was developed because the internet was upset that you could read it but it couldn''t read you. Trepidelicious. This is a true fact: I never had a fear of heights until I fell off a roof. Logan Ipsum will loop at some point. I don''t need a big house, just a two-floor condo - you could say I have lofty expectations. Curling is the best sport named after something you do to your hair. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. To Catch A Predator would have been a great name for a Steve Irwin show. Mintslavicia. I''m in a band that does Metallica covers with our private parts - it''s called Myphallica. Petrovache. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. Most streets are two-way streets...why does that make love so special?. Smiling could easily be misinterpreted for showing your teeth to someone because they said something that made you happy. Do we make money or does money make us? Chezwich. About Online Random Text Generator Tool If the sentence is the essential soul to express oneself in their own way, then the paragraph is the virtual body of it. The Text Generator is an intelligent tool that creates random text incorporated with random thoughts. This smart tool is a virtual friend of yours that can talk to you in multidimensional thinking. It will provide you with thoughts, concepts, and ideas of different topics that will not only assist you in creating new knowledge but also enhance your brain function. Why Use It? Advanced Technology: Our speech generator is based on the most intelligent, smart, and advanced algorithm that formulates unique and unfathomably clear, structured, and meaningful sentences that you can possibly imagine. Its high-tech artificial intelligence allows it to generate texts words that are original and human-like, and subtle. Creative Ideas: The random topic that this Paragraph Generator generates will help you circumvent writer’s block, think from a different attribute, and assist you in formulating original ideas. Multipurpose Usage: You can use this to create an essay, study project, poetry, wordplay, or just for fun and amusement. How to Generate Random Text: 1. Opt-in the number of your desired paragraphs in the box on the left 2. Click on the subsequent box and select the “Paragraph” on the list 3. Hit the green Generate button 4. The expected number of paragraphs will appear in the white box below 5. Select the texts of your choice 6. Copy them to your clipboard 7. Hit generate for more. RELATED TOOLS Book Title Generator Book Title Generator Random Quotes Random Quotes Random Facts Random Facts Random Flag Generator Random Flag Generator Pictionary Word Generator Pictionary Word Generator Advertisement Ezoicreport this ad Advertisement Advertisement Home | Contact | Privacy Policy © Random Ready 2022',
  `home_menu` varchar(255) NOT NULL DEFAULT 'Home',
  `button_book_now` varchar(255) NOT NULL DEFAULT 'Book Now',
  `button_contact` varchar(255) NOT NULL DEFAULT 'contact us',
  `button_payment` varchar(255) NOT NULL DEFAULT 'pay now',
  `accommdation_title` varchar(255) NOT NULL DEFAULT 'Accomdation and Amenties',
  `package_title` varchar(255) NOT NULL DEFAULT 'Special Package',
  `event_title` varchar(255) NOT NULL DEFAULT 'Wedding Event',
  `location_title` varchar(255) NOT NULL DEFAULT 'Get in Touch',
  `google_map_link` varchar(3000) NOT NULL DEFAULT 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5',
  `city_name` varchar(255) NOT NULL DEFAULT 'DWARKA',
  `state_name` varchar(255) NOT NULL DEFAULT 'State',
  `country_name` varchar(255) NOT NULL DEFAULT 'India',
  `website_2nd_email` varchar(255) NOT NULL DEFAULT 'web@email.com',
  `footer_phone_no` bigint(20) NOT NULL DEFAULT '6205881326',
  `footer_phone_no1` bigint(20) NOT NULL DEFAULT '6205881326',
  `copyright_line` varchar(255) NOT NULL DEFAULT 'Copyright © Resort and Hotel 2021. All rights reserved.',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_customize`
--

INSERT INTO `home_customize` (`home_id`, `domain`, `webpage_title`, `website_name`, `phone_no`, `website_email`, `welcome_text`, `web_description`, `home_menu`, `button_book_now`, `button_contact`, `button_payment`, `accommdation_title`, `package_title`, `event_title`, `location_title`, `google_map_link`, `city_name`, `state_name`, `country_name`, `website_2nd_email`, `footer_phone_no`, `footer_phone_no1`, `copyright_line`, `created_at`, `updated_at`) VALUES
(16, 'business.lenskartbusiness.com', 'Resorts', 'E Service Apartment Website', 7015221377, 'booking@apartment.com', 'WELCOME TO', 'Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.\r\n\r\nCorbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.\r\n\r\nOur resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.\r\n\r\nOur sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.\r\n\r\nWhile our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.\r\n\r\nThis approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.\r\n\r\nThe famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.\r\n\r\nWe aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.\r\n\r\nWe welcome you to this abode of peace and assure you of not having the same experience as before!', 'Home', 'Book Now', 'Contact us', 'Pay Online', 'ACCOMMODATION & AMENITIES', 'SPECIAL PACKAGES', 'WEDDING AND EVENTS', 'GET IN TOUCH', 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5', 'DWARKA', 'State', 'country', 'web@email.com', 6205881326, 6205881326, 'Copyright © Resort and Hotel 2021. All rights reserved.', '2022-09-22 05:30:01', '2022-10-25 06:40:41'),
(23, 'laxman.lenskartbusiness.com', 'Resorts-Home', 'E Service Apartment Website', 7015221377, 'booking@apartment.com', 'WELCOME TO', 'Logan Ipsum will loop at some point. I\'m the only person in the world with my name. If you wake up with a giant zit, you are really facing your fears when you look in the mirror. Rumour has it targeted online advertising was developed because the internet was upset that you could read it but it couldn\'t read you. Trepidelicious. This is a true fact: I never had a fear of heights until I fell off a roof. Logan Ipsum will loop at some point. I don\'t need a big house, just a two-floor condo - you could say I have lofty expectations. Curling is the best sport named after something you do to your hair. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. To Catch A Predator would have been a great name for a Steve Irwin show. Mintslavicia. I\'m in a band that does Metallica covers with our private parts - it\'s called Myphallica. Petrovache. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. Most streets are two-way streets...why does that make love so special?. Smiling could easily be misinterpreted for showing your teeth to someone because they said something that made you happy. Do we make money or does money make us? Chezwich. About Online Random Text Generator Tool If the sentence is the essential soul to express oneself in their own way, then the paragraph is the virtual body of it. The Text Generator is an intelligent tool that creates random text incorporated with random thoughts. This smart tool is a virtual friend of yours that can talk to you in multidimensional thinking. It will provide you with thoughts, concepts, and ideas of different topics that will not only assist you in creating new knowledge but also enhance your brain function. Why Use It? Advanced Technology: Our speech generator is based on the most intelligent, smart, and advanced algorithm that formulates unique and unfathomably clear, structured, and meaningful sentences that you can possibly imagine. Its high-tech artificial intelligence allows it to generate texts words that are original and human-like, and subtle. Creative Ideas: The random topic that this Paragraph Generator generates will help you circumvent writer’s block, think from a different attribute, and assist you in formulating original ideas. Multipurpose Usage: You can use this to create an essay, study project, poetry, wordplay, or just for fun and amusement. How to Generate Random Text: 1. Opt-in the number of your desired paragraphs in the box on the left 2. Click on the subsequent box and select the “Paragraph” on the list 3. Hit the green Generate button 4. The expected number of paragraphs will appear in the white box below 5. Select the texts of your choice 6. Copy them to your clipboard 7. Hit generate for more. RELATED TOOLS Book Title Generator Book Title Generator Random Quotes Random Quotes Random Facts Random Facts Random Flag Generator Random Flag Generator Pictionary Word Generator Pictionary Word Generator Advertisement Ezoicreport this ad Advertisement Advertisement Home | Contact | Privacy Policy © Random Ready 2022', 'Home', 'Book Now', 'contact us', 'pay now', 'Accomdation and Amenties', 'Special Package', 'Wedding Event', 'Get in Touch', 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5', 'DWARKA', 'State', 'India', 'web@email.com', 6205881326, 6205881326, 'Copyright © Resort and Hotel 2021. All rights reserved.', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(24, 'exi.lenskartbusiness.com', 'Resorts-Home', 'E Service Apartment Website', 7015221377, 'booking@apartment.com', 'WELCOME TO', 'Logan Ipsum will loop at some point. I\'m the only person in the world with my name. If you wake up with a giant zit, you are really facing your fears when you look in the mirror. Rumour has it targeted online advertising was developed because the internet was upset that you could read it but it couldn\'t read you. Trepidelicious. This is a true fact: I never had a fear of heights until I fell off a roof. Logan Ipsum will loop at some point. I don\'t need a big house, just a two-floor condo - you could say I have lofty expectations. Curling is the best sport named after something you do to your hair. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. To Catch A Predator would have been a great name for a Steve Irwin show. Mintslavicia. I\'m in a band that does Metallica covers with our private parts - it\'s called Myphallica. Petrovache. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. Most streets are two-way streets...why does that make love so special?. Smiling could easily be misinterpreted for showing your teeth to someone because they said something that made you happy. Do we make money or does money make us? Chezwich. About Online Random Text Generator Tool If the sentence is the essential soul to express oneself in their own way, then the paragraph is the virtual body of it. The Text Generator is an intelligent tool that creates random text incorporated with random thoughts. This smart tool is a virtual friend of yours that can talk to you in multidimensional thinking. It will provide you with thoughts, concepts, and ideas of different topics that will not only assist you in creating new knowledge but also enhance your brain function. Why Use It? Advanced Technology: Our speech generator is based on the most intelligent, smart, and advanced algorithm that formulates unique and unfathomably clear, structured, and meaningful sentences that you can possibly imagine. Its high-tech artificial intelligence allows it to generate texts words that are original and human-like, and subtle. Creative Ideas: The random topic that this Paragraph Generator generates will help you circumvent writer’s block, think from a different attribute, and assist you in formulating original ideas. Multipurpose Usage: You can use this to create an essay, study project, poetry, wordplay, or just for fun and amusement. How to Generate Random Text: 1. Opt-in the number of your desired paragraphs in the box on the left 2. Click on the subsequent box and select the “Paragraph” on the list 3. Hit the green Generate button 4. The expected number of paragraphs will appear in the white box below 5. Select the texts of your choice 6. Copy them to your clipboard 7. Hit generate for more. RELATED TOOLS Book Title Generator Book Title Generator Random Quotes Random Quotes Random Facts Random Facts Random Flag Generator Random Flag Generator Pictionary Word Generator Pictionary Word Generator Advertisement Ezoicreport this ad Advertisement Advertisement Home | Contact | Privacy Policy © Random Ready 2022', 'Home', 'Book Now', 'contact us', 'pay now', 'Accomdation and Amenties', 'Special Package', 'Wedding Event', 'Get in Touch', 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5', 'DWARKA', 'State', 'India', 'web@email.com', 6205881326, 6205881326, 'Copyright © Resort and Hotel 2021. All rights reserved.', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(30, 'laresidenza.lenskartbusiness.com', 'Resorts-Home', 'E Service Apartment Website', 7015221377, 'booking@apartment.com', 'WELCOME TO', 'Logan Ipsum will loop at some point. I\'m the only person in the world with my name. If you wake up with a giant zit, you are really facing your fears when you look in the mirror. Rumour has it targeted online advertising was developed because the internet was upset that you could read it but it couldn\'t read you. Trepidelicious. This is a true fact: I never had a fear of heights until I fell off a roof. Logan Ipsum will loop at some point. I don\'t need a big house, just a two-floor condo - you could say I have lofty expectations. Curling is the best sport named after something you do to your hair. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. To Catch A Predator would have been a great name for a Steve Irwin show. Mintslavicia. I\'m in a band that does Metallica covers with our private parts - it\'s called Myphallica. Petrovache. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. Most streets are two-way streets...why does that make love so special?. Smiling could easily be misinterpreted for showing your teeth to someone because they said something that made you happy. Do we make money or does money make us? Chezwich. About Online Random Text Generator Tool If the sentence is the essential soul to express oneself in their own way, then the paragraph is the virtual body of it. The Text Generator is an intelligent tool that creates random text incorporated with random thoughts. This smart tool is a virtual friend of yours that can talk to you in multidimensional thinking. It will provide you with thoughts, concepts, and ideas of different topics that will not only assist you in creating new knowledge but also enhance your brain function. Why Use It? Advanced Technology: Our speech generator is based on the most intelligent, smart, and advanced algorithm that formulates unique and unfathomably clear, structured, and meaningful sentences that you can possibly imagine. Its high-tech artificial intelligence allows it to generate texts words that are original and human-like, and subtle. Creative Ideas: The random topic that this Paragraph Generator generates will help you circumvent writer’s block, think from a different attribute, and assist you in formulating original ideas. Multipurpose Usage: You can use this to create an essay, study project, poetry, wordplay, or just for fun and amusement. How to Generate Random Text: 1. Opt-in the number of your desired paragraphs in the box on the left 2. Click on the subsequent box and select the “Paragraph” on the list 3. Hit the green Generate button 4. The expected number of paragraphs will appear in the white box below 5. Select the texts of your choice 6. Copy them to your clipboard 7. Hit generate for more. RELATED TOOLS Book Title Generator Book Title Generator Random Quotes Random Quotes Random Facts Random Facts Random Flag Generator Random Flag Generator Pictionary Word Generator Pictionary Word Generator Advertisement Ezoicreport this ad Advertisement Advertisement Home | Contact | Privacy Policy © Random Ready 2022', 'Home', 'Book Now', 'contact us', 'pay now', 'Accomdation and Amenties', 'Special Package', 'Wedding Event', 'Get in Touch', 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5', 'DWARKA', 'State', 'India', 'web@email.com', 6205881326, 6205881326, 'Copyright © Resort and Hotel 2021. All rights reserved.', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(31, 'southdelhi.lenskartbusiness.com', 'Resorts-Home', 'E Service Apartment Website', 7015221377, 'booking@apartment.com', 'WELCOME TO', 'Logan Ipsum will loop at some point. I\'m the only person in the world with my name. If you wake up with a giant zit, you are really facing your fears when you look in the mirror. Rumour has it targeted online advertising was developed because the internet was upset that you could read it but it couldn\'t read you. Trepidelicious. This is a true fact: I never had a fear of heights until I fell off a roof. Logan Ipsum will loop at some point. I don\'t need a big house, just a two-floor condo - you could say I have lofty expectations. Curling is the best sport named after something you do to your hair. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. To Catch A Predator would have been a great name for a Steve Irwin show. Mintslavicia. I\'m in a band that does Metallica covers with our private parts - it\'s called Myphallica. Petrovache. For the name of an act as serious as killing someone, assassination literally translates to buttbuttination. Most streets are two-way streets...why does that make love so special?. Smiling could easily be misinterpreted for showing your teeth to someone because they said something that made you happy. Do we make money or does money make us? Chezwich. About Online Random Text Generator Tool If the sentence is the essential soul to express oneself in their own way, then the paragraph is the virtual body of it. The Text Generator is an intelligent tool that creates random text incorporated with random thoughts. This smart tool is a virtual friend of yours that can talk to you in multidimensional thinking. It will provide you with thoughts, concepts, and ideas of different topics that will not only assist you in creating new knowledge but also enhance your brain function. Why Use It? Advanced Technology: Our speech generator is based on the most intelligent, smart, and advanced algorithm that formulates unique and unfathomably clear, structured, and meaningful sentences that you can possibly imagine. Its high-tech artificial intelligence allows it to generate texts words that are original and human-like, and subtle. Creative Ideas: The random topic that this Paragraph Generator generates will help you circumvent writer’s block, think from a different attribute, and assist you in formulating original ideas. Multipurpose Usage: You can use this to create an essay, study project, poetry, wordplay, or just for fun and amusement. How to Generate Random Text: 1. Opt-in the number of your desired paragraphs in the box on the left 2. Click on the subsequent box and select the “Paragraph” on the list 3. Hit the green Generate button 4. The expected number of paragraphs will appear in the white box below 5. Select the texts of your choice 6. Copy them to your clipboard 7. Hit generate for more. RELATED TOOLS Book Title Generator Book Title Generator Random Quotes Random Quotes Random Facts Random Facts Random Flag Generator Random Flag Generator Pictionary Word Generator Pictionary Word Generator Advertisement Ezoicreport this ad Advertisement Advertisement Home | Contact | Privacy Policy © Random Ready 2022', 'Home', 'Book Now', 'contact us', 'pay now', 'Accomdation and Amenties', 'Special Package', 'Wedding Event', 'Get in Touch', 'https://goo.gl/maps/m3BXFY6CuUrq6EGz5', 'DWARKA', 'State', 'India', 'web@email.com', 6205881326, 6205881326, 'Copyright © Resort and Hotel 2021. All rights reserved.', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `domain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image`, `name`, `status`, `date`, `domain`) VALUES
(2, '164941694812jpg.jpg', 'New Year Package', 'Active', '2022-04-08 11:22:28', 'business.lenskartbusiness.com'),
(3, '16641017725jpg.jpg', 'Jungle Package', 'Active', '2022-09-25 10:15:28', 'business.lenskartbusiness.com');

-- --------------------------------------------------------

--
-- Table structure for table `package_customize`
--

CREATE TABLE `package_customize` (
  `package_Id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Package',
  `package_photo` varchar(500) NOT NULL DEFAULT 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024',
  `photo_text` varchar(255) NOT NULL DEFAULT 'Package',
  `directory_link_home` varchar(255) NOT NULL DEFAULT 'Home',
  `directory_link_package` varchar(255) NOT NULL DEFAULT 'Package',
  `web_description_title` varchar(255) NOT NULL DEFAULT 'Special Packages',
  `web_description_title_comment` varchar(255) NOT NULL DEFAULT 'Pick a room that best suits your taste and budget',
  `package_menu` varchar(255) NOT NULL DEFAULT 'Package',
  `web_description` varchar(2000) NOT NULL DEFAULT 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a ''home away from home'' as soon as you step into the stunning beauty of Jim Corbett National Park.',
  `button_more_details` varchar(255) NOT NULL DEFAULT 'CLICK HERE FOR MORE DETAILS',
  `button_send` varchar(255) NOT NULL DEFAULT 'SEND',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_customize`
--

INSERT INTO `package_customize` (`package_Id`, `domain`, `webpage_title`, `package_photo`, `photo_text`, `directory_link_home`, `directory_link_package`, `web_description_title`, `web_description_title_comment`, `package_menu`, `web_description`, `button_more_details`, `button_send`, `created_at`, `updated_at`) VALUES
(1, 'COmpanyDoamin1.1com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-09-22 05:28:51', '2022-09-22 05:28:51'),
(2, 'business.lenskartbusiness.com', 'Package', '1663829350_1663813121_Thor_Wallpaper_Engine.jpg', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', '                                                                                                                                                Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.                                                                                                                                                ', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-09-22 05:30:02', '2022-10-10 08:04:44'),
(3, 'blogger.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-09-24 07:39:44', '2022-09-24 07:39:44'),
(4, 'business.lenskartbusiness.com', 'Resport-Package', '1664260348_4.jpg', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', '                                                Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.                                                ', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-09-24 07:39:44', '2022-10-10 08:04:44'),
(5, 'x1yz.domain.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-09-26 11:45:44', '2022-09-26 11:45:44'),
(9, 'laxman.lenskartbusiness.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
(10, 'exi.lenskartbusiness.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
(16, 'laresidenza.lenskartbusiness.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
(17, 'southdelhi.lenskartbusiness.com', 'Package', 'https://nypost.com/wp-content/uploads/sites/2/2021/09/SG_pic090__DSC2648.jpg?quality=90&strip=all&w=1024', 'Package', 'Home', 'Package', 'Special Packages', 'Pick a room that best suits your taste and budget', 'Package', 'Thank you for your interest in Corbett The Grand Resort. We have the largest inventory in the area and our rooms are the largest in the surrounding area with a view of the Kosi River. The rooms and cottages spread over 18 acres of gardens have never before welcomed you. With the most modern facilities and amenities, the rooms are designed to fit as a \'home away from home\' as soon as you step into the stunning beauty of Jim Corbett National Park.', 'CLICK HERE FOR MORE DETAILS', 'SEND', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `package_inclusions`
--

CREATE TABLE `package_inclusions` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `domain` varchar(255) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_inclusions`
--

INSERT INTO `package_inclusions` (`id`, `name`, `domain`, `package_id`, `package_name`, `status`, `created_at`) VALUES
(8, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 2, 'New Year Package', 'Active', '2022-09-25 10:12:04'),
(10, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 2, 'New Year Package', 'Active', '2022-09-25 10:12:09'),
(12, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 3, 'Jungle Package', 'Active', '2022-09-25 10:11:56'),
(13, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 3, 'Jungle Package', 'Active', '2022-09-25 10:12:04'),
(14, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 3, 'Jungle Package', 'Active', '2022-09-25 10:12:07'),
(15, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 2, 'New Year Package', 'Active', '2022-09-25 10:12:09'),
(16, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 3, 'Jungle Package', 'Active', '2022-09-25 10:12:12'),
(17, 'Stay At Deluxe Rooms/Cottages', 'business.lenskartbusiness.com', 2, 'New Year Package', 'Active', '2022-09-27 06:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `image` text NOT NULL,
  `category` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `short` text NOT NULL,
  `specification` longtext NOT NULL,
  `information` longtext NOT NULL,
  `sliderimage` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `url`, `image`, `category`, `description`, `short`, `specification`, `information`, `sliderimage`, `status`, `date`) VALUES
(1, 'sdfsdagdsd', 'sdfsdagdsd', '1613973986product4jpg.jpg', 1, '<p>dsgdsgds</p>', 'gsdgds', '<p>gdsgsd</p>', '<p>wetewtr</p>', '[\"1613973986product2jpg.jpg\"]', 'Active', '2021-02-22 05:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `room_facility`
--

CREATE TABLE `room_facility` (
  `id` int(11) NOT NULL,
  `facility_name` varchar(255) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_facility`
--

INSERT INTO `room_facility` (`id`, `facility_name`, `accommodation_id`, `domain`, `status`, `created_at`) VALUES
(5, 'Toilet', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:43:24'),
(6, 'Tv', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:43:32'),
(7, 'Kitchen', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:43:37'),
(8, 'Kitchen', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:43:40'),
(9, 'Kitchen', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `room_overview`
--

CREATE TABLE `room_overview` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_information` text NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_overview`
--

INSERT INTO `room_overview` (`id`, `service_name`, `service_information`, `accommodation_id`, `domain`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OCCUPANCY', 'Max three person ', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-25 04:55:28', '2022-10-10 08:04:44'),
(3, 'FREE PICKUP FACILITY ', 'Yes', 14, 'business.lenskartbusiness.com', 'Active', '2022-09-25 05:03:30', '2022-10-10 08:04:44'),
(5, 'ROOM SERVICE', 'Available per request', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:54:36', '2022-10-10 08:04:44'),
(6, 'VIEW', 'Sea or Garden view', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:54:57', '2022-10-10 08:04:44'),
(7, 'INTERNET FREE', 'Available', 15, 'business.lenskartbusiness.com', 'Active', '2022-09-27 02:55:14', '2022-10-10 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `room_preview_photo`
--

CREATE TABLE `room_preview_photo` (
  `id` int(11) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `portion_name` varchar(255) NOT NULL,
  `preview_photo` text NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_preview_photo`
--

INSERT INTO `room_preview_photo` (`id`, `accommodation_id`, `portion_name`, `preview_photo`, `domain`, `status`, `created_at`, `updated_at`) VALUES
(8, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(10, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(12, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(14, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(16, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(18, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(20, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(22, 14, 'Bedroom', '1664092381_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-25 07:53:01', '2022-10-10 08:04:44'),
(24, 15, 'bedroom', '1664255001_3.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-27 05:03:21', '2022-10-10 08:04:44'),
(25, 15, 'second bedroom', '1664255019_1.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-27 05:03:39', '2022-10-10 08:04:44'),
(26, 15, 'room', '1664255108_8.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-27 05:05:08', '2022-10-10 08:04:44'),
(27, 15, 'bed room', '1664255128_6.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-27 05:05:28', '2022-10-10 08:04:44'),
(28, 15, 'kitchen', '1664255173_4.jpg', 'business.lenskartbusiness.com', 'Active', '2022-09-27 05:06:13', '2022-10-10 08:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `seo_tags`
--

CREATE TABLE `seo_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `domain` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_tags`
--

INSERT INTO `seo_tags` (`id`, `page_name`, `meta_description`, `meta_keywords`, `domain`, `created_at`, `updated_at`) VALUES
(1, 'Amenities', 'TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"', 'Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds,', 'business.failureboy.com', '2022-10-15 15:42:38', '2022-10-15 15:57:15'),
(2, 'Home', 'TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"TryHackMe is a free online platform for learning cyber security, using hands-on exercises and labs, all through your browser!\"', 'Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds, Keyowrds, Keyowrds, Keyowrds Keyowrds, Keyowrds,', 'business.failureboy.com', '2022-10-15 15:43:16', '2022-10-15 15:57:29'),
(3, 'Accommodation', 'sdf', 'adf', 'business.failureboy.com', '2022-10-15 15:58:42', '2022-10-15 15:58:42'),
(4, 'Location Advantages', 'asdf', 'afd', 'business.failureboy.com', '2022-10-15 15:59:06', '2022-10-15 15:59:06'),
(5, 'About', 'sdsd', 'dssds', 'business.failureboy.com', '2022-10-15 16:01:48', '2022-10-15 16:01:48'),
(6, 'Photo Gallery', '0', '0', 'global.lenskartbusiness.com', '2022-10-25 06:23:17', '2022-10-25 06:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `position` int(11) NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL,
  `type2` text NOT NULL,
  `status` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `domain`, `position`, `image`, `type`, `type2`, `status`, `date`) VALUES
(7, 'business.lenskartbusiness.com', 0, '16640072841jpg.jpg', 'Spend Your Dream Holidays', 'Book a room at our resort now and get a discount of 30%. Fruit basket, soft drinks and a huge cozy bed are waiting for you. We will do everything to make you feel at home.', 'Active', '2022-09-24 08:14:44'),
(13, 'laresidenza.lenskartbusiness.com', 0, 'slider_1670186479.jpg', 'Room', 'All rooms have air conditioning, attentively cleaned bathrooms. Hot delicious breakfast to start your day available.', 'Active', '2022-12-04 20:41:19'),
(14, 'southdelhi.lenskartbusiness.com', 0, 'slider_1670921556.jpg', 'Service Apartments in Delhi', 'Our luxurious and fully furnished service apartments are located in prime areas of major cities across the country, including Gurgaon, Delhi, Pune, Noida, and more, making them ideal for extended stays. The locations of these residences span multiple cities. Our magnificent service apartments are fully equipped with all the modern comforts of home. Each unit has been tastefully updated with the latest amenities to provide a truly cutting-edge stay. We’re happy to introduce you to Service Apartments in Delhi.\r\n\r\nIt is our mission to ensure that all of their clients are totally delighted with the quality of the accommodation they receive from them, and they have extensive knowledge of both the industry and the local apartment suppliers in New Delhi to that end. Our company’s primary goal is to provide the best possible service and lodging options for business travelers to the city. In addition to offering guests fully Furnished &non-sharing apartments with full kitchens, Wi-Fi Internet, cable TV, and housekeeping services at reasonable rates, we also provide a variety of payment options and short notice bookings. It can be more cost-effective to rent a house than to stay in a hotel.\r\n\r\n', 'Active', '2022-12-13 08:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `testinomial`
--

CREATE TABLE `testinomial` (
  `id` int(11) NOT NULL,
  `domain` text NOT NULL,
  `name` text NOT NULL,
  `comment_title` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `profile` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testinomial`
--

INSERT INTO `testinomial` (`id`, `domain`, `name`, `comment_title`, `comments`, `updated_at`, `profile`, `status`, `created_at`) VALUES
(12, 'business.lenskartbusiness.com', 'Haina Kumari', 'Neat and Clean Environment.', 'Very quiet neighborhood. Staff are friendly and efficient. Rooms are clean. No complaints. The place could be spruced up with fresh paint.', '2022-10-10 08:04:44', 'profile_1664268453.jpg', 'Active', '2022-09-25 12:53:54'),
(14, 'business.lenskartbusiness.com', 'Laxman Kumar', 'Neat and Clean Environment.', 'Very quiet neighborhood. Staff are friendly and efficient. Rooms are clean. No complaints. The place could be spruced up with fresh paint.', '2022-10-10 08:04:44', 'profile_1664268498.png', 'Active', '2022-09-27 08:48:04'),
(15, 'business.lenskartbusiness.com', 'Haina Kumari', 'Neat and Clean Environment.', 'Very quiet neighborhood. Staff are friendly and efficient. Rooms are clean. No complaints. The place could be spruced up with fresh paint.', '2022-10-10 08:04:44', 'profile_1664268535.jpg', 'Active', '2022-09-25 12:53:54'),
(16, 'business.lenskartbusiness.com', 'Laxman Kumar', 'Neat and Clean Environment.', 'Very quiet neighborhood. Staff are friendly and efficient. Rooms are clean. No complaints. The place could be spruced up with fresh paint.', '2022-10-10 08:04:44', 'profile_1664268526.png', 'Active', '2022-09-27 08:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `testinomial_customize`
--

CREATE TABLE `testinomial_customize` (
  `domain` varchar(255) NOT NULL,
  `testimonial_id` int(11) NOT NULL,
  `webpage_title` varchar(255) NOT NULL DEFAULT 'Resorts-Testimonial',
  `testinomial_photo` varchar(1000) NOT NULL DEFAULT '''https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg''',
  `photo_text` varchar(255) NOT NULL DEFAULT 'Testimonials',
  `directory_link_home` varchar(255) NOT NULL DEFAULT 'Home',
  `directory_link_testimonials` varchar(255) NOT NULL DEFAULT 'TESTIMONIAL',
  `web_description_title` varchar(255) NOT NULL DEFAULT 'Testimonials',
  `web_description_title_comment` varchar(255) NOT NULL DEFAULT 'Pick a room that best suits your taste and budget',
  `web_description_testimonials` varchar(2000) NOT NULL DEFAULT ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man''s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testinomial_customize`
--

INSERT INTO `testinomial_customize` (`domain`, `testimonial_id`, `webpage_title`, `testinomial_photo`, `photo_text`, `directory_link_home`, `directory_link_testimonials`, `web_description_title`, `web_description_title_comment`, `web_description_testimonials`, `created_at`, `updated_at`) VALUES
('COmpanyDoamin1.1com', 1, 'Resorts-Testimonial', 'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-09-22 05:28:51', '2022-09-22 05:28:51'),
('business.lenskartbusiness.com', 2, 'Resorts-Testimonial1', '1663832148_1663813121_Thor_Wallpaper_Engine.jpg', 'Testimonials1', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-09-22 05:30:02', '2022-10-10 08:04:44'),
('blogger.com', 3, 'Resorts-Testimonial', '\'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg\'', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-09-24 07:39:44', '2022-09-24 07:39:44'),
('business.lenskartbusiness.com', 4, 'Resorts-Testimonial', '1664267898_9-big.jpg', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-09-26 11:45:44', '2022-10-10 08:04:44'),
('laxman.lenskartbusiness.com', 8, 'Resorts-Testimonial', '\'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg\'', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-10-27 08:47:03', '2022-10-27 08:47:03'),
('exi.lenskartbusiness.com', 9, 'Resorts-Testimonial', '\'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg\'', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-10-27 08:48:25', '2022-10-27 08:48:25'),
('laresidenza.lenskartbusiness.com', 15, 'Resorts-Testimonial', '\'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg\'', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-12-04 20:35:18', '2022-12-04 20:35:18'),
('southdelhi.lenskartbusiness.com', 16, 'Resorts-Testimonial', '\'https://www.thebalancesmb.com/thmb/Y2-nEWf4rq7hEjzIoO2VsHISiqc=/2121x1414/filters:fill(auto,1)/GettyImages-980979008-5b2ef1e7fa6bcc003616a634.jpg\'', 'Testimonials', 'Home', 'TESTIMONIAL', 'Testimonials', 'Pick a room that best suits your taste and budget', ' Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Corbett the Grand is a very beautiful resort spread over 18 acres of landscaped gardens with the 100 stately cottages and rooms. This is not only the largest resort in Jim Corbett area, it is also the grandest resort.  Our resort opened its gates to welcome its guest in November 2016 and has since become the venue for some of the grandest events to be held in Jim Corbett.  Our sprawling resort stands prominently amidst the paddy fields adjoining the decades-old mango and lychee orchards, connecting the lush green part of the locale.  While our place gives our guests a lot of village life, which sometimes gives an opportunity to see the life of the village in an interactive session with the people of the village.  This approach brings your mind to the peace in Jim Corbett National Park and replaces the install moment, which is a short time. To go away your tensions, our naturalists are trained locals who know the forests behind their palms. They are confident that you will catch the jungles to reveal many mysteries, besides the tigers of tigers.  The famous forests of Corbett National Park testify to man\'s determination for safe places for wildlife to thrive and we are committed to maintaining it.  We aspire to promote responsible tourism in this environmentally fragile region and are proud of our strong inclination towards promoting indigenous ways of local people in its totality. At our resort you get a taste of the famous Kumaoni hospitality in its entirety.  We welcome you to this abode of peace and assure you of not having the same experience as before! ', '2022-12-13 08:47:09', '2022-12-13 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `address`, `status`, `created`, `updated`) VALUES
(1, 'admin', 'admin@resort.in', 'e6e061838856bf47e1de730719fb2609', '1234567890', 1, 'Delhi', 1, '2018-04-24 11:31:09', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_customize`
--
ALTER TABLE `about_customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_point_word`
--
ALTER TABLE `about_point_word`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accommodation_customize`
--
ALTER TABLE `accommodation_customize`
  ADD PRIMARY KEY (`accommdation_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities_customize`
--
ALTER TABLE `amenities_customize`
  ADD PRIMARY KEY (`amenties_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_facility`
--
ALTER TABLE `footer_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_customize`
--
ALTER TABLE `gallery_customize`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_type`
--
ALTER TABLE `gallery_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_customize`
--
ALTER TABLE `home_customize`
  ADD PRIMARY KEY (`home_id`),
  ADD KEY `domain_id` (`domain`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_customize`
--
ALTER TABLE `package_customize`
  ADD PRIMARY KEY (`package_Id`);

--
-- Indexes for table `package_inclusions`
--
ALTER TABLE `package_inclusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facility`
--
ALTER TABLE `room_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_overview`
--
ALTER TABLE `room_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_preview_photo`
--
ALTER TABLE `room_preview_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_tags`
--
ALTER TABLE `seo_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial`
--
ALTER TABLE `testinomial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial_customize`
--
ALTER TABLE `testinomial_customize`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_customize`
--
ALTER TABLE `about_customize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `about_point_word`
--
ALTER TABLE `about_point_word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `accommodation_customize`
--
ALTER TABLE `accommodation_customize`
  MODIFY `accommdation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `amenities_customize`
--
ALTER TABLE `amenities_customize`
  MODIFY `amenties_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `footer_facility`
--
ALTER TABLE `footer_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery_customize`
--
ALTER TABLE `gallery_customize`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery_type`
--
ALTER TABLE `gallery_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_customize`
--
ALTER TABLE `home_customize`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_customize`
--
ALTER TABLE `package_customize`
  MODIFY `package_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `package_inclusions`
--
ALTER TABLE `package_inclusions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_facility`
--
ALTER TABLE `room_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_overview`
--
ALTER TABLE `room_overview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_preview_photo`
--
ALTER TABLE `room_preview_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `seo_tags`
--
ALTER TABLE `seo_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testinomial`
--
ALTER TABLE `testinomial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testinomial_customize`
--
ALTER TABLE `testinomial_customize`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
