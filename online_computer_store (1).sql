-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 07:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_computer_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`) VALUES
(1, 'parts'),
(2, 'computer'),
(3, 'Second hand laptop');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(2500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `description`, `keywords`, `category_id`, `product_image1`, `product_image2`, `product_image3`, `price`, `date`, `status`) VALUES
(1, 'Computer', 'computer', 'computer, laptop', 2, 'computer-1.jpg', 'E:XAMPP	mpphp6735.tmp', 'E:XAMPP	mpphp6745.tmp', '120000', '2023-08-12 10:04:45', 'true'),
(2, 'Computer', 'computer', 'computer, laptop', 2, 'E:XAMPP	mpphp8A01.tmp', 'E:XAMPP	mpphp8A02.tmp', 'E:XAMPP	mpphp8A03.tmp', '120000', '2023-08-10 17:02:35', 'true'),
(3, 'Computer', 'computer', 'computer, laptop', 2, 'E:XAMPP	mpphpA201.tmp', 'E:XAMPP	mpphpA211.tmp', 'E:XAMPP	mpphpA212.tmp', '120000', '2023-08-10 17:02:41', 'true'),
(4, 'Computer', 'computer', 'computer, laptop', 2, 'E:XAMPP	mpphpDA31.tmp', 'E:XAMPP	mpphpDA32.tmp', 'E:XAMPP	mpphpDA33.tmp', '120000', '2023-08-10 17:05:06', 'true'),
(5, 'Computer', 'computer', 'computer, laptop', 2, 'E:XAMPP	mpphp9E79.tmp', 'E:XAMPP	mpphp9E7A.tmp', 'E:XAMPP	mpphp9E7B.tmp', '120000', '2023-08-10 17:07:02', 'true'),
(6, 'macbook', 'computer', 'computer', 2, 'E:XAMPP	mpphpC089.tmp', 'E:XAMPP	mpphpC0C8.tmp', 'E:XAMPP	mpphpC175.tmp', '120', '2023-08-12 09:58:12', 'true'),
(7, 'macbook', 'computer', 'computer', 2, 'E:XAMPP	mpphpCD97.tmp', 'E:XAMPP	mpphpCD98.tmp', 'E:XAMPP	mpphpCD99.tmp', '120', '2023-08-12 09:59:21', 'true'),
(8, 'macbook', 'computer', 'computer', 2, 'E:XAMPP	mpphpFC2C.tmp', 'E:XAMPP	mpphpFC3C.tmp', 'E:XAMPP	mpphpFC3D.tmp', '120', '2023-08-12 09:59:32', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
