-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 03:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_attrbutes`
--

CREATE TABLE `product_attrbutes` (
  `attribute_id` int(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `color` varchar(250) NOT NULL,
  `price_for_single` double NOT NULL,
  `stock_count` int(11) NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_attrbutes`
--

INSERT INTO `product_attrbutes` (`attribute_id`, `product_ID`, `size`, `color`, `price_for_single`, `stock_count`, `updated_time`) VALUES
(1, 1, 'S', 'Red', 350, 5, '2020-05-12 12:29:03'),
(2, 2, 'M', 'Brown', 450, 20, '2020-05-12 12:29:57'),
(3, 2, 'L', 'Brown', 550, 20, '2020-05-12 12:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_ID` int(11) NOT NULL,
  `product_name` text CHARACTER SET utf8 NOT NULL,
  `product_description` text CHARACTER SET utf8 NOT NULL,
  `product_image` text NOT NULL,
  `product_baseprice` double NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_ID`, `product_name`, `product_description`, `product_image`, `product_baseprice`, `time_stamp`) VALUES
(1, 'Men\'s Shirt Travel100', 'Vestibulum ac nisl et arcu tempor imperdiet ac a elit. Duis accumsan nisl mi, eu ornare ante laoreet vel. Ut mauris massa, iaculis sit amet neque a, sodales sagittis neque. Aenean eleifend aliquet dui in venenatis. ', 'assets/web/img/product-img/shirt-1.jpg', 500, '2020-05-12 10:28:58'),
(2, 'Urban Casual Shirts', 'Vestibulum ac nisl et arcu tempor imperdiet ac a elit. Duis accumsan nisl mi, eu ornare ante laoreet vel. Ut mauris massa, iaculis sit amet neque a, sodales sagittis neque. Aenean eleifend aliquet dui in venenatis. Etiam vehicula turpis eget magna facilisis, eu vestibulum felis ullamcorper. Aenean lobortis magna id sem sagittis, non tincidunt lectus iaculis. Mauris tortor dui, eleifend a ipsum at, feugiat rutrum leo. Praesent iaculis ante ut condimentum porttitor. Sed gravida vitae nulla et pretium.', 'assets/web/img/product-img/shirt-2.jpg', 600, '2020-05-12 10:28:58'),
(3, 'Men\'s Cotton T-shirts', 'Vestibulum ac nisl et arcu tempor imperdiet ac a elit. Duis accumsan nisl mi, eu ornare ante laoreet vel. Ut mauris massa, iaculis sit amet neque a, sodales sagittis neque. Aenean eleifend aliquet dui in venenatis. Etiam vehicula turpis eget magna facilisis, eu vestibulum felis ullamcorper. Aenean lobortis magna id sem sagittis, non tincidunt lectus iaculis. Mauris tortor dui, eleifend a ipsum at, feugiat rutrum leo. Praesent iaculis ante ut condimentum porttitor. Sed gravida vitae nulla et pretium.', 'assets/web/img/product-img/Tshirt-3.jpg', 850, '2020-05-12 10:28:58'),
(4, 'Men\'s Elite o-shirt ', 'Vestibulum ac nisl et arcu tempor imperdiet ac a elit. Duis accumsan nisl mi, eu ornare ante laoreet vel. Ut mauris massa, iaculis sit amet neque a, sodales sagittis neque. Aenean eleifend aliquet dui in venenatis. Etiam vehicula turpis eget magna facilisis, eu vestibulum felis ullamcorper. Aenean lobortis magna id sem sagittis, non tincidunt lectus iaculis. Mauris tortor dui, eleifend a ipsum at, feugiat rutrum leo. Praesent iaculis ante ut condimentum porttitor. Sed gravida vitae nulla et pretium.', 'assets/web/img/product-img/shirt-4.jpeg', 748, '2020-05-12 10:28:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_attrbutes`
--
ALTER TABLE `product_attrbutes`
  ADD PRIMARY KEY (`attribute_id`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_attrbutes`
--
ALTER TABLE `product_attrbutes`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

