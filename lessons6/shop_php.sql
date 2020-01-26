-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2020 at 07:12 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `commets`
--

CREATE TABLE `commets` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `new_commets` text NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commets`
--

INSERT INTO `commets` (`id`, `fio`, `new_commets`, `date`) VALUES
(73, 'Вася', 'Проверка', '2025-01-20 20:00:00'),
(116, 'Александр', 'Проверка отзыва и формы отправки для отзывов.', '2025-01-20 20:00:00'),
(117, 'Петр', 'Тест', '2025-01-20 20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` text,
  `img` varchar(65) DEFAULT NULL,
  `price` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `desc`, `img`, `price`) VALUES
(2, 'HTC', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium', '/images/goods/htc.jpg', '900$'),
(3, 'Samsung', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium', '/images/goods/samsung.jpg', '800$'),
(6, 'Iphone', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium', '/images/goods/iphone.jpg', '1000$'),
(14, 'HTS', 'Описание товара', '/images/goods/htc.jpg', '900');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `click` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `dir`, `size`, `name`, `click`, `type`) VALUES
(1, 'img_large/', 1000, '1', 19, '.jpg'),
(2, 'img_large/', 1000, '2', 41, '.jpg'),
(3, 'img_large/', 1000, '3', 100, '.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commets`
--
ALTER TABLE `commets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commets`
--
ALTER TABLE `commets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
