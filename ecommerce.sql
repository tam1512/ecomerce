-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 11:17 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ecommerce`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
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
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`ID`, `IDUser`, `Fullname`, `Address`, `Phonenumber`, `Type`, `Defaults`) VALUES
(21, 1, 'Nguyễn Lim Thái Hồ', '126 Điện Biên Phủ', '0703870950', 'Nhà Riêng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `filter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name`, `filter`) VALUES
(1, 'Quần', 'quan'),
(2, 'Áo', 'ao'),
(3, 'Giày', 'giay'),
(4, 'Phụ kiện', 'phu-kien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_size`
--

CREATE TABLE `category_size` (
  `ID` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `Name` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category_size`
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
-- Cấu trúc bảng cho bảng `comments`
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
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`ID`, `IDProduct`, `IDUser`, `Comments`, `Rating`, `Postdate`) VALUES
(2, 1, 1, 'Sản phẩm tốt, chất lượng cao', 2, '1639416780'),
(3, 1, 1, 'Niceeeeee', 5, '1639422523'),
(4, 1, 5, 'Sản phẩm rất đẹp, trau chuốt', 4, '1639424074'),
(5, 3, 1, 'Sản phẩm khá đẹp!', 4, '1639558787'),
(6, 2, 1, 'Sản phẩm tốt!', 5, '1639676241'),
(7, 4, 1, 'Áo đẹp!!', 5, '1640037252');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_category`
--

CREATE TABLE `detail_category` (
  `ID` int(11) NOT NULL,
  `IDCategory` int(11) DEFAULT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `filter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_category`
--

INSERT INTO `detail_category` (`ID`, `IDCategory`, `Name`, `filter`) VALUES
(1, 1, 'Quần Jeans', 'quan-jeans'),
(2, 1, 'Quần Jogger', 'quan-jogger'),
(3, 1, 'Quần Short', 'quan-short'),
(4, 2, 'Áo Thun', 'ao-thun'),
(5, 2, 'Áo Sơ Mi', 'ao-so-mi'),
(6, 2, 'Áo Khoác', 'ao-khoac'),
(7, 2, 'Hoodie & Sweatshirt', 'hoodie-sweater'),
(8, 3, 'Giày Sneakers', 'sneakers'),
(10, 3, 'Boots', 'boots'),
(11, 3, 'Dép', 'dep'),
(12, 4, 'Nón', 'non'),
(13, 4, 'Vớ', 'vo'),
(14, 4, 'Vòng tay', 'vong-tay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_order`
--

CREATE TABLE `detail_order` (
  `ID` int(11) NOT NULL,
  `IDOrder` int(11) DEFAULT NULL,
  `IDProduct` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Size` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_order`
--

INSERT INTO `detail_order` (`ID`, `IDOrder`, `IDProduct`, `Price`, `Quantity`, `Size`) VALUES
(13, 1, 1, 520000, 2, 'L'),
(14, 2, 2, 430000, 1, 'S'),
(15, 3, 2, 430000, 1, 'M'),
(16, 3, 3, 290000, 1, 'M'),
(17, 3, 3, 290000, 1, 'M'),
(18, 4, 2, 430000, 1, 'M'),
(19, 5, 11, 390000, 1, 'M'),
(20, 6, 11, 390000, 1, 'M');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product`
--

CREATE TABLE `detail_product` (
  `ID` int(11) NOT NULL,
  `IDProduct` int(11) DEFAULT NULL,
  `Brand` varchar(100) DEFAULT NULL,
  `Image1` varchar(255) DEFAULT NULL,
  `Image2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_product`
--

INSERT INTO `detail_product` (`ID`, `IDProduct`, `Brand`, `Image1`, `Image2`) VALUES
(1, 1, 'Champion', 'assets/img/product/heritagechampion.jpg', 'None'),
(2, 2, 'Champion', 'assets/img/product/championgradientscriptblack.jpg', 'None'),
(3, 3, 'Champion', 'assets/img/product/championtaglessbasictee.jpg', 'None'),
(4, 4, 'Champion', 'assets/img/product/championgradientscriptwhite.jpg', 'None'),
(5, 5, 'Champion', 'assets/img/product/championmultishadowpurple.jpg', 'None'),
(6, 6, 'Champion', 'assets/img/product/championmultishadowgreen.jpg', 'None'),
(7, 7, 'Champion', 'assets/img/product/dickiesvintagelogoblack.jpg', 'None'),
(8, 8, 'Champion', 'assets/img/product/dickiesvintagelogowhite.jpg', 'None'),
(9, 9, 'Dickies', 'assets/img/product/dickiesbigtallsleeveshirt.jpg', 'None'),
(10, 10, 'Dickies', 'assets/img/product/dickiesrelaxedchambraygoldgrayplaid.jpg', 'None'),
(11, 13, 'M.B.C', 'assets/img/product/mbcsmileyhoodieblack.jpg', 'None'),
(12, 14, 'M.B.C', 'assets/img/product/mbchoodiezipcream.jpg', 'None'),
(13, 11, 'M.B.C', 'assets/img/product/mbccorduroyblackcream.jpg', 'None'),
(14, 12, 'M.B.C', 'assets/img/product/mbccorduroybrowncream.jpg', 'None'),
(15, 15, 'Champion', 'assets/img/product/championmeshshorts.jpg', 'None'),
(16, 16, 'M.B.C', 'assets/img/product/mbcjoggerblue.jpg', 'None'),
(17, 17, 'M.B.C', 'assets/img/product/mbcjoggerlavender.jpg', 'None'),
(18, 18, 'M.B.C', 'assets/img/product/mbcbasicshortcream.jpg', 'None'),
(19, 19, 'Champion', 'assets/img/product/championjerseyshortblack.jpg', 'None');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_product_size_quantity`
--

CREATE TABLE `detail_product_size_quantity` (
  `ID` int(11) NOT NULL,
  `Size` varchar(5) DEFAULT NULL,
  `IDDetailProduct` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `detail_product_size_quantity`
--

INSERT INTO `detail_product_size_quantity` (`ID`, `Size`, `IDDetailProduct`, `Quantity`) VALUES
(1, 'S', 1, 9),
(2, 'M', 1, 3),
(3, 'L', 1, 8),
(4, 'XL', 1, 1),
(5, 'S', 2, 8),
(6, 'M', 2, 5),
(7, 'L', 2, 8),
(8, 'S', 3, 10),
(9, 'M', 3, 8),
(10, 'L', 3, 10),
(11, 'S', 4, 10),
(12, 'M', 4, 10),
(13, 'L', 4, 10),
(14, 'S', 5, 10),
(15, 'M', 5, 10),
(16, 'L', 5, 10),
(17, 'S', 6, 10),
(18, 'M', 6, 10),
(19, 'L', 6, 10),
(20, 'S', 7, 10),
(21, 'M', 7, 10),
(22, 'L', 7, 10),
(23, 'S', 8, 10),
(24, 'M', 8, 10),
(25, 'L', 8, 10),
(26, 'S', 9, 10),
(27, 'M', 9, 10),
(28, 'L', 9, 10),
(29, 'S', 10, 10),
(30, 'M', 10, 10),
(31, 'L', 10, 10),
(32, 'S', 11, 10),
(33, 'M', 11, 8),
(34, 'L', 11, 10),
(35, 'S', 12, 10),
(36, 'M', 12, 10),
(37, 'L', 12, 10),
(38, 'S', 13, 10),
(39, 'M', 13, 10),
(40, 'L', 13, 10),
(41, 'S', 14, 10),
(42, 'M', 14, 10),
(43, 'L', 14, 10),
(44, 'S', 15, 10),
(45, 'M', 15, 10),
(46, 'L', 15, 10),
(47, 'S', 16, 10),
(48, 'M', 16, 10),
(49, 'L', 16, 10),
(50, 'S', 17, 10),
(51, 'M', 17, 10),
(52, 'L', 17, 10),
(53, 'S', 18, 10),
(54, 'M', 18, 10),
(55, 'L', 18, 10),
(56, 'S', 19, 10),
(57, 'M', 19, 10),
(58, 'L', 19, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `IDUser` varchar(11) NOT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Phonenumber` varchar(10) DEFAULT NULL,
  `Total` int(11) NOT NULL,
  `Note` text NOT NULL,
  `Orderdate` varchar(255) NOT NULL,
  `Ordertype` varchar(20) NOT NULL,
  `State` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`ID`, `IDUser`, `Fullname`, `Address`, `Email`, `Phonenumber`, `Total`, `Note`, `Orderdate`, `Ordertype`, `State`) VALUES
(1, '1', 'Nguyễn Lim Thái Hồ', '126 Điện Biên Phủ', 'kahn12345678@gmail.com', '0703870950', 1065000, '123', '1639672369', 'COD', 0),
(2, 'Unknown', 'Nguyen Lim Thai Ho', '126 Điện Biên Phủ', 'kahn12345678@gmail.com', '0703870950', 455000, 'yrs', '1640021525', 'Bank', 0),
(3, '1', 'Nguyễn Lim Thái Hồ', '47 Trần Cao Vân', 'kahn12345678@gmail.com', '0703870950', 315000, '123', '1640022633', 'Bank', 0),
(4, '1', 'Nguyen Lim Thai Ho', '126 Điện Biên Phủ', 'kahn12345678@gmail.com', '0703870950', 455000, '123', '1640022697', 'Bank', 0),
(5, '1', 'Nguyễn Lim Thái Hồ', '126 Điện Biên Phủ', 'kahn12345678@gmail.com', '0703870950', 415000, '123', '1640022924', 'Bank', 0),
(6, 'Unknown', 'Ton thanh tam', 'long an', 'tamtt1512@gmail.com', '0947286201', 415000, '', '1640079149', 'Bank', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `IDCategory` int(11) NOT NULL,
  `IDDetailCategory` int(11) NOT NULL,
  `IDSale` int(11) DEFAULT NULL,
  `newArrival` int(11) DEFAULT NULL,
  `Sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `Name`, `Price`, `Description`, `IDCategory`, `IDDetailCategory`, `IDSale`, `newArrival`, `Sold`) VALUES
(1, 'Champion Heritage Embroided T-shirt/ Black', 520000, 'Comes with our classic, favorite tee fit that\'s relaxed through the body and hits at the hip. Cotton-blend tee is a standout with joggers, shorts and tights, or layered under a jacket.', 2, 4, 0, 1, 5),
(2, 'Champion, Gradient Script Logo T-Shirt - Black', 430000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 3),
(3, 'Champion, Tagless Basic Tee/Red', 290000, 'Nội dung đang cập nhật.', 2, 4, 0, 1, 8),
(4, 'Champion, Gradient Script Logo T-Shirt - White', 430000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 0),
(5, 'Champion Men\'s Classic Tee, Multi-Shadow Logo/ Purple', 460000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 0),
(6, 'Champion Men\'s Classic Tee, Multi-Shadow Logo/ GREEN', 460000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 0),
(7, 'Dickies Vintage Logo Graphic T-Shirt/ Black', 490000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 0),
(8, 'Dickies Vintage Logo Graphic T-shirt/ White', 490000, 'Nội dung đang cập nhật', 2, 4, 0, 1, 0),
(9, 'Dickies, Big & Tall Short Sleeve Work Shirt - Black', 520000, 'Nội dung đang cập nhật', 2, 5, 0, 1, 0),
(10, 'Dickies, Relaxed Fit Short Sleeve Chambray Shirt - Autumn Gold Gray Plaid', 790000, 'Nội dung đang cập nhật', 2, 5, 0, 1, 0),
(11, 'M.B.C Corduroy Exclusive Jacket - Black/Cream', 390000, 'Nội dung đang cập nhật', 2, 6, 0, 1, 2),
(12, 'M.B.C Corduroy Exclusive Jacket - Brown/Cream', 390000, 'Nội dung đang cập nhật', 2, 6, 0, 1, 0),
(13, 'M.B.C, Smiley Hoodie - Black', 420000, 'Nội dung đang cập nhật', 2, 7, 0, 1, 0),
(14, 'M.B.C Exclusive Hoodie Zip - Cream', 450000, 'Nội dung đang cập nhật', 2, 7, 0, 1, 0),
(15, 'Champion LIFE, Pocket Mesh Shorts /Team Gold', 380000, 'Nội dung đang cập nhật', 1, 1, 0, 1, 0),
(16, 'MBC, Jogger Pants - Sterling Blue', 390000, 'Nội dung đang cập nhật', 1, 2, 0, 1, 0),
(17, 'MBC, Jogger Pants - Lavender Aura', 390000, 'Nội dung đang cập nhật', 1, 2, 0, 1, 0),
(18, 'MBC, Basic Shorts - Cream', 250000, 'Nội dung đang cập nhật', 1, 3, 0, 1, 0),
(19, 'Champion Jersey Short/ Black', 400000, 'Nội dung đang cập nhật', 1, 3, 0, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Phonenumber` varchar(10) DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `permission` tinyint(1) NOT NULL DEFAULT 1,
  `regdate` bigint(20) DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `totp` varchar(32) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `exp_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Email`, `Password`, `Fullname`, `Phonenumber`, `Address`, `permission`, `regdate`, `lastlogin`, `totp`, `token`, `exp_date`) VALUES
(1, 'kahn12345678@gmail.com', '$SHA$86a53e46b5e4d38d$7d2eb24ad329dae121a742e73ce56464b5028fc6b83f7dd18421fbdfafd82348', 'Nguyễn Lim Thái Hồ', '0703870950', '', 1, 1633709541, 1640036706, NULL, '', ''),
(4, NULL, '$SHA$71bb65337e8d402b$d58a041a9808fb3aaf2720b051f76b5f08e2ef0dbae82edb73348d9bae13c9f4', 'Nguyen Lim Thai Ho', NULL, '', 1, 1633947405, 1633947414, NULL, NULL, NULL),
(5, 'kahn@gmail.com', '$SHA$86e1421681a72090$e93dae7f48bffbb33c9bbbdf960416ea13fbe044aeab5d166c0d8f727e3b8d94', 'Bùi Khánh Vân', NULL, '', 1, 1639033918, 1639424053, NULL, NULL, NULL),
(6, 'kahn1234567@gmail.com', '$SHA$5d0c712816c164e6$3e5c9fa1f533bda3d47704b8d169068d5c3962ef5e8df6ae3613b53c9e0afb46', 'Lim Tae Min', NULL, '', 1, 1639183126, 1639183220, NULL, NULL, NULL),
(7, 'admin@gmail.com', '$SHA$886ea2eddac03a20$6bbe2c96cfde249bbf8bf99357577ffd56ba7bd2c11266e64a5f55e9c9d62619', 'Lim Tae Min', NULL, '', 1, 1640033809, 1640033813, NULL, NULL, NULL),
(9, 'tamtt1512@gmail.com', '$SHA$2c04ebbd55883b83$1071f28bd6537d7bb414877284a74696b3c05257f1fb79d1da6fe3077584ef60', 'Ton thanh tam', NULL, '', 0, 1640079245, 1640079258, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `category_size`
--
ALTER TABLE `category_size`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detail_category`
--
ALTER TABLE `detail_category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detail_product_size_quantity`
--
ALTER TABLE `detail_product_size_quantity`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category_size`
--
ALTER TABLE `category_size`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `detail_category`
--
ALTER TABLE `detail_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `detail_product_size_quantity`
--
ALTER TABLE `detail_product_size_quantity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
