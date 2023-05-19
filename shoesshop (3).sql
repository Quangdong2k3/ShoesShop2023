-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20230402.ee9c9a0300
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2023 at 03:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `b_avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `b_avatar`, `description`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', '1680366866.jpg', 'Thời trang Adidas', 'Hà Nội2', '2023-04-01 16:34:26', '2023-04-01 09:34:26'),
(4, 'Balenciaga', '1681961995.png', 'Thương hiệu balencia đến từ Pháp', 'TP. Hồ Chí Minh', '2023-04-19 20:39:55', '2023-04-19 20:39:55'),
(5, 'Nike', '1682056228.jfif', 'Thương hiệu thể thao nổi tiếng thế giới', 'Cần Thơ', '2023-04-20 22:50:28', '2023-04-20 22:50:28'),
(6, 'Gucci', '1684412921.jfif', 'gucci dep', 'ha noi', '2023-05-18 05:28:41', '2023-05-18 05:28:41'),
(7, 'HM', '1684414152.jfif', 'Giay thể thao cho giới thượng lưu', 'American', '2023-05-18 05:49:12', '2023-05-18 05:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `shoes_size_id` int(11) NOT NULL,
  `quantity_cart` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `c_avatar`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Giay the thao', '1684413973.jpg', 'Tre trung sang tao', '2023-05-18 12:46:13', '2023-05-18 05:46:13'),
(78, 'Giày công sở', '1684413888.jfif', 'Lịch sự', '2023-05-18 05:44:48', '2023-05-18 05:44:48'),
(79, 'Giay thoi trang', '1684413934.jpg', 'Sang trọng', '2023-05-18 05:45:34', '2023-05-18 05:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identity_number` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `fullname`, `dob`, `gender`, `phone`, `email`, `identity_number`, `avatar`, `created_at`, `updated_at`, `address`, `city`) VALUES
(1, 'khach1', '1', 'Nguyễn Văn A', '1988-04-04', 1, '0865399169', 'nva1236@gmail.com', NULL, '1683458340.jpg', NULL, '2023-05-07 04:19:00', 'Hoa Binh Thuong Tin Ha Noi', 'Hà Nội'),
(2, 'khach2', '2', 'Nguyễn Văn B', NULL, 0, '0978368561', '', NULL, '', NULL, NULL, '', ''),
(3, 'khach3', '3', 'Nguyễn Văn C', NULL, NULL, '0978361', '', NULL, '', NULL, NULL, '', ''),
(9, 'DongIT2403', '3a960d6d6672fea058839c1310fae024', 'Nguyễn Quang Đông', '2003-03-24', 1, '0865399169', 'nguyenquangdong03@gmail.com', '001203011803', '1683883637.jpg', '2023-05-11 06:57:52', '2023-05-12 02:30:01', 'Hòa Bình Thường Tín Hà Nội', 'Hà Nội'),
(10, 'nguyenquangdong', '3a960d6d6672fea058839c1310fae024', NULL, NULL, NULL, NULL, 'dongtayy819@gmail.com', NULL, NULL, '2023-05-11 07:00:31', '2023-05-11 07:00:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `discount_rate` double DEFAULT NULL,
  `fromdate` datetime DEFAULT NULL,
  `todate` datetime DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount_rate`, `fromdate`, `todate`, `description`, `created_at`, `updated_at`) VALUES
(6, 10, '2023-05-10 00:00:00', '2023-05-18 00:00:00', 'Lịch Lãm', '2023-05-17 10:34:32', '2023-05-17 10:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `username`, `password`, `fullname`, `dob`, `gender`, `phone`, `email`, `avatar`, `role_id`, `created_at`, `updated_at`) VALUES
(4, 'dongit2403', '1234', 'Nguyễn Quang Đông', '2003-03-24', 1, '0865399169', 'dongtay819@gmail.com', '', 1, '2023-04-29 16:47:06', '2023-04-02 12:33:10'),
(5, 'nguyenquangdong', '1234', 'Nguyễn Quang Đông', '2003-03-24', 1, '0865399169', 'nguyenquangdong192@gmail.com', '1683481098.jpg', 1, '2023-04-02 11:34:58', '2023-05-07 10:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `total_payment` double DEFAULT NULL,
  `note` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `receiver_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_tel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_add` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `created_at`, `updated_at`, `status`, `total_payment`, `note`, `receiver_name`, `receiver_tel`, `receiver_add`) VALUES
(46, 9, '2023-05-13 02:50:56', '2023-05-13 02:52:34', 4, 1330000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(47, 9, '2023-05-14 21:28:32', '2023-05-18 05:59:30', 4, 1330000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(48, 9, '2023-05-17 02:52:18', '2023-05-18 05:59:33', 4, 116030000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(49, 9, '2023-05-17 03:08:05', '2023-05-17 03:09:38', 4, 940000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(50, 9, '2023-05-18 05:56:52', '2023-05-18 05:59:41', 4, 74129000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(51, 9, '2023-05-18 05:57:57', '2023-05-18 05:59:52', 4, 2630000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(52, 9, '2023-05-18 05:59:07', '2023-05-18 06:00:03', 4, 37430000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(53, 9, '2023-05-18 06:03:07', '2023-05-18 06:27:06', 5, 5228000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(54, 9, '2023-05-18 06:12:49', '2023-05-18 06:12:49', 1, 12899100, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội'),
(55, 9, '2023-05-18 06:23:18', '2023-05-18 06:23:18', 1, 4030000, 'Đặt Hàng ủng hộ Shopp!!!', 'Nguyễn Quang Đông', '0865399169', 'Hòa Bình Thường Tín Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderdetail_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `shoes_size_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderdetail_id`, `order_id`, `shoes_size_id`, `quantity`, `price`, `discount_amount`, `created_at`, `updated_at`) VALUES
(57, 46, 6, 1, 1300000, NULL, '2023-05-13 02:50:56', '2023-05-13 02:50:56'),
(58, 47, 5, 1, 1300000, NULL, '2023-05-14 21:28:32', '2023-05-14 21:28:32'),
(59, 48, 4, 2, 1300000, NULL, '2023-05-17 02:52:18', '2023-05-17 02:52:18'),
(60, 48, 8, 6, 18900000, NULL, '2023-05-17 02:52:18', '2023-05-17 02:52:18'),
(61, 49, 5, 1, 1300000, 30, '2023-05-17 03:08:05', '2023-05-17 03:08:05'),
(62, 50, 5, 3, 1300000, NULL, '2023-05-18 05:56:52', '2023-05-18 05:56:52'),
(63, 50, 13, 5, 13000000, NULL, '2023-05-18 05:56:52', '2023-05-18 05:56:52'),
(64, 50, 14, 1, 2500000, NULL, '2023-05-18 05:56:52', '2023-05-18 05:56:52'),
(65, 50, 12, 1, 1400000, NULL, '2023-05-18 05:56:52', '2023-05-18 05:56:52'),
(66, 50, 16, 1, 1299000, NULL, '2023-05-18 05:56:52', '2023-05-18 05:56:52'),
(67, 51, 17, 1, 1300000, NULL, '2023-05-18 05:57:57', '2023-05-18 05:57:57'),
(68, 51, 11, 1, 1300000, NULL, '2023-05-18 05:57:57', '2023-05-18 05:57:57'),
(69, 52, 12, 1, 1400000, NULL, '2023-05-18 05:59:07', '2023-05-18 05:59:07'),
(70, 52, 15, 9, 4000000, NULL, '2023-05-18 05:59:07', '2023-05-18 05:59:07'),
(71, 53, 16, 2, 1299000, NULL, '2023-05-18 06:03:07', '2023-05-18 06:03:07'),
(72, 53, 17, 2, 1300000, NULL, '2023-05-18 06:03:07', '2023-05-18 06:03:07'),
(73, 54, 13, 1, 13000000, 10, '2023-05-18 06:12:49', '2023-05-18 06:12:49'),
(74, 54, 16, 1, 1299000, 10, '2023-05-18 06:12:49', '2023-05-18 06:12:49'),
(75, 55, 15, 1, 4000000, NULL, '2023-05-18 06:23:18', '2023-05-18 06:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `status_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`status_id`, `name`, `description`) VALUES
(1, 'Đang chờ xác nhận', 'Đơn hàng đang chờ được xác nhận'),
(2, 'Đã xác nhận', 'Đơn hàng đã được xác nhận'),
(3, 'Đang vận chuyển', 'Đơn hàng đang được vận chuyển'),
(4, 'Đã hoàn thành', 'Đơn hàng đã hoàn thành'),
(5, 'Đã hủy', 'Đơn hàng đã bị hủy'),
(6, 'Hoàn hàng', 'Khách trả hàng');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` tinyint(1) NOT NULL DEFAULT 0,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(0, 'Nhân viên', 'Nhân viên bán hàng'),
(1, 'Quản lý tất cả', 'Quản lý tất cả các nội dung');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `name` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc_shoes` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `desc_shoes`, `avatar`, `price`, `category_id`, `brand_id`, `created_at`, `updated_at`, `gender`) VALUES
(35, 'giày Nike force once 1', 'rất đẹp dành cho học sinh', '1680366922.jpg', 1300000, 1, 5, '2023-04-01 09:35:22', '2023-04-21 08:28:40', 2),
(36, 'Balenciaga Track Orange Blue', 'Giày thể thao cho sinh viên, Lịch sự khi đi làm', '1681962741.jfif', 19000000, 1, 4, '2023-04-19 20:45:20', '2023-04-19 20:52:21', 0),
(37, 'Nike Air Force 1 Ultra', 'Giày thể thao cho sinh viên', '1682056860.jpg', 15900000, 1, 5, '2023-04-20 22:54:00', '2023-04-20 23:09:57', 2),
(38, 'Nike Air Max SC SE', 'Thương hiệu thể thao nổi tiếng', '1682088613.png', 18900000, 1, 5, '2023-04-21 07:50:13', '2023-04-21 08:44:55', 0),
(39, 'Nike Air Max 270', 'Thương hiệu thể thao nổi tiếng', '1682090528.jfif', 1300000, 1, 5, '2023-04-21 08:22:08', '2023-04-21 08:32:27', 1),
(40, 'Gucci Bee', 'giay cho nguoi dolce', '1684413020.jpg', 1400000, 1, 6, '2023-05-18 05:30:20', '2023-05-18 05:30:20', NULL),
(41, 'Gucci Woman', 'Giày Nữ Gucci Off The Grid \'Black\'', '1684413275.webp', 13000000, 1, 6, '2023-05-18 05:34:35', '2023-05-18 05:34:35', NULL),
(42, 'Nike Air Jordan', 'Giày Nike air Jordan 1 Low Shadow (Smoke Grey)', '1684413428.jpg', 2500000, 1, 5, '2023-05-18 05:37:08', '2023-05-18 05:37:08', NULL),
(43, 'Adidas Alphabounce Beyond', 'Giày Adidas Alphabounce Beyond Xanh Cam', '1684413552.jpg', 4000000, 1, 1, '2023-05-18 05:39:12', '2023-05-18 05:39:12', NULL),
(44, 'HM Chunky', 'Giày thể thao chunky', '1684414216.jfif', 1299000, 1, 7, '2023-05-18 05:50:16', '2023-05-18 05:50:16', NULL),
(45, 'HM Canvas', 'Giày thể thao canvas', '1684414315.jfif', 1300000, 79, 7, '2023-05-18 05:51:55', '2023-05-18 05:51:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_picture`
--

CREATE TABLE `shoes_picture` (
  `spic_id` int(11) NOT NULL,
  `shoes_id` int(11) NOT NULL,
  `picture` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shoes_picture`
--

INSERT INTO `shoes_picture` (`spic_id`, `shoes_id`, `picture`, `created_at`, `updated_at`) VALUES
(7, 36, '1681964064.jfif', '2023-04-19 21:14:24', '2023-04-19 21:14:24'),
(10, 37, '1682056458.jfif', '2023-04-20 22:54:18', '2023-04-20 22:54:18'),
(11, 37, '1682056466.jfif', '2023-04-20 22:54:26', '2023-04-20 22:54:26'),
(13, 35, '1682065427.jfif', '2023-04-21 01:23:47', '2023-04-21 01:23:47'),
(14, 38, '1682088893.jfif', '2023-04-21 07:54:53', '2023-04-21 07:54:53'),
(15, 38, '1682089090.jpg', '2023-04-21 07:58:10', '2023-04-21 07:58:10'),
(16, 39, '1682090545.jfif', '2023-04-21 08:22:25', '2023-04-21 08:22:25'),
(17, 39, '1682090561.jfif', '2023-04-21 08:22:41', '2023-04-21 08:22:41'),
(18, 39, '1682090576.jfif', '2023-04-21 08:22:56', '2023-04-21 08:22:56'),
(19, 39, '1682090593.jfif', '2023-04-21 08:23:13', '2023-04-21 08:23:13'),
(20, 39, '1682090606.jfif', '2023-04-21 08:23:26', '2023-04-21 08:23:26'),
(21, 39, '1682090615.jfif', '2023-04-21 08:23:35', '2023-04-21 08:23:35'),
(22, 39, '1682090623.jfif', '2023-04-21 08:23:43', '2023-04-21 08:23:43'),
(23, 40, '1684413096.jpg', '2023-05-18 05:31:36', '2023-05-18 05:31:36'),
(24, 40, '1684413145.jpg', '2023-05-18 05:32:25', '2023-05-18 05:32:25'),
(25, 41, '1684413301.webp', '2023-05-18 05:35:01', '2023-05-18 05:35:01'),
(26, 42, '1684413460.jpg', '2023-05-18 05:37:40', '2023-05-18 05:37:40'),
(27, 43, '1684413599.jpg', '2023-05-18 05:39:59', '2023-05-18 05:39:59'),
(28, 44, '1684414249.jfif', '2023-05-18 05:50:49', '2023-05-18 05:50:49'),
(29, 45, '1684414345.webp', '2023-05-18 05:52:25', '2023-05-18 05:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_size`
--

CREATE TABLE `shoes_size` (
  `size_id` int(11) NOT NULL,
  `shoes_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shoes_size`
--

INSERT INTO `shoes_size` (`size_id`, `shoes_id`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(4, 35, 35, 2, '2023-04-21 00:36:25', '2023-04-21 01:10:05'),
(5, 35, 33, 5, '2023-04-21 01:22:36', '2023-04-21 01:22:36'),
(6, 35, 30, 25, '2023-04-21 01:22:45', '2023-04-27 00:00:21'),
(7, 35, 39, 33, '2023-04-21 01:22:55', '2023-04-21 01:22:55'),
(8, 38, 38, 7, '2023-04-21 07:59:05', '2023-04-21 07:59:05'),
(9, 38, 30, 83, '2023-04-21 07:59:42', '2023-04-21 07:59:42'),
(10, 36, 30, 0, '2023-04-27 00:48:09', '2023-04-27 00:48:09'),
(11, 39, 34, 9, '2023-04-27 00:48:28', '2023-04-27 00:48:28'),
(12, 40, 30, 17, '2023-05-18 05:54:43', '2023-05-18 05:54:43'),
(13, 41, 31, 10, '2023-05-18 05:54:55', '2023-05-18 05:54:55'),
(14, 42, 33, 15, '2023-05-18 05:55:05', '2023-05-18 05:55:05'),
(15, 43, 32, 5, '2023-05-18 05:55:14', '2023-05-18 05:55:14'),
(16, 44, 43, 4, '2023-05-18 05:55:24', '2023-05-18 05:55:24'),
(17, 45, 33, 6, '2023-05-18 05:55:32', '2023-05-18 05:55:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `emp_id_idx` (`customer_id`),
  ADD KEY `fk_sizeid` (`shoes_size_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empid_idx` (`customer_id`),
  ADD KEY `statusid_idx` (`status`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderdetail_id`),
  ADD KEY `orid_idx` (`order_id`),
  ADD KEY `fk_size_id` (`shoes_size_id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `shoes_picture`
--
ALTER TABLE `shoes_picture`
  ADD PRIMARY KEY (`spic_id`),
  ADD KEY `shoes_id_idx` (`shoes_id`);

--
-- Indexes for table `shoes_size`
--
ALTER TABLE `shoes_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `shoe_id_idx` (`shoes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `shoes_picture`
--
ALTER TABLE `shoes_picture`
  MODIFY `spic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `shoes_size`
--
ALTER TABLE `shoes_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `emp_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `fk_sizeid` FOREIGN KEY (`shoes_size_id`) REFERENCES `shoes_size` (`size_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `empid_o` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `statusid` FOREIGN KEY (`status`) REFERENCES `orderstatus` (`status_id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `fk_size_id` FOREIGN KEY (`shoes_size_id`) REFERENCES `shoes_size` (`size_id`);

--
-- Constraints for table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoes_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoes_picture`
--
ALTER TABLE `shoes_picture`
  ADD CONSTRAINT `shoes_picture_id` FOREIGN KEY (`shoes_id`) REFERENCES `shoes` (`id`);

--
-- Constraints for table `shoes_size`
--
ALTER TABLE `shoes_size`
  ADD CONSTRAINT `shoes_id` FOREIGN KEY (`shoes_id`) REFERENCES `shoes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
