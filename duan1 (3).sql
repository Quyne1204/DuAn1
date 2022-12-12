-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2022 lúc 04:27 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(253) CHARACTER SET utf8 NOT NULL,
  `address` varchar(253) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `bill_pay` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` int(20) NOT NULL DEFAULT 0,
  `status` tinyint(1) DEFAULT 0 COMMENT '0.đang tạo đơn hàng  1.đã xử lý  2.đang giao hàng  3.giao hàng thành công'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `user_id`, `name`, `address`, `phone`, `email`, `bill_pay`, `date`, `total`, `status`) VALUES
(20, 5, '', '', '', '', 'Trả tiền khi nhận hàng', '2022-11-14', 12600000, 0),
(21, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-11-17', 12600000, 0),
(22, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-11-17', 17800000, 0),
(23, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Trả tiền khi nhận hàng', '2022-11-22', 12600000, 0),
(24, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Trả tiền khi nhận hàng', '2022-11-22', 15000000, 0),
(25, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-11-24', 13000000, 0),
(28, 5, 'Nguyen Van Quy', '', '', '', 'Thanh toán trực tiếp', '2022-11-25', 0, 0),
(29, 5, '', '', '', 'smdgfksdkfjvads@gmail.com', 'Thanh toán trực tiếp', '2022-11-25', 0, 0),
(30, 5, 'quynee', '', '', '', 'Thanh toán trực tiếp', '2022-11-25', 0, 0),
(31, 5, 'quynee', '', '', '', 'Thanh toán trực tiếp', '2022-11-25', 0, 0),
(32, 5, 'Nguyen Van Quy adasda', '', '', '', 'Thanh toán trực tiếp', '2022-11-25', 0, 3),
(33, 5, 'quy', '', '', '', 'Thanh toán trực tiếp', '2022-11-25', 30000000, 0),
(34, 5, '', '', '', '', 'Thanh toán trực tiếp', '2022-11-30', 32800000, 0),
(35, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Thanh toán Online', '2022-12-05', 15000000, 0),
(36, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-06', 15000000, 0),
(37, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Trả tiền khi nhận hàng', '2022-12-07', 17800000, 0),
(38, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Trả tiền khi nhận hàng', '2022-12-07', 20490000, 0),
(39, 2, '', '', '', 'quynvph21897@fpt.edu.vn', 'Trả tiền khi nhận hàng', '2022-12-07', 20490000, 0),
(40, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-07', 9329000, 0),
(41, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-07', 0, 0),
(42, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-07', 0, 0),
(43, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-07', 0, 0),
(44, 1, 'Nguyễn Văn Quý', 'Hà Nội', '0336442176', 'nvq12042003@gmail.com', 'Trả tiền khi nhận hàng', '2022-12-07', 0, 0),
(45, 5, 'Nguyễn Mạnh Dũng', '', '', '', 'Trả tiền khi nhận hàng', '2022-12-07', 12600000, 0),
(46, 5, 'Nguyễn Mạnh Dũng', '', '', '', 'Trả tiền khi nhận hàng', '2022-12-07', 17790000, 3),
(47, 5, 'Nguyen van QUY', 'Hà nội', '0336442176', 'nvq', 'Thanh toán qua thẻ', '2022-12-07', 30000000, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_order` int(10) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `product_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `images` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `money` int(20) NOT NULL DEFAULT 0,
  `count` int(5) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_order`, `user_id`, `product_id`, `bill_id`, `product_name`, `images`, `money`, `count`, `total`) VALUES
