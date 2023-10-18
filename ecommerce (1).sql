-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 01:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_qty`, `created_at`) VALUES
(107, 10, 33, 6, '2022-12-08 16:08:06'),
(108, 0, 28, 1, '2022-12-08 16:16:32'),
(109, 0, 29, 1, '2022-12-08 16:20:03'),
(110, 0, 27, 1, '2022-12-08 16:20:09'),
(111, 12, 28, 1, '2022-12-08 16:38:19'),
(115, 12, 29, 1, '2022-12-08 16:57:53'),
(116, 12, 27, 7, '2022-12-08 16:58:01'),
(120, 12, 32, 2, '2022-12-09 00:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `name`, `description`, `status`, `popular`, `image`, `created_at`) VALUES
(28, 'Makeup', 'Eye Shadow', 'sadfghjkl', 0, 1, '1670294735.jpg', '2022-12-06 02:45:35'),
(29, 'Skincare', 'earings', 'it is nice', 0, 0, '1670309533.', '2022-12-06 06:52:13'),
(30, 'Makeup', 'foundation', 'foundayop', 0, 0, '1670309592.', '2022-12-06 06:53:12'),
(31, 'Fragrance', 'perfume', 'perfume', 0, 0, '1670310804.', '2022-12-06 07:13:24'),
(32, 'Hair', 'two in one hair iron', 'qwertyui', 0, 0, '1670311018.png', '2022-12-06 07:16:58'),
(33, 'Accessories', 'Derma Roller', 'Derma roller All the wat', 0, 1, '1670467788.jpg', '2022-12-08 02:48:48'),
(34, 'Accessories', 'Skin massager', 'Skin massager', 0, 1, '1670468385.jpg', '2022-12-08 02:59:45'),
(35, 'Accessories', 'Extractor', 'Extratcs every thing', 0, 1, '1670495532.jpg', '2022-12-08 10:32:12'),
(36, 'Accessories', 'Scrub', 'Scrub your skin away', 0, 0, '1670495778.png', '2022-12-08 10:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `category_name`, `name`, `small_description`, `description`, `original_price`, `image`, `qty`, `status`, `trending`, `created_at`) VALUES
(27, 32, 'Hair', 'Dil  rod', 'This is dil\'s rod nice hard and tight', 'Dil has a big rod, vbery big rod. So big that if he leave the rod hanging in your face. Your face would have a dent but you will like dil rod very very much . So much so that you would wanna put it in your mouth', 1233, '1670431909.jpg', 2, 0, 1, '2022-12-07 16:51:49'),
(28, 30, 'Skincare', 'Milani', 'milani', 'milani', 5000, '1670464205.jpg', 2, 0, 0, '2022-12-08 01:50:05'),
(29, 33, 'Accessories', 'Red Derma Roller', 'Red Derma Roller', 'Red Derma Roller', 9999, '1670467847.jpg', 10, 0, 1, '2022-12-08 02:50:47'),
(30, 34, 'Accessories', 'This is skin massager', 'This is skin massager', 'This is skin massager', 5000, '1670468420.jpg', 3, 0, 1, '2022-12-08 03:00:20'),
(32, 35, 'Accessories', 'Chromodome Extrator', ' Blackhead remover tools set is more hygienic than your fingers to remove acne, blackheads, whiteheads, comedones, pimples and fat granules easily which avoid infection.', ' Blackhead remover tools set is more hygienic than your fingers to remove acne, blackheads, whiteheads, comedones, pimples and fat granules easily which avoid infection.', 2321, '1670495668.png', 20, 0, 1, '2022-12-08 10:34:28'),
(33, 36, 'Accessories', 'scrub', 'take bath and use the srub.', 'wertyuiopsdfghjklxczvbnm', 2321, '1670495850.jpg', 87, 0, 0, '2022-12-08 10:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `created_at`) VALUES
(1, 'Dil', 'dol@gmail.com', 2147483647, '1234', 1, '2022-11-27 16:54:37'),
(8, 'dol', 'do@gmail.com', 123456789, 'qwerty', 1, '2022-12-08 01:45:58'),
(9, 'nvnv', '', 65787, '', 0, '2022-12-07 12:19:30'),
(10, 'priya', 'bistapriya135@gmail.com', 2147483647, 'abcd', 1, '2022-12-08 01:47:47'),
(11, 'animesh', 'user@gmail.com', 43567890, '123', 0, '2022-12-08 03:12:23'),
(12, 'dc', 'dolchhetri778@gmail.com', 123456789, '123', 0, '2022-12-08 07:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
