-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 07:55 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_infos`
--

CREATE TABLE `admin_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_infos`
--

INSERT INTO `admin_infos` (`id`, `Email`, `Password`, `created_at`, `updated_at`) VALUES
(1, 'bakeologybakery2019@gmail.com', 'abc#1234', '2019-06-09 10:48:00', '2019-06-09 10:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Email`, `Password`, `Phone`, `Address`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Tiwari', 'rahulbt2016@gmail.com', '12345', 9999900000, 'IG Marg, Nadiad-387002', '2019-06-02 09:33:00', '2019-06-02 09:33:00'),
(2, 'Rahul Brahmbhatt', 'rahulbrahmbhatt1811@gmail.com', 'rb18', 9090909090, 'Deri road, Nadiad', '2019-06-02 09:35:00', '2019-06-02 09:35:00'),
(3, 'Harsh Patel', 'harshp1898@gmail.com', '1234', 9109109109, 'Madhu-kunj,Near old B.L Bhatt hospital,Nadiad', '2019-06-02 04:25:57', '2019-06-02 04:25:57'),
(4, 'Pranjal Jani', 'pranjaljani@gmail.com', '1234', 9999999000, 'Jalsagar,Nadiad', '2019-06-02 14:54:11', '2019-06-02 14:54:11'),
(5, 'Dhaval Vaghela', 'mrwhite@gmail.com', 'mrwhite123', 9999999992, 'Darshan Hostel,Changa', '2019-06-03 14:02:18', '2019-06-03 14:02:18'),
(6, 'Vraj Patel', 'vrajkp99@gmail.com', '12345', 9292929292, 'Bankstaff soc., Nadiad', '2019-06-07 03:54:45', '2019-06-07 03:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_02_090732_create_customers_table', 1),
(4, '2019_06_04_164336_create_products_table', 2),
(5, '2019_06_09_104136_create_admin_infos_table', 3),
(6, '2019_06_10_173939_create_orders_table', 4),
(7, '2019_06_10_175827_create_orders_table', 5),
(8, '2019_06_10_184147_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `OrderDate` date NOT NULL,
  `CustomerName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderNames` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrderQuantities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `TotalProfit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `OrderDate`, `CustomerName`, `CustomerEmail`, `OrderNames`, `OrderQuantities`, `TotalProfit`, `created_at`, `updated_at`) VALUES
(1, '2019-06-10', 'Rahul Tiwari', 'rahulbt2016@gmail.com', 'American Dryfruit,Belgium Truffle,Black Forest', '2,3,4', 5546, '2019-06-10 14:25:04', '2019-06-10 14:25:04'),
(2, '2019-06-11', 'Rahul Brahmbhatt', 'rahulbrahmbhatt1811@gmail.com', 'Kit-Kat', '3', 2832, '2019-06-10 20:05:58', '2019-06-10 20:05:58'),
(3, '2019-06-11', 'Rahul Brahmbhatt', 'rahulbrahmbhatt1811@gmail.com', 'Belgium Crisp,Blue-berry Cheese Cake', '2,1', 1710, '2019-06-10 20:11:26', '2019-06-10 20:11:26'),
(4, '2019-06-11', 'Vraj Patel', 'vrajkp99@gmail.com', 'Flour Bread,Mini Chocolate Cookie,Coffee', '2,1,1', 318, '2019-06-10 20:13:13', '2019-06-10 20:13:13'),
(5, '2019-06-11', 'Dhaval Vaghela', 'mrwhite@gmail.com', 'Chocolate Pyramid,Wheat Bread', '5,1', 400, '2019-06-10 20:22:57', '2019-06-10 20:22:57'),
(6, '2019-06-11', 'Harsh Patel', 'harshp1898@gmail.com', 'Oreo Milkshake,Peanut Cookie,Oatmeal Raisin Cookie', '1,1,1', 412, '2019-06-10 20:24:49', '2019-06-10 20:24:49'),
(7, '2019-06-11', 'Harsh Patel', 'harshp1898@gmail.com', 'White Forest', '1', 766, '2019-06-10 20:25:35', '2019-06-10 20:25:35'),
(8, '2019-06-11', 'Rahul Tiwari', 'rahulbt2016@gmail.com', 'Chocolate Crunchies,Casata,Assor Cup-cake,Oreo Milkshake', '1,1,1,2', 1202, '2019-06-10 22:03:21', '2019-06-10 22:03:21'),
(9, '2019-06-11', 'Rahul Tiwari', 'rahulbt2016@gmail.com', 'Belgium Crisp,Blue-berry Cheese Cake', '2,1', 1710, '2019-06-11 07:21:02', '2019-06-11 07:21:02'),
(10, '2019-06-11', 'Vraj Patel', 'vrajkp99@gmail.com', 'Belgium Crisp,Chocolate Chips,Strawberry Milkshake,Butterscotch Cup-cake', '1,1,3,1', 1710, '2019-06-11 15:20:38', '2019-06-11 15:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` bigint(20) UNSIGNED NOT NULL,
  `ProductName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductImageName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductCategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductAvailability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductCost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductImageName`, `ProductCategory`, `ProductAvailability`, `ProductCost`, `created_at`, `updated_at`) VALUES
