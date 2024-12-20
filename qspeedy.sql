-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 10:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qspeedy`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle_home` varchar(255) NOT NULL,
  `subtitle_about` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle_home`, `subtitle_about`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To Qspeedy Garage', '24/7 Auto Garage In Dubai Investment Park', 'About Us', '<p><span style=\"background-color:rgb(247,247,247);color:rgba(0,0,0,0.557);font-family:&quot;PT Serif&quot;, serif;font-size:18px;\"><span style=\"-webkit-text-stroke-width:0px;display:inline !important;float:none;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:right;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Welcome to Qspeedy, your one-stop destination for comprehensive automotive care! We pride ourselves on offering top-notch services to keep your vehicle running smoothly and looking its best. With a team of experienced technicians and a commitment to excellence, we ensure that every job is done right the first time. Our services include a wide range of auto accessories designed for both style and functionality, tire rotations, balancing, repairs, and replacements, expert roof repair and maintenance, regular oil changes and filter replacements, reliable fleet vehicle maintenance, professional dent repair and painting, comprehensive mechanical repairs, expert electrical system diagnostics and repairs, and specialized Engine Control Unit (ECU) diagnostics and repairs. At Hot Pistonz Garage, we understand the crucial role your vehicle plays in your daily life, which is why we are dedicated to providing exceptional service using the latest tools and technology.</span></span></p>', 'uploads/about_images/about_image-6272821724932260.webp', NULL, '2024-08-29 05:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `map_link` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `slug`, `title`, `address`, `image`, `map_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Al Furjan', 'al-furjan', 'Automotive Services in Al Furjan', '<p>12 Mirpur 10 Roundabout, Dhaka 1216</p>', 'uploads/area_images/area_image-2382751725252784.webp', 'https://maps.app.goo.gl/VRWEi5kGVLEJo7UCA', 1, '2024-09-01 22:48:35', '2024-09-01 22:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `default_media` tinyint(1) DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `video`, `image`, `description`, `default_media`, `status`, `created_at`, `updated_at`) VALUES
(16, 'uploads/banner_videos/banner_video-3348591724926236.mp4', NULL, NULL, 0, 1, '2024-08-29 04:10:36', '2024-08-29 04:10:36'),
(17, 'uploads/banner_videos/banner_video-6373331724926251.mp4', NULL, NULL, 0, 1, '2024-08-29 04:10:51', '2024-08-29 04:10:51'),
(18, 'uploads/banner_videos/banner_video-1352381724926265.mp4', NULL, NULL, 0, 0, '2024-08-29 04:11:05', '2024-08-29 04:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@gmail.com|103.49.203.238', 'i:3;', 1723607120),
('admin@gmail.com|103.49.203.238:timer', 'i:1723607120;', 1723607120),
('admin@gmial.com|103.49.201.161', 'i:2;', 1718179694),
('admin@gmial.com|103.49.201.161:timer', 'i:1718179694;', 1718179694),
('manhalcrafts@gmail.com|103.136.159.92', 'i:3;', 1724237862),
('manhalcrafts@gmail.com|103.136.159.92:timer', 'i:1724237862;', 1724237862),
('manhalcraftsbd@gmai.com|106.0.52.188', 'i:1;', 1718801436),
('manhalcraftsbd@gmai.com|106.0.52.188:timer', 'i:1718801436;', 1718801436);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

CREATE TABLE IF NOT EXISTS `concerns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concerns`
--

