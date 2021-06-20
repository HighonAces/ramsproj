-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 06:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17092421_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderstable`
--

CREATE TABLE `orderstable` (
  `id` int(255) NOT NULL,
  `useremail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orders` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `totalprice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderstable`
--

INSERT INTO `orderstable` (`id`, `useremail`, `orders`, `totalprice`, `date`) VALUES
(16, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050,||,Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250,||,Name:Inception,Quantity:1,price of individual item: 1200,quantity_total_price: 1200', '3500', '2021-06-19'),
(17, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050,||,Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250', '2300', '2021-06-19'),
(18, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050,||,Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250,||,Name:Inception,Quantity:1,price of individual item: 1200,quantity_total_price: 1200', '3500', '2021-06-19'),
(19, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:2,price of individual item: 1050,quantity_total_price: 2100', '2100', '2021-06-19'),
(20, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050', '1050', '2021-06-19'),
(21, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050', '1050', '2021-06-19'),
(22, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050,||,Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250,||,Name:Inception,Quantity:2,price of individual item: 1200,quantity_total_price: 2400', '4700', '2021-06-20'),
(23, 'hh@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050', '1050', '2021-06-20'),
(24, 'ramkodd@gmail.com', 'Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250', '1250', '2021-06-20'),
(25, 'ramkodd@gmail.com', 'Name:Jurasic Park,Quantity:1,price of individual item: 1050,quantity_total_price: 1050', '1050', '2021-06-20'),
(26, 'hh@gmail.com', 'Name:Iron Name,Quantity:1,price of individual item: 1250,quantity_total_price: 1250', '1250', '2021-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderstable`
--
ALTER TABLE `orderstable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderstable`
--
ALTER TABLE `orderstable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
