-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 06:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idC` int(11) NOT NULL,
  `nameCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idC`, `nameCategory`) VALUES
(10, 'women'),
(12, 'men'),
(17, 'kids');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(11) NOT NULL,
  `idCart` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idP` int(11) NOT NULL,
  `nameProduct` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Qte` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `idC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idP`, `nameProduct`, `Price`, `Qte`, `Image`, `idC`) VALUES
(6, 'Jacket', '1200', '23', '1594834578_4087400649_2_1_1-1-300x300.jpg', 12),
(8, 'vest', '230', '23', '1594862114_7545310401_1_1_1-300x300.jpg', 12),
(9, 'suite', '420', '20', '1595016527_0706406401_1_1_1-300x300.jpg', 12),
(10, 'Costume', '1000', '234', '1595016593_7545310401_1_1_1-300x300.jpg', 12),
(11, 'Costume premium', '2000', '50', '1595016628_9621450800_1_1_1-300x300.jpg', 12),
(12, 'Tshirt', '120', '50', '1595019958_harajuku-t-shirt-women-clothes-2019-streetwear-korean-style-tee-shirt-femme-hip-hop-tops-Japanese__26740.1563312756.jpg', 10),
(13, 'test', '1200', '23', '1595022538_82553745_2216498978652522_7352167503109292032_n.jpg', 10),
(14, 'PRODUCT1', '12', '12', '1595069596_4087400649_2_1_1-1-300x300.jpg', 12),
(15, 'TEST2', '12', '12', '1595069614_4087400649_2_1_1-1-300x300.jpg', 12),
(16, 'TEST4', '230', '23', '1595069636_4087400649_2_1_1-1-300x300.jpg', 12),
(17, 'test23', '23', '23', '1595069666_4087400649_2_1_1-1-300x300.jpg', 12),
(18, 'TEST32', '32', '32', '1595069682_4087400649_2_1_1-1-300x300.jpg', 12),
(19, 'TEST46', '2000', '233', '1595069700_4087400649_2_1_1-1-300x300.jpg', 12),
(20, 'TEST49', '40', '403', '1595069718_4087400649_2_1_1-1-300x300.jpg', 12),
(21, 'TETS13', '232', '232', '1595069738_4087400649_2_1_1-1-300x300.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `idSize` int(11) NOT NULL,
  `nameSize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`idSize`, `nameSize`) VALUES
(1, 'S'),
(3, 'M'),
(4, 'L'),
(7, 'XL'),
(8, 'XXXL');

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `idPS` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idSize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`idPS`, `idP`, `idSize`) VALUES
(16, 6, 1),
(25, 6, 3),
(26, 6, 4),
(28, 8, 1),
(29, 8, 3),
(30, 8, 4),
(31, 8, 7),
(32, 8, 8),
(33, 6, 7),
(34, 6, 8),
(35, 9, 1),
(36, 9, 3),
(37, 9, 4),
(38, 9, 7),
(39, 9, 8),
(40, 10, 1),
(41, 10, 3),
(42, 10, 4),
(43, 10, 7),
(44, 10, 8),
(45, 11, 1),
(46, 11, 3),
(47, 11, 4),
(48, 11, 7),
(49, 11, 8),
(50, 13, 1),
(51, 13, 3),
(52, 13, 4),
(53, 13, 7),
(54, 13, 8),
(55, 12, 1),
(56, 12, 3),
(57, 12, 4),
(58, 12, 7),
(59, 12, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idU` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idU`, `fullname`, `email`, `password`, `phone_number`, `admin`) VALUES
(5, 'gitsalah', 'test', '111', '064664872', 1),
(6, 'SALAHEDDINE ', 'salah.bouanba2@gmail.com', '$2y$10$mNK3IMFoEiN5zzrxSLBd4.07pV82uxtKSavDTsRZSnFfJ4.gE9m8W', '0661263709', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `fk_products` (`idP`),
  ADD KEY `fk_users` (`idU`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idC`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_cart` (`idCart`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `FK_Categorie` (`idC`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idSize`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`idPS`),
  ADD KEY `fk_sizeproduct` (`idP`),
  ADD KEY `fk_addSizeproduct` (`idSize`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `idSize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `idPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`idP`) REFERENCES `product` (`idP`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`idU`) REFERENCES `users` (`idU`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_cart` FOREIGN KEY (`idCart`) REFERENCES `cart` (`idCart`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Categorie` FOREIGN KEY (`idC`) REFERENCES `category` (`idC`);

--
-- Constraints for table `size_product`
--
ALTER TABLE `size_product`
  ADD CONSTRAINT `fk_addSizeproduct` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`),
  ADD CONSTRAINT `fk_sizeproduct` FOREIGN KEY (`idP`) REFERENCES `product` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
