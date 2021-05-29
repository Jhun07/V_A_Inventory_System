-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 10:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(16, 'Beauty Items'),
(9, 'Contraceptives'),
(10, 'Diapers'),
(15, 'Feminine Products'),
(13, 'Food and Beverages'),
(12, 'Personal Hygiene'),
(14, 'Skin Care Items'),
(11, 'Vitamins');

-- --------------------------------------------------------

--
-- Table structure for table `disabledusers`
--

CREATE TABLE `disabledusers` (
  `disableId` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disabledusers`
--

INSERT INTO `disabledusers` (`disableId`, `id`, `name`, `username`, `password`, `user_level`, `image`, `status`) VALUES
(26, 63, 'Victoriano', 'user', '12dea96fec20593566ab75692c9949596833adc9', 2, '4rgkj5pe63.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `file_name`, `file_type`) VALUES
(18, 'porcelana.jpg', 'image/jpeg'),
(20, 'myra.jpg', 'image/jpeg'),
(21, 'lipstick.jpg', 'image/jpeg'),
(22, 'pills.jpg', 'image/jpeg'),
(23, 'premier.jpg', 'image/jpeg'),
(24, 'pampers.jpg', 'image/jpeg'),
(25, 'caress.jpg', 'image/jpeg'),
(26, 'merries.jpg', 'image/jpeg'),
(27, 'sister.jpg', 'image/jpeg'),
(28, 'vagisil.jpg', 'image/jpeg'),
(29, 'nips.jpg', 'image/jpeg'),
(30, 'c2.jpg', 'image/jpeg'),
(31, 'coke.jpg', 'image/jpeg'),
(32, 'usana.jpg', 'image/jpeg'),
(33, 'enervon.jpg', 'image/jpeg'),
(34, 'revicon.jpg', 'image/jpeg'),
(35, 'safeguard.jpg', 'image/jpeg'),
(36, 'palmolive.jpg', 'image/jpeg'),
(37, 'colgate.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pendingorder`
--

CREATE TABLE `pendingorder` (
  `productId` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `buy_price` int(250) NOT NULL,
  `sale_price` int(250) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingorder`
--

INSERT INTO `pendingorder` (`productId`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`) VALUES
(44, 'Nips ', 56, 25, 30, 13);

-- --------------------------------------------------------

--
-- Table structure for table `pendingrequest`
--

CREATE TABLE `pendingrequest` (
  `productId` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `buy_price` int(255) NOT NULL,
  `sale_price` int(255) NOT NULL,
  `categorie_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `buy_price` decimal(25,2) DEFAULT NULL,
  `sale_price` decimal(25,2) NOT NULL,
  `categorie_id` int(11) UNSIGNED NOT NULL,
  `media_id` int(11) DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `buy_price`, `sale_price`, `categorie_id`, `media_id`, `date`) VALUES
(44, 'Nips', '56', '25.00', '30.00', 13, 29, '2021-05-23 19:25:43'),
(45, 'Colgate', '125', '89.00', '117.00', 12, 37, '2021-05-23 19:27:47'),
(46, 'Porcelana Astringent ', '86', '55.00', '69.00', 16, 18, '2021-05-23 19:29:38'),
(47, 'Myra Lotion', '45', '78.00', '90.00', 16, 20, '2021-05-23 19:30:31'),
(48, 'Lipstick', '75', '122.00', '150.00', 16, 21, '2021-05-23 19:32:47'),
(49, 'Trust Pills', '241', '24.00', '30.00', 9, 22, '2021-05-23 19:33:52'),
(50, 'Premiere Condom', '158', '112.00', '126.00', 9, 23, '2021-05-23 19:34:58'),
(51, 'Pampers Pants - New Born', '115', '78.00', '99.00', 10, 24, '2021-05-23 19:36:24'),
(52, 'Caress Pampers Pants - Large', '36', '99.00', '125.00', 10, 25, '2021-05-23 19:38:43'),
(53, 'Merries Diaper', '45', '78.00', '95.00', 10, 26, '2021-05-23 19:39:54'),
(54, 'Sisters Napkin', '67', '25.00', '31.00', 15, 27, '2021-05-23 19:40:53'),
(55, 'Vagisil', '68', '135.00', '156.00', 15, 28, '2021-05-23 19:41:43'),
(56, 'C2 - Lemon', '189', '9.00', '14.00', 13, 30, '2021-05-23 19:42:40'),
(57, 'Coca - Cola - Canned', '58', '18.00', '25.00', 13, 31, '2021-05-23 19:43:34'),
(58, 'Usana', '126', '99.00', '1112.00', 11, 32, '2021-05-23 19:44:41'),
(59, 'Enervon - Battled ', '212', '189.00', '195.00', 11, 33, '2021-05-23 19:45:21'),
(60, 'Revicon', '167', '141.00', '150.00', 11, 34, '2021-05-23 19:46:00'),
(61, 'Safeguard ', '145', '45.00', '60.00', 12, 35, '2021-05-23 19:47:00'),
(62, 'Palmolive', '34', '88.00', '99.00', 12, 36, '2021-05-23 19:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(25,2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `productId` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `sale_price` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `productId`, `name`, `quantity`, `sale_price`) VALUES
(14, 45, 'Colgate ', 125, 117),
(15, 61, 'Safeguard  ', 145, 60),
(16, 49, 'Trust Pills ', 241, 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `disableId` int(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'no_image.jpg',
  `status` int(250) NOT NULL,
  `last_login` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `disableId`, `name`, `username`, `password`, `user_level`, `image`, `status`, `last_login`) VALUES
(61, 0, 'Alex', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'eftt69d61.PNG', 1, '2021-05-29 09:48:42'),
(64, 0, 'Victoriano', 'User', '12dea96fec20593566ab75692c9949596833adc9', 2, 'tagu3hq64.PNG', 1, '2021-05-29 09:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(150) NOT NULL,
  `group_level` int(11) NOT NULL,
  `group_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `group_name`, `group_level`, `group_status`) VALUES
(1, 'Admin', 1, 1),
(2, 'Special', 2, 1),
(5, 'User', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `disabledusers`
--
ALTER TABLE `disabledusers`
  ADD PRIMARY KEY (`disableId`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `media_id` (`media_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_level` (`user_level`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `group_level` (`group_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `disabledusers`
--
ALTER TABLE `disabledusers`
  MODIFY `disableId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `SK` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user` FOREIGN KEY (`user_level`) REFERENCES `user_groups` (`group_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
