-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 11:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_no` int(11) NOT NULL,
  `product_title` varchar(5000) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `category` varchar(256) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`product_no`, `product_title`, `images`, `category`, `price`) VALUES
(5, 'Regaliz Truderma Stabilized Vitamin C 20% Serum', 'regalizvitaminc.jpg', 'REGALIZ', 900),
(7, 'dgdgggghh', 'estelauder.jpg', 'REGALIZ', 657656),
(8, 'REGALIZ ACNEPAD 50 WIPES', 'estelauder.jpg', 'milani', 600),
(9, 'REGALIZ Hydronic Moisturizing Dry Skin Body Lotion, 100 ml', 'milani_foundation.jpg', 'milani', 400),
(10, 'Regaliz Truderma Stabilized Vitamin C 20% Serum', 'truedermaradiance.jpg', 'milani', 400),
(11, 'REGALIZ ACNEPAD 50 WIPES', 'estelauder.jpg', 'milani', 600),
(12, 'Regaliz Truderma Stabilized Vitamin C 20% Serum', 'regalizvitaminc.jpg', 'milani', 600),
(13, 'dgdgggghh', 'acnepad.jpg', 'milani', 657656);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
