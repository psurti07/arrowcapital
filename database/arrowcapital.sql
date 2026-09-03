-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2026 at 09:02 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrowcapital`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

DROP TABLE IF EXISTS `administrations`;
CREATE TABLE IF NOT EXISTS `administrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_code` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(299) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int NOT NULL DEFAULT '1' COMMENT '0=Admin,1=OfficeStaff, 2=Hire-Support-Staff,3=ItStaff,4=Accounting, 5=Self-Support-Staff, 7=Assistant-Support-Staff\r\n',
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '0 = No, 1 = Yes',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrations`
--

INSERT INTO `administrations` (`id`, `rec_date`, `fullname`, `dob`, `mobile`, `emailid`, `password`, `staff_code`, `position`, `role`, `isActive`, `isDelete`) VALUES
(1, '2023-10-12 05:03:22', 'Verloop Web', NULL, '9408881214', 'info@verloopweb.com', '$2y$12$0Im1l2nlATy8tP4RxI4AUutFped/SriEy5bI7DXfHQ3zZp0Rjetkm', NULL, NULL, 6, 1, 0),
(57, '2026-03-24 11:14:42', 'arrowcapital', NULL, '9016460150', 'info@arrowcapital.in', '$2y$12$jaUXsPRujujw8FCD3czJSOri348cJqPU8PqLUdmPMLhsms2BeuEYS', '8187', NULL, 0, 1, 0),
(58, '2026-03-30 17:24:20', 'Loan Agent', NULL, '9016460150', 'support@arrowcapital.in', '$2y$12$czQkPDf9t487Sq9Ehz1fI.9J71jUac8H.JmwWrgYCM9RIIkzIFO7m', '1822', NULL, 2, 1, 0),
(59, '2026-03-30 18:12:56', 'Self Apply Agent', NULL, '9016460150', 'staff@arrowcapital.in', '$2y$12$unO2YiE5R01SoHYpTv/e7et5z3.t0wKz4D5tLRj4/7djqn2PQfVVO', '1177', NULL, 5, 1, 0),
(60, '2026-04-06 15:33:30', 'Arvind Makwana', NULL, '9023987358', 'admin@indiakarobar.com', '$2y$12$fASeXU4hN8r6E.kJOc885.HygOOoIUe5oymNDXd/iEdgfIHBrVHoe', '3803', NULL, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `adscontent`
--

DROP TABLE IF EXISTS `adscontent`;
CREATE TABLE IF NOT EXISTS `adscontent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ad_type` tinyint NOT NULL DEFAULT '1' COMMENT '1=text, 2=image',
  `ad_content` longtext NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=no, 1=yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `airpay_entry`
--

DROP TABLE IF EXISTS `airpay_entry`;
CREATE TABLE IF NOT EXISTS `airpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `statuscode` varchar(256) DEFAULT NULL,
  `transactionid` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aisensy_settings`
--

DROP TABLE IF EXISTS `aisensy_settings`;
CREATE TABLE IF NOT EXISTS `aisensy_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'SA, LA, LAT',
  `type` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'remarketing, buy now, pgsuccess, pgfailed',
  `api_key` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_name` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aisensy_settings`
--

INSERT INTO `aisensy_settings` (`id`, `rec_date`, `product`, `type`, `api_key`, `campaign_name`, `media_url`, `media_filename`) VALUES
(1, '2025-08-19 18:13:52', 'SA', 'remarketing', '#', '#', '#', '#'),
(2, '2025-08-19 18:13:52', 'LA', 'remarketing', '#', '#', '#', '#'),
(3, '2025-08-19 18:15:10', 'LAT', 'remarketing', '#', '#', '#', '#'),
(4, '2025-08-19 19:21:03', 'LA', 'getoffer', '#', '#', '#', '#'),
(5, '2025-08-19 19:34:15', 'LAT', 'getoffer', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `application_remarks`
--

DROP TABLE IF EXISTS `application_remarks`;
CREATE TABLE IF NOT EXISTS `application_remarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entry_at` datetime DEFAULT NULL,
  `service` tinyint DEFAULT NULL,
  `subject` varchar(256) NOT NULL,
  `notes` longtext,
  `application_id` int NOT NULL,
  `staff_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `loan_application_id` (`application_id`),
  KEY `administration_id` (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_remarks`
--

INSERT INTO `application_remarks` (`id`, `rec_date`, `entry_at`, `service`, `subject`, `notes`, `application_id`, `staff_id`) VALUES
(1, '2026-03-30 15:54:56', '2026-03-30 15:54:56', 5, '9', '', 5, 5),
(2, '2026-03-31 15:39:12', '2026-03-31 15:39:12', 5, '9', '', 7, 5),
(3, '2026-03-31 14:45:52', '2026-03-31 14:45:52', 5, '9', '', 6, 5),
(4, '2026-04-02 12:04:41', '2026-04-02 12:04:41', 5, '9', '', 13, 5),
(5, '2026-04-02 12:10:34', '2026-04-02 12:10:34', 5, '9', '', 12, 5),
(6, '2026-04-06 15:09:18', '2026-04-06 15:09:18', 5, '9', '', 27, 5),
(7, '2026-04-06 15:37:04', '2026-04-06 15:37:04', 5, '9', '', 28, 5),
(8, '2026-04-06 15:49:00', '2026-04-06 15:49:00', 5, '9', '', 26, 5),
(9, '2026-04-06 16:50:26', '2026-04-06 16:50:26', 5, '9', '', 30, 5),
(10, '2026-04-06 16:56:01', '2026-04-06 16:56:01', 5, '9', '', 32, 5),
(11, '2026-04-07 13:22:49', '2026-04-07 13:22:49', 5, '9', '', 3, 5),
(12, '2026-04-10 14:46:32', '2026-04-10 14:46:32', 5, '9', '', 40, 5),
(13, '2026-04-11 07:12:38', '2026-04-11 07:12:38', 5, '9', '', 103, 5),
(14, '2026-04-11 08:32:54', '2026-04-11 08:32:54', 5, '9', '', 99, 5),
(15, '2026-04-11 10:51:03', '2026-04-11 10:51:03', 5, '9', '', 123, 5),
(16, '2026-04-11 14:19:09', '2026-04-11 14:19:09', 5, '9', '', 137, 5),
(17, '2026-04-11 16:06:45', '2026-04-11 16:06:45', 5, '9', '', 148, 5),
(18, '2026-04-12 09:44:30', '2026-04-12 09:44:30', 5, '9', '', 170, 5),
(19, '2026-04-12 22:09:12', '2026-04-12 22:09:12', 5, '9', '', 228, 5),
(21, '2026-04-14 11:02:20', '2026-04-14 11:02:20', 5, '9', '', 144, 5),
(22, '2026-04-15 09:11:29', '2026-04-15 09:11:29', 5, '9', '', 290, 5),
(23, '2026-04-15 09:34:55', '2026-04-15 09:34:55', 5, '9', '', 286, 5),
(24, '2026-04-16 01:58:45', '2026-04-16 01:58:45', 5, '9', '', 311, 5),
(25, '2026-04-16 02:16:22', '2026-04-16 02:16:22', 5, '9', '', 313, 5),
(26, '2026-04-16 12:10:51', '2026-04-16 12:10:51', 5, '9', '', 371, 5),
(27, '2026-04-16 15:05:11', '2026-04-16 15:05:11', 5, '9', '', 400, 5),
(28, '2026-04-16 19:29:41', '2026-04-16 19:29:41', 5, '9', '', 412, 5),
(29, '2026-04-16 23:28:14', '2026-04-16 23:28:14', 5, '9', '', 429, 5),
(30, '2026-04-17 02:27:15', '2026-04-17 02:27:15', 5, '9', '', 458, 5),
(31, '2026-04-17 03:57:38', '2026-04-17 03:57:38', 5, '9', '', 463, 5),
(32, '2026-04-17 06:05:57', '2026-04-17 06:05:57', 5, '9', '', 427, 5),
(33, '2026-04-17 07:27:48', '2026-04-17 07:27:48', 5, '9', '', 333, 5),
(34, '2026-04-17 10:22:41', '2026-04-17 10:22:41', 5, '9', '', 484, 5),
(35, '2026-04-17 11:18:53', '2026-04-17 11:18:53', 5, '9', '', 493, 5),
(36, '2026-04-17 11:33:08', '2026-04-17 11:33:08', 5, '9', '', 497, 5),
(37, '2026-04-17 13:31:19', '2026-04-17 13:31:19', 5, '9', '', 523, 5),
(38, '2026-04-17 14:07:24', '2026-04-17 14:07:24', 5, '9', '', 530, 5),
(39, '2026-04-17 15:45:32', '2026-04-17 15:45:32', 5, '9', '', 542, 5),
(40, '2026-04-17 17:39:42', '2026-04-17 17:39:00', 5, '12', 'verification done', 311, 57),
(41, '2026-04-17 17:42:31', '2026-04-17 17:42:31', 5, '9', '', 552, 5),
(42, '2026-04-17 17:48:56', '2026-04-17 17:48:00', 5, '12', 'verification done', 429, 57),
(43, '2026-04-17 19:26:08', '2026-04-17 19:26:08', 5, '9', '', 557, 5),
(44, '2026-04-17 20:09:57', '2026-04-17 20:09:57', 5, '9', '', 562, 5),
(45, '2026-04-18 09:16:48', '2026-04-18 09:16:48', 5, '9', '', 648, 5),
(46, '2026-04-18 09:27:02', '2026-04-18 09:27:02', 5, '9', '', 651, 5),
(47, '2026-04-18 09:53:47', '2026-04-18 09:53:47', 5, '9', '', 656, 5),
(48, '2026-04-18 11:08:03', '2026-04-18 11:08:03', 5, '9', '', 674, 5),
(49, '2026-04-18 11:18:52', '2026-04-18 11:18:52', 5, '9', '', 683, 5),
(50, '2026-04-18 11:25:54', '2026-04-18 11:25:54', 5, '9', '', 687, 5),
(51, '2026-04-18 12:09:57', '2026-04-18 12:09:57', 5, '9', '', 681, 5),
(52, '2026-04-18 14:42:49', '2026-04-18 14:42:49', 5, '9', '', 723, 5),
(53, '2026-04-18 16:11:09', '2026-04-18 16:11:09', 5, '9', '', 745, 5),
(54, '2026-04-18 19:33:44', '2026-04-18 19:33:44', 5, '9', '', 774, 5),
(55, '2026-04-18 20:31:37', '2026-04-18 20:31:37', 5, '9', '', 485, 5),
(56, '2026-04-19 06:08:07', '2026-04-19 06:08:07', 5, '9', '', 519, 5),
(57, '2026-04-19 10:50:27', '2026-04-19 10:50:27', 5, '9', '', 503, 5),
(58, '2026-04-19 11:54:45', '2026-04-19 11:54:45', 5, '9', '', 680, 5),
(59, '2026-04-19 13:46:51', '2026-04-19 13:46:51', 5, '9', '', 834, 5),
(60, '2026-04-19 17:50:46', '2026-04-19 17:50:46', 5, '9', '', 907, 5),
(61, '2026-04-19 21:00:19', '2026-04-19 21:00:19', 5, '9', '', 441, 5),
(62, '2026-04-19 21:26:43', '2026-04-19 21:26:43', 5, '9', '', 462, 5),
(63, '2026-04-20 04:47:24', '2026-04-20 04:47:24', 5, '9', '', 941, 5),
(64, '2026-04-20 08:56:38', '2026-04-20 08:56:38', 5, '9', '', 1006, 5),
(65, '2026-04-20 09:35:22', '2026-04-20 09:35:22', 5, '9', '', 867, 5),
(66, '2026-04-20 10:07:09', '2026-04-20 10:07:09', 5, '9', '', 776, 5),
(67, '2026-04-20 10:35:10', '2026-04-20 10:35:10', 5, '9', '', 1024, 5),
(68, '2026-04-20 11:04:32', '2026-04-20 11:04:00', 5, '12', 'verification done', 674, 57),
(69, '2026-04-20 11:09:33', '2026-04-20 11:09:00', 5, '12', 'verification done', 687, 57),
(70, '2026-04-20 11:19:01', '2026-04-20 11:18:00', 5, '12', 'veri done', 745, 57),
(71, '2026-04-20 11:25:34', '2026-04-20 11:25:00', 5, '12', 'veri done', 519, 57),
(72, '2026-04-20 11:29:11', '2026-04-20 11:28:00', 5, '12', 'veri ok', 503, 57),
(73, '2026-04-20 11:32:12', '2026-04-20 11:32:00', 5, '12', 'veri okk', 680, 57),
(74, '2026-04-20 11:38:34', '2026-04-20 11:38:00', 5, '12', 'VERI OK', 907, 57),
(75, '2026-04-20 11:41:32', '2026-04-20 11:41:00', 5, '12', 'VERI OKK', 462, 57),
(76, '2026-04-20 11:48:53', '2026-04-20 11:48:00', 5, '12', 'VERI OKK', 867, 57),
(77, '2026-04-20 11:52:42', '2026-04-20 11:52:00', 5, '12', 'veri ok', 441, 57),
(78, '2026-04-20 12:41:49', '2026-04-20 12:41:49', 5, '9', '', 1048, 5),
(79, '2026-04-20 15:04:59', '2026-04-20 15:04:59', 5, '9', '', 1074, 5),
(80, '2026-04-20 15:18:24', '2026-04-20 15:18:24', 5, '9', '', 712, 5),
(91, '2026-04-20 16:16:48', '2026-04-18 16:16:00', 6, '18', 'not interested', 493, 57),
(84, '2026-04-20 16:12:50', '2026-04-18 16:12:00', 5, '12', 'veri ok', 562, 57),
(83, '2026-04-20 16:12:16', '2026-04-18 16:12:00', 5, '12', 'vero', 557, 57),
(85, '2026-04-20 16:13:21', '2026-04-18 16:13:00', 5, '12', 'veri ok', 552, 57),
(86, '2026-04-20 16:13:51', '2026-04-18 16:13:00', 5, '12', 'veri ok', 523, 57),
(87, '2026-04-20 16:14:24', '2026-04-18 16:14:00', 5, '12', 'veri ok', 333, 57),
(88, '2026-04-20 16:14:49', '2026-04-18 16:14:00', 5, '12', 'veri ok', 463, 57),
(89, '2026-04-20 16:15:14', '2026-04-18 16:15:00', 5, '12', 'veri ok', 458, 57),
(90, '2026-04-20 16:16:02', '2026-04-18 16:15:00', 5, '12', 'veri ok', 313, 57),
(92, '2026-04-20 17:21:57', '2026-04-20 17:21:57', 5, '9', '', 1066, 5),
(93, '2026-04-20 17:25:21', '2026-04-20 17:25:21', 5, '9', '', 1092, 5),
(94, '2026-04-20 20:34:27', '2026-04-20 20:34:27', 5, '9', '', 549, 5),
(95, '2026-04-20 20:41:24', '2026-04-20 20:41:24', 5, '9', '', 1050, 5),
(96, '2026-04-20 22:22:03', '2026-04-20 22:22:03', 5, '9', '', 1114, 5),
(97, '2026-04-20 23:21:20', '2026-04-20 23:21:20', 5, '9', '', 1112, 5),
(98, '2026-04-21 02:51:44', '2026-04-21 02:51:44', 5, '9', '', 1150, 5),
(99, '2026-04-21 06:36:02', '2026-04-21 06:36:02', 5, '9', '', 1156, 5),
(100, '2026-04-21 07:35:32', '2026-04-21 07:35:32', 5, '9', '', 1193, 5),
(101, '2026-04-21 09:38:11', '2026-04-21 09:38:11', 5, '9', '', 1175, 5),
(102, '2026-04-21 09:54:01', '2026-04-21 09:54:01', 5, '9', '', 1124, 5),
(103, '2026-04-21 10:04:58', '2026-04-21 10:04:58', 5, '9', '', 1025, 5),
(104, '2026-04-21 10:47:13', '2026-04-21 10:47:13', 5, '9', '', 1269, 5),
(105, '2026-04-21 10:53:04', '2026-04-21 10:53:04', 5, '9', '', 1181, 5),
(106, '2026-04-21 10:58:35', '2026-04-21 10:58:35', 5, '9', '', 1274, 5),
(107, '2026-04-21 11:01:15', '2026-04-21 11:01:15', 5, '9', '', 1275, 5),
(108, '2026-04-21 11:25:52', '2026-04-21 11:25:52', 5, '9', '', 1198, 5),
(109, '2026-04-21 11:29:41', '2026-04-21 11:29:41', 5, '9', '', 945, 5),
(110, '2026-04-21 12:03:27', '2026-04-21 12:03:27', 5, '9', '', 1300, 5),
(111, '2026-04-21 12:42:00', '2026-04-21 12:42:00', 5, '9', '', 430, 5),
(112, '2026-04-21 12:52:37', '2026-04-21 12:52:37', 5, '9', '', 610, 5),
(113, '2026-04-21 13:24:46', '2026-04-21 13:24:46', 5, '9', '', 1331, 5),
(114, '2026-04-21 13:52:06', '2026-04-21 13:52:06', 5, '9', '', 1345, 5),
(115, '2026-04-21 14:11:17', '2026-04-21 14:11:17', 5, '9', '', 1328, 5);

-- --------------------------------------------------------

--
-- Table structure for table `applylink_criteria`
--

DROP TABLE IF EXISTS `applylink_criteria`;
CREATE TABLE IF NOT EXISTS `applylink_criteria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `applylink_id` int NOT NULL,
  `criteria_id` int NOT NULL,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankapplylink`
--

DROP TABLE IF EXISTS `bankapplylink`;
CREATE TABLE IF NOT EXISTS `bankapplylink` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bankid` int NOT NULL,
  `roi` float(10,2) DEFAULT NULL,
  `tenures` tinyint DEFAULT NULL,
  `status_type` int DEFAULT NULL,
  `option1` varchar(599) DEFAULT NULL,
  `option2` varchar(599) DEFAULT NULL,
  `option3` varchar(599) DEFAULT NULL,
  `option4` varchar(599) DEFAULT NULL,
  `option5` varchar(599) DEFAULT NULL,
  `title` varchar(256) NOT NULL,
  `applyurl` varchar(256) NOT NULL,
  `is_recommended` tinyint NOT NULL DEFAULT '0' COMMENT '0=false,1=true',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankapplylink`
--

INSERT INTO `bankapplylink` (`id`, `rec_date`, `bankid`, `roi`, `tenures`, `status_type`, `option1`, `option2`, `option3`, `option4`, `option5`, `title`, `applyurl`, `is_recommended`, `isDelete`) VALUES
(1, '2025-05-01 20:23:29', 17, 10.50, 60, NULL, '100% Online Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Pre-Approved Loan Offer | Quick Process', 'https://www.cholamandalam.com/get-consumer-small-enterprise-loans', 0, 1),
(2, '2025-05-01 20:37:10', 15, 11.00, 60, NULL, '100% Online Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'You\'re Eligible For Pre-Approved Offer | Easy Application', 'https://www.dealsofloan.com/personal-loan', 0, 1),
(3, '2025-05-01 20:41:21', 18, 11.50, 60, NULL, '100% Online Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Profile Matches The Criteria | Easy Digital Process', 'https://www.mymudra.com/loan/personal-loan', 0, 1),
(4, '2025-05-01 21:18:20', 13, 10.50, 60, NULL, '100% Online Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Pre-Approved Loan Offer | Digital Process', 'https://pq.faircent.com/', 0, 1),
(5, '2025-05-03 15:52:03', 20, 11.00, 48, NULL, '100% Online Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'Your Criteria Matched For Pre-Approved Loan Offer | Quick Process', 'https://www.herofincorp.com/personal-loans', 0, 1),
(6, '2025-05-03 15:55:27', 36, 11.50, 48, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Criteria Matched For Pre-Approved Loan Offer | Quick Process', 'https://www.piramalfinance.com/loan', 0, 1),
(7, '2025-05-03 15:57:46', 38, 10.50, 60, NULL, 'Simple Online Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://www.incred.com/personal-loan/', 0, 0),
(8, '2025-05-03 16:01:29', 21, 11.50, 36, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://maximus.axisbank.co.in/external/customer/login?product=personal', 0, 1),
(9, '2025-05-03 16:04:55', 22, 11.00, 60, NULL, '100% Online Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'You’re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://www.bajajfinserv.in/personal-loan', 0, 1),
(10, '2025-05-03 16:08:34', 37, 10.50, 48, NULL, 'Simple Online Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'Your Pre-Approved Loan Offer | Quick Process', 'https://www.ujjivansfb.in/individual-loans?type=Personal-Individual-Loan', 0, 1),
(11, '2025-05-03 16:10:24', 23, 11.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://onlineapply.sbi.co.in/personal-banking/personal-loan', 0, 1),
(12, '2025-05-03 16:15:21', 24, 10.50, 48, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'You’re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://www.idbibank.in/personal-loan.aspx', 0, 1),
(13, '2025-05-03 16:23:55', 13, 11.00, 60, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Criteria Matched For Pre-Approved Loan Offer | Quick Process', 'https://pq.faircent.com/', 0, 1),
(14, '2025-05-03 16:26:05', 14, 10.50, 60, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://apply.finnable.com/login', 0, 1),
(15, '2025-05-03 16:31:00', 27, 10.00, 60, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'You’re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://www.lendingkart.com/business-loan/check-eligibility', 0, 1),
(16, '2025-05-03 17:04:30', 11, 10.50, 60, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://partner.werize.com/MyBusiness/KREDBAZ%20SERVICE%20INDIA%20PRIVATE%20LIMITED/d2266f89-d2b0-4956-ba75-e95eca9cd08a', 1, 0),
(17, '2025-05-03 17:13:29', 28, 11.50, 48, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Criteria Matched For Pre-Approved Loan Offer | Quick Process', 'https://app.upwards.in/login', 0, 1),
(18, '2025-05-03 17:15:19', 29, 11.00, 36, NULL, 'Simple Online Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'You’re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://moneyview.in/personal-loan', 0, 0),
(19, '2025-05-03 17:17:31', 39, 11.50, 48, NULL, 'Simple Online Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://www.smfgindiacredit.com/personal-loan.aspx', 0, 1),
(20, '2025-05-03 17:19:02', 40, 10.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://www.fibe.in/personal-loan/', 0, 0),
(21, '2025-05-03 17:23:18', 30, 11.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://induseasycredit.indusind.com/customer/personal-loan/new-lead', 0, 1),
(22, '2025-05-03 17:27:31', 31, 10.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Pre-Approved Loan Offer | Quick Process', 'https://v.hdfcbank.com/personal-business-loan.html', 0, 1),
(23, '2025-05-03 17:29:46', 32, 11.50, 48, NULL, 'Simple Online Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://www.tatacapital.com/online/loans/personal-loans/apply-now-personal-loan', 0, 1),
(24, '2025-05-03 17:32:08', 33, 10.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://finance.adityabirlacapital.com/personal-finance/personal-loan', 0, 1),
(25, '2025-05-03 17:34:11', 41, 11.50, 48, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'Your Pre-Approved Loan Offer | Quick Process', 'https://personalloan.federalbank.co.in/', 0, 1),
(26, '2025-05-03 17:42:28', 34, 11.00, 48, NULL, '100% Digital Process', 'Convenient EMI Options', 'Min. Documentation', NULL, NULL, 'You’re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://www.icicibank.com/personal-banking/loans/personal-loan', 0, 1),
(27, '2025-05-03 17:44:15', 42, 10.50, 48, NULL, 'Simple Online Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Criteria Matched For Pre-Approved Loan Offer | Quick Process', 'https://poonawallafincorp.com/personal-loan/apply-for-loan', 0, 1),
(28, '2025-05-03 17:52:25', 35, 10.50, 60, NULL, '100% Online Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://www.yesbank.in/personal-banking/loans/personal-loan', 0, 1),
(29, '2025-06-05 12:49:55', 8, 10.50, 60, NULL, '100% Online Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'You\'re Eligible For Pre-Approved Loan Offer | Quick Process', 'https://www.prefr.com/personal-loan', 1, 0),
(30, '2025-06-07 20:56:34', 45, 10.50, 60, NULL, '100% Digital Process', 'Low EMI Options', 'Min. Paperwork', NULL, NULL, 'You\'re Eligible For Pre-Approved Loan Offer | Simple Process', 'https://web.moneytap.com/', 0, 0),
(31, '2025-06-07 20:58:24', 46, 11.00, 48, NULL, '100% Online Process', 'Low EMI Options', 'Min. Documentation', NULL, NULL, 'Your Eligibility Matches The Criteria | Instant Process', 'https://applyonline.ramfincorp.com/', 0, 0),
(32, '2025-06-28 16:05:55', 13, 10.50, 60, NULL, '100% Online Process', 'Convenient EMI Options', 'Min. Paperwork', NULL, NULL, 'Your Eligibility Matches The Criteria | Easy & Quick Process', 'https://in.faircentpro.com/?utm_source=wl&utm_medium=Mailer&campaign_name=Borrower_Partner&agf=WLA113767', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bank_name` varchar(100) NOT NULL,
  `bank_image` varchar(255) NOT NULL,
  `order_no` int NOT NULL DEFAULT '0',
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `rec_date`, `bank_name`, `bank_image`, `order_no`, `isActive`, `isDelete`) VALUES
(1, '2025-03-30 16:20:24', 'Moneyview', '1706270037.png', 1, 0, 1),
(2, '2024-01-26 09:47:04', 'Cashe', '1706262434.png', 2, 0, 0),
(4, '2024-06-17 10:30:11', 'prayosha', '1718600399.png', 0, 0, 1),
(5, '2024-06-27 18:13:13', 'sef', '1719492202.jpg', 0, 1, 1),
(6, '2025-01-07 14:33:41', 'InvestKraft', '1736240636.jpg', 3, 1, 1),
(7, '2025-01-07 14:34:23', 'InvestKraft', '1736240673.jpg', 3, 1, 1),
(8, '2025-02-04 13:03:49', 'Prfer', '1738654938.png', 0, 1, 0),
(9, '2025-02-04 13:03:49', 'Prfer', '1738654938.png', 0, 1, 1),
(10, '2025-02-04 13:03:49', 'Prfer', '1738654938.png', 0, 1, 1),
(11, '2025-05-02 12:46:54', 'Werize', '1746170219.png', 0, 1, 0),
(12, '2025-02-04 13:14:07', 'Fibe', '1738655067.png', 0, 0, 0),
(13, '2025-05-02 12:46:14', 'Faircent', '1746170179.png', 0, 1, 0),
(14, '2025-02-04 13:15:16', 'Finnable', '1738655142.png', 0, 1, 0),
(15, '2025-05-02 12:46:01', 'Deals Of Loan', '1746170165.png', 0, 0, 1),
(16, '2025-05-02 12:46:46', 'Urbanmoney', '1746170211.png', 0, 1, 0),
(17, '2025-05-02 12:45:31', 'Cholamandalam', '1746170140.png', 0, 1, 0),
(18, '2025-05-02 12:46:26', 'My Mudra', '1746170191.png', 0, 0, 1),
(19, '2025-05-02 13:50:22', 'IIFL', '1746174044.png', 0, 0, 0),
(20, '2025-05-02 17:15:59', 'Hero Fincorp', '1746186387.png', 0, 0, 0),
(21, '2025-05-02 17:16:48', 'Axis Bank', '1746186577.png', 0, 0, 0),
(22, '2025-05-02 17:19:51', 'Bajaj Finserv', '1746186617.png', 0, 0, 0),
(23, '2025-05-02 17:20:45', 'SBI', '1746186746.png', 0, 0, 0),
(24, '2025-05-02 17:22:43', 'IDBI Bank', '1746186780.png', 0, 0, 0),
(25, '2025-05-02 17:23:20', 'Finnable', '1746186824.png', 0, 0, 0),
(26, '2025-05-02 17:24:03', 'PaySense', '1746186861.png', 0, 0, 1),
(27, '2025-05-02 17:33:31', 'LendingKart', '1746187457.png', 0, 0, 0),
(28, '2025-05-02 17:34:40', 'Upwards', '1746187511.png', 0, 0, 0),
(29, '2025-05-02 17:35:25', 'MoneyView', '1746187540.png', 0, 0, 0),
(30, '2025-05-02 17:35:58', 'IndusInd Bank', '1746187764.png', 0, 0, 0),
(31, '2025-05-02 17:39:40', 'HDFC Bank', '1746187798.png', 0, 0, 0),
(32, '2025-05-02 17:49:42', 'Tata Capital', '1746188400.png', 0, 0, 0),
(33, '2025-05-02 17:50:15', 'Aditya Birla Capital', '1746188435.png', 0, 0, 0),
(34, '2025-05-02 17:50:48', 'ICICI Bank', '1746188529.png', 0, 0, 0),
(35, '2025-05-02 17:52:23', 'Yes Bank', '1746188633.png', 0, 0, 0),
(36, '2025-05-02 17:55:06', 'Piramal Finance', '1746188726.png', 0, 0, 0),
(37, '2025-05-02 17:55:27', 'Ujjivan Small Finance', '1746188745.png', 0, 0, 0),
(38, '2025-05-02 18:30:43', 'InCred Finance', '1746190862.png', 0, 0, 0),
(39, '2025-05-02 18:31:26', 'SMFG India Credit', '1746191024.png', 0, 0, 0),
(40, '2025-05-02 18:34:00', 'Fibe', '1746191054.png', 0, 0, 0),
(41, '2025-05-02 18:34:35', 'Federal Bank', '1746191097.png', 0, 0, 0),
(42, '2025-05-02 18:35:15', 'Poonawalla Fincorp', '1746191145.png', 0, 0, 0),
(43, '2025-06-05 12:07:07', 'MoneyTap', '1749105801.png', 0, 0, 0),
(44, '2025-06-05 12:13:24', 'Ram Fincorp', '1749105817.png', 0, 0, 0),
(45, '2025-06-07 18:22:41', 'Freo (by MoneyTap)', '1749300818.png', 0, 0, 0),
(46, '2025-06-07 18:23:51', 'Ram Fincorp', '1749300844.png', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bulksms`
--

DROP TABLE IF EXISTS `bulksms`;
CREATE TABLE IF NOT EXISTS `bulksms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(250) NOT NULL,
  `mobile` varchar(80) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `isDnd` tinyint NOT NULL DEFAULT '0' COMMENT '0=no dnd, 1 = dnd',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=not delete, 1 = delete',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardoffer`
--

DROP TABLE IF EXISTS `cardoffer`;
CREATE TABLE IF NOT EXISTS `cardoffer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL DEFAULT '0',
  `offerpage` int NOT NULL DEFAULT '1' COMMENT '1 - la offer 1,\r\n2 - la offer 2,\r\n3 - la offer 3,\r\n4 - sa offer 1,\r\n5 - sa offer 2,\r\n6 - sa offer 3,\r\n7 - sa offer 4,\r\n8 - la offer 4,\r\n9 - sa offer 5,\r\n10 - la offer 5',
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `emailid` varchar(256) NOT NULL,
  `card_number` varchar(256) DEFAULT NULL,
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(50) DEFAULT NULL,
  `isCustomer` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No. 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
CREATE TABLE IF NOT EXISTS `careers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `descriptions` longtext NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_enquiries`
--

DROP TABLE IF EXISTS `career_enquiries`;
CREATE TABLE IF NOT EXISTS `career_enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `applyfor` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `keyskills` longtext NOT NULL,
  `city` varchar(256) DEFAULT NULL,
  `server_ip` varchar(256) DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashfree_entry`
--

DROP TABLE IF EXISTS `cashfree_entry`;
CREATE TABLE IF NOT EXISTS `cashfree_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer,2=Channel,11=SelfApply,12=Loan Agent, 3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4,21=SA_Offer_5,22=LA_Offer_5,31=SA_OFFER_6,32=LA_OFFER_6,41=SA_OFFER_7,42=LA_OFFER_7	',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `referenceid` varchar(256) DEFAULT NULL,
  `txstatus` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channel_partners`
--

DROP TABLE IF EXISTS `channel_partners`;
CREATE TABLE IF NOT EXISTS `channel_partners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT NULL,
  `first_name` varchar(155) NOT NULL,
  `last_name` varchar(155) NOT NULL,
  `mobile` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` text NOT NULL,
  `company_code` varchar(99) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `vat_gst_no` varchar(99) DEFAULT NULL,
  `phone` varchar(99) NOT NULL,
  `website` varchar(155) NOT NULL,
  `address` longtext,
  `city` varchar(99) DEFAULT NULL,
  `state` varchar(99) DEFAULT NULL,
  `pincode` varchar(99) DEFAULT NULL,
  `country` varchar(99) NOT NULL DEFAULT 'IN',
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '1=active,0=deactive',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=no, 1=yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cipherpayentry`
--

DROP TABLE IF EXISTS `cipherpayentry`;
CREATE TABLE IF NOT EXISTS `cipherpayentry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL COMMENT '1=Customer,2=Channel,11=SelfApply,12=Loan Agent, 3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4',
  `userid` int NOT NULL,
  `orderid` varchar(99) COLLATE utf8mb3_unicode_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `txstatus` varchar(99) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `paymentmode` varchar(99) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `click_counts`
--

DROP TABLE IF EXISTS `click_counts`;
CREATE TABLE IF NOT EXISTS `click_counts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `applylink_id` int NOT NULL,
  `counts` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

DROP TABLE IF EXISTS `contact_enquiry`;
CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `server_ip` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `criteria_list`
--

DROP TABLE IF EXISTS `criteria_list`;
CREATE TABLE IF NOT EXISTS `criteria_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `criteria` varchar(99) NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0',
  `isActive` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enroll_services`
--

DROP TABLE IF EXISTS `enroll_services`;
CREATE TABLE IF NOT EXISTS `enroll_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `serviceid` int NOT NULL,
  `purchase_date` date NOT NULL,
  `valid_upto` date NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `paymentid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `serviceid` (`serviceid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fb_ads_entry`
--

DROP TABLE IF EXISTS `fb_ads_entry`;
CREATE TABLE IF NOT EXISTS `fb_ads_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int DEFAULT NULL,
  `fbclid` varchar(299) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_data` longtext COLLATE utf8mb4_unicode_ci,
  `received_data` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `important_update`
--

DROP TABLE IF EXISTS `important_update`;
CREATE TABLE IF NOT EXISTS `important_update` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(256) NOT NULL,
  `descriptions` longtext NOT NULL,
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_pages`
--

DROP TABLE IF EXISTS `info_pages`;
CREATE TABLE IF NOT EXISTS `info_pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `content` longtext,
  `rec_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_pages`
--

INSERT INTO `info_pages` (`id`, `slug`, `content`, `rec_date`, `status`) VALUES
(1, 'privacy-policy', '<p dir=\"ltr\"><span style=\"font-size:16px\">The privacy of every user of Arrow capital is important for the company. This Privacy Policy mentions the data and information we collect about you, how we treat it, with whom we share it, and how we preserve and protect it.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">In the regular course of our business through this website, we gather your personal information through several sources, including:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:16px\">Information from you, such as applications or other sources that include your name, address, marital status, employment, assets and income; and</span></li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, other financial services firms, banks, etc.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We&#39;re also dedicated to protecting the users of our website by addressing potential privacy concerns. Our privacy guidelines apply to all users globally. This policy applies to all information, in whatever form, relating to Arrow capital&rsquo;s business activities across the world and to all information handled by Arrow capital relating to other companies and organizations with whom it deals. It also covers all IT and information communications facilities operated by Arrow capital or on its behalf.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">This Privacy Policy covers the security, information, IT equipment, and use of Arrow capital, a company incorporated under the laws presently in force in India and having its registered office at {#VAR_ADDRESS#}, and its affiliates. It also includes the use of email, internet, voice, and mobile IT equipment. This policy applies to all Arrow capital Users, Clients, and employees (hereafter referred to as &#39;individuals&#39;).</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Subject to arbitration, only the courts and tribunals of {#VAR_CITY#}, India, shall have exclusive jurisdiction with respect to any suit, action, or any other proceeding arising out of or in relation to the Loan Documents. Nothing contained in this clause shall limit any right of the Lender to commence any legal action or proceedings arising in relation to the Loan or the Loan Documents in any other court, tribunal, or another appropriate forum, competent jurisdiction, and the Borrower and/or the Guarantor hereby consent to that jurisdiction.</span></p>\r\n\r\n<p style=\"margin-left:0pt; margin-right:0pt\"><span style=\"font-size:20px\"><strong>How Arrow capital manages and protects Your Personal Information?</strong></span></p>\r\n\r\n<p style=\"margin-left:0pt; margin-right:0pt\"><span style=\"font-size:16px\">Arrow capital doesn&rsquo;t sell or trade information about current or former clients to third parties. We may disclose your personal information as necessary to:</span></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Effect, administer, or enforce a transaction that you request or authorize;</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Process or service a financial product or service that you request or authorize; or</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Maintain or service your account with us or with another entity.</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital may also disclose your personal information and data for everyday business purposes to organizations or firms that provide consulting, technology, or other services for us and agree to maintain its confidentiality; others, such as attorneys, trustees, family members, or others who are authorized to represent you, your estate, or a joint or co-owner of your account; regulatory agencies; or as we are otherwise permitted or required by law or process of law.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital restricts access to your personal information to our employees and to permitted third parties who need to know that information to provide products or services for us or to provide, process, or maintain any security, account, or investment product, service, or program for you or your benefit. To protect your personal information from unauthorized access and use, we have adopted administrative, technical, and physical security procedures that comply with the Laws in India. These measures include computer safeguards and secured files and buildings.</span></p>\r\n\r\n<p style=\"margin-left:0pt; margin-right:0pt\"><span style=\"font-size:20px\"><strong>What Arrow capital can do with your personal information:</strong></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We may use your personal information that we collect or that is provided to us for the following reasons:</span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:16px\">Considering any application for an account or service;</span></li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Carrying out our business functions and activities;</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Collecting amounts you owe us, including taking enforcement action;</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Exercising our rights and fulfilling our obligations under any agreement with you;</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Exercising our rights and fulfilling our obligations for the purposes of complying with all applicable laws, including those relating to money laundering, terrorist financing, bribery, corruption, tax evasion, fraud, and similar; and managing all economic and trade sanction risks;</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Generally administering and monitoring services provided to you (or any related entity); and</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Providing you with information about our other services, or the services of selected third parties in which we think you may have an interest, including by post, telephone, and electronic message &ndash; you can opt-out of receiving information about our other services and/or the services of selected third parties by informing us in writing.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><span style=\"font-size:20px\"><strong>Sharing of Personal Information with Third Parties:</strong></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital does not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect our or others&#39; rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>Security and Confidentiality:</strong></span></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">The protection and security of your personal information are important to us. We generally follow industry-standard information security tools and measures, as well as internal procedures and strict guidelines, to prevent information submitted to us, both during transmission and once we receive it, from misuse and data leakage. No method of transmission over the internet or method of electronic storage is 100% secure, however. Therefore, while we strive to use commercially acceptable means to protect your personal information, which considerably reduces the risks of data misuse, we cannot guarantee its absolute security. To notify the company about any security vulnerability or potential data breach, please contact us at {#VAR_Email ID#}, and we will take the appropriate measures to address such an incident, as deemed necessary.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Our employees can access the information on a &quot;need-to-know&quot; basis and are subject to confidentiality obligations.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>DATA ACCURACY</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Personal data must be accurate and, where necessary, kept up-to-date. It must be corrected or deleted without delay when inaccurate. It is advisable that you ensure that the personal data we use and hold is accurate, complete, kept up-to-date, and relevant to the purpose for which we collected it. You must check the accuracy of any personal data at the point of collection and at regular intervals afterwards. You must take all reasonable steps to destroy or amend inaccurate or out-of-date personal data.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>LIMIT OF LIABILITY</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We shall not be liable for any confusion caused as a result of any of your actions or omissions of any action or anything as a result of your viewing, reading, or listening to any content. Although we will do our best to provide constant, uninterrupted access to our website, we accept no responsibility or liability for any interruption or delay.<br />\r\nIn no event will our total liability to you for all damages arising from your use of the service or information, materials, or products included on or otherwise made available to you through the service exceed the amount you paid for the service related to your claim.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We have no liability for any loss, damage, or misappropriation of your files under any circumstances or for any consequences related to changes, restrictions, suspension, or termination of your service or the agreement. These liabilities shall apply to you even if their remedies shall fail their essential purpose.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>USAGE OF ADVERTISING ID</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">When you are using our application that incorporates our services, we may also automatically record your Google and/or any other Advertising ID (if you are using an Android device) or your Advertising Identifier (IDFA - if you are using an IOS device; together with the Google and/or any other Advertising ID-&quot;Mobile Advertising IDs&quot;), for advertising or analytics purposes. The said Advertising ID is an anonymous identifier, provided by Google. If your device has an Advertising ID, we may collect and use it for advertising and user analytics purposes. If your device does not have an Advertising ID, we may use other persistent identifiers. The information collected may also be stored on your device. You can reset your mobile Advertising ID or opt-out of receiving targeted ads through your mobile Advertising IDs which are provided in our settings.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>COMPLIANCE &amp; COOPERATION WITH REGULATORS</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We regularly review this Privacy Policy and make sure that we process your personal information in ways that comply with regulations currently in force in India. We firmly comply with legal frameworks, including data protection laws relating to the transfer of data.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>CONSENT</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">By using our website, you consent to our website&#39;s Privacy Policy. The usage of the website shall be construed as an acceptance of the Privacy Policy.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>GRIEVANCES</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">For any complaints and/or inquiries, you can send us formal written inquiries or complaints at {#VAR_Email ID#}. All inquiries and/or complaints shall be examined and will be resolved expeditiously. Our team of experts will respond by contacting the person who made such inquiries and/or complaints. We work with the appropriate regulatory authorities, including local data protection authorities, to resolve any complaints regarding the transfer of your data that we cannot resolve with you directly.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>MODIFICATION OF THE POLICY</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">We reserve the right to modify this Privacy Policy at our own independent decision at any time. If the changes are significant, the Company shall spare no efforts to apprise its clientele and provide a prominent notice (including, for certain services, email notification of Privacy Policy changes). It is pertinent to remember that it shall be the Clients&#39; responsibility to read the Policy as amended every once in a while.</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>USAGE OF COOKIES/COOKIES POLICY</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission, which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements, and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</span></p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:1339px; position:absolute; top:252.75px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '2024-01-26 12:27:05', 1);
INSERT INTO `info_pages` (`id`, `slug`, `content`, `rec_date`, `status`) VALUES
(2, 'terms-conditions', '<p dir=\"ltr\"><span style=\"font-size:16px\">In these Terms &amp; Conditions, the words such as &ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;company&rdquo;, and &ldquo;us&rdquo; refer to Arrow capital and its undertaken system. And the words such as &ldquo;you&rdquo;, &ldquo;your&rdquo; refer to Arrow capital users, customers, etc.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Here are the terms and conditions for Customers, Employees, and every user of our website - {#VAR#_Website#}. So, the terms and conditions are applied as per your role. You must read all the below-mentioned Terms &amp; Conditions carefully.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">The Company wishes to offer the services under the terms and conditions set forth and the user/customer wishes to be associated unconditionally with these terms and conditions.<br />\r\n<br />\r\nTherefore, in consideration of the agreements contained in this, the parties, intending to be legally bound, agree to the correctness and authenticity of the following details given to the company:</span></p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Information from you, such as applications or other forms (which include your name, address, marital status, employment, assets and income); and</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, and other financial services firms, banks, etc.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">If the company by any source finds out anyone bad-mouthing or defaming the company&#39;s reputation or company&#39;s members then strict legal action will be taken against the individual or group.<br />\r\nWe&#39;re also serious about protecting our users by addressing potential privacy concerns. Our terms and condition guidelines apply to all users across the world. These terms and conditions apply to all information, in whatever form, relating to Arrow capital&#39;s business activities worldwide, and to all information handled by Arrow capital, relating to other organizations with whom it deals. It also covers all IT and information communications facilities operated by Arrow capital or on its behalf.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>SUBSCRIPTION TERMS AND CONDITIONS:</strong></span></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The payment of subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital subscription is not transferable and is only valid up to its date of expiry (valid as per subscription) and the subscription may not be used by any person other than the purchaser.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Renewal terms and conditions are at the discretion of Arrow capital.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The subscription can only be used on/for our website.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>CUSTOMER TERMS AND CONDITIONS:</strong></span></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The payment of Subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company only takes the cost of the Subscription. No other tip of service is charged.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Customers can use the Subscription only for loan purposes with given benefits. Also, buying a Subscription lets you apply for a loan and it doesn&rsquo;t guarantee loan approval as the final loan approval depends on the banks and the customer profile. If the loan is rejected, you can still avail other benefits of the Subscription.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If a customer is viewing any advertisement/promotional content of the company and then approaching the company thinking that he/she will get the loan approval based on the advertisement, then it must be noted that a loan application will only be submitted once the customer buys Arrow capital&rsquo;s Subscription. Even after buying the Subscription, the final loan approval depends on the bank(s) and customer profile. If the customer&rsquo;s profile doesn&rsquo;t match loan eligibility criteria, he/she won&rsquo;t be able to get a loan. Still, they can avail other benefits of the Subscription.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Subscription can be used only by the persons who have purchased it and not by any other person(s), source or third party.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If a customer reference does payment through the customer&#39;s own referral link which is provided by the company and if that shows in the customer&#39;s portal then the only company will give the reference payout of that customer.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If the customer loan is approved in our company and he/she denies that loan approval then also Subscription payment would not be refundable.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan only and the company never misuses them. Just for security, after completing the loan process, the customer can go to the concerned bank and cancel their cheque. The company is not responsible if any problems/disputes arise in the future.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If you do not give the OTP, documents, or document query for verification to the company&#39;s employee for the loan process, then your file will be rejected. (According to the criteria, if your file matches without OTP, your loan will be processed).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If our company&#39;s executive asks you for any payment transaction OTP, do not provide it. If the customer pays any charges other than the charge of the Subscription, the company won&rsquo;t be responsible for the same.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If a customer has any queries regarding the loan process then he/she would have to contact the department where their files are in process.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">We will verify your documents in multiple banks; so whatever documents are submitted by customers in our company that will match with any bank criteria, in that bank only we will proceed with the loan process. For example, if your file will match in 2 banks then our company&#39;s login department will login your document only in that 2 banks. The verification is done by the company&#39;s employee and there is no proof available for the same.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The document will be verified by the company in multiple banks. If your documents match the criteria of the bank, then the login process will be done in that bank. If your documents do not match the criteria of a bank, the company will give you a solution. You can take the solution and reapply after a certain period (as per Subscription) - and this will be shown on the customer portal.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">It is not fixed that the customer file will be logged in only in the banks listed on the company website. It may be logged in/verified in other banks also, depending on the customer file.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our company is not taking extra charges other than Subscription charges. If any third-party charges you then our company is not responsible for that.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">There are no processing or file charges for customer loan approval. There is only one charge and that&#39;s only for the Subscription - validity as per Subscription.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our company will log in customer files as per their requirements. (Example: If customer requirement is INR 1 lakh and if some bank criteria is up to INR 50,000 then we will not log in their file in that bank).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Wherever the customer file is logged in by the company, these details will not be given to any customer in written or digital form.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Loan offers and the pre-approval loans process depend only on the bank&#39;s rules and that type of loan is given only on customer behaviour. So, there is so much difference between that type of process and the company&#39;s process. If that loan is rejected in our company but gets approved by another company/source then the customer can&#39;t blame our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Loan approval depends on your profile so if your documents are perfect and as per the bank criteria then you will get a loan through our company</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The loan information is only given to the person who has applied for the loan.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">During the loan processing time, if any customer would not be in contact with us for 3 days, then that file will be rejected by our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If your file is rejected in our company, then the customer has to make sure that they have to re-submit their documents, with the implemented company-suggested solution, in our company after a certain period (as per Subscription).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company is not responsible if the customer loan is rejected by any queries.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If the customer will apply for the first time but his/her loan is rejected in our company then the company will give them a reason and solution for that. So at re-applying time if the customer will not resubmit a file with the solution implemented then the file will be again rejected in our company for the same reason. Still, the final loan approval will depend on the customer profile and the bank&#39;s criteria and rules &amp; regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will provide only the reason for rejection to the customer and it would not be provided in the form of hard or soft copy - it will only be shown in the customer portal. Some banks only provide general reasons, they don&#39;t give us any specific reason so the customer should not complain about that.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The customer has to give correct information about their CIBIL SCORE and PROFILE. If the customer gives wrong information, then the company will not be responsible for loan rejection.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will not be providing any CIBIL REPORT in digital or hard copy to any customer in any situation.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Bank charges are applicable as per banks&#39; rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will take legal action against the customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">After the customer&rsquo;s file is logged in, the customer has to contact only the login department and coordinate with them &ndash; not any telecaller or other department of the company. The further process has to be done according to the login department.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">During the loan process if the rules of any bank change, then we have to follow those new rules.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The customer has to give their registered phone number for being contacted by the login department.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">During the loan processing time, if the company gets any queries and it is not solving that in the given time, then the company has the authority to take more time to address the query. So, the customer must not complain about the same.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If the customer wants to reapply in our company after file rejection or approval, then he/she has to re-submit their documents in the customer portal.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">When you are applying for a loan on our website, we are showing you only your Eligibility for the loan. So whatever details you enter on the website are accepted by software only, and that only shows your pre-approval and not your final loan approval. Approval only depends on your documents and the banks&#39; rules and regulations. We are not giving you any guarantee for the final loan approval.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The customer&#39;s payment is executed by third-party payment sources. So whenever payment would be received by the company then only a Subscription will be activated for the customer. If a customer&#39;s payment would be debited from his/her account but we don&#39;t receive any payment in the company&#39;s account then the company will not be responsible for that.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">For any reference customer&#39;s payout, their account verification is compulsory. After verification, if the payout amount is debited from the company&rsquo;s account and if it does not credit/reflect in the reference customer&rsquo;s account &ndash; the company won&rsquo;t be responsible for this issue.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our company is a private limited company and we are tied up with banks and corporate DSA. We are providing loans through banks only.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If anyone takes any legal action against the company then only our legal advisor would be dealing with that and {#VAR_CITY#}, India, will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The eligibility age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Every reference payout will have a deduction of 5% TDS.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">For the loan process, the company will only coordinate with the person who has purchased the Subscription and has an ongoing loan process &ndash; the company won&rsquo;t coordinate with any third party.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Every bank payout will have tax deductions as per the bank&rsquo;s rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will provide the appropriate loan services but the responsibility of customer handling will be of the reference customer.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any bank&#39;s rules or company&#39;s rules are changing during the processing time of the loan then the customer has to follow those new rules.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our promotional content may communicate messages like &#39;Get Personal Loan in 30 mins&#39; or &#39;Get Rs.5,00,000 in 5 mins&#39; on our company&rsquo;s social media, blogs/articles, ads, websites, emails, SMS, or any other medium &ndash; it must be carefully noted that these messages are only meant for marketing and promotional purposes. All the numerical values that depict time/number of steps/number of clicks &ndash; are for marketing and promotional purposes only. The final loan approval and process depend on the customer profile and the bank/NBFCs&rsquo; rules, regulations and criteria. If you have any sort of doubt before starting the process, you can call our customer care number (10 am to 5 pm &ndash; Monday to Saturday).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">As per the details/information entered by the user, even if the actual pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5 Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The pre-approved amount/pre-approved loan offers are tentative &ndash; the final loan approval, loan sanction, and disbursement depend on the customer profile and the NBFCs&rsquo; rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The first login of the customer&rsquo;s file will be handled and executed by the company. To avail the reapplying option, the customer will have to perform the self-login(s).</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>REFERENCE TERMS AND CONDITIONS:</strong></span></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Reference payout would be given to reference customers as per rules and regulations of our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our company will give payout only on Subscription; it does not depend on the reference customer&#39;s loan approval or rejection.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Whether the customer loan will be approved or not depends on the customer profile and the company does not give any guarantee for that.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If customers are giving a reference in our company for loan purposes, for that we have some criteria. The customer has to give a reference based on that criteria. The company is not giving you any type of guarantee for the loan approval in any situation at any cost so customers who give a reference have to agree with the decision of that file&#39;s login department.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will take legal action against the reference partner/customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;The Customer&#39;s terms and conditions are also applicable to the reference person&#39;s customers.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Reference customer&#39;s payment is done through third-party payment sources. So whenever payment would be received by the company then only the Subscription will be activated. If the customer&#39;s payment is debited from his/her account but the company doesn&#39;t receive any payment in the company&#39;s account then the company will not be responsible for any queries.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">During loan offers, if any reference person will do the online loan process then the company will give the payout up to 35% per Subscription to the reference person. But before that, invoice generation is most important for any payout process.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If the customer of reference will do an online process then the customer&#39;s payout will be given to the referral partner. But during processing time, if the company would refund that amount to the customer for any reason, then that customer&#39;s payout will be cut out from the reference person&#39;s next payout.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Whatever documents are submitted by a reference person, they will be secure in our company. If documents will be misused by any other sources in future then our company is not responsible for that.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If anyone takes any legal action against the company then only our legal advisor would be dealing with that, and {#VAR_CITY#}, India, remains the only junction for any legal procedure. No one can contact any employee or director of our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Every reference payout will have a deduction of 5% TDS.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Company will have no responsibility for the promotions conducted and undertaken by the Customer Reference. The Customer Reference agrees that the promotions done by them are at their own risk, and the Customer Reference cannot hold the Company responsible for any sort of losses faced due to the promotions.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>GENERAL TERMS AND CONDITIONS:</strong></span></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If the login department fails to solve the customer queries with accuracy, dedication and responsibility, then the login department agency will be cancelled by the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Customer&#39;s loan process will take more days due to any festival.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If anyone has GST then they have to add the GST number in their portal so that the company can provide a GST Return to them. If you haven&rsquo;t received your GST Return &ndash; you can raise a request or call on company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Company is using Blogs for their advertising, so that content could be of the third party, so the company doesn&#39;t take guarantee of the information to be correct or incorrect.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If customers, employees, any other person, or any other party has a problem with the company then they have to inform that problem to our company through notice; so, we can try to give you a solution of that but after that, any of them want to take a legal action then they have to inform the company through notice. Only then, the legal process will be started.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If customers, employees, any other person, any other third party has a problem/dispute/misunderstanding with the company, the right to take the final decision over the concerned issue is reserved with the company and the concerned person will have to accept the solution provided by the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan, the company is not responsible if any problems/disputes arise in the future.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">During any process on the website, if there is any kind of mistake that happens due to the software or website technical problems, the final decision on such disputes can only be taken by the company and it has to be accepted by anyone concerned.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">All the commitments made by the company&rsquo;s employees (any employee/person from the company), telecallers, or salespersons, etc. should be cross-checked by any concerned person (customer/any other person) from the Terms &amp; Conditions section of {#VAR#_Website#} before availing any of the company&rsquo;s services. Only the rules and regulations stated on the company website will be considered official.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any Customer Referral&rsquo;s customer gets a refund (due to any dispute like payment gateway problem or any other issue) then the referral payout will not be provided (if provided, it would be deducted from the next payout of the customer referral).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">While generating the payout for Customer Referrals, the company uses a third-party payment gateway. So, if the payout is stuck and put on hold due to any payment gateway issue (or any other issue), then the payout would be delayed and all the terms and conditions of the third-party payment gateway would be applied. In such cases, the payout will be released only when the third-party payment gateway releases the stuck payment. In case of a payout dispute with any bank, the bank&rsquo;s criteria will be applied and the payout will be released only when the bank approves the payment.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If there is any dispute that arises between any concerned user (customer, customer referral, etc.) and the company, their account will be disabled immediately by the company. In such a case, the user would be needed to contact the company for any query.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;All of the promotional content put and shared by the company, either on its website or any platform, is only for advertisement purposes. Any person should not assume it as the final loan approval or details of the loan. The final loan approval and specifics of the loan depend on the rules and regulations of various banks (or the concerned bank) and the customer profile. Every customer, or any other user must accept this clause and consider the bank&rsquo;s loan processing time only.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The loan-related figures, rates, and information used in the promotional content of the company are general and for promotional purposes. The final nature and specifics of the loan in terms of the loan amount, interest rate, repayment tenure, loan processing fees, loan insurance, etc., depends solely on the customer profile and the rules and regulations stated by the concerned bank. The final loan details depend on the criteria set by the concerned bank(s).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital&#39;s company name, logo, content, business concept, software and system, pattern, website structure and design, and business process and offers are copyrighted with the company. If any individual or organization uses/copies any of the above-mentioned by even 1%, legal action may be taken against them.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any person (customer, employee, etc.) is involved in any of the company&#39;s processes then the company is authorized to record the phone calls with that person.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any customer applies for a loan in our company and if any other external person/organization commits fraud with that customer in terms of taking money from you or in any other way then, it will not be the company&rsquo;s responsibility for any kind of loss faced by the customer.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Whatever loan offer is given to the customer is according to the customer profile. The customer will have to compulsorily accept the loan offer &ndash; he/she cannot deny the loan offer.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company has full authority to use the customer&rsquo;s information for purposes such as testimonials, advertisements, marketing, SMS, etc. The customer agrees that regulations of Do Not Disturb(DND)/National Do Not Call(NDNC) won&rsquo;t be applied in such practices.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any person (user, customer, etc.) visits our website and indulges in any activity &ndash; like clicking a button, link, filling forms, or any other activity on the website, it will clearly mean and express that the person agrees to and acknowledges all terms &amp; conditions, rules &amp; regulations, and policies of the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">After the loan approval, the bank charges will be applied as per the bank&rsquo;s rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;No customer can contact the bank&rsquo;s employees to inquire about/get any information on the loan file processes.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The customer, whose loan has been approved, must read and understand the bank agreement and the bank&rsquo;s terms and conditions carefully. After the loan process is done, the company can&rsquo;t be held responsible or liable for anything.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The company will take legal action against the customer, reference customer, or any other person who submitted fake documents. And the company won&#39;t take any responsibility for the loan process in this case.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If anyone takes any legal action against the company then only our legal advisor would be dealing with that and&nbsp; {#VAR_CITY#}, India, will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Any wrong/fake commitment or vocal statement given by the company&rsquo;s employees, etc. would be considered invalid. Only the solutions or solution-related vocal statements would be considered valid. All the company&rsquo;s Terms &amp; Conditions, Privacy Policy, Disclaimer, all other rules will be final and have to be followed.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Loan processing time might get delayed because of any public holiday, technical problems, customer issues, etc.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The Company will not be providing any proof for rejection in hard or soft copy.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">It might be possible that the content/figures/information shown on our website are not updated. So, to get the exact information regarding any of our website&rsquo;s content, Terms &amp; Conditions, Privacy Policy, Disclaimer, etc., you can call on our customer care number.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;After the purchase of the Subscription, the Company Executive will call the concerned person within 24-48 hours (it could be delayed due to any reason) for the loan process or partner process. If the concerned person doesn&rsquo;t get a call, they can call on the company&rsquo;s customer care number.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If the login process is going on and there has been no response from the login department, then the customer can call on the company&rsquo;s customer care number.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The content and any process on the website can be changed or modified at any instance. So, the older version of the content and process won&rsquo;t be functional, valid, or a subject of argument for any person &ndash; and the customers, users, etc. have to stay timely updated and accept all the changes unconditionally. Only the current content and process of the website will be considered valid.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;By accessing our website, you affirm your age as 18 years or more. If you&rsquo;re someone below 18 years, we advise you not to access our website or the services</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Any processes regarding the loan might get delayed due to public holidays, technical problems/software issues, etc.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;In case the update email/message regarding the processes of loan is not received by the customer due to a delay because of technical problems, software issues, or any other issue &ndash; they can call on the company&rsquo;s customer care between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;In case the user, customer, any other person, or organization has a query/problem/issue or wants to raise a dispute with the company &ndash; they can either raise a request ticket or call on the company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Due to a software/system issue, it might happen that the dates mentioned in the Loan Status are late by 3-4 days.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">To get the TDS Return, the reference customer has to submit all the details/documents asked in their portal. Note: The TDS Return will be given starting from the financial year in which all the details/documents are submitted. The TDS Return won&rsquo;t be provided for the financial year(s) that are prior to the financial year in which the details/documents were submitted.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The general criteria to apply for a personal loan by a salaried individual are &ndash; Min. Age: 21 years; Min. Salary: Rs.15,000/month (credited in the bank account); Salary Slips available; and Job Stability proof available. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;The general criteria to apply for a personal loan by a self-employed individual are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); Business Stability proof available; and Current Account in a bank. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The general criteria to apply for a business loan by a small business person are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); and Business Stability proof available (min. 1 year). Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The general criteria to apply for a business loan by an audited report business person are &ndash; Min. Age: 21 years; Min. Rs.1 Crore+ Yearly Turnover; and Min. 2 Years Audited Report. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;The eligible age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription offered by the company. The company only offers Subscription and provides its benefits to the customers. The final loan approval depends on the customer profile and the bank&rsquo;s rules and criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customers will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;Any information/flow/system regarding our website shown in the videos posted on social media (or any platform) may be inaccurate, outdated, or different from our actual website. Only the most updated version of the website, terms &amp; conditions, and other policies shall be valid.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The banks&rsquo; logos used in our ads, social media posts, blogs, emails, or any other medium is for promotional purposes only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The banks&rsquo; logos shown on our website and the pre-approved offer displayed on our website are tentative only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">By purchasing the company&rsquo;s Subscription, the customer is applying to get the company&rsquo;s services. All the benefits of the Subscription will be given to the customer by the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any customer data &amp; information, KYC documents, or OTP is misused in future by any third-party, our company and its directors, employees, or any individuals associated with the company cannot be held responsible for the same in any matter whatsoever including any loss, harm, or damage due to the usage of information from the portal. Customers are advised to bring in their own discretion in such matters. The information provided on the website is of financial nature. It is a mutual understanding that customers association with the website will be at the customer&#39;s will, preference and risk.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any customer&rsquo;s documents are found to be fraud by the bank/financial institution or there&rsquo;s any sort of an issue with any customer&rsquo;s repayment of the loan to the banks/financial institution &ndash; then these matters have to be solely between the customer and the bank/financial institution. Our company and its directors, employees, or any other individual associated with the company cannot be held responsible in such cases. If the customer documents are found to be fake and fraud and are used anywhere for any purpose, the company cannot be held responsible for the same.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any third-party gets a loan approved on someone else&rsquo;s identity and documents, then our company and its directors, employees, or any other individual associated with the company cannot be held responsible.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">If any of the company&rsquo;s customers or any third-party wants a legal course, action and proceedings with the company, then only the company&rsquo;s legal team can be involved. There will absolutely be no involvement of the company&rsquo;s directors, any other individual associated with the company, or employees in any legal proceeding. For any legal action or proceeding involving our company, {#VAR_CITY#}, India, shall remain the only jurisdiction.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">TDS will be given only to the ones whose referral payout has been generated. If your TDS is deducted, you can contact your CA. If your TDS has been deducted and it&rsquo;s not showing, then you can contact the company&rsquo;s customer care number between 10 AM to 5 PM &ndash; Monday to Saturday (only business days).</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;If any person enters incorrect information and starts the loan process on our website, and if this leads to any sort of fraud in future, the company, its directors, employees, any other individual associated with the company cannot be held responsible for the same.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The pre-approved loan offers shown are from those banks/NBFCs that have eligibility criteria to which the customer&rsquo;s profile matches (profile evaluated as per the information entered by the customer). These pre-approved loan offers are tentative only &ndash; the final loan approval, loan sanction, and disbursement depend on the NBFC(s) and their rules and regulations. The company will only log in the customer&rsquo;s file in those NBFCs with which the company has tie-ups/partnerships/collaborations and where the customer&rsquo;s profile matches the NBFC eligibility criteria.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">Our company&rsquo;s services are strictly for the residents of India only &ndash; not for the non-residents. If any non-resident purchases our Subscription, they can request for a refund as per the company&rsquo;s Cancellation &amp; Refund Policy.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">In case a customer has mistakenly made more than a single payment, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">In case a customer has bought Subscriptions from multiple companies that belong to our group of companies, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>PRE-APPROVAL LOAN OFFER TERMS AND CONDITIONS:</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the software calculation done on Monthly Income and Current Monthly EMI entered by the person. This &quot;Pre-Approved Loan Offer&quot; is tentative and not the final loan approval (this is already mentioned on the Pre-Approved loan Offer page) &ndash; as the final loan approval is given by the bank only; based on the bank&rsquo;s rules and regulations and the customer profile. And this is clearly stated in the company&rsquo;s Terms &amp; Conditions which is agreed by the person before registration.</span><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Here&#39;s an example to know how the &lsquo;Pre-Approved Loan Offer&rsquo; is shown:<br />\r\nConsider that a person (named &lsquo;Rajesh&rsquo;) enters the following details in our website:<br />\r\nMonthly Income: Rs.1,00,000<br />\r\nCurrent Monthly EMI: Rs.30,000</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Based on these details, Rajesh is left with Rs.70,000 in hand (deducting current EMI) every month. So, according to the general rules of the banks, the EMI of 50% of the in-hand amount can be approved. So, the loan amount that allows a maximum of Rs.35,000 (70,000/2) EMI can be approved. And based on the EMI and rate of interest (11% tentatively), the eligible amount is shown in the Pre-Approved Loan Offer. And based on this Rs.1903/lakh EMI is shown.</span><br />\r\n&nbsp;</p>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>CANDIDATE TERMS AND CONDITIONS</strong></span></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The interview time is fixed.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The interview can&#39;t be taken any other time than the time decided by the company.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;The Company can ask any questions in the interview.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">The candidate will have to appear for the interview as many times as the company asks.</span></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><span style=\"font-size:16px\">A resume (Xerox) will be mandatory for the interview. The resume will not be returned. There will be no misuse of the resume.</span><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><span style=\"font-size:20px\"><strong>USAGE OF COOKIES / COOKIES POLICY</strong></span></h3>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">The user, customer, or any other person accessing our website clearly expresses and agrees that they have fully read and understood the Terms &amp; Conditions and Privacy Policy of Arrow capital &ndash; and they accept them unconditionally.</span></p>', '2024-01-26 12:27:05', 1);
INSERT INTO `info_pages` (`id`, `slug`, `content`, `rec_date`, `status`) VALUES
(3, 'disclaimer', '<p dir=\"ltr\"><span style=\"font-size:16px\">Arrow capital and its customers and employees use and present www.arrowcapital.in for personal and informational purposes only. In addition, we further expressly disclaim any warranties or representations (expressed or implied) in respect of quality, suitability, accuracy, reliability, completeness, timeliness, performance for a particular purpose, or legality of the services listed or displayed or transacted or the content on the website. You must not perceive and construe any such information or other material as legal, tax, investment, financial, or other advice. You completely acknowledge and undertake that you are accessing the services on the Arrow capital&rsquo;s website and transacting at your own risk only and are using your best and most prudent judgement before entering into and making any transactions through the website. You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other Content contained on the Arrow capital&rsquo;s Website before making any decisions based on such information or other Content.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">Nothing contained on our Website constitutes a solicitation, recommendation, endorsement, or offer by Arrow capital to buy or sell any securities or other financial instruments in this or in any other jurisdiction in which such solicitation or offer would be unlawful under the securities laws of such jurisdiction. You further acknowledge that at no time shall any right, title, or interest in the services sold through or displayed on the website vest with Arrow capital, nor shall Arrow capital have any obligations or liabilities in respect of any transactions on the website.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">After you enter your details on our website for any purpose, the company takes no responsibility in case you come across instances of data misusage of any form.</span></p>', '2024-01-26 12:27:54', 1),
(4, 'refund-policy', '<p dir=\"ltr\"><span style=\"font-size:20px\"><strong>We believe in putting customer satisfaction first!</strong></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><strong>What circumstances make the Arrow Capital Subscription Plan fee refundable?</strong></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">&nbsp;A customer can be eligible for a refund if an e-mail requesting a refund is sent by the customer (with the registered email ID) to info@arrowcapital.in</span><span style=\"font-size:16px\"> within 30 days of purchasing the Subscription Plan. The customer will receive their refund (if eligible) within 24 to 48 hours of receiving the mail.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">&middot; Our company does not provide services in all areas. If you purchased the Subscription Plan and live in one of these areas/locations, you can request a refund within 30 days of purchase. To know the areas where our company does not provide services, please call on +91-90164-60150</span><span style=\"font-size:16px\">.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">&middot; A customer might get a refund of the Subscription Plan fee if the company hasn&rsquo;t started the &lsquo;Customer Service Initiation&rsquo; (explained below) within 48 hours of the payment and a request for the same has been raised through Raise A Request within 30 days of the payment.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">&middot; If the customer is unable to communicate with the company in English, Hindi, or Gujarati, they can apply for a refund within 30 days of purchasing the Subscription Plan.</span><br />\r\n&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:20px\"><strong>What does Customer Service Initiation mean?</strong></span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">It is the first process done by the company that includes calling the customer for verification within 24-48 hours of the Subscription Plan payment. Even if the customer does not respond to the verification call, the Customer Service Initiation is considered started, and the update has been shown in the customer portal.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-size:16px\">If you have any questions about our Cancellation and Refund Policy, please contact us between 10 am and 5 pm (only business days):</span></p>\r\n\r\n<p style=\"margin-left:0pt; margin-right:0pt\"><span style=\"font-size:16px\"><span style=\"font-family:Arial\"><span dir=\"LTR\"><span style=\"font-family:Arial\"><span style=\"font-family:Arial\">● By email: <a href=\"mailto:info@arrowcapital.in?subject=Refund%20Regarding\">info@arrowcapital.in</a></span></span></span><br />\r\n<span dir=\"LTR\"><span style=\"font-family:Arial\"><span style=\"font-family:Arial\">● By call: </span><strong><a href=\"tel:+919016460150\">+91 90164-60150</a></strong></span></span></span></span></p>\r\n\r\n<div id=\"gtx-trans\" style=\"left:135px; position:absolute; top:484.125px\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '2024-01-26 12:27:54', 1),
(5, 'welcome-message', '<h1 dir=\"ltr\">&nbsp;</h1>\r\n\r\n<h4 dir=\"ltr\" style=\"text-align:center\"><span style=\"font-size:16px\"><strong>Happy Ganesh Visarjan</strong></span></h4>\r\n\r\n<h4 dir=\"ltr\" style=\"text-align:center\"><br />\r\n<span style=\"font-size:14px\">Hello, Our Office will Remain closed on 06/09/2025 due to Ganesh Visarjan&nbsp;Thanks, ArrowCapital</span></h4>', '2024-02-23 06:00:52', 2),
(6, 'account-message', '<p style=\"text-align:center\"><strong>Happy Holi</strong><strong> </strong><br />\r\nHello, our Office will remain closed on 14/03/2025 due to Holi Thanks,ArrowCapital</p>', '2024-02-23 06:50:30', 1),
(7, 'sa_facebookdomain', '#', '2024-02-23 07:10:20', 1),
(8, 'sa_facebookpixelkey', '#', '2024-02-23 07:10:20', 1),
(9, 'sa_facebookaccesstoken', '#', '2024-02-23 07:10:45', 1),
(10, 'sa_facebookeventname', '#', '2024-02-23 07:11:04', 1),
(11, 'sa_facebookeventid', '#', '2024-02-23 07:11:19', 1),
(12, 'la_facebookdomain', '#', '2024-11-21 08:37:01', 1),
(13, 'la_facebookpixelkey', '#', '2024-11-21 08:37:01', 1),
(14, 'la_facebookaccesstoken', '#', '2024-11-21 08:37:01', 1),
(15, 'la_facebookeventname', '#', '2024-11-21 08:37:01', 1),
(16, 'la_facebookeventid', '#', '2024-11-21 08:37:01', 1),
(17, 'sa-wp-remarketing', '#', '2025-02-27 20:11:42', 1),
(18, 'sa-wp-getoffer', '#', '2025-02-27 20:11:42', 1),
(19, 'sa-wp-payment-success', '#', '2025-02-27 20:11:42', 1),
(20, 'sa-wp-username-password', '#', '2025-02-27 20:11:42', 1),
(21, 'la-wp-remarketing', '#', '2025-02-27 20:11:42', 1),
(22, 'la-wp-getoffer', '#', '2025-02-27 20:11:42', 1),
(23, 'la-wp-payment-success', '#', '2025-02-27 20:11:42', 1),
(24, 'la-wp-username-password', '#', '2025-02-27 20:11:42', 1),
(25, 'self-apply', NULL, '2025-03-13 22:20:08', 1),
(26, 'loan-agent', NULL, '2025-03-13 22:20:08', 1),
(27, 'sa-senderid', '#', '2025-05-21 20:29:37', 1),
(28, 'la-senderid', '#', '2025-05-21 20:29:37', 1),
(29, 'common-senderid', '#', '2025-05-21 20:31:39', 1),
(30, 'sa-senderid-otp', '#', '2025-05-21 20:29:37', 1),
(31, 'la-senderid-otp', '#', '2025-05-21 20:29:37', 1),
(32, 'lat-senderid', '#', '2025-07-24 09:49:41', 1),
(33, 'lat-senderid-otp', '#', '2025-07-24 09:49:41', 1),
(34, 'lat_facebookdomain', '#', '2025-08-02 10:51:01', 1),
(35, 'lat_facebookpixelkey', '#', '2025-08-02 10:50:51', 1),
(36, 'lat_facebookaccesstoken', '#', '2025-08-02 10:51:50', 1),
(37, 'lat_facebookeventname', '#', '2025-08-02 10:52:00', 1),
(38, 'lat_facebookeventid', '#', '2025-08-02 10:53:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `interakt_settings`
--

DROP TABLE IF EXISTS `interakt_settings`;
CREATE TABLE IF NOT EXISTS `interakt_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'SA, LA',
  `type` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'remarketing, getoffer, pgsuccess,pgfailed',
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_url` text COLLATE utf8mb4_unicode_ci,
  `api_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interakt_settings`
--

INSERT INTO `interakt_settings` (`id`, `rec_date`, `product`, `type`, `template_name`, `img_url`, `api_key`) VALUES
(1, '2025-06-24 18:09:01', 'SA', 'remarketing', '#', '#', '#'),
(2, '2025-06-24 18:09:01', 'LA', 'remarketing', '#', '#', '#'),
(3, '2025-06-24 18:13:32', 'SA', 'getoffer', '#', '#', '#'),
(4, '2025-06-24 18:14:15', 'LA', 'getoffer', '#', '#', '#'),
(5, '2025-07-18 20:59:04', 'SA', 'blog', '#', '#', '#'),
(6, '2025-07-24 18:24:58', 'LAT', 'getoffer', '#', '#', '#'),
(7, '2025-08-07 18:28:24', 'LAT', 'remarketing', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `userid` int NOT NULL,
  `cardid` int NOT NULL,
  `inv_prefix` varchar(55) DEFAULT NULL,
  `inv_number` int DEFAULT NULL,
  `inv_date` date NOT NULL,
  `inv_price` double NOT NULL DEFAULT '0',
  `inv_cgst` double NOT NULL DEFAULT '0',
  `inv_sgst` double NOT NULL DEFAULT '0',
  `inv_igst` double NOT NULL DEFAULT '0',
  `inv_grandtotal` double NOT NULL DEFAULT '0',
  `remarks` longtext,
  `is_refund` tinyint NOT NULL DEFAULT '0' COMMENT '0=not, 1=refund',
  `isdelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=active,1=delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus`
--

DROP TABLE IF EXISTS `loanstatus`;
CREATE TABLE IF NOT EXISTS `loanstatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusname` varchar(256) NOT NULL,
  `priorityno` int NOT NULL DEFAULT '1',
  `colorclass` varchar(50) NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loanstatus`
--

INSERT INTO `loanstatus` (`id`, `rec_date`, `statusname`, `priorityno`, `colorclass`, `isDelete`) VALUES
(1, '2020-10-13 19:30:40', 'Approved', 2, 'success', 0),
(2, '2020-10-13 19:30:40', 'Rejected', 3, 'danger', 0),
(3, '2020-10-13 19:30:40', 'In Process', 1, 'info', 0),
(4, '2021-08-28 08:03:33', 'Query Process', 4, 'warning', 0),
(5, '2021-10-29 05:37:03', 'File Reopen', 5, 'info', 0),
(6, '2022-06-03 09:50:19', 'Verification', 1, 'success', 0),
(7, '2025-05-19 14:00:40', 'Service Calls', 1, 'info', 0),
(8, '2025-05-19 14:00:40', 'Initiated Calls', 1, 'primary', 0),
(9, '2025-05-19 14:00:51', 'Other Calls', 1, 'warning', 0),
(10, '2025-05-19 14:01:49', 'Closed', 1, 'danger', 0),
(11, '2025-07-18 15:04:21', 'Account Closed', 1, 'danger', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus_remarks`
--

DROP TABLE IF EXISTS `loanstatus_remarks`;
CREATE TABLE IF NOT EXISTS `loanstatus_remarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(256) NOT NULL,
  `remarks` longtext NOT NULL,
  `statusid` int NOT NULL DEFAULT '0',
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loanstatus_remarks`
--

INSERT INTO `loanstatus_remarks` (`id`, `rec_date`, `title`, `remarks`, `statusid`, `isDelete`) VALUES
(1, '2025-05-19 14:04:13', 'Other Calls', '<p>Dear Customer,&nbsp;</p>\r\n\r\n<p>We deeply thank you for calling us and letting us offer our services to you!&nbsp;</p>\r\n\r\n<p>We hope you will follow the guidance offered by our Loan Agent and apply for a personal loan seamlessly!&nbsp;</p>\r\n\r\n<p>In case you need any further assistance, please reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,&nbsp;<br />\r\nArrowCapital</p>\r\n', 0, 0),
(2, '2025-05-19 14:06:48', 'Customer Initiated Call', '<p>Dear Customer,&nbsp;</p>\r\n\r\n<p>Thanks for calling us and allowing us to serve you!&nbsp;</p>\r\n\r\n<p>We hope you will follow the guidance offered by our Loan Agent and apply for a personal loan seamlessly!&nbsp;</p>\r\n\r\n<p>In case you need any further assistance, please reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,&nbsp;<br />\r\nArrowCapital</p>\r\n', 8, 0),
(3, '2025-05-19 14:06:48', 'Consultation Provided', '<p>Dear Customer,&nbsp;</p>\r\n\r\n<p>It was great speaking to you!&nbsp;</p>\r\n\r\n<p>We hope you will follow the guidance offered by our Loan Agent and apply for a personal loan seamlessly!&nbsp;</p>\r\n\r\n<p>In case you need any further assistance, please reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,&nbsp;<br />\r\nArrowCapital&nbsp;</p>\r\n', 7, 0),
(4, '2025-05-19 14:11:14', 'Call Back Later', '<p>Dear Customer,&nbsp;</p>\n\n<p>It was so good to connect with you!&nbsp;</p>\n\n<p>Our Loan Agent called you today as part of our service. As you conveyed to us that you were busy/not able to talk at that moment, and wanted us to call you later; we would like to inform you that we have scheduled a call at your preferred time.&nbsp;</p>\n\n<p>Looking forward to assisting you very soon!&nbsp;</p>\n\n<p>In case you have a query, you can easily reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Thanks,&nbsp;<br />\nArrowCapital</p>\n', 9, 0),
(5, '2025-05-19 14:11:14', 'Language Issue', '<p>Dear Customer,&nbsp;</p>\n\n<p>Greetings from ArrowCapital!&nbsp;</p>\n\n<p>As part of our service, our Loan Agent called you today, but things couldn&#39;t go further as there was unclear or non-understandable communication/language from your end.&nbsp;</p>\n\n<p>No worries! We kindly suggest you make a trusted person/third-party call on your behalf and communicate in an understandable language/manner. The call can be made on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Thanks,&nbsp;<br />\nArrowCapital</p>\n', 9, 0),
(6, '2025-05-19 14:11:14', 'Not Interested / Do Not Disturb', '<p>Dear Customer,&nbsp;</p>\r\n\r\n<p>Greetings from ArrowCapital!&nbsp;</p>\r\n\r\n<p>As part of our service, our Loan Agent called you today, but you conveyed to us that you are not very much interested in taking our services and don&rsquo;t want us to disturb you.&nbsp;</p>\r\n\r\n<p>Though we acknowledge that you don&rsquo;t want us to call you to offer our services, it would have been great for us if we were given the opportunity to serve you!&nbsp;</p>\r\n\r\n<p>Nevertheless, in case you have a query, you can easily reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,&nbsp;<br />\r\nArrowCapital</p>\r\n', 7, 0),
(7, '2025-05-19 14:11:14', 'Login Process Done (by customer)', '<p>Dear Customer,&nbsp;</p>\r\n\r\n<p>It was amazing conversing with you!&nbsp;</p>\r\n\r\n<p>We always take pride in offering effective services to our customers! Hence, we&rsquo;re super-glad today that with the help of our consultation and guidance, you were able to apply for a loan in our affiliated NBFC(s)!&nbsp;</p>\r\n\r\n<p>We look forward to serving you even further.&nbsp;</p>\r\n\r\n<p>In case you have a query, you can easily reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,<br />\r\nArrowCapital</p>', 7, 0),
(8, '2025-05-19 14:11:14', 'No Reply / Not Reachable', '<p>Dear Customer,&nbsp;</p>\n\n<p>Our Loan Agent tried calling you today, but it seems either you were not reachable or were not able to answer our call.&nbsp;</p>\n\n<p>Don&rsquo;t worry! You can easily reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm &ndash; only business days).&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Thanks,&nbsp;<br />\nArrowCapital</p>\n', 9, 0),
(9, '2025-05-20 13:16:04', 'Creditworthiness Improvement Guidelines pdf sent.', '<p>Creditworthiness Improvement Guidelines pdf sent.</p>', 0, 0),
(10, '2025-06-03 17:42:36', 'Pleasure Serving You!', '<p>Dear Customer, We hope our services guided you well. If you\'ve any queries, kindly call on 9724206519 Monday-Saturday between 10 am - 5 pm on business days. Thanks, ArrowCapital</p>', 10, 0),
(11, '2025-06-18 19:18:33', 'Looking forward to serving you!', '<p>Dear Customer, it would have been great if you would have given us the opportunity to serve you. Nevertheless, we really hope you will avail our services in future. If you\'ve any queries, kindly call on 9724206519 Monday-Saturday between 10 am - 5 pm on business days. Thanks, ArrowCapital</p>', 10, 0),
(12, '2025-07-18 15:09:04', 'Successful Customer Verification', '<p>Dear Customer,\nIt was great speaking with you!\n\nWe’re glad to inform you that you’ve successfully inched closer towards making the most of our services!\n\nWe really wish our services help you abundantly!\n\nThanks,\nArrowCapital</p>', 6, 0),
(13, '2025-07-18 15:09:04', 'Login Process Done (by customer)', '<p>Dear Customer,\nIt was amazing conversing with you!\n\nWe always take pride in offering effective services to our customers! Hence, we’re super-glad today that with the help of our consultation and guidance, you were able to apply for a loan in our affiliated NBFC(s)!\n\nWe look forward to serving you even further.\n\nIn case you have a query, you can easily reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\n\nThanks,\nArrowCapital</p>', 6, 0),
(14, '2025-07-18 15:11:50', 'Customer Initiated Call', '<p>Dear Customer,\nThanks for calling us and allowing us to serve you!\n\nWe hope you will follow the guidance offered by our Loan Expert and apply for a personal loan seamlessly!\n\nIn case you need any further assistance, please reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\n\nThanks,\nArrowCapital</p>', 6, 0),
(15, '2025-07-18 16:25:25', 'Documents Pending. Kindly Submit.', '<p>Dear Customer,</p>\n<p>Hope you’re doing well.</p>\n \n<p>As per our previous conversation, you requested us to login your file to apply for a loan – for which you were to share the required documents with us.</p>\n \n<p>We request you to share the required documents at the earliest (preferably within 3 days) so that we can take your loan application forward.</p>\n \n<p>Please share the documents through WhatsApp on {var_consultant_number}.</p>\n \n<p>Thanks,\nArrowCapital</p>', 9, 0),
(16, '2025-07-18 16:35:30', 'Service Provision Period Ends', '<p>Dear Customer,\r\n\r\nIt would have been great if you had given us the opportunity to serve you.\r\n\r\nNevertheless, we really hope you will avail our services in future.\r\n\r\nIf you\'ve any queries, kindly call on 9724206519 Monday-Saturday between 10 am - 5 pm on business days.\r\n\r\nThanks,\r\nArrowCapital</p>', 11, 0),
(17, '2025-07-18 16:38:39', 'Consultation Provided To Customer', '<p>Dear Customer,\r\nIt was great speaking to you!\r\n\r\nWe hope you will follow the guidance offered by our Loan Expert and apply for a personal loan seamlessly!\r\n\r\nIn case you need any further assistance, please reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\r\n\r\nThanks,\r\nArrowCapital</p>', 11, 0),
(18, '2025-07-18 16:39:15', 'Customer Not Interested / Do Not Disturb Conveyed by Customer', '<p>Dear Customer,\r\nGreetings from ArrowCapital!\r\n\r\nAs part of our service, our Loan Expert called you today, but you conveyed to us that you are not very much interested in taking our services and don’t want us to disturb you.\r\n\r\nThough we acknowledge that you don’t want us to call you to offer our services, it would have been great for us if we were given the opportunity to serve you!\r\n\r\nNevertheless, in case you have a query, you can easily reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\r\n\r\nThanks,\r\nArrowCapital</p>', 11, 0),
(19, '2025-07-18 16:42:07', 'Customer Requested Call Back Later', '<p>Dear Customer,\r\nIt was so good to connect with you!\r\n\r\nOur Loan Expert called you today as part of our service. As you conveyed to us that you were busy/not able to talk at that moment, and wanted us to call you later; we would like to inform you that we have scheduled a call at your preferred time.\r\n\r\nLooking forward to assisting you very soon!\r\n\r\nIn case you have a query, you can easily reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\r\n\r\nThanks,\r\nArrowCapital</p>', 11, 0),
(20, '2025-07-18 16:43:51', 'Customer Language Barrier', '<p>Dear Customer,\nGreetings from ArrowCapital!\n\nAs part of our service, our Loan Expert called you today, but things couldn’t go further as there was unclear or non-understandable communication/language from your end.\n\nNo worries! We kindly suggest you make a trusted person/third-party call on your behalf and communicate in an understandable language/manner. The call can be made on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\n\nThanks,\nArrowCapital</p>', 11, 0),
(21, '2025-07-18 16:44:24', 'Customer Not Answering / Customer Not Reachable', '<p>Dear Customer,\r\n\r\nOur Loan Expert tried calling you today, but it seems either you were not reachable or were not able to answer our call.\r\n\r\nDon’t worry! You can easily reach out to our Loan Expert by calling on +91 97242 06519 from Monday-Saturday (between 10 am to 5 pm – only business days).\r\n\r\nThanks,\r\nArrowCapital</p>', 11, 0),
(22, '2025-08-22 19:25:25', 'It’s Great To Help You!', '<p>Dear Customer,\nGreetings from ArrowCapital!\nWhen our valuable customers benefit from our services, we truly feel the best!\nIt was amazing serving you and we hope that in the future, you will give us the opportunity to serve you again.\nThanks,\nArrowCapital</p>', 10, 0),
(23, '2025-08-22 19:25:25', 'It’s Great To Help You!', '<p>\nDear Customer,\nGreetings from ArrowCapital!\n \nWhen our valuable customers benefit from our services, we truly feel the best!\n \nIt was amazing serving you and we hope that in the future, you will give us the opportunity to serve you again.\n \nThanks,\nArrowCapital\n</p>', 11, 0),
(24, '2025-08-29 17:28:28', 'Not Interested/Do Not Disturb', '<p>\r\nDear Customer,\r\nGreetings from ArrowCapital!\r\n\r\nAs part of our service, our Loan Agent called you today, but you conveyed to us that you are not very much interested in taking our services and don’t want us to disturb you.\r\n\r\nThough we acknowledge that you don’t want us to call you to offer our services, it would have been great for us if we were given the opportunity to serve you!\r\n\r\nNevertheless, in case you have a query, you can easily reach out to your Consultant by calling on {var_consultant_number} from Monday-Saturday (between 10 am to 5 pm – only business days).\r\n\r\nThanks,\r\nArrowCapital\r\n</p>', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

DROP TABLE IF EXISTS `loan_applications`;
CREATE TABLE IF NOT EXISTS `loan_applications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `userid` int NOT NULL DEFAULT '0',
  `loan_amount` bigint NOT NULL DEFAULT '0',
  `user_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=none, 1=salaried, 2=selfemployed',
  `loan_type` tinyint NOT NULL DEFAULT '1' COMMENT '1 = personal loan, 2 = business loan',
  `monthly_income` varchar(255) NOT NULL DEFAULT '0',
  `cibilscore` int NOT NULL DEFAULT '0',
  `loan_purpose` varchar(255) NOT NULL DEFAULT 'Personal Use',
  `currentemi` bigint NOT NULL DEFAULT '0',
  `emibounce` tinyint NOT NULL DEFAULT '0' COMMENT '0=no, 1=yes',
  `application_number` varchar(99) DEFAULT NULL,
  `loantenure` int NOT NULL DEFAULT '0',
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '1=New, 2=Approve, 3=Reject',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=active, 1=delete',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_application_status`
--

DROP TABLE IF EXISTS `loan_application_status`;
CREATE TABLE IF NOT EXISTS `loan_application_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `applicationid` int NOT NULL,
  `statusid` int NOT NULL,
  `statusdate` date DEFAULT NULL,
  `bankid` int NOT NULL,
  `loanamount` int DEFAULT NULL,
  `loanroi` varchar(256) DEFAULT NULL,
  `loanterms` varchar(256) DEFAULT NULL,
  `processfees` int DEFAULT NULL,
  `insurance` varchar(256) DEFAULT NULL,
  `monthlyemi` int DEFAULT NULL,
  `remarks` longtext NOT NULL,
  `sanction_letter` longtext,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_applied_history`
--

DROP TABLE IF EXISTS `loan_applied_history`;
CREATE TABLE IF NOT EXISTS `loan_applied_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `userid` int NOT NULL,
  `bankid` int NOT NULL,
  `loan_amount` varchar(299) NOT NULL,
  `loan_tenure` varchar(255) NOT NULL,
  `loan_rate` varchar(255) NOT NULL,
  `loan_emi` varchar(255) NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lyra_entry`
--

DROP TABLE IF EXISTS `lyra_entry`;
CREATE TABLE IF NOT EXISTS `lyra_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer,2=Channel,11=SelfApply,12=Loan Agent, 3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `transactionid` varchar(256) DEFAULT NULL,
  `statuscode` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_orders`
--

DROP TABLE IF EXISTS `membership_orders`;
CREATE TABLE IF NOT EXISTS `membership_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `card_number` varchar(256) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(256) NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp_verifications`
--

DROP TABLE IF EXISTS `otp_verifications`;
CREATE TABLE IF NOT EXISTS `otp_verifications` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` date NOT NULL,
  `mobile` varchar(99) NOT NULL,
  `email` varchar(99) DEFAULT NULL,
  `otp` mediumint NOT NULL,
  `acc_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=none, 1=selfapply, 2=loanagent\r\n',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_tasks`
--

DROP TABLE IF EXISTS `partner_tasks`;
CREATE TABLE IF NOT EXISTS `partner_tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assignees` int NOT NULL,
  `assign_to` varchar(199) NOT NULL,
  `task_title` varchar(199) NOT NULL,
  `task_desc` longtext NOT NULL,
  `attachment` varchar(199) DEFAULT NULL,
  `priority` varchar(99) NOT NULL DEFAULT 'Low',
  `task_module` varchar(255) NOT NULL,
  `task_status` varchar(55) NOT NULL DEFAULT 'Open',
  `completion_date` datetime DEFAULT NULL,
  `remarks` text,
  `project_name` varchar(255) NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '1=active,0=deactive',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=no,1=yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paygic_entry`
--

DROP TABLE IF EXISTS `paygic_entry`;
CREATE TABLE IF NOT EXISTS `paygic_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT '1 = Webinar\r\n2 = fintech',
  `userid` int NOT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` double(11,2) NOT NULL,
  `ordernote` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonepe_entry`
--

DROP TABLE IF EXISTS `phonepe_entry`;
CREATE TABLE IF NOT EXISTS `phonepe_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '3 - la offer 1\r\n4 - la offer 2\r\n5 - la offer 3\r\n6 - sa offer 1\r\n7 - sa offer 2\r\n8 - sa offer 3\r\n9 - sa offer 4\r\n10 - la offer 4',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `referenceid` varchar(256) DEFAULT NULL,
  `txstatus` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productname` varchar(256) NOT NULL,
  `productslug` varchar(256) NOT NULL,
  `amount` float(11,2) NOT NULL,
  `offeramount` float(11,2) NOT NULL,
  `inOffer` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `rec_date`, `productname`, `productslug`, `amount`, `offeramount`, `inOffer`) VALUES
(1, '2025-07-05 11:11:29', 'Self Apply', 'self-apply', 999.00, 299.00, 1),
(2, '2025-07-02 11:11:29', 'Hire Loan Agent', 'hire-loan-agent', 1999.00, 499.00, 1),
(3, '2025-07-02 11:11:29', 'LA Offer 1', 'la-offer-1', 1999.00, 499.00, 1),
(4, '2025-07-02 11:11:29', 'LA Offer 2', 'la-offer-2', 1999.00, 499.00, 1),
(5, '2025-07-02 11:11:29', 'LA Offer 3', 'la-offer-3', 1999.00, 499.00, 1),
(6, '2025-07-05 11:11:29', 'SA Offer 3', 'sa-offer-3', 999.00, 199.00, 1),
(7, '2025-07-05 11:11:29', 'SA Offer 2', 'sa-offer-2', 999.00, 199.00, 1),
(8, '2025-07-05 11:11:29', 'SA Offer 1', 'sa-offer-1', 999.00, 199.00, 1),
(9, '2025-07-05 11:11:29', 'SA Offer 4', 'sa-offer-4', 999.00, 199.00, 1),
(10, '2025-07-02 11:11:29', 'LA OFFER 4', 'la-offer-4', 1999.00, 499.00, 1),
(11, '2025-07-05 11:11:29', 'SA OFFER 5', 'sa-offer-5', 999.00, 199.00, 1),
(12, '2025-07-02 11:11:29', 'LA OFFER 5', 'la-offer-5', 1999.00, 499.00, 1),
(13, '2025-07-05 11:11:29', 'SA OFFER 6', 'sa-offer-6', 999.00, 199.00, 1),
(14, '2025-07-02 11:11:29', 'LA OFFER 6', 'la-offer-6', 1999.00, 499.00, 1),
(15, '2025-07-05 11:11:29', 'SA Offer 7', 'sa-offer-7', 999.00, 199.00, 1),
(16, '2025-07-31 14:42:50', 'Loan Assistant', 'loan-assistant', 1299.00, 299.00, 1),
(17, '2025-08-07 13:09:05', 'Top Offer', 'top-offer', 1299.00, 299.00, 1),
(18, '2025-08-07 13:09:44', 'Excel Offer', 'excel-offer', 1299.00, 299.00, 1),
(19, '2025-08-07 13:09:44', 'Special Offer', 'special-offer', 1299.00, 299.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `razorpayentry`
--

DROP TABLE IF EXISTS `razorpayentry`;
CREATE TABLE IF NOT EXISTS `razorpayentry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `referenceid` varchar(256) DEFAULT NULL,
  `txstatus` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

DROP TABLE IF EXISTS `refunds`;
CREATE TABLE IF NOT EXISTS `refunds` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `invoiceid` int NOT NULL,
  `ref_date` date DEFAULT NULL,
  `ref_number` varchar(256) NOT NULL,
  `ref_price` float(11,2) NOT NULL,
  `ref_cgst` float(11,2) NOT NULL,
  `ref_sgst` float(11,2) NOT NULL,
  `ref_igst` float(11,2) NOT NULL,
  `ref_grandtotal` float(11,2) NOT NULL,
  `paymentid` varchar(256) DEFAULT NULL,
  `remarks` varchar(256) DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roipackages`
--

DROP TABLE IF EXISTS `roipackages`;
CREATE TABLE IF NOT EXISTS `roipackages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bankid` int NOT NULL,
  `roi` float(11,2) NOT NULL,
  `termsyears` float(11,2) NOT NULL,
  `termsmonths` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roipackages`
--

INSERT INTO `roipackages` (`id`, `rec_date`, `bankid`, `roi`, `termsyears`, `termsmonths`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '2024-02-23 17:40:12', 1, 10.00, 4.00, 48, 0, '2024-02-23 12:10:12', '2024-02-23 12:48:56'),
(2, '2024-02-23 17:48:17', 2, 11.15, 3.00, 36, 0, '2024-02-23 12:18:17', '2024-02-23 12:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `services_name` varchar(255) NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '1 = active, 0 = no active',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0 = active, 1 = delete',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('p4cigQ2red86YohHV9TUxUnEiqI6R5QfB7g2Uh1Z', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicm5Hem56UDhUbnZpeVZmZm5ObVF0RmNNMXFaNlBURDh3QVpjVmhsRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvYXJyb3djYXBpdGFsX21hbmFnZS9zaXRlLXNldHRpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1783501346);

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

DROP TABLE IF EXISTS `site_options`;
CREATE TABLE IF NOT EXISTS `site_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `option_key` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(1, '2026-04-21 14:11:15', 'newinvoiceno', '90'),
(2, '2024-04-18 11:05:19', 'account-msg-customer', 'For the Customers who have given other customer referrals to the company, it would be compulsory for them to submit their kyc Documents to the company within 30 days. If not submitted, all the payouts of the Customer will be automatically cancelled To  get the cancelled payout, you can contact the company and discuss it.'),
(3, '2025-02-27 20:11:42', 'sa-wp-remarketing', 'ArrowCapital'),
(4, '2025-02-27 20:11:42', 'sa-wp-getoffer', 'ArrowCapital'),
(5, '2025-02-27 20:11:42', 'sa-wp-payment-success', 'ArrowCapital'),
(6, '2025-02-27 20:11:42', 'sa-wp-username-password', 'ArrowCapital'),
(7, '2025-02-27 20:11:42', 'la-wp-remarketing', 'ArrowCapital'),
(8, '2025-02-27 20:11:42', 'la-wp-getoffer', 'ArrowCapital'),
(9, '2025-02-27 20:11:42', 'la-wp-payment-success', 'ArrowCapital'),
(10, '2025-02-27 20:11:42', 'la-wp-username-password', 'ArrowCapital'),
(11, '2025-06-03 14:46:05', 'last_agent_id', '64'),
(12, '2025-07-07 13:16:51', 'last_self_agent_id', '59'),
(13, '2025-07-31 09:03:19', 'last_assistant_id', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sms_list`
--

DROP TABLE IF EXISTS `sms_list`;
CREATE TABLE IF NOT EXISTS `sms_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` tinyint NOT NULL,
  `slug` varchar(55) DEFAULT NULL,
  `title` varchar(256) NOT NULL,
  `message` mediumtext NOT NULL,
  `isActive` tinyint NOT NULL COMMENT '1=active, 0=not active',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_list`
--

INSERT INTO `sms_list` (`id`, `rec_date`, `type`, `slug`, `title`, `message`, `isActive`) VALUES
(1, '2026-04-06 14:40:01', 1, 'get_offer', 'Get Offer', 'Congrats! Your Rs.{#varamount#}/- Loan has been Pre-Approved! Get money directly in your bank a/c. Get Offer Now https://kbzp.in/OECAFI/zfuyd Arrow Capital', 1),
(2, '2026-04-04 15:57:53', 1, 'remarketing_sms', 'Remarketing SMS', 'Your Pre-Approved Rs.{#varamount#} Loan Amount is Confirmed. Get Money in 5 mins. Complete Your Loan Process Now: https://kbzp.in/OECAFI/zfuyd arrowcapital', 1),
(3, '2026-04-04 16:52:09', 1, 'payment_unsuccessful', 'Payment Unsuccessful', 'Sorry, your payment for Arrow Capital Subscription was not successful. Try Another Payment Method here https://kbzp.in/OECAFI/zfuyd Arrow Capital', 1),
(4, '2026-04-07 09:44:01', 1, 'payment_successful', 'Payment Successful', 'Dear Customer, Your Payment for Self Apply Plan has been successful! Check your reg. email and login to customer portal to proceed ahead. Thanks, Arrow Capital', 1),
(6, '2026-04-06 14:40:33', 2, 'get_offer', 'Get Offer', 'Congrats! Your Rs.{#varamount#}/- Loan has been Pre-Approved! Get money directly in your bank a/c. Get Offer Now https://kbzp.in/OECAFI/ebyxj Arrow Capital', 1),
(5, '2026-03-31 11:06:42', 1, 'forgot_password', 'Forgot Password', 'Hello {#var#} Your Arrow Capital account\'s new password is {#var#} Do not share it with anyone. Thanks, Arrow Capital', 1),
(7, '2026-04-04 15:58:32', 2, 'remarketing_sms', 'Remarketing SMS', 'Your Pre-Approved Rs.{#varamount#} Loan Amount is Confirmed. Get Money in 5 mins. Complete Your Loan Process Now: https://kbzp.in/OECAFI/ebyxj arrowcapital', 1),
(8, '2026-04-04 16:53:55', 2, 'payment_unsuccessful', 'Payment Unsuccessful', 'Sorry, your payment for Arrow Capital Subscription was not successful. Try Another Payment Method here https://kbzp.in/OECAFI/ebyxj Arrow Capital', 1),
(9, '2026-04-07 09:44:38', 2, 'payment_successful', 'Payment Successful', 'Dear Customer, Your Payment for Hire Agent Plan has been successful! Check your reg. email and login to customer portal to proceed ahead. Thanks, Arrow Capital', 1),
(10, '2026-03-31 11:06:25', 2, 'forgot_password', 'Forgot Password', 'Hello {#var#} Your Arrow Capital account\'s new password is {#var#} Do not share it with anyone. Thanks, Arrow Capital', 1),
(11, '2026-04-04 16:56:17', 3, 'ticket_raised', 'Support Request  – Ticket Raised', 'Your request ticket has been raised in our system with the Ticket Id: {#varamount#}  We will contact you within 24-48 hours for a follow-up. Arrow Capital', 1),
(12, '2026-04-04 16:54:23', 3, 'ticket_underprocess', 'Support Request – Under Process', 'Hello, Your request with Ticket ID: {#varamount#} is under process. The query will be solved soon and it will be informed to you shortly. Thanks, Arrow Capital', 1),
(13, '2026-04-04 16:55:35', 3, 'ticket_noresponse', 'Support Request – No-response Closed', 'Hello, Your request with Ticket Id: {#varamount#} is closed as the company tried calling you for the last 3 days but got no response. Thanks, Arrow Capital', 1),
(14, '2026-04-04 16:55:09', 3, 'ticket_solved', 'Support Request – Solved', 'Hello, Your request with Ticket Id: {#varamount#} is Solved. We thank you for the opportunity to serve you. Thanks, Arrow Capital', 1),
(15, '2026-04-04 16:28:38', 3, 'ticket_closed', 'Support Request – Closed', 'Hello, Your request with Ticket Id: {#varamount#} is closed as the company tried calling you for the last 3 days but got no response. Thanks, Arrow Capital', 1),
(16, '2026-03-31 10:56:21', 1, 'sales_cycle_days', 'After Sales Cycle - 1,2,3,5 days', '#', 1),
(17, '2026-04-06 11:54:10', 1, 'sales_cycle_closed', 'After Sales Cycle - Closed', 'Dear Customer, We hope our services have benefited you. If you\'re still confused how to apply for loan, call our customer care on {#var#} Arrow Capital', 1),
(18, '2026-04-06 11:54:28', 2, 'sales_cycle_closed', 'After Sales Cycle - Closed', 'Dear Customer, We hope our services have benefited you. If you\'re still confused how to apply for loan, call our customer care on {#var#} Arrow Capital', 1),
(19, '2026-03-31 11:08:09', 2, 'app_remarks_add', 'Application Remarks Add', 'Dear Customer, a new update on your service is displayed on your customer portal. Check here https://ArrowCapital.in/customer/login ArrowCapital', 1),
(20, '2026-04-06 11:53:38', 1, 'verified_customer', 'Verified Customer', 'Dear Customer, We hope you will make the most of the guidance provided by our Company Executive. For any further assistance, please call on {#var#} from Monday-Saturday between (10:00 AM to 5:00 PM) only business days. Thanks, Arrow Capital', 1),
(21, '2026-04-06 12:02:47', 4, 'get_offer_', 'Get Offer', 'Congrats! Your Rs.{#var#}/- Loan has been Pre-Approved! Get money directly in your bank a/c. Get Offer Now {#var#} Arrow Capital', 1),
(23, '2026-04-06 12:02:55', 4, 'get_offer', 'Get Offer', 'Congrats! Your Rs.{#var#}/- Loan has been Pre-Approved! Get money directly in your bank a/c. Get Offer Now {#var#} Arrow Capital', 1),
(24, '2026-04-04 16:48:53', 4, 'payment_unsuccessful', 'Payment Unsucessful', 'Sorry, your payment for Arrow Capital Subscription was not successful. Try Another Payment Method here https://kbzp.in/OECAFI/zfuyd Arrow Capital', 1),
(25, '2025-08-07 19:37:35', 4, 'payment_successful', 'Payment Successful', 'Dear Customer, Your Payment for Loan Assistant Plan has been successful! Check your reg. email and login to customer portal to proceed ahead. Thanks,ArrowCapital', 1),
(26, '2026-03-31 10:57:18', 4, 'forgot_password', 'Forget Password', 'Hello {#var#} Your Arrow Capital account\'s new password is {#var#} Do not share it with anyone. Thanks, Arrow Capital', 1),
(27, '2026-04-06 11:52:55', 4, 'pre_approved', 'Pre Approved', 'Congrats! Your Rs.{#var#}/- Loan has been Pre-Approved! Get money directly in your bank a/c. Get Offer Now {#var#} Arrow Capital', 1),
(28, '2026-03-31 10:32:31', 4, 'remarketing_sms', 'Remarketing SMS', '#', 1),
(29, '2026-04-06 11:54:03', 4, 'sales_cycle_closed', 'After Sales Cycle - Closed', 'Dear Customer, We hope our services have benefited you. If you\'re still confused how to apply for loan, call our customer care on {#var#} Arrow Capital', 1),
(30, '2026-03-31 11:05:54', 2, 'sales_cycle_days', 'After Sales Cycle - 1,2,3,5 days', '#', 1),
(31, '2026-03-31 11:05:59', 4, 'sales_cycle_days', 'After Sales Cycle - 1,2,3,5 days', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_log`
--

DROP TABLE IF EXISTS `sms_log`;
CREATE TABLE IF NOT EXISTS `sms_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `crontype` varchar(50) NOT NULL,
  `parentid` int NOT NULL,
  `cronname` varchar(255) NOT NULL,
  `msgcount` int NOT NULL,
  `msgresponse` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `source_entry`
--

DROP TABLE IF EXISTS `source_entry`;
CREATE TABLE IF NOT EXISTS `source_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL,
  `utm_source` varchar(125) DEFAULT NULL,
  `utm_campaign` varchar(255) DEFAULT NULL,
  `utm_medium` varchar(125) DEFAULT NULL,
  `source_id` varchar(299) DEFAULT NULL,
  `utm_referral` varchar(99) DEFAULT NULL,
  `client_ip` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2401 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_entry`
--

INSERT INTO `source_entry` (`id`, `rec_date`, `user_id`, `utm_source`, `utm_campaign`, `utm_medium`, `source_id`, `utm_referral`, `client_ip`) VALUES
(1, '2025-12-28 15:11:28', 1, 'web', '', 'direct', NULL, NULL, '127.0.0.1'),
(2, '2026-03-28 07:41:55', 1, 'web', '', 'direct', NULL, NULL, '117.199.55.29'),
(3, '2026-03-28 07:45:48', 1, 'web', '', 'direct', '', '', '117.199.55.29'),
(4, '2026-03-28 09:33:35', 2, 'web', '', 'direct', NULL, NULL, '171.61.163.130'),
(5, '2026-03-28 16:08:08', 3, 'web', '', 'direct', NULL, NULL, '42.107.156.88'),
(6, '2026-03-28 16:54:01', 4, 'web', '', 'direct', NULL, NULL, '49.32.196.30'),
(7, '2026-03-30 10:23:34', 5, 'web', '', 'direct', NULL, NULL, '116.72.153.165'),
(8, '2026-03-30 12:34:41', 6, 'web', '', 'direct', NULL, NULL, '116.72.153.165'),
(9, '2026-03-31 05:45:20', 6, 'web', '', 'direct', '', '', '116.72.153.165'),
(10, '2026-03-31 05:46:24', 6, 'web', '', 'direct', '', '', '116.72.153.165'),
(11, '2026-03-31 08:11:18', 7, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(12, '2026-03-31 08:26:56', 6, 'web', '', 'direct', '', '', '116.72.76.163'),
(13, '2026-03-31 08:58:37', 6, 'web', '', 'direct', '', '', '116.72.76.163'),
(14, '2026-03-31 08:59:32', 6, 'web', '', 'direct', '', '', '116.72.76.163'),
(15, '2026-03-31 09:15:03', 6, 'web', '', 'direct', '', '', '116.72.76.163'),
(16, '2026-03-31 10:59:43', 8, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(17, '2026-03-31 12:11:24', 9, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(18, '2026-04-01 12:00:19', 10, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(19, '2026-04-01 12:02:38', 11, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(20, '2026-04-02 05:40:59', 12, 'web', '', 'direct', NULL, NULL, '43.251.72.72'),
(21, '2026-04-02 06:11:32', 13, 'web', '', 'direct', NULL, NULL, '116.74.103.14'),
(22, '2026-04-02 18:19:58', 14, 'web', '', 'direct', NULL, NULL, '202.12.82.136'),
(23, '2026-04-03 10:32:52', 15, 'web', '', 'direct', NULL, NULL, '103.123.224.46'),
(24, '2026-04-03 12:04:08', 16, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(25, '2026-04-03 18:08:58', 17, 'web', '', 'direct', NULL, NULL, '27.61.45.237'),
(26, '2026-04-03 18:51:13', 18, 'web', '', 'direct', NULL, NULL, '152.58.163.62'),
(27, '2026-04-04 09:58:55', 19, 'web', '', 'direct', NULL, NULL, '171.61.162.164'),
(28, '2026-04-04 10:00:27', 20, 'web', '', 'direct', NULL, NULL, '171.61.162.164'),
(29, '2026-04-04 10:15:59', 21, 'web', '', 'direct', NULL, NULL, '116.72.12.51'),
(30, '2026-04-04 12:01:13', 20, 'web', '', 'direct', '', '', '171.61.162.164'),
(31, '2026-04-04 16:22:28', 22, 'web', '', 'direct', NULL, NULL, '42.108.29.12'),
(32, '2026-04-06 05:37:50', 23, 'web', '', 'direct', NULL, NULL, '103.199.205.157'),
(33, '2026-04-06 06:07:28', 21, 'web', '', 'direct', '', '', '116.75.249.175'),
(34, '2026-04-06 08:59:51', 24, 'web', '', 'direct', NULL, NULL, '106.221.159.37'),
(35, '2026-04-06 09:04:47', 20, 'web', '', 'direct', '', '', '171.61.167.243'),
(36, '2026-04-06 09:07:19', 25, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(37, '2026-04-06 09:16:22', 26, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(38, '2026-04-06 09:36:47', 27, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(39, '2026-04-06 09:46:17', 28, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(40, '2026-04-06 10:05:19', 28, 'web', '', 'direct', '', '', '103.251.59.169'),
(41, '2026-04-06 10:26:18', 29, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(42, '2026-04-06 10:54:06', 30, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(43, '2026-04-06 10:54:09', 31, 'web', '', 'direct', NULL, NULL, '27.61.192.232'),
(44, '2026-04-06 11:18:46', 30, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(45, '2026-04-06 11:23:43', 32, 'web', '', 'direct', NULL, NULL, '171.61.167.243'),
(46, '2026-04-06 12:01:01', 29, 'web', '', 'direct', '', '', '171.61.167.243'),
(47, '2026-04-07 07:49:15', 3, 'web', '', 'direct', '', '', '42.105.197.225'),
(48, '2026-04-07 07:51:21', 3, 'web', '', 'direct', '', '', '42.105.197.225'),
(49, '2026-04-07 08:15:47', 33, 'web', '', 'direct', NULL, NULL, '47.11.113.64'),
(50, '2026-04-08 06:29:14', 34, 'web', '', 'direct', NULL, NULL, '106.216.228.207'),
(51, '2026-04-08 06:51:14', 35, 'web', '', 'direct', NULL, NULL, '106.219.253.139'),
(52, '2026-04-08 07:47:33', 35, 'web', '', 'direct', '', '', '106.219.250.139'),
(53, '2026-04-08 07:48:35', 35, 'web', '', 'direct', '', '', '106.219.250.139'),
(54, '2026-04-08 19:14:22', 36, 'ig', '120242209413580473', 'paid', NULL, NULL, '152.58.114.96'),
(55, '2026-04-08 19:47:43', 37, 'ig', '120242209413580473', 'paid', NULL, NULL, '122.168.5.77'),
(56, '2026-04-09 09:40:46', 38, 'ig', '120242209413580473', 'paid', NULL, NULL, '106.206.196.58'),
(57, '2026-04-09 12:54:32', 39, 'ig', '120242209413580473', 'paid', NULL, NULL, '152.59.83.65'),
(58, '2026-04-09 17:18:12', 40, 'ig', '120242209413580473', 'paid', NULL, NULL, '223.188.59.7'),
(59, '2026-04-09 17:21:50', 40, 'web', '', 'direct', '', '', '223.188.59.7'),
(60, '2026-04-09 19:00:14', 36, 'web', '', 'direct', '', '', '152.58.114.16'),
(61, '2026-04-09 19:12:04', 41, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.58.177.17'),
(62, '2026-04-09 19:19:30', 42, 'fb', '120247511690420747', 'paid', NULL, NULL, '42.108.76.98'),
(63, '2026-04-09 19:28:42', 43, 'fb', '120247512111940747', 'paid', NULL, NULL, '223.237.159.128'),
(64, '2026-04-09 19:30:55', 44, 'fb', '120247511690420747', 'paid', NULL, NULL, '202.142.71.184'),
(65, '2026-04-09 20:23:17', 45, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.58.181.130'),
(66, '2026-04-09 20:41:22', 46, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.59.80.88'),
(67, '2026-04-09 20:47:23', 47, 'fb', '120247512111940747', 'paid', NULL, NULL, '192.140.155.58'),
(68, '2026-04-09 20:53:49', 48, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.40.92.9'),
(69, '2026-04-09 20:55:58', 49, 'ig', '120247512111940747', 'paid', NULL, NULL, '27.61.213.162'),
(70, '2026-04-09 21:38:20', 48, 'web', '', 'direct', NULL, NULL, '157.40.92.9'),
(71, '2026-04-09 21:56:12', 50, 'fb', '120247511690420747', 'paid', NULL, NULL, '47.11.130.205'),
(72, '2026-04-09 22:09:23', 51, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.58.7.234'),
(73, '2026-04-09 23:36:28', 51, 'web', '', 'direct', '', '', '152.58.7.102'),
(74, '2026-04-10 00:08:34', 51, 'web', '', 'direct', '', '', '152.58.15.96'),
(75, '2026-04-10 01:02:55', 40, 'web', '', 'direct', '', '', '110.226.172.137'),
(76, '2026-04-10 01:04:46', 40, 'web', '', 'direct', '', '', '110.226.172.137'),
(77, '2026-04-10 01:44:32', 40, 'web', '', 'direct', '', '', '110.226.172.137'),
(78, '2026-04-10 03:01:56', 44, 'web', '', 'direct', '', '', '202.142.71.184'),
(79, '2026-04-10 03:02:25', 52, 'fb', '120247512111940747', 'paid', NULL, NULL, '152.58.184.225'),
(80, '2026-04-10 03:35:55', 53, 'fb', '120247512111940747', 'paid', NULL, NULL, '59.93.70.165'),
(81, '2026-04-10 03:40:35', 54, 'fb', '120247511690420747', 'paid', NULL, NULL, '42.104.161.79'),
(82, '2026-04-10 03:49:20', 55, 'fb', '120247512111940747', 'paid', NULL, NULL, '49.42.35.12'),
(83, '2026-04-10 04:08:47', 56, 'fb', '120247512111940747', 'paid', NULL, NULL, '157.49.104.135'),
(84, '2026-04-10 04:10:02', 57, 'fb', '120247512111940747', 'paid', NULL, NULL, '122.161.243.183'),
(85, '2026-04-10 04:25:07', 58, 'fb', '120247511690420747', 'paid', NULL, NULL, '106.221.221.141'),
(86, '2026-04-10 04:26:13', 59, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.40.64.146'),
(87, '2026-04-10 04:35:23', 60, 'ig', '120247511690420747', 'paid', NULL, NULL, '157.38.149.62'),
(88, '2026-04-10 05:21:44', 61, 'fb', '120247512111940747', 'paid', NULL, NULL, '157.38.3.169'),
(89, '2026-04-10 05:25:17', 62, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.48.169.101'),
(90, '2026-04-10 05:27:04', 63, 'ig', '120247511690420747', 'paid', NULL, NULL, '27.60.164.184'),
(91, '2026-04-10 05:36:38', 64, 'fb', '120247511690420747', 'paid', NULL, NULL, '103.198.128.83'),
(92, '2026-04-10 05:41:08', 65, 'ig', '120247511690420747', 'paid', NULL, NULL, '111.125.235.30'),
(93, '2026-04-10 05:46:04', 66, 'web', '', 'direct', NULL, NULL, '157.42.231.240'),
(94, '2026-04-10 06:01:31', 67, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.46.7.81'),
(95, '2026-04-10 06:26:29', 68, 'fb', '120247512111940747', 'paid', NULL, NULL, '103.242.189.241'),
(96, '2026-04-10 06:31:32', 69, 'fb', '120247512111940747', 'paid', NULL, NULL, '223.184.236.129'),
(97, '2026-04-10 06:34:01', 70, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.56.132.5'),
(98, '2026-04-10 06:43:36', 71, 'fb', '120247511690420747', 'paid', NULL, NULL, '106.220.190.98'),
(99, '2026-04-10 06:47:07', 64, 'web', '', 'direct', '', '', '103.198.128.83'),
(100, '2026-04-10 06:55:29', 72, 'fb', '120247512111940747', 'paid', NULL, NULL, '49.42.174.18'),
(101, '2026-04-10 07:07:24', 73, 'fb', '120247512111940747', 'paid', NULL, NULL, '27.59.100.87'),
(102, '2026-04-10 07:08:47', 74, 'fb', '120247512111940747', 'paid', NULL, NULL, '45.127.59.218'),
(103, '2026-04-10 07:29:54', 75, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.33.241.240'),
(104, '2026-04-10 07:53:58', 40, 'web', '', 'direct', '', '', '110.226.172.137'),
(105, '2026-04-10 07:54:53', 40, 'web', '', 'direct', '', '', '110.226.172.137'),
(106, '2026-04-10 08:29:07', 76, 'ig', '120247512111940747', 'paid', NULL, NULL, '152.58.187.248'),
(107, '2026-04-10 08:44:12', 77, 'web', '', 'direct', NULL, NULL, '27.7.15.65'),
(108, '2026-04-10 08:54:11', 78, 'fb', '120247511690420747', 'paid', NULL, NULL, '47.11.235.209'),
(109, '2026-04-10 09:15:32', 40, 'web', '', 'direct', '', '', '223.184.244.158'),
(110, '2026-04-10 09:23:24', 79, 'fb', '120247512111940747', 'paid', NULL, NULL, '103.190.9.88'),
(111, '2026-04-10 10:13:23', 80, 'fb', '120247511690420747', 'paid', NULL, NULL, '152.59.127.195'),
(112, '2026-04-10 10:16:04', 81, 'fb', '120247511690420747', 'paid', NULL, NULL, '182.77.79.49'),
(113, '2026-04-10 10:42:43', 77, 'web', '', 'direct', '', '', '106.221.203.63'),
(114, '2026-04-10 10:49:12', 82, 'fb', '120247512111940747', 'paid', NULL, NULL, '223.188.119.211'),
(115, '2026-04-10 11:23:34', 83, 'ig', '120247511690420747', 'paid', NULL, NULL, '42.110.174.32'),
(116, '2026-04-10 11:46:59', 84, 'ig', '120247511690420747', 'paid', NULL, NULL, '152.59.110.90'),
(117, '2026-04-10 12:54:22', 85, 'fb', '120247511690420747', 'paid', NULL, NULL, '49.37.40.76'),
(118, '2026-04-10 13:02:50', 86, 'fb', '120247511690420747', 'paid', NULL, NULL, '157.33.241.201'),
(119, '2026-04-10 16:56:21', 39, 'web', '', 'direct', '', '', '47.15.220.121'),
(120, '2026-04-10 17:45:52', 60, 'web', '', 'direct', '', '', '157.48.254.210'),
(121, '2026-04-10 20:46:10', 87, 'ig', '120242312930210473', 'paid', NULL, NULL, '152.59.5.104'),
(122, '2026-04-10 20:48:10', 87, 'web', '', 'direct', '', '', '152.59.5.104'),
(123, '2026-04-10 21:07:19', 39, 'web', '', 'direct', '', '', '47.15.223.117'),
(124, '2026-04-10 21:52:20', 88, 'ig', '120242312450050473', 'paid', NULL, NULL, '152.57.172.191'),
(125, '2026-04-10 21:52:51', 89, 'fb', '120242312930250473', 'paid', NULL, NULL, '103.182.147.202'),
(126, '2026-04-10 22:30:07', 90, 'ig', '120243305054760118', 'paid', NULL, NULL, '152.56.2.176'),
(127, '2026-04-10 22:44:29', 91, 'ig', '120242312930200473', 'paid', NULL, NULL, '1.39.234.2'),
(128, '2026-04-10 23:35:16', 91, 'web', '', 'direct', '', '', '1.39.242.7'),
(129, '2026-04-10 23:44:56', 92, 'fb', '120243305641360118', 'paid', NULL, NULL, '42.105.37.76'),
(130, '2026-04-11 00:14:41', 93, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.221.231.31'),
(131, '2026-04-11 00:43:42', 94, 'ig', '120242312450050473', 'paid', NULL, NULL, '49.36.116.202'),
(132, '2026-04-11 01:02:21', 95, 'ig', '120243305054760118', 'paid', NULL, NULL, '157.48.214.149'),
(133, '2026-04-11 01:12:51', 96, 'ig', '120242312930200473', 'paid', NULL, NULL, '152.56.180.248'),
(134, '2026-04-11 01:21:10', 97, 'ig', '120243305641360118', 'paid', NULL, NULL, '223.190.83.121'),
(135, '2026-04-11 01:21:46', 98, 'ig', '120242312930180473', 'paid', NULL, NULL, '42.108.92.71'),
(136, '2026-04-11 01:22:19', 99, 'ig', '120242312930200473', 'paid', NULL, NULL, '157.51.212.139'),
(137, '2026-04-11 01:26:00', 100, 'fb', '120242312930210473', 'paid', NULL, NULL, '152.59.174.44'),
(138, '2026-04-11 01:30:52', 101, 'ig', '120243305641360118', 'paid', NULL, NULL, '122.177.247.224'),
(139, '2026-04-11 01:38:14', 102, 'fb', '120242312450050473', 'paid', NULL, NULL, '157.51.9.147'),
(140, '2026-04-11 01:39:58', 103, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.0.61'),
(141, '2026-04-11 01:46:49', 91, 'web', '', 'direct', '', '', '1.39.242.15'),
(142, '2026-04-11 01:53:28', 104, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.185.205.246'),
(143, '2026-04-11 01:54:19', 105, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.51.114.250'),
(144, '2026-04-11 01:54:27', 104, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.185.205.246'),
(145, '2026-04-11 02:12:30', 106, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.221.177.12'),
(146, '2026-04-11 02:20:13', 107, 'fb', '120242312930210473', 'paid', NULL, NULL, '157.50.149.195'),
(147, '2026-04-11 02:34:12', 108, 'ig', '120243305641360118', 'paid', NULL, NULL, '157.48.102.163'),
(148, '2026-04-11 02:38:17', 109, 'fb', '120242312930200473', 'paid', NULL, NULL, '120.61.245.150'),
(149, '2026-04-11 02:40:38', 110, 'fb', '120242312930180473', 'paid', NULL, NULL, '106.192.168.116'),
(150, '2026-04-11 02:41:59', 111, 'ig', '120243305054760118', 'paid', NULL, NULL, '106.221.204.50'),
(151, '2026-04-11 02:43:51', 112, 'fb', '120242312930180473', 'paid', NULL, NULL, '152.59.167.207'),
(152, '2026-04-11 02:45:54', 112, 'web', '', 'direct', '', '', '152.59.167.207'),
(153, '2026-04-11 02:51:15', 113, 'ig', '120242312930200473', 'paid', NULL, NULL, '157.38.1.126'),
(154, '2026-04-11 03:01:04', 114, 'fb', '120243305641360118', 'paid', NULL, NULL, '103.42.197.2'),
(155, '2026-04-11 03:01:46', 99, 'web', '', 'direct', '', '', '157.51.215.133'),
(156, '2026-04-11 03:53:45', 115, 'ig', '120243305641360118', 'paid', NULL, NULL, '157.49.98.134'),
(157, '2026-04-11 04:01:22', 116, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(158, '2026-04-11 04:08:09', 117, 'fb', '120242312930200473', 'paid', NULL, NULL, '27.60.180.225'),
(159, '2026-04-11 04:17:00', 54, 'web', '', 'direct', '', '', '42.108.128.138'),
(160, '2026-04-11 04:32:52', 118, 'fb', '120242312930200473', 'paid', NULL, NULL, '27.59.92.12'),
(161, '2026-04-11 04:34:34', 119, 'fb', '120243305641360118', 'paid', NULL, NULL, '157.51.217.103'),
(162, '2026-04-11 04:38:43', 120, 'fb', '120243305641360118', 'paid', NULL, NULL, '27.60.12.69'),
(163, '2026-04-11 04:58:13', 121, 'ig', '120242312930180473', 'paid', NULL, NULL, '49.47.69.227'),
(164, '2026-04-11 04:59:49', 122, 'ig', '120243305641360118', 'paid', NULL, NULL, '152.57.169.229'),
(165, '2026-04-11 05:04:23', 118, 'web', '', 'direct', '', '', '27.59.92.12'),
(166, '2026-04-11 05:18:04', 123, 'fb', '120242312450050473', 'paid', NULL, NULL, '106.192.168.156'),
(167, '2026-04-11 05:19:18', 123, 'fb', '120242312450050473', 'paid', NULL, NULL, '106.192.168.156'),
(168, '2026-04-11 05:23:03', 124, 'fb', '120242312450050473', 'paid', NULL, NULL, '49.34.250.214'),
(169, '2026-04-11 05:25:00', 124, 'web', '', 'direct', '', '', '49.34.250.214'),
(170, '2026-04-11 05:41:36', 125, 'ig', '120243305641360118', 'paid', NULL, NULL, '49.42.137.44'),
(171, '2026-04-11 06:15:22', 126, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(172, '2026-04-11 06:18:46', 127, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(173, '2026-04-11 06:19:03', 128, 'web', '', 'direct', NULL, NULL, '103.251.59.169'),
(174, '2026-04-11 06:19:57', 129, 'ig', '120242312930180473', 'paid', NULL, NULL, '49.36.144.18'),
(175, '2026-04-11 06:50:13', 130, 'fb', '120243305641360118', 'paid', NULL, NULL, '223.178.156.82'),
(176, '2026-04-11 07:52:02', 64, 'web', '', 'direct', '', '', '223.239.6.118'),
(177, '2026-04-11 07:58:02', 131, 'ig', '120243305054760118', 'paid', NULL, NULL, '106.192.90.46'),
(178, '2026-04-11 08:06:35', 132, 'ig', '120242312930210473', 'paid', NULL, NULL, '223.228.0.159'),
(179, '2026-04-11 08:24:31', 133, 'ig', '120242312930180473', 'paid', NULL, NULL, '27.59.108.171'),
(180, '2026-04-11 08:32:08', 134, 'ig', '120242312450050473', 'paid', NULL, NULL, '152.56.168.255'),
(181, '2026-04-11 08:32:10', 135, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.38.154.28'),
(182, '2026-04-11 08:45:19', 136, 'fb', '120242312930180473', 'paid', NULL, NULL, '157.42.28.212'),
(183, '2026-04-11 08:46:16', 137, 'ig', '120242312930250473', 'paid', NULL, NULL, '122.162.145.216'),
(184, '2026-04-11 08:51:02', 138, 'ig', '120242312930180473', 'paid', NULL, NULL, '47.15.106.140'),
(185, '2026-04-11 08:51:07', 139, 'fb', '120242312930210473', 'paid', NULL, NULL, '27.59.108.210'),
(186, '2026-04-11 08:51:46', 95, 'web', '', 'direct', '', '', '157.48.231.48'),
(187, '2026-04-11 08:53:10', 95, 'web', '', 'direct', NULL, NULL, '157.48.231.48'),
(188, '2026-04-11 08:55:44', 139, 'fb', '120242312930210473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasvvyAAAblzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR5rgT1JPiRPxIWR-n7k-1vmX_vbDZ6Wuv9WhVjrjQEKpgDYoZamJ0CASJMZSw_aem_q0d_td2V4hRoUzwV2FkC-A', '', '27.59.108.210'),
(189, '2026-04-11 09:00:12', 140, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.197.116.96'),
(190, '2026-04-11 09:04:13', 141, 'fb', '120242312930210473', 'paid', NULL, NULL, '152.56.135.12'),
(191, '2026-04-11 09:10:50', 142, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.185.47.122'),
(192, '2026-04-11 09:30:51', 143, 'fb', '120242312930200473', 'paid', NULL, NULL, '223.228.162.171'),
(193, '2026-04-11 09:45:59', 144, 'fb', '120242312930180473', 'paid', NULL, NULL, '106.205.173.221'),
(194, '2026-04-11 09:47:59', 145, 'ig', '120242312930200473', 'paid', NULL, NULL, '171.79.60.140'),
(195, '2026-04-11 09:54:18', 146, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.192.12.203'),
(196, '2026-04-11 10:01:15', 147, 'web', '', 'direct', NULL, NULL, '106.216.98.86'),
(197, '2026-04-11 10:12:56', 148, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.108.111'),
(198, '2026-04-11 10:18:39', 149, 'fb', '120242312930210473', 'paid', NULL, NULL, '106.192.171.44'),
(199, '2026-04-11 10:23:31', 150, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.58.25.77'),
(200, '2026-04-11 10:29:02', 148, 'web', '', 'direct', '', '', '103.158.138.56'),
(201, '2026-04-11 10:31:44', 148, 'web', '', 'direct', '', '', '103.158.138.56'),
(202, '2026-04-11 10:32:09', 148, 'web', '', 'direct', '', '', '103.158.138.56'),
(203, '2026-04-11 10:33:12', 150, 'web', '', 'direct', '', '', '152.58.25.77'),
(204, '2026-04-11 10:35:49', 148, 'web', '', 'direct', '', '', '103.158.138.56'),
(205, '2026-04-11 10:48:28', 162, 'th', '120246478642500184', 'paid', NULL, NULL, '59.184.118.210'),
(206, '2026-04-11 10:56:41', 163, 'fb', '120246478642490184', 'paid', NULL, NULL, '157.49.96.30'),
(207, '2026-04-11 10:58:30', 164, 'fb', '120246478642480184', 'paid', NULL, NULL, '106.221.229.239'),
(208, '2026-04-11 11:01:33', 165, 'fb', '120246478642490184', 'paid', NULL, NULL, '1.187.233.144'),
(209, '2026-04-11 11:03:59', 166, 'ig', '120246478533870184', 'paid', NULL, NULL, '106.192.104.6'),
(210, '2026-04-11 11:05:18', 167, 'ig', '120246478642460184', 'paid', NULL, NULL, '202.141.34.174'),
(211, '2026-04-11 11:05:24', 168, 'ig', '120246478642460184', 'paid', NULL, NULL, '157.35.91.229'),
(212, '2026-04-11 11:06:33', 169, 'ig', '120246478533870184', 'paid', NULL, NULL, '171.61.172.74'),
(213, '2026-04-11 11:11:47', 170, 'fb', '120246478642480184', 'paid', NULL, NULL, '157.50.91.254'),
(214, '2026-04-11 11:16:34', 171, 'ig', '120246478533870184', 'paid', NULL, NULL, '152.58.15.101'),
(215, '2026-04-11 11:18:13', 163, 'fb', '120246478642500184', 'paid', 'IwY2xjawRHDTZleHRuA2FlbQEwAGFkaWQBqzOOBrlOKHNydGMGYXBwX2lkDzQwOTk2MjYyMzA4NTYwOQABHlgRdQuE0OdoxHreVjIhm6RZpHzEAp6y9JOMGnAwLxoCRZ41ITJYo86437Qy_aem_vIaXM5ROuz__vs64YGBntQ', '', '157.49.96.68'),
(216, '2026-04-11 11:18:26', 172, 'fb', '120242312450050473', 'paid', NULL, NULL, '1.38.106.206'),
(217, '2026-04-11 11:19:27', 173, 'ig', '120246478533870184', 'paid', NULL, NULL, '106.216.193.104'),
(218, '2026-04-11 11:21:08', 163, 'web', '', 'direct', '', '', '157.49.96.68'),
(219, '2026-04-11 11:22:04', 174, 'fb', '120246478642490184', 'paid', NULL, NULL, '157.51.110.76'),
(220, '2026-04-11 11:23:48', 175, 'ig', '120246478642500184', 'paid', NULL, NULL, '152.58.47.38'),
(221, '2026-04-11 11:26:00', 176, 'fb', '120246478533870184', 'paid', NULL, NULL, '106.76.191.30'),
(222, '2026-04-11 11:26:05', 177, 'fb', '120246478642480184', 'paid', NULL, NULL, '110.226.167.94'),
(223, '2026-04-11 11:27:12', 178, 'ig', '120246478642490184', 'paid', NULL, NULL, '106.192.47.122'),
(224, '2026-04-11 11:27:56', 179, 'ig', '120246478642480184', 'paid', NULL, NULL, '152.56.138.6'),
(225, '2026-04-11 11:28:44', 180, 'fb', '120246478642480184', 'paid', NULL, NULL, '106.221.136.246'),
(226, '2026-04-11 11:33:58', 181, 'th', '120246478642460184', 'paid', NULL, NULL, '223.188.62.24'),
(227, '2026-04-11 11:34:30', 182, 'ig', '120246478642480184', 'paid', NULL, NULL, '152.59.127.15'),
(228, '2026-04-11 11:34:48', 164, 'web', '', 'direct', '', '', '106.221.229.239'),
(229, '2026-04-11 11:36:51', 181, 'web', '', 'direct', '', '', '223.188.62.24'),
(230, '2026-04-11 11:37:32', 181, 'web', '', 'direct', '', '', '223.188.62.24'),
(231, '2026-04-11 11:37:35', 183, 'ig', '120246478533870184', 'paid', NULL, NULL, '157.42.194.41'),
(232, '2026-04-11 11:39:09', 166, 'web', '', 'direct', '', '', '106.192.104.6'),
(233, '2026-04-11 11:39:30', 166, 'web', '', 'direct', '', '', '106.192.104.6'),
(234, '2026-04-11 11:43:44', 184, 'ig', '120242312930200473', 'paid', NULL, NULL, '203.115.73.202'),
(235, '2026-04-11 11:53:40', 185, 'fb', '120242312930200473', 'paid', NULL, NULL, '157.45.204.232'),
(236, '2026-04-11 12:04:30', 186, 'ig', '120242312930200473', 'paid', NULL, NULL, '47.11.98.50'),
(237, '2026-04-11 12:07:26', 186, 'web', '', 'direct', '', '', '47.11.98.50'),
(238, '2026-04-11 12:08:14', 181, 'web', '', 'direct', '', '', '223.188.62.24'),
(239, '2026-04-11 12:08:37', 187, 'ig', '120242312930200473', 'paid', NULL, NULL, '103.141.133.72'),
(240, '2026-04-11 12:37:58', 186, 'web', '', 'direct', '', '', '47.11.96.132'),
(241, '2026-04-11 12:41:07', 181, 'web', '', 'direct', '', '', '223.188.62.24'),
(242, '2026-04-11 12:43:15', 2, 'web', '', 'direct', '', '', '27.61.233.210'),
(243, '2026-04-11 12:49:44', 188, 'fb', '120246478642460184', 'paid', NULL, NULL, '157.35.107.217'),
(244, '2026-04-11 12:50:47', 145, 'web', '', 'direct', '', '', '171.79.57.224'),
(245, '2026-04-11 13:01:32', 189, 'ig', '120246478642490184', 'paid', NULL, NULL, '152.59.201.104'),
(246, '2026-04-11 13:04:26', 190, 'fb', '120246478642490184', 'paid', NULL, NULL, '152.58.179.195'),
(247, '2026-04-11 13:08:06', 191, 'fb', '120246478642460184', 'paid', NULL, NULL, '157.50.159.63'),
(248, '2026-04-11 13:10:53', 176, 'web', '', 'direct', '', '', '106.76.191.9'),
(249, '2026-04-11 13:17:46', 192, 'fb', '120242312930200473', 'paid', NULL, NULL, '171.79.48.23'),
(250, '2026-04-11 13:22:28', 193, 'ig', '120246478533870184', 'paid', NULL, NULL, '106.192.136.136'),
(251, '2026-04-11 14:49:33', 194, 'fb', '120246478642490184', 'paid', NULL, NULL, '223.178.152.15'),
(252, '2026-04-11 14:57:07', 176, 'web', '', 'direct', NULL, NULL, '106.76.191.105'),
(253, '2026-04-11 14:59:22', 195, 'fb', '120242312930250473', 'paid', NULL, NULL, '49.37.132.24'),
(254, '2026-04-11 15:01:50', 167, 'web', '', 'direct', '', '', '202.141.34.174'),
(255, '2026-04-11 15:02:49', 162, 'web', '', 'direct', '', '', '59.184.229.49'),
(256, '2026-04-11 15:14:13', 181, 'web', '', 'direct', '', '', '157.38.151.126'),
(257, '2026-04-11 15:33:44', 196, 'fb', '120242312930200473', 'paid', NULL, NULL, '106.206.104.221'),
(258, '2026-04-11 15:37:42', 162, 'web', '', 'direct', '', '', '59.184.229.49'),
(259, '2026-04-11 15:37:43', 173, 'web', '', 'direct', '', '', '106.221.186.249'),
(260, '2026-04-11 15:39:11', 197, 'ig', '120242312930250473', 'paid', NULL, NULL, '182.48.237.63'),
(261, '2026-04-11 15:52:09', 167, 'web', '', 'direct', '', '', '106.192.167.0'),
(262, '2026-04-11 16:01:51', 198, 'ig', '120242312930200473', 'paid', NULL, NULL, '150.129.66.241'),
(263, '2026-04-11 16:18:03', 141, 'web', '', 'direct', '', '', '152.59.144.90'),
(264, '2026-04-11 16:24:56', 199, 'fb', '120242312930200473', 'paid', NULL, NULL, '42.106.178.239'),
(265, '2026-04-11 16:44:09', 200, 'ig', '120242312450050473', 'paid', NULL, NULL, '223.186.54.186'),
(266, '2026-04-11 16:52:30', 59, 'web', '', 'direct', '', '', '42.108.84.28'),
(267, '2026-04-11 16:53:13', 59, 'web', '', 'direct', '', '', '42.108.84.28'),
(268, '2026-04-11 18:06:27', 164, 'web', '', 'direct', '', '', '157.49.5.162'),
(269, '2026-04-11 18:13:02', 146, 'web', '', 'direct', '', '', '106.192.21.188'),
(270, '2026-04-11 18:14:47', 146, 'web', '', 'direct', '', '', '106.192.21.188'),
(271, '2026-04-11 18:15:23', 45, 'web', '', 'direct', '', '', '152.58.182.44'),
(272, '2026-04-11 18:33:45', 201, 'ig', '120242312930200473', 'paid', NULL, NULL, '223.187.149.37'),
(273, '2026-04-11 18:54:49', 198, 'web', '', 'direct', '', '', '150.129.66.241'),
(274, '2026-04-11 19:18:18', 162, 'web', '', 'direct', '', '', '117.222.82.45'),
(275, '2026-04-11 20:35:14', 202, 'ig', '120242312450050473', 'paid', NULL, NULL, '223.228.132.126'),
(276, '2026-04-11 20:37:55', 203, 'fb', '120242312930200473', 'paid', NULL, NULL, '223.231.228.166'),
(277, '2026-04-11 21:19:45', 204, 'ig', '120242312930200473', 'paid', NULL, NULL, '106.202.30.89'),
(278, '2026-04-11 23:06:22', 205, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.33.37.172'),
(279, '2026-04-12 00:37:09', 206, 'ig', '120242312930200473', 'paid', NULL, NULL, '42.104.130.158'),
(280, '2026-04-12 00:57:29', 207, 'ig', '120242312930200473', 'paid', NULL, NULL, '106.192.127.132'),
(281, '2026-04-12 01:13:16', 208, 'ig', '120242312450050473', 'paid', NULL, NULL, '47.15.239.7'),
(282, '2026-04-12 01:31:30', 146, 'web', '', 'direct', '', '', '106.192.30.185'),
(283, '2026-04-12 01:41:38', 209, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.56.135.132'),
(284, '2026-04-12 01:41:55', 210, 'fb', '120242312450050473', 'paid', NULL, NULL, '106.205.157.120'),
(285, '2026-04-12 01:44:20', 206, 'web', '', 'direct', '', '', '42.104.130.158'),
(286, '2026-04-12 02:12:03', 175, 'web', '', 'direct', '', '', '152.59.107.17'),
(287, '2026-04-12 02:35:18', 89, 'web', '', 'direct', '', '', '106.220.169.142'),
(288, '2026-04-12 02:36:20', 211, 'ig', '120242312450050473', 'paid', NULL, NULL, '157.51.64.91'),
(289, '2026-04-12 02:44:04', 136, 'web', '', 'direct', '', '', '157.42.24.113'),
(290, '2026-04-12 02:46:41', 212, 'fb', '120242312450050473', 'paid', NULL, NULL, '223.184.133.7'),
(291, '2026-04-12 02:46:50', 205, 'web', '', 'direct', '', '', '157.33.38.113'),
(292, '2026-04-12 03:07:03', 89, 'web', '', 'direct', '', '', '106.220.169.142'),
(293, '2026-04-12 03:19:22', 213, 'fb', '120242312930200473', 'paid', NULL, NULL, '27.63.239.42'),
(294, '2026-04-12 03:20:31', 214, 'fb', '120242312450050473', 'paid', NULL, NULL, '157.33.56.219'),
(295, '2026-04-12 03:25:22', 215, 'ig', '120242312930200473', 'paid', NULL, NULL, '106.222.187.110'),
(296, '2026-04-12 03:27:01', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(297, '2026-04-12 03:33:26', 216, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.58.17.227'),
(298, '2026-04-12 03:34:56', 169, 'web', '', 'direct', '', '', '171.61.168.30'),
(299, '2026-04-12 03:41:14', 217, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.59.203.177'),
(300, '2026-04-12 03:46:32', 197, 'web', '', 'direct', '', '', '157.50.165.139'),
(301, '2026-04-12 03:50:20', 176, 'web', '', 'direct', '', '', '103.119.179.217'),
(302, '2026-04-12 03:53:09', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(303, '2026-04-12 03:54:48', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(304, '2026-04-12 04:07:35', 112, 'web', '', 'direct', '', '', '152.59.166.184'),
(305, '2026-04-12 04:13:15', 181, 'web', '', 'direct', '', '', '157.38.148.75'),
(306, '2026-04-12 04:19:30', 139, 'web', '', 'direct', '', '', '223.228.137.201'),
(307, '2026-04-12 04:33:37', 218, 'web', '', 'direct', NULL, NULL, '157.38.148.75'),
(308, '2026-04-12 04:34:30', 219, 'fb', '120242312930200473', 'paid', NULL, NULL, '1.39.41.75'),
(309, '2026-04-12 04:45:42', 220, 'fb', '120242312930200473', 'paid', NULL, NULL, '27.59.63.52'),
(310, '2026-04-12 05:14:16', 163, 'web', '', 'direct', '', '', '157.49.98.10'),
(311, '2026-04-12 05:45:37', 221, 'fb', '120242312930200473', 'paid', NULL, NULL, '42.105.226.30'),
(312, '2026-04-12 05:49:37', 222, 'fb', '120242312930200473', 'paid', NULL, NULL, '110.224.90.135'),
(313, '2026-04-12 05:50:41', 222, 'fb', '120242312930200473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasvvx_89HlzcnRjBmFwcF9pZA8yNzUyNTQ2OTI1OTgyNzkAAR71Vct1qU9Ax57lugbw9LKEO03LgoiWfz21aIQtJq8hoEuPsNwuGIHngAnngg_aem_Lpgd9k33x0VrR0MxOCgjGg', '', '110.224.90.135'),
(314, '2026-04-12 06:08:50', 223, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.59.12.109'),
(315, '2026-04-12 06:26:52', 224, 'ig', '120242312930250473', 'paid', NULL, NULL, '223.228.180.146'),
(316, '2026-04-12 07:02:10', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(317, '2026-04-12 07:08:26', 192, 'web', '', 'direct', '', '', '171.79.54.76'),
(318, '2026-04-12 07:19:14', 225, 'ig', '120242312450050473', 'paid', NULL, NULL, '157.32.137.235'),
(319, '2026-04-12 07:47:44', 125, 'web', '', 'direct', '', '', '49.42.128.9'),
(320, '2026-04-12 07:48:59', 220, 'web', '', 'direct', '', '', '27.59.63.52'),
(321, '2026-04-12 08:29:50', 226, 'ig', '120242312450050473', 'paid', NULL, NULL, '106.206.112.75'),
(322, '2026-04-12 08:31:49', 118, 'web', '', 'direct', '', '', '59.95.34.251'),
(323, '2026-04-12 08:34:23', 162, 'web', '', 'direct', '', '', '117.248.60.75'),
(324, '2026-04-12 09:14:30', 227, 'ig', '120242312450050473', 'paid', NULL, NULL, '49.204.193.30'),
(325, '2026-04-12 09:29:34', 228, 'ig', '120242312450050473', 'paid', NULL, NULL, '152.57.182.142'),
(326, '2026-04-12 09:54:58', 118, 'web', '', 'direct', '', '', '59.95.34.251'),
(327, '2026-04-12 10:11:37', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(328, '2026-04-12 10:17:58', 229, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.49.0.34'),
(329, '2026-04-12 10:29:31', 230, 'fb', '120242312450050473', 'paid', NULL, NULL, '152.58.177.63'),
(330, '2026-04-12 10:42:19', 200, 'web', '', 'direct', '', '', '223.186.54.178'),
(331, '2026-04-12 10:52:35', 231, 'ig', '120242312930200473', 'paid', NULL, NULL, '152.58.139.125'),
(332, '2026-04-12 10:57:15', 104, 'web', '', 'direct', NULL, NULL, '106.198.38.192'),
(333, '2026-04-12 11:25:03', 232, 'ig', '120242312450050473', 'paid', NULL, NULL, '171.79.58.2'),
(334, '2026-04-12 11:32:36', 233, 'ig', '120242312930200473', 'paid', NULL, NULL, '157.50.139.146'),
(335, '2026-04-12 11:48:26', 234, 'fb', '120242312450050473', 'paid', NULL, NULL, '157.49.98.246'),
(336, '2026-04-12 11:49:58', 235, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.207.178.241'),
(337, '2026-04-12 11:52:06', 235, 'web', '', 'direct', '', '', '106.207.178.241'),
(338, '2026-04-12 11:52:51', 235, 'web', '', 'direct', '', '', '106.207.178.241'),
(339, '2026-04-12 12:54:07', 236, 'ig', '120242312450050473', 'paid', NULL, NULL, '106.202.44.230'),
(340, '2026-04-12 13:08:46', 237, 'ig', '120242312930200473', 'paid', NULL, NULL, '110.224.76.116'),
(341, '2026-04-12 13:27:22', 238, 'ig', '120242312930200473', 'paid', NULL, NULL, '157.45.255.156'),
(342, '2026-04-12 13:27:52', 176, 'web', '', 'direct', NULL, NULL, '106.76.190.176'),
(343, '2026-04-12 16:35:11', 239, 'ig', '120242312930200473', 'paid', NULL, NULL, '223.228.134.163'),
(344, '2026-04-12 16:46:24', 129, 'web', '', 'direct', '', '', '49.36.144.42'),
(345, '2026-04-12 17:01:13', 187, 'web', '', 'direct', '', '', '103.141.133.85'),
(346, '2026-04-12 17:12:44', 240, 'ig', '120242312450050473', 'paid', NULL, NULL, '223.186.113.214'),
(347, '2026-04-12 17:50:30', 125, 'web', '', 'direct', '', '', '49.42.190.58'),
(348, '2026-04-12 18:02:09', 241, 'fb', '120247644789720747', 'paid', NULL, NULL, '49.42.139.155'),
(349, '2026-04-12 18:11:36', 242, 'fb', '120242312450050473', 'paid', NULL, NULL, '49.36.243.228'),
(350, '2026-04-12 18:21:55', 207, 'web', '', 'direct', '', '', '106.221.216.242'),
(351, '2026-04-12 18:35:49', 236, 'web', '', 'direct', '', '', '157.42.28.177'),
(352, '2026-04-12 18:44:05', 240, 'web', '', 'direct', '', '', '223.186.113.214'),
(353, '2026-04-12 18:45:02', 243, 'ig', '120243368634290118', 'paid', NULL, NULL, '152.59.80.103'),
(354, '2026-04-12 18:54:47', 244, 'ig', '120244905748990310', 'paid', NULL, NULL, '60.254.83.9'),
(355, '2026-04-12 19:02:02', 245, 'fb', '120243368628750118', 'paid', NULL, NULL, '27.61.44.34'),
(356, '2026-04-12 19:04:25', 246, 'fb', '120246548887120204', 'paid', NULL, NULL, '157.51.3.252'),
(357, '2026-04-12 19:39:55', 247, 'ig', '120246548887120204', 'paid', NULL, NULL, '43.231.253.164'),
(358, '2026-04-12 19:43:04', 248, 'ig', '120246548887120204', 'paid', NULL, NULL, '152.59.87.218'),
(359, '2026-04-12 20:08:15', 249, 'fb', '120247644789720747', 'paid', NULL, NULL, '110.224.18.183'),
(360, '2026-04-12 20:22:13', 250, 'fb', '120244905748990310', 'paid', NULL, NULL, '110.224.95.39'),
(361, '2026-04-12 20:28:05', 251, 'ig', '120246548887120204', 'paid', NULL, NULL, '106.222.8.228'),
(362, '2026-04-12 20:37:33', 252, 'ig', '120244905748990310', 'paid', NULL, NULL, '103.146.175.15'),
(363, '2026-04-12 21:05:42', 253, 'ig', '120246548968450204', 'paid', NULL, NULL, '27.60.180.35'),
(364, '2026-04-12 21:18:42', 254, 'ig', '120244905749000310', 'paid', NULL, NULL, '152.58.33.82'),
(365, '2026-04-12 21:48:02', 255, 'fb', '120244905749000310', 'paid', NULL, NULL, '152.58.87.17'),
(366, '2026-04-12 22:08:02', 256, 'fb', '120246548887120204', 'paid', NULL, NULL, '152.58.97.22'),
(367, '2026-04-12 22:29:08', 257, 'fb', '120246548887120204', 'paid', NULL, NULL, '42.104.188.101'),
(368, '2026-04-12 23:32:26', 258, 'ig', '120246548968450204', 'paid', NULL, NULL, '106.192.53.12'),
(369, '2026-04-12 23:43:57', 259, 'fb', '120244905748990310', 'paid', NULL, NULL, '27.63.146.178'),
(370, '2026-04-12 23:44:24', 141, 'web', '', 'direct', '', '', '152.59.143.254'),
(371, '2026-04-13 00:45:48', 208, 'web', '', 'direct', '', '', '47.15.245.185'),
(372, '2026-04-13 00:54:35', 260, 'fb', '120247644789720747', 'paid', NULL, NULL, '223.185.251.64'),
(373, '2026-04-13 01:26:41', 208, 'web', '', 'direct', '', '', '47.15.243.244'),
(374, '2026-04-13 02:12:12', 236, 'web', '', 'direct', '', '', '157.42.28.166'),
(375, '2026-04-13 02:23:41', 261, 'ig', '120244905748990310', 'paid', NULL, NULL, '106.192.228.244'),
(376, '2026-04-13 02:43:06', 104, 'web', '', 'direct', '', '', '106.198.38.192'),
(377, '2026-04-13 02:44:17', 104, 'web', '', 'direct', '', '', '106.198.38.192'),
(378, '2026-04-13 03:22:59', 141, 'web', '', 'direct', '', '', '152.59.143.232'),
(379, '2026-04-13 03:46:49', 205, 'web', '', 'direct', NULL, NULL, '106.78.97.45'),
(380, '2026-04-13 03:48:19', 226, 'web', '', 'direct', '', '', '223.186.189.96'),
(381, '2026-04-13 04:10:21', 262, 'fb', '120246548968460204', 'paid', NULL, NULL, '157.48.173.176'),
(382, '2026-04-13 04:29:46', 21, 'web', '', 'direct', '', '', '116.74.142.64'),
(383, '2026-04-13 04:34:52', 263, 'web', '', 'direct', NULL, NULL, '116.74.142.64'),
(384, '2026-04-13 04:41:38', 264, 'fb', '120247644789720747', 'paid', NULL, NULL, '152.57.86.65'),
(385, '2026-04-13 04:45:55', 121, 'web', '', 'direct', NULL, NULL, '49.47.71.9'),
(386, '2026-04-13 05:37:44', 263, 'web', '', 'direct', NULL, NULL, '116.72.39.37'),
(387, '2026-04-13 05:44:34', 208, 'web', '', 'direct', '', '', '223.184.239.164'),
(388, '2026-04-13 05:46:03', 67, 'web', '', 'direct', '', '', '157.46.8.75'),
(389, '2026-04-13 05:50:48', 265, 'ig', '120247644789720747', 'paid', NULL, NULL, '152.59.86.97'),
(390, '2026-04-13 06:05:25', 266, 'ig', '120247644789720747', 'paid', NULL, NULL, '152.59.60.7'),
(391, '2026-04-13 06:45:18', 267, 'fb', '120244905748990310', 'paid', NULL, NULL, '106.208.45.172'),
(392, '2026-04-13 07:42:44', 268, 'fb', '120246548968460204', 'paid', NULL, NULL, '223.181.47.76'),
(393, '2026-04-13 07:43:51', 268, 'web', '', 'direct', '', '', '223.181.47.76'),
(394, '2026-04-13 07:54:08', 269, 'ig', '120246548968450204', 'paid', NULL, NULL, '157.39.64.95'),
(395, '2026-04-13 08:02:18', 74, 'fb', '120243368628750118', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaswtOpQy1ZzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR7YAaFRHwhJPNRqTNxW-E4psIkz-tg2xMEn7fT0eeuCZaEqi5r3muN3F876jg_aem_fkiy4EEBpvddYrxCGCNCFQ', '', '45.127.59.218'),
(396, '2026-04-13 08:03:14', 270, 'ig', '120243368628750118', 'paid', NULL, NULL, '42.104.140.251'),
(397, '2026-04-13 08:11:27', 271, 'ig', '120246548968450204', 'paid', NULL, NULL, '106.213.216.137'),
(398, '2026-04-13 08:13:33', 271, 'ig', '120246548968450204', 'paid', NULL, NULL, '106.213.216.137'),
(399, '2026-04-13 08:31:38', 272, 'ig', '120246548887120204', 'paid', NULL, NULL, '152.57.95.217'),
(400, '2026-04-13 08:32:02', 273, 'ig', '120244905749000310', 'paid', NULL, NULL, '206.84.226.165'),
(401, '2026-04-13 08:32:21', 271, 'web', '', 'direct', '', '', '106.213.216.137'),
(402, '2026-04-13 08:36:54', 274, 'ig', '120243368634290118', 'paid', NULL, NULL, '223.188.117.13'),
(403, '2026-04-13 08:37:29', 35, 'web', '', 'direct', '', '', '106.219.252.231'),
(404, '2026-04-13 08:50:21', 275, 'fb', '120244905748990310', 'paid', NULL, NULL, '223.178.153.172'),
(405, '2026-04-13 08:52:25', 276, 'fb', '120244905748990310', 'paid', NULL, NULL, '47.15.168.46'),
(406, '2026-04-13 08:58:14', 277, 'fb', '120244905749000310', 'paid', NULL, NULL, '27.60.52.165'),
(407, '2026-04-13 08:59:52', 278, 'fb', '120244905749000310', 'paid', NULL, NULL, '106.192.25.225'),
(408, '2026-04-13 09:18:17', 279, 'ig', '120243368634290118', 'paid', NULL, NULL, '152.59.25.135'),
(409, '2026-04-13 09:18:20', 212, 'web', '', 'direct', '', '', '223.184.131.193'),
(410, '2026-04-13 09:18:51', 280, 'fb', '120244905748990310', 'paid', NULL, NULL, '157.38.152.229'),
(411, '2026-04-13 09:23:37', 271, 'web', '', 'direct', '', '', '106.213.216.137'),
(412, '2026-04-13 09:25:49', 277, 'web', '', 'direct', '', '', '27.60.52.165'),
(413, '2026-04-13 09:37:23', 281, 'ig', '120246548968460204', 'paid', NULL, NULL, '152.58.32.151'),
(414, '2026-04-13 09:37:25', 282, 'ig', '120246548968450204', 'paid', NULL, NULL, '163.223.49.219'),
(415, '2026-04-13 09:39:11', 283, 'fb', '120246548887120204', 'paid', NULL, NULL, '157.50.100.231'),
(416, '2026-04-13 09:54:29', 180, 'web', '', 'direct', '', '', '152.59.78.245'),
(417, '2026-04-13 09:57:50', 284, 'ig', '120246548887120204', 'paid', NULL, NULL, '47.15.155.244'),
(418, '2026-04-13 10:13:11', 67, 'web', '', 'direct', '', '', '157.46.0.207'),
(419, '2026-04-13 10:27:22', 285, 'ig', '120246548968450204', 'paid', NULL, NULL, '122.177.245.18'),
(420, '2026-04-13 10:29:37', 33, 'web', '', 'direct', '', '', '106.215.154.51'),
(421, '2026-04-13 10:54:29', 286, 'ig', '120247644455480747', 'paid', NULL, NULL, '157.32.132.221'),
(422, '2026-04-13 10:55:26', 287, 'ig', '120244905749000310', 'paid', NULL, NULL, '157.51.49.71'),
(423, '2026-04-13 11:06:27', 288, 'fb', '120244905749000310', 'paid', NULL, NULL, '223.184.197.203'),
(424, '2026-04-13 11:08:23', 289, 'ig', '120246548968450204', 'paid', NULL, NULL, '152.56.130.96'),
(425, '2026-04-13 11:12:59', 290, 'ig', '120243368634290118', 'paid', NULL, NULL, '47.11.101.165'),
(426, '2026-04-13 11:23:44', 291, 'fb', '120244905749000310', 'paid', NULL, NULL, '157.45.236.245'),
(427, '2026-04-13 11:45:16', 292, 'fb', '120246548887120204', 'paid', NULL, NULL, '157.50.200.193'),
(428, '2026-04-13 12:03:25', 291, 'web', '', 'direct', '', '', '157.45.241.178'),
(429, '2026-04-13 12:03:28', 289, 'web', '', 'direct', '', '', '152.56.129.110'),
(430, '2026-04-13 12:25:35', 280, 'web', '', 'direct', '', '', '157.38.152.89'),
(431, '2026-04-13 12:35:44', 291, 'web', '', 'direct', NULL, NULL, '157.45.226.83'),
(432, '2026-04-13 13:05:58', 293, 'fb', '120244905748990310', 'paid', NULL, NULL, '157.50.202.223'),
(433, '2026-04-13 13:07:34', 293, 'web', '', 'direct', '', '', '157.50.202.223'),
(434, '2026-04-13 13:15:17', 293, 'web', '', 'direct', NULL, NULL, '157.50.202.223'),
(435, '2026-04-13 13:41:30', 293, 'web', '', 'direct', '', '', '157.50.202.223'),
(436, '2026-04-13 15:46:07', 139, 'web', '', 'direct', '', '', '223.228.137.169'),
(437, '2026-04-13 16:40:57', 293, 'web', '', 'direct', '', '', '117.231.198.146'),
(438, '2026-04-13 16:55:48', 190, 'web', '', 'direct', '', '', '152.58.179.30'),
(439, '2026-04-13 16:57:17', 294, 'fb', '120244905749000310', 'paid', NULL, NULL, '1.39.127.187'),
(440, '2026-04-13 16:59:37', 190, 'web', '', 'direct', '', '', '152.58.179.30'),
(441, '2026-04-13 16:59:51', 295, 'fb', '120243368628750118', 'paid', NULL, NULL, '117.231.226.108'),
(442, '2026-04-13 17:06:42', 162, 'web', '', 'direct', '', '', '59.184.112.182'),
(443, '2026-04-13 17:07:36', 162, 'web', '', 'direct', '', '', '59.184.112.182'),
(444, '2026-04-13 17:08:44', 162, 'web', '', 'direct', '', '', '59.184.112.182'),
(445, '2026-04-13 17:45:50', 244, 'web', '', 'direct', '', '', '27.59.68.160'),
(446, '2026-04-13 17:46:38', 281, 'web', '', 'direct', NULL, NULL, '152.58.32.44'),
(447, '2026-04-13 18:02:13', 280, 'web', '', 'direct', '', '', '157.38.152.134'),
(448, '2026-04-13 18:59:29', 48, 'web', '', 'direct', NULL, NULL, '157.40.122.22'),
(449, '2026-04-13 19:17:23', 274, 'web', '', 'direct', '', '', '27.63.226.229'),
(450, '2026-04-14 01:23:55', 248, 'web', '', 'direct', '', '', '152.59.120.71'),
(451, '2026-04-14 01:59:15', 296, 'web', '', 'direct', NULL, NULL, '42.108.28.211'),
(452, '2026-04-14 03:49:02', 287, 'web', '', 'direct', '', '', '157.51.62.88'),
(453, '2026-04-14 03:49:23', 287, 'web', '', 'direct', '', '', '157.51.62.88'),
(454, '2026-04-14 03:55:26', 128, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(455, '2026-04-14 04:24:57', 251, 'web', '', 'direct', NULL, NULL, '223.238.228.127'),
(456, '2026-04-14 04:53:23', 118, 'web', '', 'direct', '', '', '152.58.34.125'),
(457, '2026-04-14 05:15:36', 144, 'web', '', 'direct', '', '', '223.188.8.110'),
(458, '2026-04-14 05:30:45', 144, 'web', '', 'direct', '', '', '223.188.10.102'),
(459, '2026-04-14 05:34:34', 297, 'fb', '120242312930200473', 'paid', NULL, NULL, '106.210.171.65'),
(460, '2026-04-14 05:44:35', 262, 'web', '', 'direct', '', '', '157.35.104.77'),
(461, '2026-04-14 05:46:15', 163, 'web', '', 'direct', NULL, NULL, '157.49.228.36'),
(462, '2026-04-14 06:12:31', 297, 'web', '', 'direct', '', '', '106.210.171.65'),
(463, '2026-04-14 06:46:57', 192, 'web', '', 'direct', '', '', '171.79.49.126'),
(464, '2026-04-14 07:13:56', 67, 'web', '', 'direct', NULL, NULL, '157.46.2.205'),
(465, '2026-04-14 07:33:36', 297, 'web', '', 'direct', '', '', '106.210.163.15'),
(466, '2026-04-14 07:39:43', 162, 'web', '', 'direct', NULL, NULL, '49.15.92.146'),
(467, '2026-04-14 07:40:09', 162, 'web', '', 'direct', NULL, NULL, '49.15.92.146'),
(468, '2026-04-14 09:47:12', 93, 'web', '', 'direct', '', '', '106.221.235.63'),
(469, '2026-04-14 14:46:22', 59, 'web', '', 'direct', '', '', '42.108.81.91'),
(470, '2026-04-14 14:57:39', 150, 'web', '', 'direct', '', '', '152.58.57.93'),
(471, '2026-04-14 15:46:33', 242, 'web', '', 'direct', '', '', '49.36.243.228'),
(472, '2026-04-14 16:13:26', 146, 'web', '', 'direct', '', '', '223.228.112.113'),
(473, '2026-04-14 16:46:22', 245, 'web', '', 'direct', '', '', '223.231.145.189'),
(474, '2026-04-14 16:47:15', 298, 'web', '', 'direct', NULL, NULL, '49.204.193.30'),
(475, '2026-04-14 17:45:38', 245, 'web', '', 'direct', '', '', '223.231.145.189'),
(476, '2026-04-14 18:07:26', 162, 'web', '', 'direct', '', '', '59.184.116.142'),
(477, '2026-04-15 02:15:34', 291, 'web', '', 'direct', '', '', '157.45.246.166'),
(478, '2026-04-15 03:35:33', 299, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(479, '2026-04-15 03:38:14', 300, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(480, '2026-04-15 03:39:23', 286, 'web', '', 'direct', '', '', '157.32.136.70'),
(481, '2026-04-15 03:40:45', 301, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(482, '2026-04-15 03:57:23', 248, 'web', '', 'direct', '', '', '152.59.121.6'),
(483, '2026-04-15 04:02:35', 297, 'web', '', 'direct', '', '', '110.227.13.174'),
(484, '2026-04-15 04:03:29', 297, 'web', '', 'direct', '', '', '110.227.13.174'),
(485, '2026-04-15 05:00:14', 245, 'web', '', 'direct', '', '', '106.202.99.110'),
(486, '2026-04-15 05:39:54', 245, 'web', '', 'direct', '', '', '223.185.131.11'),
(487, '2026-04-15 05:48:51', 238, 'web', '', 'direct', '', '', '157.45.231.162'),
(488, '2026-04-15 05:49:05', 238, 'web', '', 'direct', '', '', '157.45.231.162'),
(489, '2026-04-15 05:54:43', 222, 'web', '', 'direct', '', '', '27.62.142.76'),
(490, '2026-04-15 05:58:00', 224, 'web', '', 'direct', '', '', '223.228.177.138'),
(491, '2026-04-15 07:56:34', 280, 'web', '', 'direct', '', '', '157.38.152.55'),
(492, '2026-04-15 10:17:10', 278, 'web', '', 'direct', '', '', '106.192.6.23'),
(493, '2026-04-15 12:22:07', 280, 'web', '', 'direct', '', '', '157.38.152.223'),
(494, '2026-04-15 12:30:34', 61, 'web', '', 'direct', '', '', '157.38.5.204'),
(495, '2026-04-15 14:41:09', 302, 'web', '', 'direct', NULL, NULL, '152.58.37.28'),
(496, '2026-04-15 14:49:45', 203, 'web', '', 'direct', '', '', '106.222.190.39'),
(497, '2026-04-15 15:49:05', 283, 'web', '', 'direct', '', '', '157.50.99.3'),
(498, '2026-04-15 15:49:18', 250, 'web', '', 'direct', NULL, NULL, '106.195.40.5'),
(499, '2026-04-15 17:50:13', 162, 'web', '', 'direct', '', '', '117.198.122.14'),
(500, '2026-04-15 17:52:05', 245, 'web', '', 'direct', '', '', '106.221.202.135'),
(501, '2026-04-15 18:52:09', 303, 'fb', '120246689596290184', 'paid', NULL, NULL, '106.200.11.0'),
(502, '2026-04-15 18:54:26', 304, 'ig', '120246437180310640', 'paid', NULL, NULL, '152.58.181.175'),
(503, '2026-04-15 18:57:42', 305, 'ig', '120246689596320184', 'paid', NULL, NULL, '103.169.52.163'),
(504, '2026-04-15 19:08:12', 306, 'ig', '120246437180320640', 'paid', NULL, NULL, '152.57.9.68'),
(505, '2026-04-15 19:15:20', 307, 'ig', '120242552172630473', 'paid', NULL, NULL, '122.168.95.215'),
(506, '2026-04-15 19:16:49', 308, 'fb', '120242552172510473', 'paid', NULL, NULL, '106.221.123.158'),
(507, '2026-04-15 19:20:17', 309, 'ig', '120242552172570473', 'paid', NULL, NULL, '152.57.101.215'),
(508, '2026-04-15 19:21:18', 310, 'fb', '120246689596300184', 'paid', NULL, NULL, '106.213.210.128'),
(509, '2026-04-15 19:22:52', 311, 'ig', '120242552172630473', 'paid', NULL, NULL, '157.45.213.22'),
(510, '2026-04-15 19:27:28', 312, 'ig', '120242552172570473', 'paid', NULL, NULL, '157.32.221.77'),
(511, '2026-04-15 19:27:46', 313, 'ig', '120246689596310184', 'paid', NULL, NULL, '106.192.49.196'),
(512, '2026-04-15 19:28:02', 314, 'ig', '120242552172570473', 'paid', NULL, NULL, '49.15.223.133'),
(513, '2026-04-15 19:41:42', 315, 'ig', '120242552172510473', 'paid', NULL, NULL, '157.48.78.226'),
(514, '2026-04-15 19:52:20', 316, 'fb', '120246689596310184', 'paid', NULL, NULL, '223.185.50.233'),
(515, '2026-04-15 19:53:51', 317, 'ig', '120242312930250473', 'paid', NULL, NULL, '223.186.241.141'),
(516, '2026-04-15 19:57:50', 318, 'ig', '120246689596300184', 'paid', NULL, NULL, '47.15.15.22'),
(517, '2026-04-15 19:58:01', 319, 'ig', '120246689596310184', 'paid', NULL, NULL, '152.59.167.160'),
(518, '2026-04-15 20:13:16', 249, 'ig', '120242552172500473', 'paid', 'PAYW9leARM0IlleHRuA2FlbQEwAGFkaWQBqy_3BIgrCXNydGMGYXBwX2lkDzU2NzA2NzM0MzM1MjQyNwABpyCOijNurgAr4-XBoMnw0DwYHvkRv2hlKahXZh0l1Z-KD5poYA3-lY8kdypJ_aem_0jfk1_2ENsyOsMLXuNgpBA', '', '152.58.179.239'),
(519, '2026-04-15 20:13:38', 320, 'ig', '120246437180330640', 'paid', NULL, NULL, '49.36.9.181'),
(520, '2026-04-15 20:26:20', 321, 'ig', '120246689596300184', 'paid', NULL, NULL, '152.58.43.90'),
(521, '2026-04-15 20:27:16', 322, 'ig', '120242552172500473', 'paid', NULL, NULL, '27.59.103.129'),
(522, '2026-04-15 20:38:29', 323, 'ig', '120246689596310184', 'paid', NULL, NULL, '123.63.245.201'),
(523, '2026-04-15 20:44:58', 324, 'ig', '120246689596320184', 'paid', NULL, NULL, '117.99.254.217'),
(524, '2026-04-15 20:52:03', 325, 'fb', '120246435745020640', 'paid', NULL, NULL, '157.50.189.129'),
(525, '2026-04-15 21:41:35', 326, 'ig', '120246689596320184', 'paid', NULL, NULL, '152.59.111.235'),
(526, '2026-04-15 21:43:55', 327, 'ig', '120242552172620473', 'paid', NULL, NULL, '152.57.146.91'),
(527, '2026-04-15 21:58:45', 328, 'ig', '120242312930250473', 'paid', NULL, NULL, '49.33.211.17'),
(528, '2026-04-15 22:02:30', 329, 'fb', '120246689596320184', 'paid', NULL, NULL, '42.108.149.4'),
(529, '2026-04-15 22:09:36', 330, 'fb', '120242552172570473', 'paid', NULL, NULL, '223.228.98.238'),
(530, '2026-04-15 22:27:07', 331, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.100.233'),
(531, '2026-04-15 22:36:51', 332, 'fb', '120246689596320184', 'paid', NULL, NULL, '49.37.128.163'),
(532, '2026-04-15 22:59:26', 333, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.219.237.78'),
(533, '2026-04-15 23:00:49', 334, 'ig', '120246689596300184', 'paid', NULL, NULL, '103.187.103.49'),
(534, '2026-04-15 23:03:16', 335, 'fb', '120246437180330640', 'paid', NULL, NULL, '49.37.49.63'),
(535, '2026-04-15 23:03:25', 336, 'ig', '120246437180310640', 'paid', NULL, NULL, '223.238.206.119'),
(536, '2026-04-15 23:11:03', 337, 'fb', '120246437180310640', 'paid', NULL, NULL, '152.58.35.231'),
(537, '2026-04-15 23:22:06', 338, 'fb', '120246437180310640', 'paid', NULL, NULL, '42.106.136.107'),
(538, '2026-04-15 23:35:21', 339, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.219.229.246'),
(539, '2026-04-16 00:12:10', 340, 'ig', '120242552172510473', 'paid', NULL, NULL, '42.105.172.111'),
(540, '2026-04-16 00:15:52', 341, 'ig', '120242552172570473', 'paid', NULL, NULL, '152.58.46.56'),
(541, '2026-04-16 00:22:34', 342, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.50.122.158'),
(542, '2026-04-16 01:04:27', 343, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.42.22.46'),
(543, '2026-04-16 01:27:52', 344, 'fb', '120242312930250473', 'paid', NULL, NULL, '117.232.34.243'),
(544, '2026-04-16 01:36:31', 345, 'fb', '120242312930250473', 'paid', NULL, NULL, '27.60.55.34'),
(545, '2026-04-16 01:46:05', 346, 'ig', '120242552172570473', 'paid', NULL, NULL, '106.192.63.107'),
(546, '2026-04-16 01:54:57', 347, 'fb-SiteLink', '120246435745020640', 'paid', NULL, NULL, '157.51.233.32');
INSERT INTO `source_entry` (`id`, `rec_date`, `user_id`, `utm_source`, `utm_campaign`, `utm_medium`, `source_id`, `utm_referral`, `client_ip`) VALUES
(547, '2026-04-16 01:56:45', 347, 'fb', '120246435745020640', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaszf2MRvuBzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6uwtRGD7ad6TMOEy1DAJ0koB9Tyd66Lorrdr0N871idSDgTkvRQS8oGSO5-A_aem_UdUIndpyUDN3wghjh5lJXQ', '', '157.51.233.32'),
(548, '2026-04-16 02:01:09', 348, 'ig', '120242552172630473', 'paid', NULL, NULL, '157.51.234.223'),
(549, '2026-04-16 02:17:14', 349, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.162.202'),
(550, '2026-04-16 02:17:15', 350, 'fb', '120242552172630473', 'paid', NULL, NULL, '157.38.4.29'),
(551, '2026-04-16 02:17:52', 212, 'web', '', 'direct', '', '', '106.219.202.60'),
(552, '2026-04-16 02:19:06', 351, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.68.4'),
(553, '2026-04-16 02:30:44', 352, 'ig', '120246437180310640', 'paid', NULL, NULL, '49.42.188.94'),
(554, '2026-04-16 02:38:54', 353, 'fb', '120246437180320640', 'paid', NULL, NULL, '103.85.125.199'),
(555, '2026-04-16 02:42:06', 354, 'ig', '120242552172510473', 'paid', NULL, NULL, '157.51.2.143'),
(556, '2026-04-16 02:44:45', 355, 'fb', '120242552172620473', 'paid', NULL, NULL, '49.35.195.240'),
(557, '2026-04-16 02:45:57', 332, 'web', '', 'direct', '', '', '157.50.78.11'),
(558, '2026-04-16 02:48:44', 334, 'web', '', 'direct', NULL, NULL, '103.187.103.49'),
(559, '2026-04-16 02:48:55', 356, 'ig', '120246689596290184', 'paid', NULL, NULL, '49.43.160.147'),
(560, '2026-04-16 03:12:53', 357, 'ig', '120246437180320640', 'paid', NULL, NULL, '42.107.237.132'),
(561, '2026-04-16 03:36:34', 358, 'ig', '120246437180330640', 'paid', NULL, NULL, '152.58.200.151'),
(562, '2026-04-16 03:44:26', 359, 'ig', '120246435745020640', 'paid', NULL, NULL, '27.97.180.187'),
(563, '2026-04-16 03:44:44', 360, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.219.177.89'),
(564, '2026-04-16 03:54:34', 303, 'web', '', 'direct', '', '', '182.19.53.45'),
(565, '2026-04-16 04:01:05', 361, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(566, '2026-04-16 04:07:42', 362, 'ig', '120242552172500473', 'paid', NULL, NULL, '202.141.35.45'),
(567, '2026-04-16 04:07:50', 363, 'fb', '120246689596290184', 'paid', NULL, NULL, '103.141.112.193'),
(568, '2026-04-16 04:13:15', 364, 'fb', '120246437180320640', 'paid', NULL, NULL, '106.221.1.210'),
(569, '2026-04-16 04:24:26', 365, 'ig', '120242552172570473', 'paid', NULL, NULL, '223.176.114.202'),
(570, '2026-04-16 04:28:13', 365, 'ig', '120242312930250473', 'paid', 'PAYW9leARNRKBleHRuA2FlbQEwAGFkaWQBqy-_H9_PiXNydGMGYXBwX2lkDzU2NzA2NzM0MzM1MjQyNwABp28kJXtiVVBek0Ar9P0_LTpH5DlW77okMTNImlG08Uc5fP3adJ9mJQAiXAgP_aem_QRsLOBPySMyVl209FkXKnw', '', '223.176.114.202'),
(571, '2026-04-16 04:30:21', 366, 'fb', '120246689596290184', 'paid', NULL, NULL, '223.182.205.17'),
(572, '2026-04-16 04:36:15', 367, 'fb', '120246437180320640', 'paid', NULL, NULL, '223.231.66.18'),
(573, '2026-04-16 04:43:38', 319, 'web', '', 'direct', '', '', '152.59.167.43'),
(574, '2026-04-16 04:44:00', 368, 'ig', '120242552172500473', 'paid', NULL, NULL, '49.14.77.244'),
(575, '2026-04-16 04:44:39', 319, 'web', '', 'direct', '', '', '152.59.167.43'),
(576, '2026-04-16 04:48:00', 369, 'ig', '120246437180330640', 'paid', NULL, NULL, '171.79.35.93'),
(577, '2026-04-16 04:56:22', 274, 'web', '', 'direct', '', '', '106.222.183.48'),
(578, '2026-04-16 05:18:52', 370, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.192.5.172'),
(579, '2026-04-16 05:19:31', 371, 'ig', '120246437180310640', 'paid', NULL, NULL, '152.58.107.16'),
(580, '2026-04-16 05:20:13', 372, 'ig', '120242552172630473', 'paid', NULL, NULL, '183.82.206.70'),
(581, '2026-04-16 05:20:31', 373, 'fb', '120242312930250473', 'paid', NULL, NULL, '103.121.70.23'),
(582, '2026-04-16 05:23:20', 374, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.57.18.172'),
(583, '2026-04-16 05:37:58', 375, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.51.94.249'),
(584, '2026-04-16 05:47:34', 284, 'web', '', 'direct', '', '', '223.188.84.18'),
(585, '2026-04-16 06:00:58', 376, 'ig', '120246689596320184', 'paid', NULL, NULL, '152.57.166.90'),
(586, '2026-04-16 06:03:31', 377, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.205.154.232'),
(587, '2026-04-16 06:05:08', 378, 'ig', '120242552172630473', 'paid', NULL, NULL, '152.58.17.167'),
(588, '2026-04-16 06:07:33', 379, 'ig', '120246437180320640', 'paid', NULL, NULL, '157.119.86.181'),
(589, '2026-04-16 06:23:53', 380, 'fb', '120246437180310640', 'paid', NULL, NULL, '157.39.66.161'),
(590, '2026-04-16 06:36:19', 381, 'ig', '120242552172620473', 'paid', NULL, NULL, '117.217.214.217'),
(591, '2026-04-16 06:37:38', 382, 'ig', '120246437180320640', 'paid', NULL, NULL, '49.34.126.51'),
(592, '2026-04-16 06:39:47', 383, 'ig', '120242312930250473', 'paid', NULL, NULL, '171.79.62.12'),
(593, '2026-04-16 06:41:33', 384, 'fb', '120246437180330640', 'paid', NULL, NULL, '117.233.206.1'),
(594, '2026-04-16 06:45:11', 385, 'ig', '120246689596290184', 'paid', NULL, NULL, '157.51.220.124'),
(595, '2026-04-16 06:47:06', 386, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.58.6.1'),
(596, '2026-04-16 06:53:24', 387, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.46.3.154'),
(597, '2026-04-16 06:56:05', 388, 'fb', '120246689596290184', 'paid', NULL, NULL, '152.59.150.193'),
(598, '2026-04-16 07:00:40', 389, 'ig', '120246689596310184', 'paid', NULL, NULL, '223.188.22.27'),
(599, '2026-04-16 07:01:48', 390, 'ig', '120242552172620473', 'paid', NULL, NULL, '106.221.79.177'),
(600, '2026-04-16 07:02:58', 391, 'fb', '120242552172500473', 'paid', NULL, NULL, '49.37.101.101'),
(601, '2026-04-16 07:06:30', 392, 'fb', '120242312930250473', 'paid', NULL, NULL, '1.38.98.74'),
(602, '2026-04-16 07:07:26', 393, 'fb', '120242312930250473', 'paid', NULL, NULL, '49.42.192.216'),
(603, '2026-04-16 07:10:09', 394, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.221.186.247'),
(604, '2026-04-16 07:13:13', 395, 'fb', '120246689596290184', 'paid', NULL, NULL, '223.228.7.106'),
(605, '2026-04-16 07:14:55', 396, 'ig', '120246689596290184', 'paid', NULL, NULL, '152.58.187.253'),
(606, '2026-04-16 07:28:01', 397, 'ig', '120246437180330640', 'paid', NULL, NULL, '152.59.6.199'),
(607, '2026-04-16 07:33:52', 397, 'web', '', 'direct', '', '', '152.59.6.199'),
(608, '2026-04-16 07:41:42', 398, 'fb', '120246437180330640', 'paid', NULL, NULL, '106.213.222.17'),
(609, '2026-04-16 07:44:11', 399, 'fb', '120246689596310184', 'paid', NULL, NULL, '106.202.38.195'),
(610, '2026-04-16 07:48:45', 400, 'ig', '120242552172630473', 'paid', NULL, NULL, '152.58.162.177'),
(611, '2026-04-16 07:56:54', 390, 'web', '', 'direct', '', '', '106.221.67.177'),
(612, '2026-04-16 08:01:00', 401, 'ig', '120246689596310184', 'paid', NULL, NULL, '152.57.99.194'),
(613, '2026-04-16 08:02:13', 402, 'fb', '120246689596300184', 'paid', NULL, NULL, '106.192.41.177'),
(614, '2026-04-16 08:18:33', 403, 'ig', '120246689596310184', 'paid', NULL, NULL, '106.216.225.172'),
(615, '2026-04-16 08:23:48', 346, 'web', '', 'direct', '', '', '110.224.122.189'),
(616, '2026-04-16 08:25:45', 404, 'ig', '120246437180310640', 'paid', NULL, NULL, '223.228.96.209'),
(617, '2026-04-16 08:26:42', 398, 'web', '', 'direct', '', '', '106.213.222.17'),
(618, '2026-04-16 08:40:03', 370, 'web', '', 'direct', '', '', '106.192.43.181'),
(619, '2026-04-16 08:42:30', 307, 'web', '', 'direct', '', '', '122.168.91.211'),
(620, '2026-04-16 08:45:19', 405, 'ig', '120242552172570473', 'paid', NULL, NULL, '49.43.115.3'),
(621, '2026-04-16 08:47:25', 406, 'fb', '120246689596320184', 'paid', NULL, NULL, '27.62.92.54'),
(622, '2026-04-16 08:47:35', 407, 'ig', '120246437180310640', 'paid', NULL, NULL, '223.181.210.3'),
(623, '2026-04-16 08:51:44', 408, 'fb', '120246437180320640', 'paid', NULL, NULL, '152.58.152.96'),
(624, '2026-04-16 08:53:17', 284, 'web', '', 'direct', '', '', '223.188.84.18'),
(625, '2026-04-16 08:54:07', 409, 'fb', '120246689596310184', 'paid', NULL, NULL, '49.37.183.50'),
(626, '2026-04-16 08:57:29', 410, 'fb', '120246437180330640', 'paid', NULL, NULL, '103.248.123.107'),
(627, '2026-04-16 09:11:55', 379, 'web', '', 'direct', '', '', '152.58.29.95'),
(628, '2026-04-16 09:12:21', 379, 'web', '', 'direct', '', '', '152.58.29.95'),
(629, '2026-04-16 09:25:33', 274, 'web', '', 'direct', '', '', '106.194.34.231'),
(630, '2026-04-16 09:33:34', 411, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.188.111.26'),
(631, '2026-04-16 09:42:14', 412, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.59.152.5'),
(632, '2026-04-16 09:46:42', 412, 'web', '', 'direct', NULL, NULL, '152.59.152.5'),
(633, '2026-04-16 09:53:51', 294, 'web', '', 'direct', '', '', '1.39.62.30'),
(634, '2026-04-16 09:56:08', 294, 'web', '', 'direct', '', '', '1.39.62.30'),
(635, '2026-04-16 09:59:18', 413, 'fb', '120246689596310184', 'paid', NULL, NULL, '38.183.11.28'),
(636, '2026-04-16 10:01:02', 414, 'ig', '120246689596320184', 'paid', NULL, NULL, '157.51.236.127'),
(637, '2026-04-16 10:02:38', 294, 'web', '', 'direct', '', '', '1.39.63.213'),
(638, '2026-04-16 10:03:49', 388, 'web', '', 'direct', '', '', '152.59.150.1'),
(639, '2026-04-16 10:19:08', 392, 'web', '', 'direct', '', '', '1.38.98.74'),
(640, '2026-04-16 10:31:44', 413, 'web', '', 'direct', NULL, NULL, '38.183.11.28'),
(641, '2026-04-16 10:33:16', 386, 'web', '', 'direct', '', '', '152.58.6.48'),
(642, '2026-04-16 10:40:07', 415, 'ig', '120246437180320640', 'paid', NULL, NULL, '1.39.117.43'),
(643, '2026-04-16 10:58:46', 394, 'web', '', 'direct', '', '', '106.200.27.182'),
(644, '2026-04-16 11:07:19', 339, 'web', '', 'direct', '', '', '27.59.70.34'),
(645, '2026-04-16 11:08:53', 416, 'fb', '120246689596290184', 'paid', NULL, NULL, '171.79.63.174'),
(646, '2026-04-16 11:48:27', 417, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.184.161.173'),
(647, '2026-04-16 11:50:37', 418, 'ig', '120246689596320184', 'paid', NULL, NULL, '152.59.40.114'),
(648, '2026-04-16 12:42:34', 419, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.181.44.21'),
(649, '2026-04-16 13:11:51', 304, 'web', '', 'direct', '', '', '115.187.53.29'),
(650, '2026-04-16 13:54:55', 420, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.49.105.134'),
(651, '2026-04-16 13:55:34', 421, 'ig', '120242552172500473', 'paid', NULL, NULL, '157.32.80.43'),
(652, '2026-04-16 13:56:15', 422, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.195.37.98'),
(653, '2026-04-16 13:57:29', 423, 'ig', '120242552172500473', 'paid', NULL, NULL, '42.104.147.30'),
(654, '2026-04-16 14:00:04', 164, 'web', '', 'direct', '', '', '223.237.11.77'),
(655, '2026-04-16 14:06:15', 424, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.59.14.246'),
(656, '2026-04-16 14:06:34', 425, 'ig', '120242552172500473', 'paid', NULL, NULL, '103.179.227.45'),
(657, '2026-04-16 14:17:05', 426, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.59.10.125'),
(658, '2026-04-16 14:18:14', 164, 'web', '', 'direct', '', '', '223.237.11.77'),
(659, '2026-04-16 14:18:23', 427, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.33.56.65'),
(660, '2026-04-16 14:28:03', 428, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.188.13.222'),
(661, '2026-04-16 14:28:24', 429, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.192.167.155'),
(662, '2026-04-16 14:28:53', 430, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.216.231.123'),
(663, '2026-04-16 14:29:44', 431, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.38.128.50'),
(664, '2026-04-16 14:29:44', 45, 'web', '', 'direct', '', '', '47.30.245.193'),
(665, '2026-04-16 14:30:03', 432, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.51.35.28'),
(666, '2026-04-16 14:31:03', 433, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.192.91.92'),
(667, '2026-04-16 14:32:47', 434, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.59.3.80'),
(668, '2026-04-16 14:46:55', 258, 'web', '', 'direct', '', '', '106.192.60.50'),
(669, '2026-04-16 14:47:22', 435, 'ig', '120242312930250473', 'paid', NULL, NULL, '117.220.23.252'),
(670, '2026-04-16 14:55:13', 436, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.222.226.239'),
(671, '2026-04-16 14:58:31', 437, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.237.189.154'),
(672, '2026-04-16 15:08:21', 438, 'ig', '120242312930250473', 'paid', NULL, NULL, '223.227.62.122'),
(673, '2026-04-16 15:20:03', 364, 'web', '', 'direct', '', '', '106.210.167.140'),
(674, '2026-04-16 15:20:49', 439, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.51.63.36'),
(675, '2026-04-16 15:23:51', 440, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.57.156.148'),
(676, '2026-04-16 15:42:42', 441, 'fb', '120242552172570473', 'paid', NULL, NULL, '106.192.79.220'),
(677, '2026-04-16 15:50:48', 442, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.146.174'),
(678, '2026-04-16 16:02:48', 443, 'ig', '120242552172500473', 'paid', NULL, NULL, '183.82.184.184'),
(679, '2026-04-16 16:03:32', 444, 'ig', '120242552172500473', 'paid', NULL, NULL, '49.43.153.241'),
(680, '2026-04-16 16:36:15', 445, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.58.117.2'),
(681, '2026-04-16 16:39:57', 446, 'ig', '120242312930250473', 'paid', NULL, NULL, '49.42.137.35'),
(682, '2026-04-16 16:48:03', 162, 'web', '', 'direct', '', '', '117.248.236.51'),
(683, '2026-04-16 16:50:54', 447, 'fb', '120246435745020640', 'paid', NULL, NULL, '27.61.57.16'),
(684, '2026-04-16 16:55:48', 448, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.184.208.138'),
(685, '2026-04-16 16:57:57', 449, 'ig', '120246437180320640', 'paid', NULL, NULL, '157.48.20.208'),
(686, '2026-04-16 17:12:56', 146, 'web', '', 'direct', '', '', '175.101.31.164'),
(687, '2026-04-16 17:14:40', 450, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.51.73.238'),
(688, '2026-04-16 17:26:12', 364, 'web', '', 'direct', '', '', '106.210.167.140'),
(689, '2026-04-16 17:47:03', 320, 'web', '', 'direct', '', '', '1.38.148.36'),
(690, '2026-04-16 17:48:18', 434, 'web', '', 'direct', '', '', '152.59.5.20'),
(691, '2026-04-16 17:48:43', 451, 'ig', '120246437180320640', 'paid', NULL, NULL, '49.15.219.229'),
(692, '2026-04-16 17:50:45', 362, 'web', '', 'direct', '', '', '202.141.35.45'),
(693, '2026-04-16 17:51:55', 441, 'web', '', 'direct', '', '', '106.192.64.122'),
(694, '2026-04-16 17:52:13', 440, 'web', '', 'direct', '', '', '152.57.231.61'),
(695, '2026-04-16 17:52:17', 452, 'ig', '120242312930250473', 'paid', NULL, NULL, '27.60.172.57'),
(696, '2026-04-16 17:53:24', 412, 'web', '', 'direct', '', '', '223.238.96.97'),
(697, '2026-04-16 17:53:49', 412, 'web', '', 'direct', '', '', '223.238.96.97'),
(698, '2026-04-16 17:54:08', 440, 'web', '', 'direct', '', '', '152.57.231.61'),
(699, '2026-04-16 17:54:36', 440, 'web', '', 'direct', '', '', '152.57.231.61'),
(700, '2026-04-16 17:55:35', 440, 'web', '', 'direct', '', '', '152.57.231.61'),
(701, '2026-04-16 17:56:16', 440, 'web', '', 'direct', '', '', '152.57.231.61'),
(702, '2026-04-16 17:57:02', 440, 'web', '', 'direct', NULL, NULL, '152.57.231.61'),
(703, '2026-04-16 18:02:37', 353, 'web', '', 'direct', '', '', '103.85.125.199'),
(704, '2026-04-16 18:04:59', 353, 'web', '', 'direct', '', '', '103.85.125.199'),
(705, '2026-04-16 18:05:43', 217, 'web', '', 'direct', '', '', '152.59.203.201'),
(706, '2026-04-16 18:07:00', 217, 'web', '', 'direct', '', '', '152.59.203.201'),
(707, '2026-04-16 18:09:32', 353, 'web', '', 'direct', '', '', '103.85.125.199'),
(708, '2026-04-16 18:09:44', 453, 'ig', '120242552172500473', 'paid', NULL, NULL, '157.51.135.250'),
(709, '2026-04-16 18:11:54', 303, 'web', '', 'direct', '', '', '106.200.15.184'),
(710, '2026-04-16 18:36:24', 217, 'web', '', 'direct', '', '', '152.59.203.201'),
(711, '2026-04-16 18:46:41', 413, 'web', '', 'direct', '', '', '38.183.11.28'),
(712, '2026-04-16 18:54:51', 368, 'web', '', 'direct', '', '', '49.14.79.54'),
(713, '2026-04-16 19:00:21', 454, 'ig', '120246757789050184', 'paid', NULL, NULL, '110.224.92.155'),
(714, '2026-04-16 19:00:27', 455, 'fb', '120246757894580184', 'paid', NULL, NULL, '106.219.228.211'),
(715, '2026-04-16 19:01:23', 456, 'fb', '120246754326470184', 'paid', NULL, NULL, '116.68.242.126'),
(716, '2026-04-16 19:02:03', 455, 'web', '', 'direct', '', '', '106.219.228.211'),
(717, '2026-04-16 19:15:25', 457, 'ig', '120246757789050184', 'paid', NULL, NULL, '103.168.1.206'),
(718, '2026-04-16 19:18:48', 458, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.59.166.8'),
(719, '2026-04-16 19:19:30', 459, 'ig', '120246754326470184', 'paid', NULL, NULL, '157.50.96.191'),
(720, '2026-04-16 19:22:28', 460, 'fb', '120246757894580184', 'paid', NULL, NULL, '103.169.53.170'),
(721, '2026-04-16 19:39:51', 461, 'fb', '120246525527240640', 'paid', NULL, NULL, '106.219.167.92'),
(722, '2026-04-16 19:40:19', 462, 'fb', '120246757894580184', 'paid', NULL, NULL, '103.119.241.202'),
(723, '2026-04-16 19:48:21', 463, 'ig', '120246524364580640', 'paid', NULL, NULL, '47.11.118.205'),
(724, '2026-04-16 19:51:10', 367, 'web', '', 'direct', '', '', '27.56.18.116'),
(725, '2026-04-16 19:59:29', 464, 'fb', '120246754326470184', 'paid', NULL, NULL, '223.237.152.50'),
(726, '2026-04-16 20:00:07', 465, 'fb', '120246757894580184', 'paid', NULL, NULL, '223.185.233.126'),
(727, '2026-04-16 20:00:11', 466, 'ig', '120246524364580640', 'paid', NULL, NULL, '157.50.102.63'),
(728, '2026-04-16 20:17:44', 467, 'ig', '120246524364580640', 'paid', NULL, NULL, '106.215.167.31'),
(729, '2026-04-16 20:32:51', 468, 'fb', '120246527797600640', 'paid', NULL, NULL, '27.96.88.135'),
(730, '2026-04-16 20:49:44', 314, 'web', '', 'direct', '', '', '49.15.205.81'),
(731, '2026-04-16 20:51:34', 314, 'web', '', 'direct', '', '', '49.15.205.81'),
(732, '2026-04-16 20:55:15', 469, 'ig', '120246754128320184', 'paid', NULL, NULL, '152.58.6.76'),
(733, '2026-04-16 20:59:42', 470, 'ig', '120246754128320184', 'paid', NULL, NULL, '106.192.5.76'),
(734, '2026-04-16 21:02:07', 471, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.59.33.231'),
(735, '2026-04-16 21:03:24', 472, 'ig', '120246754326470184', 'paid', NULL, NULL, '27.34.64.209'),
(736, '2026-04-16 21:58:10', 473, 'fb', '120246527797600640', 'paid', NULL, NULL, '223.188.5.13'),
(737, '2026-04-16 22:26:04', 474, 'ig', '120246527797620640', 'paid', NULL, NULL, '49.36.183.87'),
(738, '2026-04-16 22:43:43', 475, 'ig', '120246527797610640', 'paid', NULL, NULL, '223.187.254.156'),
(739, '2026-04-16 23:03:34', 476, 'ig', '120246525527240640', 'paid', NULL, NULL, '49.207.146.194'),
(740, '2026-04-16 23:07:26', 403, 'web', '', 'direct', '', '', '27.61.34.110'),
(741, '2026-04-17 00:10:01', 477, 'ig', '120246527797620640', 'paid', NULL, NULL, '49.43.218.187'),
(742, '2026-04-17 00:33:52', 438, 'web', '', 'direct', '', '', '27.63.222.111'),
(743, '2026-04-17 00:37:07', 470, 'web', '', 'direct', '', '', '106.192.13.10'),
(744, '2026-04-17 01:22:35', 114, 'web', '', 'direct', '', '', '103.166.245.95'),
(745, '2026-04-17 01:51:30', 478, 'web', '', 'direct', NULL, NULL, '157.49.197.63'),
(746, '2026-04-17 01:56:18', 344, 'web', '', 'direct', '', '', '117.252.101.106'),
(747, '2026-04-17 01:58:56', 478, 'web', '', 'direct', NULL, NULL, '157.49.197.63'),
(748, '2026-04-17 02:00:26', 291, 'web', '', 'direct', '', '', '157.45.252.1'),
(749, '2026-04-17 02:19:27', 479, 'fb', '120246757894580184', 'paid', NULL, NULL, '157.33.251.137'),
(750, '2026-04-17 02:42:27', 480, 'fb', '120242606645800473', 'paid', NULL, NULL, '47.15.40.189'),
(751, '2026-04-17 02:45:45', 459, 'web', '', 'direct', '', '', '157.50.92.159'),
(752, '2026-04-17 02:48:25', 481, 'fb', '120242606645800473', 'paid', NULL, NULL, '49.14.77.123'),
(753, '2026-04-17 02:48:44', 482, 'web', '', 'direct', NULL, NULL, '157.50.92.159'),
(754, '2026-04-17 02:53:05', 483, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.59.40.68'),
(755, '2026-04-17 02:59:36', 484, 'ig', '120246524364580640', 'paid', NULL, NULL, '157.34.57.26'),
(756, '2026-04-17 03:11:12', 450, 'web', '', 'direct', '', '', '157.51.79.50'),
(757, '2026-04-17 03:22:23', 485, 'ig', '120246524364580640', 'paid', NULL, NULL, '152.59.155.249'),
(758, '2026-04-17 03:32:29', 412, 'fb', '120247757963750747', 'paid', 'IwYW9zYgROiRNleHRuA2FlbQEwAGFkaWQBqzTWGiDD-3NydGMGYXBwX2lkDDM1MDY4NTUzMTcyOAABHqw6_tm499l02ZgGOH8BrX5GHHqnf6mLluLvQvOjZpNom5lj3hZ1iDSFMByz_aem_BigKlTD2AoNtR5Ep58qmJw', '', '106.202.38.111'),
(759, '2026-04-17 03:34:24', 364, 'web', '', 'direct', '', '', '106.210.167.108'),
(760, '2026-04-17 03:40:47', 486, 'fb', '120247757963750747', 'paid', NULL, NULL, '171.61.164.233'),
(761, '2026-04-17 03:41:01', 453, 'web', '', 'direct', '', '', '152.57.93.58'),
(762, '2026-04-17 03:42:01', 487, 'fb', '120246527797610640', 'paid', NULL, NULL, '42.108.92.174'),
(763, '2026-04-17 03:42:15', 450, 'web', '', 'direct', '', '', '157.50.4.251'),
(764, '2026-04-17 03:46:55', 388, 'web', '', 'direct', '', '', '152.58.144.88'),
(765, '2026-04-17 03:47:24', 445, 'web', '', 'direct', '', '', '157.49.113.148'),
(766, '2026-04-17 03:57:07', 446, 'web', '', 'direct', '', '', '49.42.142.59'),
(767, '2026-04-17 04:01:44', 488, 'ig', '120243425160500382', 'paid', NULL, NULL, '106.213.197.139'),
(768, '2026-04-17 04:06:37', 366, 'web', '', 'direct', '', '', '223.237.188.101'),
(769, '2026-04-17 04:17:11', 489, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(770, '2026-04-17 04:20:55', 490, 'fb', '120243425160500382', 'paid', NULL, NULL, '49.43.104.188'),
(771, '2026-04-17 04:22:12', 486, 'web', '', 'direct', '', '', '171.61.164.233'),
(772, '2026-04-17 04:22:22', 491, 'fb', '120246754128320184', 'paid', NULL, NULL, '42.105.192.22'),
(773, '2026-04-17 04:26:43', 492, 'fb', '120242552172500473', 'paid', NULL, NULL, '112.79.210.154'),
(774, '2026-04-17 04:30:26', 493, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.56.6.29'),
(775, '2026-04-17 04:43:34', 217, 'web', '', 'direct', '', '', '152.59.204.158'),
(776, '2026-04-17 04:48:58', 494, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.195.2.253'),
(777, '2026-04-17 04:51:50', 495, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(778, '2026-04-17 04:53:24', 487, 'web', '', 'direct', '', '', '42.108.92.148'),
(779, '2026-04-17 04:55:15', 491, 'web', '', 'direct', '', '', '42.105.192.22'),
(780, '2026-04-17 05:00:29', 377, 'web', '', 'direct', NULL, NULL, '106.219.203.137'),
(781, '2026-04-17 05:05:43', 496, 'ig', '120246527797600640', 'paid', NULL, NULL, '103.198.164.46'),
(782, '2026-04-17 05:06:06', 497, 'fb', '120242606645800473', 'paid', NULL, NULL, '152.59.86.85'),
(783, '2026-04-17 05:10:29', 498, 'ig', '120242606645800473', 'paid', NULL, NULL, '157.50.89.133'),
(784, '2026-04-17 05:12:38', 499, 'ig', '120246527797610640', 'paid', NULL, NULL, '152.58.153.71'),
(785, '2026-04-17 05:18:07', 500, 'ig', '120246527797600640', 'paid', NULL, NULL, '27.63.16.52'),
(786, '2026-04-17 05:19:46', 501, 'ig', '120246525527240640', 'paid', NULL, NULL, '157.32.222.39'),
(787, '2026-04-17 05:20:30', 496, 'web', '', 'direct', '', '', '103.198.164.46'),
(788, '2026-04-17 05:20:32', 502, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.222.190.53'),
(789, '2026-04-17 05:24:58', 503, 'ig', '120246437180320640', 'paid', NULL, NULL, '157.48.250.42'),
(790, '2026-04-17 05:46:18', 504, 'fb', '120242606645800473', 'paid', NULL, NULL, '106.192.90.14'),
(791, '2026-04-17 05:47:28', 366, 'web', '', 'direct', '', '', '223.237.181.101'),
(792, '2026-04-17 05:47:39', 118, 'web', '', 'direct', '', '', '152.58.63.86'),
(793, '2026-04-17 05:49:51', 505, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.57.119.177'),
(794, '2026-04-17 05:57:42', 506, 'ig', '120242552172500473', 'paid', NULL, NULL, '27.62.114.210'),
(795, '2026-04-17 06:00:44', 507, 'ig', '120242312930250473', 'paid', NULL, NULL, '27.63.233.71'),
(796, '2026-04-17 06:01:08', 508, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.49.98.248'),
(797, '2026-04-17 06:01:56', 509, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.59.57.197'),
(798, '2026-04-17 06:03:49', 510, 'ig', '120242552172500473', 'paid', NULL, NULL, '60.243.96.136'),
(799, '2026-04-17 06:05:16', 509, 'web', '', 'direct', '', '', '152.59.57.197'),
(800, '2026-04-17 06:13:43', 511, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.205.162.22'),
(801, '2026-04-17 06:15:16', 512, 'ig', '120243426671590382', 'paid', NULL, NULL, '152.58.118.230'),
(802, '2026-04-17 06:21:33', 513, 'ig', '120243425160500382', 'paid', NULL, NULL, '171.79.54.49'),
(803, '2026-04-17 06:25:27', 514, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.0.254'),
(804, '2026-04-17 06:27:12', 515, 'ig', '120246527797610640', 'paid', NULL, NULL, '152.59.63.166'),
(805, '2026-04-17 06:27:41', 514, 'web', '', 'direct', '', '', '152.59.0.254'),
(806, '2026-04-17 06:28:45', 514, 'web', '', 'direct', '', '', '152.59.0.254'),
(807, '2026-04-17 06:29:31', 516, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.40.77.243'),
(808, '2026-04-17 06:34:26', 517, 'ig', '120246527797600640', 'paid', NULL, NULL, '49.37.227.58'),
(809, '2026-04-17 06:37:22', 518, 'fb', '120246527797610640', 'paid', NULL, NULL, '106.192.244.152'),
(810, '2026-04-17 06:43:49', 519, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.59.63.227'),
(811, '2026-04-17 06:45:28', 459, 'web', '', 'direct', '', '', '157.50.89.15'),
(812, '2026-04-17 06:45:36', 129, 'web', '', 'direct', '', '', '103.204.94.110'),
(813, '2026-04-17 06:46:39', 520, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.58.188.45'),
(814, '2026-04-17 06:49:03', 238, 'web', '', 'direct', '', '', '157.45.85.115'),
(815, '2026-04-17 06:51:48', 235, 'web', '', 'direct', '', '', '157.38.221.230'),
(816, '2026-04-17 06:52:55', 386, 'web', '', 'direct', '', '', '152.58.14.77'),
(817, '2026-04-17 06:55:33', 521, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.205.219.196'),
(818, '2026-04-17 06:57:22', 446, 'web', '', 'direct', '', '', '49.42.138.111'),
(819, '2026-04-17 06:58:11', 446, 'web', '', 'direct', '', '', '49.42.138.111'),
(820, '2026-04-17 06:58:20', 487, 'web', '', 'direct', '', '', '42.108.92.137'),
(821, '2026-04-17 06:58:38', 522, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.88.6'),
(822, '2026-04-17 07:15:33', 523, 'ig', '120246527797620640', 'paid', NULL, NULL, '106.192.110.155'),
(823, '2026-04-17 07:25:44', 524, 'fb', '120242312930250473', 'paid', NULL, NULL, '49.37.153.128'),
(824, '2026-04-17 07:26:45', 525, 'web', '', 'direct', NULL, NULL, '157.49.98.121'),
(825, '2026-04-17 07:26:47', 526, 'fb', '120246754128320184', 'paid', NULL, NULL, '122.171.21.89'),
(826, '2026-04-17 07:28:52', 525, 'web', '', 'direct', '', '', '157.49.98.121'),
(827, '2026-04-17 07:32:07', 461, 'web', '', 'direct', '', '', '117.98.2.203'),
(828, '2026-04-17 07:33:05', 527, 'fb', '120242312930250473', 'paid', NULL, NULL, '171.79.44.201'),
(829, '2026-04-17 07:33:24', 525, 'web', '', 'direct', '', '', '157.49.98.121'),
(830, '2026-04-17 07:34:59', 486, 'web', '', 'direct', '', '', '152.59.38.144'),
(831, '2026-04-17 07:41:19', 528, 'ig', '120246754128320184', 'paid', NULL, NULL, '157.34.216.17'),
(832, '2026-04-17 07:41:51', 524, 'web', '', 'direct', '', '', '49.37.153.128'),
(833, '2026-04-17 07:43:52', 528, 'web', '', 'direct', '', '', '157.34.216.17'),
(834, '2026-04-17 07:45:32', 529, 'fb', '120246754128320184', 'paid', NULL, NULL, '152.57.114.29'),
(835, '2026-04-17 07:47:13', 530, 'ig', '120243425160500382', 'paid', NULL, NULL, '157.48.114.57'),
(836, '2026-04-17 07:52:18', 531, 'fb', '120246527797620640', 'paid', NULL, NULL, '144.16.2.75'),
(837, '2026-04-17 07:52:36', 532, 'fb', '120246754128320184', 'paid', NULL, NULL, '27.61.108.92'),
(838, '2026-04-17 07:52:37', 533, 'ig', '120246754128320184', 'paid', NULL, NULL, '223.181.115.186'),
(839, '2026-04-17 07:53:35', 533, 'ig', '120246754128320184', 'paid', NULL, NULL, '223.181.115.186'),
(840, '2026-04-17 08:00:06', 534, 'ig', '120246527797600640', 'paid', NULL, NULL, '152.58.63.79'),
(841, '2026-04-17 08:07:37', 535, 'ig', '120246754128320184', 'paid', NULL, NULL, '152.59.111.183'),
(842, '2026-04-17 08:14:25', 536, 'fb', '120243426671590382', 'paid', NULL, NULL, '152.59.0.144'),
(843, '2026-04-17 08:15:17', 537, 'ig', '120246658548300204', 'paid', NULL, NULL, '152.59.179.87'),
(844, '2026-04-17 08:16:51', 538, 'ig', '120246437180320640', 'paid', NULL, NULL, '157.34.1.38'),
(845, '2026-04-17 08:21:43', 280, 'web', '', 'direct', '', '', '157.38.152.16'),
(846, '2026-04-17 08:26:04', 280, 'web', '', 'direct', '', '', '157.38.152.16'),
(847, '2026-04-17 08:27:42', 539, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.57.137.217'),
(848, '2026-04-17 08:31:19', 540, 'ig', '120246658548300204', 'paid', NULL, NULL, '152.58.177.136'),
(849, '2026-04-17 08:31:49', 453, 'web', '', 'direct', '', '', '157.51.130.133'),
(850, '2026-04-17 08:31:54', 541, 'fb', '120243425160500382', 'paid', NULL, NULL, '223.188.51.197'),
(851, '2026-04-17 08:44:19', 542, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.49.177.162'),
(852, '2026-04-17 08:45:50', 543, 'fb', '120246527797620640', 'paid', NULL, NULL, '106.205.164.155'),
(853, '2026-04-17 08:49:30', 544, 'ig', '120246527797610640', 'paid', NULL, NULL, '42.111.96.36'),
(854, '2026-04-17 08:58:54', 509, 'web', '', 'direct', '', '', '152.59.59.192'),
(855, '2026-04-17 09:19:00', 545, 'ig', '120246527797620640', 'paid', NULL, NULL, '42.108.76.80'),
(856, '2026-04-17 09:23:30', 546, 'fb', '120242606645800473', 'paid', NULL, NULL, '106.192.109.177'),
(857, '2026-04-17 09:39:06', 547, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.195.78.108'),
(858, '2026-04-17 09:47:45', 548, 'fb', '120243426671580382', 'paid', NULL, NULL, '106.206.223.57'),
(859, '2026-04-17 09:49:55', 545, 'web', '', 'direct', '', '', '42.108.76.80'),
(860, '2026-04-17 09:54:19', 549, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.3.186'),
(861, '2026-04-17 09:59:56', 550, 'fb', '120246658548300204', 'paid', NULL, NULL, '106.215.148.86'),
(862, '2026-04-17 10:01:04', 550, 'web', '', 'direct', '', '', '106.215.148.86'),
(863, '2026-04-17 10:01:49', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(864, '2026-04-17 10:08:38', 551, 'ig', '120246527797600640', 'paid', NULL, NULL, '49.43.109.95'),
(865, '2026-04-17 10:09:39', 552, 'ig', '120246527797600640', 'paid', NULL, NULL, '152.58.6.204'),
(866, '2026-04-17 10:14:25', 553, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(867, '2026-04-17 10:22:43', 554, 'fb', '120243426671580382', 'paid', NULL, NULL, '223.186.18.153'),
(868, '2026-04-17 10:28:27', 525, 'web', '', 'direct', '', '', '157.49.98.191'),
(869, '2026-04-17 10:33:22', 555, 'fb', '120239167461220358', 'paid', NULL, NULL, '49.37.11.7'),
(870, '2026-04-17 10:36:54', 556, 'fb', '120239167461220358', 'paid', NULL, NULL, '106.221.195.144'),
(871, '2026-04-17 10:37:13', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(872, '2026-04-17 10:40:00', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(873, '2026-04-17 10:40:59', 556, 'web', '', 'direct', '', '', '106.221.195.144'),
(874, '2026-04-17 11:02:06', 531, 'web', '', 'direct', '', '', '103.102.119.250'),
(875, '2026-04-17 11:02:43', 531, 'web', '', 'direct', '', '', '103.102.119.250'),
(876, '2026-04-17 11:02:44', 176, 'web', '', 'direct', NULL, NULL, '106.76.191.171'),
(877, '2026-04-17 11:11:17', 557, 'fb', '120246527797600640', 'paid', NULL, NULL, '171.79.58.99'),
(878, '2026-04-17 11:11:25', 558, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.33.215.127'),
(879, '2026-04-17 11:26:39', 559, 'ig', '120242606645800473', 'paid', NULL, NULL, '152.59.18.173'),
(880, '2026-04-17 11:32:50', 560, 'fb', '120246527797600640', 'paid', NULL, NULL, '47.15.235.106'),
(881, '2026-04-17 11:38:08', 486, 'web', '', 'direct', '', '', '152.59.38.144'),
(882, '2026-04-17 11:44:44', 125, 'web', '', 'direct', '', '', '49.42.188.88'),
(883, '2026-04-17 11:47:44', 561, 'fb', '120242606645800473', 'paid', NULL, NULL, '106.221.70.250'),
(884, '2026-04-17 11:50:49', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(885, '2026-04-17 11:55:52', 562, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.51.8.209'),
(886, '2026-04-17 11:57:01', 563, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.181.97.93'),
(887, '2026-04-17 12:08:10', 554, 'web', '', 'direct', '', '', '223.186.18.153'),
(888, '2026-04-17 12:11:13', 563, 'web', '', 'direct', '', '', '223.181.97.93'),
(889, '2026-04-17 12:12:22', 563, 'web', '', 'direct', '', '', '223.181.97.93'),
(890, '2026-04-17 12:21:39', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(891, '2026-04-17 12:24:16', 126, 'web', '', 'direct', '', '', '103.251.59.58'),
(892, '2026-04-17 12:26:50', 564, 'fb', '120242606645800473', 'paid', NULL, NULL, '106.192.38.251'),
(893, '2026-04-17 12:28:33', 565, 'ig', '120242606645800473', 'paid', NULL, NULL, '27.61.41.39'),
(894, '2026-04-17 12:46:20', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(895, '2026-04-17 12:47:03', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(896, '2026-04-17 12:59:27', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(897, '2026-04-17 13:00:29', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(898, '2026-04-17 13:05:36', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(899, '2026-04-17 13:16:24', 566, 'fb', '120247757963750747', 'paid', NULL, NULL, '27.63.236.185'),
(900, '2026-04-17 13:19:13', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(901, '2026-04-17 13:26:56', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(902, '2026-04-17 13:27:48', 549, 'web', '', 'direct', '', '', '152.59.3.64'),
(903, '2026-04-17 13:31:27', 554, 'web', '', 'direct', '', '', '223.186.18.153'),
(904, '2026-04-17 13:41:14', 444, 'web', '', 'direct', '', '', '223.184.178.48'),
(905, '2026-04-17 13:41:57', 444, 'web', '', 'direct', '', '', '223.184.178.48'),
(906, '2026-04-17 13:44:18', 546, 'web', '', 'direct', '', '', '106.192.98.82'),
(907, '2026-04-17 13:45:59', 567, 'ig', '120239167461220358', 'paid', NULL, NULL, '223.188.55.23'),
(908, '2026-04-17 13:46:27', 233, 'web', '', 'direct', '', '', '157.50.134.95'),
(909, '2026-04-17 13:53:23', 216, 'web', '', 'direct', NULL, NULL, '152.58.33.222'),
(910, '2026-04-17 13:54:04', 568, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.217.182.63'),
(911, '2026-04-17 14:03:56', 569, 'ig', '120242312930250473', 'paid', NULL, NULL, '49.15.132.84'),
(912, '2026-04-17 14:05:50', 570, 'fb', '120247757963750747', 'paid', NULL, NULL, '171.76.141.166'),
(913, '2026-04-17 14:07:44', 496, 'web', '', 'direct', '', '', '152.58.15.53'),
(914, '2026-04-17 14:13:28', 571, 'fb', '120242312930250473', 'paid', NULL, NULL, '49.36.89.55'),
(915, '2026-04-17 14:20:34', 572, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.222.229.217'),
(916, '2026-04-17 14:24:35', 537, 'web', '', 'direct', NULL, NULL, '152.59.180.101'),
(917, '2026-04-17 14:34:45', 433, 'web', '', 'direct', '', '', '106.192.80.105'),
(918, '2026-04-17 14:35:19', 433, 'web', '', 'direct', '', '', '106.192.80.105'),
(919, '2026-04-17 14:37:40', 573, 'ig', '120242312930250473', 'paid', NULL, NULL, '160.238.79.130'),
(920, '2026-04-17 14:42:24', 574, 'ig', '120246527797620640', 'paid', NULL, NULL, '106.195.12.39'),
(921, '2026-04-17 14:44:50', 575, 'fb', '120243467475700118', 'paid', NULL, NULL, '152.58.78.224'),
(922, '2026-04-17 14:57:52', 485, 'web', '', 'direct', '', '', '152.59.143.223'),
(923, '2026-04-17 15:00:19', 576, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.58.7.123'),
(924, '2026-04-17 15:05:26', 577, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.58.187.165'),
(925, '2026-04-17 15:38:00', 565, 'web', '', 'direct', NULL, NULL, '27.61.43.39'),
(926, '2026-04-17 16:02:57', 578, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.59.203.24'),
(927, '2026-04-17 16:04:52', 579, 'fb', '120246658548300204', 'paid', NULL, NULL, '42.104.223.83'),
(928, '2026-04-17 16:15:58', 580, 'ig', '120246527797620640', 'paid', NULL, NULL, '152.59.174.62'),
(929, '2026-04-17 16:20:19', 549, 'web', '', 'direct', '', '', '152.59.3.206'),
(930, '2026-04-17 16:20:56', 581, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.221.209.147'),
(931, '2026-04-17 16:28:18', 582, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.57.125.150'),
(932, '2026-04-17 16:34:35', 583, 'fb', '120243467475700118', 'paid', NULL, NULL, '157.48.5.172'),
(933, '2026-04-17 16:47:11', 233, 'web', '', 'direct', '', '', '157.50.143.92'),
(934, '2026-04-17 16:57:01', 584, 'fb', '120247757963750747', 'paid', NULL, NULL, '157.50.15.132'),
(935, '2026-04-17 16:57:31', 447, 'web', '', 'direct', '', '', '106.192.70.145'),
(936, '2026-04-17 17:07:16', 585, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.59.200.24'),
(937, '2026-04-17 17:42:42', 586, 'ig', '120242552172500473', 'paid', NULL, NULL, '106.221.147.239'),
(938, '2026-04-17 17:45:57', 587, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.59.89.131'),
(939, '2026-04-17 17:48:58', 560, 'web', '', 'direct', '', '', '47.15.239.132'),
(940, '2026-04-17 17:52:35', 523, 'web', '', 'direct', '', '', '223.228.149.239'),
(941, '2026-04-17 17:53:51', 509, 'web', '', 'direct', '', '', '152.59.59.167'),
(942, '2026-04-17 18:13:13', 454, 'web', '', 'direct', NULL, NULL, '110.224.82.156'),
(943, '2026-04-17 18:21:24', 454, 'web', '', 'direct', NULL, NULL, '110.224.92.156'),
(944, '2026-04-17 18:46:01', 454, 'web', '', 'direct', NULL, NULL, '110.224.85.156'),
(945, '2026-04-17 18:46:39', 516, 'web', '', 'direct', '', '', '157.40.97.229'),
(946, '2026-04-17 19:04:41', 588, 'ig', '120242656907980473', 'paid', NULL, NULL, '152.58.169.108'),
(947, '2026-04-17 19:06:21', 589, 'ig', '120246813233490184', 'paid', NULL, NULL, '47.15.238.115'),
(948, '2026-04-17 19:07:35', 590, 'ig', '120246584445800640', 'paid', NULL, NULL, '171.79.32.105'),
(949, '2026-04-17 19:07:37', 591, 'ig', '120246584445790640', 'paid', NULL, NULL, '152.58.115.16'),
(950, '2026-04-17 19:07:54', 592, 'ig', '120246581808390640', 'paid', NULL, NULL, '49.14.135.118'),
(951, '2026-04-17 19:08:45', 593, 'ig', '120246581808390640', 'paid', NULL, NULL, '106.192.76.183'),
(952, '2026-04-17 19:11:35', 594, 'ig', '120242656907970473', 'paid', NULL, NULL, '152.59.56.175'),
(953, '2026-04-17 19:11:53', 595, 'ig', '120246582856220640', 'paid', NULL, NULL, '223.188.118.15'),
(954, '2026-04-17 19:14:59', 596, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.58.7.208'),
(955, '2026-04-17 19:16:40', 597, 'ig', '120242656908010473', 'paid', NULL, NULL, '87.201.105.161'),
(956, '2026-04-17 19:17:31', 598, 'ig', '120246581808390640', 'paid', NULL, NULL, '157.48.248.18'),
(957, '2026-04-17 19:17:36', 599, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.58.31.175'),
(958, '2026-04-17 19:18:08', 600, 'fb', '120246581808390640', 'paid', NULL, NULL, '49.205.37.217'),
(959, '2026-04-17 19:21:08', 601, 'ig', '120242656908010473', 'paid', NULL, NULL, '110.227.49.135'),
(960, '2026-04-17 19:21:09', 602, 'ig', '120246813233490184', 'paid', NULL, NULL, '223.239.3.203'),
(961, '2026-04-17 19:22:04', 599, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.58.31.175'),
(962, '2026-04-17 19:23:53', 603, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.59.62.54'),
(963, '2026-04-17 19:24:50', 604, 'ig', '120246813305890184', 'paid', NULL, NULL, '103.31.142.117'),
(964, '2026-04-17 19:31:48', 605, 'ig', '120246584445800640', 'paid', NULL, NULL, '171.48.104.29'),
(965, '2026-04-17 19:37:31', 606, 'ig', '120246584445790640', 'paid', NULL, NULL, '152.58.118.132'),
(966, '2026-04-17 19:40:25', 607, 'ig', '120246813567570184', 'paid', NULL, NULL, '49.37.161.156'),
(967, '2026-04-17 19:42:38', 608, 'fb', '120242656908010473', 'paid', NULL, NULL, '157.48.226.167'),
(968, '2026-04-17 19:48:35', 609, 'ig', '120246813305890184', 'paid', NULL, NULL, '152.59.41.105'),
(969, '2026-04-17 19:50:35', 609, 'ig', '120246813305890184', 'paid', NULL, NULL, '152.59.41.105'),
(970, '2026-04-17 19:50:57', 462, 'web', '', 'direct', '', '', '103.119.241.202'),
(971, '2026-04-17 19:55:12', 610, 'fb', '120243467475700118', 'paid', NULL, NULL, '223.181.120.152'),
(972, '2026-04-17 19:55:48', 611, 'ig', '120246813396640184', 'paid', NULL, NULL, '157.51.220.171'),
(973, '2026-04-17 19:56:45', 612, 'fb', '120246584445800640', 'paid', NULL, NULL, '42.111.103.26'),
(974, '2026-04-17 20:01:04', 613, 'fb', '120242657481930473', 'paid', NULL, NULL, '152.58.163.146'),
(975, '2026-04-17 20:04:31', 614, 'fb', '120246813305890184', 'paid', NULL, NULL, '223.231.191.45'),
(976, '2026-04-17 20:05:07', 615, 'ig', '120242656907970473', 'paid', NULL, NULL, '157.48.1.54'),
(977, '2026-04-17 20:08:04', 616, 'fb', '120242657005570473', 'paid', NULL, NULL, '106.192.65.147'),
(978, '2026-04-17 20:15:56', 617, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.228.122.8'),
(979, '2026-04-17 20:23:19', 618, 'ig', '120242656908000473', 'paid', NULL, NULL, '223.188.50.223'),
(980, '2026-04-17 20:25:12', 619, 'fb', '120242657481930473', 'paid', NULL, NULL, '1.38.142.66'),
(981, '2026-04-17 20:33:02', 598, 'ig', '120246581808390640', 'paid', 'PAZXh0bgNhZW0BMABhZGlkAaszoVWZIuBzcnRjBmFwcF9pZA8xMjQwMjQ1NzQyODc0MTQAAafJrkAkNCTuXX79ioUrFyu0xK5ORXeGw8lyuiFLcEBcWtGNgsUtL-QQwQCQFQ_aem_IUhXnPGqZI_ybqokN-iLzQ', '', '157.48.243.227'),
(982, '2026-04-17 20:52:53', 620, 'ig', '120242656908000473', 'paid', NULL, NULL, '47.11.226.144'),
(983, '2026-04-17 21:11:24', 621, 'fb', '120246584445810640', 'paid', NULL, NULL, '1.39.134.203'),
(984, '2026-04-17 21:13:59', 366, 'web', '', 'direct', '', '', '27.60.174.200'),
(985, '2026-04-17 21:17:24', 622, 'fb', '120246584445780640', 'paid', NULL, NULL, '223.184.196.144'),
(986, '2026-04-17 21:21:19', 623, 'fb', '120243467475700118', 'paid', NULL, NULL, '47.31.110.207'),
(987, '2026-04-17 21:25:39', 624, 'fb', '120246584445800640', 'paid', NULL, NULL, '122.171.19.158'),
(988, '2026-04-17 22:01:34', 625, 'ig', '120242657481910473', 'paid', NULL, NULL, '47.15.25.114'),
(989, '2026-04-17 22:21:38', 626, 'fb', '120242656908010473', 'paid', NULL, NULL, '223.228.19.32'),
(990, '2026-04-17 22:23:58', 626, 'fb', '120242656908010473', 'paid', NULL, NULL, '223.228.19.32'),
(991, '2026-04-17 23:07:37', 627, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.192.6.171'),
(992, '2026-04-17 23:08:08', 628, 'fb', '120242656908000473', 'paid', NULL, NULL, '152.59.148.173'),
(993, '2026-04-17 23:22:51', 629, 'fb', '120246813233490184', 'paid', NULL, NULL, '49.14.125.1'),
(994, '2026-04-17 23:26:28', 630, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.57.87.116'),
(995, '2026-04-17 23:26:49', 348, 'web', '', 'direct', '', '', '157.51.231.27'),
(996, '2026-04-17 23:32:03', 631, 'ig', '120246584445810640', 'paid', NULL, NULL, '122.183.42.250'),
(997, '2026-04-17 23:36:43', 632, 'ig', '120246813567570184', 'paid', NULL, NULL, '117.231.225.46'),
(998, '2026-04-17 23:58:00', 633, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.192.244.154'),
(999, '2026-04-18 00:04:20', 634, 'ig', '120242657005570473', 'paid', NULL, NULL, '106.213.167.147'),
(1000, '2026-04-18 00:07:02', 635, 'ig', '120246581808390640', 'paid', NULL, NULL, '157.49.80.147'),
(1001, '2026-04-18 00:08:17', 636, 'fb', '120242657481910473', 'paid', NULL, NULL, '103.153.105.108'),
(1002, '2026-04-18 00:26:19', 637, 'fb', '120242657481940473', 'paid', NULL, NULL, '169.149.227.151'),
(1003, '2026-04-18 00:39:24', 587, 'web', '', 'direct', '', '', '152.59.89.231'),
(1004, '2026-04-18 00:44:16', 638, 'ig', '120247757963750747', 'paid', NULL, NULL, '106.200.20.217'),
(1005, '2026-04-18 00:46:19', 427, 'web', '', 'direct', '', '', '49.42.66.163'),
(1006, '2026-04-18 01:13:09', 639, 'ig', '120246582856220640', 'paid', NULL, NULL, '106.205.154.31'),
(1007, '2026-04-18 01:25:34', 640, 'ig', '120242312930250473', 'paid', NULL, NULL, '47.15.232.180'),
(1008, '2026-04-18 01:32:44', 537, 'web', '', 'direct', '', '', '152.59.178.161'),
(1009, '2026-04-18 01:59:27', 641, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.51.30.138'),
(1010, '2026-04-18 02:12:25', 642, 'ig', '120246437180320640', 'paid', NULL, NULL, '106.205.166.14'),
(1011, '2026-04-18 02:21:14', 643, 'fb', '120246813567560184', 'paid', NULL, NULL, '223.237.188.210'),
(1012, '2026-04-18 02:26:06', 537, 'web', '', 'direct', '', '', '152.59.178.22'),
(1013, '2026-04-18 02:29:50', 644, 'ig', '120246584445810640', 'paid', NULL, NULL, '122.161.77.135'),
(1014, '2026-04-18 02:35:29', 364, 'web', '', 'direct', '', '', '106.192.129.61'),
(1015, '2026-04-18 02:40:01', 645, 'ig', '120246584445790640', 'paid', NULL, NULL, '152.59.32.107'),
(1016, '2026-04-18 02:41:39', 646, 'fb', '120242656907970473', 'paid', NULL, NULL, '205.253.37.178'),
(1017, '2026-04-18 02:43:19', 647, 'ig', '120242657481910473', 'paid', NULL, NULL, '49.34.127.121'),
(1018, '2026-04-18 02:48:11', 648, 'ig', '120246813567570184', 'paid', NULL, NULL, '47.15.87.95'),
(1019, '2026-04-18 02:53:14', 114, 'fb', '120246813567560184', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasz1wehC-hzcnRjBmFwcF9pZA8yNzUyNTQ2OTI1OTgyNzkAAR62EM34zNO7VIloKUz8cx7edGKiXVZkDPBwRCpHJ63TJirJTzAHAvpkzIanbg_aem_ndizzvIidHDmfjgOGgI40g', '', '103.166.244.219'),
(1020, '2026-04-18 02:57:24', 649, 'ig', '120242656907970473', 'paid', NULL, NULL, '152.57.15.145'),
(1021, '2026-04-18 02:58:33', 650, 'fb', '120242656908030473', 'paid', NULL, NULL, '152.58.29.47'),
(1022, '2026-04-18 03:07:54', 651, 'ig', '120246813567560184', 'paid', NULL, NULL, '49.36.11.116'),
(1023, '2026-04-18 03:14:14', 652, 'fb', '120242657481910473', 'paid', NULL, NULL, '223.188.17.160'),
(1024, '2026-04-18 03:17:37', 653, 'fb', '120246813396640184', 'paid', NULL, NULL, '157.51.0.156'),
(1025, '2026-04-18 03:18:45', 654, 'fb', '120247757963750747', 'paid', NULL, NULL, '106.192.164.215'),
(1026, '2026-04-18 03:19:32', 655, 'ig', '120246584445790640', 'paid', NULL, NULL, '152.58.186.163'),
(1027, '2026-04-18 03:21:05', 656, 'ig', '120246813396640184', 'paid', NULL, NULL, '183.83.235.209'),
(1028, '2026-04-18 03:36:47', 657, 'ig', '120246813567570184', 'paid', NULL, NULL, '59.98.108.60'),
(1029, '2026-04-18 03:38:04', 654, 'fb', '120247757963750747', 'paid', NULL, NULL, '106.192.164.215'),
(1030, '2026-04-18 03:41:35', 56, 'fb', '120246581808390640', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaszoVWYX5BzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6RorBNfeBO-DwdFQ6riPaSdrWDga2WfwI3qstDeaLrnLnDnF_niz7FPfeFDw_aem_VCDPZ_qc8LhuD7Oh5LZd6A', '', '157.51.169.115'),
(1031, '2026-04-18 03:42:27', 658, 'fb', '120246813305890184', 'paid', NULL, NULL, '152.59.35.169'),
(1032, '2026-04-18 03:45:56', 659, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(1033, '2026-04-18 03:46:24', 660, 'fb', '120242657481940473', 'paid', NULL, NULL, '223.187.118.60'),
(1034, '2026-04-18 03:46:33', 661, 'ig', '120246582856220640', 'paid', NULL, NULL, '106.76.166.16'),
(1035, '2026-04-18 03:52:13', 662, 'ig', '120246813233490184', 'paid', NULL, NULL, '106.221.207.156'),
(1036, '2026-04-18 04:00:14', 663, 'ig', '120242657481940473', 'paid', NULL, NULL, '42.106.187.214'),
(1037, '2026-04-18 04:03:57', 453, 'web', '', 'direct', '', '', '152.57.91.222'),
(1038, '2026-04-18 04:06:44', 664, 'ig', '120242656908010473', 'paid', NULL, NULL, '223.185.24.224'),
(1039, '2026-04-18 04:08:03', 665, 'ig', '120246813233490184', 'paid', NULL, NULL, '110.225.50.158'),
(1040, '2026-04-18 04:10:18', 549, 'web', '', 'direct', '', '', '152.59.3.255'),
(1041, '2026-04-18 04:12:35', 666, 'fb', '120246813567560184', 'paid', NULL, NULL, '49.42.187.59'),
(1042, '2026-04-18 04:18:24', 667, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.211.249.230'),
(1043, '2026-04-18 04:21:23', 668, 'ig', '120246581808390640', 'paid', NULL, NULL, '157.50.107.45'),
(1044, '2026-04-18 04:21:47', 667, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.221.28.232'),
(1045, '2026-04-18 04:23:23', 669, 'fb', '120246584445790640', 'paid', NULL, NULL, '157.40.67.232'),
(1046, '2026-04-18 04:23:30', 670, 'fb', '120242312930250473', 'paid', NULL, NULL, '27.56.1.112'),
(1047, '2026-04-18 04:27:33', 671, 'fb', '120246813567560184', 'paid', NULL, NULL, '157.51.170.62'),
(1048, '2026-04-18 04:38:34', 672, 'fb', '120242656945180473', 'paid', NULL, NULL, '157.49.11.175'),
(1049, '2026-04-18 04:45:43', 673, 'fb', '120247757963750747', 'paid', NULL, NULL, '122.183.42.156'),
(1050, '2026-04-18 04:48:21', 674, 'fb', '120246581808390640', 'paid', NULL, NULL, '152.56.147.190'),
(1051, '2026-04-18 04:52:07', 675, 'fb', '120247757963750747', 'paid', NULL, NULL, '49.37.52.68'),
(1052, '2026-04-18 05:06:37', 676, 'ig', '120246813567560184', 'paid', NULL, NULL, '223.188.18.85'),
(1053, '2026-04-18 05:06:42', 677, 'ig', '120246813305900184', 'paid', NULL, NULL, '157.50.86.251'),
(1054, '2026-04-18 05:09:34', 678, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.59.6.78'),
(1055, '2026-04-18 05:10:16', 679, 'ig', '120242656908000473', 'paid', NULL, NULL, '103.157.5.162'),
(1056, '2026-04-18 05:15:34', 176, 'web', '', 'direct', '', '', '106.76.191.46'),
(1057, '2026-04-18 05:18:41', 680, 'fb', '120242657005570473', 'paid', NULL, NULL, '106.216.64.22'),
(1058, '2026-04-18 05:21:33', 681, 'ig', '120242656908000473', 'paid', NULL, NULL, '152.58.159.174'),
(1059, '2026-04-18 05:22:57', 682, 'ig', '120246584445790640', 'paid', NULL, NULL, '103.44.48.118'),
(1060, '2026-04-18 05:28:39', 683, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.59.121.46'),
(1061, '2026-04-18 05:29:34', 684, 'ig', '120246658548300204', 'paid', NULL, NULL, '223.231.132.67'),
(1062, '2026-04-18 05:30:00', 685, 'ig', '120242657481930473', 'paid', NULL, NULL, '27.59.28.37'),
(1063, '2026-04-18 05:30:12', 686, 'ig', '120246813567560184', 'paid', NULL, NULL, '152.58.44.94'),
(1064, '2026-04-18 05:31:19', 687, 'fb', '120246813233490184', 'paid', NULL, NULL, '157.49.175.59'),
(1065, '2026-04-18 05:32:33', 688, 'fb', '120246813233490184', 'paid', NULL, NULL, '152.58.168.145'),
(1066, '2026-04-18 05:38:28', 689, 'ig', '120242656908030473', 'paid', NULL, NULL, '223.184.153.158'),
(1067, '2026-04-18 05:39:20', 478, 'web', '', 'direct', '', '', '157.49.216.104'),
(1068, '2026-04-18 05:39:50', 690, 'ig', '120246584445810640', 'paid', NULL, NULL, '106.205.160.101'),
(1069, '2026-04-18 05:41:47', 691, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.59.204.217'),
(1070, '2026-04-18 05:43:35', 692, 'ig', '120242656907980473', 'paid', NULL, NULL, '27.60.9.183'),
(1071, '2026-04-18 05:43:51', 693, 'fb', '120246658548300204', 'paid', NULL, NULL, '223.184.194.76'),
(1072, '2026-04-18 05:45:25', 694, 'fb', '120246813305890184', 'paid', NULL, NULL, '49.36.9.82'),
(1073, '2026-04-18 05:46:07', 695, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.202.38.66'),
(1074, '2026-04-18 05:47:35', 696, 'ig', '120246584445810640', 'paid', NULL, NULL, '152.57.190.41'),
(1075, '2026-04-18 05:48:11', 697, 'fb', '120242657481920473', 'paid', NULL, NULL, '157.48.219.145'),
(1076, '2026-04-18 05:51:45', 698, 'ig', '120246813305900184', 'paid', NULL, NULL, '157.32.194.136');
INSERT INTO `source_entry` (`id`, `rec_date`, `user_id`, `utm_source`, `utm_campaign`, `utm_medium`, `source_id`, `utm_referral`, `client_ip`) VALUES
(1077, '2026-04-18 05:54:04', 699, 'fb', '120242657481920473', 'paid', NULL, NULL, '106.217.255.22'),
(1078, '2026-04-18 05:55:23', 700, 'fb', '120245026263290310', 'paid', NULL, NULL, '152.59.7.61'),
(1079, '2026-04-18 05:56:56', 701, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.49.118.151'),
(1080, '2026-04-18 05:57:30', 702, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.231.174.211'),
(1081, '2026-04-18 06:03:21', 703, 'ig', '120242656907970473', 'paid', NULL, NULL, '152.59.78.110'),
(1082, '2026-04-18 06:05:15', 704, 'fb', '120242656907970473', 'paid', NULL, NULL, '47.15.64.51'),
(1083, '2026-04-18 06:13:02', 705, 'fb', '120246582856220640', 'paid', NULL, NULL, '152.58.177.84'),
(1084, '2026-04-18 06:16:35', 706, 'fb', '120242656908010473', 'paid', NULL, NULL, '223.185.200.187'),
(1085, '2026-04-18 06:25:08', 707, 'ig', '120242656908030473', 'paid', NULL, NULL, '152.59.8.14'),
(1086, '2026-04-18 06:27:40', 377, 'web', '', 'direct', '', '', '106.219.142.239'),
(1087, '2026-04-18 06:30:32', 496, 'web', '', 'direct', '', '', '103.198.164.46'),
(1088, '2026-04-18 06:30:39', 708, 'fb', '120246813233490184', 'paid', NULL, NULL, '106.221.16.23'),
(1089, '2026-04-18 06:31:58', 709, 'fb', '120246813567560184', 'paid', NULL, NULL, '152.58.134.32'),
(1090, '2026-04-18 06:37:29', 546, 'web', '', 'direct', NULL, NULL, '223.176.63.33'),
(1091, '2026-04-18 06:38:55', 546, 'web', '', 'direct', '', '', '223.176.63.33'),
(1092, '2026-04-18 06:39:21', 710, 'ig', '120246437180320640', 'paid', NULL, NULL, '152.58.15.235'),
(1093, '2026-04-18 06:42:18', 711, 'ig', '120242656908010473', 'paid', NULL, NULL, '157.51.220.105'),
(1094, '2026-04-18 06:43:24', 712, 'fb', '120242657481910473', 'paid', NULL, NULL, '157.48.255.46'),
(1095, '2026-04-18 06:49:23', 713, 'fb', '120242656908000473', 'paid', NULL, NULL, '223.178.85.12'),
(1096, '2026-04-18 06:53:16', 713, 'web', '', 'direct', '', '', '223.178.85.12'),
(1097, '2026-04-18 06:57:28', 714, 'fb', '120242657005570473', 'paid', NULL, NULL, '152.57.139.225'),
(1098, '2026-04-18 07:02:41', 709, 'web', '', 'direct', '', '', '152.58.134.32'),
(1099, '2026-04-18 07:08:38', 715, 'ig', '120246813567570184', 'paid', NULL, NULL, '42.105.199.249'),
(1100, '2026-04-18 07:23:41', 716, 'fb', '120242312930250473', 'paid', NULL, NULL, '27.60.32.27'),
(1101, '2026-04-18 07:27:12', 717, 'fb', '120246584445780640', 'paid', NULL, NULL, '42.104.205.89'),
(1102, '2026-04-18 07:30:07', 718, 'fb', '120242552172500473', 'paid', NULL, NULL, '27.61.39.124'),
(1103, '2026-04-18 07:31:48', 718, 'fb', '120242552172500473', 'paid', NULL, NULL, '27.61.39.124'),
(1104, '2026-04-18 07:33:05', 719, 'fb', '120246813233490184', 'paid', NULL, NULL, '157.33.1.219'),
(1105, '2026-04-18 07:36:05', 720, 'ig', '120246813233490184', 'paid', NULL, NULL, '223.181.15.26'),
(1106, '2026-04-18 07:37:22', 342, 'web', '', 'direct', '', '', '157.50.123.39'),
(1107, '2026-04-18 07:38:17', 342, 'web', '', 'direct', '', '', '157.50.107.1'),
(1108, '2026-04-18 07:40:08', 721, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.216.84.202'),
(1109, '2026-04-18 07:41:35', 722, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.57.170.17'),
(1110, '2026-04-18 07:51:57', 723, 'fb', '120239167461220358', 'paid', NULL, NULL, '157.51.14.112'),
(1111, '2026-04-18 07:56:35', 724, 'ig', '120246658548300204', 'paid', NULL, NULL, '223.181.146.197'),
(1112, '2026-04-18 08:00:13', 725, 'fb', '120247757963750747', 'paid', NULL, NULL, '152.56.255.199'),
(1113, '2026-04-18 08:06:24', 726, 'ig', '120246813305890184', 'paid', NULL, NULL, '152.59.37.54'),
(1114, '2026-04-18 08:16:03', 727, 'ig', '120246584445800640', 'paid', NULL, NULL, '27.59.118.102'),
(1115, '2026-04-18 08:21:45', 728, 'ig', '120246584445800640', 'paid', NULL, NULL, '152.57.74.233'),
(1116, '2026-04-18 08:25:05', 590, 'web', '', 'direct', '', '', '49.47.11.99'),
(1117, '2026-04-18 08:35:38', 729, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.192.75.15'),
(1118, '2026-04-18 08:52:51', 730, 'fb', '120246813305900184', 'paid', NULL, NULL, '152.59.199.1'),
(1119, '2026-04-18 08:53:24', 731, 'ig', '120246813567570184', 'paid', NULL, NULL, '152.59.107.97'),
(1120, '2026-04-18 08:56:14', 730, 'web', '', 'direct', '', '', '152.59.198.15'),
(1121, '2026-04-18 09:05:19', 732, 'fb', '120246584445780640', 'paid', NULL, NULL, '117.211.134.143'),
(1122, '2026-04-18 09:08:41', 733, 'fb', '120246813305900184', 'paid', NULL, NULL, '157.40.86.181'),
(1123, '2026-04-18 09:12:10', 734, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(1124, '2026-04-18 09:15:23', 735, 'ig', '120242657481910473', 'paid', NULL, NULL, '157.49.28.16'),
(1125, '2026-04-18 09:19:15', 736, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.58.31.129'),
(1126, '2026-04-18 09:20:19', 737, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.59.146.47'),
(1127, '2026-04-18 09:22:04', 738, 'ig', '120242656907980473', 'paid', NULL, NULL, '152.59.203.142'),
(1128, '2026-04-18 09:23:55', 733, 'web', '', 'direct', '', '', '157.40.86.181'),
(1129, '2026-04-18 09:24:12', 739, 'fb', '120242656908010473', 'paid', NULL, NULL, '157.38.2.218'),
(1130, '2026-04-18 09:24:28', 733, 'web', '', 'direct', '', '', '157.40.86.181'),
(1131, '2026-04-18 09:25:03', 733, 'web', '', 'direct', '', '', '157.40.86.181'),
(1132, '2026-04-18 09:30:10', 740, 'ig', '120242656908030473', 'paid', NULL, NULL, '106.216.229.176'),
(1133, '2026-04-18 09:32:25', 741, 'ig', '120242656908000473', 'paid', NULL, NULL, '157.51.122.223'),
(1134, '2026-04-18 09:34:42', 742, 'fb', '120245026263290310', 'paid', NULL, NULL, '157.42.22.15'),
(1135, '2026-04-18 09:44:54', 742, 'web', '', 'direct', '', '', '157.42.22.15'),
(1136, '2026-04-18 09:50:09', 743, 'fb', '120242656907980473', 'paid', NULL, NULL, '103.244.242.89'),
(1137, '2026-04-18 09:53:30', 744, 'fb', '120246584445790640', 'paid', NULL, NULL, '42.105.168.3'),
(1138, '2026-04-18 09:58:41', 745, 'fb', '120245026263290310', 'paid', NULL, NULL, '206.84.234.158'),
(1139, '2026-04-18 10:01:32', 746, 'fb', '120245026263290310', 'paid', NULL, NULL, '106.195.1.71'),
(1140, '2026-04-18 10:04:38', 747, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.192.14.31'),
(1141, '2026-04-18 10:13:43', 748, 'fb', '120242656908000473', 'paid', NULL, NULL, '152.56.156.238'),
(1142, '2026-04-18 10:16:56', 749, 'ig', '120242657481930473', 'paid', NULL, NULL, '152.58.118.115'),
(1143, '2026-04-18 10:17:21', 750, 'fb', '120242656908000473', 'paid', NULL, NULL, '27.60.44.129'),
(1144, '2026-04-18 10:18:24', 751, 'fb', '120242657481930473', 'paid', NULL, NULL, '152.58.115.231'),
(1145, '2026-04-18 10:19:12', 752, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.33.222.74'),
(1146, '2026-04-18 10:22:54', 753, 'ig', '120242656907980473', 'paid', NULL, NULL, '157.33.200.78'),
(1147, '2026-04-18 10:26:16', 753, 'web', '', 'direct', '', '', '157.33.200.78'),
(1148, '2026-04-18 10:28:13', 753, 'web', '', 'direct', '', '', '157.33.200.78'),
(1149, '2026-04-18 10:31:27', 754, 'ig', '120246584445780640', 'paid', NULL, NULL, '152.59.85.77'),
(1150, '2026-04-18 10:32:31', 755, 'ig', '120246813305890184', 'paid', NULL, NULL, '47.9.116.106'),
(1151, '2026-04-18 10:34:50', 756, 'fb', '120242656908000473', 'paid', NULL, NULL, '110.226.229.246'),
(1152, '2026-04-18 10:39:32', 757, 'fb', '120242656907970473', 'paid', NULL, NULL, '106.192.188.233'),
(1153, '2026-04-18 10:43:04', 758, 'fb', '120242657005570473', 'paid', NULL, NULL, '27.61.53.196'),
(1154, '2026-04-18 10:43:28', 758, 'fb', '120242657005570473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaswD2AhL9lzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR7qvrges4HK54ZDG2hMGSJ-FG9qSNwg2PpRLp_OorMWWXUeYDB_nonMPDV_iA_aem_aL2_Uz-Wfy_NMCODi4wxMA', '', '27.61.53.196'),
(1155, '2026-04-18 10:44:50', 758, 'web', '', 'direct', '', '', '27.61.53.196'),
(1156, '2026-04-18 10:53:28', 759, 'fb', '120247757963750747', 'paid', NULL, NULL, '106.67.191.232'),
(1157, '2026-04-18 10:54:33', 760, 'fb', '120246813305890184', 'paid', NULL, NULL, '223.184.196.81'),
(1158, '2026-04-18 11:01:59', 761, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.76.201.93'),
(1159, '2026-04-18 11:29:01', 762, 'ig', '120242312930250473', 'paid', NULL, NULL, '42.104.226.104'),
(1160, '2026-04-18 11:33:32', 763, 'ig', '120246813233490184', 'paid', NULL, NULL, '106.192.41.207'),
(1161, '2026-04-18 11:39:14', 764, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.198.6.28'),
(1162, '2026-04-18 11:41:13', 760, 'web', '', 'direct', '', '', '223.184.196.81'),
(1163, '2026-04-18 11:44:35', 765, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.59.31.90'),
(1164, '2026-04-18 12:00:50', 766, 'ig', '120242657481930473', 'paid', NULL, NULL, '157.50.164.15'),
(1165, '2026-04-18 12:01:31', 767, 'ig', '120245026263290310', 'paid', NULL, NULL, '49.37.111.30'),
(1166, '2026-04-18 12:13:24', 768, 'ig', '120246813305900184', 'paid', NULL, NULL, '47.11.13.153'),
(1167, '2026-04-18 12:14:12', 769, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.4.245'),
(1168, '2026-04-18 12:17:55', 770, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.202.116.95'),
(1169, '2026-04-18 12:18:33', 771, 'ig', '120245026263290310', 'paid', NULL, NULL, '157.49.200.249'),
(1170, '2026-04-18 12:21:58', 772, 'ig', '120246813233490184', 'paid', NULL, NULL, '122.183.36.156'),
(1171, '2026-04-18 12:24:32', 773, 'fb', '120246813305890184', 'paid', NULL, NULL, '157.42.22.199'),
(1172, '2026-04-18 12:27:22', 774, 'fb', '120246658548300204', 'paid', NULL, NULL, '106.192.29.172'),
(1173, '2026-04-18 12:42:09', 537, 'web', '', 'direct', NULL, NULL, '152.59.177.123'),
(1174, '2026-04-18 12:47:21', 775, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.59.1.116'),
(1175, '2026-04-18 12:55:20', 776, 'fb', '120242312930250473', 'paid', NULL, NULL, '27.59.54.237'),
(1176, '2026-04-18 13:10:34', 777, 'ig', '120246658548300204', 'paid', NULL, NULL, '157.32.127.106'),
(1177, '2026-04-18 13:11:28', 778, 'ig', '120246658548300204', 'paid', NULL, NULL, '106.220.183.60'),
(1178, '2026-04-18 13:11:41', 779, 'ig', '120242657481930473', 'paid', NULL, NULL, '106.221.78.214'),
(1179, '2026-04-18 13:15:17', 780, 'fb', '120242552172500473', 'paid', NULL, NULL, '223.185.219.218'),
(1180, '2026-04-18 13:24:58', 781, 'fb', '120245026263290310', 'paid', NULL, NULL, '106.221.94.234'),
(1181, '2026-04-18 13:31:36', 782, 'ig', '120246813233490184', 'paid', NULL, NULL, '157.50.2.87'),
(1182, '2026-04-18 13:51:37', 783, 'ig', '120242552172500473', 'paid', NULL, NULL, '115.97.214.108'),
(1183, '2026-04-18 13:54:19', 784, 'ig', '120245026263290310', 'paid', NULL, NULL, '171.61.175.231'),
(1184, '2026-04-18 14:00:56', 785, 'fb', '120246584445790640', 'paid', NULL, NULL, '157.40.79.145'),
(1185, '2026-04-18 14:02:09', 785, 'web', '', 'direct', '', '', '157.40.79.145'),
(1186, '2026-04-18 14:47:09', 786, 'ig', '120242656907980473', 'paid', NULL, NULL, '27.61.57.108'),
(1187, '2026-04-18 14:57:35', 787, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.79.204.37'),
(1188, '2026-04-18 15:00:47', 496, 'web', '', 'direct', '', '', '152.58.15.124'),
(1189, '2026-04-18 15:06:50', 788, 'fb', '120242656907980473', 'paid', NULL, NULL, '117.216.232.185'),
(1190, '2026-04-18 15:08:04', 789, 'fb', '120243467475700118', 'paid', NULL, NULL, '103.253.150.6'),
(1191, '2026-04-18 15:10:14', 790, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.58.179.33'),
(1192, '2026-04-18 15:15:25', 791, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.77.141.49'),
(1193, '2026-04-18 15:32:16', 792, 'fb', '120243467475700118', 'paid', NULL, NULL, '42.104.243.65'),
(1194, '2026-04-18 15:34:33', 792, 'fb', '120243467475700118', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasw5aUIUjZzcnRjBmFwcF9pZA8yNzUyNTQ2OTI1OTgyNzkAAR4IESkbUJ1KAgkDWn-wH0sZxaIxkUuPh519vdqztscyN_lR9Ln9p8xTcyNlug_aem_lzRW9YD65BElY4gnkCye2w', '', '42.104.243.65'),
(1195, '2026-04-18 15:47:24', 793, 'ig', '120246584445790640', 'paid', NULL, NULL, '122.177.242.194'),
(1196, '2026-04-18 15:56:16', 792, 'web', '', 'direct', '', '', '42.104.243.65'),
(1197, '2026-04-18 16:10:11', 794, 'fb', '120246813305900184', 'paid', NULL, NULL, '49.14.144.23'),
(1198, '2026-04-18 16:12:54', 795, 'ig', '120245026263290310', 'paid', NULL, NULL, '27.59.85.207'),
(1199, '2026-04-18 16:25:34', 796, 'fb', '120242657481910473', 'paid', NULL, NULL, '106.192.3.72'),
(1200, '2026-04-18 16:37:08', 797, 'fb', '120246813305900184', 'paid', NULL, NULL, '117.97.211.222'),
(1201, '2026-04-18 16:58:05', 549, 'web', '', 'direct', '', '', '152.59.5.142'),
(1202, '2026-04-18 17:05:28', 798, 'fb', '120246813305890184', 'paid', NULL, NULL, '27.60.166.102'),
(1203, '2026-04-18 17:17:50', 799, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.59.9.252'),
(1204, '2026-04-18 17:36:24', 498, 'web', '', 'direct', '', '', '106.208.103.112'),
(1205, '2026-04-18 18:05:39', 800, 'ig', '120246813233490184', 'paid', NULL, NULL, '223.237.146.218'),
(1206, '2026-04-18 18:06:53', 800, 'ig', '120246813233490184', 'paid', NULL, NULL, '223.237.146.218'),
(1207, '2026-04-18 18:09:31', 801, 'ig', '120242656907980473', 'paid', NULL, NULL, '157.33.241.26'),
(1208, '2026-04-18 18:11:15', 802, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.3.87'),
(1209, '2026-04-18 18:14:57', 803, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.219.208.160'),
(1210, '2026-04-18 18:18:44', 804, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.58.118.10'),
(1211, '2026-04-18 18:19:16', 805, 'ig', '120242656907980473', 'paid', NULL, NULL, '47.11.46.24'),
(1212, '2026-04-18 18:28:04', 806, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.192.4.56'),
(1213, '2026-04-18 18:28:58', 807, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.56.4.179'),
(1214, '2026-04-18 18:30:50', 808, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.76.94.14'),
(1215, '2026-04-18 18:30:51', 809, 'ig', '120242312930250473', 'paid', NULL, NULL, '223.231.157.68'),
(1216, '2026-04-18 18:31:34', 810, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.58.61.142'),
(1217, '2026-04-18 18:31:40', 811, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.189.223.181'),
(1218, '2026-04-18 18:46:05', 812, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.184.162.216'),
(1219, '2026-04-18 18:47:44', 812, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.184.162.216'),
(1220, '2026-04-18 18:48:08', 812, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.184.162.216'),
(1221, '2026-04-18 18:57:11', 813, 'ig', '120242312930250473', 'paid', NULL, NULL, '27.59.85.157'),
(1222, '2026-04-18 19:03:20', 814, 'fb', '120242656907970473', 'paid', NULL, NULL, '42.104.238.19'),
(1223, '2026-04-18 19:04:47', 815, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.221.225.7'),
(1224, '2026-04-18 19:06:41', 808, 'web', '', 'direct', '', '', '106.76.94.3'),
(1225, '2026-04-18 19:19:23', 816, 'ig', '120246868179990184', 'paid', NULL, NULL, '171.48.106.163'),
(1226, '2026-04-18 19:22:06', 817, 'fb', '120246868179990184', 'paid', NULL, NULL, '223.237.169.217'),
(1227, '2026-04-18 19:24:30', 818, 'ig', '120246868180000184', 'paid', NULL, NULL, '47.11.102.42'),
(1228, '2026-04-18 19:40:57', 819, 'ig', '120242552172500473', 'paid', NULL, NULL, '223.237.19.137'),
(1229, '2026-04-18 20:03:42', 820, 'fb', '120246813305890184', 'paid', NULL, NULL, '152.56.138.248'),
(1230, '2026-04-18 20:16:13', 821, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.202.17.178'),
(1231, '2026-04-18 20:22:34', 822, 'fb', '120246868179990184', 'paid', NULL, NULL, '152.59.17.158'),
(1232, '2026-04-18 20:23:03', 823, 'ig', '120246868180000184', 'paid', NULL, NULL, '106.194.164.109'),
(1233, '2026-04-18 20:24:02', 824, 'ig', '120242656907980473', 'paid', NULL, NULL, '49.34.213.58'),
(1234, '2026-04-18 20:26:26', 824, 'ig', '120242656907980473', 'paid', NULL, NULL, '49.34.213.58'),
(1235, '2026-04-18 20:31:05', 825, 'web', '', 'direct', NULL, NULL, '103.44.175.126'),
(1236, '2026-04-18 20:36:55', 824, 'web', '', 'direct', '', '', '49.34.213.58'),
(1237, '2026-04-18 20:40:14', 824, 'web', '', 'direct', NULL, NULL, '49.34.213.58'),
(1238, '2026-04-18 20:41:01', 826, 'fb', '120246584445790640', 'paid', NULL, NULL, '47.15.228.210'),
(1239, '2026-04-18 21:05:29', 827, 'ig', '120242719762200473', 'paid', NULL, NULL, '157.50.195.95'),
(1240, '2026-04-18 21:07:25', 800, 'web', '', 'direct', '', '', '106.202.22.38'),
(1241, '2026-04-18 21:07:50', 800, 'web', '', 'direct', '', '', '106.202.22.38'),
(1242, '2026-04-18 22:10:11', 828, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.205.247.41'),
(1243, '2026-04-18 23:30:49', 829, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.206.83.8'),
(1244, '2026-04-18 23:53:07', 830, 'ig', '120242552172500473', 'paid', NULL, NULL, '157.42.29.128'),
(1245, '2026-04-19 00:12:49', 831, 'fb', '120246813233490184', 'paid', NULL, NULL, '223.181.208.128'),
(1246, '2026-04-19 00:28:54', 832, 'ig', '120246584445790640', 'paid', NULL, NULL, '223.185.216.62'),
(1247, '2026-04-19 00:35:19', 530, 'web', '', 'direct', '', '', '157.35.105.11'),
(1248, '2026-04-19 00:36:40', 530, 'web', '', 'direct', '', '', '157.35.105.11'),
(1249, '2026-04-19 00:39:16', 789, 'web', '', 'direct', NULL, NULL, '103.253.150.6'),
(1250, '2026-04-19 00:39:53', 833, 'ig', '120242656907980473', 'paid', NULL, NULL, '27.60.35.192'),
(1251, '2026-04-19 00:47:45', 789, 'web', '', 'direct', '', '', '103.253.150.6'),
(1252, '2026-04-19 00:49:43', 789, 'web', '', 'direct', NULL, NULL, '103.253.150.6'),
(1253, '2026-04-19 00:54:00', 834, 'fb', '120242552172500473', 'paid', NULL, NULL, '169.149.199.173'),
(1254, '2026-04-19 01:15:02', 835, 'ig', '120246813305890184', 'paid', NULL, NULL, '112.79.24.227'),
(1255, '2026-04-19 01:21:41', 836, 'fb', '120246813233490184', 'paid', NULL, NULL, '152.59.166.218'),
(1256, '2026-04-19 01:25:02', 837, 'ig', '120246813233490184', 'paid', NULL, NULL, '157.51.112.39'),
(1257, '2026-04-19 01:34:40', 836, 'fb', '120246813233490184', 'paid', NULL, NULL, '152.59.166.218'),
(1258, '2026-04-19 01:36:31', 838, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.192.12.34'),
(1259, '2026-04-19 01:39:35', 838, 'web', '', 'direct', '', '', '106.192.12.34'),
(1260, '2026-04-19 01:40:17', 838, 'web', '', 'direct', '', '', '106.192.12.34'),
(1261, '2026-04-19 01:41:24', 839, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.194.50.50'),
(1262, '2026-04-19 01:44:05', 840, 'fb', '120242657481930473', 'paid', NULL, NULL, '49.42.134.187'),
(1263, '2026-04-19 01:45:52', 800, 'web', '', 'direct', '', '', '223.237.155.167'),
(1264, '2026-04-19 02:00:49', 792, 'web', '', 'direct', '', '', '42.104.243.59'),
(1265, '2026-04-19 02:02:20', 792, 'web', '', 'direct', NULL, NULL, '42.104.243.59'),
(1266, '2026-04-19 02:06:53', 841, 'ig', '120246868179990184', 'paid', NULL, NULL, '223.188.116.102'),
(1267, '2026-04-19 02:09:05', 838, 'web', '', 'direct', '', '', '106.192.8.34'),
(1268, '2026-04-19 02:10:22', 842, 'web', '', 'direct', NULL, NULL, '223.189.93.141'),
(1269, '2026-04-19 02:14:16', 843, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.2.170'),
(1270, '2026-04-19 02:23:01', 844, 'ig', '120246868179990184', 'paid', NULL, NULL, '157.51.93.107'),
(1271, '2026-04-19 02:26:51', 803, 'web', '', 'direct', '', '', '106.219.186.59'),
(1272, '2026-04-19 02:42:24', 845, 'fb', '120242657481930473', 'paid', NULL, NULL, '106.76.191.136'),
(1273, '2026-04-19 02:43:52', 845, 'web', '', 'direct', '', '', '106.76.191.136'),
(1274, '2026-04-19 02:44:20', 846, 'ig', '120242719762200473', 'paid', NULL, NULL, '157.48.174.156'),
(1275, '2026-04-19 02:50:13', 847, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.162.15'),
(1276, '2026-04-19 02:57:06', 847, 'web', '', 'direct', '', '', '152.56.178.76'),
(1277, '2026-04-19 03:05:24', 848, 'ig', '120246868180000184', 'paid', NULL, NULL, '223.187.33.241'),
(1278, '2026-04-19 03:07:25', 849, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.59.163.238'),
(1279, '2026-04-19 03:11:20', 821, 'web', '', 'direct', '', '', '106.202.27.54'),
(1280, '2026-04-19 03:28:32', 850, 'fb', '120246868180000184', 'paid', NULL, NULL, '1.39.115.210'),
(1281, '2026-04-19 03:30:06', 851, 'ig', '120246584445790640', 'paid', NULL, NULL, '157.32.81.30'),
(1282, '2026-04-19 03:45:53', 781, 'web', '', 'direct', NULL, NULL, '106.217.189.6'),
(1283, '2026-04-19 03:46:20', 742, 'web', '', 'direct', '', '', '157.42.23.91'),
(1284, '2026-04-19 03:47:34', 733, 'web', '', 'direct', '', '', '157.40.78.136'),
(1285, '2026-04-19 03:47:40', 711, 'web', '', 'direct', '', '', '157.51.220.135'),
(1286, '2026-04-19 03:47:57', 654, 'web', '', 'direct', '', '', '106.192.162.183'),
(1287, '2026-04-19 03:48:38', 656, 'web', '', 'direct', '', '', '183.83.235.209'),
(1288, '2026-04-19 03:49:01', 852, 'fb', '120242719762210473', 'paid', NULL, NULL, '223.185.220.49'),
(1289, '2026-04-19 03:49:05', 646, 'web', '', 'direct', '', '', '205.253.36.28'),
(1290, '2026-04-19 03:49:45', 688, 'web', '', 'direct', '', '', '152.59.150.237'),
(1291, '2026-04-19 03:50:19', 688, 'web', '', 'direct', '', '', '152.59.150.237'),
(1292, '2026-04-19 03:51:09', 454, 'web', '', 'direct', NULL, NULL, '110.224.84.171'),
(1293, '2026-04-19 03:52:47', 701, 'web', '', 'direct', '', '', '157.49.127.116'),
(1294, '2026-04-19 03:53:39', 684, 'web', '', 'direct', '', '', '106.216.231.249'),
(1295, '2026-04-19 03:56:42', 853, 'ig', '120242719762200473', 'paid', NULL, NULL, '152.57.94.227'),
(1296, '2026-04-19 03:58:30', 601, 'web', '', 'direct', '', '', '110.227.50.152'),
(1297, '2026-04-19 03:59:35', 601, 'web', '', 'direct', '', '', '110.227.50.152'),
(1298, '2026-04-19 04:00:23', 765, 'web', '', 'direct', '', '', '152.59.31.162'),
(1299, '2026-04-19 04:00:35', 636, 'web', '', 'direct', '', '', '103.153.104.89'),
(1300, '2026-04-19 04:02:32', 854, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.202.25.121'),
(1301, '2026-04-19 04:04:35', 616, 'web', '', 'direct', '', '', '171.79.48.10'),
(1302, '2026-04-19 04:05:16', 612, 'web', '', 'direct', '', '', '1.38.144.226'),
(1303, '2026-04-19 04:05:16', 690, 'web', '', 'direct', '', '', '223.188.117.145'),
(1304, '2026-04-19 04:06:45', 546, 'web', '', 'direct', '', '', '117.96.146.233'),
(1305, '2026-04-19 04:09:26', 855, 'ig', '120242657481930473', 'paid', NULL, NULL, '106.192.16.73'),
(1306, '2026-04-19 04:09:50', 703, 'web', '', 'direct', '', '', '152.59.79.13'),
(1307, '2026-04-19 04:19:43', 654, 'web', '', 'direct', '', '', '106.192.170.183'),
(1308, '2026-04-19 04:26:10', 788, 'web', '', 'direct', '', '', '117.205.217.56'),
(1309, '2026-04-19 04:35:53', 632, 'web', '', 'direct', '', '', '117.231.225.33'),
(1310, '2026-04-19 04:43:10', 856, 'ig', '120242719762200473', 'paid', NULL, NULL, '157.51.69.170'),
(1311, '2026-04-19 04:45:55', 235, 'web', '', 'direct', '', '', '157.38.133.232'),
(1312, '2026-04-19 04:46:04', 857, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.32.118.155'),
(1313, '2026-04-19 04:47:09', 490, 'web', '', 'direct', '', '', '49.43.106.163'),
(1314, '2026-04-19 04:47:31', 524, 'web', '', 'direct', '', '', '49.37.153.128'),
(1315, '2026-04-19 04:50:00', 858, 'ig', '120242719762200473', 'paid', NULL, NULL, '106.202.42.122'),
(1316, '2026-04-19 04:52:18', 654, 'web', '', 'direct', '', '', '106.192.164.183'),
(1317, '2026-04-19 04:54:18', 733, 'web', '', 'direct', '', '', '157.40.78.136'),
(1318, '2026-04-19 04:57:32', 472, 'web', '', 'direct', '', '', '36.252.248.34'),
(1319, '2026-04-19 04:58:22', 859, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.210.194.235'),
(1320, '2026-04-19 05:02:17', 860, 'fb', '120242312930250473', 'paid', NULL, NULL, '103.10.116.49'),
(1321, '2026-04-19 05:03:11', 638, 'web', '', 'direct', '', '', '223.181.205.53'),
(1322, '2026-04-19 05:04:17', 638, 'web', '', 'direct', '', '', '223.181.205.53'),
(1323, '2026-04-19 05:11:48', 861, 'ig', '120246868180000184', 'paid', NULL, NULL, '152.58.115.64'),
(1324, '2026-04-19 05:12:11', 537, 'web', '', 'direct', '', '', '152.59.177.147'),
(1325, '2026-04-19 05:12:44', 862, 'ig', '120246868180000184', 'paid', NULL, NULL, '47.11.8.31'),
(1326, '2026-04-19 05:13:12', 863, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.41.241.194'),
(1327, '2026-04-19 05:13:32', 842, 'web', '', 'direct', '', '', '223.189.93.141'),
(1328, '2026-04-19 05:13:59', 864, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.192.71.71'),
(1329, '2026-04-19 05:16:18', 514, 'web', '', 'direct', '', '', '152.59.0.180'),
(1330, '2026-04-19 05:17:48', 514, 'web', '', 'direct', '', '', '152.59.0.180'),
(1331, '2026-04-19 05:18:51', 863, 'web', '', 'direct', '', '', '157.41.241.194'),
(1332, '2026-04-19 05:20:25', 644, 'web', '', 'direct', '', '', '122.161.77.32'),
(1333, '2026-04-19 05:24:10', 706, 'web', '', 'direct', '', '', '223.182.243.171'),
(1334, '2026-04-19 05:25:27', 733, 'web', '', 'direct', '', '', '157.40.78.136'),
(1335, '2026-04-19 05:31:24', 798, 'web', '', 'direct', '', '', '223.185.202.220'),
(1336, '2026-04-19 05:32:34', 865, 'fb', '120242719762210473', 'paid', NULL, NULL, '106.217.56.90'),
(1337, '2026-04-19 05:35:03', 475, 'web', '', 'direct', '', '', '106.219.250.125'),
(1338, '2026-04-19 05:37:08', 866, 'web', '', 'direct', NULL, NULL, '106.221.185.122'),
(1339, '2026-04-19 05:38:40', 788, 'web', '', 'direct', '', '', '117.205.217.56'),
(1340, '2026-04-19 05:41:12', 677, 'web', '', 'direct', '', '', '157.50.74.204'),
(1341, '2026-04-19 05:41:13', 867, 'ig', '120246868179990184', 'paid', NULL, NULL, '157.49.63.41'),
(1342, '2026-04-19 05:41:40', 868, 'fb', '120246868180000184', 'paid', NULL, NULL, '157.46.4.173'),
(1343, '2026-04-19 05:43:44', 691, 'web', '', 'direct', '', '', '223.238.64.130'),
(1344, '2026-04-19 05:47:50', 451, 'web', '', 'direct', '', '', '163.223.48.189'),
(1345, '2026-04-19 05:47:53', 869, 'fb', '120242552172500473', 'paid', NULL, NULL, '223.239.121.145'),
(1346, '2026-04-19 05:48:09', 334, 'web', '', 'direct', '', '', '103.187.103.49'),
(1347, '2026-04-19 05:51:28', 451, 'web', '', 'direct', NULL, NULL, '163.223.48.189'),
(1348, '2026-04-19 05:52:09', 870, 'ig', '120242656907980473', 'paid', NULL, NULL, '152.57.54.157'),
(1349, '2026-04-19 05:52:24', 871, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.59.97.141'),
(1350, '2026-04-19 05:52:35', 872, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.51.206.168'),
(1351, '2026-04-19 05:54:56', 706, 'web', '', 'direct', '', '', '106.198.103.150'),
(1352, '2026-04-19 05:56:26', 873, 'fb', '120242552172500473', 'paid', NULL, NULL, '42.106.179.102'),
(1353, '2026-04-19 06:00:12', 475, 'web', '', 'direct', '', '', '106.219.253.125'),
(1354, '2026-04-19 06:02:30', 347, 'web', '', 'direct', '', '', '157.51.235.142'),
(1355, '2026-04-19 06:06:25', 874, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.59.199.71'),
(1356, '2026-04-19 06:07:42', 875, 'ig', '120242719762210473', 'paid', NULL, NULL, '47.9.91.5'),
(1357, '2026-04-19 06:09:56', 876, 'ig', '120246868179990184', 'paid', NULL, NULL, '223.185.44.217'),
(1358, '2026-04-19 06:12:31', 654, 'web', '', 'direct', '', '', '106.192.174.183'),
(1359, '2026-04-19 06:13:40', 666, 'web', '', 'direct', '', '', '49.42.157.168'),
(1360, '2026-04-19 06:22:11', 877, 'fb', '120242719762210473', 'paid', NULL, NULL, '157.42.26.107'),
(1361, '2026-04-19 06:22:22', 786, 'web', '', 'direct', '', '', '106.211.247.221'),
(1362, '2026-04-19 06:23:30', 691, 'web', '', 'direct', NULL, NULL, '152.59.205.166'),
(1363, '2026-04-19 06:25:29', 878, 'ig', '120242657481930473', 'paid', NULL, NULL, '59.153.120.195'),
(1364, '2026-04-19 06:25:57', 879, 'ig', '120246868180000184', 'paid', NULL, NULL, '110.224.95.167'),
(1365, '2026-04-19 06:27:52', 217, 'web', '', 'direct', '', '', '152.57.185.59'),
(1366, '2026-04-19 06:28:27', 733, 'web', '', 'direct', '', '', '157.40.66.232'),
(1367, '2026-04-19 06:30:54', 846, 'web', '', 'direct', '', '', '157.35.81.123'),
(1368, '2026-04-19 06:31:28', 880, 'ig', '120242719762200473', 'paid', NULL, NULL, '106.192.5.34'),
(1369, '2026-04-19 06:31:56', 881, 'fb', '120242719762210473', 'paid', NULL, NULL, '157.33.28.128'),
(1370, '2026-04-19 06:32:05', 882, 'fb-SiteLink', '120242552172500473', 'paid', NULL, NULL, '157.42.234.182'),
(1371, '2026-04-19 06:32:06', 472, 'web', '', 'direct', '', '', '36.252.248.34'),
(1372, '2026-04-19 06:32:27', 878, 'web', '', 'direct', '', '', '59.153.120.195'),
(1373, '2026-04-19 06:33:55', 878, 'web', '', 'direct', NULL, NULL, '59.153.120.195'),
(1374, '2026-04-19 06:35:30', 883, 'ig', '120246868179990184', 'paid', NULL, NULL, '152.57.78.27'),
(1375, '2026-04-19 06:35:57', 882, 'fb-SiteLink', '120242552172500473', 'paid', NULL, NULL, '157.42.234.182'),
(1376, '2026-04-19 06:36:57', 633, 'web', '', 'direct', '', '', '49.37.170.85'),
(1377, '2026-04-19 06:36:57', 882, 'fb', '120242552172500473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasv9wSIKwlzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6aJJyio2rh4u9I8m5ZqCwB-j3mO-7TLS3GdN3AMg-banaW2y2ueK78c_qI8A_aem_61ZPPwxUzcLXWwI0b7PvqA', '', '157.42.234.182'),
(1378, '2026-04-19 06:37:05', 878, 'web', '', 'direct', '', '', '59.153.120.195'),
(1379, '2026-04-19 06:37:33', 882, 'fb', '120242552172500473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasv9wSIKwlzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6aJJyio2rh4u9I8m5ZqCwB-j3mO-7TLS3GdN3AMg-banaW2y2ueK78c_qI8A_aem_61ZPPwxUzcLXWwI0b7PvqA', '', '157.42.234.182'),
(1380, '2026-04-19 06:37:51', 633, 'web', '', 'direct', '', '', '49.37.170.85'),
(1381, '2026-04-19 06:38:46', 884, 'ig', '120242719762200473', 'paid', NULL, NULL, '152.57.17.91'),
(1382, '2026-04-19 06:40:15', 882, 'fb', '120242552172500473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasv9wSIKwlzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6aJJyio2rh4u9I8m5ZqCwB-j3mO-7TLS3GdN3AMg-banaW2y2ueK78c_qI8A_aem_61ZPPwxUzcLXWwI0b7PvqA', '', '157.42.234.182'),
(1383, '2026-04-19 06:42:04', 885, 'fb', '120242656907980473', 'paid', NULL, NULL, '223.178.210.90'),
(1384, '2026-04-19 06:44:26', 652, 'web', '', 'direct', '', '', '110.226.205.35'),
(1385, '2026-04-19 06:44:37', 883, 'web', '', 'direct', '', '', '152.57.73.91'),
(1386, '2026-04-19 06:45:25', 652, 'web', '', 'direct', '', '', '110.226.205.35'),
(1387, '2026-04-19 06:56:37', 654, 'web', '', 'direct', '', '', '106.192.162.171'),
(1388, '2026-04-19 06:57:47', 886, 'fb', '120242656907980473', 'paid', NULL, NULL, '223.182.247.193'),
(1389, '2026-04-19 07:00:15', 886, 'web', '', 'direct', '', '', '223.182.247.193'),
(1390, '2026-04-19 07:00:27', 878, 'web', '', 'direct', '', '', '59.153.120.195'),
(1391, '2026-04-19 07:01:56', 886, 'web', '', 'direct', '', '', '223.182.247.193'),
(1392, '2026-04-19 07:05:06', 887, 'ig', '120246868180000184', 'paid', NULL, NULL, '106.192.130.169'),
(1393, '2026-04-19 07:09:58', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1394, '2026-04-19 07:18:07', 888, 'ig', '120246868180000184', 'paid', NULL, NULL, '223.237.190.99'),
(1395, '2026-04-19 07:18:12', 546, 'web', '', 'direct', '', '', '117.96.150.234'),
(1396, '2026-04-19 07:23:37', 889, 'ig', '120246584445790640', 'paid', NULL, NULL, '223.238.205.200'),
(1397, '2026-04-19 07:30:15', 890, 'fb', '120242719762200473', 'paid', NULL, NULL, '106.51.5.145'),
(1398, '2026-04-19 07:31:57', 652, 'web', '', 'direct', '', '', '110.226.205.35'),
(1399, '2026-04-19 07:32:16', 891, 'fb', '120242657481930473', 'paid', NULL, NULL, '152.59.163.182'),
(1400, '2026-04-19 07:33:15', 892, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.217.120.113'),
(1401, '2026-04-19 07:45:26', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1402, '2026-04-19 07:50:19', 777, 'web', '', 'direct', '', '', '157.32.119.66'),
(1403, '2026-04-19 07:51:31', 893, 'web', '', 'direct', NULL, NULL, '152.59.36.94'),
(1404, '2026-04-19 07:53:20', 764, 'web', '', 'direct', '', '', '106.198.68.82'),
(1405, '2026-04-19 07:56:16', 654, 'web', '', 'direct', '', '', '106.192.161.171'),
(1406, '2026-04-19 07:57:15', 684, 'web', '', 'direct', '', '', '106.202.109.231'),
(1407, '2026-04-19 08:00:14', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1408, '2026-04-19 08:15:20', 845, 'web', '', 'direct', '', '', '106.76.191.215'),
(1409, '2026-04-19 08:26:42', 764, 'web', '', 'direct', '', '', '106.198.68.82'),
(1410, '2026-04-19 08:27:20', 894, 'fb', '120242552172500473', 'paid', NULL, NULL, '1.39.140.23'),
(1411, '2026-04-19 08:27:47', 794, 'web', '', 'direct', '', '', '49.14.135.202'),
(1412, '2026-04-19 08:29:25', 733, 'web', '', 'direct', '', '', '157.40.66.232'),
(1413, '2026-04-19 08:31:16', 895, 'ig', '120242719762200473', 'paid', NULL, NULL, '47.15.187.126'),
(1414, '2026-04-19 08:31:58', 896, 'fb', '120246813305890184', 'paid', NULL, NULL, '106.195.32.155'),
(1415, '2026-04-19 08:32:53', 897, 'ig', '120242657481930473', 'paid', NULL, NULL, '157.50.90.39'),
(1416, '2026-04-19 08:33:12', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1417, '2026-04-19 08:41:32', 505, 'web', '', 'direct', '', '', '152.57.78.131'),
(1418, '2026-04-19 08:58:32', 451, 'web', '', 'direct', '', '', '106.66.44.59'),
(1419, '2026-04-19 09:07:37', 466, 'web', '', 'direct', '', '', '157.50.99.237'),
(1420, '2026-04-19 09:12:26', 898, 'fb', '120246868180000184', 'paid', NULL, NULL, '106.192.42.98'),
(1421, '2026-04-19 09:13:42', 824, 'web', '', 'direct', '', '', '49.34.198.17'),
(1422, '2026-04-19 09:16:40', 899, 'fb', '120242656907980473', 'paid', NULL, NULL, '106.192.25.58'),
(1423, '2026-04-19 09:22:14', 709, 'web', '', 'direct', '', '', '152.58.134.36'),
(1424, '2026-04-19 09:55:51', 634, 'web', '', 'direct', '', '', '27.61.160.81'),
(1425, '2026-04-19 09:57:53', 654, 'web', '', 'direct', '', '', '106.192.162.171'),
(1426, '2026-04-19 10:00:03', 900, 'fb', '120242719762210473', 'paid', NULL, NULL, '47.11.11.228'),
(1427, '2026-04-19 10:00:07', 630, 'web', '', 'direct', NULL, NULL, '157.51.33.15'),
(1428, '2026-04-19 10:04:31', 901, 'web', '', 'direct', NULL, NULL, '112.140.190.182'),
(1429, '2026-04-19 10:08:21', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1430, '2026-04-19 10:09:45', 902, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.221.86.92'),
(1431, '2026-04-19 10:34:48', 654, 'web', '', 'direct', '', '', '106.192.162.171'),
(1432, '2026-04-19 10:36:39', 903, 'fb', '120246813233490184', 'paid', NULL, NULL, '106.220.254.239'),
(1433, '2026-04-19 10:38:15', 904, 'ig', '120242656907980473', 'paid', NULL, NULL, '157.48.245.121'),
(1434, '2026-04-19 10:39:57', 905, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.57.142.251'),
(1435, '2026-04-19 10:41:32', 904, 'web', '', 'direct', '', '', '157.48.245.121'),
(1436, '2026-04-19 10:41:55', 905, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.57.142.251'),
(1437, '2026-04-19 10:42:42', 906, 'fb', '120242312930250473', 'paid', NULL, NULL, '47.11.6.137'),
(1438, '2026-04-19 10:43:23', 907, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.219.255.116'),
(1439, '2026-04-19 10:55:29', 908, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.58.176.27'),
(1440, '2026-04-19 10:56:58', 654, 'web', '', 'direct', '', '', '106.192.162.171'),
(1441, '2026-04-19 11:05:26', 498, 'web', '', 'direct', '', '', '106.195.64.205'),
(1442, '2026-04-19 11:06:30', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1443, '2026-04-19 11:07:45', 909, 'ig', '120242719762210473', 'paid', NULL, NULL, '106.222.233.19'),
(1444, '2026-04-19 11:08:09', 910, 'fb', '120242552172500473', 'paid', NULL, NULL, '106.208.152.117'),
(1445, '2026-04-19 11:14:05', 911, 'ig', '120242657481930473', 'paid', NULL, NULL, '49.36.98.155'),
(1446, '2026-04-19 11:15:15', 910, 'web', '', 'direct', '', '', '106.208.152.117'),
(1447, '2026-04-19 11:28:47', 912, 'ig', '120242719762200473', 'paid', NULL, NULL, '106.208.140.5'),
(1448, '2026-04-19 11:31:46', 913, 'fb', '120246813233490184', 'paid', NULL, NULL, '106.216.201.29'),
(1449, '2026-04-19 11:31:55', 914, 'fb', '120246813233490184', 'paid', NULL, NULL, '106.216.201.29'),
(1450, '2026-04-19 11:32:02', 466, 'web', '', 'direct', '', '', '157.50.99.237'),
(1451, '2026-04-19 11:32:31', 915, 'fb', '120246813233490184', 'paid', NULL, NULL, '106.216.201.29'),
(1452, '2026-04-19 11:37:42', 916, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.49.106.255'),
(1453, '2026-04-19 11:41:01', 910, 'web', '', 'direct', '', '', '106.208.152.117'),
(1454, '2026-04-19 11:45:36', 917, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.51.30.95'),
(1455, '2026-04-19 11:55:19', 654, 'web', '', 'direct', '', '', '106.192.165.171'),
(1456, '2026-04-19 12:06:22', 918, 'fb', '120242657481930473', 'paid', NULL, NULL, '49.42.180.124'),
(1457, '2026-04-19 12:15:29', 919, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.120.70'),
(1458, '2026-04-19 12:18:21', 920, 'fb', '120246584445790640', 'paid', NULL, NULL, '106.196.11.10'),
(1459, '2026-04-19 12:21:41', 921, 'ig', '120242656907980473', 'paid', NULL, NULL, '157.42.249.194'),
(1460, '2026-04-19 12:28:39', 788, 'web', '', 'direct', '', '', '117.205.217.56'),
(1461, '2026-04-19 12:36:37', 788, 'web', '', 'direct', '', '', '117.205.217.56'),
(1462, '2026-04-19 12:42:42', 922, 'fb', '120242657481930473', 'paid', NULL, NULL, '157.51.32.106'),
(1463, '2026-04-19 12:44:22', 505, 'web', '', 'direct', '', '', '152.57.76.20'),
(1464, '2026-04-19 12:49:23', 923, 'fb', '120242656907980473', 'paid', NULL, NULL, '223.236.96.217'),
(1465, '2026-04-19 12:56:50', 634, 'web', '', 'direct', '', '', '27.61.160.81'),
(1466, '2026-04-19 12:58:11', 924, 'fb', '120246584445790640', 'paid', NULL, NULL, '47.15.2.10'),
(1467, '2026-04-19 13:08:17', 466, 'web', '', 'direct', NULL, NULL, '157.50.99.237'),
(1468, '2026-04-19 13:08:52', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1469, '2026-04-19 13:12:02', 925, 'fb', '120246813305890184', 'paid', NULL, NULL, '157.48.250.37'),
(1470, '2026-04-19 13:12:55', 926, 'ig', '120246813233490184', 'paid', NULL, NULL, '49.43.224.221'),
(1471, '2026-04-19 13:14:27', 927, 'ig', '120246813233490184', 'paid', NULL, NULL, '106.192.137.167'),
(1472, '2026-04-19 13:16:23', 927, 'web', '', 'direct', NULL, NULL, '106.192.137.167'),
(1473, '2026-04-19 13:16:59', 927, 'web', '', 'direct', NULL, NULL, '106.192.137.167'),
(1474, '2026-04-19 13:29:29', 928, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.219.157.249'),
(1475, '2026-04-19 13:49:52', 929, 'ig', '120242552172500473', 'paid', NULL, NULL, '42.108.73.245'),
(1476, '2026-04-19 13:55:57', 930, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.34.73.223'),
(1477, '2026-04-19 13:58:10', 878, 'web', '', 'direct', '', '', '152.58.32.110'),
(1478, '2026-04-19 14:02:24', 927, 'web', '', 'direct', '', '', '106.192.137.167'),
(1479, '2026-04-19 14:06:43', 908, 'web', '', 'direct', '', '', '152.58.176.1'),
(1480, '2026-04-19 14:12:10', 746, 'web', '', 'direct', '', '', '223.228.131.126'),
(1481, '2026-04-19 14:15:39', 700, 'web', '', 'direct', '', '', '47.11.43.102'),
(1482, '2026-04-19 14:19:07', 904, 'web', '', 'direct', '', '', '157.48.246.5'),
(1483, '2026-04-19 14:20:47', 150, 'web', '', 'direct', '', '', '152.56.162.138'),
(1484, '2026-04-19 14:21:35', 463, 'web', '', 'direct', '', '', '47.11.105.72'),
(1485, '2026-04-19 14:33:56', 347, 'web', '', 'direct', '', '', '157.51.232.92'),
(1486, '2026-04-19 14:35:35', 927, 'web', '', 'direct', '', '', '106.192.141.167'),
(1487, '2026-04-19 14:36:21', 927, 'web', '', 'direct', '', '', '106.192.141.167'),
(1488, '2026-04-19 14:41:53', 931, 'fb', '120242657481930473', 'paid', NULL, NULL, '152.58.176.192'),
(1489, '2026-04-19 14:44:25', 654, 'web', '', 'direct', '', '', '106.192.172.181'),
(1490, '2026-04-19 14:46:45', 929, 'web', '', 'direct', '', '', '1.38.113.36'),
(1491, '2026-04-19 14:50:30', 392, 'web', '', 'direct', '', '', '1.38.104.83'),
(1492, '2026-04-19 14:56:46', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1493, '2026-04-19 14:57:42', 931, 'web', '', 'direct', '', '', '152.58.176.192'),
(1494, '2026-04-19 14:58:23', 921, 'web', '', 'direct', '', '', '157.42.199.177'),
(1495, '2026-04-19 14:58:34', 932, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.32.117.154'),
(1496, '2026-04-19 15:23:12', 933, 'ig', '120242657481930473', 'paid', NULL, NULL, '27.61.184.192'),
(1497, '2026-04-19 15:25:15', 927, 'web', '', 'direct', '', '', '106.192.141.167'),
(1498, '2026-04-19 15:27:15', 452, 'web', '', 'direct', '', '', '42.111.145.133'),
(1499, '2026-04-19 15:29:21', 921, 'web', '', 'direct', NULL, NULL, '157.42.199.177'),
(1500, '2026-04-19 15:29:46', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1501, '2026-04-19 15:38:17', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1502, '2026-04-19 15:52:41', 583, 'web', '', 'direct', '', '', '157.48.2.166'),
(1503, '2026-04-19 15:53:09', 934, 'fb-SiteLink', '120246584445790640', 'paid', NULL, NULL, '152.59.143.16'),
(1504, '2026-04-19 15:54:18', 473, 'web', '', 'direct', '', '', '49.36.222.253'),
(1505, '2026-04-19 15:55:52', 473, 'web', '', 'direct', '', '', '49.36.222.253'),
(1506, '2026-04-19 16:00:53', 487, 'web', '', 'direct', '', '', '42.108.99.71'),
(1507, '2026-04-19 16:12:04', 935, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.157.74'),
(1508, '2026-04-19 16:15:22', 880, 'web', '', 'direct', '', '', '106.222.233.45'),
(1509, '2026-04-19 16:18:21', 936, 'ig', '120246584445790640', 'paid', NULL, NULL, '223.237.178.57'),
(1510, '2026-04-19 16:26:02', 937, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.58.30.178'),
(1511, '2026-04-19 16:32:56', 910, 'web', '', 'direct', NULL, NULL, '106.194.1.11'),
(1512, '2026-04-19 16:34:27', 733, 'web', '', 'direct', '', '', '157.40.93.149'),
(1513, '2026-04-19 16:46:19', 639, 'web', '', 'direct', '', '', '152.59.126.33'),
(1514, '2026-04-19 16:46:36', 759, 'web', '', 'direct', '', '', '106.77.185.48'),
(1515, '2026-04-19 16:46:56', 672, 'web', '', 'direct', '', '', '152.58.86.66'),
(1516, '2026-04-19 16:47:05', 749, 'web', '', 'direct', '', '', '152.58.87.149'),
(1517, '2026-04-19 16:47:31', 769, 'web', '', 'direct', '', '', '152.59.3.21'),
(1518, '2026-04-19 16:47:34', 790, 'web', '', 'direct', '', '', '152.58.176.43'),
(1519, '2026-04-19 16:47:37', 749, 'web', '', 'direct', '', '', '152.58.87.149'),
(1520, '2026-04-19 16:48:10', 790, 'web', '', 'direct', '', '', '152.58.176.43'),
(1521, '2026-04-19 16:49:48', 303, 'web', '', 'direct', '', '', '122.183.37.145'),
(1522, '2026-04-19 16:53:43', 938, 'ig', '120246813233490184', 'paid', NULL, NULL, '106.192.57.226'),
(1523, '2026-04-19 16:57:19', 750, 'web', '', 'direct', '', '', '223.228.53.157'),
(1524, '2026-04-19 16:57:30', 614, 'web', '', 'direct', '', '', '49.37.171.8'),
(1525, '2026-04-19 17:02:39', 754, 'web', '', 'direct', '', '', '124.253.89.170'),
(1526, '2026-04-19 17:07:05', 929, 'web', '', 'direct', '', '', '42.108.78.10'),
(1527, '2026-04-19 17:26:56', 787, 'web', '', 'direct', '', '', '152.59.89.84'),
(1528, '2026-04-19 17:31:23', 939, 'fb', '120242657481940473', 'paid', NULL, NULL, '106.193.89.221'),
(1529, '2026-04-19 17:31:27', 927, 'web', '', 'direct', '', '', '106.192.135.167'),
(1530, '2026-04-19 17:32:11', 940, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.33.200.149'),
(1531, '2026-04-19 17:32:21', 927, 'web', '', 'direct', '', '', '106.192.135.167'),
(1532, '2026-04-19 17:39:28', 941, 'ig', '120246813305890184', 'paid', NULL, NULL, '117.99.246.180'),
(1533, '2026-04-19 17:46:29', 821, 'web', '', 'direct', '', '', '27.60.32.77'),
(1534, '2026-04-19 17:46:34', 475, 'web', '', 'direct', '', '', '106.219.251.41'),
(1535, '2026-04-19 17:46:38', 810, 'web', '', 'direct', '', '', '152.59.39.176'),
(1536, '2026-04-19 17:47:12', 303, 'web', '', 'direct', '', '', '122.183.37.145'),
(1537, '2026-04-19 17:47:26', 931, 'web', '', 'direct', '', '', '152.58.177.237'),
(1538, '2026-04-19 17:48:34', 892, 'web', '', 'direct', '', '', '106.217.120.113'),
(1539, '2026-04-19 17:50:52', 617, 'web', '', 'direct', '', '', '106.221.185.224'),
(1540, '2026-04-19 17:53:53', 590, 'web', '', 'direct', '', '', '171.79.44.92'),
(1541, '2026-04-19 17:54:55', 454, 'web', '', 'direct', NULL, NULL, '106.192.170.234'),
(1542, '2026-04-19 17:55:04', 836, 'web', '', 'direct', NULL, NULL, '152.59.166.50'),
(1543, '2026-04-19 17:58:49', 601, 'web', '', 'direct', '', '', '110.227.60.116'),
(1544, '2026-04-19 18:04:08', 900, 'web', '', 'direct', '', '', '47.11.6.126'),
(1545, '2026-04-19 18:04:12', 942, 'fb', '120242552172500473', 'paid', NULL, NULL, '157.119.83.5'),
(1546, '2026-04-19 18:04:23', 809, 'web', '', 'direct', NULL, NULL, '27.61.39.72'),
(1547, '2026-04-19 18:05:39', 943, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.50.155.211'),
(1548, '2026-04-19 18:06:20', 917, 'web', '', 'direct', '', '', '157.51.6.247'),
(1549, '2026-04-19 18:21:23', 786, 'web', '', 'direct', '', '', '27.62.40.74'),
(1550, '2026-04-19 18:36:20', 944, 'ig', '120246584445790640', 'paid', NULL, NULL, '152.59.16.119'),
(1551, '2026-04-19 18:50:50', 467, 'web', '', 'direct', '', '', '106.215.162.86'),
(1552, '2026-04-19 18:53:44', 945, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.51.31.250'),
(1553, '2026-04-19 18:53:48', 946, 'web', '', 'direct', NULL, NULL, '152.59.12.82'),
(1554, '2026-04-19 18:54:58', 604, 'web', '', 'direct', '', '', '152.58.45.78'),
(1555, '2026-04-19 18:57:51', 947, 'fb', '120242719762200473', 'paid', NULL, NULL, '106.215.162.196'),
(1556, '2026-04-19 19:07:58', 948, 'ig', '120242721352300473', 'paid', NULL, NULL, '42.104.219.20'),
(1557, '2026-04-19 19:08:00', 465, 'web', '', 'direct', '', '', '106.206.176.182'),
(1558, '2026-04-19 19:08:25', 949, 'ig', '120242656907980473', 'paid', NULL, NULL, '152.59.2.119'),
(1559, '2026-04-19 19:11:28', 950, 'ig', '120246725113080640', 'paid', NULL, NULL, '223.184.246.230'),
(1560, '2026-04-19 19:13:16', 951, 'fb', '120242657481930473', 'paid', NULL, NULL, '157.35.46.206'),
(1561, '2026-04-19 19:14:02', 952, 'ig', '120246725113050640', 'paid', NULL, NULL, '152.59.150.11'),
(1562, '2026-04-19 19:15:02', 953, 'ig', '120242721352300473', 'paid', NULL, NULL, '223.231.153.250'),
(1563, '2026-04-19 19:24:58', 954, 'fb', '120246868753230184', 'paid', NULL, NULL, '117.98.36.58'),
(1564, '2026-04-19 19:26:56', 955, 'ig', '120242657481930473', 'paid', NULL, NULL, '106.195.39.201'),
(1565, '2026-04-19 19:28:11', 955, 'web', '', 'direct', '', '', '106.195.39.201'),
(1566, '2026-04-19 19:28:46', 956, 'ig', '120242721687860473', 'paid', NULL, NULL, '152.58.121.36'),
(1567, '2026-04-19 19:29:38', 955, 'web', '', 'direct', '', '', '106.195.39.201'),
(1568, '2026-04-19 19:31:40', 957, 'ig', '120246725113070640', 'paid', NULL, NULL, '152.58.131.162'),
(1569, '2026-04-19 19:32:00', 958, 'ig', '120242657481930473', 'paid', NULL, NULL, '152.57.203.44'),
(1570, '2026-04-19 19:42:34', 959, 'ig', '120242721352290473', 'paid', NULL, NULL, '152.59.40.6'),
(1571, '2026-04-19 19:44:38', 960, 'ig', '120246725113080640', 'paid', NULL, NULL, '106.215.170.11'),
(1572, '2026-04-19 19:51:44', 961, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.58.7.183'),
(1573, '2026-04-19 19:52:34', 961, 'ig', '120246813233490184', 'paid', NULL, NULL, '152.58.7.183'),
(1574, '2026-04-19 19:56:22', 962, 'fb', '120242657481930473', 'paid', NULL, NULL, '157.32.36.69'),
(1575, '2026-04-19 19:59:31', 963, 'ig', '120246657393540640', 'paid', NULL, NULL, '106.219.159.74'),
(1576, '2026-04-19 20:00:41', 961, 'web', '', 'direct', '', '', '152.58.7.183'),
(1577, '2026-04-19 20:10:44', 964, 'fb', '120242721352290473', 'paid', NULL, NULL, '223.237.170.85'),
(1578, '2026-04-19 20:20:32', 965, 'fb', '120242721352300473', 'paid', NULL, NULL, '1.38.144.165'),
(1579, '2026-04-19 20:22:43', 966, 'ig', '120242721687820473', 'paid', NULL, NULL, '152.58.16.186'),
(1580, '2026-04-19 20:22:58', 967, 'ig', '120242721352300473', 'paid', NULL, NULL, '106.192.32.12'),
(1581, '2026-04-19 20:23:33', 968, 'fb', '120246725113050640', 'paid', NULL, NULL, '103.14.232.70'),
(1582, '2026-04-19 20:24:19', 969, 'ig', '120246869432870184', 'paid', NULL, NULL, '152.58.152.236'),
(1583, '2026-04-19 20:24:36', 967, 'web', '', 'direct', '', '', '106.192.32.12'),
(1584, '2026-04-19 20:26:22', 970, 'ig', '120246725113070640', 'paid', NULL, NULL, '42.105.141.159'),
(1585, '2026-04-19 20:35:49', 971, 'fb', '120242721352290473', 'paid', NULL, NULL, '106.195.41.188'),
(1586, '2026-04-19 20:43:25', 972, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.221.244.153'),
(1587, '2026-04-19 20:56:43', 973, 'fb', '120242656907980473', 'paid', NULL, NULL, '49.15.93.19'),
(1588, '2026-04-19 20:59:59', 974, 'ig', '120246868753230184', 'paid', NULL, NULL, '27.59.79.150'),
(1589, '2026-04-19 21:02:38', 975, 'ig', '120242312930250473', 'paid', NULL, NULL, '117.99.220.56'),
(1590, '2026-04-19 21:02:39', 976, 'ig', '120246725113070640', 'paid', NULL, NULL, '157.32.32.14'),
(1591, '2026-04-19 21:02:46', 973, 'web', '', 'direct', '', '', '49.15.93.19'),
(1592, '2026-04-19 21:04:46', 976, 'web', '', 'direct', '', '', '157.32.32.14'),
(1593, '2026-04-19 21:05:19', 976, 'web', '', 'direct', '', '', '157.32.32.14'),
(1594, '2026-04-19 21:05:38', 900, 'web', '', 'direct', '', '', '47.11.2.171'),
(1595, '2026-04-19 21:08:37', 977, 'ig', '120246869432880184', 'paid', NULL, NULL, '49.204.28.121'),
(1596, '2026-04-19 21:08:42', 978, 'fb', '120242657481930473', 'paid', NULL, NULL, '27.60.165.161'),
(1597, '2026-04-19 21:09:40', 974, 'web', '', 'direct', NULL, NULL, '27.59.79.150'),
(1598, '2026-04-19 21:22:20', 979, 'fb', '120242721687860473', 'paid', NULL, NULL, '152.57.109.133'),
(1599, '2026-04-19 21:28:03', 961, 'web', '', 'direct', NULL, NULL, '152.58.7.250'),
(1600, '2026-04-19 21:31:33', 961, 'web', '', 'direct', NULL, NULL, '152.58.7.250'),
(1601, '2026-04-19 21:32:53', 961, 'web', '', 'direct', NULL, NULL, '152.58.7.250'),
(1602, '2026-04-19 21:36:30', 980, 'ig', '120242656907980473', 'paid', NULL, NULL, '223.237.159.210'),
(1603, '2026-04-19 21:36:47', 961, 'web', '', 'direct', '', '', '152.58.7.182'),
(1604, '2026-04-19 21:45:42', 981, 'ig', '120246657137350640', 'paid', NULL, NULL, '122.183.42.40'),
(1605, '2026-04-19 21:50:56', 982, 'ig', '120246725113050640', 'paid', NULL, NULL, '223.188.8.218'),
(1606, '2026-04-19 22:04:53', 983, 'ig', '120246869432880184', 'paid', NULL, NULL, '49.14.156.155'),
(1607, '2026-04-19 22:12:29', 984, 'fb', '120242721687820473', 'paid', NULL, NULL, '157.51.90.203'),
(1608, '2026-04-19 22:15:36', 985, 'fb', '120242657481930473', 'paid', NULL, NULL, '152.58.200.228'),
(1609, '2026-04-19 22:38:57', 986, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.202.4.147'),
(1610, '2026-04-19 22:41:35', 436, 'ig', '120246868753230184', 'paid', 'PAZXh0bgNhZW0BMABhZGlkAasz49tkDUhzcnRjBmFwcF9pZA8xMjQwMjQ1NzQyODc0MTQAAafZlWTUcyqS9M5PIPEcLfMH-fj0E4soexxq3k-p8P1DMVRIUiMUuS3kHIFNbg_aem_VW6B232RSw1H50rA_57n0A', '', '106.222.224.8'),
(1611, '2026-04-19 23:00:45', 987, 'fb', '120246725113070640', 'paid', NULL, NULL, '27.63.59.169'),
(1612, '2026-04-19 23:08:32', 988, 'ig', '120246813305890184', 'paid', NULL, NULL, '152.57.192.102'),
(1613, '2026-04-19 23:16:01', 954, 'web', '', 'direct', '', '', '117.98.36.77');
INSERT INTO `source_entry` (`id`, `rec_date`, `user_id`, `utm_source`, `utm_campaign`, `utm_medium`, `source_id`, `utm_referral`, `client_ip`) VALUES
(1614, '2026-04-19 23:33:24', 989, 'fb', '120246657393550640', 'paid', NULL, NULL, '42.104.220.21'),
(1615, '2026-04-19 23:42:47', 637, 'web', '', 'direct', NULL, NULL, '169.149.227.156'),
(1616, '2026-04-19 23:48:26', 990, 'fb', '120242721687860473', 'paid', NULL, NULL, '103.105.178.32'),
(1617, '2026-04-20 00:01:40', 461, 'web', '', 'direct', NULL, NULL, '106.219.164.254'),
(1618, '2026-04-20 00:03:06', 342, 'web', '', 'direct', '', '', '157.50.113.116'),
(1619, '2026-04-20 00:03:15', 991, 'ig', '120246657393540640', 'paid', NULL, NULL, '42.104.223.9'),
(1620, '2026-04-20 00:08:24', 992, 'ig', '120246868753230184', 'paid', NULL, NULL, '157.32.200.3'),
(1621, '2026-04-20 00:15:53', 989, 'web', '', 'direct', '', '', '42.104.220.21'),
(1622, '2026-04-20 00:30:39', 993, 'ig', '120246725113070640', 'paid', NULL, NULL, '157.46.4.213'),
(1623, '2026-04-20 00:30:57', 764, 'web', '', 'direct', '', '', '106.198.68.82'),
(1624, '2026-04-20 00:31:24', 994, 'fb', '120246868753230184', 'paid', NULL, NULL, '106.221.111.6'),
(1625, '2026-04-20 00:35:53', 988, 'web', '', 'direct', '', '', '152.57.199.233'),
(1626, '2026-04-20 00:44:22', 995, 'fb', '120246813233490184', 'paid', NULL, NULL, '45.112.71.197'),
(1627, '2026-04-20 01:02:21', 996, 'fb', '120242719762210473', 'paid', NULL, NULL, '47.15.91.187'),
(1628, '2026-04-20 01:03:38', 997, 'fb', '120246869432880184', 'paid', NULL, NULL, '152.58.56.89'),
(1629, '2026-04-20 01:26:16', 607, 'web', '', 'direct', '', '', '49.37.161.156'),
(1630, '2026-04-20 01:32:00', 998, 'ig', '120246868753240184', 'paid', NULL, NULL, '27.61.55.120'),
(1631, '2026-04-20 01:32:57', 999, 'fb', '120246813305890184', 'paid', NULL, NULL, '27.59.53.129'),
(1632, '2026-04-20 01:33:39', 607, 'web', '', 'direct', '', '', '49.37.161.156'),
(1633, '2026-04-20 01:40:40', 1000, 'fb', '120246813305890184', 'paid', NULL, NULL, '152.56.132.59'),
(1634, '2026-04-20 01:41:59', 996, 'web', '', 'direct', '', '', '157.48.231.128'),
(1635, '2026-04-20 01:44:11', 1001, 'ig', '120242721352300473', 'paid', NULL, NULL, '106.192.25.196'),
(1636, '2026-04-20 01:55:50', 1002, 'ig', '120242721687820473', 'paid', NULL, NULL, '157.50.143.187'),
(1637, '2026-04-20 01:59:47', 1003, 'fb', '120242721687820473', 'paid', NULL, NULL, '152.58.1.168'),
(1638, '2026-04-20 02:03:34', 1004, 'fb', '120246869432870184', 'paid', NULL, NULL, '117.99.229.245'),
(1639, '2026-04-20 02:12:56', 1005, 'fb', '120242657481930473', 'paid', NULL, NULL, '157.51.94.176'),
(1640, '2026-04-20 02:18:46', 1006, 'ig', '120246868753230184', 'paid', NULL, NULL, '152.59.29.60'),
(1641, '2026-04-20 02:19:35', 1007, 'ig', '120246725113070640', 'paid', NULL, NULL, '106.195.12.247'),
(1642, '2026-04-20 02:29:07', 706, 'fb', '120242721687820473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaswHlBmP5lzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR57lECbOyf3_YFu91bOJQA_IycYvLu7WQ9ewRXq7Y2CTRwjE-SJrPKQPeY7kw_aem_rurnM48MvpP8GLNy0bvVcg', '', '223.185.217.16'),
(1643, '2026-04-20 02:29:25', 1008, 'fb', '120246725113070640', 'paid', NULL, NULL, '1.39.79.119'),
(1644, '2026-04-20 02:30:12', 554, 'web', '', 'direct', '', '', '106.217.68.126'),
(1645, '2026-04-20 02:35:01', 1009, 'fb', '120246657393540640', 'paid', NULL, NULL, '103.82.187.120'),
(1646, '2026-04-20 02:38:19', 1010, 'fb', '120242721687860473', 'paid', NULL, NULL, '49.34.253.126'),
(1647, '2026-04-20 02:39:52', 1011, 'ig', '120246869432880184', 'paid', NULL, NULL, '106.192.65.186'),
(1648, '2026-04-20 02:43:28', 927, 'web', '', 'direct', '', '', '106.192.131.39'),
(1649, '2026-04-20 02:46:11', 992, 'web', '', 'direct', '', '', '157.32.196.190'),
(1650, '2026-04-20 02:47:41', 936, 'web', '', 'direct', NULL, NULL, '106.192.78.140'),
(1651, '2026-04-20 02:51:20', 1012, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.67.181.47'),
(1652, '2026-04-20 02:52:24', 1013, 'ig', '120246584445790640', 'paid', NULL, NULL, '49.42.33.191'),
(1653, '2026-04-20 02:53:56', 1013, 'web', '', 'direct', '', '', '49.42.33.168'),
(1654, '2026-04-20 02:55:54', 762, 'web', '', 'direct', '', '', '152.58.31.226'),
(1655, '2026-04-20 02:57:18', 1014, 'ig', '120246868753230184', 'paid', NULL, NULL, '106.202.119.18'),
(1656, '2026-04-20 03:02:02', 947, 'web', '', 'direct', '', '', '223.188.20.200'),
(1657, '2026-04-20 03:02:40', 716, 'web', '', 'direct', NULL, NULL, '106.202.33.12'),
(1658, '2026-04-20 03:04:35', 716, 'web', '', 'direct', '', '', '106.202.33.12'),
(1659, '2026-04-20 03:06:07', 1015, 'fb', '120246584445790640', 'paid', NULL, NULL, '152.59.46.17'),
(1660, '2026-04-20 03:10:21', 1016, 'ig', '120246868676020184', 'paid', NULL, NULL, '114.31.143.194'),
(1661, '2026-04-20 03:19:56', 1017, 'ig', '120246868753240184', 'paid', NULL, NULL, '1.38.110.22'),
(1662, '2026-04-20 03:21:24', 1018, 'ig', '120246725113070640', 'paid', NULL, NULL, '171.61.30.229'),
(1663, '2026-04-20 03:25:34', 1019, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(1664, '2026-04-20 03:26:38', 1012, 'web', '', 'direct', '', '', '106.67.190.181'),
(1665, '2026-04-20 03:37:02', 1020, 'fb', '120242719762200473', 'paid', NULL, NULL, '110.224.84.224'),
(1666, '2026-04-20 03:38:07', 1021, 'web', '', 'direct', NULL, NULL, '103.14.232.70'),
(1667, '2026-04-20 03:40:39', 989, 'web', '', 'direct', '', '', '42.104.228.42'),
(1668, '2026-04-20 03:43:37', 1022, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.188.130.233'),
(1669, '2026-04-20 03:46:09', 733, 'web', '', 'direct', '', '', '103.249.38.111'),
(1670, '2026-04-20 03:46:13', 690, 'web', '', 'direct', '', '', '106.222.179.83'),
(1671, '2026-04-20 03:47:42', 814, 'web', '', 'direct', '', '', '1.38.232.31'),
(1672, '2026-04-20 03:49:05', 684, 'web', '', 'direct', NULL, NULL, '106.216.232.1'),
(1673, '2026-04-20 03:49:18', 1023, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.215.136.47'),
(1674, '2026-04-20 03:50:08', 1024, 'ig', '120246657393550640', 'paid', NULL, NULL, '152.59.177.198'),
(1675, '2026-04-20 03:55:02', 949, 'web', '', 'direct', '', '', '152.59.2.97'),
(1676, '2026-04-20 03:55:34', 1025, 'fb', '120246869432880184', 'paid', NULL, NULL, '59.91.172.98'),
(1677, '2026-04-20 03:57:57', 894, 'web', '', 'direct', '', '', '1.39.176.108'),
(1678, '2026-04-20 04:01:37', 889, 'web', '', 'direct', '', '', '223.228.210.31'),
(1679, '2026-04-20 04:02:38', 894, 'web', '', 'direct', '', '', '1.39.176.108'),
(1680, '2026-04-20 04:03:22', 1026, 'fb', '120242721352300473', 'paid', NULL, NULL, '106.198.79.181'),
(1681, '2026-04-20 04:04:13', 878, 'web', '', 'direct', '', '', '152.59.63.164'),
(1682, '2026-04-20 04:04:45', 1027, 'ig', '120246869432870184', 'paid', NULL, NULL, '47.11.7.221'),
(1683, '2026-04-20 04:06:54', 894, 'web', '', 'direct', '', '', '1.39.176.108'),
(1684, '2026-04-20 04:08:47', 971, 'web', '', 'direct', '', '', '106.195.35.194'),
(1685, '2026-04-20 04:09:45', 546, 'web', '', 'direct', '', '', '223.225.104.103'),
(1686, '2026-04-20 04:17:04', 1028, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.49.113.67'),
(1687, '2026-04-20 04:17:24', 868, 'web', '', 'direct', '', '', '157.46.0.189'),
(1688, '2026-04-20 04:19:27', 848, 'web', '', 'direct', NULL, NULL, '106.221.180.106'),
(1689, '2026-04-20 04:19:28', 1029, 'ig', '120246584445790640', 'paid', NULL, NULL, '157.51.138.69'),
(1690, '2026-04-20 04:19:29', 906, 'web', '', 'direct', '', '', '47.11.22.230'),
(1691, '2026-04-20 04:20:44', 906, 'web', '', 'direct', '', '', '47.11.22.230'),
(1692, '2026-04-20 04:21:12', 906, 'web', '', 'direct', '', '', '47.11.22.230'),
(1693, '2026-04-20 04:26:43', 709, 'web', '', 'direct', '', '', '152.58.134.211'),
(1694, '2026-04-20 04:27:02', 700, 'web', '', 'direct', '', '', '47.11.43.4'),
(1695, '2026-04-20 04:34:29', 1030, 'ig', '120242721352300473', 'paid', NULL, NULL, '47.15.28.247'),
(1696, '2026-04-20 04:35:43', 1031, 'fb', '120246584445790640', 'paid', NULL, NULL, '1.38.1.125'),
(1697, '2026-04-20 04:36:20', 1030, 'web', '', 'direct', '', '', '47.15.28.247'),
(1698, '2026-04-20 04:36:23', 787, 'web', '', 'direct', '', '', '152.59.89.84'),
(1699, '2026-04-20 04:36:48', 1030, 'web', '', 'direct', '', '', '47.15.28.247'),
(1700, '2026-04-20 04:38:21', 964, 'web', '', 'direct', '', '', '223.231.144.175'),
(1701, '2026-04-20 04:38:53', 964, 'web', '', 'direct', '', '', '223.231.144.175'),
(1702, '2026-04-20 04:46:01', 890, 'web', '', 'direct', '', '', '106.51.5.145'),
(1703, '2026-04-20 04:46:32', 1032, 'ig', '120246725113050640', 'paid', NULL, NULL, '152.59.199.219'),
(1704, '2026-04-20 04:47:09', 1032, 'ig', '120246725113050640', 'paid', NULL, NULL, '152.59.199.219'),
(1705, '2026-04-20 04:47:11', 964, 'web', '', 'direct', '', '', '223.231.144.175'),
(1706, '2026-04-20 04:47:37', 641, 'web', '', 'direct', '', '', '157.51.38.184'),
(1707, '2026-04-20 04:50:39', 643, 'web', '', 'direct', '', '', '27.60.172.222'),
(1708, '2026-04-20 04:52:05', 1033, 'ig', '120242721352300473', 'paid', NULL, NULL, '152.58.62.55'),
(1709, '2026-04-20 04:52:16', 647, 'web', '', 'direct', '', '', '49.34.239.37'),
(1710, '2026-04-20 04:53:33', 793, 'web', '', 'direct', '', '', '122.177.242.123'),
(1711, '2026-04-20 04:53:45', 797, 'web', '', 'direct', '', '', '223.231.195.148'),
(1712, '2026-04-20 04:54:15', 1034, 'fb', '120246868676020184', 'paid', NULL, NULL, '49.15.254.22'),
(1713, '2026-04-20 04:55:24', 1035, 'fb', '120242656907980473', 'paid', NULL, NULL, '152.57.68.40'),
(1714, '2026-04-20 04:55:59', 906, 'web', '', 'direct', '', '', '47.11.22.230'),
(1715, '2026-04-20 04:56:14', 1036, 'ig', '120246657137350640', 'paid', NULL, NULL, '42.106.204.147'),
(1716, '2026-04-20 04:57:31', 790, 'web', '', 'direct', '', '', '152.56.156.143'),
(1717, '2026-04-20 04:57:51', 949, 'web', '', 'direct', '', '', '152.59.2.68'),
(1718, '2026-04-20 04:57:55', 677, 'ig', '120246813305890184', 'paid', 'PAYW9leARSkZJleHRuA2FlbQEwAGFkaWQBqzPW9JwemHNydGMGYXBwX2lkDzU2NzA2NzM0MzM1MjQyNwABp44w5Ys-Znwm1IGM02MnmKfgBPXaWCFBlPERfFWt6V58TMMiY8UVlGds8qsX_aem_CvzEsyUb-920HJz4fi8Khw', '', '157.50.74.38'),
(1719, '2026-04-20 04:58:06', 790, 'web', '', 'direct', '', '', '152.56.156.143'),
(1720, '2026-04-20 05:02:37', 1037, 'ig', '120242721352300473', 'paid', NULL, NULL, '45.127.45.149'),
(1721, '2026-04-20 05:05:26', 1030, 'web', '', 'direct', '', '', '47.15.30.90'),
(1722, '2026-04-20 05:06:16', 803, 'web', '', 'direct', '', '', '106.219.211.167'),
(1723, '2026-04-20 05:06:58', 1038, 'ig', '120242721352300473', 'paid', NULL, NULL, '152.56.129.102'),
(1724, '2026-04-20 05:07:29', 742, 'web', '', 'direct', NULL, NULL, '157.42.22.105'),
(1725, '2026-04-20 05:09:17', 973, 'web', '', 'direct', NULL, NULL, '49.15.92.50'),
(1726, '2026-04-20 05:15:08', 1039, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.205.178.74'),
(1727, '2026-04-20 05:21:44', 735, 'web', '', 'direct', '', '', '157.49.45.136'),
(1728, '2026-04-20 05:27:30', 1040, 'fb', '120246869432870184', 'paid', NULL, NULL, '157.40.94.11'),
(1729, '2026-04-20 05:28:50', 780, 'web', '', 'direct', '', '', '106.198.96.155'),
(1730, '2026-04-20 05:29:31', 1041, 'ig', '120242721352290473', 'paid', NULL, NULL, '152.57.227.88'),
(1731, '2026-04-20 05:31:01', 723, 'web', '', 'direct', '', '', '157.51.30.227'),
(1732, '2026-04-20 05:32:08', 1042, 'ig', '120246869432870184', 'paid', NULL, NULL, '152.58.87.10'),
(1733, '2026-04-20 05:35:09', 1010, 'fb', '120246868753230184', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasz49tjSfhzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR4FAKCz5rVGCjXddhKRPeyW-u1bmusQci6yUDdHSXj85JqCmoom2kzAOXNxqg_aem_5tJwp5DZuSdII4AC5Y8bnQ', '', '112.140.190.182'),
(1734, '2026-04-20 05:37:13', 1040, 'web', '', 'direct', '', '', '157.40.94.11'),
(1735, '2026-04-20 05:41:43', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1736, '2026-04-20 05:43:11', 1043, 'fb', '120242721687820473', 'paid', NULL, NULL, '106.219.226.54'),
(1737, '2026-04-20 05:43:23', 794, 'web', '', 'direct', '', '', '27.97.222.54'),
(1738, '2026-04-20 05:44:12', 1044, 'fb', '120242721687820473', 'paid', NULL, NULL, '152.59.150.244'),
(1739, '2026-04-20 05:45:46', 556, 'web', '', 'direct', '', '', '27.61.36.105'),
(1740, '2026-04-20 05:47:07', 480, 'web', '', 'direct', '', '', '157.37.189.71'),
(1741, '2026-04-20 05:47:45', 1045, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.78.24.209'),
(1742, '2026-04-20 05:48:20', 571, 'web', '', 'direct', '', '', '49.34.103.101'),
(1743, '2026-04-20 05:48:28', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1744, '2026-04-20 05:49:48', 532, 'web', '', 'direct', '', '', '106.192.109.36'),
(1745, '2026-04-20 05:49:58', 235, 'web', '', 'direct', '', '', '223.233.120.54'),
(1746, '2026-04-20 05:50:29', 571, 'web', '', 'direct', NULL, NULL, '49.34.103.101'),
(1747, '2026-04-20 05:51:24', 480, 'web', '', 'direct', '', '', '157.37.189.71'),
(1748, '2026-04-20 05:51:26', 571, 'web', '', 'direct', '', '', '49.34.103.101'),
(1749, '2026-04-20 05:53:35', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1750, '2026-04-20 05:54:12', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1751, '2026-04-20 05:55:43', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1752, '2026-04-20 05:58:48', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1753, '2026-04-20 05:59:04', 1046, 'ig', '120242721352300473', 'paid', NULL, NULL, '157.51.205.192'),
(1754, '2026-04-20 06:00:18', 1042, 'web', '', 'direct', NULL, NULL, '152.58.87.10'),
(1755, '2026-04-20 06:01:54', 1042, 'web', '', 'direct', '', '', '152.58.87.10'),
(1756, '2026-04-20 06:05:13', 412, 'web', '', 'direct', '', '', '106.202.16.235'),
(1757, '2026-04-20 06:05:45', 1047, 'ig', '120246725113070640', 'paid', NULL, NULL, '106.192.21.71'),
(1758, '2026-04-20 06:07:45', 1047, 'web', '', 'direct', '', '', '106.192.21.71'),
(1759, '2026-04-20 06:08:08', 735, 'web', '', 'direct', '', '', '157.49.35.192'),
(1760, '2026-04-20 06:10:38', 735, 'web', '', 'direct', '', '', '157.49.35.192'),
(1761, '2026-04-20 06:11:04', 1048, 'ig', '120246725113070640', 'paid', NULL, NULL, '152.58.33.175'),
(1762, '2026-04-20 06:11:22', 537, 'web', '', 'direct', NULL, NULL, '152.58.184.245'),
(1763, '2026-04-20 06:13:08', 1049, 'fb', '120246868753230184', 'paid', NULL, NULL, '223.184.146.231'),
(1764, '2026-04-20 06:15:55', 1050, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.192.117.159'),
(1765, '2026-04-20 06:16:24', 1051, 'ig', '120242721687860473', 'paid', NULL, NULL, '106.200.30.127'),
(1766, '2026-04-20 06:16:51', 314, 'web', '', 'direct', '', '', '106.78.79.233'),
(1767, '2026-04-20 06:17:10', 1052, 'fb', '120246657393540640', 'paid', NULL, NULL, '106.192.201.96'),
(1768, '2026-04-20 06:17:47', 1053, 'ig', '120246868753240184', 'paid', NULL, NULL, '45.248.93.177'),
(1769, '2026-04-20 06:18:08', 1051, 'web', '', 'direct', '', '', '106.200.30.127'),
(1770, '2026-04-20 06:19:10', 1054, 'fb', '120242721687860473', 'paid', NULL, NULL, '223.186.184.20'),
(1771, '2026-04-20 06:19:29', 1055, 'fb', '120246725113050640', 'paid', NULL, NULL, '157.51.100.163'),
(1772, '2026-04-20 06:20:04', 571, 'web', '', 'direct', '', '', '49.34.125.114'),
(1773, '2026-04-20 06:21:19', 571, 'web', '', 'direct', '', '', '49.34.125.114'),
(1774, '2026-04-20 06:22:04', 946, 'web', '', 'direct', '', '', '152.59.105.31'),
(1775, '2026-04-20 06:23:12', 1030, 'web', '', 'direct', '', '', '47.15.31.70'),
(1776, '2026-04-20 06:26:25', 711, 'web', '', 'direct', '', '', '157.51.211.215'),
(1777, '2026-04-20 06:26:36', 571, 'web', '', 'direct', '', '', '49.34.125.114'),
(1778, '2026-04-20 06:29:18', 964, 'web', '', 'direct', '', '', '223.231.144.175'),
(1779, '2026-04-20 06:31:00', 1056, 'fb', '120246657137350640', 'paid', NULL, NULL, '106.222.222.202'),
(1780, '2026-04-20 06:31:01', 1057, 'fb', '120242721352290473', 'paid', NULL, NULL, '152.57.98.186'),
(1781, '2026-04-20 06:37:16', 1058, 'ig', '120246657137350640', 'paid', NULL, NULL, '223.228.55.210'),
(1782, '2026-04-20 06:39:52', 730, 'web', '', 'direct', '', '', '152.59.200.113'),
(1783, '2026-04-20 06:42:54', 537, 'web', '', 'direct', '', '', '152.58.184.226'),
(1784, '2026-04-20 06:43:38', 537, 'web', '', 'direct', '', '', '152.58.184.226'),
(1785, '2026-04-20 06:44:20', 1059, 'ig', '120246868753240184', 'paid', NULL, NULL, '223.237.190.170'),
(1786, '2026-04-20 06:46:47', 1059, 'web', '', 'direct', '', '', '223.237.190.170'),
(1787, '2026-04-20 06:47:35', 1059, 'web', '', 'direct', '', '', '223.237.190.170'),
(1788, '2026-04-20 06:48:20', 1060, 'ig', '120246869432880184', 'paid', NULL, NULL, '152.59.27.187'),
(1789, '2026-04-20 06:52:30', 1061, 'ig', '120246869432870184', 'paid', NULL, NULL, '152.59.2.86'),
(1790, '2026-04-20 06:54:57', 1030, 'web', '', 'direct', '', '', '47.15.28.182'),
(1791, '2026-04-20 06:57:24', 1062, 'ig', '120246869432870184', 'paid', NULL, NULL, '45.120.121.69'),
(1792, '2026-04-20 06:58:45', 367, 'web', '', 'direct', '', '', '223.239.109.1'),
(1793, '2026-04-20 06:59:47', 1063, 'fb', '120246657393540640', 'paid', NULL, NULL, '1.39.109.3'),
(1794, '2026-04-20 07:00:42', 1064, 'ig', '120246725113070640', 'paid', NULL, NULL, '152.57.87.204'),
(1795, '2026-04-20 07:01:03', 906, 'web', '', 'direct', '', '', '47.11.20.59'),
(1796, '2026-04-20 07:03:27', 1065, 'fb', '120246657393550640', 'paid', NULL, NULL, '110.224.103.230'),
(1797, '2026-04-20 07:04:47', 1066, 'ig', '120246868753230184', 'paid', NULL, NULL, '157.45.251.113'),
(1798, '2026-04-20 07:08:38', 1067, 'fb', '120242656907980473', 'paid', NULL, NULL, '152.58.153.53'),
(1799, '2026-04-20 07:11:36', 1068, 'ig', '120246725113080640', 'paid', NULL, NULL, '223.187.119.146'),
(1800, '2026-04-20 07:14:29', 1056, 'web', '', 'direct', '', '', '106.222.222.202'),
(1801, '2026-04-20 07:17:32', 1069, 'ig', '120246868753230184', 'paid', NULL, NULL, '157.51.25.68'),
(1802, '2026-04-20 07:17:56', 571, 'web', '', 'direct', '', '', '49.34.120.10'),
(1803, '2026-04-20 07:22:24', 733, 'web', '', 'direct', '', '', '157.40.125.49'),
(1804, '2026-04-20 07:26:37', 571, 'fb', '120246813305890184', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasz1vSRcDhzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR43ChfYN40VeBxmukiJNhsnz1I-jdd3_d1D3wIZmr82CVgGc8ahSSGMyvp_Yw_aem_6455syXlLOzKdfkgCT5rnA', '', '49.34.112.225'),
(1805, '2026-04-20 07:30:53', 797, 'web', '', 'direct', '', '', '223.231.195.148'),
(1806, '2026-04-20 07:30:53', 1070, 'web', '', 'direct', NULL, NULL, '152.56.133.34'),
(1807, '2026-04-20 07:37:29', 1071, 'fb', '120242657481930473', 'paid', NULL, NULL, '42.108.238.232'),
(1808, '2026-04-20 07:42:46', 546, 'web', '', 'direct', '', '', '106.208.218.155'),
(1809, '2026-04-20 07:43:29', 1071, 'web', '', 'direct', NULL, NULL, '42.108.238.232'),
(1810, '2026-04-20 07:48:43', 1072, 'ig', '120246725113080640', 'paid', NULL, NULL, '223.228.143.146'),
(1811, '2026-04-20 07:51:55', 971, 'web', '', 'direct', '', '', '106.195.44.15'),
(1812, '2026-04-20 07:54:16', 1073, 'fb', '120242312930250473', 'paid', NULL, NULL, '103.61.113.1'),
(1813, '2026-04-20 07:55:41', 1074, 'ig', '120246869432870184', 'paid', NULL, NULL, '42.111.145.124'),
(1814, '2026-04-20 07:58:09', 906, 'web', '', 'direct', '', '', '47.11.20.59'),
(1815, '2026-04-20 07:58:43', 571, 'web', '', 'direct', '', '', '49.34.127.32'),
(1816, '2026-04-20 08:03:43', 993, 'web', '', 'direct', '', '', '157.46.4.213'),
(1817, '2026-04-20 08:06:21', 1075, 'fb', '120242721352300473', 'paid', NULL, NULL, '106.219.178.128'),
(1818, '2026-04-20 08:06:36', 1076, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.219.199.117'),
(1819, '2026-04-20 08:09:05', 1076, 'web', '', 'direct', NULL, NULL, '106.219.199.117'),
(1820, '2026-04-20 08:10:44', 571, 'web', '', 'direct', '', '', '49.34.127.32'),
(1821, '2026-04-20 08:18:09', 910, 'web', '', 'direct', '', '', '106.194.1.11'),
(1822, '2026-04-20 08:18:58', 910, 'web', '', 'direct', '', '', '106.194.1.11'),
(1823, '2026-04-20 08:21:29', 996, 'web', '', 'direct', '', '', '157.48.205.9'),
(1824, '2026-04-20 08:22:24', 996, 'web', '', 'direct', NULL, NULL, '157.48.205.9'),
(1825, '2026-04-20 08:24:29', 1077, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.192.117.37'),
(1826, '2026-04-20 08:28:35', 1078, 'ig', '120242721352290473', 'paid', NULL, NULL, '106.192.24.194'),
(1827, '2026-04-20 08:29:37', 571, 'web', '', 'direct', '', '', '49.34.115.191'),
(1828, '2026-04-20 08:30:54', 1031, 'web', '', 'direct', '', '', '1.38.1.125'),
(1829, '2026-04-20 08:32:52', 1079, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.193.77.240'),
(1830, '2026-04-20 08:34:30', 1080, 'ig', '120242721352290473', 'paid', NULL, NULL, '106.76.180.58'),
(1831, '2026-04-20 08:36:31', 1079, 'web', '', 'direct', '', '', '106.193.77.240'),
(1832, '2026-04-20 08:39:47', 1079, 'web', '', 'direct', '', '', '106.193.77.240'),
(1833, '2026-04-20 08:45:37', 1055, 'web', '', 'direct', '', '', '157.51.82.232'),
(1834, '2026-04-20 08:46:14', 1055, 'web', '', 'direct', '', '', '157.51.82.232'),
(1835, '2026-04-20 08:46:58', 556, 'web', '', 'direct', '', '', '27.61.36.105'),
(1836, '2026-04-20 08:50:30', 1081, 'fb', '120246869432870184', 'paid', NULL, NULL, '117.96.55.149'),
(1837, '2026-04-20 08:55:50', 1043, 'web', '', 'direct', '', '', '106.219.226.54'),
(1838, '2026-04-20 08:56:30', 1030, 'web', '', 'direct', '', '', '47.15.25.6'),
(1839, '2026-04-20 08:56:42', 1043, 'web', '', 'direct', NULL, NULL, '106.219.226.54'),
(1840, '2026-04-20 08:58:26', 1082, 'ig', '120246657393540640', 'paid', NULL, NULL, '223.237.177.50'),
(1841, '2026-04-20 08:58:49', 1030, 'web', '', 'direct', '', '', '47.15.25.6'),
(1842, '2026-04-20 09:04:40', 707, 'web', '', 'direct', NULL, NULL, '47.11.41.81'),
(1843, '2026-04-20 09:07:58', 1083, 'ig', '120242721352300473', 'paid', NULL, NULL, '157.32.117.237'),
(1844, '2026-04-20 09:09:43', 560, 'web', '', 'direct', '', '', '157.48.199.171'),
(1845, '2026-04-20 09:12:49', 499, 'web', '', 'direct', '', '', '152.56.141.227'),
(1846, '2026-04-20 09:13:38', 499, 'web', '', 'direct', '', '', '152.56.141.227'),
(1847, '2026-04-20 09:17:34', 1030, 'web', '', 'direct', NULL, NULL, '157.49.173.225'),
(1848, '2026-04-20 09:19:33', 723, 'web', '', 'direct', '', '', '157.51.10.194'),
(1849, '2026-04-20 09:23:03', 716, 'fb', '120246869432870184', 'paid', NULL, NULL, '106.202.40.50'),
(1850, '2026-04-20 09:27:04', 1084, 'fb', '120242721352300473', 'paid', NULL, NULL, '106.205.179.141'),
(1851, '2026-04-20 09:27:08', 1085, 'ig', '120242721352290473', 'paid', NULL, NULL, '152.58.63.73'),
(1852, '2026-04-20 09:27:18', 1030, 'web', '', 'direct', '', '', '157.49.169.90'),
(1853, '2026-04-20 09:28:14', 716, 'web', '', 'direct', '', '', '106.202.40.50'),
(1854, '2026-04-20 09:30:24', 880, 'web', '', 'direct', '', '', '106.192.21.240'),
(1855, '2026-04-20 09:31:18', 1086, 'ig', '120246868753230184', 'paid', NULL, NULL, '106.215.149.247'),
(1856, '2026-04-20 09:33:37', 1087, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.48.236.108'),
(1857, '2026-04-20 09:35:09', 764, 'web', '', 'direct', '', '', '106.198.70.85'),
(1858, '2026-04-20 09:40:59', 1088, 'ig', '120246584445790640', 'paid', NULL, NULL, '157.50.94.95'),
(1859, '2026-04-20 09:41:57', 1089, 'ig', '120242312930250473', 'paid', NULL, NULL, '103.216.143.213'),
(1860, '2026-04-20 09:45:11', 1090, 'ig', '120242312930250473', 'paid', NULL, NULL, '42.104.224.64'),
(1861, '2026-04-20 09:47:08', 723, 'web', '', 'direct', '', '', '157.51.6.190'),
(1862, '2026-04-20 09:50:27', 1091, 'ig', '120242656907980473', 'paid', NULL, NULL, '42.106.13.146'),
(1863, '2026-04-20 09:50:44', 1092, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.76.177.129'),
(1864, '2026-04-20 09:50:52', 571, 'web', '', 'direct', '', '', '49.34.120.59'),
(1865, '2026-04-20 09:52:13', 1093, 'ig', '120242721352290473', 'paid', NULL, NULL, '223.228.157.35'),
(1866, '2026-04-20 09:52:15', 1094, 'ig', '120242721687860473', 'paid', NULL, NULL, '152.57.162.180'),
(1867, '2026-04-20 09:52:31', 687, 'web', '', 'direct', NULL, NULL, '157.49.161.179'),
(1868, '2026-04-20 09:54:17', 687, 'web', '', 'direct', NULL, NULL, '157.49.161.179'),
(1869, '2026-04-20 09:55:37', 1030, 'web', '', 'direct', '', '', '157.49.172.103'),
(1870, '2026-04-20 09:57:53', 193, 'web', '', 'direct', '', '', '27.59.108.87'),
(1871, '2026-04-20 10:04:33', 1030, 'web', '', 'direct', '', '', '157.49.172.103'),
(1872, '2026-04-20 10:08:20', 657, 'web', '', 'direct', NULL, NULL, '117.206.164.253'),
(1873, '2026-04-20 10:09:47', 1095, 'ig', '120246869432870184', 'paid', NULL, NULL, '223.187.91.61'),
(1874, '2026-04-20 10:14:39', 592, 'web', '', 'direct', '', '', '49.36.70.212'),
(1875, '2026-04-20 10:24:58', 951, 'web', '', 'direct', '', '', '157.42.215.80'),
(1876, '2026-04-20 10:33:40', 1096, 'ig', '120246584445790640', 'paid', NULL, NULL, '223.185.73.29'),
(1877, '2026-04-20 10:43:50', 1030, 'web', '', 'direct', '', '', '157.49.168.62'),
(1878, '2026-04-20 10:50:39', 1097, 'fb', '120242657481930473', 'paid', NULL, NULL, '103.170.183.198'),
(1879, '2026-04-20 10:53:52', 1098, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.56.140.28'),
(1880, '2026-04-20 10:54:36', 1099, 'fb', '120242312930250473', 'paid', NULL, NULL, '106.192.121.4'),
(1881, '2026-04-20 11:02:10', 1010, 'web', '', 'direct', '', '', '112.140.189.157'),
(1882, '2026-04-20 11:04:29', 1100, 'ig', '120246869432870184', 'paid', NULL, NULL, '152.56.10.193'),
(1883, '2026-04-20 11:17:07', 1101, 'fb', '120242312930250473', 'paid', NULL, NULL, '152.58.139.69'),
(1884, '2026-04-20 11:23:53', 544, 'ig', '120242656907980473', 'paid', 'PAZXh0bgNhZW0BMABhZGlkAaswDzcJoAlzcnRjBmFwcF9pZA81NjcwNjczNDMzNTI0MjcAAafjpkuoXUvxUS1J4CWae-Y_doJLQr4zltco-nN2v_bzkHwpAT5rmi6i4K2H9A_aem_ZlBt87HxuWV8qbVwknH6HQ', '', '42.106.216.42'),
(1885, '2026-04-20 11:37:39', 910, 'web', '', 'direct', '', '', '171.76.234.175'),
(1886, '2026-04-20 11:39:40', 1102, 'ig', '120242721352300473', 'paid', NULL, NULL, '117.98.120.105'),
(1887, '2026-04-20 11:41:57', 1103, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.119.58'),
(1888, '2026-04-20 11:47:34', 561, 'web', '', 'direct', '', '', '27.59.95.229'),
(1889, '2026-04-20 11:49:25', 1079, 'web', '', 'direct', NULL, NULL, '106.193.77.240'),
(1890, '2026-04-20 11:50:08', 1079, 'web', '', 'direct', '', '', '106.193.77.240'),
(1891, '2026-04-20 11:53:02', 1104, 'ig', '120242552172500473', 'paid', NULL, NULL, '152.57.104.149'),
(1892, '2026-04-20 11:54:34', 1105, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(1893, '2026-04-20 11:57:09', 1030, 'web', '', 'direct', '', '', '157.49.174.43'),
(1894, '2026-04-20 12:06:20', 1093, 'web', '', 'direct', '', '', '106.192.100.64'),
(1895, '2026-04-20 12:21:00', 1106, 'ig', '120242552172500473', 'paid', NULL, NULL, '114.31.140.140'),
(1896, '2026-04-20 12:23:10', 1106, 'web', '', 'direct', '', '', '114.31.140.140'),
(1897, '2026-04-20 12:29:17', 1107, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.48.249.127'),
(1898, '2026-04-20 12:31:20', 1108, 'ig', '120242552172500473', 'paid', NULL, NULL, '27.63.203.177'),
(1899, '2026-04-20 12:31:51', 1080, 'web', '', 'direct', '', '', '106.76.191.1'),
(1900, '2026-04-20 12:33:16', 1108, 'web', '', 'direct', '', '', '27.63.203.177'),
(1901, '2026-04-20 12:40:26', 1109, 'ig', '120246869432870184', 'paid', NULL, NULL, '106.200.25.210'),
(1902, '2026-04-20 12:51:27', 1091, 'web', '', 'direct', '', '', '42.106.13.146'),
(1903, '2026-04-20 13:02:25', 571, 'web', '', 'direct', '', '', '49.34.114.177'),
(1904, '2026-04-20 13:04:58', 1080, 'web', '', 'direct', '', '', '106.76.190.88'),
(1905, '2026-04-20 13:09:34', 1110, 'fb', '120246813305890184', 'paid', NULL, NULL, '47.15.108.255'),
(1906, '2026-04-20 13:11:53', 1109, 'web', '', 'direct', '', '', '106.200.25.210'),
(1907, '2026-04-20 13:30:34', 1111, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.57.127.172'),
(1908, '2026-04-20 13:31:03', 764, 'web', '', 'direct', '', '', '106.198.70.85'),
(1909, '2026-04-20 13:42:53', 1095, 'web', '', 'direct', '', '', '49.42.197.235'),
(1910, '2026-04-20 13:56:09', 1099, 'web', '', 'direct', '', '', '106.192.125.4'),
(1911, '2026-04-20 14:03:49', 1080, 'web', '', 'direct', NULL, NULL, '106.76.190.235'),
(1912, '2026-04-20 14:17:02', 1112, 'web', '', 'direct', NULL, NULL, '223.228.180.38'),
(1913, '2026-04-20 14:39:25', 1113, 'web', '', 'direct', NULL, NULL, '157.48.189.252'),
(1914, '2026-04-20 14:40:03', 1114, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.221.66.19'),
(1915, '2026-04-20 14:46:19', 493, 'web', '', 'direct', '', '', '152.56.6.28'),
(1916, '2026-04-20 14:47:47', 1115, 'ig', '120246813305890184', 'paid', NULL, NULL, '106.192.23.96'),
(1917, '2026-04-20 14:52:32', 570, 'web', '', 'direct', '', '', '171.76.166.33'),
(1918, '2026-04-20 14:54:34', 1116, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.35.70.75'),
(1919, '2026-04-20 14:56:04', 1117, 'ig', '120242656907980473', 'paid', NULL, NULL, '157.49.123.239'),
(1920, '2026-04-20 15:02:56', 560, 'web', '', 'direct', '', '', '157.48.230.196'),
(1921, '2026-04-20 15:03:07', 1118, 'fb', '120246584445790640', 'paid', NULL, NULL, '171.79.57.112'),
(1922, '2026-04-20 15:06:45', 1063, 'web', '', 'direct', '', '', '1.39.118.101'),
(1923, '2026-04-20 15:07:56', 1063, 'web', '', 'direct', '', '', '1.39.118.101'),
(1924, '2026-04-20 15:12:44', 1119, 'ig', '120242312930250473', 'paid', NULL, NULL, '152.59.61.235'),
(1925, '2026-04-20 15:14:18', 566, 'web', '', 'direct', '', '', '106.194.44.170'),
(1926, '2026-04-20 15:16:13', 1120, 'web', '', 'direct', NULL, NULL, '1.39.118.101'),
(1927, '2026-04-20 15:25:22', 1121, 'ig', '120242721352300473', 'paid', NULL, NULL, '106.192.168.65'),
(1928, '2026-04-20 15:45:48', 1119, 'web', '', 'direct', '', '', '152.59.61.111'),
(1929, '2026-04-20 15:46:12', 1119, 'web', '', 'direct', '', '', '152.59.61.111'),
(1930, '2026-04-20 15:48:15', 1122, 'ig', '120242721352300473', 'paid', NULL, NULL, '47.11.115.1'),
(1931, '2026-04-20 15:49:47', 713, 'web', '', 'direct', '', '', '223.178.87.55'),
(1932, '2026-04-20 15:50:26', 527, 'web', '', 'direct', '', '', '27.59.124.213'),
(1933, '2026-04-20 15:50:32', 1123, 'web', '', 'direct', NULL, NULL, '223.178.87.55'),
(1934, '2026-04-20 15:54:27', 478, 'web', '', 'direct', '', '', '157.49.208.128'),
(1935, '2026-04-20 15:56:05', 1124, 'ig', '120242656907980473', 'paid', NULL, NULL, '106.192.5.203'),
(1936, '2026-04-20 15:56:34', 1121, 'web', '', 'direct', '', '', '106.192.168.65'),
(1937, '2026-04-20 15:57:30', 1125, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.48.190.138'),
(1938, '2026-04-20 16:06:54', 1126, 'ig', '120246813305890184', 'paid', NULL, NULL, '157.51.210.23'),
(1939, '2026-04-20 16:07:59', 565, 'web', '', 'direct', '', '', '27.61.47.222'),
(1940, '2026-04-20 16:08:51', 565, 'web', '', 'direct', NULL, NULL, '27.61.47.222'),
(1941, '2026-04-20 16:16:48', 741, 'web', '', 'direct', '', '', '152.57.83.5'),
(1942, '2026-04-20 16:19:02', 596, 'web', '', 'direct', '', '', '152.58.31.130'),
(1943, '2026-04-20 16:28:50', 1115, 'web', '', 'direct', '', '', '106.192.7.175'),
(1944, '2026-04-20 16:37:31', 575, 'web', '', 'direct', '', '', '152.58.78.224'),
(1945, '2026-04-20 16:46:30', 821, 'web', '', 'direct', '', '', '223.238.104.50'),
(1946, '2026-04-20 16:47:09', 929, 'web', '', 'direct', '', '', '42.108.77.110'),
(1947, '2026-04-20 16:47:12', 821, 'web', '', 'direct', '', '', '223.238.104.50'),
(1948, '2026-04-20 16:47:17', 1127, 'fb', '120246584445790640', 'paid', NULL, NULL, '106.206.215.24'),
(1949, '2026-04-20 16:48:50', 1128, 'ig', '120242721352300473', 'paid', NULL, NULL, '49.35.216.79'),
(1950, '2026-04-20 16:50:04', 1127, 'fb', '120246584445790640', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaszobSvopBzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR7FGUZ6PWvKLkrxxCN5OROFnwd9OAs4HTb6q1Xq_0qJKvtAsYHQF9sH1d8o9A_aem_1EVPR7UAPiqZ2x1pVnX3Pw', '', '106.206.215.24'),
(1951, '2026-04-20 16:56:20', 911, 'web', '', 'direct', '', '', '49.32.237.86'),
(1952, '2026-04-20 16:56:43', 633, 'web', '', 'direct', '', '', '106.192.231.75'),
(1953, '2026-04-20 16:59:48', 1129, 'fb', '120242312930250473', 'paid', NULL, NULL, '223.185.32.195'),
(1954, '2026-04-20 17:05:48', 932, 'web', '', 'direct', '', '', '157.32.213.121'),
(1955, '2026-04-20 17:19:09', 593, 'web', '', 'direct', '', '', '223.237.186.217'),
(1956, '2026-04-20 17:19:51', 929, 'web', '', 'direct', '', '', '42.108.77.110'),
(1957, '2026-04-20 17:19:51', 853, 'web', '', 'direct', '', '', '157.51.146.36'),
(1958, '2026-04-20 17:21:48', 1130, 'ig', '120246813305890184', 'paid', NULL, NULL, '152.58.63.220'),
(1959, '2026-04-20 17:25:35', 1, 'web', '', 'direct', '', '', '223.181.48.229'),
(1960, '2026-04-20 17:26:45', 1, 'web', '', 'direct', '', '', '223.181.48.229'),
(1961, '2026-04-20 17:36:53', 927, 'web', '', 'direct', '', '', '106.192.134.147'),
(1962, '2026-04-20 17:48:02', 1125, 'web', '', 'direct', '', '', '157.35.109.93'),
(1963, '2026-04-20 17:51:41', 972, 'web', '', 'direct', '', '', '106.206.192.13'),
(1964, '2026-04-20 17:53:47', 1028, 'web', '', 'direct', '', '', '157.49.113.66'),
(1965, '2026-04-20 17:55:49', 963, 'web', '', 'direct', '', '', '106.219.155.130'),
(1966, '2026-04-20 18:02:40', 929, 'web', '', 'direct', '', '', '42.108.77.110'),
(1967, '2026-04-20 18:05:58', 461, 'web', '', 'direct', '', '', '106.219.164.254'),
(1968, '2026-04-20 18:07:26', 1036, 'web', '', 'direct', '', '', '42.111.111.7'),
(1969, '2026-04-20 18:09:11', 1075, 'web', '', 'direct', '', '', '106.192.170.150'),
(1970, '2026-04-20 18:15:33', 601, 'web', '', 'direct', '', '', '110.227.48.168'),
(1971, '2026-04-20 18:22:44', 972, 'web', '', 'direct', '', '', '106.206.207.13'),
(1972, '2026-04-20 18:39:19', 1131, 'ig', '120243691862380382', 'paid', NULL, NULL, '152.59.171.142'),
(1973, '2026-04-20 18:47:05', 929, 'web', '', 'direct', '', '', '42.108.77.110'),
(1974, '2026-04-20 18:51:13', 1132, 'web', '', 'direct', NULL, NULL, '157.42.5.224'),
(1975, '2026-04-20 19:04:41', 1133, 'ig', '120246759040120640', 'paid', NULL, NULL, '223.188.130.52'),
(1976, '2026-04-20 19:05:42', 1134, 'ig', '120246759743310640', 'paid', NULL, NULL, '110.224.91.214'),
(1977, '2026-04-20 19:05:56', 1135, 'ig', '120243425160500382', 'paid', NULL, NULL, '152.56.132.196'),
(1978, '2026-04-20 19:09:33', 1136, 'ig', '120246759743310640', 'paid', NULL, NULL, '49.37.203.114'),
(1979, '2026-04-20 19:10:55', 1137, 'ig', '120246759040120640', 'paid', NULL, NULL, '152.57.105.93'),
(1980, '2026-04-20 19:18:17', 979, 'web', '', 'direct', '', '', '152.57.131.93'),
(1981, '2026-04-20 19:19:13', 1138, 'ig', '120246759040120640', 'paid', NULL, NULL, '115.96.219.74'),
(1982, '2026-04-20 19:19:39', 1139, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.58.43.243'),
(1983, '2026-04-20 19:19:42', 1140, 'ig', '120246758709140640', 'paid', NULL, NULL, '223.184.184.210'),
(1984, '2026-04-20 19:21:53', 1141, 'fb', '120242816105390473', 'paid', NULL, NULL, '106.202.106.79'),
(1985, '2026-04-20 19:21:53', 929, 'web', '', 'direct', '', '', '42.108.77.110'),
(1986, '2026-04-20 19:22:11', 1142, 'fb', '120242816105390473', 'paid', NULL, NULL, '152.59.2.209'),
(1987, '2026-04-20 19:22:55', 1140, 'web', '', 'direct', '', '', '223.184.184.210'),
(1988, '2026-04-20 19:28:14', 1143, 'ig', '120246759040130640', 'paid', NULL, NULL, '106.206.135.26'),
(1989, '2026-04-20 19:29:03', 1144, 'ig', '120246935222680184', 'paid', NULL, NULL, '45.114.80.104'),
(1990, '2026-04-20 19:29:31', 1145, 'ig', '120242817426210473', 'paid', NULL, NULL, '152.58.200.202'),
(1991, '2026-04-20 19:32:13', 1146, 'ig', '120243691862380382', 'paid', NULL, NULL, '157.32.206.229'),
(1992, '2026-04-20 19:37:09', 1147, 'ig', '120246758709140640', 'paid', NULL, NULL, '103.122.234.4'),
(1993, '2026-04-20 19:37:12', 1148, 'ig', '120242817426210473', 'paid', NULL, NULL, '157.32.141.167'),
(1994, '2026-04-20 19:40:00', 1149, 'fb', '120242816105390473', 'paid', NULL, NULL, '42.104.211.242'),
(1995, '2026-04-20 19:40:03', 1150, 'ig', '120242817426210473', 'paid', NULL, NULL, '49.34.190.220'),
(1996, '2026-04-20 19:52:40', 764, 'web', '', 'direct', '', '', '27.62.123.4'),
(1997, '2026-04-20 19:54:38', 1151, 'ig', '120242817426180473', 'paid', NULL, NULL, '106.205.156.90'),
(1998, '2026-04-20 20:01:32', 1152, 'ig', '120246935222680184', 'paid', NULL, NULL, '202.164.135.227'),
(1999, '2026-04-20 20:05:16', 973, 'web', '', 'direct', NULL, NULL, '49.15.92.6'),
(2000, '2026-04-20 20:10:39', 911, 'web', '', 'direct', '', '', '49.36.98.155'),
(2001, '2026-04-20 20:10:50', 973, 'web', '', 'direct', NULL, NULL, '49.15.92.6'),
(2002, '2026-04-20 20:13:02', 1153, 'ig', '120243691862380382', 'paid', NULL, NULL, '152.58.154.221'),
(2003, '2026-04-20 20:20:28', 1154, 'ig', '120242816105390473', 'paid', NULL, NULL, '157.49.172.227'),
(2004, '2026-04-20 20:22:43', 1154, 'web', '', 'direct', '', '', '157.49.172.227'),
(2005, '2026-04-20 20:27:37', 1155, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.192.81.164'),
(2006, '2026-04-20 20:30:22', 1156, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.211.197.105'),
(2007, '2026-04-20 20:35:26', 1086, 'web', '', 'direct', '', '', '106.215.149.247'),
(2008, '2026-04-20 20:35:39', 900, 'web', '', 'direct', '', '', '47.11.20.57'),
(2009, '2026-04-20 20:42:04', 973, 'web', '', 'direct', '', '', '49.15.92.10'),
(2010, '2026-04-20 20:44:40', 1157, 'ig', '120246758709140640', 'paid', NULL, NULL, '49.43.219.134'),
(2011, '2026-04-20 20:45:06', 1158, 'fb', '120246938128280184', 'paid', NULL, NULL, '223.185.133.47'),
(2012, '2026-04-20 20:46:27', 1159, 'ig', '120246759040120640', 'paid', NULL, NULL, '152.57.114.252'),
(2013, '2026-04-20 20:55:31', 1160, 'ig', '120246938128270184', 'paid', NULL, NULL, '42.104.238.49'),
(2014, '2026-04-20 20:55:38', 1161, 'fb', '120246935222640184', 'paid', NULL, NULL, '103.114.65.118'),
(2015, '2026-04-20 21:15:47', 1162, 'fb', '120242657481930473', 'paid', NULL, NULL, '157.34.206.203'),
(2016, '2026-04-20 21:20:07', 1163, 'ig', '120242817426210473', 'paid', NULL, NULL, '103.228.43.195'),
(2017, '2026-04-20 21:27:22', 1164, 'ig', '120242815886630473', 'paid', NULL, NULL, '106.192.235.77'),
(2018, '2026-04-20 21:28:11', 1165, 'fb', '120243691862380382', 'paid', NULL, NULL, '223.228.59.53'),
(2019, '2026-04-20 21:28:20', 1166, 'ig', '120243691862400382', 'paid', NULL, NULL, '182.68.204.181'),
(2020, '2026-04-20 21:30:42', 1167, 'ig', '120246935222640184', 'paid', NULL, NULL, '110.224.73.103'),
(2021, '2026-04-20 21:33:40', 1168, 'ig', '120246759743310640', 'paid', NULL, NULL, '110.224.117.42'),
(2022, '2026-04-20 21:48:26', 1169, 'ig', '120246759743320640', 'paid', NULL, NULL, '152.59.202.213'),
(2023, '2026-04-20 21:57:16', 1170, 'fb', '120246935222680184', 'paid', NULL, NULL, '152.57.45.213'),
(2024, '2026-04-20 21:58:39', 1171, 'fb', '120243691862380382', 'paid', NULL, NULL, '106.192.61.114'),
(2025, '2026-04-20 22:06:39', 1172, 'ig', '120246758709140640', 'paid', NULL, NULL, '152.59.203.187'),
(2026, '2026-04-20 22:10:19', 1173, 'fb', '120242815886630473', 'paid', NULL, NULL, '60.243.41.155'),
(2027, '2026-04-20 22:16:25', 1174, 'ig', '120242817426180473', 'paid', NULL, NULL, '106.215.87.206'),
(2028, '2026-04-20 22:18:22', 1175, 'ig', '120242815886640473', 'paid', NULL, NULL, '49.156.89.102'),
(2029, '2026-04-20 22:22:48', 1176, 'ig', '120246935222680184', 'paid', NULL, NULL, '152.57.103.103'),
(2030, '2026-04-20 22:23:09', 1177, 'ig', '120243691862390382', 'paid', NULL, NULL, '42.108.74.36'),
(2031, '2026-04-20 22:23:49', 1178, 'ig', '120242817426180473', 'paid', NULL, NULL, '157.48.2.236'),
(2032, '2026-04-20 22:31:10', 1179, 'fb', '120243691862400382', 'paid', NULL, NULL, '42.110.161.66'),
(2033, '2026-04-20 22:45:51', 1180, 'fb', '120242815886640473', 'paid', NULL, NULL, '152.59.166.0'),
(2034, '2026-04-20 22:57:12', 788, 'web', '', 'direct', '', '', '117.205.214.75'),
(2035, '2026-04-20 23:00:56', 1181, 'fb', '120246935222680184', 'paid', NULL, NULL, '45.249.85.157'),
(2036, '2026-04-20 23:29:06', 1182, 'ig', '120243691862380382', 'paid', NULL, NULL, '1.187.231.192'),
(2037, '2026-04-20 23:32:56', 1182, 'web', '', 'direct', '', '', '1.187.231.192'),
(2038, '2026-04-20 23:44:46', 1183, 'ig', '120246869432870184', 'paid', NULL, NULL, '106.198.6.218'),
(2039, '2026-04-20 23:48:22', 1184, 'ig', '120242312930250473', 'paid', NULL, NULL, '223.188.122.149'),
(2040, '2026-04-21 00:16:42', 1185, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.59.1.145'),
(2041, '2026-04-21 00:20:42', 1186, 'ig', '120246584445790640', 'paid', NULL, NULL, '106.192.8.113'),
(2042, '2026-04-21 00:31:24', 1187, 'ig', '120242721352300473', 'paid', NULL, NULL, '157.48.160.190'),
(2043, '2026-04-21 00:35:25', 1188, 'ig', '120246935222680184', 'paid', NULL, NULL, '223.186.80.48'),
(2044, '2026-04-21 00:42:46', 1189, 'ig', '120243691862400382', 'paid', NULL, NULL, '152.59.5.19'),
(2045, '2026-04-21 00:44:41', 1190, 'ig', '120243691862380382', 'paid', NULL, NULL, '47.15.216.222'),
(2046, '2026-04-21 00:45:55', 654, 'web', '', 'direct', '', '', '106.192.167.71'),
(2047, '2026-04-21 00:47:27', 652, 'web', '', 'direct', '', '', '223.188.5.16'),
(2048, '2026-04-21 00:52:10', 1191, 'fb', '120242817426180473', 'paid', NULL, NULL, '157.51.59.10'),
(2049, '2026-04-21 00:54:01', 1191, 'web', '', 'direct', '', '', '157.51.59.10'),
(2050, '2026-04-21 00:57:11', 1192, 'fb', '120246934262830184', 'paid', NULL, NULL, '157.38.255.147'),
(2051, '2026-04-21 01:01:07', 1193, 'ig', '120243691862390382', 'paid', NULL, NULL, '152.57.51.106'),
(2052, '2026-04-21 01:01:40', 1194, 'ig', '120242817426180473', 'paid', NULL, NULL, '42.108.77.12'),
(2053, '2026-04-21 01:02:56', 1193, 'web', '', 'direct', '', '', '152.57.51.106'),
(2054, '2026-04-21 01:04:29', 1169, 'web', '', 'direct', '', '', '152.59.202.249'),
(2055, '2026-04-21 01:15:02', 1123, 'web', '', 'direct', '', '', '223.178.87.55'),
(2056, '2026-04-21 01:19:51', 1195, 'ig', '120242817426180473', 'paid', NULL, NULL, '152.59.30.1'),
(2057, '2026-04-21 01:22:36', 1196, 'fb', '120242721352300473', 'paid', NULL, NULL, '152.57.231.138'),
(2058, '2026-04-21 01:24:57', 1197, 'fb', '120246759040120640', 'paid', NULL, NULL, '157.48.93.242'),
(2059, '2026-04-21 01:25:57', 1142, 'web', '', 'direct', '', '', '152.59.1.20'),
(2060, '2026-04-21 01:29:42', 1198, 'ig', '120242817426210473', 'paid', NULL, NULL, '27.60.19.231'),
(2061, '2026-04-21 01:31:37', 1199, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.59.12.45'),
(2062, '2026-04-21 01:32:30', 1009, 'web', '', 'direct', '', '', '103.82.185.27'),
(2063, '2026-04-21 01:33:25', 1193, 'web', '', 'direct', '', '', '106.212.186.253'),
(2064, '2026-04-21 01:38:33', 1200, 'ig', '120243425160500382', 'paid', NULL, NULL, '152.59.58.4'),
(2065, '2026-04-21 01:39:15', 1201, 'ig', '120246759040120640', 'paid', NULL, NULL, '1.39.239.8'),
(2066, '2026-04-21 01:41:37', 1202, 'fb', '120242721352300473', 'paid', NULL, NULL, '157.45.254.234'),
(2067, '2026-04-21 01:42:02', 1203, 'ig', '120243425160500382', 'paid', NULL, NULL, '152.57.56.144'),
(2068, '2026-04-21 01:42:34', 1204, 'ig', '120242817426210473', 'paid', NULL, NULL, '106.210.253.16'),
(2069, '2026-04-21 01:47:05', 1205, 'ig', '120242817426180473', 'paid', NULL, NULL, '49.35.195.138'),
(2070, '2026-04-21 01:47:56', 780, 'web', '', 'direct', '', '', '223.182.211.97'),
(2071, '2026-04-21 01:50:28', 1206, 'ig', '120246869432870184', 'paid', NULL, NULL, '157.51.139.170'),
(2072, '2026-04-21 01:51:54', 1207, 'ig', '120242817426210473', 'paid', NULL, NULL, '106.219.197.166'),
(2073, '2026-04-21 01:54:22', 1196, 'web', '', 'direct', '', '', '152.57.230.252'),
(2074, '2026-04-21 01:54:27', 1207, 'web', '', 'direct', '', '', '106.219.197.166'),
(2075, '2026-04-21 01:56:18', 1196, 'web', '', 'direct', '', '', '152.57.230.252'),
(2076, '2026-04-21 01:56:52', 1196, 'web', '', 'direct', '', '', '152.57.230.252'),
(2077, '2026-04-21 01:56:57', 1112, 'web', '', 'direct', '', '', '223.228.183.216'),
(2078, '2026-04-21 02:00:04', 919, 'web', '', 'direct', '', '', '152.59.120.70'),
(2079, '2026-04-21 02:00:56', 1208, 'ig', '120246758709140640', 'paid', NULL, NULL, '223.231.196.197'),
(2080, '2026-04-21 02:02:32', 1209, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.59.110.85'),
(2081, '2026-04-21 02:03:03', 988, 'web', '', 'direct', '', '', '152.57.194.108'),
(2082, '2026-04-21 02:06:27', 1208, 'web', '', 'direct', NULL, NULL, '223.231.196.197'),
(2083, '2026-04-21 02:10:09', 544, 'web', '', 'direct', '', '', '42.106.216.42'),
(2084, '2026-04-21 02:12:42', 1107, 'fb', '120242817426180473', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaswNJ7-8AlzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6H1cvJ7N4XcPMhMlFOo9AYvYGm1Ymt4T92mAncJkNZPVaeB26JjIPbIUiQBw_aem_Ej7GUOfvzQ62gwe8aOLzVw', '', '157.48.252.68'),
(2085, '2026-04-21 02:13:15', 1210, 'ig', '120246759040130640', 'paid', NULL, NULL, '106.211.101.46'),
(2086, '2026-04-21 02:14:35', 1211, 'ig', '120246935222640184', 'paid', NULL, NULL, '157.45.245.4'),
(2087, '2026-04-21 02:15:59', 846, 'web', '', 'direct', '', '', '157.48.155.65'),
(2088, '2026-04-21 02:18:28', 1212, 'ig', '120242816105390473', 'paid', NULL, NULL, '42.107.142.54'),
(2089, '2026-04-21 02:30:20', 1213, 'ig', '120242817426180473', 'paid', NULL, NULL, '106.202.65.245'),
(2090, '2026-04-21 02:30:38', 1214, 'ig', '120242815886590473', 'paid', NULL, NULL, '152.58.119.95'),
(2091, '2026-04-21 02:31:59', 1215, 'fb', '120243691862390382', 'paid', NULL, NULL, '157.51.3.92'),
(2092, '2026-04-21 02:33:43', 1216, 'ig', '120246759040130640', 'paid', NULL, NULL, '223.228.10.121'),
(2093, '2026-04-21 02:34:00', 1217, 'ig', '120242815886630473', 'paid', NULL, NULL, '152.57.133.21'),
(2094, '2026-04-21 02:34:38', 1218, 'ig', '120246758709140640', 'paid', NULL, NULL, '223.188.5.186'),
(2095, '2026-04-21 02:40:17', 114, 'fb', '120243691862400382', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasxADVp2N5zcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR6iEF-ThdrQXMn43yYGoL-UCtk29G6rG2nrksqtpHzFPEJVV84o97ZtPPQ1GA_aem_9LnQI2iE6ed5dCIOqgO_bQ', '', '103.166.245.29'),
(2096, '2026-04-21 02:40:36', 1021, 'web', '', 'direct', '', '', '103.14.232.70'),
(2097, '2026-04-21 02:41:18', 1004, 'fb', '120246934262830184', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAasz82K3xIhzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR43vw7BxihxWrOnHCET6yLlfH6ghRNMA-Hqs7J6RkYGhTlZ19x7MNRKksAe2A_aem_SFnDHnKYJkyWqGYzRNWxcg', '', '223.225.110.23'),
(2098, '2026-04-21 02:41:50', 235, 'web', '', 'direct', '', '', '223.233.121.125'),
(2099, '2026-04-21 02:43:54', 1219, 'ig', '120242815886590473', 'paid', NULL, NULL, '152.57.50.180'),
(2100, '2026-04-21 02:46:51', 1189, 'web', '', 'direct', NULL, NULL, '152.59.3.11'),
(2101, '2026-04-21 02:47:04', 1220, 'fb', '120242552172500473', 'paid', NULL, NULL, '152.57.206.223'),
(2102, '2026-04-21 02:47:16', 1213, 'web', '', 'direct', '', '', '106.202.66.245'),
(2103, '2026-04-21 02:47:16', 1080, 'web', '', 'direct', '', '', '106.76.186.247'),
(2104, '2026-04-21 02:47:34', 1176, 'web', '', 'direct', '', '', '152.57.112.198'),
(2105, '2026-04-21 02:49:37', 1221, 'fb', '120243691862380382', 'paid', NULL, NULL, '106.208.110.105'),
(2106, '2026-04-21 02:50:07', 1222, 'ig', '120246759743320640', 'paid', NULL, NULL, '152.59.36.2'),
(2107, '2026-04-21 02:53:44', 1223, 'fb', '120242817426180473', 'paid', NULL, NULL, '157.48.240.74'),
(2108, '2026-04-21 02:53:51', 1224, 'ig', '120246759040130640', 'paid', NULL, NULL, '47.15.245.135'),
(2109, '2026-04-21 02:54:32', 1225, 'ig', '120243691862380382', 'paid', NULL, NULL, '110.224.121.229'),
(2110, '2026-04-21 02:59:37', 1226, 'ig', '120243691862400382', 'paid', NULL, NULL, '152.59.174.202'),
(2111, '2026-04-21 03:02:41', 1226, 'web', '', 'direct', NULL, NULL, '152.56.146.7'),
(2112, '2026-04-21 03:05:29', 1227, 'ig', '120246938128270184', 'paid', NULL, NULL, '152.58.43.123'),
(2113, '2026-04-21 03:11:32', 1228, 'ig', '120246935222680184', 'paid', NULL, NULL, '152.59.29.57'),
(2114, '2026-04-21 03:11:52', 1229, 'fb', '120242817426210473', 'paid', NULL, NULL, '152.58.191.226'),
(2115, '2026-04-21 03:14:15', 1230, 'ig', '120246584445790640', 'paid', NULL, NULL, '27.61.50.228'),
(2116, '2026-04-21 03:15:21', 1229, 'web', '', 'direct', '', '', '152.58.191.226'),
(2117, '2026-04-21 03:16:56', 973, 'web', '', 'direct', '', '', '49.15.90.161'),
(2118, '2026-04-21 03:17:30', 1231, 'fb', '120243691862380382', 'paid', NULL, NULL, '157.49.104.71'),
(2119, '2026-04-21 03:17:33', 1232, 'ig', '120246938128270184', 'paid', NULL, NULL, '171.79.61.92'),
(2120, '2026-04-21 03:17:35', 1233, 'fb', '120243691862390382', 'paid', NULL, NULL, '152.56.140.75'),
(2121, '2026-04-21 03:19:29', 1234, 'ig', '120242817426210473', 'paid', NULL, NULL, '106.221.100.58'),
(2122, '2026-04-21 03:21:10', 947, 'web', '', 'direct', '', '', '106.215.166.66'),
(2123, '2026-04-21 03:22:21', 1235, 'ig', '120246759040120640', 'paid', NULL, NULL, '152.57.38.32'),
(2124, '2026-04-21 03:23:54', 1236, 'ig', '120246759743320640', 'paid', NULL, NULL, '157.51.230.7'),
(2125, '2026-04-21 03:24:28', 1207, 'web', '', 'direct', '', '', '106.219.197.199'),
(2126, '2026-04-21 03:25:00', 927, 'web', '', 'direct', '', '', '106.192.129.163'),
(2127, '2026-04-21 03:26:49', 1237, 'ig', '120246759040130640', 'paid', NULL, NULL, '152.57.188.122'),
(2128, '2026-04-21 03:30:56', 1230, 'web', '', 'direct', '', '', '27.61.50.228'),
(2129, '2026-04-21 03:31:21', 1230, 'web', '', 'direct', '', '', '27.61.50.228'),
(2130, '2026-04-21 03:31:36', 1238, 'ig', '120243691862390382', 'paid', NULL, NULL, '106.205.193.26'),
(2131, '2026-04-21 03:32:06', 1239, 'ig', '120246759040130640', 'paid', NULL, NULL, '47.31.98.83'),
(2132, '2026-04-21 03:33:02', 1240, 'ig', '120242816105390473', 'paid', NULL, NULL, '106.219.190.53'),
(2133, '2026-04-21 03:33:36', 1235, 'web', '', 'direct', '', '', '152.57.38.32'),
(2134, '2026-04-21 03:33:44', 1222, 'ig', '120246759743320640', 'paid', 'PAYW9leARTw2pleHRuA2FlbQEwAGFkaWQBqzPKfvTD8HNydGMGYXBwX2lkDzU2NzA2NzM0MzM1MjQyNwABp_nZuEZPg3gh-_WyrE-ju31Uh-sTVte7-QpbM9UhKJFDSTElm41SlcLkJ7NW_aem_0e0KHHEJn9oB3wDFV4WhyA', '', '152.59.36.84'),
(2135, '2026-04-21 03:34:52', 1241, 'ig', '120242817426180473', 'paid', NULL, NULL, '106.192.120.187'),
(2136, '2026-04-21 03:38:01', 1242, 'ig', '120242817426210473', 'paid', NULL, NULL, '152.56.134.17'),
(2137, '2026-04-21 03:38:03', 1196, 'web', '', 'direct', '', '', '103.126.34.89'),
(2138, '2026-04-21 03:39:14', 1196, 'web', '', 'direct', '', '', '103.126.34.89'),
(2139, '2026-04-21 03:39:59', 1243, 'ig', '120246758709140640', 'paid', NULL, NULL, '152.59.31.189'),
(2140, '2026-04-21 03:44:03', 1244, 'ig', '120243691862380382', 'paid', NULL, NULL, '47.11.102.101'),
(2141, '2026-04-21 03:45:49', 412, 'web', '', 'direct', '', '', '152.59.148.64'),
(2142, '2026-04-21 03:46:25', 1245, 'ig', '120246935222680184', 'paid', NULL, NULL, '47.11.12.2'),
(2143, '2026-04-21 03:46:25', 1196, 'web', '', 'direct', '', '', '152.57.236.30'),
(2144, '2026-04-21 03:47:29', 1038, 'web', '', 'direct', '', '', '152.56.130.29'),
(2145, '2026-04-21 03:48:00', 1246, 'web', '', 'direct', NULL, NULL, '106.192.70.207'),
(2146, '2026-04-21 03:48:19', 1096, 'web', '', 'direct', '', '', '223.185.89.22'),
(2147, '2026-04-21 03:48:45', 1025, 'web', '', 'direct', '', '', '223.228.177.115');
INSERT INTO `source_entry` (`id`, `rec_date`, `user_id`, `utm_source`, `utm_campaign`, `utm_medium`, `source_id`, `utm_referral`, `client_ip`) VALUES
(2148, '2026-04-21 03:49:26', 989, 'web', '', 'direct', '', '', '42.104.220.91'),
(2149, '2026-04-21 03:49:26', 998, 'web', '', 'direct', NULL, NULL, '106.192.70.207'),
(2150, '2026-04-21 03:50:08', 716, 'web', '', 'direct', '', '', '106.202.27.120'),
(2151, '2026-04-21 03:51:41', 1094, 'web', '', 'direct', '', '', '152.59.202.60'),
(2152, '2026-04-21 03:52:16', 947, 'web', '', 'direct', '', '', '106.215.166.66'),
(2153, '2026-04-21 03:52:26', 1247, 'fb', '120242815886640473', 'paid', NULL, NULL, '106.204.224.2'),
(2154, '2026-04-21 03:52:37', 1248, 'ig', '120242816105390473', 'paid', NULL, NULL, '106.219.233.89'),
(2155, '2026-04-21 03:55:49', 1249, 'ig', '120246584445790640', 'paid', NULL, NULL, '223.189.67.43'),
(2156, '2026-04-21 03:55:59', 1250, 'fb', '120242552172500473', 'paid', NULL, NULL, '49.14.165.28'),
(2157, '2026-04-21 03:57:34', 1251, 'fb', '120242815886590473', 'paid', NULL, NULL, '152.58.157.141'),
(2158, '2026-04-21 03:58:08', 1252, 'fb', '120242817426210473', 'paid', NULL, NULL, '152.59.205.162'),
(2159, '2026-04-21 04:00:20', 1253, 'ig', '120246935222680184', 'paid', NULL, NULL, '110.227.56.218'),
(2160, '2026-04-21 04:02:06', 1077, 'web', '', 'direct', NULL, NULL, '223.228.130.137'),
(2161, '2026-04-21 04:03:30', 690, 'web', '', 'direct', NULL, NULL, '223.188.119.225'),
(2162, '2026-04-21 04:03:40', 1249, 'web', '', 'direct', NULL, NULL, '223.189.67.43'),
(2163, '2026-04-21 04:04:45', 1254, 'fb', '120242815886630473', 'paid', NULL, NULL, '152.56.157.198'),
(2164, '2026-04-21 04:05:06', 1255, 'ig', '120243691862390382', 'paid', NULL, NULL, '223.228.77.141'),
(2165, '2026-04-21 04:07:05', 1188, 'web', '', 'direct', '', '', '223.186.80.48'),
(2166, '2026-04-21 04:07:25', 1256, 'ig', '120242815886590473', 'paid', NULL, NULL, '223.228.1.108'),
(2167, '2026-04-21 04:11:22', 1077, 'web', '', 'direct', NULL, NULL, '223.228.130.137'),
(2168, '2026-04-21 04:16:05', 1055, 'web', '', 'direct', '', '', '157.51.106.222'),
(2169, '2026-04-21 04:16:28', 1257, 'ig', '120246759040130640', 'paid', NULL, NULL, '106.192.219.161'),
(2170, '2026-04-21 04:17:21', 1258, 'fb', '120242815886640473', 'paid', NULL, NULL, '157.49.114.122'),
(2171, '2026-04-21 04:18:35', 1259, 'ig', '120246758709140640', 'paid', NULL, NULL, '171.48.102.114'),
(2172, '2026-04-21 04:18:48', 1260, 'fb', '120242815886640473', 'paid', NULL, NULL, '106.206.107.231'),
(2173, '2026-04-21 04:18:53', 1261, 'fb', '120243691862380382', 'paid', NULL, NULL, '42.104.224.45'),
(2174, '2026-04-21 04:19:53', 1262, 'ig', '120242817426180473', 'paid', NULL, NULL, '47.15.154.116'),
(2175, '2026-04-21 04:23:12', 1137, 'web', '', 'direct', '', '', '171.76.85.72'),
(2176, '2026-04-21 04:23:42', 1263, 'ig', '120243691862380382', 'paid', NULL, NULL, '223.188.123.183'),
(2177, '2026-04-21 04:28:48', 1264, 'fb', '120246935222640184', 'paid', NULL, NULL, '152.57.97.236'),
(2178, '2026-04-21 04:29:10', 754, 'web', '', 'direct', '', '', '152.59.82.16'),
(2179, '2026-04-21 04:32:31', 1038, 'web', '', 'direct', '', '', '152.56.130.140'),
(2180, '2026-04-21 04:34:06', 1265, 'ig', '120246935222640184', 'paid', NULL, NULL, '171.79.34.96'),
(2181, '2026-04-21 04:37:10', 1266, 'ig', '120246938128280184', 'paid', NULL, NULL, '152.58.42.227'),
(2182, '2026-04-21 04:37:24', 1267, 'ig', '120242656907980473', 'paid', NULL, NULL, '27.97.170.186'),
(2183, '2026-04-21 04:37:28', 1268, 'ig', '120246935222640184', 'paid', NULL, NULL, '38.183.11.102'),
(2184, '2026-04-21 04:38:32', 1269, 'ig', '120242656907980473', 'paid', NULL, NULL, '49.42.136.14'),
(2185, '2026-04-21 04:39:22', 480, 'web', '', 'direct', '', '', '47.9.104.207'),
(2186, '2026-04-21 04:40:25', 1269, 'web', '', 'direct', '', '', '49.42.136.14'),
(2187, '2026-04-21 04:40:59', 947, 'web', '', 'direct', '', '', '106.215.166.66'),
(2188, '2026-04-21 04:41:17', 947, 'web', '', 'direct', '', '', '106.215.166.66'),
(2189, '2026-04-21 04:42:26', 1270, 'fb', '120246935222640184', 'paid', NULL, NULL, '157.34.203.213'),
(2190, '2026-04-21 04:47:27', 925, 'web', '', 'direct', '', '', '1.39.239.22'),
(2191, '2026-04-21 04:47:51', 451, 'web', '', 'direct', '', '', '106.76.195.254'),
(2192, '2026-04-21 04:48:29', 451, 'web', '', 'direct', '', '', '106.76.195.254'),
(2193, '2026-04-21 04:50:30', 1073, 'web', '', 'direct', '', '', '103.61.113.188'),
(2194, '2026-04-21 04:52:41', 518, 'fb', '120246759743310640', 'paid', 'IwZXh0bgNhZW0BMABhZGlkAaszyoH9vjBzcnRjBmFwcF9pZAwzNTA2ODU1MzE3MjgAAR7bRUvzoha-RDzhkX6wSEkrorQMKyrxbo4Z1mzV790LmcwdmW8DX76I4BxbXA_aem_fzT0DIjyV8YEOaLbH_Nx3w', '', '110.225.45.182'),
(2195, '2026-04-21 04:53:17', 1271, 'fb', '120246938128270184', 'paid', NULL, NULL, '106.205.224.227'),
(2196, '2026-04-21 04:54:04', 490, 'web', '', 'direct', '', '', '49.43.105.49'),
(2197, '2026-04-21 04:56:56', 1272, 'ig', '120243691862380382', 'paid', NULL, NULL, '223.189.228.111'),
(2198, '2026-04-21 04:59:12', 1273, 'fb', '120246759743320640', 'paid', NULL, NULL, '49.37.243.12'),
(2199, '2026-04-21 05:04:14', 1274, 'ig', '120246935222640184', 'paid', NULL, NULL, '122.181.101.142'),
(2200, '2026-04-21 05:04:46', 1275, 'ig', '120243425160500382', 'paid', NULL, NULL, '157.38.0.3'),
(2201, '2026-04-21 05:07:11', 498, 'web', '', 'direct', '', '', '106.221.179.12'),
(2202, '2026-04-21 05:08:13', 1276, 'fb', '120243691862390382', 'paid', NULL, NULL, '152.56.156.184'),
(2203, '2026-04-21 05:09:33', 988, 'web', '', 'direct', '', '', '152.57.193.153'),
(2204, '2026-04-21 05:12:11', 1277, 'fb', '120243691862390382', 'paid', NULL, NULL, '117.96.16.216'),
(2205, '2026-04-21 05:13:33', 1278, 'ig', '120246759040120640', 'paid', NULL, NULL, '1.38.164.228'),
(2206, '2026-04-21 05:14:37', 1279, 'fb', '120242815886640473', 'paid', NULL, NULL, '106.76.236.186'),
(2207, '2026-04-21 05:14:56', 1280, 'ig', '120243691862390382', 'paid', NULL, NULL, '157.48.219.80'),
(2208, '2026-04-21 05:15:26', 1281, 'ig', '120246938128280184', 'paid', NULL, NULL, '157.50.102.148'),
(2209, '2026-04-21 05:16:34', 1282, 'web', '', 'direct', NULL, NULL, '103.251.59.58'),
(2210, '2026-04-21 05:16:49', 1274, 'ig', '120246935222640184', 'paid', NULL, NULL, '122.181.101.142'),
(2211, '2026-04-21 05:18:51', 1067, 'web', '', 'direct', '', '', '152.59.175.172'),
(2212, '2026-04-21 05:20:43', 1211, 'web', '', 'direct', '', '', '157.45.250.48'),
(2213, '2026-04-21 05:20:54', 1253, 'web', '', 'direct', NULL, NULL, '110.227.62.218'),
(2214, '2026-04-21 05:21:13', 1194, 'web', '', 'direct', '', '', '42.108.77.12'),
(2215, '2026-04-21 05:22:04', 1283, 'ig', '120246934262830184', 'paid', NULL, NULL, '47.9.84.60'),
(2216, '2026-04-21 05:23:10', 1284, 'ig', '120242816105390473', 'paid', NULL, NULL, '223.237.147.223'),
(2217, '2026-04-21 05:24:29', 1285, 'ig', '120243691862390382', 'paid', NULL, NULL, '157.50.113.209'),
(2218, '2026-04-21 05:25:00', 1286, 'ig', '120246759040130640', 'paid', NULL, NULL, '49.37.35.220'),
(2219, '2026-04-21 05:25:45', 478, 'web', '', 'direct', '', '', '157.49.207.59'),
(2220, '2026-04-21 05:26:14', 1287, 'ig', '120246938128270184', 'paid', NULL, NULL, '27.59.55.1'),
(2221, '2026-04-21 05:28:48', 1288, 'ig', '120246869432870184', 'paid', NULL, NULL, '223.187.67.105'),
(2222, '2026-04-21 05:30:18', 1170, 'web', '', 'direct', NULL, NULL, '152.57.46.77'),
(2223, '2026-04-21 05:30:53', 381, 'ig', '120246935222680184', 'paid', 'PAZXh0bgNhZW0BMABhZGlkAasz828Oy3hzcnRjBmFwcF9pZA81NjcwNjczNDMzNTI0MjcAAacU7NFIUZ_wsPjL8iKeeZL-1YPZEzL1srmK1wImgCqp0f4LkZIYRGtoozTthQ_aem_k1Cuji4wJKM0eW4mMvKyKg', '', '59.93.29.193'),
(2224, '2026-04-21 05:32:09', 1289, 'ig', '120246869432870184', 'paid', NULL, NULL, '152.58.87.127'),
(2225, '2026-04-21 05:32:54', 1290, 'ig', '120246759743320640', 'paid', NULL, NULL, '157.50.173.128'),
(2226, '2026-04-21 05:33:28', 1275, 'web', '', 'direct', '', '', '157.38.0.86'),
(2227, '2026-04-21 05:34:07', 1275, 'web', '', 'direct', '', '', '157.38.0.86'),
(2228, '2026-04-21 05:37:19', 1291, 'ig', '120246935222640184', 'paid', NULL, NULL, '106.192.128.232'),
(2229, '2026-04-21 05:37:35', 1292, 'ig', '120246759040130640', 'paid', NULL, NULL, '138.113.239.9'),
(2230, '2026-04-21 05:38:57', 1289, 'web', '', 'direct', '', '', '152.58.87.127'),
(2231, '2026-04-21 05:44:52', 946, 'web', '', 'direct', '', '', '152.59.103.110'),
(2232, '2026-04-21 05:46:27', 745, 'web', '', 'direct', '', '', '206.84.234.158'),
(2233, '2026-04-21 05:46:45', 1293, 'ig', '120246935222680184', 'paid', NULL, NULL, '47.11.104.6'),
(2234, '2026-04-21 05:47:20', 1294, 'ig', '120243691862380382', 'paid', NULL, NULL, '1.39.142.33'),
(2235, '2026-04-21 05:49:03', 1294, 'web', '', 'direct', '', '', '1.39.142.33'),
(2236, '2026-04-21 05:49:33', 702, 'web', '', 'direct', '', '', '223.186.145.107'),
(2237, '2026-04-21 05:51:11', 635, 'web', '', 'direct', '', '', '157.49.180.82'),
(2238, '2026-04-21 05:51:13', 1295, 'fb', '120242815886640473', 'paid', NULL, NULL, '157.41.225.28'),
(2239, '2026-04-21 05:51:23', 1296, 'fb', '120242312930250473', 'paid', NULL, NULL, '157.35.69.73'),
(2240, '2026-04-21 05:51:34', 1297, 'ig', '120243691862380382', 'paid', NULL, NULL, '103.49.233.2'),
(2241, '2026-04-21 05:53:59', 1267, 'web', '', 'direct', '', '', '27.97.170.168'),
(2242, '2026-04-21 05:54:28', 1211, 'web', '', 'direct', '', '', '157.45.250.48'),
(2243, '2026-04-21 05:55:06', 1298, 'ig', '120242817426210473', 'paid', NULL, NULL, '182.70.152.91'),
(2244, '2026-04-21 05:55:57', 364, 'web', '', 'direct', '', '', '110.227.17.202'),
(2245, '2026-04-21 05:58:39', 958, 'web', '', 'direct', '', '', '152.57.16.237'),
(2246, '2026-04-21 06:02:26', 1299, 'ig', '120242817426210473', 'paid', NULL, NULL, '152.59.200.150'),
(2247, '2026-04-21 06:03:54', 1289, 'web', '', 'direct', '', '', '152.58.87.127'),
(2248, '2026-04-21 06:04:31', 1126, 'web', '', 'direct', '', '', '157.51.219.47'),
(2249, '2026-04-21 06:05:20', 1126, 'web', '', 'direct', '', '', '157.51.219.47'),
(2250, '2026-04-21 06:06:30', 1126, 'web', '', 'direct', '', '', '157.51.219.47'),
(2251, '2026-04-21 06:07:11', 1290, 'web', '', 'direct', '', '', '157.50.173.128'),
(2252, '2026-04-21 06:07:25', 1300, 'ig', '120246758709140640', 'paid', NULL, NULL, '223.228.175.119'),
(2253, '2026-04-21 06:08:28', 1290, 'web', '', 'direct', '', '', '157.50.173.128'),
(2254, '2026-04-21 06:09:17', 1290, 'web', '', 'direct', '', '', '157.50.173.128'),
(2255, '2026-04-21 06:10:07', 784, 'web', '', 'direct', '', '', '152.59.176.78'),
(2256, '2026-04-21 06:11:40', 549, 'web', '', 'direct', '', '', '152.59.5.140'),
(2257, '2026-04-21 06:11:46', 1301, 'ig', '120242815886630473', 'paid', NULL, NULL, '223.239.118.208'),
(2258, '2026-04-21 06:12:41', 1302, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.58.128.53'),
(2259, '2026-04-21 06:13:58', 1303, 'fb', '120243691862400382', 'paid', NULL, NULL, '223.179.235.22'),
(2260, '2026-04-21 06:15:35', 1304, 'ig', '120246758709140640', 'paid', NULL, NULL, '122.161.73.9'),
(2261, '2026-04-21 06:17:15', 602, 'web', '', 'direct', '', '', '42.104.157.43'),
(2262, '2026-04-21 06:17:27', 1305, 'fb', '120243691862400382', 'paid', NULL, NULL, '106.221.105.82'),
(2263, '2026-04-21 06:17:38', 1306, 'ig', '120242816105390473', 'paid', NULL, NULL, '171.48.80.139'),
(2264, '2026-04-21 06:19:01', 1307, 'ig', '120243691862400382', 'paid', NULL, NULL, '49.37.241.186'),
(2265, '2026-04-21 06:20:15', 1301, 'web', '', 'direct', '', '', '223.239.118.208'),
(2266, '2026-04-21 06:21:23', 1308, 'ig', '120242815886590473', 'paid', NULL, NULL, '106.192.35.30'),
(2267, '2026-04-21 06:23:34', 1309, 'ig', '120243691862400382', 'paid', NULL, NULL, '27.60.16.136'),
(2268, '2026-04-21 06:23:45', 1310, 'fb', '120242816105390473', 'paid', NULL, NULL, '106.77.166.31'),
(2269, '2026-04-21 06:24:20', 1311, 'fb', '120242815886640473', 'paid', NULL, NULL, '122.164.86.230'),
(2270, '2026-04-21 06:24:35', 1308, 'web', '', 'direct', '', '', '106.192.35.30'),
(2271, '2026-04-21 06:24:52', 588, 'web', '', 'direct', '', '', '152.58.145.141'),
(2272, '2026-04-21 06:25:20', 1308, 'web', '', 'direct', '', '', '106.192.35.30'),
(2273, '2026-04-21 06:26:09', 1013, 'web', '', 'direct', '', '', '49.42.34.162'),
(2274, '2026-04-21 06:27:31', 1312, 'ig', '120242312930250473', 'paid', NULL, NULL, '47.11.64.49'),
(2275, '2026-04-21 06:28:17', 1313, 'fb', '120242657481930473', 'paid', NULL, NULL, '171.48.80.156'),
(2276, '2026-04-21 06:28:58', 1314, 'ig', '120242817426210473', 'paid', NULL, NULL, '42.104.157.170'),
(2277, '2026-04-21 06:29:19', 1170, 'web', '', 'direct', '', '', '152.57.33.103'),
(2278, '2026-04-21 06:32:50', 1312, 'ig', '120242312930250473', 'paid', NULL, NULL, '47.11.79.69'),
(2279, '2026-04-21 06:33:30', 927, 'web', '', 'direct', '', '', '106.192.141.94'),
(2280, '2026-04-21 06:34:09', 1301, 'web', '', 'direct', '', '', '223.239.118.208'),
(2281, '2026-04-21 06:34:16', 927, 'web', '', 'direct', '', '', '106.192.141.94'),
(2282, '2026-04-21 06:34:42', 1315, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.59.63.148'),
(2283, '2026-04-21 06:35:02', 927, 'web', '', 'direct', NULL, NULL, '106.192.141.94'),
(2284, '2026-04-21 06:35:32', 927, 'web', '', 'direct', '', '', '106.192.141.94'),
(2285, '2026-04-21 06:37:55', 1290, 'web', '', 'direct', '', '', '157.50.169.1'),
(2286, '2026-04-21 06:41:13', 1316, 'fb', '120242815886640473', 'paid', NULL, NULL, '27.63.17.245'),
(2287, '2026-04-21 06:41:25', 1317, 'ig', '120246934262830184', 'paid', NULL, NULL, '49.42.179.126'),
(2288, '2026-04-21 06:42:33', 1301, 'web', '', 'direct', '', '', '223.239.118.208'),
(2289, '2026-04-21 06:44:30', 1318, 'fb', '120242815886590473', 'paid', NULL, NULL, '171.76.81.25'),
(2290, '2026-04-21 06:44:50', 1319, 'fb', '120246759743320640', 'paid', NULL, NULL, '152.58.128.226'),
(2291, '2026-04-21 06:45:16', 1320, 'ig', '120242816105390473', 'paid', NULL, NULL, '152.59.120.250'),
(2292, '2026-04-21 06:47:23', 1170, 'web', '', 'direct', '', '', '152.57.47.148'),
(2293, '2026-04-21 06:48:13', 1321, 'ig', '120242312930250473', 'paid', NULL, NULL, '106.192.165.102'),
(2294, '2026-04-21 06:48:19', 1322, 'ig', '120242312930250473', 'paid', NULL, NULL, '157.50.66.169'),
(2295, '2026-04-21 06:49:03', 1245, 'web', '', 'direct', '', '', '47.11.16.145'),
(2296, '2026-04-21 06:51:31', 432, 'web', '', 'direct', '', '', '157.51.39.131'),
(2297, '2026-04-21 06:52:11', 432, 'web', '', 'direct', '', '', '157.51.39.131'),
(2298, '2026-04-21 06:52:40', 441, 'web', '', 'direct', '', '', '106.192.165.173'),
(2299, '2026-04-21 06:53:11', 1323, 'ig', '120246935222680184', 'paid', NULL, NULL, '152.59.204.252'),
(2300, '2026-04-21 06:53:57', 1324, 'ig', '120246758709140640', 'paid', NULL, NULL, '106.221.159.12'),
(2301, '2026-04-21 06:53:58', 426, 'web', '', 'direct', '', '', '47.11.22.100'),
(2302, '2026-04-21 06:55:25', 1146, 'web', '', 'direct', '', '', '157.32.202.153'),
(2303, '2026-04-21 06:55:50', 1308, 'web', '', 'direct', '', '', '106.192.35.30'),
(2304, '2026-04-21 06:56:43', 1308, 'web', '', 'direct', '', '', '106.192.35.30'),
(2305, '2026-04-21 06:57:13', 1146, 'web', '', 'direct', '', '', '157.32.202.153'),
(2306, '2026-04-21 06:57:49', 1325, 'ig', '120246934262830184', 'paid', NULL, NULL, '49.36.99.218'),
(2307, '2026-04-21 06:58:04', 1311, 'web', '', 'direct', '', '', '122.164.86.230'),
(2308, '2026-04-21 06:58:56', 1311, 'web', '', 'direct', '', '', '122.164.86.230'),
(2309, '2026-04-21 06:59:37', 1326, 'fb', '120242815886590473', 'paid', NULL, NULL, '152.57.152.199'),
(2310, '2026-04-21 07:03:12', 1327, 'fb', '120242815886640473', 'paid', NULL, NULL, '122.161.74.165'),
(2311, '2026-04-21 07:03:21', 1328, 'fb', '120242656907980473', 'paid', NULL, NULL, '157.38.154.114'),
(2312, '2026-04-21 07:04:46', 1249, 'web', '', 'direct', '', '', '223.189.67.43'),
(2313, '2026-04-21 07:05:58', 1249, 'web', '', 'direct', '', '', '223.189.67.43'),
(2314, '2026-04-21 07:09:12', 1249, 'web', '', 'direct', '', '', '223.189.67.43'),
(2315, '2026-04-21 07:12:33', 1252, 'web', '', 'direct', NULL, NULL, '115.246.252.115'),
(2316, '2026-04-21 07:14:15', 384, 'web', '', 'direct', '', '', '117.194.213.141'),
(2317, '2026-04-21 07:15:10', 1190, 'web', '', 'direct', '', '', '152.59.83.241'),
(2318, '2026-04-21 07:17:12', 1329, 'fb', '120242656907980473', 'paid', NULL, NULL, '42.104.213.83'),
(2319, '2026-04-21 07:17:42', 1330, 'ig', '120246758709140640', 'paid', NULL, NULL, '117.242.196.231'),
(2320, '2026-04-21 07:18:03', 1331, 'ig', '120246938128280184', 'paid', NULL, NULL, '49.42.137.244'),
(2321, '2026-04-21 07:20:47', 621, 'web', '', 'direct', '', '', '1.39.142.38'),
(2322, '2026-04-21 07:22:26', 1262, 'web', '', 'direct', '', '', '152.58.107.53'),
(2323, '2026-04-21 07:23:19', 1262, 'web', '', 'direct', '', '', '152.58.107.53'),
(2324, '2026-04-21 07:24:03', 1332, 'ig', '120242312930250473', 'paid', NULL, NULL, '150.107.212.171'),
(2325, '2026-04-21 07:27:36', 1333, 'fb', '120243691862390382', 'paid', NULL, NULL, '152.58.30.194'),
(2326, '2026-04-21 07:29:05', 1334, 'ig', '120246935222680184', 'paid', NULL, NULL, '106.192.125.204'),
(2327, '2026-04-21 07:29:33', 1335, 'ig', '120243691862380382', 'paid', NULL, NULL, '157.49.30.222'),
(2328, '2026-04-21 07:30:13', 1336, 'ig', '120246759040120640', 'paid', NULL, NULL, '27.61.35.24'),
(2329, '2026-04-21 07:30:19', 1337, 'ig', '120246759040120640', 'paid', NULL, NULL, '157.39.193.178'),
(2330, '2026-04-21 07:31:46', 995, 'web', '', 'direct', '', '', '45.112.71.197'),
(2331, '2026-04-21 07:32:34', 1338, 'ig', '120246759040130640', 'paid', NULL, NULL, '117.241.198.222'),
(2332, '2026-04-21 07:34:39', 1146, 'web', '', 'direct', '', '', '157.32.202.153'),
(2333, '2026-04-21 07:35:51', 1339, 'ig', '120246934262830184', 'paid', NULL, NULL, '1.38.92.225'),
(2334, '2026-04-21 07:38:33', 1144, 'web', '', 'direct', '', '', '49.248.66.54'),
(2335, '2026-04-21 07:40:09', 1249, 'web', '', 'direct', '', '', '223.189.67.43'),
(2336, '2026-04-21 07:41:08', 822, 'web', '', 'direct', '', '', '152.58.63.39'),
(2337, '2026-04-21 07:43:28', 1340, 'ig', '120246938128280184', 'paid', NULL, NULL, '223.188.53.254'),
(2338, '2026-04-21 07:44:07', 1341, 'web', '', 'direct', NULL, NULL, '106.192.160.173'),
(2339, '2026-04-21 07:45:16', 636, 'web', '', 'direct', '', '', '157.51.206.205'),
(2340, '2026-04-21 07:46:15', 142, 'web', '', 'direct', '', '', '157.50.96.158'),
(2341, '2026-04-21 07:47:36', 1342, 'ig', '120246934262830184', 'paid', NULL, NULL, '152.56.2.78'),
(2342, '2026-04-21 07:48:06', 1343, 'ig', '120242816105390473', 'paid', NULL, NULL, '49.42.105.85'),
(2343, '2026-04-21 07:48:46', 1341, 'web', '', 'direct', '', '', '106.192.160.173'),
(2344, '2026-04-21 07:49:18', 1341, 'web', '', 'direct', '', '', '106.192.160.173'),
(2345, '2026-04-21 07:51:10', 1344, 'ig', '120246938128280184', 'paid', NULL, NULL, '152.59.61.106'),
(2346, '2026-04-21 07:52:30', 556, 'web', '', 'direct', '', '', '106.192.254.43'),
(2347, '2026-04-21 07:53:53', 1345, 'ig', '120242815886640473', 'paid', NULL, NULL, '152.57.39.173'),
(2348, '2026-04-21 07:54:33', 1346, 'ig', '120243691862380382', 'paid', NULL, NULL, '152.59.16.140'),
(2349, '2026-04-21 07:55:04', 1347, 'ig', '120243425160500382', 'paid', NULL, NULL, '157.48.246.243'),
(2350, '2026-04-21 07:55:39', 1348, 'ig', '120242817426210473', 'paid', NULL, NULL, '152.58.61.205'),
(2351, '2026-04-21 08:00:16', 1334, 'web', '', 'direct', '', '', '106.192.125.204'),
(2352, '2026-04-21 08:00:21', 1349, 'ig', '120242815886640473', 'paid', NULL, NULL, '103.178.204.79'),
(2353, '2026-04-21 08:00:32', 724, 'web', '', 'direct', '', '', '152.59.201.173'),
(2354, '2026-04-21 08:02:55', 1350, 'fb', '120243425160500382', 'paid', NULL, NULL, '157.48.250.251'),
(2355, '2026-04-21 08:04:47', 1351, 'ig', '120246938128280184', 'paid', NULL, NULL, '152.57.60.81'),
(2356, '2026-04-21 08:08:43', 1352, 'ig', '120242816105390473', 'paid', NULL, NULL, '110.226.162.253'),
(2357, '2026-04-21 08:12:12', 1353, 'ig', '120243691862390382', 'paid', NULL, NULL, '152.59.79.222'),
(2358, '2026-04-21 08:13:18', 1354, 'ig', '120246759040130640', 'paid', NULL, NULL, '117.192.45.4'),
(2359, '2026-04-21 08:13:48', 1355, 'fb', '120242815886630473', 'paid', NULL, NULL, '152.56.157.173'),
(2360, '2026-04-21 08:16:11', 1356, 'ig', '120246759040130640', 'paid', NULL, NULL, '171.51.167.163'),
(2361, '2026-04-21 08:18:06', 1357, 'fb', '120243691862380382', 'paid', NULL, NULL, '152.57.236.62'),
(2362, '2026-04-21 08:18:52', 461, 'web', '', 'direct', '', '', '106.219.164.254'),
(2363, '2026-04-21 08:19:48', 1358, 'fb', '120246869432870184', 'paid', NULL, NULL, '106.221.120.95'),
(2364, '2026-04-21 08:24:47', 1359, 'ig', '120243691862390382', 'paid', NULL, NULL, '223.178.212.209'),
(2365, '2026-04-21 08:28:45', 1360, 'ig', '120243691862380382', 'paid', NULL, NULL, '27.60.166.246'),
(2366, '2026-04-21 08:30:16', 1361, 'ig', '120246759040120640', 'paid', NULL, NULL, '47.15.217.25'),
(2367, '2026-04-21 08:30:51', 1362, 'ig', '120246935222640184', 'paid', NULL, NULL, '106.206.116.217'),
(2368, '2026-04-21 08:34:29', 973, 'web', '', 'direct', '', '', '49.15.93.62'),
(2369, '2026-04-21 08:36:39', 1363, 'ig', '120246869432870184', 'paid', NULL, NULL, '223.239.69.247'),
(2370, '2026-04-21 08:36:51', 1364, 'ig', '120246938128270184', 'paid', NULL, NULL, '150.107.181.127'),
(2371, '2026-04-21 08:38:20', 1360, 'web', '', 'direct', '', '', '27.60.166.246'),
(2372, '2026-04-21 08:40:05', 1351, 'web', '', 'direct', '', '', '152.57.56.224'),
(2373, '2026-04-21 08:40:38', 1351, 'web', '', 'direct', '', '', '152.57.56.224'),
(2374, '2026-04-21 08:44:33', 1365, 'fb', '120242817426180473', 'paid', NULL, NULL, '122.161.74.30'),
(2375, '2026-04-21 08:48:04', 1366, 'ig', '120246759743310640', 'paid', NULL, NULL, '152.59.30.181'),
(2376, '2026-04-21 08:50:40', 1367, 'fb', '120246938128280184', 'paid', NULL, NULL, '223.227.90.254'),
(2377, '2026-04-21 08:52:18', 1368, 'ig', '120242656907980473', 'paid', NULL, NULL, '42.108.23.19'),
(2378, '2026-04-21 08:54:21', 1369, 'ig', '120242816105390473', 'paid', NULL, NULL, '171.79.44.195'),
(2379, '2026-04-21 08:55:02', 1370, 'ig', '120246935222680184', 'paid', NULL, NULL, '103.226.201.114'),
(2380, '2026-04-21 08:56:30', 1253, 'web', '', 'direct', NULL, NULL, '110.227.58.247'),
(2381, '2026-04-21 08:57:11', 1367, 'web', '', 'direct', '', '', '223.227.90.254'),
(2382, '2026-04-21 09:01:05', 1369, 'web', '', 'direct', '', '', '171.79.44.195'),
(2383, '2026-04-21 09:06:56', 911, 'web', '', 'direct', '', '', '49.36.98.155'),
(2384, '2026-04-21 09:07:00', 1126, 'web', '', 'direct', '', '', '157.51.212.88'),
(2385, '2026-04-21 09:08:58', 1290, 'web', '', 'direct', '', '', '157.50.168.251'),
(2386, '2026-04-21 09:12:35', 1371, 'fb', '120242552172500473', 'paid', NULL, NULL, '223.184.136.111'),
(2387, '2026-04-21 09:12:42', 1094, 'web', '', 'direct', '', '', '152.59.201.110'),
(2388, '2026-04-21 09:18:49', 1290, 'web', '', 'direct', '', '', '157.50.168.251'),
(2389, '2026-04-21 09:18:58', 1372, 'ig', '120246938128280184', 'paid', NULL, NULL, '49.42.48.83'),
(2390, '2026-04-21 09:19:03', 537, 'web', '', 'direct', '', '', '152.58.157.136'),
(2391, '2026-04-21 09:19:18', 1351, 'web', '', 'direct', '', '', '152.57.58.147'),
(2392, '2026-04-21 09:20:11', 1373, 'ig', '120243691862400382', 'paid', NULL, NULL, '157.32.46.246'),
(2393, '2026-04-21 09:20:31', 537, 'web', '', 'direct', '', '', '152.58.157.136'),
(2394, '2026-04-21 09:22:04', 1290, 'web', '', 'direct', '', '', '157.50.168.251'),
(2395, '2026-04-21 09:22:43', 799, 'web', '', 'direct', '', '', '47.11.41.18'),
(2396, '2026-04-21 09:24:58', 1374, 'fb', '120246935222640184', 'paid', NULL, NULL, '152.59.89.18'),
(2397, '2026-04-21 09:26:08', 1351, 'web', '', 'direct', NULL, NULL, '152.57.58.147'),
(2398, '2026-04-21 09:28:37', 1375, 'fb', '120242815886630473', 'paid', NULL, NULL, '157.35.65.169'),
(2399, '2026-04-21 09:28:55', 1367, 'web', '', 'direct', '', '', '223.227.90.241'),
(2400, '2026-04-21 09:29:13', 1376, 'ig', '120246935222640184', 'paid', NULL, NULL, '27.61.47.62');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tasks`
--

DROP TABLE IF EXISTS `staff_tasks`;
CREATE TABLE IF NOT EXISTS `staff_tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assignee_id` int NOT NULL,
  `follower_id` int NOT NULL,
  `task_title` varchar(299) NOT NULL,
  `task_desc` longtext NOT NULL,
  `attachment` varchar(299) DEFAULT NULL,
  `priority` varchar(55) NOT NULL,
  `task_module` varchar(199) NOT NULL,
  `task_status` varchar(55) NOT NULL,
  `completion_date` datetime DEFAULT NULL,
  `remarks` text,
  `projects` varchar(299) NOT NULL,
  `task_goal` varchar(55) NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '1 = active, 0= deactive',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0= no, 1= yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subpaisa_entry`
--

DROP TABLE IF EXISTS `subpaisa_entry`;
CREATE TABLE IF NOT EXISTS `subpaisa_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer,2=Channel,11=SelfApply,12=Loan Agent, 3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `referenceid` varchar(256) DEFAULT NULL,
  `txstatus` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_requests`
--

DROP TABLE IF EXISTS `support_requests`;
CREATE TABLE IF NOT EXISTS `support_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `ticketno` varchar(50) NOT NULL,
  `usertype` int NOT NULL DEFAULT '1' COMMENT '1 = selfapply, 2 = guest user, 3 = loan agent',
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `mobile` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `issuetype` varchar(255) NOT NULL,
  `cardnumber` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '0=No,1=Yes',
  `serverip` varchar(99) DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No,1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_request_chat`
--

DROP TABLE IF EXISTS `support_request_chat`;
CREATE TABLE IF NOT EXISTS `support_request_chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requestid` int NOT NULL,
  `remarks` longtext NOT NULL,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

DROP TABLE IF EXISTS `user_documents`;
CREATE TABLE IF NOT EXISTS `user_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `profilephoto` varchar(256) DEFAULT NULL,
  `aadharcard` varchar(256) DEFAULT NULL,
  `aadharcard_number` varchar(256) DEFAULT NULL,
  `pancard` varchar(256) DEFAULT NULL,
  `pancard_number` varchar(256) DEFAULT NULL,
  `cancelcheque` varchar(256) DEFAULT NULL,
  `lightbill` varchar(256) DEFAULT NULL,
  `bankstatement` varchar(256) DEFAULT NULL,
  `formsixteen` varchar(256) DEFAULT NULL,
  `salaryslip` varchar(256) DEFAULT NULL,
  `businessproof` varchar(256) DEFAULT NULL,
  `itreturn` varchar(256) DEFAULT NULL,
  `remarks` varchar(256) DEFAULT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_offers`
--

DROP TABLE IF EXISTS `user_offers`;
CREATE TABLE IF NOT EXISTS `user_offers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `offerdata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payout_documents`
--

DROP TABLE IF EXISTS `user_payout_documents`;
CREATE TABLE IF NOT EXISTS `user_payout_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `gstdoc` varchar(256) DEFAULT NULL,
  `gstdoc_number` varchar(256) DEFAULT NULL,
  `aadharcard` varchar(256) DEFAULT NULL,
  `aadharcard_number` varchar(256) DEFAULT NULL,
  `pancard` varchar(256) DEFAULT NULL,
  `pancard_number` varchar(256) DEFAULT NULL,
  `cancelcheque` varchar(256) DEFAULT NULL,
  `remarks` varchar(256) NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_registrations`
--

DROP TABLE IF EXISTS `user_registrations`;
CREATE TABLE IF NOT EXISTS `user_registrations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `staff_id` int DEFAULT NULL,
  `offerpage` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = none, 1 = la offer 1, 2 = la offer 2, 3 = la offer 3, 4 = sa offer 1, 5 = sa offer 2, 6 = sa offer 3, 7 = sa offer 4, 8 = la offer 4, 9 = sa offer 5, 10 = la offer 5',
  `rec_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(55) NOT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pancard` varchar(55) DEFAULT NULL,
  `pincode` varchar(55) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(115) DEFAULT NULL,
  `process_step` tinyint NOT NULL DEFAULT '0',
  `refcode` varchar(55) DEFAULT NULL,
  `acc_type` tinyint NOT NULL DEFAULT '0' COMMENT '0=none, 1=selfapply, 2=loan-agent, 3=loan assistant',
  `company_name` varchar(99) DEFAULT NULL,
  `company_gst` varchar(99) DEFAULT NULL,
  `isUser` tinyint NOT NULL DEFAULT '1' COMMENT '\r\n1=steps,2=register',
  `iAgree` tinyint NOT NULL DEFAULT '1' COMMENT '0=checked,1=unchecked',
  `isDnd` tinyint NOT NULL DEFAULT '0' COMMENT '0=no, 1=yes',
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=no, 1=yes',
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=active, 1=delete',
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '1= active, 0=noactive',
  PRIMARY KEY (`id`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tree`
--

DROP TABLE IF EXISTS `user_tree`;
CREATE TABLE IF NOT EXISTS `user_tree` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `refferaltype` int NOT NULL DEFAULT '1' COMMENT '1=Customer, 2=Channel',
  `refferaluserid` int NOT NULL,
  `subuserid` int NOT NULL,
  `payout` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `payout_date` date DEFAULT NULL,
  `payout_amount` float(11,2) NOT NULL DEFAULT '0.00',
  `order_amount` float(11,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vegaah_entry`
--

DROP TABLE IF EXISTS `vegaah_entry`;
CREATE TABLE IF NOT EXISTS `vegaah_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '11=SelfApply,12=Loan Agent,3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4	',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `referenceid` varchar(256) DEFAULT NULL,
  `txstatus` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zaakpay_entry`
--

DROP TABLE IF EXISTS `zaakpay_entry`;
CREATE TABLE IF NOT EXISTS `zaakpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '11=SelfApply,12=Loan Agent,3=LA_Offer_1,4=LA_Offer_2,5=LA_Offer_3,6=SA_Offer_1,7=SA_Offer_2,8=SA_Offer_3,9=SA_Offer_4,10=LA_Offer_4',
  `userid` int NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) DEFAULT NULL,
  `statuscode` varchar(256) DEFAULT NULL,
  `transactionid` varchar(256) DEFAULT NULL,
  `paymentmode` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zwitch_entry`
--

DROP TABLE IF EXISTS `zwitch_entry`;
CREATE TABLE IF NOT EXISTS `zwitch_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `entryfor` int NOT NULL DEFAULT '0',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
