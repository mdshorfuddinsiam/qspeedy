-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2024 at 07:39 AM
-- Server version: 10.5.27-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qspeedy_maindb`
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
(1, 'QSpeedy Auto Garage', 'The best Auto Garage in Qatar', 'Your Trusted Partner for Exceptional Automotive Care in Doha.', '<p>Your Trusted Partner for Exceptional Automotive Care in Doha.</p>', 'uploads/about_images/about_image-9815261726679406.jpg', NULL, '2024-09-30 21:17:21');

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
(1, 'Q Speedy Auto Garage Location', 'q-speedy-auto-garage-location', 'Automotive Services in Al Furjan', '<p>Building :, 170 Street 18, Doha</p>', 'uploads/area_images/area_image-5152341727381444.jpg', 'https://maps.app.goo.gl/AMc9gDSMTuWwbRFa6', 1, '2024-09-01 22:48:35', '2024-09-27 03:10:44');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `video`, `image`, `description`, `default_media`, `status`, `created_at`, `updated_at`) VALUES
(20, 'uploads/banner_videos/banner_video-4086571728596042.mp4', NULL, NULL, 0, 1, '2024-09-29 16:46:54', '2024-10-11 04:34:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concerns`
--

INSERT INTO `concerns` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Spicy Village Restaurant', 'uploads/concern_images/concern_image-5210441727381088.jpg', 1, '2024-09-01 22:07:02', '2024-09-27 03:04:48'),
(5, 'BD Bazar Supermarket', 'uploads/concern_images/concern_image-8189641727381033.jpg', 1, '2024-09-01 22:11:37', '2024-09-27 03:03:53'),
(6, 'Biye Bari', 'uploads/concern_images/concern_image-1898261727380612.png', 1, '2024-09-01 22:12:01', '2024-09-27 02:56:52'),
(7, 'QS Limusine', 'uploads/concern_images/concern_image-4953131727380563.jpg', 1, '2024-09-25 21:40:48', '2024-09-27 02:56:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `message`, `created_at`, `updated_at`) VALUES
(30, 'Son Vallejo', 'vallejo.son@outlook.com', '859-232-6768', '4000 Carson Street', 'Are you still looking at getting your website done/ completed? Contact e.solus@gmail.com\r\n\r\nStruggling to rank on Google? Our SEO experts can help. Contact es.olus@gmail.com', '2024-10-14 12:56:38', '2024-10-14 12:56:38'),
(31, 'Dometrius Landesque', 'ezesslzesiui@dont-reply.me', '+13052390450', '224 ELMHURST DR', 'I ve no shortage of here on the last time', '2024-11-22 09:18:22', '2024-11-22 09:18:22');

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
(1, 'Home', 'http://qspeedy.com', 1, '2024-05-18 21:51:23', '2024-09-30 22:50:57'),
(2, 'About', 'http://qspeedy.com/about', 1, '2024-05-18 21:53:31', '2024-09-30 22:50:31'),
(5, 'Call Now', 'http://qspeedy.com/contact', 1, '2024-05-18 21:54:49', '2024-09-30 22:50:12'),
(6, 'Contact Us', 'http://qspeedy.com/contact', 1, '2024-05-18 21:55:09', '2024-09-30 22:49:51');

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
(1, 'Qspeedy Auto Garage', 'uploads/site_icons/site_icon-5449911724913208.png', 'uploads/site_logos/site_logo-5751121724913208.png', 'qspeedy@gmail.com', NULL, '+974 7799 2121', '#', '<p><span style=\"font-family:Georgia, serif;\"><span style=\"line-height:107%;\">#</span></span></p>', 'Building :, 170 Street 18, Zone 57. Doha, Qatar', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.328095322898!2d90.36612287439348!3d23.80692938660556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d6f6b8c2ff%3A0x3b138861ee9c8c30!2sMirpur%2010%20Roundabout%2C%20Dhaka%201216%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1725258759460!5m2!1sen!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '..', NULL, '2024-09-30 21:11:10');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serviceimages`
--

INSERT INTO `serviceimages` (`id`, `service_id`, `multi_image`, `created_at`, `updated_at`) VALUES
(20, 17, 'uploads/service_images/service_multi_image-8370921726656425.jpg', '2024-09-18 17:47:05', '2024-09-18 17:47:05'),
(21, 18, 'uploads/service_images/service_multi_image-8647751726675608.jpg', '2024-09-18 23:06:48', '2024-09-18 23:06:48'),
(22, 19, 'uploads/service_images/service_multi_image-9826161726675871.jpg', '2024-09-18 23:11:11', '2024-09-18 23:11:11'),
(23, 20, 'uploads/service_images/service_multi_image-2261561726677282.jpg', '2024-09-18 23:34:43', '2024-09-18 23:34:43'),
(24, 21, 'uploads/service_images/service_multi_image-9121381726677387.jpg', '2024-09-18 23:36:27', '2024-09-18 23:36:27'),
(25, 21, 'uploads/service_images/service_multi_image-2193541726677586.jpg', '2024-09-18 23:39:46', '2024-09-18 23:39:46'),
(26, 22, 'uploads/service_images/service_multi_image-7177681726677668.jpg', '2024-09-18 23:41:08', '2024-09-18 23:41:08'),
(27, 23, 'uploads/service_images/service_multi_image-9741111726677878.jpg', '2024-09-18 23:44:38', '2024-09-18 23:44:38'),
(28, 24, 'uploads/service_images/service_multi_image-392081726677982.jpg', '2024-09-18 23:46:22', '2024-09-18 23:46:22');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `image`, `description_top`, `description_bottom`, `status`, `created_at`, `updated_at`) VALUES
(17, 'AC Servicing', 'ac-servicing', 'uploads/service_images/service_image-4196551726656425.jpg', '<p>Stay cool in Doha\'s heat with our comprehensive AC servicing at Q Speedy Auto Garage. We offer thorough inspections, recharging, and repairs for your vehicle\'s air conditioning system. Our experienced technicians understand the importance of a fully functional AC unit, especially in the hot climate.</p>', '<div class=\"flex max-w-full flex-col flex-grow\"><div class=\"min-h-[20px] text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5\" data-message-author-role=\"assistant\" data-message-id=\"4701bd3f-b1f9-437a-ab16-e0324048162f\" dir=\"auto\"><div class=\"flex w-full flex-col gap-1 empty:hidden first:pt-[3px]\"><div class=\"markdown prose w-full break-words dark:prose-invert light\"><p>During our AC service, we check for leaks, inspect components, and ensure that your system is operating efficiently. With our attention to detail and commitment to quality, we guarantee that you’ll enjoy a comfortable ride, no matter the temperature outside.&nbsp;</p></div></div></div></div><div class=\"mt-1 flex gap-3 empty:hidden -ml-2\"><div class=\"items-center justify-start rounded-xl p-1 flex\"><div class=\"flex items-center\"><span class=\"\" data-state=\"closed\"><button class=\"rounded-lg text-token-text-secondary hover:bg-token-main-surface-secondary\" aria-label=\"Copy\" data-testid=\"copy-turn-action-button\"><span class=\"flex h-[30px] w-[30px] items-center justify-center\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-md-heavy\"><path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z\" fill=\"currentColor\"></path></svg></span></button></span><button class=\"cursor-pointer h-[30px] rounded-md px-1 text-token-text-secondary hover:bg-token-main-surface-secondary\"><div class=\"flex items-center pb-0\"><span class=\"overflow-hidden text-clip whitespace-nowrap text-sm\">4o mini</span></div></button></div></div></div>', 1, '2024-09-18 17:47:05', '2024-09-18 17:47:05'),
(18, 'Auto Electrical', 'auto-electrical', 'uploads/service_images/service_image-7832631726675608.jpg', '<p>When it comes to auto electrical issues, you need a garage you can trust. At QSpeedy Auto Garage, our skilled electricians specialize in diagnosing and fixing a wide range of electrical problems, from battery replacements to complex wiring issues. We pride ourselves on using high-quality parts and the latest diagnostic tools to ensure your vehicle’s electrical system operates flawlessly.</p>', '<p>Whether it’s a malfunctioning alternator, a dead battery, or issues with your lights and sensors, our team is ready to assist. We take the time to explain the problems and solutions clearly, ensuring you feel informed and confident in your vehicle\'s maintenance. Experience top-tier auto electrical service that gets you back on the road safely.</p>', 1, '2024-09-18 23:06:48', '2024-09-18 23:06:48'),
(19, 'Various Denting and Painting', 'various-denting-and-painting', 'uploads/service_images/service_image-5614391726675871.jpg', '<p>Transform your vehicle’s appearance with our exceptional denting and painting services at QSpeedy Auto Garage. Whether your car has suffered minor dings or major dents, our skilled technicians utilize advanced techniques to restore its original look. We combine precision and artistry to ensure your vehicle looks as good as new, all while maintaining the highest standards of quality.</p><p>&nbsp;</p>', '<p>Our painting services offer a perfect blend of aesthetics and durability, using top-grade materials that protect your car from the harsh Qatari environment. Choose from a wide range of colors and finishes to customize your ride. Trust us to bring your vehicle back to life with a flawless finish that turns heads on the road.</p>', 1, '2024-09-18 23:11:11', '2024-09-18 23:11:11'),
(20, 'Oil Changes', 'oil-changes', 'uploads/service_images/service_image-7645581726677282.jpg', '<p>Regular oil changes are crucial for your vehicle’s performance and longevity. At QSpeedy Auto Garage, we make this essential service quick and hassle-free. Our experienced technicians use high-quality oils and filters to ensure your engine runs smoothly and efficiently. We offer a comprehensive inspection during each oil change, identifying potential issues before they become costly repairs.</p><p>&nbsp;</p>', '<p>By choosing QSpeedy for your oil changes, you\'re investing in your vehicle\'s health. Our commitment to customer satisfaction means you’ll receive exceptional service and expert advice tailored to your car’s specific requirements. Keep your engine in top shape and extend its lifespan with our reliable oil change services.</p>', 1, '2024-09-18 23:34:42', '2024-09-18 23:34:42'),
(21, 'Car Polish', 'car-polish', 'uploads/service_images/service_image-7390281726677586.jpg', '<p>Revitalize your vehicle’s exterior with our professional car polishing services at QSpeedy Auto Garage. Our expert detailers utilize advanced polishing techniques and high-quality products to remove scratches, swirl marks, and oxidation, leaving your car with a brilliant shine. A thorough polish not only enhances your vehicle’s appearance but also protects its paintwork from the harsh elements.</p><p>&nbsp;</p>', '<p>Let us help you maintain that showroom shine! Whether you’re preparing for a special occasion or simply want to enjoy driving a pristine vehicle, our car polishing service is tailored to meet your needs. Experience the satisfaction of a gleaming finish that makes your car stand out on the road.</p>', 1, '2024-09-18 23:36:27', '2024-09-18 23:39:46'),
(22, 'Computer Programming', 'computer-programming', 'uploads/service_images/service_image-2865591726677668.jpg', '<p>In today\'s modern vehicles, computer programming is essential for optimal performance. At QSpeedy Auto Garage, our experienced technicians are equipped to handle all your vehicle\'s computer needs. From recalibrating engine management systems to programming new keys and remotes, we ensure your vehicle operates at its best.</p><p>&nbsp;</p>', '<p>With our advanced diagnostic tools, we can quickly identify issues and implement solutions that enhance efficiency and performance. Trust us to keep your car\'s electronic systems up to date and functioning smoothly, so you can enjoy a seamless driving experience.</p>', 1, '2024-09-18 23:41:08', '2024-09-18 23:41:08'),
(23, 'Computer Reset and Checking', 'computer-reset-and-checking', 'uploads/service_images/service_image-5529901726677878.jpg', '<p>Sometimes, your vehicle\'s computer systems may need a reset to function properly. At QSpeedy Auto Garage, we offer comprehensive computer reset and checking services that ensure your car runs smoothly. Our technicians are skilled in diagnosing and resolving software glitches and electronic faults that can impact your vehicle’s performance.</p><p>&nbsp;</p>', '<p>We take a thorough approach, checking all aspects of your vehicle’s computer systems. This service not only enhances performance but also helps avoid future problems, keeping your vehicle reliable and safe. Experience peace of mind knowing your vehicle’s electronic systems are in expert hands.</p>', 1, '2024-09-18 23:44:38', '2024-09-18 23:44:38'),
(24, 'Mechanical', 'mechanical', 'uploads/service_images/service_image-8121861726677982.jpg', '<p>For all your mechanical needs, QSpeedy Auto Garage is your go-to destination. Our skilled mechanics are experienced in a wide range of services, from brake repairs to engine overhauls. We understand the intricacies of automotive mechanics and are dedicated to providing reliable solutions that keep your vehicle in peak condition.</p><p>&nbsp;</p>', '<p>With our commitment to quality workmanship and customer service, you can trust us to address any mechanical issue with precision. We take the time to explain necessary repairs and maintenance, ensuring you’re informed every step of the way. Keep your vehicle performing at its best with our comprehensive mechanical services.</p>', 1, '2024-09-18 23:46:22', '2024-09-18 23:46:22');

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
('227sevxVF8FEuaH5ijBRCqgpUwr2ZFOYpMwjBrou', NULL, '104.152.52.60', 'curl/7.61.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlMzQ0RlV3g4OEFDUEF5ZGdhUm1PVnVtUmNza2ZiWURuOWNvWTdtdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732299465),
('4P17bOUT0lsgoB6EPrkScBKRYXHoi0kByiOK3IaQ', NULL, '51.15.127.131', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlRWaXNac3gyTmY3TXRmdkM1RVdUZmd4U2Z0NnVhRm9lQzhLMXprNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732351686),
('5kLAItPx289rYDXyaWWahmJP3Syn4N5UcrhYle96', NULL, '185.191.171.19', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3liTk4wVnRnUERKbUducEEzMjFab2hKWTFNbW5YVGJKeElDUnlhNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL21lY2hhbmljYWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732318482),
('7CGSwyoQVjU7wppPkHQMn40FxtdUV9nitO2oOkAO', NULL, '185.191.171.10', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmhNN080N3JwU3BJMEtYMVVTN1pZTzRuaEZjaTcxRDVvbzJFT1dSZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732316553),
('8Qnac5jq77etAgXW8XiboDjZIEWMYTy1AVsIcKJT', NULL, '149.56.160.190', 'Mozilla/5.0 (Linux; Android 10; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDN0dmNXTVZDbWRzeVlQZW9zd1AyOWg1Qkl5MUVkeGRUZllCMERHMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly93d3cucXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732343413),
('AAdP3jD2EQ7q4yfgXgzFoyOMndWwn3mtcruK2WHI', NULL, '85.208.96.212', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHZpbkRLRFZ0TGdQOUZ0UXc2bTdVOVVPWEVWTnRyR0xUeDlvOTFCayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL2F1dG8tZWxlY3RyaWNhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732316368),
('bAxPm17669CBqTu4zmtYgfUqOITwUrtFVILEtoNs', NULL, '66.249.74.97', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.85 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHdCRjQzQXcyQ1Q5OEtOaDBOMmRDRTlzYm5SSXBPTHBIdWV0bFdXNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3LnFzcGVlZHkuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732354848),
('CLuMNk8bi9b1qmVQ4d2xqkMePB5EH0ivm1pwivMN', NULL, '182.44.2.148', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUk5BMHZsS3ZGVDVORDRmOEJydnpBNHZFWU9nNlFoYUZ3TXRJN2QzNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732358278),
('ClUnY639SrLl0J9Onuey54J9BHKvucspQX9u7d7s', NULL, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGExQVllYlJSNXdmOFNTSWF1RWtKajdQd29xMWpSYTJoZHFSZ1RaZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL29pbC1jaGFuZ2VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732310488),
('CpywEuVHH6DKpzdvU0F49NthD1fKt6unSoWDAicY', NULL, '162.142.125.38', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWRDWEpMTmZKaWs1TUtxejJ3NmlqcHNUZHBPMXlZMEtteDl5N1BpeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732358518),
('dhMTG9jQHf3xiUxLnPBPIcwfJWjAiCPuEYnE5B93', NULL, '103.96.38.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblllT1FNdktpZWFOYTVTM1Fob1I2dGxoN25NVGR1ZFczOUJOQXM5dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732372693),
('dkbwMLUiudEHFMKnq598M96qj3ws6Su72yVCAstO', NULL, '121.5.231.252', 'Mozilla/5.0 (Linux; Android 10; LIO-AN00 Build/HUAWEILIO-AN00; wv) MicroMessenger Weixin QQ AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/78.0.3904.62 XWEB/2692 MMWEBSDK/200901 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkx5dWhHS0JBMm5ORlczNXFaWHJnSWFLb1YzV1B2cG5icnJrOE1mQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732325028),
('DKRxjNZ9HlPqFMgtBCT5OV7fNTwKvJ07SGnXKqnQ', NULL, '59.34.144.106', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVHJtU3hCVzZrMm90a2VFM3FVWVlWZWNSQ3FIY3NtVHZ1dXEyU1J4RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732322362),
('doR5CapvljwKZbPTC1aUJJfXFe6jGAlTX3JQ4pQI', NULL, '34.57.12.204', 'Go-http-client/1.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzI2VmI3b0w1Y2tSalJMdk1qOTczYUtNZ1dqenM3dlhlbE10ZzFsWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732349923),
('esYSB9iGOHQxJAJI5EYjikSn7MALw37Y9mOFVHQy', NULL, '43.153.119.119', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1R5Snk2eTd6UlRlT1JVa2JmUWNaeWtsSXVRTGpwOFQxUm1DbzNBbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly93d3cucXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732317909),
('GrSoNNuTEgF3V24EPkafsHR1HVDbwRkh1aVnGrb3', NULL, '37.210.221.26', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.6 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVZDQkdldmYyTUt5RGJvQ28xVzMzN2RzWXpqOG1HYUxqWDFlRFpneCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vd3d3LnFzcGVlZHkuY29tL3NlcnZpY2UvZGV0YWlscy9tZWNoYW5pY2FsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732345472),
('gswsoXUATsUGOUeK6f53yz69nfcIKKDhVIDWBFNu', NULL, '50.3.159.80', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1ZSdktic3hwS2o1QU84cmhnUnBWUDFLRVRKM3BoT0hqR0tTUEdiRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9xc3BlZWR5LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732306635),
('io7FV9LG0ZOQaPOQFMY2vJMaACaYapJCCBzLo6Gb', NULL, '85.208.96.211', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTl2NzVmYlNhQ0VIVWF4NTg4NnRmMXo4MkFabFloTnBnQ2Q1TTY3NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL2NvbXB1dGVyLXByb2dyYW1taW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732315935),
('K4iZfPWFK9tKVYYarC81xSLjT8BblIM7kKMI21az', NULL, '138.197.77.33', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDVKQUkxZ2J2RlVlQllUSDNESDd2V1l0Zlo2R2NqUEZGdmhub0ZnWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732364670),
('kLePcgsquxNPAtd8ozWz5gUQUOM9sm8ujxinap4J', NULL, '43.156.228.27', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFhWNUM2QloyN0JYNjNKWEFpSE01VElnd2lIVDFzQ29vd2ZkSkozMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732346349),
('KucvZ9RPxSzDc0hRy4e5wB2fylg2CL8PZXbfaG5c', NULL, '89.211.142.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUF1MzdBSWl3YUJlSzhpNWtlR1loRHVTb1c3bjJ3N3BHU1YxMWtveCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjM6Imh0dHA6Ly93d3cucXNwZWVkeS5jb20vYXJlYS1jb3Zlci9xLXNwZWVkeS1hdXRvLWdhcmFnZS1sb2NhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732350386),
('MA9yT3xNmtBJknTTgPwLDoRbnMgaHbRvdrXV3cDC', NULL, '185.191.171.16', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNndSSVZGbjFXNllQQWFkbnVuTER4a0pNUlJuaXNWRVZrcEpST3Z0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL2Nhci1wb2xpc2giO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732299603),
('nPAAXVyp3Mcouj7BMMjD2iuWL0J21eEQ9HOou3LM', NULL, '85.208.96.205', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFdYQ09mOWVXMXB3TU5WQ2tMUlB2ajRlbWVhaU93WTJ3aHB4TU5YdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vcXNwZWVkeS5jb20vYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732306731),
('nUjG8dCTtVMGQcpqvVWS0Qz35SYAOTNd4yL60Du6', NULL, '85.208.96.203', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGtQZW50aVZFUkJBd3BxeUlqSHZBMGZrdjg3UmRua084dTBMcVVEUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9xc3BlZWR5LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732315311),
('oQGfXEmVu8ay4mho8B3T8WoQ18vtHxq7BQYo2HEe', NULL, '89.211.142.130', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHhibHM4bkF1c3ZTMDBmZnBidVduSG1XbEhuOTFlb2VwMERKSXVRcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9xc3BlZWR5LmNvbS9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732354945),
('ptZTLd8ywgg182KaF0mLTBz13PpbGWzLRILk1gvI', NULL, '85.208.96.195', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEJkS2dZbDdjcW1ubEtiTHJMVGkwSWZpWEVDVlYyV2haV1BVOTJsbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjM6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL2NvbXB1dGVyLXJlc2V0LWFuZC1jaGVja2luZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732316774),
('Q3BOTzyizNCh1QEGz0VcZOD890052O1iOBv7ebIJ', NULL, '185.191.171.8', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXVIZVJUY1V0Wm5rTjh6VW9kOXFKZWpkQlRGaW5lNldSaUR0UEN6MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vcXNwZWVkeS5jb20vY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732327286),
('QH02JvOu77pAznRwlmlOm1QOOSr2oStUfONLP7W3', NULL, '66.249.74.98', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.6778.85 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidW5wcVlDZU1INU5JYVJSdjhJcmo5UHY4bXJsM2VTMFJ0UHVvVW1zTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3LnFzcGVlZHkuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732353197),
('s0WFMRXGq5qqnc0RWNbFwPVIluvCLPnHnniTN1UR', NULL, '138.197.77.33', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3FTdUdKSU1hakkycXM1eXVSRk5IQXRFTFpnMEQ2OW9zTk1MZFF2MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732364670),
('scs4BCpIE2Af83rbdyKpYgYerlFMCURwEr0MqLAi', NULL, '199.45.155.74', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWU3c1F6bGg1NUdpU3k5UnFENnVRa1NwMXN6ZTBzMjZhcmVSa0xYNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732354158),
('TPOmWgkt2GabFYqx5CF6oY3DCBq2DvChTveSv8rM', NULL, '157.245.63.36', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2tPUEI2ZHZmRnpxNW9zcVJCd2RlYmVCYjJFa1R2RU94RFpIWDJoaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732333060),
('x7YLnOXFdOPHMICFCAaWpXHwiF7UckVM7W40Ai7t', NULL, '185.191.171.9', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmN4M05xVTZXcU42SnNRaGEzak94STkyek5qNk1iMTVMd1lhNVVsTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHBzOi8vcXNwZWVkeS5jb20vc2VydmljZS9kZXRhaWxzL3ZhcmlvdXMtZGVudGluZy1hbmQtcGFpbnRpbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732301046),
('xap3jcYYawuIkeb0W4q2Rke1WAioOwpd3FKmOxFl', NULL, '149.56.160.193', 'Mozilla/5.0 (compatible; Dataprovider.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXdqMnV2emhsbUQzQ0lGaEpqaUdHeXNhOFh1YWlrdmhhOVM0RXFFZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly93d3cucXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732343434),
('XktVpX4iYtRCaNRNOArQnXCb31nOBsayOYxpaFhm', NULL, '54.224.223.231', 'Iframely/1.3.1 (+https://iframely.com/docs/about) Canva', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjhxU3VQOFhWdVZQcWs4RDVkTWdiTENBVlk2VWhMMXdYamhncDJKayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTk6Imh0dHBzOi8vcXNwZWVkeS5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732368997),
('xTh1eucPI8Sj0GMBje5Jqt9pxd0pMuvN5XGVmzJW', NULL, '85.208.96.199', 'Mozilla/5.0 (compatible; SemrushBot/7~bl; +http://www.semrush.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGhOTDV2QUo4cGFoUWR1TkU3QXVmTFVIZjZIZjFVUkZIVFpOUjNKaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTg6Imh0dHA6Ly9xc3BlZWR5LmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732303352),
('ya2iCGhtx7Flu1d29Jn8PI2AjLtkfpwbuAseSu4I', NULL, '149.56.160.190', 'Mozilla/5.0 (compatible; Dataprovider.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWo5VnVaWXdjSjFJdmFpS1U5TmFkdm5DRm5TeWlvVXQ2ZGpJR3FrdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vd3d3LnFzcGVlZHkuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732343404);

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
(1, 'https://www.facebook.com/qspeedyautogarage', 'https://www.instagram.com/qspeedyautogarage?igsh=MWFtbGptbzRuZTVtdg==', 'https://vt.tiktok.com/ZS2s6SfXh/', 'http://wa.me/97477992121', NULL, NULL, NULL, '2024-09-30 21:09:08');

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