(25, 5, 20, 20, 'Laptop Lenovo Ideapad 330-15IKBR', 'sp7.webp', 12600000, 1, 12600000),
(26, 1, 20, 21, 'Laptop Lenovo Ideapad 330-15IKBR', 'sp7.webp', 12600000, 1, 12600000),
(27, 1, 14, 22, 'Laptop HP Pavilion', 'sp1.webp', 17800000, 1, 17800000),
(28, 2, 20, 23, 'Laptop Lenovo Ideapad 330-15IKBR', 'sp7.webp', 12600000, 1, 12600000),
(29, 2, 19, 24, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(30, 1, 21, 25, 'Laptop Lenovo IdeaPad 5 15ITL05 82FG01H8VN', 'sp8.webp', 13000000, 1, 13000000),
(32, 5, 19, 29, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(33, 5, 19, 29, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(34, 5, 19, 29, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(35, 5, 19, 29, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(36, 5, 19, 29, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(37, 5, 19, 30, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(38, 5, 19, 30, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(39, 5, 19, 32, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(40, 5, 19, 33, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(41, 5, 19, 33, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(42, 5, 19, 34, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(43, 5, 14, 34, 'Laptop HP Pavilion', 'sp1.webp', 17800000, 1, 17800000),
(44, 2, 19, 35, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(45, 1, 19, 36, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(46, 2, 14, 37, 'Laptop HP Pavilion', 'sp1.webp', 17800000, 1, 17800000),
(47, 2, 18, 38, 'Laptop ACER Swift 3 ', 'sp5.webp', 20490000, 1, 20490000),
(48, 2, 18, 39, 'Laptop ACER Swift 3 ', 'sp5.webp', 20490000, 1, 20490000),
(49, 1, 17, 40, 'Laptop HP 15s-fq2663TU 6K796PA', 'sp4.webp', 9329000, 1, 9329000),
(50, 5, 20, 45, 'Laptop Lenovo Ideapad 330-15IKBR', 'sp7.webp', 12600000, 1, 12600000),
(51, 5, 15, 46, 'Laptop HP Pavilion', 'sp2.webp', 17790000, 1, 17790000),
(52, 5, 19, 47, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000),
(53, 5, 19, 47, 'Laptop ACER Nitro 5', 'sp6.webp', 15000000, 1, 15000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_type`, `type_name`, `img`) VALUES
(1, 'Asus', 'img11.webp'),
(2, 'Lenovo', 'img12.webp'),
(3, 'HP', 'img13.jpg'),
(4, 'Acer', 'img14.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `role` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_user`, `user_name`, `password`, `full_name`, `email`, `phone_number`, `address`, `role`) VALUES
(1, 'admin', '1', 'Nguyễn Văn Quý', 'nvq12042003@gmail.com', '0336442176', 'Hà Nội', 1),
(2, 'Quy', '1', '', 'quynvph21897@fpt.edu.vn', '', '', 2),
(5, 'Dung', '1', 'Nguyễn Mạnh Dũng', '', '', '', 2),
(17, 'a', 'a', '', '', '', '', 2),
(18, 'b', 'b', '', '', '', '', 2),
(19, 'Dung', '1', '', 'nvq12042003@gmail.com', '', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `products_name` varchar(50) NOT NULL,
  `money` float NOT NULL,
  `img` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `detail` varchar(2000) NOT NULL,
  `view` int(11) DEFAULT 0,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `products_name`, `money`, `img`, `date_added`, `detail`, `view`, `type_id`) VALUES
(14, 'Laptop HP Pavilion', 17800000, 'sp1.webp', '2022-11-25', '- CPU: Intel Core i5-1240P\r\n- Màn hình: 15.6\" IPS (1920 x 1080)\r\n- RAM: 2 x 4GB DDR4 3200MHz\r\n- Đồ họa: Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL\r\n- Pin: 3 cell 41 Wh\r\n- Khối lượng: 1.7 kg', 0, 3),
(15, 'Laptop HP Pavilion', 17790000, 'sp2.webp', '2022-11-10', '- CPU: Intel Core i5-1240P\r\n- Màn hình: 15.6\" IPS (1920 x 1080)\r\n- RAM: 2 x 4GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home SL\r\n- Pin: 3 cell 41 Wh\r\n- Khối lượng: 1.7kg', 0, 3),
(16, 'Laptop ACER Aspire 7 ', 16490000, 'sp3.webp', '2022-11-24', '- CPU: AMD Ryzen 5 5500U\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: GTX 1650 4GB GDDR6 / AMD Radeon Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- 48 Wh\r\n- Khối lượng: 2.1kg', 0, 4),
(17, 'Laptop HP 15s-fq2663TU 6K796PA', 9329000, 'sp4.webp', '2022-11-17', '- CPU: Intel Core i3-1115G4\r\n- Màn hình: 15.6\" IPS (1366 x 768)\r\n- RAM: 1 x 4GB DDR4 3200MHz\r\n- Đồ họa: Onboard Intel UHD Graphics\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell 41 Wh Pin liền\r\n- Khối lượng: 1.7kg', 0, 3),
(18, 'Laptop ACER Swift 3 ', 20490000, 'sp5.webp', '2022-11-16', '- CPU: Intel Core i5-1135G7\r\n- Màn hình: 13.5\" IPS (2556 x 1504)\r\n- RAM: 8GB Onboard LPDDR4X 2666MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 56 Wh Pin liền\r\n- Khối lượng: 1.2kg', 0, 4),
(19, 'Laptop ACER Nitro 5', 15000000, 'sp6.webp', '2022-11-26', '- CPU: Ryzen 7 5800H\r\n- Màn hình: 15.6\" IPS (1920 x 1080),144Hz\r\n- RAM: 1 x 8GB DDR4 3200MHz\r\n- Đồ họa: RTX 3070 8GB GDDR6 / AMD Radeon Graphics\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 56 Wh Pin liền\r\n- Khối lượng: 2.2kg', 0, 4),
(20, 'Laptop Lenovo Ideapad 330-15IKBR', 12600000, 'sp7.webp', '2022-11-24', '- CPU: Intel Core i3-7020U ( 2.3 GHz / 3MB / 2 nhân, 4 luồng )\r\n- Màn hình: 15.6\" ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4 2133MHz\r\n- Đồ họa: Intel HD Graphics 620 / AMD Radeon 530 2GB GDDR5\r\n- Lưu trữ: 2TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 2 cell 30 Wh Pin liền , khối lượng: 2.2 kg', 0, 2),
(21, 'Laptop Lenovo IdeaPad 5 15ITL05 82FG01H8VN', 13000000, 'sp8.webp', '2022-11-24', '- CPU: Intel Core i5-1135G7\r\n- Màn hình: 15.6\" IPS (1920 x 1080)\r\n- RAM: 8GB Onboard DDR4 3200MHz\r\n- Đồ họa: Onboard Intel Iris Xe Graphics\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 11 Home\r\n- Pin: 3 cell Pin liền\r\n- Khối lượng: 1.7kg', 0, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bill_customer` (`user_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `cart_bill` (`bill_id`),
  ADD KEY `cart_customer` (`user_id`),
  ADD KEY `cart_products` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_procucts` (`commodity_id`),
  ADD KEY `comment_customer` (`user_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `products_categories` (`type_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_customer` FOREIGN KEY (`user_id`) REFERENCES `customer` (`id_user`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_bill` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `cart_customer` FOREIGN KEY (`user_id`) REFERENCES `customer` (`id_user`),
  ADD CONSTRAINT `cart_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_customer` FOREIGN KEY (`user_id`) REFERENCES `customer` (`id_user`),
  ADD CONSTRAINT `comment_procucts` FOREIGN KEY (`commodity_id`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categories` FOREIGN KEY (`type_id`) REFERENCES `categories` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
