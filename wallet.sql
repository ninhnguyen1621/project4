-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 03:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `name`, `address`, `phone`, `email`, `note`, `created_at`, `updated_at`) VALUES
(38, 'Ninhkey', 'hà nội', '01365533512', 'goldkey162@gmail.com', '123', NULL, NULL),
(39, 'Ninhkey', 'hà nội', '01365533512', 'goldkey162@gmail.com', '123', NULL, NULL),
(40, 'Nguyên văn B', 'hà nội', '3123123123', 'goldkey162@gmail.com', 'giao nahnh', NULL, NULL),
(41, 'nguyễn văn A', '165 nguỹen văn linh lộc tho nha trang khánh hòa', '0372630705', 'ninh@gmail.com', 'giao nhanh', NULL, NULL),
(42, 'dáhdhsd', 'dâd', '0946798909', '123d@gmail.com', '11', NULL, NULL),
(43, 'nguyễn văn c', 'Thuần xuyên hưng long mỹ hào hưng yên', '0355335126', 'goldkey162@gmail.com', 'giao trong ngày', NULL, NULL),
(44, 'nguyễn văn A', '165 nguỹen văn linh lộc tho nha trang khánh hòa', '0372630705', 'ninh@gmail.com', 'giao nahnh trong ngày', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `category_des`, `category_status`, `created_at`, `updated_at`) VALUES
(15, 'Ví Da Cá Sấu', 'đâsd', 0, NULL, NULL),
(16, 'Ví Da Bò', NULL, 0, NULL, NULL),
(17, 'Ví Cầm Tay', NULL, 0, NULL, NULL),
(20, 'Nguyễn quang ninh', '21', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `Password`, `created_at`, `updated_at`) VALUES
(40, 'ninh123', '0374970603', 'vanhuyutehy@gmail.com', '12345678', NULL, NULL),
(41, 'ninh3', '0372630705', 'NINH123@gmail.com', '12345678', NULL, NULL),
(42, 'Nguyễn quang ninh', '01655335127', 'nguyenninh162@gmail.com', '12345678', NULL, NULL),
(43, 'Nguyên văn B', '3123123123', 'goldkey162@gmail.com', '12345678', NULL, NULL),
(44, 'Nguyên văn B', '3123123123', 'goldkey162@gmail.com', '12345678', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(93, '2021_04_18_174928_creat_user_table', 1),
(94, '2021_04_22_064905_category', 1),
(95, '2021_04_26_091432_supplier', 1),
(96, '2021_04_26_092406_customer', 1),
(97, '2021_04_27_184106_create_tbl_user_table', 1),
(98, '2021_05_11_174501_create_product_table', 1),
(99, '2021_05_31_072813_buyer', 2),
(100, '2021_05_31_195545_payment', 3),
(101, '2021_05_31_195814_order_detail', 3),
(102, '2021_05_31_203102_order', 4),
(103, '2021_05_31_204314_order_detail', 4),
(104, '2021_06_01_185742_newfeed', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newfeed`
--

CREATE TABLE `newfeed` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newfeed`
--

INSERT INTO `newfeed` (`id`, `title`, `post`, `time`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Hướng dẫn cách chọn ví theo tuổi hợp phong thủy', '<h3>&nbsp;</h3>\r\n\r\n<p><span style=\"font-size:18px\">Đầu ti&ecirc;n, người mệnh Kim l&agrave; người c&oacute; những năm tuổi tương ứng gồm: Nh&acirc;m Th&acirc;n (1932, 1992); Ất M&ugrave;i (1955), Gi&aacute;p T&yacute; (1984), Qu&yacute; Dậu (1993), Nh&acirc;m Dần (1962), Ất Sửu (1985), Canh Th&igrave;n (2000), Qu&yacute; M&atilde;o (1963), T&acirc;n Tỵ (2001), Canh Tuất (1970), T&acirc;n Hợi (1971).</span></p>\r\n\r\n<p><span style=\"font-size:18px\">Theo thuyết ngũ h&agrave;nh, m&agrave;u sắc tương sinh đối với mệnh Kim đ&oacute; ch&iacute;nh l&agrave; trắng, bạc v&agrave; v&agrave;ng &Aacute;nh Kim.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">V&igrave; vậy, khi chọn m&agrave;u v&iacute; theo tuổi mệnh Kim cần ưu ti&ecirc;n những gam m&agrave;u như m&agrave;u b&ograve;, n&acirc;u đất nhẹ. Những m&agrave;u sắc n&agrave;y sẽ sinh vượng lộc tốt, b&aacute;o hiệu những cơ hội mới tr&ecirc;n con đường c&ocirc;ng danh, kinh doanh s&aacute;ng lạng.</span></p>', '2021-06-11', 'huong-dan-cach-chon-vi-theo-tuoi-hop-phong-thuy-tai-loc-ngap-tran.jpg', '2021-06-05 17:17:49', '2021-06-05 17:17:49'),
(3, 'Hướng dẫn làm sạch ví bị bám bụi bẩn', '<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\">Nếu bạn d&ugrave;ng v&iacute; da trong thời gian d&agrave;i, việc v&iacute; bị b&aacute;m d&iacute;nh bụi bẩn l&agrave; điều kh&oacute; c&oacute; thể tr&aacute;nh khỏi. V&igrave; vậy, bạn cần nắm r&otilde; c&aacute;ch vệ sinh v&iacute; da khi bị b&aacute;m bụi hiệu quả, đơn giản như sau:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Bước 1: D&ugrave;ng khăn vải cotton kh&ocirc; lau sạch bụi tr&ecirc;n bề mặt v&iacute; da</span></li>\r\n	<li><span style=\"font-size:18px\">Bước 2: Chọn b&agrave;n chải đ&aacute;nh răng c&oacute; l&ocirc;ng tơ mềm nhẹ, thấm dung dịch v&agrave; ch&agrave; nhẹ nh&agrave;ng để đ&aacute;nh bay vết bụi bẩn b&aacute;m s&acirc;u v&agrave;o từng khe b&ecirc;n trong hoặc họa in nổi</span></li>\r\n	<li><span style=\"font-size:18px\">Bước 3: Lau kh&ocirc; lại v&agrave; sử dụng như b&igrave;nh thường</span></li>\r\n</ul>', '2021-06-02', 'huong-dan-lam-sach-vi-bi-bam-bui-ban.jpg', '2021-06-05 19:00:13', '2021-06-05 19:00:13'),
(4, 'Ví đựng Passport da thật – Xu thế thời trang phụ kiện Việt', '<p><span style=\"font-size:18px\">hi mới xuất hiện, loại v&iacute; n&agrave;y thường được thiết kế đơn giản chỉ chứa đựng hộ chiếu nhưng đến nay, loại v&iacute; n&agrave;y đ&atilde; được thiết kế tiện lợi, hiện đại với nhiều ngăn chứa kh&aacute;c nhau để cất giữ: Thẻ visa, tiền mặt, Thẻ ng&acirc;n h&agrave;ng,&hellip;&hellip;. N&oacute; trở th&agrave;nh phụ kiện thời trang sang trọng, lịch l&atilde;m thể hiện đẳng cấp kh&aacute;c biệt cho qu&yacute; &ocirc;ng.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">T&ugrave;y theo mục đ&iacute;ch sử dụng v&agrave; chất liệu, v&iacute; passport được ph&acirc;n chia th&agrave;nh những loại phổ biến sau:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Vỏ bọc hộ chiếu: Đ&acirc;y l&agrave; loại đơn giản nhất chỉ để chứa đựng Passport, c&oacute; chất liệu ch&iacute;nh l&agrave; nhựa PVC trong suốt.</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; hộ chiếu c&oacute; d&acirc;y đeo cổ: Đ&acirc;y l&agrave; kiểu d&aacute;ng v&iacute; mới được l&agrave;m từ chất liệu vải Nylon, vải Polyester,&hellip; tiện lợi khi sử dụng</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; đựng hộ chiếu đeo trong người: Tối đa h&oacute;a k&iacute;ch thước tr&ecirc;n nền chất liệu vải để c&oacute; thể đựng được nhiều loại giấy tờ, vật dụng kh&aacute;c nhau,&hellip;</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; da Passport: Đ&acirc;y l&agrave; loại v&iacute; đựng Passport thịnh h&agrave;nh nhất hiện nay. Được gia c&ocirc;ng tinh tế tr&ecirc;n chất liệu da nhằm đem đến vẻ đẹp sang trọng, cao cấp, thường được thiết kế nhiều ngăn để c&oacute; thể đựng được nhiều loại giấy tờ kh&aacute;c nhau,&hellip;</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:18px\">Với thiết kế khoa học, kiểu d&aacute;ng sang trọng, hiện đại v&agrave; chất liệu da thật, v&iacute; da đựng passport l&agrave; phụ kiện ho&agrave;n hảo d&agrave;nh cho qu&yacute; &ocirc;ng lịch l&atilde;m.</span></p>', '2021-06-08', 'vi-dung-passport-da-that-xu-the-thoi-trang-phu-kien-viet.jpg', '2021-06-05 19:14:41', '2021-06-05 19:14:41'),
(5, 'Bật mí chi tiết kinh nghiệm chọn ví da cá sấu tốt nhất!', '<p><span style=\"font-size:18px\">hi mới xuất hiện, loại v&iacute; n&agrave;y thường được thiết kế đơn giản chỉ chứa đựng hộ chiếu nhưng đến nay, loại v&iacute; n&agrave;y đ&atilde; được thiết kế tiện lợi, hiện đại với nhiều ngăn chứa kh&aacute;c nhau để cất giữ: Thẻ visa, tiền mặt, Thẻ ng&acirc;n h&agrave;ng,&hellip;&hellip;. N&oacute; trở th&agrave;nh phụ kiện thời trang sang trọng, lịch l&atilde;m thể hiện đẳng cấp kh&aacute;c biệt cho qu&yacute; &ocirc;ng.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">T&ugrave;y theo mục đ&iacute;ch sử dụng v&agrave; chất liệu, v&iacute; passport được ph&acirc;n chia th&agrave;nh những loại phổ biến sau:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Vỏ bọc hộ chiếu: Đ&acirc;y l&agrave; loại đơn giản nhất chỉ để chứa đựng Passport, c&oacute; chất liệu ch&iacute;nh l&agrave; nhựa PVC trong suốt.</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; hộ chiếu c&oacute; d&acirc;y đeo cổ: Đ&acirc;y l&agrave; kiểu d&aacute;ng v&iacute; mới được l&agrave;m từ chất liệu vải Nylon, vải Polyester,&hellip; tiện lợi khi sử dụng</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; đựng hộ chiếu đeo trong người: Tối đa h&oacute;a k&iacute;ch thước tr&ecirc;n nền chất liệu vải để c&oacute; thể đựng được nhiều loại giấy tờ, vật dụng kh&aacute;c nhau,&hellip;</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; da Passport: Đ&acirc;y l&agrave; loại v&iacute; đựng Passport thịnh h&agrave;nh nhất hiện nay. Được gia c&ocirc;ng tinh tế tr&ecirc;n chất liệu da nhằm đem đến vẻ đẹp sang trọng, cao cấp, thường được thiết kế nhiều ngăn để c&oacute; thể đựng được nhiều loại giấy tờ kh&aacute;c nhau,&hellip;</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:18px\">Với thiết kế khoa học, kiểu d&aacute;ng sang trọng, hiện đại v&agrave; chất liệu da thật, v&iacute; da đựng passport l&agrave; phụ kiện ho&agrave;n hảo d&agrave;nh cho qu&yacute; &ocirc;ng lịch l&atilde;m.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">hi mới xuất hiện, loại v&iacute; n&agrave;y thường được thiết kế đơn giản chỉ chứa đựng hộ chiếu nhưng đến nay, loại v&iacute; n&agrave;y đ&atilde; được thiết kế tiện lợi, hiện đại với nhiều ngăn chứa kh&aacute;c nhau để cất giữ: Thẻ visa, tiền mặt, Thẻ ng&acirc;n h&agrave;ng,&hellip;&hellip;. N&oacute; trở th&agrave;nh phụ kiện thời trang sang trọng, lịch l&atilde;m thể hiện đẳng cấp kh&aacute;c biệt cho qu&yacute; &ocirc;ng.</span></p>\r\n\r\n<p><span style=\"font-size:18px\">T&ugrave;y theo mục đ&iacute;ch sử dụng v&agrave; chất liệu, v&iacute; passport được ph&acirc;n chia th&agrave;nh những loại phổ biến sau:</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:18px\">Vỏ bọc hộ chiếu: Đ&acirc;y l&agrave; loại đơn giản nhất chỉ để chứa đựng Passport, c&oacute; chất liệu ch&iacute;nh l&agrave; nhựa PVC trong suốt.</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; hộ chiếu c&oacute; d&acirc;y đeo cổ: Đ&acirc;y l&agrave; kiểu d&aacute;ng v&iacute; mới được l&agrave;m từ chất liệu vải Nylon, vải Polyester,&hellip; tiện lợi khi sử dụng</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; đựng hộ chiếu đeo trong người: Tối đa h&oacute;a k&iacute;ch thước tr&ecirc;n nền chất liệu vải để c&oacute; thể đựng được nhiều loại giấy tờ, vật dụng kh&aacute;c nhau,&hellip;</span></li>\r\n	<li><span style=\"font-size:18px\">V&iacute; da Passport: Đ&acirc;y l&agrave; loại v&iacute; đựng Passport thịnh h&agrave;nh nhất hiện nay. Được gia c&ocirc;ng tinh tế tr&ecirc;n chất liệu da nhằm đem đến vẻ đẹp sang trọng, cao cấp, thường được thiết kế nhiều ngăn để c&oacute; thể đựng được nhiều loại giấy tờ kh&aacute;c nhau,&hellip;</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:18px\">Với thiết kế khoa học, kiểu d&aacute;ng sang trọng, hiện đại v&agrave; chất liệu da thật, v&iacute; da đựng passport l&agrave; phụ kiện ho&agrave;n hảo d&agrave;nh cho qu&yacute; &ocirc;ng lịch l&atilde;m.</span></p>', '2021-06-19', 'bat-mi-chi-tiet-kinh-nghiem-chon-vi-da-ca-sau-tot-nhat.jpg', '2021-06-05 22:59:55', '2021-06-05 22:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `status`, `sub_total`, `payment_id`, `customer_id`, `buyer_id`, `created_at`, `updated_at`) VALUES
(42, 'đang chờ xử lý', '2,400,000.00', 47, 43, 39, NULL, NULL),
(43, 'đang chờ xử lý', '17,500.00', 48, 44, 40, NULL, NULL),
(44, 'đang chờ xử lý', '2,100,000.00', 49, 44, 41, NULL, NULL),
(45, 'đang chờ xử lý', '1,200,000.00', 50, 43, 42, NULL, NULL),
(46, 'đang chờ xử lý', '420,000.00', 51, 43, 43, NULL, NULL),
(47, 'đang chờ xử lý', '420,000.00', 52, 43, 44, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `qty`, `created_at`, `updated_at`) VALUES
(24, '42', 45, 'Ví cá sấu 2 mặt VLA1600N-CB-D', '600000', 4, NULL, NULL),
(25, '43', 43, 'catchy tory so', '17500', 1, NULL, NULL),
(26, '44', 44, 'Ví da bò dáng ngang VLAN3501-1-X', '420000', 5, NULL, NULL),
(27, '45', 45, 'Ví cá sấu 2 mặt VLA1600N-CB-D', '600000', 2, NULL, NULL),
(28, '46', 44, 'Ví da bò dáng ngang VLAN3501', '420000', 1, NULL, NULL),
(29, '47', 44, 'Ví da bò dáng ngang VLAN3501', '420000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `method`, `status`, `created_at`, `updated_at`) VALUES
(40, '2', 'Đang Xử Lý', NULL, NULL),
(41, '2', 'Đang Xử Lý', NULL, NULL),
(42, '2', 'Đang Xử Lý', NULL, NULL),
(43, '2', 'Đang Xử Lý', NULL, NULL),
(44, '2', 'Đang Xử Lý', NULL, NULL),
(45, '2', 'Đang Xử Lý', NULL, NULL),
(46, '2', 'Đang Xử Lý', NULL, NULL),
(47, '2', 'Đang Xử Lý', NULL, NULL),
(48, '2', 'Đang Xử Lý', NULL, NULL),
(49, '2', 'Đang Xử Lý', NULL, NULL),
(50, '2', 'Đang Xử Lý', NULL, NULL),
(51, '2', 'Đang Xử Lý', NULL, NULL),
(52, '2', 'Đang Xử Lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `origin`, `describe`, `cat_id`, `created_at`, `updated_at`) VALUES
(43, 'catchy tory so', 17500, 'catchy-tory-so.jpg', 'nhật bản', '<ul>\r\n	<li>Thiết kế&nbsp;<a href=\"https://laforce.vn/vi-cam-tay/\"><strong>v&iacute; nam cầm tay</strong></a>&nbsp;đơn giản, hiện đại</li>\r\n	<li>Đường chỉ may viền tinh tế, tỉ mỉ</li>\r\n	<li>Chất liệu da b&ograve; trơn phủ b&oacute;ng sang trọng</li>\r\n	<li>Miệng kh&oacute;a k&eacute;o</li>\r\n	<li>Gồm 1 ngăn ch&iacute;nh v&agrave; nhiều ngăn nhỏ</li>\r\n	<li>K&iacute;ch thước: 25.5 cm x 16 cm</li>\r\n	<li>M&agrave;u: Đen</li>\r\n</ul>', 16, '2021-06-04 16:47:16', '2021-06-04 16:47:16'),
(44, 'Ví da bò dáng ngang VLAN3501', 420000, 'vi-da-bo-dang-ngang-vlan3501-1-x.jpg', 'châu mĩ', '<ul>\r\n	<li><a href=\"https://laforce.vn/vi-da-bo/\"><span style=\"color:#9b59b6\"><strong>V&iacute; da b&ograve; nam</strong></span></a><span style=\"color:#9b59b6\">&nbsp;cao cấp&nbsp;</span></li>\r\n	<li><span style=\"color:#9b59b6\">Kiểu d&aacute;ng ngang cổ điển, th&iacute;ch hợp c&aacute;c qu&yacute; &ocirc;ng đơn giản, lịch l&atilde;m&nbsp;</span></li>\r\n	<li><span style=\"color:#9b59b6\">V&iacute; với đầy đủ ngăn lớn đựng tiền, c&oacute; ngăn c&oacute; kh&oacute;a chắc chắn v&agrave; c&aacute;c ngăn chứa thẻ thoải m&aacute;i</span></li>\r\n	<li><span style=\"color:#9b59b6\">Đườn chỉ may gh&eacute;p nối cẩn thận, tỉ mỉ v&agrave; chắc chắn&nbsp;</span></li>\r\n	<li><span style=\"color:#9b59b6\">K&iacute;ch thước: 9.5cm x 11.5cm</span></li>\r\n	<li><span style=\"color:#9b59b6\">M&agrave;u sắc: N&acirc;u&nbsp;</span></li>\r\n</ul>', 16, '2021-06-04 16:48:47', '2021-06-04 16:48:47'),
(45, 'Ví cá sấu 2 mặt VLA1600N-CB-D', 600000, 'vi-ca-sau-2-mat-vla1600n-cb-d.jpg', 'nhật bản', '<ul>\r\n	<li>Bề mặt da mềm, đẹp, trơn b&oacute;ng tự nhi&ecirc;n</li>\r\n	<li>Kiểu d&aacute;ng v&iacute; ngang&nbsp;</li>\r\n	<li><a href=\"https://laforce.vn/vi-da-ca-sau/\"><strong>V&iacute; da c&aacute; sấu</strong></a>&nbsp;họa tiết&nbsp;gai đu&ocirc;i đẳng cấp</li>\r\n	<li>Đường chỉ may tỉ mỉ, chắc chắn theo ti&ecirc;u chuẩn xuất khẩu Ch&acirc;u &Acirc;u</li>\r\n	<li>Thiết kế gồm 2 ngăn ch&iacute;nh, 1 ngăn c&oacute; kh&oacute;a k&eacute;o v&agrave; nhiều ngăn nhỏ tiện dụng</li>\r\n	<li>M&agrave;u: Đen</li>\r\n	<li>K&iacute;ch thước (Chiều d&agrave;i khi mở x Chiều d&agrave;i khi đ&oacute;ng x Chiều cao): 23cm x 12cm x 9.5cm</li>\r\n</ul>', 15, '2021-06-04 16:51:26', '2021-06-04 16:51:26'),
(47, 'VÍ da nam khí phách', 150000, 'vi-da-nam-khi-phach.jpg', 'châu mĩ', '<p>v&iacute; da b&ograve;</p>', 16, '2021-06-16 09:52:01', '2021-06-16 09:52:01'),
(48, 'Ví Da Cá Sấu', 420000, 'vi-da-ca-sau.jpg', 'nga', '<p>v&iacute; da c&aacute; sấu</p>', 15, '2021-06-16 09:53:05', '2021-06-16 09:53:05'),
(49, 'Ví Da Cá Sấu', 420000, 'vi-da-ca-sau.jpg', 'nga', '<p>v&iacute; da c&aacute; sấu</p>', 15, '2021-06-16 09:54:16', '2021-06-16 09:54:16'),
(50, 'ví da trâu', 420000, 'vi-da-trau.jpg', 'nhật bản', '<p>DA B&Ograve;</p>', 16, '2021-06-16 18:40:04', '2021-06-16 18:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`admin_id`, `email`, `password`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'ninh1226@gmail.com', 123456, 'Nguyễn quang ninh', 356654487, NULL, NULL),
(2, 'ninh16@gmail.com', 123456, 'Nguyễn ninh k', 356654487, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newfeed`
--
ALTER TABLE `newfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `newfeed`
--
ALTER TABLE `newfeed`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
