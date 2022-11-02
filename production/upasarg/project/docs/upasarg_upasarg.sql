-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2022 at 05:08 PM
-- Server version: 5.7.40-log
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
-- Database: `upasarg_upasarg`
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
(1, 'contactus@xklsv.com', 'admin', '$2y$10$O7DzgMqCANQBvQotMywkUuAFtxcQDy9sdI0faSpW/Hqapt0ZtdvJO', 'developer', 'active', '2022-03-17 06:15:17', '162.158.191.211', '127.0.0.1', '127.0.0.1', '0000-00-00 00:00:00', '2021-03-23 11:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` enum('active','paused') NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` enum('published','paused') NOT NULL DEFAULT 'published',
  `create_ip` varchar(15) NOT NULL,
  `modify_ip` varchar(15) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `id_parent_page` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url_slug` varchar(255) NOT NULL,
  `dummy_page` enum('yes','no') NOT NULL DEFAULT 'no',
  `has_child` enum('yes','no') NOT NULL DEFAULT 'no',
  `link_placement` enum('header','footer','sidebar','header-footer','all') NOT NULL,
  `login_required` enum('yes','no') NOT NULL DEFAULT 'no',
  `ordering` int(5) NOT NULL,
  `status` enum('published','paused') NOT NULL DEFAULT 'published',
  `create_ip` varchar(15) NOT NULL,
  `modify_ip` varchar(15) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `id_parent_page`, `title`, `url_slug`, `dummy_page`, `has_child`, `link_placement`, `login_required`, `ordering`, `status`, `create_ip`, `modify_ip`, `date_create`, `date_modify`) VALUES
(1, 0, 'About Us', 'about-us', 'no', 'yes', 'header', 'no', 1, 'published', '162.158.191.163', '172.70.218.7', '2021-10-29 11:38:02', '2022-02-09 08:36:21'),
(2, 1, 'Design and work approach', 'design-and-work-approach', 'no', 'no', 'header', 'no', 1, 'published', '162.158.191.163', '', '2021-10-29 11:41:41', '0000-00-00 00:00:00'),
(3, 1, 'Team Upasarg', 'team-upasarg', 'no', 'no', 'header', 'no', 3, 'published', '162.158.191.163', '162.158.235.26', '2021-10-29 11:43:06', '2022-03-02 15:58:34'),
(4, 0, 'Activities', 'activities', 'no', 'yes', 'header', 'no', 4, 'published', '162.158.191.163', '172.68.154.137', '2021-10-29 11:44:23', '2022-02-03 14:29:09'),
(5, 1, 'Services', 'services', 'no', 'no', 'header', 'no', 2, 'published', '162.158.191.163', '172.68.154.137', '2021-10-29 11:47:26', '2022-02-03 14:16:51'),
(6, 0, 'Portfolio', 'portfolio', 'no', 'yes', 'header', 'no', 0, 'published', '162.158.191.159', '172.68.154.135', '2021-11-10 07:15:38', '2022-02-03 13:09:30'),
(7, 23, 'Earth & Essence', 'earth-and-essence', 'no', 'no', 'header', 'no', 1, 'published', '162.158.191.185', '172.68.154.135', '2021-11-10 07:47:56', '2022-02-03 13:15:15'),
(8, 26, '18 & Oak', '18-and-oak', 'no', 'no', 'header', 'no', 2, 'published', '162.158.191.185', '172.68.154.135', '2021-11-10 10:32:37', '2022-02-03 13:15:55'),
(9, 23, 'Here & Now', 'here-and-now', 'no', 'no', 'header', 'no', 3, 'published', '162.158.191.167', '172.68.154.135', '2021-11-10 11:18:06', '2022-02-03 13:16:14'),
(10, 23, 'Flora Fountain', 'flora-fountain', 'no', 'yes', 'header', 'no', 4, 'published', '162.158.191.159', '172.68.154.135', '2021-11-10 11:39:16', '2022-02-03 13:16:43'),
(11, 23, 'Soul & Soil', 'soul-and-soil', 'no', 'no', 'header', 'no', 5, 'published', '162.158.191.159', '172.68.154.135', '2021-11-10 11:41:46', '2022-02-03 13:17:11'),
(12, 23, 'Mahima Sansar', 'mahima-sansar', 'no', 'no', 'header', 'no', 6, 'published', '162.158.191.167', '172.68.154.135', '2021-11-13 07:18:45', '2022-02-03 13:17:34'),
(13, 24, 'Pakyong Airport', 'pakyong-airport', 'no', 'no', 'header', 'no', 7, 'published', '162.158.191.167', '172.68.154.135', '2021-11-16 08:32:55', '2022-02-03 13:17:59'),
(14, 24, 'Ideal Unique Center', 'ideal-unique-center', 'no', 'no', 'header', 'no', 8, 'published', '162.158.191.185', '172.68.154.135', '2021-11-16 08:46:55', '2022-02-03 13:18:25'),
(15, 23, 'Ideal Exotica', 'ideal-exotica', 'no', 'no', 'header', 'no', 9, 'published', '162.158.191.185', '172.68.154.135', '2021-11-16 08:49:46', '2022-02-03 13:18:57'),
(16, 23, 'Shangri La, Guwahati', 'shangri-la-guwahati', 'no', 'no', 'header', 'no', 10, 'published', '162.158.191.163', '172.68.154.135', '2021-11-16 09:51:51', '2022-02-03 13:19:33'),
(17, 23, 'Grand City', 'grand-city', 'no', 'no', 'header', 'no', 11, 'published', '162.158.191.163', '172.68.154.135', '2021-11-16 10:04:44', '2022-02-03 13:20:05'),
(19, 23, 'Concorde Luxepolis', 'concorde-luxepolis', 'no', 'no', 'header', 'no', 13, 'published', '162.158.227.159', '172.68.154.135', '2021-12-03 11:53:35', '2022-02-03 13:20:57'),
(20, 23, 'Concorde Auriga, Bangalore', 'concorde-auriga-bangalor', 'no', 'no', 'header', 'no', 14, 'published', '162.158.235.174', '172.68.154.135', '2021-12-03 12:05:26', '2022-02-03 13:21:40'),
(21, 23, 'Adarsh Tropica, Bangalore', 'adarsh-tropica-bangalore', 'no', 'no', 'header', 'no', 15, 'published', '162.158.235.174', '172.68.154.135', '2021-12-03 12:10:27', '2022-02-03 13:22:29'),
(22, 23, 'Adarsh Sanctuary, Bangalore', 'adarsh-sanctuary-bangalore', 'no', 'no', 'header', 'no', 16, 'published', '162.158.48.3', '172.68.154.135', '2021-12-03 12:16:08', '2022-02-03 13:22:56'),
(23, 6, 'Residential', 'residential', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '162.158.191.223', '2022-02-03 13:12:14', '2022-03-17 06:18:16'),
(24, 6, 'Commercial', 'commercial', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '162.158.191.223', '2022-02-03 13:12:42', '2022-03-17 06:21:35'),
(25, 6, 'Institutional', 'institutional', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '', '2022-02-03 13:13:13', '0000-00-00 00:00:00'),
(26, 6, 'Hospitality', 'hospitality', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '162.158.191.199', '2022-02-03 13:13:54', '2022-03-17 06:20:44'),
(27, 6, 'Urban design', 'urban-design', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '', '2022-02-03 13:14:15', '0000-00-00 00:00:00'),
(28, 6, 'Master planning', 'master-planning', 'no', 'yes', 'header', 'no', 0, 'published', '172.68.154.135', '', '2022-02-03 13:14:40', '0000-00-00 00:00:00'),
(29, 4, 'Site Reviews', 'site-reviews', 'no', 'no', 'header', 'no', 1, 'published', '172.68.154.137', '172.68.154.137', '2022-02-03 14:31:22', '2022-02-03 14:32:01'),
(30, 4, 'Newsletters', 'newsletters', 'no', 'no', 'header', 'no', 2, 'published', '172.68.154.137', '172.70.218.89', '2022-02-03 14:31:45', '2022-02-11 10:52:59'),
(31, 4, 'Team Activities', 'team-activitie', 'no', 'no', 'header', 'no', 3, 'published', '172.68.154.137', '', '2022-02-03 14:32:26', '0000-00-00 00:00:00'),
(32, 23, 'Raintree hall apartments, Bangalore', 'raintree-hall-apartments-bangalore', 'no', 'no', 'header', 'no', 17, 'published', '172.70.218.27', '172.70.219.18', '2022-02-04 09:39:24', '2022-02-04 09:43:40'),
(33, 4, 'Images', 'images', 'no', 'no', 'header', 'no', 3, 'paused', '162.158.227.239', '172.70.219.18', '2022-02-11 10:34:21', '2022-02-11 10:36:19'),
(34, 0, 'Terms of Services', 'terms-of-services', 'no', 'no', 'footer', 'no', 1, 'published', '172.70.218.89', '172.70.219.18', '2022-03-09 05:34:21', '2022-03-09 05:41:39'),
(35, 0, 'Privacy Policy', 'privacy-policy', 'no', 'no', 'footer', 'no', 2, 'published', '172.70.218.7', '', '2022-03-09 05:39:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `id` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `create_ip` varchar(15) NOT NULL,
  `modify_ip` varchar(15) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`id`, `id_page`, `content`, `meta_title`, `meta_keywords`, `meta_description`, `create_ip`, `modify_ip`, `date_create`, `date_modify`) VALUES
(1, 1, '<div class=\"section-title aos-init aos-animate\" data-aos=\"fade-up\">\r\n<h1 style=\"text-align: center;\">About Us</h1>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: left;\">Upasarg is a young company promoted to create a more professional and sustainable Landscape Architecture practice in India. Upasarg integrates the best of international practices with the rich Indian Art, Architecture, Landscape, Environment, Culture, and Traditions to create harmonious soothing spaces.</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n</div>', 'About Us', 'Landscape Architecture, Upasarg', 'Upasarg is a young company promoted to create a more professional and sustainable Landscape Architecture practice in India. Upasarg integrates the best of international practices with the rich Indian Art, Architecture, Landscape, Environment, Culture, and', '162.158.191.163', '172.70.218.7', '2021-10-29 11:38:02', '2022-02-09 08:36:21'),
(2, 2, '<h1 style=\"text-align: center;\">Design and work approach</h1>\r\n<p>&nbsp;</p>\r\n<p>Upasarg strives to establish itself as a boutique landscape and environmental design studio and is focused on designing and delivering master plans and design-oriented solutions with particular emphasis on an innovative approach within the practical restraints of sites.<br>&nbsp;<br>Its designs would involve creating spaces that induce activity and reward senses that are comfortable and are appropriate to the regional, cultural, environmental, and sustainability context. <br><br>Upasarg&rsquo;s design philosophy is in tandem with updated knowledge on materials &amp; technology, professional yet practical solutions, and close coordination shall endeavor to create landscape designs that are aesthetic, comfortable, and maintainable for all the stakeholders.<br>At an aesthetic level, Upasarg&rsquo;s prime consideration would be to determine the soul of the project to ensure that the specific elements of the design are appropriate and are well-knitted in its character.</p>\r\n<p>&nbsp;</p>', 'Design and work approach', 'Architecture Design, Landscape Architecture, Upasarg', '', '162.158.191.163', '', '2021-10-29 11:41:41', '0000-00-00 00:00:00'),
(3, 3, '<h1 style=\"text-align: center;\">&nbsp;</h1>\r\n<h1 style=\"text-align: center;\"><span style=\"color: #ffffff;\">The Team</span></h1>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-3\"><span style=\"color: #ffffff;\"><img class=\"mb-4\" src=\"../assets/img/upload/charulata.jpeg.jpg\" width=\"100%\"></span>\r\n<p><span style=\"color: #ffffff;\"><strong>Charulatha Rangarajan</strong></span><br><span style=\"color: #ffffff;\">M.Arch., A.I.I.A, Founder &amp; Principal Consultant</span></p>\r\n<p><span style=\"color: #ffffff;\">With over 20 years experience in Indian &amp; International Design environment, understands and curates the design for each project in the most meticulous and appropriate way.</span></p>\r\n</div>\r\n<div class=\"col-lg-3\"><span style=\"color: #ffffff;\"><img class=\"mb-4\" src=\"../assets/img/upload/amit.jpeg.jpg\" width=\"100%\"></span>\r\n<p><span style=\"color: #ffffff;\"><strong>Amit Mishrikoti</strong></span><br><span style=\"color: #ffffff;\">B.E (Civil) Head &ndash; Projects</span></p>\r\n</div>\r\n<div class=\"col-lg-3\"><span style=\"color: #ffffff;\"><img class=\"mb-4\" src=\"../assets/img/upload/shilpa.jpeg.jpg\" width=\"100%\"></span>\r\n<p><span style=\"color: #ffffff;\"><strong>Shilpa Naik</strong></span><br><span style=\"color: #ffffff;\">B.Arch., A.I.I.A Head &ndash; Technical Studio</span></p>\r\n</div>\r\n<div class=\"col-lg-3\"><span style=\"color: #ffffff;\"><img class=\"mb-4\" src=\"../assets/img/upload/lakshmi.jpeg.jpg\" width=\"100%\"></span>\r\n<p><span style=\"color: #ffffff;\"><strong>Lakshmi Sriram</strong></span><br><span style=\"color: #ffffff;\">BBA Head - Admin</span></p>\r\n</div>\r\n</div>\r\n<p><span style=\"color: #ffffff;\">The company brings together a consortium of expertise from various backgrounds such as Landscape Architects, Architects, Artists, Construction Engineers, Irrigation Engineers and Management Professionals, under the leadership of the Principal Architect Ms.Charulatha Rangarajan, an Architect &amp; Landscape Professional.&nbsp; Her International experience&nbsp; brings in the best of standards, practices, yet practical approach to the local environment makes it an unique proposition, combining the best of both worlds.</span><br><br><span style=\"color: #ffffff;\">Our inclusive collaborative approach enables the team to understand and work together on the different aspects of the project to provide a holistic design solution to the clients.&nbsp; Team Upasarg is committed to the clients and their projects, constantly works on innovation, up gradation of the design detailing and strives to achieve excellence in all the projects with a great dedication.</span></p>\r\n<p><span style=\"color: #ffffff;\"><img src=\"../assets/img/upload/upasarg-team-1.jpeg\" alt=\"\" width=\"100%\"></span></p>', 'Upasarg\'s Vision', 'Vision, Architecture Design, Landscape Architecture, Upasarg', '', '162.158.191.163', '162.158.235.26', '2021-10-29 11:43:06', '2022-03-02 15:58:34'),
(4, 4, '<h1 style=\"text-align: center;\">Mission</h1>\r\n<p>&nbsp;</p>\r\n<p>To become an exclusive &amp; niche landscape consultant, by providing innovative, environmentally sensitive, climate-responsive, and powerful design solutions very specific to the project, weaving cultural fabric with futuristic ideas.</p>\r\n<p>&nbsp;</p>', 'Upasarg\'s Mission', 'Mission, Architecture Design, Landscape Architecture, Upasarg', '', '162.158.191.163', '172.68.154.137', '2021-10-29 11:44:23', '2022-02-03 14:29:09'),
(5, 5, '<h1 style=\"text-align: center;\">Services</h1>\r\n<p>&nbsp;</p>\r\n<p>Landscape Architecture for Housing, Commercial, Hospitality, Institutional, and &nbsp;Public projects.&nbsp;</p>\r\n<div>&nbsp;</div>\r\n<div>&nbsp; Environmental &amp; Sustainable solutions for projects that involve</div>\r\n<ul>\r\n<li>Open Spaces.</li>\r\n<li>Water Fronts.</li>\r\n<li>Public Parks &amp; Plazas.</li>\r\n<li>Urban Spaces/ Squares.</li>\r\n<li>Landscape Design &amp; Construction Management.</li>\r\n<li>Conceptual Architecture for Landscape/Environment driven projects.</li>\r\n<li>Landscape Conservation Projects.</li>\r\n<li>Landscape Design solutions for Historic precincts with cultural heritage</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'Upasarg\'s Services', 'Services, Architecture Design, Landscape Architecture, Upasarg', '', '162.158.191.163', '172.68.154.137', '2021-10-29 11:47:26', '2022-02-03 14:16:51'),
(6, 6, '<h1 style=\"text-align: center;\">Projects</h1>', 'projects', 'Upasarg projects', '', '162.158.191.159', '172.68.154.135', '2021-11-10 07:15:38', '2022-02-03 13:09:30'),
(7, 7, '<h1 style=\"text-align: center;\">Earth &amp; Essence</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Residential Township, Bangalore</h4>\r\n<p><strong>EARTH &amp; ESSENCE</strong> is spread across 22 acres with 4 phases of residential development and a resort feel club.&nbsp; The landscape is conceptualized to offer a nest away feel to the residents with its Rain forest planting and environmentally sensitive design.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Master Plan</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-master-plan.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Streetscape with rain forest planting</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-streetscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Club entry</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-club-entry.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Pool View</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-pool-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Phase 1 Villas</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villas.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Villa streetscape design</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villa-design.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Villa rear courtyyard</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villa-rear.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Villa courtyyard design</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villa-country-yard.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Model Villa @ site</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-model-villa-site.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Villa map</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villa-map.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Villa courtyyard</strong></p>\r\n<img src=\"../assets/img/upload/earth-essence-villa-country-yard-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>', 'Earth and Essence, Residential Township, Bangalore', 'Earth and Essence, Upasarg Projects, Residential Township Bagalore', '', '162.158.191.185', '172.68.154.135', '2021-11-10 07:47:56', '2022-02-03 13:15:15'),
(8, 8, '<h1 style=\"text-align: center;\">18 &amp; Oak</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Golf Community living, Bangalore</h4>\r\n<p><strong>18 &amp; OAK</strong> is a luxury villa project in a golf community.&nbsp; Four types of villas with lush landscapes to suit the lifestyle of the residents.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Masterplan</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-masterplan.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Streetscape</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-streetscape.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type A Villa courtyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-a-courtyard-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type A Villa courtyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-a-courtyard-2.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type A Villa courtyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-a-courtyard-3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type A Villa entry</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-a-entry.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type A Villa plan</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-a-map.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type B Villa backyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-b-backyard-2.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type B Villa golf view</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-b-backyard-golf-view-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type B Villa internal courtyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-b-internal-courtyard-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type B Villa courtyard</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-b-internal-courtyard.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">\r\n<p class=\"text-center mb-2\"><strong>Type B Villa plan</strong></p>\r\n<img src=\"../assets/img/upload/18-oak-villa-b-villa-plan.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\">&nbsp;</div>\r\n<div class=\"col-lg-4\">&nbsp;</div>\r\n</div>', '18 and Oak, Golf Community living, Bangalore', '18 and Oak,  Golf Community living, Bangalore, Upasarg Projects', '', '162.158.191.185', '172.68.154.135', '2021-11-10 10:32:37', '2022-02-03 13:15:55'),
(9, 9, '<h1 style=\"text-align: center;\">Here &amp; Now</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Residential Condominum, Bangalore</h4>\r\n<p><strong>HERE &amp; NOW</strong> landscape is designed as dynamic, youthful, sporty complex for younger crowd.</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape Plan</strong></p>\r\n<img src=\"../assets/img/upload/here-now-landscape-plan.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Entry View</strong></p>\r\n<img src=\"../assets/img/upload/here-now-entry-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Central Landscape</strong></p>\r\n<img src=\"../assets/img/upload/here-now-central-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Central Landscape View</strong></p>\r\n<img src=\"../assets/img/upload/here-now-central-landscape-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n</div>', 'Here and now, Residential Condominum, Bangalore', 'Here and now,  Residential Condominum, Bangalore, Upasarg Projects', '', '162.158.191.167', '172.68.154.135', '2021-11-10 11:18:06', '2022-02-03 13:16:14'),
(10, 10, '<h1 style=\"text-align: center;\">Flora Fountain</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Residential Condominum, Kolkata</h4>\r\n<p><strong>FLORA FOUNTAIN</strong> elegant curves, tropical planting, pond side strolls sets the landscape experience soar high.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape plan</strong></p>\r\n<img src=\"../assets/img/upload/flora-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Entry view</strong></p>\r\n<img src=\"../assets/img/upload/flora-entry-view-design.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Entry view construction</strong></p>\r\n<img src=\"../assets/img/upload/flora-entry-view-construction-picture.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Side view</strong></p>\r\n<img src=\"../assets/img/upload/flora-side-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top view with lights</strong></p>\r\n<img src=\"../assets/img/upload/flora-top-view-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top view</strong></p>\r\n<img src=\"../assets/img/upload/flora-top-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Water structure</strong></p>\r\n<img src=\"../assets/img/upload/flora-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n</div>', 'Flora Fountain, Residential Condominum, Kolkata', 'Flora Fountain, Residential Condominum, Kolkata, Upasarg projects', '', '162.158.191.159', '172.68.154.135', '2021-11-10 11:39:16', '2022-02-03 13:16:43'),
(11, 11, '<h1 style=\"text-align: center;\">Soul &amp; Soil</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Gated community row houses, Bangalore</h4>\r\n<p><strong>SOUL &amp; SOIL</strong> is a 7 acres gated community with row houses. Other than Recreational parks, play areas, community garden &amp; kitchen, each villa has three little courtyards at entry, central &amp; rear.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape plan</strong></p>\r\n<img src=\"../assets/img/upload/ss-landscape-plan.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Entry view</strong></p>\r\n<img src=\"../assets/img/upload/ss-entry-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Pool view</strong></p>\r\n<img src=\"../assets/img/upload/ss-pool-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Streetscape</strong></p>\r\n<img src=\"../assets/img/upload/ss-streetscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Community Garden</strong></p>\r\n<img src=\"../assets/img/upload/ss-community-garden.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Community Dinning</strong></p>\r\n<img src=\"../assets/img/upload/ss-community-dining.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Club Entry View</strong></p>\r\n<img src=\"../assets/img/upload/ss-club-entry.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n</div>', 'Soul and Soil, Gated community row houses, Bangalore', 'Soul and Soil, Gated community row houses, Bangalore, Upasarg projects', '', '162.158.191.159', '172.68.154.135', '2021-11-10 11:41:46', '2022-02-03 13:17:11'),
(12, 12, '<h1 style=\"text-align: center;\">Mahima Sansar</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Mixed Use Township, Jaipur</h4>\r\n<p><strong>Mahima Sansar</strong> is a township with over 7000 population. Landscape design aims at creating spaces for all age groups, hierarchy of open spaces for individual, couple, small groups to a larger congregation, so everyone can find their space in the outdoor living.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Club plan</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-club-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Club Zone</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-club-zone.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Entry view</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-entry-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape Sketch</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-landscape-sketch-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape Sketch</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-landscape-sketch-2.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape Sketch</strong></p>\r\n<img src=\"../assets/img/upload/mahima-sansar-landscape-sketch-3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n<div class=\"col-lg-6\">&nbsp;</div>\r\n</div>', 'Mahima Sansar - Mixed use Township - Jaipur', 'Mahima Sansar, Mixed use Township - Jaipur, Upasarg Projects', '', '162.158.191.167', '172.68.154.135', '2021-11-13 07:18:45', '2022-02-03 13:17:34'),
(13, 13, '<h1 style=\"text-align: center;\">Pakyong Airport - Sikkim</h1>\r\n<p>&nbsp;</p>\r\n<p><strong>PAKYONG AIRPORT</strong> green strip airport is located in the Himalayan state of Sikkim.&nbsp; Landscape Design showcases the cultural identity and the rich biodiversity of the state.</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top View</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-top-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>The Setting</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-setting.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Airport Pak</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-park.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape View</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-landscape-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape Plan</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-landscape-plan.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Drop Off Zone</strong></p>\r\n<img src=\"../assets/img/upload/pakyong-airport-drop-off-zone.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/pakyong-airport-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/pakyong-airport-2.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/pakyong-airport-3.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>', 'Pakyong Airport Sikkim', 'Pakyong Airport Sikkim, Upasarg Projects', '', '162.158.191.167', '172.68.154.135', '2021-11-16 08:32:55', '2022-02-03 13:17:59'),
(14, 14, '<h1 style=\"text-align: center;\">Ideal Unique Center</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Commercial Tower, Kolkata</h4>\r\n<p><strong>IDEAL UNIQUE CENTRE</strong> is a commercial building in the heart of Kolkata. The landscape geometry is kept in simple lines. The spaces are conceived to enable large public movement, seating , coffee terraces and putting green at the sky level.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/iuc-1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/iuc-4.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/iuc-3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/iuc-2.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Ideal Unique Center, Commercial Tower, Kolkata', 'Ideal Unique Center, Commercial Tower, Kolkata, Upasarg Projects', '', '162.158.191.185', '172.68.154.135', '2021-11-16 08:46:55', '2022-02-03 13:18:25'),
(15, 15, '<h1 style=\"text-align: center;\">Ideal Exotica</h1>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Commercial Tower, Kolkata</h4>\r\n<p><strong>IDEAL EXOTICA</strong> is an ultra luxury residential development in Alipore, Kolkata. Multi level landscape spaces with high volume makes it a unique design and experience.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Project Overview</strong></p>\r\n<img src=\"../assets/img/upload/ideal-exotica-project-overview.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Sky Landscape</strong></p>\r\n<img src=\"../assets/img/upload/ideal-exotica-sky-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Balcony Landscape</strong></p>\r\n<img src=\"../assets/img/upload/ideal-exotica-balcony-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Drop Off Area</strong></p>\r\n<img src=\"../assets/img/upload/ideal-exotica-drop-off-area.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top View</strong></p>\r\n<img src=\"../assets/img/upload/ideal-exotica-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>', 'Ideal Exotica, Residential Tower, Kolkata', 'Ideal Exotica, Residential Tower, Kolkata, Upasarg Projects', '', '162.158.191.185', '172.68.154.135', '2021-11-16 08:49:46', '2022-02-03 13:18:57'),
(16, 16, '<h1 style=\"text-align: center;\">Shangri La</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Mixed Use Township, Guwahati</h4>\r\n<p><strong>SHANGRI LA</strong> is mixed use development in Guwahati, NE India. Phase 1 has the residential towers with modern &amp; neat landscape.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Residential Towers</strong></p>\r\n<img src=\"../assets/img/upload/shangrila-residential-towers.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Residential Entry</strong></p>\r\n<img src=\"../assets/img/upload/shangrila-residential-entry.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Podium Landscape</strong></p>\r\n<img src=\"../assets/img/upload/shangrila-podium-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Landscape View</strong></p>\r\n<img src=\"../assets/img/upload/shangrila-1.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Shagri La, Mixed Use Township, Guwahati', 'Shagri La, Mixed Use Township, Guwahati, Upasarg Projects', '', '162.158.191.163', '172.68.154.135', '2021-11-16 09:51:51', '2022-02-03 13:19:33'),
(17, 17, '<h1 style=\"text-align: center;\">Grand City</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: center;\">&nbsp;</h4>\r\n<h4 style=\"text-align: left;\">Mixed Use Township, Kolkata</h4>\r\n<p><strong>Grand City</strong> is a mixed use township spread over 314 acres of land, on the outskirts of Kolkata, first phase of 15 acres being developed as an affordable housing segment.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Central Landscape View</strong></p>\r\n<img src=\"../assets/img/upload/grand-city-central-landscape.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Phase 1 Development</strong></p>\r\n<img src=\"../assets/img/upload/grand-city-phase-1-development.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Project Overview</strong></p>\r\n<img src=\"../assets/img/upload/grand-city-project-overview.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top View</strong></p>\r\n<img src=\"../assets/img/upload/grand-city-top-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\">\r\n<p class=\"text-center mb-2\"><strong>Top View</strong></p>\r\n<img src=\"../assets/img/upload/grand-city-view.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Grand City, Mixed use Township, Kolkata', 'Grand City, Mixed use Township, Kolkata, Upasarg Projects', '', '162.158.191.163', '172.68.154.135', '2021-11-16 10:04:44', '2022-02-03 13:20:05'),
(18, 18, '<h1 style=\"text-align: center;\">Orbit Star</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: left;\">Residential development project, Kolkata</h4>\r\n<p><strong>Orbit Star</strong> is a residential development project&nbsp; of 9 acres in Howrah with Spanish Architectural theme.&nbsp; Landscape design compliments the Spanish style with the modern facilities.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_1.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_2.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_3.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_4.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_5.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/orbit_star_6.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Orbit Star, residential development project, Kolkata', 'Orbit Star, Residential Development Project, Kolkata, Upasarg Project', '', '162.158.235.30', '162.158.227.119', '2021-12-03 11:36:13', '2021-12-03 11:45:01'),
(19, 19, '<h1 style=\"text-align: center;\">Concorde Luxopolis</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: left;\">Residential tower, Bangalore</h4>\r\n<p><strong>Concorde Luxopolis</strong> is a residential development project&nbsp; of 1 acre on Bull Temple Road, Bangalore with ultra modern landscape design.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_1.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_2.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_3.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_4.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_5.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_6.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Concorde Luxopolis, Residential tower, bangalore', 'Concorde Luxopolis, Residential tower, bangalore, Upasarg Project', '', '162.158.227.159', '172.68.154.135', '2021-12-03 11:53:35', '2022-02-03 13:20:57'),
(20, 20, '<h1 style=\"text-align: center;\">Concorde Auriga</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: left;\">Residential Community</h4>\r\n<p><strong>Concorde Auriga</strong> is a mid segment residential community on Old Madras Road.&nbsp; The Landscape design is a flowy modern tropical blast and creates cozy open spaces.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_1.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_2.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_3.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_4.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_5.png\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/concorde_auriga_6.png\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Concorde Auriga, residential community, Old Madras road', 'Concorde Auriga, residential community, Old Madras road', '', '162.158.235.174', '172.68.154.135', '2021-12-03 12:05:26', '2022-02-03 13:21:40'),
(21, 21, '<h1 style=\"text-align: center;\">Adarsh Aspira Parkland</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: left;\">Adarsh Aspira Parkland, Bangalore</h4>\r\n<p><strong>Adarsh Aspira Parkland</strong> is an affordable segment&nbsp; residential project&nbsp; of 14 acres with effective landscape solutions without reducing the ambience of the space.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_2.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_4.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_5.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Adarsh Aspira Parkland, Affordable residential development, Bangalore', 'Adarsh Aspira Parkland, Affordable residential development, Bangalore, Upasarg Project', '', '162.158.235.174', '172.68.154.135', '2021-12-03 12:10:27', '2022-02-03 13:22:29'),
(22, 22, '<h1 style=\"text-align: center;\">Adarsh Sanctuary</h1>\r\n<p>&nbsp;</p>\r\n<h4 style=\"text-align: left;\">Gated community villas, Bangalore</h4>\r\n<p><strong>Adarsh Sanctuary</strong> is a 20 acres gated community with Villa Development in Bangalore.&nbsp; The highlight is the landscape weaved thru an existing Teak Grove and facilities that are created within the thicket.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_2.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_4.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_5.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_6.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/adarsh_sanctuary_7.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Adarsh Sanctuary, Gated community villas, Bangalore', 'Adarsh Sanctuary, Gated community villas, Bangalore, Upasarg Project', '', '162.158.48.3', '172.68.154.135', '2021-12-03 12:16:08', '2022-02-03 13:22:56'),
(23, 23, '<div class=\"row portfolio-container mt-4\">\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../earth-and-essence\"> <img class=\"img-fluid\" src=\"../assets/img/upload/earth-essence-pool-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Earth &amp; Essence</h4>\r\n<p class=\"text-center\">Residential Township, Bangalore</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../here-and-now\"> <img class=\"img-fluid\" src=\"../assets/img/upload/here-now-entry-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Here &amp; Now</h4>\r\n<p class=\"text-center\">Residential Condominum, Bangalore</p>\r\n<a> </a></div>\r\n<a> </a>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a> </a><a href=\"../flora-fountain\"> <img class=\"img-fluid\" src=\"../assets/img/upload/flora-entry-view-design.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Flora Fountain</h4>\r\n<p class=\"text-center\">Residential Condominum, Kolkata</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../soul-and-soil\"> <img class=\"img-fluid\" src=\"../assets/img/upload/ss-entry-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Soul &amp; Soil</h4>\r\n<p class=\"text-center\">Gated community row houses, Bangalore</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../mahima-sansar\"> <img class=\"img-fluid\" src=\"../assets/img/upload/mahima-sansar-entry-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Mahima Sansar</h4>\r\n<p class=\"text-center\">Mixed Use Township, Jaipur</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../shangri-la\"> <img class=\"img-fluid\" src=\"../assets/img/upload/shangrila-residential-entry.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Shangri La</h4>\r\n<p class=\"text-center\">Mixed Use Township, Guwahati</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../grand-city\"> <img class=\"img-fluid\" src=\"../assets/img/upload/grand-city-top-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Grand City</h4>\r\n<p class=\"text-center\">Mixed Use Township, Kolkata</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../orbit-star\"> <img class=\"img-fluid\" src=\"../assets/img/upload/orbit_star_5.png\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Orbit Star</h4>\r\n<p class=\"text-center\">Residential development project, Kolkata</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../concorde-luxopolis\"> <img class=\"img-fluid\" src=\"../assets/img/upload/concorde_4.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Concorde Luxopolis</h4>\r\n<p class=\"text-center\">Residential tower, Bangalore</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../concorde-auriga\"> <img class=\"img-fluid\" src=\"../assets/img/upload/concorde_auriga_5.png\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Concorde Auriga</h4>\r\n<p class=\"text-center\">Residential Community</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../adarsh-aspira-parkland\"> <img class=\"img-fluid\" src=\"../assets/img/upload/adarsh_1.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Adarsh Aspira Parkland</h4>\r\n<p class=\"text-center\">Residential Project, Bangalore</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../adarsh-sanctuary\"> <img class=\"img-fluid\" src=\"../assets/img/upload/adarsh_sanctuary_3.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Adarsh Sanctuary</h4>\r\n<p class=\"text-center\">Gated community villas, Bangalore</p>\r\n</div>\r\n</div>', '', '', '', '172.68.154.135', '162.158.191.223', '2022-02-03 13:12:14', '2022-03-17 06:18:16'),
(24, 24, '<div class=\"row portfolio-container mt-4\">\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../ideal-unique-center\"> <img class=\"img-fluid\" src=\"../assets/img/upload/iuc-4.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Ideal Unique Center</h4>\r\n<p class=\"text-center\">Commercial Tower, Kolkata</p>\r\n</div>\r\n<div class=\"col-lg-6 col-md-6 portfolio-item\"><a href=\"../pakyong-airport\"> <img class=\"img-fluid\" src=\"../assets/img/upload/pakyong-airport-top-view.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">Pakyong Airport</h4>\r\n<p class=\"text-center\">Sikkim</p>\r\n</div>\r\n</div>', '', '', '', '172.68.154.135', '162.158.191.223', '2022-02-03 13:12:42', '2022-03-17 06:21:35'),
(25, 25, '', '', '', '', '172.68.154.135', '', '2022-02-03 13:13:13', '0000-00-00 00:00:00'),
(26, 26, '<div class=\"row portfolio-container mt-4\">\r\n<div class=\"col-lg-6 col-md-6 portfolio-item filter-app\"><a href=\"../18-and-oak\"> <img class=\"img-fluid\" src=\"../assets/img/upload/18-oak-villa-a-courtyard-2.jpg\" alt=\"\" width=\"100%\"></a>\r\n<h4 class=\"mt-2 text-center\">18 &amp; Oak</h4>\r\n<p class=\"text-center\">Golf Community living, Bangalore</p>\r\n</div>\r\n</div>', '', '', '', '172.68.154.135', '162.158.191.199', '2022-02-03 13:13:54', '2022-03-17 06:20:44'),
(27, 27, '', '', '', '', '172.68.154.135', '', '2022-02-03 13:14:15', '0000-00-00 00:00:00'),
(28, 28, '', '', '', '', '172.68.154.135', '', '2022-02-03 13:14:40', '0000-00-00 00:00:00'),
(29, 29, '', '', '', '', '172.68.154.137', '172.68.154.137', '2022-02-03 14:31:22', '2022-02-03 14:32:01'),
(30, 30, '<div class=\"row text-center\">\r\n<div class=\"col-lg-8 mx-auto\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/upload/newsletter-1ed-2022-1.png\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-8 mx-auto\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/upload/newsletter-1ed-2022-2.png\" alt=\"image\" width=\"100%\"></div>\r\n</div>', '', '', '', '172.68.154.137', '172.70.218.89', '2022-02-03 14:31:45', '2022-02-11 10:52:59'),
(31, 31, '', '', '', '', '172.68.154.137', '', '2022-02-03 14:32:26', '0000-00-00 00:00:00'),
(32, 32, '<h1 style=\"text-align: center;\">Raintree Hall Apartments, Bangalore</h1>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/raintree_hall_apartments_1.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/raintree_hall_apartments_2.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/raintree_hall_apartments_3.jpg\" alt=\"\" width=\"100%\"></div>\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/raintree_hall_apartments_4.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<div class=\"row mb-4\">\r\n<div class=\"col-lg-6\"><img src=\"../assets/img/upload/raintree_hall_apartments_5.jpg\" alt=\"\" width=\"100%\"></div>\r\n</div>\r\n<p>&nbsp;</p>', 'Raintree hall apartments, Bangalore', 'Raintree hall apartments, Bangalore', '', '172.70.218.27', '172.70.219.18', '2022-02-04 09:39:24', '2022-02-04 09:43:40'),
(33, 33, '<div class=\"row\">\r\n<div class=\"col-lg-4\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../assets/img/upload/newsletter-1ed-2022-1.png\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/newsletter-1ed-2022-2.png\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/raintree_hall_apartments_5.jpg\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/raintree_hall_apartments_4.jpg\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/raintree_hall_apartments_3.jpg\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/raintree_hall_apartments_2.jpg\" alt=\"image\" width=\"100%\"></div>\r\n<div class=\"col-lg-4\"><img src=\"../assets/img/upload/raintree_hall_apartments_1.jpg\" alt=\"image\" width=\"100%\"></div>\r\n</div>', 'Upasarg Images', 'Upasarg Images, Portfolio, Projects', '', '162.158.227.239', '172.70.219.18', '2022-02-11 10:34:21', '2022-02-11 10:36:19'),
(34, 34, '<h1 style=\"text-align: center;\">Terms of Services</h1>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>We may collect the following information; Name, email address, phone number and contact details, Postal code, Demographic profile (like age, gender, occupation, education, address etc.), and information about the pages, that the customer accesses.</li>\r\n<li>All services of ours, are accessible to everyone.</li>\r\n<li>Except where otherwise noted, our content is licensed under a Creative Commons Attribution 4.0 International License.</li>\r\n<li>If the customer is a minor i.e. under the age of 18 years but at least 13 years of age the customer may use the Site only under the supervision of a parent or legal guardian who agrees to be bound by the Terms of Use. If the customer is below 18 years of age, the customer&rsquo;s parents or legal guardians can transact on behalf of the customer, if they are registered users. The customer is prohibited from purchasing any material which is for adult consumption and the sale of which to minors is prohibited.</li>\r\n<li>The customer will have to keep their account and registration details current and correct for communications related to financial transactions from us.</li>\r\n<li>By agreeing to the terms and conditions, the customer agrees to receive promotional communication and newsletters. The customer can opt-out either by unsubscribing or by contacting customer service.</li>\r\n<li>Any customer can cancel their order anytime, before accepting the service.</li>\r\n<li>The customer will provide authentic and true information in all instances where such information is requested of the customer.</li>\r\n<li>Any customer accessing the services available on this Site and transacting at their sole risk will be assumed to be using their best and prudent judgment before entering into any transaction through this Site.</li>\r\n<li>Before placing an order the customer will check the description carefully. By placing an order the customer agrees to be bound by the conditions of sale included.</li>\r\n<li>We may at any time modify the Terms &amp; Conditions of Use of the website without any prior notification to the customers. Customers can access the latest version of the Terms &amp; Conditions at any given time on the Site. Customers should regularly review the Terms &amp; Conditions on the Site. In the event the modified Terms &amp; Conditions is not acceptable to any customer, the customer should discontinue using the Service. However, if the customer continues to use the Service the customer shall be deemed to have agreed to accept and abide by the modified Terms &amp; Conditions of Use of this Site.</li>\r\n<li>This Agreement shall be construed in accordance with the applicable laws of India. The Courts at Bangalore shall have exclusive jurisdiction in any proceedings arising out of this agreement.</li>\r\n<li>We and our suppliers and licensors expressly reserve all intellectual property rights in all text, programs, products, processes, technology, content, and other materials, which appear on this Site.</li>\r\n<li>All customers agree to defend, indemnify and hold harmless, us, our employees, directors, officers, agents, and their successors and assigns from and against any and all claims, liabilities, damages, losses, costs, and expenses, including attorney\'s fees, caused by or arising out of claims based upon the customer\'s actions or inactions, which may result in any loss or liability to us or any third party including but not limited to breach of any warranties, representations or undertakings or in relation to the non-fulfillment of any of the customer\'s obligations under this Agreement or arising out of the customer\'s violation of any applicable laws, regulations including but not limited to Intellectual Property Rights, payment of statutory dues and taxes, claim of libel, defamation, violation of rights of privacy or publicity, loss of service by other subscribers and infringement of intellectual property or other rights. This clause shall survive the expiry or termination of this Agreement.</li>\r\n<li>This Agreement is effective unless and until terminated by either the customer or us.</li>\r\n</ul>', 'Terms of Services', 'Terms of Services', '', '172.70.218.89', '172.70.219.18', '2022-03-09 05:34:21', '2022-03-09 05:41:39');
INSERT INTO `page_content` (`id`, `id_page`, `content`, `meta_title`, `meta_keywords`, `meta_description`, `create_ip`, `modify_ip`, `date_create`, `date_modify`) VALUES
(35, 35, '<h1 style=\"text-align: center;\">Privacy Policy</h1>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>This privacy policy provides succinctly the manner in which the customer data is collected and used by us, on the website. As a visitor to the site/ customer, please read the privacy policy carefully.</li>\r\n<li>By accessing the services provided by the website, we will consider that the customer agrees to the collection and use of their data by us in the manner provided in this Privacy Policy.</li>\r\n<li>As part of the registration process on the website, we may collect the following personally identifiable information; Name, email address, phone number and contact details, Postal code, Demographic profile (like your age, gender, occupation, education, address, etc.) and information about the pages, that the customer visits, the links the customer clicks on, the number of times the customer accesses the page and any such browsing information.</li>\r\n<li>We will collect personally identifiable information about the customers only as part of a voluntary registration process, online survey or any combination thereof.</li>\r\n<li>We will use the customer\'s personal information to provide personalized features to the customer, on the website and other channels.</li>\r\n<li>We will also provide this information to its business associates and partners to get in touch with the customer when necessary to provide the services requested by the customer.</li>\r\n<li>We will use this information to preserve transaction history as governed by existing law or policy. We may also use contact information internally to direct its efforts for product improvement, to contact the customer as a survey respondent, to notify the customer if the customer wins any contest; and to send the customer promotional materials from its contest sponsors or advertisers. We will also use this information to serve various promotional and advertising materials to the customer.</li>\r\n<li>We may use the customer data for the purpose of creating additional features on the website, creating appropriate merchandising or creating new products and services, and conducting marketing research and statistical analysis of customer behavior and transactions.</li>\r\n<li>We will not use the customer\'s financial information for any purpose other than to complete a transaction with the customer. We will not rent, sell or share the customer\'s personal information and will not disclose any of the customer\'s personally identifiable information to third parties. In cases where it has the customer\'s permission to provide products or services that the customer has requested and such information is necessary to provide these products or services the information may be shared with our business associates and partners. We may, however, share consumer information on an aggregate with its partners or third parties where it deems necessary.</li>\r\n<li>In addition, we will use this information for promotional offers, to help investigate, prevent or take action regarding unlawful and illegal activities, suspected fraud, potential threat to the safety or security of any person, violations of the Site\'s terms of use or to defend against legal claims; special circumstances such as compliance with subpoenas, court orders, requests/order from legal authorities or law enforcement agencies requiring such disclosure.</li>\r\n<li>To protect against the loss, misuse, and alteration of the information under its control, we have in place appropriate physical, electronic, and managerial procedures. All customer data is encrypted, so no employee/ representative has access to any customer data.</li>\r\n<li>To correct or update any information you have provided, the website allows you to do it online.<br>We reserve the right to change or update this policy at any time. Such changes shall be effective immediately upon posting on the website.</li>\r\n</ul>', 'Privacy Policy', 'Privacy Policy', '', '172.70.218.7', '', '2022-03-09 05:39:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `se_users`
--

CREATE TABLE `se_users` (
  `user_id` int(9) NOT NULL,
  `user_gender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_dob` datetime DEFAULT NULL,
  `user_relationship` tinyint(3) UNSIGNED NOT NULL,
  `user_email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_newemail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_fname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_lname` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `age` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_password_method` int(11) NOT NULL DEFAULT '2',
  `user_password` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `user_enabled` int(1) NOT NULL DEFAULT '0',
  `user_verified` int(1) NOT NULL DEFAULT '0',
  `user_language_id` int(9) NOT NULL DEFAULT '0',
  `user_signupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_lastlogindate` int(14) NOT NULL DEFAULT '0',
  `user_lastactive` int(14) NOT NULL DEFAULT '0',
  `user_ip_signup` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_ip_lastactive` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_status` varchar(190) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_status_date` int(14) NOT NULL DEFAULT '0',
  `user_logins` int(9) NOT NULL DEFAULT '0',
  `user_invitesleft` int(3) NOT NULL DEFAULT '0',
  `user_timezone` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_dateupdated` int(14) NOT NULL DEFAULT '0',
  `user_blocklist` text COLLATE utf8_unicode_ci,
  `user_invisible` int(1) NOT NULL DEFAULT '0',
  `user_saveviews` int(1) NOT NULL DEFAULT '1',
  `show_fndfans` int(1) NOT NULL DEFAULT '1',
  `user_photo` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user_search` int(1) NOT NULL DEFAULT '0',
  `user_privacy` int(2) NOT NULL DEFAULT '7',
  `user_comments` int(2) NOT NULL DEFAULT '7',
  `parentid` int(11) NOT NULL DEFAULT '0',
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `user_profile_album` enum('tab','side') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tab',
  `user_profile_game` enum('tab','side') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tab',
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `user_profile_photography` enum('tab','side') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tab',
  `user_photography_access` tinyint(1) NOT NULL DEFAULT '0',
  `log_out_time` int(14) NOT NULL DEFAULT '0',
  `user_hasnotifys` tinyint(1) NOT NULL DEFAULT '0',
  `bg_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#FFFFFF',
  `bg_color1` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#FFFFFF',
  `font_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#000000',
  `font_family` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Tahoma',
  `font_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '12px',
  `menufont_family` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Arial',
  `menufont_size` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT '13px',
  `menufont_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#660000',
  `line_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#660000',
  `image_style` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `menufont_weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bold',
  `headingfont_weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'bold',
  `contentfont_weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `bg_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blank',
  `user_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '123456789.swf',
  `default_bg` int(11) NOT NULL DEFAULT '0',
  `view_pages` double NOT NULL DEFAULT '0',
  `amount_earned` double NOT NULL DEFAULT '0',
  `salutation` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credits` int(11) NOT NULL DEFAULT '0',
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_provider` enum('def','google','facebook','twitter','linkedin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'def',
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `se_users`
--

INSERT INTO `se_users` (`user_id`, `user_gender`, `user_dob`, `user_relationship`, `user_email`, `user_newemail`, `user_fname`, `user_lname`, `age`, `address`, `city`, `country`, `pincode`, `user_username`, `user_password_method`, `user_password`, `user_mobile`, `user_phone`, `user_enabled`, `user_verified`, `user_language_id`, `user_signupdate`, `user_lastlogindate`, `user_lastactive`, `user_ip_signup`, `user_ip_lastactive`, `user_status`, `user_status_date`, `user_logins`, `user_invitesleft`, `user_timezone`, `user_dateupdated`, `user_blocklist`, `user_invisible`, `user_saveviews`, `show_fndfans`, `user_photo`, `user_search`, `user_privacy`, `user_comments`, `parentid`, `lft`, `rgt`, `user_profile_album`, `user_profile_game`, `isDeleted`, `user_profile_photography`, `user_photography_access`, `log_out_time`, `user_hasnotifys`, `bg_color`, `bg_color1`, `font_color`, `font_family`, `font_size`, `menufont_family`, `menufont_size`, `menufont_color`, `line_color`, `image_style`, `menufont_weight`, `headingfont_weight`, `contentfont_weight`, `bg_image`, `user_logo`, `default_bg`, `view_pages`, `amount_earned`, `salutation`, `place`, `credits`, `oauth_uid`, `oauth_provider`, `locale`, `picture`, `created`, `modified`) VALUES
(1, '', NULL, 0, 'fvmfvm.1985@gmail.com', NULL, 'F', 'M', '', '', '', '', '', '', 2, '', '', '', 0, 0, 0, '2021-10-28 15:26:25', 0, 0, '', '', '', 0, 0, 0, '', 0, NULL, 0, 1, 1, 'https://lh', 0, 7, 7, 0, NULL, NULL, 'tab', 'tab', 0, 'tab', 0, 0, 0, '#FFFFFF', '#FFFFFF', '#000000', 'Tahoma', '12px', 'Arial', '13px', '#660000', '#660000', 'default', 'bold', 'bold', 'normal', 'blank', '123456789.swf', 0, 0, 0, NULL, NULL, 0, '', 'def', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'site_name', 'upasarg', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(2, 'brand_name', 'upasarg', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(3, 'contact_number', '080 2632 2012', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(4, 'contact_address', '1st Cross Street, New Bank Colony, Konanakunte, Bengaluru, Karnataka 560062', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(5, 'email_from', 'admin@upasarg.com', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(6, 'reply_to', 'admin@upasarg.com', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(7, 'webmaster_email', 'admin@upasarg.com', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(8, 'facebook', '', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(9, 'twitter', '', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(10, 'instagram', '', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(11, 'whatsapp', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(12, 'linkedin', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(13, 'skype', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(14, 'reddit', '#', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(15, 'youtube', '', '', '127.0.0.1', '', '2021-07-12 23:20:01', '0000-00-00 00:00:00'),
(16, 'smtp_host', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:32:56', '0000-00-00 00:00:00'),
(17, 'smtp_port', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:33:36', '0000-00-00 00:00:00'),
(18, 'smtp_user', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:38:18', '0000-00-00 00:00:00'),
(19, 'smtp_password', '', 'Required only if you need to send the email over SMTP', '127.0.0.1', '', '2021-07-13 10:39:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('verified','unverified') NOT NULL DEFAULT 'unverified',
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `status`, `date_create`, `date_modify`) VALUES
(1, 'upasarg.com@buycodeshop.com', 'unverified', '2021-10-29 17:32:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parent_page` (`id_parent_page`),
  ADD KEY `url_slug` (`url_slug`(191));

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_page` (`id_page`);

--
-- Indexes for table `se_users`
--
ALTER TABLE `se_users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `se_users`
--
ALTER TABLE `se_users`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
