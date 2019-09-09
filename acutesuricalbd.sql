-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2018 at 10:00 AM
-- Server version: 10.2.16-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acutesur_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_row_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_long_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `has_child` int(11) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `level` int(11) DEFAULT NULL,
  `count_product` int(11) DEFAULT NULL,
  `category_sort_order` int(11) DEFAULT NULL,
  `meta_key` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_row_id`, `category_name`, `category_image`, `category_short_description`, `category_long_description`, `parent_id`, `has_child`, `is_featured`, `level`, `count_product`, `category_sort_order`, `meta_key`, `meta_description`, `created_at`, `updated_at`) VALUES
(18, 'Infection Control', 'me1.png', 'Infection Control', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2018-07-12 20:47:06', '2018-07-12 20:47:06'),
(19, 'Medical Supplies', 'me2.png', 'Medical Supplies', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2018-07-12 20:47:19', '2018-07-12 20:47:19'),
(20, 'Surgical Supplies', 'me.png', 'Surgical Supplies', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2018-07-12 20:47:32', '2018-07-12 20:47:32'),
(21, 'Medical Equipment', 'me2.png', 'Medical Equipment', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, NULL, '2018-07-12 20:47:45', '2018-07-12 20:47:45'),
(22, 'CIDEX', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 23:18:44', '2018-07-12 23:18:44'),
(23, 'SHARPS CONTAINERS', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:17:21', '2018-07-12 21:17:21'),
(24, 'DISINFECTANT WIPES', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:17:30', '2018-07-12 21:17:30'),
(25, 'HAND HYGIENE', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:18:07', '2018-07-12 21:18:07'),
(26, 'STERILIZATION', NULL, 'STERILIZATION', NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:09:58', '2018-07-12 21:09:58'),
(27, 'INSTRUMENT CLEANERS', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:17:59', '2018-07-12 21:17:59'),
(28, 'HIGH-LEVEL DISINFECTANTS', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:17:52', '2018-07-12 21:17:52'),
(29, 'DISINFECTANT SPRAYS', NULL, NULL, NULL, 18, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:17:43', '2018-07-12 21:17:43'),
(30, 'ECG ELECTRODES', NULL, NULL, NULL, 19, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:19:08', '2018-07-12 21:19:08'),
(31, 'EXAM ROOM SUPPLIES', NULL, NULL, NULL, 19, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:18:59', '2018-07-12 21:18:59'),
(32, 'IV PRODUCTS', NULL, NULL, NULL, 19, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:18:53', '2018-07-12 21:18:53'),
(33, 'SAFETY AND EMERGENCY', NULL, NULL, NULL, 19, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:18:45', '2018-07-12 21:18:45'),
(34, 'NEEDLES AND SYRINGES', NULL, NULL, NULL, 19, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:18:36', '2018-07-12 21:18:36'),
(35, 'Skin Preparation', NULL, NULL, NULL, 20, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:28', '2018-07-12 21:20:28'),
(36, 'Surgical Blades', NULL, NULL, NULL, 20, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:36', '2018-07-12 21:20:36'),
(37, 'Surgical Forceps', NULL, NULL, NULL, 20, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:45', '2018-07-12 21:20:45'),
(38, 'Suture Removal Kits', NULL, NULL, NULL, 20, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:58', '2018-07-12 21:20:58'),
(39, 'Surgical Scissors', NULL, NULL, NULL, 20, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:21:06', '2018-07-12 21:21:06'),
(40, 'Aspirator Pumps', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:11', '2018-07-12 21:20:11'),
(41, 'Carts', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:20:18', '2018-07-12 21:20:18'),
(42, 'IV Poles', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:19:56', '2018-07-12 21:19:56'),
(43, 'Mayo Stands', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:19:41', '2018-07-12 21:19:41'),
(44, 'Medical Weight Scales', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:19:33', '2018-07-12 21:19:33'),
(45, 'Electrosurgery', NULL, NULL, NULL, 21, NULL, 0, 2, NULL, NULL, NULL, NULL, '2018-07-12 21:19:23', '2018-07-12 21:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `division_id` int(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `full_name`, `short_name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '01', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(2, 'Rajshahi', '02', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(3, 'Khulna', '03', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(4, 'Chittagong', '04', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(5, 'Barisal', '05', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(6, 'Sylhet', '06', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(7, 'Rangpur', '07', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(8, 'Manikgonj', '08', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(9, 'Gazipur', '09', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(10, 'Mymensingh', '10', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(11, 'Narayanganj', '11', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(12, 'Tangail', '12', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(13, 'Madaripur', '13', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(14, 'Jamalpur', '14', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(15, 'Munshiganj', '15', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(16, 'Gopalganj', '16', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(17, 'Sherpur', '17', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(18, 'Kishoreganj', '18', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(19, 'Narsingdi', '19', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(20, 'Shariatpur', '20', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(21, 'Netrokona', '21', 8, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(22, 'Rajbari', '22', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(23, 'Faridpur', '23', 1, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(24, 'Bogra', '24', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(25, 'Joypurhat', '25', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(26, 'Naogaon', '26', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(27, 'Natore', '27', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(28, 'Chapai Nawabganj', '28', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(29, 'Pabna', '29', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(30, 'Sirajganj', '30', 3, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(31, 'Shatkhira', '31', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(32, 'Bagerhat', '32', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(33, 'Jessore', '33', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(34, 'Narail', '34', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(35, 'Magura', '35', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(36, 'Jhenaidah', '36', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(37, 'Chuadanga', '37', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(38, 'Kushtia', '38', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(39, 'Meherpur', '39', 4, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(40, 'Bandarban', '40', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(41, 'Rangamati', '41', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(42, 'Khagrachari', '42', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(43, 'Cox\'s Bazar', '43', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(44, 'Feni', '44', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(45, 'Noakhali', '45', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(46, 'Lakshmipur', '46', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(47, 'Comilla', '47', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(48, 'Brahmanbaria', '48', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(49, 'Chandpur', '49', 2, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(50, 'Barguna', '50', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(51, 'Bhola', '51', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(52, 'Jhalokati', '52', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(53, 'Patuakhali', '53', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(54, 'Pirojpur', '54', 5, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(55, 'Maulvi Bazar', '55', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(56, 'Habiganj', '56', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(57, 'Sunamgonj', '57', 6, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(58, 'Dinajpur', '58', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(59, 'Gaibandha', '59', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(60, 'Kurigram', '60', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(61, 'Lalmonirhat', '61', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(62, 'Nilphamari', '62', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(63, 'Panchagarh', '63', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00'),
(64, 'Thakurgaon', '64', 7, '2014-10-29 00:00:00', '2014-10-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_row_id` int(11) NOT NULL,
  `product_row_id` int(11) NOT NULL,
  `tracking_number` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_price` float(8,2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_total_price` float(8,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_row_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_name_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_price` float(8,2) DEFAULT NULL,
  `product_height` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_width` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_weight` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_row_id` int(11) DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_latest` tinyint(1) DEFAULT 0,
  `video` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_short_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_long_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_row_id`, `product_name`, `product_name_url`, `product_price`, `product_height`, `product_width`, `product_weight`, `category_row_id`, `product_sku`, `product_image`, `product_image_1`, `product_image_2`, `is_featured`, `is_latest`, `video`, `product_short_description`, `product_long_description`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(51, 'DIAL ANTIMICROBIAL LIQUID HAND SOAP-ORIGINAL GOLD', NULL, 300.00, NULL, NULL, NULL, 25, NULL, '1531461842Dial_1.jpg', '1531461842Dial_2.jpg', '1531461842Dial_3.jpg', 0, 0, 'https://www.youtube.com/embed/gC3TUC5Jh8A', 'Get a clean you can trust, in a hand soap that\'s the gold standard for antibacterial protection. This refreshingly scented hand soap with moisturizer removes dirt and germs and rinses clean.', NULL, 8, 8, '2018-07-12 23:26:39', '2018-07-13 10:04:02'),
(52, 'ASPEN SURGICAL/BARD-PARKER SAFETY SCALPELS WITH LONG HANDLE', NULL, 1000.00, NULL, NULL, NULL, 36, NULL, '1531462049i17392.jpg', '1531462049984.jpg', '1531462049ref37.jpg', 0, 1, 'https://www.youtube.com/embed/7ZD3jI5ZtAY', 'Intended for tissue separation, and other procedures that require a sharp surgical blade to puncture or cut Easy one hand activation, can be used with either right or left handed person Helps your facility to comply with OSHA and federal safety legislation The blade remains covered during both assembly and disposal to help prevent accidental contact with the blade Not made with natural rubber latex Sterile', NULL, 8, 8, '2018-07-12 23:59:16', '2018-07-13 10:07:29'),
(53, 'ASPEN SURGICAL/BARD-PARKER CARBON STEEL', NULL, 1050.00, NULL, NULL, NULL, 22, NULL, '1531460856i05.jpg', '1531460856371__.jpg', '15314608563711.jpg', 1, 0, NULL, 'Intended for tissue separation, and other procedures that require a sharp surgical blade to puncture or cut.\r\nOffers the superior cutting advantages of carbon steel technology, plus the exclusive Rib-Back® blade design for greater strength and control.\r\nConsistent sharpness, control and strength surgeons demand.\r\nUniquely packaged for safety and ease of use', NULL, 8, 8, '2018-07-13 00:10:11', '2018-07-13 09:47:36'),
(54, 'EXEL STAINLESS STEEL DISPOSABLE SCALPELS STERILE', NULL, 1100.00, NULL, NULL, NULL, 36, NULL, '153146140201-.jpg', '1531461402EX.jpg', '1531461402Exe.jpg', 0, 1, NULL, 'Made from premium quality British Stainless Steel.\r\nComputer controlled grinding, sharpening and polishing, ensures consistently smooth incision properties.\r\nSterilized by GAMMA radiation 2.5 - RADS.\r\nA Vapor Corrosion Inhibitor (VCI) paper lining, leakage testing, and an aluminum foil peal pack help insure quality and integrity when ready for use', NULL, 8, 8, '2018-07-13 09:56:42', '2018-07-13 09:56:42'),
(55, 'DIAL ANTIMICROBIAL LIQUID HAND SOAP SENSITIVE SKIN', NULL, 350.00, NULL, NULL, NULL, 25, NULL, '1531485927Dial_.jpg', '1531485927ap.jpg', '153148592741g_.jpg', 0, 0, NULL, 'Broad spectrum antimicrobial effectiveness. Extra mild, and formulated for very frequent hand washing. Hypoallergenic and dermatologist-tested for sensitive skin.', NULL, 8, 8, '2018-07-13 15:15:34', '2018-07-13 16:45:27'),
(56, 'COVIDIEN CURITY SUTURE REMOVAL KIT', NULL, 800.00, NULL, NULL, NULL, 38, NULL, '1531482312jp.jpg', '1531482312doc.jpg', '1531482312Covidien.jpg', 0, 1, NULL, 'Suture removal kit with quality instruments in a convenient, sterile package to save the nursing staff time and reduce inventory.', NULL, 8, 8, '2018-07-13 15:45:12', '2018-07-13 15:45:12'),
(57, 'DUKAL SUTURE REMOVAL KIT', NULL, 400.00, NULL, NULL, NULL, 38, NULL, '1531483030CAK.gif', '1531483030Du.jpg', '1531483030doc3.jpg', 1, 0, NULL, 'A single-use kit that includes everything needed for safe and sanitary removal of sutures.\r\nThis kit includes Littauer scissors, plastic forceps, and gauze pad.\r\nEasy to open peel back lid.\r\nSterile', NULL, 8, 8, '2018-07-13 15:57:10', '2018-07-13 15:57:10'),
(58, 'ADC CRILE HEMOSTATIC FORCEPS CURVED', NULL, 800.00, NULL, NULL, NULL, 37, NULL, '1531483850hal.jpg', '1531483850kelly.jpg', '1531483850ADC_.jpg', 0, 1, NULL, 'Forged from corrosion resistant 420 surgical stainless steel.\r\nFloor grade.\r\nTraditional Crile hemostat design with serrated jaws and locking handle.\r\nAutoclavable', NULL, 8, 8, '2018-07-13 16:10:50', '2018-07-13 16:10:50'),
(59, 'EXEL 1 CC TUBERCULIN SYRINGE WITH NEEDLE', NULL, 500.00, NULL, NULL, NULL, 34, NULL, '1531485496syringe.jpg', '15314854963ml.jpg', '1531485496Exel_1.jpg', 1, 0, NULL, '1 cc Tuberculin syringes with detachable needles\r\nSmooth plunger action for greater filling accuracy\r\nLow dead space plunger for reduced medication waste', NULL, 8, 8, '2018-07-13 16:25:24', '2018-07-13 16:38:16'),
(60, 'TUBERCULIN SYRINGE 1CC', NULL, 450.00, NULL, NULL, NULL, 34, NULL, '1531485294xmo.jpg', '1531485294exel-.jpg', '1531485294teru.gif', 1, 0, 'https://www.youtube.com/embed/3H8mRIEtG40', '1 cc Tuberculin syringe.\r\nSyringe only, needles are not included.\r\nSmooth plunger action for greater filling accuracy', NULL, 8, 8, '2018-07-13 16:34:54', '2018-07-13 16:34:54'),
(61, 'OXYWATCH FINGERTIP PULSE OXIMETER', NULL, 2000.00, NULL, NULL, NULL, 41, NULL, '15314865162012.jpg', '1531486516cb3.png', '1531486516AD109.jpg', 1, 0, 'https://www.youtube.com/embed/irVEYvEIb6o', 'MD300CB3 is a very important and common device to check oxygen saturation (SpO2) and pulse rate. As a small, compact, simple, reliable and durable physiological monitoring device, Fingertip pulse oximeter is widely applied in clinic, hospital, social medical organization, first aid and homecare etc.', NULL, 8, 8, '2018-07-13 16:55:16', '2018-07-13 16:55:16'),
(62, 'Quatripod Walking Stick', NULL, 1000.00, NULL, NULL, NULL, 32, NULL, '1531487380walk.jpg', '1531487380ty.jpg', '1531487380GHK.jpg', 1, 0, NULL, 'Stability And Ergonomic Design, Freedom Of Self-Movement With Durable Yet Light Weight Walking Supports, Ideal For Patients Suffering From Walking Disability, Recovering From Surgery, Durable Abs Plastic Handles And Impact Bush Ensures Stability And Logitivity, The Colour And Dimentions May Slightly Vary Depending On Availability', NULL, 8, 8, '2018-07-13 17:09:40', '2018-07-13 17:09:40'),
(63, 'Omron Blood Pressure Monitor', NULL, 1500.00, NULL, NULL, NULL, 43, NULL, '153148843853.jpg', '1531488438BP7.jpg', '1531488438Om.jpg', 1, 0, 'https://www.youtube.com/embed/_dIpzHeE7l8', 'HEM-7203 BP monitor has a movement indicator that prevents possible measurement errors. It offers easy and simple operating system with a one-touch operation which provides a hassle-free operating system and has 21 reading memory with an average function for the last 3 readings. Measurement Method oscillometric Method, Measurement Range Pressure(mmHg) (Min) 0 mmHg, Measurement Accuracy Pressure(mmHg) ±3 mmHg, Measurement Range Pressure(mmHg) (Max) 299 mmHg, Measurement Range Pulse(beats/min) (Min) 40 beats/min, Measurement Range Pulse(beats/min) (Max) 180 beats/min, Measurement Accuracy Pulse(% of reading) ±5 % of reading.', NULL, 8, 8, '2018-07-13 17:21:06', '2018-07-13 17:27:18'),
(64, 'Omron Blood Glucose Monitoring Kit', NULL, 1000.00, NULL, NULL, NULL, 45, NULL, '1531488746ima.jpg', '1531488746omr.jpg', '1531488746000.jpeg', 1, 0, 'https://www.youtube.com/embed/9mn2_6zKTxE', 'Measurement Range: 20-60 mg/dl, Measuring Unit: mg/dl, mmol/L, Blood Sample Volume: 1µl, Memory: 512, Auto Coding, Large LCD for easy display, Easy Test Steps, Fast Measurement Time for 5 Seconds, Display Average for 7,14 and 30 days.', NULL, 8, 8, '2018-07-13 17:32:26', '2018-07-13 17:32:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `image_id` int(11) NOT NULL,
  `product_row_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) UNSIGNED NOT NULL,
  `product_row_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_orders`
--

CREATE TABLE `temp_orders` (
  `temp_order_row_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_row_id` int(11) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `product_price` float(8,2) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_total_price` float(8,2) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_orders`
--

INSERT INTO `temp_orders` (`temp_order_row_id`, `user_id`, `product_row_id`, `product_image`, `tracking_number`, `product_price`, `product_qty`, `product_total_price`, `payment_method`, `created_at`, `updated_at`) VALUES
(45, 7, 53, '1531460856i05.jpg', '0WEFByKdcpGg6CS2kLN0CL9scwsZVjbpz5XPyCs2', 850.00, 1, 850.00, NULL, '2018-07-13 11:37:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upazila`
--

INSERT INTO `upazila` (`id`, `full_name`, `short_name`, `code`, `district_id`, `createdAt`, `updatedAt`) VALUES
(1, 'DCC North', '01', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(2, 'DCC South', '02', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(3, 'Dhamrai', '03', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(4, 'Dohar', '04', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(5, 'Keraniganj', '05', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(6, 'Nawabganj', '06', 200, 1, '2014-09-14 19:33:23', '2014-09-14 19:33:23'),
(7, 'Savar', '07', 200, 1, '2014-10-17 04:15:47', '2014-10-17 04:15:47'),
(8, 'Gazipur Sadar', '01', 18, 9, '2014-10-17 06:00:43', '2014-10-17 06:00:43'),
(12, 'Kaliakair', '02', 200, 9, '2014-10-27 21:48:37', '2014-10-27 21:48:37'),
(13, 'Kaliganj', '03', 200, 9, '2014-10-27 21:49:39', '2014-10-27 21:49:39'),
(14, 'Kapasia', '04', 200, 9, '2014-10-27 21:50:06', '2014-10-27 21:50:06'),
(15, 'Sreepur', '05', 200, 9, '2014-10-27 21:50:48', '2014-10-27 21:50:48'),
(16, 'Tangail Sadar', '06', 200, 12, '2014-10-27 21:52:01', '2014-10-27 21:52:01'),
(17, 'Gopalpur', '07', 200, 12, '2014-10-27 21:52:30', '2014-10-27 21:52:30'),
(18, 'Basail', '08', 200, 12, '2014-10-27 21:53:02', '2014-10-27 21:53:02'),
(19, 'Basail', '09', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bhuapur', '10', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Delduar', '11', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Ghatail', '12', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Kalihati', '13', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Madhupur', '14', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Mirzapur', '15', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Nagarpur', '16', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Sakhipur', '17', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Dhanbari', '18', 200, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Astagram', '25', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Bajitpur', '26', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Bhairab', '27', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Hossainpur', '28', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Itna', '29', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Karimganj', '30', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Katiadi', '31', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Kishoreganj Sadar', '33', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Kuliarchar', '34', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Mithamain', '35', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Nikli', '36', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Pakundia', '37', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Tarail', '38', 200, 18, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Araihazar', '01', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Bandar', '02', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Narayanganj Sadar', '03', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Rupganj', '04', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Sonargaon', '05', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Fatullah', '06', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Siddhirganj', '07', 200, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Daulatpur', '14', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Ghior', '09', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Harirampur', '10', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Manikgonj Sadar', '11', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Saturia', '12', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Shivalaya', '13', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Singair', '08', 200, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Narsingdi Sadar', '15', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Belabo', '16', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Monohardi', '17', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Palash', '18', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Raipura', '19', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Shibpur', '20', 200, 19, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Gazaria', '21', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Lohajang', '22', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Munshiganj Sadar', '23', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Sirajdikhan', '24', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Sreenagar', '25', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Tongibari', '26', 200, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Ajmiriganj', '01', 1, 56, '2014-10-28 15:21:56', '2014-10-28 15:21:56'),
(69, 'Bahubal', '02', 200, 56, '2014-10-28 15:24:32', '2014-10-28 15:24:32'),
(70, 'Baniyachong', '03', 200, 56, '2014-10-28 15:25:21', '2014-10-28 15:25:21'),
(71, 'Chunarughat', '04', 200, 56, '2014-10-28 15:25:58', '2014-10-28 15:25:58'),
(72, 'Habiganj Sadar', '05', 200, 56, '2014-10-28 15:26:31', '2014-10-28 15:26:31'),
(73, 'Lakhai', '06', 200, 56, '2014-10-28 15:27:07', '2014-10-28 15:27:07'),
(74, 'Madhabpur', '07', 200, 56, '2014-10-28 15:27:40', '2014-10-28 15:27:40'),
(75, 'Nabiganj', '08', 200, 56, '2014-10-28 15:28:23', '2014-10-28 15:28:23'),
(76, 'Barlekha', '09', 200, 55, '2014-10-28 15:29:09', '2014-10-28 15:29:09'),
(77, 'Kamalganj', '10', 200, 55, '2014-10-28 15:29:59', '2014-10-28 15:29:59'),
(78, 'Kulaura', '11', 200, 55, '2014-10-28 15:30:30', '2014-10-28 15:30:30'),
(79, 'Moulvibazar Sadar', '12', 200, 55, '2014-10-28 15:31:01', '2014-10-28 15:31:01'),
(80, 'Rajnagar', '13', 200, 55, '2014-10-28 15:31:40', '2014-10-28 15:31:40'),
(81, 'Sreemangal', '14', 200, 55, '2014-10-28 15:35:51', '2014-10-28 15:35:51'),
(82, 'Juri', '15', 200, 55, '2014-10-28 15:36:21', '2014-10-28 15:36:21'),
(83, 'Bishwamvarpur', '16', 200, 57, '2014-10-28 15:38:01', '2014-10-28 15:38:01'),
(84, 'Chhatak', '17', 200, 57, '2014-10-28 15:38:42', '2014-10-28 15:38:42'),
(85, 'Derai', '18', 200, 57, '2014-10-28 15:39:17', '2014-10-28 15:39:17'),
(86, 'Dharampasha', '19', 200, 57, '2014-10-28 15:39:52', '2014-10-28 15:39:52'),
(87, 'Dowarabazar', '20', 200, 57, '2014-10-28 15:40:25', '2014-10-28 15:40:25'),
(88, 'Jagannathpur', '21', 200, 57, '2014-10-28 15:41:07', '2014-10-28 15:41:07'),
(89, 'Jamalganj', '22', 200, 57, '2014-10-28 15:43:05', '2014-10-28 15:43:05'),
(90, 'Sullah', '23', 200, 57, '2014-10-28 15:44:07', '2014-10-28 15:44:07'),
(91, 'Sunamganj	Sadar', '24', 200, 57, '2014-10-28 15:45:59', '2014-10-28 15:45:59'),
(92, 'Tahirpur', '25', 200, 57, '2014-10-28 15:46:38', '2014-10-28 15:46:38'),
(93, 'South Sunamganj', '26', 200, 57, '2014-10-28 15:47:28', '2014-10-28 15:47:28'),
(94, 'Balaganj', '27', 200, 6, '2014-10-28 15:48:54', '2014-10-28 15:48:54'),
(95, 'Beanibazar', '28', 200, 6, '2014-10-28 15:49:42', '2014-10-28 15:49:42'),
(96, 'Bishwanath', '29', 200, 6, '2014-10-28 15:50:10', '2014-10-28 15:50:10'),
(97, 'Companigonj', '30', 200, 6, '2014-10-28 15:50:46', '2014-10-28 15:50:46'),
(98, 'Fenchuganj', '31', 200, 6, '2014-10-28 15:51:11', '2014-10-28 15:51:11'),
(99, 'Golapganj', '32', 200, 6, '2014-10-28 15:51:51', '2014-10-28 15:51:51'),
(100, 'Gowainghat', '33', 200, 6, '2014-10-28 15:52:55', '2014-10-28 15:52:55'),
(101, 'Jaintiapur', '34', 200, 6, '2014-10-28 15:53:31', '2014-10-28 15:53:31'),
(102, 'Kanaighat', '35', 200, 6, '2014-10-28 15:54:04', '2014-10-28 15:54:04'),
(103, 'Sylhet Sadar', '36', 200, 6, '2014-10-28 15:54:48', '2014-10-28 15:54:48'),
(104, 'Zakiganj', '37', 200, 6, '2014-10-28 15:55:15', '2014-10-28 15:55:15'),
(105, 'South Shurma', '38', 200, 6, '2014-10-28 15:55:45', '2014-10-28 15:55:45'),
(106, 'Birampur', '01', 9, 58, '2014-10-28 16:05:32', '2014-10-28 16:05:32'),
(107, 'Birganj', '02', 9, 58, '2014-10-28 16:06:19', '2014-10-28 16:06:19'),
(108, 'Biral', '03', 9, 58, '2014-10-28 16:06:50', '2014-10-28 16:06:50'),
(109, 'Bochaganj', '04', 9, 58, '2014-10-28 16:07:26', '2014-10-28 16:07:26'),
(110, 'Chirirbandar', '05', 9, 58, '2014-10-28 16:08:44', '2014-10-28 16:08:44'),
(111, 'Phulbari', '06', 9, 58, '2014-10-28 16:12:01', '2014-10-28 16:12:01'),
(112, 'Ghoraghat', '07', 9, 58, '2014-10-28 16:12:39', '2014-10-28 16:12:39'),
(113, 'Hakimpur', '08', 900, 58, '2014-10-28 16:13:34', '2014-10-28 16:13:34'),
(114, 'Kaharole', '09', 900, 58, '2014-10-28 16:14:08', '2014-10-28 16:14:08'),
(115, 'Khansama', '10', 900, 58, '2014-10-28 16:14:38', '2014-10-28 16:14:38'),
(116, 'Dinajpur Sadar', '11', 900, 58, '2014-10-28 16:15:11', '2014-10-28 16:15:11'),
(117, 'Nawabganj', '12', 900, 58, '2014-10-28 16:15:43', '2014-10-28 16:15:43'),
(118, 'Parbatipur', '13', 900, 58, '2014-10-28 16:16:10', '2014-10-28 16:16:10'),
(119, 'Phulchhari', '14', 900, 59, '2014-10-28 16:16:53', '2014-10-28 16:16:53'),
(120, 'Gaibandha Sadar', '15', 900, 59, '2014-10-28 16:17:38', '2014-10-28 16:17:38'),
(121, 'Gobindaganj', '16', 900, 59, '2014-10-28 16:18:23', '2014-10-28 16:18:23'),
(122, 'Palashbari', '17', 900, 59, '2014-10-28 16:19:04', '2014-10-28 16:19:04'),
(123, 'Sadullapur', '18', 900, 59, '2014-10-28 16:19:31', '2014-10-28 16:19:31'),
(124, 'Sughatta', '19', 900, 59, '2014-10-28 16:20:03', '2014-10-28 16:20:03'),
(125, 'Sundarganj', '20', 900, 59, '2014-10-28 16:20:43', '2014-10-28 16:20:43'),
(126, 'Badarganj', '21', 900, 7, '2014-10-28 16:21:27', '2014-10-28 16:21:27'),
(127, 'Gangachhara', '22', 900, 7, '2014-10-28 16:21:56', '2014-10-28 16:21:56'),
(128, 'Kaunia', '23', 900, 7, '2014-10-28 16:22:35', '2014-10-28 16:22:35'),
(129, 'Rangpur Sadar', '24', 900, 7, '2014-10-28 16:23:05', '2014-10-28 16:23:05'),
(130, 'Mithapukur', '25', 900, 7, '2014-10-28 16:23:31', '2014-10-28 16:23:31'),
(131, 'Pirgachha', '26', 900, 7, '2014-10-28 16:23:59', '2014-10-28 16:23:59'),
(132, 'Pirganj', '27', 900, 7, '2014-10-28 16:24:27', '2014-10-28 16:24:27'),
(133, 'Taraganj', '28', 900, 7, '2014-10-28 16:24:53', '2014-10-28 16:24:53'),
(134, 'Baliadangi', '29', 900, 64, '2014-10-28 16:25:31', '2014-10-28 16:25:31'),
(135, 'Haripur', '30', 900, 64, '2014-10-28 16:26:00', '2014-10-28 16:26:00'),
(136, 'Pirganj', '31', 900, 64, '2014-10-28 16:26:29', '2014-10-28 16:26:29'),
(137, 'Ranisankail', '32', 900, 64, '2014-10-28 16:27:04', '2014-10-28 16:27:04'),
(138, 'Thakurgaon Sadar', '33', 900, 64, '2014-10-28 16:27:39', '2014-10-28 16:27:39'),
(139, 'Bhurungamari', '01', 100, 60, '2014-10-28 16:40:52', '2014-10-28 16:40:52'),
(140, 'Char	 Rajibpur', '02', 100, 60, '2014-10-28 16:41:57', '2014-10-28 16:41:57'),
(141, 'Chilmari', '03', 100, 60, '2014-10-28 16:42:33', '2014-10-28 16:42:33'),
(142, 'Phulbari', '04', 100, 60, '2014-10-28 16:43:18', '2014-10-28 16:43:18'),
(143, 'Kurigram	Sadar', '05', 100, 60, '2014-10-28 16:44:02', '2014-10-28 16:44:02'),
(144, 'Nageshwari', '06', 100, 60, '2014-10-28 16:44:37', '2014-10-28 16:44:37'),
(145, 'Rajarhat', '07', 100, 60, '2014-10-28 16:45:20', '2014-10-28 16:45:20'),
(146, 'Raomari', '08', 100, 60, '2014-10-28 16:45:51', '2014-10-28 16:45:51'),
(147, 'Ulipur', '09', 100, 60, '2014-10-28 16:46:25', '2014-10-28 16:46:25'),
(148, 'Aditmari', '10', 100, 61, '2014-10-28 16:47:02', '2014-10-28 16:47:02'),
(149, 'Hatibandha', '11', 100, 61, '2014-10-28 16:47:35', '2014-10-28 16:47:35'),
(150, 'Kaliganj', '12', 100, 61, '2014-10-28 16:48:20', '2014-10-28 16:48:20'),
(151, 'Lalmonirhat Sadar', '13', 100, 61, '2014-10-28 16:48:55', '2014-10-28 16:48:55'),
(152, 'Patgram', '14', 100, 61, '2014-10-28 16:49:26', '2014-10-28 16:49:26'),
(153, 'Dimla', '15', 100, 62, '2014-10-28 16:50:37', '2014-10-28 16:50:37'),
(154, 'Domar', '16', 100, 62, '2014-10-28 16:51:13', '2014-10-28 16:51:13'),
(155, 'Jaldhaka', '17', 100, 62, '2014-10-28 16:51:46', '2014-10-28 16:51:46'),
(156, 'Kishoreganj', '18', 100, 62, '2014-10-28 16:52:31', '2014-10-28 16:52:31'),
(157, 'Nilphamari Sadar', '19', 100, 62, '2014-10-28 16:53:07', '2014-10-28 16:53:07'),
(158, 'Saidpur', '20', 100, 62, '2014-10-28 16:53:36', '2014-10-28 16:53:36'),
(159, 'Atwari', '21', 100, 63, '2014-10-28 16:54:21', '2014-10-28 16:54:21'),
(160, 'Boda', '22', 100, 63, '2014-10-28 16:54:47', '2014-10-28 16:54:47'),
(161, 'Debiganj', '23', 100, 63, '2014-10-28 16:55:28', '2014-10-28 16:55:28'),
(162, 'Panchagarh Sadar', '24', 100, 63, '2014-10-28 16:56:12', '2014-10-28 16:56:12'),
(163, 'Tetulia', '25', 100, 63, '2014-10-28 16:56:40', '2014-10-28 16:56:40'),
(164, 'Bagha', '01', 700, 2, '2014-10-28 17:26:42', '2014-10-28 17:26:42'),
(165, 'Bagmara', '02', 700, 2, '2014-10-28 17:27:18', '2014-10-28 17:27:18'),
(166, 'Charghat', '03', 700, 2, '2014-10-28 17:28:01', '2014-10-28 17:28:01'),
(167, 'Durgapur', '04', 700, 2, '2014-10-28 17:28:31', '2014-10-28 17:28:31'),
(168, 'Godagari', '05', 700, 2, '2014-10-28 17:28:57', '2014-10-28 17:28:57'),
(169, 'Mohanpur', '06', 700, 2, '2014-10-28 17:29:23', '2014-10-28 17:29:23'),
(170, 'Paba', '07', 700, 2, '2014-10-28 17:29:52', '2014-10-28 17:29:52'),
(171, 'Puthia', '08', 700, 2, '2014-10-28 17:30:23', '2014-10-28 17:30:23'),
(172, 'Tanore', '09', 700, 2, '2014-10-28 17:30:50', '2014-10-28 17:30:50'),
(173, 'Boalia', '10', 700, 2, '2014-10-28 17:33:10', '2014-10-28 17:33:10'),
(174, 'Matihar', '11', 700, 2, '2014-10-28 17:33:34', '2014-10-28 17:33:34'),
(175, 'Rajpara', '12', 700, 2, '2014-10-28 17:34:05', '2014-10-28 17:34:05'),
(176, 'Shah Mokdum', '13', 700, 2, '2014-10-28 17:35:00', '2014-10-28 17:35:00'),
(177, 'Akkelpur', '14', 700, 25, '2014-10-28 17:35:41', '2014-10-28 17:35:41'),
(178, 'Joypurhat	Sadar', '15', 700, 25, '2014-10-28 17:36:49', '2014-10-28 17:36:49'),
(179, 'Kalai', '16', 700, 25, '2014-10-28 17:37:43', '2014-10-28 17:37:43'),
(180, 'Khetlal', '17', 200, 25, '2014-10-28 17:38:23', '2014-10-28 17:38:23'),
(181, 'Baksiganj', '01', 200, 14, '2014-10-28 17:38:37', '2014-10-28 17:38:37'),
(182, 'Panchbibi', '18', 700, 25, '2014-10-28 17:39:01', '2014-10-28 17:39:01'),
(183, 'Dewanganj', '02', 200, 14, '2014-10-28 17:39:08', '2014-10-28 17:39:08'),
(184, 'Islampur', '03', 200, 14, '2014-10-28 17:39:50', '2014-10-28 17:39:50'),
(185, 'Atrai', '19', 700, 26, '2014-10-28 17:40:26', '2014-10-28 17:40:26'),
(186, 'Badalgachhi', '20', 700, 26, '2014-10-28 17:41:00', '2014-10-28 17:41:00'),
(187, 'Manda', '21', 700, 26, '2014-10-28 17:41:30', '2014-10-28 17:41:30'),
(188, 'Dhamoirhat', '22', 700, 26, '2014-10-28 17:42:04', '2014-10-28 17:42:04'),
(189, 'Mohadevpur', '23', 700, 26, '2014-10-28 17:42:34', '2014-10-28 17:42:34'),
(190, 'Naogaon	Sadar', '24', 700, 26, '2014-10-28 17:43:04', '2014-10-28 17:43:04'),
(191, 'Niamatpur', '25', 700, 26, '2014-10-28 17:43:37', '2014-10-28 17:43:37'),
(192, 'Patnitala', '26', 700, 26, '2014-10-28 17:44:19', '2014-10-28 17:44:19'),
(193, 'Jamalpur Sadar', '05', 200, 14, '2014-10-28 17:44:27', '2014-10-28 17:44:27'),
(194, 'Porsha', '27', 700, 26, '2014-10-28 17:44:59', '2014-10-28 17:44:59'),
(195, 'Madarganj', '04', 200, 14, '2014-10-28 17:45:17', '2014-10-28 17:45:17'),
(196, 'Raninagar', '28', 700, 26, '2014-10-28 17:45:55', '2014-10-28 17:45:55'),
(197, 'Melandaha', '06', 200, 14, '2014-10-28 17:47:09', '2014-10-28 17:47:09'),
(198, 'Sapahar', '29', 700, 26, '2014-10-28 17:47:17', '2014-10-28 17:47:17'),
(199, 'Sarishabari', '07', 200, 14, '2014-10-28 17:47:36', '2014-10-28 17:47:36'),
(200, 'Bholahat', '30', 700, 28, '2014-10-28 17:48:46', '2014-10-28 17:48:46'),
(201, 'Gomastapur', '31', 700, 28, '2014-10-28 17:49:15', '2014-10-28 17:49:15'),
(202, 'Nachole', '32', 700, 28, '2014-10-28 17:49:43', '2014-10-28 17:49:43'),
(203, 'Nawabganj', '33', 700, 28, '2014-10-28 17:50:10', '2014-10-28 17:50:10'),
(204, 'Shibganj', '34', 700, 28, '2014-10-28 17:50:43', '2014-10-28 17:50:43'),
(205, 'Bhaluka', '08', 200, 10, '2014-10-28 17:50:47', '2014-10-28 17:50:47'),
(206, 'Dhobaura', '09', 200, 10, '2014-10-28 17:51:43', '2014-10-28 17:51:43'),
(207, 'Fulbaria', '10', 200, 10, '2014-10-28 17:52:12', '2014-10-28 17:52:12'),
(208, 'Gaffargaon', '11', 200, 10, '2014-10-28 17:53:14', '2014-10-28 17:53:14'),
(209, 'Gauripur', '12', 200, 10, '2014-10-28 17:54:53', '2014-10-28 17:54:53'),
(210, 'Haluaghat', '13', 200, 10, '2014-10-28 17:55:37', '2014-10-28 17:55:37'),
(211, 'Ishwarganj', '14', 200, 10, '2014-10-28 17:55:59', '2014-10-28 17:55:59'),
(212, 'Mymensingh Sadar', '15', 200, 10, '2014-10-28 17:56:34', '2014-10-28 17:56:34'),
(213, 'Muktagachha', '16', 200, 10, '2014-10-28 17:56:53', '2014-10-28 17:56:53'),
(214, 'Nandail', '17', 200, 10, '2014-10-28 17:57:13', '2014-10-28 17:57:13'),
(215, 'Adamdighi', '01', 800, 24, '2014-10-28 17:58:52', '2014-10-28 17:58:52'),
(216, 'Bogra Sadar', '02', 800, 24, '2014-10-28 17:59:37', '2014-10-28 17:59:37'),
(217, 'Dhunat', '03', 800, 24, '2014-10-28 18:00:06', '2014-10-28 18:00:06'),
(218, 'Phulpur', '18', 200, 10, '2014-10-28 18:00:11', '2014-10-28 18:00:11'),
(219, 'Dhupchanchia', '04', 800, 24, '2014-10-28 18:00:41', '2014-10-28 18:00:41'),
(220, 'Gabtali', '05', 800, 24, '2014-10-28 18:01:10', '2014-10-28 18:01:10'),
(221, 'Trishal', '19', 200, 10, '2014-10-28 18:01:31', '2014-10-28 18:01:31'),
(222, 'Kahaloo', '06', 800, 24, '2014-10-28 18:01:38', '2014-10-28 18:01:38'),
(223, 'Nandigram', '07', 800, 24, '2014-10-28 18:02:04', '2014-10-28 18:02:04'),
(224, 'Tara Khanda', '20', 200, 10, '2014-10-28 18:02:11', '2014-10-28 18:02:11'),
(225, 'Sariakandi', '08', 800, 24, '2014-10-28 18:02:32', '2014-10-28 18:02:32'),
(226, 'Shajahanpur', '09', 800, 24, '2014-10-28 18:03:13', '2014-10-28 18:03:13'),
(227, 'Sherpur', '10', 800, 24, '2014-10-28 18:03:44', '2014-10-28 18:03:44'),
(228, 'Shibganj', '11', 800, 24, '2014-10-28 18:04:19', '2014-10-28 18:04:19'),
(229, 'Sonatola', '12', 800, 24, '2014-10-28 18:04:47', '2014-10-28 18:04:47'),
(230, 'Bagatipara', '13', 800, 27, '2014-10-28 18:05:31', '2014-10-28 18:05:31'),
(231, 'Baraigram', '14', 800, 27, '2014-10-28 18:06:01', '2014-10-28 18:06:01'),
(232, 'Gurudaspur', '15', 800, 27, '2014-10-28 18:06:32', '2014-10-28 18:06:32'),
(233, 'Lalpur', '16', 800, 27, '2014-10-28 18:06:56', '2014-10-28 18:06:56'),
(234, 'Natore Sadar', '17', 800, 27, '2014-10-28 18:07:32', '2014-10-28 18:07:32'),
(235, 'Atpara', '21', 200, 21, '2014-10-28 18:07:40', '2014-10-28 18:07:40'),
(236, 'Singra', '18', 800, 27, '2014-10-28 18:08:04', '2014-10-28 18:08:04'),
(237, 'Naldanga', '19', 800, 27, '2014-10-28 18:08:28', '2014-10-28 18:08:28'),
(238, 'Ataikula', '20', 800, 29, '2014-10-28 18:09:40', '2014-10-28 18:09:40'),
(239, 'Atgharia', '21', 800, 29, '2014-10-28 18:10:06', '2014-10-28 18:10:06'),
(240, 'Bera', '22', 800, 29, '2014-10-28 18:10:36', '2014-10-28 18:10:36'),
(241, 'Bhangura', '23', 800, 29, '2014-10-28 18:11:02', '2014-10-28 18:11:02'),
(242, 'Barhatta', '22', 200, 21, '2014-10-28 18:11:06', '2014-10-28 18:11:06'),
(243, 'Chatmohar', '24', 800, 29, '2014-10-28 18:11:25', '2014-10-28 18:11:25'),
(244, 'Faridpur', '25', 700, 29, '2014-10-28 18:11:51', '2014-10-28 18:11:51'),
(245, 'Ishwardi', '26', 800, 29, '2014-10-28 18:13:00', '2014-10-28 18:13:00'),
(246, 'Pabna Sadar', '27', 800, 29, '2014-10-28 18:13:38', '2014-10-28 18:13:38'),
(247, 'Santhia', '28', 800, 29, '2014-10-28 18:14:07', '2014-10-28 18:14:07'),
(248, 'Sujanagar', '29', 800, 29, '2014-10-28 18:14:34', '2014-10-28 18:14:34'),
(249, 'Durgapur', '23', 200, 21, '2014-10-28 18:14:50', '2014-10-28 18:14:50'),
(250, 'Khaliajuri', '24', 200, 21, '2014-10-28 18:15:28', '2014-10-28 18:15:28'),
(251, 'Belkuchi', '30', 800, 30, '2014-10-28 18:15:45', '2014-10-28 18:15:45'),
(252, 'Kalmakanda', '25', 200, 21, '2014-10-28 18:15:59', '2014-10-28 18:15:59'),
(253, 'Chauhali', '31', 800, 30, '2014-10-28 18:16:24', '2014-10-28 18:16:24'),
(254, 'Kendua', '26', 200, 21, '2014-10-28 18:16:56', '2014-10-28 18:16:56'),
(255, 'Kamarkhanda', '32', 800, 30, '2014-10-28 18:17:08', '2014-10-28 18:17:08'),
(256, 'Madan', '27', 200, 21, '2014-10-28 18:17:34', '2014-10-28 18:17:34'),
(257, 'Kazipur', '33', 800, 30, '2014-10-28 18:17:39', '2014-10-28 18:17:39'),
(258, 'Raiganj', '34', 800, 30, '2014-10-28 18:18:09', '2014-10-28 18:18:09'),
(259, 'Mohanganj', '28', 200, 21, '2014-10-28 18:18:20', '2014-10-28 18:18:20'),
(260, 'Netrokona Sadar', '29', 200, 21, '2014-10-28 18:18:40', '2014-10-28 18:18:40'),
(261, 'Shahjadpur', '35', 800, 30, '2014-10-28 18:18:44', '2014-10-28 18:18:44'),
(262, 'Sirajganj	Sadar', '36', 800, 30, '2014-10-28 18:19:17', '2014-10-28 18:19:17'),
(263, 'Tarash', '37', 800, 30, '2014-10-28 18:20:04', '2014-10-28 18:20:04'),
(264, 'Ullahpara', '38', 800, 30, '2014-10-28 18:20:42', '2014-10-28 18:20:42'),
(265, 'Purbadhala', '30', 200, 21, '2014-10-28 18:21:13', '2014-10-28 18:21:13'),
(266, 'Bagerhat	Sadar', '01', 110, 32, '2014-10-28 18:25:27', '2014-10-28 18:25:27'),
(267, 'Chitalmari', '02', 110, 32, '2014-10-28 18:26:07', '2014-10-28 18:26:07'),
(268, 'Fakirhat', '03', 110, 32, '2014-10-28 18:26:59', '2014-10-28 18:26:59'),
(269, 'Kachua', '04', 110, 32, '2014-10-28 18:27:28', '2014-10-28 18:27:28'),
(270, 'Mollahat', '05', 110, 32, '2014-10-28 18:28:04', '2014-10-28 18:28:04'),
(271, 'Mongla', '06', 110, 32, '2014-10-28 18:28:31', '2014-10-28 18:28:31'),
(272, 'Morrelganj', '07', 110, 32, '2014-10-28 18:29:00', '2014-10-28 18:29:00'),
(273, 'Rampal', '08', 110, 32, '2014-10-28 18:29:34', '2014-10-28 18:29:34'),
(274, 'Sarankhola', '09', 110, 32, '2014-10-28 18:29:57', '2014-10-28 18:29:57'),
(275, 'Batiaghata', '10', 110, 3, '2014-10-28 18:30:33', '2014-10-28 18:30:33'),
(276, 'Dacope', '11', 110, 3, '2014-10-28 18:31:05', '2014-10-28 18:31:05'),
(277, 'Dumuria', '12', 110, 3, '2014-10-28 18:31:49', '2014-10-28 18:31:49'),
(278, 'Dighalia', '13', 110, 3, '2014-10-28 18:32:17', '2014-10-28 18:32:17'),
(279, 'Koyra', '14', 110, 3, '2014-10-28 18:32:42', '2014-10-28 18:32:42'),
(280, 'Paikgachha', '15', 110, 3, '2014-10-28 18:33:06', '2014-10-28 18:33:06'),
(281, 'Phultala', '16', 110, 3, '2014-10-28 18:33:43', '2014-10-28 18:33:43'),
(282, 'Rupsha', '17', 110, 3, '2014-10-28 18:34:07', '2014-10-28 18:34:07'),
(283, 'Terokhada', '18', 110, 3, '2014-10-28 18:34:31', '2014-10-28 18:34:31'),
(284, 'Daulatpur', '19', 110, 3, '2014-10-28 18:34:58', '2014-10-28 18:34:58'),
(285, 'Khalishpur', '20', 110, 3, '2014-10-28 18:35:21', '2014-10-28 18:35:21'),
(286, 'Khan Jahan Ali', '21', 110, 3, '2014-10-28 18:36:00', '2014-10-28 18:36:00'),
(287, 'Kotwali', '22', 110, 3, '2014-10-28 18:36:16', '2014-10-28 18:36:16'),
(288, 'Sonadanga', '23', 110, 3, '2014-10-28 18:36:38', '2014-10-28 18:36:38'),
(289, 'Harintana', '24', 110, 6, '2014-10-28 18:37:05', '2014-10-28 18:37:05'),
(290, 'Assasuni', '25', 110, 31, '2014-10-28 18:38:07', '2014-10-28 18:38:07'),
(291, 'Kalaroa', '27', 110, 3, '2014-10-28 18:38:30', '2014-10-28 18:38:30'),
(292, 'Kaliganj', '28', 110, 31, '2014-10-28 18:39:11', '2014-10-28 18:39:11'),
(293, 'Satkhira sadar', '29', 110, 31, '2014-10-28 18:39:49', '2014-10-28 18:39:49'),
(294, 'Shyamnagar', '30', 110, 31, '2014-10-28 18:41:03', '2014-10-28 18:41:03'),
(295, 'Tala', '31', 110, 31, '2014-10-28 18:41:38', '2014-10-28 18:41:38'),
(296, 'Kalia', '01', 120, 34, '2014-10-28 18:42:41', '2014-10-28 18:42:41'),
(297, 'Lohagara', '02', 120, 34, '2014-10-28 18:43:36', '2014-10-28 18:43:36'),
(298, 'Narail	Sadar', '03', 120, 34, '2014-10-28 18:44:23', '2014-10-28 18:44:23'),
(299, 'Naragati', '04', 120, 34, '2014-10-28 18:45:01', '2014-10-28 18:45:01'),
(300, 'Abhaynagar', '05', 120, 33, '2014-10-28 18:45:46', '2014-10-28 18:45:46'),
(301, 'Bagherpara', '06', 120, 33, '2014-10-28 18:46:51', '2014-10-28 18:46:51'),
(302, 'Chaugachha', '07', 120, 33, '2014-10-28 18:47:25', '2014-10-28 18:47:25'),
(303, 'Jhikargachha', '08', 120, 33, '2014-10-28 18:47:55', '2014-10-28 18:47:55'),
(304, 'Keshabpur', '09', 120, 33, '2014-10-28 18:48:29', '2014-10-28 18:48:29'),
(305, 'Jessore	Sadar', '10', 120, 33, '2014-10-28 18:49:15', '2014-10-28 18:49:15'),
(306, 'Manirampur', '11', 120, 33, '2014-10-28 18:50:23', '2014-10-28 18:50:23'),
(307, 'Sharsha', '12', 120, 33, '2014-10-28 18:51:04', '2014-10-28 18:51:04'),
(308, 'Magura Sadar', '13', 21, 35, '2014-10-28 18:51:52', '2014-10-28 18:51:52'),
(309, 'Mohammadpur', '14', 120, 35, '2014-10-28 18:53:24', '2014-10-28 18:53:24'),
(310, 'Shalikha', '15', 120, 35, '2014-10-28 18:53:48', '2014-10-28 18:53:48'),
(311, 'Sreepur', '16', 120, 35, '2014-10-28 18:54:27', '2014-10-28 18:54:27'),
(312, 'Alamdanga', '01', 130, 37, '2014-10-28 18:55:17', '2014-10-28 18:55:17'),
(313, 'Chuadanga Sadar', '02', 120, 37, '2014-10-28 18:55:59', '2014-10-28 18:55:59'),
(314, 'Damurhuda', '03', 120, 37, '2014-10-28 18:56:53', '2014-10-28 18:56:53'),
(315, 'Jibannagar', '04', 120, 37, '2014-10-28 18:57:20', '2014-10-28 18:57:20'),
(316, 'Harinakunda', '05', 120, 36, '2014-10-28 18:57:58', '2014-10-28 18:57:58'),
(317, 'Jhenaidah Sadar', '06', 120, 36, '2014-10-28 18:58:55', '2014-10-28 18:58:55'),
(318, 'Kaliganj', '07', 120, 36, '2014-10-28 19:00:11', '2014-10-28 19:00:11'),
(319, 'Kotchandpur', '08', 120, 36, '2014-10-28 19:00:55', '2014-10-28 19:00:55'),
(320, 'Maheshpur', '09', 120, 36, '2014-10-28 19:01:21', '2014-10-28 19:01:21'),
(321, 'Shailkupa', '10', 120, 36, '2014-10-28 19:01:49', '2014-10-28 19:01:49'),
(322, 'Bheramara', '11', 130, 38, '2014-10-28 19:03:45', '2014-10-28 19:03:45'),
(323, 'Daulatpur', '12', 130, 38, '2014-10-28 19:04:20', '2014-10-28 19:04:20'),
(324, 'Khoksa', '13', 130, 38, '2014-10-28 19:04:45', '2014-10-28 19:04:45'),
(325, 'Kumarkhali', '14', 130, 38, '2014-10-28 19:05:08', '2014-10-28 19:05:08'),
(326, 'Kushtia Sadar', '15', 130, 38, '2014-10-28 19:05:50', '2014-10-28 19:05:50'),
(327, 'Mirpur', '16', 130, 38, '2014-10-28 19:06:19', '2014-10-28 19:06:19'),
(328, 'Shekhpara', '17', 130, 38, '2014-10-28 19:07:08', '2014-10-28 19:07:08'),
(329, 'Gangni', '18', 130, 39, '2014-10-28 19:08:13', '2014-10-28 19:08:13'),
(330, 'Meherpur Sadar', '19', 130, 39, '2014-10-28 19:09:14', '2014-10-28 19:09:14'),
(331, 'Mujibnagar', '20', 130, 39, '2014-10-28 19:09:41', '2014-10-28 19:09:41'),
(332, 'Ali Kadam', '01', 140, 40, '2014-10-28 19:23:22', '2014-10-28 19:23:22'),
(333, 'Bandarban Sadar', '02', 140, 40, '2014-10-28 19:24:28', '2014-10-28 19:24:28'),
(334, 'Lama', '03', 140, 40, '2014-10-28 19:26:00', '2014-10-28 19:26:00'),
(335, 'Naikhongchhari', '04', 140, 40, '2014-10-28 19:26:30', '2014-10-28 19:26:30'),
(336, 'Rowangchhari', '05', 140, 40, '2014-10-28 19:27:10', '2014-10-28 19:27:10'),
(337, 'Ruma', '06', 140, 40, '2014-10-28 19:27:52', '2014-10-28 19:27:52'),
(338, 'Thanchi', '07', 140, 40, '2014-10-28 19:28:27', '2014-10-28 19:28:27'),
(339, 'Chakaria', '08', 140, 43, '2014-10-28 19:38:47', '2014-10-28 19:38:47'),
(340, 'Cox\'s Bazar Sadar', '09', 140, 43, '2014-10-28 19:39:28', '2014-10-28 19:39:28'),
(341, 'Kutubdia', '10', 140, 43, '2014-10-28 19:39:56', '2014-10-28 19:39:56'),
(342, 'Maheshkhali', '11', 140, 43, '2014-10-28 19:40:26', '2014-10-28 19:40:26'),
(343, 'Ramu', '12', 140, 43, '2014-10-28 19:40:59', '2014-10-28 19:40:59'),
(344, 'Teknaf', '13', 140, 43, '2014-10-28 19:41:27', '2014-10-28 19:41:27'),
(345, 'Ukhia', '14', 140, 43, '2014-10-28 19:41:53', '2014-10-28 19:41:53'),
(346, 'Pekua', '15', 140, 43, '2014-10-28 19:42:16', '2014-10-28 19:42:16'),
(347, 'Chhagalnaiya', '16', 140, 44, '2014-10-28 19:42:43', '2014-10-28 19:42:43'),
(348, 'Daganbhuiyan', '17', 140, 44, '2014-10-28 19:43:08', '2014-10-28 19:43:08'),
(349, 'Feni	Sadar', '18', 140, 44, '2014-10-28 19:43:39', '2014-10-28 19:43:39'),
(350, 'Parshuram', '19', 140, 44, '2014-10-28 19:44:02', '2014-10-28 19:44:02'),
(351, 'Sonagazi', '20', 140, 44, '2014-10-28 19:44:25', '2014-10-28 19:44:25'),
(352, 'Fulgazi', '21', 140, 44, '2014-10-28 19:44:47', '2014-10-28 19:44:47'),
(353, 'Anwara', '22', 140, 4, '2014-10-28 19:45:15', '2014-10-28 19:45:15'),
(354, 'Banshkhali', '23', 140, 4, '2014-10-28 19:45:46', '2014-10-28 19:45:46'),
(355, 'Boalkhali', '24', 140, 4, '2014-10-28 19:46:10', '2014-10-28 19:46:10'),
(356, 'Chandanaish', '25', 140, 4, '2014-10-28 19:46:46', '2014-10-28 19:46:46'),
(357, 'Fatikchhari', '26', 140, 4, '2014-10-28 19:47:12', '2014-10-28 19:47:12'),
(358, 'Hathazari', '27', 140, 4, '2014-10-28 19:47:36', '2014-10-28 19:47:36'),
(359, 'Lohagara', '28', 140, 4, '2014-10-28 19:48:07', '2014-10-28 19:48:07'),
(360, 'Mirsharai', '29', 140, 4, '2014-10-28 19:48:30', '2014-10-28 19:48:30'),
(361, 'Jhenaigati', '31', 200, 17, '2014-10-28 19:48:45', '2014-10-28 19:48:45'),
(362, 'Patiya', '30', 140, 4, '2014-10-28 19:48:59', '2014-10-28 19:48:59'),
(363, 'Nakla', '32', 200, 17, '2014-10-28 19:49:15', '2014-10-28 19:49:15'),
(364, 'Rangunia', '31', 140, 4, '2014-10-28 19:49:24', '2014-10-28 19:49:24'),
(365, 'Raozan', '32', 140, 4, '2014-10-28 19:49:46', '2014-10-28 19:49:46'),
(366, 'Sandwip', '33', 140, 4, '2014-10-28 19:50:08', '2014-10-28 19:50:08'),
(367, 'Nalitabari', '33', 200, 17, '2014-10-28 19:50:24', '2014-10-28 19:50:24'),
(368, 'Satkania', '34', 140, 4, '2014-10-28 19:50:42', '2014-10-28 19:50:42'),
(369, 'Sitakunda', '35', 140, 4, '2014-10-28 19:51:03', '2014-10-28 19:51:03'),
(370, 'Sherpur Sadar', '34', 200, 17, '2014-10-28 19:51:03', '2014-10-28 19:51:03'),
(371, 'Bandor-Chittagong	Port', '36', 140, 4, '2014-10-28 19:51:59', '2014-10-28 19:51:59'),
(372, 'Chandgaon', '37', 140, 4, '2014-10-28 19:52:28', '2014-10-28 19:52:28'),
(373, 'Sreebardi', '35', 200, 17, '2014-10-28 19:52:29', '2014-10-28 19:52:29'),
(374, 'Double	Mooring', '38', 140, 4, '2014-10-28 19:52:57', '2014-10-28 19:52:57'),
(375, 'Kotwali', '39', 140, 4, '2014-10-28 19:53:26', '2014-10-28 19:53:26'),
(376, 'Pahartali', '40', 140, 4, '2014-10-28 19:53:50', '2014-10-28 19:53:50'),
(377, 'Panchlaish', '41', 140, 4, '2014-10-28 19:54:16', '2014-10-28 19:54:16'),
(378, 'Dighinala', '42', 140, 42, '2014-10-28 19:54:54', '2014-10-28 19:54:54'),
(379, 'Alfadanga', '01', 200, 23, '2014-10-28 19:55:09', '2014-10-28 19:55:09'),
(380, 'Khagrachhari sadar', '43', 140, 42, '2014-10-28 19:56:37', '2014-10-28 19:56:37'),
(381, 'Bhanga', '02', 200, 23, '2014-10-28 19:56:59', '2014-10-28 19:56:59'),
(382, 'Lakshmichhari', '44', 140, 42, '2014-10-28 19:57:04', '2014-10-28 19:57:04'),
(383, 'Mahalchhari', '45', 140, 42, '2014-10-28 19:57:31', '2014-10-28 19:57:31'),
(384, 'Manikchhari', '46', 140, 42, '2014-10-28 19:58:00', '2014-10-28 19:58:00'),
(385, 'Matiranga', '47', 140, 42, '2014-10-28 19:58:45', '2014-10-28 19:58:45'),
(386, 'Panchhari', '48', 140, 42, '2014-10-28 20:01:12', '2014-10-28 20:01:12'),
(387, 'Ramgarh', '49', 140, 42, '2014-10-28 20:01:39', '2014-10-28 20:01:39'),
(388, 'Bagaichhari', '50', 140, 41, '2014-10-28 20:02:18', '2014-10-28 20:02:18'),
(389, 'Barkal', '51', 140, 41, '2014-10-28 20:02:58', '2014-10-28 20:02:58'),
(390, 'Kawkhali-Betbunia', '52', 140, 41, '2014-10-28 20:04:02', '2014-10-28 20:04:02'),
(391, 'Belaichhari', '53', 140, 41, '2014-10-28 20:04:32', '2014-10-28 20:04:32'),
(392, 'Kaptai', '54', 140, 41, '2014-10-28 20:04:59', '2014-10-28 20:04:59'),
(393, 'Juraichhari', '55', 140, 41, '2014-10-28 20:05:27', '2014-10-28 20:05:27'),
(394, 'Langadu', '56', 140, 41, '2014-10-28 20:05:53', '2014-10-28 20:05:53'),
(395, 'Naniyachar', '57', 140, 41, '2014-10-28 20:06:20', '2014-10-28 20:06:20'),
(396, 'Rajasthali', '58', 140, 41, '2014-10-28 20:06:46', '2014-10-28 20:06:46'),
(397, 'Rangamati', '59', 140, 41, '2014-10-28 20:07:09', '2014-10-28 20:07:09'),
(398, 'Amtali', '01', 160, 50, '2014-10-28 20:13:24', '2014-10-28 20:13:24'),
(399, 'Bamna', '02', 160, 50, '2014-10-28 20:13:54', '2014-10-28 20:13:54'),
(400, 'Barguna Sadar', '03', 160, 50, '2014-10-28 20:14:27', '2014-10-28 20:14:27'),
(401, 'Betagi', '04', 160, 50, '2014-10-28 20:14:52', '2014-10-28 20:14:52'),
(402, 'Patharghata', '05', 160, 50, '2014-10-28 20:15:22', '2014-10-28 20:15:22'),
(403, 'Taltoli', '06', 160, 50, '2014-10-28 20:15:57', '2014-10-28 20:15:57'),
(404, 'Agailjhara', '07', 160, 5, '2014-10-28 20:16:34', '2014-10-28 20:16:34'),
(405, 'Babuganj', '08', 160, 5, '2014-10-28 20:16:59', '2014-10-28 20:16:59'),
(406, 'Bakerganj', '09', 160, 5, '2014-10-28 20:17:26', '2014-10-28 20:17:26'),
(407, 'Boalmari', '03', 200, 23, '2014-10-28 20:17:30', '2014-10-28 20:17:30'),
(408, 'Banaripara', '10', 160, 5, '2014-10-28 20:17:50', '2014-10-28 20:17:50'),
(409, 'Charbhadrasan', '04', 200, 23, '2014-10-28 20:18:04', '2014-10-28 20:18:04'),
(410, 'Gaurnadi', '11', 160, 5, '2014-10-28 20:18:24', '2014-10-28 20:18:24'),
(411, 'Hizla', '12', 160, 5, '2014-10-28 20:18:44', '2014-10-28 20:18:44'),
(412, 'Faridpur Sadar', '05', 200, 23, '2014-10-28 20:19:12', '2014-10-28 20:19:12'),
(413, 'Barisal Sadar', '13', 160, 5, '2014-10-28 20:19:17', '2014-10-28 20:19:17'),
(414, 'Madhukhali', '06', 200, 23, '2014-10-28 20:19:42', '2014-10-28 20:19:42'),
(415, 'Mehendiganj', '14', 160, 5, '2014-10-28 20:19:52', '2014-10-28 20:19:52'),
(416, 'Nagarkanda', '07', 200, 23, '2014-10-28 20:20:08', '2014-10-28 20:20:08'),
(417, 'Muladi', '15', 160, 5, '2014-10-28 20:20:18', '2014-10-28 20:20:18'),
(418, 'Wazirpur', '16', 160, 5, '2014-10-28 20:20:41', '2014-10-28 20:20:41'),
(419, 'Sadarpur', '08', 200, 23, '2014-10-28 20:20:48', '2014-10-28 20:20:48'),
(420, 'Bhola Sadar', '17', 160, 51, '2014-10-28 20:21:13', '2014-10-28 20:21:13'),
(421, 'Burhanuddin', '18', 160, 51, '2014-10-28 20:21:50', '2014-10-28 20:21:50'),
(422, 'Char	Fasson', '19', 160, 51, '2014-10-28 20:22:27', '2014-10-28 20:22:27'),
(423, 'Gopalganj Sadar', '09', 200, 16, '2014-10-28 20:22:54', '2014-10-28 20:22:54'),
(424, 'Daulatkhan', '20', 160, 51, '2014-10-28 20:23:10', '2014-10-28 20:23:10'),
(425, 'Lalmohan', '21', 160, 51, '2014-10-28 20:23:43', '2014-10-28 20:23:43'),
(426, 'Manpura', '22', 160, 51, '2014-10-28 20:24:07', '2014-10-28 20:24:07'),
(427, 'Kashiani', '10', 200, 16, '2014-10-28 20:24:09', '2014-10-28 20:24:09'),
(428, 'Tazumuddin', '23', 160, 51, '2014-10-28 20:24:51', '2014-10-28 20:24:51'),
(429, 'Jhalokati	Sadar', '24', 160, 52, '2014-10-28 20:25:42', '2014-10-28 20:25:42'),
(430, 'Kathalia', '25', 160, 52, '2014-10-28 20:26:17', '2014-10-28 20:26:17'),
(431, 'Kotalipara', '11', 200, 16, '2014-10-28 20:26:21', '2014-10-28 20:26:21'),
(432, 'Nalchity', '26', 160, 52, '2014-10-28 20:26:46', '2014-10-28 20:26:46'),
(433, 'Muksudpur', '12', 200, 16, '2014-10-28 20:26:57', '2014-10-28 20:26:57'),
(434, 'Rajapur', '27', 160, 52, '2014-10-28 20:27:16', '2014-10-28 20:27:16'),
(435, 'Bauphal', '28', 160, 53, '2014-10-28 20:27:55', '2014-10-28 20:27:55'),
(436, 'Dashmina', '29', 160, 53, '2014-10-28 20:28:29', '2014-10-28 20:28:29'),
(437, 'Galachipa', '30', 160, 53, '2014-10-28 20:28:53', '2014-10-28 20:28:53'),
(438, 'Kalapara', '31', 160, 53, '2014-10-28 20:29:18', '2014-10-28 20:29:18'),
(439, 'Mirzaganj', '32', 160, 53, '2014-10-28 20:29:47', '2014-10-28 20:29:47'),
(440, 'Patuakhali Sadar', '33', 160, 53, '2014-10-28 20:30:23', '2014-10-28 20:30:23'),
(441, 'Rangabali', '34', 140, 53, '2014-10-28 20:30:55', '2014-10-28 20:30:55'),
(442, 'Dumki', '35', 160, 53, '2014-10-28 20:31:32', '2014-10-28 20:31:32'),
(443, 'Bhandaria', '36', 160, 54, '2014-10-28 20:32:09', '2014-10-28 20:32:09'),
(444, 'Kawkhali', '37', 160, 54, '2014-10-28 20:32:39', '2014-10-28 20:32:39'),
(445, 'Mathbaria', '38', 160, 54, '2014-10-28 20:33:06', '2014-10-28 20:33:06'),
(446, 'Nazirpur', '39', 160, 54, '2014-10-28 20:33:33', '2014-10-28 20:33:33'),
(447, 'Pirojpur Sadar', '40', 160, 54, '2014-10-28 20:34:14', '2014-10-28 20:34:14'),
(448, 'Tungipara', '13', 200, 16, '2014-10-28 20:34:14', '2014-10-28 20:34:14'),
(449, 'Nesarabad-Swarupkati', '41', 160, 54, '2014-10-28 20:35:16', '2014-10-28 20:35:16'),
(450, 'Zianagor', '42', 160, 54, '2014-10-28 20:35:43', '2014-10-28 20:35:43'),
(451, 'Rajoir', '14', 200, 8, '2014-10-28 20:36:02', '2014-10-28 20:36:02'),
(452, 'Akhaura', '01', 170, 48, '2014-10-28 20:41:40', '2014-10-28 20:41:40'),
(453, 'Bancharampur', '02', 170, 48, '2014-10-28 20:42:29', '2014-10-28 20:42:29'),
(454, 'Madaripur Sadar', '15', 200, 13, '2014-10-28 20:45:46', '2014-10-28 20:45:46'),
(455, 'Kalkini', '16', 200, 13, '2014-10-28 20:46:40', '2014-10-28 20:46:40'),
(456, 'Brahmanbaria sadar', '03', 170, 48, '2014-10-28 20:46:53', '2014-10-28 20:46:53'),
(457, 'Kasba', '04', 170, 48, '2014-10-28 20:47:34', '2014-10-28 20:47:34'),
(458, 'Shibchar', '17', 200, 13, '2014-10-28 20:47:47', '2014-10-28 20:47:47'),
(459, 'Nabinagar', '05', 170, 48, '2014-10-28 20:48:08', '2014-10-28 20:48:08'),
(460, 'Nasirnagar', '06', 170, 48, '2014-10-28 20:48:32', '2014-10-28 20:48:32'),
(461, 'Sarail', '07', 170, 48, '2014-10-28 20:49:01', '2014-10-28 20:49:01'),
(462, 'Ashuganj', '08', 170, 48, '2014-10-28 20:49:29', '2014-10-28 20:49:29'),
(463, 'Bijoynagar', '09', 170, 48, '2014-10-28 20:49:57', '2014-10-28 20:49:57'),
(464, 'Chandpur sadar', '10', 170, 49, '2014-10-28 20:51:04', '2014-10-28 20:51:04'),
(465, 'Faridganj', '11', 170, 49, '2014-10-28 20:51:33', '2014-10-28 20:51:33'),
(466, 'Haimchar', '12', 170, 49, '2014-10-28 20:52:07', '2014-10-28 20:52:07'),
(467, 'Haziganj', '13', 170, 49, '2014-10-28 20:52:44', '2014-10-28 20:52:44'),
(468, 'Kachua', '14', 170, 49, '2014-10-28 20:53:10', '2014-10-28 20:53:10'),
(469, 'Matlab Dakshin', '15', 170, 49, '2014-10-28 20:53:50', '2014-10-28 20:53:50'),
(470, 'Matlab Uttar', '16', 170, 49, '2014-10-28 20:54:25', '2014-10-28 20:54:25'),
(471, 'Shahrasti', '17', 170, 49, '2014-10-28 20:54:56', '2014-10-28 20:54:56'),
(472, 'Barura', '18', 170, 47, '2014-10-28 20:55:55', '2014-10-28 20:55:55'),
(473, 'Brahmanpara', '19', 170, 47, '2014-10-28 20:56:20', '2014-10-28 20:56:20'),
(474, 'Burichang', '20', 170, 47, '2014-10-28 20:56:52', '2014-10-28 20:56:52'),
(475, 'Chandina', '21', 170, 47, '2014-10-28 20:57:17', '2014-10-28 20:57:17'),
(476, 'Chauddagram', '22', 170, 47, '2014-10-28 20:57:40', '2014-10-28 20:57:40'),
(477, 'Daudkandi', '23', 170, 47, '2014-10-28 20:58:15', '2014-10-28 20:58:15'),
(478, 'Debidwar', '24', 170, 47, '2014-10-28 20:58:39', '2014-10-28 20:58:39'),
(479, 'Homna', '25', 170, 47, '2014-10-28 20:59:04', '2014-10-28 20:59:04'),
(480, 'Laksam', '26', 170, 47, '2014-10-28 20:59:31', '2014-10-28 20:59:31'),
(481, 'Muradnagar', '27', 170, 47, '2014-10-28 20:59:56', '2014-10-28 20:59:56'),
(482, 'Nangalkot', '28', 170, 47, '2014-10-28 21:00:20', '2014-10-28 21:00:20'),
(483, 'Comilla Sadar', '29', 170, 47, '2014-10-28 21:00:51', '2014-10-28 21:00:51'),
(484, 'Meghna', '30', 170, 47, '2014-10-28 21:01:17', '2014-10-28 21:01:17'),
(485, 'Titas', '31', 170, 47, '2014-10-28 21:01:48', '2014-10-28 21:01:48'),
(486, 'Monohargonj', '32', 170, 47, '2014-10-28 21:02:11', '2014-10-28 21:02:11'),
(487, 'Sadar South Upazila', '33', 170, 47, '2014-10-28 21:03:08', '2014-10-28 21:03:08'),
(488, 'Lakshmipur Sadar', '34', 170, 46, '2014-10-28 21:03:38', '2014-10-28 21:03:38'),
(489, 'Raipur', '35', 170, 46, '2014-10-28 21:04:02', '2014-10-28 21:04:02'),
(490, 'Ramganj', '36', 170, 46, '2014-10-28 21:04:25', '2014-10-28 21:04:25'),
(491, 'Ramgati', '37', 170, 46, '2014-10-28 21:04:49', '2014-10-28 21:04:49'),
(492, 'Komolnagar', '38', 170, 46, '2014-10-28 21:05:15', '2014-10-28 21:05:15'),
(493, 'Begumganj', '39', 170, 45, '2014-10-28 21:05:53', '2014-10-28 21:05:53'),
(494, 'Noakhali	Sadar', '40', 170, 45, '2014-10-28 21:06:35', '2014-10-28 21:06:35'),
(495, 'Chatkhil', '41', 170, 45, '2014-10-28 21:07:10', '2014-10-28 21:07:10'),
(496, 'Companiganj', '42', 170, 45, '2014-10-28 21:07:43', '2014-10-28 21:07:43'),
(497, 'Hatiya', '43', 170, 45, '2014-10-28 21:08:13', '2014-10-28 21:08:13'),
(498, 'Senbagh', '44', 170, 45, '2014-10-28 21:08:47', '2014-10-28 21:08:47'),
(499, 'Sonaimuri', '45', 170, 45, '2014-10-28 21:09:17', '2014-10-28 21:09:17'),
(500, 'Subarnachar', '46', 170, 45, '2014-10-28 21:09:43', '2014-10-28 21:09:43'),
(501, 'Kabirhat', '47', 170, 45, '2014-10-28 21:10:11', '2014-10-28 21:10:11'),
(502, 'Baliakandi', '18', 600, 22, '2014-10-28 21:11:05', '2014-10-28 21:11:05'),
(503, 'Goalandaghat', '19', 170, 22, '2014-10-28 21:11:31', '2014-10-28 21:11:31'),
(504, 'Pangsha', '20', 170, 22, '2014-10-28 21:11:58', '2014-10-28 21:11:58'),
(505, 'Rajbari Sadar', '21', 600, 22, '2014-10-28 21:12:47', '2014-10-28 21:12:47'),
(506, 'Kalukhali', '22', 170, 22, '2014-10-28 21:13:12', '2014-10-28 21:13:12'),
(507, 'Bhedarganj', '23', 600, 20, '2014-10-28 21:13:47', '2014-10-28 21:13:47'),
(508, 'Damudya', '24', 600, 20, '2014-10-28 21:14:20', '2014-10-28 21:14:20'),
(509, 'Gosairhat', '25', 170, 20, '2014-10-28 21:14:45', '2014-10-28 21:14:45'),
(510, 'Naria', '26', 170, 20, '2014-10-28 21:15:20', '2014-10-28 21:15:20'),
(511, 'Shariatpur Sadar', '27', 600, 20, '2014-10-28 21:16:01', '2014-10-28 21:16:01'),
(512, 'Zanjira', '28', 170, 20, '2014-10-28 21:16:31', '2014-10-28 21:16:31'),
(513, 'Shakhipur', '29', 600, 20, '2014-10-28 21:17:07', '2014-10-28 21:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` int(1) DEFAULT 0,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `password`, `address`, `billing_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'ratul', 1, 'ratul794@gmail.com', '$2y$10$qz/yXIqTbRzupqJu7f3/FeCBilV9YD6f1HMfBnETXbEjv7u31yehy', NULL, NULL, 'bUHtJnSKpi1VU2A4t74aOnHJSsLHaY5oX8sBB9nqmRYBL67H7mk51NvpaQuS', '2018-05-25 02:33:01', '2018-05-25 02:33:01'),
(8, 'romel1407', 1, 'romel@gmail.com', '$2y$10$nBjYxdjs.srIxDrrI7ADb.QBkvtCJjBP5lOnixgHl8QTnu6P8pDrS', NULL, NULL, 'RuxoKHECSfB85g5g6wVgWPF7fPXYraC3S37PIBa6THogsgIm60PBnSqQNPUW', '2018-06-05 22:44:27', '2018-06-05 22:44:27'),
(9, 'shohan reza', 1, 'smshohan@gmail.com', '$2y$10$1uH0drk3SUwJj422TfZ6HeYg9RjSecTpVzNr.qMptxBsNobzXy5Se', NULL, NULL, 'uIOW2q1BVDFzbLZ0yUeDzZppNvjcSSlmEVeKoiU5eF24l7ZOPOj4zihFfm6E', '2018-06-05 22:48:35', '2018-06-05 22:48:35'),
(10, 'hassan', 0, 'hassan@gmail.com', '$2y$10$AqoePbWTwRJxihvb7ruCMeazro/LyKAMItMVrq0qMq0Xg7RWCUoOS', NULL, NULL, 'aYyJpp913LdGfChs6psGxYpAPxJz5r0u5bqIz6aKQPTstfyjv77wyzlPdCu8', '2018-06-05 22:52:51', '2018-06-05 22:52:51'),
(11, 'romel1407', 0, 'romel1407@gmail.com', '$2y$10$E4taEMlawA.11lB.g0g8b.Ngre8Kxs6oNIM73fChN5um5y5eODmxK', NULL, NULL, 'ZdhQkUP6s3RoPhoRYfz63MD7rHPGEMl046i1fxPLiA7rSqRKiKec3F3DOYry', '2018-06-22 10:37:53', '2018-06-22 10:37:53'),
(12, 'Shahriar ratul', 0, 'ratul795@gmail.com', '$2y$10$t3KwUn11illVxX3W6yGwCO9YKnX8ZPVTQfXoCTtrYl/x6uilpdHLW', NULL, NULL, 'njJOJgFt5FGy5t76rY2icihHhAP3lSQDJ32UN5wLYMPDZILaP04kSzkoaOro', '2018-06-22 13:48:43', '2018-06-22 13:48:43'),
(13, 'Tareq Hassan', 0, 'romel1407@travelotown.com', '$2y$10$FDkg8.UpU3NG15zJlNeiCOIQcNTFKEgl96fEmv1Ol.pgMrgLo2xX2', NULL, NULL, 'UXPnF7Fn86bXiaII4FfEEpF90eSV7fsU6VCprE02SOzgvRLLRmaP8SZOWi1p', '2018-06-22 14:39:26', '2018-06-22 14:39:26'),
(14, 'faysulrubel', 0, 'faysulrubel@gmail.com', '$2y$10$be.vuAJX.cPxIfDZEX/Kp.WLpRTpgzSiEQGJWk2nRnlGF8Rs5bnNq', NULL, NULL, 'NADHiIVvIPT93kkHRT289O83yp6h1BfG7ZV93knTc9iAxMezFix6clmPTlRI', '2018-07-10 15:18:32', '2018-07-10 15:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `wishlist_id` int(10) UNSIGNED NOT NULL,
  `product_row_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_row_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_row_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_row_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `temp_orders`
--
ALTER TABLE `temp_orders`
  ADD PRIMARY KEY (`temp_order_row_id`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6E1F1E0B08FA272` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_row_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `temp_order_row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=514;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `wishlist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
