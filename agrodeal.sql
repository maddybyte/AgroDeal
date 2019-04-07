-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 07:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrodeal`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(255) NOT NULL,
  `area_name` varchar(1000) NOT NULL,
  `area_admin_user_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `area_admin_user_name`) VALUES
(1, 'Jalgaon', 'admin'),
(2, 'Muktainagar', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `prod_name`, `prod_price`, `prod_desc`) VALUES
(163, 'prod_img/corn.jpg', 'corn', 30, 'Corn from jalgaon'),
(164, 'prod_img/almond.jpg', 'Almond', 500, 'Almond with very delicious qualiity'),
(165, 'prod_img/almond.jpg', 'Cashew', 400, 'Cashew from goa'),
(167, 'prod_img/img5.jpg', 'lahasun', 560, 'lahasun kanda mirhci'),
(168, 'prod_img/img5.jpg', 'lahasun', 560, 'lahasun kanda mirhci'),
(169, 'prod_img/img2.jpg', 'lahsun', 530, 'lahasun aalooooooo mirchi potato'),
(170, 'prod_img/almond.jpg', 'beens', 60, 'fresh beens'),
(176, 'prod_img/img4.jpg', 'Mango', 420, 'mango from jalgaon'),
(177, 'prod_img/img2.jpg', 'gulab jamun', 60, 'gulab jamun from aurangabad'),
(178, 'prod_img/mango.jpg', 'kachha Mango', 420, 'Kachha Mango from Vidyut colony');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `store_name` varchar(5000) NOT NULL,
  `store_area_id` int(200) NOT NULL,
  `store_manager_user_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `store_area_id`, `store_manager_user_name`) VALUES
(1, 'Mehrun', 1, 'superadmin\r\n'),
(2, 'store', 0, 'stero');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'images/profile/default.png',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `image`, `email`, `password`, `mobile`) VALUES
(4, 'Roshan', 'images/profile/default.png', 'roshan@gmail.com', '68e1e4aa65ebe5f10d84d0ebabdf3320', '0'),
(5, 'harsh', 'images/profile/default.png', 'harsh@gmail.com', 'd6b8294df3871e4689e0f4964b4a1219', '2147483647'),
(6, 'ganesh', 'images/profile/default.png', 'ganesh@gmail.com', '277a094bea5311135bd7abd73d28a01d', '987654321'),
(28, 'Madhur', 'images/profile/default.png', 'madhur@gmail.com', '07aeafd81710b674e197e13fec3a2cbc', '2147483647'),
(29, 'Rajashri', 'images/profile/default.png', 'rajshri@gmail.com', 'c7b6a18b66a6f7735c1894c357e7950c', '2147483647'),
(30, 'Harsh1232', 'images/profile/default.png', 'harsh1@gmail.com', 'b0aa651c991deca550252ed6cbba99ba', '2147483647'),
(31, 'yruf', 'images/profile/default.png', 'hffu@gmail.com', 'd6dfb33a2052663df81c35e5496b3b1b', '2147483647'),
(32, 'sanjog', 'images/profile/default.png', 'sanjog@gmail.com', '4bcc7aeb9f5a4799a9c3175ec5a07517', '2147483647'),
(33, 'Mansi', 'images/profile/default.png', 'mansirchaudhari@gmail.com', 'edb7aeacd3789e92f6e6861b283ef278', '2147483647'),
(34, 'asprazz', 'images/profile/default.png', 'aspraz@gmail.com1', '09164c7c858ee62adf78fd793e35cf0b', '7350221618');

-- --------------------------------------------------------

--
-- Table structure for table `users_list`
--

CREATE TABLE `users_list` (
  `id` int(255) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  `user_home` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_list`
--

INSERT INTO `users_list` (`id`, `user_name`, `user_password`, `user_email`, `user_type`, `user_home`) VALUES
(1, 'superadmin', 'superadmin@123', 'superadmin@gmail.com', 'superadmin', 'superadmin'),
(5, 'admin', 'admin@123', 'admin@gmail.com', 'admin', 'Jalgaon'),
(6, 'manager', 'managaer@123', 'manager@gmail.com', 'manager', 'Mehrun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users_list`
--
ALTER TABLE `users_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
