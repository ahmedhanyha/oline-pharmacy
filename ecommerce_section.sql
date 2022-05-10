-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 03:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_section`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `data` date DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `data`, `admin_id`, `image`) VALUES
(9, 'Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', '2021-12-15', 5, '9980128_blog-5.jpg'),
(10, 'Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem12', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', '2021-12-04', 5, '2990430_blog-6.jpg'),
(16, 'Nor again is there anyone who loves or pursues or desires', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', '2021-12-26', 5, '9938821_blog-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(225) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `price1` int(225) NOT NULL,
  `price2` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `discountc` int(50) NOT NULL,
  `status` int(3) NOT NULL,
  `category_id` int(225) NOT NULL,
  `product_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(2) NOT NULL,
  `total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `price1`, `price2`, `image`, `discountc`, `status`, `category_id`, `product_id`, `user_id`, `date`, `quantity`, `total_price`) VALUES
(14, 'Chicco Key Fit Infant Orion', 400, 450, '8345491_product_18.jpg', 0, 0, 21, 14, 16, '2021-12-31', 1, 450),
(15, 'Toaster Mini Works Sausages', 350, 400, '7558103_product_2_1.jpg', 15, 1, 24, 13, 16, '2021-12-31', 1, 340),
(21, 'Chicco Key Fit Infant Orion', 400, 450, '8345491_product_18.jpg', 0, 0, 21, 14, 16, '2022-01-01', 1, 450),
(22, 'Sri Sri Tattva Amlaze 500 Mg', 250, 270, '5406085_product_1.jpg', 15, 1, 22, 12, 16, '2022-01-01', 1, 230);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `activate` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`, `activate`, `admin_id`, `date`) VALUES
(20, 'shop', '8845520_cat-1_4.jpg', 0, 5, '0000-00-00'),
(21, 'pharmacy', '4730155_cat-3.jpg', 0, 5, '0000-00-00'),
(22, 'family care', '4668949_cat-3.jpg', 0, 5, '0000-00-00'),
(23, 'fitness', '4992734_cat-5.jpg', 0, 5, '0000-00-00'),
(24, 'personal care', '1004805_cat-2.jpg', 0, 5, '0000-00-00'),
(25, 'devices', '7120951_cat-6.jpg', 0, 5, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `price1` int(225) NOT NULL,
  `price2` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `discountc` int(50) NOT NULL,
  `status` int(2) NOT NULL,
  `category_id` int(225) NOT NULL,
  `product_id` int(225) NOT NULL,
  `user_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`id`, `product_name`, `price1`, `price2`, `image`, `discountc`, `status`, `category_id`, `product_id`, `user_id`) VALUES
(5, 'Sri Sri Tattva Amlaze 500 Mg', 250, 270, '5406085_product_1.jpg', 15, 1, 22, 12, 5),
(13, 'Toaster Mini Works Sausages', 350, 400, '7558103_product_2_1.jpg', 15, 1, 24, 13, 9),
(14, 'Chicco Key Fit Infant Orion', 400, 450, '8345491_product_18.jpg', 0, 0, 21, 14, 16),
(15, 'Sri Sri Tattva Amlaze 500 Mg', 250, 270, '5406085_product_1.jpg', 15, 1, 22, 12, 16),
(16, 'Sri Sri Tattva Amlaze 500 Mg', 250, 270, '5406085_product_1.jpg', 15, 1, 22, 12, 9),
(17, 'Sri Sri Tattva Amlaze 500 Mg', 250, 270, '5406085_product_1.jpg', 15, 1, 22, 12, 16),
(18, 'Toaster Mini Works Sausages', 350, 400, '7558103_product_2_1.jpg', 15, 1, 24, 13, 16);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(225) NOT NULL,
  `category_id` int(225) NOT NULL,
  `admin_id` int(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `price1` int(225) NOT NULL,
  `price2` int(225) NOT NULL,
  `quantity` int(10) NOT NULL,
  `status` int(4) NOT NULL,
  `discount` int(4) NOT NULL,
  `product_content` varchar(225) NOT NULL,
  `activate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `admin_id`, `image`, `product_name`, `date`, `price1`, `price2`, `quantity`, `status`, `discount`, `product_content`, `activate`) VALUES
(12, 22, 5, '5406085_product_1.jpg', 'Sri Sri Tattva Amlaze 500 Mg', '2021-12-29', 250, 270, 10, 1, 15, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.\r\n\r\n', 0),
(13, 24, 5, '7558103_product_2_1.jpg', 'Toaster Mini Works Sausages', '2021-12-29', 350, 400, 10, 1, 15, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.\r\n\r\n\r\n', 0),
(14, 21, 5, '8345491_product_18.jpg', 'Chicco Key Fit Infant Orion', '2021-12-31', 400, 450, 2, 0, 0, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `first_name`, `last_name`, `email`, `gender`, `age`, `phone`, `password`, `confirm_password`, `status`, `image`) VALUES
(5, 'mohamed', 'essam', 'mohamed@gmail.com', 'male', 20, '01062293101', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 1, '2380548_p1.jpg'),
(6, 'kenzi', 'essam', 'kenzi@gmail.com', 'female', 4, '0102293101', '1234567891', '123456789', 0, '2380548_p1.jpg'),
(7, 'aya', 'ibrahim', 'aya@gmail.com', NULL, 20, '01062293101', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 1, '1618678_mohammed-hassan-vJhOCHgYSNg-unsplash.jpg'),
(9, 'ajmed', 'essam', 'ahmed@gmail.com', NULL, 15, '01062293101', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 0, '51173_darshan-gajara-9EWCKZgC8hs-unsplash.jpg'),
(10, 'marwa', 'sayed', 'marwa@gmail.com', NULL, 24, '01062293101', '123456789', '123456789', 1, '9339051_mohammed-hassan-vJhOCHgYSNg-unsplash.jpg'),
(11, 'mahrouth', 'andallah', 'abdallah@gmail.com', NULL, 22, '01062293101', '123456789', '123456789', 0, '3597871_ahmed-ibrahim.jpeg'),
(12, 'Abdelhamed', 'Elsharkawy', 'Abdelhamed@gmail.com', NULL, 21, '01014048023', '123456789', '123456789', 1, '7775516_elshikh.jpg'),
(16, 'noury', 'mohamed', 'noura@gmail.com', NULL, 21, '01062293101', 'e10adc3949ba59abbe56e057f20f883e', '123456', 2, '8791722_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_ibfk_1` (`product_id`),
  ADD KEY `cart_ibfk_2` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `products_ibfk_2` (`admin_id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `registrations` (`id`);

--
-- Constraints for table `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
