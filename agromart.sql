-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 04:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `scharge` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `scharge`, `date`) VALUES
(1, 3, '2023-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `agrocash`
--

CREATE TABLE `agrocash` (
  `unique_id` varchar(255) NOT NULL,
  `agrocash_id` int(255) NOT NULL,
  `bal_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cp_num` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `resibo` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agrocash`
--

INSERT INTO `agrocash` (`unique_id`, `agrocash_id`, `bal_id`, `name`, `cp_num`, `amount`, `payment`, `Notes`, `status`, `resibo`, `date`, `time`) VALUES
('6faf61', 48, 8, 'user account', 2147483647, 10, 'Gcash', 'You have successfully Cash In money', 'Pending', '1704807457isuzu-d-max-modified-0f6b.jpg', '2024-01-09', '21:37:37'),
('6faf61', 49, 8, 'user account', 2147483647, 100, 'Gcash', 'You have successfully Cash In money', 'Pending', '1704807597isuzu-d-max-modified-0f6b.jpg', '2024-01-09', '21:39:57'),
('6faf61', 50, 8, 'user account', 2147483647, 1, 'Gcash', 'You have successfully Cash In money', 'Pending', '1704808880isuzu-d-max-modified-0f6b.jpg', '2024-01-09', '22:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `seller_unique_id` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL,
  `Total_Price` varchar(255) NOT NULL,
  `Date_Added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `unique_id`, `p_id`, `seller_unique_id`, `Quantity`, `charge`, `Total_Price`, `Date_Added`) VALUES
('216b2d', '6faf61', 96, 'bf8803', '2', '', '2518', '2023-12-04'),
('935349', '6faf61', 108, '2df2dc', '1', '', '230', '2023-12-04'),
('d8298d', '6faf61', 147, 'cda95d', '3', '', '200', '2023-12-04'),
('ea8ab6', '6faf61', 124, '25cc95', '1', '', '100', '2024-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `f_id` int(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `rate1` varchar(255) NOT NULL,
  `rate2` varchar(255) NOT NULL,
  `rate3` varchar(255) NOT NULL,
  `rate4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`f_id`, `unique_id`, `p_id`, `comment`, `rating`, `date_added`, `rate1`, `rate2`, `rate3`, `rate4`) VALUES
(26, '6faf61', 96, 'quality', '5', '2023-10-21', '', '', '', ''),
(27, '6faf61', 96, 'quality', '5', '2023-10-21', '', '', '', ''),
(28, '6faf61', 96, 'quality', '5', '2023-10-21', '', '', '', ''),
(29, '6faf61', 97, 'rated', '5', '2023-10-21', '', '', '', ''),
(30, '68f07e', 99, 'qq', '3', '2023-10-21', 'screencapture-localhost-Agromart-System-index-php-PageController-userpage-title-desc-all-2023-10-21-21_35_45.png', 'screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-18-17_09_17.png', 'screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-13-02_06_50.png', 'screencapture-localhost-Agromart-System-userpage-2023-10-15-23_19_29.png'),
(31, '6faf61', 102, 'QUALITY GEORGE', '4', '2023-11-01', 'screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-28-20_58_16.png', 'dog3.jpg', 'screencapture-chat-openai-c-3170f976-0de7-4eee-8433-b3529697c083-2023-10-27-00_42_33.png', '394850603_357979439923037_2920360983968191653_n.jpg'),
(32, '68f07e', 98, 'qwerty', '5', '2023-11-03', 'about.jpg', 'bac2.jpg', 'about-2.jpg', 'bgggg2.jpg'),
(33, '68f07e', 99, 'qwer', '3', '2023-11-03', 'bgggg3.jpg', 'about-21.jpg', 'bac3.jpg', 'about1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `crops` int(11) NOT NULL,
  `types` text NOT NULL,
  `plant_date` date NOT NULL,
  `harvest_date` date NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marker`
--

CREATE TABLE `marker` (
  `Loc_Id` int(10) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `LocName` varchar(255) NOT NULL,
  `LocDescription` varchar(255) NOT NULL,
  `Lat` varchar(255) NOT NULL,
  `Lng` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marker`
--

INSERT INTO `marker` (`Loc_Id`, `unique_id`, `LocName`, `LocDescription`, `Lat`, `Lng`, `date_added`) VALUES
(28, 'f54de6', 'Pun', 'yete', '15.69919 ', '120.383205', '2023-05-09 15:19:38'),
(29, '900a38', 'try', 'try eeee', '15.727311', '120.40947', '2023-06-30 12:25:30'),
(30, '900a38', 'arjay', 'try eeee', '15.727642', '120.40947', '2023-06-30 12:27:06'),
(31, '900a38', 'arjay', 'try eeee', '15.727642', '120.40947', '2023-06-30 12:34:57'),
(32, '900a38', '', '', '', '', '2023-07-10 22:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `mcrops`
--

CREATE TABLE `mcrops` (
  `id` int(11) NOT NULL,
  `Crops` text NOT NULL,
  `hex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcrops`
--

INSERT INTO `mcrops` (`id`, `Crops`, `hex`) VALUES
(1, 'Rice', '#008000'),
(2, 'Corn', '#DFFF00'),
(3, 'Coconut', '#454B1B'),
(4, 'Mango', '#AAFF00'),
(5, 'Sugarcane', '#5F9EA0'),
(6, 'Pineapple', '#E4D00A'),
(7, 'Cassava', '#7FFFD4'),
(8, 'Rubber', '#AFE1AF'),
(9, 'Sweet Potato', '#0BDA51'),
(10, 'Onion', '#8A9A5B'),
(11, 'Eggplant', '#7F00FF'),
(12, 'Coffee', '#964B00'),
(15, 'Tomato', '#EE4B2B'),
(16, 'Potato', '#7C3030'),
(17, 'Ampalaya', '#40826D'),
(18, 'Cabbage', '#C4B454'),
(19, 'Calamansi', '#DFFF00'),
(20, 'Mongo', '#355E3B'),
(22, 'Banana', '#ffe135');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_tbl`
--

CREATE TABLE `ordered_tbl` (
  `order_id` int(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `seller_unique_id` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `OrUnitPrice` varchar(255) NOT NULL,
  `UnitQuan` varchar(255) NOT NULL,
  `charge` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL,
  `Total_Price` varchar(255) NOT NULL,
  `PaymentMethod` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Reciept` varchar(255) NOT NULL,
  `shipArr` varchar(255) NOT NULL,
  `dateShip` date NOT NULL,
  `PrfDlvry` varchar(255) NOT NULL,
  `date_delievered` date NOT NULL,
  `date_completed` date NOT NULL,
  `date_cancel` date NOT NULL,
  `Date_Added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_tbl`
--

INSERT INTO `ordered_tbl` (`order_id`, `unique_id`, `p_id`, `seller_unique_id`, `Quantity`, `OrUnitPrice`, `UnitQuan`, `charge`, `fee`, `Total_Price`, `PaymentMethod`, `Status`, `Reciept`, `shipArr`, `dateShip`, `PrfDlvry`, `date_delievered`, `date_completed`, `date_cancel`, `Date_Added`) VALUES
(114, '6faf61', 96, 'bf8803', '1', '1500', 'pieces', '50', 0, '11550', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-22', '1697897370screencapture-localhost-Agromart-System-index-php-PageController-userpage-title-desc-all-2023-10-21-21_35_45.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-09-15'),
(115, '6faf61', 97, 'bf8803', '2', '', '', '0', 0, '39000', 'gcash', 'Completed', '1697379653screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-13-02_06_50.png', 'DropOff', '2023-10-21', '1697897378screencapture-localhost-Agromart-System-index-php-PageController-userpage-title-desc-all-2023-10-21-21_35_45.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-09-15'),
(116, 'bf8803', 97, 'bf8803', '3', '120', 'pieces', '0', 0, '20360', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1697897384screencapture-localhost-Agromart-SYS-register-2023-10-18-15_45_08.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-08-18'),
(117, 'bf8803', 97, 'bf8803', '1', '120', 'pieces', '0', 0, '120', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1697897391screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-18-17_09_17.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-08-18'),
(118, '6faf61', 97, 'bf8803', '3', '120', 'pieces', '0', 0, '27360', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-07-18'),
(119, '68f07e', 99, 'bf8803', '2', '', '', '50', 0, '12900', 'gcash', 'Completed', '1697628733screencapture-localhost-Agromart-SYS-register-2023-10-18-15_45_08.png', 'DropOff', '2023-10-21', '1697898083screencapture-localhost-Agromart-System-index-php-PageController-userpage-title-desc-all-2023-10-21-21_35_45.png', '0000-00-00', '2023-11-03', '0000-00-00', '2023-06-18'),
(120, '68f07e', 102, 'bf8803', '2', '200', 'kg', '50', 0, '14500', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1698119970screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-23-22_22_19.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-05-18'),
(121, '68f07e', 100, 'bf8803', '1', '250', 'pieces', '50', 0, '15300', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1698750386screencapture-shopnow-agromart-tech-2023-10-31-18_59_41.png', '0000-00-00', '0000-00-00', '0000-00-00', '2023-05-18'),
(122, '68f07e', 99, 'bf8803', '4', '120', 'pieces', '50', 0, '170', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1699024494bgggg.jpg', '2023-11-03', '2023-11-03', '0000-00-00', '2023-10-18'),
(123, '68f07e', 98, 'bf8803', '1', '30', 'kg', '0', 0, '30', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-10-21', '1699024502bgggg.jpg', '2023-11-03', '0000-00-00', '0000-00-00', '2023-10-18'),
(124, '68f07e', 101, 'bf8803', '1', '45000', 'pieces', '50', 0, '45050', 'COD', 'Delievered', 'CashOnDelievery', 'DropOff', '2023-10-21', '1700057518screencapture-shopnow-agromart-tech-AdminController-index-2023-11-15-22_07_37.png', '2023-11-15', '0000-00-00', '0000-00-00', '2023-10-18'),
(125, '68f07e', 107, '2df2dc', '2', '160', 'kg', '50', 0, '370', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(126, '68f07e', 106, '2df2dc', '2', '60000', 'pieces', '50', 0, '120050', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(127, '68f07e', 108, '2df2dc', '1', '230', 'kg', '0', 0, '230', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(128, '68f07e', 105, '2df2dc', '1', '45', 'kg', '0', 0, '45', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(129, '6faf61', 104, '2df2dc', '1', '25', 'kg', '0', 0, '25', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(130, '6faf61', 103, '2df2dc', '1', '450', 'pieces ', '50', 0, '500', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-18'),
(131, '6faf61', 108, '2df2dc', '1', '230', 'kg', '0', 0, '230', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-21'),
(132, '6faf61', 104, '2df2dc', '1', '25', 'kg', '0', 0, '25', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-21'),
(133, '6faf61', 104, '2df2dc', '10', '25', 'kg', '0', 0, '250', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-21'),
(134, '6faf61', 102, 'bf8803', '2', '200', 'kg', '50', 0, '450', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-04', '1699015991bac.jpg', '2023-11-03', '0000-00-00', '0000-00-00', '2023-10-23'),
(137, 'c3a5aa', 110, 'bf8803', '1', '20', 'kg', '50', 0, '70', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-05', '1699016001bgggg.jpg', '2023-11-04', '0000-00-00', '0000-00-00', '2023-10-25'),
(140, '6faf61', 98, 'bf8803', '1', '30', 'kg', '0', 0, '30', 'COD', 'Completed', 'CashOnDelievery', '', '2023-11-01', '1698760144screencapture-shopnow-agromart-tech-userpage-2023-10-31-19_00_02.png', '0000-00-00', '0000-00-00', '2023-11-03', '2023-10-26'),
(141, 'c3a5aa', 99, 'bf8803', '2', '120', 'pieces', '50', 0, '290', 'COD', 'Completed', 'CashOnDelievery', 'Drop Off', '2023-11-03', '1698760153screencapture-shopnow-agromart-tech-2023-10-31-18_59_41.png', '0000-00-00', '2023-11-03', '0000-00-00', '2023-10-26'),
(145, '9ae94f', 107, '2df2dc', '2', '160', 'kg', '50', 0, '210', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-27'),
(146, '9ae94f', 106, '2df2dc', '1', '60000', 'pcs', '50', 0, '60050', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-10-27'),
(149, '6faf61', 99, 'bf8803', '17', '', '', '50', 0, '2090', 'gcash', 'Completed', '1698737604title_logo.png', ' PickUp', '2023-11-07', '', '2023-11-02', '2023-11-03', '0000-00-00', '2023-10-31'),
(152, '6faf61', 99, 'bf8803', '1', '120', 'pcs', '50', 0, '170', 'COD', 'Completed', 'CashOnDelievery', 'DropOff', '2023-11-04', '', '2023-11-01', '2023-11-03', '0000-00-00', '2023-11-01'),
(153, '66297f', 104, '2df2dc', '3', '25', 'kg', '0', 0, '75', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-01'),
(154, '6faf61', 129, '25cc95', '1', '140', 'kg', '50', 0, '190', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(155, 'ee8d75', 178, '445e07', '1', '200', 'pieces', '50', 0, '250', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(156, 'ee8d75', 206, '445e07', '1', '180', 'kg', '0', 0, '180', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(157, '6faf61', 143, 'cda95d', '1', '95', 'pieces', '50', 0, '145', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(158, '6faf61', 183, '445e07', '2', '50', 'kg', '50', 0, '150', 'gcash', 'Cancelled', '169893972216989397020227028111535304204044.jpg', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(159, '6faf61', 178, '445e07', '1', '200', 'pieces', '50', 0, '250', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(160, '6faf61', 147, 'cda95d', '1', '50', 'pieces', '50', 0, '100', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-02'),
(161, '6faf61', 101, 'bf8803', '1', '45000', 'pcs', '50', 0, '45050', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '2023-11-03', '2023-11-03'),
(162, '6faf61', 100, 'bf8803', '1', '250', 'pcs', '50', 0, '300', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '2023-11-03', '2023-11-03'),
(163, '6faf61', 101, 'bf8803', '1', '45000', 'pcs', '50', 0, '45050', 'COD', 'To-Ship', 'CashOnDelievery', 'Pick Up', '2023-11-25', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-03'),
(164, '68f07e', 96, 'bf8803', '1', '1500', 'pcs', '50', 0, '1550', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-07', '1699325430screencapture-shopnow-agromart-tech-adminapproval-2023-11-06-22_45_21.png', '2023-11-07', '0000-00-00', '0000-00-00', '2023-11-03'),
(165, 'ee8d75', 148, 'cda95d', '1', '170', 'pieces', '50', 0, '220', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-04'),
(166, 'f8f20f', 199, 'cda95d', '2', '60', 'kg', '50', 0, '170', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-05'),
(167, 'f8f20f', 101, 'bf8803', '1', '45000', 'pcs', '50', 0, '45050', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-08', '1700236527GCash-DatastiQ-QR-Code.jpg', '2023-11-17', '0000-00-00', '0000-00-00', '2023-11-05'),
(168, 'f8f20f', 100, 'bf8803', '1', '250', 'pcs', '50', 0, '300', 'COD', 'Delievered', 'CashOnDelievery', 'Pick Up', '2023-10-30', '1700236677GCash-DatastiQ-QR-Code.jpg', '2023-11-17', '0000-00-00', '0000-00-00', '2023-11-05'),
(169, 'f8f20f', 100, 'bf8803', '3', '250', 'pcs', '50', 0, '800', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-07', '1700237114GCash-DatastiQ-QR-Code.jpg', '2023-11-18', '0000-00-00', '0000-00-00', '2023-11-05'),
(170, 'f8f20f', 101, 'bf8803', '1', '45000', 'pcs', '50', 4505, '45050', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-08', '1700292915196257897_517448742711126_1601088914972317025_n.jpg', '2023-11-18', '0000-00-00', '0000-00-00', '2023-11-05'),
(171, 'f8f20f', 100, 'bf8803', '5', '250', 'pcs', '50', 0, '1300', 'COD', 'To-Ship', 'CashOnDelievery', 'Drop Off', '2023-11-18', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-05'),
(172, 'ee8d75', 128, '25cc95', '3', '25', 'kg', '50', 0, '125', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-06'),
(173, 'ee8d75', 209, '445e07', '3', '250', 'pieces', '0', 0, '750', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-06'),
(174, 'a04815', 96, 'bf8803', '1', '1500', 'pcs', '50', 0, '1550', 'COD', 'Delievered', 'CashOnDelievery', 'Drop Off', '2023-11-07', '1699325414screencapture-shopnow-agromart-tech-adminapproval-2023-11-06-22_45_21.png', '2023-11-07', '0000-00-00', '0000-00-00', '2023-11-07'),
(175, '6faf61', 107, '2df2dc', '1', '160', 'kg', '50', 0, '210', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-13'),
(176, '6faf61', 107, '2df2dc', '1', '', '', '50', 0, '210', 'gcash', 'Pending', '1699885532screencapture-shopee-ph-checkout-2023-11-13-20_19_32.png', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-13'),
(177, '6faf61', 164, 'cda95d', '2', '150', 'kg', '0', 0, '300.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-13'),
(178, '6faf61', 188, '445e07', '2', '35', 'kg', '50', 0, '170.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-13'),
(179, '6faf61', 132, '25cc95', '3', '140', 'kg', '0', 0, '420.00', 'COD', 'Cancelled', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '2023-11-15', '2023-11-14'),
(180, '6faf61', 105, '2df2dc', '1', '45', 'kg', '0', 0, '45', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(181, '6faf61', 195, 'cda95d', '1', '35', 'kg', '50', 0, '85', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(182, '6faf61', 180, '445e07', '1', '400', 'kg', '0', 0, '400', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(185, '6faf61', 141, '6faf61', '1', '70', 'pieces', '50', 0, '120', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(186, '6faf61', 108, '6faf61', '2', '230', 'kg', '0', 0, '460', 'gcash', 'Pending', '1699979214screencapture-shopee-ph-checkout-2023-11-13-20_19_32.png', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(187, '6faf61', 120, '445e07', '1', '180', 'kg', '0', 0, '180', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(188, 'c3a5aa', 128, '25cc95', '1', '25', 'kg', '50', 0, '75', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(189, '6faf61', 185, '6faf61', '3', '150', 'pieces', '50', 0, '500', 'gcash', 'Pending', '1699981908368957602_690887939682763_117656480157589695_n.png', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-14'),
(190, 'c3a5aa', 157, 'cda95d', '1', '300', 'pieces', '0', 0, '300', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-15'),
(191, '6faf61', 96, '6faf61', '3', '15000', 'pcs', '50', 0, '44300', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(192, '6faf61', 131, '25cc95', '4', '25', 'pieces', '50', 0, '300.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(193, '6faf61', 163, 'cda95d', '5', '', '', '0', 0, '850.00', 'gcash', 'Pending', '1700395861screencapture-shopnow-agromart-tech-products-add-2023-11-18-17_06_49.png', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(194, '6faf61', 96, '6faf61', '1', '15000', 'pcs', '50', 0, '14800', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(195, '6faf61', 96, '6faf61', '1', '15000', 'pcs', '50', 0, '14800', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(196, '6faf61', 96, '6faf61', '1', '15000', 'pcs', '50', 0, '14800', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(197, '6faf61', 99, '6faf61', '1', '120', 'pcs', '50', 0, '170', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(198, '6faf61', 96, '6faf61', '1', '15000', 'pcs', '50', 0, '14800', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(199, '6faf61', 103, '6faf61', '4', '450', 'pcs', '50', 0, '1630', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(200, '6faf61', 103, '6faf61', '4', '450', 'pcs', '50', 0, '1630', 'gcash', 'Pending', '1700399487shipping-label-template-in-ms-word.png', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(201, '6faf61', 103, '6faf61', '4', '450', 'pcs', '50', 0, '1630', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(202, '6faf61', 96, 'bf8803', '1', '', '', '50', 0, '15050', 'gcash', 'Pending', '1700399588FB_IMG_1700396095778.jpg', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(203, '6faf61', 103, '6faf61', '4', '450', 'pcs', '50', 0, '1630', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(204, '6faf61', 96, '6faf61', '1', '15000', 'pcs', '50', 0, '14800', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-19'),
(205, '6faf61', 96, 'bf8803', '3', '', '', '50', 0, '3002.00', 'gcash', 'Pending', '1700447597Screenshot_20231120-103140.jpg', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-11-20'),
(206, '6faf61', 96, 'bf8803', '2', '1234', 'pcs', '50', 0, '2018.00', 'COD', 'To-Ship', 'CashOnDelievery', 'Drop Off', '2024-04-03', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-12-04'),
(207, '6faf61', 206, '445e07', '1', '180', 'kg', '0', 0, '180', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2023-12-04'),
(208, '6faf61', 104, '2df2dc', '1', '25', 'kg', '0', 0, '25', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-01-25'),
(209, '6faf61', 124, '25cc95', '4', '50', 'kg', '50', 0, '250.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-02-14'),
(210, '6faf61', 101, 'bf8803', '2', '45500', 'pcs', '50', 0, '90250.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-02-09'),
(211, '6faf61', 102, 'bf8803', '6', '200', 'kg', '50', 0, '1250.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-03-11'),
(212, '6faf61', 155, 'cda95d', '1', '65', 'kg', '50', 0, '115', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-03-02'),
(213, '6faf61', 143, 'cda95d', '5', '95', 'pieces', '50', 0, '525.00', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-03-01'),
(216, '6faf61', 99, 'bf8803', '1', '100', 'pcs', '50', 0, '150', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-04'),
(217, '6faf61', 96, 'bf8803', '1', '1234', 'pcs', '50', 0, '1284', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22'),
(218, '6faf61', 134, '445e07', '1', '90', 'kg', '0', 0, '90', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22'),
(219, '6faf61', 142, '25cc95', '1', '50', 'pieces', '50', 0, '100', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22'),
(220, '6faf61', 141, '25cc95', '1', '70', 'pieces', '50', 0, '120', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22'),
(221, '6faf61', 205, '445e07', '1', '50', 'kg', '50', 0, '100', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22'),
(222, '6faf61', 196, 'cda95d', '1', '200', 'kg', '50', 0, '250', 'COD', 'Pending', 'CashOnDelievery', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '2024-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `video_file` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `p_description` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `old_price` int(11) DEFAULT NULL,
  `dnum` int(11) DEFAULT NULL,
  `dprice` int(11) DEFAULT NULL,
  `p_stocks` varchar(255) NOT NULL,
  `p_stocks_Unit` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_size` varchar(255) NOT NULL,
  `p_color` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `subCategory` varchar(255) NOT NULL,
  `subCategory2` varchar(255) NOT NULL,
  `p_shipping` varchar(255) NOT NULL,
  `date_planted` date NOT NULL,
  `date_harvested` date NOT NULL,
  `Actual_harvested` date NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `randomColor` varchar(7) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `unique_id`, `p_title`, `video_file`, `image1`, `image2`, `image3`, `image4`, `image5`, `p_description`, `p_price`, `old_price`, `dnum`, `dprice`, `p_stocks`, `p_stocks_Unit`, `p_address`, `p_brand`, `p_size`, `p_color`, `p_category`, `subCategory`, `subCategory2`, `p_shipping`, `date_planted`, `date_harvested`, `Actual_harvested`, `lat`, `lng`, `randomColor`, `date_added`) VALUES
(96, 'bf8803', 'GOAT', 'Zcarina1.mp4', 'Goat31.jpg', 'Goat11.jpg', 'Goat21.jpg', 'Goat41.png', 'Goat51.png', 'Bulog', '1234', 234, 2, 250, '', 'pcs', 'Balloc', 'we', '1500 per kilo', '', 'Livestock', '               Goat', '', '50', '2023-08-03', '2023-10-19', '0000-00-00', '15.682047289827505', '120.3486156463623', '#542b22', '2023-10-15 14:16:28'),
(97, 'bf8803', 'Bangus', 'seller.mp4', 'Bangus4.jpg', 'Bangus5.jpg', 'Bangus3.jpg', 'Bangus2.jpg', 'Bangus1.jpg', 'fresh from ponds pogii pogii pogii pogii pogii', '675', 675, 4, 20, '9985', 'pcs', 'Bamban', '', '120/kg', '', 'Livestock', '   Fish', '', '0', '2023-07-06', '2023-10-18', '0000-00-00', '15.679733475186069', '120.33488273620607', '#332574', '2023-10-15 14:19:43'),
(98, 'bf8803', 'Ampalaya', 'Zcarina11.mp4', 'Ampalaya5.jpg', 'Ampalaya4.jpg', 'Ampalaya2.jpg', 'Ampalaya1.jpg', 'ampalaya.jpg', 'masustansya', '987', 30, 5, 2, '47', 'kg', 'Bamban', 'we', '30 per kg', 'green', 'Vegetables', '   Ampalaya', '', '0', '2023-08-16', '2023-10-20', '0000-00-00', '15.68369999851055', '120.3362560272217', '#bca458', '2023-10-18 11:20:52'),
(99, 'bf8803', 'Bangus', 'seller1.mp4', 'Bangus41.jpg', 'Bangus51.jpg', 'Bangus31.jpg', 'Bangus21.jpg', 'Bangus11.jpg', '', '100', 120, NULL, NULL, '', 'pcs', 'Bamban', 'ponds', '120/kg', '', 'Livestock', '  Feeds', '', '50', '2023-06-01', '2023-10-25', '0000-00-00', '15.687666444734797', '120.33797264099123', '#533624', '2023-10-18 11:22:41'),
(100, 'bf8803', 'organic fertilizer', 'seller2.mp4', 'ferti5.jpg', 'ferti4.jpg', 'ferti3.jpg', 'ferti2.jpg', 'ferti.jpg', '', '250', NULL, NULL, NULL, '0', 'pcs', 'Maasin', 'organic', '250 / pieces', '', 'Fertilizer', '  Urea', '', '50', '2023-10-17', '0000-00-00', '2023-10-18', '15.671304357204631', '120.33041954040529', '#466507', '2023-10-18 11:24:48'),
(101, 'bf8803', 'kalabaw', 'seller3.mp4', 'kalabaw4.jpg', 'kalabaw5.jpg', 'kalabaw3.jpg', 'kalabaw2.jpg', 'kalabaw1.jpg', '', '45500', 45000, 2, 400, '', 'pcs', 'Maasin', 'ass', '145kg for 45k', 'black', 'Livestock', '    Beef', '', '50', '2022-09-01', '2023-10-31', '0000-00-00', '15.62551660509624', '120.28492927551271', '#c085a', '2023-10-18 11:26:42'),
(102, 'bf8803', 'Mango', 'seller4.mp4', 'mang.jpg', 'mang2.jpg', 'mang3.jpg', 'mang4.jpg', 'mang5.jpg', 'fresh', '200', NULL, NULL, NULL, '', 'kg', 'Birbira', 'native', '200/ 1kg, 100 1/2kg', '', 'Fruits', ' Mango', '', '50', '2023-05-06', '2023-10-25', '0000-00-00', '15.660064992969824', '120.3620052356394', '#527835', '2023-10-18 11:29:35'),
(103, '2df2dc', 'Chicken', 'Zcarina2.mp4', 'Manok2.jpg', 'Manok1.jpg', 'Manok3.jpg', 'Manok4.png', 'Manok5.jpg', 'manok na pula', '450', NULL, 3, 55, '4', 'pcs', 'Tuec', 'hen', '450/pieces', '', 'Livestock', 'Feeds', '', '50', '2023-06-02', '0000-00-00', '2023-10-18', '15.686509572551435', '120.44526100158693', '#ad7480', '2023-10-18 11:44:37'),
(104, '2df2dc', 'Okra', 'seller5.mp4', 'Okra1.jpg', 'Okra2.jpg', 'okra.jpg', 'Okra3.jpg', 'Okra4.jpg', '', '25', NULL, NULL, NULL, '', 'kg', 'Matubog', '', '25 kalahating kilo', '', 'CropProduction', 'Feeds', '', '0', '2023-08-04', '2023-10-19', '0000-00-00', '15.660726148307065', '120.44920921325685', '#1762f1', '2023-10-18 11:46:23'),
(105, '2df2dc', 'Talong', 'seller6.mp4', 'Talong.jpg', 'Talong1.jpg', 'Talong3.jpg', 'Talong4.jpg', 'Talong5.jpg', 'masarap na talong', '45', NULL, NULL, NULL, '', 'kg', 'Matubog', '', '45 1/2kg', '', 'CropProduction', 'Feeds', '', '0', '2023-07-05', '0000-00-00', '2023-10-18', '15.68469161729544', '120.44594764709474', '#4bcfc3', '2023-10-18 11:48:01'),
(106, '2df2dc', 'Baboy', 'seller7.mp4', 'Pig1.jpg', 'Pig2.jpg', 'Pig3.png', 'Pig4.jpg', 'Pig5.jpg', 'pang birthday ', '60000', NULL, NULL, NULL, '0', 'pcs', 'Matubog', '', '60000 isa', '', 'Livestock', 'Feeds', '', '50', '2023-01-07', '2023-10-25', '0000-00-00', '15.68832751160842', '120.45264244079591', '#dafb18', '2023-10-18 11:49:55'),
(107, '2df2dc', 'Telapya', '', 'tel.jpg', 'tel2.jpg', 'tel3.jpg', 'tel4.jpg', 'tel5.jpg', 'tamukek', '160', NULL, NULL, NULL, '', 'kg', 'Pob. A', '', '160 kalahating kilo', '', 'Livestock', 'Feeds', '', '50', '2023-07-01', '0000-00-00', '2023-10-18', '15.692789656968316', '120.41710853576662', '#a0108c', '2023-10-18 11:51:46'),
(108, '2df2dc', 'Kamatis', 'seller8.mp4', 'Tomato.jpg', 'Tomato1.jpg', 'Tomato2.jpg', 'Tomato3.jpg', 'Tomato4.jpg', '', '230', NULL, NULL, NULL, '8', 'kg', 'Matubog', '', '230 / kg', '', 'Fertilizer', 'Feeds', '', '0', '2023-07-08', '2023-10-25', '0000-00-00', '15.684361078235916', '120.45006752014162', '#492e8d', '2023-10-18 11:53:07'),
(110, 'bf8803', 'Calamansi', 'Zcarina13.mp4', 'kalamansi3.jpg', 'kalamansi2.jpg', 'kalmansi.jpg', 'kalamansi31.jpg', 'kalamansi21.jpg', 'ok pang juice', '20', NULL, 6, 2, '49', 'kg', 'Daldalayap', 'natib', '20 kalahating kilo', 'green', 'Vegetables', 'Others', 'Calamansi', '50', '2023-07-01', '2023-11-01', '0000-00-00', '15.699730577907184', '120.34578323364259', '#45730a', '2023-10-25 12:49:26'),
(119, '445e07', 'Hito', '374678560_5938725916230786_6851510572250870147_n4.mp4', 'images_(15).jpg', 'images_(14).jpg', 'images_(13).jpg', 'images_(12).jpg', 'images_(11).jpg', 'Fresh Catch', '170', NULL, NULL, NULL, '15', 'kg', 'Palimbo Proper', 'African', 'per kilo', 'black', 'Fish', 'Seafoods', '', '50', '2023-07-18', '2023-09-21', '0000-00-00', '15.685125592949793', '120.39451599001609', '#2ebc40', '2023-10-31 13:57:12'),
(120, '445e07', 'Pork Ribs', '397283674_23984311014550299_6071071097163523_n.mp4', 'RIBS.jpg', 'RIBS1.jpg', 'ribs3.jpg', 'RIBS11.jpg', 'RIBS2.jpg', 'Fresh meat', '180', NULL, NULL, NULL, '', 'kg', 'Camiling, Tarlac', 'n/a', 'per kilo', 'n/a', 'Meat', ' Pork', '', '0', '2023-08-30', '2023-11-30', '0000-00-00', '', '', '#c0df4', '2023-10-31 14:24:20'),
(121, '445e07', 'Talong', '397283674_23984311014550299_6071071097163523_n1.mp4', 'images_(2)1.jpg', 'images_(1)1.jpg', 'download_(1)1.jpg', 'download1.jpg', 'images_(2)2.jpg', 'Fresh Harvest', '50', NULL, NULL, NULL, '20', 'kg', 'Matubog', 'Thai eggplant', 'per kilo', 'green', 'Vegetables', 'Others', 'Eggplant', '0', '2023-09-29', '2023-12-19', '0000-00-00', '15.68543593777695', '120.44774532252522', '#a7aca0', '2023-10-31 14:31:49'),
(122, '445e07', 'Sitaw', '397283674_23984311014550299_6071071097163523_n2.mp4', 'images_(7)2.jpg', 'images_(8)2.jpg', 'images_(6)1.jpg', 'images_(8)3.jpg', 'images_(8)4.jpg', 'Fresh Harvest', '20', NULL, NULL, NULL, '50', 'pieces', 'Sawat', 'Long Hybrid Sitaw', 'per pcs', 'green', 'Vegetables', 'Others', 'String beans', '50', '2023-10-01', '2023-12-29', '0000-00-00', '15.717271052736587', '120.42915582653724', '#a66332', '2023-10-31 14:38:03'),
(123, '445e07', 'Kalabasa', '397283674_23984311014550299_6071071097163523_n3.mp4', 'download_(2)1.jpg', 'images_(3)1.jpg', 'images_(4)1.jpg', 'images_(5)1.jpg', 'download_(3)1.jpg', 'Fresh Harvest', '20', NULL, NULL, NULL, '50', 'kg', 'Sinulatan 2nd', 'n/a', 'per kilo', 'green', 'Vegetables', ' Kalabasa', '', '0', '2023-10-19', '2024-01-31', '0000-00-00', '15.701515727669488', '120.38774967158278', '#437f61', '2023-10-31 14:42:43'),
(124, '25cc95', 'Kamoteng Kahoy', '397283674_23984311014550299_6071071097163523_n4.mp4', 'download_(5)1.jpg', 'download_(4)1.jpg', 'images_(9)1.jpg', 'images_(10)1.jpg', 'download_(6)1.jpg', 'Alternative for rice and it provides essential nutrients', '50', NULL, NULL, NULL, '', 'kg', 'Pindangan 1st', 'n/a', 'per kilo', 'brown', 'CropProductions', 'Others', 'root crop', '50', '2023-05-26', '2023-12-22', '0000-00-00', '15.73781446653382', '120.4322784394026', '#1f8f5c', '2023-10-31 15:06:44'),
(125, '25cc95', 'Monggo', '397283674_23984311014550299_6071071097163523_n5.mp4', 'images_(18).jpg', 'images_(17).jpg', 'download_(7).jpg', 'images_(16).jpg', 'download_(8).jpg', 'Farm beans', '50', NULL, NULL, NULL, '100', 'pieces', 'Balloc', 'n/a', 'per pcs', 'green', 'CropProductions', 'Others', 'Mung beans', '50', '2023-01-16', '0000-00-00', '2023-05-17', '15.68048051286562', '120.34867733716968', '#3d83b1', '2023-10-31 15:12:41'),
(126, '25cc95', 'Kangkong', '397283674_23984311014550299_6071071097163523_n6.mp4', 'images_(19).jpg', 'download_(12).jpg', 'download_(11).jpg', 'download_(10).jpg', 'download_(9).jpg', 'Fresh Harvest', '30', NULL, NULL, NULL, '20', 'pieces', 'Bacabac', 'n/a', 'per pcs', 'green', 'Vegetables', 'Others', 'Kangkong', '50', '2023-10-01', '2023-11-20', '0000-00-00', '15.725415662147556', '120.42699985206129', '#bb7ac', '2023-10-31 15:15:52'),
(127, '25cc95', 'Itik egg', '397283674_23984311014550299_6071071097163523_n7.mp4', 'download_(16).jpg', 'download_(17).jpg', 'download_(15).jpg', 'download_(13).jpg', 'download_(14).jpg', 'In a tray', '180', NULL, NULL, NULL, '150', 'pieces', 'Maasin', 'n/a', 'per pcs', 'white', 'Livestocks', ' Eggs', '', '0', '2023-10-10', '2023-11-02', '0000-00-00', '15.665667400249482', '120.32960146665575', '#8bc198', '2023-10-31 15:26:10'),
(128, '25cc95', 'Rice husk', '397283674_23984311014550299_6071071097163523_n8.mp4', 'images_(21).jpg', 'images_(20).jpg', 'download_(20).jpg', 'download_(19).jpg', 'download_(18).jpg', 'For potted plants', '25', NULL, NULL, NULL, '', 'kg', 'Palimbo Proper', 'n/a', 'per kilo', 'black', 'Fertilizers', 'NaturalFertilizer', '', '50', '2023-10-09', '0000-00-00', '2023-10-16', '15.690005064089828', '120.38523182272911', '#139925', '2023-10-31 15:35:08'),
(129, '25cc95', 'Luyang Dilaw', '397283674_23984311014550299_6071071097163523_n9.mp4', 'images_(25).jpg', 'images_(26).jpg', 'download_(24).jpg', 'download_(23).jpg', 'download_(23)1.jpg', 'Spices ', '140', NULL, NULL, NULL, '100', 'kg', 'Maasin', 'n/a', 'per kilo', 'yellow', 'CropProductions', '', '', '50', '2023-04-19', '2023-10-31', '0000-00-00', '15.665774891243125', '120.33295750595313', '#ba60da', '2023-10-31 16:01:17'),
(130, '25cc95', 'Luya', '397283674_23984311014550299_6071071097163523_n10.mp4', 'download_(26).jpg', 'images_(29).jpg', 'images_(28).jpg', 'download_(25).jpg', 'images_(27).jpg', 'Spices', '140', NULL, NULL, NULL, '100', 'kg', 'Bacsay', 'n/a', 'per kilo', 'n/a', 'CropProductions', '', '', '0', '2023-05-15', '0000-00-00', '2023-10-22', '15.64298348689348', '120.34223668277266', '#894762', '2023-10-31 16:06:44'),
(131, '25cc95', 'Singkamas Bunga', '397283674_23984311014550299_6071071097163523_n11.mp4', 'images_(30).jpg', 'download_(27).jpg', 'images_(32).jpg', 'images_(31).jpg', 'download_(27)1.jpg', 'Fresh Harvest', '25', NULL, NULL, NULL, '', 'pieces', 'Birbira', 'n/a', 'per pcs', 'green', 'Vegetables', 'Others', 'Singkamas', '50', '2023-07-20', '0000-00-00', '2023-09-28', '15.663558353756803', '120.36089882254603', '#62d4d3', '2023-10-31 16:13:40'),
(132, '25cc95', 'Hito', '374678560_5938725916230786_6851510572250870147_n5.mp4', 'images_(35).jpg', 'download_(34).jpg', 'download_(33).jpg', 'download_(32).jpg', 'download_(31).jpg', 'Fresh Catch', '140', NULL, NULL, NULL, '', 'kg', 'Caniag', 'Native', 'per kilo', 'black', 'Fish', 'Seafoods', '', '0', '2023-08-10', '2023-11-22', '0000-00-00', '15.722665341481683', '120.44444024562837', '#76910', '2023-10-31 16:19:45'),
(133, '25cc95', 'Singkamas', '397283674_23984311014550299_6071071097163523_n12.mp4', 'images_(34).jpg', 'download_(30).jpg', 'images_(33).jpg', 'download_(28).jpg', 'download_(29).jpg', 'Fresh Harvest', '50', NULL, NULL, NULL, '20', 'pieces', 'Bacabac', 'n/a', 'per pcs', 'brown', 'CropProductions', ' ', '', '50', '2023-03-08', '2023-11-23', '0000-00-00', '15.723233550091116', '120.42705282568932', '#c9d02f', '2023-10-31 16:22:20'),
(134, '445e07', 'Kamote', '397283674_23984311014550299_6071071097163523_n13.mp4', 'download_(22).jpg', 'images_(23).jpg', 'download_(21).jpg', '2022-10-26-Yellow-sweet-potato.jpg', 'images_(22).jpg', 'Dilaw', '90', NULL, NULL, NULL, '', 'kg', 'Papaac', 'n/a', 'per kilo', 'yellow', 'CropProductions', 'Others', 'root crop', '0', '2023-06-22', '2023-12-27', '0000-00-00', '15.641277721746588', '120.32449076883496', '#6623ec', '2023-10-31 16:29:59'),
(135, '445e07', 'Katuray', '397283674_23984311014550299_6071071097163523_n14.mp4', 'images_(42).jpg', 'images_(43).jpg', 'images_(41).jpg', 'images_(40).jpg', 'download_(36).jpg', 'Fresh Harvest', '20', NULL, NULL, NULL, '10', 'pieces', 'Sinilian 3rd ', 'n/a', 'per pcs', 'white', 'Vegetables', 'Others', 'Katuray', '50', '2023-08-16', '2023-11-30', '0000-00-00', '15.733770718425266', '120.4750442504883', '#b3e1e1', '2023-10-31 16:35:26'),
(136, '445e07', 'SIgarilyas', '397283674_23984311014550299_6071071097163523_n15.mp4', 'images_(36).jpg', 'images_(39).jpg', 'images_(38).jpg', 'images_(36)1.jpg', 'images_(37).jpg', 'Fresh Harvest', '25', 25, 2, 10, '15', 'pieces', 'Doclong 2', 'n/a', 'per pcs', 'green', 'Vegetables', ' Sigarilyas', '', '50', '2023-08-23', '2023-11-12', '0000-00-00', '15.755579853413021', '120.3926467895508', '#dcee3a', '2023-10-31 16:37:57'),
(137, '445e07', 'Pork belly', '397283674_23984311014550299_6071071097163523_n16.mp4', 'download_(39).jpg', 'download_(38).jpg', 'download_(37).jpg', 'images_(48).jpg', 'download_(40).jpg', 'Fresh meat', '450', NULL, NULL, NULL, '5', 'kg', 'Anoling 1st', 'n/a', 'per kilo', 'n/a', 'Meat', '  Pork', '', '0', '2023-06-14', '2023-11-29', '0000-00-00', '15.734101177322788', '120.36586761474611', '#d55493', '2023-10-31 16:48:44'),
(138, '445e07', 'Pork pata', '397283674_23984311014550299_6071071097163523_n17.mp4', 'images_(47).jpg', 'images_(44).jpg', 'images_(47)1.jpg', 'images_(44)1.jpg', 'images_(45).jpg', 'Fresh meat', '350', NULL, NULL, NULL, '7', 'kg', 'Palimbo Proper', 'n/a', 'per kilo', '', 'Meat', ' Pork', '', '0', '2023-08-20', '2023-11-19', '0000-00-00', '15.709315270649661', '120.39058685302736', '#c9975', '2023-10-31 16:51:32'),
(139, '445e07', 'Goat Meat', '397283674_23984311014550299_6071071097163523_n18.mp4', 'images_(55).jpg', 'images_(54).jpg', 'download_(50).jpg', 'download_(51).jpg', 'images_(54)1.jpg', 'Fresh meat', '750', NULL, NULL, NULL, '5', 'kg', 'Nagsabaran', 'n/a', 'per kilo', 'n/a', 'Meat', ' Goat', '', '0', '2023-04-14', '2023-11-17', '0000-00-00', '15.692789656968316', '120.46028137207031', '#a79994', '2023-10-31 17:06:53'),
(140, '445e07', 'Chicken ', '397283674_23984311014550299_6071071097163523_n19.mp4', 'images_(51).jpg', 'download_(41).jpg', 'download_(42).jpg', 'images_(49).jpg', 'images_(50).jpg', 'Fresh  meat', '180', NULL, NULL, NULL, '10', 'kg', 'Casipo', 'broiler', 'per kilo', 'white', 'Meat', 'Poultry Meat', '', '0', '2023-08-16', '2023-11-21', '0000-00-00', '15.723856701862513', '15.723856701862513', '#566c24', '2023-10-31 17:10:45'),
(141, '25cc95', 'Alugbati', '397283674_23984311014550299_6071071097163523_n20.mp4', 'download_(48).jpg', 'images_(53).jpg', 'download_(47).jpg', 'download_(46).jpg', 'download_(48)1.jpg', 'Fresh Harvest', '70', NULL, NULL, NULL, '', 'pieces', 'Pao 3rd', 'n/a', 'per pcs', 'violet', 'CropProductions', 'Others', 'Alugbati', '50', '2023-09-27', '2023-11-08', '0000-00-00', '15.67427937975686', '120.45375823974611', '#a48110', '2023-10-31 17:14:43'),
(142, '25cc95', 'Talbos ng Kamote', '397283674_23984311014550299_6071071097163523_n21.mp4', 'download_(44).jpg', 'download_(45).jpg', 'download_(43).jpg', 'images_(52).jpg', 'download_(43)1.jpg', 'Fresh Harvest', '50', NULL, NULL, NULL, '', 'pieces', 'Palimbo Proper', 'n/a', 'per pcs', 'green', 'Vegetables', 'Others', 'Kamote', '50', '2023-09-20', '0000-00-00', '2023-11-01', '15.67361826737979', '120.37273406982423', '#e06b0', '2023-10-31 17:18:03'),
(143, 'cda95d', 'Guyabano Fruit', '397283674_23984311014550299_6071071097163523_n22.mp4', 'download_(32)1.jpg', 'download_(30)1.jpg', 'download_(31)1.jpg', 'download_(30)2.jpg', 'download_(32)2.jpg', 'Fresh Harvest', '95', NULL, NULL, NULL, '', 'pieces', 'Anoling 3rd', 'n/a', 'per pcs', 'green', 'Fruits', 'Others', 'Guyabano', '50', '2018-03-15', '2023-11-08', '0000-00-00', '15.669982111047766', '120.38955688476564', '#9ed7eb', '2023-11-01 07:32:52'),
(144, 'cda95d', 'Blue Ternate', '397283674_23984311014550299_6071071097163523_n23.mp4', 'images_(12)1.jpg', 'images_(11)1.jpg', 'images_(10)2.jpg', 'download_(29)1.jpg', 'images_(9)2.jpg', 'Fresh Harvest', '2', NULL, NULL, NULL, '200', 'pieces', 'Papaac', 'n/a', 'per pcs', 'violet', 'Flowers', 'Others', 'Blue ternate', '50', '2023-07-18', '0000-00-00', '2023-10-24', '15.719560478009258', '120.46886444091798', '#1004eb', '2023-11-01 07:40:10'),
(145, 'cda95d', 'Beef Brisket', '397283674_23984311014550299_6071071097163523_n24.mp4', 'download_(28)1.jpg', 'download_(27)2.jpg', 'download_(26)1.jpg', 'download_(25)1.jpg', 'download_(28)2.jpg', 'Fresh meat', '350', NULL, NULL, NULL, '10', 'kg', 'Casipo', 'Bounty Fresh', 'per kilo', 'n/a', 'Meat', ' Beef', '', '50', '2019-04-18', '0000-00-00', '2023-06-29', '15.710306764854984', '120.4585647583008', '#246565', '2023-11-01 07:45:51'),
(146, 'cda95d', 'Brown Chicken egg', '397283674_23984311014550299_6071071097163523_n25.mp4', 'download_(29)2.jpg', 'images_(11)2.jpg', 'images_(10)3.jpg', 'images_(9)3.jpg', 'download_(30)3.jpg', 'in a tray', '570', NULL, NULL, NULL, '10', 'pieces', 'Balloc', 'Bounty Fresh', 'per pcs', '', 'Livestocks', '  Chicken', '', '0', '2023-10-02', '0000-00-00', '2023-11-02', '15.710306764854984', '120.4585647583008', '#59c000', '2023-11-01 07:55:48'),
(147, 'cda95d', 'Puso ng saging', '397283674_23984311014550299_6071071097163523_n26.mp4', 'download_(2)2.jpg', 'download2.jpg', 'download_(3)2.jpg', 'download_(1)2.jpg', 'download3.jpg', 'Fresh Harvest', '50', NULL, NULL, NULL, '15', 'pieces', 'Sinulatan 2nd', 'n/a', 'per pcs', 'n/a', 'Vegetables', 'Others', 'Saging', '50', '2022-07-15', '2023-11-23', '0000-00-00', '15.699069547998578', '120.46852111816408', '#a4d7ed', '2023-11-01 07:59:35'),
(148, 'cda95d', 'White Chicken egg ', '397283674_23984311014550299_6071071097163523_n27.mp4', 'images_(9)4.jpg', 'images_(10)4.jpg', 'download_(2)3.jpg', 'download_(1)3.jpg', 'download4.jpg', 'in a tray', '170', NULL, NULL, NULL, '15', 'pieces', 'Balloc', 'Bounty Fresh', 'per pcs', 'white', 'Livestocks', ' Chicken', '', '50', '2023-09-22', '0000-00-00', '2023-09-23', '15.699069547998578', '120.46852111816408', '#9cf069', '2023-11-01 08:05:11'),
(149, 'cda95d', 'Beef Short Loin', '397283674_23984311014550299_6071071097163523_n28.mp4', 'images_(28)1.jpg', 'images_(29)1.jpg', 'download_(42)1.jpg', 'images_(26)1.jpg', 'images_(25)1.jpg', 'Fresh meat', '300', NULL, NULL, NULL, '10', 'kg', 'Pit-ao', 'n/a', 'per kilo', 'n/a', 'Meat', ' Beef', '', '0', '2023-09-15', '2023-11-18', '0000-00-00', '15.728565919968649', '120.36063194274904', '#ab4e71', '2023-11-01 10:36:34'),
(150, 'cda95d', 'Dayap', '397283674_23984311014550299_6071071097163523_n29.mp4', 'images_(24).jpg', 'download_(40)1.jpg', 'download_(38)1.jpg', 'download_(38)2.jpg', 'download_(39)1.jpg', 'Fresh Harvest', '100', NULL, NULL, NULL, '5', 'kg', 'Malacampa', 'n/a', 'per kilo', 'green', 'CropProductions', 'Others', 'dayap', '50', '2023-04-06', '2023-12-12', '0000-00-00', '15.643783345063444', '120.40828943252563', '#f6c4c7', '2023-11-01 10:39:57'),
(151, 'cda95d', 'Anthurium', '397283674_23984311014550299_6071071097163523_n30.mp4', 'download_(37)1.jpg', 'images_(23)1.jpg', 'images_(22)1.jpg', 'download_(35).jpg', 'download_(36)1.jpg', 'Flower/Ornamental', '500', NULL, NULL, NULL, '5', 'pieces', 'Balloc', 'n/a', 'per pcs', 'Red', 'Flowers', 'Others', 'anthurium', '0', '2023-02-09', '0000-00-00', '2023-09-15', '15.685032485139779', '120.34694731235506', '#b15e91', '2023-11-01 11:16:40'),
(152, 'cda95d', 'Canaan nano organic', '397283674_23984311014550299_6071071097163523_n31.mp4', 'download_(24)1.jpg', 'images_(8)5.jpg', 'download_(22)1.jpg', 'download_(23)2.jpg', 'images_(8)6.jpg', ' 1 Gallon', '1,500', NULL, NULL, NULL, '50', 'pieces', 'Pob. A', 'n/a', 'per pcs', 'n/a', 'Fertilizers', 'OrganicFertilizer', '', '0', '2023-08-09', '2023-11-03', '0000-00-00', '15.625351287792194', '120.34595489501955', '#6df5dc', '2023-11-01 11:22:42'),
(153, 'cda95d', 'Saging', '397283674_23984311014550299_6071071097163523_n32.mp4', 'download_(7)1.jpg', 'download_(8)1.jpg', 'download_(9)1.jpg', 'images_(1)2.jpg', 'images1.jpg', 'Saba', '40', NULL, NULL, NULL, '10', 'kg', 'Sawat', 'n/a', 'per kilo', 'green', 'Fruits', '', '', '50', '2022-07-01', '0000-00-00', '2023-10-26', '15.625351287792194', '120.34595489501955', '#ec8fd8', '2023-11-01 11:29:23'),
(154, 'cda95d', 'Papaya', '397283674_23984311014550299_6071071097163523_n33.mp4', 'download_(6)2.jpg', 'download_(5)2.jpg', 'download_(5)3.jpg', 'download_(4)2.jpg', 'download_(6)3.jpg', 'unripe', '60', NULL, NULL, NULL, '50', 'kg', 'Doclong 2', 'n/a', 'per kilo', 'green', 'Vegetables', 'Papaya', '', '50', '2023-06-16', '2023-12-13', '0000-00-00', '15.625681922266882', '120.29823303222658', '#270474', '2023-11-01 11:38:23'),
(155, 'cda95d', 'Glutinous rice', '397283674_23984311014550299_6071071097163523_n34.mp4', 'images_(7)3.jpg', 'download_(21)1.jpg', 'download_(20)1.jpg', 'download_(21)2.jpg', 'download_(19)1.jpg', 'Malagkit', '65', NULL, NULL, NULL, '', 'kg', 'Sinulatan 2nd', 'n/a', 'per kilo', 'white', 'CropProductions', 'Others', 'Rice', '50', '2023-05-11', '0000-00-00', '2023-10-30', '15.625681922266882', '120.29823303222658', '#3ef2c7', '2023-11-01 11:47:56'),
(156, 'cda95d', 'Santan', '397283674_23984311014550299_6071071097163523_n35.mp4', 'images_(19)1.jpg', 'images_(18)1.jpg', 'download_(27)3.jpg', 'download_(26)2.jpg', 'download_(27)4.jpg', 'Red flower', '140', NULL, NULL, NULL, '20', 'pieces', 'Anoling 2nd', 'n/a', 'per pcs', 'red', 'Flowers', 'Others', 'santan', '50', '2023-10-03', '2023-11-30', '0000-00-00', '15.664362469391847', '120.33428192138673', '#6f14a9', '2023-11-01 12:05:13'),
(157, 'cda95d', 'Miracle fruit', '397283674_23984311014550299_6071071097163523_n36.mp4', 'images_(21)1.jpg', 'download_(34)1.jpg', 'download_(33)1.jpg', 'download_(31)2.jpg', 'download_(32)3.jpg', 'Fresh Harvest', '300', NULL, NULL, NULL, '', 'pieces', 'Bobon 2nd', 'n/a', 'per pcs', 'green', 'Fruits', 'Others', 'Miracle fruit', '0', '2022-11-02', '2023-11-17', '0000-00-00', '15.638245636786577', '120.39779663085939', '#a473c6', '2023-11-01 12:08:34'),
(158, 'cda95d', 'Native Siling labuyo', '397283674_23984311014550299_6071071097163523_n37.mp4', 'download_(25)2.jpg', 'images_(16)1.jpg', 'download_(3)3.jpg', 'download_(1)4.jpg', 'download_(2)4.jpg', 'Fresh Harvest', '70', NULL, NULL, NULL, '10', 'kg', 'Tambugan', 'n/a', 'per kilo', 'red', 'CropProductions', 'Others', 'Sili', '50', '2023-07-14', '2023-11-16', '0000-00-00', '15.664362469391847', '120.33428192138673', '#f723ec', '2023-11-01 12:14:20'),
(159, 'cda95d', 'Rice', '397283674_23984311014550299_6071071097163523_n38.mp4', 'images2.jpg', 'images_(16)2.jpg', 'images_(8)7.jpg', 'images_(7)4.jpg', 'images_(1)3.jpg', 'Dinorado', '56', NULL, NULL, NULL, '25', 'kg', 'Doclong 2', 'n/a', 'per kilo', 'white', 'CropProductions', '', '', '50', '2023-05-01', '0000-00-00', '2023-07-31', '15.638245636786577', '120.39779663085939', '#ae7907', '2023-11-01 12:24:10'),
(160, 'cda95d', 'Papaya', '397283674_23984311014550299_6071071097163523_n39.mp4', 'download_(16)1.jpg', 'download_(18)1.jpg', 'images_(6)2.jpg', 'images_(5)2.jpg', 'download_(17)1.jpg', 'ripe', '100', NULL, NULL, NULL, '10', 'pieces', 'Tuec', 'n/a', 'per pcs', 'yellow', 'Fruits', 'Papaya', '', '0', '2023-06-09', '0000-00-00', '2023-09-15', '15.65609800971696', '120.38475036621095', '#2aa0d7', '2023-11-01 12:27:01'),
(161, 'cda95d', 'Duck meat', '397283674_23984311014550299_6071071097163523_n40.mp4', 'images_(12)2.jpg', 'images_(13)1.jpg', 'images_(13)2.jpg', 'images_(14)1.jpg', 'images_(12)3.jpg', 'Fresh meat', '380', NULL, NULL, NULL, '10', 'kg', 'Doclong 2', 'n/a', 'per kilo', 'n/a', 'Meat', 'Others', 'Duck', '0', '2023-06-01', '2023-11-24', '0000-00-00', '15.651469766350758', '120.36930084228517', '#7d0574', '2023-11-01 12:34:32'),
(162, 'cda95d', 'Beef Shank', '397283674_23984311014550299_6071071097163523_n41.mp4', 'images_(20)1.jpg', 'download_(30)4.jpg', 'download_(28)3.jpg', 'images_(20)2.jpg', 'download_(29)3.jpg', 'Fresh meat', '300', NULL, NULL, NULL, '10', 'kg', 'Sinilian 2nd', 'n/a', 'per kilo', 'n/a', 'Meat', 'Beef', '', '0', '2018-05-04', '2023-11-23', '0000-00-00', '15.700061092057634', '120.46199798583986', '#c4ac7e', '2023-11-01 12:38:22'),
(163, 'cda95d', 'Rice', '397283674_23984311014550299_6071071097163523_n42.mp4', 'images_(1)4.jpg', 'images_(5)3.jpg', 'download_(1)5.jpg', 'images3.jpg', 'images_(5)4.jpg', 'Brown', '170', NULL, NULL, NULL, '50', 'kg', 'Bamban', 'n/a', 'per kilo', 'brown', 'CropProductions', 'Others', 'Rice', '0', '2023-08-10', '0000-00-00', '2023-10-26', '15.714272693412495', '120.3761672973633', '#367361', '2023-11-01 12:45:06'),
(164, 'cda95d', 'Sweet Corn', '397283674_23984311014550299_6071071097163523_n43.mp4', 'download_(2)5.jpg', 'images_(5)5.jpg', 'images_(1)5.jpg', 'images4.jpg', 'download_(1)6.jpg', 'high fibre content', '150', NULL, NULL, NULL, '', 'kg', 'Pindangan 2nd', 'Yellow Corn', 'per kilo', 'yellow', 'CropProductions', 'Cron', '', '0', '2023-03-24', '0000-00-00', '2023-05-31', '15.65609800971696', '120.38475036621095', '#4f451e', '2023-11-01 12:56:11'),
(165, 'cda95d', 'Bayabas', '397283674_23984311014550299_6071071097163523_n44.mp4', 'images_(15)1.jpg', 'download5.jpg', 'images_(11)3.jpg', 'download6.jpg', 'images_(10)5.jpg', 'Native', '20', NULL, NULL, NULL, '10', 'kg', 'Libueg', 'n/a', 'per kilo', 'green', 'Fruits', 'Others', 'Bayabas', '50', '2023-06-09', '2023-11-18', '0000-00-00', '15.651469766350758', '120.36930084228517', '#fef1b2', '2023-11-01 12:58:52'),
(166, 'cda95d', 'Bayabas', '397283674_23984311014550299_6071071097163523_n45.mp4', 'download_(3)4.jpg', 'images5.jpg', 'download_(1)7.jpg', 'download9.jpg', 'download_(2)6.jpg', 'Leaves', '12', NULL, NULL, NULL, '10', 'kg', 'Libueg', 'n/a', 'per kilo', 'green', 'Fruits', ' Bayabas', '', '50', '2023-06-09', '2023-11-18', '0000-00-00', '15.700061092057634', '120.46199798583986', '#6b668f', '2023-11-01 12:58:54'),
(167, 'cda95d', 'Rice', '397283674_23984311014550299_6071071097163523_n46.mp4', 'download10.jpg', 'images_(6)3.jpg', 'images_(5)6.jpg', 'images_(1)6.jpg', 'images6.jpg', 'Sinandomeng', '42', NULL, NULL, NULL, '50', 'kg', 'Sinulatan 1st', 'n/a', 'per kilo', 'white', 'CropProductions', 'Others', 'Rice', '50', '2023-08-11', '0000-00-00', '2023-10-10', '15.714272693412495', '120.3761672973633', '#f57275', '2023-11-01 13:08:51'),
(168, 'cda95d', 'Beef Ribs', '397283674_23984311014550299_6071071097163523_n47.mp4', 'download_(10)1.jpg', 'download_(12)1.jpg', 'images_(2)3.jpg', 'download_(11)1.jpg', 'download_(10)2.jpg', 'Fresh meat', '360', NULL, NULL, NULL, '20', 'kg', 'Tambugan', 'n/a', 'per kilo', 'n/a', 'Meat', 'Beef', '', '0', '2017-09-08', '2023-11-14', '0000-00-00', '15.709315270649661', '120.38784027099611', '#ebe4ba', '2023-11-01 13:19:05'),
(169, '445e07', 'Itik', '397283674_23984311014550299_6071071097163523_n48.mp4', 'images_(35)1.jpg', 'images_(34)1.jpg', 'download_(60).jpg', 'download_(59).jpg', 'download_(58).jpg', 'Backyard animals', '270', NULL, NULL, NULL, '100', 'pieces', 'Doclong 2', 'n/a', 'per pcs', 'black', 'Livestocks', 'Others', 'Duck', '50', '2022-09-30', '2023-11-30', '0000-00-00', '15.713281218513227', '120.48740386962892', '#435c03', '2023-11-01 15:16:58'),
(170, '445e07', 'Hipon ', '397283674_23984311014550299_6071071097163523_n49.mp4', 'download_(55).jpg', 'download_(57).jpg', 'download_(56).jpg', 'download_(54).jpg', 'download_(55)1.jpg', 'Frozen', '250', NULL, NULL, NULL, '10', 'kg', 'Pob. G', 'n/a', 'per kilo', 'n/a', 'Fish', 'Seafoods', '', '50', '2023-07-13', '0000-00-00', '2023-10-12', '15.650808580175482', '120.30853271484376', '#443e7b', '2023-11-01 15:20:57'),
(171, '445e07', 'Saging', '397283674_23984311014550299_6071071097163523_n50.mp4', 'download_(53).jpg', 'download_(52).jpg', 'download_(53)1.jpg', 'download_(52)1.jpg', 'download_(53)2.jpg', 'Señorita ', '35', NULL, NULL, NULL, '10', 'kg', 'Sinulatan 1st', 'n/a', 'per kilo', 'yellow', 'Fruits', 'Others', 'Saging', '50', '2022-08-25', '0000-00-00', '2023-10-10', '15.722204318804554', '120.37788391113283', '#aae899', '2023-11-01 15:25:50'),
(172, '445e07', 'Chicken', '397283674_23984311014550299_6071071097163523_n51.mp4', 'download_(42)2.jpg', 'download_(43)2.jpg', 'download_(44)1.jpg', 'images_(25)2.jpg', 'download_(42)3.jpg', '45 days broiler', '200', NULL, NULL, NULL, '20', 'kg', 'Bilad', 'n/a', 'per kilo', 'white', 'Livestocks', 'Chicken', '', '0', '2023-10-01', '2023-11-15', '0000-00-00', '15.731457491108594', '120.47126770019533', '#d3de6e', '2023-11-01 15:30:29'),
(173, '445e07', 'Rice', '397283674_23984311014550299_6071071097163523_n52.mp4', 'download_(29)4.jpg', 'images_(20)3.jpg', 'download_(29)5.jpg', 'images_(21)2.jpg', 'download_(28)4.jpg', 'Red', '79', NULL, NULL, NULL, '30', 'kg', 'Anoling 1st', 'n/a', 'per kilo', 'red', 'CropProductions', 'Others', 'Rice', '0', '2022-03-25', '0000-00-00', '2022-09-14', '15.724848125257582', '120.38681030273439', '#1440e7', '2023-11-01 15:36:53'),
(174, '445e07', 'Kamias', '397283674_23984311014550299_6071071097163523_n53.mp4', 'download_(8)2.jpg', 'download_(10)3.jpg', 'download_(7)2.jpg', 'download_(10)4.jpg', 'images_(8)8.jpg', 'Dried', '150', NULL, NULL, NULL, '10', 'kg', 'Poblacion Sur', 'n/a', 'per kilo', 'brown', 'Fruits', ' Kamias', '', '0', '2022-12-08', '0000-00-00', '2023-09-29', '15.634939470864143', '120.31299591064455', '#af7917', '2023-11-01 15:45:52'),
(175, '445e07', 'Soil-less potting mix', '397283674_23984311014550299_6071071097163523_n54.mp4', 'download_(28)5.jpg', 'download_(29)6.jpg', 'download_(42)4.jpg', 'download_(28)6.jpg', 'download_(43)3.jpg', 'Organic', '40', NULL, NULL, NULL, '40', 'kg', 'Anoling 2nd', 'n/a', 'per kilo', 'black', 'Fertilizers', 'OrganicFertilizer', '', '50', '2023-01-01', '0000-00-00', '2023-09-28', '15.723856701862513', '120.37548065185547', '#fc7954', '2023-11-01 15:53:45'),
(176, '445e07', 'Tanglad', '397283674_23984311014550299_6071071097163523_n55.mp4', 'download_(33)2.jpg', 'download_(31)3.jpg', 'images_(22)2.jpg', 'download_(32)4.jpg', 'download_(30)5.jpg', 'Spices', '20', NULL, NULL, NULL, '20', 'pieces', 'Poblacion Norte', 'n/a', 'per pcs', 'green', 'CropProductions', 'Others', 'Tanglad', '50', '2023-02-09', '0000-00-00', '2023-07-20', '15.664362469391847', '120.32535552978517', '#51caf', '2023-11-01 16:00:05'),
(177, '445e07', 'Suha', '397283674_23984311014550299_6071071097163523_n56.mp4', 'download_(34)2.jpg', 'download_(37)2.jpg', 'images_(23)2.jpg', 'download_(36)2.jpg', 'download_(35)1.jpg', 'Pomelo', '80', NULL, NULL, NULL, '22', 'pieces', 'Pit-ao', 'n/a', 'per pcs', 'green', 'Fruits', ' citrus', '', '50', '2023-09-14', '0000-00-00', '2023-10-30', '15.723856701862513', '120.39951324462892', '#7ca5a1', '2023-11-01 16:05:03'),
(178, '445e07', 'Gumamela', '397283674_23984311014550299_6071071097163523_n57.mp4', 'download_(22)2.jpg', 'images_(17)1.jpg', 'images_(16)3.jpg', 'download_(24)2.jpg', 'download_(23)3.jpg', 'Pink flower', '200', NULL, NULL, NULL, '2', 'pieces', 'Anoling 3rd', 'n/a', 'per pcs', 'pink', 'Flowers', 'Others', 'Gumamela', '50', '2023-09-08', '2023-11-05', '0000-00-00', '15.723856701862513', '120.39951324462892', '#e91492', '2023-11-01 16:25:33'),
(179, '445e07', 'Kamias', '397283674_23984311014550299_6071071097163523_n58.mp4', 'download_(3)5.jpg', 'images_(6)4.jpg', 'images_(5)7.jpg', 'images_(4)2.jpg', 'images_(2)4.jpg', 'Fresh Harvest', '100', 100, 2, 10, '5', 'kg', 'Nagsabaran', 'n/a', 'per kilo', 'green', 'Fruits', ' ', '', '0', '2023-10-28', '2023-11-30', '0000-00-00', '15.731457491108594', '120.40054321289064', '#1c5cb7', '2023-11-01 16:28:20'),
(180, '445e07', 'Salmon', '397283674_23984311014550299_6071071097163523_n59.mp4', 'images_(26)2.jpg', 'images_(27)1.jpg', 'download_(46)1.jpg', 'download_(45)1.jpg', 'images_(26)3.jpg', 'Frozen', '400', NULL, NULL, NULL, '', 'kg', 'Birbira', 'n/a', 'per kilo', 'n/a', 'Fish', 'Fish', '', '0', '2023-08-25', '2023-11-18', '0000-00-00', '15.6621575700644', '120.36756277084352', '#4d3520', '2023-11-02 00:08:57'),
(181, '445e07', 'Atis', '397283674_23984311014550299_6071071097163523_n60.mp4', 'images_(15)3.jpg', 'images_(14)2.jpg', 'download_(20)2.jpg', 'download_(19)2.jpg', 'download_(18)2.jpg', 'Backyard crop', '15', NULL, NULL, NULL, '40', 'pieces', 'Cayasan', 'n/a', 'per pcs', 'green', 'Fruits', 'Others', 'atis', '50', '2023-10-15', '2023-11-18', '0000-00-00', '15.676482534212719', '120.36216616630556', '#4622f3', '2023-11-02 00:12:35'),
(182, '445e07', 'Rabbit', '397283674_23984311014550299_6071071097163523_n61.mp4', 'download_(50)1.jpg', 'download_(49).jpg', 'images_(32)1.jpg', 'images_(33)1.jpg', 'download_(51)1.jpg', 'Cali', '500', NULL, NULL, NULL, '7', 'pieces', 'Casipo', 'n/a', 'per pcs', 'white', 'Livestocks', 'Others', 'Rabbit', '0', '2023-09-08', '2023-11-08', '0000-00-00', '15.692616970143645', '120.35933375358583', '#d944e6', '2023-11-02 00:15:21'),
(183, '445e07', 'Corn', '397283674_23984311014550299_6071071097163523_n62.mp4', 'download_(14)1.jpg', 'download_(13)1.jpg', 'download_(15)1.jpg', 'download_(14)2.jpg', 'download_(13)2.jpg', 'White', '50', NULL, NULL, NULL, '18', 'kg', 'Sinilian 3rd ', 'n/a', 'per kilo', 'white', 'CropProductions', 'Cron', '', '50', '2023-10-11', '2023-12-08', '0000-00-00', '15.731457491108594', '120.40054321289064', '#13b215', '2023-11-02 00:18:10'),
(184, '445e07', 'Oregano leaves', '397283674_23984311014550299_6071071097163523_n63.mp4', 'download_(11)2.jpg', 'download_(16)2.jpg', 'download_(12)2.jpg', 'download_(12)3.jpg', 'download_(17)2.jpg', 'Fresh', '30', NULL, NULL, NULL, '50', 'pieces', 'Telbang', 'n/a', 'per pcs', '', 'CropProductions', 'Others', 'Oregano', '50', '2023-10-17', '2023-12-04', '0000-00-00', '15.652068964475589', '120.41017770767213', '#291c73', '2023-11-02 00:24:13'),
(185, '445e07', 'Yellow bell', '397283674_23984311014550299_6071071097163523_n64.mp4', 'images7.jpg', 'download11.jpg', 'download_(1)8.jpg', 'images_(1)7.jpg', 'download_(2)7.jpg', 'Flower', '150', NULL, NULL, NULL, '20', 'pieces', 'Sinulatan 1st', 'n/a', 'per pcs', 'yellow', 'Flowers', 'Others', 'Flower', '50', '2023-09-28', '2023-12-08', '0000-00-00', '15.695934791045126', '120.40201842784883', '#a526a9', '2023-11-02 00:31:13'),
(186, '445e07', 'Salted egg', '397283674_23984311014550299_6071071097163523_n65.mp4', 'images_(30)1.jpg', 'images_(31)1.jpg', 'download_(48)2.jpg', 'images_(29)2.jpg', 'download_(47)1.jpg', '(made from duck egg)', '12', NULL, NULL, NULL, '100', 'pieces', 'Tuec', 'n/a', 'per pcs', 'n/a', 'Livestocks', '', '', '50', '2023-10-12', '2023-11-15', '0000-00-00', '15.662430681872333', '120.41154563426973', '#4bec36', '2023-11-02 00:38:13'),
(187, '445e07', 'Madre de cacao', '397283674_23984311014550299_6071071097163523_n66.mp4', 'download_(27)5.jpg', 'images_(19)2.jpg', 'images_(18)2.jpg', 'download_(26)3.jpg', 'download_(25)3.jpg', 'Leaves', '20', NULL, NULL, NULL, '100', 'pieces', 'Bacsay', 'n/a', 'per pcs', 'green', 'CropProductions', 'Others', 'Madre de cacao', '50', '2023-09-26', '2023-11-16', '0000-00-00', '15.642383434829458', '120.33901870250702', '#bcf84', '2023-11-02 00:44:05'),
(188, '445e07', 'Field corn', '397283674_23984311014550299_6071071097163523_n67.mp4', 'images_(11)5.jpg', 'images_(13)3.jpg', 'images_(12)4.jpg', 'images_(9)5.jpg', 'images_(10)7.jpg', '(animal feeds)', '35', NULL, NULL, NULL, '', 'kg', 'Pindangan 2nd', 'n/a', 'per kilo', 'yellow', 'CropProductions', 'Cron', '', '50', '2023-09-29', '0000-00-00', '2023-12-30', '15.74368425173075', '120.42679667472841', '#a7cd8c', '2023-11-02 00:47:31'),
(189, 'cda95d', 'Bugnay', '397283674_23984311014550299_6071071097163523_n68.mp4', 'images_(24)1.jpg', 'download_(41)1.jpg', 'download_(40)2.jpg', 'download_(39)2.jpg', 'download_(38)3.jpg', 'Fresh Harvest', '180', NULL, NULL, NULL, '80', 'kg', 'Caniag', 'n/a', 'per kilo', 'n/a', 'Fruits', 'Others', 'Fruits', '0', '2023-09-14', '2023-12-20', '0000-00-00', '15.72759516901387', '120.44974565505983', '#ca198f', '2023-11-02 00:54:09'),
(190, 'cda95d', 'Sineguelas', '397283674_23984311014550299_6071071097163523_n69.mp4', 'download_(4)3.jpg', 'download_(5)4.jpg', 'images_(7)5.jpg', 'download_(6)4.jpg', 'download_(6)5.jpg', '(Spanish plum)', '100', NULL, NULL, NULL, '10', 'kg', 'Maasin', 'n/a', 'per kilo', 'n/a', 'Fruits', '', '', '50', '2023-08-17', '2023-11-06', '0000-00-00', '15.667151649095167', '120.3306555747986', '#328db2', '2023-11-02 00:59:08'),
(191, 'cda95d', 'Chicken', '397283674_23984311014550299_6071071097163523_n70.mp4', 'download_(28)7.jpg', 'download_(30)6.jpg', 'download_(31)4.jpg', 'download_(29)7.jpg', 'download_(27)6.jpg', 'Native', '300', NULL, NULL, NULL, '45', 'pieces', 'Papaac', 'n/a', 'per pcs', 'n/a', 'Livestocks', 'Chicken', '', '0', '2023-09-01', '2023-11-14', '0000-00-00', '15.640477268595792', '120.32320976257326', '#69686b', '2023-11-02 02:41:17'),
(192, 'cda95d', 'Avocado', '397283674_23984311014550299_6071071097163523_n71.mp4', 'images_(18)3.jpg', 'images_(20)4.jpg', 'images_(19)3.jpg', 'images_(17)2.jpg', 'download_(47)2.jpg', 'Backyard crop', '200', NULL, NULL, NULL, '20', 'kg', 'Cayaoan', 'n/a', 'per kilo', 'green', 'Fruits', '', '', '0', '2023-11-16', '0000-00-00', '2023-12-28', '15.695934506088786', '120.41260718804814', '#48ad', '2023-11-02 02:43:33'),
(193, 'cda95d', 'Pork chop', '397283674_23984311014550299_6071071097163523_n72.mp4', 'images_(16)4.jpg', 'images_(15)4.jpg', 'images_(14)3.jpg', 'download_(46)2.jpg', 'download_(45)2.jpg', 'Fresh meat', '220', NULL, NULL, NULL, '10', 'kg', 'Matubog', 'n/a', 'per kilo', 'n/a', 'Meat', 'Pork', '', '0', '2023-10-12', '2023-11-04', '0000-00-00', '15.689392349702004', '120.44751603279306', '#859436', '2023-11-02 02:52:07'),
(194, 'cda95d', 'Baboy', '397283674_23984311014550299_6071071097163523_n73.mp4', 'download_(43)4.jpg', 'download_(44)2.jpg', 'download_(42)5.jpg', 'download_(41)2.jpg', 'download_(40)3.jpg', 'Native', '8,000', NULL, NULL, NULL, '10', 'pieces', 'Casipo', 'n/a', 'per pcs', 'black', 'Livestocks', 'Pork', '', '0', '2023-08-24', '2023-11-15', '0000-00-00', '15.691550181938261', '120.35953760147096', '#d5d7f1', '2023-11-02 02:56:15'),
(195, 'cda95d', 'Rice hull', '397283674_23984311014550299_6071071097163523_n74.mp4', 'images_(12)5.jpg', 'images_(13)4.jpg', 'download_(39)3.jpg', 'download_(38)4.jpg', 'download_(37)3.jpg', '(Carbonized)', '35', NULL, NULL, NULL, '', 'kg', 'Cabanabaan', 'n/a', 'per kilo', 'black', 'Fertilizers', 'NaturalFertilizer', '', '50', '2023-11-03', '2023-11-30', '0000-00-00', '15.649899445694144', '120.42672157287599', '#aec07a', '2023-11-02 02:59:50'),
(196, 'cda95d', 'Chicken  breast', '397283674_23984311014550299_6071071097163523_n75.mp4', 'download_(33)3.jpg', 'download_(36)3.jpg', 'download_(35)2.jpg', 'download_(34)3.jpg', 'download_(32)5.jpg', 'Fresh meat', '200', NULL, NULL, NULL, '', 'kg', 'Pob. J', 'n/a', 'per kilo', 'n/a', 'Meat', 'Chicken', '', '50', '2023-11-02', '2023-11-22', '0000-00-00', '15.75822322584897', '120.40054321289064', '#7111d0', '2023-11-02 03:03:30'),
(197, 'cda95d', 'Patola', '397283674_23984311014550299_6071071097163523_n76.mp4', 'download_(26)4.jpg', 'images_(11)6.jpg', 'download_(25)4.jpg', 'download_(24)3.jpg', 'download_(23)4.jpg', 'Backyard crop', '50', NULL, NULL, NULL, '20', 'kg', 'Sawat', 'n/a', 'per kilo', 'green', 'Vegetables', 'Others', 'Patola', '50', '2023-10-20', '2023-11-20', '0000-00-00', '15.716916602876845', '120.4222583770752', '#2cbaed', '2023-11-02 03:06:11'),
(198, 'cda95d', 'Patani', '397283674_23984311014550299_6071071097163523_n77.mp4', 'images_(1)8.jpg', 'download_(1)9.jpg', 'download12.jpg', 'images8.jpg', 'images_(2)5.jpg', 'Fresh Harvest', '35', NULL, NULL, NULL, '10', 'kg', 'Nagsabaran', 'n/a', 'per kilo', 'green', 'Vegetables', 'Others', 'Patola', '50', '2023-10-20', '2023-11-30', '0000-00-00', '15.709356583004555', '120.36206960678102', '#2e886c', '2023-11-02 03:13:17'),
(199, 'cda95d', 'Dalandan', '397283674_23984311014550299_6071071097163523_n78.mp4', 'download_(22)3.jpg', 'download_(21)3.jpg', 'download_(20)3.jpg', 'download_(19)3.jpg', 'download_(18)3.jpg', 'Fresh Harvest', '60', NULL, NULL, NULL, '3', 'kg', 'Maasin', 'n/a', 'per kilo', 'green', 'Fruits', 'Others', 'citrus', '50', '2023-07-06', '2023-11-16', '0000-00-00', '15.635954578992399', '120.29536247650654', '#a8ff48', '2023-11-02 03:19:05'),
(200, 'cda95d', 'Kundol', '397283674_23984311014550299_6071071097163523_n79.mp4', 'download_(17)3.jpg', 'download_(16)3.jpg', 'download_(15)2.jpg', 'download_(14)3.jpg', 'download_(13)3.jpg', 'Backyard crop', '80', NULL, NULL, NULL, '20', 'pieces', 'Catagudingan', 'n/a', 'per pcs', 'green', 'Vegetables', 'Others', 'kundol', '0', '2023-04-14', '2023-11-07', '0000-00-00', '15.712223324564716', '120.36301612762749', '#ddab03', '2023-11-02 03:21:26'),
(201, 'cda95d', 'Orchid', '397283674_23984311014550299_6071071097163523_n80.mp4', 'images_(10)8.jpg', 'images_(9)6.jpg', 'images_(8)9.jpg', 'images_(7)6.jpg', 'download_(12)4.jpg', 'Flower/Ornamental', '200', NULL, NULL, NULL, '20', 'pieces', 'Pob. G', 'n/a', 'per pcs', 'violet', 'Flowers', 'Others', 'Flower', '50', '2023-03-04', '2023-11-04', '0000-00-00', '15.688230568013978', '120.41494727024872', '#f385af', '2023-11-02 03:25:49'),
(202, 'cda95d', 'Tilapia', '397283674_23984311014550299_6071071097163523_n81.mp4', 'images_(5)8.jpg', 'images_(6)5.jpg', 'images_(4)3.jpg', 'download_(11)3.jpg', 'download_(10)5.jpg', 'Fresh Catch', '160', NULL, NULL, NULL, '20', 'kg', 'Bobon 2nd', 'n/a', 'per kilo', 'n/a', 'Fish', 'Others', 'tilapia', '0', '2023-07-14', '2023-12-11', '0000-00-00', '15.659403833688671', '120.40088653564455', '#e4bec4', '2023-11-02 03:28:35'),
(203, 'cda95d', 'Pork loin', '397283674_23984311014550299_6071071097163523_n82.mp4', 'download_(9)2.jpg', 'images_(3)2.jpg', 'download_(8)3.jpg', 'download_(7)3.jpg', 'download_(8)4.jpg', 'Fresh meat', '250', NULL, NULL, NULL, '15', 'kg', 'Daldalayap', 'n/a', 'per kilo', 'n/a', 'Meat', 'Pork', '', '0', '2023-06-02', '2023-11-04', '0000-00-00', '15.695929626661114', '120.34775733947755', '#150859', '2023-11-02 03:31:39'),
(204, '445e07', 'Palay Binhi', '397283674_23984311014550299_6071071097163523_n83.mp4', 'download13.jpg', 'images9.jpg', 'images_(1)9.jpg', 'download_(1)10.jpg', 'images10.jpg', 'RC 420', '20', NULL, NULL, NULL, '100', 'kg', 'Pob. H', 'n/a', 'per kilo', 'brown', 'CropProductions', 'Others', 'Rice', '50', '2023-08-17', '0000-00-00', '2023-10-31', '15.698408515946419', '120.36483764648439', '#b6a13', '2023-11-02 14:01:11'),
(205, '445e07', 'Gabi', '397283674_23984311014550299_6071071097163523_n84.mp4', 'download_(11)4.jpg', 'download_(10)6.jpg', 'download_(9)3.jpg', 'download_(8)5.jpg', 'download_(7)4.jpg', 'Backyard crop', '50', NULL, NULL, NULL, '', 'kg', 'Maasin', 'n/a', 'per kilo', 'brown', 'Vegetables', '', '', '50', '2023-02-06', '2023-12-18', '0000-00-00', '15.658907963501214', '120.3285312652588', '#e989d3', '2023-11-02 14:04:27'),
(206, '445e07', 'Galunggong', '397283674_23984311014550299_6071071097163523_n85.mp4', 'images_(2)6.jpg', 'images_(3)3.jpg', 'download_(14)4.jpg', 'download_(13)4.jpg', 'download_(12)5.jpg', 'Fresh', '180', NULL, NULL, NULL, '', 'kg', 'Poblacion Norte', 'n/a', 'per kilo', 'n/a', 'Fish', 'Others', 'Galunggong', '0', '2023-09-14', '2023-11-04', '0000-00-00', '15.658907963501214', '120.32835312652588', '#b86de3', '2023-11-02 14:10:50'),
(207, '445e07', 'Gound Beef', '397283674_23984311014550299_6071071097163523_n86.mp4', 'download_(15)3.jpg', 'images_(5)9.jpg', 'images_(6)6.jpg', 'images_(4)4.jpg', 'images_(5)10.jpg', 'Frozen', '250', NULL, NULL, NULL, '10', 'kg', 'Pob. E', 'n/a', 'per kilo', 'n/a', 'Meat', 'Beef', '', '50', '2023-07-07', '2023-11-06', '0000-00-00', '15.658607963501214', '120.3235312652588', '#485d12', '2023-11-02 14:18:47'),
(209, '445e07', 'Malathion 57 EC ', '397283674_23984311014550299_6071071097163523_n88.mp4', 'download_(1)11.jpg', 'download14.jpg', '6243d944ae82bd0e60a75264845f2c95.jpg', 'download15.jpg', 'download_(1)12.jpg', 'Pest Control (100ml)', '250', NULL, NULL, NULL, '97', 'pieces', 'Pob. C', 'n/a', 'per pcs', 'n/a', 'Pesticides', '    Insecticides', '', '0', '2023-11-01', '2023-11-14', '0000-00-00', '15.682708374906904', '120.39539337158205', '#6d833c', '2023-11-05 14:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sphoto` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sdes` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Provice` varchar(255) NOT NULL,
  `Municipality` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `OtherAddress` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT '2' COMMENT '1=admin, 2=user, 3=seller',
  `user_avtar` varchar(255) NOT NULL,
  `valid_id` varchar(255) NOT NULL,
  `gcash` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `Agrocash` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `unique_id`, `fname`, `lname`, `sphoto`, `sname`, `sdes`, `number`, `address`, `Provice`, `Municipality`, `Barangay`, `Street`, `OtherAddress`, `email`, `password`, `user_type`, `user_avtar`, `valid_id`, `gcash`, `user_status`, `Agrocash`, `lat`, `lng`, `date_added`) VALUES
('1', '0dd115', 'Neilo', 'Delatorre', '', '', '', '09236587940', '', 'Tarlac', 'Tarlac', 'Poblacion Sur', 'Purok 1', ' Near Brgy. Hall', 'neilo21delatorre@gmail.com', '09876543', '2', 'de148a0b.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('2', '1aaf0e', 'Yslay', 'Domingo', '', '', '', '09460488528', '', 'Tarlac', 'Tarlac', 'San Isidro (Bancay 2nd)', 'Purok 5', 'Purok 5', 'domingo123@gmail.com', 'domingo123', '2', '75258e76.jpg', '', '', 'active', '', '', '', '2023-10-31'),
('3', '25cc95', 'Arturo', 'Martin ', 'upload/shop/IMG_20230925_193724.jpg', 'AgroCrop', 'Martin ', '09977036518', '', 'Tarlac', 'Camiling', 'Bobon 1st Casarratan', 'Centro ', 'near basketball court ', 'martin.arturo@gmail.com', '54321', '3', 'upload/selfie/6540ed29e1517.png', 'upload/id/Screenshot_2023-10-31-19-57-07-55_a23b203fd3aafc6dcb84e438dda678b6.jpg', 'upload/gcash/GCash-MyQR-31102023161820.PNG.jpg', 'active', '', '15.690453293083968', '120.38581080367295', '2023-10-31'),
('4', '2df2dc', 'Pasing', 'Pabros', 'upload/shop/screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-18-17_09_17.png', 'pasing agrishop', 'Pabros', '09510598340', '', 'Tarlac', 'Camiling', 'Matubog', 'zone 3', 'asxasa', 'pasing@gmail.com', 'pasing', '3', 'upload/selfie/652fc488276ba.png', 'upload/id/screencapture-localhost-Agromart-System-editMyAccount-4-2023-10-17-21_03_32.png', 'upload/gcash/screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-17-23_14_42.png', 'active', '', '15.68452634783261', '120.44981002807617', '2023-10-18'),
('5', '3f5533', 'admin', 'admin', '', '', '', '', 'Cabaluyan 2nd, Mangatarem, Pangasinan', '', '', '', '', '', 'admin@gmail.com', 'admin', '1', '096c3e6f.jpg', '', '', 'active', '', '', '', '2023-04-21'),
('6', '4033db', 'Ann ann ', 'Lorenzo', '', '', '', '09361542786', '', 'Tarlac', 'Tarlac', 'Doclong 2', 'Purok 6', 'Purok 6', 'lorenzoannn@gmail.com', '12345678', '2', '3712911a.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('7', '445e07', 'Krisalyn ', 'Basilio ', 'upload/shop/IMG_1697939138281.jpg', 'Basilio Agri Shop', 'Basilio ', '09276795069', '', 'Tarlac', '', 'Palimbo Proper', 'Purok 2 ', 'Near water refilling station', 'kbasi@gmail.com', '3412', '3', 'upload/selfie/6540e97a8fb12.png', 'upload/id/IMG_20231029_152809.jpg', 'upload/gcash/GCash-MyQR-31102023161820.PNG.jpg', 'active', '', '15.68358096842525', '120.39591837208721', '2023-10-31'),
('8', '5afc1e', 'Ann Ann ', 'Lorenzo', '', '', '', '09258369147', '', 'Tarlac', 'Tarlac', 'Doclong 1', 'Purok 4', 'Purok 4 ', 'lorenzoannann@gmail.com', 'annann', '2', '7c95c915.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('10', '639480', 'Rolando', 'Goloya Jr', 'upload/shop/apple-touch-icon.png', 'goloya Online Shop', 'murang bilihan ng mga alagang hayup', '095105983400', '', 'Tarlac', 'SanClemente', 'Daldalayap', 'purok 7', 'near the river', 'rolandojr@gmail.com', 'rolandojr', '0', 'upload/selfie/6548f5f8d999c.png', 'upload/id/396769551_250496051349628_8516880293986865266_n.jpg', 'upload/gcash/QR-Code.jpg', 'active', '', '15.6890243', '120.3204761', '2023-11-06'),
('11', '66297f', 'Mylyn ', 'Dela Cruz ', '', '', '', '09316497852', '', 'Tarlac', 'Tarlac', 'Nagserialan', 'Purok 6', 'Near Plaza', 'Mymydelacruz012@gmail.com', 'mylyn012', '2', '07c948cb.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('12', '68f07e', 'Harry', 'Potter', '', '', '', '09510598340', '', 'Tarlac', 'Tarlac', 'Papaac', 'zone 3', 'along the highway', 'hp@gmail.com', 'zxcvb', '2', '3880dea7.png', '', '', 'active', '', '', '', '2023-10-18'),
('13', '6faf61', 'user', 'account', '', '', '', '09510598340', '', 'Tarlac', 'SanClemente', 'Balloc', 'ZONE 1', 'LIKOD NG sCHOOL', 'useraccount@gmail.com', 'QWERTY', '2', '1700059963FB_IMG_1639104300969.jpg', '', '', 'active', 'activated', '', '', '2023-10-15'),
('14', '7d2965', 'Angel', 'Verano', '', '', '', '09460488528', '', 'Tarlac', '', 'Matubog', 'Purok 1', 'Purok1', 'veranoangel1@mail.com', '12345678', '2', 'd867664b.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('15', '81da8e', 'Che ', 'Constantino ', '', '', '', '09643581279', '', 'Tarlac', 'SanClemente', 'Casipo', 'Purok 5', 'Purok 5', 'checonstantino24@gmail.com', 'maganda', '2', 'f32af903.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('16', '86f3d1', 'Erlina Kaye', 'francisco', 'upload/shop/vector-creative-circle-leaf-plant-logo-design-for-your-business-or-brand.jpg', 'Kaye', 'Agricultural Sari saring Products', '09702022545', '', 'Tarlac', 'Camiling', 'Nagserialan', '7', '222', 'erlinafrancisco@gmail.com', '111', '3', 'upload/selfie/6548f7de2c6b1.png', 'upload/id/WhatsApp-Image-2021-04-23-at-4.35.01-PM.jpeg', 'upload/gcash/GCash-DatastiQ-QR-Code.jpg', 'active', '', '15.4754786', '120.5963492', '2023-11-06'),
('17', '89b31f', 'Seller ', 'TAU', 'upload/shop/395161603_855018109960044_3520819201580689826_n.jpg', 'TAU-CET-Shoppee', 'TAU', '09503253043', '', 'Tarlac', 'Camiling', 'Nagserialan', ' ', ' ', 'bpdanganan@tau.edu.ph', 'tau', '3', 'upload/selfie/653b1a1c8956a.png', 'upload/id/395161603_855018109960044_3520819201580689826_n.jpg', 'upload/gcash/395161603_855018109960044_3520819201580689826_n.jpg', 'active', '', '15.639206600274663', '120.4189039529129', '2023-10-27'),
('18', '8d3d0a', 'Paul ', 'Pedaliso', '', '', '', '09108355613', '', 'Tarlac', 'Tarlac', 'Marawi', 'Purok 5', 'Beside Marawi High school ', 'pedalisopaul@gmail.com', 'paulpedaliso', '2', '9a6c6669.jpg', '', '', 'active', '', '', '', '2023-10-31'),
('19', '948ca5', 'Troy', 'Inovejas', '', '', '', '09300285906', '', 'Tarlac', 'Tarlac', 'Bacabac', 'Purok 3', 'Brgy Hall', 'troyinovejas@gmail.com', 'troyinovejas', '2', 'f8ca97be.jpg', '', '', 'active', '', '', '', '2023-10-31'),
('20', '9531d2', 'kaye', 'francisco', 'upload/shop/Picture42.jpg', 'kaye', 'crops and livestocks', '09702022545', '', 'Tarlac', 'Camiling', 'Nagserialan', '7', '222', 'kayefrancisco@gmail.com', '1234', '3', 'upload/selfie/6546493ec5109.png', 'upload/id/Picture42.jpg', 'upload/gcash/Picture42.jpg', 'active', '', '15.6786952', '120.45936', '2023-11-04'),
('21', '9ae94f', 'Bryan Paul', 'Danganan', '', '', '', '09503253043', '', 'Tarlac', 'Tarlac', 'Nagserialan', ' ', ' ', 'bpdanganan@tau.edu.ph', 'tau', '2', '8c6ca86f.jpg', '', '', 'active', '', '', '', '2023-10-27'),
('22', 'a04815', 'BP', 'BP', '', '', '', '1', '', 'Tarlac', 'Tarlac', 'Anoling 2nd', 'ds', ' dff', 'bryanpauldanganan@gmail.com', 'tau', '2', 'e94cea0d.docx', '', '', 'active', '', '', '', '2023-11-07'),
('23', 'a19b03', 'Christian ', 'Esteban', '', '', '', '09124578963', '', 'Tarlac', 'Tarlac', 'Pindangan 1st', 'Purok 3', 'Pindangan Elem school', 'esteban123@gmail.com', '246810', '2', 'bf981227.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('24', 'a373aa', 'Krisalyn ', 'Basilio', 'upload/shop/IMG_1697939138281.jpg', 'CropShop', 'Quality and fresh products ', '09276795069', '', 'Tarlac', 'Camiling', 'Palimbo Proper', 'Purok 2 ', 'Near baragay hall', 'basilio@gmail.com', '1212', '0', 'upload/selfie/65490e52cba1f.png', 'upload/id/IMG_20231027_014035.jpg', 'upload/gcash/GCash-MyQR-31102023161820.PNG.jpg', 'active', '', '15.7024769', '120.3793988', '2023-11-06'),
('26', 'bf8803', 'seller', 'account', 'upload/shop/screencapture-localhost-pilter-sellerdash-2023-10-12-21_26_57.png', 'ewe', 'account', '09510598340', '', 'Tarlac', 'San Clemente', 'Poblacion Norte', 'zone 1', 'wedwe', 'selleraccount@gmail.com', '1234', '3', 'upload/selfie/652bf2b6d8eb7.png', 'upload/id/screencapture-localhost-Agromart-System-SellerController-sellerdash-2023-10-13-02_06_50.png', 'upload/gcash/screencapture-localhost-pilter-sellerdash-2023-10-12-21_26_57.png', 'active', '', '15.6890243', '120.3204761', '2023-10-15'),
('27', 'c3a5aa', 'Juan', 'Dela Cruz', '', '', '', '09510598340', '', 'Tarlac', 'SanClemente', 'Bamban', 'zone 7', 'kahit saan', 'juan@gmail.com', 'juan', '2', '6ad4f427.png', '', '', 'active', '', '', '', '2023-10-23'),
('28', 'cd2418', 'test', 'buyer', '', '', '', '09510598340', '', 'Tarlac', 'SanClemente', 'Doclong 2', 'zone 1', 'near the highway', 'test@gmail.com', 'test', '2', 'a1d70c04.jpg', '', '', 'active', '', '', '', '2023-11-07'),
('29', 'cda95d', 'Argel', 'Esteban ', 'upload/shop/received_960364921884928.jpeg', 'Aj Shopping Center ', 'Esteban ', '09303659598', '', 'Tarlac', 'Camiling', 'Surgui 1st', 'Purok 1', 'Papasok sa may simbahan ', 'aj.esteban@gmail.com', '7218', '3', 'upload/selfie/6540f259e04b4.png', 'upload/id/IMG20231031161932.jpg', 'upload/gcash/GCash-MyQR-31102023161820.PNG.jpg', 'active', '', '15.677572249601138', '120.41531376140485', '2023-10-31'),
('30', 'd3a36e', 'Loyd', 'Tayag', '', '', '', '09643158729', '', 'Tarlac', 'Tarlac', 'Tuec', 'Purok 2', 'Purok 2', 'loydtayag98@gmail.com', '12345678', '2', 'e11e5190.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('31', 'd7e68c', 'Danilo', 'Dela Cruz ', '', '', '', '09308477848', '', 'Tarlac', 'Tarlac', '', 'Purok 3', 'Romulo street ', 'delacruz1982@gmail.com', 'danilo1982', '2', '3351d4e7.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('32', 'e06e9f', 'Rosie', 'Sapad', '', '', '', '09362514879', '', 'Tarlac', 'SanClemente', 'Balloc', 'Purok 5 ', 'Purok 5 ', 'sapadrose1973@gmail.com', 'rosegold', '2', 'e4f5012d.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('33', 'e580b1', 'Loren', 'Miguel', '', '', '', '09308477848', '', 'Tarlac', 'SanClemente', 'Catagudingan', 'Purok 3 ', 'Purok3', 'miguelloren@gmail.com', 'miguel', '2', 'bb7f1984.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('34', 'e79f4a', 'Klaro', 'Rodriguez ', '', '', '', '09632548712', '', 'Tarlac', 'SanClemente', 'Daldalayap', 'Purok 6', 'Purok 6', 'klaroklaro@gmail.com', '12345678', '2', 'c607d33e.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('35', 'ee8d75', 'Ronald ', 'Esteban', '', '', '', '09493645463', '', 'Tarlac', 'Tarlac', 'Sinulatan 2nd', 'Purok 3', 'papasok sa EB resort', 'resteban@gmail.com', '4567', '2', '224687cd.jpg', '', '', 'active', '', '', '', '2023-10-31'),
('36', 'f2e43f', 'Mejane', 'Lucero', '', '', '', '09634587216', '', 'Tarlac', 'SanClemente', 'Bamban', 'Purok 2', 'Purok 2', 'mejane098@gmail.com', '123456789', '2', 'c376fcdc.jpg', '', '', 'active', '', '', '', '2023-11-01'),
('37', 'f8f20f', 'Rolando ', 'Goloya ', '', '', '', '09510598340', '', 'Tarlac', 'SanClemente', 'Bamban', 'Purok 7', 'near mangatarem boundary', 'RGoloya@gmail.com', 'rolando', '2', '1c61d02f.jpg', '', '', 'active', '', '', '', '2023-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `time` datetime(6) NOT NULL,
  `sender_message_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `receiver_message_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_balance`
--

CREATE TABLE `wallet_balance` (
  `bal_id` int(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `Date_Added` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet_balance`
--

INSERT INTO `wallet_balance` (`bal_id`, `unique_id`, `balance`, `Date_Added`) VALUES
(8, '6faf61', '421', '2024-01-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scharge` (`scharge`),
  ADD UNIQUE KEY `id` (`id`,`scharge`),
  ADD UNIQUE KEY `scharge_2` (`scharge`);

--
-- Indexes for table `agrocash`
--
ALTER TABLE `agrocash`
  ADD PRIMARY KEY (`agrocash_id`),
  ADD KEY `balanceTOhistory` (`unique_id`),
  ADD KEY `walletTOtransac` (`bal_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cartTOproduct` (`p_id`),
  ADD KEY `cartTOUser` (`unique_id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `feedbackTOuser` (`unique_id`),
  ADD KEY `feedbackTOproduct` (`p_id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapTOmcrps` (`crops`),
  ADD KEY `mapTOuploader` (`unique_id`);

--
-- Indexes for table `marker`
--
ALTER TABLE `marker`
  ADD PRIMARY KEY (`Loc_Id`),
  ADD KEY `markerTOuser` (`unique_id`);

--
-- Indexes for table `mcrops`
--
ALTER TABLE `mcrops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_tbl`
--
ALTER TABLE `ordered_tbl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orderTOproduct` (`p_id`),
  ADD KEY `orderTOuser` (`unique_id`),
  ADD KEY `orderTOseller` (`seller_unique_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserProduct` (`unique_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `wallet_balance`
--
ALTER TABLE `wallet_balance`
  ADD PRIMARY KEY (`bal_id`),
  ADD KEY `balanceTOuser` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agrocash`
--
ALTER TABLE `agrocash`
  MODIFY `agrocash_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `f_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `marker`
--
ALTER TABLE `marker`
  MODIFY `Loc_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mcrops`
--
ALTER TABLE `mcrops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ordered_tbl`
--
ALTER TABLE `ordered_tbl`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `wallet_balance`
--
ALTER TABLE `wallet_balance`
  MODIFY `bal_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agrocash`
--
ALTER TABLE `agrocash`
  ADD CONSTRAINT `balanceTOhistory` FOREIGN KEY (`unique_id`) REFERENCES `wallet_balance` (`unique_id`),
  ADD CONSTRAINT `walletTOtransac` FOREIGN KEY (`bal_id`) REFERENCES `wallet_balance` (`bal_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cartTOUser` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`),
  ADD CONSTRAINT `cartTOproduct` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD CONSTRAINT `feedbackTOproduct` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `feedbackTOuser` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);

--
-- Constraints for table `map`
--
ALTER TABLE `map`
  ADD CONSTRAINT `mapTOmcrps` FOREIGN KEY (`crops`) REFERENCES `mcrops` (`id`),
  ADD CONSTRAINT `mapTOuploader` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);

--
-- Constraints for table `ordered_tbl`
--
ALTER TABLE `ordered_tbl`
  ADD CONSTRAINT `orderTObuyer` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`),
  ADD CONSTRAINT `orderTOproduct` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `orderTOseller` FOREIGN KEY (`seller_unique_id`) REFERENCES `user` (`unique_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `productTOusers` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);

--
-- Constraints for table `wallet_balance`
--
ALTER TABLE `wallet_balance`
  ADD CONSTRAINT `balanceTOuser` FOREIGN KEY (`unique_id`) REFERENCES `user` (`unique_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
