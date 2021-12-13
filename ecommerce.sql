-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 11:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

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
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Phonenumber` varchar(10) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  `Defaults` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `IDUser`, `Fullname`, `Address`, `Phonenumber`, `Type`, `Defaults`) VALUES
(19, 1, 'Nguyễn Lim Thái Hồ', '126 Điện Biên Phủ', '0703870950', 'Nhà Riêng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `filter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Name`, `filter`) VALUES
(1, 'Quần', 'quan'),
(2, 'Áo', 'ao'),
(3, 'Giày', 'giay'),
(4, 'Phụ kiện', 'phu-kien');

-- --------------------------------------------------------

--
-- Table structure for table `category_size`
--

CREATE TABLE `category_size` (
  `ID` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `Name` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_size`
--

INSERT INTO `category_size` (`ID`, `IDCategory`, `Name`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 1, 'L'),
(4, 2, 'S'),
(5, 2, 'M'),
(6, 2, 'L'),
(7, 2, 'XL'),
(8, 3, '38'),
(9, 3, '39'),
(10, 3, '40'),
(11, 3, '41'),
(12, 3, '42');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `IDProduct` int(11) DEFAULT NULL,
  `IDUser` int(11) NOT NULL,
  `Comments` text DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Postdate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `IDProduct`, `IDUser`, `Comments`, `Rating`, `Postdate`) VALUES
(2, 1, 1, 'Sản phẩm tốt, chất lượng cao', 2, '1639416780'),
(3, 1, 1, 'Niceeeeee', 5, '1639422523'),
(4, 1, 5, 'Sản phẩm rất đẹp, trau chuốt', 4, '1639424074');

-- --------------------------------------------------------

--
-- Table structure for table `detail_category`
--

CREATE TABLE `detail_category` (
  `ID` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `filter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_category`
--

INSERT INTO `detail_category` (`ID`, `IDCategory`, `Name`, `filter`) VALUES
(1, 1, 'Quần Jeans', 'quan-jeans'),
(2, 1, 'Quần Bò', 'quan-bo'),
(3, 1, 'Quần Short', 'quan-short'),
(4, 2, 'Áo Thun', 'ao-thun'),
(5, 2, 'Áo Sơ Mi', 'ao-so-mi'),
(6, 2, 'Áo Khoác', 'ao-khoac'),
(7, 2, 'Hoodie & Sweatshirt', 'hoodie-sweater'),
(8, 3, 'Giày Sneakers', 'sneakers'),
(9, 3, 'Giày Tây', 'giay-tay'),
(10, 3, 'Boots', 'boots'),
(11, 3, 'Dép', 'dep'),
(12, 4, 'Nón', 'non'),
(13, 4, 'Vớ', 'vo'),
(14, 4, 'Vòng tay', 'vong-tay');

-- --------------------------------------------------------

--
-- Table structure for table `detail_product`
--

CREATE TABLE `detail_product` (
  `ID` int(11) NOT NULL,
  `IDProduct` int(11) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Image1` varchar(255) DEFAULT NULL,
  `Image2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_product`
--

INSERT INTO `detail_product` (`ID`, `IDProduct`, `Brand`, `Image1`, `Image2`) VALUES
(1, 1, 'Champion', 'assets/img/product/heritagechampion.jpg', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `detail_product_size_quantity`
--

CREATE TABLE `detail_product_size_quantity` (
  `ID` int(11) NOT NULL,
  `Size` varchar(5) DEFAULT NULL,
  `IDDetailProduct` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_product_size_quantity`
--

INSERT INTO `detail_product_size_quantity` (`ID`, `Size`, `IDDetailProduct`, `Quantity`) VALUES
(1, 'S', 1, 10),
(2, 'M', 1, 10),
(3, 'L', 1, 10),
(4, 'XL', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `IDDetailCategory` int(11) NOT NULL,
  `IDSale` int(11) DEFAULT NULL,
  `newArrival` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Description`, `IDCategory`, `IDDetailCategory`, `IDSale`, `newArrival`) VALUES
(1, 'Champion Heritage Embroided T-shirt/ Black', 520000, 'Comes with our classic, favorite tee fit that\'s relaxed through the body and hits at the hip. Cotton-blend tee is a standout with joggers, shorts and tights, or layered under a jacket.', 2, 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Phonenumber` varchar(10) DEFAULT NULL,
  `regdate` bigint(20) DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `totp` varchar(32) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `exp_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Fullname`, `Phonenumber`, `regdate`, `lastlogin`, `totp`, `token`, `exp_date`) VALUES
(1, 'kahn12345678@gmail.com', '$SHA$86a53e46b5e4d38d$7d2eb24ad329dae121a742e73ce56464b5028fc6b83f7dd18421fbdfafd82348', 'Nguyễn Lim Thái Hồ', '0703870950', 1633709541, 1639431247, NULL, '', ''),
(4, NULL, '$SHA$71bb65337e8d402b$d58a041a9808fb3aaf2720b051f76b5f08e2ef0dbae82edb73348d9bae13c9f4', 'Nguyen Lim Thai Ho', NULL, 1633947405, 1633947414, NULL, NULL, NULL),
(5, 'kahn@gmail.com', '$SHA$86e1421681a72090$e93dae7f48bffbb33c9bbbdf960416ea13fbe044aeab5d166c0d8f727e3b8d94', 'Bùi Khánh Vân', NULL, 1639033918, 1639424053, NULL, NULL, NULL),
(6, 'kahn1234567@gmail.com', '$SHA$5d0c712816c164e6$3e5c9fa1f533bda3d47704b8d169068d5c3962ef5e8df6ae3613b53c9e0afb46', 'Lim Tae Min', NULL, 1639183126, 1639183220, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category_size`
--
ALTER TABLE `category_size`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detail_category`
--
ALTER TABLE `detail_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `detail_product_size_quantity`
--
ALTER TABLE `detail_product_size_quantity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_size`
--
ALTER TABLE `category_size`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_category`
--
ALTER TABLE `detail_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_product_size_quantity`
--
ALTER TABLE `detail_product_size_quantity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