(1, 'American Dryfruit', 'AMERICAN-DRY-FRUIT.jpg', 'cake', 'yes', 600, '2019-06-09 22:03:23', '2019-06-09 22:03:23'),
(2, 'Belgium Crisp', 'BELGIUM-CRISP.jpg', 'cake', 'yes', 450, '2019-06-04 17:31:11', '2019-06-04 17:31:11'),
(3, 'Belgium Truffle', 'BELGIUM-TRUFFLE.jpg', 'cake', 'yes', 500, '2019-06-04 17:36:47', '2019-06-04 17:36:47'),
(4, 'Black Forest', 'BLACK-FOREST.jpg', 'cake', 'yes', 550, '2019-06-04 17:37:53', '2019-06-04 17:37:53'),
(5, 'Blue Berry', 'BLUEBERRY.jpg', 'cake', 'yes', 400, '2019-06-04 17:52:35', '2019-06-04 17:52:35'),
(6, 'Blue-berry Cheese Cake', 'BLUEBERRY-CHEESE-CAKE.jpg', 'cake', 'yes', 550, '2019-06-04 17:53:55', '2019-06-04 17:53:55'),
(7, 'Chocolate Chips', 'CHOCOLATE-CHIPS.jpg', 'cake', 'yes', 600, '2019-06-04 17:54:47', '2019-06-04 17:54:47'),
(8, 'Chocolate Crunchies', 'CHOCOLATE-CRUNCHIES.jpg', 'cake', 'yes', 700, '2019-06-04 18:56:59', '2019-06-04 18:56:59'),
(9, 'Chocolate Fancy', 'CHOCOLATE-FANCY.jpg', 'cake', 'yes', 550, '2019-06-04 18:58:22', '2019-06-04 18:58:22'),
(10, 'Chocolate Overflow', 'CHOCOLATE-OVERFLOW.jpg', 'cake', 'yes', 600, '2019-06-04 18:59:11', '2019-06-04 18:59:11'),
(11, 'Choco-Vanilla', 'CHOCO-VANILLA.jpg', 'cake', 'yes', 500, '2019-06-04 19:00:36', '2019-06-04 19:00:36'),
(12, 'Dutch Truffle', 'DUTCH-TRUFFLE.jpg', 'cake', 'yes', 550, '2019-06-04 19:01:49', '2019-06-04 19:01:49'),
(13, 'Forest Fantacy', 'FOREST-FANTACY.jpg', 'cake', 'yes', 650, '2019-06-04 19:03:03', '2019-06-04 19:03:03'),
(14, 'Fresh Fruit', 'FRESH-FRUIT.jpg', 'cake', 'yes', 450, '2019-06-04 19:04:32', '2019-06-04 19:04:32'),
(15, 'Hazelnut', 'HAZELNUT.jpg', 'cake', 'yes', 650, '2019-06-04 19:31:45', '2019-06-04 19:31:45'),
(16, 'Kesar Pista Badam', 'kesar_pista_badam.jpg', 'cake', 'yes', 550, '2019-06-04 19:32:36', '2019-06-04 19:32:36'),
(17, 'Doraemon (Kid) Cake', 'KID-CAKE-1.jpg', 'cake', 'yes', 400, '2019-06-04 19:33:53', '2019-06-04 19:33:53'),
(18, 'Minions(Kid) Cake', 'KID-CAKE-2.jpg', 'cake', 'yes', 450, '2019-06-04 19:36:28', '2019-06-04 19:36:28'),
(19, 'Teddy (Kid) Cake', 'KID-CAKE-3.jpg', 'cake', 'yes', 400, '2019-06-04 19:37:33', '2019-06-04 19:37:33'),
(20, 'Panda(Kid) Cake', 'KID-CAKE-4.jpg', 'cake', 'yes', 400, '2019-06-04 19:38:49', '2019-06-04 19:38:49'),
(21, 'Special Chocolate(Kid) Cake', 'KID-CAKE-5.jpg', 'cake', 'yes', 500, '2019-06-04 19:41:37', '2019-06-04 19:41:37'),
(22, 'Kit-Kat', 'KIT-KAT.jpg', 'cake', 'yes', 800, '2019-06-04 19:42:22', '2019-06-04 19:42:22'),
(23, 'Mango Cheese Cake', 'MANGO-CHEESE-CAKE-1.jpeg', 'cake', 'yes', 750, '2019-06-04 19:45:10', '2019-06-04 19:45:10'),
(24, 'Mango Forest', 'MANGO-FOREST-CAKE.jpg', 'cake', 'yes', 600, '2019-06-04 19:51:18', '2019-06-04 19:51:18'),
(25, 'Orange Cake', 'ORANGE.jpg', 'cake', 'yes', 500, '2019-06-04 19:52:03', '2019-06-04 19:52:03'),
(26, 'Premium Red Velvet', 'PREMIUM-RED-VELVET.jpg', 'cake', 'yes', 650, '2019-06-04 19:54:10', '2019-06-04 19:54:10'),
(27, 'Royal Blue Velvet', 'ROYAL-BLUE-VELVET.jpg', 'cake', 'yes', 700, '2019-06-04 19:55:22', '2019-06-04 19:55:22'),
(28, 'Strawberry Cake', 'STRAWBERRY.jpg', 'cake', 'yes', 500, '2019-06-04 19:58:00', '2019-06-04 19:58:00'),
(29, 'White Forest', 'WHITE-FOREST.jpg', 'cake', 'yes', 650, '2019-06-04 19:58:48', '2019-06-04 19:58:48'),
(30, 'Black Forest', 'BLACK-FOREST-PASTRY.jpg', 'pastry', 'yes', 60, '2019-06-04 20:00:52', '2019-06-04 20:00:52'),
(31, 'Blue-berry', 'BLUEBERRY-PASTRY.jpg', 'pastry', 'yes', 40, '2019-06-04 20:13:33', '2019-06-04 20:13:33'),
(32, 'Casata', 'CASATA-CAKE.jpg', 'pastry', 'yes', 50, '2019-06-04 20:14:28', '2019-06-04 20:14:28'),
(33, 'Chocolate Pyramid', 'CHOCOALATE-PYRAMID.jpg', 'pastry', 'yes', 60, '2019-06-04 20:15:44', '2019-06-04 20:15:44'),
(34, 'Chocolate Crunch', 'CHOCOALTE-CRUNCHY-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:16:42', '2019-06-04 20:16:42'),
(35, 'Choco-Forest', 'CHOCO-FOREST-PASTRY.jpg', 'pastry', 'yes', 60, '2019-06-04 20:17:57', '2019-06-04 20:17:57'),
(36, 'Chocolate Chips', 'CHOCOLATE-CHIPS-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:19:00', '2019-06-04 20:19:00'),
(37, 'Choco-Vanilla', 'CHOCO-VANILLA-PASTRY.jpg', 'pastry', 'yes', 40, '2019-06-04 20:20:06', '2019-06-04 20:20:06'),
(38, 'Coffee', 'COFFEE-PASTRY.jpg', 'pastry', 'yes', 40, '2019-06-04 20:20:48', '2019-06-04 20:20:48'),
(39, 'Dutch Truffle', 'DUTCH-TRUFFLE-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:21:56', '2019-06-04 20:21:56'),
(40, 'Forest Fantacy', 'FOREST-FANTACY-PASTRY.jpg', 'pastry', 'yes', 60, '2019-06-04 20:22:39', '2019-06-04 20:22:39'),
(41, 'Fresh-Fruit', 'FRESH-FRUIT-PASTRY.jpg', 'pastry', 'yes', 40, '2019-06-04 20:23:29', '2019-06-04 20:23:29'),
(42, 'Fresh-Pineaple', 'FRESH-PINEAPPLE-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:24:50', '2019-06-04 20:24:50'),
(43, 'Half-Half', 'HALF-HALF.jpg', 'pastry', 'yes', 60, '2019-06-04 20:26:11', '2019-06-04 20:26:11'),
(44, 'Mango-Cheese Pastry', 'MANGO-CHEESE-CAKE-PASTRY.jpg', 'pastry', 'yes', 65, '2019-06-04 20:27:36', '2019-06-04 20:27:36'),
(45, 'Mango Forest', 'MANGO-FOREST-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:28:52', '2019-06-04 20:28:52'),
(46, 'Mawa-Malai', 'MAWA-MALAI.jpg', 'pastry', 'yes', 50, '2019-06-04 20:29:41', '2019-06-04 20:29:41'),
(47, 'Belgium Truffle', 'PREMIUM-BELGIUM-TRUFFLE-PASTRY.jpg', 'pastry', 'yes', 45, '2019-06-04 20:30:39', '2019-06-04 20:30:39'),
(48, 'Rich Mango', 'RICH-MANGO-PASTRY-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:31:32', '2019-06-04 20:31:32'),
(49, 'Royal Blue Velvet', 'ROYAL-BLUE-VELVET-PASTRY.jpg', 'pastry', 'yes', 50, '2019-06-04 20:32:30', '2019-06-04 20:32:30'),
(50, 'Strawberry', 'STRAWBERRY-PASTRY.jpg', 'pastry', 'yes', 40, '2019-06-04 20:34:02', '2019-06-04 20:34:02'),
(51, 'Thandai', 'THANDAI.jpg', 'pastry', 'yes', 60, '2019-06-04 20:34:59', '2019-06-04 20:34:59'),
(52, 'White Forest', 'WHITE-FOREST-PASTRY.jpg', 'pastry', 'yes', 65, '2019-06-04 20:36:40', '2019-06-04 20:36:40'),
(53, 'Flour Bread', 'Flour-bread.jpg', 'bread', 'yes', 50, '2019-06-04 20:43:20', '2019-06-04 20:43:20'),
(54, 'Flour Bun', 'Flour-bun.jpg', 'bread', 'yes', 40, '2019-06-04 20:44:06', '2019-06-04 20:44:06'),
(55, 'Sesame Bun', 'Sesame-bun.jpg', 'bread', 'yes', 60, '2019-06-04 20:45:23', '2019-06-04 20:45:23'),
(56, 'Wheat Bread', 'Wheat-bread.jpg', 'bread', 'yes', 40, '2019-06-04 20:46:08', '2019-06-04 20:46:08'),
(57, 'Apple Cinamon Cookie', 'Apple-cinamon-cookies.jpg', 'cookie', 'yes', 100, '2019-06-04 20:47:25', '2019-06-04 20:47:25'),
(58, 'Butter Cookie', 'Butter-cookies.jpg', 'cookie', 'yes', 90, '2019-06-04 20:48:36', '2019-06-04 20:48:36'),
(59, 'Candy Cookie', 'Candy-cookies.jpg', 'cookie', 'yes', 120, '2019-06-04 20:49:23', '2019-06-04 20:49:23'),
(60, 'Chocolate Brownie Cookie', 'Chocolate-brownie-cookies.jpg', 'cookie', 'yes', 150, '2019-06-04 20:50:31', '2019-06-04 20:50:31'),
(61, 'M&M Cookie', 'M&M-cookies.jpg', 'cookie', 'yes', 150, '2019-06-04 20:51:50', '2019-06-04 20:51:50'),
(62, 'Mini Chocolate Cookie', 'Mini-chocolate-cookies.jpg', 'cookie', 'yes', 110, '2019-06-04 20:52:48', '2019-06-04 20:52:48'),
(63, 'Oatmeal Raisin Cookie', 'Oatmeal-raisin-cookie.jpg', 'cookie', 'yes', 120, '2019-06-04 20:53:58', '2019-06-04 20:53:58'),
(64, 'Hot-dog Bun', 'hot-dog-bun.jpg', 'bread', 'yes', 70, '2019-06-05 08:46:05', '2019-06-05 08:46:05'),
(65, 'Peanut Cookie', 'Peanut-cookies.jpg', 'cookie', 'yes', 120, '2019-06-04 21:01:52', '2019-06-04 21:01:52'),
(66, 'Sugar Cookie', 'Sugar-cookies.jpg', 'cookie', 'yes', 80, '2019-06-04 21:03:22', '2019-06-04 21:03:22'),
(67, 'Traditional Cookies', 'Traditional-cookies.jpg', 'cookie', 'yes', 140, '2019-06-04 21:04:19', '2019-06-04 21:04:19'),
(68, 'Wheat Cookies', 'Wheat-cookies.jpg', 'cookie', 'yes', 120, '2019-06-04 21:05:23', '2019-06-04 21:05:23'),
(69, 'Assor Cup-cake', 'Assor-cupcake.jpg', 'cupcake', 'yes', 50, '2019-06-04 21:07:40', '2019-06-04 21:07:40'),
(70, 'Baby Cup-cake', 'Baby-cupcake.jpg', 'cupcake', 'yes', 80, '2019-06-04 21:08:28', '2019-06-04 21:08:28'),
(71, 'Brownie Cup-cake', 'Brownie-cupcake.jpg', 'cupcake', 'yes', 90, '2019-06-04 21:09:29', '2019-06-04 21:09:29'),
(72, 'Butterscotch Cup-cake', 'Butterscotch-cupcake.jpg', 'cupcake', 'yes', 100, '2019-06-04 21:10:30', '2019-06-04 21:10:30'),
(73, 'Chococup Cup-cake', 'chococup-cupcake.jpg', 'cupcake', 'yes', 100, '2019-06-04 21:11:32', '2019-06-04 21:11:32'),
(74, 'Chocolava Cup-cake', 'Chocolava-cupcake.jpg', 'cupcake', 'yes', 110, '2019-06-04 21:12:18', '2019-06-04 21:12:18'),
(75, 'Red Cup-cake', 'Red-cupcake.jpg', 'cupcake', 'yes', 110, '2019-06-04 21:13:01', '2019-06-04 21:13:01'),
(76, 'Coffee', 'Coffee.jpg', 'drink', 'yes', 60, '2019-06-04 21:16:21', '2019-06-04 21:16:21'),
(77, 'Cold Coffee', 'Cold-Coffee.jpg', 'drink', 'yes', 80, '2019-06-04 21:17:08', '2019-06-04 21:17:08'),
(78, 'Oreo Milkshake', 'Oreo-milkshake.jpg', 'drink', 'yes', 110, '2019-06-04 21:18:09', '2019-06-04 21:18:09'),
(79, 'Pomegranate Juice', 'Pomegranate-juice.jpg', 'drink', 'yes', 70, '2019-06-04 21:18:58', '2019-06-04 21:18:58'),
(80, 'Strapes Juice', 'Strapes-Juice.jpg', 'drink', 'yes', 90, '2019-06-04 21:20:28', '2019-06-04 21:20:28'),
(81, 'Strawberry Milkshake', 'Strawberry-milkshake.jpg', 'drink', 'yes', 100, '2019-06-04 21:21:34', '2019-06-04 21:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_infos`
--
ALTER TABLE `admin_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_infos_email_unique` (`Email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `customers_email_unique` (`Email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_infos`
--
ALTER TABLE `admin_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
