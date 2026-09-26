-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2024 at 06:58 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT NULL,
  `fullname` varchar(80) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int NOT NULL DEFAULT '1' COMMENT '0=Admin, 1=Employee',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `rec_date`, `fullname`, `mobile`, `emailid`, `password`, `role`, `isActive`, `isDelete`) VALUES
(1, '2023-10-28 16:45:00', 'Developer', '9904466599', 'info@verloopweb.com', 'e21fca5ae7e2dfab3f250a7019734bf0', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `administration_log`
--

DROP TABLE IF EXISTS `administration_log`;
CREATE TABLE IF NOT EXISTS `administration_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adminid` int NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration_log`
--

INSERT INTO `administration_log` (`id`, `adminid`, `login_at`, `logout_at`, `server_ip`) VALUES
(1, 1, '2023-12-11 07:28:07', '2023-12-11 07:28:45', '::1'),
(2, 1, '2023-12-18 04:59:22', '2023-12-18 04:59:43', '::1'),
(3, 1, '2023-12-20 12:48:08', NULL, '::1'),
(4, 1, '2023-12-27 11:30:56', '2023-12-27 11:31:04', '::1'),
(5, 1, '2023-12-27 12:06:27', NULL, '192.168.0.114'),
(6, 1, '2023-12-28 10:02:01', NULL, '::1'),
(7, 1, '2024-01-06 07:11:03', '2024-01-06 07:18:17', '::1'),
(8, 1, '2024-01-18 12:59:24', '2024-01-18 13:07:49', '::1'),
(9, 1, '2024-01-25 11:24:26', NULL, '::1'),
(10, 1, '2024-01-25 12:13:04', NULL, '::1'),
(11, 1, '2024-01-26 05:56:00', NULL, '::1'),
(12, 1, '2024-01-26 09:14:14', NULL, '::1'),
(13, 1, '2024-01-26 12:58:09', NULL, '::1'),
(14, 1, '2024-01-29 13:32:25', '2024-01-29 13:35:07', '::1'),
(15, 1, '2024-02-15 11:45:04', NULL, '::1'),
(16, 1, '2024-02-23 12:40:28', NULL, '::1'),
(17, 1, '2024-02-23 14:48:29', NULL, '::1'),
(18, 1, '2024-02-23 15:10:28', NULL, '::1'),
(19, 1, '2024-02-23 16:24:31', NULL, '::1'),
(20, 1, '2024-02-23 16:34:43', NULL, '::1'),
(21, 1, '2024-02-23 16:50:12', '2024-02-23 16:51:09', '::1'),
(22, 1, '2024-02-28 10:30:40', NULL, '::1'),
(23, 1, '2024-02-29 17:25:32', '2024-02-29 18:30:56', '::1'),
(24, 1, '2024-03-01 09:53:09', NULL, '::1'),
(25, 1, '2024-03-28 14:58:51', NULL, '::1'),
(26, 1, '2024-03-30 17:13:12', NULL, '::1'),
(27, 1, '2024-04-20 17:10:22', NULL, '::1'),
(28, 1, '2024-05-07 15:59:46', '2024-05-07 16:00:06', '::1'),
(29, 1, '2024-05-27 12:02:13', NULL, '::1'),
(30, 1, '2024-05-31 12:37:15', NULL, '::1'),
(31, 1, '2024-06-10 15:38:17', NULL, '::1'),
(32, 1, '2024-06-20 18:01:40', NULL, '::1'),
(33, 1, '2024-07-08 17:08:36', NULL, '::1'),
(34, 1, '2024-07-09 10:40:49', NULL, '::1'),
(35, 1, '2024-07-09 10:58:36', NULL, '::1'),
(36, 1, '2024-07-16 12:32:51', NULL, '::1'),
(37, 1, '2024-07-20 14:31:08', NULL, '::1'),
(38, 1, '2024-07-22 10:30:50', NULL, '::1'),
(39, 1, '2024-07-23 11:48:03', NULL, '::1'),
(40, 1, '2024-07-25 17:45:09', NULL, '::1'),
(41, 1, '2024-07-26 15:40:36', NULL, '::1'),
(42, 1, '2024-08-09 11:15:54', '2024-08-09 11:24:55', '::1'),
(43, 1, '2024-08-09 11:29:09', '2024-08-09 11:43:14', '::1'),
(44, 1, '2024-08-09 11:43:24', '2024-08-09 11:43:29', '::1'),
(45, 1, '2024-09-05 18:28:50', '2024-09-05 18:28:55', '::1'),
(46, 1, '2024-09-06 09:48:44', '2024-09-06 12:19:12', '::1'),
(47, 1, '2024-09-06 12:21:41', '2024-09-06 12:31:48', '::1'),
(48, 1, '2024-09-06 14:04:31', '2024-09-06 14:48:51', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `adscontent`
--

DROP TABLE IF EXISTS `adscontent`;
CREATE TABLE IF NOT EXISTS `adscontent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ad_type` tinyint NOT NULL DEFAULT '1' COMMENT '1=Text, 2=Image',
  `ad_content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adsdata`
--

DROP TABLE IF EXISTS `adsdata`;
CREATE TABLE IF NOT EXISTS `adsdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnertype` int NOT NULL DEFAULT '1' COMMENT '1=Channel, 2=Associate',
  `partnerid` int NOT NULL DEFAULT '0',
  `fbpage` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `instapage` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `businessid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `pixelid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allremarks`
--

DROP TABLE IF EXISTS `allremarks`;
CREATE TABLE IF NOT EXISTS `allremarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `module` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `linkid` int NOT NULL,
  `notetext` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankapplylink`
--

DROP TABLE IF EXISTS `bankapplylink`;
CREATE TABLE IF NOT EXISTS `bankapplylink` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loantype` int NOT NULL,
  `bankid` int NOT NULL,
  `applyurl` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bankapplylink`
--

INSERT INTO `bankapplylink` (`id`, `rec_date`, `loantype`, `bankid`, `applyurl`, `isDelete`) VALUES
(1, '2023-08-03 17:17:26', 1, 34, '#', 0),
(2, '2023-07-20 13:01:30', 1, 20, '#', 1),
(3, '2023-07-20 13:01:44', 1, 41, '#', 1),
(4, '2023-08-03 17:18:22', 1, 39, '#', 0),
(5, '2023-08-03 17:18:35', 2, 39, '#', 0),
(6, '2023-08-03 17:20:22', 1, 36, '#', 0),
(7, '2023-08-03 17:20:47', 1, 5, '#', 0),
(8, '2023-08-03 17:21:10', 1, 24, '#', 0),
(9, '2023-08-03 17:21:34', 1, 37, '#', 0);

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
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `rec_date`, `bank_name`, `bank_image`, `order_no`, `isDelete`) VALUES
(1, '2019-12-21 16:57:32', 'Axis Bank', '001.png', 1, 1),
(2, '2019-12-21 16:57:32', 'Yes Bank', '002.png', 2, 1),
(3, '2019-12-21 16:58:04', 'ICICI Bank', '003.png', 3, 1),
(4, '2019-12-21 16:58:04', 'Kotak Mahindra Bank', '004.png', 4, 1),
(5, '2019-12-21 16:58:18', 'HDFC Bank', '005.png', 5, 1),
(6, '2019-12-21 16:59:08', 'TATA Capital', '006.png', 6, 1),
(7, '2019-12-21 16:59:08', 'Indusind Bank', '007.png', 7, 1),
(8, '2021-03-23 12:18:01', 'SBI Bank', '008.png', 8, 1),
(9, '2019-12-21 16:59:38', 'IDBI Bank', '009.png', 9, 1),
(10, '2019-12-21 17:00:10', 'Bandhan Bank', '010.png', 10, 1),
(11, '2019-12-21 17:00:10', 'Union Bank', '011.png', 11, 1),
(12, '2019-12-21 17:00:10', 'RBL Bank', '012.png', 12, 1),
(13, '2019-12-21 17:00:10', 'Aditya Birla Capital', '013.png', 13, 1),
(14, '2020-03-02 20:50:08', 'Indiabulls', '014.png', 14, 1),
(15, '2020-03-02 20:50:08', 'Faircent.com', '015.png', 15, 0),
(16, '2020-03-02 20:50:48', 'Fullertor India', '016.png', 16, 1),
(17, '2020-03-02 20:50:48', 'DCB Bank', '017.png', 17, 1),
(18, '2020-03-02 20:51:27', 'Grihashakti', '018.png', 18, 1),
(19, '2020-03-02 20:51:27', 'PaySense', '019.png', 19, 0),
(20, '2021-03-23 12:17:34', 'Lendingkart', '023.png', 20, 0),
(21, '2020-03-02 20:51:27', 'Indifi', '021.png', 21, 1),
(22, '2023-05-20 14:56:28', 'Money View', '022.png', 22, 0),
(23, '2021-07-27 15:00:49', 'Other Bank', '099.png', 99, 1),
(24, '2021-09-03 13:56:55', 'Moneytap', '024.png', 24, 1),
(25, '2021-09-03 13:57:20', 'IDFC First Bank', '025.png', 25, 1),
(26, '2021-09-03 13:57:48', 'Bajaj Finserv', '026.png', 26, 1),
(27, '2021-09-03 13:59:18', 'Ziploan', '028.png', 28, 1),
(28, '2021-10-25 11:01:50', 'Credit Enable', '029.png', 29, 1),
(29, '2021-10-25 11:02:35', 'Hero Fincorp', '030.png', 30, 1),
(30, '2021-10-25 11:03:20', 'Monexo', '031.png', 31, 1),
(31, '2021-10-25 11:03:20', 'NeoGrowth', '032.png', 32, 1),
(32, '2021-10-25 11:03:20', 'Capital Float', '033.png', 33, 1),
(33, '2021-10-25 11:03:20', 'WeRize', '034.png', 34, 0),
(34, '2021-10-25 11:03:20', 'FinBox', '035.png', 35, 1),
(35, '2021-10-25 11:03:20', 'HDB Financial Business', '036.png', 36, 1),
(36, '2021-10-25 11:03:20', 'Upwards', '037.png', 37, 0),
(37, '2021-10-25 11:03:20', 'Finnable', '038.png', 38, 1),
(38, '2021-10-25 11:03:20', 'IIFL', '039.png', 39, 1),
(39, '2021-10-25 11:03:20', 'Piramal', '040.png', 40, 0),
(40, '2023-05-16 14:46:43', 'CASH E', '041.png', 41, 0),
(41, '2023-06-03 13:34:50', 'Upscale', '042.png', 42, 1),
(42, '2023-06-30 15:00:42', 'L & T Financial Services', '043.png', 43, 1),
(43, '2023-09-18 16:12:43', 'INVESTKRAFT', 'Investkraft.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bulksms`
--

DROP TABLE IF EXISTS `bulksms`;
CREATE TABLE IF NOT EXISTS `bulksms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobileno` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardoffer_order`
--

DROP TABLE IF EXISTS `cardoffer_order`;
CREATE TABLE IF NOT EXISTS `cardoffer_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `offerpage` int NOT NULL DEFAULT '1',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `card_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `isCustomer` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No. 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardoffer_order`
--

INSERT INTO `cardoffer_order` (`id`, `rec_date`, `offerpage`, `fullname`, `mobile`, `emailid`, `card_number`, `registration_date`, `expiry_date`, `amount`, `paymentid`, `isCustomer`, `isActive`, `isDelete`) VALUES
(67, '2024-01-02 12:39:16', 3, 'testuser', '9408881214', 'abc@mail.com', '', '2024-01-02', '2024-04-02', 1.00, '', 0, 0, 0),
(68, '2024-01-03 14:35:48', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', '2024-01-03', '2025-01-03', 1.00, '', 0, 1, 0),
(69, '2024-01-19 11:54:45', 1, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(70, '2024-01-19 12:58:32', 1, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(71, '2024-01-25 12:03:36', 1, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(72, '2024-01-25 12:03:42', 1, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(73, '2024-01-26 11:09:52', 2, 'testuser', '9876543210', 'info@verloopweb.com', '', NULL, NULL, 1178.82, '', 0, 0, 0),
(74, '2024-01-31 09:57:53', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(75, '2024-01-31 09:58:35', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(76, '2024-01-31 10:04:27', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(77, '2024-01-31 10:04:37', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(78, '2024-01-31 10:30:56', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(79, '2024-01-31 10:37:13', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(80, '2024-01-31 10:38:37', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(81, '2024-01-31 10:39:36', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(82, '2024-01-31 10:39:54', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(83, '2024-01-31 10:40:00', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(84, '2024-01-31 10:40:07', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(85, '2024-01-31 10:43:39', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(86, '2024-01-31 10:46:02', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(87, '2024-01-31 10:46:13', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(88, '2024-01-31 10:47:08', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(89, '2024-01-31 10:47:17', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(90, '2024-01-31 10:47:38', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(91, '2024-01-31 10:47:49', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(92, '2024-01-31 10:49:27', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(93, '2024-01-31 10:49:58', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(94, '2024-01-31 10:50:01', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(95, '2024-01-31 10:50:08', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(96, '2024-01-31 10:50:19', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(97, '2024-01-31 10:51:25', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(98, '2024-01-31 10:52:15', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(99, '2024-01-31 10:52:27', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(100, '2024-01-31 10:53:24', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(101, '2024-01-31 10:54:42', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(102, '2024-01-31 10:54:56', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(103, '2024-01-31 10:55:21', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(104, '2024-01-31 10:56:08', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(105, '2024-01-31 11:24:06', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(106, '2024-01-31 11:24:49', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(107, '2024-01-31 11:26:01', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(108, '2024-01-31 11:43:09', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(109, '2024-01-31 11:50:13', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(110, '2024-01-31 11:51:04', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(111, '2024-01-31 11:57:19', 4, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(112, '2024-02-22 17:33:07', 7, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(113, '2024-02-22 17:43:04', 6, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(114, '2024-02-22 17:45:10', 5, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(115, '2024-02-23 15:07:32', 7, 'testuser', '9408881214', 'kishanverloop@gmail.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(116, '2024-02-23 15:08:49', 7, 'testuser', '9408881214', 'kishanverloop@gmail.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(117, '2024-02-23 15:10:10', 6, 'testuser', '9408881214', 'kishanverloop@gmail.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(118, '2024-03-05 15:47:53', 7, 'kishan patel', '9876543210', 'voreko1787@raotus.com', '', NULL, NULL, 352.82, '', 0, 0, 0),
(119, '2024-03-05 15:48:10', 7, 'kishan patel', '9408881214', 'voreko1787@raotus.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(120, '2024-03-05 15:48:28', 7, 'kishan patel', '9408881214', 'voreko1787@raotus.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(121, '2024-03-05 15:48:36', 7, 'kishan patel', '9408881214', 'voreko1787@raotus.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(122, '2024-03-05 15:49:05', 7, 'testuser', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(123, '2024-03-18 12:22:29', 4, 'verloop', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(124, '2024-05-28 11:50:34', 4, 'verloop', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 1.00, '', 0, 0, 0),
(125, '2024-05-28 11:52:05', 4, 'verloop', '9408881214', 'info@verloopweb.com', '', NULL, NULL, 352.82, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `career_enquiry`
--

DROP TABLE IF EXISTS `career_enquiry`;
CREATE TABLE IF NOT EXISTS `career_enquiry` (
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
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `career_enquiry`
--

INSERT INTO `career_enquiry` (`id`, `rec_date`, `firstname`, `lastname`, `email`, `mobile`, `applyfor`, `resume`, `qualifications`, `experience`, `keyskills`, `city`, `server_ip`, `isDelete`) VALUES
(1, '2023-12-21 06:48:51', 'Vicky', 'Jaiswal', 'vickyverloop@gmail.com', '9898007845', '2', '', 'Graduation', 'Excellent', 'asdf, qwerty', 'Somewhere in Gujarat', '::1', 0),
(3, '2023-12-21 07:09:18', 'Sehul', 'Patel', 'sehulverloop@gmail.com', '9408881214', '2', '3fcdcde735e17239f1ccd2730d889312.pdf', 'Graduation', 'aswdsfg ', 'aqqfe', 'Somewhere in Gujarat', '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `career_opening`
--

DROP TABLE IF EXISTS `career_opening`;
CREATE TABLE IF NOT EXISTS `career_opening` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_opening`
--

INSERT INTO `career_opening` (`id`, `rec_date`, `slug`, `title`, `descriptions`, `isActive`, `isDelete`) VALUES
(2, '2023-12-20 12:51:23', 'TST489', 'We are Hiring | Telecaller | Adajan Surat', '<p>✅<strong>&nbsp;Telecaller Eligibility:</strong></p>\n\n<ul>\n	<li><span style=\"font-size:14px\">Clear Speech</span></li>\n	<li><span style=\"font-size:14px\">Good Communication Skills</span></li>\n	<li><span style=\"font-size:14px\">Minimum Qualification &ndash; 10th Pass</span></li>\n	<li><span style=\"font-size:14px\">Minimum Experience &ndash; Freshers Can Apply</span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>✅&nbsp;<strong>Job Role:</strong></p>\n\n<ul>\n	<li><span style=\"font-size:14px\">Calling Customers and Informing them about the Company&#39;s Products/Services.</span></li>\n	<li><span style=\"font-size:14px\">Receive Calls and Solve Queries.</span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>✅&nbsp;<strong>Note:</strong></p>\n\n<ul>\n	<li><span style=\"font-size:14px\">Final Selection and Incentive depend on the candidate&rsquo;s skill &ndash; judged by the company once the interview is done.</span></li>\n	<li><span style=\"font-size:14px\">Job Timing - 09:30 AM To 06:30 PM (Monday to Saturday).</span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><strong>✅ Company Location:</strong></p>\n\n<ul>\n	<li><span style=\"font-size:14px\">129,1<sup>st</sup>&nbsp;Floor Green Elina Complex, Opp. Varun Circle, Anand Mahal Road, Adajan, Surat, Gujarat - 395009.</span></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>✅<strong>&nbsp;Interview Time:</strong></p>\n\n<ul>\n	<li><span style=\"font-size:14px\">10:30 AM To 11:00 AM&nbsp;&amp; 4:00&nbsp;PM&nbsp;to 4:30&nbsp;PM&nbsp; (Monday To Saturday).</span></li>\n</ul>\n', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cashfree_entry`
--

DROP TABLE IF EXISTS `cashfree_entry`;
CREATE TABLE IF NOT EXISTS `cashfree_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channel_log`
--

DROP TABLE IF EXISTS `channel_log`;
CREATE TABLE IF NOT EXISTS `channel_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `partnerid` int NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channel_partner`
--

DROP TABLE IF EXISTS `channel_partner`;
CREATE TABLE IF NOT EXISTS `channel_partner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `firstname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mobileno` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `persontype` int NOT NULL,
  `address` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `earnmoney` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `qualification` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `refcode` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `gstno` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isPartner` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDnd` int NOT NULL DEFAULT '0' COMMENT '0 = No, 1 = Yes',
  `iAgree` int NOT NULL DEFAULT '0',
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channel_partner_documents`
--

DROP TABLE IF EXISTS `channel_partner_documents`;
CREATE TABLE IF NOT EXISTS `channel_partner_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnerid` int NOT NULL,
  `gstdoc` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gstdoc_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cancelcheque` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('085e60evv89i909e8tccs0tm6gi65tlk', '::1', 1722925723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323932353732333b),
('0bj0boerh8jiqjue5nnlsutrjvg89qqi', '::1', 1723193394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333139333339343b),
('0j27ja93hkb8numrd9roobkfo1k01r9o', '::1', 1725599092, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353539393039323b61646d696e6c6f6769647c693a34363b61646d696e69647c733a313a2231223b61646d696e6e616d657c733a393a22446576656c6f706572223b61646d696e747970657c733a313a2230223b),
('10ug93srqj4fo53ua0v3s0q6036rcqlf', '::1', 1725602122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353630323132323b61646d696e6c6f6769647c693a34363b61646d696e69647c733a313a2231223b61646d696e6e616d657c733a393a22446576656c6f706572223b61646d696e747970657c733a313a2230223b),
('26i8s99jgttl0edusr71v0c1i5fp9196', '::1', 1722922407, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323931393934303b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a323a7b733a31323a22636f6d70616e79656d61696c223b693a313732323932343738363b733a373a226170706c796964223b693a313732323932343738363b7d6170706c7969647c733a323a223137223b),
('33nq186akdnb3n3qdvrihue7tkuhomoc', '::1', 1722917193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323931373139333b),
('4nafeud06ogj810cripmeoq2re3n22t4', '::1', 1723025193, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333032353139323b),
('55gisnofg0bqf7r8rifkefcfhupi7t2b', '::1', 1725856228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353835353831353b636f6d70616e79656d61696c7c733a31393a22696e666f4070616973616372656469742e696e223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732353835393832383b7d),
('99b4c8as8v1lqu3fhb0e71auj071bhpf', '::1', 1725616609, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353631343333323b),
('9dacl0ca2phscntcvha15ceib486adk7', '::1', 1725682244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353638323234343b),
('f5shpaqjs4upencubqtrsvk79bn5c25d', '::1', 1722860145, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323836303134343b),
('fetgac8mgki6fjtdjkpu84q9cdcc4ad3', '::1', 1725611286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353631313238363b),
('gg7bdakvsgvosu4lcpj42bcoaa6re7bj', '::1', 1725536415, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353533343931313b),
('grq3dlpgje42vn705j69j19gee0hkqum', '::1', 1725605228, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353630353232383b61646d696e6c6f6769647c693a34363b61646d696e69647c733a313a2231223b61646d696e6e616d657c733a393a22446576656c6f706572223b61646d696e747970657c733a313a2230223b),
('hj8b7le1hpimi3lulls4n7ahfei37hqj', '::1', 1722853641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323835333634313b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732323835363837383b7d),
('lf0rfhj57trumkohlu0oeoqmjrbkvugq', '::1', 1723025192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333032353139323b),
('mqu6lhbbnpre0085pr7hp1i7tbpvmup2', '::1', 1725540707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353534303730373b),
('opno6u0rqcuqvc8aesqb83k7d9s880md', '::1', 1723186379, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732333138343030393b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732333138383630313b7d),
('qaipu4d63kv8k5e1h23ar5c4eockhn8o', '::1', 1725614331, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353631343333313b61646d696e6c6f6769647c693a34383b61646d696e69647c733a313a2231223b61646d696e6e616d657c733a393a22446576656c6f706572223b61646d696e747970657c733a313a2230223b),
('qajq6ois6kakbo36ag768ii1jcg52g6r', '::1', 1725530678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353533303235363b),
('rl8eghoqrokmv1eut5lcrcl8481csan5', '::1', 1722860060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323836303036303b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a343a7b733a31323a22636f6d70616e79656d61696c223b693a313732323836323731393b733a31343a22757365726c6f616e616d6f756e74223b693a313732323836323334343b733a31303a22757365726d6f62696c65223b693a313732323836323334343b733a373a226170706c796964223b693a313732323836323731393b7d757365726c6f616e616d6f756e747c733a363a22353030303030223b757365726d6f62696c657c733a31303a2239393935353532323231223b6170706c7969647c733a323a223330223b),
('s2bfcqo25cmajcr0bee9ttodt1acllii', '::1', 1722932665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933323636353b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732323933323930313b7d6365632d637573746f6d65726c6f6769647c693a33393b6365632d637573746f6d657269647c733a33323a22516d526d576b687257544a6d54544131526c644b646e5a77546a52685a7a3039223b6365632d637573746f6d65726e616d657c733a373a227665726c6f6f70223b6365632d637573746f6d65726d6f62696c657c733a31303a2239343038383831323134223b),
('tjfi15bjb9co2nsnarnfjf2ls8uqmvcq', '::1', 1722856845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323835363834353b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732323836303233353b7d),
('tv9p5ve2rn8pb9v9oanr2bglsa8h88pd', '::1', 1722935316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323933343738313b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a313a7b733a31323a22636f6d70616e79656d61696c223b693a313732323933383931353b7d),
('um3g40fpc4on07s3an8o66n2f42l9dgv', '::1', 1722860060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323836303036303b636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b5f5f63695f766172737c613a343a7b733a31323a22636f6d70616e79656d61696c223b693a313732323836323731393b733a31343a22757365726c6f616e616d6f756e74223b693a313732323836323334343b733a31303a22757365726d6f62696c65223b693a313732323836323334343b733a373a226170706c796964223b693a313732323836323731393b7d757365726c6f616e616d6f756e747c733a363a22353030303030223b757365726d6f62696c657c733a31303a2239393935353532323231223b6170706c7969647c733a323a223330223b),
('uoile0a2n3bgohkov2jlllfukuf2p1i1', '::1', 1722862878, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732323836313039383b6170706c7969647c733a323a223330223b5f5f63695f766172737c613a323a7b733a373a226170706c796964223b693a313732323836363136333b733a31323a22636f6d70616e79656d61696c223b693a313732323836363339373b7d636f6d70616e79656d61696c7c733a32323a22696e666f40706174656c696e66696e6974792e636f6d223b),
('utpbhtu06q6sh651ts97ftki0piombso', '::1', 1725541135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313732353534313133353b);

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

DROP TABLE IF EXISTS `contact_enquiry`;
CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `server_ip` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`id`, `rec_date`, `fullname`, `email`, `mobile`, `subject`, `message`, `server_ip`) VALUES
(1, '2023-12-16 07:23:41', 'Sehul Patel', 'admin@gmail.com', '7676561111', 'Membership Card', 'cashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecreditcashecredit', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cp_account_manager`
--

DROP TABLE IF EXISTS `cp_account_manager`;
CREATE TABLE IF NOT EXISTS `cp_account_manager` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnerid` int NOT NULL,
  `manager_name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manager_mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_social_media`
--

DROP TABLE IF EXISTS `cp_social_media`;
CREATE TABLE IF NOT EXISTS `cp_social_media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnerid` int NOT NULL,
  `link_facebook` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `link_instagram` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `link_linkedin` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `link_twitter` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `link_pinterest` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_log`
--

DROP TABLE IF EXISTS `customer_log`;
CREATE TABLE IF NOT EXISTS `customer_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customerid` int NOT NULL,
  `login_at` datetime DEFAULT NULL,
  `logout_at` datetime DEFAULT NULL,
  `server_ip` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_log`
--

INSERT INTO `customer_log` (`id`, `customerid`, `login_at`, `logout_at`, `server_ip`) VALUES
(1, 1, '2023-12-21 12:56:39', NULL, '::1'),
(2, 1, '2023-12-22 04:59:53', NULL, '::1'),
(3, 1, '2023-12-22 10:11:34', NULL, '::1'),
(4, 1, '2023-12-22 10:39:20', NULL, '::1'),
(5, 1, '2023-12-25 06:51:03', NULL, '::1'),
(6, 1, '2023-12-25 09:42:10', NULL, '::1'),
(7, 1, '2023-12-25 10:57:02', '2023-12-25 11:29:57', '::1'),
(8, 1, '2023-12-25 11:30:08', NULL, '::1'),
(9, 1, '2023-12-26 04:44:20', NULL, '::1'),
(10, 1, '2023-12-26 06:32:27', NULL, '::1'),
(11, 1, '2023-12-26 11:07:32', NULL, '::1'),
(12, 1, '2023-12-26 12:36:02', NULL, '::1'),
(13, 1, '2023-12-27 04:35:53', NULL, '::1'),
(14, 1, '2023-12-27 05:24:50', '2023-12-27 11:24:58', '::1'),
(15, 1, '2023-12-27 11:25:13', '2023-12-27 11:30:19', '::1'),
(16, 1, '2023-12-27 11:25:30', '2023-12-27 11:29:50', '192.168.0.114'),
(17, 1, '2023-12-27 11:31:40', '2023-12-27 11:43:58', '192.168.0.114'),
(18, 1, '2023-12-27 11:36:09', NULL, '::1'),
(19, 1, '2023-12-28 08:55:41', '2023-12-28 09:01:49', '::1'),
(20, 1, '2023-12-28 09:02:05', '2023-12-28 09:12:07', '::1'),
(21, 1, '2023-12-28 09:26:18', '2023-12-28 09:30:10', '192.168.1.17'),
(22, 1, '2023-12-30 12:39:30', NULL, '::1'),
(23, 1, '2024-01-01 05:32:48', '2024-01-01 10:19:01', '::1'),
(24, 1, '2024-01-01 10:19:03', NULL, '::1'),
(25, 1, '2024-01-01 17:40:13', NULL, '::1'),
(26, 1, '2024-01-01 17:42:36', NULL, '::1'),
(27, 1, '2024-01-01 18:15:01', '2024-01-01 18:17:02', '::1'),
(28, 1, '2024-01-02 05:53:23', '2024-01-02 10:42:24', '::1'),
(29, 1, '2024-05-07 16:00:14', NULL, '::1'),
(30, 13, '2024-07-20 14:32:56', NULL, '::1'),
(31, 13, '2024-07-22 09:45:36', NULL, '::1'),
(32, 14, '2024-07-25 17:46:03', NULL, '::1'),
(33, 14, '2024-07-26 09:56:40', '2024-07-26 10:19:17', '::1'),
(34, 14, '2024-07-26 10:19:22', NULL, '::1'),
(35, 14, '2024-07-26 14:12:38', NULL, '::1'),
(36, 14, '2024-08-02 12:26:24', NULL, '::1'),
(37, 14, '2024-08-02 14:34:10', '2024-08-02 15:35:28', '::1'),
(38, 14, '2024-08-05 09:55:17', NULL, '::1'),
(39, 14, '2024-08-06 12:33:41', '2024-08-06 14:29:41', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `email_list`
--

DROP TABLE IF EXISTS `email_list`;
CREATE TABLE IF NOT EXISTS `email_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `portal` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `module` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `subject` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `persontype` int NOT NULL DEFAULT '0' COMMENT '0=Salaried; 1=Self Employed',
  `loanamount` int NOT NULL DEFAULT '0',
  `loantype` int DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `important_update`
--

DROP TABLE IF EXISTS `important_update`;
CREATE TABLE IF NOT EXISTS `important_update` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tags` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `cardid` int NOT NULL DEFAULT '0',
  `inv_for` int NOT NULL COMMENT '0=None, 1=PL, 2=BL, 3=Channel',
  `inv_prefix` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `inv_number` int NOT NULL,
  `inv_date` date DEFAULT NULL,
  `inv_price` float(11,2) NOT NULL,
  `inv_cgst` float(11,2) NOT NULL,
  `inv_sgst` float(11,2) NOT NULL,
  `inv_igst` float(11,2) NOT NULL,
  `inv_grandtotal` float(11,2) NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `rec_date`, `userid`, `cardid`, `inv_for`, `inv_prefix`, `inv_number`, `inv_date`, `inv_price`, `inv_cgst`, `inv_sgst`, `inv_igst`, `inv_grandtotal`, `remarks`, `isDelete`) VALUES
(6, '2023-12-21 20:16:13', 1, 2, 1, 'PL_', 35806, '2023-12-21', 299.00, 0.00, 0.00, 53.82, 352.82, NULL, 0),
(7, '2024-05-31 12:37:28', 12, 3, 1, 'PL_', 0, '2024-05-31', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0),
(8, '2024-07-20 14:31:21', 13, 4, 1, 'PL_', 1, '2024-07-20', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0),
(9, '2024-07-20 14:31:25', 13, 5, 1, 'PL_', 2, '2024-07-20', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0),
(10, '2024-07-20 14:31:36', 13, 6, 1, 'PL_', 3, '2024-07-20', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0),
(11, '2024-07-25 17:45:21', 14, 7, 1, 'PL_', 4, '2024-07-25', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0),
(12, '2024-07-25 17:45:29', 14, 8, 1, 'PL_', 5, '2024-07-25', 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loanlist`
--

DROP TABLE IF EXISTS `loanlist`;
CREATE TABLE IF NOT EXISTS `loanlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `loanname` varchar(255) NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus`
--

DROP TABLE IF EXISTS `loanstatus`;
CREATE TABLE IF NOT EXISTS `loanstatus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statusname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `priorityno` int NOT NULL DEFAULT '1',
  `colorclass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanstatus`
--

INSERT INTO `loanstatus` (`id`, `rec_date`, `statusname`, `priorityno`, `colorclass`, `isDelete`) VALUES
(1, '2020-10-13 19:30:40', 'Approved', 2, 'success', 0),
(2, '2020-10-13 19:30:40', 'Rejected', 3, 'danger', 0),
(3, '2020-10-13 19:30:40', 'In Process', 1, 'info', 0),
(4, '2021-08-28 08:03:33', 'Query Process', 4, 'warning', 0),
(5, '2021-10-29 11:04:29', 'File Reopen', 5, 'info', 0),
(6, '2021-10-29 11:04:29', 'Verification', 1, 'success', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loanstatus_remarks`
--

DROP TABLE IF EXISTS `loanstatus_remarks`;
CREATE TABLE IF NOT EXISTS `loanstatus_remarks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `statusid` int NOT NULL DEFAULT '0',
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loanstatus_remarks`
--

INSERT INTO `loanstatus_remarks` (`id`, `rec_date`, `title`, `remarks`, `statusid`, `isDelete`) VALUES
(1, '2024-09-06 12:10:39', 'Verification Successful', 'Dear Customer, Congratulations! Your verification has been successful! The Login Department has asked you for the required documents. Kindly submit the documents in your customer portal in the next 24 to 48 hours. Please stay in contact with the company for the next 7 working days. In case you have any doubts or queries, call on _______. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit', 6, 0),
(2, '2022-03-21 11:35:53', '4 day documents pending new (document warning)', 'Dear Customer, you\'ve still not submitted the documents for the loan process. Kindly submit the documents in your customer portal in 24-48 hours else your file will be automatically rejected from the system – and the same would be updated in your portal. For more info, you can call us on _____ between 10 AM to 5 PM (Monday to Saturday - only business days).', 4, 0),
(3, '2024-09-06 12:11:33', '4 day documents pending new (documents reject)', 'Dear Customer, We have still not received any documents or information from your side – and due to this, your file has been rejected. You can reapply for a loan after 6 months. Thanks, Paisacredit', 2, 0),
(4, '2024-09-06 12:07:33', 'OTP Not Given (OTP warning remark)', 'Dear Customer, Our company requested you to share the OTP for your loan process but you denied sharing it. As per bank rules, OPT is a must for the loan process. So, if you wish to give OTP for your loan process, kindly call us on _____ in the next 24-48 hours otherwise your file will be automatically rejected from our system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit', 4, 0),
(5, '2024-09-06 12:11:58', 'OTP Not Given (OTP reject)', 'Dear Customer, We regret to inform you that your Personal Loan application in our company is rejected because you didn\'t provide the required OTP for further processes. Thanks, Paisacredit', 2, 0),
(6, '2024-09-06 12:07:43', 'Customer not connect 3 days new (warning)', 'Dear Customer, Our login department is trying to contact you for the loan process for the last 3 days. But you\'ve not responded or you\'re not coming in contact with the company. If you wish to proceed further with your loan process, kindly call on ___ in the next 24-48 hours (between 10 AM – 5 PM; between Monday and Saturday – only business days); else, your file will be automatically rejected from the system. Thanks, Paisacredit', 3, 0),
(7, '2024-09-06 12:12:10', 'Customer not connect 3 days new (reject)', 'Dear Customer, Our Login Department has tried contacting you regarding the loan process – to which you\'ve not responded or you\'re not coming in contact with us, and due to this your file has been automatically rejected from the system – and the same has been updated and shown in your portal. Thanks, Paisacredit', 2, 0),
(8, '2024-09-06 12:12:27', 'File Reject (ABP Low, CIBIL Low, PL Inquiry)', 'Dear Customer, We regret to inform you that your application for a loan with our company has been rejected because you do not meet the required criteria (Average Banking, PL inquiries, Obligations, CIBIL low, ABP low, etc.). Thanks, Paisacredit', 3, 0),
(9, '2024-09-06 12:08:04', 'Language issue (warning)', 'Dear Customer, Our Login Department contacted you but the process couldn\'t go further due to unclear or non-understandable communication/language from your end. We suggest you make a trusted person/third-party call on your behalf within the next 24-48 hours and communicate in an understandable language/manner – failing in doing so would lead to an automatic rejection of your file from the system. You can call us on _____ between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit\r\n', 4, 0),
(10, '2024-09-06 12:12:45', 'Language Issue (reject)', 'Dear Customer, We regret to inform you that your Personal Loan application in our company is rejected due to unclear or non-understandable communication from your end. Thanks, Paisacredit', 2, 0),
(11, '2024-09-06 12:09:58', 'NR Switched Off At Login Time (warning)', 'Dear Customer, Our login department called you at the Customer Login Time but either your contact number was switched off or unreachable. If you are willing to go ahead with your loan process, kindly call us on _______ within the next 24-48 hours else your file will be automatically rejected in the system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit', 4, 0),
(12, '2024-09-06 12:13:10', 'NR Switched Off At Login Time (reject)', 'Dear Customer, We regret to inform you that your application for a personal loan in our company is rejected because even after many consistent tries of reaching out, you are unreachable or your registered mobile number is switched off. For more info call on _______. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit', 2, 0),
(13, '2024-09-06 12:10:58', 'Loan Approval Confirmation', 'Dear Customer, Congratulations! We are pleased to inform you that Your Personal Loan of amount ________ has been approved. Thanks, Paisacredit', 1, 0),
(14, '2022-03-21 11:38:23', 'Application Reopened', 'Dear Customer, you had applied to our company for a loan but as you were not in contact with our company, your file is closed - the reason could be one of the following: (1) You didn\'t submit your document to the company for the login process; (2) You didn\'t respond to our calls; (3) You didn\'t send any of OTP for the login process, etc. So now, as you contacted us again to reopen your file, we are re-opening your file for the loan process and after that, you have to be in contact with our company for 7 days.', 3, 0),
(15, '2024-09-06 12:10:08', 'Customer not interested (warning)', 'Dear Customer, At the time when our login department called you regarding your loan process, you expressed disinterest. If you are willing to take your loan process forward, call us on _______ within the next 24-48 hours else your file will be automatically rejected in the system. You can call us between 10 AM to 5 PM (Monday to Saturday - only business days). Thanks, Paisacredit', 4, 0),
(16, '2022-03-21 11:38:47', 'Customer not interested (reject)', 'Dear Customer, we are sorry to inform you that your Loan application in our organization has been declined because of the uninterest shown by you due to any reason(s).', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meta_keywords`
--

DROP TABLE IF EXISTS `meta_keywords`;
CREATE TABLE IF NOT EXISTS `meta_keywords` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `keywords` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribe`
--

DROP TABLE IF EXISTS `newsletter_subscribe`;
CREATE TABLE IF NOT EXISTS `newsletter_subscribe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subscribeemail` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otpverification`
--

DROP TABLE IF EXISTS `otpverification`;
CREATE TABLE IF NOT EXISTS `otpverification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` date DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `otpcode` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otpverification`
--

INSERT INTO `otpverification` (`id`, `rec_date`, `mobile`, `email`, `otpcode`) VALUES
(1, '2023-12-18', '8530537178', '', '6741'),
(2, '2023-12-19', '9408881214', '', '7857'),
(13, '2023-12-28', '9988776655', '', '6247'),
(14, '2023-12-28', '9408881210', '', '8837'),
(15, '2023-12-29', '8888888888', '', '6186'),
(16, '2024-01-01', '8160300254', '', '3439'),
(17, '2024-01-02', '8160300250', '', '3652'),
(18, '2024-01-29', '8181818181', '', '6855'),
(19, '2024-01-29', '8282828282', '', '9201'),
(20, '2024-01-29', '8181818181', '', '2655'),
(21, '2024-02-15', '9408881213', '', '8219'),
(22, '2024-03-04', '9408881277', '', '3630'),
(23, '2024-04-02', '8000000000', '', '1847'),
(24, '2024-04-09', '9000000000', '', '5962'),
(25, '2024-05-27', '9408881214', '', '4201'),
(26, '2024-06-20', '9408881214', '', '9936'),
(27, '2024-07-22', '9408881214', '', '6221'),
(28, '2024-07-23', '9408880000', '', '5131'),
(29, '2024-07-24', '9408800000', '', '1210'),
(30, '2024-07-26', '9400001214', '', '2272'),
(31, '2024-07-26', '9000000001', '', '3567'),
(32, '2024-07-30', '9696969696', '', '3885'),
(33, '2024-07-31', '9408881200', '', '3669'),
(34, '2024-07-31', '9408881200', '', '6864'),
(35, '2024-07-31', '9408000000', '', '9432'),
(36, '2024-08-01', '9924276751', '', '1943'),
(37, '2024-08-01', '9000111111', '', '3119'),
(38, '2024-08-01', '9924222222', '', '3450'),
(39, '2024-08-01', '9400001215', '', '9637'),
(40, '2024-08-02', '8080808080', '', '8067'),
(41, '2024-08-02', '8080808080', '', '2905'),
(42, '2024-08-02', '9876543210', '', '8943'),
(43, '2024-08-02', '9876543213', '', '1446'),
(44, '2024-08-03', '9595959595', '', '3182'),
(45, '2024-08-05', '9995552221', '', '9005');

-- --------------------------------------------------------

--
-- Table structure for table `partner_subscription_order`
--

DROP TABLE IF EXISTS `partner_subscription_order`;
CREATE TABLE IF NOT EXISTS `partner_subscription_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `partnerid` int NOT NULL,
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `card_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phonepe_entry`
--

DROP TABLE IF EXISTS `phonepe_entry`;
CREATE TABLE IF NOT EXISTS `phonepe_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `productid` int DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phonepe_entry`
--

INSERT INTO `phonepe_entry` (`id`, `rec_date`, `entryfor`, `productid`, `packageid`, `userid`, `orderid`, `orderamount`, `ordernote`, `referenceid`, `txstatus`, `paymentmode`) VALUES
(1, '2023-12-20 10:20:24', 0, 1, 1, 1, '1703067624510', 1.00, 'Standard Plan', NULL, NULL, NULL),
(2, '2023-12-28 09:34:48', 0, 1, 1, 3, '1703756088936', 352.82, 'Standard Plan', NULL, NULL, NULL),
(3, '2023-12-28 09:36:16', 0, 1, 1, 2, '1703756176415', 352.82, 'Standard Plan', NULL, NULL, NULL),
(4, '2024-01-02 12:39:16', 0, 3, 7, 67, '1704179356768', 1.00, 'Standard Plan', NULL, NULL, NULL),
(5, '2024-01-19 11:54:45', 0, NULL, NULL, 69, '1705661685552', 1.00, 'Mega Offer', NULL, NULL, NULL),
(6, '2024-01-19 12:58:32', 0, NULL, NULL, 70, '1705665512833', 1.00, 'Mega Offer', NULL, NULL, NULL),
(7, '2024-01-25 12:03:36', 0, NULL, NULL, 71, '1706180616437', 1.00, 'Mega Offer', NULL, NULL, NULL),
(8, '2024-01-25 12:03:42', 0, NULL, NULL, 72, '1706180622557', 1.00, 'Mega Offer', NULL, NULL, NULL),
(9, '2024-01-26 11:09:52', 0, NULL, NULL, 73, '1706263792164', 1178.82, 'Star Offer', NULL, NULL, NULL),
(10, '2024-02-15 11:49:51', 11, NULL, NULL, 9, '1707977991316', 352.82, 'Personal Subscription Plan', NULL, NULL, NULL),
(11, '2024-02-15 11:53:16', 11, NULL, NULL, 9, '1707978196107', 352.82, 'Personal Subscription Plan', NULL, NULL, NULL),
(12, '2024-02-22 17:43:04', 6, NULL, NULL, 113, '1708603984926', 1.00, 'Bumper offer', NULL, NULL, NULL),
(13, '2024-02-22 17:45:10', 5, NULL, NULL, 114, '1708604110085', 1.00, 'Special offer', NULL, NULL, NULL),
(14, '2024-02-23 15:10:10', 6, NULL, NULL, 117, '1708681210594', 1.00, 'Bumper offer', NULL, NULL, NULL),
(15, '2024-03-18 12:22:29', 4, NULL, NULL, 123, '1710744749251', 1.00, 'IVRpayment Offer', NULL, NULL, NULL),
(16, '2024-05-01 16:46:33', 11, NULL, NULL, 11, '1714562193129', 352.82, 'Personal Subscription Plan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `productslug` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(11,2) NOT NULL,
  `offeramount` float(11,2) NOT NULL,
  `inOffer` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `rec_date`, `productname`, `productslug`, `amount`, `offeramount`, `inOffer`) VALUES
(1, '2023-02-01 16:43:01', 'Personal Subscription Plan', 'personal-subscription-plan', 1999.00, 299.00, 1),
(2, '2023-02-01 16:43:01', 'Business Subscription Plan', 'business-subscription-plan', 1999.00, 999.00, 1),
(3, '2023-02-01 13:35:15', 'Card Offer', 'card-offer', 1999.00, 299.00, 1),
(4, '2023-02-01 13:35:15', 'IVRpayment Offer', 'ivrpayment-offer', 1999.00, 299.00, 1),
(5, '2023-02-01 13:35:15', 'Special offer', 'special-offer', 1299.00, 299.00, 1),
(6, '2023-02-01 13:35:15', 'Bumper offer', 'bumper-offer', 1299.00, 299.00, 1),
(7, '2023-02-01 13:35:15', 'Festival offer', 'festival-offer', 1299.00, 299.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_package`
--

DROP TABLE IF EXISTS `products_package`;
CREATE TABLE IF NOT EXISTS `products_package` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productid` int NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `package_slug` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `package_amount` float(11,2) NOT NULL DEFAULT '0.00',
  `package_offer` float(11,2) NOT NULL DEFAULT '0.00',
  `package_validity` int NOT NULL DEFAULT '0',
  `package_description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `package_order` int NOT NULL DEFAULT '1',
  `inOffer` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_package`
--

INSERT INTO `products_package` (`id`, `rec_date`, `productid`, `package_name`, `package_slug`, `package_amount`, `package_offer`, `package_validity`, `package_description`, `package_order`, `inOffer`) VALUES
(1, '2023-03-13 12:03:06', 1, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(2, '2023-03-13 12:03:06', 1, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(3, '2023-03-13 12:03:06', 1, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1),
(4, '2023-03-13 12:03:06', 2, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(5, '2023-03-13 12:03:06', 2, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(6, '2023-03-13 12:03:06', 2, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1),
(7, '2023-03-13 12:03:06', 3, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(8, '2023-03-13 12:03:06', 3, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(9, '2023-03-13 12:03:06', 3, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1),
(10, '2023-03-13 12:03:06', 4, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(11, '2023-03-13 12:03:06', 4, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(12, '2023-03-13 12:03:06', 4, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1),
(13, '2023-03-13 12:03:06', 5, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(14, '2023-03-13 12:03:06', 5, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(15, '2023-03-13 12:03:06', 5, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1),
(16, '2023-03-13 12:03:06', 6, 'Standard Plan', 'pl-standard-plan', 1299.00, 299.00, 3, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 3 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 3 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 72 Hours</span></li>', 1, 1),
(17, '2023-03-13 12:03:06', 6, 'Super Plan', 'pl-super-plan', 1499.00, 499.00, 6, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 6 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 4 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 60 Hours</span></li>', 2, 1),
(18, '2023-03-13 12:03:06', 6, 'Pro Plan', 'pl-pro-plan', 1999.00, 999.00, 12, '<li><i class=\"fa-solid fa fa-check\"></i> GST additional</li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Plan Validity : </strong> 12 Months</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process In : </strong> 6 NBFCs</span></li>\r\n<li><i class=\"fa-solid fa fa-check\"></i> <span><strong>Loan Process Time : </strong> 48 Hours</span></li>', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `razorpay_entry`
--

DROP TABLE IF EXISTS `razorpay_entry`;
CREATE TABLE IF NOT EXISTS `razorpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `razorpay_entry`
--

INSERT INTO `razorpay_entry` (`id`, `rec_date`, `entryfor`, `userid`, `orderid`, `orderamount`, `ordernote`, `referenceid`, `txstatus`, `paymentmode`) VALUES
(1, '2024-04-09 18:16:34', 11, 11, 'order_NwWqZcBSlrGBwR', 352.82, 'Personal Subscription Plan', NULL, NULL, NULL),
(2, '2024-05-24 17:33:01', 11, 11, 'order_OEK8zDerfr1Aob', 352.82, 'Personal Subscription Plan', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

DROP TABLE IF EXISTS `refund`;
CREATE TABLE IF NOT EXISTS `refund` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ref_for` int NOT NULL,
  `userid` int NOT NULL,
  `invoiceid` int NOT NULL,
  `ref_date` date DEFAULT NULL,
  `ref_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `ref_price` float(11,2) NOT NULL,
  `ref_cgst` float(11,2) NOT NULL,
  `ref_sgst` float(11,2) NOT NULL,
  `ref_igst` float(11,2) NOT NULL,
  `ref_grandtotal` float(11,2) NOT NULL,
  `paymentid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roipackages`
--

DROP TABLE IF EXISTS `roipackages`;
CREATE TABLE IF NOT EXISTS `roipackages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `loantype` int NOT NULL,
  `bankid` int NOT NULL,
  `roi` float(11,2) NOT NULL,
  `termsyears` float(11,2) NOT NULL,
  `termsmonths` int NOT NULL,
  `isPreapproval` int NOT NULL DEFAULT '0',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roipackages`
--

INSERT INTO `roipackages` (`id`, `rec_date`, `loantype`, `bankid`, `roi`, `termsyears`, `termsmonths`, `isPreapproval`, `isDelete`) VALUES
(1, '2021-10-23 14:14:14', 11, 6, 10.99, 6.00, 72, 0, 0),
(2, '2021-10-23 14:14:14', 11, 30, 9.50, 5.00, 60, 0, 0),
(3, '2021-10-23 14:16:03', 11, 25, 10.49, 5.00, 60, 0, 0),
(4, '2021-10-23 14:16:03', 11, 31, 7.73, 4.00, 48, 0, 0),
(5, '2021-10-23 14:17:16', 2, 6, 10.99, 5.00, 72, 0, 0),
(6, '2021-10-23 14:17:16', 2, 21, 10.00, 5.00, 60, 0, 0),
(7, '2021-10-23 14:20:04', 2, 30, 10.50, 5.00, 60, 0, 0),
(8, '2024-04-24 10:14:41', 11, 20, 15.00, 3.00, 36, 0, 0),
(9, '2021-10-23 14:20:51', 2, 25, 11.50, 5.00, 60, 0, 0),
(10, '2021-10-23 14:20:51', 2, 32, 13.00, 1.50, 18, 0, 0),
(11, '2024-04-24 10:16:49', 11, 29, 14.00, 3.00, 36, 0, 0),
(12, '2024-04-24 10:14:48', 12, 28, 10.00, 5.00, 60, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_faqs`
--

DROP TABLE IF EXISTS `site_faqs`;
CREATE TABLE IF NOT EXISTS `site_faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `faq_type` int NOT NULL DEFAULT '1',
  `faq_question` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `faq_answer` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_faqs`
--

INSERT INTO `site_faqs` (`id`, `rec_date`, `faq_type`, `faq_question`, `faq_answer`, `isDelete`) VALUES
(43, '2022-06-28 17:18:22', 1, 'What is a Personal Loan?', '<p>A personal loan is an unsecured loan, which means you don\'t need to pledge collateral to receive funds.</p>', 0),
(44, '2022-06-28 17:18:22', 1, 'Where can a Personal Loan be used?', '<p>Personal Loans can be used for any personal expense, like Shopping, Home Renovation, Higher Education, Debt Consolidation, Tour Travel, Wedding, Medical emergency, etc.</p>', 0),
(45, '2022-06-28 17:18:53', 1, 'What is the eligibility for a Personal Loan?', '<p>The following people are eligible to apply for an Instant Personal Loan:</p>\r\n <ul>\r\n <li>Individuals between 21 and 60 years of age.</li>\r\n <li>Individuals who have had a job for at least 1 year.</li>\r\n <li>Employees of private limited companies, employees from public sector undertakings, including central, state and local bodies.</li>\r\n <li>Those who earn a minimum of Rs. 15,000/- net income per month – credited to their bank.</li>\r\n </ul>', 0),
(46, '2023-02-10 10:36:27', 1, 'How to apply for a Personal Loan in our Partnered NBFCs?', '<p>With Kreditbea\'s Subscription Plan, people can apply for a Personal Loan in our Partnered NBFCs.</p>', 1),
(47, '2023-02-10 10:36:56', 1, 'What credit score is required for a Personal Loan?', '<p>Generally, the required credit score for a Personal Loan is 650 or more.</p>', 0),
(48, '2023-02-10 10:38:09', 1, 'What CIBIL score is required for a Personal Loan?', '<p>Generally, the required CIBIL score for a Personal Loan is 650 or more.</p>', 0),
(49, '2023-02-10 10:38:27', 1, 'How long will it take for my Personal Loan to be processed?', '<p>Once your application is submitted along with your documents, it can take anywhere between 1-7 days for your personal loan to get approved and a couple of days after that for the disbursement.</p>', 0),
(50, '2023-02-10 10:38:43', 1, 'Can my CIBIL Score affect my loan sanction?', '<p>Yes, your CIBIL score is one of the most important factors that play a crucial role in your loan process and sanctions.</p>', 0),
(51, '2023-02-10 10:39:14', 1, 'Can I claim tax benefits on personal loan?', '<p>Yes, only if you use your personal loan amount for certain purposes like investing in a business, buying a residential property, investing in other assets, etc.</p>', 0),
(52, '2023-02-10 10:39:14', 1, 'Can I apply for a personal loan online?', '<p>Yes, you can apply for a personal loan in our Partnered NBFCs by taking our Subscription Plan.</p>', 0),
(53, '2023-02-10 10:40:12', 1, 'Can I take a personal loan to repay my education loan?', '<p>A personal loan can be taken to effectively pay back the educational loan or any sort of loan or debt.</p>', 0),
(54, '2023-02-10 10:40:12', 1, 'What are 3 things banks consider when giving loans?', '<ul>\r\n<li>CIBIL Score</li>\r\n<li>Income Proof & Stability</li>\r\n<li>Age of the loan applicant</li>\r\n</ul>', 0),
(55, '2023-02-10 10:40:46', 2, 'What is a Business Loan?', '<p>A business loan is an unsecured credit you can avail to meet your urgent business requirements. Business loans allow you to usher in funds for your enterprise to expand your business.</p>', 0),
(56, '2023-02-10 10:40:46', 2, 'Where can a Business Loan be used?', '<p>You can use that money for any business expense like business expansion, boost production, buying new machinery, etc.</p>', 0),
(57, '2023-02-10 10:41:42', 2, 'What is the eligibility for a Business Loan?', '<p>The following people are eligible to apply for an Instant Business Loan:</p>\r\n<ul>\r\n<li>Age should be between 21 to 65 years.</li>\r\n<li>CIBIL score must be 700 or more.</li>\r\n<li>The candidate should own a business at least profitable for three successive financial years.</li>\r\n<li>The business turnover must display an upward trend.</li>\r\n<li>Your balance sheet must be audited by a registered Chartered Accountant (CA).</li>\r\n</ul>\r\n', 0),
(58, '2023-02-10 10:42:18', 2, 'How to apply for a Business Loan in our Partnered NBFCs?', '<p>With Kreditbea\'s Subscription Plan, people can apply for a Business Loan in our Partnered NBFCs.</p>', 1),
(59, '2023-02-10 10:42:18', 2, 'What credit score is required for a Business Loan?', '<p>Generally, the required credit score for a Business Loan is 650 or more.</p>', 0),
(60, '2023-02-10 10:43:31', 2, 'What CIBIL score is required for a Business Loan?', '<p>Generally, the required CIBIL score for a Business Loan is 650 or more.</p>', 0),
(61, '2023-02-10 10:43:31', 2, 'How long will it take for my Business Loan to be processed?', '<p>Once your application is submitted along with your documents, it can take anywhere between 1-7 days for your business loan to get approved and a couple of days after that for the disbursement.</p>', 0),
(62, '2023-02-10 10:45:05', 2, 'Can my CIBIL Score affect my loan sanction?', '<p>Yes, your CIBIL score is one of the most important factors that play a crucial role in your loan process and sanctions.</p>', 0),
(63, '2023-02-10 10:45:05', 2, 'What are the documents required for Instant Business Loan?', '<p>Following documents are required for availing a business loan:</p>\r\n<ul>\r\n<li>Business Proof</li>\r\n<li>KYC documents of the company</li>\r\n<li>KYC documents of the business owners</li>\r\n<li>Photo Identity Proof (Aadhar card/ Driving license/ Voter ID/ Passport)</li>\r\n<li>Last six months company bank statements</li>\r\n<li>GST Certificate</li>\r\n<li>Last two years Income Tax Returns</li>\r\n<li>Last two years Balance sheet and Profit & Loss accounts</li>\r\n<li>A report with detailed information about how the candidate will utilise the business loan</li>\r\n</ul>', 0),
(64, '2023-02-10 10:46:07', 3, 'What is the advantage of being a Kreditbea Channel Partner?', '<p>With a fantastic earning opportunity with very low investment, Kreditbea provides a personal dashboard to their Channel Partners where they can get Commission Report, Sharing Report, Payout Report, Profile Information, etc.</p>', 0),
(65, '2023-02-10 10:46:07', 3, 'How can we join the Kreditbea Channel Partner Program?', '<p>You can join the Kreditbea Channel Partner Program through the Channel Partner section of this website. You’ll be guided with all the required steps.</p>', 0),
(66, '2023-02-10 10:46:49', 3, 'Why should I join Kreditbea Channel Partner Program?', '<p>Kreditbea is a rapidly growing company and its Channel Partner Program is the most rewarding program in India. As a Kreditbea Channel Partner, you not only get to earn unbeatable commissions but also you can offer a delightful and convenient financial consultation and service to your customers.</p>', 0),
(67, '2023-02-10 10:46:49', 3, 'How much can I earn with the Channel Partner Program?', '<p>With the Kreditbea Channel Partner Program, you get paid on a sales conversion basis, depending on how many transactions your referrals complete. The better they do, the more you earn. There is no cap on how much you can earn.</p>', 0),
(68, '2023-02-10 10:47:58', 3, 'How can I track my earnings?', '<p>You can instantly manage your customers as well as track your earnings directly from your Channel Partner dashboard on Kreditbea.com.</p>', 0),
(69, '2023-02-10 10:47:58', 3, 'Who can join Kreditbea Channel Partner Program?', '<p>If you\'re aged between 18 and 62 years, you can join the Kreditbea Channel Partner Program. Apart from this, there are no other criteria.</p>', 0),
(70, '2023-02-10 10:48:51', 4, 'What is Kreditbea Subscription Plan?', '<p>Kreditbea\'s Subscription Plan is the most optimised way to get the industry-best financial consultation and services and relish some other great benefits as well.</p>', 0),
(71, '2023-02-10 10:48:51', 4, 'How can I buy a Subscription Plan?', '<p>Just after a quick registration, you can choose the convenient Subscription Plan and purchase it.</p>', 0),
(72, '2023-02-10 10:49:40', 4, 'Which Subscription Plan should I buy?', '<p>Kreditbea offers two types of Subscription Plans:</p>\r\n<ol>\r\n<li>Personal Subscription Plan for expert financial consultation for individuals.</li>\r\n<li>Business Subscription Plan for expert financial consultation for businesses.</li>\r\n</ol>\r\n', 0),
(73, '2023-02-10 10:50:27', 4, 'What are the benefits of buying a Subscription Plan?', '<ul>\r\n<li>File Login in Multiple NBFCs</li>\r\n<li>100% Online Process</li>\r\n<li>Get Personalized Tracking Portal</li>\r\n<li>On-Call Expert Consultation</li>\r\n<li>Dedicated Loan Expert Assigned</li>\r\n<li>CIBIL Remains Unaffected</li>\r\n</ul>', 0),
(74, '2023-02-10 10:52:26', 4, 'What if I, by mistake, do more than 1 payment? Am I eligible for a refund?', '<p>In case a customer has mistakenly made more than a single payment, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company\\\'s registered contact number.</p>', 0),
(75, '2023-02-10 10:52:26', 4, 'Can I get a refund if I buy Subscriptions/Memberships from multiple companies that belong to your group of companies?', '<p>In case a customer has bought Subscriptions/Memberships from multiple companies that belong to our group of companies, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company\\\'s registered contact number.</p>', 0),
(76, '2023-02-10 10:54:47', 5, 'I have already paid. However, my account has not been created yet. What should I do?', '<p>This could occur if the payment gateway is still holding your funds and they have not been credited to the company account. Do not worry; as soon as the funds are credited to the company account, your account will be created and you will be notified via email. Otherwise, the payment gateway will refund your funds in accordance with their policies.</p>', 0),
(77, '2023-02-10 10:55:23', 5, ' Even after so many days, I still have not received my refund. What should I do? ', '<p>This may occur if your funds are held by the payment gateway/bank. The refund will be processed in accordance with the banks/payment gateways policies and procedures.</p>', 0),
(78, '2023-02-10 10:55:48', 5, 'I misunderstood the company service and/or paid by mistake. Is there a way to get a refund? ', '<p>Subscription plan fees are only refundable if you adhere to the company Return & Refund Policy. <a href=\"http://paisacredit.in/refund-policy\" target=\"_blank\">Click here</a> to know more.</p>', 0),
(80, '2023-02-10 10:56:06', 5, 'During the application process, I received pre-approval loan offers based on my eligibility. However, I did not get a loan. Why? ', '<p>For more information on the Pre-Approved Loan offer/eligibility, visit the Terms & Conditions page and read the PRE-APPROVAL LOAN OFFER TERMS AND CONDITIONS section. <a href=\"http://paisacredit.in/terms-conditions\" target=\"_blank\">Click here</a>. </p>', 0),
(81, '2023-02-10 10:56:27', 5, 'Who qualifies for a GST refund?', '<p>Customers who have updated their GST information through their portal are eligible to file GST returns. </p>', 0),
(82, '2023-02-10 10:57:04', 5, 'I have changed my mind and no longer want to use the company services. Is it possible to get a refund?', '<p>Subscription Plan fees are only refundable in accordance with the cancellation and refund policy: <a href=\"http://paisacredit.in/refund-policy\" target=\"_blank\">Click here</a> for more information. </p>', 0),
(83, '2023-02-10 10:57:41', 5, 'I accidentally made multiple payments. Can I get a refund? ', '<p>If a customer accidentally makes multiple payments, they are entitled to a refund. The customer must request a refund within 48 hours of making the payment, either by using the websites Raising A Request section or by calling the company registered phone number.', 0),
(84, '2023-02-10 10:57:58', 5, 'Is it possible to receive a refund if I buy a membership or subscription plan from another company in your group? ', '<p>Customers who purchase a membership or subscription from another company in our group are eligible for a refund. The customer must request a refund within 48 hours of making the payment, either by using the websites Raising A Request section or by calling the company registered phone number.</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_options`
--

DROP TABLE IF EXISTS `site_options`;
CREATE TABLE IF NOT EXISTS `site_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `option_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `option_value` longtext COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_options`
--

INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(25, '2024-09-06 10:04:14', 'privacy-policy', '<p dir=\"ltr\">The privacy of every user of Paisacredit is crucial for the company. This Privacy Policy mentions the data and information we gather about you, how we treat it, with whom we share it, and how we preserve and protect it.</p>\r\n\r\n<p dir=\"ltr\">In the regular course of our business through this website, we gather your personal information through several sources, including:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Information from you, such as applications or other sources, which includes your name, address, marital status, employment, assets and income; and</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, and other financial services firms, banks, etc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">We&#39;re also dedicated to protecting the users of our website by addressing potential privacy concerns. Our privacy guidelines apply to all users globally. This policy applies to all information, in whatever form, relating to Paisacredit&rsquo;s business activities across the world, and to all information handled by Paisacredit, relating to other companies and organizations with whom it deals. It also covers all IT and information communications facilities operated by Paisacredit or on its behalf.</p>\r\n\r\n<p dir=\"ltr\">This Privacy Policy covers the security, information, IT equipment and use of Paisacredit, a company incorporated under the laws, presently in force in India and has its registered office at Surat, Gujarat and all its affiliates. It also includes the use of email, internet, voice and mobile IT equipment. This policy applies to all Paisacredit Users, Clients, and employees (hereafter referred to as &#39;individuals&#39;).</p>\r\n\r\n<p dir=\"ltr\">Subject to arbitration, only the courts and tribunals of Surat, Gujarat shall have exclusive jurisdiction with respect to any suit, action or any other proceedings arising out of or in relation to the Loan Documents. Nothing contained in this clause shall limit any right of the Lender to commence any legal action or proceedings arising in relation to the Loan or the Loan Documents in any other court, tribunal or another appropriate forum, competent jurisdiction and the Borrower and/or the Guarantor hereby consent to that jurisdiction.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>How Paisacredit manages and protects Your Personal Information?</strong></h3>\r\n\r\n<p dir=\"ltr\">Paisacredit doesn&rsquo;t sell or trade information about current or former clients to third parties. We may disclose your personal information as necessary to:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Effect, administer, or enforce a transaction that you request or authorize;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Process or service a financial product or service that you request or authorize; or</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Maintain or service your account with us or with another entity.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">Paisacredit may also disclose your personal information and data for everyday business purposes to organizations or firms who provide consulting, technology or other services for us and agree to maintain its confidentiality; others, such as attorneys, trustees, family members, or others who are authorized to represent you, your estate, or a joint or co-owner of your account; regulatory agencies; or as we are otherwise permitted or required by law or process of law.</p>\r\n\r\n<p dir=\"ltr\">Paisacredit restricts access to your personal information to our employees and to permitted third-parties who need to know that information to provide products or services for us, or to provide, process, or maintain any security, account, or investment product, service or program for you or your benefit. To protect your personal information from unauthorized access and use, we have adopted administrative, technical, and physical security procedures that comply with the Laws in India. These measures include computer safeguards and secured files and buildings.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>What Paisacredit can do with your personal information:</strong></h3>\r\n\r\n<p dir=\"ltr\">We may use your personal information that we collect, or that is provided to us for the following reasons:</p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Considering any application for an account or service;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Carrying out our business functions and activities;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Collecting amounts you owe us, including taking enforcement action;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Exercising our rights and fulfilling our obligations under any agreement with you;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Exercising our rights and fulfilling our obligations for the purposes of complying with all applicable laws, including those relating to money laundering, terrorist financing, bribery, corruption, tax evasion, fraud, and similar; and managing all economic and trade sanction risks;</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Generally administering and monitoring services provided to you (or any related entity); and</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Providing you with information about our other services, or the services of selected third parties in which we think you may have an interest, including by post, telephone and electronic message &ndash; you can opt-out of receiving information about our other services and/or the services of selected third parties by informing us in writing.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>Sharing of Personal Information with Third Parties:</strong></h3>\r\n\r\n<p dir=\"ltr\">Paisacredit does not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is appropriate to comply with the law, enforce our site policies, or protect our or others&#39; rights, property, or safety. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>Security and Confidentiality:</strong></h3>\r\n\r\n<p dir=\"ltr\">The protection and security of your personal information are important to us. We generally follow industry-standard information security tools and measures, as well as internal procedures and strict guidelines to prevent information submitted to us, both during transmission and once we receive it from misuse and data leakage. No method of transmission over the internet, or method of electronic storage, is 100% secure, however. Therefore, while we strive to use commercially acceptable means to protect your personal information, which considerably reduces the risks of data misuse, we cannot guarantee its absolute security. To notify the Company about any security vulnerability or potential data breach, please contact us at: {#VAR_Email ID#} and we will take the appropriate measures to address such an incident, as deemed necessary.</p>\r\n\r\n<p dir=\"ltr\">Our employees can access the information on a &quot;need-to-know&quot; basis and are subject to confidentiality obligations.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>DATA ACCURACY</strong></h3>\r\n\r\n<p dir=\"ltr\">Personal Data must be accurate and, where necessary, kept up to date. It must be corrected or deleted without delay when inaccurate. It is advisable that you ensure that the Personal Data we use and hold is accurate, complete, kept up to date and relevant to the purpose for which we collected it. You must check the accuracy of any Personal Data at the point of collection and at regular intervals afterwards. You must take all reasonable steps to destroy or amend inaccurate or out-of-date Personal Data.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>LIMIT OF LIABILITY</strong></h3>\r\n\r\n<p dir=\"ltr\">We shall not be liable for any confusion caused as a result of any of your actions or omission of any action, anything as a result of your viewing, reading or listening of any content. Although we will do our best to provide constant, uninterrupted access to our website, we accept no responsibility or liability for any interruption or delay.<br />\r\nIn no event will our total liability to you for all damages arising from your use of the service or information, materials or products included on or otherwise made available to you through the service exceed the amount you paid for the service related to your claim.</p>\r\n\r\n<p dir=\"ltr\">We have no liability for any loss, damage or misappropriation of your files under any circumstances or for any consequences related to changes, restrictions, suspension or termination of your service or the agreement. These liabilities shall apply to you even if their remedies shall fail their essential purpose.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>USAGE OF ADVERTISING ID</strong></h3>\r\n\r\n<p dir=\"ltr\">When you are using our application that incorporates our Services, we may also automatically record your Google and/or any other Advertising ID (if you are using an Android device) or your Advertising Identifier (IDFA - if you are using an IOS device; together with the Google and/or any other Advertising ID-&quot;Mobile Advertising IDs&quot;), for advertising or analytics purposes. The said Advertising ID is an anonymous identifier, provided by Google. If your device has an Advertising ID, we may collect and use it for advertising and user analytics purposes. If your device does not have an Advertising ID, we may use other persistent identifiers. The information collected may also be stored on your device. You can reset your mobile Advertising ID or opt-out of receiving targeted ads through your mobile Advertising IDs, which are provided in our settings.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>COMPLIANCE &amp; COOPERATION WITH REGULATORS</strong></h3>\r\n\r\n<p dir=\"ltr\">We regularly review this Privacy Policy and make sure that we process your personal information in ways that comply with regulations currently in force in India. We firmly comply with legal frameworks including data protection laws relating to the transfer of data.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>CONSENT</strong></h3>\r\n\r\n<p dir=\"ltr\">By using our website, you consent to our website&#39;s Privacy Policy. The usage of the website shall be construed as an acceptance of the Privacy Policy.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>GRIEVANCES</strong></h3>\r\n\r\n<p dir=\"ltr\">For any complaints and/or inquiries, you can send us formal written inquiries or complaints at {#VAR_Email ID#}. All inquiries and/or complaints shall be examined and will be resolved expeditiously. Our team of experts will respond by contacting the person who made such inquiries and/or complaints. We work with the appropriate regulatory authorities, including local data protection authorities, to resolve any complaints regarding the transfer of your data that we cannot resolve with you directly.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>MODIFICATION OF THE POLICY</strong></h3>\r\n\r\n<p dir=\"ltr\">We reserve the right to modify this Privacy Policy at our own independent decision at any time. If the changes are significant, the Company shall spare no efforts to apprise its clientele and provide a prominent notice (including, for certain services, email notification of Privacy Policy changes). It is pertinent to remember that it shall be the Clients&#39; responsibility to read the Policy as amended every once in a while.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>USAGE OF COOKIES/COOKIES POLICY</strong></h3>\r\n\r\n<p dir=\"ltr\">Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>\r\n\r\n<p>&nbsp;</p>\r\n');
INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(26, '2024-09-06 10:12:19', 'terms-conditions', '<p dir=\"ltr\">In these Terms &amp; Conditions, the words such as &ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;company&rdquo;, and &ldquo;us&rdquo; refer to Paisacredit and its undertaken system. And the words such as &ldquo;you&rdquo;, &ldquo;your&rdquo; refer to Paisacredit users, customers, etc.</p>\r\n\r\n<p dir=\"ltr\">Here are the terms and conditions for Customers, Employees, and every user of our website - Paisacredit.in. So, the terms and conditions are applied as per your role. You must read all the below-mentioned Terms &amp; Conditions carefully.</p>\r\n\r\n<p dir=\"ltr\">The Company wishes to offer the services under the terms and conditions set forth and the user/customer wishes to be associated unconditionally with these terms and conditions.<br />\r\nTherefore, in consideration of the agreements contained in this, the parties, intending to be legally bound, agree to the correctness and authenticity of the following details given to the company:</p>\r\n\r\n<ul>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Information from you, such as applications or other forms (which include your name, address, marital status, employment, assets and income); and</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Information about you, your accounts, and your holdings and transactions that we receive from you or others, such as account custodians, brokers, and other financial services firms, banks, etc.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p dir=\"ltr\">If the company by any source finds out anyone bad-mouthing or defaming the company&#39;s reputation or company&#39;s members then strict legal action will be taken against the individual or group.<br />\r\nWe&#39;re also serious about protecting our users by addressing potential privacy concerns. Our terms and condition guidelines apply to all users across the world. These terms and conditions apply to all information, in whatever form, relating to Paisacredit&#39;s business activities worldwide, and to all information handled by Paisacredit, relating to other organizations with whom it deals. It also covers all IT and information communications facilities operated by Paisacredit or on its behalf.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>SUBSCRIPTION TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The payment of subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Paisacredit subscription is not transferable and is only valid up to its date of expiry (valid as per subscription) and the subscription may not be used by any person other than the purchaser.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Renewal terms and conditions are at the discretion of Paisacredit.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The subscription can only be used on/for our website.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>CUSTOMER TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The payment of Subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company only takes the cost of the Subscription. No other tip of service is charged.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Customers can use the Subscription only for loan purposes with given benefits. Also, buying a Subscription lets you apply for a loan and it doesn&rsquo;t guarantee loan approval as the final loan approval depends on the banks and the customer profile. If the loan is rejected, you can still avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer is viewing any advertisement/promotional content of the company and then approaching the company thinking that he/she will get the loan approval based on the advertisement, then it must be noted that a loan application will only be submitted once the customer buys Paisacredit&rsquo;s Subscription. Even after buying the Subscription, the final loan approval depends on the bank(s) and customer profile. If the customer&rsquo;s profile doesn&rsquo;t match loan eligibility criteria, he/she won&rsquo;t be able to get a loan. Still, they can avail other benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Subscription can be used only by the persons who have purchased it and not by any other person(s), source or third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer reference does payment through the customer&#39;s own referral link which is provided by the company and if that shows in the customer&#39;s portal then the only company will give the reference payout of that customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer loan is approved in our company and he/she denies that loan approval then also Subscription payment would not be refundable.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan only and the company never misuses them. Just for security, after completing the loan process, the customer can go to the concerned bank and cancel their cheque. The company is not responsible if any problems/disputes arise in the future.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If you do not give the OTP, documents, or document query for verification to the company&#39;s employee for the loan process, then your file will be rejected. (According to the criteria, if your file matches without OTP, your loan will be processed).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If our company&#39;s executive asks you for any payment transaction OTP, do not provide it. If the customer pays any charges other than the charge of the Subscription, the company won&rsquo;t be responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If a customer has any queries regarding the loan process then he/she would have to contact the department where their files are in process.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">We will verify your documents in multiple banks; so whatever documents are submitted by customers in our company that will match with any bank criteria, in that bank only we will proceed with the loan process. For example, if your file will match in 2 banks then our company&#39;s login department will login your document only in that 2 banks. The verification is done by the company&#39;s employee and there is no proof available for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The document will be verified by the company in multiple banks. If your documents match the criteria of the bank, then the login process will be done in that bank. If your documents do not match the criteria of a bank, the company will give you a solution. You can take the solution and reapply after a certain period (as per Subscription) - and this will be shown on the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">It is not fixed that the customer file will be logged in only in the banks listed on the company website. It may be logged in/verified in other banks also, depending on the customer file.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is not taking extra charges other than Subscription charges. If any third-party charges you then our company is not responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">There are no processing or file charges for customer loan approval. There is only one charge and that&#39;s only for the Subscription - validity as per Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company will log in customer files as per their requirements. (Example: If customer requirement is INR 1 lakh and if some bank criteria is up to INR 50,000 then we will not log in their file in that bank).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Wherever the customer file is logged in by the company, these details will not be given to any customer in written or digital form.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan offers and the pre-approval loans process depend only on the bank&#39;s rules and that type of loan is given only on customer behaviour. So, there is so much difference between that type of process and the company&#39;s process. If that loan is rejected in our company but gets approved by another company/source then the customer can&#39;t blame our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan approval depends on your profile so if your documents are perfect and as per the bank criteria then you will get a loan through our company</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The loan information is only given to the person who has applied for the loan.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if any customer would not be in contact with us for 3 days, then that file will be rejected by our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If your file is rejected in our company, then the customer has to make sure that they have to re-submit their documents, with the implemented company-suggested solution, in our company after a certain period (as per Subscription).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company is not responsible if the customer loan is rejected by any queries.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer will apply for the first time but his/her loan is rejected in our company then the company will give them a reason and solution for that. So at re-applying time if the customer will not resubmit a file with the solution implemented then the file will be again rejected in our company for the same reason. Still, the final loan approval will depend on the customer profile and the bank&#39;s criteria and rules &amp; regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide only the reason for rejection to the customer and it would not be provided in the form of hard or soft copy - it will only be shown in the customer portal. Some banks only provide general reasons, they don&#39;t give us any specific reason so the customer should not complain about that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give correct information about their CIBIL SCORE and PROFILE. If the customer gives wrong information, then the company will not be responsible for loan rejection.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will not be providing any CIBIL REPORT in digital or hard copy to any customer in any situation.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Bank charges are applicable as per banks&#39; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">After the customer&rsquo;s file is logged in, the customer has to contact only the login department and coordinate with them &ndash; not any telecaller or other department of the company. The further process has to be done according to the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan process if the rules of any bank change, then we have to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer has to give their registered phone number for being contacted by the login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During the loan processing time, if the company gets any queries and it is not solving that in the given time, then the company has the authority to take more time to address the query. So, the customer must not complain about the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the customer wants to reapply in our company after file rejection or approval, then he/she has to re-submit their documents in the customer portal.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">When you are applying for a loan on our website, we are showing you only your Eligibility for the loan. So whatever details you enter on the website are accepted by software only, and that only shows your pre-approval and not your final loan approval. Approval only depends on your documents and the banks&#39; rules and regulations. We are not giving you any guarantee for the final loan approval.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer&#39;s payment is executed by third-party payment sources. So whenever payment would be received by the company then only a Subscription will be activated for the customer. If a customer&#39;s payment would be debited from his/her account but we don&#39;t receive any payment in the company&#39;s account then the company will not be responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For any reference customer&#39;s payout, their account verification is compulsory. After verification, if the payout amount is debited from the company&rsquo;s account and if it does not credit/reflect in the reference customer&rsquo;s account &ndash; the company won&rsquo;t be responsible for this issue.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company is a private limited company and we are tied up with banks and corporate DSA. We are providing loans through banks only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The eligibility age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every reference payout will have a deduction of 5% TDS.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the loan process, the company will only coordinate with the person who has purchased the Subscription and has an ongoing loan process &ndash; the company won&rsquo;t coordinate with any third party.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Every bank payout will have tax deductions as per the bank&rsquo;s rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will provide the appropriate loan services but the responsibility of customer handling will be of the reference customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any bank&#39;s rules or company&#39;s rules are changing during the processing time of the loan then the customer has to follow those new rules.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our promotional content may communicate messages like &#39;Get Personal Loan in 30 mins&#39; or &#39;Get Rs.5,00,000 in 5 mins&#39; on our company&rsquo;s social media, blogs/articles, ads, websites, emails, SMS, or any other medium &ndash; it must be carefully noted that these messages are only meant for marketing and promotional purposes. All the numerical values that depict time/number of steps/number of clicks &ndash; are for marketing and promotional purposes only. The final loan approval and process depend on the customer profile and the bank/NBFCs&rsquo; rules, regulations and criteria. If you have any sort of doubt before starting the process, you can call our customer care number (10 am to 5 pm &ndash; Monday to Saturday).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">As per the details/information entered by the user, even if the actual pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5 Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The pre-approved amount/pre-approved loan offers are tentative &ndash; the final loan approval, loan sanction, and disbursement depend on the customer profile and the NBFCs&rsquo; rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The first login of the customer&rsquo;s file will be handled and executed by the company. To avail the reapplying option, the customer will have to perform the self-login(s).</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>REFERENCE TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Reference payout would be given to reference customers as per rules and regulations of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company will give payout only on Subscription; it does not depend on the reference customer&#39;s loan approval or rejection.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Whether the customer loan will be approved or not depends on the customer profile and the company does not give any guarantee for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If customers are giving a reference in our company for loan purposes, for that we have some criteria. The customer has to give a reference based on that criteria. The company is not giving you any type of guarantee for the loan approval in any situation at any cost so customers who give a reference have to agree with the decision of that file&#39;s login department.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the reference partner/customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The Customer&#39;s terms and conditions are also applicable to the reference person&#39;s customers.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Reference customer&#39;s payment is done through third-party payment sources. So whenever payment would be received by the company then only the Subscription will be activated. If the customer&#39;s payment is debited from his/her account but the company doesn&#39;t receive any payment in the company&#39;s account then the company will not be responsible for any queries.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;During loan offers, if any reference person will do the online loan process then the company will give the payout up to 40% per Subscription to the reference person. But before that, invoice generation is most important for any payout process.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If the customer of reference will do an online process then the customer&#39;s payout will be given to the referral partner. But during processing time, if the company would refund that amount to the customer for any reason, then that customer&#39;s payout will be cut out from the reference person&#39;s next payout.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Whatever documents are submitted by a reference person, they will be secure in our company. If documents will be misused by any other sources in future then our company is not responsible for that.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat remains the only junction for any legal procedure. No one can contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Every reference payout will have a deduction of 5% TDS.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company will have no responsibility for the promotions conducted and undertaken by the Customer Reference. The Customer Reference agrees that the promotions done by them are at their own risk, and the Customer Reference cannot hold the Company responsible for any sort of losses faced due to the promotions.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>GENERAL TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If the login department fails to solve the customer queries with accuracy, dedication and responsibility, then the login department agency will be cancelled by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Customer&#39;s loan process will take more days due to any festival.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If anyone has GST then they have to add the GST number in their portal so that the company can provide a GST Return to them. If you haven&rsquo;t received your GST Return &ndash; you can raise a request or call on company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company is using Blogs for their advertising, so that content could be of the third party, so the company doesn&#39;t take guarantee of the information to be correct or incorrect.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If customers, employees, any other person, or any other party has a problem with the company then they have to inform that problem to our company through notice; so, we can try to give you a solution of that but after that, any of them want to take a legal action then they have to inform the company through notice. Only then, the legal process will be started.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If customers, employees, any other person, any other third party has a problem/dispute/misunderstanding with the company, the right to take the final decision over the concerned issue is reserved with the company and the concerned person will have to accept the solution provided by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan, the company is not responsible if any problems/disputes arise in the future.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">During any process on the website, if there is any kind of mistake that happens due to the software or website technical problems, the final decision on such disputes can only be taken by the company and it has to be accepted by anyone concerned.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the commitments made by the company&rsquo;s employees (any employee/person from the company), telecallers, or salespersons, etc. should be cross-checked by any concerned person (customer/any other person) from the Terms &amp; Conditions section of Paisacredit.in before availing any of the company&rsquo;s services. Only the rules and regulations stated on the company website will be considered official.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any Customer Referral&rsquo;s customer gets a refund (due to any dispute like payment gateway problem or any other issue) then the referral payout will not be provided (if provided, it would be deducted from the next payout of the customer referral).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">While generating the payout for Customer Referrals, the company uses a third-party payment gateway. So, if the payout is stuck and put on hold due to any payment gateway issue (or any other issue), then the payout would be delayed and all the terms and conditions of the third-party payment gateway would be applied. In such cases, the payout will be released only when the third-party payment gateway releases the stuck payment. In case of a payout dispute with any bank, the bank&rsquo;s criteria will be applied and the payout will be released only when the bank approves the payment.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If there is any dispute that arises between any concerned user (customer, customer referral, etc.) and the company, their account will be disabled immediately by the company. In such a case, the user would be needed to contact the company for any query.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;All of the promotional content put and shared by the company, either on its website or any platform, is only for advertisement purposes. Any person should not assume it as the final loan approval or details of the loan. The final loan approval and specifics of the loan depend on the rules and regulations of various banks (or the concerned bank) and the customer profile. Every customer, or any other user must accept this clause and consider the bank&rsquo;s loan processing time only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The loan-related figures, rates, and information used in the promotional content of the company are general and for promotional purposes. The final nature and specifics of the loan in terms of the loan amount, interest rate, repayment tenure, loan processing fees, loan insurance, etc., depends solely on the customer profile and the rules and regulations stated by the concerned bank. The final loan details depend on the criteria set by the concerned bank(s).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Paisacredit&#39;s company name, logo, content, business concept, software and system, pattern, website structure and design, and business process and offers are copyrighted with the company. If any individual or organization uses/copies any of the above-mentioned by even 1%, legal action may be taken against them.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any person (customer, employee, etc.) is involved in any of the company&#39;s processes then the company is authorized to record the phone calls with that person.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any customer applies for a loan in our company and if any other external person/organization commits fraud with that customer in terms of taking money from you or in any other way then, it will not be the company&rsquo;s responsibility for any kind of loss faced by the customer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Whatever loan offer is given to the customer is according to the customer profile. The customer will have to compulsorily accept the loan offer &ndash; he/she cannot deny the loan offer.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company has full authority to use the customer&rsquo;s information for purposes such as testimonials, advertisements, marketing, SMS, etc. The customer agrees that regulations of Do Not Disturb(DND)/National Do Not Call(NDNC) won&rsquo;t be applied in such practices.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person (user, customer, etc.) visits our website and indulges in any activity &ndash; like clicking a button, link, filling forms, or any other activity on the website, it will clearly mean and express that the person agrees to and acknowledges all terms &amp; conditions, rules &amp; regulations, and policies of the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">After the loan approval, the bank charges will be applied as per the bank&rsquo;s rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;No customer can contact the bank&rsquo;s employees to inquire about/get any information on the loan file processes.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The customer, whose loan has been approved, must read and understand the bank agreement and the bank&rsquo;s terms and conditions carefully. After the loan process is done, the company can&rsquo;t be held responsible or liable for anything.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The company will take legal action against the customer, reference customer, or any other person who submitted fake documents. And the company won&#39;t take any responsibility for the loan process in this case.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If anyone takes any legal action against the company, then only our legal advisor would be dealing with that, and Surat, Gujarat, will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Any wrong/fake commitment or vocal statement given by the company&rsquo;s employees, etc. would be considered invalid. Only the solutions or solution-related vocal statements would be considered valid. All the company&rsquo;s Terms &amp; Conditions, Privacy Policy, Disclaimer, and all other rules will be final and have to be followed.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Loan processing time might get delayed because of any public holiday, technical problems, customer issues, etc.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The Company will not be providing any proof for rejection in hard or soft copy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">It might be possible that the content/figures/information shown on our website are not updated. So, to get the exact information regarding any of our website&rsquo;s content, Terms &amp; Conditions, Privacy Policy, Disclaimer, etc., you can call on our customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;After the purchase of the Subscription, the Company Executive will call the concerned person within 24-48 hours (it could be delayed due to any reason) for the loan process or partner process. If the concerned person doesn&rsquo;t get a call, they can call on the company&rsquo;s customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If the login process is going on and there has been no response from the login department, then the customer can call on the company&rsquo;s customer care number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The content and any process on the website can be changed or modified at any instance. So, the older version of the content and process won&rsquo;t be functional, valid, or a subject of argument for any person &ndash; and the customers, users, etc. have to stay timely updated and accept all the changes unconditionally. Only the current content and process of the website will be considered valid.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;By accessing our website, you affirm your age as 18 years or more. If you&rsquo;re someone below 18 years, we advise you not to access our website or the services</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Any processes regarding the loan might get delayed due to public holidays, technical problems/software issues, etc.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;In case the update email/message regarding the processes of loan is not received by the customer due to a delay because of technical problems, software issues, or any other issue &ndash; they can call on the company&rsquo;s customer care between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;In case the user, customer, any other person, or organization has a query/problem/issue or wants to raise a dispute with the company &ndash; they can either raise a request ticket or call on the company&rsquo;s customer care number between 10 AM to 5 PM (Monday to Saturday &ndash; only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Due to a software/system issue, it might happen that the dates mentioned in the Loan Status are late by 3-4 days.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">To get the TDS Return, the reference customer has to submit all the details/documents asked in their portal. Note: The TDS Return will be given starting from the financial year in which all the details/documents are submitted. The TDS Return won&rsquo;t be provided for the financial year(s) that are prior to the financial year in which the details/documents were submitted.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a personal loan by a salaried individual are &ndash; Min. Age: 21 years; Min. Salary: Rs.15,000/month (credited in the bank account); Salary Slips available; and Job Stability proof available. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The general criteria to apply for a personal loan by a self-employed individual are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); Business Stability proof available; and Current Account in a bank. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a business loan by a small business person are &ndash; Min. Age: 21 years; IT Returns available (min. 1 year); and Business Stability proof available (min. 1 year). Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The general criteria to apply for a business loan by an audited report business person are &ndash; Min. Age: 21 years; Min. Rs.1 Crore+ Yearly Turnover; and Min. 2 Years Audited Report. Final loan approval completely depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The eligible age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription offered by the company. The company only offers Subscription and provides its benefits to the customers. The final loan approval depends on the customer profile and the bank&rsquo;s rules and criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customers will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;Any information/flow/system regarding our website shown in the videos posted on social media (or any platform) may be inaccurate, outdated, or different from our actual website. Only the most updated version of the website, terms &amp; conditions, and other policies shall be valid.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The banks&rsquo; logos used in our ads, social media posts, blogs, emails, or any other medium is for promotional purposes only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The banks&rsquo; logos shown on our website and the pre-approved offer displayed on our website are tentative only. The process will be done in that bank only under whose criteria the customer profile gets matched. The final loan approval and final loan process completely depend on the customer profile and the bank&rsquo;s criteria and rules and regulations.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">By purchasing the company&rsquo;s Subscription, the customer is applying to get the company&rsquo;s services. All the benefits of the Subscription will be given to the customer by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any customer data &amp; information, KYC documents, or OTP is misused in future by any third-party, our company and its directors, employees, or any individuals associated with the company cannot be held responsible for the same in any matter whatsoever including any loss, harm, or damage due to the usage of information from the portal. Customers are advised to bring in their own discretion in such matters. The information provided on the website is of financial nature. It is a mutual understanding that customers association with the website will be at the customer&#39;s will, preference and risk.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any customer&rsquo;s documents are found to be fraud by the bank/financial institution or there&rsquo;s any sort of an issue with any customer&rsquo;s repayment of the loan to the banks/financial institution &ndash; then these matters have to be solely between the customer and the bank/financial institution. Our company and its directors, employees, or any other individual associated with the company cannot be held responsible in such cases. If the customer documents are found to be fake and fraud and are used anywhere for any purpose, the company cannot be held responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any third-party gets a loan approved on someone else&rsquo;s identity and documents, then our company and its directors, employees, or any other individual associated with the company cannot be held responsible.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">If any of the company&rsquo;s customers or any third-party wants a legal course, action and proceedings with the company, then only the company&rsquo;s legal team can be involved. There will absolutely be no involvement of the company&rsquo;s directors, any other individual associated with the company, or employees in any legal proceeding. For any legal action or proceeding involving our company, Surat, Gujarat, shall remain the only jurisdiction.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">TDS will be given only to the ones whose referral payout has been generated. If your TDS is deducted, you can contact your CA. If your TDS has been deducted and it&rsquo;s not showing, then you can contact the company&rsquo;s customer care number between 10 AM to 5 PM &ndash; Monday to Saturday (only business days).</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;If any person enters incorrect information and starts the loan process on our website, and if this leads to any sort of fraud in future, the company, its directors, employees, any other individual associated with the company cannot be held responsible for the same.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The pre-approved loan offers shown are from those banks/NBFCs that have eligibility criteria to which the customer&rsquo;s profile matches (profile evaluated as per the information entered by the customer). These pre-approved loan offers are tentative only &ndash; the final loan approval, loan sanction, and disbursement depend on the NBFC(s) and their rules and regulations. The company will only log in the customer&rsquo;s file in those NBFCs with which the company has tie-ups/partnerships/collaborations and where the customer&rsquo;s profile matches the NBFC eligibility criteria.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">Our company&rsquo;s services are strictly for the residents of India only &ndash; not for the non-residents. If any non-resident purchases our Subscription, they can request for a refund as per the company&rsquo;s Cancellation &amp; Refund Policy.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">In case a customer has mistakenly made more than a single payment, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">In case a customer has bought Subscriptions from multiple companies that belong to our group of companies, the customer will be eligible to get a refund. The customer will have to request a refund within 48 hours of the payment through the Raising A Request section of the website or by calling on the company&rsquo;s registered contact number.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>PRE-APPROVAL LOAN OFFER TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<p dir=\"ltr\">The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the software calculation done on Monthly Income and Current Monthly EMI entered by the person. This &quot;Pre-Approved Loan Offer&quot; is tentative and not the final loan approval (this is already mentioned on the Pre-Approved loan Offer page) &ndash; as the final loan approval is given by the bank only; based on the bank&rsquo;s rules and regulations and the customer profile. And this is clearly stated in the company&rsquo;s Terms &amp; Conditions which is agreed by the person before registration.</p>\r\n\r\n<p dir=\"ltr\">Here&#39;s an example to know how the &lsquo;Pre-Approved Loan Offer&rsquo; is shown:<br />\r\nConsider that a person (named &ldquo;Gopinath&rdquo;) enters the following details in our website:<br />\r\nMonthly Income: Rs.1,00,000<br />\r\nCurrent Monthly EMI: Rs.30,000</p>\r\n\r\n<p dir=\"ltr\">Based on these details, Gopinath is left with Rs.70,000 in hand (deducting current EMI) every month. So, according to the general rules of the banks, the EMI of 50% of the in-hand amount can be approved. So, the loan amount that allows a maximum of Rs.35,000 (70,000/2) EMI can be approved. And based on the EMI and rate of interest (11% tentatively), the eligible amount is shown in the Pre-Approved Loan Offer. And based on this Rs.1903/lakh EMI is shown.</p>\r\n\r\n<h3 dir=\"ltr\"><strong>CANDIDATE TERMS AND CONDITIONS</strong></h3>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The interview time is fixed.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The interview can&#39;t be taken any other time than the time decided by the company.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">&nbsp;The Company can ask any questions in the interview.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">The candidate will have to appear for the interview as many times as the company asks.</p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\">A resume (Xerox) will be mandatory for the interview. The resume will not be returned. There will be no misuse of the resume.</p>\r\n	</li>\r\n</ol>\r\n\r\n<h3 dir=\"ltr\"><strong>USAGE OF COOKIES / COOKIES POLICY</strong></h3>\r\n\r\n<p dir=\"ltr\">Cookies are small files that a site or its service provider transfers to your computer&#39;s hard drive through your web browser with your permission, which enables the site or service provider&#39;s systems to recognize your browser and capture and remember certain information. We use cookies to help us understand and save your preferences for future visits, keep track of advertisements and compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>\r\n\r\n<p dir=\"ltr\">The user, customer, or any other person accessing our website clearly expresses and agrees that they have fully read and understood the Terms &amp; Conditions and Privacy Policy of Paisacredit, and they accept them unconditionally.</p>\r\n\r\n<ol dir=\"ltr\">\r\n</ol>\r\n'),
(27, '2021-07-25 07:52:01', 'welcome-status', '0'),
(28, '2021-07-25 07:52:01', 'welcome-message', '<h2>Welcome Message</h2>');
INSERT INTO `site_options` (`id`, `rec_date`, `option_key`, `option_value`) VALUES
(29, '2024-09-06 10:08:10', 'disclaimer', '<p dir=\"ltr\">Paisacredit and its customers and employees use and present Paisacredit.in (the &ldquo;Website&rdquo;) for personal and informational purposes only. In addition, we further expressly disclaim any warranties or representations (expressed or implied) in respect of quality, suitability, accuracy, reliability, completeness, timeliness, performance for a particular purpose or legality of the services listed or displayed or transacted or the content on the website. You must not perceive and construe any such information or other material as legal, tax, investment, financial, or other advice. You completely acknowledge and undertake that you are accessing the services on the Paisacredit website and transacting at your own risk only and are using your best and prudent judgement before entering into and making any transactions through the website. You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information or other content contained on the Paisacredit website before making any decisions based on such information or other content.</p>\r\n\r\n<p dir=\"ltr\">Nothing contained on our website constitutes a solicitation, recommendation, endorsement, or offer by Paisacredit to buy or sell any securities or other financial instruments in this or in any other jurisdiction in which such solicitation or offer would be unlawful under the securities laws of such jurisdiction. You further acknowledge that at no time shall any right, title, or interest in the services sold through or displayed on the website vest with Paisacredit, nor shall Paisacredit have any obligations or liabilities in respect of any transactions on the website.</p>\r\n\r\n<p dir=\"ltr\">After you enter your details on our website for any purpose, the company takes no responsibility in case you come across instances of data misusage of any form.</p>\r\n'),
(30, '2024-07-08 17:36:00', 'facebookpixel', '#'),
(31, '2024-07-08 17:35:57', 'facebookdomain', '#'),
(32, '2021-07-25 07:52:42', 'account-msg-customer', ''),
(33, '2021-07-25 07:52:52', 'account-msg-channel', ''),
(34, '2024-07-25 17:45:29', 'newinvoiceno', '6'),
(35, '2024-09-06 10:00:23', 'refund-policy', '<p dir=\"ltr\"><span style=\"font-family:arial,helvetica,sans-serif\"><span style=\"font-size:16px\">Thank you for giving us the opportunity to serve you.</span></span><br />\r\n<br />\r\n<span style=\"font-family:arial,helvetica,sans-serif\"><strong>What are the criteria for our customers to Request a Refund?</strong></span></p>\r\n\r\n<p><span style=\"font-family:arial,helvetica,sans-serif\">1. A customer can be eligible for a refund if an email requesting a refund is sent by the customer (with the registered email id) to {#VAR_Email ID#} within 48 hours of purchasing the Subscription plan. The payment mode for the refund will be the same as the mode through which the customer&#39;s payment was received. As per the banks, the refund can be received within 7 to 8 working days.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-family:arial,helvetica,sans-serif\">2. If the customer is unable to communicate with the company in English, Hindi, or Gujarati, they can apply for a refund within 48 hours of purchasing the Subscription plan.</span></p>\r\n\r\n<p dir=\"ltr\"><span style=\"font-family:arial,helvetica,sans-serif\">3. There are certain areas/locations in which our company does not provide its services. If any customer has bought our Subscription plan and belongs to such areas/locations, they can apply for a refund within 48 hours of purchasing the Subscription plan.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-family:arial,helvetica,sans-serif\">If you have any query/doubt regarding our policy, please contact us by writing at {#VAR_Email ID#} or calling on {#VAR#} between 10 AM to 5 PM (business days only).</span></p>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n'),
(36, '2024-09-06 10:57:20', 'customer-legal-agreement', '<h3 dir=\"ltr\"><strong>CUSTOMER TERMS AND CONDITIONS:</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The payment of Subscription fees is refundable only in accordance with the company&#39;s Cancellation &amp; Refund Policy.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company only takes the cost of the Subscription. No other tip of service is charged.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Customers can use the Subscription only for loan purposes with given benefits. Also, buying a Subscription lets you apply for a loan and it doesn&rsquo;t guarantee loan approval as the final loan approval depends on the banks and the customer profile. If the loan is rejected, you can still avail other benefits of the Subscription.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If a customer is viewing any advertisement/promotional content of the company and then approaching the company thinking that he/she will get the loan approval based on the advertisement, then it must be noted that a loan application will only be submitted once the customer buys Paisacredit&rsquo;s Subscription. Even after buying the Subscription, the final loan approval depends on the bank(s) and customer profile. If the customer&rsquo;s profile doesn&rsquo;t match loan eligibility criteria, he/she won&rsquo;t be able to get a loan. Still, they can avail other benefits of the Subscription.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Subscription can be used only by the persons who have purchased it and not by any other person(s), source or third party.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If a customer reference does payment through the customer&#39;s own referral link which is provided by the company and if that shows in the customer&#39;s portal then the only company will give the reference payout of that customer.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If the customer loan is approved in our company and he/she denies that loan approval then also Subscription payment would not be refundable.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The documents, cheques, and OTP that the company&#39;s employee asks the customer are for the processing of the loan only and the company never misuses them. Just for security, after completing the loan process, the customer can go to the concerned bank and cancel their cheque. The company is not responsible if any problems/disputes arise in the future.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If you do not give the OTP, documents, or document query for verification to the company&#39;s employee for the loan process, then your file will be rejected. (According to the criteria, if your file matches without OTP, your loan will be processed).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If our company&#39;s executive asks you for any payment transaction OTP, do not provide it. If the customer pays any charges other than the charge of the Subscription, the company won&rsquo;t be responsible for the same.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If a customer has any queries regarding the loan process then he/she would have to contact the department where their files are in process.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>We will verify your documents in multiple banks; so whatever documents are submitted by customers in our company that will match with any bank criteria, in that bank only we will proceed with the loan process. For example, if your file will match in 2 banks then our company&#39;s login department will login your document only in that 2 banks. The verification is done by the company&#39;s employee and there is no proof available for the same.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The document will be verified by the company in multiple banks. If your documents match the criteria of the bank, then the login process will be done in that bank. If your documents do not match the criteria of a bank, the company will give you a solution. You can take the solution and reapply after a certain period (as per Subscription) - and this will be shown on the customer portal.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>It is not fixed that the customer file will be logged in only in the banks listed on the company website. It may be logged in/verified in other banks also, depending on the customer file.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Our company is not taking extra charges other than Subscription charges. If any third-party charges you then our company is not responsible for that.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>There are no processing or file charges for customer loan approval. There is only one charge and that&#39;s only for the Subscription - validity as per Subscription.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Our company will log in customer files as per their requirements. (Example: If customer requirement is INR 1 lakh and if some bank criteria is up to INR 50,000 then we will not log in their file in that bank).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Wherever the customer file is logged in by the company, these details will not be given to any customer in written or digital form.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Loan offers and the pre-approval loans process depend only on the bank&#39;s rules and that type of loan is given only on customer behaviour. So, there is so much difference between that type of process and the company&#39;s process. If that loan is rejected in our company but gets approved by another company/source then the customer can&#39;t blame our company.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Loan approval depends on your profile so if your documents are perfect and as per the bank criteria then you will get a loan through our company</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The loan information is only given to the person who has applied for the loan.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>During the loan processing time, if any customer would not be in contact with us for 3 days, then that file will be rejected by our company.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If your file is rejected in our company, then the customer has to make sure that they have to re-submit their documents, with the implemented company-suggested solution, in our company after a certain period (as per Subscription).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company is not responsible if the customer loan is rejected by any queries.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If the customer will apply for the first time but his/her loan is rejected in our company then the company will give them a reason and solution for that. So at re-applying time if the customer will not resubmit a file with the solution implemented then the file will be again rejected in our company for the same reason. Still, the final loan approval will depend on the customer profile and the bank&#39;s criteria and rules &amp; regulations.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company will provide only the reason for rejection to the customer and it would not be provided in the form of hard or soft copy - it will only be shown in the customer portal. Some banks only provide general reasons, they don&#39;t give us any specific reason so the customer should not complain about that.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The customer has to give correct information about their CIBIL SCORE and PROFILE. If the customer gives wrong information, then the company will not be responsible for loan rejection.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company will not be providing any CIBIL REPORT in digital or hard copy to any customer in any situation.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Bank charges are applicable as per banks&#39; rules and regulations.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company will take legal action against the customer who submitted fake documents. And the company won&rsquo;t take any responsibility for the loan process in this case.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>After the customer&rsquo;s file is logged in, the customer has to contact only the login department and coordinate with them &ndash; not any telecaller or other department of the company. The further process has to be done according to the login department.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>During the loan process if the rules of any bank change, then we have to follow those new rules.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The customer has to give their registered phone number for being contacted by the login department.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>During the loan processing time, if the company gets any queries and it is not solving that in the given time, then the company has the authority to take more time to address the query. So, the customer must not complain about the same.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If the customer wants to reapply in our company after file rejection or approval, then he/she has to re-submit their documents in the customer portal.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>When you are applying for a loan on our website, we are showing you only your Eligibility for the loan. So whatever details you enter on the website are accepted by software only, and that only shows your pre-approval and not your final loan approval. Approval only depends on your documents and the banks&#39; rules and regulations. We are not giving you any guarantee for the final loan approval.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>All the detailed criteria, terms, and information behind any of the company&rsquo;s concise promotional content (social media ads, banners, SMS, advertisements, emails, etc.) are stated in the Terms &amp; Conditions and Privacy Policy sections of the website. Any concerned person (customer, employee, etc.) must check and accept all the rules and regulations before availing any of the company&rsquo;s services. If any person has confusion, they can call on the company&rsquo;s customer care number to gain clarity before availing company&rsquo;s services.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The customer&#39;s payment is executed by third-party payment sources. So whenever payment would be received by the company then only a Subscription will be activated for the customer. If a customer&#39;s payment would be debited from his/her account but we don&#39;t receive any payment in the company&#39;s account then the company will not be responsible for that.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>For any reference customer&#39;s payout, their account verification is compulsory. After verification, if the payout amount is debited from the company&rsquo;s account and if it does not credit/reflect in the reference customer&rsquo;s account &ndash; the company won&rsquo;t be responsible for this issue.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Our company is a private limited company and we are tied up with banks and corporate DSA. We are providing loans through banks only.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Multiple partnered banks&#39; logos are shown on our website and our promotional content across many mediums &ndash; these are shown only for our company&#39;s marketing purpose. It might be possible that certain banks, whose logos are shown on our website/promotional content, are not partnered with our company. Also, these should not be assumed as any bank&#39;s advertisement.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If anyone takes any legal action against the company then only our legal advisor would be dealing with that and Surat, Gujarat will only remain the junction for any legal procedure. No one would be able to contact any employee or director of our company.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If any person has a doubt/question regarding any of the company&rsquo;s terms and conditions, they can contact the company.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The eligibility age for buying a Subscription is 18 - 62 years. The persons in this age bracket can avail benefits of the Subscription.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>For the Reference Customers who have given customer referrals to the company, it would be compulsory for them to submit their Payout Documents to the company within 30 days. If not submitted, all the payouts of the Reference Customer will be automatically cancelled. To get the cancelled payout, you can contact the company and discuss it.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Every reference payout will have a deduction of 5% TDS.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>For the loan process, the company will only coordinate with the person who has purchased the Subscription and has an ongoing loan process &ndash; the company won&rsquo;t coordinate with any third party.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Every bank payout will have tax deductions as per the bank&rsquo;s rules and regulations.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The Company&#39;s authorized person can change any rules and regulations at any time; the concerned person must be regularly updated with the company&rsquo;s terms and conditions and has to accept them unconditionally.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The company will provide the appropriate loan services but the responsibility of customer handling will be of the reference customer.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>If any bank&#39;s rules or company&#39;s rules are changing during the processing time of the loan then the customer has to follow those new rules.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The office holidays and bank holidays will not be counted as working days/business days. The company&rsquo;s office work will be done on working days only.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>Our promotional content may communicate messages like &#39;Get Personal Loan in 30 mins&#39; or &#39;Get Rs.5,00,000 in 5 mins&#39; on our company&rsquo;s social media, blogs/articles, ads, websites, emails, SMS, or any other medium &ndash; it must be carefully noted that these messages are only meant for marketing and promotional purposes. All the numerical values that depict time/number of steps/number of clicks &ndash; are for marketing and promotional purposes only. The final loan approval and process depend on the customer profile and the bank/NBFCs&rsquo; rules, regulations and criteria. If you have any sort of doubt before starting the process, you can call our customer care number (10 am to 5 pm &ndash; Monday to Saturday).</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>As per the details/information entered by the user, even if the actual pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5 Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The pre-approved amount/pre-approved loan offers are tentative &ndash; the final loan approval, loan sanction, and disbursement depend on the customer profile and the NBFCs&rsquo; rules and regulations.</strong></p>\r\n	</li>\r\n	<li dir=\"ltr\">\r\n	<p dir=\"ltr\"><strong>The first login of the customer&rsquo;s file will be handled and executed by the company. To avail the reapplying option, the customer will have to perform the self-login(s).</strong></p>\r\n	</li>\r\n</ol>\r\n\r\n<p dir=\"ltr\">&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>The Customer clearly expresses and agrees that they have fully read and understood the Terms &amp; Conditions mentioned in this Agreement &ndash; and they accept them unconditionally.</strong></p>\r\n'),
(37, '2023-02-18 17:52:56', 'channel-legal-agreement', '<h3>CHANNEL TERMS AND CONDITIONS</h3>'),
(38, '2024-07-08 17:35:52', 'smssenderid', '#'),
(39, '2022-03-12 00:11:33', 'pl-remarketing-sms', ''),
(40, '2022-02-01 13:15:20', 'bl-remarketing-sms', ''),
(41, '2024-09-06 11:54:59', 'pl-process-sms', 'You’re Eligible For Rs.{#var#}/- Pre-Approved Loan Offer. Disbursement in Just 30 minutes. Limited Time Offer Only. Apply Now {#var_product link#} Paisacredit'),
(42, '2024-09-06 11:25:25', 'bl-process-sms', 'Dear Customer, Your Business Loan Application is Processed. Get Pre-Approved Loan Offer in Just 3 Steps. Apply Now {#var#} Paisacredit'),
(43, '2022-02-23 15:29:28', 'pl-offer-sms', ''),
(44, '2022-02-01 13:44:38', 'bl-offer-sms', ''),
(45, '2022-02-01 14:07:12', 'account-sms', 'Dear Customer, Congrats! Submission of your loan application is done. Kindly check your registered email and login into the customer portal for submitting the required documents. Regards, KreditBea'),
(46, '2022-02-01 14:07:12', 'cp-account-sms', 'Congrats! Your Partner Application is successfully submitted. Kindly check your Registered Email and login into the Channel Partner Portal. Please submit the required documents for account activation. Our Company Executive will be in touch soon. Regards, KreditBea'),
(47, '2022-03-25 12:05:49', 'cp-offer-sms', ''),
(48, '2024-09-06 11:50:18', 'payment-fail-sms', 'Sorry, your payment for Paisacredit Subscription was not successful. Try Another Payment Method here {#var#} Paisacredit'),
(49, '2024-07-08 17:36:04', 'fbaccesstokendigital', '#'),
(50, '2024-07-08 17:36:08', 'fbeventnamedigital', '#'),
(51, '2024-07-08 17:36:11', 'fbeventiddigital', '#'),
(52, '2023-11-03 10:53:46', 'fbaccesstokenpartner', 'fbaccesstokenpartner'),
(53, '2023-11-03 10:53:58', 'fbeventnamepartner', 'fbeventnamepartner'),
(54, '2023-11-03 10:53:58', 'fbeventidpartner', 'fbeventidpartner'),
(55, '2024-07-09 11:32:43', 'wpcampaignmain', '#'),
(56, '2024-07-08 17:36:18', 'wpcampaignoffer', '#'),
(57, '2024-07-08 17:36:22', 'wpcampaignsuccess', '#'),
(58, '2024-07-09 11:32:48', 'wpcampaignmain_imgurl', '#'),
(59, '2024-07-09 11:32:52', 'wpcampaignmain_imgname', '#'),
(60, '2024-07-09 11:32:58', 'wpcampaignoffer_imgurl', '#'),
(61, '2024-07-09 11:33:03', 'wpcampaignoffer_imgname', '#'),
(62, '2024-07-09 11:33:07', 'wpcampaignsuccess_imgurl', '#'),
(63, '2024-07-09 11:33:11', 'wpcampaignsuccess_imgname', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sms_list`
--

DROP TABLE IF EXISTS `sms_list`;
CREATE TABLE IF NOT EXISTS `sms_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `portal` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `module` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_log`
--

DROP TABLE IF EXISTS `sms_log`;
CREATE TABLE IF NOT EXISTS `sms_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `crontype` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'company',
  `parentid` int NOT NULL DEFAULT '1',
  `cronname` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `msgcount` int NOT NULL,
  `msgresponse` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subpaisa_entry`
--

DROP TABLE IF EXISTS `subpaisa_entry`;
CREATE TABLE IF NOT EXISTS `subpaisa_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `entryfor` int NOT NULL DEFAULT '0' COMMENT '1=Customer, 2=Channel, 11=Digital PL, 12=Digital BL',
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subpaisa_entry`
--

INSERT INTO `subpaisa_entry` (`id`, `rec_date`, `entryfor`, `userid`, `orderid`, `orderamount`, `ordernote`, `referenceid`, `txstatus`, `paymentmode`) VALUES
(1, '2024-01-31 10:54:43', 6, 101, '1706694883006', 1178.00, 'star Offer', NULL, NULL, NULL),
(2, '2024-01-31 10:54:56', 6, 102, '1706694896839', 1178.00, 'star Offer', NULL, NULL, NULL),
(3, '2024-01-31 10:55:21', 6, 103, '1706694921527', 1178.00, 'star Offer', NULL, NULL, NULL),
(4, '2024-01-31 10:56:08', 6, 104, '1706694968265', 1178.00, 'star Offer', NULL, NULL, NULL),
(5, '2024-01-31 11:24:06', 6, 105, '1706696646158', 1178.00, 'star Offer', NULL, NULL, NULL),
(6, '2024-01-31 11:24:49', 6, 106, '1706696689973', 1178.00, 'star Offer', NULL, NULL, NULL),
(7, '2024-01-31 11:26:01', 6, 107, '1706696761768', 1178.00, 'star Offer', NULL, NULL, NULL),
(8, '2024-01-31 11:43:09', 6, 108, '1706697789755', 1178.00, 'star Offer', NULL, NULL, NULL),
(9, '2024-01-31 11:50:13', 6, 109, '1706698213093', 1178.00, 'star Offer', NULL, NULL, NULL),
(10, '2024-01-31 11:51:04', 6, 110, '1706698264826', 1178.00, 'star Offer', NULL, NULL, NULL),
(11, '2024-01-31 11:57:19', 6, 111, '1706698639193', 1178.00, 'star Offer', NULL, NULL, NULL),
(12, '2024-02-22 17:33:07', 7, 112, '1708603387240', 352.00, 'Festival offer', NULL, NULL, NULL),
(13, '2024-02-23 15:07:32', 7, 115, '1708681052715', 352.00, 'Festival offer', NULL, NULL, NULL),
(14, '2024-02-23 15:08:49', 7, 116, '1708681129394', 352.00, 'Festival offer', NULL, NULL, NULL),
(15, '2024-03-05 15:47:53', 7, 118, '1709633873859', 352.00, 'Festival offer', NULL, NULL, NULL),
(16, '2024-03-05 15:48:10', 7, 119, '1709633890609', 352.00, 'Festival offer', NULL, NULL, NULL),
(17, '2024-03-05 15:48:28', 7, 120, '1709633908276', 352.00, 'Festival offer', NULL, NULL, NULL),
(18, '2024-03-05 15:48:36', 7, 121, '1709633916384', 352.00, 'Festival offer', NULL, NULL, NULL),
(19, '2024-03-05 15:49:05', 7, 122, '1709633945943', 352.00, 'Festival offer', NULL, NULL, NULL),
(20, '2024-05-27 12:03:31', 11, 12, '1716791611294', 1.00, 'Personal Subscription Plan', NULL, NULL, NULL),
(21, '2024-05-28 11:50:34', 4, 124, '1716877234135', 352.00, 'IVRpayment Offer', NULL, NULL, NULL),
(22, '2024-05-28 11:52:05', 4, 125, '1716877325991', 1.00, 'IVRpayment Offer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_order`
--

DROP TABLE IF EXISTS `subscription_order`;
CREATE TABLE IF NOT EXISTS `subscription_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `productid` int NOT NULL DEFAULT '0',
  `packageid` int NOT NULL DEFAULT '0',
  `registration_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `card_number` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `amount` float(11,2) NOT NULL,
  `paymentid` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_order`
--

INSERT INTO `subscription_order` (`id`, `rec_date`, `userid`, `productid`, `packageid`, `registration_date`, `expiry_date`, `card_number`, `amount`, `paymentid`, `isActive`, `isDelete`) VALUES
(7, '2024-07-22 17:45:21', 14, 0, 0, '2024-07-22', '2024-10-22', '5382179524091340', 0.00, 'cash_35oy6BZkOwMJK', 1, 0),
(8, '2024-07-22 17:45:29', 14, 0, 0, '2024-07-22', '2024-10-22', '8522078347669149', 0.00, 'cash_4BLqIuhj0KxiJ', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `support_request`
--

DROP TABLE IF EXISTS `support_request`;
CREATE TABLE IF NOT EXISTS `support_request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL,
  `ticketno` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `usertype` tinyint NOT NULL COMMENT '1=CUSTOMER, 0=GUEST',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `emailid` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cardnumber` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `issuetype` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `server_ip` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `isDelete` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_request`
--

INSERT INTO `support_request` (`id`, `rec_date`, `ticketno`, `usertype`, `fullname`, `mobile`, `emailid`, `cardnumber`, `issuetype`, `message`, `status`, `server_ip`, `isDelete`) VALUES
(1, '2024-03-28 15:00:58', '0328032281', 0, 'verloop', '9408881214', 'bimalverloop@gmail.com', '4554545545454545', 'Service Problem', 'ghjjjjj jhjghjghjghjghj jghjghjghjghjgjh jhgjghjghjghjghj jhjghjghjghjghjghj gjhjghjgfhjhgj', 1, '::1', 0),
(2, '2024-03-30 16:56:53', '0330042127', 0, 'verloop', '9000000000', 'bimalverloop@gmail.com', '1234567890125655', 'Payment Issue', 'sadsd sad asd asd asd asdaswdasda sd sdas fafasf asfasf asfa sfa f asf asf sdf sdfa adf af asf asdf af asf af', 2, '::1', 0),
(3, '2024-07-19 14:50:18', '0719021907', 0, '', '', '', '', '', '', 1, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `support_request_chat`
--

DROP TABLE IF EXISTS `support_request_chat`;
CREATE TABLE IF NOT EXISTS `support_request_chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requestid` int NOT NULL,
  `remarks` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reviewpage` int NOT NULL DEFAULT '1' COMMENT '1=Site,2=Customer, 3=Partner',
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `ratings` float(11,2) NOT NULL DEFAULT '0.00',
  `photo` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'placeholder.jpg',
  `reviews` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `rec_date`, `reviewpage`, `fullname`, `ratings`, `photo`, `reviews`, `isDelete`) VALUES
(13, '2022-12-23 18:14:17', 1, 'Akash Khurana', 4.50, 'placeholder.jpg', 'I recently processed my loan through Paisacredit and I couldn’t be more happy with the experience. The process was very easy and quick and the customer service was excellent. I would definitely recommend Paisacredit to anyone who is in need of a loan.', 0),
(14, '2022-12-23 18:14:46', 1, 'Manish Dagar', 5.00, 'placeholder.jpg', 'I processed my loan with Paisacredit and I was very impressed with the quick and efficient process. The portal is very easy to use and the team is very friendly and helpful. I am very satisfied with their service. Thank you so much.', 0),
(15, '2022-12-23 18:15:13', 1, 'Gowtham Ramaswamy', 4.00, 'placeholder.jpg', 'I am truly impressed with the exceptional professionalism and simple loan process at Paisacredit. The team\'s knowledge and experience are truly remarkable. They went above and beyond to help me and to make my loan process very smooth for me. Strongly Recommended. ', 0),
(16, '2022-12-23 18:16:19', 1, 'Vipul Mehta', 5.00, 'placeholder.jpg', 'I had the pleasure of processing my loan with Paisacredit. They exceeded expectations in every way. The entire process couldn’t have been simpler, easier, or faster. The online portal was very clear, aesthetically pleasing, and simple to navigate. Many thanks for the wonderful experience.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `unsubscription_logs`
--

DROP TABLE IF EXISTS `unsubscription_logs`;
CREATE TABLE IF NOT EXISTS `unsubscription_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `user_type` int NOT NULL COMMENT '1=PL, 2=BL, 3=Channel',
  `mobile_no` varchar(55) COLLATE utf8mb4_general_ci NOT NULL,
  `reason` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_application`
--

DROP TABLE IF EXISTS `user_application`;
CREATE TABLE IF NOT EXISTS `user_application` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `loantype` int NOT NULL,
  `loanamount` bigint NOT NULL,
  `cibilscore` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `loanpurpose` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `income` bigint NOT NULL,
  `currentemi` int NOT NULL,
  `emibounce` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `loantenure` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1=New, 2=Approve, 3=Reject',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_application`
--

INSERT INTO `user_application` (`id`, `rec_date`, `userid`, `loantype`, `loanamount`, `cibilscore`, `loanpurpose`, `income`, `currentemi`, `emibounce`, `loantenure`, `status`, `isDelete`) VALUES
(2, '2023-12-28 09:36:16', 2, 1, 500000, '700 - 750', 'Education Purpose', 50000, 0, 0, 12, 1, 0),
(3, '2024-01-19 08:17:45', 3, 1, 10000, '750 - 800', 'Personal Use', 15000, 1500, 0, 12, 1, 0),
(4, '2023-12-29 11:41:10', 4, 1, 500000, '', '', 0, 0, 0, NULL, 1, 0),
(5, '2024-01-01 18:04:45', 5, 1, 10000, '700 - 750', 'Personal Use', 150000, 1000, 0, 60, 1, 0),
(6, '2024-01-02 17:57:12', 6, 2, 10000, '700 - 750', 'Maintain Cash Flow', 150000, 1500, 0, NULL, 1, 0),
(7, '2024-01-29 13:38:53', 7, 1, 0, '', '', 0, 0, 0, NULL, 1, 0),
(8, '2024-01-29 13:39:04', 8, 1, 10000, '', '', 0, 0, 0, NULL, 1, 0),
(9, '2024-03-02 12:21:29', 9, 11, 1000000, '650 - 700', 'Property Renovation', 150000, 1000, 0, 12, 1, 0),
(10, '2024-03-04 16:29:00', 10, 11, 1000000, '650 - 700', 'Property Renovation', 150000, 1200, 0, 12, 1, 0),
(11, '2024-05-24 17:32:59', 11, 11, 50000, '750 - 800', 'Personal Use', 45000, 1000, 0, 12, 1, 0),
(14, '2024-07-22 17:45:29', 14, 11, 400000, '650 - 700', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(15, '2024-08-01 16:57:35', 15, 11, 500000, '700 - 750', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(16, '2024-07-24 12:21:43', 16, 11, 500000, '', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(17, '2024-07-26 14:37:23', 17, 11, 500000, '700 - 750', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(18, '2024-07-26 17:16:38', 18, 11, 500000, '', '', 0, 0, 0, NULL, 1, 0),
(19, '2024-08-01 14:14:37', 19, 11, 500000, '', 'Property Renovation', 50000, 0, 0, 36, 1, 0),
(20, '2024-07-31 11:56:07', 20, 12, 500000, '650 - 700', 'Business Expansion', 45000, 1000, 0, NULL, 1, 0),
(21, '2024-07-31 12:22:12', 21, 11, 500000, '', '', 0, 0, 0, NULL, 1, 0),
(22, '2024-08-01 11:50:39', 22, 11, 500000, '700 - 750', 'Personal Use', 45000, 1000, 0, NULL, 1, 0),
(23, '2024-08-01 14:04:09', 23, 11, 500000, '700 - 750', 'Property Renovation', 45000, 1000, 0, NULL, 1, 0),
(24, '2024-08-01 15:32:57', 24, 11, 500000, '', '', 50000, 0, 0, 36, 1, 0),
(25, '2024-08-01 17:43:28', 25, 11, 500000, '', '', 0, 0, 0, NULL, 1, 0),
(26, '2024-08-02 10:34:50', 26, 11, 500000, '650 - 700', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(27, '2024-08-02 15:32:29', 27, 11, 500000, 'Below 650', 'Personal Use', 45000, 1000, 0, NULL, 1, 0),
(28, '2024-08-02 17:11:41', 28, 11, 500000, '650 - 700', 'Personal Use', 45000, 1000, 0, NULL, 1, 0),
(29, '2024-08-03 09:34:37', 29, 11, 500000, '700 - 750', 'Personal Use', 45000, 1000, 0, 36, 1, 0),
(30, '2024-08-05 18:15:57', 30, 11, 500000, '700 - 750', 'Personal Use', 45000, 1000, 0, 24, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_application_status`
--

DROP TABLE IF EXISTS `user_application_status`;
CREATE TABLE IF NOT EXISTS `user_application_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `applicationid` int NOT NULL,
  `statusid` int NOT NULL,
  `statusdate` date DEFAULT NULL,
  `bankid` int NOT NULL,
  `loanamount` int NOT NULL,
  `loanroi` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `loanterms` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `processfees` int NOT NULL,
  `insurance` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `monthlyemi` int NOT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `sanction_letter` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `staffid` int NOT NULL,
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

DROP TABLE IF EXISTS `user_documents`;
CREATE TABLE IF NOT EXISTS `user_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `profilephoto` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cancelcheque` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lightbill` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bankstatement` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `formsixteen` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `salaryslip` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `businessproof` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `itreturn` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `rec_date`, `userid`, `profilephoto`, `aadharcard`, `aadharcard_number`, `pancard`, `pancard_number`, `cancelcheque`, `lightbill`, `bankstatement`, `formsixteen`, `salaryslip`, `businessproof`, `itreturn`, `remarks`, `isVerified`) VALUES
(1, '2024-01-01 10:32:10', 1, '7b10c74b8ecbb4cc9e05b9421d4a4ea3.png', NULL, NULL, '5044caaac9c5464b211adb00d91f4465.pdf', 'tsdw3333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_payout_documents`
--

DROP TABLE IF EXISTS `user_payout_documents`;
CREATE TABLE IF NOT EXISTS `user_payout_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL,
  `gstdoc` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gstdoc_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `aadharcard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pancard_number` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cancelcheque` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `isVerified` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payout_documents`
--

INSERT INTO `user_payout_documents` (`id`, `rec_date`, `userid`, `gstdoc`, `gstdoc_number`, `aadharcard`, `aadharcard_number`, `pancard`, `pancard_number`, `cancelcheque`, `remarks`, `isVerified`) VALUES
(1, '2024-01-01 10:31:06', 1, 'bd144616a5ce452f4a7b40e33f232d25.pdf', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'de4b78e0547dc81ed5b54f345266e283.pdf', '213213213213', 'fd27434890de9cdca3fe5e7d8927a745.pdf', '', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(256) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'noname',
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `usertype` int NOT NULL,
  `cardtype` int DEFAULT NULL,
  `refcode` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gstno` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `process_step` int NOT NULL DEFAULT '1',
  `isUser` int NOT NULL DEFAULT '0' COMMENT '0=None, 1=Steps, 2=Register',
  `isDnd` tinyint NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `iAgree` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  `isActive` int NOT NULL DEFAULT '1' COMMENT '0=No, 1=Yes',
  `isDelete` int NOT NULL DEFAULT '0' COMMENT '0=No, 1=Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `rec_date`, `update_date`, `fullname`, `mobile`, `email`, `password`, `city`, `state`, `usertype`, `cardtype`, `refcode`, `gstno`, `process_step`, `isUser`, `isDnd`, `iAgree`, `isActive`, `isDelete`) VALUES
(2, '2023-12-28 09:24:54', '2023-12-28 09:32:02', 'parth', '9988776655', 'anonymus@yopmail.com', '', 'Somewhere in Gujarat', 'Gujarat', 1, 1, NULL, NULL, 3, 1, 0, 0, 1, 0),
(3, '2023-12-28 09:33:07', '2024-01-29 13:30:31', '7069898001', '9408881210', 'acb@mail.com', '', 'mumbai', 'Gujarat', 1, 1, NULL, NULL, 3, 1, 0, 0, 1, 0),
(4, '2023-12-29 11:41:10', '2023-12-29 11:41:10', 'Anonymous', '8888888888', 'anonymus@yopmail.com', '', '', NULL, 1, 1, NULL, NULL, 1, 1, 0, 0, 1, 0),
(5, '2024-01-01 18:04:31', '2024-01-01 18:04:46', 'wer', '8160300254', 'acb@mail.com', '', 'surat', 'Jharkhand', 1, 1, NULL, NULL, 3, 1, 0, 0, 1, 0),
(6, '2024-01-02 17:57:03', '2024-01-02 17:57:12', 'test kumar', '8160300250', 'voreko1787@raotus.com', '', 'mumbai', 'Karnataka', 2, 2, NULL, NULL, 2, 1, 0, 0, 1, 0),
(7, '2024-01-29 13:38:53', '2024-01-29 13:38:53', '7069898001', '8282828282', 'acb@mail.com', '', '', NULL, 1, 1, NULL, NULL, 1, 1, 0, 0, 1, 0),
(8, '2024-01-29 13:39:04', '2024-01-29 13:39:04', 'Sehul kumar', '8181818181', 'gehidit143@nasskar.com', '', '', NULL, 1, 1, NULL, NULL, 1, 1, 0, 0, 1, 0),
(9, '2024-02-15 11:49:36', '2024-03-02 12:21:29', 'Sehul kumar', '9408881213', 'kishanverloop@gmail.com', '', 'suat', 'Kerala', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(10, '2024-03-04 16:27:08', '2024-03-04 16:29:00', 'Sehul kumar', '9408881277', 'newkrush@gmail.com', '', 'asa', 'Jharkhand', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(11, '2024-04-09 18:16:21', '2024-08-01 12:01:56', 'verloop', '9000000000', 'bimalverloop@gmail.com', '', 'surat', 'Gujarat', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(14, '2024-07-22 17:45:29', '2024-07-22 17:45:29', 'verloop', '9408881214', 'bimalverloop@gmail.com', 'd2pkd2krT2cwWENqcWIrNU9ieXRFUT09', 'surat', 'Andaman and Nicobar Islands', 1, 11, 'ver1214', NULL, 4, 2, 0, 1, 1, 0),
(15, '2024-07-23 12:18:35', '2024-08-01 16:57:35', 'verloop', '9408880000', 'bimalverloop@gmail.com', '', 'surat', 'Andaman and Nicobar Islands', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(16, '2024-07-24 11:35:56', '2024-07-24 12:21:43', 'verloop', '9408800000', 'bimalverloop@gmail.com', '', 'surat', 'Andaman and Nicobar Islands', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(17, '2024-07-26 14:37:03', '2024-08-06 10:22:31', 'verloop', '9400001214', 'bimalverloop@gmail.com', '', 'surat', 'Andaman and Nicobar Islands', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(18, '2024-07-26 17:16:38', '2024-07-26 17:16:38', 'verloop', '9000000001', 'test@gmail.com', '', '', NULL, 1, 11, NULL, NULL, 1, 1, 0, 0, 1, 0),
(19, '2024-07-30 15:06:32', '2024-08-02 15:14:56', 'acdec', '9696969696', 'rahul111@yopmail.com', '', 'Surat', '', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(20, '2024-07-31 11:29:08', '2024-07-31 11:56:07', 'verloop', '9408881200', 'bimalverloop@gmail.com', '', 'surat', 'Andaman and Nicobar Islands', 2, 12, NULL, NULL, 2, 1, 0, 0, 1, 0),
(21, '2024-07-31 12:22:12', '2024-07-31 12:22:12', 'verloop', '9408000000', 'info@verloopweb.com', '', '', NULL, 1, 11, NULL, NULL, 1, 1, 0, 0, 1, 0),
(22, '2024-08-01 10:28:40', '2024-08-01 14:44:41', 'verloop', '9924276751', 'info@verloopweb.com', '', 'surat', 'Andhra Pradesh', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(23, '2024-08-01 12:02:14', '2024-08-01 14:04:09', 'verloop', '9000111111', 'info@verloopweb.com', '', 'surat', 'Andaman and Nicobar Islands', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(24, '2024-08-01 15:04:41', '2024-08-01 15:32:57', 'verloop', '9924222222', 'info@verloopweb.com', '', 'Surat', '', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(25, '2024-08-01 17:43:28', '2024-08-01 17:43:28', 'verloop', '9400001215', 'info@verloopweb.com', '', '', NULL, 1, 11, NULL, NULL, 1, 1, 0, 0, 1, 0),
(26, '2024-08-02 09:58:54', '2024-08-02 10:34:50', 'verloop', '8080808080', 'info@verloopweb.com', '', 'surat', 'Gujarat', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(27, '2024-08-02 15:32:14', '2024-08-02 15:32:29', 'verloop', '9876543210', 'info@verloopweb.com', '', 'surat', 'Andhra Pradesh', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(28, '2024-08-02 17:10:23', '2024-08-02 17:11:41', 'verloop', '9876543213', 'info@verloopweb.com', '', 'surat', 'Andaman and Nicobar Islands', 1, 11, NULL, NULL, 2, 1, 0, 0, 1, 0),
(29, '2024-08-03 09:30:28', '2024-08-03 09:34:37', 'test', '9595959595', 'test@gmail.com', '', 'surat', 'Andhra Pradesh', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0),
(30, '2024-08-05 17:22:38', '2024-08-05 18:15:57', 'verloop', '9995552221', 'info@verloopweb.com', '', 'surat', 'Andhra Pradesh', 1, 11, NULL, NULL, 3, 1, 0, 0, 1, 0);

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
  `payout_amount` float(11,2) NOT NULL,
  `order_amount` float(11,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `worldline_entry`
--

DROP TABLE IF EXISTS `worldline_entry`;
CREATE TABLE IF NOT EXISTS `worldline_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productid` int DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `referenceid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `txstatus` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zaakpay_entry`
--

DROP TABLE IF EXISTS `zaakpay_entry`;
CREATE TABLE IF NOT EXISTS `zaakpay_entry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rec_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `productid` int DEFAULT NULL,
  `packageid` int DEFAULT NULL,
  `userid` int NOT NULL,
  `orderid` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `orderamount` float(11,2) NOT NULL,
  `ordernote` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statuscode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `transactionid` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paymentmode` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zaakpay_entry`
--

INSERT INTO `zaakpay_entry` (`id`, `rec_date`, `productid`, `packageid`, `userid`, `orderid`, `orderamount`, `ordernote`, `statuscode`, `transactionid`, `paymentmode`) VALUES
(27, '2024-01-03 14:35:48', 6, 18, 68, 'ZPLive1704272748712', 1.00, 'Pro Plan', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