INSERT INTO `concerns` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Concern One', 'uploads/concern_images/concern_image-2246561725249993.webp', 1, '2024-09-01 22:06:33', '2024-09-01 22:06:33'),
(3, 'Concern Two', 'uploads/concern_images/concern_image-3335501725250007.jpg', 1, '2024-09-01 22:06:47', '2024-09-01 22:06:47'),
(4, 'Concern Three', 'uploads/concern_images/concern_image-3395571725250022.jpg', 1, '2024-09-01 22:07:02', '2024-09-01 22:07:02'),
(5, 'Concern Four', 'uploads/concern_images/concern_image-9790731725250297.webp', 1, '2024-09-01 22:11:37', '2024-09-01 22:11:37'),
(6, 'Concern Five', 'uploads/concern_images/concern_image-6441651725250321.webp', 1, '2024-09-01 22:12:01', '2024-09-01 22:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`) VALUES
(26, 'Siam', 'siam@gmail.com', '01571767287', 'Dhaka, Bangladesh', 'Hello World!!', '2024-09-02 00:18:46', '2024-09-02 00:18:46'),
(28, 'Velma Kerr', 'myvo@mailinator.com', '43523452345', 'Laudantium ex recus', 'Natus veritatis qui', '2024-09-02 02:26:45', '2024-09-02 02:26:45'),
(29, 'Sybil Estrada', 'pyraqoqu@mailinator.com', '4352345234565', 'Pariatur Nisi venia', 'Exercitation nulla s', '2024-09-02 02:31:13', '2024-09-02 02:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'What types of vehicles do you service?', '<p>We specialize in servicing all types of vehicles, including German cars such as BMW, Mercedes-Benz, Audi, and Volkswagen. However, we also provide comprehensive services for all other makes and models.</p>', 1, '2024-09-01 06:06:27', '2024-09-01 06:06:27'),
(3, 'Do you offer warranty on your services?', '<p>Yes, we offer a warranty on all our services. Please contact us for more details.</p>', 1, '2024-09-01 06:06:51', '2024-09-01 06:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `footergridtwos`
--

CREATE TABLE IF NOT EXISTS `footergridtwos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footergridtwos`
--

INSERT INTO `footergridtwos` (`id`, `name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://127.0.0.1:8000/', 1, '2024-05-18 21:51:23', '2024-05-18 21:51:47'),
(2, 'About', 'http://127.0.0.1:8000/about', 1, '2024-05-18 21:53:31', '2024-05-19 04:12:19'),
(5, 'Call Now', 'http://127.0.0.1:8000/contact', 1, '2024-05-18 21:54:49', '2024-08-29 02:20:05'),
(6, 'Contact Us', 'http://127.0.0.1:8000/contact', 1, '2024-05-18 21:55:09', '2024-05-19 04:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE IF NOT EXISTS `generalsettings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `website_name` varchar(255) NOT NULL,
  `site_icon` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_two` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contact_description` text NOT NULL,
  `address` text NOT NULL,
  `google_map` text NOT NULL,
  `copyright_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `website_name`, `site_icon`, `site_logo`, `email`, `email_two`, `phone`, `description`, `contact_description`, `address`, `google_map`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'Qspeedy Auto Garage', 'uploads/site_icons/site_icon-5449911724913208.png', 'uploads/site_logos/site_logo-5751121724913208.png', 'qspeedy@gmail.com', NULL, '+971 507744680', '#', '<p><span style=\"font-family:Georgia, serif;\"><span style=\"line-height:107%;\">#</span></span></p>', 'Dhaka, Bangladesh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.328095322898!2d90.36612287439348!3d23.80692938660556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d6f6b8c2ff%3A0x3b138861ee9c8c30!2sMirpur%2010%20Roundabout%2C%20Dhaka%201216%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1725258759460!5m2!1sen!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '..', NULL, '2024-09-02 00:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_15_104934_create_generalsettings_table', 1),
(5, '2024_05_16_040953_create_generalsettings_table', 2),
(6, '2024_05_16_062924_create_banners_table', 3),
(7, '2024_05_16_100205_create_welcomes_table', 4),
(8, '2024_05_16_110810_create_offers_table', 5),
(9, '2024_05_16_120036_create_memberships_table', 6),
(10, '2024_05_18_070838_create_latestworks_table', 7),
(11, '2024_05_18_112704_create_commitments_table', 8),
(12, '2024_05_19_032707_create_footergridtwos_table', 9),
(13, '2024_05_19_040110_create_subscribers_table', 10),
(14, '2024_05_19_053629_create_abouts_table', 11),
(15, '2024_05_19_064645_create_believes_table', 12),
(16, '2024_05_19_103925_create_eventpromos_table', 13),
(17, '2024_05_19_112344_create_categories_table', 14),
(18, '2024_05_20_032454_create_materials_table', 15),
(19, '2024_05_20_042855_create_products_table', 16),
(20, '2024_05_20_081136_create_blogs_table', 17),
(21, '2024_05_20_094841_create_contacts_table', 18),
(22, '2024_05_22_033705_create_sociallinks_table', 19),
(23, '2024_05_22_053451_create_blog_views_table', 20),
(24, '2024_09_01_041340_create_services_table', 21),
(25, '2024_09_01_083446_create_serviceimages_table', 22),
(26, '2024_09_01_112502_create_faqs_table', 23),
(27, '2024_09_02_034511_create_concerns_table', 24),
(28, '2024_09_02_041412_create_areas_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serviceimages`
--

CREATE TABLE IF NOT EXISTS `serviceimages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `multi_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceimages`
--

INSERT INTO `serviceimages` (`id`, `service_id`, `multi_image`, `created_at`, `updated_at`) VALUES
(12, 13, 'uploads/service_images/service_multi_image-5979751725186043.jpg', '2024-09-01 04:20:44', '2024-09-01 04:20:44'),
(13, 13, 'uploads/service_images/service_multi_image-2738341725186043.jpg', '2024-09-01 04:20:44', '2024-09-01 04:20:44'),
(14, 14, 'uploads/service_images/service_multi_image-8448761725186178.jpg', '2024-09-01 04:22:58', '2024-09-01 04:22:58'),
(15, 14, 'uploads/service_images/service_multi_image-8229051725186178.jpg', '2024-09-01 04:22:58', '2024-09-01 04:22:58'),
(16, 14, 'uploads/service_images/service_multi_image-6157621725186178.jpg', '2024-09-01 04:22:58', '2024-09-01 04:22:58'),
(17, 14, 'uploads/service_images/service_multi_image-1143991725186178.jpg', '2024-09-01 04:22:58', '2024-09-01 04:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description_top` longtext NOT NULL,
  `description_bottom` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `image`, `description_top`, `description_bottom`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Auto Accessories', 'auto-accessories', 'uploads/service_images/service_image-5119231725186043.webp', '<h4 style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:green;font-family:&quot;New Amsterdam&quot;, sans-serif;font-size:30px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.2;margin:0px 0px 0.5rem;orphans:2;padding:0px;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Welcome To Qspeedy Garage</h4><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgba(0, 0, 0, 0.557);font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 1rem;orphans:2;padding:0px 0px 11px;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Maintaining your vehicle’s engine health is crucial for its longevity and performance, and regular oil and filter changes are a key part of that maintenance. At QSPEEDY Garage, we offer comprehensive auto engine oil and filter services to keep your engine running smoothly and efficiently. Regular oil and filter changes are essential to maintaining the health and performance of your vehicle’s engine. Trust Hot Pistonz Garage to provide expert oil and filter services that keep your car running smoothly. Visit us today or schedule an appointment to give your engine the care it deserves.</p>', '<div class=\"quicktech-p-desp-head\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h2 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:24px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px 0px 20px;\"><strong>Our Auto Engine Oil &amp; Filter Services Include:</strong></h2></div><div class=\"quicktech-desp-section \" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Oil Change Services</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Conventional Oil Change:</strong> Ideal for older or less demanding engines, providing essential lubrication and protection.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Synthetic Blend Oil Change:</strong> A mix of conventional and synthetic oils, offering better performance and protection than conventional oil alone.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Full Synthetic Oil Change:</strong> Provides superior protection and performance, ideal for high-performance and modern engines.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Mileage Oil Change:</strong> Specially formulated for vehicles with over 75,000 miles, helping to reduce oil consumption and minimize leaks.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Oil Filter Replacement</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Standard Oil Filters:</strong> Replace your old filter with a high-quality standard filter to ensure optimal oil flow and engine protection.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Performance Oil Filters:</strong> Designed for high-performance and turbocharged engines, providing enhanced filtration and durability.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Comprehensive Oil System Check</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Level Check:</strong> Ensure your engine has the proper amount of oil.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Condition Inspection:</strong> Check the oil for any signs of contamination or degradation.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Leak Inspection:</strong> Identify and address any potential oil leaks to prevent engine damage.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Additional Engine Services</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Fluid Top-Offs:</strong> Check and top off other essential fluids, such as coolant, brake fluid, and transmission fluid.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Engine Air Filter Replacement:</strong> Replace your engine air filter to ensure clean air intake and optimal engine performance.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">PCV Valve Inspection and Replacement:</strong> Check and replace the Positive Crankcase Ventilation (PCV) valve to maintain proper engine ventilation.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Benefits of Regular Oil &amp; Filter Changes:</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Improved Engine Performance:</strong> Fresh oil reduces friction and wear, allowing your engine to run more smoothly.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Enhanced Fuel Efficiency:</strong> Clean oil helps your engine operate more efficiently, potentially improving gas mileage.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Extended Engine Life:</strong> Regular oil changes help prevent buildup and wear, extending the life of your engine.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Reduced Emissions:</strong> Properly maintained oil and oil filters can help reduce harmful emissions from your vehicle.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Why Choose Qspeedy for Oil &amp; Filter Services?</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Experienced Technicians:</strong> Our skilled technicians have the expertise to perform oil changes and related services on all types of vehicles.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Quality Products:</strong> We use only premium oils and filters to ensure the best protection and performance for your engine.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Quick and Efficient Service:</strong> Our team is committed to providing fast, efficient service to get you back on the road as soon as possible.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Customer Focused:</strong> We prioritize your satisfaction and strive to provide transparent, reliable service every time.</p></li></ul></div>', 1, '2024-09-01 04:20:43', '2024-09-01 04:42:49'),
(14, 'Auto Roof Service', 'auto-roof-service', 'uploads/service_images/service_image-9890181725186178.webp', '<h4 style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:green;font-family:&quot;New Amsterdam&quot;, sans-serif;font-size:30px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;line-height:1.2;margin:0px 0px 0.5rem;orphans:2;padding:0px;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Welcome To Qspeedy Garage</h4><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgba(0, 0, 0, 0.557);font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px 0px 1rem;orphans:2;padding:0px 0px 11px;text-align:center;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Maintaining your vehicle’s engine health is crucial for its longevity and performance, and regular oil and filter changes are a key part of that maintenance. At QSPEEDY Garage, we offer comprehensive auto engine oil and filter services to keep your engine running smoothly and efficiently. Regular oil and filter changes are essential to maintaining the health and performance of your vehicle’s engine. Trust Hot Pistonz Garage to provide expert oil and filter services that keep your car running smoothly. Visit us today or schedule an appointment to give your engine the care it deserves.</p>', '<div class=\"quicktech-p-desp-head\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h2 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:24px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px 0px 20px;\"><strong>Our Auto Engine Oil &amp; Filter Services Include:</strong></h2></div><div class=\"quicktech-desp-section \" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Oil Change Services</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Conventional Oil Change:</strong> Ideal for older or less demanding engines, providing essential lubrication and protection.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Synthetic Blend Oil Change:</strong> A mix of conventional and synthetic oils, offering better performance and protection than conventional oil alone.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Full Synthetic Oil Change:</strong> Provides superior protection and performance, ideal for high-performance and modern engines.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Mileage Oil Change:</strong> Specially formulated for vehicles with over 75,000 miles, helping to reduce oil consumption and minimize leaks.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Oil Filter Replacement</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Standard Oil Filters:</strong> Replace your old filter with a high-quality standard filter to ensure optimal oil flow and engine protection.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Performance Oil Filters:</strong> Designed for high-performance and turbocharged engines, providing enhanced filtration and durability.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Comprehensive Oil System Check</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Level Check:</strong> Ensure your engine has the proper amount of oil.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Condition Inspection:</strong> Check the oil for any signs of contamination or degradation.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Oil Leak Inspection:</strong> Identify and address any potential oil leaks to prevent engine damage.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Additional Engine Services</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Fluid Top-Offs:</strong> Check and top off other essential fluids, such as coolant, brake fluid, and transmission fluid.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Engine Air Filter Replacement:</strong> Replace your engine air filter to ensure clean air intake and optimal engine performance.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">PCV Valve Inspection and Replacement:</strong> Check and replace the Positive Crankcase Ventilation (PCV) valve to maintain proper engine ventilation.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Benefits of Regular Oil &amp; Filter Changes:</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Improved Engine Performance:</strong> Fresh oil reduces friction and wear, allowing your engine to run more smoothly.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Enhanced Fuel Efficiency:</strong> Clean oil helps your engine operate more efficiently, potentially improving gas mileage.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Extended Engine Life:</strong> Regular oil changes help prevent buildup and wear, extending the life of your engine.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Reduced Emissions:</strong> Properly maintained oil and oil filters can help reduce harmful emissions from your vehicle.</p></li></ul></div><div class=\"quicktech-desp-section\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(247, 247, 247);box-sizing:border-box;color:rgb(33, 37, 41);font-family:system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;font-size:16px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:normal;margin:0px;orphans:2;padding:0px 0px 20px;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\"><h3 style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:25px;line-height:1.2;margin:0px 0px 0.5rem;padding:0px;\"><strong>Why Choose Qspeedy for Oil &amp; Filter Services?</strong></h3><ul class=\"quicktech-p-left\" style=\"box-sizing:border-box;list-style:none;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 0px 20px;\"><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Experienced Technicians:</strong> Our skilled technicians have the expertise to perform oil changes and related services on all types of vehicles.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">High-Quality Products:</strong> We use only premium oils and filters to ensure the best protection and performance for your engine.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Quick and Efficient Service:</strong> Our team is committed to providing fast, efficient service to get you back on the road as soon as possible.</p></li><li style=\"box-sizing:border-box;font-family:&quot;PT Serif&quot;, serif;font-size:18px;font-weight:400;margin-bottom:0px;margin-right:0px;margin-top:0px;padding:0px 0px 4px 20px;\"><p style=\"margin-left:0px;\"><strong style=\"box-sizing:border-box;font-weight:bolder;margin:0px;padding:0px;\">Customer Focused:</strong> We prioritize your satisfaction and strive to provide transparent, reliable service every time.</p></li></ul></div>', 1, '2024-09-01 04:22:58', '2024-09-01 04:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QbcYzVfe1rzSullzwAhraxiUgtb6llXQImVweYJZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNDNWNGpoOE5ONHJZQW5QMlV6S2tKVGlvNGRuenA1YThBa3kwUFQ1USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI1MTYyOTI3O319', 1725192983),
('uPLZtByH7Yo6KyoDvS3SKst9g9N1hkQOD35k8h6c', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia2w2MTFQdTI2dm5DNTJrTkY5TDZGOWU2UG1HOUF5cnlockRnSUR3ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI1MjQ4NTM2O319', 1725265877);

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE IF NOT EXISTS `sociallinks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_one` text DEFAULT NULL,
  `link_two` text DEFAULT NULL,
  `link_three` text DEFAULT NULL,
  `link_four` text DEFAULT NULL,
  `link_five` text DEFAULT NULL,
  `link_six` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `link_one`, `link_two`, `link_three`, `link_four`, `link_five`, `link_six`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.tiktok.com/', 'https://www.whatsapp.com/', NULL, NULL, NULL, '2024-08-29 02:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'manhalcraftsbd@gmail.com', NULL, '$2y$12$iPP06PWp1pm1SzaaxXvhBeX4sWG6ezNpFHEErCCArnfhg0Dn8whLK', '01912345678', 'uploads/admin_profile/admin_profile-9834811717665515.jpg', NULL, '2024-05-15 22:41:54', '2024-06-06 03:21:04'),
(2, 'Siam', 'admin@gmail.com', NULL, '$2y$12$WjPGSWG88IZR5Iy65WB7CODkhVNNhGETASdjkWB5an96s3zNd7diG', '01768553823', NULL, NULL, NULL, '2024-08-29 00:27:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
