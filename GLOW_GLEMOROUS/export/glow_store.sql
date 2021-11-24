-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 04:37 PM
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
-- Database: `glow_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_categories`
--

CREATE TABLE `item_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_categories`
--

INSERT INTO `item_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Casual', 'Browse our amazing items and shop to your heart\'s content!'),
(2, 'Accessories', 'Browse our amazing items and shop to your heart\'s content!'),
(3, 'FootWear', 'Browse our amazing items and shop to your heart\'s content!'),
(4, 'Formal', 'Browse our amazing items and shop to your heart\'s content!'),
(5, 'Wedding or Party', 'Browse our amazing items and shop to your heart\'s content!');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Browse our amazing items and shop to your heart\'s content!'),
(2, 'Women', 'Browse our amazing items and shop to your heart\'s content!'),
(3, 'Kids', 'Browse our amazing items and shop to your heart\'s content!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_price` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_keywords`, `product_desc`) VALUES
(12, 3, 1, '2021-10-15 15:44:03', 'Printed Red Bloom', 'product3.jpg', 'product3.jpg', '1200', 'red', '<p>a</p>'),
(13, 2, 3, '2021-10-15 16:08:38', 'Blooming Floral ', 'product2.jpg', 'product1.jpg', 'RS. 3000', 'aa', '<p>aaaaa</p>'),
(15, 2, 3, '2021-10-17 15:27:39', 'Necles ash', '04-80671-ML.JPG.jpg', '04-80671-ML_ALT4.JPG.jpg', 'RS. 120', 'ne', '<p>nnnnnnn</p>'),
(16, 3, 1, '2021-10-17 15:28:40', 'brown', 'ae0e17c8b3a67fd0002881e98194c2fd.jpg_720x720q80.jpg_(1).jpg', 's-l300.jpg', '1200', 'jjjj', '<p>llll</p>'),
(17, 1, 1, '2021-10-17 15:58:28', 'aaa', 'kj.jpg', 'mmmmm.jpg', '1200', 'aa', '<p>aaaaaa</p>'),
(18, 2, 2, '2021-10-17 15:59:04', 'asss', 'il_794xN.1912735208_tuzv.jpg', 'il_794xN.3198762544_gjmn.jpg', '12', 'aaaq', '<p>aaaaaa</p>'),
(19, 2, 3, '2021-10-17 15:59:38', 'aaa', 'ae0e17c8b3a67fd0002881e98194c2fd.jpg_720x720q80.jpg_(1).jpg', 's-l300.jpg', '12', 'aaa', '<p>aaaaaaaaaaa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'Browse our amazing items and shop to your heart\'s content!'),
(2, 'Accessories', 'Browse our amazing items and shop to your heart\'s content!'),
(3, 'Shoes', 'Browse our amazing items and shop to your heart\'s content!'),
(4, 'Coats', 'Browse our amazing items and shop to your heart\'s content!'),
(5, 'Tshirts', 'Browse our amazing items and shop to your heart\'s content!');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', 'slide_1.jpg'),
(2, 'Slide number 2', 'slide_2.jpg'),
(3, 'Slide number 3', 'slide_3.jpg'),
(4, 'Slide number 4', 'slide_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_categories`
--
ALTER TABLE `item_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_categories`
--
ALTER TABLE `item_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
