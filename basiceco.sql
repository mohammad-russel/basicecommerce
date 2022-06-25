-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 10:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basiceco`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `code` varchar(2000) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `code`, `mail`, `pass`) VALUES
(1, '12345', 'rasel@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `carttime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productid`, `quantity`, `buyerid`, `carttime`) VALUES
(21, 9, 1, 5, ' 11:02 || 19-06-22'),
(22, 13, 1, 5, ' 11:02 || 19-06-22'),
(23, 13, 1, 5, ' 11:02 || 19-06-22'),
(24, 5, 1, 5, ' 11:03 || 19-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `perprice` int(11) NOT NULL,
  `fullprice` int(11) NOT NULL,
  `nam` varchar(2000) NOT NULL,
  `num` int(100) NOT NULL,
  `road` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `paymethod` varchar(100) NOT NULL,
  `tcode` varchar(100) NOT NULL,
  `pnumber` int(22) NOT NULL,
  `ordertime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `pid`, `uid`, `quantity`, `perprice`, `fullprice`, `nam`, `num`, `road`, `area`, `paymethod`, `tcode`, `pnumber`, `ordertime`) VALUES
(3, 12, 5, 3, 30, 90, 'rasel', 34442, 'bari', 'mula', 'rocket', '3243', 1243134, ' 09:25 || 16-06-22 '),
(4, 11, 6, 1, 89, 89, 'mina', 12312, 'mira bari', 'lomor gun', 'nagad', '12312e', 1231231231, ' 10:00 || 16-06-22 '),
(5, 5, 6, 5, 107, 535, 'mina', 345345345, 'mona bazar', 'monotola', 'bkash', '1232335', 1857657633, ' 10:25 || 16-06-22 '),
(6, 12, 6, 12, 30, 360, 'mina', 45645645, 'mira bari', 'mula', 'nagad', '2332', 333211111, ' 10:47 || 16-06-22 '),
(7, 13, 5, 3, 10, 30, 'rasel', 2147483647, 'mona bazar', 'mula', 'nagad', '6546454', 76576575, ' 10:47 || 19-06-22 ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nam` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `uploadtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nam`, `price`, `img`, `uploadtime`) VALUES
(5, 'Chicken Curry', 107, 'images (1).jfif', ' 05:14 || 14-06-22 '),
(9, 'Tomato Chicken', 79, 'images.jfif', ' 05:17 || 14-06-22 '),
(13, 'book', 10, '1_mczmlbakKpIE2iPawBFX_Q.jpeg', ' 10:45 || 19-06-22 ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nam` varchar(2000) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `num` int(16) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nam`, `mail`, `num`, `pass`, `city`, `zip`) VALUES
(5, 'rasel', 'rasel@gmail.com', 4333333, 'admin', 'Gazipur, Dhaka Division, Bangladesh', '1207'),
(6, 'mina', 'mina@gmail.com', 3453453, 'mina', 'Gazipur, Dhaka Division, Bangladesh', '1207');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
